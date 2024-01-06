<?php include_once 'header.php';

if (!isset($_SESSION['id']) && !isset($_SESSION['username'])) {
  echo '<script>alert("Please log in first.");</script>';
  echo '<script>setTimeout(function(){ window.location.href = "index.php"; }, 100);</script>';
  exit();
}


?>

            <!--== Start Header Wrapper ==-->
            <section class="header">
               <?php include_once 'navbar.php'; ?>
            </section>
             <!--== End Header Wrapper ==-->
<div class="find-jobs">
                <main class="main-content">
                    <!--== Start Page Header Area Wrapper ==-->
                    <div class="page-header-area fj-center " >
                      <div class="container pt--0 pb--0">
                        <div class="row">
                            <div class="page-header-content">
                                <h2 class="title">Job Details</h2>
                                  <ul class="breadcrumb justify-content-center">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-sep">//</li>
                                    <li>Job Details</li>
                                  </ul>
                            </div>
                      </div>
                    </div>
                    </div>
                    <!--== End Page Header Area Wrapper ==-->
                
                    <!--== Start Job Details Area Wrapper ==-->
                    <section class="job-details-area w-70">
                      <div class="container">
                            <div class="job-details-wrap">
                              <div class="job-details-info">
                                <div class="thumb">
                                  <img src="assets/img/job-logo/10.webp" width="130" height="130" alt="Image-HasTech">
                                </div>
                                <div class="content">
                                  <h4 class="title pt-10 pb-10">Senior Web Developer</h4>
                                  <h5 class="sub-title pb-10">Obelus Concepts Ltd.</h5>
                                  <ul class="info-list">
                                    <li class="pb-5"><i class="icofont-location-pin"></i> New York, USA</li>
                                    <li><i class="icofont-phone"></i> +88 456 796 457</li>
                                  </ul>
                                </div>
                              </div>
                              <div class="job-details-price">
                                <h4 class="title pt-10 pb-30">$5000 <span>/monthly</span></h4>
                                <button type="button" id="startJobButton" class="salary-btn">Apply Now</button>
                              </div>
                        </div>
                        <div class="row description">
                            <div class="job-details-item">
                              <div class="content">
                                <h2 class="pb-10">Description</h2>
                                <p class="desc">It is a long established fact that a reader will be distracted the readable content of page when looking atits layout. The point of using is that has more-or-less normal a distribution of letters, as opposed to usin content publishing packages web page editors. It is a long established fact that a reader will be distracts by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that has look like readable publishing packages and web page editors.</p>
                                <p class="desc">It is a long established fact that a reader will be distracted the readable content of a page when looking atits layout. The point of using is that has more-or-less normal a distribution of letters, as opposed to usin content publishing packages web page editors.</p>
                              </div>
                              <div class="content">
                                <h2 class="pt-10 pb-10">Responsibilities</h2>
                                <ul class="job-details-list desc">
                                  <li><i class="fa-solid fa-check"></i> Developing custom themes (WordPress.org & ThemeForest Standards)</li>
                                  <li><i class="fa-solid fa-check"></i> Creating reactive website designs</li>
                                  <li><i class="fa-solid fa-check"></i> Working under strict deadlines</li>
                                  <li><i class="fa-solid fa-check"></i> Develop page speed optimized themes</li>
                                </ul>
                              </div>
                              <div class="content">
                                <h2 class="pt-10 pb-10">Requirements</h2>
                                <ul class="job-details-list desc">
                                  <li><i class="fa-solid fa-check"></i> Having approved theme/s on ThemeForest will be given high preference.</li>
                                  <li><i class="fa-solid fa-check"></i> Strong knowledge of WordPress Theme Standards</li>
                                  <li><i class="fa-solid fa-check"></i> Ability to convert HTML templates into fully functional WordPress themes.</li>
                                  <li><i class="fa-solid fa-check"></i> Good knowledge in O OP PHP and front-end stuffs like HTML, CSS, JS, jQuery, etc.</li>
                                  <li><i class="fa-solid fa-check"></i> Moderate knowledge in WordPress Core APIs like options, metadata, REST, hooks, settings, etc.</li>
                                  <li><i class="fa-solid fa-check"></i> Ability to debug and fix bugs arising from other developer’s code.</li>
                                  <li><i class="fa-solid fa-check"></i> Sense of humor</li>
                                  <li><i class="fa-solid fa-check"></i> Hard worker and passionate – we are growing super fast</li>
                                </ul>
                              </div>
                              <div class="content">
                                <h2 class="pt-10 pb-10">Educational Requirements</h2>
                                <p class="desc">It doesn’t matter where you went to college or what your CGPA was as long as you are smart, passionate, ready to work hard, and have fun.</p>
                              </div>
                              <div class="content">
                                <h2 class="pt-10 pb-10">Working Hours</h2>
                                <ul class="job-details-list desc">
                                  <li><i class="fa-solid fa-check"></i> 8:00 AM - 5:00 PM</li>
                                  <li><i class="fa-solid fa-check"></i> Weekly: 5 days.</li>
                                  <li><i class="fa-solid fa-check"></i> Weekend: Saturday, Sunday.</li>
                                </ul>
                              </div>
                              <div class="content">
                                <h2 class="pt-10 pb-10">Benefits</h2>
                                <ul class="job-details-list desc">
                                  <li><i class="fa-solid fa-check"></i> Work in a flat organization where your voice is always heard.</li>
                                  <li><i class="fa-solid fa-check"></i> Provident fund.</li>
                                  <li><i class="fa-solid fa-check"></i> Gratuity.</li>
                                  <li><i class="fa-solid fa-check"></i> Medical Fund.</li>
                                  <li><i class="fa-solid fa-check"></i> Having Corporate deals with multiple Hospitals.</li>
                                  <li><i class="fa-solid fa-check"></i> Performance bonus.</li>
                                  <li><i class="fa-solid fa-check"></i> Increment: Yearly.</li>
                                  <li><i class="fa-solid fa-check"></i> Festival Bonus: 2 (Yearly)</li>
                                  <li><i class="fa-solid fa-check"></i> Lunch Facilities: Full Subsidize.</li>
                                  <li><i class="fa-solid fa-check"></i> Unlimited Tea, Coffee & Snacks.</li>
                                  <li><i class="fa-solid fa-check"></i> Annual tour.</li>
                                  <li><i class="fa-solid fa-check"></i> Team Outing.</li>
                                  <li><i class="fa-solid fa-check"></i> Marriage Bonus and Marriage Leave.</li>
                                  <li><i class="fa-solid fa-check"></i> Paternity and Maternity Leave.</li>
                                  <li><i class="fa-solid fa-check"></i> Yearly Family Tour.</li>
                                  <li><i class="fa-solid fa-check"></i> Knowledge Sharing Session.</li>
                                  <li><i class="fa-solid fa-check"></i> Leave Encashment Facilities.</li>
                                  <li><i class="fa-solid fa-check"></i> Work with a vibrant team and amazing products.</li>
                                  <li><i class="fa-solid fa-check"></i> Table Tennis(Ping Pong) :table_tennis_paddle_and_ball:</li>
                                  <li><i class="fa-solid fa-check"></i> Training and learning materials to improve skills.</li>
                                  <li><i class="fa-solid fa-check"></i> Last but not the least, WorldClass Work Environment.</li>
                                </ul>
                              </div>
                              <div class="content">
                                <h2 class="pt-10 pb-10">Statement</h2>
                                <p class="desc">Finate is committed to creating the happiest company working for and is proud to provide equal opportunity to all. All the qualified applicants will receive consideration for employment without regard to race, color, ancestry, religion, sex,  sexual orientation, age, citizenship, marital status, disability, gender identity, or any other basis protected by federal, state, or local law.</p>
                                <a class="btn-apply-now" href="contact.html">Apply Now <i class="icofont-long-arrow-right"></i></a>
                              </div>
                            </div>               
                            <div class="job-sidebar">
                              <div class="widget-item">
                                <div class="widget-title">
                                  <h2 class="">Summery</h2>
                                </div>
                                <div class="pt-40 summery-info">
                                  <table class="table">
                                    <tbody>
                                      <tr>
                                        <td class="table-name">Job Type</td>
                                        <td class="dotted">:</td>
                                        <td data-text-color="#03a84e">Full-time</td>
                                      </tr>
                                      <tr>
                                        <td class="table-name">Category</td>
                                        <td class="dotted">:</td>
                                        <td>Development</td>
                                      </tr>
                                      <tr>
                                        <td class="table-name">Posted</td>
                                        <td class="dotted">:</td>
                                        <td>20 June, 2022</td>
                                      </tr>
                                      <tr>
                                        <td class="table-name">Category</td>
                                        <td class="dotted">:</td>
                                        <td>Development</td>
                                      </tr>
                                      <tr>
                                        <td class="table-name">Salary</td>
                                        <td class="dotted">:</td>
                                        <td>$5000 / Monthly</td>
                                      </tr>
                                      <tr>
                                        <td class="table-name">Experience</td>
                                        <td class="dotted">:</td>
                                        <td>05 Years</td>
                                      </tr>
                                      <tr>
                                        <td class="table-name">Gender</td>
                                        <td class="dotted">:</td>
                                        <td>Male or Female</td>
                                      </tr>
                                      <tr>
                                        <td class="table-name">Qualification</td>
                                        <td class="dotted">:</td>
                                        <td>BSC, MSC</td>
                                      </tr>
                                      <tr>
                                        <td class="table-name">Level</td>
                                        <td class="dotted">:</td>
                                        <td>Senior</td>
                                      </tr>
                                      <tr>
                                        <td class="table-name">Applied</td>
                                        <td class="dotted">:</td>
                                        <td>26 Applicant</td>
                                      </tr>
                                      <tr>
                                        <td class="table-name">Application End</td>
                                        <td class="dotted">:</td>
                                        <td data-text-color="#ff6000">20 November, 2022</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <!--== End Job Details Area Wrapper ==-->

                    <div class="modal" id="confirmationModal">
                      <div class="modal-content">
                          <h5 class="modal-heading">Please read the following terms to apply</h5>
                          <ul>
                            <li class="pt-20"><i class="fa-solid fa-check"></i>Prepare your custom CV</li>
                            <li><i class="fa-solid fa-check"></i>Prepare with relevent skill question</li>
                            <li><i class="fa-solid fa-check"></i>At least 80% marks is required</li>
                            <li><i class="fa-solid fa-check"></i>You can perform each test one time in a week</li>
                            <li class="pb-30"><i class="fa-solid fa-check"></i>Don't use multiple account. </li>
                          </ul>

                          <p class="pb-30">NB: After Pressing 'APPLY' your question will appear.</p>
                          <button class="salary-btn" id="confirmStartButton"><a href="quiz.php">Apply</a></button>
                          <button class="salary-btn" id="CancelStartButton">Cancel</button>
                      </div>
                  </div>

                  </main>
                  <!--== Start Aside Menu ==-->
                  <!--== End Aside Menu ==-->
</div>
<?php
    include_once 'footer.php'
?>
<script src="assets/js/modal.js"></script>
</body>
</html>