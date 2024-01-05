<?php
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../config.php';
 
// menangkap data yang dikirim dari form
$username    =mysqli_real_escape_string($db, $_POST['username']);
$password    =mysqli_real_escape_string($db, $_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db,"SELECT * FROM `petugas` where username='$username' and password='$password'and level='admin'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
	$_SESSION['status'] = "login";
	header("location:../index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>