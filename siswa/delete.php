<?php
    include '../config.php';

    $tangkap_id = $_GET['id'];

    $hapus = mysqli_query($db, "DELETE FROM siswa WHERE id_siswa='$tangkap_id' ");

    if ($hapus == TRUE) {
        echo " <script>
        alert('berhasil delete data')
        window.location.href='../index.php?page=siswa/tampildata.php';
    </script>";
    }else{
        echo " <script>
        alert('gagal delete data')
        window.location.href='../index.php?page=siswa/tampildata.php';
    </script>";
    }
?>
