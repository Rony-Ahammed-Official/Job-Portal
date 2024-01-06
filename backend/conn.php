
<?php

if (!defined('RESTRICTED_ACCESS')) {
    header('Location: signin.php'); // Change this to the actual path of your home page
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job-portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>