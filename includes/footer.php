  <!-- ======= Footer ======= -->

  <footer id="footer">

    <div class="footer-top">

      <div class="container p-4">

        <div class="row">

          <div class="col-lg-3 col-md-6">

            <div class="footer-info">

              <h3>PANS UNIPORT</h3>

              <div class="social-links mt-3">

                <!-- <a href="https://twitter.com" class="twitter"><i class="bi bi-youtube"></i></a> -->

                <a href="https://web.facebook.com/groups/STEPUP.PANS" class="facebook"><i class="bi bi-facebook" target="_blank"></i></a>

                <a href="https://www.instagram.com/p/CULSpYAov0h/?utm_medium=copy_link" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>

                <a href="https://www.linkedin.com/company/pans-uniport/" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>

                <a href="https://www.tiktok.com/@pansuniport" class="linkedin" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">

                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />

                  </svg></a>

              </div>

            </div>

          </div>



          <div class="col-lg-2 col-md-6 footer-links">

            <h4>Useful Links</h4>

            <ul>

              <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>

              <li><i class="bi bi-chevron-right"></i> <a href="about.php">About us</a></li>

              <li><i class="bi bi-chevron-right"></i> <a href="hall_of_fame.php">Hall Of Fame</a></li>

            </ul>

          </div>



          <div class="col-lg-3 col-md-6 footer-links">

            <h4>Groups</h4>

            <ul>

              <li><i class="bi bi-chevron-right"></i> <a href="./blog">Blog</a></li>

              <li><i class="bi bi-chevron-right"></i> <a href="admap.php">ADMAP</a></li>

              <li><i class="bi bi-chevron-right"></i> <a href="sports.php">Sports</a></li>

            </ul>

          </div>



          <div class="col-lg-4 col-md-6 footer-newsletter">

            <?php



            if (isset($_POST['submit'])) {

              // require 'db.php';



              $email = mysqli_real_escape_string($conn, $_POST['email']);



              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                // header("Location: ../index.php?newslt=1");

                echo "<p class='alert alert-error'>There was an error! </p>";

                exit();

              } else {



                $sql = "SELECT * FROM newsletter WHERE email = '$email'";

                $result = mysqli_query($conn, $sql);

                $resultCheck = mysqli_num_rows($result);



                if ($resultCheck > 0) {

                  // header("Location: ../index.php?newslt=2");

                  echo "<p class='alert alert-info'>Thank you, but record already exists </p>";

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



                    // header("Location: ../index.php?newslt=3");

                    echo "<p class='alert alert-success'>Newsletter sign up was successful </p>";



                    exit();

                  }

                }

              }

            } 

            // else {

            //   header("Location: ../index.php");

            //   exit();

            // }







            ?>

            <h4>Our Newsletter</h4>

            <p>Stay informed about our upcoming events, programmes and competitions.</p>

            <form action="includes/newsignup.php" method="post">

              <input type="email" name="email" required><input name="submit" type="submit" value="Subscribe">

            </form>

          </div>



        </div>

      </div>

    </div>



    <div class="container">

      <div class="copyright">

        &copy; <script>document.write(new Date().getFullYear())</script> Copyright <strong><span>PANS UNIPORT</span></strong>. All Rights Reserved

      </div>

      <div class="credits">

        Developed with 💜 by <a href="https://irochibuzor.com" target="_blank">Geniroh</a>

      </div>

    </div>

  </footer><!-- End Footer -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  <!-- Vendor JS Files -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="assets/js/aos.js"></script>

  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/glightbox.js"></script>

  <script src="assets/js/isotope.pkgd.js"></script>

  <script src="assets/js/validate.js"></script>

  <script src="assets/js/swiper-bundle.min.js"></script>

  <script src="assets/js/slick.min.js"></script>



  <!-- Template Main JS File -->

  <script src="assets/js/main.js"></script>



