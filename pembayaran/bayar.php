<?php
include '../config.php';
        if ($_POST) {
            date_default_timezone_set('Asia/Jakarta');
            $hari_ini = date('d M Y');
            $jam_bayar= date('H:i:s');
    
            $id_petugas = $_POST['id_petugas'];
            $id_siswa = $_POST['id_siswa'];
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
            $nominal = $_POST['nominal'];
            $id_spp = $_POST['id_spp'];

            $jumlah_bayar = $_POST['jumlah_bayar'];
            $jumlah_kembalian = $jumlah_bayar - $nominal;

            if ($id_siswa!="" and $bulan!="" and $jumlah_bayar!="" ) {
                if ($nominal <= $jumlah_bayar) {
                    $sql = mysqli_query($db,"INSERT INTO pembayaran (id_petugas,id_siswa,tgl_bayar,bulan_bayar,tahun_bayar,id_spp,jumlah_bayar,jumlah_kembalian,jam_bayar) VALUES('$id_petugas','$id_siswa','$hari_ini','$bulan','$tahun','$id_spp','$jumlah_bayar','$jumlah_kembalian','$jam_bayar') ");
    
                    echo " <script>
                    alert('berhasil terkirim')
                    window.location.href='../index.php?page=pembayaran/tampildata.php';
                </script>";
            }
            else {
                    echo " <script>
                    alert('Maaf uang spp kurang')
                    window.location.href='insertpembayaran.php?id=$id_petugas';
                </script>"; 
                }
    
            }
            else {
                echo " <script>
                alert('gagal terkirim')
                window.location.href='insertpembayaran.php?id=$id_petugas';
            </script>";
            }
        }
    ?>