<?php 
include "../config/config.php";

if(isset($_POST['submit'])){
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