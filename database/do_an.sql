-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 27, 2019 lúc 06:59 PM
-- Phiên bản máy phục vụ: 5.7.24
-- Phiên bản PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietbuoidiemdanh`
--

DROP TABLE IF EXISTS `chitietbuoidiemdanh`;
CREATE TABLE IF NOT EXISTS `chitietbuoidiemdanh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_buoi_dd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_sv` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diemdanh` float NOT NULL,
  `giovaolop` time NOT NULL,
  `diem_ythuc` float DEFAULT NULL,
  `diem_kynang` float DEFAULT NULL,
  `diem_kienthuc` float DEFAULT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chitietbuoidiemdanh`
--

INSERT INTO `chitietbuoidiemdanh` (`id`, `ma_buoi_dd`, `ma_sv`, `diemdanh`, `giovaolop`, `diem_ythuc`, `diem_kynang`, `diem_kienthuc`, `ghichu`) VALUES
(1, 'DD001K1', 'SV001', 1, '09:15:00', 8, 9, 8, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdiemdanh`
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
  `ngaydiemdanh` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chitietdiemdanh`
--

INSERT INTO `chitietdiemdanh` (`id`, `ma_diemdanh`, `ma_lop`, `ma_gv`, `ma_mon`, `ma_buoi_dd`, `ma_loai_hoc`, `ghichu`, `ngaydiemdanh`) VALUES
(1, 'DD001', 'LTMT2', 'GV001', 'MON001', 'DD001K1', 'LT', '', '2019-05-15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietthoikhoabieu`
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
-- Đang đổ dữ liệu cho bảng `chitietthoikhoabieu`
--

INSERT INTO `chitietthoikhoabieu` (`id`, `ma_tkb`, `ma_mon`, `ma_gv`, `ma_lop`, `ma_phong`, `ma_thu`, `tietbatdau`, `tietketthuc`) VALUES
(1, 'TKB001K8K1', 'MON001', 'GV001', 'LTMT2', 'D403', 'T2', 1, 3),
(2, 'TKB001K8K1', 'MON002', 'GV001', 'LTMT2', 'A402', 'T3', 5, 6),
(3, 'TKB001K8K1', 'MON003', 'GV001', 'LTMT2', 'C201', 'T5', 2, 4),
(5, 'TKB001K8K1', 'MON001', 'GV001', 'LTMT2', 'A402', 'T2', 4, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemdanh`
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
-- Đang đổ dữ liệu cho bảng `diemdanh`
--

INSERT INTO `diemdanh` (`id`, `ma_diemdanh`, `ma_khoa`, `kyhoc`, `ma_khoahoc`, `ghichu`) VALUES
(1, 'DD001', 'CNTT', 1, 'K8', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangday`
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
-- Đang đổ dữ liệu cho bảng `giangday`
--

INSERT INTO `giangday` (`id`, `ma_gd`, `ma_gv`, `ma_loai_hoc`, `ghichu`) VALUES
(1, 'GD001', 'GV001', 'LT', ''),
(2, 'GD002', 'GV001', 'TH', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`id`, `ma_gv`, `hoten`, `ngaysinh`, `gioitinh`, `sdt`, `diachi`, `email`, `chucvu`) VALUES
(1, 'CNTT11', 'Chalie', '1991-01-01', 'Nam', '13121213121312', 'aaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
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
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`id`, `ma_khoa`, `ten_khoa`, `sdt_khoa`) VALUES
(1, 'CNTT', 'Công nghệ thông tin', '0123456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc`
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
-- Đang đổ dữ liệu cho bảng `khoahoc`
--

INSERT INTO `khoahoc` (`id`, `ma_khoahoc`, `tenkhoahoc`, `ghichu`) VALUES
(1, 'K8', 'Khóa 8 (2017-2019)', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihoc`
--

DROP TABLE IF EXISTS `loaihoc`;
CREATE TABLE IF NOT EXISTS `loaihoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_loai_hoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ten_loaihoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `loaihoc`
--

INSERT INTO `loaihoc` (`id`, `ma_loai_hoc`, `ten_loaihoc`) VALUES
(1, 'LT', 'Lý thuyết'),
(2, 'TH', 'Thực hành');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
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
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`id`, `ma_lop`, `ma_gvcn`, `ma_khoa`, `tenlop`, `ma_khoahoc`) VALUES
(1, 'LTMT2', 'GV001', 'CNTT', 'Lập trình máy tính', 'K8');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`id`, `ma_mon`, `ma_khoa`, `tenmonhoc`, `ma_gd`, `so_tc`, `so_buoi_lt`, `so_buoi_th`, `ghichu`) VALUES
(1, 'MON001', 'CNTT', 'Cơ sở dữ liệu', 'GD001', 5, 5, 2, NULL),
(2, 'MON002', 'CNTT', 'Lập trình window 1', 'GD001', 5, 10, 15, NULL),
(3, 'MON003', 'CNTT', 'Cấu trúc dữ liệu và giải thuật', 'GD002', 3, 15, 30, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngaytrongtuan`
--

DROP TABLE IF EXISTS `ngaytrongtuan`;
CREATE TABLE IF NOT EXISTS `ngaytrongtuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_thu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `ngaytrongtuan`
--

INSERT INTO `ngaytrongtuan` (`id`, `ma_thu`, `thu`) VALUES
(3, 'T4', 'Thứ 4'),
(2, 'T3', 'Thứ 3'),
(1, 'T2', 'Thứ 2'),
(4, 'T5', 'Thứ 5'),
(5, 'T6', 'Thứ 6'),
(6, 'T7', 'Thứ 7'),
(7, 'CN', 'Chủ nhật');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phonghoc`
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
-- Đang đổ dữ liệu cho bảng `phonghoc`
--

INSERT INTO `phonghoc` (`id`, `ma_phong`, `tenphong`, `nhahoc`) VALUES
(1, 'D403', 'Phòng 403 tầng 4', 'Nhà D'),
(2, 'A402', 'Phòng 402 tầng 4', 'Nhà A'),
(3, 'C201', 'Phòng 201 tầng 2', 'Nhà C');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`id`, `ma_sv`, `hoten`, `gioitinh`, `ngaysinh`, `diachi`, `sdt`, `sdt_nguoithan`, `email`, `ma_lop`, `ma_khoahoc`) VALUES
(1, 'SV001', 'Nguyễn Văn BC', 'Nam', '1998-01-01', 'Hà Nội', '0123456789', '0321456789', 'test@gmail.com', 'LTMT2', 'K8');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoigianhoc`
--

DROP TABLE IF EXISTS `thoigianhoc`;
CREATE TABLE IF NOT EXISTS `thoigianhoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_mon` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_loai_hoc` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tuanbatdau` int(11) NOT NULL,
  `tuanketthuc` int(11) NOT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thoigianhoc`
--

INSERT INTO `thoigianhoc` (`id`, `ma_mon`, `ma_loai_hoc`, `tuanbatdau`, `tuanketthuc`, `ghichu`) VALUES
(1, 'MON001', 'LT', 12, 20, NULL),
(2, 'MON002', 'TH', 10, 15, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoikhoabieu`
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `thoikhoabieu`
--

INSERT INTO `thoikhoabieu` (`id`, `ma_tkb`, `ma_khoahoc`, `ma_khoa`, `ma_kyhoc`, `ma_loai_hoc`) VALUES
(1, 'TKB001K8K1', 'K8', 'CNTT', 'K1', 'LT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tiethoc`
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
-- Đang đổ dữ liệu cho bảng `tiethoc`
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
-- Cấu trúc bảng cho bảng `tuanhoc`
--

DROP TABLE IF EXISTS `tuanhoc`;
CREATE TABLE IF NOT EXISTS `tuanhoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tuan` int(11) NOT NULL,
  `thoigianbatdau` date NOT NULL,
  `thoigianketthuc` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tuanhoc`
--

INSERT INTO `tuanhoc` (`id`, `tuan`, `thoigianbatdau`, `thoigianketthuc`) VALUES
(3, 3, '2019-09-15', '2019-09-21'),
(2, 2, '2019-09-08', '2019-09-14'),
(1, 1, '2019-09-01', '2019-09-07'),
(4, 4, '2019-09-22', '2019-09-28'),
(5, 5, '2019-09-29', '2019-10-05'),
(7, 7, '2019-10-13', '2019-10-19'),
(6, 6, '2019-10-06', '2019-10-12'),
(8, 8, '2019-10-20', '2019-10-26'),
(9, 9, '2019-10-27', '2019-11-02'),
(10, 10, '2019-11-03', '2019-11-09'),
(11, 11, '2019-11-10', '2019-11-16'),
(12, 12, '2019-11-17', '2019-11-23'),
(13, 13, '2019-11-24', '2019-11-30'),
(14, 14, '2019-12-01', '2019-12-07'),
(15, 15, '2019-12-08', '2019-12-14'),
(16, 16, '2019-12-15', '2019-12-21'),
(17, 17, '2019-12-22', '2019-12-28'),
(18, 18, '2019-12-29', '2020-01-04'),
(19, 19, '2020-01-05', '2020-01-11'),
(20, 20, '2020-01-12', '2020-01-18'),
(21, 21, '2020-01-19', '2020-01-25'),
(22, 22, '2020-01-26', '2020-02-01'),
(23, 23, '2020-02-02', '2020-02-08'),
(24, 24, '2020-02-09', '2020-02-15'),
(25, 25, '2020-02-16', '2020-02-22'),
(26, 26, '2020-02-23', '2020-02-29'),
(27, 27, '2020-03-01', '2020-03-07'),
(28, 28, '2020-03-08', '2020-03-14'),
(29, 29, '2020-03-15', '2020-03-21'),
(30, 30, '2020-03-22', '2020-03-28'),
(31, 31, '2020-03-29', '2020-04-04'),
(32, 32, '2020-04-05', '2020-04-11'),
(33, 33, '2020-04-12', '2020-04-18'),
(34, 34, '2020-04-19', '2020-04-25'),
(35, 35, '2020-04-26', '2020-05-02'),
(36, 36, '2020-05-03', '2020-05-09'),
(37, 37, '2020-05-10', '2020-05-16'),
(38, 38, '2020-05-17', '2020-05-23'),
(39, 39, '2020-05-24', '2020-05-30'),
(40, 40, '2020-05-31', '2020-06-06'),
(41, 41, '2020-06-07', '2020-06-13'),
(42, 42, '2020-06-14', '2020-06-20'),
(43, 43, '2020-06-21', '2020-06-27'),
(44, 44, '2020-06-28', '2020-07-04'),
(45, 45, '2020-07-05', '2020-07-11'),
(46, 46, '2020-07-12', '2020-07-18'),
(47, 47, '2020-07-19', '2020-07-25'),
(48, 48, '2020-07-26', '2020-08-01'),
(49, 49, '2020-08-02', '2020-08-08'),
(50, 50, '2020-08-09', '2020-08-15'),
(51, 51, '2020-08-16', '2020-08-22'),
(52, 52, '2020-08-23', '2020-08-29'),
(53, 53, '2020-08-30', '2020-09-05'),
(54, 54, '2020-09-06', '2020-09-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$QbvNHN8yIwtLLj6jGpoOku9UNLSm9XafrtFopmhC063whTnXPssvq', 1, 'I5LdYgQ33npHX0RWQEmRHrO2ELVmDUvnIFSQRYQMhdmYz4uGLtdzjJF3RQeT', NULL, NULL),
(2, 'GV001', '$2y$10$jX6REmicZCiUmfXSpNM68.E8Yspyu5.8ij1Aswd.m5EQvZS0WQbye', 2, 'gwCKduHDOsmK4cXow3jXa03KblFOnWfPV8YyzTj0EZpzA5LpRWubYvmqJiUm', NULL, NULL),
(3, 'sinhvien', '$2y$10$fIE90Ev4Z6f2YvZWyVtKnO8d9IiPdDeT7qv5qd6.cetMVyjIUF4vS', 3, 'n2qmFZuvDzegbWikQ6o45c5wqop3Ib6x18kRqN7HJHIUmIjGNjG1ei6CSFJY', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
