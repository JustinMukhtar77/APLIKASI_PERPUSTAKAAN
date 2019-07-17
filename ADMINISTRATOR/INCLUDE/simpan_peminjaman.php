<?php
	if (empty($_GET['nim']) && empty($_GET['kdbuku'])) {
		echo "<script>alert('NIM DAN KDBUKU KOSONG');location.href=\"../?menu=peminjamanbuku\";</script>";
	}else if (empty($_GET['nim'])) {
		echo "<scipt>alert('NIM KOSONG');location.href='../?menu=peminjamanbuku';</script>";
	}elseif (empty($_GET['kdbuku'])) {
		echo "<script>alert('KDBUKU KOSONG');location.href=\"?menu=peminjamanbuku\";</script>";
	}else{
		include '../../koneksi.php';
		$nim=$_GET['nim'];
		$kdbuku=$_GET['kdbuku'];
		$tanggalpm=$_GET['tanggalpm'];
		$tampil=mysql_query("select nim from management_mahasiswa where nim='$nim'");
		$tampilkan=mysql_fetch_array($tampil);
		$nimpm=$tampilkan['nim'];
		if ($nim==$nimpm) {
			$kd=mysql_query("select * from kategory_buku where kd_buku='$kdbuku'");
			$k=mysql_fetch_array($kd);
			$kdpm=$k['kd_buku'];
			if ($kdbuku==$kdpm) {
				$stat=mysql_query("select * from management_peminjaman where kd_buku='$kdbuku'");
				$statu=mysql_fetch_array($stat);
				$status=$statu['status'];
				if ($status==1) {
					echo "<script>alert('buku sedang dipinjam');location.href=\"../?menu=peminjamanbuku\";</script>";
				}else{
					$idbu=mysql_query("select * from kategory_buku where kd_buku='$kdbuku'");
					$idbuk=mysql_fetch_array($idbu);
					$idbuku=$idbuk['id_buku'];
					$inseridbuku=mysql_query("INSERT INTO management_peminjaman VALUES('$nim','$idbuku','$kdbuku','$tanggalpm',1)");
					if ($inseridbuku) {
						mysql_query("UPDATE kategory_buku set status=1 where kd_buku='$kdbuku'");
						header("location:../?menu=peminjamanbuku");
					}else{
						echo "<script>alert('filed to save');location.href='../?menu=peminjamanbuku'</script>";
						mysql_errno();
					}
				}
			}else{
				echo "<script>alert('KD BUKU YANG DIINPUTKAN TIDAK VALID');location.href=\"../?menu=peminjamanbuku\";</script>";
			}
		}else{
			echo "<script>alert('NIM YANG DINPUTKAN TIDAK VALID');location.href=\"../?menu=peminjamanbuku\";</script>";
		}
	}
?>