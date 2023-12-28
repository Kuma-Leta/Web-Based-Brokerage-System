<?php include("delete_modal.php"); ?>

<?php

    if(isset($_GET['view_detail']))
    {
        $the_detail_user_id = mysqli_real_escape_string($connection, trim($_GET['view_detail']));

        $query = "SELECT * FROM users WHERE user_id = $the_detail_user_id";
        $select_all_users_data = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_array($select_all_users_data)) 
        {
           $user_id         = $row['user_id'];
           $username        = $row['username'];
           $password        = $row['password'];
           $user_firstname  = $row['user_firstname'];
           $user_lastname   = $row['user_lastname'];
           $user_email      = $row['user_email'];
           $user_image      = $row['user_image'];
           $user_role       = $row['user_role'];
        }
    }
    else
    {
        header("Location: index.php");
    }

    ?>

<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
            <?php echo "<img src='../images/$user_image' alt='Avatar' class='img-fluid my-5' style='width: 120px;' />"  ?>
              
              <h5><?php echo $username  ?></h5>
              <p><?php echo $user_role  ?></p>
              <?php echo "<a rel='$user_id ' class='delete_link btn btn-danger' href='javascript:void(0)'>Remove user</a>"  ?>  
              
              
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h5>Profile Information</h5>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>First name</h6>
                    <p class="text-primary"><?php echo $user_firstname  ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Last name</h6>
                    <p class="text-primary"><?php echo $user_lastname  ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>username</h6>
                    <p class="text-primary"><?php echo $username  ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-primary"><?php echo $user_email  ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>User role</h6>
                    <p class="text-primary"><?php echo $user_role  ?></p>
                  </div>
              <?php // echo "<a class='btn btn-success' href='users.php?change_to_admin=$user_id'>Change To premium </a>" ?>
                  
                  
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

if (isset($_GET['change_to_admin'])) 
{
    if(isset($_SESSION['user_role']))
    {
        if($_SESSION['user_role'] == 'Admin')
        {
            $change_to_admin = mysqli_real_escape_string($connection, trim($_GET['change_to_admin']));

            $query = "UPDATE users SET user_role = 'Admin' WHERE user_id = $change_to_admin LIMIT 1";
            $change_to_admin_query = mysqli_query($connection, $query);

            confirmQuery($change_to_admin_query);

            header("Location: users.php");
        }
    }

    
}


?>


<script>

$(document).ready(function(){
    $(".delete_link").on('click', function(){
        var id = $(this).attr("rel");
        var delete_url = "users.php?delete=" + id + "";
        
        $(".modal_delete_link").attr("href", delete_url);
        
        $("#myModal").modal('show');
    });
});

</script>




