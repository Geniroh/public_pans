<?php

session_start();
include 'includes/db.php';

if (isset($_GET["info"])) {
  if ($_GET["info"] == 'log_out') {
    session_destroy();
    session_unset();
    header("Location: login.php");
    exit();
  }
}

?>

<?php include 'user-setting/header.php';

?>

<?php
if (!(isset($_SESSION['first_name']) || isset($_COOKIE['user']))) {
  header("Location: ./login.php");
}
?>

<body>

  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a href="index.php" class="navbar-brand">
          <img src="assets/img/home/panslogo.png" alt="" style="width: 100px; height:100%;">
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <!-- <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Short links</p>
              <a class="dropdown-item preview-item" href="https://pansuniport.com/blog/news" target="_blank">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Latest News</h6>
                </div>
              </a>
              <a class="dropdown-item preview-item" href="user.php?x=3">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Upcoming Events</h6>
                </div>
              </a>
            </div>
          </li> -->

          <li class="nav-item nav-profile">
            <a class="nav-link" href="user.php?x=1">

              <img src="user-setting/img/placeholder2.png" alt="profile" />
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>



    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="user.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard </span>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="user.php?x=1">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Profile</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#my-profile" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">My Profile</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="my-profile">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="user.php?x=1">Edit Profile</a></li>
                <li class="nav-item"> <a class="nav-link" href="user.php?x=4">Suggestion Box</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="construct.html">Online Games</a></li> -->
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="./blog/" target="_blank">
              <i class="ti-blackboard menu-icon"></i>
              <span class="menu-title">Blog</span>
            </a>
          </li> -->

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#my-academics" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-blackboard menu-icon"></i>
              <span class="menu-title">My Academics</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="my-academics">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="user.php?x=7">Download Material</a></li>
                <li class="nav-item"> <a class="nav-link" href="user.php?x=5">Take a quiz</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="construct.html">Request for help</a></li> -->
                <li class="nav-item"> <a class="nav-link" href="construct.html">CGPA Calculator</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#my-socials" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-comments menu-icon"></i>
              <span class="menu-title">Socials</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="my-socials">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="./blog/">Blog</a></li>
                <li class="nav-item"> <a class="nav-link" href="user.php?x=3">Upcoming Events</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="user.php?x=3">
              <i class="ti-announcement menu-icon"></i>
              <span class="menu-title">Events</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="user.php?x=4">
              <i class="ti-briefcase menu-icon"></i>
              <span class="menu-title">Suggestion Box</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="user.php?x=5">
              <i class="ti-bookmark-alt menu-icon"></i>
              <span class="menu-title">E-Library</span>
            </a>
          </li> -->
          <?php
          if ($_SESSION['exco'] !== "default") {
            echo '
              <li class="nav-item">
                <a class="nav-link" href="user.php?x=a">
                  <i class="ti-medall-alt menu-icon"></i>
                  <span class="menu-title">Executive</span>
                </a>
              </li>
              ';
          }
          ?>
          <?php
          if ($_SESSION['exco'] == "president") {
            echo '
              <li class="nav-item">
                <a class="nav-link" href="user.php?x=b">
                  <i class="ti-cup menu-icon"></i>
                  <span class="menu-title">Hall of fame</span>
                </a>
              </li>
              ';
          }
          ?>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Utilities</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="user.php?x=6">ID Card Application</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="user.php?info=log_out">
              <i class="ti-power-off menu-icon"></i>
              <span class="menu-title">Log Out</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome <?php echo $_SESSION['first_name']; ?></h3>
                </div>
                <div class="col-12 col-xl-4">
                  <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-sm btn-light bg-white" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="mdi mdi-calendar"></i>
                        Today (<?php
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

                                echo $day . " " . $month . " " . $year . ")";
                                ?>
                      </button>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <?php
          if (isset($_GET['x'])) {
            $request = $_GET['x'];
          } else {
            $request = "";
          }


          switch ($request) {
            case '1':
              include "user-setting/profile.php";
              break;
            case '2':
              include "user-setting/noticeboard.php";
              break;
            case '3':
              include "user-setting/events.php";
              break;
            case '4':
              include "user-setting/suggestion.php";
              break;
            case '5':
              include "user-setting/elibrary.php";
              break;
            case '6':
              include "user-setting/id_application.php";
              break;
            case '7':
              include "user-setting/materials.php";
              break;
            case '8':
              include "user-setting/rxmall_upload.php";
              break;
            case 'a':
              include "user-setting/exco.php";
              break;
            case 'b':
              include "user-setting/hall_of_fame.php";
              break;

            default:
              include "user-setting/default.php";
              break;
          }



          ?>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <b>PANS UNIPORT</b> <script>document.write(new Date().getFullYear())</script>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Developed with 💜 by <a href="https://irochibuzor.com" target="_blank">Geniroh</a></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <script src="user-setting/js/vendor.bundle.base.js"></script>

    <script src="user-setting/js/off-canvas.js"></script>

    <script src="user-setting/js/dashboard.js"></script>
</body>

</html>