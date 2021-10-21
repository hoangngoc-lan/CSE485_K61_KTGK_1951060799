-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 08:27 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `patient`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patient`
--

CREATE TABLE `patient` (
  `patientid` varchar(30) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `mobile` float DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `height` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `blood_type` varchar(20) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `modified_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `patient`
--

INSERT INTO `patient` (`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`) VALUES
('BN01', 'lan', 'Hoang', '2011-07-01', 'nu', 399612000, 'lanhoaiquy@gmail.com', 165, 70, 'A', '0000-00-00', '2001-05-11'),
('BN02', 'hang', 'hoang', '0000-00-00', 'nu', 99658900, 'hoanghang@gmail.com', 150, 40, 'A', '2001-11-02', '2001-10-10'),
('BN03', 'linh', 'le', '0000-00-00', 'nam', 99657300, 'namng@gmail.com', 160, 45, 'C', '2001-03-11', '2001-05-02'),
('BN04', 'hoai', 'Nguyen', '0000-00-00', 'nam', 99652300, 'hoaing@gmail.com', 170, 60, 'O', '2000-02-12', '2000-06-10'),
('BN05', 'quy', 'Phan', '0000-00-00', 'nam', 99657100, 'quyhang@gmail.com', 180, 70, 'AB', '2001-07-11', '2000-09-03');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
