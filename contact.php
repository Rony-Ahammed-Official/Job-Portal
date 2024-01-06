<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Contact Page</title>
</head>
<body>

<div class="container">
    <h2>Contact Us</h2>
    <?php
    define('RESTRICTED_ACCESS', true);
    require_once 'backend/conn.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Simple form validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "<p class='error'>All fields are required.</p>";
    } else {
        // Prepare and execute SQL query to insert data into 'contact' table
        $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<p class='success'>Thank you, $name! Your message has been sent and stored in the database.</p>";
        } else {
            echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    }
}

// Close the database connection
$conn->close();
?>









    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
