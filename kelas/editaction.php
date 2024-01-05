<?php

    include '../config.php';

    if ($_POST) {
        
        $id = $_POST['id'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        if ($kelas!="" and $jurusan!="") {
            $sql = mysqli_query($db,"UPDATE kelas SET nama_kelas='$kelas',jurusan='$jurusan' WHERE id_kelas='$id' ");
            echo " <script>
            alert('berhasil update data')
            window.location.href='../index.php?page=kelas/tampildata.php';
        </script>";
        }else {
            echo " <script>
            alert('gagal update data')
            window.location.href='edit.php?';
        </script>";
        }

    }

?>