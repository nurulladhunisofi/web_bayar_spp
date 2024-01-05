<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download daftar Siswa</title>
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        *{
            color: black;
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
            <h1 align="center">Daftar Siswa</h1>
            <table border="1"  width="100%" cellspacing="0">
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
        <button onclick="tableHtmlToExcel('tblData', 'Daftar Siswa')">Export</button>
</body>
</html>