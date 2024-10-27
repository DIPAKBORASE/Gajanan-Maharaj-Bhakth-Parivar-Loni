<?php
// download_file.php - Separate file to handle the actual download
if (isset($_GET['pass'])) {
    $pass_id = $_GET['pass'];
    $base_path = dirname(__FILE__);
    $pdf_path = $base_path . DIRECTORY_SEPARATOR . 'passes' . DIRECTORY_SEPARATOR . $pass_id . '.pdf';
    
    if (file_exists($pdf_path)) {
        // Clear any existing output
        ob_clean();
        
        // Set headers for PDF download
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $pass_id . '.pdf"');
        header('Content-Length: ' . filesize($pdf_path));
        header('Cache-Control: private, no-cache, no-store, must-revalidate');
        header('Pragma: no-cache');
        header('Expires: 0');
        
        // Output file
        readfile($pdf_path);
        exit();
    }
}
?>