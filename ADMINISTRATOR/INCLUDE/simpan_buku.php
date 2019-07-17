<?php
	mysql_connect("localhost","root","");
	mysql_select_db("library");
	$id=$_GET['idbuku'];
	$subjek=$_GET['subjek']	;
	$penulis=$_GET['penulis'];
	$penerbit=$_GET['penerbit'];
	$deskripsi=$_GET['deskripsi'];
	$bahasa=$_GET['bahasa'];
	$isbn=$_GET['isbn'];
	$edisi=$_GET['edisi'];
	$stok=$_GET['stok'];
	$bil=0;
	$insert=mysql_query("INSERT INTO management_buku VALUES('$id','$subjek','$penulis','$penerbit','$deskripsi','$bahasa','$isbn','$edisi','$stok')");
	if ($insert) {
		for ($jml=1; $jml <=$stok; $jml++) { 
			$kdbuku=$id.$bil++;
			$insert1=mysql_query("INSERT INTO kategory_buku VALUES('$id','$kdbuku',0)");
		}
	header("location:index.php?menu=daftarbuku");
	}else{
		echo "gagal";
	}

?>