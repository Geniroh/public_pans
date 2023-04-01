<?php include '../includes/db.php'; ?>
<?php
if (isset($_GET['p_id'])) {
    $get_post_id = $_GET['p_id'];

    $query = "SELECT * FROM posts WHERE post_id = $get_post_id;";

    $post_selection = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($post_selection)) {
        $featured_image = $row['post_image'];
    }
}
?>
<?php include 'includes/header.php'; ?>

<!-- Navigation -->
<?php include 'includes/navigation.php' ?>

<!-- Page Content -->
<div class="container">

    <div class="row my-4">


        <!-- MAIN CONTENT -->
        <div class="col-md-8">

            <!-- POSTS CONTENT -->
            <?php

            if (isset($_GET['p_id'])) {
                $get_post_id = $_GET['p_id'];

                $query = "SELECT * FROM posts WHERE post_id = $get_post_id;";

                $post_selection = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($post_selection)) {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    $post_img_caption = $row['post_img_caption'];
            ?>

                    <article class="mt-4">
                        <h2 class=" fst-italic">
                            <a href="post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title; ?></a>
                        </h2>

                        <p class="">by <a href="author.php?auth=<?php echo $post_author; ?>"><?php echo $post_author; ?></a></p>




                        <p class="">
                            <i class="fa fa-clock"></i>Posted on <?php echo $post_date; ?>
                        </p>
                        <hr class="hr">

                        <img src="../assets/img/blog/<?php echo $post_image; ?>" alt="" class="featured-img">
                        <span class="featured-img-caption">
                            <?php
                            if (isset($post_img_caption)) {
                                echo $post_img_caption;
                            }
                            ?>
                        </span>

                        <p><?php echo $post_content; ?></p>

                <?php   }
            } ?>
                    </article>

                    <div class=".col-md-12 bg-light">
                        <!-- ADVERTISEMENT GOES HERE -->
                    </div>

                    <!-- SOCIAL-LINKS -->
                    <div class="col-md-12 my-4">

                        <div class="card text-center">
                            <div class="card-header">
                                <h3>
                                    Connect With Us
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="social-card">
                                    <a href="https://www.tiktok.com/@pansuniport" target="_blank">
                                        <img src="../assets/img/home/tik-tok.png" alt="">
                                    </a>
                                    <a href="https://web.facebook.com/groups/STEPUP.PANS" target="_blank">
                                        <img src="../assets/img/home/facebook.png" alt="">
                                    </a>
                                    <a href="https://www.linkedin.com/company/pans-uniport/" target="_blank">
                                        <img src="../assets/img/home/linkedin.png" alt="">
                                    </a>

                                    <a href="https://www.instagram.com/p/CULSpYAov0h/?utm_medium=copy_link" target="_blank">
                                        <img src="../assets/img/home/instagram.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SOCIAL-LINKS -->

                    <hr class="mt-4">
                    <!-- Comments Form -->

                    <!-- Blog Comments -->
                    <?php
                    if (isset($_POST['create_comment'])) {
                        $get_post_id = $_GET['p_id'];

                        $comment_author = $_POST['comment_author'];
                        $comment_email = $_POST['comment_email'];
                        $comment_content = $_POST['comment_content'];





                        $query = "INSERT INTO comments (comment_post_id, comment_email, comment_content, comment_status, comment_date, comment_author) VALUES ( $get_post_id, '{$comment_email}', '{$comment_content}', 'Approved', now(), '{$comment_author}');";

                        $create_comment_query = mysqli_query($conn, $query);

                        if (!$create_comment_query) {
                            die("QUERY FAILED " . mysqli_error($conn));
                        }


                        $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 WHERE post_id =$get_post_id";

                        $update_comment_count =  mysqli_query($conn, $query);
                    }
                    ?>

                    <div class="well comment-form">
                        <h4>Leave a Comment:</h4>
                        <form role="form" method="POST" action="">
                            <div class="form-group">

                                <input type="text" name="comment_author" id="" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">

                                <input type="email" name="comment_email" id="" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="comment" name="comment_content"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="create_comment">Submit</button>
                        </form>
                    </div>

                    <hr>

                    <!-- Posted Comments -->
                    <?php
                    if (isset($get_post_id)) {


                        $query = "SELECT * FROM comments WHERE comment_post_id = {$get_post_id} ";
                        $query .= "AND comment_status = 'approved' ORDER BY comment_id DESC ";
                        $select_comment_query = mysqli_query($conn, $query);
                        if (!$select_comment_query) {

                            die('Query Failed' . mysqli_error($conn));
                        }
                        while ($row = mysqli_fetch_array($select_comment_query)) {
                            $comment_date   = $row['comment_date'];
                            $comment_content = $row['comment_content'];
                            $comment_author = $row['comment_author'];

                    ?>
                            <!-- Comment -->

                            <div class="media comment">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="assets/img/placeholder2.png" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo $comment_author;   ?>
                                        <small><?php echo $comment_date;   ?></small>
                                    </h4>
                                    <?php echo $comment_content;   ?>
                                </div>
                            </div>

                    <?php }
                    } ?>
                    <!-- Comment -->


                    <!-- CATEGORY NEWS -->
                    <div class="cat-news">
                        <div class="container">

                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Related News</h2>
                                    <div class="row cn-slider">

                                        <?php
                                        $query = "SELECT * FROM posts LIMIT 7;";

                                        $rel_post = mysqli_query($conn, $query);

                                        while ($row = mysqli_fetch_assoc($rel_post)) {

                                            $post_id = $row['post_id'];
                                            $post_img = $row['post_image'];
                                            $post_title = $row['post_title'];

                                            echo '
                                                <div class="col-md-6">
                                                    <div class="cn-img">
                                                        <img src="../assets/img/blog/' . $post_img . '" />
                                                        <div class="cn-title">
                                                            <a href="post.php?p_id=' . $post_id . '">' . $post_title . '</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                ';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CATEGORY NEWS -->

                    <!-- <nav class="blog-pagination" aria-label="Pagination">
                        <a class="btn btn-outline-primary" href="#">Older</a>
                        <a class="btn btn-outline-secondary disabled">Newer</a>
                    </nav>                 -->

        </div>


        <!-- </div> -->
        <!-- Blog Sidebar Widgets Column -->
        <?php include 'includes/sidebar.php'; ?>
        <!-- End Of Blog Sidebar -->

    </div>
</div>


<?php

include 'includes/footer.php';
?>