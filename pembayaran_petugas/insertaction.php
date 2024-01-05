<?php
//fgdgd jdf
    include '../config.php';

    if ($_POST) {
        
        date_default_timezone_set('Asia/Jakarta');
        $hari_ini = date('d M Y');
        $jam_sekarang = date('H:i:s');

        $id_petugas = $_POST['id_petugas'];
        $id_siswa = $_POST['id_siswa'];
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        

        $siswa = mysqli_query($db,"SELECT * FROM siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas where id_siswa='$id_siswa'");
        $ambil_siswa = mysqli_fetch_array($siswa);
        $nisn = $ambil_siswa['nisn'];
        $nama = $ambil_siswa['nama'];
        $nama_kelas = $ambil_siswa['nama_kelas'];

        $spp = mysqli_query($db,"SELECT * FROM spp where tahun='$tahun'");
        $ambil_spp = mysqli_fetch_array($spp);
        $id_spp = $ambil_spp['id_spp'];
        $nominal = $ambil_spp['nominal'];

        

        //insert

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../insertedit.css">
    <title>Bayar spp</title>
</head>
<body>
    <div class="container border">
        <h1 align="center">Bayar SPP</h1>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Nisn Siswa</b></label><br>
            <label for="exampleInputEmail1"><?=$nisn?></label>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Nama Siswa</b></label><br>
            <label for="exampleInputEmail1"><?=$nama?></label>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"><b>Kelas</b></label><br>
            <label for="exampleInputEmail1"><?=$nama_kelas?></label>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"><b>Bayar untuk bulan</b></label><br>
            <label for="exampleInputEmail1"><?=$bulan?> <?=$tahun?></label>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"><b>Dengan nominal</b></label><br>
            <label for="exampleInputEmail1">Rp.<?=number_format($nominal,0,'.','.'); ?></label>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"><b>Jumlah bayar</b></label><br>
            <form action="bayar.php" method="post">
                <input name="id_petugas" value="<?=$id_petugas?>" type="hidden">
                <input name="id_siswa" value="<?=$id_siswa?>" type="hidden">
                <input name="bulan" value="<?=$bulan?>" type="hidden">
                <input name="tahun" value="<?=$tahun?>" type="hidden">
                <input name="id_spp" value="<?=$id_spp?>" type="hidden">
                <input name="nominal" value="<?=$nominal?>" type="hidden">

                <input name="jumlah_bayar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <br>
                <button type="submit" name="tambah" class="btn btn-primary">Bayar</button>          
            </form>
        </div>
    </div>
    <script src="../assets/js/jquery.js"> </script>
    <script src="../assets/js/bootstrap.min.js"> </script>
    <script src="../assets/js/popper.js"> </script> 
</body>
</html>