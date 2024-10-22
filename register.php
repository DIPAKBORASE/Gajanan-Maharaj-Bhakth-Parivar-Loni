<?php
// Include database connection
include_once 'C:\\xampp\\htdocs\\Shree_Gajanan_Maharaj_Seva_Sansthan_Loni\\dbservecon.php';
// C:\xampp\htdocs\Shree_Gajanan_Maharaj_Seva_Sansthan_Loni\dbservecon.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form inputs
    $first_name = $_POST['pet_name'];
    $last_name = $_POST['pet_breed'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    // Handling the image (base64)
    $file_path = null;  // Initialize file path
    if (!empty($_POST['captured_image'])) {
        $image_data = $_POST['captured_image'];

        // Decode the base64 string
        $image_parts = explode(";base64,", $image_data);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        // Generate a unique file name and save it
        $image_name = uniqid() . '.png';
        $file_path = 'uploads/' . $image_name;
        file_put_contents($file_path, $image_base64);
    }

    // Check if a file is uploaded from the file input field
    if (isset($_FILES['upload_image']) && $_FILES['upload_image']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['upload_image']['name'];
        $file_tmp = $_FILES['upload_image']['tmp_name'];

        // Move the uploaded file to the desired directory
        $file_path = 'uploads/' . $file_name;
        move_uploaded_file($file_tmp, $file_path);
    }

    // Prepare SQL query to insert data into the database
    $query = "INSERT INTO users (first_name, last_name, email, phone_number, address, image_path) 
              VALUES (:first_name, :last_name, :email, :phone_number, :address, :image_path)";

    // Prepare statement and execute using PDO
    try {
        $stmt = $userdata->prepare($query);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':image_path', $file_path);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error in execution.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
