<?php 
//Delete Daerah Wisata
include "../config/config.php";
if(isset($_GET["id_daerah_wisata"])){
    $id_daerah_wisata = $_GET["id_daerah_wisata"];
    $query = "DELETE FROM `daerah_wisata` WHERE `id_daerah_wisata`=$id_daerah_wisata";
    $result = mysqli_query($host, $query);
    header("Location:index.php");
}
?>

<?php 
include "../config/config.php";
if(isset($_GET["id_kategori"])){
    $id_kategori = $_GET["id_kategori"];
    $query = "DELETE FROM `kategori` WHERE `id_kategori`=$id_kategori";
    $result = mysqli_query($host, $query);
    header("Location:index.php");
}
?>