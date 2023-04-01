<?php include "./components/admin_header.php"; ?>
<?php

if (!isset($_SESSION['first_name'])) {
    header("Location: ./login.php");
}
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include './components/sidebar.php';
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <?php include 'components/topnav.php'; ?>

                <!-- Begin Page Content -->
                <?php
                if (isset($_GET['req'])) {
                    $request = $_GET['req'];
                } else {
                    $request = "";
                }


                switch ($request) {
                    case 'view_post':
                        include "./components/view_all_post.php";
                        break;
                    case 'add_post':
                        include "./components/add_post.php";
                        break;
                    case 'blog_category':
                        include "./components/add_category.php";
                        break;
                    case 'blog_category':
                        include "./components/add_category.php";
                        break;
                    case 'edit_post':
                        include "./components/edit_post.php";
                        break;
                    case 'blog_comments':
                        include "./components/comments.php";
                        break;
                    case '6':
                        include "user-setting/id_application.php";
                        break;
                    case 'a':
                        include "user-setting/exco.php";
                        break;
                    case 'b':
                        include "user-setting/hall_of_fame.php";
                        break;
                }
                ?>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?php include './components/admin_footer.php'; ?>