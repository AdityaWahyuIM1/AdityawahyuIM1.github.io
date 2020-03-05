-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Nov 2019 pada 01.24
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guesbook`
--

CREATE TABLE IF NOT EXISTS `guesbook` (
  `id` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `url` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guesbook`
--

INSERT INTO `guesbook` (`id`, `nama`, `email`, `url`, `komentar`, `tanggal`) VALUES
(2, 'Widya Intan Puspa', 'widyapuspa@gmail.com', 'http//pusphy.com', 'Sipp', '29-09-19'),
(4, 'Setyawan', 'densetya@gmail.com', 'http//rainphy.com', 'Okee', '2019-11-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(600) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `judul`, `isi`) VALUES
(1, 'SELAMAT DATANG DI WEBSITE ONLINE SHOP RAINPHY SHOES', 'RAINPHY SHOES merupakan salah satu toko online yang menyediakan berbagai macam model sepatu yang berkualitas dan harga terjangkau.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog`
--

CREATE TABLE IF NOT EXISTS `katalog` (
  `id` int(10) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `katalog`
--

INSERT INTO `katalog` (`id`, `nama`, `foto`, `harga`, `deskripsi`) VALUES
(1, 'Ardiles', '28102019021837Ardiles.jpg', ' Rp278.000', 'Warna hitam putih dan banyak diminati orang'),
(2, 'Ando', '28102019021855Ando.jpg', ' Rp320.000', 'Warna abu putih dan harga terjangkau'),
(3, 'Adidas', '28102019021911Adidas.jpg', ' Rp325.000', 'Model menarik dan nyaman dipakai'),
(4, 'Nike', '28102019021931Nike Merah.jpg', ' Rp478.000', 'Warna abu putih dan banyak diminati orang'),
(5, 'Vila', '28102019021945Vila.jpg', ' Rp525.000', 'Warna putih dan model menarik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `pass`, `user`, `nama`) VALUES
(1, 'pusphy', 'puspa', 'widya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guesbook`
--
ALTER TABLE `guesbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guesbook`
--
ALTER TABLE `guesbook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
