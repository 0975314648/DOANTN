-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 25, 2019 lúc 03:24 AM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.2.18

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
  `diem_ythuc` float NOT NULL,
  `diem_kynang` float NOT NULL,
  `diem_kienthuc` float NOT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chitietbuoidiemdanh`
--

INSERT INTO `chitietbuoidiemdanh` (`id`, `ma_buoi_dd`, `ma_sv`, `diemdanh`, `diem_ythuc`, `diem_kynang`, `diem_kienthuc`, `ghichu`) VALUES
(1, 'DD001K1', 'SV001', 1, 8, 9, 8, '');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chitietdiemdanh`
--

INSERT INTO `chitietdiemdanh` (`id`, `ma_diemdanh`, `ma_lop`, `ma_gv`, `ma_mon`, `ma_buoi_dd`, `ma_loai_hoc`, `ghichu`) VALUES
(1, 'DD001', 'LTMT2', 'GV001', 'MON001', 'DD001K1', 'LT', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chitietthoikhoabieu`
--

INSERT INTO `chitietthoikhoabieu` (`id`, `ma_tkb`, `ma_mon`, `ma_gv`, `ma_lop`, `ma_phong`, `ma_thu`, `tietbatdau`, `tietketthuc`) VALUES
(1, 'TKB001', 'MON001', 'GV001', 'LTMT2', 'D403', 'T2', 1, 3);

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
  `id_khoahoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tenkhoahoc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `khoahoc`
--

INSERT INTO `khoahoc` (`id`, `id_khoahoc`, `tenkhoahoc`, `ghichu`) VALUES
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`id`, `ma_mon`, `ma_khoa`, `tenmonhoc`, `ma_gd`, `so_tc`, `so_buoi_lt`, `so_buoi_th`, `ghichu`) VALUES
(1, 'MON001', 'CNTT', 'Cơ sở dữ liệu', 'GD001', 5, 5, 2, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `ngaytrongtuan`
--

INSERT INTO `ngaytrongtuan` (`id`, `ma_thu`, `thu`) VALUES
(1, 'CN', 'Chủ Nhật'),
(2, 'T2', 'Thứ 2'),
(3, 'T3', 'Thứ 3');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phonghoc`
--

INSERT INTO `phonghoc` (`id`, `ma_phong`, `tenphong`, `nhahoc`) VALUES
(1, 'D403', 'Phòng 403', 'Nhà D');

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
  `tuanbatdau` int(11) NOT NULL,
  `tuanketthuc` int(11) NOT NULL,
  `thoigianhoc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(2, 'GV001', '$2y$10$jX6REmicZCiUmfXSpNM68.E8Yspyu5.8ij1Aswd.m5EQvZS0WQbye', 2, 'D9sjutC57Z82FeILOZ66OXNew3zueYxONJ9JVX7RXr315yULOrMPGOvCUgdC', NULL, NULL),
(3, 'sinhvien', '$2y$10$fIE90Ev4Z6f2YvZWyVtKnO8d9IiPdDeT7qv5qd6.cetMVyjIUF4vS', 3, 'n2qmFZuvDzegbWikQ6o45c5wqop3Ib6x18kRqN7HJHIUmIjGNjG1ei6CSFJY', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
