<?php
    include '../config.php';

    $tangkap_id = $_GET['id'];

    $hapus = mysqli_query($db, "DELETE FROM spp WHERE id_spp='$tangkap_id' ");

    if ($hapus == TRUE) {
        echo " <script>
        alert('berhasil delete data')
        window.location.href='../index.php?page=spp/tampildata.php';
    </script>";
    }else{
        echo " <script>
        alert('gagal delete data')
        window.location.href='../index.php?page=spp/tampildata.php';
    </script>";
    }
?>
