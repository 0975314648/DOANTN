-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2019 at 03:27 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `do_an`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietbuoidiemdanh`
--

DROP TABLE IF EXISTS `chitietbuoidiemdanh`;
CREATE TABLE IF NOT EXISTS `chitietbuoidiemdanh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_buoi_dd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_sv` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diemdanh` float DEFAULT NULL,
  `diem_ythuc` float DEFAULT NULL,
  `diem_kynang` float DEFAULT NULL,
  `diem_kienthuc` float DEFAULT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitietbuoidiemdanh`
--

INSERT INTO `chitietbuoidiemdanh` (`id`, `ma_buoi_dd`, `ma_sv`, `diemdanh`, `diem_ythuc`, `diem_kynang`, `diem_kienthuc`, `ghichu`) VALUES
(1, 'DD001K1', 'SV001', 1, 8, 9, 8, ''),
(2, 'DD001K2', 'SV001', 1, 5, 6, 7, ''),
(3, 'DD001K1', 'SV002', 0, NULL, NULL, NULL, NULL),
(4, 'DD001K2', 'SV002', 1, 2, 2, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chitietdiemdanh`
--

DROP TABLE IF EXISTS `chitietdiemdanh`;
CREATE TABLE IF NOT EXISTS `chitietdiemdanh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_diemdanh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_lop` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_gv` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_mon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_buoi_dd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_loai_hoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitietdiemdanh`
--

INSERT INTO `chitietdiemdanh` (`id`, `ma_diemdanh`, `ma_lop`, `ma_gv`, `ma_mon`, `ma_buoi_dd`, `ma_loai_hoc`, `ghichu`) VALUES
(1, 'DD001', 'LTMT2', 'GV001', 'MON001', 'DD001K1', 'LT', ''),
(2, 'ad', 'LTMT2', 'GV001', 'MON001', 'DD001K2', 'LT', '');

-- --------------------------------------------------------

--
-- Table structure for table `chitietthoikhoabieu`
--

DROP TABLE IF EXISTS `chitietthoikhoabieu`;
CREATE TABLE IF NOT EXISTS `chitietthoikhoabieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_tkb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_mon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_gv` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_lop` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_phong` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_thu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tietbatdau` int(11) NOT NULL,
  `tietketthuc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitietthoikhoabieu`
--

INSERT INTO `chitietthoikhoabieu` (`id`, `ma_tkb`, `ma_mon`, `ma_gv`, `ma_lop`, `ma_phong`, `ma_thu`, `tietbatdau`, `tietketthuc`) VALUES
(4, 'TKB001', 'MON001', 'GV001', 'LTMT2', 'D403', 'T2', 1, 3),
(2, 'TKB001', 'MON001', 'GV001', 'LTMT2', 'D403', 'T3', 4, 6),
(3, 'TKB001', 'MON002', 'GV002', 'LTMT2', 'D403', 'T2', 4, 6),
(5, 'TKB002', 'MON001', 'GV001', 'LTMT2', 'A15-203', 'T2', 7, 12),
(1, 'TKB002', 'MON002', 'GV002', 'LTMT2', 'A17-405', 'T3', 7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `diemdanh`
--

DROP TABLE IF EXISTS `diemdanh`;
CREATE TABLE IF NOT EXISTS `diemdanh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_diemdanh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_khoa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `kyhoc` int(11) NOT NULL,
  `ma_khoahoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diemdanh`
--

INSERT INTO `diemdanh` (`id`, `ma_diemdanh`, `ma_khoa`, `kyhoc`, `ma_khoahoc`, `ghichu`) VALUES
(1, 'DD001', 'CNTT', 1, 'K8', '');

-- --------------------------------------------------------

--
-- Table structure for table `giangday`
--

DROP TABLE IF EXISTS `giangday`;
CREATE TABLE IF NOT EXISTS `giangday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_gd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_gv` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_loai_hoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giangday`
--

INSERT INTO `giangday` (`id`, `ma_gd`, `ma_gv`, `ma_loai_hoc`, `ghichu`) VALUES
(1, 'GD001', 'GV001', 'LT', ''),
(2, 'GD002', 'GV001', 'TH', '');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

DROP TABLE IF EXISTS `giangvien`;
CREATE TABLE IF NOT EXISTS `giangvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_gv` varchar(255) NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sdt` varchar(255) DEFAULT NULL,
  `diachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `chucvu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`id`, `ma_gv`, `hoten`, `ngaysinh`, `gioitinh`, `sdt`, `diachi`, `email`, `chucvu`) VALUES
(1, 'GV001', 'Chalie', '1991-01-01', 'Nam', '13121213121312', 'aaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaaaa'),
(2, 'GV002', 'Nam C', '1990-05-13', '1', '123123213123', 'asdasd', 'dsadasdas', 'ddddd');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

DROP TABLE IF EXISTS `khoa`;
CREATE TABLE IF NOT EXISTS `khoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_khoa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ten_khoa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt_khoa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`id`, `ma_khoa`, `ten_khoa`, `sdt_khoa`) VALUES
(1, 'CNTT', 'Công nghệ thông tin', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

DROP TABLE IF EXISTS `khoahoc`;
CREATE TABLE IF NOT EXISTS `khoahoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_khoahoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tenkhoahoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`id`, `ma_khoahoc`, `tenkhoahoc`, `ghichu`) VALUES
(1, 'K8', 'Khóa 8 (2017-2019)', '');

-- --------------------------------------------------------

--
-- Table structure for table `loaihoc`
--

DROP TABLE IF EXISTS `loaihoc`;
CREATE TABLE IF NOT EXISTS `loaihoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_loai_hoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ten_loaihoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loaihoc`
--

INSERT INTO `loaihoc` (`id`, `ma_loai_hoc`, `ten_loaihoc`) VALUES
(1, 'LT', 'Lý thuyết'),
(2, 'TH', 'Thực hành');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

DROP TABLE IF EXISTS `lop`;
CREATE TABLE IF NOT EXISTS `lop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_lop` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_gvcn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_khoa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tenlop` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_khoahoc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`id`, `ma_lop`, `ma_gvcn`, `ma_khoa`, `tenlop`, `ma_khoahoc`) VALUES
(1, 'LTMT2', 'GV001', 'CNTT', 'Lập trình máy tính', 'K8');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_mon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_khoa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `tenmonhoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ma_gd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `so_tc` int(11) DEFAULT NULL,
  `so_buoi_lt` int(11) DEFAULT NULL,
  `so_buoi_th` int(11) DEFAULT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`id`, `ma_mon`, `ma_khoa`, `tenmonhoc`, `ma_gd`, `so_tc`, `so_buoi_lt`, `so_buoi_th`, `ghichu`) VALUES
(1, 'MON001', 'CNTT', 'Cơ sở dữ liệu', 'GD001', 5, 2, 2, NULL),
(2, 'MON002', 'CNTT', 'HTML', 'GD001', 4, 3, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ngaytrongtuan`
--

DROP TABLE IF EXISTS `ngaytrongtuan`;
CREATE TABLE IF NOT EXISTS `ngaytrongtuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_thu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngaytrongtuan`
--

INSERT INTO `ngaytrongtuan` (`id`, `ma_thu`, `thu`) VALUES
(1, 'CN', 'Chủ Nhật'),
(2, 'T2', 'Thứ 2'),
(3, 'T3', 'Thứ 3');

-- --------------------------------------------------------

--
-- Table structure for table `phonghoc`
--

DROP TABLE IF EXISTS `phonghoc`;
CREATE TABLE IF NOT EXISTS `phonghoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_phong` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tenphong` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `nhahoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonghoc`
--

INSERT INTO `phonghoc` (`id`, `ma_phong`, `tenphong`, `nhahoc`) VALUES
(1, 'D403', 'Phòng 403', 'Nhà D'),
(2, 'A15-203', 'Phòng 203', 'A15'),
(3, 'A17-405', 'Phòng 405', 'A17');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

DROP TABLE IF EXISTS `sinhvien`;
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_sv` varchar(255) NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gioitinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaysinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt_nguoithan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_lop` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_khoahoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `ma_sv`, `hoten`, `gioitinh`, `ngaysinh`, `diachi`, `sdt`, `sdt_nguoithan`, `email`, `ma_lop`, `ma_khoahoc`) VALUES
(1, 'SV001', 'Nguyễn Văn BC', 'Nam', '1998-01-01', 'Hà Nội', '0123456789', '0321456789', 'test@gmail.com', 'LTMT2', 'K8'),
(2, 'SV002', 'AAAAAAAAA', 'Nam', '1998-01-01', 'ấdsad', '12312321', '213213', 'ádsad', 'LTMT2', 'K8');

-- --------------------------------------------------------

--
-- Table structure for table `thoigianhoc`
--

DROP TABLE IF EXISTS `thoigianhoc`;
CREATE TABLE IF NOT EXISTS `thoigianhoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_mon` varchar(255) COLLATE utf16_vietnamese_ci NOT NULL,
  `ma_loai_hoc` varchar(255) COLLATE utf16_vietnamese_ci NOT NULL,
  `tuanbatdau` varchar(255) COLLATE utf16_vietnamese_ci NOT NULL,
  `tuanketthuc` varchar(255) COLLATE utf16_vietnamese_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf16_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf16 COLLATE=utf16_vietnamese_ci;

--
-- Dumping data for table `thoigianhoc`
--

INSERT INTO `thoigianhoc` (`id`, `ma_mon`, `ma_loai_hoc`, `tuanbatdau`, `tuanketthuc`, `ghichu`) VALUES
(1, 'MON001', 'LT', '1', '3', NULL),
(2, 'MON002', 'LT', '2', '4', NULL),
(3, 'MON001', 'TH', '1', '2', NULL),
(4, 'MON002', 'TH', '2', '3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thoikhoabieu`
--

DROP TABLE IF EXISTS `thoikhoabieu`;
CREATE TABLE IF NOT EXISTS `thoikhoabieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_tkb` varchar(255) NOT NULL,
  `ma_khoahoc` varchar(255) NOT NULL,
  `ma_khoa` varchar(255) NOT NULL,
  `ma_kyhoc` varchar(255) NOT NULL,
  `ma_loai_hoc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thoikhoabieu`
--

INSERT INTO `thoikhoabieu` (`id`, `ma_tkb`, `ma_khoahoc`, `ma_khoa`, `ma_kyhoc`, `ma_loai_hoc`) VALUES
(1, 'TKB001', 'K8', 'CNTT', '1', 'LT'),
(2, 'TKB002', 'K8', 'CNTT', '1', 'TH');

-- --------------------------------------------------------

--
-- Table structure for table `tiethoc`
--

DROP TABLE IF EXISTS `tiethoc`;
CREATE TABLE IF NOT EXISTS `tiethoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tiet` int(11) NOT NULL,
  `thoigian_batdau` time NOT NULL,
  `thoigian_ketthuc` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiethoc`
--

INSERT INTO `tiethoc` (`id`, `tiet`, `thoigian_batdau`, `thoigian_ketthuc`) VALUES
(1, 1, '06:45:00', '07:30:00'),
(2, 2, '07:35:00', '08:20:00'),
(3, 3, '08:25:00', '09:10:00'),
(4, 4, '09:15:00', '10:00:00'),
(5, 5, '10:05:00', '10:50:00'),
(6, 6, '10:55:00', '11:40:00'),
(7, 7, '12:30:00', '13:15:00'),
(8, 8, '13:20:00', '14:05:00'),
(9, 9, '14:10:00', '14:55:00'),
(10, 10, '15:00:00', '15:45:00'),
(11, 11, '15:50:00', '16:35:00'),
(12, 12, '16:40:00', '17:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `tuanhoc`
--

DROP TABLE IF EXISTS `tuanhoc`;
CREATE TABLE IF NOT EXISTS `tuanhoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tuan` int(11) NOT NULL,
  `thoigianbatdau` date NOT NULL,
  `thoigianketthuc` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf16 COLLATE=utf16_vietnamese_ci;

--
-- Dumping data for table `tuanhoc`
--

INSERT INTO `tuanhoc` (`id`, `tuan`, `thoigianbatdau`, `thoigianketthuc`) VALUES
(1, 1, '2019-05-06', '2019-05-12'),
(2, 2, '2019-05-13', '2019-05-19'),
(3, 3, '2019-05-20', '2019-05-26'),
(4, 4, '2019-05-27', '2019-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$QbvNHN8yIwtLLj6jGpoOku9UNLSm9XafrtFopmhC063whTnXPssvq', 1, 'I5LdYgQ33npHX0RWQEmRHrO2ELVmDUvnIFSQRYQMhdmYz4uGLtdzjJF3RQeT', NULL, NULL),
(2, 'GV001', '$2y$10$jX6REmicZCiUmfXSpNM68.E8Yspyu5.8ij1Aswd.m5EQvZS0WQbye', 2, '06LhvikmocMl7SnkKQwTofAI0cXSqySQ8zWq6DH8AqVejtkndrD71UmbD0m9', NULL, NULL),
(3, 'LTMT2', '$2y$10$fIE90Ev4Z6f2YvZWyVtKnO8d9IiPdDeT7qv5qd6.cetMVyjIUF4vS', 3, 'n2qmFZuvDzegbWikQ6o45c5wqop3Ib6x18kRqN7HJHIUmIjGNjG1ei6CSFJY', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
