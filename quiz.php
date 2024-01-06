<?php
    include_once 'header.php';
    // define('RESTRICTED_ACCESS', true);
    // require_once 'backend/conn.php';
?>
     <!-- Start Header Wrapper -->
     <section class="header">
     <?php include_once 'navbar.php' ?>
    </section>
     <!-- End Header Wrapper -->

     <!-- Start Question Section -->

     <section class="pt-60 quiz" style="padding-bottom: 60px;">
    <div class="form-section w-80 pt-60">
        <form action="quiz_action.php" method="post">
            <?php
            if ($conn) {
                $sql = "SELECT * FROM quiz_questions";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $id = 1;
                    while ($row = $result->fetch_assoc()) {
                        $questionName = 'answer' . $id;
            ?>
                        <div class="form-group">
                            <label for="<?= $questionName ?>"><?= $id . '. ' . $row['question']; ?></label>
                            <div class="options">
                                <input type="radio" name="<?= $questionName ?>" id="<?= $questionName ?>-1" value="<?= $row['option1']; ?>">
                                <label for="<?= $questionName ?>-1"><?= $row['option1']; ?></label>
                            </div>
                            <div class="options">
                                <input type="radio" name="<?= $questionName ?>" id="<?= $questionName ?>-2" value="<?= $row['option2']; ?>">
                                <label for="<?= $questionName ?>-2"><?= $row['option2']; ?></label>
                            </div>
                            <div class="options">
                                <input type="radio" name="<?= $questionName ?>" id="<?= $questionName ?>-3" value="<?= $row['option3']; ?>">
                                <label for="<?= $questionName ?>-3"><?= $row['option3']; ?></label>
                            </div>
                            <div class="options">
                                <input type="radio" name="<?= $questionName ?>" id="<?= $questionName ?>-4" value="<?= $row['option4']; ?>">
                                <label for="<?= $questionName ?>-4"><?= $row['option4']; ?></label>
                            </div>
                        </div>
            <?php
                        $id++;
                    }
                }
            }
            ?>
            <input type="submit" class="salary-btn quiz-form-submit" value="Submit">
        </form>
    </div>
</section>


     <?php
         include_once 'footer.php'
     ?>
     <!-- End Question Section -->
</body>
</html>