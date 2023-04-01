<?php
if (isset($_GET['p_id'])) {

    $get_post_id = $_GET['p_id'];
}

$query = "SELECT * FROM post WHERE post_id = $get_post_id;";

$edit_post_id = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($edit_post_id)) {
    $post_id = $row['post_id'];
    $post_category_id = $row['post_category_id'];
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_comment_count = $row['post_comment_count'];
    $post_date = $row['post_date'];
    $post_desc = $row['post_desc'];
    $post_tag = $row['post_tag'];
    $post_content = $row['post_content'];
    $post_image = $row['post_image'];
    $post_img_caption = $row['post_image_caption'];
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

    $query = "INSERT INTO post(post_category_id, post_title, post_author, post_date, post_image,post_content,post_tag,post_status,post_desc, post_image_caption) VALUES({$post_category_id},'{$post_title}','{$post_author}', now(),'{$post_image}','{$post_content}','{$post_tags}', '{$post_status}', '{$post_desc}', '{$post_img_caption}') ";

    $create_post_query = mysqli_query($conn, $query);

    if (!$create_post_query) {
        die("QUERY FAILED " . mysqli_error($conn));
    }

    $the_post_id = mysqli_insert_id($conn);
    echo "<p class='bg-success'>Post Edited. <a href='../blog/post.php?p_id={$the_post_id}'>View Post </a> or <a href='index.php?req=add_post'>Edit More Posts</a></p>";
}

?>


<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Posts</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php get_all_post_count(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Comments</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php get_all_comment_count(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Categories
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php get_category_count(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <?php
        create_post();
        ?>

        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h4 class="m-0 font-weight-bold text-primary">Edit post</h4>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title</label>
                            <input type="text" class="form-control" id="title" value="<?php echo $post_title; ?>" name="title">
                        </div>
                        <div class="form-group mb-3">
                            <label for="post_cat">Category</label>
                            <select name="post_category" id="" required class="form-control">
                                <?php
                                $query = "SELECT * FROM blog_categories";
                                $select_categories = mysqli_query($conn, $query);

                                confirmQuery($select_categories);


                                while ($row = mysqli_fetch_assoc($select_categories)) {
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];


                                    echo "<option value='$cat_id'>{$cat_title}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="post_author" class="form-label">Post Author</label>
                            <input type="text" class="form-control" value="<?php echo $post_author; ?>" id="post_author" name="post_author">
                        </div>
                        <div class="form-group mb-3">
                            <label for="post_status">Post Status</label>
                            <select name="post_status" id="" required class="form-control">
                                <option value="published">Published</option>
                                <option value="draft">Draft</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="post_desc">Post Description</label>
                            <select name="post_desc" id="" required class="form-control">
                                <option value="editors_pick">Editors pick</option>
                                <option value="popular">Popular</option>
                                <option value="trending">Trending</option>
                                <option value="featured">Featured</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="image">Post Image</label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="image_caption">Image Caption</label>
                            <input type="text" name="image_caption" value="<?php echo $post_img_caption; ?>" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="post_tags">Post Tags</label>
                            <input type="text" class="form-control" value="<?php echo $post_tag; ?>" name="post_tags" required aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text" style="font-size: 11px;">This tags which should be comma separated, this helps in post search</div>
                        </div>

                        <div class="form-group">
                            <label for="post_content">Post Content</label>
                            <textarea class="form-control" name="post_content" id="postWsywig" cols="30" rows="10" required>
                            <?php echo $post_content; ?>
                            </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" name="create_post">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>