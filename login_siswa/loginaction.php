<?php
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../config.php';
 
// menangkap data yang dikirim dari form
$nisn    =mysqli_real_escape_string($db, $_POST['nisn']);
$password    =mysqli_real_escape_string($db, $_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db,"SELECT * FROM `siswa` where nisn='$nisn' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['nisn'] = $nisn;
    $_SESSION['password'] = $password;
	$_SESSION['status'] = "login";
	header("location:../halaman_siswa.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>