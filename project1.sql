-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 12:52 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul_artikel` varchar(110) NOT NULL,
  `konten` longtext NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tanggal_posting` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul_artikel`, `konten`, `foto`, `tanggal_posting`) VALUES
(1, 'Judul artikel 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'background1.jpg', '2019-08-23'),
(2, 'Judul artikel 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'background2.jpg', '2019-08-23'),
(3, 'judul artikel ahay', '<p>ngetes</p>', '5d65006d4b2ad.png', '2019-08-23'),
(6, 'tesss', '<p>agagag</p>', '5d65a9d3b2dad.jpg', '2028-08-19'),
(10, 'coba coba', '			<p>oba</p>			', '5d65ad4080ae5.png', '2028-08-19'),
(13, 'tes tahun', '<p>tes tahun</p>', '5d679f71a3292.jpg', '2029-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(100) NOT NULL,
  `foto` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` varchar(150) NOT NULL,
  `align_text` enum('center-align','left-align','right-align') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `foto`, `judul`, `konten`, `align_text`) VALUES
(15, '5d67a4f7a86b6.jpeg', 'ALFATIH PROPERTY', 'Solusi anda untuk.....', 'left-align'),
(16, '5d67a53510450.jpg', 'ALFATIH PROPERTY', '', 'right-align'),
(17, '5d67ad06ca8fa.png', 'Tes', 'tes', 'right-align');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `gmaps` text NOT NULL,
  `whatsapp` text NOT NULL,
  `facebook` text NOT NULL,
  `youtube` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`gmaps`, `whatsapp`, `facebook`, `youtube`) VALUES
('<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2281547928437!2d107.67125531432826!3d-6.982380994955892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c276a65f472b%3A0x2e9d823378f26b24!2sINOVINDO%20WEB%20%7C%20JASA%20PEMBUATAN%20WEBSITE%20PROFESIONAL!5e0!3m2!1sid!2sid!4v1566631241397!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'https://wa.me/6282119898669?text=Assalamualaikum, Saya baca artikel menegenai..................... , boleh minta info detailnya', 'https://wa.me/6282119898669?text=Hi!', 'lorem');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_produk`
--

CREATE TABLE `gambar_produk` (
  `id_gambar` varchar(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_produk`
--

INSERT INTO `gambar_produk` (`id_gambar`, `gambar`) VALUES
('5d65bb984804c', '34.png'),
('5d65bb984804c', '240_F_222396485_snDwqqkuCaN0kjYNNRTkLDuvhrfJiyvR.jpg'),
('5d65bc7c18ab7', '800px_COLOURBOX21391781.jpg'),
('5d65bc7c18ab7', '87390.png'),
('5d65bd104def4', '34.png'),
('5d65bd104def4', '240_F_222396485_snDwqqkuCaN0kjYNNRTkLDuvhrfJiyvR.jpg'),
('5d65bd826aeb6', '800px_COLOURBOX21391781.jpg'),
('5d65bd826aeb6', '87390.png'),
('5d65bdf462a16', '20130125Logo-baru-Semakin-di-Depan.png'),
('5d65bdf462a16', '50264131-a-vector-seamless-pattern-of-hand-drawn-doodles-of-electronic-gadgets-computer-laptop-monitor.jpg'),
('5d65be6c0203e', '34.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(7, 'Promo');

-- --------------------------------------------------------

--
-- Table structure for table `parallax`
--

CREATE TABLE `parallax` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parallax`
--

INSERT INTO `parallax` (`id`, `foto`, `konten`) VALUES
(1, '5d67a2c2a3737.jpg', 'â€œSemoga keselamatan, Rahmat Allah dan berkah-Nya tercurah kepada kita.â€Terima kasih telah menghubungi Badru Alfatih. Silakan beri tahu apa yang dapat kami tolong');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal_posting` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_kategori`, `nama_produk`, `deskripsi`, `foto`, `tanggal_posting`) VALUES
(14, 7, 'Promo Kemerdekaan di Kampung Qur\'an Cianjur Luas Kavling 100m2', '<p><strong>Semangat Kemerdekaan</strong><br /><br />Manfaatkan <strong>Promo Kemerdekaan di Kampung Qur\'an Cianjur Luas Kavling 100m2</strong> dengan Bonus 3 Bibit Pohon Alpukat Miki, 1 Bibit Buah Durian Musangking, Harga Normal 50juta.<br /><br />Diskon saat <strong>promo</strong> jadi <span style=\"color: #e03e2d; font-size: 24pt;\">35juta</span>, manfaatkan potongan harga 15juta sampai dengan tanggal 31 Agustus 2019.<br /><br />Yuks segerakan untuk Booking sekarang juga...<br /><br />#promokavling<br />#kampungquran<br />#kampungquranCianjur<br />#kavlingproduktif<br />#kavlingcianjur<br />#cianjur<br />#kavlingkebun</p>', '5d679db6962a3.jpeg', '2029-08-19'),
(15, 7, 'SURVEY SERENTAK KAMPUNG QUR\'AN CIANJUR', '<p style=\"text-align: center;\"><strong>SURVEY SERENTAK KAMPUNG QUR\'AN CIANJUR</strong><br /><br />Kapan lagi ada kesempatan bagus seperti ini, punya tempat tinggal di kawasan pegunungan, dilingkungan pesantren tahfidz dan harga terjangkau karena masih PROMO!!!!<br />.<br />Dapatkan Harga <strong>PROMO</strong> Hanya <span style=\"color: #e03e2d; font-size: 24pt;\">35jt</span> saja&nbsp; makin Hari stock Kavling menipis<br />.<br />YUK SURVEY AND BOOKING FEE dari sekarang sebelum kehabisan kuotaðŸ”¥ <br />Tempat : <br />Ruko Tapal Kuda, Cijedil, Cugenang, Cianjur Regency, West Java 43252<br /><br />Maps:<br /><code>https://g.co/kgs/jRLTNk</code><br /><br />Informasi :<br /><br /><code>https://wa.me/6282119898669</code> <br /><code>https://wa.me/6282119898669</code> <br /><br />Klik website kami* ðŸ‘‰<br />.<br /><code>https://kampungquran.id/alfatih</code><br /><code>https://kampungquran.id/alfatih</code> - Sekarang<br /><br />ðŸ•Œ Kampung Qur\'an Cianjur ðŸ•Œ<br /><br />Insyallah AKAN DIBANGUN FASILITAS :<br />1. Islamic Center<br />2. Masjid<br />3. Pesantren Tahfidz Qur\'an.<br />4. Wisata kebun<br />5. Program Tahfidz warga<br />6. Sunnah sport center<br />7. Pengelolaan air dari gunung, manajemen nya kerjasama dengan PT PAM Pemerintah Daerah</p>', '5d67a145d20ef.jpg', '2029-08-19'),
(16, 7, 'Promo Kemerdekaan Ke 74', '<p style=\"text-align: center;\"><span style=\"font-size: 18pt;\"><strong>Promo Kemerdekaan Ke 74</strong></span><br /><br />Special untuk anda para investor Kampung Qur\'an Cianjur nikmati tambahan masa promo di Promo Kemerdekaan Indonesia yang Ke 74tahun.<br /><br />Kavling Luas 100m2 dengan Bonus :<br />ðŸ¥‘ 3 Bibit Buah Alpukat Miki<br />ðŸˆ 1 Bibit Buah Durian Musangking<br />ðŸ“ Legalitas Lengkap dan Aman<br /><br /><span style=\"font-size: 18pt; color: #e03e2d;\">Harga 50 juta</span><br />Promo Special jadi <span style=\"font-size: 18pt; color: #e03e2d;\">35juta</span> saja. Kavling Bisa di Bangun Rumah Kebun.<br /><br />Untuk 200 Unit Pertama berlaku sampai 31 Agustus 2019<br /><br />Ayo tunggu apalagi segera Hubungi Marketing kesayangan anda. Investasi Property dilingkungan Para Penghafal Al-Qur\'an<br /><br />#promokemerdekaan<br />#promohutrike74<br />#hutri74<br />#promokemerdekaan2019<br />#merdekaindonesia<br />#merdekaindonesiake74<br /><br />Masyaallah menarik sekali,YUK SURVEY AND BOOKING FEE dari sekarang ðŸ”¥ðŸ”¥<br />.<br />Tempat : <br />Ruko Tapal Kuda, Cijedil, Cugenang, Cianjur Regency, West Java 43252<br /><br />Maps:<br /><code>https://g.co/kgs/jRLTNk</code><br /><br />Informasi :@badrualfatih<br />081809602012 <br /><code>https://wa.me/6282119898669</code> <br /><code>https://wa.me/6282119898669</code> <br />Klik website kami* ðŸ‘‰<br />.<br /><code>https://kampungquran.id/alfatih</code><br /><code>https://kampungquran.id/alfatih</code> - Sekarang<br /><br />#kavling #rumahsyariah #propertysyariah #jualtanah #tanahmurah #kavlingsyariah #tanpariba #tanpabank #investasitanah #kavlingmurah #kprsyariah #rumahcom #rumahdijualmurah #tanahkavling #jualkavling #kavlingdijual #kavling</p>', '5d67a21b339ce.jpg', '2029-08-19'),
(17, 7, 'SURVEY SERENTAK KAMPUNG QUR\'AN CIANJUR', '<p style=\"text-align: center;\"><strong>SURVEY SERENTAK KAMPUNG QUR\'AN CIANJUR</strong></p>\r\n<p>Kapan lagi ada kesempatan bagus seperti ini, punya tempat tinggal di kawasan pegunungan, dilingkungan pesantren tahfidz dan harga terjangkau karena masih PROMO!!!!<br />.<br />Dapatkan Harga <span style=\"font-size: 24pt; color: #e03e2d;\"><strong>PROMO Hanya 35jt</strong></span> saja&nbsp; makin Hari stock Kavling menipis<br />.<br />YUK SURVEY AND BOOKING FEE dari sekarang sebelum kehabisan kuotaðŸ”¥ <br />Tempat : <br />Ruko Tapal Kuda, Cijedil, Cugenang, Cianjur Regency, West Java 43252<br /><br />Maps:<br /><code>https://g.co/kgs/jRLTNk</code><br /><br />Informasi :<br /><br /><code>https://wa.me/6282119898669 </code><br /><code>https://wa.me/6282119898669</code> <br /><br />Klik website kami* ðŸ‘‰<br />.<br /><code>https://kampungquran.id/alfatih</code><br /><code>https://kampungquran.id/alfatih</code> - Sekarang<br /><br />ðŸ•Œ Kampung Qur\'an Cianjur ðŸ•Œ<br /><br />Insyallah AKAN DIBANGUN FASILITAS :<br />1. Islamic Center<br />2. Masjid<br />3. Pesantren Tahfidz Qur\'an.<br />4. Wisata kebun<br />5. Program Tahfidz warga<br />6. Sunnah sport center<br />7. Pengelolaan air dari gunung, manajemen nya kerjasama dengan PT PAM Pemerintah Daerah</p>', '5d67a46b14eb4.jpeg', '2029-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `deskripsi` longtext NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`deskripsi`, `foto`) VALUES
('<h4 style=\"text-align: center;\">ALFATIH PROPERTY</h4>\r\n<p>Alfatih Property ialah Agen Property Syariah, Jual rumah, Jual kavling produktif, Jual kavling siap bangun.</p>\r\n<p>&nbsp;</p>', '5d64cbf2a9655.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video1` text NOT NULL,
  `video2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video1`, `video2`) VALUES
('<iframe src=\"https://www.youtube.com/embed/KZw-Ez-nPDk?autoplay=0&amp;rel=0&amp;controls=1&amp;showinfo=1&amp;wmode=opaque\" allowfullscreen=\"\" width=\"750\" height=\"421\" frameborder=\"0\"></iframe>', '<iframe src=\"https://www.youtube.com/embed/KZw-Ez-nPDk?autoplay=0&amp;rel=0&amp;controls=1&amp;showinfo=1&amp;wmode=opaque\" allowfullscreen=\"\" width=\"750\" height=\"421\" frameborder=\"0\"></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `parallax`
--
ALTER TABLE `parallax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parallax`
--
ALTER TABLE `parallax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
