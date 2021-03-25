-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2020 lúc 04:46 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `myshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(255) NOT NULL,
  `idsanpham` int(100) NOT NULL,
  `iduser` int(255) NOT NULL,
  `noidung` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ngay` date NOT NULL,
  `gio` time(3) NOT NULL,
  `rate` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `idsanpham`, `iduser`, `noidung`, `ngay`, `gio`, `rate`) VALUES
(1, 1, 2, 'Áo rất ddeeeepjeppep.', '2020-11-01', '00:24:00.000', 5),
(2, 1, 3, ' trung', '2020-11-01', '07:51:00.000', 5),
(3, 1, 3, ' Sản phẩm nhái\n', '2020-11-01', '07:58:00.000', 5),
(4, 1, 3, ' trung', '2020-11-01', '08:06:00.000', 5),
(6, 1, 3, 'Sản phẩm không đúng', '2020-11-01', '09:44:00.000', 5),
(7, 1, 3, ' Sản phẩm ok', '2020-11-01', '09:45:00.000', 5),
(8, 2, 5, ' okk', '2020-11-03', '04:45:00.000', 5),
(9, 2, 5, ' Cũng okk\n', '2020-11-03', '04:52:00.000', 5),
(11, 3, 4, 'trung', '2020-11-03', '06:15:00.000', 4),
(12, 7, 5, 'Quá ok', '2020-12-11', '17:09:00.000', 4),
(13, 7, 5, 'tạm đc\n', '2020-12-11', '17:10:00.000', 4),
(14, 1, 5, 'tôi thấy xấu', '2020-12-11', '17:11:00.000', 4),
(15, 5, 5, 'ok', '2020-12-11', '17:22:00.000', 3),
(16, 5, 5, 'Tạm ok', '2020-12-11', '17:27:00.000', 3),
(17, 5, 5, 'Cũng ok', '2020-12-11', '17:28:00.000', 3),
(18, 5, 5, 'cc', '2020-12-11', '17:33:00.000', 3),
(19, 5, 5, 'tạm', '2020-12-11', '17:34:00.000', 3),
(20, 1, 5, 'uk ok', '2020-12-11', '17:34:00.000', 3),
(21, 1, 5, 'shop lừa đảo', '2020-12-11', '17:36:00.000', 3),
(22, 1, 5, 'OK', '2020-12-11', '18:00:00.000', 3),
(24, 6, 5, 'quần đẹp', '2020-12-12', '10:53:00.000', 5),
(25, 1, 5, 'sản phẩm lỗi', '2020-12-12', '15:20:00.000', 1),
(26, 1, 5, 'admin đâu rồi', '2020-12-14', '09:46:00.000', 5),
(27, 1, 7, 'hàng lô', '2020-12-15', '08:08:00.000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(50) NOT NULL,
  `tendanhmuc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(1, 'Chanel'),
(2, 'Gucci'),
(3, 'Dior');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_donhang`
--

CREATE TABLE `detail_donhang` (
  `id` int(255) NOT NULL,
  `iddonhang` int(255) NOT NULL,
  `idsanpham` int(255) NOT NULL,
  `soluong` int(255) NOT NULL,
  `dongia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `detail_donhang`
--

INSERT INTO `detail_donhang` (`id`, `iddonhang`, `idsanpham`, `soluong`, `dongia`) VALUES
(1, 5, 1, 3, 11000000),
(2, 5, 2, 2, 12000000),
(3, 5, 1, 3, 11000000),
(4, 5, 2, 2, 12000000),
(5, 5, 1, 3, 11000000),
(6, 5, 2, 2, 12000000),
(7, 5, 1, 3, 11000000),
(8, 5, 2, 2, 12000000),
(9, 5, 1, 3, 11000000),
(10, 5, 2, 2, 12000000),
(11, 5, 3, 3, 12000000),
(12, 13, 3, 4, 12000000),
(13, 14, 5, 1, 10500000),
(14, 15, 5, 1, 10500000),
(15, 15, 7, 1, 7800000),
(16, 16, 5, 1, 10500000),
(17, 16, 7, 2, 7800000),
(18, 17, 7, 2, 7800000),
(19, 17, 7, 2, 7800000),
(20, 17, 7, 2, 7800000),
(21, 17, 7, 2, 7800000),
(22, 17, 7, 2, 7800000),
(23, 17, 7, 2, 7800000),
(24, 18, 7, 4, 7800000),
(25, 19, 3, 1, 12000000),
(26, 21, 3, 2, 12000000),
(27, 22, 1, 1, 11000000),
(28, 23, 2, 2, 12000000),
(29, 24, 2, 2, 12000000),
(30, 24, 2, 2, 12000000),
(31, 24, 2, 2, 12000000),
(32, 25, 2, 3, 12000000),
(33, 26, 2, 3, 12000000),
(34, 27, 2, 1, 12000000),
(35, 28, 1, 1, 11000000),
(36, 28, 2, 1, 12000000),
(37, 29, 1, 1, 11000000),
(38, 29, 2, 1, 12000000),
(39, 29, 1, 1, 11000000),
(40, 29, 2, 1, 12000000),
(41, 30, 1, 2, 11000000),
(42, 30, 2, 5, 12000000),
(43, 31, 1, 3, 11000000),
(44, 31, 2, 5, 12000000),
(45, 32, 1, 1, 11000000),
(46, 32, 2, 5, 12000000),
(47, 33, 1, 1, 11000000),
(48, 33, 2, 2, 12000000),
(49, 33, 3, 2, 12000000),
(50, 36, 1, 1, 11000000),
(51, 36, 2, 2, 12000000),
(52, 36, 3, 5, 12000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(255) NOT NULL,
  `iduser` int(255) NOT NULL,
  `thoigian` date NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tongtien` double NOT NULL,
  `idtrangthai` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `iduser`, `thoigian`, `diachi`, `tongtien`, `idtrangthai`) VALUES
(1, 5, '2020-12-12', 'Đà nẵng', 57000000, 1),
(5, 5, '2020-12-12', 'Huế', 57000000, 2),
(6, 5, '2020-12-12', 'Huế', 57000000, 3),
(7, 5, '2020-12-12', 'Huế', 57000000, 2),
(8, 5, '2020-12-12', 'Huế', 57000000, 1),
(9, 5, '2020-12-12', 'Huế', 57000000, 1),
(12, 5, '2020-12-12', 'Đà nẵng', 36000000, 2),
(13, 5, '2020-12-12', 'HÀ Nội', 48000000, 1),
(14, 5, '2020-12-13', 'Quảng Trị', 10500000, 1),
(15, 5, '2020-12-13', 'Quảng Bình', 18300000, 1),
(16, 5, '2020-12-13', 'Đà nẵng', 26100000, 1),
(17, 5, '2020-12-14', '', 15600000, 1),
(18, 5, '2020-12-13', 'Quảng Bình', 31200000, 1),
(19, 5, '2020-12-14', 'Quang Nam', 12000000, 1),
(21, 5, '2020-12-14', 'Quảng Ngãi', 24000000, 1),
(22, 5, '2020-12-14', '', 11000000, 1),
(23, 5, '2020-12-14', 'Sài Gòn', 24000000, 1),
(24, 5, '2020-12-14', '', 24000000, 1),
(25, 5, '2020-12-14', '', 36000000, 1),
(26, 5, '2020-12-14', 'Đà nẵng', 36000000, 1),
(27, 5, '2020-12-14', '', 12000000, 1),
(28, 5, '2020-12-14', '', 23000000, 1),
(29, 5, '2020-12-14', '', 23000000, 1),
(30, 4, '2020-12-14', '', 82000000, 1),
(31, 5, '2020-12-14', '', 93000000, 1),
(32, 5, '2020-12-14', '', 71000000, 1),
(33, 5, '2020-12-14', '', 59000000, 1),
(34, 5, '2020-12-14', 'Quảng Bình', 59000000, 1),
(35, 5, '2020-12-14', '', 95000000, 1),
(36, 5, '2020-12-14', '', 95000000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `id` int(255) NOT NULL,
  `tenmathang` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `iddanhmuc` int(50) NOT NULL,
  `idloaihang` int(50) NOT NULL,
  `soluong` int(50) NOT NULL,
  `gia` int(100) NOT NULL,
  `linkimage` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`id`, `tenmathang`, `iddanhmuc`, `idloaihang`, `soluong`, `gia`, `linkimage`) VALUES
(1, 'Áo thun nam Gucci', 2, 1, 1222, 11000000, 'aothungucci.jpg'),
(2, 'Giày cổ cao Dior', 3, 3, 311, 12000000, 'giaydior.jpg'),
(3, 'Áo sơ mi nam Gucci', 2, 1, 105, 12000000, 'aosomigucci.jpg'),
(4, 'Túi sách chanel', 1, 5, 115, 20000000, 'tuichanel.jpg'),
(5, 'Túi sách nữ Gucci', 2, 5, 171, 10500000, 'tuigucci.jpg'),
(6, 'Quần sort nam GUCCI', 2, 2, 1000, 4500000, 'quansortgucci.jpg'),
(7, 'Quần jean nam GUCCI', 2, 2, 345, 7800000, 'quanjeangucci.jpg'),
(8, 'Áo nữ CHANEL', 1, 1, 1005, 3500000, 'aonuchanel.jpg'),
(9, 'Mũ Bucket DIOR da bóng Nữ', 3, 4, 1, 2900000, 'mudior.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `id` int(50) NOT NULL,
  `tenloaihang` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`id`, `tenloaihang`) VALUES
(1, 'Áo'),
(2, 'Quần'),
(3, 'Giày'),
(4, 'Mũ'),
(5, 'Túi sách');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `replycomment`
--

CREATE TABLE `replycomment` (
  `id` int(255) NOT NULL,
  `idbinhluan` int(255) NOT NULL,
  `iduserr` int(255) NOT NULL,
  `traloi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngayy` date NOT NULL,
  `gioo` time(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `replycomment`
--

INSERT INTO `replycomment` (`id`, `idbinhluan`, `iduserr`, `traloi`, `ngayy`, `gioo`) VALUES
(1, 1, 3, 'Cảm ơn bạn đã bình luận', '2020-11-02', '13:18:00.000'),
(2, 2, 4, 'Cảm ơn', '2020-11-01', '17:00:00.000'),
(3, 1, 4, 'kcc', '2020-11-01', '10:18:00.000'),
(4, 3, 4, 'kcc', '2020-11-01', '10:18:00.000'),
(5, 2, 4, 'kcc', '2020-11-01', '10:18:00.000'),
(6, 4, 4, 'kcc', '2020-11-01', '10:18:00.000'),
(7, 6, 4, 'kcc', '2020-11-01', '10:18:00.000'),
(8, 1, 4, 'OKKK', '2020-11-01', '10:23:00.000'),
(9, 2, 4, 'OKKK', '2020-11-01', '10:23:00.000'),
(10, 3, 4, 'OKKK', '2020-11-01', '10:23:00.000'),
(11, 4, 4, 'OKKK', '2020-11-01', '10:23:00.000'),
(12, 6, 4, 'OKKK', '2020-11-01', '10:23:00.000'),
(13, 7, 4, 'OKKK', '2020-11-01', '10:23:00.000'),
(14, 7, 4, 'Ôk', '2020-11-01', '10:42:00.000'),
(15, 8, 5, 'okkkk', '2020-11-03', '04:51:00.000'),
(16, 9, 4, 'tôi cũng okk', '2020-11-03', '04:56:00.000'),
(17, 11, 4, 'trung', '2020-11-03', '06:18:00.000'),
(32, 3, 5, 'tôi cũng thấy vậy', '2020-12-10', '18:40:00.000'),
(33, 1, 5, 'tạm được', '2020-12-10', '18:46:00.000'),
(34, 6, 5, 'đúng vậy', '2020-12-10', '18:46:00.000'),
(35, 9, 5, 'tạm ok', '2020-12-10', '18:52:00.000'),
(36, 8, 5, 'chưa ok', '2020-12-10', '18:53:00.000'),
(37, 9, 5, 'xém', '2020-12-10', '18:54:00.000'),
(41, 8, 5, 'ohh no', '2020-12-10', '19:07:00.000'),
(42, 2, 5, 'very gôd', '2020-12-10', '19:08:00.000'),
(43, 1, 5, 'Xấu quá', '2020-12-10', '19:18:00.000'),
(44, 1, 5, 'Quá xấu', '2020-12-10', '19:25:00.000'),
(45, 1, 5, 'atm', '2020-12-10', '19:29:00.000'),
(46, 3, 5, 'không được ok', '2020-12-10', '19:30:00.000'),
(47, 3, 5, 'đúng', '2020-12-10', '19:31:00.000'),
(48, 3, 5, 'như shit', '2020-12-10', '19:31:00.000'),
(49, 7, 5, 'tôi cũng vâyk', '2020-12-10', '19:33:00.000'),
(50, 7, 5, 'tôi ', '2020-12-10', '19:34:00.000'),
(51, 6, 5, 'dung the', '2020-12-10', '19:43:00.000'),
(52, 6, 5, 'đúng thế', '2020-12-10', '19:44:00.000'),
(53, 7, 5, 'uk', '2020-12-10', '19:48:00.000'),
(54, 7, 5, 'ukk', '2020-12-10', '19:48:00.000'),
(55, 12, 5, 'tôi cũng vậy', '2020-12-11', '17:10:00.000'),
(56, 1, 5, 'tạm', '2020-12-11', '17:11:00.000'),
(57, 0, 5, '', '2020-12-11', '17:27:00.000'),
(58, 17, 5, 'Ohh thế à', '2020-12-11', '17:28:00.000'),
(59, 17, 5, 'uk', '2020-12-11', '17:32:00.000'),
(60, 18, 5, 'láo mày', '2020-12-11', '17:33:00.000'),
(61, 19, 5, 'uk', '2020-12-11', '17:34:00.000'),
(62, 20, 5, 'mình thấy shop bán hàng không đúng. Bóc phốt mọi người đừng mua hàng của shop nữa', '2020-12-11', '17:35:00.000'),
(63, 14, 5, 'tôi cũng vậy', '2020-12-11', '17:35:00.000'),
(64, 21, 5, 'súc vật mày có mua hàng k mà mói bậy', '2020-12-11', '17:37:00.000'),
(65, 22, 5, 'uk', '2020-12-11', '18:00:00.000'),
(66, 22, 5, 'kmuk', '2020-12-11', '18:02:00.000'),
(67, 2, 5, 'trungvipro', '2020-12-12', '10:44:00.000'),
(68, 24, 5, 'tôi cũng thấy vậy', '2020-12-12', '10:53:00.000'),
(69, 24, 5, 'ohh vậy à', '2020-12-12', '10:53:00.000'),
(70, 25, 1, 'tôi cũng vậy', '2020-12-13', '07:54:00.000'),
(72, 25, 4, 'ok', '2020-12-13', '07:57:00.000'),
(94, 0, 5, 'Có em', '2020-12-14', '17:39:00.000'),
(95, 26, 5, 'Có em', '2020-12-14', '17:41:00.000'),
(96, 26, 0, 'Có em eee', '2020-12-14', '17:43:00.000'),
(97, 27, 7, 'cc', '2020-12-15', '08:09:00.000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(50) NOT NULL,
  `role` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'khach'),
(2, 'admin'),
(3, 'quantri');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id` int(50) NOT NULL,
  `trangthai` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id`, `trangthai`) VALUES
(1, 'Mới đặt'),
(2, 'Đang giao hàng'),
(3, 'Đã giao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `idrole` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `idrole`) VALUES
(1, 'trungct', '123', 2),
(2, 'trung@gmail.com', '123', 1),
(3, 'tvtrung.19it2@sict.udn.vn', '202cb962ac59075b964b07152d234b70', 2),
(4, 'l.d.khoa2605@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(5, 'tvtrung.19it2@vku.udn.vn', '202cb962ac59075b964b07152d234b70', 1),
(7, 'vantrung8082k1@gmail.com', '202cb962ac59075b964b07152d234b70', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsanpham` (`idsanpham`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail_donhang`
--
ALTER TABLE `detail_donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddonhang` (`iddonhang`),
  ADD KEY `idsanpham` (`idsanpham`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idtrangthai` (`idtrangthai`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddanhmuc` (`iddanhmuc`),
  ADD KEY `iddanhmuc_2` (`iddanhmuc`),
  ADD KEY `idloaihang` (`idloaihang`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `replycomment`
--
ALTER TABLE `replycomment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idbinhluan` (`idbinhluan`),
  ADD KEY `iduserr` (`iduserr`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idrole` (`idrole`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `detail_donhang`
--
ALTER TABLE `detail_donhang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `replycomment`
--
ALTER TABLE `replycomment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idsanpham`) REFERENCES `hanghoa` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `detail_donhang`
--
ALTER TABLE `detail_donhang`
  ADD CONSTRAINT `detail_donhang_ibfk_1` FOREIGN KEY (`iddonhang`) REFERENCES `donhang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_donhang_ibfk_2` FOREIGN KEY (`idsanpham`) REFERENCES `hanghoa` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idtrangthai`) REFERENCES `trangthai` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `hanghoa_ibfk_2` FOREIGN KEY (`idloaihang`) REFERENCES `loaihang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idrole`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
