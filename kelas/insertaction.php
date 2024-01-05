<?php
//fgdgd jdf
    include '../config.php';

    if ($_POST) {
        
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        if ($kelas!="" and $jurusan!="" ) {
            $sql = mysqli_query($db,"INSERT INTO kelas (nama_kelas,jurusan) VALUES('$kelas','$jurusan') ");

            echo " <script>
            alert('berhasil terkirim')
            window.location.href='../index.php?page=kelas/tampildata.php';
        </script>";
        }else {
            echo " <script>
            alert('gagal terkirim')
            window.location.href='insertkelas.php';
        </script>";
        }

    }

?>