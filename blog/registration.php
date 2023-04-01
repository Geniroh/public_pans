<?php  include "includes/db.php"; ?>
 <?php  include "includes/header.php"; ?>



<?php 

    if(isset($_GET['err'])){
        echo "<script> alert('There was an error with the login try again!')</script>";
    }
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
       
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        // echo $firstname. $lastname;
        $password = $_POST['password'];

        
        $username = mysqli_real_escape_string($conn, $username);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

    $query = "INSERT INTO users(username, user_email, user_firstname, user_lastname, user_password) VALUES('{$username}', '{$email}','{$firstname}', '{$lastname}', '{$password}')";

    $register_user_query = mysqli_query($conn, $query);

    if(!$register_user_query){
        die("QUERY FAILED". mysqli_error($conn));
    }
    }
?>


    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>
    
    <div class="container">


        <div class="row g-4" style="margin: 50px auto;">

            <!-- Blog Entries Column -->
            <!-- MAIN CONTENT -->
        <div class="col-md-8">
            <div class="container">


            <div class="px-4 pt-5 text-center border-bottom">
                <h4 class="">Welcome to PANS Uniport Admin Gateway</h4>
                <div class="col-md-10 ">
                    <p>Note this section of the site reserved for admins who have been given special features for the management of PANS Uniport website.</p>
                    <p>If you are lost please kindly return <a href="index.php">Home</a></p>
                </div>
                <div class="overflow-hidden" style="max-height: 30vh;">
                <div class="container px-5">
                    <img src="assets/img/logo.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                </div>
                </div>
            </div>
            <h4>How to Navigate</h4>
            <p>First Ensure that you have been given the pin that will allow for you to register and login in subsequently. If not contact the technical team for more enquires <a href="mailto:support@pansuniport.com">Technical Team</a>
            <ul>
                <li>Enter Pin below and click enter</li>
                <li>If Pin is correct you will be able to register</li>
                <li>Once registered proceed to login</li>
                <li>That's all there is </li>
               
            </ul>
            <p>And as men of honour we join hands</p>

            <?php
                if(isset($_POST['pinCollector'])){

                    $pinCollector = $_POST['pinCollector'];
    
                    if ($pinCollector == 'admincontrol') {
                        echo '
                        <section id="login" class="mb-4">
                            <div class="form-wrap" >
                                <h4>Register</h4>
                                <form role="form" action="registration.php" method="post"           id="login-form" autocomplete="off">
                                    <div class="form-group">
                                        <label for="first_name" class="sr-only">First name</label>
                                        <input type="text" name="first_name" id="first_name"class="form-control" placeholder="Enter First Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name" class="sr-only">Last name</label>
                                        <input type="text" name="last_name" id="last_name"class="form-control" placeholder="Enter Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="sr-only">username</label>
                                        <input type="text" name="username" id="username"class="form-control" placeholder="Enter Desired Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="sr-only">Password</label>
                                        <input type="password" name="password" id="key" class="form-control" placeholder="Password" >
                                    </div>
                                
                                    <button type="submit" name="submit" id="btn-login" class="btn btn-primary btn-block">Register</button>
                                </form>
                                
                            </div>
                        </section>
                        
                        
                        ';
                    } else{
                        echo '

                        <div class="alert alert-danger" role="alert">
                            You entered the wrong pin!
                        </div>
                        ';
                    }
                }


            ?>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <input type="text" name="pinCollector" class="form-control" placeholder="Enter Pin">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>

                
                    

                    <section>
                        <div class="well mt-4">
                            <h4>Login</h4>
                            <form action ="includes/login.php" method ="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" name ="username" placeholder="Enter Username/Email">
                                </div>

                                <div class="form-group">
                                    <!-- <label for="login" class="sr-only">Password</label> -->
                                    <input type="password" class="form-control" name ="user_password" placeholder="Password">
                                </div>
                                <button type="submit" name="login" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div>
                    </section>
            </div>
        </div>
            <!--End of Blog Enteries Column-->

            <!-- Blog Sidebar Widgets Column -->
            <?php include 'includes/sidebar.php'; ?>
            <!-- End Of Blog Sidebar -->
            
        </div>
        <!-- /.row -->

        <hr>
    </div>

<?php 

include 'includes/footer.php';
?>

