<?php ob_start(); ?>

<?php session_start();?>
<?php include("./includes/db.php"); ?>
<?php include("./admin/functions.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User page</title>
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/lib/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
        <a class="navbar-brand" href="#">Your Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <?php 
if(isset($_SESSION['user_role'])) {
echo " <li class='dropdown'>
<a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i>"; echo $_SESSION['username'] .
" <b class='caret'></b></a>
<ul class='dropdown-menu'>   
    <li>
        <a href='user_index.php'><i class='fa fa-fw fa-user'></i> Profile</a>
    </li>
     <li class='divider'></li>
    <li>
     <a href='includes/logout.php'><i class='fa fa-fw fa-power-off'></i> Log Out</a>
    </li>
</ul>
</li>  ";
}

?>
        </div>
    </nav>