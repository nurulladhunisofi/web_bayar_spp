<?php

    include '../config.php';

    if ($_POST) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama_petugas = $_POST['nama_petugas'];
        $level = $_POST['level'];

        if ($username!="" and $password!="" and $nama_petugas!="" and $level!="") {
            $sql = mysqli_query($db,"UPDATE petugas SET username='$username',password='$password',nama_petugas='$nama_petugas',level='$level' WHERE id_petugas='$id' ");
            echo " <script>
            alert('berhasil update data')
            window.location.href='../index.php?page=petugas/tampildata.php';
        </script>";
        }else {
            echo " <script>
            alert('gagal update data')
            window.location.href='edit.php?';
        </script>";
        }

    }

?>