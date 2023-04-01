<?php include "./components/admin_header.php"; ?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="mb-4 text-gray-900">Welcome to PANS Uniport Admin Gateway</h4>
                                        <div class="overflow-hidden" style="max-height: 30vh;">
                                            <div class="container px-5">
                                                <img src="../assets/img/home/panslogo.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    if (isset($_POST['login_admin'])) {
                                        session_start();

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

                                            if(!$result){
                                                echo "<p style='color: red;'>Ensure you have an account on the e-portal first then <a href='login.php'> Try Again</a></p>";
                                                exit();
                                            }
                                            $resultCheck = mysqli_num_rows($result);
                                           
                                           
                                            if ($resultCheck < 1 ) {
                                                echo "<p style='color: red;'>You don't have Admin prviledges please contact <a href='mailto: support@pansuniport.com'>technical team</a> or <a href='register.php'> register first</a></p>";
                                                exit();
                                            } else {
                                                if ($row = mysqli_fetch_assoc($result)) {
                                                    //Dehashing password
                                                    $hashedPwdCheck = password_verify($password, $row['user_pwd']);
                                                    if ($hashedPwdCheck == false) {
                                                        echo "<p style='color: red;'>Incorrect password or email</p>";
                                                        exit();
                                                    } elseif ($hashedPwdCheck == true) {
                                                        
                                                        $_SESSION['user_id'] = $row['user_id'];
                                                        $_SESSION['first_name'] = $row['first_name'];
                                                        $_SESSION['last_name'] = $row['last_name'];
                                                        $_SESSION['email'] = $row['email'];
                                                        $_SESSION['mat_no'] = $row['mat_no'];
                                                        $_SESSION['user_phone'] = $row['user_phone'];
                                                        $_SESSION['admin_role'] = $row['admin_role'];
                                                        $_SESSION['exco'] = $row['exco'];

                                                        header("Location:index.php");
                                                        // echo "<script> window.location.href ='index.php';</script>";
                                                        // echo "Here";
                                                        exit();
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <div class="my-3">
                                                <input type="text" class="form-control mb-3" id="admin_user" placeholder="Mat No/Email" name="admin_user">

                                                <input type="password" class="form-control" id="admin_pwd" placeholder="Password" name="admin_pwd">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block" name="login_admin">Proceed</button>
                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="register.php">Register an Account!</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>