





        <?php //Showing all properties


              if(isset($_SESSION['username']))
              {
             $session_username = $_SESSION['username'];
              }
                $query = "SELECT * FROM properties WHERE post_user = '$session_username' ORDER BY post_id DESC";
                $result = mysqli_query($connection, $query);

                if(mysqli_num_rows($result) > 0) {

                    echo " <form action='' method='post'>
                    <div class='table-responsive'>
                        <table id='myproperties' class='table table-responsive table-hover'>
                    
                        <div id='bulkOptionsContainer' class='col-xs-4'>
                            <select name='bulk_options' id='' class='form-control'>
                                <option value=''>Select Options</option>
                                <option value='Available'>Publish</option>
                                <option value='draft'>Draft</option>
                                <option value='delete'>Delete</option>
                                <option value='clone'>Clone</option>
                            </select>
                        </div>
                    
                        <div class='col-xs-4 col-lg-12'>
                            <input type='submit' value='Apply' name='submit' class='btn btn-success'>
                            <a class='btn btn-primary' href='properties.php?source=add_post'>Add New Post</a>
                        </div>
                    
                            <thead>
                                <tr>
                                    <th><input type='checkbox' name='' id='selectAllBoxes'></th>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Comments</th>
                                    <th>Date</th>
                                    <th>View Post</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Post Views</th>
                                </tr>
                            </thead>
                            <tbody> ";
                } else {
                    echo "You have no properties posted on the system !";
                }


            while ($row = mysqli_fetch_array($result)) 
            {
                $post_id = $row['post_id'];
                $post_category_id = $row['post_category_id'];
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
                    echo "<td>$post_author</td>";    
                }
                elseif(!empty($post_user))
                {
                    echo "<td>$post_user</td>";
                }


                echo "<td>$post_title</td>";

                $query = "SELECT * FROM categories WHERE cat_id = $post_category_id";
                $select_categories = mysqli_query($connection, $query);
                while($row = mysqli_fetch_array($select_categories))
                {
                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];

                    echo "<td>$cat_title</td>";
                }
                

                



                echo "<td>$post_status";
                echo "<td><img class='img-responsive' width='100' src='../images/$post_image'</td>";
                echo "<td>$post_tags</td>";

                $query = "SELECT * FROM comments WHERE comment_post_id = $post_id";
                $send_comment_query = mysqli_query($connection, $query);
                
                $row = mysqli_fetch_array($send_comment_query);
                // $comment_id = $row['comment_id'];

                $count_comments = mysqli_num_rows($send_comment_query);


                echo "<td><a href='post_comments.php?id=$post_id' class='btn btn-primary'>$count_comments</a></td>";
                echo "<td>$post_date</td>";
                echo "<td><a class='btn btn-primary' href='../post.php?p_id=$post_id'>View Post</a></td>";
                echo "<td><a class='btn btn-warning' href='properties.php?source=edit_post&p_id=$post_id'>Edit</a></td>";
                // echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" class='btn btn-danger' href='properties.php?delete=$post_id'>Delete</a></td>";
                echo "<td><a rel='$post_id' href='javascript:void(0)' class='delete_link btn btn-danger'>Delete</a></td>";
                echo "<td><a href='properties.php?reset=$post_id' class='btn btn-success'>$post_views_count</a></td>";
                echo "</tr>";
            }
        ?>
        

            
        

            
        </tbody>
    </table>
    </div>
    </form>