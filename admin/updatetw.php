<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update - Admin</title>
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
        <span class="d-none d-lg-block">Admin</span>
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
          <a href="forms-validationtw.php" >
            <i class="bi bi-circle" id="brand"></i><span>Add Tempat Wisata</span>
          </a>
        </li>
        <li>
          <a href="forms-daerah-wisata.php" >
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
      <a class="nav-link collapse" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Tables Data</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
        <li>
          <a href="tables-datatw.php" class="active">
            <i class="bi bi-circle"></i><span>Data Tables Tempat Wisata</span>
          </a>
        </li>
        <li>
          <a href="tables-daerah_wisata.php" >
            <i class="bi bi-circle"></i><span>Data Tables Daerah Wisata</span>
          </a>
        </li>
        <li>
          <a href="tables-dataf.php">
            <i class="bi bi-circle"></i><span>Data Tables Fasilitas</span>
          </a>
        </li>
        <li>
          <a href="tables-kategori.php" >
            <i class="bi bi-circle"></i><span>Data Tables Kategori</span>
          </a>
        </li>
        <li>
          <a href="tables-image.php" >
            <i class="bi bi-circle"></i><span>Data Tables Image</span>
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
      <h1>Update Data Tempat Wisata</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="tables-datatw.php">Tables Data Tempat Wisata</a></li>
          <li class="breadcrumb-item active">Form Update Data Tempat Wisata</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
          <div class="card col-lg">
            <div class="card-body">
              <h5 class="card-title">Forms Update Data Tempat Wisata</h5>
              <?php
                require_once "../config/config.php";
                $id_tempat_wisata = $_GET['id_tempat_wisata'];
                $query = mysqli_query($host, "SELECT * FROM tempat_wisata WHERE id_tempat_wisata='$id_tempat_wisata'");
                foreach ($query as $row) {
              ?>
              
              <!-- Custom Styled Validation with Tooltips -->
              <form class="row g-3 needs-validation" method="post" action="proses.php?id_tempat_wisata=<?php echo $id_tempat_wisata ?>" enctype="multipart/form-data" novalidate>
                <div class="row position-relative mb-3">
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="id_tempat_wisata">Id &emsp;&emsp;&emsp;</span>
                    <input type="number" name="id_tempat_wisata" class="form-control" value="<?php echo $row['id_tempat_wisata']; ?>" id="id_tempat_wisata" aria-describedby="id_tempat_wisata" disabled>
                    <div class="invalid-tooltip">
                      Please choose a unique and valid Id Tempat Wisata.
                    </div>
                  </div>
                </div>

                <div class="row position-relative mb-3">
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="name_tw">Name &emsp;</span>
                    <input type="text" class="form-control" name="name_tw" value="<?php echo $row['name_tw']; ?>" id="name_tw" aria-describedby="name_tw" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                    <div class="invalid-tooltip">
                      Please choose a unique and valid Name.
                    </div>
                  </div>
                </div>

                <div class="row position-relative mb-3">
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="deskripsi">Deskripsi &emsp;</span>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" required><?php echo $row['deskripsi']; ?></textarea>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                    <div class="invalid-tooltip">
                      Please choose a unique and valid Deskripsi.
                    </div>
                  </div>
                </div>

                <div class="row position-relative mb-3">
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="image_tw">Image &emsp;</span>
                    <input type="file" name="image_tw" class="form-control" id="image_tw" value="<?php echo $row['image_tw']; ?>" aria-describedby="image_tw">
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                    <div class="invalid-tooltip">
                      Please choose a unique and valid image_tw.
                    </div>
                  </div>
                </div>

                <?php 
                  require_once "../config/config.php";
                  $data = mysqli_query($host, "SELECT * FROM `daerah_wisata`");
                  if (mysqli_num_rows($data) > 0) {
                ?>
                  <div class="row position-relative mb-3">
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="id_daerah_wisata">Id Daerah&emsp;&emsp;&emsp;</span>
                      <select class="form-select" name="id_daerah_wisata" aria-label="Default select example">
                        <option selected disabled>Open this select Id Daerah Wisata</option>
                        <?php 
                          foreach ($data as $row) {
                        ?>
                          <option value="<?php echo $row['id_daerah_wisata']; ?>"><?php echo $row['name_dw']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                      <div class="invalid-feedback">
                        Please select a valid id Daerah Wisata.
                      </div>
                    </div>
                  </div>
                <?php 
                  } else {
                    echo "No Data Avalaible";
                  }
                ?>
                
                <?php 
                  require_once "../config/config.php";
                  $data = mysqli_query($host, "SELECT * FROM `kategori`");
                  if (mysqli_num_rows($data) > 0) {
                ?>
                  <div class="row position-relative mb-3">
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="id_kategori">Id Kategori &emsp;&emsp;&emsp;&emsp;</span>
                      <select class="form-select" name="id_kategori" aria-label="Default select example" required>
                        <option selected disabled>Open this select Id Kategori</option>
                        <?php 
                          foreach ($data as $row) {
                        ?>
                          <option value="<?php echo $row['id_kategori']; ?>"><?php echo $row['name_kategori']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                      <div class="invalid-feedback">
                        Please select a valid id Kategori.
                      </div>
                    </div>
                  </div>
                <?php 
                  } else {
                    echo "No Data Avalaible";
                  }
                ?>

                <div class="row mt-4">
                  <button class="btn btn-primary" type="submit" name="updatetw">Submit Data</button>
                </div>
              </form>
              <!-- End Custom Styled Validation with Tooltips -->
              <?php
              }
              ?>
            </div>
          </div>
      </div>
    </section>

  </main>
  <!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>