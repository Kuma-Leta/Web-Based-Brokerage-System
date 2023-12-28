<?php

if(isset($_SESSION['username']))
{
    $session_username = $_SESSION['username'];

    $query = "SELECT * FROM users WHERE username = '$session_username'";
    $edit_user_profile = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($edit_user_profile))
    {
        $user_id            = $row['user_id'];
        $username           = $row['username'];
        $password           = $row['password'];
        $user_firstname     = $row['user_firstname'];
        $user_lastname      = $row['user_lastname'];
        $user_email         = $row['user_email'];
        // $user_image         = $row['user_image'];
        $user_role          = $row['user_role'];
    }
}

?>


<?php

    if(isset($_POST['update_user']))
    {
    $username        = mysqli_real_escape_string($connection, trim($_POST['username']));
    $password        = mysqli_real_escape_string($connection, trim($_POST['password']));
    $user_firstname  = mysqli_real_escape_string($connection, trim($_POST['user_firstname']));
    $user_lastname   = mysqli_real_escape_string($connection, trim($_POST['user_lastname']));
    $user_email      = mysqli_real_escape_string($connection, trim($_POST['user_email']));

    // $user_image      = $_FILES['user_image']['name'];
    // $user_image_tmp  = $_FILES['user_image']['tmp_name'];

    // move_uploaded_file($user_image_tmp, "../images/$user_image");

    // if(empty($user_image))
    // {
    //         $query = "SELECT * FROM users WHERE username = $session_username ";
    //         $select_image = mysqli_query($connection, $query);

    //         while($row = mysqli_fetch_array($select_image))
    //         {
    //             $user_image = $row['user_image'];
    //         }
    // }
    $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));


    $update_user_profile_query = "UPDATE users SET password = '$password', user_firstname = '$user_firstname', 
                                    user_lastname = '$user_lastname', user_email = '$user_email',
                                    username = '$username' WHERE username = '$session_username'";

        $result = mysqli_query($connection, $update_user_profile_query);
        confirmQuery($result);

    
}

?>

<form action="" method="post" enctype="multipart/form-data">
    
                            <div class="form-group">
                                    <label for="username">Username (Required)</label>
                                    <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" required>
                            </div>

                            <div class="form-group">
                                    <label for="password" type="required">Password (Required)</label>
                                    <input type="password" name="password" placeholder="Password" value="<?php // echo $password; ?>" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="user_firstname">Firstname</label>
                                <input type="text" name="user_firstname" value="<?php echo $user_firstname; ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="user_lastname">Lastname</label>
                                <input type="text" name="user_lastname" value="<?php echo $user_lastname; ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="user_email">Email</label>
                                <input type="email" name="user_email" value="<?php echo $user_email; ?>" class="form-control">
                            </div>

                            <!-- <div class="form-group">
                                <label for="user_image">Image</label>
                                <img class="img-responsive" width="200" src="../images/<?php // echo $user_image; ?>" alt="">
                                <input type="file" name="user_image" class="form-control">
                            </div> -->

                            <div class="form-group">
                            <input type='submit' value='Update Profile' name='update_user' class='btn btn-primary'>
                            </div>
                           <a class="active" href="#profile" aria-controls="profile" role="tab" ><div><button type="reset" class="btn btn btn-danger">Cancel</button></div> </a>

                        </form>
    <?php echo "<script>setTabCookie('#updateProfile'); </script>"; ?>
