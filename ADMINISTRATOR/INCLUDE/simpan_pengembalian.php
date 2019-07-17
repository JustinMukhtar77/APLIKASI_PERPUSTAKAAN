<?php
	include '../../koneksi.php';
	$nim=$_GET['nim'];
	$kdbuku=$_GET['kdbuku'];
	$tglpengembalian=$_GET['tanggalpm'];
		$pengambilan=mysql_query("select * from management_peminjaman where kd_buku='$kdbuku'");
		$pengambilandata=mysql_fetch_array($pengambilan);
		$nimpm=$pengambilandata['nim'];		//nim apabila nim peminjam yang dimasukkan sama
		$idbuku=$pengambilandata['id_buku'];		
		$kd_buku=$pengambilandata['kd_buku'];		//kdbuku apabila yang didapatkan sama 
		$tglpeminjaman=$pengambilandata['tanggal_peminjaman'];
			$tanggalpeminjaman= new DateTime($tglpeminjaman);
			$tanggalpengembalian = new DateTime($tglpengembalian);
			$interval= $tanggalpeminjaman->diff($tanggalpengembalian);
			$konvert= $interval->days;
			if ($konvert>=7) {
				$telat=$konvert-7;
				$denda=$telat*500;
			}else{
				$telat=0;
				$denda=0;
			}
			if ($nim==$nimpm) {
				if ($kdbuku==$kd_buku) {
					//echo "nim dan kdbuku sesuai";
					$nginsert=mysql_query("insert into management_pengembalian values('$nim','$kdbuku','$tglpengembalian','$konvert','$telat','$denda')");
					if ($nginsert) {
						mysql_query("UPDATE kategory_buku set status=0 where kd_buku='$kdbuku'");
						mysql_query("UPDATE management_peminjaman set status=0 where kd_buku='$kdbuku'");
						echo "<script>alert('succes buku dikembalikan');location.href='../?menu=pengembalianbuku';</script>";
					}else{
						echo "<script>alert('gagal simpan dalam database');</script>".mysql_error();
					}
				}else{
					echo "<script>alert('kdbuku tidak sesuai');location.href=\"../?menu=peminjamanbuku\";</script>";
				}
			}else{
				echo "<script>alert('nim tidak sesuai');location.href=\"../?menu=peminjamanbuku\";</script>";
			}
				

				// $nginsert=mysql_query("insert into management_pengembalian values('$nim','$kdbuku','$tglpengembalian','$konvert','$telat','$denda')");
				// 	if ($nginsert) {
				// 		mysql_query("UPDATE kategory_buku set status=0 where kd_buku='$kdbuku'");
				// 		mysql_query("UPDATE management_peminjaman set status=0 where kd_buku='$kdbuku'");
				// 		echo "<script>alert('succes buku dikembalikan');location.href='../?menu=pengembalianbuku';</script>";
				// 	}
					// else
					// 	echo "<script>alert('gagal simpan dalam database');</script>".mysql_error();
					// }
					
?>