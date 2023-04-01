<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8" />

    <meta name="description" content="The Pharmaceutical Association of Nigerian Student (PANS) is the representative body of the prestigious faculty of Pharmaceutical sciences, University of Port Harcourt" />

    <meta name="keywords" content="PANS, pharmacy, pharmaceutical association of Nigerian Student" />

    <meta name="viewport" content="width=device-width, initial-scale = 1" />

    <meta http-equiv="X-UA-Compatible" content="ie-edge" />

    <meta name="theme-color" content="#04018D" />

    <link rel="shortcut icon" href="./assets/img/home/favicon.png" type="image/x-icon">

    <title>PANS UNIPORT</title>

    <meta property="og:locale" content="en_US" />

    <meta property="og:type" content="website" />

    <meta property="og:title" content="The Pharmaceutical Association of Nigerian Student (PANS) Uniport" />

    <meta property="og:url" content="https://www.pansuniport.com" />

    <meta property="og:description" content="The Pharmaceutical Association of Nigerian Student (PANS) is the representative body of the prestigious faculty of Pharmaceutical sciences, University of Port Harcourt Chapter" />

    <meta name="description" content="The Pharmaceutical Association of Nigerian Student (PANS) is the representative body of the prestigious faculty of Pharmaceutical sciences, University of Port Harcourt." />

    <meta property="og:site_name" content="PANSUNIPORT" />

    <meta property="og:image" content="https://www.pansuniport.com/pans-logo.jpg" />

    <meta property="og:image:width" content="400" />

    <meta property="og:image:height" content="400" />

    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:title" content="Pharmaceutical Association of Nigerian Student (PANS), University of Port Harcourt Chapter" />

    <meta name="twitter:image" content="https://www.pansuniport.com/pans-logo.jpg" />

    <meta name="twitter:description" content="The Pharmaceutical Association of Nigerian Student (PANS) is the representative body of the prestigious faculty of Pharmaceutical sciences, University of Port Harcourt Chapter." />

    <!-- Favicons -->

    <link href="assets/img/favicon.png" rel="icon">

    <link href="assets/img/favicon.png" rel="apple-touch-icon">



    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



    <!-- Vendor CSS Files -->

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/css/floating-labels.css">

</head>



<body>

    <form class="form-signin" action="includes/signup.php" method="post">

        <div class="text-center mb-4">

            <img class="mb-4" src="assets/img/home/panslogo.png" alt="" width="200" height="100">

            <h1 class="h3 mb-3 font-weight-normal">PANsite E-portal</h1>

            <nav aria-label="breadcrumb">

                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Sign up</li>

                </ol>

            </nav>

            <p>Fill in your details carefully and correctly</p>

            <p class="mt-4">

                <?php



                if (isset($_GET['signup'])) {



                    $variable = $_GET['signup'];

                    # code...

                    switch ($variable) {

                        case 1:

                            echo "<span class='alert alert-danger' style='font-size: 13px;'>Please ensure you fill all fields</span>";

                            break;

                        case 3:

                            echo "<span class='alert alert-danger' style='font-size: 13px;'> The user with the provided matriculation number has been taken. Try again </span>";

                            break;

                        case 2:

                            echo "<span class='alert alert-danger' style='font-size: 13px;'> Please no special characters are allowed for name input </span>";

                            break;

                        case 4:

                            echo "<span class='alert alert-success' style='font-size: 13px;'> You have successfully signed up <a href='login.php'><b> Log in now</b> </a> </span>";

                            break;

                        case 5:

                            echo "<span class='alert alert-danger' style='font-size: 13px;'>Please provide a valid Matriculation number</span>";

                            break;

                        case 6:

                            echo "<span class='alert alert-danger' style='font-size: 13px;'>Please enter a valid phone number</span>";

                            break;

                        case 7:

                            echo "<span class='alert alert-danger' style='font-size: 13px;'>There was a password mismatch, enter passowrds correctly</span>";

                            break;



                        default:

                            echo "There was an error";

                            break;

                    }

                }

                ?>

            </p>

        </div>



        <div class="form-label-group">

            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First name" required autofocus>

            <label for="first_name">First name</label>

        </div>



        <div class="form-label-group">

            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last name" required>

            <label for="last_name">Last name</label>

        </div>

        <div class="form-label-group">

            <input type="text" id="mat_no" name="mat_no" class="form-control" placeholder="U20../47.." required>

            <label for="mat_no">Matric No.</label>

        </div>

        <div class="form-label-group">

            <input type="email" id="email" name="email" class="form-control" placeholder="ada@example.com" required>

            <label for="email">Email</label>

        </div>

        <?php

        if (isset($_GET['xyz'])) {



            echo '



            <div class="form-label-group">

                <span class="lead">Office:</span>

                <select class="" id="exco" name="exco" required >

                    <!-- <optgroup> -->

    

                        <option value="president">President</option>

                        <option value="vice_president">Vice President</option>

                        <option value="secretary">Secretary</option>

                        <option value="dowh">Director of welfare and health</option>

                        <option value="dosocial">Director of socials</option>

                        <option value="dosports">Director of sports</option>

                        <option value="finsec">Financial Secretary</option>

                        <option value="treasurer">Treasurer</option>

                        <option value="asg">Assistant Secretary</option>

                        <option value="ass_finsec">Assistant Financial Secretary</option>

                        <option value="pro">P.R.O</option>

                        <option value="provost">Provost</option>

                        <option value="others">Others</option>

                    <!-- </optgroup> -->

                </select>

            </div>

            ';

        }

        ?>

        <div class="input-group mb-3">

            <span class="input-group-text" id="basic-addon1">+234</span>

            <input type="text" id="user_phone" name="user_phone" class="form-control" placeholder="Phone Number" maxlength="11" required>

        </div>

        <div class="form-label-group">

            <span class="lead">Gender:</span>

            <select class="form-control" id="gender" name="gender" required>

                <optgroup>



                    <option value="male">Male</option>

                    <option value="female">Female</option>

                </optgroup>

            </select>

        </div>

        <div class="form-label-group">

            <span class="lead">Month of birth:</span>

            <select class="form-control" id="gender" name="mob" required>

                <optgroup>



                    <option value="jan">January</option>

                    <option value="feb">Febuary</option>

                    <option value="mar">March</option>

                    <option value="apr">April</option>

                    <option value="may">May</option>

                    <option value="jun">June</option>

                    <option value="jul">July</option>

                    <option value="aug">August</option>

                    <option value="sep">September</option>

                    <option value="oct">October</option>

                    <option value="nov">November</option>

                    <option value="dec">December</option>

                </optgroup>

            </select>

        </div>

        <div class="form-label-group">

            <input type="password" id="user_pwd" name="user_pwd" class="form-control" placeholder="Enter Password" required>

            <label for="user_pwd">Password</label>

        </div>

        <div class="form-label-group">

            <input type="password" id="user_pwd_check" name="user_pwd_check" class="form-control" placeholder="Enter Password Again" required>

            <label for="user_pwd_check">Confirm Password</label>

        </div>



        <button class="btn btn-primary btn-block" type="submit" name="signup">Register</button>

        <p class="mt-5 mb-3 text-muted text-center">&copy; <script>document.write(new Date().getFullYear())</script> Copyright PANS UNIPORT. All Rights Reserved</p>

        <p class="text-center">Designed by <a href="https://irochibuzor.com" style="text-decoration: none;">Geniroh</a></p>

    </form>

</body>



</html>