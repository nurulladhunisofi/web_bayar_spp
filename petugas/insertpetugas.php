<style>
    .kartu{
        margin: auto;
        border-radius: 10px;
        border-width: 10px;
        border: 5px #03bdef solid;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../insertedit.css">
    <title>insert petugas</title>
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
        <h3 align="center" >Insert Petugas</h3 >
        <form method="POST" action="insertaction.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan username</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan password</label>
                <input name="password" type="password" class="form-control" id="mypassword" aria-describedby="emailHelp">
                <input type="checkbox" onclick="myFunction()"> Lihat Password <br>
            </div>  
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan nama petugas</label>
                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Masukkan level petugas</label>
                <select class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="level" id="">
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary">Insert</button>
        </form>
    </div>

    <script src="../assets/js/jquery.js"> </script>
    <script src="../assets/js/bootstrap.min.js"> </script>
    <script src="../assets/js/popper.js"> </script>
</body>
</html>