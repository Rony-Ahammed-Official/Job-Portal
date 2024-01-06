<?php
define('RESTRICTED_ACCESS', true);
require_once 'backend/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($conn) {
        $sql = "SELECT * FROM quiz_questions";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $totalQuestions = $result->num_rows;
            $id = 1;
            $userSelectedAnswers = array();
            $matchedAnswers = 0;

            while ($row = $result->fetch_assoc()) {
                $questionName = 'answer' . $id;

                if (isset($_POST[$questionName]) && !empty($_POST[$questionName])) {
                    $selectedAnswer = $_POST[$questionName];
                    $userSelectedAnswers[$id] = $selectedAnswer;


                    $selectedAnswer = strtolower(str_replace(' ', '', $selectedAnswer));
                    $correctAnswer = strtolower(str_replace(' ', '', $row['correct_option']));


                    if ($selectedAnswer == $correctAnswer) {
                        $matchedAnswers++;
                    }
                }

                $id++;
            }


            $percentage = ($matchedAnswers / $totalQuestions) * 100;

            echo "Number of Matched Answers: $matchedAnswers<br>";
            echo "Percentage: $percentage%<br>";


            $eligible = ($percentage >= 60);

            if ($eligible) {
                echo '<script>alert("Congratulations! You are eligible to apply.");</script>';
                echo '<script>setTimeout(function(){ window.location.href = "drop_your_cv.php"; }, 1000);</script>';
            } else {
                echo "Sorry, you are not eligible to apply. Better luck next time.";
            }
        }
    }
}
?>
