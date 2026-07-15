-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2026 at 04:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tvri`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_18_153902_create_user_models_table', 1),
(5, '2020_12_19_093523_create_slider_models_table', 1),
(6, '2020_12_21_024116_create_artikel_models_table', 1),
(7, '2020_12_21_123433_create_jadwal_models_table', 1),
(8, '2020_12_21_125911_create_kategori_models_table', 1),
(9, '2020_12_23_034825_create_link_models_table', 1),
(10, '2020_12_23_092141_create_news_models_table', 1),
(11, '2020_12_28_150935_create_statistik_models_table', 1),
(12, '2020_12_30_095604_create_tentang_models_table', 1),
(13, '2021_01_19_141218_create_galery_models_table', 1),
(14, '2021_01_19_191822_create_tautan_models_table', 1),
(15, '2021_01_19_194337_create_rate_models_table', 1),
(16, '2021_01_21_102426_create_sosial_models_table', 1),
(17, '2021_02_27_103202_create_masjid_models_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` bigint(20) UNSIGNED NOT NULL,
  `tanggal_artikel` date NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripsi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `tanggal_artikel`, `id_kategori`, `judul`, `foto`, `descripsi`) VALUES
(1, '2020-12-26', 7, 'Indonesia Hari Ini', 'Indonesia-Hri-Ini-1.jpg', '<p>Terima kasih telah memperbaharui informasi anda dalam Indonesia Hari Ini. Setiap hari pukul 18.00 WIB hanya di TVRI media pemersatu bangsa.</p>'),
(2, '2020-12-26', 7, 'Dunia Dalam Berita', 'Dunia-dalam-berita-ad894.jpg', '<p>Terima kasih telah memperbaharui informasi anda dalam Dunia Dalam Berita. Setiap hari Senin - Jumat pukul 21.00 WIB hanya di TVRI media pemersatu bangsa.</p>'),
(3, '2020-12-26', 8, 'Otomotif', 'Otomotif-1.jpg', '<p>Otomotif hadir setiap pagi untuk memperbaharui informasi seputar dunia olahraga anda. Hadir setiap hari Jumat, pukul 11.30 WIB</p>'),
(4, '2020-12-26', 8, 'Kick Off', 'Kick-Off-1.jpg', '<p>Kick Off hadir setiap pagi untuk memperbaharui informasi seputar dunia olahraga anda. Hadir setiap hari Rabu, pukul 11.30 WIB</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id_gallery` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`id_gallery`, `foto`) VALUES
(4, '0001-15845888713_20210122_110130_0000.png'),
(5, '0001-15845851620_20210122_110016_0000.png'),
(6, '0001-15845789101_20210122_105735_0000.png'),
(7, '0001-15845925837_20210122_110253_0000.png'),
(9, '20210122_110438_0000.png'),
(10, '20210122_110613_0000.png'),
(11, '20210122_111124_0000.png'),
(12, '20210122_110755_0000.png'),
(13, '20210122_112553_0000.png'),
(14, '20210122_112230_0000.png'),
(15, '20210122_112045_0000.png'),
(16, 'IMG_20210122_113643_711.jpg'),
(17, 'IMG_20210221_152659_511.jpg'),
(18, '20210221_151817_0000.png'),
(19, '20210221_151926_0000.png'),
(20, '20210221_151603_0000.png'),
(21, 'IMG_20210221_152659_520.jpg'),
(22, '20210221_152040_0000.png'),
(23, '20210221_152319_0000.png'),
(24, '20210221_151442_0000.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_acara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filter` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `tanggal`, `jam`, `nama_acara`, `filter`) VALUES
(1, '2020-12-30', '08.00', 'test', '2020-12'),
(2, '2020-12-30', '08.30', 'test 123', '2020-12'),
(3, '2020-12-30', '09.00', 'test', '2020-12'),
(4, '2021-01-22', '15.00', 'MEUCAE', '2021-01'),
(5, '2021-01-22', '16.00', 'MEURUNOE BEUT', '2021-01'),
(6, '2021-01-22', '17.00', 'ACEH HARI INI', '2021-01'),
(7, '2021-01-22', '19.00', 'GABUNG TVRI NASIONAL', '2021-01'),
(8, '2021-01-24', '15.00', 'ANAK INDONESIA', '2021-01'),
(9, '2021-01-24', '15.30', 'INSPIRASI INDONESIA', '2021-01'),
(10, '2021-01-24', '16.00', 'MUSIK MEMORI', '2021-01'),
(11, '2021-01-24', '17.00', 'ACEH HARI INI', '2021-01'),
(12, '2021-01-24', '19.00', 'TVRI NASIONAL', '2021-01'),
(13, '2021-01-25', '14.00', 'DAPUR KITA', '2021-01'),
(14, '2021-01-25', '15.00', 'INSPIRASI INDONESIA', '2021-01'),
(15, '2021-01-25', '15.30', 'PESONA INDONESIA', '2021-01'),
(16, '2021-01-25', '16.00', 'SUARA PUBLIK', '2021-01'),
(17, '2021-01-25', '17.00', 'ACEH HARI INI', '2021-01'),
(18, '2021-01-25', '19.00', 'TVRI NASIONAL', '2021-01'),
(19, '2021-01-25', '20.00', 'BERGABUNG TVRI NASIONAL', '2021-01'),
(20, '2021-01-27', '15.00', 'DAPUR KITA', '2021-01'),
(21, '2021-01-27', '16.00', 'GALERI WANITA', '2021-01'),
(22, '2021-01-27', '17.00', 'ACEH HARI INI', '2021-01'),
(23, '2021-01-27', '18.00', 'BERGABUNG TVRI NASIONAL', '2021-01'),
(24, '2021-01-30', '14.00', 'MEUCAE', '2021-01'),
(25, '2021-01-30', '15.00', 'DAPUR KITA', '2021-01'),
(26, '2021-01-30', '16.00', 'MEURUNOE BEUT', '2021-01'),
(27, '2021-01-30', '17.00', 'ACEH HARI INI', '2021-01'),
(28, '2021-01-30', '19.00', 'BERGABUNG TVRI NASIONAL', '2021-01'),
(29, '2021-02-04', '15.00', 'JEJAK ISLAM', '2021-02'),
(30, '2021-02-04', '16.00', 'SUARA PUBLIK', '2021-02'),
(31, '2021-02-04', '17.00', 'ACEH HARI INI', '2021-02'),
(32, '2021-02-05', '14.00', 'MEUCAE', '2021-02'),
(33, '2021-02-05', '15.00', 'MEUREUNOE BEUT', '2021-02'),
(34, '2021-02-05', '16.00', 'QALBU', '2021-02'),
(35, '2021-02-05', '17.00', 'ACEH HARI INI', '2021-02'),
(36, '2021-02-08', '14.00', 'GOOD PEOPLE', '2021-02'),
(37, '2021-02-08', '15.00', 'INSPIRASI INDONESIA', '2021-02'),
(38, '2021-02-08', '15.30', 'PESONA INDONESIA', '2021-02'),
(39, '2021-02-08', '16.00', 'SUARA PUBLIK', '2021-02'),
(40, '2021-02-08', '17.00', 'ACEH HARI INI', '2021-02'),
(41, '2021-02-09', '14.00', 'GOOD PEOPLE', '2021-02'),
(42, '2021-02-09', '15.00', 'PESONA INDONESIA', '2021-02'),
(43, '2021-02-09', '15.30', 'BINA TANI', '2021-02'),
(44, '2021-02-09', '16.00', 'AYO SEHAT', '2021-02'),
(45, '2021-02-09', '17.00', 'ACEH HARI INI', '2021-02'),
(46, '2021-02-19', '14.00', 'MEUCAE', '2021-02'),
(47, '2021-02-19', '15.00', 'MEUREUNOE BEUT', '2021-02'),
(48, '2021-02-19', '16.00', 'QALBU', '2021-02'),
(49, '2021-02-19', '17.00', 'ACEH HARI INI', '2021-02'),
(50, '2021-03-02', '14:00', 'GOOD PEOPLE', '2021-03'),
(51, '2021-03-02', '15:00', 'PESONA INDONESIA', '2021-03'),
(52, '2021-03-02', '15:30', 'BINA TANI', '2021-03'),
(53, '2021-03-02', '16:00', 'AYO SEHAT', '2021-03'),
(54, '2021-03-02', '17:00', 'ACEH HARI INI', '2021-03'),
(55, '2021-03-03', '14:00', 'GOOD PEOPLE', '2021-03'),
(56, '2021-03-03', '15:00', 'CERITA WANITA', '2021-03'),
(57, '2021-03-03', '16:00', 'SUARA PUBLIK', '2021-03'),
(58, '2021-03-03', '17:00', 'ACEH HARI INI', '2021-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kas_masjid`
--

CREATE TABLE `tb_kas_masjid` (
  `id_kas_masjid` bigint(20) UNSIGNED NOT NULL,
  `tgl_kas` date NOT NULL,
  `jenis_kas` enum('Pemasukan','Pengeluaran') COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemasukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pengeluaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kas_masjid`
--

INSERT INTO `tb_kas_masjid` (`id_kas_masjid`, `tgl_kas`, `jenis_kas`, `keterangan`, `pemasukan`, `pengeluaran`) VALUES
(1, '2001-01-09', 'Pemasukan', 'Officia voluptates c', '900', '0'),
(2, '1975-03-16', 'Pemasukan', 'Similique voluptatem', '170', '0'),
(3, '2010-10-26', 'Pengeluaran', 'Et fugit fugiat con', '0', '12'),
(4, '1987-01-24', 'Pengeluaran', 'Omnis quis fuga Exe', '0', '67'),
(5, '2017-05-26', 'Pemasukan', 'Minima fugit quo of', '290', '0'),
(6, '2006-11-23', 'Pengeluaran', 'Non voluptas qui dol', '0', '74'),
(7, '2016-01-05', 'Pemasukan', 'Eligendi in sunt id', '310', '0'),
(8, '2017-10-14', 'Pemasukan', 'Consequatur ipsa s', '123', '0'),
(9, '1984-05-02', 'Pemasukan', 'Voluptatibus nemo qu', '123', '0'),
(10, '2001-11-23', 'Pengeluaran', 'Quasi labore in id e', '0', '147');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(7, 'Entertainment'),
(8, 'News'),
(9, 'Culture & Life'),
(10, 'Kids'),
(11, 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `tb_link`
--

CREATE TABLE `tb_link` (
  `id_link` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_link`
--

INSERT INTO `tb_link` (`id_link`, `link`) VALUES
(1, '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mediasoal`
--

CREATE TABLE `tb_mediasoal` (
  `id_sosial` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_mediasoal`
--

INSERT INTO `tb_mediasoal` (`id_sosial`, `kategori`, `link`) VALUES
(1, 'Facebook', 'https://www.facebook.com/tvriacehofficial/'),
(2, 'Twitter', '-'),
(3, 'YouTube', 'https://www.youtube.com/c/tvriaceh'),
(4, 'Instagram', 'https://www.instagram.com/tvriacehofficial/?hl=en');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `id_news` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`id_news`, `tanggal`, `judul`, `deskripsi`, `foto`) VALUES
(4, '2020-12-26', 'Fordya Serahkan Bantuan Untuk Banjir Aceh Utara', '<p>Forum Blangpidie Aceh Barat Daya (Fordya) menyerahkan langsung bantuan yang di kumpulkan dari donasi masyarakat untuk korban banjir di Desa Keude Matangkuli dan Desa Lhang Nibong Baktiya Barat Kabupaten Aceh Utara, Rabu (16/12/2020).</p>\r\n\r\n<p>Ary Fitrayansyah Ruslan selaku Koordinator Lapangan (Korlap) didampingi mengatakan bahwa bantuan itu merupakan hasil galang dana yang dilakukan oleh Fordya beberapa hari yang lalu.&nbsp;</p>\r\n\r\n<p>&ldquo;Ini sebagai bentuk pengabdian&nbsp; dan solidaritas Fordya untuk masyarakat yang sedang ditimpa musibah&rdquo;, katanya.</p>\r\n\r\n<p>Ary menyebutkan bahwa penggalangan dana yang dilakukan selama tiga hari tersebut mengumpulkan uang sebanyak 6.802.000 Rupiah.</p>\r\n\r\n<p>Hasil galang dana yang telah dibelanjakan dalam bentuk sembako dan perlengkapan lainhya tersebut diserahkan langsung kepada aparatur gampong untuk didistribusikan ke masyarakat.</p>\r\n\r\n<p>&ldquo;Semoga bantuan kecil yang kita berikan dapat meringankan sedikit kesedihan dari saudara-saudara kita yang terkena musibah,&rdquo; pungkasnya.</p>', 'IMG_20201217_215012.jpg'),
(5, '2020-12-26', 'Peduli Aceh Utara, IMHA Salurkan Bantuan untuk Dayah', '<p>ACEH UTARA &ndash; Ikatan Mahasiswa Hukum Abdya (IMHA) menyalurkan bantuan untuk korban banjir di Dayah Nurussalam ,Desa Rayeuk Pange, &nbsp;kecamatan Pirak Timur, &nbsp;Aceh Utara. &nbsp;Kamis (14/12/2017)</p>\r\n\r\n<p>Setelah beberapa hari &nbsp;banjir melanda Kawasan Aceh Utara, Kader IMHA berinisiatif untuk membantu dan meringankan beban para korban banjir dengan menggalang dana.</p>\r\n\r\n<p>&ldquo;Kami dari IMHA ikut berkontribusi dalam penyaluran bantuan. Dan juga ikut mengantarkan langsung bantuan tersebut ke lokasi&rdquo; Ungkap Yuli Andrea , Selalu Koordinator Aksi Penggalang dana tersebut pada Kamis (14/12).</p>\r\n\r\n<p>Menurutnya, &nbsp;penggalangan dana kepedulian sudah dilakukan sejak beberapa hari lalu yang berlokasi dibeberapa titik lokasi di Banda Aceh dan di Kabupaten Aceh Barat Daya.</p>\r\n\r\n<p>&ldquo;Insyaallah sudah menyerahkan bantuan alakadar yang kita Galang dalam beberapa hari ini, dan semoga bantuan yang kami berikan bisa bermanfaat untuk santri-santri yang ada d Dayah Darussalam&rdquo; ungkap Andre saat seremonial penyerahan.</p>\r\n\r\n<p>Sementara itu, &nbsp;pimpinan Dayah Nurussalam juga mengucapkan ribuan terima kasih atas bantuan yang telah di salurkan.</p>\r\n\r\n<p>&ldquo;Tentu nya ini sangat bermanfaat untuk meringankan beban yang di alami oleh para santri korban banjir, apalagi bantuan yang selama ini yang di salurkan oleh posko-posko banjir tidak terfokus kepada tempat pendidikan Dayah seperti ini. Semoga semua yang kita lakukan di balas oleh Allah sebagai amal ibadah kita di akhirat kelak&rdquo; ungkap Dayah Nurussalam.</p>\r\n\r\n<p>Banjir hebat terjadi di Kecamatan Pirak Timur sejak Sabtu &nbsp; 02 desember lalu, &nbsp;yang merendam banyak rumah warga dan aktivitas &nbsp;lumpuh total, tidak ada korban jiwa namun kerugian di rasakan oleh warga setempat.</p>', 'asdasd.jpg'),
(6, '2020-12-26', 'Baitul Mal Provinsi dan Baitul Mal Aceh Selatan Salurkan Bantuan Ke Dayah Darussalam 40 Juta dari Dana ZIS', '<p>Labuhanhaji Barat &ndash; Baitul Mal Aceh (BMA) menyalurkan bantuan kepada korban kebakaran rankang Ponpes/Dayah Darussalam di gampong Blang Poroh Labuhanhaji Barat Kabupaten Aceh Selatan.</p>\r\n\r\n<p>Penyerahan bantuan yang diterima langsung oleh Sekretaris Pimpinan Dayah Darussalam, Tgk.Abi Hidayat Muhibuddin Waly&rsquo;. Senin (16/12/2019) sore.</p>\r\n\r\n<p>Saat serahkan bantuan tersebut. Kepala Baitul Mal Aceh Drs. Mahdi Ahmadi,MM, menyatakan bahwa BMA sangat antusias untuk memberikan bantuan kepada Ponpes/Dayah-dayah yang ada di Aceh, terutama untuk Dayah Darussalam, dimana telah mengalami musibah kebakaran rankang.</p>\r\n\r\n<p>Kami sangat prihatin dan turut berduka atas musibah ini, mudah-mudahan tidak akan terjadi lagi,musibah serupa pada masa akan datang di Dayah kebanggaan rakyat Aceh ini, Dayah Darussalam yang penuh berkah dan bersejarah.Ungkapnya.</p>\r\n\r\n<p>Drs.Mahdi Ahmadi menambahkan, ia siap membantu dalam berbagai&nbsp; kesempatan kegiatan, Baitul Mal tetap terus berupaya agar ke depan jumlah bantuan yang diberikan kepada para santri dan dayah bisa ditingkatkan.</p>\r\n\r\n<p>Adapun penyaluran bantuan ini dari Baitul Mal Aceh senilai sebesar Rp.30 juta dan Baitul Mal Aceh Selatan senilai sebesar Rp.10 juta, total sebesar 40 Juta, dana bersumber dari Zakat, Infaq dan Sedekah (ZIS).</p>\r\n\r\n<p>Bantuan ini setidaknya dapat membantu para santri yang sedang terkena musibah, dapat meringankan beban para korban untuk kebutuhan sehari-hari.Ucapnya.</p>\r\n\r\n<p>Sedangkan, Baitul Mal Aceh Selatan yang ikut serta bersama rombongan Provinsi, menyalurkan Bantuan tersebut diserahkan lansung oleh Firdaus selaku Kabag.Pengumpulan Data Baitul Mal Aceh Selatan.</p>\r\n\r\n<p>Sementara itu, Tgk.Abi Hidayat Waly. menyampaikan sangat bahagia atas kedatangan dari Baitul Mal Aceh beserta rombangan.Bantuan ini sangat besar, terimakasih atas segala bantuan ini, atas perhatian dan kepeduliannya untuk Dayah Darussalam.Ucapnya</p>\r\n\r\n<p>Rankang yang berlantai dua berkontruksi kayu tersebut, murni dibangun oleh wali santri itu sendiri, khususnya para santri putra, tetapi para santri putri ya tetap bertempat tinggal diasrama yang telah dibangun.</p>\r\n\r\n<p>Untuk kedepan kita fokus membangun asmara&rdquo; sebab sampai saat ini jumlah santri sudah mencapai 2.500 orang. maka rankang yang terbakar insyallah selambat-lambatnya awal maret sudah mulai dibangun.Ujarnya</p>\r\n\r\n<p>Abi Hidayat manyatakan bahwa bantuan terus mengalir sampai saat hari ini, bantuan yang sudah ada sebagian telah tersalurkan kepada santri.</p>\r\n\r\n<p>Ia menyebutkan kepedulian berbagai pihak khususnya Pemerintah Aceh dan Pemerintah Daerah maupun Pemerintah Kab/Kota lainnya yang ada di Aceh dan termasuk perorangan, Ormas dari berbagai lintas organisasi, LSM, pihak mahasiswa, perbankan, BUMN dan pihak swasta lainnya yang sangat sungguh-sungguh kepedulian terhadap Ponpes/Dayah Darussalam&rsquo;. Pungkasnya.</p>\r\n\r\n<p>Usai penyaluran bantuan korban kebakaran tersebut Kepala Baitul Mal Aceh beserta rombongan, minta izin pamit seraya mohon doa, karena akan melanjutkan perjalanan ke Kota Subullussalam, dengan agenda untuk menyalurkan bantuan kepada masyarakat korban bencana alam yang terkena petir, mengakibatkan terjadi kebakaran rumah. &rdquo; (NB)</p>', 'ggggg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ratecard`
--

CREATE TABLE `tb_ratecard` (
  `id_rate` bigint(20) UNSIGNED NOT NULL,
  `kategori_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_rate` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_ratecard`
--

INSERT INTO `tb_ratecard` (`id_rate`, `kategori_rate`, `image_rate`, `deskripsi_rate`) VALUES
(4, 'Rate Card Penyiaran', 'no-image.png', '-'),
(5, 'Rate Card Produksi', 'no-image.png', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `image`) VALUES
(34, 'ACEH HARI INI.png'),
(35, 'MEURUNOE BEUT OK.png'),
(36, 'AYO SEHAT OK.png'),
(37, 'SALEUM AKMOE OK.png'),
(38, 'DAPUR KITA OK.png'),
(39, 'GOOD PEOPLE.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_statistik`
--

CREATE TABLE `tb_statistik` (
  `ip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `klik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_statistik`
--

INSERT INTO `tb_statistik` (`ip`, `tanggal`, `klik`) VALUES
('127.0.0.1', '2020-12-28', 46),
('127.0.0.1', '2020-12-29', 46),
('127.0.0.1', '2020-12-30', 46),
('::1', '2020-12-30', 2),
('::1', '2020-12-31', 2),
('::1', '2021-01-04', 2),
('127.0.0.1', '2021-01-04', 46),
('127.0.0.1', '2021-01-05', 46),
('127.0.0.1', '2021-01-14', 46),
('127.0.0.1', '2021-01-18', 46),
('127.0.0.1', '2021-01-19', 46),
('127.0.0.1', '2021-01-20', 46),
('127.0.0.1', '2021-01-21', 46),
('125.165.107.144', '2021-01-21', 8),
('36.69.11.222', '2021-01-21', 15),
('114.122.12.120', '2021-01-22', 19),
('36.71.138.32', '2021-01-22', 31),
('199.59.150.180', '2021-01-22', 1),
('35.203.142.216', '2021-01-22', 1),
('180.214.232.26', '2021-01-22', 6),
('36.71.143.5', '2021-01-22', 1),
('2a03:2880:20ff:b::face:b00c', '2021-01-22', 1),
('2a03:2880:20ff:1b::face:b00c', '2021-01-22', 1),
('2a03:2880:20ff:12::face:b00c', '2021-01-22', 1),
('114.125.8.78', '2021-01-23', 1),
('125.162.33.3', '2021-01-23', 22),
('125.165.6.53', '2021-01-24', 2),
('125.162.33.3', '2021-01-24', 1),
('114.122.7.158', '2021-01-24', 11),
('36.71.138.32', '2021-01-24', 31),
('36.91.173.109', '2021-01-24', 2),
('36.69.11.28', '2021-01-24', 1),
('114.122.23.193', '2021-01-24', 1),
('36.69.9.242', '2021-01-24', 1),
('125.165.111.193', '2021-01-25', 20),
('66.249.79.205', '2021-01-25', 3),
('114.122.10.162', '2021-01-25', 16),
('36.71.138.32', '2021-01-25', 31),
('180.241.46.31', '2021-01-25', 1),
('125.162.46.212', '2021-01-25', 3),
('34.209.91.88', '2021-01-26', 1),
('180.251.50.101', '2021-01-26', 1),
('66.249.79.205', '2021-01-26', 3),
('36.71.138.32', '2021-01-26', 31),
('180.241.45.239', '2021-01-27', 4),
('103.144.222.154', '2021-01-27', 3),
('36.71.138.32', '2021-01-27', 31),
('66.249.79.203', '2021-01-28', 2),
('36.76.101.175', '2021-01-28', 9),
('66.249.79.207', '2021-01-28', 1),
('66.249.79.205', '2021-01-28', 3),
('125.162.46.212', '2021-01-29', 3),
('66.249.79.203', '2021-01-29', 2),
('66.249.79.207', '2021-01-29', 1),
('66.249.79.205', '2021-01-29', 3),
('36.79.18.3', '2021-01-29', 5),
('36.71.136.147', '2021-01-29', 3),
('36.79.24.19', '2021-01-29', 1),
('66.249.79.203', '2021-01-30', 2),
('66.249.79.205', '2021-01-30', 1),
('66.249.79.171', '2021-01-30', 2),
('36.71.142.121', '2021-01-30', 14),
('182.0.229.146', '2021-01-30', 1),
('66.249.79.173', '2021-01-30', 3),
('66.249.79.175', '2021-01-30', 4),
('66.249.79.171', '2021-01-31', 2),
('66.249.79.173', '2021-01-31', 3),
('66.249.79.175', '2021-01-31', 4),
('66.249.79.173', '2021-02-01', 3),
('66.249.79.171', '2021-02-01', 2),
('66.249.79.175', '2021-02-01', 4),
('125.165.104.145', '2021-02-01', 25),
('36.71.143.37', '2021-02-01', 1),
('66.249.79.173', '2021-02-02', 3),
('66.249.79.171', '2021-02-02', 2),
('66.249.79.175', '2021-02-02', 4),
('125.165.105.76', '2021-02-02', 2),
('114.122.12.50', '2021-02-02', 3),
('180.251.38.24', '2021-02-02', 2),
('36.71.142.145', '2021-02-02', 12),
('114.5.254.240', '2021-02-02', 2),
('114.125.57.220', '2021-02-02', 2),
('66.249.79.175', '2021-02-03', 4),
('66.249.79.171', '2021-02-03', 2),
('66.249.79.173', '2021-02-03', 3),
('66.249.79.162', '2021-02-03', 2),
('66.249.79.191', '2021-02-03', 3),
('66.249.79.165', '2021-02-03', 4),
('125.165.104.57', '2021-02-03', 2),
('66.249.73.253', '2021-02-03', 3),
('66.249.66.153', '2021-02-03', 1),
('66.249.79.171', '2021-02-04', 2),
('66.249.79.173', '2021-02-04', 3),
('66.249.79.175', '2021-02-04', 4),
('66.249.73.253', '2021-02-04', 3),
('66.249.73.251', '2021-02-04', 13),
('66.249.66.149', '2021-02-04', 2),
('66.249.75.207', '2021-02-04', 7),
('66.249.64.27', '2021-02-04', 5),
('114.122.22.239', '2021-02-04', 4),
('103.144.222.154', '2021-02-04', 3),
('36.71.140.126', '2021-02-04', 4),
('35.183.198.139', '2021-02-04', 1),
('66.249.64.28', '2021-02-04', 1),
('66.249.79.175', '2021-02-05', 4),
('66.249.79.171', '2021-02-05', 2),
('66.249.79.173', '2021-02-05', 3),
('66.249.64.26', '2021-02-05', 3),
('66.249.75.203', '2021-02-05', 7),
('66.249.64.27', '2021-02-05', 5),
('66.249.75.207', '2021-02-05', 7),
('66.249.79.189', '2021-02-05', 2),
('66.249.79.165', '2021-02-05', 4),
('66.249.79.185', '2021-02-05', 1),
('66.249.79.191', '2021-02-05', 3),
('66.249.79.177', '2021-02-05', 52),
('66.249.79.162', '2021-02-05', 2),
('103.144.222.154', '2021-02-05', 3),
('66.249.79.191', '2021-02-06', 3),
('66.249.79.162', '2021-02-06', 2),
('66.249.79.165', '2021-02-06', 4),
('13.58.141.241', '2021-02-06', 1),
('2a03:2880:27ff:17::face:b00c', '2021-02-06', 1),
('2a03:2880:22ff:a::face:b00c', '2021-02-06', 1),
('2a03:2880:21ff:78::face:b00c', '2021-02-06', 1),
('2a03:2880:21ff:1f::face:b00c', '2021-02-06', 1),
('66.249.79.162', '2021-02-07', 2),
('66.249.79.165', '2021-02-07', 4),
('66.249.79.191', '2021-02-07', 3),
('116.206.33.61', '2021-02-07', 1),
('36.71.143.246', '2021-02-07', 1),
('66.249.75.203', '2021-02-07', 7),
('66.249.64.28', '2021-02-07', 1),
('66.249.79.191', '2021-02-08', 3),
('66.249.79.165', '2021-02-08', 4),
('66.249.79.162', '2021-02-08', 2),
('66.249.73.254', '2021-02-08', 1),
('66.249.73.251', '2021-02-08', 13),
('103.144.222.154', '2021-02-08', 3),
('36.91.173.109', '2021-02-08', 2),
('114.122.10.66', '2021-02-08', 6),
('36.69.9.232', '2021-02-08', 7),
('66.249.79.162', '2021-02-09', 2),
('66.249.79.165', '2021-02-09', 4),
('66.249.79.191', '2021-02-09', 3),
('36.69.9.232', '2021-02-09', 7),
('36.68.158.111', '2021-02-09', 10),
('36.71.139.229', '2021-02-09', 3),
('114.122.5.237', '2021-02-09', 2),
('66.249.79.162', '2021-02-10', 2),
('66.249.79.191', '2021-02-10', 3),
('66.249.79.165', '2021-02-10', 4),
('36.68.158.111', '2021-02-10', 10),
('180.241.25.6', '2021-02-10', 7),
('67.205.137.20', '2021-02-10', 1),
('66.249.79.165', '2021-02-11', 4),
('66.249.79.191', '2021-02-11', 3),
('66.249.79.162', '2021-02-11', 2),
('36.71.140.145', '2021-02-11', 1),
('36.91.173.109', '2021-02-11', 2),
('66.249.79.165', '2021-02-12', 4),
('66.249.79.162', '2021-02-12', 2),
('66.249.79.191', '2021-02-12', 3),
('5.255.231.177', '2021-02-12', 2),
('114.125.57.90', '2021-02-12', 1),
('66.249.75.203', '2021-02-12', 7),
('5.255.253.111', '2021-02-12', 1),
('125.162.50.135', '2021-02-12', 2),
('66.249.79.162', '2021-02-13', 2),
('66.249.79.165', '2021-02-13', 4),
('66.249.79.191', '2021-02-13', 3),
('182.1.61.167', '2021-02-13', 1),
('182.1.62.191', '2021-02-13', 1),
('182.1.61.191', '2021-02-13', 1),
('182.1.47.183', '2021-02-13', 1),
('66.249.73.251', '2021-02-13', 13),
('125.167.112.230', '2021-02-13', 2),
('5.255.231.177', '2021-02-13', 1),
('125.162.50.135', '2021-02-13', 2),
('66.249.64.26', '2021-02-13', 3),
('66.249.75.203', '2021-02-13', 7),
('66.249.66.149', '2021-02-13', 2),
('66.249.79.191', '2021-02-14', 3),
('66.249.79.165', '2021-02-14', 4),
('66.249.79.162', '2021-02-14', 2),
('66.249.66.149', '2021-02-14', 2),
('66.249.66.151', '2021-02-14', 2),
('66.249.64.27', '2021-02-14', 5),
('66.249.75.203', '2021-02-14', 7),
('66.249.73.251', '2021-02-14', 13),
('66.249.73.253', '2021-02-14', 3),
('66.249.64.26', '2021-02-14', 3),
('66.249.79.168', '2021-02-14', 13),
('66.249.64.29', '2021-02-14', 1),
('66.249.75.205', '2021-02-14', 6),
('5.255.231.177', '2021-02-14', 1),
('66.249.79.162', '2021-02-15', 2),
('66.249.79.191', '2021-02-15', 3),
('66.249.79.165', '2021-02-15', 4),
('66.249.64.26', '2021-02-15', 3),
('66.249.75.203', '2021-02-15', 7),
('66.249.73.251', '2021-02-15', 13),
('66.249.66.149', '2021-02-15', 2),
('66.249.73.235', '2021-02-15', 1),
('66.249.73.233', '2021-02-15', 1),
('66.249.79.191', '2021-02-16', 3),
('66.249.79.162', '2021-02-16', 2),
('66.249.79.165', '2021-02-16', 4),
('66.249.64.26', '2021-02-16', 3),
('66.249.75.203', '2021-02-16', 7),
('66.249.66.149', '2021-02-16', 2),
('66.249.73.251', '2021-02-16', 13),
('66.249.66.151', '2021-02-16', 1),
('36.79.5.254', '2021-02-16', 1),
('180.251.61.155', '2021-02-16', 3),
('36.79.16.131', '2021-02-16', 1),
('36.68.152.5', '2021-02-16', 2),
('180.241.90.5', '2021-02-16', 3),
('180.249.242.251', '2021-02-16', 1),
('66.249.79.191', '2021-02-17', 3),
('66.249.79.162', '2021-02-17', 2),
('66.249.79.165', '2021-02-17', 4),
('66.249.66.149', '2021-02-17', 2),
('66.249.73.251', '2021-02-17', 13),
('66.249.75.203', '2021-02-17', 7),
('66.249.66.143', '2021-02-17', 1),
('66.249.64.26', '2021-02-17', 3),
('125.162.30.26', '2021-02-17', 1),
('180.241.45.156', '2021-02-17', 1),
('180.251.47.67', '2021-02-17', 1),
('112.215.230.190', '2021-02-17', 3),
('66.249.79.191', '2021-02-18', 3),
('66.249.79.165', '2021-02-18', 4),
('66.249.79.162', '2021-02-18', 2),
('66.249.66.149', '2021-02-18', 2),
('66.249.66.151', '2021-02-18', 1),
('66.249.73.251', '2021-02-18', 13),
('66.249.64.26', '2021-02-18', 3),
('66.249.75.203', '2021-02-18', 7),
('66.249.73.254', '2021-02-18', 1),
('116.206.32.35', '2021-02-18', 1),
('66.249.79.181', '2021-02-18', 6),
('66.249.79.179', '2021-02-18', 46),
('66.249.79.177', '2021-02-18', 52),
('66.249.79.168', '2021-02-18', 1),
('66.249.79.187', '2021-02-18', 3),
('66.249.79.173', '2021-02-18', 3),
('66.249.79.189', '2021-02-18', 2),
('66.249.79.175', '2021-02-18', 4),
('66.249.79.171', '2021-02-18', 2),
('66.249.79.183', '2021-02-18', 2),
('36.69.12.141', '2021-02-18', 2),
('66.249.79.191', '2021-02-19', 3),
('66.249.79.165', '2021-02-19', 4),
('66.249.79.162', '2021-02-19', 2),
('66.249.75.203', '2021-02-19', 7),
('36.69.12.141', '2021-02-19', 2),
('66.249.66.149', '2021-02-19', 2),
('66.249.64.26', '2021-02-19', 3),
('66.249.73.251', '2021-02-19', 1),
('125.165.105.116', '2021-02-19', 5),
('103.144.222.154', '2021-02-19', 3),
('66.249.75.203', '2021-02-20', 7),
('66.249.75.207', '2021-02-20', 7),
('66.249.75.205', '2021-02-20', 6),
('36.71.136.176', '2021-02-20', 6),
('36.76.89.9', '2021-02-20', 2),
('36.91.173.109', '2021-02-20', 2),
('66.249.75.205', '2021-02-21', 6),
('116.206.31.51', '2021-02-21', 3),
('66.249.75.203', '2021-02-21', 7),
('66.249.75.207', '2021-02-21', 7),
('66.249.79.165', '2021-02-21', 4),
('66.249.79.162', '2021-02-21', 2),
('66.249.79.191', '2021-02-21', 3),
('36.76.89.9', '2021-02-21', 2),
('64.246.165.140', '2021-02-21', 1),
('66.249.79.165', '2021-02-22', 4),
('66.249.79.162', '2021-02-22', 2),
('66.249.79.191', '2021-02-22', 3),
('36.71.136.227', '2021-02-22', 6),
('66.249.73.251', '2021-02-22', 1),
('36.69.14.17', '2021-02-22', 43),
('66.102.6.71', '2021-02-22', 2),
('66.102.8.113', '2021-02-22', 1),
('36.69.11.78', '2021-02-22', 2),
('66.249.79.165', '2021-02-23', 4),
('66.249.79.162', '2021-02-23', 2),
('66.249.79.191', '2021-02-23', 3),
('180.241.173.112', '2021-02-23', 4),
('36.71.141.154', '2021-02-23', 1),
('103.144.222.154', '2021-02-23', 3),
('114.122.11.212', '2021-02-23', 3),
('36.71.142.18', '2021-02-23', 2),
('36.69.8.167', '2021-02-23', 9),
('2a03:2880:21ff:10::face:b00c', '2021-02-23', 2),
('2a03:2880:21ff:24::face:b00c', '2021-02-23', 1),
('2a03:2880:21ff:15::face:b00c', '2021-02-23', 3),
('2a03:2880:21ff:e::face:b00c', '2021-02-23', 1),
('36.71.138.15', '2021-02-23', 11),
('66.249.79.191', '2021-02-24', 3),
('66.249.79.162', '2021-02-24', 2),
('66.249.79.165', '2021-02-24', 4),
('36.71.142.18', '2021-02-24', 2),
('36.79.0.152', '2021-02-24', 3),
('66.249.79.191', '2021-02-25', 3),
('66.249.79.162', '2021-02-25', 2),
('66.249.79.165', '2021-02-25', 4),
('180.241.173.112', '2021-02-25', 4),
('180.241.96.75', '2021-02-25', 2),
('129.146.99.240', '2021-02-25', 1),
('129.146.99.240', '2021-02-26', 1),
('66.249.79.165', '2021-02-26', 4),
('66.249.79.162', '2021-02-26', 2),
('5.255.231.177', '2021-02-26', 1),
('66.249.79.191', '2021-02-26', 3),
('34.210.48.55', '2021-02-26', 1),
('180.241.173.112', '2021-02-26', 4),
('36.71.137.14', '2021-02-26', 1),
('114.125.4.126', '2021-02-27', 1),
('66.249.79.174', '2021-02-27', 3),
('180.241.173.112', '2021-02-27', 4),
('66.249.79.178', '2021-02-27', 2),
('66.249.79.176', '2021-02-27', 2),
('2a01:4f8:1c1c:55fc::1', '2021-02-28', 1),
('66.249.79.178', '2021-03-01', 2),
('125.165.105.129', '2021-03-01', 4),
('125.165.25.88', '2021-03-01', 1),
('66.249.79.174', '2021-03-01', 3),
('66.249.79.174', '2021-03-02', 3),
('66.249.79.178', '2021-03-02', 1),
('36.71.138.66', '2021-03-02', 4),
('103.144.222.154', '2021-03-02', 3),
('66.249.79.176', '2021-03-02', 1),
('36.69.9.252', '2021-03-02', 1),
('125.165.105.129', '2021-03-03', 4),
('103.144.222.154', '2021-03-03', 3),
('180.241.44.62', '2021-03-03', 1),
('180.244.232.229', '2021-03-03', 2),
('36.71.139.210', '2021-03-03', 2),
('36.71.143.139', '2021-03-03', 3),
('66.249.79.174', '2021-03-03', 3),
('158.140.181.173', '2021-03-03', 1),
('158.140.181.148', '2021-03-03', 2),
('36.79.6.110', '2021-03-03', 5),
('114.122.14.9', '2021-03-03', 1),
('66.249.79.174', '2021-03-04', 3),
('2a03:2880:22ff:2::face:b00c', '2021-03-04', 1),
('2a03:2880:22ff:76::face:b00c', '2021-03-04', 3),
('2a03:2880:22ff:75::face:b00c', '2021-03-04', 1),
('2a03:2880:22ff:16::face:b00c', '2021-03-04', 1),
('2a03:2880:22ff:14::face:b00c', '2021-03-04', 2),
('2a03:2880:22ff:c::face:b00c', '2021-03-04', 1),
('2a03:2880:11ff:4::face:b00c', '2021-03-04', 1),
('2a03:2880:30ff:6::face:b00c', '2021-03-04', 1),
('120.188.4.177', '2021-03-04', 4),
('2a03:2880:13ff:71::face:b00c', '2021-03-04', 1),
('2a03:2880:13ff:16::face:b00c', '2021-03-04', 1),
('2a03:2880:13ff:15::face:b00c', '2021-03-04', 1),
('2a03:2880:10ff:b::face:b00c', '2021-03-04', 1),
('2a03:2880:10ff:1::face:b00c', '2021-03-04', 2),
('125.165.105.129', '2021-03-04', 4),
('2a03:2880:ff:8::face:b00c', '2021-03-04', 1),
('36.79.22.168', '2021-03-04', 1),
('127.0.0.1', '2021-03-04', 46);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tautan`
--

CREATE TABLE `tb_tautan` (
  `id_tautan` bigint(20) UNSIGNED NOT NULL,
  `nama_tautan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_tautan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_tautan`
--

INSERT INTO `tb_tautan` (`id_tautan`, `nama_tautan`, `link_tautan`) VALUES
(1, 'Televisi Republik Indonesia', 'http://tvri.go.id/'),
(2, 'Kementerian Komunikasi dan Informatika', 'https://kominfo.go.id'),
(3, 'Pemerintah Aceh', 'https://www.acehprov.go.id/');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentang`
--

CREATE TABLE `tb_tentang` (
  `id_tentang` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_tentang`
--

INSERT INTO `tb_tentang` (`id_tentang`, `title`, `type`, `isi`) VALUES
(1, 'SEJARAH TVRI ACEH', 1, '<p>TVRI stasiun Aceh merupakan salah satu dari 12 stasiun penyiaran TVRI di Indonesia yang peresmiannya dilakukan oleh Menteri Penerangan, H. Harmoko pada tanggal 24 Februari 1993. Kehadiran TVRI stasiun Aceh dalam blantika dunia penyiaran TVRI memiliki arti yang strategis, mengingat daerah cakupan siarannya berada dikawasan provinsi paling ujung dari nusantara, berbatasan langsung dengan zona-zona bebas di lingkungan negara-negara australia bagian selatan, india di bagian barat, dan asia tenggara di bagian utara. Namun sangat disayangkan, tahun ini sistem transmisi TVRI stasiun Aceh mengalami sedikit kendala, yaitu tidak dapat menggunakan satelit dalam penyiaran. Oleh karena itu cakupan dari transmisi TVRI stasiun aceh saat ini siaran local relative kecil, hanya meliputi banda aceh dan aceh besar. Dalam proses transmisi, perambatan gelombang elektromagnetik dalam kedudukan pada satu garis penglihatan dan tidak boleh terhalang. Gelombang elektromagnetik tidak dapat menembus apabila terhalang pepohonan, gunung, ataupun perbukitan. Apabila terjadi demikian, maka siaran televisi tidak dapat dinikmati secara merata oleh masyarakat aceh. Oleh sebab itu, kondisi geografis indonesia yang berupa pegunungan dan perbukitan menjadi salah satu kendala dalam proses transmisi. Untuk mengatasi masalah tersebut, maka di bangunlah stasiun transmisi di daerah-daerah yang akan menghubungkan stasiun yang satu dengan stasiun yang lain dan kemudian di pancarkan ke pemirsa, sehingga jangkauan siaran televisi semakin luas. Letak stasiun transmisi yang satu dengan yang lain di atur sedemikian rupa sehingga line of sight, yaitu perambatan gelombang radio dari antena pemancar sehingga siaran televisi dapat di terima dengan baik dan lebih merata ke pemirsa dalam jangkauan satuan transmisi terdekat. Meskipun terletak berdekatan namun masing-masing satuan transmisi memiliki channel yang berbeda sehingga tidak terjadi interferensi. Di Aceh terdapat setidaknya 31 satuan transmisi yang terbesar di seluruh aceh, namun sayangnya saat ini tidak semua satuan transmisi dapat beroperasi. Lebih kurang hanya terdapat 14 satuan transmisi yang dapat beroperasi dengan baik. Berikut pembagian channel dan jenis pesawat yang digunakan pada masing masing satuan transmisi di Aceh.</p>'),
(3, 'VISI & MISI TVRI ACEH', 1, '<h3>VISI TVRI ACEH</h3>\r\n\r\n<hr />\r\n<p>Menjadi stasiun televisi pilihan yang berakar pada budaya, untuk menjalin persatuan dan kesatuan serta melayani kepentingan masyarakat dalam upaya memajukan kesejahteraan umum. Terwujudnya TVRI sebagai media pilihan bangsa indonesia dalam rangka turut mencerdaskan kehidupan bangsa untuk memperkuat kesatuan nasional.</p>\r\n\r\n<h3>MISI TVRI ACEH</h3>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<p>a. Mengembangkan TVRI menjadi media perekat sosial untuk persatuan dan kesatuan bangsa sekaligus media kontrol sosial yang dinamis.</p>\r\n\r\n<p>b. Mengembangkan TVRI menjadi pusat layanan informasi dan edukasi yang utama.</p>\r\n\r\n<p>c. Meperdayakan TVRI menjadi pusat pembelajaran bangsa serta menyajikan hiburan yang sehat dengan mengoptimalkan potensi dan kebudayaan daerah serta memperhatikan komunitas terabaikan.</p>\r\n\r\n<p>d. Meperdayakan TVRI menjadi media untuk membangun citra bangsa dan negara indonesia di internasional.</p>'),
(4, 'STRUKTUR ORGANISASI TVRI ACEH', 3, 'struktur-organisasi-aceh.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_repeat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('Superadmin','Acara','Berita') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `password_repeat`, `level`) VALUES
(1, 'Administrator', 'admin', 'edbd881f1ee2f76ba0bd70fd184f87711be991a0401fd07ccd4b199665f00761afc91731d8d8ba6cbb188b2ed5bfb465b9f3d30231eb0430b9f90fe91d136648', 'admin', 'Superadmin'),
(2, 'Program', 'program', '3345c77cbe105668fbb1c2343073c49db6b0d6018e01c6a4560977122a376a797b48b149877ad233a484f13d729f26293d5dfff983c882cac8ebe67a9d1b0c74', 'program2021', 'Acara'),
(3, 'Berita', 'berita', '1860c05df5db699d94f5f0f8dda241e4842cd459e06c107fb5e17c4eff43881cfb4b45626bc52c75a6e2196da57bd7c6fc163b7ec294b58820118c8e14305a93', 'berita2021', 'Berita');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_kas_masjid`
--
ALTER TABLE `tb_kas_masjid`
  ADD PRIMARY KEY (`id_kas_masjid`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_link`
--
ALTER TABLE `tb_link`
  ADD PRIMARY KEY (`id_link`);

--
-- Indexes for table `tb_mediasoal`
--
ALTER TABLE `tb_mediasoal`
  ADD PRIMARY KEY (`id_sosial`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `tb_ratecard`
--
ALTER TABLE `tb_ratecard`
  ADD PRIMARY KEY (`id_rate`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tb_tautan`
--
ALTER TABLE `tb_tautan`
  ADD PRIMARY KEY (`id_tautan`);

--
-- Indexes for table `tb_tentang`
--
ALTER TABLE `tb_tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id_gallery` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tb_kas_masjid`
--
ALTER TABLE `tb_kas_masjid`
  MODIFY `id_kas_masjid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_link`
--
ALTER TABLE `tb_link`
  MODIFY `id_link` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_mediasoal`
--
ALTER TABLE `tb_mediasoal`
  MODIFY `id_sosial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id_news` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_ratecard`
--
ALTER TABLE `tb_ratecard`
  MODIFY `id_rate` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_tautan`
--
ALTER TABLE `tb_tautan`
  MODIFY `id_tautan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_tentang`
--
ALTER TABLE `tb_tentang`
  MODIFY `id_tentang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
