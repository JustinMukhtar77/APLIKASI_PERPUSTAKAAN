<?php
	mysql_connect("localhost","root","");
	mysql_select_db("library");
	//ambil data dari management mahasiswa
	$ambildata=mysql_query("select * from management_mahasiswa");
	$sharing=mysql_fetch_array($ambildata);
	$nimsiswa=$sharing['nim'];
		$nim=$_GET['nim'];
		$kdbuku=$_GET['kdbuku'];
		$tanggal=$_GET['tanggalpeminjaman'];
	if ($nim==$nimsiswa){
		mysql_query("INSERT INTO management_peminjaman VALUES('$nim','$kdbuku','$tanggal')");
		header("location:index.php?menu=peminjamanbuku");

	}else{
		echo "<script>alert('anda blom terdaftar sebagai siswa');</script>";
		header("location:index.php?menu=peminjamanbuku");

	}
?>