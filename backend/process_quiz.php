
<?php
define('RESTRICTED_ACCESS', true);
require_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totalQuestions = $_POST['total_questions'];

    for ($i = 0; $i < $totalQuestions; $i++) {
        $question = $_POST['question'][$i];
        $option1 = $_POST['option1'][$i];
        $option2 = $_POST['option2'][$i];
        $option3 = $_POST['option3'][$i];
        $option4 = $_POST['option4'][$i];
        $correctOption = $_POST['correct_option'][$i];

        $sql = "INSERT INTO quiz_questions (question, option1, option2, option3, option4, correct_option)
                VALUES ('$question', '$option1', '$option2', '$option3', '$option4', '$correctOption')";

        if (mysqli_query($conn, $sql)) {
            $response = "Record inserted successfully.<br>";
        } else {
            $response = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    echo $response;
}
?>
