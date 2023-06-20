<?php
include "../config/config.php";

if (isset($_POST['submit_komentar'])) {
    $id_tempat_wisata = $_POST['id_tempat_wisata'];
    $name_komentar = $_POST['name_komentar'];
    $komentar = $_POST['komentar'];

    // Perform the database insertion using the $id_tempat_wisata value
    $insert_query = "INSERT INTO `komentar` (id_tempat_wisata, name_user, komentar) VALUES ('$id_tempat_wisata', '$name_komentar', '$komentar')";
    mysqli_query($host, $insert_query);

    // Redirect back to the portfolio details page
// Redirect back to the portfolio details page with the id_tempat_wisata parameter
header("Location: ../public/portfolio-details-user.php?id_tempat_wisata=" . $id_tempat_wisata);
exit();
}


if(isset($_POST["id_tempat_wisata"])){
//menerima nilai dari kiriman form input-barang
$id_tempat_wisata=$_POST["id_tempat_wisata"];
$nama_user=$_POST["name_user"];

//Query input menginput data kedalam tabel barang
$sql="INSERT INTO `suka` (id_tw, name_user) values('$id_tempat_wisata', '$nama_user')";

//Mengeksekusi/menjalankan query diatas
$hasil=mysqli_query($host,$sql);
}
?>