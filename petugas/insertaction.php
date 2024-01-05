<?php
//fgdgd jdf
    include '../config.php';

    if ($_POST) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $level = $_POST['level'];

        if ($username!="" and $password!="" and $nama!="" and $level!="" ) {
            $sql = mysqli_query($db,"INSERT INTO petugas (username,password,nama_petugas,level) VALUES('$username','$password','$nama','$level') ");

            echo " <script>
            alert('berhasil terkirim')
            window.location.href='../index.php?page=petugas/tampildata.php';
        </script>";
        }else {
            echo " <script>
            alert('gagal terkirim')
            window.location.href='insertpetugas.php';
        </script>";
        }

    }

?>