<?php
//fgdgd jdf
    include '../config.php';

    if ($_POST) {
        
        $nisn = $_POST['nisn'];
        $nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$kelas = $_POST['kelas'];
		$no_telp = $_POST['no_telp'];
        $password = $_POST['password'];

        if ($nisn!="" and $nis!="" and $password!= "" and $nama!="" and $alamat!="" and $kelas!="" and $no_telp!=""  ) {
            $sql = mysqli_query($db,"INSERT INTO siswa (nisn,nis,password,nama,alamat,id_kelas,no_telp) VALUES('$nisn','$nis','$password','$nama','$alamat','$kelas','$no_telp') ");

            echo " <script>
            alert('berhasil terkirim')
            window.location.href='../index.php?page=siswa/tampildata.php';
        </script>";
        }else {
            echo " <script>
            alert('gagal terkirim')
            window.location.href='insertsiswa.php';
        </script>";
        }

    }

?>