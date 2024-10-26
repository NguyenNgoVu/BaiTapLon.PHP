-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2024 lúc 03:22 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlts`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`username`, `password`, `name`, `email`, `phone`, `address`) VALUES
('123', '123', '123', '123', '123', '123'),
('132', '132', '132', '132', '132', '132'),
('nghia123', '12345', 'Nguyễn Tuấn Nghĩa', 'nghia123@gmail.com', '0969131881', 'Phan Chu Trinh, Hoàn Kiếm, Hà Nội'),
('quy123', '12345', 'Ngô Xuân Quý', 'quy123@gmail.com', '0889033006', 'Lưu Xá, Quất Động, Thường Tín, Hà Nội'),
('thao123', '12345', 'Nguyễn Đức Thảo', 'thao123@gmail.com', '0338620984', 'Duyên Thái, Thường Tín, Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` bigint(20) NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `category`) VALUES
('bongTai1', 'Bông tai kim cương - 2024NNN1', 100000000, 'bongtai'),
('bongTai10', 'Bông tai đơn giản - 2019NNN1', 1000000, 'bongtai'),
('bongTai2', 'Bông tai kim cương - 2023NNN2', 98000000, 'bongtai'),
('bongTai3', 'Bông tai kim cương - 2024NNN3', 1000000000, 'bongtai'),
('bongTai4', 'Bông tai NNN - 2022NNN5', 45000000, 'bongtai'),
('bongTai5', 'Bông tai cách tân - 2020NNN4', 10000000, 'bongtai'),
('bongTai6', 'Bông tai cánh hoa - 2024NNN6', 100000000, 'bongtai'),
('bongTai7', 'Bông tai cách điệu - 2024NNN8', 223000000, 'bongtai'),
('bongTai8', 'Bông tai ngôi sao - 2024NNN9', 2003000000, 'bongtai'),
('bongTai9', 'Bông tai mạ vàng - 2023NNN10', 230000000, 'bongtai'),
('kimCuong1', 'Kim cương 10 carat - 2020NNN1', 200000000, 'kimcuong'),
('kimCuong2', 'Kim cương 20 carat - 2024NNN2', 500000000, 'kimcuong'),
('kimCuong3', 'Kim cương gamma doppler phase 3 - 2024NNN1', 400000000, 'kimcuong'),
('kimCuong4', 'Kim cương độ tinh khiết cao - 2024NNN4', 20000000000, 'kimcuong'),
('kimCuong5', 'Kim cương nhân tạo - 2000NNN5', 2000000, 'kimcuong'),
('ngocTrai1', 'Ngọc trai chế tác bông tai - 2009NNN1', 200000000, 'ngoctrai'),
('ngocTrai2', 'Ngọc trai trắng - 2021NNN4', 340000000, 'ngoctrai'),
('ngocTrai3', 'Bông tai ngọc trai - 2023NNN5', 32400000, 'ngoctrai'),
('ngocTrai4', 'Ngọc trai chế tác - 2023NNN1', 1000000, 'ngoctrai'),
('ngocTrai5', 'Ngọc trai tinh sảo - 2024NNN10', 100000000, 'ngoctrai'),
('nhan1', 'Nhẫn đính hôn Kim cương - 2003NNN1', 100000000, 'nhan'),
('nhan10', 'Nhẫn đính trái tim kim cương - 2015NNN6', 500000000, 'nhan'),
('nhan2', 'Nhẫn cách điệu - 2024NNN1', 1000000000, 'nhan'),
('nhan3', 'Nhẫn dát vàng 24K - 2003NNN3', 2000000100, 'nhan'),
('nhan4', 'Nhẫn đơn giản - 2009NNN4', 12000000, 'nhan'),
('nhan5', 'Nhẫn cách điệu hoa - 2024NNN6', 34600000, 'nhan'),
('nhan6', 'Nhẫn hoa nhỏ - 2007NNN5', 200000000, 'nhan'),
('nhan7', 'Nhẫn đính Kim cương - 1999NNN8', 23400000000, 'nhan'),
('nhan8', 'Nhẫn vàng trắng - 2021NNN12', 20200000, 'nhan'),
('nhan9', 'Nhẫn vàng 24K - 2017NNN4', 209000000, 'nhan'),
('vang1', '3 Chỉ vàng - 2021NNN5', 40000000, 'vang'),
('vang2', 'Ghim cài áo vàng - 2001NNN3', 34200000, 'vang'),
('vang3', 'Vòng tay vàng - 2022NNN5', 980000000, 'vang'),
('vang4', '4 Chỉ vàng - 2003NNN1', 70000000, 'vang'),
('vang5', '5 Chỉ vàng - 2009NNN3', 90000000, 'vang'),
('vong1', 'Vòng đeo vàng - 2001NNN3', 900000000, 'vong'),
('vong10', 'Vòng đeo cách điệu - 2003NNN3', 450000000, 'vong'),
('vong2', 'Vòng kim cương - 1988NNN3', 1000000000, 'vong'),
('vong3', 'Vòng đeo cách điệu - 2006NNN3', 300000000, 'vong'),
('vong4', 'Vòng cỏ 4 lá - 2004NNN8', 234000000, 'vong'),
('vong5', 'Vòng cỏ 4 lá mạ vàng - 2004NNN10', 420000000, 'vong'),
('vong6', 'Vòng đính kim cương - 2023NNN5', 350000000, 'vong'),
('vong7', 'Vòng đeo thời trang - 2016NNN4', 340000000, 'vong'),
('vong8', 'Vòng đeo vĩnh cửu - 2000NNN5', 300000000, 'vong'),
('vong9', 'Vòng đeo ngôi sao Kim cương - 1999NNN4', 5400000000, 'vong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ykien`
--

CREATE TABLE `ykien` (
  `username` varchar(10) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ykien`
--

INSERT INTO `ykien` (`username`, `feedback`) VALUES
('123', 'zzxc'),
('123', 'qwe');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `ykien`
--
ALTER TABLE `ykien`
  ADD KEY `username` (`username`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ykien`
--
ALTER TABLE `ykien`
  ADD CONSTRAINT `ykien_ibfk_1` FOREIGN KEY (`username`) REFERENCES `khachhang` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
