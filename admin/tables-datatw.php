<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Table Data Admin</title>
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
        </ul>
      </li>
      <!-- End Tables Nav -->

      <li class="nav-heading">Pages</li>

      <!-- Start Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="profile.php">
          <i class="bi bi-person"></i>
          <span>About Profile</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->
    </ul>

  </aside>
  <!-- End Sidebar-->

  <!-- Start #main -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables Data</li>
          <li class="breadcrumb-item active">Tables Data Tempat Wisata</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg">
          <div class="row">

            <div class="col-12" id="tempat_wisata">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Datatables Tempat Wisata</h5>
                  <!-- Table with stripped rows -->
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Deskripsi</th>
                        <th>Image</th>
                        <th>Id Daerah</th>
                        <th>Id Kategori</th>
                        <th>Update</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      require_once "../config/config.php";
                      $data = mysqli_query($host, "SELECT * FROM `tempat_wisata`");
                      if (mysqli_num_rows($data) > 0) {
                        $no = 1;
                        while ($d = mysqli_fetch_array($data)) {
                      ?>
                          <tr>
                            <td> <?php echo $no ?></td>
                            <td> <?php echo $d["id_tempat_wisata"]; ?> </td>
                            <td> <?php echo $d["name_tw"]; ?> </td>
                            <td> <?php echo $d["deskripsi"]; ?> </td>
                            <td> <img src="assets/img/<?php echo $d["image_tw"]; ?>" width="80" height="80" alt="image"></td>
                            <td> <?php echo $d["id_daerah_wisata"]; ?> </td>
                            <td> <?php echo $d["id_kategori"]; ?> </td>
                            <td> <a href="updatetw.php?id_tempat_wisata=<?php echo $d['id_tempat_wisata']; ?>" class="btn btn-warning">Update</a></td>
                            <td>
                              <form action="proses.php" method="post">
                                <input type="hidden" name="id_tempat_wisata" value="<?php echo $d['id_tempat_wisata']; ?>">
                                <button class="btn btn-danger" type="submit" name="deletetw">Delete</button>
                              </form>
                            </td>
                          </tr>

                      <?php $no++;
                        }
                      } ?>
                    </tbody>
                  </table>
                  <!-- End Table with stripped rows -->
                </div>
              </div>
            </div>
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