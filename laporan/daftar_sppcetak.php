<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak daftar kelas</title>
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
</head>
<body>
    <h1 align="center">Daftar spp</h1>
    <div class="table-responsive">
            <table border="1"  id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id spp</th>
                        <th>Tahun</th>
                        <th>Nominal</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        include '../config.php';
                        $sql = mysqli_query($db,"SELECT * FROM spp");

                        $no = 1;
                        while ($ambil = mysqli_fetch_array($sql)) {
                            $id_spp = $ambil['id_spp'];
                            $tahun = $ambil['tahun'];
                            $nominal = $ambil['nominal'];
                        
                ?>
                    <tr>
                        <td scope="col"><?=$no++; ?></td>
                        <td scope="col"><?=$id_spp; ?></td>
                        <td scope="col"><?=$tahun; ?></td>
                        <td scope="col">Rp.<?=number_format($nominal,0,'.','.')  ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <a  href="#" onclick="window.print();"><button class="print">CETAK</button></a>   
</body>
</html>