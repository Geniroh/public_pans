<?php include "./components/admin_header.php"; ?>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12  text-gray-900 ">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="mb-4">Welcome to PANS Uniport Admin Gateway</h4>
                                <div class="col-md-10 ">
                                    <p>Note this section of the site is reserved for admins who have been given special features for the management of PANS Uniport website.</p>
                                    <p>If you are lost please kindly return <a href="../index.php">Home</a></p>
                                </div>
                                <div class="overflow-hidden" style="max-height: 30vh;">
                                    <div class="container px-5">
                                        <img src="../assets/img/home/panslogo.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <h4>How to Navigate</h4>
                            <p>First Ensure that you have been given the pin that will allow for you to register and login in subsequently. If not contact the technical team for more enquires <a href="mailto:support@pansuniport.com,ng">click here to contact</a>
                            <ul>
                                <li>Enter Pin below and click enter</li>
                                <li>If Pin is correct you will be able to register</li>
                                <li>Once registered proceed to login</li>
                                <li>That's all there is </li>

                            </ul>
                            <p>And as men of honour we join hands</p>

                            <?php
                            register_admin();
                            // } 
                            ?>


                            <?php
                            if (isset($_POST["pinCollector"])) {
                                $pin_collector = $_POST["pinCollector"];

                                if ($pin_collector == "admincontrols") {
                                    echo "<form class='mb-3' action='register.php' method='POST'>
                                    
                                    <p class='bg-success'> Pin correct now ensure that you have registered in pansite e-portal before logging into admin panel</p>
                                    <div class='mb-3'>
                                        <label for='admin_user' class='form-label'>Enter E-portal Email/Mat No</label>
                                        <input type='text' class='form-control' id='admin_user' name='admin_user' aria-describedby='userHelp'>
                                        <small id='userHelp' class='form-text'>This is the same detail that was used for pans e-portal</small>
                                    </div>
                                    <div class='mb-3'>
                                        <label for='admin_pwd' class='form-label'>Password</label>
                                        <input type='password' class='form-control' id='admin_pwd'  name='admin_pwd' aria-describedby='pwdHelp'>
                                        <small id='pwdHelp' class='form-text'>This is the same detail that was used for pans e-portal</small>
                                    </div>
                                    <button type='submit' class='btn btn-primary' name='create_admin'>Log In</button>";
                                } else {
                                    echo "<p style='color:red'>You entered a wrong pin!</p><span><a href='register.php'>Try again!</a></span>
                                    <p>If you are lost return <a href='../index.php'>Home</a> else contact the <a href='mailto: support@pansuniport.com'> technical team</a> for more information </p>";
                                }
                            } else {
                                echo "<form class='mb-3' action='register.php' method='POST'>
                                    <div class='mb-3'>
                                        <label for='pinCollector' class='form-label'>Enter Pin</label>
                                        <input type='text' class='form-control' id='pinCollector' name='pinCollector' aria-describedby='pinHelp'>
                                        <small id='pinHelp' class='form-text'>Enter the pin provided</small>
                                    </div>
                                    <button type='submit' class='btn btn-primary'>Submit</button>
                                    </form>
                                    ";
                            }
                            ?>
                            </form>
                            <!-- </form> -->
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