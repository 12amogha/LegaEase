<?php
$targetDir = "uploads/"; // Directory where uploaded files will be stored
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]); // Get the path of the uploaded file
$uploadOk = 1; // Flag to track if file upload is successful

// Check if file already exists
if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size (optional)
if ($_FILES["fileToUpload"]["size"] > 500000) { // Adjust file size limit as needed
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow only certain file formats (optional)
$allowedFormats = array("pdf", "doc", "docx"); // List of allowed file extensions
$fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Get the file extension
if (!in_array($fileExtension, $allowedFormats)) {
    echo "Sorry, only PDF, DOC, and DOCX files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else { // If everything is ok, try to upload file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "<script>alert('The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.'); window.location.href = 'page.php';</script>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
