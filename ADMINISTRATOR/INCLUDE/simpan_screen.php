<?php
	include '../../koneksi.php';
	if (empty($_GET['password'])) {
		echo "<script>alert('Please...! Fill Up Password');location.href='screen.php';</script>";
	}else{
			$tlp=$_GET['password'];
			$sql=mysql_query("select * from brainware where no_telepon='$tlp'");
			$sqlq=mysql_fetch_array($sql);
			if($sqlq) {
				echo "<script>alert('succes login');location.href='../';</script>";
			}else{
				echo "<script>alert('password unvalid');location=\"../INCLUDE/screen.php\";</script>";
			}
	}
?>