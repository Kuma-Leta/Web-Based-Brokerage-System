
<nav style=" " id="myNavigation" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Brokerage System</a>
            </div>
            <!-- <span id="google_translate_element">translate</span> -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav  navbar-right top-nav">

        <?php 
                    if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'Admin') {
                        echo   "<li> <a href='./admin/index.php'>Dashboard</a>  </li>"; 
                    } 
        ?>
                    <li> <a href='newHome.php'>New homepage</a>  </li>
                    
                    <?php

                        if(isset($_SESSION['user_role']))
                        {
                            if(isset($_GET['p_id']))
                            {
                                $the_post_id = $_GET['p_id'];
                                echo "<li>
                                <a href='admin/properties.php?source=edit_post&p_id=$the_post_id'>Edit Post</a>
                                    </li>";
                                    }
                                }
                     
                                
       ?>

<?php  
  if(!isset($_SESSION['user_role'])) {
    ?>
   <li class='<?php echo $registration_class; ?>'><a href='home.php'>Register</a> </li>
   <?php }
   else {

   ?>
   <!-- <li><a>this is displayed when the condition is false!</a></li> -->
   <?php
    }
  ?> 

<!-- <li class='<?php echo $contact_class; ?>'>
    <a href="contact.php">Contact</a>
</li> -->

<?php 
if(isset($_SESSION['user_role'])) {
echo " <li class='dropdown'>
<a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i>"; echo $_SESSION['username'] .
" <b class='caret'></b></a>
<ul class='dropdown-menu'>   
    <li>
        <a href='user/user_profile.php'><i class='fa fa-fw fa-user'></i> Profile</a>
    </li>
     <li class='divider'></li>
    <li>
     <a href='includes/logout.php'><i class='fa fa-fw fa-power-off'></i> Log Out</a>
    </li>
</ul>
</li>  ";
}       

?>
     </ul>

</div>

<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
    </nav> 