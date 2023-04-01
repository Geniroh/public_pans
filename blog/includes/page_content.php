<!-- MAIN CONTENT -->

<div class="col-md-8">



    <!-- SHORT INTRO FOR HOME -->

    <div class="container">

        <img src="../assets/img/blog/outreach.png" class="d-block mx-lg-auto img-fluid" alt="PANS UNIPORT" width="700" height="500" loading="lazy">

        <strong class="d-inline-block mb-2 text-success">Topic</strong>

        <h3 class="mb-0">Welcome to PANS Uniport Blog</h3>

        <div class="mb-1 text-muted">

            <?php

            $timezone = date_default_timezone_get();

            date_default_timezone_set($timezone);

            $mon = date('m');

            switch ($mon) {

                case 1:

                    $month = "Jan";

                    break;

                case 2:

                    $month = "Feb";

                    break;

                case 3:

                    $month = "Mar";

                    break;

                case 4:

                    $month = "Apr";

                    break;

                case 5:

                    $month = "May";

                    break;

                case 6:

                    $month = "June";

                    break;

                case 7:

                    $month = "July";

                    break;

                case 8:

                    $month = "Aug";

                    break;

                case 9:

                    $month = "Sep";

                    break;

                case 10:

                    $month = "Oct";

                    break;

                case 11:

                    $month = "Nov";

                    break;

                case 12:

                    $month = "Dec";

                    break;



                default:

                    # code...

                    break;

            }



            $day = date('d');

            $year = date('Y');



            echo $day . " " . $month . " " . $year;

            ?>

        </div>



        <p class="text-muted">

            This is the most exciting pharmacy student's blog with exceptional post on all topics including: health, sports, news, movies and loads more. Remember to subscribe to stay informed.

        </p>

    </div>

    <!-- END SHORT INTRO FOR HOME -->



    <!-- CATEGORY NEWS -->

    <div class="cat-news">

        <div class="container">



            <div class="row">

                <div class="col-md-12">

                    <h2>Health</h2>

                    <div class="row cn-slider">

                        <?php

                        $query = "SELECT * FROM posts WHERE post_category_id = 11 ORDER BY post_id DESC LIMIT 10";



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

                                <div class="cn-img">

                                <img src="../assets/img/blog/' . $post_image . '" />

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





            <div class="row">

                <div class="col-md-12">

                    <h2>Sports</h2>

                    <div class="row cn-slider">

                        <?php

                        $query = "SELECT * FROM posts WHERE post_category_id = 13 ORDER BY post_id DESC LIMIT 10";



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

                                <div class="cn-img">

                                <img src="../assets/img/blog/' . $post_image . '" />

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



            <div class="row">

                <div class="col-md-12">

                    <h2>Movies</h2>

                    <div class="row cn-slider">

                        <?php

                        $query = "SELECT * FROM posts WHERE post_category_id = 4 ORDER BY post_id DESC LIMIT 10";



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

                                <div class="cn-img">

                                <img src="../assets/img/blog/' . $post_image . '" />

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



    <!-- TAB CATEGORY NEWS -->

    <div class="tab-news">

        <div class="container">



            <div class="row">

                <div class="col-md-12">

                    <ul class="nav nav-pills nav-justified">

                        <li class="nav-item">

                            <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>

                        </li>

                    </ul>

                    <!-- TAB-CONTENT -->

                    <div class="tab-content">

                        <!-- FEATURED -->

                        <div id="featured" class="container tab-pane active">

                            <?php

                            $query = "SELECT * FROM posts WHERE post_desc = 'featured' ORDER BY post_id DESC LIMIT 3";



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

                                    <div class="tn-news">

                                        <div class="tn-img">

                                            <a href="post.php?p_id=' . $post_id . '">

                                            <img src="../assets/img/blog/' . $post_image . '" />

                                            </a>

                                        </div>

                                        <div class="tn-title">

                                            <a href="post.php?p_id=' . $post_id . '">' . $post_title . '</a>

                                        </div>

                                    </div> 

                                

                                ';

                            }

                            ?>

                        </div>



                        <!-- POPULAR -->

                        <div id="popular" class="container tab-pane fade">

                            <?php

                            $query = "SELECT * FROM posts WHERE post_desc = 'popular' ORDER BY post_id DESC LIMIT 3";



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

                                    <div class="tn-news">

                                        <div class="tn-img">

                                            <a href="post.php?p_id=' . $post_id . '">

                                            <img src="../assets/img/blog/' . $post_image . '" />

                                            </a>

                                        </div>

                                        <div class="tn-title">

                                            <a href="post.php?p_id=' . $post_id . '">' . $post_title . '</a>

                                        </div>

                                    </div> 

                                

                                ';

                            }

                            ?>

                        </div>



                        <!-- LATEST -->

                        <div id="latest" class="container tab-pane fade">

                            <?php

                            $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 3";



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

                                    <div class="tn-news">

                                        <div class="tn-img">

                                            <a href="post.php?p_id=' . $post_id . '">

                                            <img src="../assets/img/blog/' . $post_image . '" />

                                            </a>

                                        </div>

                                        <div class="tn-title">

                                            <a href="post.php?p_id=' . $post_id . '">' . $post_title . '</a>

                                        </div>

                                    </div> 

                                

                                ';

                            }

                            ?>

                        </div>

                    </div>

                    <!-- END TAB-CONTENT -->

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

                        <!-- END SOCIAL-LINKS -->

                        

                    </div>

                </div>

                

                <!-- ADVERTISEMENT HERE -->

                        <div class="row">

                            <div class="col-md-6">

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

                            <div class="col-md-6">

                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3937087876336393"

                                     crossorigin="anonymous"></script>

                                <!-- ad1 -->

                                <ins class="adsbygoogle"

                                     style="display:block"

                                     data-ad-client="ca-pub-3937087876336393"

                                     data-ad-slot="9980427682"

                                     data-ad-format="auto"

                                     data-full-width-responsive="true"></ins>

                                <script>

                                     (adsbygoogle = window.adsbygoogle || []).push({});

                                </script>

                            </div>

                        </div>

            </div>

        </div>

    </div>

</div>

<!-- END MAIN CONTENT -->