<?php

if (isset($_POST['submit'])) {
    require 'db.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?newslt=1");
        exit();
    } else {

        $sql = "SELECT * FROM newsletter WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            header("Location: ../index.php?newslt=2");
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
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>PANS UNIPORT</title>
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
                $headers .= "Cc: testsite <support@pansuniport.com> \r\n";
                $headers .= "Reply-To: Johnny@pansuniport.com\r\n";
                $headers .= "X-Sender: Pansuniport <Johnny@pansuniport.com>\r\n";
                $headers .= 'X-Mailer: PHP/' . phpversion();
                $headers .= "X-Priority: 1\r\n"; // Urgent message!
                $headers .= "Content-type: text/html\r\n";

                mail($to, $subject, $message, $headers);

                header("Location: ../index.php?newslt=3");

                exit();
            }
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
