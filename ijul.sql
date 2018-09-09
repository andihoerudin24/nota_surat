-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 03:19 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ijul`
--

-- --------------------------------------------------------

--
-- Table structure for table `prihal`
--

CREATE TABLE `prihal` (
  `id_prihal` int(11) NOT NULL,
  `nama_prihal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prihal`
--

INSERT INTO `prihal` (`id_prihal`, `nama_prihal`) VALUES
(11, 'asdasda'),
(13, 'DINAS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bidang`
--

CREATE TABLE `tbl_bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bidang`
--

INSERT INTO `tbl_bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'bidang penyelengaraan E-Government'),
(2, 'biddang pengelolaan informasi dan komunikasi publik'),
(4, 'kepala dinas komunikasi dan informatika sekertariat'),
(5, 'bidang layanan komunikasi dan informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `nama`, `username`, `password`, `level`, `id_bidang`) VALUES
(8, 'andi hoerudin', 'andihoerudin', '22512e58749ffead12e90dbd59eddf24', 1, 1),
(9, 'kasubag', 'kasubag', '143ad2695caf8f2368b5d9ef03d37ee8', 2, 2),
(10, 'lobby', 'lobby', 'd8671d1cb097a3bd26b2344ee25a0562', 3, 1),
(11, 'sekdis', 'sekdis', '5f20f129bd6bd931be0d3e99fc2fb720', 4, 5),
(12, 'kabid', 'kabid', '6d6827e38b382572cc5be098158174d3', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nota`
--

CREATE TABLE `tbl_nota` (
  `id_nota` int(11) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `disposisi` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `id_seksi` int(11) NOT NULL,
  `isi_nota` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seksi`
--

CREATE TABLE `tbl_seksi` (
  `id_seksi` int(11) NOT NULL,
  `nama_seksi` text NOT NULL,
  `id_bidang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seksi`
--

INSERT INTO `tbl_seksi` (`id_seksi`, `nama_seksi`, `id_bidang`) VALUES
(1, 'kasubag umum & kepegawaian', 1),
(2, 'kasubag program & pelaporan', 4),
(4, 'sekertaris diskominfo', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat`
--

CREATE TABLE `tbl_surat` (
  `id_surat` int(11) NOT NULL,
  `kepada` varchar(55) NOT NULL,
  `dari` varchar(50) NOT NULL,
  `id_prihal` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tembusan` text NOT NULL,
  `isi_nota` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `file` text NOT NULL,
  `id_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_surat`
--

INSERT INTO `tbl_surat` (`id_surat`, `kepada`, `dari`, `id_prihal`, `no_surat`, `tembusan`, `isi_nota`, `status`, `tanggal`, `file`, `id_login`) VALUES
(14, 'sdaaaaaaaaaaa', 'dadasd', 8, '24342', '34234234234', '<p>asdsa</p>', 0, 'Monday, 27-08-18', '', 0),
(15, 'dasda', 'asdasd', 7, 'dasdsa', '4323423', '<p>asdsad</p>', 0, 'Monday, 27-08-18', '', 0),
(16, 'asdasd', 'asda', 9, 'asdas', '2342342', '<p>asdsad</p>', 0, 'Monday, 27-08-18', '', 0),
(17, 'dsad', 'asda', 10, 'adasd', 'asdasda', '<p>sadasd</p>', 1, 'Monday, 27-08-18', '', 6),
(18, 'fdfsdf', 'asdasd', 10, 'dasda', 'asdasd', '<p>dasdsa</p>', 1, 'Monday, 27-08-18', '', 4),
(21, 'sadsad', 'adsad', 11, 'asdsa', 'asdsa', '<p>adasd</p>', 0, 'Monday, 27-08-18', '', 0),
(22, 'dsdas', 'dsaasd', 11, 'dasdas', 'asdasdas', '<p>sadasd</p>', 0, 'Monday, 27-08-18', '', 0),
(24, 'dsdas', 'dsaasd', 11, 'dasdas', 'asdasdas', '<p>sadasd</p>', 0, 'Monday, 27-08-18', '', 0),
(25, 'xsz', 'XX', 11, 'dasdas', '323131', '<p>dsssssssss</p>', 0, 'Monday, 27-08-18', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tembusan`
--

CREATE TABLE `tbl_tembusan` (
  `id_tembusan` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prihal`
--
ALTER TABLE `prihal`
  ADD PRIMARY KEY (`id_prihal`);

--
-- Indexes for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bidang` (`id_bidang`);

--
-- Indexes for table `tbl_nota`
--
ALTER TABLE `tbl_nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_seksi` (`id_seksi`);

--
-- Indexes for table `tbl_seksi`
--
ALTER TABLE `tbl_seksi`
  ADD PRIMARY KEY (`id_seksi`),
  ADD KEY `id_bidang` (`id_bidang`);

--
-- Indexes for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tbl_tembusan`
--
ALTER TABLE `tbl_tembusan`
  ADD PRIMARY KEY (`id_tembusan`),
  ADD KEY `id_bidang` (`id_bidang`),
  ADD KEY `id_nota` (`id_nota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prihal`
--
ALTER TABLE `prihal`
  MODIFY `id_prihal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_nota`
--
ALTER TABLE `tbl_nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_seksi`
--
ALTER TABLE `tbl_seksi`
  MODIFY `id_seksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_surat`
--
ALTER TABLE `tbl_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_tembusan`
--
ALTER TABLE `tbl_tembusan`
  MODIFY `id_tembusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD CONSTRAINT `tbl_login_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `tbl_bidang` (`id_bidang`);

--
-- Constraints for table `tbl_nota`
--
ALTER TABLE `tbl_nota`
  ADD CONSTRAINT `tbl_nota_ibfk_1` FOREIGN KEY (`id_seksi`) REFERENCES `tbl_seksi` (`id_seksi`);

--
-- Constraints for table `tbl_seksi`
--
ALTER TABLE `tbl_seksi`
  ADD CONSTRAINT `tbl_seksi_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `tbl_bidang` (`id_bidang`);

--
-- Constraints for table `tbl_tembusan`
--
ALTER TABLE `tbl_tembusan`
  ADD CONSTRAINT `tbl_tembusan_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `tbl_bidang` (`id_bidang`),
  ADD CONSTRAINT `tbl_tembusan_ibfk_2` FOREIGN KEY (`id_nota`) REFERENCES `tbl_nota` (`id_nota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
