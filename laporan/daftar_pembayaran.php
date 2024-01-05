<?php
    if ($_POST) {
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        if ($tanggal!="" and $bulan!="" and $tahun!="") {
            $cari = "$tanggal $bulan $tahun";
        }elseif($tahun!= "" and $bulan!=""){
            $cari = "$bulan $tahun";
        }else{
            $cari = "$tahun";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan pembayaran</title>
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        *{
            color: black;
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
        <script>
        function tableHtmlToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
   
    filename = filename?filename+'.xls':'excel_data.xls';
   
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
   
        downloadLink.download = filename;
       
        downloadLink.click();
    }
}
    </script>
</head>
<body>
<div id="tblData" class="table-responsive">
            <h1 align="center">Laporan pembayaran <?=$cari; ?></h1>
            <table border="1"  width="100%" cellspacing="0">
            <thead>
                    <tr>
                        <th>No</th>
                        <th>Id pembayaran</th>
                        <th>Petugas</th>
                        <th>nisn</th>
                        <th>Tanggal bayar</th>
                        <th>Bulan yang dibayar</th>
                        <th>Tahun yang dibayar</th>
                        <th>Nominal spp</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        include '../config.php';
                        $sql = mysqli_query($db,"SELECT * FROM pembayaran JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas JOIN spp ON pembayaran.id_spp = spp.id_spp JOIN siswa ON pembayaran.id_siswa = siswa.id_siswa WHERE pembayaran.tgl_bayar LIKE '%$cari%' ORDER by pembayaran.id_pembayaran ASC");
                        
                        $no = 1;
                        while ($ambil = mysqli_fetch_array($sql)) {
                            $id_petugas = $ambil['id_petugas'];
                            $id_pembayaran = $ambil['id_pembayaran'];
                            $nama_petugas = $ambil['nama_petugas'];
                            $nisn = $ambil['nisn'];
                            $tgl_bayar = $ambil['tgl_bayar'];
                            $bulan_bayar = $ambil['bulan_bayar'];
                            $tahun_bayar = $ambil['tahun_bayar'];
                            $nominal = $ambil['nominal'];
                            $jumlah_bayar = $ambil['jumlah_bayar'];
                            $jumlah_kembalian = $ambil['jumlah_kembalian'];
                            $jam_bayar = $ambil['jam_bayar'];
                            $nama = $ambil['nama'];
                            // $id_kelas = $ambil['id_kelas'];
                            // $nama_kelas = $ambil['nama_kelas'];
                            // $jurusan = $ambil['jurusan'];
                        
                ?>
                    <tr>
                        <td scope="col"><?=$no++; ?></td>
                        <td scope="col">P-<?=$id_pembayaran; ?></td>
                        <td scope="col"><?=$nama_petugas; ?></td>
                        <td scope="col"><?=$nisn; ?> (<?=$nama ;?>)</td>
                        <td scope="col"><?=$tgl_bayar; ?> (<?=$jam_bayar?>)</td>
                        <td scope="col"><?=$bulan_bayar; ?></td>
                        <td scope="col"><?=$tahun_bayar; ?></td>
                        <td scope="col">Rp.<?=number_format($nominal,0,'.','.')?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <a  href="#" onclick="window.print();"><button class="print">CETAK</button></a> 
        <button class="print" onclick="tableHtmlToExcel('tblData', 'Laporan pembayaran <?=$cari; ?>')">Export excel</button>
</body>
</html>