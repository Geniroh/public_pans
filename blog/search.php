<?php include '../includes/db.php'; ?>

<?php include 'includes/header.php'; ?>



<!-- Navigation -->

<?php include 'includes/navigation.php' ?>



<!-- Page Content -->

<div class="container">



    <div class="row">



        <!-- Blog Entries Column -->



        <div class="col-md-8">



            <?php



            if (isset($_POST['submit'])) {



                $search = $_POST['search'];



                $query = "SELECT * FROM posts WHERE post_title LIKE '%$search%' OR post_tags LIKE '%$search%'  ;";

                $search_query = mysqli_query($conn, $query);



                if (!$search_query) {



                    die("QUERY FAILED" . mysqli_error($conn));

                }



                $count = mysqli_num_rows($search_query);



                if ($count == 0) {

                    echo "<h1 class='text-primary text-center p-2 my-4'>No Result was found</h1>";

                } else {



                    while ($row = mysqli_fetch_assoc($search_query)) {

                        $post_title = $row['post_title'];

                        $post_author = $row['post_author'];

                        $post_date = $row['post_date'];

                        $post_image = $row['post_image'];

                        $post_content = $row['post_content'];

                        $post_id = $row['post_id'];



            ?>





                        <article class="mt-4">

                            <h2 class=" fst-italic">

                                <a href="post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title; ?></a>

                            </h2>



                            <p class="">by <a href="post.php?p_auth=<?php echo $post_author; ?>"><?php echo $post_author; ?></a></p>









                            <p class="">

                                <i class="fa fa-clock"></i>Posted on <?php echo $post_date; ?>

                            </p>

                            <hr class="hr">



                            <img src="../assets/img/blog/<?php echo $post_image; ?>" alt="" class="featured-img">





                            <p><?php echo substr($post_content,0, 250); ?></p>



                            <a href="post.php?p_id=<?php echo $post_id ?>" class="btn btn-primary">Read More>></a>



                <?php

                    }

                }

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





                        <!-- CATEGORY NEWS -->

                        <div class="cat-news">

                            <div class="container">



                                <div class="row">

                                    <div class="col-md-12">

                                        <h2>Latest Releases</h2>

                                        <div class="row cn-slider">



                                            <?php

                                            $query = "SELECT * FROM posts  ORDER BY post_id DESC LIMIT 7;";



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

        </div>

        <!--End of Blog Enteries Column-->



        <!-- Blog Sidebar Widgets Column -->

        <?php include 'includes/sidebar.php'; ?>

        <!-- End Of Blog Sidebar -->



    </div>

    <!-- /.row -->



    <hr>

</div>

<?php include 'includes/footer.php'; ?>