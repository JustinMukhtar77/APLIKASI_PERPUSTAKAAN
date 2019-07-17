-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Feb 2019 pada 01.56
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `brainware`
--

CREATE TABLE IF NOT EXISTS `brainware` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `level` varchar(20) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `brainware`
--

INSERT INTO `brainware` (`id`, `nama`, `jk`, `alamat`, `no_telepon`, `level`, `profile`, `status`) VALUES
(1, 'AAA', '', '', '919', 'pustakawan', '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategory_buku`
--

CREATE TABLE IF NOT EXISTS `kategory_buku` (
  `id_buku` varchar(50) DEFAULT NULL,
  `kd_buku` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategory_buku`
--

INSERT INTO `kategory_buku` (`id_buku`, `kd_buku`, `status`) VALUES
('A007', 'A0070', 0),
('A007', 'A0071', 0),
('A007', 'A0072', 0),
('A007', 'A0073', 0),
('A007', 'A0074', 0),
('A007', 'A0075', 0),
('A007', 'A0076', 0),
('12301', '123010', 0),
('12301', '123011', 0),
('12301', '123012', 1),
('12301', '123013', 0),
('12301', '123014', 0),
('97860225565503', '978602255655030', 0),
('97860225565503', '978602255655031', 0),
('97860225565503', '978602255655032', 0),
('97860225565503', '978602255655033', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `management_buku`
--

CREATE TABLE IF NOT EXISTS `management_buku` (
  `id_buku` varchar(50) NOT NULL,
  `subjek` varchar(100) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `deskripsi_fisik` varchar(100) DEFAULT NULL,
  `bahasa` varchar(50) DEFAULT NULL,
  `isbn` int(20) DEFAULT NULL,
  `edisi` varchar(100) DEFAULT NULL,
  `stock_buku` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `management_buku`
--

INSERT INTO `management_buku` (`id_buku`, `subjek`, `penulis`, `penerbit`, `deskripsi_fisik`, `bahasa`, `isbn`, `edisi`, `stock_buku`) VALUES
('12301', 'Algoritma & pemrograman c++ dasaar', 'ABDUL KADIR', 'ANDI', '547, hlm', 'indonesia', 2147483647, 'cetakan pertama', 5),
('97860225565503', 'Anylisis Ideologi Dunia', 'Haqqul Yaqin', 'DIVA Press', '432, hlm', 'indonesia', 2147483647, 'cetakan pertama', 4),
('A007', 'PHP DASAR', 'NURLHALIMAN', 'best seller', '234, hlm', 'indonesia', 2147483647, 'cetakan kedua', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `management_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `management_mahasiswa` (
  `nim` varchar(50) NOT NULL DEFAULT '',
  `nama` varchar(100) DEFAULT NULL,
  `jk` varchar(100) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  `tetala` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `management_mahasiswa`
--

INSERT INTO `management_mahasiswa` (`nim`, `nama`, `jk`, `prodi`, `tetala`, `alamat`, `no_telepon`) VALUES
('18201140', 'halimuddin', 'lakik-laki', 'sistem komputer', '1998-02-20', 'jember', '087777635255'),
('18201175', 'ach rofiki', 'laki-laki', 'teknik informatika', '1999-02-20', 'singosari', '777');

-- --------------------------------------------------------

--
-- Struktur dari tabel `management_peminjaman`
--

CREATE TABLE IF NOT EXISTS `management_peminjaman` (
  `nim` varchar(50) DEFAULT NULL,
  `id_buku` varchar(50) DEFAULT NULL,
  `kd_buku` varchar(50) DEFAULT NULL,
  `tanggal_peminjaman` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `management_peminjaman`
--

INSERT INTO `management_peminjaman` (`nim`, `id_buku`, `kd_buku`, `tanggal_peminjaman`, `status`) VALUES
('18201175', 'A007', 'A0073', '02-02-2019', 0),
('18201140', '12301', '123012', '02-02-2019', 1),
('18201140', 'A007', 'A0074', '02-02-2019', 0),
('18201175', 'A007', 'A0073', '02-02-2019', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `management_pengembalian`
--

CREATE TABLE IF NOT EXISTS `management_pengembalian` (
  `nim` varchar(50) DEFAULT NULL,
  `kd_buku` varchar(50) DEFAULT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `lama` int(11) DEFAULT NULL,
  `telat` int(11) DEFAULT NULL,
  `denda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `management_pengembalian`
--

INSERT INTO `management_pengembalian` (`nim`, `kd_buku`, `tanggal_pengembalian`, `lama`, `telat`, `denda`) VALUES
('18201175', 'A0073', '2019-02-28', 26, 19, 9500),
('18201140', 'A0074', '2019-02-12', 10, 3, 1500),
('18201175', 'A0073', '2019-02-04', 2, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brainware`
--
ALTER TABLE `brainware`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategory_buku`
--
ALTER TABLE `kategory_buku`
 ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `management_buku`
--
ALTER TABLE `management_buku`
 ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `management_mahasiswa`
--
ALTER TABLE `management_mahasiswa`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `management_peminjaman`
--
ALTER TABLE `management_peminjaman`
 ADD KEY `nim` (`nim`);

--
-- Indexes for table `management_pengembalian`
--
ALTER TABLE `management_pengembalian`
 ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brainware`
--
ALTER TABLE `brainware`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kategory_buku`
--
ALTER TABLE `kategory_buku`
ADD CONSTRAINT `kategory_buku_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `management_buku` (`id_buku`),
ADD CONSTRAINT `kategory_buku_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `management_buku` (`id_buku`);

--
-- Ketidakleluasaan untuk tabel `management_peminjaman`
--
ALTER TABLE `management_peminjaman`
ADD CONSTRAINT `management_peminjaman_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `management_mahasiswa` (`nim`);

--
-- Ketidakleluasaan untuk tabel `management_pengembalian`
--
ALTER TABLE `management_pengembalian`
ADD CONSTRAINT `management_pengembalian_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `management_peminjaman` (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
