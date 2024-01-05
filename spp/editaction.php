<?php

    include '../config.php';

    if ($_POST) {
        
        $id = $_POST['id'];
        $tahun = $_POST['tahun'];
        $nominal = $_POST['nominal'];

        if ($tahun!="" and $nominal!="") {
            $sql = mysqli_query($db,"UPDATE spp SET tahun='$tahun',nominal='$nominal' WHERE id_spp='$id' ");
            echo " <script>
            alert('berhasil update data')
            window.location.href='../index.php?page=spp/tampildata.php';
        </script>";
        }else {
            echo " <script>
            alert('gagal update data')
            window.location.href='edit.php?';
        </script>";
        }

    }

?>