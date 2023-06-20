<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Validation - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
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
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->

  </header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <!-- Start Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
        <a class="nav-link" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content " data-bs-parent="#sidebar-nav">
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
            <a href="tables-kategori.php" class="active">
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
          <li>
            <a href="tables-like.php">
              <i class="bi bi-circle"></i><span>Data Tables Like</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Tables Nav -->
    </ul>

  </aside>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Data Kategori</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Update Data</li>
          <li class="breadcrumb-item"><a href="updatedatab.php">Update Data Daerah Wisata</a></li>
          <li class="breadcrumb-item active">Form Update Daaerah Wisata</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="card col-lg">
          <div class="card-body">
            <h5 class="card-title">Forms Update Data Kategori</h5>
            <?php
            include_once "../config/config.php";
            $id_kategori = $_GET["id_kategori"];
            $query = mysqli_query($host, "SELECT * FROM kategori WHERE id_kategori='$id_kategori'");

            while ($category = mysqli_fetch_array($query)) {
              $name_kategori = $category['name_kategori'];
            }
            ?>
            <!-- Custom Styled Validation with Tooltips -->
            <form class="row g-3 needs-validation" method="post" action="proses.php?id_kategori=<?php echo $id_kategori ?>" novalidate>
              <div class="row position-relative mb-3">
                <!-- <label for="validationTooltipUsername" class="form-label">Username</label> -->
                <div class="input-group has-validation">
                  <span class="input-group-text" id="id_kategori">Id Kategori &emsp;&emsp;&emsp;</span>
                  <input type="number" name="id_kategori" class="form-control" id="id_kategori" value="<?php echo $id_kategori ?>" aria-describedby="id_brand" disabled>
                  <div class="invalid-tooltip">
                    Please Provide a valid Id Brand.
                  </div>
                </div>
              </div>
              <div class="row position-relative">
                <!-- <label for="validationTooltipUsername" class="form-label">Username</label> -->
                <div class="input-group has-validation">
                  <span class="input-group-text" id="name_kategori">Name Kategori &emsp;</span>
                  <input type="text" name="name_kategori" class="form-control" id="name_kategori" value="<?php echo $name_kategori ?>" aria-describedby="name_brand" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                  <div class="invalid-tooltip">
                    Please Provide a valid Name Brand.
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <button class="btn btn-primary" type="submit" name="submitupdatekategori">Submit Data</button>
              </div>
            </form><!-- End Custom Styled Validation with Tooltips -->
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->


  <?php
  require_once "footer.php";
  ?>