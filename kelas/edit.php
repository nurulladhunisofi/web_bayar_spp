<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../insertedit.css">
    <title>Edit kelas</title>
</head>
<body>
<?php
                include '../config.php';
                $tangkap_id = $_GET['id'];
                $sql = mysqli_query($db,"SELECT * FROM kelas WHERE  id_kelas='$tangkap_id' ");

                $no = 1;
                     $ambil = mysqli_fetch_array($sql); 
                     $id_kelas = $ambil['id_kelas'];
                     $nama_kelas = $ambil['nama_kelas'];
                     $jurusan = $ambil['jurusan'];

                
        ?>

    <div class="container border">
        <h3 align="center" >Edit kelas</h3 >
        <form method="POST" action="editaction.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan kelas yang ingin diubah</label>
                <input value="<?=$id_kelas; ?>" name="id" type="hidden">
                <input value="<?=$nama_kelas; ?>" name="kelas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan jurusan yang ingin diubah</label>
                <input value="<?=$jurusan; ?>" name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>  
            <button type="submit" name="tambah" class="btn btn-primary">Edit</button>
        </form>
    </div>

    <script src="../assets/js/jquery.js"> </script>
    <script src="../assets/js/bootstrap.min.js"> </script>
    <script src="../assets/js/popper.js"> </script>
</body>
</html>