<?php 
session_start(); 
if (isset($_SESSION['id'])) {
  header('Location: index.php');
  exit();
}
?>

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
define('RESTRICTED_ACCESS', true);
require_once 'conn.php';
if ($conn) {
  if (isset($_POST['submit'])) {
      $email_phone = $_POST["email_phone"];
      $password = md5($_POST["password"]);

      $sql = "SELECT * FROM account WHERE (email = '$email_phone' OR phone = '$email_phone') AND password = '$password'";
      $result = $conn->query($sql);

      if ($result) {
          if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
              $_SESSION['id'] = $user['id'];
              header('location: index.php');
          } else {
              echo "Email or password is incorrect";
          }
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }
}

?>

    <div class="container">
        <div class="wrapper">
          <div class="title"><span>Sign In</span></div>
          <form action="#" method="post">
            <div class="row">
              <i class="fas fa-user"></i>
              <input type="text" name="email_phone" placeholder="Email or Phone" required>
            </div>
            <div class="row">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="pass"><a href="#">Forgot password?</a></div>
            <div class="row button">
              <input type="submit" name="submit" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
          </form>
        </div>
      </div>
</body>
</html>