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
    <button class="btn" onclick="openModal()">Add jobs</button>
  </div>
  




  <div class="overlay" id="overlay">
    <div class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Modal Title</h2>
        <form id="myForm" method="POST" action="company-data-submit.php" enctype="multipart/form-data">
            <label for="Comname">Company Name:</label>
            <input type="text" id="Comname" name="comName" required>

            <label for="ComLocation">Company Location:</label>
            <input type="text" id="ComLocation" name="comLocation" required>

            <label for="ComLogo">Company Logo:</label>
            <input type="file" id="ComLogo" name="comLogo" required>

            <label for="JobTitle">Job Title:</label>
            <input type="text" id="JobTitle" name="jobTitle" required>


            <label for="WorkType">Work Type:</label>
            <input type="text" id="WorkType" name="workTime" required>

            <label for="JobSubtitle">Job Subtitle:</label>
            <input type="text" id="JobSubtitle" name="jobType" required>

            <label for="Salary">Salary:</label>
            <input type="text" id="Salary" name="jobSalary" required>
            
            <label for="description">Description:</label>
            <!-- <textarea id="description" name="descriptionTiny" required></textarea> -->
            <textarea name="descriptionTiny">Hello, World!</textarea>


            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</div>


<?php
define('RESTRICTED_ACCESS', true);
require_once 'conn.php';
if ($conn) {
    $sql = "SELECT comName, comLocation, jobSalary, comLogo FROM company_data";
    
    // Execute the query
    $result = $conn->query($sql);

    if ($result) {
        // Check if there are rows in the result set
        if ($result->num_rows > 0) {
            echo '<div class="details">
                    <div class="recent_project">
                      <div class="card_header">
                        <h2>Lastet Projects</h2>
                      </div>
                      <table>
                        <thead>
                          <tr>
                            <td>Id</td>
                            <td>Company Name</td>
                            <td>Company Location</td>
                            <td>Salary</td>
                            <td>Logo</td>
                          </tr>
                        </thead>
                        <tbody>';
            
            // Output data of each row
            $id = 1;
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td>' . $id++ . '</td>
                        <td>' . $row["comName"] . '</td>
                        <td>' . $row["comLocation"] . '</td>
                        <td>' . $row["jobSalary"] . '</td>
                        <td>
                          <span class="img_group">
                            <img src="uploads/' . $row["comLogo"] . '" alt="Company Logo">
                          </span>
                        </td>
                      </tr>';
            }

            echo '</tbody>
                  </table>
                </div>
              </div>';
        } else {
            echo "No records found";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

  </section>



<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>

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