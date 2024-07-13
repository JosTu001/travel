-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 13, 2024 lúc 04:00 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datvexe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `A_Ma` int(11) NOT NULL,
  `A_Ten` varchar(50) NOT NULL,
  `A_GioiTinh` varchar(4) NOT NULL,
  `A_Email` varchar(50) NOT NULL,
  `A_NgaySinh` date NOT NULL,
  `A_SDT` varchar(10) NOT NULL,
  `A_DiaChi` varchar(100) NOT NULL,
  `A_Hinh` varchar(100) NOT NULL,
  `A_MatKhau` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`A_Ma`, `A_Ten`, `A_GioiTinh`, `A_Email`, `A_NgaySinh`, `A_SDT`, `A_DiaChi`, `A_Hinh`, `A_MatKhau`) VALUES
(1, 'Trần Thị Trúc Quyên', 'Nữ', 'quyen@gmail.com', '2001-03-30', '0582544082', 'Đồng Tháp', 'meo.jpg', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benxe`
--

CREATE TABLE `benxe` (
  `BX_Ma` int(11) NOT NULL,
  `H_Ma` int(11) NOT NULL,
  `BX_Ten` varchar(50) NOT NULL,
  `BX_Hinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `benxe`
--

INSERT INTO `benxe` (`BX_Ma`, `H_Ma`, `BX_Ten`, `BX_Hinh`) VALUES
(1, 2, 'Sa Đéc', '0'),
(2, 1, 'Hồng Ngự', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietghe`
--

CREATE TABLE `chitietghe` (
  `G_Ma` int(11) NOT NULL,
  `CTG_TrangThai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietghe`
--

INSERT INTO `chitietghe` (`G_Ma`, `CTG_TrangThai`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieudat`
--

CREATE TABLE `chitietphieudat` (
  `PD_Ma` int(11) NOT NULL,
  `CTP_TenKH` varchar(50) NOT NULL,
  `CTP_EmailKH` varchar(30) NOT NULL,
  `CTP_SdtKH` varchar(10) NOT NULL,
  `HD_Ma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyen`
--

CREATE TABLE `chuyen` (
  `C_Ma` int(11) NOT NULL,
  `NV_Ma` int(11) NOT NULL,
  `TC_Ma` int(11) NOT NULL,
  `X_Ma` int(11) NOT NULL,
  `C_ThoiGianXP` datetime NOT NULL,
  `C_ThoiGianDen` datetime NOT NULL,
  `BXKH_Ma` int(11) NOT NULL,
  `C_DonGia` float NOT NULL,
  `C_Hinh` varchar(100) NOT NULL,
  `TX_Ma` int(11) NOT NULL,
  `BXD_Ma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyen`
--

INSERT INTO `chuyen` (`C_Ma`, `NV_Ma`, `TC_Ma`, `X_Ma`, `C_ThoiGianXP`, `C_ThoiGianDen`, `BXKH_Ma`, `C_DonGia`, `C_Hinh`, `TX_Ma`, `BXD_Ma`) VALUES
(5, 1, 2, 2, '2022-11-20 12:58:42', '2022-11-20 12:58:42', 2, 200000, 'Do-ghe-limousine-SUV-con-ngua-640x427.jpg', 2, 1),
(6, 1, 2, 1, '2022-11-20 19:07:00', '2022-11-20 19:09:00', 1, 300000, 'ford-tourneo-limousine-8.jpg', 2, 2),
(7, 1, 2, 2, '2022-11-20 23:59:00', '2022-11-20 13:59:00', 2, 150000, 'meo.jpg', 1, 1),
(8, 1, 5, 2, '2022-11-12 13:53:00', '2022-11-20 23:56:00', 1, 200000, 'do-ghe-limousine-o-to.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(11) NOT NULL,
  `DG_Diem` varchar(20) DEFAULT NULL,
  `PD_Ma` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe`
--

CREATE TABLE `ghe` (
  `G_Ma` int(11) NOT NULL,
  `G_MaSoGhe` varchar(5) NOT NULL,
  `X_Ma` int(11) NOT NULL,
  `G_TrangThai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `ghe`
--

INSERT INTO `ghe` (`G_Ma`, `G_MaSoGhe`, `X_Ma`, `G_TrangThai`) VALUES
(1, 'A1', 1, 0),
(2, 'A2', 1, 1),
(3, 'A3', 1, 0),
(4, 'A4', 1, 0),
(5, 'A5', 1, 0),
(6, 'A6', 1, 1),
(7, 'A7', 1, 0),
(8, 'A8', 1, 0),
(9, 'A9', 1, 0),
(10, 'A10', 1, 0),
(11, 'A11', 1, 1),
(12, 'A12', 1, 0),
(13, 'A13', 1, 0),
(14, 'A14', 1, 1),
(15, 'A15', 1, 0),
(16, 'A16', 1, 0),
(17, 'A1', 2, 1),
(18, 'A2', 2, 1),
(19, 'A3', 2, 0),
(20, 'A4', 2, 0),
(21, 'A5', 2, 0),
(22, 'A6', 2, 0),
(23, 'A7', 2, 0),
(24, 'A8', 2, 0),
(41, 'A1', 3, 0),
(42, 'A2', 3, 0),
(44, 'A9', 2, 0),
(45, 'A10', 2, 0),
(47, 'A11', 2, 0),
(48, 'A12', 2, 0),
(49, 'A13', 2, 0),
(50, 'A14', 2, 0),
(51, 'A15', 2, 0),
(52, 'A16', 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `HD_Ma` int(11) NOT NULL,
  `PD_Ma` int(11) NOT NULL,
  `HD_NgayLap` datetime NOT NULL,
  `HD_TongTien` float NOT NULL,
  `HD_MST` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `huyen`
--

CREATE TABLE `huyen` (
  `H_Ma` int(11) NOT NULL,
  `H_Ten` varchar(30) NOT NULL,
  `T_Ma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `huyen`
--

INSERT INTO `huyen` (`H_Ma`, `H_Ten`, `T_Ma`) VALUES
(1, 'Lấp vò', 3),
(2, 'Lai Vung', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `KH_Ma` int(11) NOT NULL,
  `KH_Ten` varchar(50) NOT NULL,
  `KH_Sdt` varchar(10) NOT NULL,
  `KH_GioiTinh` varchar(4) DEFAULT NULL,
  `KH_DiaChi` varchar(100) DEFAULT NULL,
  `password` varchar(8) NOT NULL,
  `KH_Hinh` varchar(100) DEFAULT NULL,
  `KH_Email` varchar(30) NOT NULL,
  `repassword` varchar(8) NOT NULL,
  `KH_NgaySinh` date DEFAULT NULL,
  `KH_TrangThai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`KH_Ma`, `KH_Ten`, `KH_Sdt`, `KH_GioiTinh`, `KH_DiaChi`, `password`, `KH_Hinh`, `KH_Email`, `repassword`, `KH_NgaySinh`, `KH_TrangThai`) VALUES
(2, 'TRẦN THANH NHÀN', '0123475896', ' Nam', 'Cần Thơ', '111', 'unnamed.png', 'sau@gmail.com', '111', '2010-06-09', NULL),
(3, 'Trần văn Cam', '0123456789', ' Nam', 'Tiền Giang', '123456', 'unnamed.png', 'nga@gmail.com', '123456', '2022-11-07', NULL),
(4, 'Trần văn Cam', '0123456789', ' Nam', 'Tiền Giang', '77777', 'unnamed.png', 'tran@gmail.com', '77777', '2022-11-15', NULL),
(6, 'Trúc Quyên Trần', ' 058254402', '', '', '12345678', 'unnamed.png', 'trucquyen@gmail.com', '12345678', '2001-05-30', NULL),
(26, 'Nguyễn Tú', ' 035476370', NULL, NULL, 'a40e2254', NULL, 'josnguyentu2002@gmail.com', ' a40e225', NULL, NULL),
(27, 'tú ngh', ' 035476370', NULL, NULL, 'tu123456', NULL, 'jostu2002@gmail.com', ' tu12345', NULL, NULL),
(28, 'tú', ' 035476370', NULL, NULL, 'tu123456', NULL, 'jostu@gmail.com', ' tu12345', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `KM_Ma` int(11) NOT NULL,
  `KM_Ten` varchar(100) NOT NULL,
  `KM_NgayBD` datetime NOT NULL DEFAULT current_timestamp(),
  `KM_NgayKT` datetime NOT NULL DEFAULT current_timestamp(),
  `KM_TyLeGG` float NOT NULL,
  `KM_NoiDung` varchar(1000) NOT NULL,
  `TC_Ma` int(11) NOT NULL,
  `KM_Hinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`KM_Ma`, `KM_Ten`, `KM_NgayBD`, `KM_NgayKT`, `KM_TyLeGG`, `KM_NoiDung`, `TC_Ma`, `KM_Hinh`) VALUES
(1, 'Chào năm học mới', '2022-11-23 00:00:00', '2022-11-09 00:00:00', 20, 'aaaa', 2, 'solati.jpg'),
(2, 'Tri ân khách hàng', '2022-11-25 00:00:00', '2022-11-10 00:00:00', 20, 'xxxxxxxxxxxxx', 4, '63079bf47dffc1983aa0c96936cfaf6b_tn.jpg'),
(3, 'Tết đoàn viên', '2022-11-21 04:15:00', '2022-11-30 04:15:00', 20, 'Khuyến mãi 20% cho các tuyến', 5, 'tet_landing_page_1920x690_op.jpg'),
(5, 'Chào mừng đại lễ', '2022-11-27 05:10:00', '2022-12-03 17:13:00', 30, 'Khuyến mãi 30% cho chuyến', 4, '7281203220e2d42c5c01d932dce74372.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaixe`
--

CREATE TABLE `loaixe` (
  `LX_Ma` int(11) NOT NULL,
  `LX_Ten` varchar(30) NOT NULL,
  `LX_SLGhe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaixe`
--

INSERT INTO `loaixe` (`LX_Ma`, `LX_Ten`, `LX_SLGhe`) VALUES
(1, 'Giường nằm', 30),
(2, 'Giường nằm ', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `NV_Ma` int(11) NOT NULL,
  `VT_Ma` int(11) NOT NULL,
  `NV_Ten` varchar(50) NOT NULL,
  `NV_Sdt` varchar(10) NOT NULL,
  `NV_DiaChi` varchar(100) NOT NULL,
  `NV_GioiTinh` varchar(4) NOT NULL,
  `NV_Email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `NV_Hinh` varchar(100) NOT NULL,
  `repassword` varchar(8) NOT NULL,
  `NV_NgaySinh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`NV_Ma`, `VT_Ma`, `NV_Ten`, `NV_Sdt`, `NV_DiaChi`, `NV_GioiTinh`, `NV_Email`, `password`, `NV_Hinh`, `repassword`, `NV_NgaySinh`) VALUES
(1, 1, 'Nguyễn Thị Hoa', '0123456789', 'Đồng Tháp', 'Nữ', 'hoa@gmail.com', '123456', 'Bo-suu-tap-hinh-nen-win-10-cuc-dep-full-scaled.jpg', '', '2022-11-09'),
(2, 1, 'Nguyễn Văn An', '0321456987', 'Tiền Giang', 'Nam', 'an@gmail.com', '123456', '23424.jpg', '', '2022-11-29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieudatve`
--

CREATE TABLE `phieudatve` (
  `PD_Ma` int(11) NOT NULL,
  `KH_Ma` int(11) NOT NULL,
  `G_Ma` int(11) NOT NULL,
  `PD_NgayDat` datetime NOT NULL,
  `PD_TrangThai` tinyint(1) NOT NULL,
  `C_Ma` int(11) NOT NULL,
  `PD_DiemDon` varchar(100) NOT NULL,
  `PD_TenKH` varchar(50) NOT NULL,
  `PD_EmailKH` varchar(50) NOT NULL,
  `PD_SdtKH` varchar(10) NOT NULL,
  `PD_TongTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `phieudatve`
--

INSERT INTO `phieudatve` (`PD_Ma`, `KH_Ma`, `G_Ma`, `PD_NgayDat`, `PD_TrangThai`, `C_Ma`, `PD_DiemDon`, `PD_TenKH`, `PD_EmailKH`, `PD_SdtKH`, `PD_TongTien`) VALUES
(4590, 4, 17, '2022-11-27 20:02:30', 1, 8, 'Cần Thơ', 'Trần văn Cam', 'tran@gmail.com', '0123456789', 400000),
(4591, 4, 18, '2022-11-27 20:02:30', 1, 8, 'Cần Thơ', 'Trần văn Cam', 'tran@gmail.com', '0123456789', 400000),
(4592, 6, 19, '2022-11-29 16:57:15', 0, 8, 'Cần thơ', 'Trúc Quyên Trần', 'trucquyen@gmail.com', ' 058254402', 600000),
(4593, 6, 20, '2022-11-29 16:57:15', 0, 8, 'Cần thơ', 'Trúc Quyên Trần', 'trucquyen@gmail.com', ' 058254402', 600000),
(4594, 6, 21, '2022-11-29 16:57:15', 0, 8, 'Cần thơ', 'Trúc Quyên Trần', 'trucquyen@gmail.com', ' 058254402', 600000),
(0, 28, 6, '2024-07-13 16:29:43', 1, 6, 'sss', 'tú', 'jostu@gmail.com', ' 035476370', 0),
(0, 28, 11, '2024-07-13 16:29:55', 1, 6, 'sss', 'tú', 'jostu@gmail.com', ' 035476370', 0),
(0, 28, 2, '2024-07-13 16:31:57', 1, 6, 'sdfsd', 'tú', 'jostu@gmail.com', ' 035476370', 300000),
(0, 28, 14, '2024-07-13 16:36:57', 1, 6, 'tét', 'tú', 'jostu@gmail.com', ' 035476370', 300000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taixe`
--

CREATE TABLE `taixe` (
  `TX_Ma` int(11) NOT NULL,
  `TX_Ten` varchar(50) NOT NULL,
  `TX_Sdt` varchar(10) NOT NULL,
  `TX_GPLX` int(11) NOT NULL,
  `TX_MatKhau` varchar(8) NOT NULL,
  `TX_Hinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taixe`
--

INSERT INTO `taixe` (`TX_Ma`, `TX_Ten`, `TX_Sdt`, `TX_GPLX`, `TX_MatKhau`, `TX_Hinh`) VALUES
(1, 'Trần Văn Nga', '0123654987', 12345678, '123456', ''),
(2, 'Trần Văn Mạnh', '0789456321', 14785236, '123456', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `TT_Ma` int(11) NOT NULL,
  `TT_PhuongThuc` varchar(30) NOT NULL,
  `PD_Ma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`TT_Ma`, `TT_PhuongThuc`, `PD_Ma`) VALUES
(21, 'Thanh toán bằng tiền mặt', 4590),
(22, 'Thanh toán bằng tiền mặt', 4591),
(23, 'Thanh toán bằng tiền mặt', 4592),
(24, 'Thanh toán bằng tiền mặt', 4593),
(25, 'Thanh toán bằng tiền mặt', 4594);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `T_Ma` int(11) NOT NULL,
  `T_Ten` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhthanh`
--

INSERT INTO `tinhthanh` (`T_Ma`, `T_Ten`) VALUES
(1, 'An Giang'),
(2, 'Bà Rịa – Vũng Tàu'),
(3, 'Đồng Tháp'),
(4, 'Cần Thơ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyenchay`
--

CREATE TABLE `tuyenchay` (
  `TC_Ma` int(11) NOT NULL,
  `TC_Ten` varchar(100) NOT NULL,
  `TC_Hinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tuyenchay`
--

INSERT INTO `tuyenchay` (`TC_Ma`, `TC_Ten`, `TC_Hinh`) VALUES
(1, 'Đồng Tháp - Cần Thơ', 'Do-ghe-limousine-proauto.vn_.jpg'),
(2, 'Cần Thơ - Bạc Liêu', 'noi-that-ford-tourneo-limousine.jpg'),
(4, 'Bạc Liêu - Đà Nẵng', 'ok5ok.jpg'),
(5, 'Lâm Đồng  - Hồ Chí Minh', 'xe-limousine-sai-gon-tay-ninh-hue-nghia-1.jpg'),
(10, 'Lâm Đồng  - Hồ Chí Minh', 'ok5ok.jpg'),
(11, 'Sóc Trăng - Đồng Tháp', 'Do-ghe-limousine-SUV-con-ngua-640x427.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

CREATE TABLE `vaitro` (
  `VT_Ma` int(11) NOT NULL,
  `VT_Ten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `vaitro`
--

INSERT INTO `vaitro` (`VT_Ma`, `VT_Ten`) VALUES
(1, 'Bán vé'),
(2, 'CSKH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `LX_Ma` int(11) NOT NULL,
  `X_Hieu` varchar(20) NOT NULL,
  `X_MauSac` varchar(20) NOT NULL,
  `X_NamSX` date NOT NULL DEFAULT current_timestamp(),
  `X_Ma` int(11) NOT NULL,
  `X_BienSo` varchar(15) NOT NULL,
  `X_Hinh` varchar(100) NOT NULL,
  `G_Ma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`LX_Ma`, `X_Hieu`, `X_MauSac`, `X_NamSX`, `X_Ma`, `X_BienSo`, `X_Hinh`, `G_Ma`) VALUES
(1, 'THACO', 'Đỏ', '2017-11-15', 1, '66A-4567.87', 'xe-di-Nghe-An-2.jpg', 0),
(2, 'Toyota', 'Đen', '2017-12-21', 2, '66L-1234.56', 'xe-35-cho-nha-trang-1.jpg', 0),
(1, 'Audi', 'Trắng', '2022-11-16', 3, '67A-1234.58', '1.jpg', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`KH_Ma`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `KH_Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
