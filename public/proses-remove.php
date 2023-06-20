<?php
    // Assuming you have a database connection established
    include "../config/config.php";

    if (isset($_POST['id_tempat_wisata']) && isset($_POST['name_user'])) {
        $id_tempat_wisata = $_POST['id_tempat_wisata'];
        $name_user = $_POST['name_user'];

        $queryCheckLike = "SELECT id_like FROM suka WHERE id_tw = '$id_tempat_wisata' AND name_user = '$name_user'";
        $resultCheckLike = mysqli_query($host, $queryCheckLike);
        $numRows = mysqli_num_rows($resultCheckLike);

        if ($numRows > 0) {
            // User has already liked the place, remove the like entry
            $queryRemoveLike = "DELETE FROM suka WHERE id_tw = '$id_tempat_wisata' AND name_user = '$name_user'";
            $resultRemoveLike = mysqli_query($host, $queryRemoveLike);

            if ($resultRemoveLike) {
                echo "success";
            } else {
                echo "error";
            }
        } else {
            // User hasn't liked the place yet
            echo "not_liked";
        }
    }
?>
