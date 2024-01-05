<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../insertedit.css">
    <title>insert siswa</title>
    <script>
        function myFunction() {
            var x = document.getElementById("mypassword");
            if (x.type === "password") {
            x.type = "text";
            } else {
        x.type = "password";
            }
        }
    </script>
</head>
<body>
    <div class="container border">
        <h3 align="center" >Insert siswa</h3 >
        <form method="post" action="insertaction.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan nisn</label>
                <input name="nisn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>  
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan nis</label>
                <input name="nis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan password</label>
                <input name="password" type="password" class="form-control" id="mypassword" aria-describedby="emailHelp">
                <input type="checkbox" onclick="myFunction()"> Lihat Password <br>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan nama siswa</label>
                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </select>
            </div>
        
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan alamat siswa</label>
                 <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan Kelas siswa</label>
                        <select class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="kelas" id="">
                            <?php
                            include '../config.php';
                            $sql = mysqli_query($db,"SELECT * FROM kelas");
                            while ($ambil = mysqli_fetch_array($sql)) {
                                
                                echo'<option value="'.$ambil['id_kelas'].'">'
                                .$ambil['nama_kelas'].
                                '</option>';
                            }
                            echo"</select>";
                            ?>
                        </select>
            </div>  
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan nomor telepon siswa</label>
                <input name="no_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>   
            <button type="submit" name="tambah" class="btn btn-primary">Insert</button>
        </form>
    </div>

    <script src="../assets/js/jquery.js"> </script>
    <script src="../assets/js/bootstrap.min.js"> </script>
    <script src="../assets/js/popper.js"> </script>
</body>
</html>