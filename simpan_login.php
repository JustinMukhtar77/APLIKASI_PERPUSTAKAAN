<?php
	include 'koneksi.php';
	$u=$_GET['username'];
	$tlp=$_GET['password'];
	$sql=mysql_query("SELECT * FROM brainware where nama='$u' AND no_telepon='$tlp'");
	$data=mysql_fetch_array($sql);
	if ($data) {
		if ($data['level']=="pustakawan") {
			@session_start();
			$_SESSION['nama']=$data['nama'];
			header("location:ADMINISTRATOR");
		}else{
			echo "<script>alert('maaf anda tidak bisa up to date');location.href='index.php';</script>";
		}
	}else{
		echo "<script>alert('login dulu !');location.href='index.php';</script>";
	}
?>