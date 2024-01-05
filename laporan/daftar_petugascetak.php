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
    <h1 align="center">Daftar petugas</h1>
    <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id petugas</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama petugas</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        include '../config.php';
                        $sql = mysqli_query($db,"SELECT * FROM petugas");

                        $no = 1;
                        while ($ambil = mysqli_fetch_array($sql)) {
                            $id_petugas = $ambil['id_petugas'];
                            $username = $ambil['username'];
                            $password = $ambil['password'];
                            $nama_petugas = $ambil['nama_petugas'];
                            $level = $ambil['level'];
                        
                ?>
                    <tr>
                        <td scope="col"><?=$no++; ?></td>
                        <td scope="col"><?=$id_petugas; ?></td>
                        <td scope="col"><?=$username; ?></td>
                        <td scope="col"><?=$password; ?></td>
                        <td scope="col"><?=$nama_petugas; ?></td>
                        <td scope="col"><?=$level; ?></td>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <a  href="#" onclick="window.print();"><button class="print">CETAK</button></a>   
</body>
</html>