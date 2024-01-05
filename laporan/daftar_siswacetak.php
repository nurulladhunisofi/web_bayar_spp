<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak daftar siswa</title>
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
    <h1 align="center">Daftar siswa</h1>
    <div class="table-responsive">
            <table border="1"  id="dataTable" width="100%" cellspacing="0">
            <thead>
                    <tr>
                        <th>No</th>
                        <th>Nisn</th>
                        <th>Nis</th>
                        <th>Password</th>
                        <th>Nama siswa</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>Nomor telepon</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        include '../config.php';
                        $sql = mysqli_query($db,"SELECT * FROM siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas");
                        

                        $no = 1;
                        while ($ambil = mysqli_fetch_array($sql)) {
                            $id_siswa = $ambil['id_siswa'];
                            $nisn = $ambil['nisn'];
                            $nis = $ambil['nis'];
                            $nama = $ambil['nama'];
                            $nama_kelas = $ambil['nama_kelas'];
                            $alamat = $ambil['alamat'];
                            $no_telp = $ambil['no_telp'];
                            $pass = $ambil['password'];
                        
                ?>
                    <tr>
                        <td scope="col"><?=$no++; ?></td>
                        <td scope="col"><?=$nisn; ?></td>
                        <td scope="col"><?=$nis; ?></td>
                        <td scope="col"><?=$pass; ?></td>
                        <td scope="col"><?=$nama; ?></td>
                        <td scope="col"><?=$nama_kelas; ?></td>
                        <td scope="col"><?=$alamat; ?></td>
                        <td scope="col"><?=$no_telp; ?></td>
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