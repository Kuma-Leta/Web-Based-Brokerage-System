<?php ob_start(); ?>

<?php session_start();?>
<?php include("../includes/db.php"); ?>
<?php include("../admin/functions.php"); ?>




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



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>User profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/custom/user_profile.css">
<link href="../fonts/font-awesome/css/all.min.css" rel="stylesheet">

<!-- <link href="../css/bootstrap5/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="../css/my_property.css" rel="stylesheet">
<link href="../fonts/font-awesome/css/all.min.css" rel="stylesheet">


</head>
<!-- navigation -->



<body>
    <div class="container">
<div class="col-md-12">
<div class="col-md-4">
<div class="portlet light profile-sidebar-portlet bordered">
<div class="profile-userpic">
<img src="../images/profile.jpg" class="img-responsive" alt> </div>
<div class="profile-usertitle">
<div class="profile-usertitle-name"> <?php echo $username; ?> </div>
<div class="profile-usertitle-job"> <?php echo $user_role; ?> </div>
</div>

<div class="profile-userbuttons">
<!-- <a href="../user_index.php"><button type="button" class="btn btn-info  btn-sm">clone</button></a>
<a href="user_profile.php?source=add_post"><button type="button" class="btn btn-info  btn-sm">Add post</button></a>
<a href="my_property.php"><button type="button" class="btn btn-info  btn-sm">My properties</button></a> -->


</div>
<div class="profile-usermenu">
<ul class="nav">
<!-- <li class="active">
<a href="#">
<i class="fa-solid fa-house"></i>Ticket List </a>
</li>
<li>
<a href="#">
<i class="fa-solid fa-wrench"></i> Support Staff </a>
</li>
<li>
<a href="#">
<i class="fa-solid fa-ellipsis-vertical"></i> Configurations </a>
</li> -->

<div class="profile-usermenu">
            <ul class="nav">
            <li class=""><a href="#"><i class=""></i> Name : <?php echo $user_firstname . " " . $user_lastname; ?></a></li>
            <!-- <li><a href="#"><i class=""></i> Phone : <?php // echo "modify db to include phone" ?> </a></li> -->
            <li><a href="#"><i class=""></i>Email : <?php echo $user_email; ?></a></li>
            <li><a href="#"><i class=""></i>User Role : <?php echo $user_role; ?></a></li>
            </ul>
            </div>

</ul>
</div>
</div>
</div>
<div class="col-md-8">
    <div class="portlet light bordered">
    <div class="portlet-title tabbable-line">
    <div class="caption caption-md">
    <div class="">
    <a class="" href="../index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>Home</a>
  </div>
    <i class="icon-globe theme-font hide"></i>
    <span class="caption-subject font-blue-madison bold uppercase">Your info</span>
    </div>
    </div>
    <div class="portlet-body">
    <div>

    <ul class="nav nav-tabs" role="tablist">
            
        <!-- <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile Info</a></li> -->
        <li role="presentation" class="active" ><a href="#updateProfile" aria-controls="" role="" data-toggle="tab">Update Profile</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
        <li role="presentation"  ><a href="#addPost" aria-controls="addPost" role="tab" data-toggle="tab"> add post</a></li>
        <li role="presentation"><a href="#myPosts" aria-controls="myPosts" role="tab" data-toggle="tab">my posts</a></li>

    </ul>



    <div class="tab-content">
        
    <!-- <div role="tabpanel" class="tab-pane active" id="profile">

            <div class="profile-usermenu">
            <ul class="nav">
            <li class=""><a href="#"><i class=""></i> Name : <?php echo $user_firstname . " " . $user_lastname; ?></a></li>
            <li><a href="#"><i class=""></i> Phone : <?php // echo "modify db to include phone" ?> </a></li>
            <li><a href="#"><i class=""></i>Email : <?php echo $user_email; ?></a></li>
            <li><a href="#"><i class=""></i>User Role : <?php echo $user_role; ?></a></li>
            </ul>
            </div>

    </div> -->

        <div role="tabpanel" class="tab-pane active " id="updateProfile">
            <?php   include("edit_profile.php"); ?>
    </div>

    <div role="tabpanel" class="tab-pane" id="messages">
    <?php  include("view_messages.php");  ?>
    </div>
    
    <div role="tabpanel" class="tab-pane" id="addPost">
        <?php  include("user_add_post.php");  ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="myPosts">
         <?php  include("view_property.php");  ?>
    </div>
    
    
    </div>
</div>
</div>

</div>
</div>

</div>
</div>

 <script src="../js/jquery1102.js"></script>
 <script src="../js/bootstrap337.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript"> -->
	
</script>
<script src="../js/custom.js"> </script>

</body>
</html>