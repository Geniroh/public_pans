<div class="col-md-4">

    <div class="position-sticky" style="top: 2rem;">

        <div class="p-4 mb-3 bg-light rounded">

            <!-- ADVERTISEMENT WILL GO HERE -->

                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3937087876336393"

                 crossorigin="anonymous"></script>

            <!-- pans-ad1 -->

            <ins class="adsbygoogle"

                 style="display:block"

                 data-ad-client="ca-pub-3937087876336393"

                 data-ad-slot="3179675371"

                 data-ad-format="auto"

                 data-full-width-responsive="true"></ins>

            <script>

                 (adsbygoogle = window.adsbygoogle || []).push({});

            </script>

        </div>

        <div class="p-4 mb-3 bg-light rounded">

            <!-- <h4 class="fst-italic">About</h4> -->

            <p class="mb-0">Welcome to PANS UNIPORT BLOG.</p>

        </div>



        <!-- SIDEBAR CATEGORY NEWS -->



        <div class="my-4">

            <h2 class="sw-title">In This Category</h2>

            <div class="news-list">

                <?php



                if (isset($_GET['p_id'])) {

                    $cat_id = $_GET['p_id'];



                    $query = "SELECT * FROM posts WHERE post_category_id = '$cat_id' LIMIT 4;";



                    $in_categories = mysqli_query($conn, $query);





                    while ($row = mysqli_fetch_assoc($in_categories)) {



                        $in_post_id = $row['post_id'];

                        $in_post_img = $row['post_image'];

                        $in_post_title = $row['post_title'];



                        echo '

                            <a href="post.php?p_id=' . $in_post_id . '">



                                <div class="nl-item">

                                    <div class="nl-img">

                                        <img src="../assets/img/blog/' . $in_post_img . '" />

                                    </div>

                                    <div class="nl-title">

                                        <a href="post.php?p_id=' . $in_post_id . '">' . $in_post_title . '</a>

                                    </div>

                                </div>

                            </a>

                            ';

                    }



                    $in_post_counts = mysqli_num_rows($in_categories);





                    if ($in_post_counts < 4) {





                        $query = "SELECT * FROM posts";

                        $in_categories = mysqli_query($conn, $query);







                        while ($row = mysqli_fetch_assoc($in_categories)) {



                            $in_post_id = $row['post_id'];

                            $in_post_img = $row['post_image'];

                            $in_post_title = $row['post_title'];



                            echo '

                                    <a href="post.php?p_id=' . $in_post_id . '">

        

                                        <div class="nl-item">

                                            <div class="nl-img">

                                                <img src="../assets/img/blog/' . $in_post_img . '" />

                                            </div>

                                            <div class="nl-title">

                                                <a href="post.php?p_id=' . $in_post_id . '">' . $in_post_title . '</a>

                                            </div>

                                        </div>

                                    </a>

                                    ';

                        }

                    }

                } else {

                    $query = "SELECT * FROM posts LIMIT 4;";



                    $in_categories = mysqli_query($conn, $query);



                    while ($row = mysqli_fetch_assoc($in_categories)) {



                        $in_post_id = $row['post_id'];

                        $in_post_img = $row['post_image'];

                        $in_post_title = $row['post_title'];



                        echo '

                            <a href="post.php?p_id=' . $in_post_id . '">



                                <div class="nl-item">

                                    <div class="nl-img">

                                        <img src="../assets/img/blog/' . $in_post_img . '" />

                                    </div>

                                    <div class="nl-title">

                                        <a href="post.php?p_id=' . $in_post_id . '">' . $in_post_title . '</a>

                                    </div>

                                </div>

                            </a>

                            ';

                    }

                }

                ?>

            </div>

        </div>

        <!-- END SIDEBAR CATEGORY NEWS -->



        <!-- INSTAGRAM FEED -->

        <!-- <div class="container">

            <h2 class="sw-title">Instagram Feed</h2>

            <div class="row row-no-padding">

                <div class="col-4">

                    <a href="">

                        <img src="assets/img/news-350x223-2.jpg" alt="" class="img-fluid p-2">

                    </a>

                </div>

                <div class="col-4">

                    <a href="">



                        <img src="assets/img/news-350x223-3.jpg" alt="" class="img-fluid p-2">

                    </a>

                </div>  

                <div class="col-4">

                    <a href="">



                        <img src="assets/img/news-350x223-2.jpg" alt="" class="img-fluid p-2">

                    </a>

                </div>  

            </div>



            <div class="row row-no-padding">

                <div class="col-4">

                    <a href="">

                        <img src="assets/img/news-350x223-2.jpg" alt="" class="img-fluid p-2">

                    </a>

                </div>

                <div class="col-4">

                    <a href="">



                        <img src="assets/img/news-350x223-3.jpg" alt="" class="img-fluid p-2">

                    </a>

                </div>  

                <div class="col-4">

                    <a href="">



                        <img src="assets/img/news-350x223-2.jpg" alt="" class="img-fluid p-2">

                    </a>

                </div>  

            </div>



            <div class="row row-no-padding mb-4">

                <div class="col-4">

                    <a href="">

                        <img src="assets/img/news-350x223-2.jpg" alt="" class="img-fluid p-2">

                    </a>

                </div>

                <div class="col-4">

                    <a href="">



                        <img src="assets/img/news-350x223-3.jpg" alt="" class="img-fluid p-2">

                    </a>

                </div>  

                <div class="col-4">

                    <a href="">



                        <img src="assets/img/news-350x223-2.jpg" alt="" class="img-fluid p-2">

                    </a>

                </div>  

            </div>

        </div> -->

        <!-- END INSTAGRAM FEED -->







        <div class="p-4">

            <!-- SIDEBAR CATEGORY LIST -->

            <h2 class="sw-title">Popular Category</h2>

            <ol class="list-unstyled mb-0">

                <?php

                $query = "SELECT * FROM blog_categories ;";



                $sidebar_categories = mysqli_query($conn, $query);







                while ($row = mysqli_fetch_assoc($sidebar_categories)) {

                    $cat_title = $row['cat_title'];

                    $cat_id = $row['cat_id'];



                    $query2 = "SELECT * FROM posts WHERE post_category_id = $cat_id;";

                    $num_sidebar_cat = mysqli_query($conn, $query2);



                    $num_cat = mysqli_num_rows($num_sidebar_cat);



                    echo "<li><a href='category.php?category=$cat_id'>{$cat_title}({$num_cat})</a></li>";

                }

                ?>

            </ol>

            <!-- END SIDEBAR CATEGORY LIST -->



            <!-- NEWSLETTER SIGNUP -->

            <div class="mt-4">

                <?php



                if (isset($_POST['newsletter'])) {

                    // require 'db.php';



                    $email = mysqli_real_escape_string($conn, $_POST['email']);



                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                        echo '

                        <div class="alert alert-danger" role="alert">

                            Please provide a valid email address

                        </div>

                        ';

                        exit();

                    } else {



                        $sql = "SELECT * FROM newsletter WHERE email = '$email'";

                        $result = mysqli_query($conn, $sql);

                        $resultCheck = mysqli_num_rows($result);



                        if ($resultCheck > 0) {

                            echo '

                            <div class="alert alert-danger" role="alert">

                                Email already exist

                            </div>

                            ';

                            exit();

                        } else {



                            $sql = "INSERT INTO newsletter (email) VALUES('$email')";

                            $result2 = mysqli_query($conn, $sql);



                            if ($result2 > 0) {



                                $to = $email;



                                $subject = "Newsletter Signup";



                                $message = '

                                <!DOCTYPE html>

                <html lang="en">

                <head>

                    <meta charset="UTF-8">

                    <meta http-equiv="X-UA-Compatible" content="IE=edge">

                    <meta name="viewport" content="width=device-width, initial-scale=1.0">

                    <title>PANS UNIPORT</title>

                    <!-- Latest compiled and minified CSS -->

                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



                </head>

                <body>

                    <div class="container">

                        <h1 class="h1">Thank you for subscribing to our newsletter</h1>

                        <p class="display-5 h4">

                            Feel free to read our <a href="https://pansuniport.com/blog" class="text-primary">Blog Post @https://pansuniport.com/blog</a>

                        </p>



                        <p class="display-5 h4">

                            <span>Follow us on:</span> <span class="mr-3"><a href="https://www.instagram.com/p/CULSpYAov0h/?utm_medium=copy_link" class="text-danger"><i class="bi bi-instagram"></i></a></span>  <span class="mr-3"><a href="https://vm.tiktok.com/ZMRpfTxDb/"><i class="bi bi-tiktok" class="text-muted"></i></a></span> <span class="mr-3"><a href="https://m.facebook.com/groups/STEPUP.PANS/permalink/5069614186388831/" class="text-primary"><i class="bi bi-facebook"></i></a></span> <span class="mr-3"><a href="https://www.linkedin.com/posts/pans-uniport_birthdaycopia-so9e23-name-nwite-thankgod-activity-6846894402799968256-Mo2-" class="text-primary"><i class="bi bi-linkedin"></i></i></a></span>

                        </p>



                        <img src="https://www.pansuniport.com/pans-logo.jpg" alt="image" style="height: 120px;">

                    </div>

                    

                </body>

                </html>

                                

                                

                                ';







                                $headers = "From: Pansuniport <Johnny@pansuniport.com> \r\n";

                                $headers .= "Reply-To: Johnny@pansuniport.com\r\n";

                                $headers .= "Content-type: text/html\r\n";



                                mail($to, $subject, $message, $headers);











                                echo '

                                <div class="alert alert-success" role="alert">

                                    Newsletter sign up is successful

                                </div>

                                ';



                                exit();

                            }

                        }

                    }

                }

                ?>

                <h2 class="sw-title">Newsletter</h2>

                <p>

                    Subscribe to our Newsletter to stay informed about our recent post, upcoming events, programmes and competitions.

                </p>

                <form action="" class="news-letter" style="max-width: 300px;">

                    <input type="text" name="" id="" placeholder="Enter email">

                    <button type="submit" name="newsletter">Submit</button>

                </form>

            </div>

            <!-- END NEWSLETTER SIGNUP -->

        </div>

    </div>

</div>