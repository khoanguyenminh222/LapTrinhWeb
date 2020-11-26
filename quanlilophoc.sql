-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2020 lúc 05:16 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlilophoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` int(11) NOT NULL,
  `ChucVu` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `password`, `HoTen`, `NgaySinh`, `Email`, `SoDienThoai`, `ChucVu`) VALUES
('Gioi', '123456', 'Đoàn Ngọc Giỏi', '2000-11-18', 'Gioi@gmail.com', 948375847, 'Admin'),
('khoa', '123456', 'Khoa Minh', '2020-11-11', 'khoatkfacebook@gmail.com', 985736895, 'HocVien'),
('Loc', '123456', 'Chế Hoài Lộc', '2020-11-18', 'khoatkfacebook@gmail.com', 969606034, 'GiaoVien'),
('minh', '123456', 'Minh Nguyen', '2020-11-12', 'khoatkfacebook@gmail.com', 969606034, 'HocVien'),
('VanToan', '123456', 'Nguyễn Văn Toàn', '2000-10-01', 'Toan@gmail.com', 987657788, 'GiaoVien'),
('Xuan', '123456', 'Pham Xuan', '2000-10-01', 'Xuan@gmail.com', 987657788, 'HocVien');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
