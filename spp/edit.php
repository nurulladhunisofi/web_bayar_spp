
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../insertedit.css">
    <title>Edit spp</title>
</head>
<body>
<?php
                include '../config.php';
                $tangkap_id = $_GET['id'];
                $sql = mysqli_query($db,"SELECT * FROM spp WHERE  id_spp='$tangkap_id' ");

                $no = 1;
                     $ambil = mysqli_fetch_array($sql); 
                     $id_spp = $ambil['id_spp'];
                     $tahun = $ambil['tahun'];
                     $nominal = $ambil['nominal'];

                
        ?>

    <div class="container border">
        <h3 align="center" >Edit spp</h3 >
        <form method="POST" action="editaction.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan tahun yang ingin diubah</label>
                <input value="<?=$id_spp; ?>" name="id" type="hidden">
                <input value="<?=$tahun; ?>" name="tahun" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan nominal yang ingin diubah</label>
                <input value="<?=$nominal; ?>" name="nominal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>  
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
    <script src="../assets/js/jquery.js"> </script>
    <script src="../assets/js/bootstrap.min.js"> </script>
    <script src="../assets/js/popper.js"> </script>
</body>
</html>