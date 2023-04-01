<?php include '../includes/db.php'; ?>
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

            if (isset($_GET['auth'])) {
                $author = $_GET['auth'];
                // echo $author;

                $query = "SELECT * FROM post WHERE post_author = '{$author}' LIMIT 7;";

                $post_selection = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($post_selection)) {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    $post_img_caption = $row['post_image_caption'];
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

                        <img src="./assets/img/<?php echo $post_image; ?>" alt="" class="featured-img">
                        <span class="featured-img-caption">
                            <?php
                            if (isset($post_img_caption)) {
                                echo $post_img_caption;
                            }
                            ?>
                        </span>

                        <a href="post.php?p_id=<?php echo $post_id ?>" class="btn btn-primary">Read More>></a>

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