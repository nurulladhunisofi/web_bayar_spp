<?php
$tangkap_id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../insertedit.css">
    <title>Insert Transaksi</title>
</head>
<body>
    <div class="container border">
        <h3 align="center" >Insert Transaksi</h3 >
        <form method="post" action="insertaction.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan nisn siswa</label>
                <input name="id_petugas" value="<?=$tangkap_id?>" type="hidden">
                <select class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="id_siswa" id="">
                            <?php
                            include '../config.php';
                            $sql = mysqli_query($db,"SELECT * FROM siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas");
                            while ($ambil = mysqli_fetch_array($sql)) {
                                
                                echo'<option value="'.$ambil['id_siswa'].'">'
                                .$ambil['nisn'].' ('.$ambil['nama'].'  '.$ambil['nama_kelas'].')</option>';
                            }
                            ?>
                </select>
            </div>
        
            <div class="form-group">
                <label for="exampleInputEmail1">Spp untuk bulan</label>
                <select class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="bulan">
                            <option value="januari">januari</option>
                            <option value="februari">februari</option>
                            <option value="maret">maret</option>
                            <option value="april">april</option>
                            <option value="mei">mei</option>
                            <option value="juni">juni</option>
                            <option value="juli">juli</option>
                            <option value="agustus">agustus</option>
                            <option value="september">september</option>
                            <option value="oktober">oktober</option>
                            <option value="november">november</option>
                            <option value="desember">desember</option>
                </select>
            </div> 

            <div class="form-group">
                <label for="exampleInputEmail1">Spp untuk tahun</label>
                <select class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="tahun" id="">
                    <?php
                                include '../config.php';
                                $sql = mysqli_query($db,"SELECT * FROM spp");
                                while ($ambil = mysqli_fetch_array($sql)) {
                                    
                                    echo'<option value="'.$ambil['tahun'].'">'
                                    .$ambil['tahun'].
                                    '</option>';
                                }
                     ?>        
                </select>
            </div> 
            <button type="submit" name="insert" class="btn btn-primary">Insert</button>
        </form>
    </div>

    <script src="../assets/js/jquery.js"> </script>
    <script src="../assets/js/bootstrap.min.js"> </script>
    <script src="../assets/js/popper.js"> </script>
</body>
</html>