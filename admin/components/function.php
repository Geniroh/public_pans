<?php



function confirmQuery($querying)

{

    global $conn;

    if (!$querying) {

        die("QUERY FAILED " . mysqli_error($conn));

    }

}



function get_category_count()

{

    global $conn;



    $query = "SELECT * FROM blog_categories ";

    $select_all_categories = mysqli_query($conn, $query);

    $category_count = mysqli_num_rows($select_all_categories);



    echo $category_count;

}



function get_all_post_count()

{

    global $conn;



    $query = "SELECT * FROM posts ";

    $select_all_post = mysqli_query($conn, $query);

    $post_count = mysqli_num_rows($select_all_post);



    echo $post_count;

}



function get_all_comment_count()

{

    global $conn;



    $query = "SELECT * FROM comments ";

    $select_all_comments = mysqli_query($conn, $query);

    $comment_count = mysqli_num_rows($select_all_comments);



    echo $comment_count;

}



function insert_into_categories()

{

    global $conn;



    if (isset($_POST['submit_cat'])) {

        $cat_title = $_POST['cat_title'];



        if (empty($cat_title)) {

            echo "<span style='color:red;'>This field should not be empty</span>";

        } else {

            $query = "INSERT INTO blog_categories(cat_title) VALUE('{$cat_title}') ;";



            $create_category_query = mysqli_query($conn, $query);



            if (!$create_category_query) {



                die("QUERY FAILED " . mysqli_error($conn));

            }



            // echo "<script> alert('New Category created') </script>";

            echo "<span class='alert alert-success'>New Category created successfully</span>";

        }

    }

}



function edit_categories()

{

    global $conn;

    if (isset($_GET['edit_cat'])) {



        $edit_cat_id = $_GET['edit_cat'];

        $query = "SELECT * FROM blog_categories WHERE cat_id = {$edit_cat_id} ;";



        $edit_category_query = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($edit_category_query)) {

            $cat_id = $row['cat_id'];

            $cat_title = $row['cat_title'];



?>

            <label for="cat_title">Edit Category</label>

            <div class="mb-3">

                <input value="<?php if (isset($cat_title)) {

                                    echo $cat_title;

                                } ?>" type="text" name="cat_title" id="" class="form-control">

            </div>

            <button type="submit" name="update" class="btn btn-primary">Update</button>



        <?php }

    }

    if (isset($_POST['update'])) {

        $update_cat_title = $_POST['cat_title'];



        $query = "UPDATE blog_categories SET cat_title = '{$update_cat_title}' WHERE cat_id = {$cat_id};";



        $update_query = mysqli_query($conn, $query);

        echo "<p class='alert alert-success'>Update suceessful</p>";



        if (!$update_query) {

            die("QUERY FAILED " . mysqli_error($conn));

        }

    }

}



function find_all_categories()

{

    global $conn;

    $query = "SELECT * FROM blog_categories ;";



    $select_categories = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($select_categories)) {

        $cat_id = $row['cat_id'];

        $cat_title = $row['cat_title'];



        echo "<tr>";

        echo "<td>{$cat_id}</td>";

        echo "<td>{$cat_title}</td>";

        echo "<td><a href ='index.php?req=blog_category&delete_cat={$cat_id}' style='color: red;'>Delete</a></td>";

        echo "<td><a href ='index.php?req=blog_category&edit_cat={$cat_id}'>Edit</a></td>";

        echo "</tr>";

    }

}



function delete_categories()

{

    global $conn;

    if (isset($_GET['delete_cat'])) {

        $del_cat_id = $_GET['delete_cat'];



        $query = "DELETE FROM blog_categories WHERE cat_id = {$del_cat_id};";



        $delete_cat_query = mysqli_query($conn, $query);

        if ($delete_cat_query) {

            echo "<span class='alert alert-success'>Delete suceessful</span>";

        }

    }

}





function create_post()

{

    global $conn;

    if (isset($_POST['create_post'])) {

        $post_title        = $_POST['title'];

        $post_category_id  = $_POST['post_category'];

        $post_status       = $_POST['post_status'];

        $post_desc       = $_POST['post_desc'];

        $post_author     = $_POST['post_author'];

        $post_image_caption  = $_POST['image_caption'];



        $post_image        = $_FILES['image']['name'];

        $post_image_temp   = $_FILES['image']['tmp_name'];





        $post_tags         = $_POST['post_tags'];

        $post_content      = $_POST['post_content'];

        $post_date         = date('d-m-y');



        $post_img_dir    = "../assets/img/blog/";



        // define ('SITE_ROOT', realpath(dirname(__FILE__)));



        move_uploaded_file($post_image_temp, $post_img_dir . $post_image);



        $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image,post_content,post_tags,post_status,post_desc, post_img_caption) VALUES({$post_category_id},'{$post_title}','{$post_author}', now(),'{$post_image}','{$post_content}','{$post_tags}', '{$post_status}', '{$post_desc}', '{$post_image_caption}') ";



        $create_post_query = mysqli_query($conn, $query);



        if (!$create_post_query) {

            die("QUERY FAILED " . mysqli_error($conn));

        }



        $the_post_id = mysqli_insert_id($conn);

        echo "<p class='bg-success'>Post Created. <a href='../blog/post.php?p_id={$the_post_id}'>View Post </a> or <a href='index.php?req=add_post'>Edit More Posts</a></p>";

    }

}





function find_all_posts()

{

    global $conn;

    $query = "SELECT * FROM posts ;";



    $select_post = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($select_post)) {

        $post_id = $row['post_id'];

        $post_category_id = $row['post_category_id'];

        $post_title = $row['post_title'];

        $post_author = $row['post_author'];

        $post_comment_count = $row['post_comment_count'];

        $post_date = $row['post_date'];

        $post_tag = $row['post_tag'];

        $post_image = $row['post_image'];

        $post_status = $row['post_status'];



        echo "<tr>";

        ?>

        <td><input type='checkbox' name='checkBoxArray[]' id='' class='checkBoxes' value='<?php echo $post_id ?>'></td>

<?php

        // echo "<td>{$post_id}</td>";

        echo "<td>{$post_title}</td>";



        $query = "SELECT * FROM blog_categories WHERE cat_id = {$post_category_id} ;";



        $edit_category_query = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($edit_category_query)) {

            $cat_id = $row['cat_id'];

            $cat_title = $row['cat_title'];

        }

        echo "<td>{$cat_title}</td>";

        echo "<td>{$post_author}</td>";



        echo "<td>{$post_status}</td>";

        echo "<td><img src='../assets/img/blog/{$post_image}' height='90px' width='90px' alt='image' class='img-responsive'></td>";

        echo "<td>{$post_tag}</td>";

        echo "<td>{$post_comment_count}</td>";

        echo "<td>{$post_date}</td>";

        echo "<td><a href='index.php?req=edit_post&p_id={$post_id}'>Edit</a></td>";

        echo "<td><a style='color: red;' href='index.php?req=view_post&delete_post={$post_id}'>Delete</a></td>";

        echo "</tr>";

    }



    if (isset($_POST['update_post'])) {

        $post_title        = $_POST['title'];

        $post_category_id  = $_POST['post_category'];

        $post_status       = $_POST['post_status'];

        $post_desc       = $_POST['post_desc'];

        $post_author     = $_POST['post_author'];



        $post_image        = $_FILES['image']['name'];

        $post_image_temp   = $_FILES['image']['tmp_name'];





        $post_tags         = $_POST['post_tags'];

        $post_content      = $_POST['post_content'];

        $post_date         = date('d-m-y');



        $post_img_dir    = "../assets/img/blog/";



        // define ('SITE_ROOT', realpath(dirname(__FILE__)));



        move_uploaded_file($post_image_temp, $post_img_dir . $post_image);



        $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image,post_content,post_tags,post_status,post_desc) VALUES({$post_category_id},'{$post_title}','{$post_author}', now(),'{$post_image}','{$post_content}','{$post_tags}', '{$post_status}', '{$post_desc}') ";



        $create_post_query = mysqli_query($conn, $query);



        if (!$create_post_query) {

            die("QUERY FAILED " . mysqli_error($conn));

        }



        $the_post_id = mysqli_insert_id($conn);

        echo "<p class='bg-success'>Post Created. <a href='../blog/post.php?p_id={$the_post_id}'>View Post </a> or <a href='index.php?req=add_post'>Edit More Posts</a></p>";

    }

}





function handle_edit_post()

{

    global $conn;



    if (isset($_GET['p_id'])) {



        $get_post_id = $_GET['p_id'];

    }



    $query = "SELECT * FROM posts WHERE post_id = $get_post_id;";



    $edit_post_id = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($edit_post_id)) {

        $post_id = $row['post_id'];

        $post_category_id = $row['post_category_id'];

        $post_title = $row['post_title'];

        $post_author = $row['post_author'];

        $post_comment_count = $row['post_comment_count'];

        $post_date = $row['post_date'];

        $post_desc = $row['post_desc'];

        $post_tag = $row['post_tags'];

        $post_content = $row['post_content'];

        $post_image = $row['post_image'];

        $post_status = $row['post_status'];

    }



    if (isset($_POST['create_post'])) {

        $post_title        = $_POST['title'];

        $post_category_id  = $_POST['post_category'];

        $post_status       = $_POST['post_status'];

        $post_desc       = $_POST['post_desc'];

        $post_author     = $_POST['post_author'];



        $post_image        = $_FILES['image']['name'];

        $post_image_temp   = $_FILES['image']['tmp_name'];





        $post_tags         = $_POST['post_tags'];

        $post_content      = $_POST['post_content'];

        $post_date         = date('d-m-y');



        $post_img_dir    = "../assets/img/blog/";



        // define ('SITE_ROOT', realpath(dirname(__FILE__)));



        move_uploaded_file($post_image_temp, $post_img_dir . $post_image);



        $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image,post_content,post_tags,post_status,post_desc) VALUES({$post_category_id},'{$post_title}','{$post_author}', now(),'{$post_image}','{$post_content}','{$post_tags}', '{$post_status}', '{$post_desc}') ";



        $create_post_query = mysqli_query($conn, $query);



        if (!$create_post_query) {

            die("QUERY FAILED " . mysqli_error($conn));

        }



        $the_post_id = mysqli_insert_id($conn);

        echo "<p class='bg-success'>Post Edited. <a href='../blog/post.php?p_id={$the_post_id}'>View Post </a> or <a href='index.php?req=add_post'>Edit More Posts</a></p>";

    }

}



function register_admin()

{

    global $conn;

    if (isset($_POST['create_admin'])) {

        $user = mysqli_real_escape_string($conn, $_POST['admin_user']);

        $password = mysqli_real_escape_string($conn, $_POST['admin_pwd']);



        $query = "SELECT * FROM users WHERE mat_no ='$user' OR email = '$user'";



        $check_admin = mysqli_query($conn, $query);

        $admin_num = mysqli_num_rows($check_admin);



        if ($admin_num < 1) {

            // echo "<script> alert('There was en error, ensure you have an account on e-portal first'); </script>";

            echo "<span style='color:red'>There was en error, ensure you have an account on e-portal first and <a href='register.php'>Try Again! </a> </span>";

        } else {

            if ($row = mysqli_fetch_assoc($check_admin)) {

                //Dehashing password

                $hashedPwdCheck = password_verify($password, $row['user_pwd']);

                if ($hashedPwdCheck == false) {

                    //echo "<script> alert('There was en error, ensure you have an account on e-portal first and have inputed details correctly'); </script>";

                    echo "<span style='color:red'>Incorrect password or email <a href='register.php'>Try Again! </a> </span>";

                    exit();

                }

            }

            $query = "UPDATE users SET admin_role = 'Admin' WHERE mat_no ='$user' OR email = '$user' ;";



            $update_query = mysqli_query($conn, $query);



            if (!$update_query) {

                die("QUERY FAILED " . mysqli_error($conn));

            }

            echo "<p class='bg-success'>Registeration successful <a href='login.php'>Log in now</a> </p>";

            // header("Location: ../index.php");

        }

    }

}



function login_admin()

{

    global $conn;



    if (isset($_POST['login_admin'])) {

        // session_start();



        $user = mysqli_real_escape_string($conn, $_POST['admin_user']);

        $password = mysqli_real_escape_string($conn, $_POST['admin_pwd']);



        //Error handlers

        // Check if empty

        if (empty($user) || empty($user)) {

            echo "<p style='color: red;'>Ensure to fill in all fields</p>";

            exit();

        } else {

            $sql = "SELECT * FROM users WHERE mat_no ='$user' OR email = '$user' AND admin_role = 'Admin' ;";

            $result = mysqli_query($conn, $sql);

            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck < 1) {

                echo "<p style='color: red;'>Ensure you have an account on the e-portal first</p>";

                exit();

            } else {

                if ($row = mysqli_fetch_assoc($result)) {

                    //Dehashing password

                    $hashedPwdCheck = password_verify($password, $row['user_pwd']);

                    if ($hashedPwdCheck == false) {

                        echo "<p style='color: red;'>Incorrect password or email</p>";

                        exit();

                    } elseif ($hashedPwdCheck == true) {

                        if (isset($_POST['remember_me'])) {

                            $cookie_name = "user";

                            $cookie_value = $row['first_name'];

                            setcookie($cookie_name, $cookie_value, time() + (86400 * 3), "/"); // 86400 = 1 day

                        }







                        $_SESSION['user_id'] = $row['user_id'];

                        $_SESSION['first_name'] = $row['first_name'];

                        $_SESSION['last_name'] = $row['last_name'];

                        $_SESSION['email'] = $row['email'];

                        $_SESSION['mat_no'] = $row['mat_no'];

                        $_SESSION['user_phone'] = $row['user_phone'];

                        $_SESSION['exco'] = $row['exco'];



                        header("Location: ./index.php");

                        // echo "Here";

                        // exit();

                    }

                }

            }

        }

    }

}

