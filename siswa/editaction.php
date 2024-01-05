<?php

    include '../config.php';

    if ($_POST) {
        $id = $_POST['id'];
        $nisn = $_POST['nisn'];
        $nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$kelas = $_POST['kelas'];
		$no_telp = $_POST['no_telp'];
        $password = $_POST['password'];
        if ($nisn!="" and $password!="" and $nis!="" and $nama!="" and $alamat!="" and $kelas!="" and $no_telp!="") {
            $sql = mysqli_query($db,"UPDATE siswa SET nisn='$nisn',nis='$nis',password = '$password',nama='$nama',id_kelas='$kelas',alamat='$alamat',no_telp='$no_telp' WHERE id_siswa='$id' ");
            echo " <script>
            alert('berhasil update data')
            window.location.href='../index.php?page=siswa/tampildata.php';
        </script>";
        }else {
            echo " <script>
            alert('gagal update data')

        </script>";
        }

    }

?>