-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mar 2019 pada 11.00
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmp_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `id_db` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `nama_image` varchar(255) NOT NULL,
  `bagus` varchar(255) NOT NULL,
  `kurang_bagus` varchar(255) NOT NULL,
  `rusak` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `keterangan_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`id_db`, `nama_produk`, `tipe`, `nama_image`, `bagus`, `kurang_bagus`, `rusak`, `jumlah`, `keterangan_img`) VALUES
(2, 'PC', 'Tiger2p00', 'pc.png', '32', '23', '23', '78', ' 32 Buah bekerja dengan baik 23 Bekerja Kurang Baik dan 23 sisanya rusak/tidak dapat hidup'),
(3, 'Herman', 'Orang', 'Penguins.jpg', '1', '0', '0', '1', ' :3\r\n'),
(4, 'dasd', 'sda', 'Desert.jpg', '12', '21', '21', '54', ' indahnya pemandangan\r\n'),
(5, 'Snow', 'Human', 'Chrysanthemum.jpg', '4', '4', '3', '11', ' lasdmasdms'),
(6, 'sds', 'ssad', 'Lighthouse.jpg', '34', '3', '213', '250', 'flmfl;m '),
(7, 'fjfjq', 'jasldj', 'Hydrangeas.jpg', '1', '21', '12', '34', ' mdsaldm'),
(8, 'Herman', 'Tiger2p00', '', '1', '1', '1', '3', ' ;lk;da'),
(9, 'Herman', 'Tiger2p00', '', '1', '1', '1', '3', ' ;lk;da'),
(10, 'dfsad', 'sadsd', '', '1', '', '', '1', ' '),
(11, 'jasfjasj;', 'sldksa;', 'Desert.jpg', '', '', '', '0', ' .mc.zmcxzmcxmc.x,mc.xmcx.,cmx.,cmx.cmxzcmx.,cmx,cmx,cmx,.cxz,.cx,c.x,mcx.cm.x,cm.x,mcx.m,cx,cxmcx,mcxz.mcxz.cmx.cmx.cmx,.cmx,mcx.,mcxz.,mc.xmcx,.cmxzmc'),
(12, 'f;lsafas;;', 'lsdas;dldjals', 'Koala.jpg', '12', '12', '12', '36', ' hesadasdkldjdlskajdskjdlsjdskjdsakjdsalkdlsajdslkjdskdskjdslkjdlsjdsljdsaljdslkdjskljdlskajdksjdskljdlsajdlskjdslkajdskjdsakjdsalkjdlskajdslajdlsakjdlksajlskjdslakjdlaskjdsalkjdsalkdjsalkdjsaldjlasjdlsakjdlsakjdlskjdlskdjlsakjdlaskjdsaljdlsjdsalkjdlsajdlsjdslkjdlsajdlsajdlsajdlsjdlasjdlsajdlsajdlksjdlsjdlsajlakjdlskajlsakjdalsjd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'herman', 'herman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_db`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id_db` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
