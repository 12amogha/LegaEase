<?php
if(isset($_GET['file'])) {
    $filePath = $_GET['file'];

    // Check if the file exists
    if(file_exists($filePath)) {
        // Attempt to delete the file
        if(unlink($filePath)) {
            echo "<script>alert('The file  has been deleted.'); window.location.href = 'page.php';</script>";

        } else {
            echo "Error: Unable to delete the file.";
        }
    } else {
        echo "Error: File not found.";
    }
} else {
    echo "Error: File parameter is missing.";
}
?>
