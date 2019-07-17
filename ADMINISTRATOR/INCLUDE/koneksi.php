<?php
	$koneksi=mysqli_connect("localhost","root","library");
	//cek konektion true or false
	if (mysqli_connect_errno()) {
		echo "KONEKTION IS NOT VALID".mysqli_connect_errno();
	}
?>
<!-- <?php 
$koneksi = mysqli_connect("localhost","root","","multi_user");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?> -->