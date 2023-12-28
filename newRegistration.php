<?php //  include "includes/db.php"; ?>
<?php //  include "includes/header.php"; ?>
<?php  include "admin/functions.php"; ?>


 <?php
 
 if(isset($_POST['submit']))
 {
    $firstName       = mysqli_real_escape_string($connection, trim($_POST['firstName']));
    $lastName       = mysqli_real_escape_string($connection, trim($_POST['lastName']));
    $email          = mysqli_real_escape_string($connection, trim($_POST['email']));
    $username       = mysqli_real_escape_string($connection, trim($_POST['username']));
    $password       = mysqli_real_escape_string($connection, trim($_POST['password']));

    if(username_exists($username))
    {
        echo "<h5 class='text-center text-danger'>User with this username already exists, try different username instead </h5>";
    }
    else
    {
        if(!empty($username) && !empty($email) && !empty($password))
        {
            
    
            $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
    
            
    
            $query = "INSERT INTO users (user_firstname, user_lastname, username, password, user_email, user_role) VALUES('$firstName', '$lastName','$username', '$password', '$email', 'Subscriber')";
            $user_registration_query = mysqli_query($connection, $query);
    
            if(!$user_registration_query)
            {
                die("Query failed " . mysqli_error($connection));
            }
            else
            {
                echo "<h5 class='text-center text-success'>Your registration has been submitted</h5>";
            }
        }
        else
        {
            echo "<script>alert('Fields cannot be empty')</script>";
        }
    }
 }
 
 
 ?>
 