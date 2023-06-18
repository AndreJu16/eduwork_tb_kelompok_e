<?php
session_start();
require_once "../config/config.php";
require_once "../Admin/proses.php";

if (!isset($_SESSION['username'])) {
  echo "<script>alert('Mohon login dahulu !');</script>";
  echo "<script type='text/javascript'> document.location ='login.php'; </script>";
  return false;
}

if ($_SESSION["level"] != "admin") {
  echo '<script>
            alert("Maaf Anda Tidak Berhak Ke Halaman ini Admin !");
            window.location="../' . $_SESSION["level"] . '/";
         </script>';
  return false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- You can use Open Graph tags to customize link previews.
Learn more: https://developers.facebook.com/docs/sharing/webmasters -->

  <title>Dashboard - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <!-- Start Logo -->
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $pengguna["username"]; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header">
              <h6><?= $pengguna["username"]; ?></h6>
              <span><?= $pengguna["level"]; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav>
  </header>
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">


      <!-- Start Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-validationtw.php">
              <i class="bi bi-circle" id="brand"></i><span>Add Tempat Wisata</span>
            </a>
          </li>
          <li>
            <a href="forms-daerah-wisata.php">
              <i class="bi bi-circle" id="category"></i><span>Add Daerah Wisata</span>
            </a>
          </li>
          <li>
            <a href="forms-validationf.php">
              <i class="bi bi-circle" id="product"></i><span>Add Fasilitas</span>
            </a>
          </li>
          <li>
            <a href="forms-kategori.php">
              <i class="bi bi-circle" id="product"></i><span>Add Kategori</span>
            </a>
          </li>
          <li>
            <a href="forms-image.php">
              <i class="bi bi-circle" id="product"></i><span>Add Image</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Forms Nav -->

      <!-- Start Tables Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-datatw.php">
              <i class="bi bi-circle"></i><span>Data Tables Tempat Wisata</span>
            </a>
          </li>
          <li>
            <a href="tables-daerah-wisata.php">
              <i class="bi bi-circle"></i><span>Data Tables Daerah Wisata</span>
            </a>
          </li>
          <li>
            <a href="tables-dataf.php">
              <i class="bi bi-circle"></i><span>Data Tables Fasilitas</span>
            </a>
          </li>
          <li>
            <a href="tables-kategori.php">
              <i class="bi bi-circle"></i><span>Data Tables Kategori</span>
            </a>
          </li>
          <li>
            <a href="tables-image.php">
              <i class="bi bi-circle"></i><span>Data Tables Image</span>
            </a>
          </li>
          <li>
            <a href="tables-userm.php">
              <i class="bi bi-circle"></i><span>Data Tables User</span>
            </a>
          </li>
      </li>
      <!-- End Tables Nav -->
    </ul>
  </aside>
  <!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <h3>Selamat Datang <?= $pengguna["username"]; ?></h3>
      <p>Anda Login Sebagai <?= $pengguna["level"]; ?></p>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>


      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId: '802871274603241',
            status: true,
            cookie: true,
            xfbml: true
          });
        };
        (function() {
          var e = document.createElement('script');
          e.async = true;
          e.src = document.location.protocol +
            '//connect.facebook.net/en_US/all.js';
          document.getElementById('fb-root').appendChild(e);
        }());
      </script>

      <script type="text/javascript">
        $(document).ready(function() {
          $('#share_button').click(function(e) {
            e.preventDefault();
            FB.ui({
              method: 'feed',
              name: 'This is the content of the "name" field.',
              link: 'https://www.instagram.com/p/CnwMQH7ph-t/',
              picture: '',
              caption: 'Top 3 reasons why you should care about your finance',
              description: "What happens when you don't take care of your finances? Just look at our country -- you spend irresponsibly, get in debt up to your eyeballs, and stress about how you're going to make ends meet. The difference is that you don't have a glut of taxpayers…",
              message: ""
            });
          });
        });
      </script>

      <!-- Your share button code -->
      <button id="share_button">Share To Facebook</button>

    </div><!-- End Page Title -->

  </main>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script>
    document.getElementById("brand").onclick = function() {
      myFunction()
    };
    document.getElementById("category").onclick = function() {
      myFunction()
    };
    document.getElementById("product").onclick = function() {
      myFunction()
    };

    function myFunction() {
      document.getElementById("brand").className = "active";
      document.getElementById("category").className = "active";
      document.getElementById("product").className = "active";
    }
  </script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>