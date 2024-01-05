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
    <h1 align="center">Daftar Kelas</h1>
    <div class="table-responsive">
            <table border="1" style="margin: auto;"  width="80%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id kelas</th>
                        <th>Nama kelas</th>
                        <th>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        include '../config.php';
                        $sql = mysqli_query($db,"SELECT * FROM kelas");

                        $no = 1;
                        while ($ambil = mysqli_fetch_array($sql)) {
                            $id_kelas = $ambil['id_kelas'];
                            $nama_kelas = $ambil['nama_kelas'];
                            $jurusan = $ambil['jurusan'];
                        
                ?>
                    <tr>
                        <td scope="col"><?=$no++; ?></td>
                        <td scope="col"><?=$id_kelas; ?></td>
                        <td scope="col"><?=$nama_kelas; ?></td>
                        <td scope="col"><?=$jurusan; ?></td>
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