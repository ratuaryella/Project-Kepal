-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2017 at 06:45 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pa1`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `deskripsi`) VALUES
(1, 'Apa itu Ulos?', 'Ulos atau sering juga disebut kain ulos adalah salah satu busana khas Indonesia. Ulos secara turun temurun dikembangkan oleh masyarakat Batak, Sumatera utara. Dari bahasa asalnya, ulos berarti kain. Cara membuat ulos serupa dengan cara membuat songket khas Palembang, yaitu menggunakan alat tenun bukan mesin.  Warna dominan pada ulos adalah merah, hitam, dan putih yang dihiasi oleh ragam tenunan dari benang emas atau perak. Mulanya ulos dikenakan di dalam bentuk selendang atau sarung saja, kerap digunakan pada perhelatan resmi atau upacara adat Batak, namun kini banyak dijumpai di dalam bentuk produk sovenir, sarung bantal, ikat pinggang, tas, pakaian, alas meja, dasi, dompet, dan gorden.  Ulos juga kadang-kadang diberikan kepada sang ibu yang sedang mengandung supaya mempermudah lahirnya sang bayi ke dunia dan untuk melindungi ibu dari segala mara bahaya yang mengancam saat proses persalinan.'),
(2, 'UKM Diva Ulos', ' Diva Ulos terletak di Desa Sibuea Lorong 2 Kecamatan Laguboti, Kabupaten Toba Samosir');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` int(3) NOT NULL,
  `id_users` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` int(20) NOT NULL,
  `id_produk` int(3) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total_harga` int(10) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_users`, `nama`, `alamat`, `email`, `nohp`, `id_produk`, `jumlah`, `total_harga`, `bukti_pembayaran`, `tanggal`) VALUES
(8, 2, 'Kelvin Nainggolan', 'Jln Raya Menteng', 'kelvinnnainggolan59@gmail.com', 12930123, 28, 2, 6400000, '', '2017-05-18'),
(9, 2, 'Kelvin Nainggolan', 'Jln Raya Menteng', 'kelvinnnainggolan59@gmail.com', 2147483647, 26, 1, 1200000, '', '2017-05-18'),
(10, 2, 'Kelvin Nainggolan', 'Jln Raya Menteng', 'kelvinnnainggolan59@gmail.com', 12930123, 28, 1, 3200000, '', '2017-05-18'),
(11, 5, 'Marchel', 'Jln Pisang', 'marcheltheodoroz@gmail.com', 12930123, 29, 1, 1200000, '', '2017-05-18'),
(12, 2, 'Kelvin Nainggolan', 'Jln Raya Menteng', 'kelvinnnainggolan59@gmail.com', 2147483647, 29, 1, 1200000, '', '2017-05-18'),
(14, 2, 'Kelvin Nainggolan', 'Jln Raya Menteng', 'kelvinnnainggolan59@gmail.com', 123, 24, 1, 1200000, 'pembayaran/Kelvin Nainggolan.jpg', '2017-05-19'),
(15, 6, 'Dodi Pakpahan', 'Jln Durian', 'dodipakpahan25@yahoo.com', 123, 6, 1, 1200000, 'pembayaran/Dodi Pakpahan.jpg', '2017-05-19'),
(16, 6, 'Dodi Pakpahan', 'jln pemuda', 'dodipakpahan25@yahoo.com', 2147483647, 6, 1, 1200000, 'pembayaran/Dodi Pakpahan.jpg', '2017-05-19'),
(17, 2, 'Kelvin Nainggolan', 'Jln Raya Menteng', 'kelvinnnainggolan59@gmail.com', 12930123, 9, 1, 1200000, 'pembayaran/Kelvin Nainggolan.jpg', '2017-05-19'),
(18, 2, 'Kelvin Nainggolan', 'Jln Pasar Merah', 'kelvinnainggolan59@gmail.com', 2147483647, 30, 1, 1200000, 'pembayaran/Kelvin Nainggolan.jpg', '2017-05-19'),
(19, 3, 'Dian Sirait', 'jln pemda', 'dodipakpahan25@yahoo.com', 12930123, 8, 5, 6000000, 'pembayaran/Dian Sirait.jpg', '2017-05-19'),
(20, 2, 'Kelvin Nainggolan', 'Jln Durian', 'asd@gmail.com', 12930123, 30, 1, 1200000, 'pembayaran/Kelvin Nainggolan.jpg', '2017-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `qty` int(9) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `status` varchar(5) NOT NULL,
  `gambar` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `harga`, `qty`, `keterangan`, `status`, `gambar`) VALUES
(1, 'Ulos Ragihotang', 600000, 10, 'Sarung dan Selendang(satu paket) motif Ragihotang Semi Sutra', 'Y', 'gambar/ragihotang1.jpg'),
(2, 'Ulos Ragihotang', 600000, 15, 'Sarung dan Selendang(satu paket) motif Ragihotang Semi Sutra', 'Y', 'gambar/ragihotang2.jpg'),
(3, 'Ulos Mangiring', 1200000, 10, 'Sarung dan Selendang(satu paket) motif Mangiring Semi Sutra', 'Y', 'gambar/Ulos Mangiring.jpg'),
(4, 'Ulos Mangiring', 1200000, 23, 'Sarung dan Selendang(satu paket) motif Mangiring Semi Sutra', 'Y', 'gambar/mangiring2.jpg'),
(5, 'Ulos Sadum', 3200000, 17, 'Sarung dan Selendang(satu paket) motif Sadum bahan Sutra', 'Y', 'gambar/sadum1.jpg'),
(6, 'Ulos Sadum', 1200000, 14, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra.', 'Y', 'gambar/sadum2.jpg'),
(7, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum3.jpg'),
(8, 'Ulos Sadum', 1200000, 17, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum4.jpg'),
(9, 'Ulos Sadum', 1200000, 19, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra\r\n', 'Y', 'gambar/sadum5.jpg'),
(10, 'Ulos Sadum', 1200000, 18, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum6.jpg'),
(11, 'Ulos Sadum', 1200000, 10, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum7.jpg'),
(12, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum8.jpg'),
(13, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum9.jpg'),
(14, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum10.jpg'),
(15, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum11.jpg'),
(16, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum12.jpg'),
(17, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum13.jpg'),
(18, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum14.jpg'),
(19, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum15.jpg'),
(20, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum16.jpg'),
(21, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum17.jpg'),
(22, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum18.jpg'),
(23, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum19.jpg'),
(24, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum20.jpg'),
(25, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum21.jpg'),
(26, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum22.jpg'),
(27, 'Ulos Sadum', 800000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum23.jpg'),
(28, 'Ulos Sadum', 3200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum24.jpg'),
(29, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum25.jpg'),
(30, 'Ulos Sadum', 1200000, 12, 'Sarung dan Selendang(satu paket) motif Sadum Semi Sutra', 'Y', 'gambar/sadum26.jpg'),
(41, 'Ulos Mangiri', 1200000, 10, 'Bagus', 'Y', 'gambar/Ulos Mangiri.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(3) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `id_testimoni` int(3) NOT NULL,
  `id_users` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `testimoni` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `id_users`, `nama`, `testimoni`, `tanggal`) VALUES
(4, 2, 'Kelvin Nainggolan', 'Sangat Bagus', '2017-05-18'),
(5, 6, 'Dodi Pakpahan', 'Nice!', '2017-05-18'),
(7, 5, 'Marchel', 'NICELY DONE!', '2017-05-18'),
(9, 2, 'Kelvin Nainggolan', 'Gas terus boy!!!', '2017-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama`, `alamat`, `email`, `nohp`, `username`, `password`, `role`) VALUES
(1, 'Kelvin Nainggolan', 'Jln Raya Menteng', 'kelvinnainggolan59@gmail.com', 2147483647, 'admin', 'admin', 1),
(2, 'Kelvin Nainggolan', 'Jln Raya Menteng', 'kelvinrayner@gmail.com', 2147483647, 'kelvinrayner', 'nainggolan02', 2),
(3, 'Dian Sirait', 'Jln Pisang', 'diansirait@gmail.com', 2147483647, 'dian', 'sirait', 2),
(4, 'Tami Tambunan', 'Jln Apel', 'tami@gmail.com', 2147483647, 'tami', 'tambunan', 2),
(5, 'Marchel', 'Jln Durian', 'marcheltheodoroz@gmail.com', 2147483647, 'marchel', '1234', 2),
(6, 'Dodi Pakpahan', 'Jln Pisang', 'dodipakpahan25@yahoo.com', 2147483647, 'dodi', '1234', 2),
(7, 'Sehat', 'Jln Semangka', 'sehat123@yahoo.com', 2147483647, 'sehat', '1234', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`,`id_users`,`id_produk`), ADD KEY `id_produk` (`id_produk`), ADD KEY `pemesanan_ibfk_1` (`id_users`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`), ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`), ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
