
<?php
define('RESTRICTED_ACCESS', true);
require_once 'conn.php';

if ($conn) {
    if (isset($_POST["submit"])) {
        $comName = $_POST["comName"];
        $comLocation = $_POST["comLocation"];
        $jobTitle = $_POST["jobTitle"];
        $workTime = $_POST["workTime"];
        $jobType = $_POST["jobType"];
        $jobSalary = $_POST["jobSalary"];
        $description = $_POST["descriptionTiny"];

        if (isset($_FILES["comLogo"]) && $_FILES["comLogo"]["error"] == 0) {
            $uploadDir = 'uploads/';
            $comLogo = $_FILES["comLogo"]["name"];
            $targetFilePath = $uploadDir . $comLogo;
            move_uploaded_file($_FILES["comLogo"]["tmp_name"], $targetFilePath);
        } else {
            $comLogo = "default_logo.png";
        }
        $sql = "INSERT INTO `company_data` (`comName`, `comLocation`, `comLogo`, `jobTitle`, `workTime`, `jobType`, `jobSalary`, `description`, `created_at`) VALUES ('$comName', '$comLocation', '$comLogo', '$jobTitle', '$workTime', '$jobType', '$jobSalary', '$description', NOW())";

        if ($conn->query($sql) === TRUE) {
            echo "Record added successfully";
            header("Location: Jobs.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>