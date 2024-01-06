<?php
    include_once 'sidebar.php';
?>
  <!-- End Sideber -->
  <section class="home_section">
    <div class="topbar">
      <div class="toggle">
        <i class='bx bx-menu' id="btn"></i>
      </div>
      <div class="search_wrapper">
        <label>
          <span>
            <i class='bx bx-search'></i>
          </span>
          <input type="search" placeholder="Search...">
        </label>
      </div>
      <div class="user_wrapper">
        <img src="assets/img/user.jpg" alt="">
      </div>
    </div>
    <!-- End Top Bar -->
  <div class="top-button">
    <button class="btn"  onclick="openModal()">Add quiz</button>
  </div>








<div class="overlay" id="overlay">
    <div class="modal" style="overflow-y: auto; height:90vh">
        <span class="close" id="closeModalBtn">&times;</span>
        <h2>Quiz Form</h2>
        <form id="myForm" action="process_quiz.php" method="post">
            <label for="total_questions">Total Number of Questions:</label>
            <input type="number" name="total_questions" id="total_questions" required><br>

            <div id="questionFields"></div>

            <button type="button" id="submitQuizBtn">Submit Quiz</button>
        </form>
    </div>
</div>
    <!-- End Card Boxs -->
    <div class="details">
      <div class="recent_project">
        <div class="card_header">
          <h2>Lastet Projects</h2>
        </div>
        <table>
          <thead>
            <tr>
              <td>Id</td>
              <td>Quiz Question</td>
              <td>Answer</td>
            </tr>
          </thead>
          <tbody>
            <?php
            define('RESTRICTED_ACCESS', true);
            require_once 'conn.php';
            if($conn){
              $sql = "SELECT * FROM quiz_questions";
              $result = $conn->query($sql);

              if($result->num_rows>0){
                $id = 1;
                while($row=$result->fetch_assoc()){
                
            ?>
            <tr>
              <td><?= $id++ ?></td>
              <td><?= $row['question'] ?></td>
              <td><?= $row['correct_option'] ?></td>
            </tr>
            <?php
            }
          }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <script src="https://cdn.tiny.cloud/1/zd0jzotmuflerizvufwjbhi159aezxofs8kv723asl0n9xb8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>





  <script>

        // Start AJAX
        $(document).ready(function() {
            $("#openModalBtn").click(function() {
                openModal();
            });

            $("#closeModalBtn").click(function() {
                closeModal();
            });

            $("#submitQuizBtn").click(function() {
                $("#myForm").submit();
            });

            $("#myForm").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "process_quiz.php",
                    data: $(this).serialize(),
                    success: function(response) {
                        $("#modalContent").html(response);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
        // End AJAX




        $("#total_questions").change(function() {
        var totalQuestions = $(this).val();
        var questionFields = "";

        for (var i = 1; i <= totalQuestions; i++) {
            questionFields += "<h3>Question " + i + ":</h3>";
            questionFields += "Question: <input type='text' name='question[]' required><br>";
            questionFields += "Option 1: <input type='text' name='option1[]' required><br>";
            questionFields += "Option 2: <input type='text' name='option2[]' required><br>";
            questionFields += "Option 3: <input type='text' name='option3[]' required><br>";
            questionFields += "Option 4: <input type='text' name='option4[]' required><br>";
            questionFields += "Correct Option: <input type='text' name='correct_option[]' required><br><br>";
        }

        $("#questionFields").html(questionFields);
    });












        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");

        closeBtn.addEventListener("click", () => {
          sidebar.classList.toggle("open");
          // call function
          changeBtn();
        });

        function changeBtn() {
          if(sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
          } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
          }
        }

        tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      });

            const overlay = document.getElementById('overlay');
        const form = document.getElementById('myForm');

        function openModal() {
            overlay.style.display = 'flex';
        }

        function closeModal() {
            overlay.style.display = 'none';
            form.reset();
        }
  </script>

</body>
</html>