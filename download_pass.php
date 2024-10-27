<?php
// Alternative version of download_pass.php that uses a different approach
if (isset($_GET['pass'])) {
    $pass_id = $_GET['pass'];
    $base_path = dirname(__FILE__);
    $pdf_path = $base_path . DIRECTORY_SEPARATOR . 'passes' . DIRECTORY_SEPARATOR . $pass_id . '.pdf';
    
    if (file_exists($pdf_path)) {
        // Start output buffering
        ob_start();
?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Downloading Pass</title>
            <script>
            function downloadAndRedirect() {
                // Trigger download
                document.getElementById('downloadFrame').src = 'download_file.php?pass=<?php echo urlencode($pass_id); ?>';
                
                // Redirect after a short delay
                setTimeout(function() {
                    window.location.href = 'index.php?status=success';
                }, 1000);
            }
            </script>
        </head>
        <body onload="downloadAndRedirect()">
            <iframe id="downloadFrame" style="display:none"></iframe>
            <p>Your download will begin automatically. Please wait...</p>
        </body>
        </html>
<?php
        ob_end_flush();
        exit();
    } else {
        header("Location: index.php?status=pdf_not_found");
        exit();
    }
}
?>