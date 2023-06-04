<?php 
include "../config/config.php";

if(isset($_POST['submitkategori'])){
    $nameKategori = $_POST['nameKategori'];
    $queryKategori = "INSERT INTO `kategori`(`id_kategori`,`name`) VALUES ('','$nameKategori')";
    $result = mysqli_query($host, $queryKategori);
    if ($result) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}


?>

<?php 
include "../config/config.php";

if(isset($_POST['submitdaerahwisata'])){
    $nameDaerahWisata = $_POST['nameDaerahWisata'];
    $queryDaerahWisata = "INSERT INTO `daerah_wisata`(`id_daerah_wisata`,`name`) VALUES ('','$nameDaerahWisata')";
    $result = mysqli_query($host, $queryDaerahWisata);
    if ($result) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>