<?php
require_once "../config/config.php";

// start crud proses tempat_wisata
{
    // start proses forms tempat_wisata
    if (isset($_POST['forms-validationtw'])) {
        $nameftw = $_POST['nameftw'];
        $deskripsi = $_POST['deskripsi'];
        $image = $_FILES["image"]["name"];
        $id_daerah_wisata = $_POST['id_daerah_wisata'];
        $id_kategori = $_POST['id_kategori'];

        $data = mysqli_query($host, "INSERT INTO `tempat_wisata` (`name_tw`, `deskripsi`, `image_tw`, `id_daerah_wisata`, `id_kategori`) 
	VALUES ('$nameftw', '$deskripsi', '$image', '$id_daerah_wisata', '$id_kategori')");
        if ($data) {
            move_uploaded_file($_FILES["image"]["tmp_name"], "assets/img/" . $_FILES["image"]["name"]);
            echo "<script>alert('You have successfully inserted the data tempat wisata');</script>";
            echo "<script type='text/javascript'> document.location ='tables-datatw.php'; </script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "<script type='text/javascript'> document.location ='forms-validationtw.php'; </script>";
        }
    } // end proses forms tempat_wisata

    // start update tempat_wisata
    if (isset($_POST['updatetw'])) {
        $id_tempat_wisata = $_GET['id_tempat_wisata'];
        $name_tw = $_POST['name_tw'];
        $deskripsi = $_POST['deskripsi'];
        $image_tw = $_FILES["image_tw"]["name"];
        $id_daerah_wisata = $_POST['id_daerah_wisata'];
        $id_kategori = $_POST['id_kategori'];

        $queryD = mysqli_query($host, "SELECT * FROM `tempat_wisata` WHERE `id_tempat_wisata`='$id_tempat_wisata'");
        foreach ($queryD as $row) {
            if ($image_tw == null) {
                $imageD = $row['image_tw'];
            } else {
                if ($imagePath = "assets/img/" . $row['image_tw']) {
                    unlink($imagePath);
                    $imageD = $image_tw;
                }
            }
        }

        $data = mysqli_query($host, "UPDATE `tempat_wisata` SET `name_tw`='$name_tw',`deskripsi`='$deskripsi',`image_tw`='$imageD',`id_daerah_wisata`='$id_daerah_wisata',`id_kategori`='$id_kategori' WHERE `id_tempat_wisata`='$id_tempat_wisata'");

        if ($data) {
            if ($image_tw == null) {
                //Update with existing image
                echo "<script>alert('You have successfully update the data with existing image');</script>";
                echo "<script type='text/javascript'> document.location ='tables-datatw.php'; </script>";
            } else {
                move_uploaded_file($_FILES["image_tw"]["tmp_name"], "assets/img/" . $_FILES["image_tw"]["name"]);
                echo "<script>alert('You have successfully update the data tempat wisata');</script>";
                echo "<script type='text/javascript'> document.location ='tables-datatw.php'; </script>";
            }
        } else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "<script type='text/javascript'> document.location ='updatetw.php'; </script>";
        }
    } // end update tempat_wisata

    // start delete tempat_wisata
    if (isset($_POST['deletetw'])) {
        $id_tempat_wisata = $_POST['id_tempat_wisata'];

        $data = mysqli_query($host, "DELETE FROM `tempat_wisata` WHERE id_tempat_wisata='$id_tempat_wisata'");
        if ($data) {
            echo "<script>alert('You have successfully delete the data tempat wisata');</script>";
            echo "<script type='text/javascript'> document.location ='tables-datatw.php'; </script>";
        } else {
            // Jika Gagal, Lakukan :
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "<script type='text/javascript'> document.location ='tables-datatw.php'; </script>";
        }
    } // end delete tempat_wisata

} // end crud proses tempat_wisata

// start crud proses daerah_wisata
{



    // start proses forms daerah_wisata
    if (isset($_POST['submitdaerahwisata'])) {
        $nameDaerahWisata = $_POST['nameDaerahWisata'];
        $queryDaerahWisata = "INSERT INTO `daerah_wisata`(`id_daerah_wisata`,`name_dw`) VALUES ('','$nameDaerahWisata')";
        $result = mysqli_query($host, $queryDaerahWisata);
        if ($result) {
            echo "<script>alert('You have successfully inserted the data');</script>";
            echo "<script type='text/javascript'> document.location ='tables-daerah-wisata.php'; </script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
    } //end proses forms daerah_wisata

    // start update daerah_wisata
    if (isset($_POST['submitupdatedaerahwisata'])) {
        $id_daerah_wisata = $_GET['id_daerah_wisata'];
        $name_daerah_wisata = $_POST['name_daerah_wisata'];
        $data = mysqli_query($host, "UPDATE `daerah_wisata` SET `name_dw`='$name_daerah_wisata' WHERE `id_daerah_wisata`='$id_daerah_wisata'");
        if ($data) {
            echo "<script>alert('You have successfully inserted the data');</script>";
            echo "<script type='text/javascript'> document.location ='tables-daerah-wisata.php'; </script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
    } // end update daerah_wisata

    // start delete daerah_wisata
    if (isset($_GET["id_daerah_wisata"])) {
        $id_daerah_wisata = $_GET["id_daerah_wisata"];
        $query = "DELETE FROM `daerah_wisata` WHERE `id_daerah_wisata`=$id_daerah_wisata";
        $result = mysqli_query($host, $query);
        header("Location:tables-daerah-wisata.php");
    } // end delete daerah_wisata

} // end crud proses daerah_wisata


// start crud proses fasilitas
{



    // start proses forms add fasilitas
    if (isset($_POST['forms-validationf'])) {
        $deskripsi = $_POST['deskripsi'];
        $id_tempat_wisata = $_POST['id_tempat_wisata'];

        $data = mysqli_query($host, "INSERT INTO `fasilitas`(`deskripsi_fasilitas`, `id_tempat_wisata`) VALUES ('$deskripsi','$id_tempat_wisata')");
        if ($data) {
            echo "<script>alert('You have successfully inserted the data Fasilitas');</script>";
            echo "<script type='text/javascript'> document.location ='tables-dataf.php'; </script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "<script type='text/javascript'> document.location ='forms-validationf.php'; </script>";
        }
    } //  end proses forms add fasilitas

    //  start proses update fasilitas
    if (isset($_POST['updatef'])) {
        $id_fasilitas = $_GET['id_fasilitas'];
        $deskripsi = $_POST['deskripsi'];
        $id_tempat_wisata = $_POST['id_tempat_wisata'];
        $data = mysqli_query($host, "UPDATE `fasilitas` SET `deskripsi_fasilitas`='$deskripsi',`id_tempat_wisata`='$id_tempat_wisata' WHERE `id_fasilitas`='$id_fasilitas'");
        if ($data) {
            echo "<script>alert('You have successfully update the data fasilitas');</script>";
            echo "<script type='text/javascript'> document.location ='tables-dataf.php'; </script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "<script type='text/javascript'> document.location ='tables-dataf.php'; </script>";
        }
    } //  end proses update fasilitas

    // start delete fasilitas
    if (isset($_POST['deletef'])) {
        $id_fasilitas = $_POST['id_fasilitas'];
        $data = mysqli_query($host, "DELETE FROM fasilitas WHERE id_fasilitas ='" . $id_fasilitas . "' ");
        if ($data) { // Cek jika proses simpan ke database sukses atau tidak
            echo "<script>alert('You have successfully delete the data fasilitas');</script>";
            echo "<script type='text/javascript'> document.location ='tables-dataf.php'; </script>";
        } else {
            // Jika Gagal, Lakukan :
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "<script type='text/javascript'> document.location ='tables-dataf.php'; </script>";
        }
    }
    // end delete fasilitas

} // end crud proses fasilitas

// start crud proses kategori
{

    // start proses forms kategori
    if (isset($_POST['submitkategori'])) {
        $nameKategori = $_POST['nameKategori'];
        $queryKategori = "INSERT INTO `kategori`(`id_kategori`,`name_kategori`) VALUES ('','$nameKategori')";
        $result = mysqli_query($host, $queryKategori);
        if ($result) {
            echo "<script>alert('You have successfully inserted the data');</script>";
            echo "<script type='text/javascript'> document.location ='tables-kategori.php'; </script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
    }
    // end proses forms kategori

    // start update kategori
    if (isset($_POST['submitupdatekategori'])) {
        $id_kategori = $_GET['id_kategori'];
        $name_kategori = $_POST['name_kategori'];
        $data = mysqli_query($host, "UPDATE `kategori` SET `name_kategori`='$name_kategori' WHERE `id_kategori`='$id_kategori'");
        if ($data) {
            echo "<script>alert('You have successfully inserted the data');</script>";
            echo "<script type='text/javascript'> document.location ='tables-kategori.php'; </script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
    }
    // end update kategori

    // start delete kategori
    include "../config/config.php";
    if (isset($_GET["id_kategori"])) {
        $id_kategori = $_GET["id_kategori"];
        $query = "DELETE FROM `kategori` WHERE `id_kategori`=$id_kategori";
        $result = mysqli_query($host, $query);
        header("Location:tables-kategori.php");
    }
    // end delete kategori
}
// end crud proses kategori

// start proses forms komentar proses 
if (isset($_POST['submit_komentar'])) {
    $name_komentar = $_POST['name_komentar'];
    $komentar = $_POST['komentar'];
    $id_tempat_wisata = $_GET['id_tempat_wisata'];
    $queryDaerahWisata = "INSERT INTO komentar (komentar, name_user, id_tempat_wisata) VALUES ('$komentar', '$name_komentar', '$id_tempat_wisata')";
    $result = mysqli_query($host, $queryDaerahWisata);
    if ($result) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='../public/portfolio-details.php; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}//end proses forms komentar proses 



// Start Proses Image
// Add Proses Image

if (isset($_POST['submitImage'])) {
    $namaImageSatu = $_FILES['image_satu']['name'];
    $namaImageDua = $_FILES['image_dua']['name'];
    $namaImageTiga = $_FILES['image_tiga']['name'];
    $sourceSatu = $_FILES['image_satu']['tmp_name'];
    $sourceDua = $_FILES['image_dua']['tmp_name'];
    $sourceTiga = $_FILES['image_tiga']['tmp_name'];
    $idTempatWisata = $_POST['id_tempat_wisata'];
    $folder = 'assets/img/';
    move_uploaded_file($sourceSatu, $folder . $namaImageSatu);
    move_uploaded_file($sourceDua, $folder . $namaImageDua);
    move_uploaded_file($sourceTiga, $folder . $namaImageTiga);
    $gambar = "INSERT INTO `image` (`image`, `image_satu`, `image_dua`, `id_tempat_wisata`) VALUES ('$namaImageSatu','$namaImageDua','$namaImageTiga', '$idTempatWisata')";
    $result = mysqli_query($host, $gambar);

    header("Location: tables-image.php");
}

// Update Proses Image
if (isset($_POST['submitUpdateImage'])) {
    $idImage = $_GET['id_image'];
    $namaImageSatu = $_FILES['image_satu']['name'];
    $namaImageDua = $_FILES['image_dua']['name'];
    $namaImageTiga = $_FILES['image_tiga']['name'];
    $sourceSatu = $_FILES['image_satu']['tmp_name'];
    $sourceDua = $_FILES['image_dua']['tmp_name'];
    $sourceTiga = $_FILES['image_tiga']['tmp_name'];
    $idTempatWisata = $_POST['id_tempat_wisata'];
    $folder = 'assets/img/';
    move_uploaded_file($sourceSatu, $folder . $namaImageSatu);
    move_uploaded_file($sourceDua, $folder . $namaImageDua);
    move_uploaded_file($sourceTiga, $folder . $namaImageTiga);

    $data = mysqli_query($host, "UPDATE `image` SET `image`='$namaImageSatu', `image_satu`='$namaImageDua', `image_dua`='$namaImageTiga' WHERE `id_image`='$idImage'");
    if ($data) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='tables-image.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}

?>