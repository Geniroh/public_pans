<?php include 'includes/header.php'; ?>

<body>

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <a href="index.php"><img src="assets/img/home/panslogo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About Us</a></li>
          <li><a class="nav-link scrollto" href="./blog/">Blog</a></li>
          <li><a class="nav-link scrollto active" href="hall_of_fame.php">Hall Of Fame</a></li>
          <li><a class="nav-link" href="login.php">Sign in</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="https://www.tiktok.com/@pansuniport" class="linkedin" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
          </svg>
        </a>
        <a href="https://www.linkedin.com/company/pans-uniport/" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
        <a href="https://web.facebook.com/groups/STEPUP.PANS" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/p/CULSpYAov0h/?utm_medium=copy_link" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header>

  <main>
    <div class="container-fluid hero-bg" style="background-image: url('./assets/img/home/paladins.png')">
      <div>
        <h1>
          Hall Of Fame
        </h1>
        <hr>
        <p>
          Recognizing those that have supported the growth of this noble association
        </p>
      </div>
    </div>

    <div class="container-fluid bg-light p-4">
      <div class="row">

        <?php


        $query = "SELECT * FROM hallOfFame";

        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
          $hall_name = $row['hall_name'];
          $hall_img = $row['hall_img'];
          $hall_office = $row['hall_office'];
          $hall_description = $row['hall_description'];

          echo '
        <div class="col-md-4 col-6">
          <div class="hall p-4">
            <div class="card">
              <img src="assets/img/' . $hall_img . '" class="card-img-top" alt=' . $hall_name . ' style="max-height: 300px;">
              <div class="card-body">
                  
                <h6 class="card-title text-center">' . $hall_name . '</h6>
                <p class="card-text text-center"> 
                    <span class="d-block"style="font-size: 10px;">
                      ' . $hall_office . '
                    </span>
                    <span class="hall-desc text-center text-muted" style="font-size: 9px;">
                      ' . $hall_description . '
                    </span>
                  </p>
              </div>
            </div>
          </div>
        </div>
        
        ';
        }

        ?>

      </div>
    </div>


  </main>


  <?php include 'includes/footer.php'; ?>
</body>

</html>