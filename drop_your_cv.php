<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted with a file
    if (isset($_FILES['pdf_file'])) {
        $uploadDir = ''; // Change this to your desired upload directory
        $allowedFileType = 'application/pdf';

        $uploadedFile = $_FILES['pdf_file'];
        $fileName = $uploadedFile['name'];
        $fileType = $uploadedFile['type'];
        $fileTmpName = $uploadedFile['tmp_name'];
        $fileError = $uploadedFile['error'];

        // Check if the file type is PDF
        if ($fileType == $allowedFileType) {
            // Generate a unique filename to avoid overwriting
            $uniqueFilename = uniqid('cv_') . '.pdf';
            $destination = $uploadDir . $uniqueFilename;

            // Move the uploaded file to the destination directory
            if (move_uploaded_file($fileTmpName, $destination)) {
                // File upload successful
                echo "<script>alert('Your CV was successfully uploaded. We will review your application. Thank you!');</script>";
                echo '<script>setTimeout(function(){ window.location.href = "index.php"; }, 1000);</script>';
            } else {
                // File upload failed
                echo "<script>alert('Sorry, there was an error uploading your CV. Please try again.');</script>";
            }
        } else {
            // Invalid file type
            echo "<script>alert('Invalid file type. Please upload a PDF file.');</script>";
        }
    }
}
?>

<?php include_once 'header.php'; ?>

<body>
    <h1>Upload Your CV</h1>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="pdf_file">Choose a PDF file:</label>
        <input type="file" name="pdf_file" accept=".pdf" required>
        <br>
        <input type="submit" value="Upload">
    </form>
</body>

<?php include_once 'footer.php'; ?>
