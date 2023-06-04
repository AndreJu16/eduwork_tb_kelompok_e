<?php
include "../config/config.php";

if (isset($_POST['submitupdatedaerahwisata'])) {
    $id_daerah_wisata = $_GET['id_daerah_wisata'];
    $name_daerah_wisata = $_POST['name_daerah_wisata'];
    $data=mysqli_query($host,"UPDATE `daerah_wisata` SET `name`='$name_daerah_wisata' WHERE `id_daerah_wisata`='$id_daerah_wisata'");
    if ($data) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>

<?php
include "../config/config.php";

if (isset($_POST['submitupdatekategori'])) {
    $id_kategori = $_GET['id_kategori'];
    $name_kategori = $_POST['name_kategori'];
    $data=mysqli_query($host,"UPDATE `kategori` SET `name`='$name_kategori' WHERE `id_kategori`='$id_kategori'");
    if ($data) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>