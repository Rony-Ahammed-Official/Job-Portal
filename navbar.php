<?php 
    define('RESTRICTED_ACCESS', true);
    require_once 'backend/conn.php';
    // session_start();

    if ($conn) {
    if (isset($_POST['submit'])) {
        $email_phone = $_POST["username"];
        $password = md5($_POST["password"]);

        $sql = "SELECT * FROM account WHERE (email = '$email_phone' OR phone = '$email_phone') AND password = '$password'";
        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
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

<header>
        <nav class="">
            <ul class="menu w-80">
              <li class="logo"><a href="#">Seek Job</a></li>
              <li class="item"><a href="#">Home</a></li>
              <li class="item"><a href="#">About</a></li>
              <li class="item"><a href="#">Services</a></li>
              <li class="item"><a href="#">Features</a></li>
              <li class="item"><a href="#">Blog</a></li>
              <li class="item"><a href="contact.php">Contact</a>
              </li>
              <?php 
              if (!isset($_SESSION['id']) && !isset($_SESSION['username'])) {
              ?>
              <li class="item button"><a href="#" onclick="openLoginModal()">Log In</a></li>
              <li class="item button secondary"><a href="#" onclick="openRegistrationModal()">Sign Up</a></li>
              <?php }else{?>
                <li class="item" style="color: #fff; border:0.5px solid #fff; border-radius:5px;">Hello <?= $_SESSION['username']; ?></li>
                <li class="item button"><a href="logout.php">Log out</a></li>
                <?php } ?>
              <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
            </ul>
          </nav>
    </header> 