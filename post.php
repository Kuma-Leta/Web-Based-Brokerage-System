<?php include("includes/db.php"); ?>
<?php include("includes/header.php"); ?>

    <!-- Navigation -->
    <?php include("includes/navigation.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

            <?php 

                if(isset($_GET['p_id']))
                {
                   $the_get_post_id = $_GET['p_id'];

                   $view_query = "UPDATE properties set post_views_count = post_views_count + 1 WHERE post_id = $the_get_post_id";
                   $send_query = mysqli_query($connection, $view_query);

                   if(!$send_query)
                   {
                        die("Query failed " . mysqli_error($connection));
                   }

                   if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'Admin')
                   {
                        $query = "SELECT * FROM properties WHERE post_id = $the_get_post_id";
                   }
                   else
                   {
                    $query = "SELECT * FROM properties WHERE post_id = $the_get_post_id AND post_status = 'Available'";
                   }
                
            
                
                $result = mysqli_query($connection, $query);

                if(mysqli_num_rows($result) < 1)
                {
                    echo "<h2 class='text-center text-danger'>No properties</h2>";
                }
                else
                {

                while($row = mysqli_fetch_array($result))
                {
                    $post_id            = $row['post_id'];
                    // $post_category_id   = $row['post_category_id'];
                    $post_title         = $row['post_title'];
                    $post_user        = $row['post_user'];
                    $post_date          = $row['post_date'];

                  //  $post_image         = $row['post_image'];
                    $post_content       = $row['post_content'];
                    $post_tags          = $row['post_tags'];
                    $post_comment_count = $row['post_comment_count'];
                    $post_status        = $row['post_status'];
            ?>

                <h1 class="page-header">
                    properties
                    
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo  $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_user; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                <hr>
                <div><?php echo $post_content; ?></div>
                <hr >

                <?php 

                    $post_image = $row['post_image'];
                    $photoArray = explode(",", $post_image);
            
                    foreach ($photoArray as $photo) {
                        // Assuming the images are stored in the "../images/" directory
                        $imagePath = "images/" . $photo;
                        echo "<img class='img-responsive' src='$imagePath' alt=''>";
                    }
                
                
                ?>
                

                <img class="img-responsive" src="images/<?php //  echo $imagePath; ?>" alt="">
                <hr>
                


            <?php
                }
            ?>

            <!-- Blog Comments -->

            <?php
            
                if(isset($_POST['create_comment']))
                {
                    $the_get_post_id = $_GET['p_id'];
                    $the_get_post_user = $_GET['p_user'];
                    $comment_receiver = mysqli_real_escape_string($connection, trim($_GET['p_user']));
                    $comment_author = mysqli_real_escape_string($connection, trim($_POST['comment_author']));
                    $comment_email  = mysqli_real_escape_string($connection, trim($_POST['comment_email']));
                    $commet_content = mysqli_real_escape_string($connection, trim($_POST['comment_content']));

                    if(!empty($comment_author) && !empty($comment_receiver) && !empty($comment_email) && !empty($commet_content))
                    {
                        $query = "INSERT INTO comments (comment_post_id, comment_author, comment_receiver, comment_email, 
                                comment_content, comment_status, comment_date) VALUES($the_get_post_id, 
                                '$comment_author', '$the_get_post_user', '$comment_email', '$commet_content', 'unapproved', now())";

                        $result = mysqli_query($connection, $query);
               
                        if(!$result)
                        {
                            die("Query failed " . mysqli_error($connection));
                        }

                        // $query = "UPDATE properties SET post_comment_count = post_comment_count + 1 
                        //         WHERE post_id = $the_get_post_id";
                        // $increasing_commet_count = mysqli_query($connection, $query);
                     
                    }
                    else
                    {
                        echo "<script>alert('Fields cannot be empty')</script>";
                    }

                    

                    

                    

                    


                }

            ?>

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Message to : 
                        <?php echo $_GET['p_user']; ?>
                </h4>

                    <form action="" method="post" role="form">
                        <div class="form-group">
                            <label for="comment_author">Your name</label>
                            <input type="text" name="comment_author" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="comment_email">Email</label>
                            <input type="email" name="comment_email" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="comment_content">Your Message</label>
                            <textarea name="comment_content" class="form-control" rows="3"></textarea>
                        </div>

                        <button name="create_comment" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->
                <?php
                
                    $query = "SELECT * FROM comments WHERE comment_post_id = $the_get_post_id AND 
                            comment_status = 'approved' ORDER BY comment_id DESC";
                    $show_comment_based_on_approval = mysqli_query($connection, $query);

                    if (!$show_comment_based_on_approval) 
                    {
                        die("Query failed " . mysqli_error($connection));
                    }

                    while ($row = mysqli_fetch_array($show_comment_based_on_approval)) 
                    {
                        $comment_date = $row['comment_date'];
                        $comment_author = $row['comment_author'];
                        $comment_content = $row['comment_content'];
                ?>
                    <!-- Comment -->
                   
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author; ?>
                            <small><?php echo $comment_date; ?></small>
                        </h4>
                        <?php echo $comment_content; ?>
                    </div>
                </div>
                <?php
                    } } }
                    else
                    {
                        header("Location: index.php");
                    }
                ?>
                

                
                

                

                

            </div>

        </div>
        <!-- /.row -->

        <hr>

<?php include("includes/footer.php"); ?>