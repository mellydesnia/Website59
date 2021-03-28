-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 05:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web59`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '68e35094238985b5a9959583bc21cd94'),
(2, 'adminmelly', '164b4185931506e52094a9db1b9129d4'),
(3, 'admin59', '84cb7663278a1b14cf843974a269fc45');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `replies` varchar(300) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'hi|hallo', 'hai, selamat datang di chatbot SMP Negeri 59 Kota Bandung'),
(2, 'Siapa kamu|Siapa kamu?', 'Saya hanya bot, anda bisa memanggil saya \"bot\"!'),
(3, 'Terimakasih|makasih', 'Sama-sama'),
(4, 'Sampai jumpa|sampai jumpa lagi|sampai ketemu lagi', 'Baiklah, sampai jumpa :)'),
(5, 'melly', 'desnia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 NOT NULL,
  `deskripsi` text CHARACTER SET latin1 NOT NULL,
  `tag` varchar(255) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 NOT NULL,
  `penulis` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `tgl_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judul`, `deskripsi`, `tag`, `foto`, `penulis`, `tgl_input`) VALUES
(1, 'Cara Membuat Autocomplete/Suggestion dengan Plugin pada PHP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'dewan komputer', 'lapangan.png', 'Dewan', '2019-01-23 01:02:02'),
(2, 'Cara Membuat Autocomplete dengan Ajax dari Database pada PHP', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'dewan komputer', 'artikel1.png', 'Dewan', '2019-01-23 01:02:02'),
(3, 'Membuat Upload dan Resize/Compress Gambar denga Ajax pada PHP', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', 'dewan komputer', 'artikel1.png', 'Dewan', '2019-01-23 01:02:02'),
(4, 'Cara Membuat Pagination Menggunakan Ajax Tanpa Loading pada PHP', 'Lorem ipsum dolor sit amet', 'dewan komputer', 'artikel1.png', 'Dewan', '2019-01-23 01:02:02'),
(5, 'SMP', 'rggggggggggggggggggggggggggggggggggggggggsfsgddfggf', 'fffffdgfd', 'lapangan.png', 'dfd', '2021-03-29 10:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bukutamu`
--

CREATE TABLE `tbl_bukutamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bukutamu`
--

INSERT INTO `tbl_bukutamu` (`id`, `nama`, `email`, `isi`) VALUES
(12, 'efe', 'mell@mmg.com', 'fdfdgfdfggggs'),
(14, 'ff', 'dfd@gmail.com', 'dfd'),
(15, 'rtry', 'eeeg@gmail.comc', 'egdgf'),
(16, 'mgff', 'hfjdf@gmail.commmmmmmmmmmmm', 'dfgdfhdhfgdgrrddd'),
(17, 'Melly Desnia', 'melly.desniaaa@gmail.com', 'fdsff'),
(18, 'fani', 'info@stmik-im.ac.id', 'fdsgs'),
(19, 'hg', 'meidess.27@gmail.com', 'fghffffffffffffffffffffffffffffffffff'),
(20, 'Melly Desnia', 'm@gmail.com', 'weqewretert'),
(21, 'dsf', 'meidess.27@gmail.com', 'dsfsdf'),
(22, 'dsf', 'm@gmail.com', 'ddddddddfsssssssssssddddddddddddddddddddddddddddddddddddddd'),
(23, 'Melly Desnia', 'm@gmail.com', 'dddddddddddddddddddfffffffffdf'),
(24, 'hhhhhhhhh', 'fhgf@gmail.com', 'dfdfdfdfdfd s dfdfdfdfdf'),
(25, 'Melly Desnia', 'melly.desniaaa@gmail.com', ''),
(26, 'li', 'melly.desniaaa@gmail.com', ''),
(27, 'Melly Desnia', 'm@gmail.com', 'bagus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `keterangan` varchar(10000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` int(10) DEFAULT NULL,
  `nuptk` int(11) NOT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `mata_pelajaran` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `kepegawaian` varchar(5000) NOT NULL,
  `jabatan` varchar(1000) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nama`, `nip`, `nuptk`, `jenis_kelamin`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `mata_pelajaran`, `pendidikan`, `kepegawaian`, `jabatan`, `alamat`, `foto`) VALUES
(44, 'Agus Kurniawan, S.Pd.', 2147483647, 0, 'L', '082115556014', 'Garut', '1978-08-18', 'IPS', 'S1', 'PNS', 'Guru Mapel', '', 'agus-kurniawan,-s.pd..jpg'),
(45, 'Dedeh Nurhayati, S.Pd.', 2147483647, 0, 'P', '-', 'Bandung', '1981-07-03', 'PKN', 'S1', 'PNS', 'Guru Mapel', '', 'dedeh-nurhayati,-s.pd..jpg'),
(47, 'Mulki Firdhani, S.Pd.', 0, 0, 'P', '-', 'Bandung', '1978-03-22', 'Bahasa Indonesia', 'S1', 'Guru Honor Sekolah', 'Guru Mapel', '', 'mulki-firdhani,-s.pd..jpg'),
(48, 'Mia Meilina, S.Pd.', 0, 2147483647, 'P', '088218209141', 'Bandung', '1980-05-29', 'Ilmu Pengetahuan Alam (IPA)', '', '', '', '', 'mia-meilina,-s.pd..jpg'),
(49, 'Deden Wahyudin, S.S., M.Pd.', 0, 2147483647, 'L', '089517695087', 'Bandung', '1988-04-16', 'Sejarah', 'S2', 'Guru Honor Sekolah', 'Wakasek Humas', '', 'deden-wahyudin,-s.s.,-m.pd..jpg'),
(52, 'Cecep Ginanjar Ali Munsyi, M.Pd.', 0, 0, 'L', '08993024196', 'Ciamis', '1993-12-06', 'Pendidikan Agama Islam', 'S1', 'Guru Honor Sekolah', 'Wakasesk Kesiswaan', '', 'cecep-ginanjar-ali-munsyi,-m.pd..jpg'),
(53, 'Rifa Aliyya Rahiem, S.Pd.', 0, 0, 'P', '081321323707', 'Ciamis', '1994-12-15', 'Bahasa Inggris', 'S1', 'Guru Honor Sekolah ', 'Guru Mapel', '', 'rifa-aliyya-rahiem,-s.pd..jpg'),
(54, 'Ai Purwanti, S.Pd.', 0, 0, 'P', '083822582108', 'Sukabumi', '1987-06-05', 'Matematika', 'S1', 'Guru Honor Sekolah ', 'Guru Mapel', '', 'ai-purwanti,-s.pd..jpg'),
(55, 'Widya Susanti, S.Pd.', 0, 0, 'P', '089678311010', 'Bandung', '1995-12-02', 'Pendidikan Seni Musik', 'S1', 'Guru Honor Sekolah', 'Guru Mapel', '', 'widya-susanti,-s.pd..jpg'),
(56, 'Yanyan Supriatma, S.Hum', 0, 0, 'L', '08990023077', 'Bandung', '1998-06-20', 'Basa Sunda', 'S1', 'Guru Honor Sekolah', 'Guru Mapel', '', 'yanyan-supriatma,-s.hum.jpg'),
(57, 'Ekih Supriatna, S.Pd.', 0, 0, 'L', '082216632683', 'Tasikmalaya', '1987-09-06', 'PJOK', 'S1', 'Guru Honor Sekolah', 'Guru Mapel', '', 'ekih-supriatna,-s.pd..jpg'),
(58, 'Muhamad Fakihudin, S.Pd.', 0, 0, 'L', '08980653457', 'Kuningan', '1994-11-26', 'Pendidikan Bahasa dan Sastra Indonesia', 'S1', 'Guru Honor Sekolah', 'Guru Mapel', '', 'muhamad-fakihudin,-s.pd..jpg'),
(59, 'Fentie Nuriasih Utamie, S.Pd.', 0, 0, 'P', '087838006577', 'Bandung', '1996-02-07', 'Prakarya', 'S1', 'Guru Honor Sekolah', 'Guru Mapel', '', 'fentie-nuriasih-utamie,-s.pd..jpg'),
(60, 'Imas Sarinengsih', 0, 0, 'P', '083100958639', 'Bandung', '1995-09-19', 'Guru BK', 'S1', 'Guru Honor Sekolah', 'Guru BK', '', 'imas-sarinengsih.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kaldik`
--

CREATE TABLE `tbl_kaldik` (
  `id` int(11) NOT NULL,
  `judul` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `keterangan` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_kaldik`
--

INSERT INTO `tbl_kaldik` (`id`, `judul`, `keterangan`, `foto`, `tgl_input`) VALUES
(9, 'Kalender Pendidikan Ganjil ', 'kalender pendidikan ', 'kalender-pendidikan-ganjil-.png', '2021-03-15'),
(10, 'Kalender Pendidikan Genap ', 'Kalender pendidikan semester genap', 'kalender-pendidikan-genap-.png', '2021-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kegiatanosis`
--

CREATE TABLE `tbl_kegiatanosis` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 NOT NULL,
  `deskripsi` text CHARACTER SET latin1 NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 NOT NULL,
  `penulis` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `tgl_input` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_minat`
--

CREATE TABLE `tbl_minat` (
  `id` int(11) NOT NULL,
  `nama` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `tlp` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_minat`
--

INSERT INTO `tbl_minat` (`id`, `nama`, `email`, `tlp`) VALUES
(3, 'IX E', 'info@stmik-im.ac.id', '98655453434343'),
(4, 'fdffffffff', 'm@gmail.com', '9849340009475');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `deskripsi` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `tgl` date NOT NULL,
  `tgl_input` date NOT NULL,
  `foto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `waktu` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id`, `judul`, `deskripsi`, `tgl`, `tgl_input`, `foto`, `waktu`) VALUES
(19, 'hhhh', 'Sering kali aplikasi perlu menampilkan data dalam container dengan gaya yang mirip. Container ini sering digunakan dalam daftar untuk menampung informasi setiap item. Sistem menyediakan CardView API sebagai cara mudah untuk menampilkan informasi di dalam kartu yang memiliki tampilan konsisten di seluruh platform. Kartu ini memiliki elevasi default di atas kelompok tampilan yang menampungnya, sehingga sistem menggambar bayangan di bawahnya. Kartu memberikan cara mudah untuk menampung sekelompok tampilan yang sama', '2021-04-29', '2021-03-01', 'cloud-computing.png', '07:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profilosis`
--

CREATE TABLE `tbl_profilosis` (
  `id` int(11) NOT NULL,
  `judul` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `keterangan` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tgambar`
--

CREATE TABLE `tgambar` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `keterangan` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tgambar`
--

INSERT INTO `tgambar` (`id`, `judul`, `keterangan`, `gambar`) VALUES
(4, 'Upacara Hari Senin', 'Siswa melakukan upacara pengibaran Bendera Merah Putih', 'upacara.jpg'),
(5, 'Luring Sekolah', 'Melakukan kegiatan luring kepada siswa yang beluum memiliki hp', 'luring.jpg'),
(6, 'Luring ', 'Melakukan kegiatan luring untuk siswa yang belum memiliki hp dengan mendatangi rumah siswa satu per satu', 'luringlagi.jpg'),
(7, 'Literasi', 'Literasi ini bertujuan untuk meningkatkan pengetahuan siswa dengan cara membaca buku ', 'literasi.png'),
(8, 'Menyanyikan Lagu Indonesia Raya', NULL, 'lagu.jpg'),
(28, 'Daring', 'Pembelajaran Daring Siswa', 'daring.png'),
(36, 'rgergerg', 'ergerg', 'rgergerg.png'),
(37, 'sde', 'wewwer', 'sde.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_fasilitas`
--

CREATE TABLE `t_fasilitas` (
  `id` int(11) NOT NULL,
  `foto` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL,
  `keterangan` varchar(5000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `t_fasilitas`
--

INSERT INTO `t_fasilitas` (`id`, `foto`, `keterangan`) VALUES
(62, 'gt.jpg', 'Toilet Wanita'),
(63, 'tegtrdhg.jpg', 'Toilet Pria'),
(64, 'rthhtrhy.jpg', 'Lapangan'),
(65, 'lapangan1.jpg', 'Lapangan'),
(66, 'halaman.png', 'Halaman'),
(67, 'tmpatsampah.png', 'Tempat Sampah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kaldik`
--
ALTER TABLE `tbl_kaldik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kegiatanosis`
--
ALTER TABLE `tbl_kegiatanosis`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_minat`
--
ALTER TABLE `tbl_minat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profilosis`
--
ALTER TABLE `tbl_profilosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tgambar`
--
ALTER TABLE `tgambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_fasilitas`
--
ALTER TABLE `t_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_kaldik`
--
ALTER TABLE `tbl_kaldik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_kegiatanosis`
--
ALTER TABLE `tbl_kegiatanosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_minat`
--
ALTER TABLE `tbl_minat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_profilosis`
--
ALTER TABLE `tbl_profilosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tgambar`
--
ALTER TABLE `tgambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `t_fasilitas`
--
ALTER TABLE `t_fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
