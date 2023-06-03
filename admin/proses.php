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
    $id_komentar = $_POST['id_komentar'];
    $id_kategori = $_POST['id_kategori'];

	$data=mysqli_query($host,"INSERT INTO `tempat_wisata` (`name`, `deskripsi`, `image`, `id_daerah_wisata`, `id_komentar`, `id_kategori`) 
	VALUES ('$nameftw', '$deskripsi', '$image', '$id_daerah_wisata', '$id_komentar', '$id_kategori')");
    if ($data) {
        move_uploaded_file($_FILES["image"]["tmp_name"], "image/" . $_FILES["image"]["name"]);
        echo "<script>alert('You have successfully inserted the data tempat wisata');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
        echo "<script type='text/javascript'> document.location ='forms-validationtw.php'; </script>";
    }
}// end proses forms tempat_wisata

// start update tempat_wisata
if (isset($_POST['updatetw'])) {
    $id_tempat_wisata = $_GET['id_tempat_wisata'];
    $name_tw = $_POST['name_tw'];
    $deskripsi = $_POST['deskripsi'];
    $image_tw = $_FILES["image_tw"]["name"];
    $id_daerah_wisata = $_POST['id_daerah_wisata'];
    $id_komentar = $_POST['id_komentar'];
    $id_kategori = $_POST['id_kategori'];

    $queryD = mysqli_query($host, "SELECT * FROM `tempat_wisata` WHERE `id_tempat_wisata`='$id_tempat_wisata'");
    foreach ($queryD as $row) {
        if ($image_tw == null) {
            $imageD = $row['image_tw'];
        } else {
            if ($imagePath = "image/" . $row['image_tw']) {
                unlink($imagePath);
                $imageD = $image_tw;
            }
        }
    }

    $data = mysqli_query($host, "UPDATE `tempat_wisata` SET `name`='$name_tw',`deskripsi`='$deskripsi',`image`='$imageD',`id_daerah_wisata`='$id_daerah_wisata',`id_komentar`='$id_komentar',`id_kategori`='$id_kategori' WHERE `id_tempat_wisata`='$id_tempat_wisata'");

    if ($data) {
        if ($image_tw == null) {
            //Update with existing image
            echo "<script>alert('You have successfully update the data with existing image');</script>";
            echo "<script type='text/javascript'> document.location ='tables-datatw.php'; </script>";
        } else {
            move_uploaded_file($_FILES["image_tw"]["tmp_name"], "image/" . $_FILES["image_tw"]["name"]);
            echo "<script>alert('You have successfully update the data tempat wisata');</script>";
            echo "<script type='text/javascript'> document.location ='index.php'; </script>";
        }
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
        echo "<script type='text/javascript'> document.location ='updatetw.php'; </script>";
    }
}// end update tempat_wisata

// start delete tempat_wisata
if (isset($_POST['deletetw'])) {
    $id_tempat_wisata = $_POST['id_tempat_wisata'];
    
    $data = mysqli_query($host, "DELETE FROM `tempat_wisata` WHERE id_tempat_wisata='$id_tempat_wisata'");
    if($data){ 
        echo "<script>alert('You have successfully delete the data tempat wisata');</script>";
        echo "<script type='text/javascript'> document.location ='tables-datatw.php'; </script>";
    }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
        echo "<script type='text/javascript'> document.location ='tables-datatw.php'; </script>";
    }
}// end delete tempat_wisata

}// end crud proses tempat_wisata

// start crud proses daerah_wisata
{

// start proses forms daerah_wisata
if (isset($_POST['forms-validationdw'])) {
    $name = $_POST['name'];
	$data=mysqli_query($host,"INSERT INTO `daerah_wisata` (`id_daerah_wisata`, `name_dw`) 
	VALUES ('', '$name')");
    if ($data) {
        echo "<script>alert('You have successfully inserted the data daerah wisata');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}//end proses forms daerah_wisata

// start update daerah_wisata
if (isset($_POST['updatedw'])) {
    $id_daerah_wisata = $_GET['id_daerah_wisata'];
    $name_dw = $_POST['name_dw'];
    $data=mysqli_query($host,"UPDATE `daerah_wisata` SET `name_dw`='$name_dw' WHERE `id_daerah_wisata`='$id_daerah_wisata'");
    if ($data) {
        echo "<script>alert('You have successfully update the data daerah wisata');</script>";
        echo "<script type='text/javascript'> document.location ='tables-datadw.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
        echo "<script type='text/javascript'> document.location ='tables-datadw.php'; </script>";
    }
}// end update daerah_wisata

// start delete daerah_wisata
if (isset($_POST['deletedw'])) {
    $id_daerah_wisata = $_POST['id_daerah_wisata'];
    $data = mysqli_query($host, "DELETE FROM `daerah_wisata` WHERE id_daerah_wisata = $id_daerah_wisata");
    if($data){ 
        echo "<script>alert('You have successfully delete the data daerah wisata');</script>";
        echo "<script type='text/javascript'> document.location ='tables-datadw.php'; </script>";
    }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
        echo "<script type='text/javascript'> document.location ='tables-datadw.php'; </script>";
    }
}// end delete daerah_wisata

}// end crud proses daerah_wisata

// start crud proses fasilitas
{

// start proses forms add fasilitas
if (isset($_POST['forms-validationf'])) {
    $deskripsi = $_POST['deskripsi'];
    $id_tempat_wisata = $_POST['id_tempat_wisata'];

    $data = mysqli_query($host, "INSERT INTO `fasilitas`(`deskripsi`, `id_tempat_wisata`) VALUES ('$deskripsi','$id_tempat_wisata')");
    if ($data) {
        echo "<script>alert('You have successfully inserted the data Fasilitas');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
        echo "<script type='text/javascript'> document.location ='forms-validationf.php'; </script>";
    }
}//  end proses forms add fasilitas

//  start proses update fasilitas
if (isset($_POST['updatef'])) {
    $id_fasilitas = $_GET['id_fasilitas'];
    $deskripsi = $_POST['deskripsi'];
    $id_tempat_wisata = $_POST['id_tempat_wisata'];
    $data=mysqli_query($host,"UPDATE `fasilitas` SET `deskripsi`='$deskripsi',`id_tempat_wisata`='$id_tempat_wisata' WHERE `id_fasilitas`='$id_fasilitas'");
    if ($data) {
        echo "<script>alert('You have successfully update the data fasilitas');</script>";
        echo "<script type='text/javascript'> document.location ='tables-dataf.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
        echo "<script type='text/javascript'> document.location ='tables-dataf.php'; </script>";
    }
}//  end proses update fasilitas

// start delete fasilitas
if (isset($_POST['deletef'])) {
    $id_fasilitas = $_POST['id_fasilitas'];
    $data = mysqli_query($host, "DELETE FROM fasilitas WHERE id_fasilitas ='".$id_fasilitas."' ");
    if($data){ // Cek jika proses simpan ke database sukses atau tidak
        echo "<script>alert('You have successfully delete the data fasilitas');</script>";
        echo "<script type='text/javascript'> document.location ='tables-dataf.php'; </script>";
    }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
        echo "<script type='text/javascript'> document.location ='tables-dataf.php'; </script>";
    }
}
// end delete fasilitas

}// end crud proses fasilitas

// start crud proses kategori
{

// start proses forms kategori
if (isset($_POST['forms-validationk'])) {
    $name = $_POST['name'];
	$data=mysqli_query($host,"INSERT INTO `kategori` (`id_kategori`, `name_kategori`) 
	VALUES ('', '$name')");
    if ($data) {
        echo "<script>alert('You have successfully inserted the data kategori');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
// end proses forms kategori

// start update kategori
if (isset($_POST['updatek'])) {
    $id_kategori = $_GET['id_kategori'];
    $name_kategori = $_POST['name_kategori'];
    $data=mysqli_query($host,"UPDATE `kategori` SET `name_kategori`='$name_kategori' WHERE `id_kategori`='$id_kategori'");
    if ($data) {
        echo "<script>alert('You have successfully update the data kategori');</script>";
        echo "<script type='text/javascript'> document.location ='tables-datak.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
        echo "<script type='text/javascript'> document.location ='tables-datak.php'; </script>";
    }
}
// end update kategori

// start delete kategori
if (isset($_POST['deletek'])) {
    $id_kategori = $_POST['id_kategori'];
    $data = mysqli_query($host, "DELETE FROM kategori WHERE id_kategori ='".$id_kategori."' ");
    if($data){ // Cek jika proses simpan ke database sukses atau tidak
        echo "<script>alert('You have successfully delete the data kategori');</script>";
        echo "<script type='text/javascript'> document.location ='tables-datak.php'; </script>";
    }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
        echo "<script type='text/javascript'> document.location ='tables-datak.php'; </script>";
    }
}
// end delete kategori
}
// end crud proses kategori

?>