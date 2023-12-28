<?php ob_start(); ?>

<?php session_start();?>
<?php include("../includes/db.php"); ?>
<?php include("../admin/functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>blog post grid cards - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="../css/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/my_property.css" rel="stylesheet">
<link href="../fonts/font-awesome/css/all.min.css" rel="stylesheet">

</head>
<body>
<div class='container'>
  <div class='row mt-n5'> 

<?php //Showing all properties


if(isset($_SESSION['username']))
{
$session_username = $_SESSION['username'];
}
  $query = "SELECT * FROM properties WHERE post_user = '$session_username' ORDER BY post_id DESC";
  $result = mysqli_query($connection, $query);

  if(mysqli_num_rows($result) > 0) {
    //echo "your properties";

  }else {
    echo "you don't have properties posted!";
  }
  while ($row = mysqli_fetch_array($result)) 
  {
      $post_id = $row['post_id'];
      $post_category_id = $row['post_category_id'];
      $post_title = $row['post_title'];
      $post_author = $row['post_author'];
      $post_user = $row['post_user'];
      $post_date = $row['post_date'];
      $post_image = $row['post_image'];
      $post_content = $row['post_content'];
      $post_tags = $row['post_tags'];
      $post_comment_count = $row['post_comment_count'];
      $post_status = $row['post_status'];
      $post_views_count = $row['post_views_count'];
      ?>

  <?php

  echo "<div class='col-md-6 col-lg-4 mt-5 wow fadeInUp' data-wow-delay='.2s' style='visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;'>
  <div class='blog-grid'>
  <div class='blog-grid-img position-relative'><img alt='img' src='../images/sample.png'></div>
  <div class='blog-grid-text p-4'>
  <h3 class='h5 mb-3'><a href='#!'>Business tool for you mike</a></h3>
  <p class='display-30'>Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
  <div class='meta meta-style2'>
  <ul>
  <li><a href='#!'><i class='fas fa-calendar-alt'></i> 10 Jul, <script>document.write(new Date().getFullYear())</script>2022</a></li>
  <li><a href='#!'><i class='fas fa-user'></i> User</a></li>
  <li><a href='#'><i class='fas fa-comments'></i> 38</a></li>
  </ul>
  </div>
  </div>
  </div>
  </div> ";
  }

  ?>
   </div>
  </div>



<div class="container">
  <div class="row mt-n5">

  <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
  <div class="blog-grid">
  <div class="blog-grid-text p-4">
  <div class="meta ">
  <ul>
  <li><a href="#!"><i class="fas fa-calendar-alt"></i> 10 Jul, <script>document.write(new Date().getFullYear())</script>2022</a></li>
  <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
  <li><a href="#!"><i class="fas fa-comments"></i> 38</a></li>
  </ul>
  </div>
  <h3 class="h5 mb-3"><a href="#!">Business ginin tool for you mike</a></h3>
  <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
  </div>
  <div class="blog-grid-img position-relative"><img alt="img" src="../images/sample.png"></div>
  </div>
  </div>

  </div>
</div>



<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" /> -->

<div class="container">
  <div class="row mt-n5">

  <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
  <div class="blog-grid">
  <div class="blog-grid-img position-relative"><img alt="img" src="../images/sample.png"></div>
  <div class="blog-grid-text p-4">
  <h3 class="h5 mb-3"><a href="#!">Business tool for you mike</a></h3>
  <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
  <div class="meta meta-style2">
  <ul>
  <li><a href="#!"><i class="fas fa-calendar-alt"></i> 10 Jul, <script>document.write(new Date().getFullYear())</script>2022</a></li>
  <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
  <li><a href="#!"><i class="fas fa-comments"></i> 38</a></li>
  </ul>
  </div>
  </div>
  </div>
  </div>

  <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
  <div class="blog-grid">
  <div class="blog-grid-img position-relative"><img alt="img" src="../images/sample.png"></div>
  <div class="blog-grid-text p-4">
  <h3 class="h5 mb-3"><a href="#!">Growth your business strategy</a></h3>
  <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
  <div class="meta meta-style2">
  <ul>
  <li><a href="#!"><i class="fas fa-calendar-alt"></i> 25 Jun, <script>document.write(new Date().getFullYear())</script>2022</a></li>
  <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
  <li><a href="#!"><i class="fas fa-comments"></i> 68</a></li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
  <div class="blog-grid">
  <div class="blog-grid-img position-relative"><img alt="img" src="../images/sample.png"></div>
  <div class="blog-grid-text p-4">
  <h3 class="h5 mb-3"><a href="#!">Business people success master plan</a></h3>
  <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
  <div class="meta meta-style2">
  <ul>
  <li><a href="#!"><i class="fas fa-calendar-alt"></i> 16 May, <script>document.write(new Date().getFullYear())</script>2022</a></li>
  <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
  <li><a href="#!"><i class="fas fa-comments"></i> 58</a></li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
  <div class="blog-grid">
  <div class="blog-grid-img position-relative"><img alt="img" src="../images/sample.png"></div>
  <div class="blog-grid-text p-4">
  <h3 class="h5 mb-3"><a href="#!">Results professional report</a></h3>
  <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
  <div class="meta meta-style2">
  <ul>
  <li><a href="#!"><i class="fas fa-calendar-alt"></i> 02 Apr, <script>document.write(new Date().getFullYear())</script>2022</a></li>
  <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
  <li><a href="#!"><i class="fas fa-comments"></i> 38</a></li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
  <div class="blog-grid">
  <div class="blog-grid-img position-relative"><img alt="img" src="../images/sample.png"></div>
  <div class="blog-grid-text p-4">
  <h3 class="h5 mb-3"><a href="#!">Business strategy concept</a></h3>
  <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
  <div class="meta meta-style2">
  <ul>
  <li><a href="#!"><i class="fas fa-calendar-alt"></i> 25 Mar, <script>document.write(new Date().getFullYear())</script>2022</a></li>
  <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
  <li><a href="#!"><i class="fas fa-comments"></i> 68</a></li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
  <div class="blog-grid">
  <div class="blog-grid-img position-relative"><img alt="img" src="../images/sample.png"></div>
  <div class="blog-grid-text p-4">
  <h3 class="h5 mb-3"><a href="#!">Business people meeting</a></h3>
  <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
  <div class="meta meta-style2">
  <ul>
  <li><a href="#!"><i class="fas fa-calendar-alt"></i> 10 Feb, <script>document.write(new Date().getFullYear())</script>2022</a></li>
  <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
  <li><a href="#!"><i class="fas fa-comments"></i> 58</a></li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="row mt-6 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
  <div class="col-12">
  <div class="pagination text-small text-uppercase text-extra-dark-gray">
  <ul>
  <li><a href="#!"><i class="fas fa-long-arrow-alt-left me-1 d-none d-sm-inline-block"></i> Prev</a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#!">2</a></li>
  <li><a href="#!">3</a></li>
  <li><a href="#!">Next <i class="fas fa-long-arrow-alt-right ms-1 d-none d-sm-inline-block"></i></a></li>
  </ul>
  </div>
  </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>