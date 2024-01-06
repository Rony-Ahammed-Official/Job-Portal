<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Jobs | Apply for the job</title>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Start Slick slider  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- End Slick slider  -->
    <!-- Start Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- End Font Awesome -->
</head>
<body>

<?php 
session_start();

if (isset($_SESSION['id'])) {
  header('Location: index.php');
  exit();
}

define('RESTRICTED_ACCESS', true);
require_once 'conn.php';

if($conn){
 
  if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = md5($_POST["password"]);

    $sql = "INSERT INTO account (username, email, phone, password) VALUES ('$username', '$email', '$phone', '$password')";

    if ($conn->query($sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  }

 }
?>
    <div class="container">
        <div class="wrapper">
          <div class="title"><span>Sign Up</span></div>
          <form action="#" method="post">
            <div class="row">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Full Name" required>
            </div>
            <div class="row">
                <i class="fa-solid fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="row">
                <i class="fa-solid fa-phone"></i>
              <input type="number" name="phone" placeholder="Phone" required>
            </div>
            <div class="row">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="row button">
              <input type="submit" name="submit" value="Sign Up">
            </div>
            <div class="signup-link">Already have an account? <a href="#">Signin now</a></div>
          </form>
        </div>
      </div>
</body>
</html>