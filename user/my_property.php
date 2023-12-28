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
  <div class='blog-grid-text p-4'>
  <div class='meta '>
  <ul>
  <li><a href='#!'><i class='fas fa-calendar-alt'></i> $post_date</a></li>
  <li><a href='#!'><i class='fas fa-user'></i> $post_user</a></li>";

  // counting comments
  $query = "SELECT * FROM comments WHERE comment_post_id = $post_id";
                $send_comment_query = mysqli_query($connection, $query);
                
                $row = mysqli_fetch_array($send_comment_query);
                // $comment_id = $row['comment_id'];

                $count_comments = mysqli_num_rows($send_comment_query);   

  echo "<li><a href='#'><i class='fas fa-comments'></i> $count_comments</a></li>
  </ul>
  <h3 class='h5 mb-3'><a href='#!'>Business tool for you mike</a></h3>
  <p class='display-30'>$post_content</p>
  </div>
  <div class='blog-grid-img position-relative'><img  alt='img' src='../images/$post_image'></div>
  </div>
  </div>
  </div> ";
  }

  ?>
   </div>
   
  </div>

<!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html> -->