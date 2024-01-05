
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../insertedit.css">
    <title>Insert kelas</title>
</head>
<body>
    <div class="container border">
        <h3 align="center" >Insert kelas</h3 >
        <form method="post" action="insertaction.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan kelas</label>
                <input name="kelas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan jurusan</label>
                <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>  
            <button type="submit" name="tambah" class="btn btn-primary">Insert</button>
        </form>
    </div>

    <script src="../assets/js/jquery.js"> </script>
    <script src="../assets/js/bootstrap.min.js"> </script>
    <script src="../assets/js/popper.js"> </script>
</body>
</html>