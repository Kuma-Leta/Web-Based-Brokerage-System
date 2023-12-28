<?php  include "includes/db.php"; ?>
<?php // include "includes/header.php"; ?>
<?php  include "admin/functions.php"; ?>


 <?php
 
 if(isset($_POST['submit']))
 {
    $username       = mysqli_real_escape_string($connection, trim($_POST['username']));
    $email          = mysqli_real_escape_string($connection, trim($_POST['email']));
    $password       = mysqli_real_escape_string($connection, trim($_POST['password']));

    if(username_exists($username))
    {
        echo "<h2 class='text-center text-danger'>User with this username already exists, try different username instead </h2>";
    }
    else
    {
        if(!empty($username) && !empty($email) && !empty($password))
        {
            
    
            $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
    
            
    
            $query = "INSERT INTO users (username, password, user_email, user_role) VALUES('$username', '$password', '$email', 'Subscriber')";
            $user_registration_query = mysqli_query($connection, $query);
    
            if(!$user_registration_query)
            {
                die("Query failed " . mysqli_error($connection));
            }
            else
            {
                echo "<h2 class='text-center text-success'>Your registration has been submitted</h2>";
            }
        }
        else
        {
            echo "<script>alert('Fields cannot be empty')</script>";
        }
    }
 }
 
 
 ?>


    <!-- Navigation -->
    
    <?php //  include "includes/navigation.php"; ?>
    
 
    <!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="css/registration.css">
</head>
<body>
  <div class="container">
    <h1>Registration</h1>
    <form id="registration-form" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <div class="error" id="name-error"></div>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <div class="error" id="email-error"></div>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <div class="error" id="password-error"></div>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
        <div class="error" id="confirm-password-error"></div>
      </div>
      <div class="form-group">
        <button type="submit">Register</button>
      </div>
    </form>
  </div>
  <script src="js/registration.js"></script>
</body>
</html>
