<?php include '../includes/db.php'; ?>
<?php include 'includes/header.php'; ?>

<!-- Navigation -->
<?php include 'includes/navigation.php' ?>
<?php

if (isset($_GET['newslt'])) {
    if ($_GET['newslt'] == 'err') {
        echo "<script> alert('There was an error') </script>";
    } else if ($_GET['newslt'] == 'success') {
        echo "<script> alert('Newsletter signup successful') </script>";
    }
}

?>
<!-- Page Content -->
<div class="container">
    <!-- TOP NEWS FOR HOME-->
    <div class="top-news">
        <div class="container">
            <div class="row">

                <div class="col-md-6 tn-left">
                    <div class="row tn-slider">
                        <?php

                        $query = "SELECT * FROM posts LIMIT 7";

                        $home_post = mysqli_query($conn, $query);


                        while ($row = mysqli_fetch_assoc($home_post)) {
                            $post_id = $row['post_id'];
                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_image'];
                            $post_content = $row['post_content'];

                            echo '
                                    <div class="col-md-6">
                                        <div class="tn-img">
                                            <img src="../assets/img/blog/' . $post_image . '" />
                                            <div class="tn-title">
                                                <a href="post.php?p_id=' . $post_id . '">' . $post_title . '</a>
                                            </div>
                                        </div>
                                    </div>
                                
                                ';
                        }
                        ?>

                    </div>
                </div>

                <div class="col-md-6 tn-right">
                    <div class="row">
                        <?php

                        // I want to select from editors pick, that is i will create an extra row
                        // Then add the function to admin panel, where i will be able add features like popular, featured and latest.
                        // SELECT ALL FROM POST WHERE EXTRA = "Editors PICK"
                        $query = "SELECT * FROM posts WHERE post_desc = 'editors_pick' LIMIT 2";

                        $home_post = mysqli_query($conn, $query);

                        $count = mysqli_num_rows($home_post);


                        while ($row = mysqli_fetch_assoc($home_post)) {
                            $post_id = $row['post_id'];
                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_image'];
                            $post_content = $row['post_content'];

                            echo '
                                    <div class="col-md-6">
                                        <div class="tn-img">
                                            <img src="../assets/img/blog/' . $post_image . '" />
                                            <div class="tn-title">
                                            <a href="post.php?p_id=' . $post_id . '">' . $post_title . '</a>
                                            </div>
                                        </div>
                                    </div>
                                ';
                        }

                        ?>
                        <?php

                        // I want to select from editors pick, that is i will create an extra row
                        // Then add the function to admin panel, where i will be able add features like popular, featured and latest.
                        // SELECT ALL FROM POST WHERE EXTRA = "Editors PICK"
                        $query = "SELECT * FROM posts WHERE post_desc = 'popular' LIMIT 2 ";

                        $home_post = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($home_post)) {
                            $post_id = $row['post_id'];
                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_image'];
                            $post_content = $row['post_content'];

                            echo '
                                    <div class="col-md-6">
                                        <div class="tn-img">
                                            <img src="../assets/img/blog/' . $post_image . '" />
                                            <div class="tn-title">
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
    <!-- TOP NEWS FOR HOME-->

    <div class="row g-4" style="margin-bottom: 50px;">

        <!-- Blog Entries Column -->
        <?php include 'includes/page_content.php';
        ?>
        <!--End of Blog Enteries Column-->

        <!-- Blog Sidebar Widgets Column -->
        <?php include 'includes/sidebar.php';
        ?>
        <!-- End Of Blog Sidebar -->

    </div>
    <!-- /.row -->

    <hr>
</div>
<?php

include 'includes/footer.php';
?>