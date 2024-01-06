<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('Location: signin.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Admin & Dashboard</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- box icon -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdn.tiny.cloud/1/zd0jzotmuflerizvufwjbhi159aezxofs8kv723asl0n9xb8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
  <div class="sidebar">
    <div class="logo_details">
      <i class='bx bx-code-alt'></i>
      <div class="logo_name">
        End Dev
      </div>
    </div>
    <ul>
      <li>
        <a href="index.php" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">
            Dashboard
          </span>
        </a>
      </li>
      <li class=>
        <a href="Jobs.php" class="">
          <i class='bx bx-user'></i>
          <span class="links_name">
            Jobs
          </span>
        </a>
        
      </li>
      <li>
        <a href="quiz.php" class="">
          <i class='bx bxs-truck'></i>
          <span class="links_name">
            Quiz
          </span>
        </a>
      </li>
      
      <li class="login">
        <a href="logout.php">
          <span class="links_name login_out">
            Log Out
          </span>
          <i class='bx bx-log-out' id="log_out"></i>
        </a>
      </li>
    </ul>
  </div>