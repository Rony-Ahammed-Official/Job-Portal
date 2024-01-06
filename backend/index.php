
<?php
 include_once 'sidebar.php';

if (!isset($_SESSION['id'])) {
  header('Location: signin.php');
  exit();
}
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


    <?php
    define('RESTRICTED_ACCESS', true);
    require_once 'conn.php';
    if ($conn) {
        $jobs = "SELECT * FROM company_data";
        $question = "SELECT * FROM quiz_questions";

        $result1 = $conn->query($jobs);
        $result2 = $conn->query($question);
    ?>


    <!-- End Top Bar -->
    <div class="card-boxes">
      <div class="box">
        <div class="right_side">
          <div class="numbers"><?= $result1->num_rows; ?></div>
          <div class="box_topic">Total Jobs</div>
        </div>
        <i class='bx bx-cart-alt'></i>
      </div>
      <div class="box">
        <div class="right_side">
          <div class="numbers"><?= $result2->num_rows; ?></div>
          <div class="box_topic">Total Questions</div>
        </div>
        <i class='bx bxs-cart-add'></i>
      </div>
      <?php } ?>
    </div>
    <!-- End Card Boxs -->
  </section>

  <script>
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

    // function changeActive(index) {
    //     const links = document.querySelectorAll('.sidebar ul li a');
    //     links.forEach((link, i) => {
    //         if (i === index) {
    //             link.classList.add('active');
    //         } else {
    //             link.classList.remove('active');
    //         }
    //     });
    // }
  </script>
</body>
</html>