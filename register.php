<?php
// Include database connection
include_once 'C:\\xampp\\htdocs\\Shree_Gajanan_Maharaj_Seva_Sansthan_Loni\\dbservecon.php';
require_once('./tcpdf/tcpdf.php');

// Define absolute paths
$base_path = dirname(__FILE__); 
$passes_dir = $base_path . DIRECTORY_SEPARATOR . 'passes';
$uploads_dir = $base_path . DIRECTORY_SEPARATOR . 'uploads';

// Create directories if they don't exist
if (!file_exists($passes_dir)) {
    mkdir($passes_dir, 0777, true);
}
if (!file_exists($uploads_dir)) {
    mkdir($uploads_dir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form inputs
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    
    // Generate a unique pass ID
    $pass_id = 'PASS-' . strtoupper(uniqid());

    // Handle image upload
    $file_path = null;
    if (!empty($_POST['captured_image'])) {
        $image_data = $_POST['captured_image'];
        $image_parts = explode(";base64,", $image_data);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        
        $image_name = uniqid() . '.png';
        $file_path = $uploads_dir . DIRECTORY_SEPARATOR . $image_name;
        file_put_contents($file_path, $image_base64);
    }

    if (isset($_FILES['upload_image']) && $_FILES['upload_image']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['upload_image']['name'];
        $file_tmp = $_FILES['upload_image']['tmp_name'];
        $file_path = $uploads_dir . DIRECTORY_SEPARATOR . $file_name;
        move_uploaded_file($file_tmp, $file_path);
    }

    // Prepare SQL query
    $query = "INSERT INTO users (first_name, last_name, email, phone_number, address, image_path, pass_id) 
              VALUES (:first_name, :last_name, :email, :phone_number, :address, :image_path, :pass_id)";

    try {
        $stmt = $userdata->prepare($query);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':image_path', $file_path);
        $stmt->bindParam(':pass_id', $pass_id);

        if ($stmt->execute()) {
            try {
                // Generate PDF pass
                $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

                // Set document information
                $pdf->SetCreator('Shree Gajanan Maharaj Seva Sansthan');
                $pdf->SetAuthor('Shree Gajanan Maharaj Seva Sansthan');
                $pdf->SetTitle('Member Pass');

                // Remove default header/footer
                $pdf->setPrintHeader(false);
                $pdf->setPrintFooter(false);

                // Add a page
                $pdf->AddPage();

                // Set font
                $pdf->SetFont('helvetica', '', 12);

                // Add content to the PDF
                $html = <<<EOD
                <h1 style="text-align:center;">Shree Gajanan Maharaj Seva Sansthan</h1>
                <h2 style="text-align:center;">Member Pass</h2>
                
                <table style="width:100%; margin-top:20px;">
                    <tr>
                        <td><strong>Pass ID:</strong></td>
                        <td>$pass_id</td>
                    </tr>
                    <tr>
                        <td><strong>Name:</strong></td>
                        <td>$first_name $last_name</td>
                    </tr>
                    <tr>
                        <td><strong>Email:</strong></td>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <td><strong>Phone:</strong></td>
                        <td>$phone_number</td>
                    </tr>
                    <tr>
                        <td><strong>Address:</strong></td>
                        <td>$address</td>
                    </tr>
                </table>
                EOD;

                // Add member photo if available
                if ($file_path && file_exists($file_path)) {
                    $pdf->Image($file_path, 150, 60, 40);
                }

                // Write HTML content
                $pdf->writeHTML($html, true, false, true, false, '');

                // Generate QR code with pass ID
                $style = array(
                    'border' => 2,
                    'vpadding' => 'auto',
                    'hpadding' => 'auto',
                    'fgcolor' => array(0, 0, 0),
                    'bgcolor' => false
                );
                $pdf->write2DBarcode($pass_id, 'QRCODE,L', 20, 180, 50, 50, $style);

                // Save PDF to file using absolute path
                $pdf_file = $passes_dir . DIRECTORY_SEPARATOR . $pass_id . '.pdf';
                
                // Output the PDF and catch any errors
                try {
                    $pdf->Output($pdf_file, 'F');
                    
                    // Check if file was created successfully
                    if (file_exists($pdf_file)) {
                        header("Location: download_pass.php?pass=" . urlencode($pass_id));
                        exit();
                    } else {
                        throw new Exception("PDF file was not created");
                    }
                } catch (Exception $e) {
                    error_log("PDF Generation Error: " . $e->getMessage());
                    header("Location: index.php?status=pdf_error");
                    exit();
                }
                
            } catch (Exception $e) {
                error_log("PDF Creation Error: " . $e->getMessage());
                header("Location: index.php?status=pdf_error");
                exit();
            }
        } else {
            header("Location: index.php?status=false");
            exit();
        }
    } catch (PDOException $e) {
        error_log("Database Error: " . $e->getMessage());
        header("Location: index.php?status=db_error");
        exit();
    } catch (Exception $e) {
        error_log("General Error: " . $e->getMessage());
        header("Location: index.php?status=error");
        exit();
    }
}
?>