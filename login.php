<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description"
        content="The Pharmaceutical Association of Nigerian Student (PANS) is the representative body of the prestigious faculty of Pharmaceutical sciences, University of Port Harcourt" />
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
    <meta property="og:description"
        content="The Pharmaceutical Association of Nigerian Student (PANS) is the representative body of the prestigious faculty of Pharmaceutical sciences, University of Port Harcourt Chapter" />
    <meta name="description"
        content="The Pharmaceutical Association of Nigerian Student (PANS) is the representative body of the prestigious faculty of Pharmaceutical sciences, University of Port Harcourt." />
    <meta property="og:site_name" content="PANSUNIPORT" />
    <meta property="og:image" content="https://www.pansuniport.com/pans-logo.jpg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title"
        content="Pharmaceutical Association of Nigerian Student (PANS), University of Port Harcourt Chapter" />
    <meta name="twitter:image" content="https://www.pansuniport.com/pans-logo.jpg" />
    <meta name="twitter:description"
        content="The Pharmaceutical Association of Nigerian Student (PANS) is the representative body of the prestigious faculty of Pharmaceutical sciences, University of Port Harcourt Chapter." />
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/floating-labels.css">

</head>

<body>
    <form class="form-signin" action="includes/login.inc.php" method="post">
        <div class="text-center mb-4">
            <img class="mb-4" src="assets/img/home/panslogo.png" alt="" width="200" height="100">
            <h1 class="h3 mb-3 font-weight-normal">WELCOME BACK!</h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sign in</li>
                </ol>
            </nav>

            <p class="text-danger">
                <?php
                    if(isset($_GET['err'])){
                        $err = $_GET['err'];

                        switch ($err) {
                            case 1:
                                echo "Ensure to fill in all the fields";
                                break;

                            case 2:
                                echo "The user with the provided details does not exist";
                                break;
                            case 3:
                                echo "Incorrect email/mat no and/or password!";
                                break;
                            case 4:
                                echo "There was an error. Try again!";
                                break;
                            
                            default:
                            echo "There was an error. Try again!";
                                break;
                        }
                    }

                  


                ?>
            </p>

            <p class="text-success">
<?php

if(isset($_GET['reset'])){
    $reset = $_GET['reset'];

    echo "Your password reset request was successful, check your mail.";
}

?>
            </p>
            
        </div>

        <div class="form-label-group">
            <input type="text" id="user_info" name="user_info" class="form-control" placeholder="ada@example.com" required>
            <label for="user_info">Enter your Email/ Mat No</label>
        </div>
        <div class="form-label-group">
            <input type="password" id="user_pwd" name="user_pwd" class="form-control" placeholder="Enter Password" required>
            <label for="user_pwd">Password</label>
        </div>
        

        
        <div class="checkbox mb-3">
            <label>
             <input type="checkbox" value="remember-me" name="remember_me"> Remember me
            </label>
        </div>
        <div class="text-center">
            <a href="forgot_password.php" class="my-link">Forgot Password ?</a><br>
            <a href="register.php" class="my-link">Create an account</a>
        </div>
  
        <button class="btn btn-primary btn-block" type="submit" name="login">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; <?php echo date('Y'); ?></p>
    </form>
</body>
</html>
