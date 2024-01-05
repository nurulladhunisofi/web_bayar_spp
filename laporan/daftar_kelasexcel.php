<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download daftar kelas</title>
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
            <h1 align="center">Daftar Kelas</h1>
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
        <button onclick="tableHtmlToExcel('tblData', 'Daftar kelas')">Export</button>
</body>
</html>