<?php
//fgdgd jdf
    include '../config.php';

    if ($_POST) {
        
        $tahun = $_POST['tahun'];
        $nominal = $_POST['nominal'];

        if ($tahun!="" and $nominal!="" ) {
            $sql = mysqli_query($db,"INSERT INTO spp (tahun,nominal) VALUES('$tahun','$nominal') ");

            echo " <script>
            alert('berhasil terkirim')
            window.location.href='../index.php?page=spp/tampildata.php';
        </script>";
        }else {
            echo " <script>
            alert('gagal terkirim')
            window.location.href='insertspp.php';
        </script>";
        }

    }

?>