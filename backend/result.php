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
</body>
</html>