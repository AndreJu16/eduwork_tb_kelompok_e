<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>eTravel - Tempat wisata Details</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
    <header id="header" class="fixed-top d-flex align-items-center  ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html">E Travel</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.php#portfolio">Tempat Wisata</a></li>
                    <li><a class="nav-link scrollto" href="index.php#testimonials">Kata Mereka</a></li>
                    <li><a class="nav-link scrollto active" href="about.php">About</a></li>
                    <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Pantai</a></li>
                            <li><a href="#">Sejarah</a></li>
                            <li><a href="#">Pegunungan</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Tempat wisata Details</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Tempat wisata Details</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <style>
                .portfolio-details-slider .swiper-slide img {
                    width: 100%;
                    height: auto;
                }

                .swiper-slide {
                    height: 0;
                    padding-bottom: 56.25%;
                    /* Set the aspect ratio (16:9 for this example) */
                    position: relative;
                }

                .swiper-slide img {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            </style>


            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <!-- beginning image slider for tempat wisata -->
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <?php
                                $id_tempat_wisata = $_GET['id_tempat_wisata'];
                                include "../config/config.php";
                                $id_tempat_wisata = $_GET['id_tempat_wisata'];
                                $data = mysqli_query($host, "SELECT * FROM `image` WHERE `id_tempat_wisata` = $id_tempat_wisata");
                                while ($d = mysqli_fetch_array($data)) {

                                ?>

                                    <div class="swiper-slide">
                                        <img src="../admin/assets/img/<?php echo $d["image"]; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" alt="">
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="../admin/assets/img/<?php echo $d["image_satu"]; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" alt="image">
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="../admin/assets/img/<?php echo $d["image_dua"]; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" alt="image">
                                    </div>

                                <?php
                                }
                                ?>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <!-- end off image slider for tempat wisata -->


                    <div class="col-lg-4">
                        <!-- beginning fasilitas -->
                        <?php
                        // Fetch the description from the database based on the ID
                        // Adjust the SQL query based on your table structure
                        // $query = "SELECT deskripsi_fasilitas FROM fasilitas";
                        $query = "SELECT deskripsi_fasilitas FROM fasilitas WHERE id_tempat_wisata = $id_tempat_wisata";
                        $result = mysqli_query($host, $query);

                        // Retrieve the value from the result set
                        $row = mysqli_fetch_assoc($result);

                        // Assign the value to the variable
                        $description = $row['deskripsi_fasilitas'];
                        ?>

                        <!-- Now, you can use the updated HTML section with the dynamic description value -->
                        <div class="portfolio-info">
                            <h3>Informasi Fasilitas</h3>
                            <ul>
                                <li><strong>Description</strong>: <?php echo $description; ?></li>
                            </ul>
                        </div>

                        <!-- end fasilitas -->

                        <!-- beginning tempat wisata description -->
                        <?php

                        // Fetch the name_tw and deskripsi from the database based on the id_tempat_wisata
                        $query = "SELECT name_tw, deskripsi FROM tempat_wisata WHERE id_tempat_wisata = $id_tempat_wisata";
                        // $query = "SELECT name_tw, deskripsi FROM tempat_wisata";
                        $result = mysqli_query($host, $query);

                        // Check if a row is returned
                        if ($result && mysqli_num_rows($result) > 0) {
                            // Retrieve the values from the result set
                            $row = mysqli_fetch_assoc($result);

                            // Assign the values to variables
                            $name_tw = $row['name_tw'];
                            $deskripsi = $row['deskripsi'];
                        } else {
                            // Handle the case when no row is found for the provided id_tempat_wisata
                            $name_tw = "Title Not Found";
                            $deskripsi = "Description Not Found";
                        }
                        ?>

                        <div class="portfolio-description">
                            <h2>Deskripsi <?php echo $name_tw; ?></h2>
                            <p>
                                <?php echo $deskripsi; ?>
                            </p>
                        </div>
                        <!-- end tempat wisata description -->
                    </div>

                    <!-- Comment form and comment display section -->
                    <div class="portfolio-comments">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>Leave a Comment</h3>
                                <!-- <form class="comment-form" action="../admin/proses.php" method="post">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name_komentar" placeholder="Enter your name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Your Comment</label>
                                        <textarea class="form-control" id="comment" rows="5" placeholder="Enter your comment" name="komentar" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit_komentar">Submit Comment</button>
                                </form> -->

                                <form class="comment-form" action="proses-add.php" method="post">
                                    <!-- Add the hidden input field for id_tempat_wisata -->
                                    <input type="hidden" name="id_tempat_wisata" value="<?php echo $id_tempat_wisata; ?>">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name_komentar" placeholder="Enter your name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Your Comment</label>
                                        <textarea class="form-control" id="comment" rows="5" placeholder="Enter your comment" name="komentar" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit_komentar">Submit Comment</button>
                                </form>

                            </div>
                            <div class="col-lg-6">
                                <div class="comment-list">
                                    <h3>Comments</h3>
                                    <!-- Comment 1 -->
                                    <?php
                                    include "../config/config.php";
                                    // $data = mysqli_query($host, "SELECT * FROM `komentar` ");
                                    $data = mysqli_query($host, "SELECT * FROM `komentar` WHERE id_tempat_wisata = $id_tempat_wisata");

                                    // while ($d = mysqli_fetch_array($data)) {

                                    ?>
                                    <?php foreach ($data as $comment) : ?>
                                        <div class="comment">
                                            <div class="comment-author"><?php echo $comment['name_user']; ?></div>
                                            <!-- <div class="comment-date"><*/?php echo $comment['tanggal']; ?></div> -->
                                            <div class="comment-content"><?php echo $comment['komentar']; ?></div>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php
                                    ?>
                                    <!-- Add more comments here as needed -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <style>
                        /* Styles for the portfolio comments section */
                        .portfolio-comments {
                            margin-top: 40px;
                        }

                        .portfolio-comments h3 {
                            font-size: 24px;
                            font-weight: bold;
                            margin-bottom: 20px;
                        }

                        .comment-form .form-group {
                            margin-bottom: 20px;
                        }

                        .comment-form label {
                            font-weight: bold;
                        }

                        .comment-list .comment {
                            margin-bottom: 20px;
                            border: 1px solid #ccc;
                            padding: 10px;
                        }

                        .comment .comment-author {
                            font-weight: bold;
                            margin-bottom: 5px;
                        }

                        .comment .comment-date {
                            color: #888;
                            font-size: 12px;
                        }

                        .comment .comment-content {
                            margin-top: 5px;
                        }

                        .comment-list .comment:last-child {
                            margin-bottom: 0;
                        }

                        .btn-primary {
                            background-color: #007bff;
                            color: #fff;
                            border-color: #007bff;
                        }

                        .btn-primary:hover {
                            background-color: #0069d9;
                            border-color: #0062cc;
                        }
                    </style>

                </div>
            </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Selecao</h3>
            <p>Memberikan Kemudahan Perjalanan Anda langsung di tangan mu</p>
            <div class="copyright">
                &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
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
    <script src="assets/js/main.js"></script>

</body>

</html>