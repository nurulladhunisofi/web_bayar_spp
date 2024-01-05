<?php
    $id = $_GET['id'];
    include '../config.php';
    $sql = mysqli_query($db,"SELECT * FROM pembayaran JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas JOIN spp ON pembayaran.id_spp = spp.id_spp WHERE id_pembayaran ='$id' ");

        $ambil = mysqli_fetch_array($sql);

        $id_petugas = $ambil['id_petugas'];
        $id_pembayaran = $ambil['id_pembayaran'];
        $nama_petugas = $ambil['nama_petugas'];
        // $nama = $ambil['nama'];
        $tgl_bayar = $ambil['tgl_bayar'];
        $bulan_bayar = $ambil['bulan_bayar'];
        $tahun_bayar = $ambil['tahun_bayar'];
        $nominal = $ambil['nominal'];
        $jumlah_bayar = $ambil['jumlah_bayar'];
        $jumlah_kembalian = $ambil['jumlah_kembalian'];
        $jam_bayar = $ambil['jam_bayar'];
        $level  = $ambil['level'];

        // $id_kelas = $ambil['id_kelas'];
        // $nama_kelas = $ambil['nama_kelas'];
        // $jurusan = $ambil['jurusan'];  
    $siswa = mysqli_query($db,"SELECT * FROM siswa JOIN pembayaran ON siswa.id_siswa = pembayaran.id_siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas WHERE id_pembayaran = '$id' ");
    $ambil_siswa = mysqli_fetch_array($siswa);
    $nama_siswa = $ambil_siswa['nama'];     
    $nisn = $ambil_siswa['nisn']; 
    $nama_kelas = $ambil_siswa['nama_kelas'];      
    $jurusan = $ambil_siswa['jurusan'];        
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Pembayaran</title>
    <style>
        table{
            margin: auto;
        }
		.print{
			margin-top: 10px;
		}
		@media print{
			.print{
				display: none;
			}
		}
    </style>
</head>
<body>
    <h2 align="center">SMK Negeri 9 Medan</h2>
    <h3 align="center">Laporan spp</h3>
    <br>
        <table>
            <tr>       
                <td>Id Pembayaran</td>
                <td>&nbsp;&nbsp;&nbsp;: &nbsp;P-<?=$id_pembayaran; ?></td>
            </tr>
            <tr>
                <td>Nama siswa</td>
                <td>&nbsp;&nbsp;&nbsp;: &nbsp;<?=$nama_siswa; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>&nbsp;&nbsp;&nbsp;: &nbsp;<?=$nama_kelas; ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>&nbsp;&nbsp;&nbsp;: &nbsp;<?=$jurusan; ?></td>
            </tr>
            <tr>
                <td>Nisn</td>
                <td>&nbsp;&nbsp;&nbsp;: &nbsp;<?=$nisn; ?></td>
            </tr>
            <tr>
                <td>Petugas</td>
                <td>&nbsp;&nbsp;&nbsp;: &nbsp;<?=$nama_petugas; ?> (<?=$level; ?>)</td>
            </tr>
            <tr>
                <td>Tanggal transaksi</td>
                <td>&nbsp;&nbsp;&nbsp;: &nbsp;<?=$tgl_bayar; ?></td>
            </tr>
            <tr>
                <td>Pukul</td>
                <td>&nbsp;&nbsp;&nbsp;: &nbsp;<?=$jam_bayar; ?></td>
            </tr>
            <tr>
                <td>Pembayaran untuk bulan</td>
                <td>&nbsp;&nbsp;&nbsp;: &nbsp;<?=$bulan_bayar?> <?=$tahun_bayar; ?></td>
            </tr>
            <tr>
                <td>Nominal</td>
                <td>&nbsp;&nbsp;&nbsp;: &nbsp; Rp.<?=number_format($nominal,0,'.','.'); ?></td>
            </tr>
            <tr>
                <td>Jumlah bayar</td>
                <td>&nbsp;&nbsp;&nbsp;: &nbsp; Rp.<?=number_format($jumlah_bayar,0,'.','.'); ?></td>
            </tr>
            <tr>
                <td>Jumlah kembalian</td>
                <td>&nbsp;&nbsp;&nbsp;: &nbsp; Rp.<?=number_format($jumlah_kembalian,0,'.','.')?></td>
            </tr>
        </table>
        <a  href="#" onclick="window.print();"><button class="print">CETAK</button></a>   
</body>
</html>