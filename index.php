<?php include("includes/db.php"); ?>
<?php include "includes/Lo_header.php"; ?>
<?php include "includes/Lo_nav.php"; ?>

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8  mb-5 mb-lg-0">

			<?php 
			$query = "SELECT * FROM properties order by post_id desc ";
                $result = mysqli_query($connection, $query);

                while($row = mysqli_fetch_array($result))
                {
                    $post_id            = $row['post_id'];
                    // $post_category_id   = $row['post_category_id'];
                    $post_title         = $row['post_title'];
                    $post_user        = $row['post_user'];
                    $post_date          = $row['post_date'];
                   // $post_image         = $row['post_image'];
                    $post_content       = substr($row['post_content'], 0, 120);
                    $post_tags          = $row['post_tags'];
                    $post_comment_count = $row['post_comment_count'];
                    $post_status        = $row['post_status'];

                    
            ?>


				<article class="row mb-5 ">

					<div class="col-12 mx-auto">
						<h3><a class="post-title " href="post-elements.html"><?php echo $post_title; ?></a></h3>
						<ul class="list-inline post-meta mb-4">
							<li class="list-inline-item"><i class="ti-user mr-2"></i>
								<a href="author.html"><?php echo $post_user; ?></a>
							</li>
							<li class="list-inline-item">Date : <?php echo $post_date; ?></li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1"><?php echo $post_tags; ?> </a> ,<a href="#!" class="ml-1"></a>
							</li>
						</ul>
						<!-- <p><?php echo $post_content; ?></p> -->
					 <!-- <a href="post-elements.html" class="btn btn-outline-primary">Continue Reading</a> -->
					</div>
					<div class="col-11 col-md-10 col-lg-12">
					<p><?php echo $post_content; ?></p>
						<div class="post-slider">

						<?php 

									$post_image = $row['post_image'];
									$photoArray = explode(",", $post_image);

									foreach ($photoArray as $photo) {
									// Assuming the images are stored in the "../images/" directory
									$imagePath = "images/" . $photo;

									echo "<a href='postHome.php?p_id=$post_id & p_user=$post_user'><img loading='lazy' src='$imagePath' class='img-fluid ' style='width: 100%; height: 400px;' alt='post-thumb'></a>";
									}
                

						?>
                 

						</div>
                 <hr>
                  <a class='btn btn-primary' href='postHome.php?p_id=<?php echo $post_id; ?> & p_user=<?php echo $post_user; ?>'>Message me <span class='glyphicon glyphicon-chevron-right'></span></a>
  
                  <hr>
					</div>
				</article>

				<?php 
				} ?>


			</div>
			<aside class="col-lg-4">
				<!-- @@include('blocks/sidebar.htm') -->
                   <!-- Search -->
   <div class="widget">
      <h5 class="widget-title"><span>Search</span></h5>
      <form action="searchHome.php" method="post" class="widget-search">
         <input id="search-query" name="search" type="search" placeholder="Type &amp; Hit Enter...">
         <button type="submit" name="submit"><i class="ti-search"></i>
         </button>
      </form>
   </div>
   <!-- categories -->

   <!-- tags -->
   <div class="widget">

   <h5 class="widget-title"><span>Tags</span></h5>
      <ul class="list-inline widget-list-inline">
         <li class="list-inline-item"><a href="#!">Home</a></li>
         <li class="list-inline-item"><a href="#!">Electronics</a></li>
         <li class="list-inline-item"><a href="#!">Vehicles</a></li>
         <li class="list-inline-item"><a href="#!">Dresses</a></li>
      </ul>
   </div>
   <!-- latest post -->
   <div class="widget">
      <h5 class="widget-title"><span>Latest Properties</span></h5>
      <!-- post-item -->

          


            <?php 
			$query = "SELECT * FROM properties order by post_id asc ";
                $result = mysqli_query($connection, $query);

                while($row = mysqli_fetch_array($result))
                {
                    $post_id            = $row['post_id'];
                    // $post_category_id   = $row['post_category_id'];
                    $post_title         = $row['post_title'];
                    $post_user        = $row['post_user'];
                    $post_date          = $row['post_date'];
                   // $post_image         = $row['post_image'];
                    $post_content       = substr($row['post_content'], 0, 120);
                    $post_tags          = $row['post_tags'];
                    $post_comment_count = $row['post_comment_count'];
                    $post_status        = $row['post_status'];

                    
            ?>
   <ul class="list-unstyled widget-list">
         <li class="media widget-post align-items-center">


<?php

$post_image = $row['post_image'];
$photoArray = explode(",", $post_image);

if (!empty($photoArray)) {
    $firstPhoto = $photoArray[0]; // Get the first photo from the array

    // Assuming the images are stored in the "../images/" directory
    $imagePath = "images/" . $firstPhoto;

    echo "<img loading='lazy' src='$imagePath'  class='mr-3' alt='post-thumb'>";
}

?>






             
               <div class="media-body">
               <h5 class="h6 mb-0"><a href=""><?php echo $post_tags; ?></a></h5>
              
            </div>
         </li>
      

                <?php }  ?>
                </ul>
   </div>
			</aside>
		</div>
	</div>
</section>

<!-- @@include('footer.htm') -->
<footer class="section-sm pb-0  border-default">
      <div class="container">
         </div>
         <div class="scroll-top ">
            <a href="javascript:void(0);" id="scrollTop"><i class="ti-angle-up"></i></a>
       
         </div>
				 <div class="text-center">
						<p class="content">&copy; 2023   <a href="#" target="_blank">JImma, Ethiopia</a></p>
				 </div>
				</div>
   </footer>


   <!-- JS Plugins -->
   <script src="plugins/jQuery/jquery.min.js"></script>
   <script src="plugins/bootstrap/bootstrap.min.js" async></script>
   <script src="plugins/slick/slick.min.js"></script>

   <!--  Script -->
   <script src="js/Sliderscript.js"></script>
</body>
</html>