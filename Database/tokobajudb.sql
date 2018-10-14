-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2013 pada 09.14
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `tokobajudb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admintbl`
--

CREATE TABLE IF NOT EXISTS `admintbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `admintbl`
--

INSERT INTO `admintbl` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'operator', '28b662d883b6d76fd96e4ddc5e9ba780');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admintblcontoh`
--

CREATE TABLE IF NOT EXISTS `admintblcontoh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangtbl`
--

CREATE TABLE IF NOT EXISTS `barangtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL,
  `warna` varchar(25) NOT NULL,
  `ukuran` varchar(15) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `barangtbl`
--

INSERT INTO `barangtbl` (`id`, `nama`, `deskripsi`, `warna`, `ukuran`, `kategori`, `harga`, `stock`, `gambar`) VALUES
(1, 'Topi Bone', ' www.tokopedia.com                  ', 'Blue, Black, White, Green', '-', 'Accesories', 115000, 5, 'BE001.png'),
(2, 'Cardigan Sleveless', '  www.stuburt.com                           ', 'Abu-abu, Hitam, Biru', 'M, S, L, XL', 'Cardigan', 78500, 100, 'BC002.png'),
(3, 'Celana Boxer', '  WW.TOKOPEDIA.COM                  ', 'Merah, Hitam, Putih', 'M, L', 'Celana Pendek', 55000, 0, 'BB003.png'),
(4, 'LD Belissa Aubergine', '  www.theremedi.co.uk                  ', 'Biru, Ungu, Hitam, Merah', 'M, L, XL', 'Long Dress', 1185000, 5, 'BL004.png'),
(5, 'Blythe Taper Jeans', '   www.tokopedia.com                           ', 'Blue, Black, White', 'L, XL', 'Jeans', 2789000, 5, 'BJ005.png'),
(6, 'Polo Shirt', '   www.lokakmurah.com                           ', 'Putih, Hitam', 'L, XL', 'Kaos / T-Shirt', 75000, 0, 'Polo01.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `downloadtbl`
--

CREATE TABLE IF NOT EXISTS `downloadtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `downloadtbl`
--

INSERT INTO `downloadtbl` (`id`, `judul`, `deskripsi`, `url`) VALUES
(1, 'Katalog Produk 2013', 'Informasi mengenai produk - produk terbaru tahun 2013, lengkap beserta harga, merk tipe, dan lain - lain.', 'download/KATALOG.PDF'),
(2, 'Formulir Reseller', 'Anda dapat menjadi reseller di toko kami dengan mengisi formulir yang bisa Anda download, dan kirim melalui email !!!', 'download/FORMULIR.PDF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoritbl`
--

CREATE TABLE IF NOT EXISTS `kategoritbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `kategoritbl`
--

INSERT INTO `kategoritbl` (`id`, `kategori`) VALUES
(1, 'Accesories'),
(2, 'Kaos / T-Shirt'),
(3, 'Jeans'),
(4, 'Celana Pendek'),
(5, 'Cardigan'),
(6, 'Long Dress'),
(7, 'Jaket Parasut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `newstbl`
--

CREATE TABLE IF NOT EXISTS `newstbl` (
  `tanggal` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `newstbl`
--

INSERT INTO `newstbl` (`tanggal`, `judul`, `news`) VALUES
('2013-05-13', 'pameran', 'Now Open! Maxi Boutique Fashion Shop'),
('2013-05-11', 'RESTOCK', 'RESTOCK !!! Sleepsuit Next 3 in 1 GRAB IT FAST MOMS !!!'),
('2013-05-02', 'New Items', 'NEW ITEMS: Prewalker shoes Headband Blossom farm RED RESTOCK !!!! Fisher-Price Newborn To Toddler Portable Rocker Botol Tommee Teppee detail ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggantbl`
--

CREATE TABLE IF NOT EXISTS `pelanggantbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `email` text NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `pelanggantbl`
--

INSERT INTO `pelanggantbl` (`id`, `nama`, `alamat`, `email`, `telepon`, `username`, `password`) VALUES
(12, 'tes', 'tes', 'muhammad.sadeli@gmail.com', 'tes', 'maxikom', '2673c916d33d456b0654b845ab5e5a85'),
(13, 'tes', 'tes', 'muhammad.sadeli@gmail.com', 'tes', 'ajib', 'dc8ce8751a9426bd731dc5af53e5bc49'),
(14, 'maxi', '-', 'maxi', '-', 'maxi', 'd6af6111b120b3b6d0edad7d1d3fc692');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonialtbl`
--

CREATE TABLE IF NOT EXISTS `testimonialtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `testimonial` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `testimonialtbl`
--

INSERT INTO `testimonialtbl` (`id`, `nama`, `email`, `tanggal`, `testimonial`) VALUES
(2, 'ryanto widjaja wiguna', '-', '2013-05-16', 'Thanks ya, banbao nya sudah sampai, pelayanan ok, cepat tanggap juga, overall ga ush ragu belanja di sini untuk anak kesayangan...'),
(3, 'desi ariyanti', '-', '2013-05-03', 'Thanks buat maxi boutique barang ny bagus n memuaskan. Bakalan beli lg ni buat anak tercrnta :)'),
(4, 'martin kwang', '-', '2013-05-08', 'Thanks ya sis paketnya uda smpe..cpt ya..order kmrn hr ni uda dtg... Bgus barangnya...'),
(5, 'bundanya rakha', '-', '2013-05-15', 'Baru nemu web ini kemaren,barangnya bagus2 trus coba2 pesan ternyata responnya cepet loh.kemaren pesen eh hari ini paketnya udh sampe.makasi ya..pelayanannya bagus n cepet.well recomended deh buat bunda2 yg sedang cari brg buat anaknya drpd cape2 keluar rumah'),
(14, 'ryanto widjaja wiguna', '-', '2013-05-21', 'Thanks ya, banbao nya sudah sampai, pelayanan ok, cepat tanggap juga, overall ga ush ragu belanja di sini untuk anak kesayangan...');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksirincitbl`
--

CREATE TABLE IF NOT EXISTS `transaksirincitbl` (
  `notransaksi` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksirincitbl`
--

INSERT INTO `transaksirincitbl` (`notransaksi`, `username`, `id`, `nama`, `harga`, `jumlah`, `subtotal`) VALUES
('5', 'maxikom', 1, 'Bouncer Elfe', 585000, 50, 29250000),
('5', 'maxikom', 3, 'Celana Boxer', 55000, 1, 55000),
('5', 'maxikom', 2, 'Cardigan Sleveless', 78500, 2, 157000),
('5', 'maxikom', 5, 'Blythe Taper Jeans', 2789000, 2, 5578000),
('6', 'ajib', 4, 'LD Belissa Aubergine', 1185000, 1, 1185000),
('6', 'ajib', 3, 'Celana Boxer', 55000, 5, 275000),
('6', 'ajib', 2, 'Cardigan Sleveless', 78500, 1, 78500),
('8', 'maxikom', 2, 'Cardigan Sleveless', 78500, 3, 235500),
('8', 'maxikom', 5, 'Blythe Taper Jeans', 2789000, 1, 2789000),
('8', 'maxikom', 3, 'Celana Boxer', 55000, 1, 55000),
('9', 'maxi', 5, 'Blythe Taper Jeans', 2789000, 1, 2789000),
('9', 'maxi', 2, 'Cardigan Sleveless', 78500, 1, 78500),
('9', 'maxi', 3, 'Celana Boxer', 55000, 1, 55000),
('10', 'maxi', 2, 'Cardigan Sleveless', 78500, 1, 78500),
('11', 'maxi', 5, 'Blythe Taper Jeans', 2789000, 2, 5578000),
('12', 'maxi', 1, 'Bouncer Elfe', 585000, 1, 585000),
('13', 'maxi', 5, 'Blythe Taper Jeans', 2789000, 1, 2789000),
('14', 'maxi', 2, 'Cardigan Sleveless', 78500, 1, 78500),
('15', 'maxi', 1, 'Bouncer Elfe', 585000, 1, 585000),
('16', 'maxi', 3, 'Celana Boxer', 55000, 1, 55000),
('17', 'maxi', 5, 'Blythe Taper Jeans', 2789000, 1, 2789000),
('18', 'maxi', 3, 'Celana Boxer', 55000, 1, 55000),
('19', 'maxi', 2, 'Cardigan Sleveless', 78500, 1, 78500),
('20', 'maxi', 1, 'Bouncer Elfe', 585000, 1, 585000),
('21', 'maxi', 2, 'Cardigan Sleveless', 78500, 1, 78500),
('21', 'maxi', 3, 'Celana Boxer', 55000, 1, 55000),
('22', 'maxikom', 3, 'Celana Boxer', 55000, 1, 55000),
('27', 'maxikom', 5, 'Blythe Taper Jeans', 2789000, 1, 2789000),
('28', 'maxikom', 5, 'Blythe Taper Jeans', 2789000, 1, 2789000),
('29', 'maxikom', 2, 'Cardigan Sleveless', 78500, 1, 78500),
('30', 'maxikom', 2, 'Cardigan Sleveless', 78500, 1, 78500),
('30', 'maxikom', 1, 'Topi Bone', 115000, 1, 115000),
('30', 'maxikom', 6, 'Polo Shirt', 75000, 2, 150000),
('30', 'maxikom', 3, 'Celana Boxer', 55000, 1, 55000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksitbl`
--

CREATE TABLE IF NOT EXISTS `transaksitbl` (
  `notransaksi` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`notransaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `transaksitbl`
--

INSERT INTO `transaksitbl` (`notransaksi`, `username`, `status`) VALUES
(5, 'maxikom', 1),
(6, 'ajib', 1),
(7, 'ajib', 0),
(8, 'maxikom', 1),
(9, 'maxi', 1),
(10, 'maxi', 1),
(11, 'maxi', 1),
(12, 'maxi', 1),
(13, 'maxi', 1),
(14, 'maxi', 1),
(15, 'maxi', 1),
(16, 'maxi', 1),
(17, 'maxi', 1),
(18, 'maxi', 1),
(19, 'maxi', 1),
(20, 'maxi', 1),
(21, 'maxi', 1),
(22, 'maxikom', 1),
(23, 'maxikom', 1),
(24, 'maxikom', 1),
(25, 'maxikom', 1),
(26, 'maxikom', 1),
(27, 'maxikom', 1),
(28, 'maxikom', 1),
(29, 'maxikom', 1),
(30, 'maxikom', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitortbl`
--

CREATE TABLE IF NOT EXISTS `visitortbl` (
  `ip` int(11) NOT NULL,
  `time` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`time`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1372650579 ;

--
-- Dumping data untuk tabel `visitortbl`
--

INSERT INTO `visitortbl` (`ip`, `time`) VALUES
(0, 1368498420),
(0, 1368498503),
(0, 1368498733),
(0, 1368499016),
(0, 1368499042),
(0, 1368499194),
(0, 1368499579),
(0, 1368499593),
(0, 1368499638),
(0, 1368499664),
(11, 1368500516),
(1, 1372650578);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
