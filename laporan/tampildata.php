<h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
<div class="card shadow mb-4">
    <h3 class="h3 mb-2 text-gray-800">Cetak dan download laporan</h3>
        <div class="card-header py-3 bg-white">
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Tabel Kelas</b></label><br>
                <label for="exampleInputEmail1"><a target="blank" style="font-size:30px;" title="Download excel" href="laporan/daftar_kelasexcel.php"><i class="fas fa-file-excel"></i></a></label>
                <label for="exampleInputEmail1"><a target="blank" style="margin-left: 30px; font-size:30px;" title="Cetak" href="laporan/daftar_kelascetak.php"><i class="fas fa-print"></i></a></label>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Tabel Petugas</b></label><br>
                <label for="exampleInputEmail1"><a target="blank" style="font-size:30px;" title="Download excel" href="laporan/daftar_petugasexcel.php"><i class="fas fa-file-excel"></i></a></label>
                <label for="exampleInputEmail1"><a target="blank" style="margin-left: 30px; font-size:30px;" title="Cetak" href="laporan/daftar_petugascetak.php"><i class="fas fa-print"></i></a></label>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Tabel Spp</b></label><br>
                <label for="exampleInputEmail1"><a target="blank" style="font-size:30px;" title="Download excel" href="laporan/daftar_sppexcel.php"><i class="fas fa-file-excel"></i></a></label>
                <label for="exampleInputEmail1"><a target="blank" style="margin-left: 30px; font-size:30px;" title="Cetak" href="laporan/daftar_sppcetak.php"><i class="fas fa-print"></i></a></label>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Tabel Siswa</b></label><br>
                <label for="exampleInputEmail1"><a target="blank" style="font-size:30px;" title="Download excel" href="laporan/daftar_siswaexcel.php"><i class="fas fa-file-excel"></i></a></label>
                <label for="exampleInputEmail1"><a target="blank" style="margin-left: 30px; font-size:30px;" title="Cetak" href="laporan/daftar_siswacetak.php"><i class="fas fa-print"></i></a></label>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Pembayaran</b></label><br>
                <form target="blank" action="laporan/daftar_pembayaran.php" method="post">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <select name="tanggal" >
                        <option value=""></option>
                        <?php
                            for ($i=1; $i <=31; $i++) { 
                        ?>
                        <option value="<?=$i ;?>"><?=$i ;?></option>
                        <?php
                            }
                        ?>
                    </select>

                    <label for="exampleInputEmail1">Bulan</label>
                    <select  name="bulan" >
                            <option value=""></option>
                            <option value="jan">januari</option>
                            <option value="feb">februari</option>
                            <option value="mar">maret</option>
                            <option value="apr">april</option>
                            <option value="may">mei</option>
                            <option value="jun">juni</option>
                            <option value="jul">juli</option>
                            <option value="aug">agustus</option>
                            <option value="sep">september</option>
                            <option value="oct">oktober</option>
                            <option value="nov">november</option>
                            <option value="dec">desember</option>
                    </select>

                    <label for="exampleInputEmail1">Tahun</label>
                    <select name="tahun" >
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
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
                
                <label for="exampleInputEmail1"></label>
            </div>
        </div>
</div>