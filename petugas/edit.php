<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../insertedit.css">
    <title>Edit petugas</title>
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
    <?php
                include '../config.php';
                $tangkap_id = $_GET['id'];
                $sql = mysqli_query($db,"SELECT * FROM petugas WHERE  id_petugas='$tangkap_id' ");

                $no = 1;
                     $ambil = mysqli_fetch_array($sql); 
                     $id_petugas = $ambil['id_petugas'];
                     $username = $ambil['username'];
                     $password = $ambil['password'];
                     $nama_petugas = $ambil['nama_petugas'];
                     $level = $ambil['level'];

                
    ?>
    <div class="container border">
        <h3 align="center" >Edit Petugas</h3 >
        <form method="POST" action="editaction.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan username yang ingin diubah</label>
                <input value="<?=$id_petugas; ?>" name="id" type="hidden">
                <input value="<?=$username; ?>" name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan password yang ingin diubah</label>
                <input value="<?=$password; ?>" name="password" type="password" class="form-control" id="mypassword" aria-describedby="emailHelp">
                <input type="checkbox" onclick="myFunction()"> Lihat Password <br>
            </div>  
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan nama petugas yang ingin diubah</label>
                <input value="<?=$nama_petugas; ?>" name="nama_petugas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan level yang ingin diubah</label>
                <select name="level" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <option value="admin">Admin</option>\
                    <option value="petugas">Petugas</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

    <script src="../assets/js/jquery.js"> </script>
    <script src="../assets/js/bootstrap.min.js"> </script>
    <script src="../assets/js/popper.js"> </script>
</body>
</html>