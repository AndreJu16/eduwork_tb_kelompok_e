<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E Travel - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php">E Travel</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#portfolio">Tempat Wisata</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Kata Mereka</a></li>
          <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php
              include "../config/config.php";
              $data = mysqli_query($host, "SELECT * FROM `kategori`");
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <li><a href="kategori-details.php?id_kategori=<?php echo $d["id_kategori"]; ?>"><?php echo $d["name_kategori"]; ?></a></li>
              <?php } ?>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" style="margin-top: 100px; height: 500px;"></div>
          <div class="carousel-item" style="margin-top: 100px; height: 500px;"></div>
          <div class="carousel-item" style="margin-top: 100px; height: 500px;"></div>
        </div>
        <!-- text link ditengah -->
        <div class="text-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); box-shadow: 10px 10px white; border:3px solid white; padding:10px;">
          <h1 style="font-size: 48px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: #fff; font-weight: bold; line-height: 1.2;">Mau jalan-jalan?</h1>
          <p style="font-size: 24px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); color: #fff;">Cari di E Travel aja</p>
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)"></use>
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)"></use>
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff"></use>
      </g>
    </svg>
  </section><!-- End Hero -->


  <style>
    #hero {
      background-image: url('assets/img/portfolio/Bali-Bukit1.jpg');
      background-size: cover;
      background-position: center;
      transition: background-image 0.3s ease-in-out;
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const carouselItems = document.querySelectorAll("#carouselExampleAutoplaying .carousel-item");
      const carouselBackgrounds = [
        "assets/img/portfolio/Bali-Bukit1.jpg",
        "assets/img/portfolio/gunung.jpg",
        "assets/img/portfolio/sawah.jpg"
      ];

      let currentItemIndex = 0;
      let intervalId;

      function updateBackground() {
        const heroSection = document.getElementById("hero");
        heroSection.style.backgroundImage = `url('${carouselBackgrounds[currentItemIndex]}')`;
      }

      function updateActiveItem() {
        carouselItems.forEach((item, index) => {
          item.classList.toggle("active", index === currentItemIndex);
        });
      }

      function goToNextItem() {
        currentItemIndex = (currentItemIndex + 1) % carouselItems.length;
        updateBackground();
        updateActiveItem();
      }

      function goToPrevItem() {
        currentItemIndex = (currentItemIndex - 1 + carouselItems.length) % carouselItems.length;
        updateBackground();
        updateActiveItem();
      }

      function startCarousel() {
        intervalId = setInterval(goToNextItem, 5000);
      }

      function stopCarousel() {
        clearInterval(intervalId);
      }

      updateBackground();
      updateActiveItem();
      startCarousel();
    });
  </script>




  <main id="main">



    <!-- ======= Portfolio Section ======= -->

    <style>
      .portfolio-img {
        height: 250px;
        /* Adjust the height as per your preference */
      }

      .portfolio-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <div class="row">
              <div class="col">
              <h2>Mencari Tujuan ?</h2>
              <p>Pilih Tujuan Wisata Mu </p>
              </div>
              <!-- perbaiki mulai dari sini -->
              <div class="col-md-4">
              <form action="index.php" method="get">
                <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Search Tempat Wisata" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
              <button class="btn btn-primary" name="searchh" type="search"><i class="bi bi-search"> Search</i></button>
            </div>
          </div>
          </div>
    </div>
        </form>

        <?php 
        if(isset($_GET['cari'])){
          $cari = $_GET['cari'];		
        }
        ?>

        <div class="row portfolio-container" data-aos="fade-up">
          <?php
          include "../config/config.php";
          $limit = 6;
          $offsetQuery = "";
          if(isset($_GET["page"])){
              $offset = ($_GET["page"]*$limit) - $limit;
              $offsetQuery = "offset $offset";
            }
          if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $data = mysqli_query($host, "SELECT `tw`.`id_tempat_wisata`, `tw`.`name_tw`, `tw`.`deskripsi`, `tw`.`image_tw`, `dw`.`name_dw`, `ka`.`name_kategori` FROM ( (`tempat_wisata` AS `tw`
            JOIN `daerah_wisata` AS `dw` ON `tw`.`id_daerah_wisata` = `dw`.`id_daerah_wisata`)
            JOIN `kategori` AS `ka` ON `tw`.`id_kategori` = `ka`.`id_kategori`) WHERE `tw`.`name_tw` LIKE '%$search%' || `dw`.`name_dw` LIKE '%$search%'");
          } else {
            $data = mysqli_query($host, "SELECT `tw`.`id_tempat_wisata`, `tw`.`name_tw`, `tw`.`deskripsi`, `tw`.`image_tw`, `dw`.`name_dw`, `ka`.`name_kategori` FROM ( (`tempat_wisata` AS `tw`
            JOIN `daerah_wisata` AS `dw` ON `tw`.`id_daerah_wisata` = `dw`.`id_daerah_wisata`)
            JOIN `kategori` AS `ka` ON `tw`.`id_kategori` = `ka`.`id_kategori`)LIMIT $limit $offsetQuery");
          } 

          $count = mysqli_num_rows($data);
          if ($count>0) {
            while ($d = mysqli_fetch_array($data)) {
          ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img"><img src="../admin/assets/img/<?php echo $d["image_tw"]; ?>" class="img-fluid" alt="image"></div>
              <div class="portfolio-info">
                <h4><?php echo $d["name_tw"] ?></h4>
                <p><?php echo $d["name_kategori"] . ", " . $d["name_dw"] ?></p>
                <a href="../admin/assets/img/<?php echo $d["image_tw"]; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $d["name_tw"] . "</br>" . $d["name_kategori"]; ?>"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.php?id_tempat_wisata=<?php echo $d['id_tempat_wisata'] ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          <?php
          } } 
          ?>
        </div>
      </div>
    </section><!-- End Portfolio Section -->
    <!-- pagination -->
    <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">

          <!--Arrow left-->
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <?php 
            $queryTotal = mysqli_query($host, "SELECT COUNT(*) AS total FROM `tempat_wisata`"); 
            $row = mysqli_fetch_assoc($queryTotal);
            $countTotal = $row['total'];
            $page = ceil($countTotal/$limit);

            for($i=0;$i<$page;$i++){

              $active = "";
              if(isset($_GET["page"])){
                if($i+1 == $_GET["page"]){
                  $active = "active";
                }
              }   
          ?>
          <li class="page-item <?php echo $active ?>">
            <a class="page-link" href="index.php?page=<?php echo $i+1 ?>"><?php echo $i+1; ?>
            </a>
          </li>
          <?php
          } 
        
          ?>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- pagination end -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Testimonials</h2>
          <p>Apa Kata Mereka Tentang Kami?</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php 
            include "../config/config.php";
            $data = mysqli_query($host, "SELECT k.*, tw.image_tw FROM komentar k INNER JOIN tempat_wisata tw ON k.id_tempat_wisata = tw.id_tempat_wisata ORDER BY k.id_komentar DESC");
            while ($d = mysqli_fetch_array($data)) { 
            ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <?php if (!empty($d['image_tw'])) { ?>
                  <div class="testimonial-image">
                    <img src="../admin/assets/img/<?php echo $d['image_tw']; ?>" alt="Testimonial Image" class="img-fluid">
                  </div>
                <?php } ?>
                <h3><?php echo $d["name_user"];?> says</h3>
                <p>
                  <i>"</i>
                  <?php echo strlen($d['komentar']) > 105 ? substr($d['komentar'], 0, 105) . "..." : $d['komentar']; ?>
                  <i>"</i> 
                  <a href="portfolio-details.php?id_tempat_wisata=<?php echo $d['id_tempat_wisata'] ?>" class="read-more-link">Click for more details</a>
                </p>
              </div>
            </div><!-- End testimonial item -->
            <?php }?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <style>
      .testimonial-image {
        height: 150px; /* Adjust the height as per your requirements */
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .testimonial-image img {
        max-width: 100%;
        max-height: 100%;
      }
    </style>
    <!-- End Testimonials Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <h3>eTravel</h3>
        <p>Memberikan Kemudahan Perjalanan Anda langsung di tangan mu</p>
        <div class="copyright">
          &copy; Copyright <strong><span>eTravel</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script src="assets/js/main.js"></script>
    
  
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</body>

</html>