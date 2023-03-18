<?php 
session_start();
include 'functions.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($conn,"select * from user1 where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	if($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:../admin/Dashboard.php");
	}else if($data['level']=="user"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		header("location:user/Dashboard.php");
	}else{
		header("location:../login.php?pesan=gagal");
	}	
}else{
	header("location:../login.php?pesan=gagal");
}
?>


