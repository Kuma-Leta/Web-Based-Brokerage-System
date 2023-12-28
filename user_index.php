
<?php include "user/user_nav.php" ?>

  <div class="mt-5">

    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">

          <!-- class row  -->
    
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="user-profile">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="user-photo m-b-30">
                            <img class="img-fluid" src="images/user-profile.jpg" alt="" />
                          </div>
                          <div class="user-work">
                            <h4>work</h4>
                            <div class="work-content">
                              <h3>It Solution </h3>
                              <p>123, South Mugda</p>
                              <p>New York, 1214</p>
                            </div>
                            <div class="work-content">
                              <h3>Unix</h3>
                              <p>123, South Mugda</p>
                              <p>New York, 1214</p>
                            </div>
                          </div>
 <!-- skilss -->
 <?php //retrieving user information
      if(isset($_SESSION['username']))
      {
          $session_username = $_SESSION['username'];

      $query = "SELECT * FROM users WHERE username = '$session_username'";
      $result = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_array($result)) 
      {
          $user_id            = $row['user_id'];
          $username           = $row['username'];
          $password           = $row['password'];
          $user_firstname     = $row['user_firstname'];
          $user_lastname      = $row['user_lastname'];
          $user_email         = $row['user_email'];
          $user_image         = $row['user_image'];
          $user_role          = $row['user_role'];
      }
      
      }
?>
                        </div>
                        <div class="col-lg-8">
                          <div class="user-profile-name"><?php echo $username; ?></div>
                          <div class="user-Location">
                            <i class="ti-location-pin"></i> New York, New York</div>
                          <div class="user-job-title"><?php echo $user_role; ?></div>
                          <div class="ratings">
                            <h4>Ratings</h4>
                            <div class="rating-star">
                              <span>8.9</span>
                              <i class="ti-star color-primary"></i>
                              <i class="ti-star color-primary"></i>
                              <i class="ti-star color-primary"></i>
                              <i class="ti-star color-primary"></i>
                              <i class="ti-star"></i>
                            </div>
                          </div>

                          <?php
                            // Displaying pages based on condition
                            if (isset($_GET['source'])) 
                            {
                                $source = $_GET['source'];
                            }
                            else
                            {
                                $source = "";
                            }

                            switch ($source) {
                                case 'add_post':
                                    include("user/user_add_post.php");
                                    break;
                                
                                 case 'edit_user':
                                     include("includes/edit_user.php");
                                     break;
                                
                                default:
                               //     include("user_index.php");
                                    break;
                            }
                        ?>

                          <div class="user-send-message">
                            <a href="user_index.php?source=add_post"><button  class="btn btn-primary btn-addon" type="button">
                              <i class="ti-email"></i>Add Property</button></a>
                          </div>
                          <div class="user-send-message">
                            <a href="user/my_property.php"><button  class="btn btn-primary btn-addon" type="button">
                              <i class="ti-email"></i>My Property</button></a>
                          </div>
                          <div class="custom-tab user-profile-tab">
                            <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active">
                                <a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a>
                              </li>
                            </ul>

                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="1">
                                <div class="contact-information">
                                  <h4>Contact information</h4>
                                  <div class="phone-content">
                                    <span class="contact-title">Phone:</span>
                                    <span class="phone-number">+8801629599859</span>
                                  </div>
                                  <div class="address-content">
                                    <span class="contact-title">Address:</span>
                                    <span class="mail-address">123, Rajar Goli, South Mugda</span>
                                  </div>
                                  <div class="email-content">
                                    <span class="contact-title">Email:</span>
                                    <span class="contact-email"><?php echo $user_email; ?></span>
                                  </div>
                                  <div class="skype-content">
                                    <span class="contact-title">Role:</span>
                                    <span class="contact-skype"><?php echo $user_role; ?></span>
                                  </div>
                                </div>
                                <div class="basic-information">
                                  <h4>Basic information</h4>
                                  <div class="birthday-content">
                                    <span class="contact-title">Birthday:</span>
                                    <span class="birth-date">January 31, 1990 </span>
                                  </div>
                                  <div class="gender-content">
                                    <span class="contact-title">Gender:</span>
                                    <span class="gender">Male</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /# row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div id="myposts" class="card-title">
                    <h4 > My posts </h4>

                  </div>
                  <div class="card-body">
                    <div class="table-responsive">


                      <!-- view user property table  -->
                      <?php include "user/user_property.php"; ?>
                      

                    </div>


                  </div>
                </div>
              </div>
              <!-- /# column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-title">
                    <h4>Recent Comments </h4>

                  </div>
                  <div class="recent-comment">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="images/avatar/1.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">john doe</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla. </p>
                        <div class="comment-action">
                          <div class="badge badge-success">Approved</div>
                          <span class="m-l-10">
                            <a href="#">
                              <i class="ti-check color-success"></i>
                            </a>
                            <a href="#">
                              <i class="ti-close color-danger"></i>
                            </a>
                            <a href="#">
                              <i class="fa fa-reply color-primary"></i>
                            </a>
                          </span>
                        </div>
                        <p class="comment-date">October 21, 2017</p>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="images/avatar/2.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Mr. John</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla. </p>
                        <div class="comment-action">
                          <div class="badge badge-warning">Pending</div>
                          <span class="m-l-10">
                            <a href="#">
                              <i class="ti-check color-success"></i>
                            </a>
                            <a href="#">
                              <i class="ti-close color-danger"></i>
                            </a>
                            <a href="#">
                              <i class="fa fa-reply color-primary"></i>
                            </a>
                          </span>
                        </div>
                        <p class="comment-date">October 21, 2017</p>
                      </div>


                    </div>
                    <div class="media no-border">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="images/avatar/3.jpg" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Mr. John</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla. </p>
                        <div class="comment-action">
                          <div class="badge badge-danger">Rejected</div>
                          <span class="m-l-10">
                            <a href="#">
                              <i class="ti-check color-success"></i>
                            </a>
                            <a href="#">
                              <i class="ti-close color-danger"></i>
                            </a>
                            <a href="#">
                              <i class="fa fa-reply color-primary"></i>
                            </a>
                          </span>
                        </div>
                        <div class="comment-date">October 21, 2017</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="footer">
                  <p>2018 © Admin Board. -
                    <a href="#">example.com</a>
                  </p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>



    <!-- Common -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/lib/scripts.js"></script>

</body>

</html>