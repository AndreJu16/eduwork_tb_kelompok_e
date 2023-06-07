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
              <i class="bi bi-circle" id="product"></i><span>Add Kategori</span>
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
            <a href="tables-dataf.php" class="active">
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
        </ul>
      </li>
      <!-- End Tables Nav -->
    </ul>

  </aside>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Data Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="tables-dataf.php">Tables Data Fasilitas</a></li>
          <li class="breadcrumb-item active">Form Update Data Fasilitas</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="card col-lg">
          <div class="card-body">
            <h5 class="card-title">Forms Update Data Fasilitas</h5>
            <?php
            require_once "../config/config.php";
            $id_fasilitas = $_GET['id_fasilitas'];
            $query = mysqli_query($host, "SELECT * FROM fasilitas WHERE id_fasilitas='$id_fasilitas'");
            foreach ($query as $row) {
            ?>

              <!-- Custom Styled Validation with Tooltips -->
              <form class="row g-3 needs-validation" method="post" action="proses.php?id_fasilitas=<?php echo $id_fasilitas ?>" enctype="multipart/form-data" novalidate>
                <div class="row position-relative mb-3">
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="id_fasilitas">Id &emsp;&emsp;&emsp;</span>
                    <input type="number" name="id_fasilitas" class="form-control" value="<?php echo $row['id_fasilitas']; ?>" id="id_fasilitas" aria-describedby="id_fasilitas" disabled>
                    <div class="invalid-tooltip">
                      Please choose a unique and valid Id Fasilitas.
                    </div>
                  </div>
                </div>

                <div class="row position-relative mb-3">
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="deskripsi">Deskripsi &emsp;</span>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" required><?php echo $row['deskripsi_fasilitas']; ?></textarea>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                    <div class="invalid-tooltip">
                      Please choose a unique and valid Deskripsi.
                    </div>
                  </div>
                </div>

                <?php
                require_once "../config/config.php";
                $data = mysqli_query($host, "SELECT * FROM `tempat_wisata`");
                if (mysqli_num_rows($data) > 0) {
                ?>
                  <div class="row position-relative mb-3">
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="id_tempat_wisata">Id Tempat Wisata &emsp;&emsp;&emsp;&emsp;</span>
                      <select class="form-select" name="id_tempat_wisata" aria-label="Default select example" required>
                        <option selected disabled>Open this select Id Tempat Wisata</option>
                        <?php
                        foreach ($data as $row) {
                        ?>
                          <option value="<?php echo $row['id_tempat_wisata']; ?>"><?php echo $row['name_tw']; ?></option>
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
                  <button class="btn btn-primary" type="submit" name="updatef">Submit Data</button>
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