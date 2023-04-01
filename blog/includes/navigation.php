        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-6">
                        <div class="b-logo">
                            <a href="../index.php">
                                <img src="../assets/img/blog/logo.png" alt="Logo"> <span>PANS UNIPORT BLOG</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <form action="search.php" method="POST">
                            <div class="b-search">
                                <input type="text" name="search" placeholder="Search">
                                <button name="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADER -->

        <!-- NAVBAR -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <?php
                            $query = "SELECT * FROM blog_categories;";

                            $nav_categories = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($nav_categories)) {
                                $cat_title = $row['cat_title'];
                                $cat_id = $row['cat_id'];
                                echo "<a href='category.php?category={$cat_id}' class='nav-item nav-link'>{$cat_title}</a>";
                            }
                            ?>

                        </div>
                        <div class="social ml-auto">
                            <a href="https://www.tiktok.com/@pansuniport" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="fab fa-twitter" viewBox="0 0 16 16">
                                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                                </svg></a>
                            <a href="https://web.facebook.com/groups/STEPUP.PANS" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/company/pans-uniport/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/p/CULSpYAov0h/?utm_medium=copy_link" target="_blank"><i class="fab fa-instagram"></i></a>
                            <!-- <a href=""><i class="fab fa-youtube"></i></a> -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- NAVBAR -->