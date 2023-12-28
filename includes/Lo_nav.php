
<!-- navigation -->  
<header class="sticky-top bg-white border-bottom border-default">
   <div class="container">

      <nav class="navbar navbar-expand-lg navbar-white">
         <a class="navbar-brand" href="#">
            <img class="img-fluid" width="150px" src="mainimages/" alt="">Brokerage system
         </a>
         <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
            <i class="ti-menu"></i>
         </button>

         <div class="collapse navbar-collapse text-center" id="navigation">
            <ul class="navbar-nav ml-auto">
               <li class='nav-item'> <a class='nav-link' href='index.php'>homepage</a>  </li>"

               <?php 
                    if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'Admin') {
                        echo   "<li class='nav-item'> <a class='nav-link' href='./admin/index.php'>Dashboard</a>  </li>"; 
                     } 
                ?>

               <!-- <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
               </li> -->
               <li class="nav-item">
                  <!-- <a class="nav-link" href="#">Contact</a> -->
               </li>


               <?php 
            if(isset($_SESSION['user_role'])) {
            echo " <li class='nav-item dropdown'>
            <a class='nav-link text-primary' href='#' role='button' data-toggle='dropdown' aria-haspopup='true'
            aria-expanded='false'><i class='fa fa-user'></i>"; echo $_SESSION['username'] .
            " <b class='caret'></b></a>
            <div class='dropdown-menu'>   
              
                  <a  class='dropdown-item' href='user/user_profile.php'><i class='fa fa-fw fa-user'></i> Profile</a>
               
               
               <a class='dropdown-item' href='includes/logout.php'><i class='fa fa-fw fa-power-off'></i> Log Out</a>
               
            </div>
            </li>  ";
            }       

?>

<?php  
  if(!isset($_SESSION['user_role'])) {
    ?>
   <li class='<?php echo $registration_class; ?>'><a class="nav-link" href='home.php'>Login</a> </li>
   <?php }
   else {

   ?>
   <!-- <li><a>this is displayed when the condition is false!</a></li> -->
   <?php
    }
  ?>  


               <!-- <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">Pages <i class="ti-angle-down ml-1"></i>
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="author.html">Author</a>
                     <a class="dropdown-item" href="post-details-1.html">Post Details 1</a>
                     <a class="dropdown-item" href="post-details-2.html">Post Details 2</a>
                     <a class="dropdown-item" href="post-elements.html">Post Elements</a>
                     <a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a>
                     <a class="dropdown-item" href="terms-conditions.html">Terms Conditions</a>
                  </div>
               </li> -->
            </ul>
<!--             
            <select class="m-2 border-0" id="select-language">
               <option id="en" value="about/" selected>En</option>
               <option id="fr" value="fr/about/">Fr</option>
            </select> -->

            <!-- search -->
            <!-- <div class="search px-4">
               <button id="searchOpen" class="search-btn"><i class="ti-search"></i></button>
               <div class="search-wrapper">
                  <form action="javascript:void(0)" class="h-100">
                     <input class="search-box pl-4" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                  </form>
                  <button id="searchClose" class="search-close"><i class="ti-close text-dark"></i></button>
               </div>
            </div> -->

         </div>
      </nav>
   </div>
</header>