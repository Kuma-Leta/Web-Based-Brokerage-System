<?php

include("../admin/includes/delete_modal.php");

if(isset($_POST['checkBoxArray']))
{
    foreach($_POST['checkBoxArray'] as $postValueId)
    {
        $bulk_options = $_POST['bulk_options'];

        switch ($bulk_options) 
        {
            case 'available':
                $query = "UPDATE properties set post_status = '$bulk_options' WHERE post_id = $postValueId"; 
                $update_to_published_status = mysqli_query($connection, $query);
                confirmQuery($update_to_published_status);
            break;

            case 'notAvailable':
                $query = "UPDATE properties set post_status = '$bulk_options' WHERE post_id = $postValueId"; 
                $update_to_draft_status = mysqli_query($connection, $query);
                confirmQuery($update_to_draft_status);
            break;

            case 'delete':
                $query = "DELETE FROM properties WHERE post_id = $postValueId";
                $update_to_delete_status = mysqli_query($connection, $query);
                confirmQuery($update_to_delete_status);
            break;

            case 'clone':
                $query = "SELECT * FROM properties WHERE post_id = $postValueId";
                $select_post_query = mysqli_query($connection, $query);

                while($row = mysqli_fetch_array($select_post_query))
                {
                    $post_title         = $row['post_title'];
                    // $post_category_id   = $row['post_category_id'];
                    $post_date          = $row['post_date'];
                    $post_author        = $row['post_author'];
                    $post_user          = $row['post_user'];
                    $post_status        = $row['post_status'];
                    $post_image         = $row['post_image'];
                    $post_tags          = $row['post_tags'];
                    $post_content       = $row['post_content'];
                    $post_comment_count = $row['post_comment_count'];
                }

                $query = "INSERT INTO properties(post_title, post_author, post_user, post_date, post_image, post_content,
                            post_tags, post_comment_count, post_status) VALUES('$post_title', 
                            '$post_author', '$post_user', now(), '$post_image', '$post_content', '$post_tags', 
                            $post_comment_count, '$post_status')";
                $copy_query = mysqli_query($connection, $query);

                if(!$copy_query)
                {
                    die("Query failed " . mysqli_error($connection));
                }

                break;
            
            default:
                # code...
                break;
        }
    }
}


?>

        <?php //Showing all properties

            if(isset($_SESSION['username']))
            {
            $session_username = $_SESSION['username'];
            }
            $query = "SELECT * FROM properties where post_user='$session_username' ORDER BY post_id DESC";
            $result = mysqli_query($connection, $query);

            if(mysqli_num_rows($result) > 0) {

              echo " <form action='' method='post'>
              <div class='table-responsive'>
                  <table id='myproperties' class='table table-responsive table-hover'>
              
                  <div id='bulkOptionsContainer' class='col-xs-4'>
                      <select name='bulk_options' id='' class='form-control'>
                          <option value=''>Select Options</option>
                          <option value='Available'>Available</option>
                          <option value='notAvailable'>Unavailable</option>
                          <option value='delete'>Delete</option>
                      </select>
                  </div>
              
                  <div class='col-xs-4 col-lg-12'>
                      <input type='submit' value='Apply' name='submit' class='btn btn-success'>
                  </div>
              
                      <thead>
                          <tr>
                              <th><input type='checkbox' name='' id='selectAllBoxes'></th>
                              <th>ID</th>
                              <th>Title</th>
                              <th>Status</th>
                              <th>View Post</th>
                          </tr>
                      </thead>
                      <tbody> ";
          
            }else {
              echo "you don't have properties posted!";
            }

            while ($row = mysqli_fetch_array($result)) 
            {
                $post_id = $row['post_id'];
                // $post_category_id = $row['post_category_id'];
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_user = $row['post_user'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
                $post_tags = $row['post_tags'];
                $post_comment_count = $row['post_comment_count'];
                $post_status = $row['post_status'];
                $post_views_count = $row['post_views_count'];

                echo "<tr>";
        ?>
                <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $post_id; ?>'></td>
        <?php
                echo "<td>$post_id</td>";

                if(!empty($post_author))
                {
                //    echo "<td>$post_author</td>";    
                }
                elseif(!empty($post_user))
                {
               //     echo "<td>$post_user</td>";
                }


                echo "<td>$post_title</td>";

                // $query = "SELECT * FROM categories WHERE cat_id = $post_category_id";
                // $select_categories = mysqli_query($connection, $query);
                // while($row = mysqli_fetch_array($select_categories))
                // {
                //     $cat_id = $row['cat_id'];
                //     $cat_title = $row['cat_title'];

                //     echo "<td><!-- $cat_title --></td>";
                // }
                

                



                echo "<td>$post_status";
              //  echo "<td><img class='img-responsive' width='40' height='80' src='../images/$post_image'</td>";
           //     echo "<td>$post_tags</td>";

                $query = "SELECT * FROM comments WHERE comment_post_id = $post_id";
                $send_comment_query = mysqli_query($connection, $query);
                
                $row = mysqli_fetch_array($send_comment_query);
                // $comment_id = $row['comment_id'];

                $count_comments = mysqli_num_rows($send_comment_query);


            //    echo "<td><a href='post_comments.php?id=$post_id' class='btn btn-primary'>$count_comments</a></td>";
           //     echo "<td>$post_date</td>";
                echo "<td><a class='btn btn-primary' href='../post.php?p_id=$post_id & p_user=$post_user'>View Post</a></td>";
              //  echo "<td><a class='btn btn-warning' href='properties.php?source=edit_post&p_id=$post_id'>Edit</a></td>";
                // echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" class='btn btn-danger' href='properties.php?delete=$post_id'>Delete</a></td>";
            //    echo "<td><a rel='$post_id' href='javascript:void(0)' class='delete_link btn btn-danger'>Delete</a></td>";
              //  echo "<td><a href='properties.php?reset=$post_id' class='btn btn-success'>$post_views_count</a></td>";
                echo "</tr>";
            }
        ?>
        

            
        

            
        </tbody>
    </table>
    </div>
</form>

<?php

if (isset($_GET['delete'])) 
{
    if(isset($_SESSION['user_role']))
    {
        if($_SESSION['user_role'] == 'Admin')
        {
            $delete_post_id = mysqli_real_escape_string($connection, trim($_GET['delete']));

            $query = "DELETE FROM properties WHERE post_id = $delete_post_id LIMIT 1";
            $result = mysqli_query($connection, $query);

            confirmQuery($result);

            header("Location: properties.php");
        }
    }
   


}

if(isset($_GET['reset']))
{
    $the_post_reset_id = mysqli_real_escape_string($connection, trim($_GET['reset']));

    $query = "UPDATE properties SET post_views_count = 0 WHERE post_id =" . mysqli_real_escape_string($connection, $_GET['reset']) . " ";
    $resetQuery = mysqli_query($connection, $query);

    confirmQuery($resetQuery);

    header("Location: properties.php");
}

?>

<script>

$(document).ready(function(){
    $(".delete_link").on('click', function(){
        var id = $(this).attr("rel");
        var delete_url = "properties.php?delete=" + id + "";
        
        $(".modal_delete_link").attr("href", delete_url);
        
        $("#myModal").modal('show');
    });
});
</script>