-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 05:17 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ubiz`
--
CREATE DATABASE IF NOT EXISTS `ubiz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ubiz`;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `idcat` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `idcat`, `title`, `img`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tiêu đề', 'Ảnh', 'Nội Dung', '2022-11-29 03:55:42', '2022-11-30 07:29:56'),
(2, 2, 'Lệnh cấm Wechat, Tiktok của Trump sẽ có tác động gì với chúng ta', 'Ảnh thôi', 'Lệnh hành pháp của Tổng thống Mỹ cấm ứng dụng nhắn tin ở Mỹ có thể ảnh hưởng đến truyền thông kinh doanh. Khách hàng của Apple lo lắng WeChat có thể bị rút khỏi câu chuyện ứng dụng, khiến họ rơi vào tình thế khó xử. Đọc thêm các tin tức: Trung Quốc thành […]', '2022-11-29 08:06:07', '2022-11-30 07:30:01'),
(3, 1, '12', '22', '32', '2022-11-29 08:33:30', '2022-11-30 07:30:04'),
(7, 1, '123', '123', '123', '2022-11-29 08:38:56', '2022-11-30 07:41:47'),
(8, 2, 'tin tức KM', 'sau nhé', 'Được KM nhìu ưu đãi nè', '2022-11-30 07:44:26', NULL),
(9, 3, 'Trang SỨc bị gỉ', 'Nhiều ảnh', 'Nhiều trang sức hiện này thật tình...', '2022-11-30 08:00:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_cat`
--

CREATE TABLE `news_cat` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_cat`
--

INSERT INTO `news_cat` (`id`, `Name`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'Xu hướng thời trang', 0, '2022-11-30 04:18:44', '2022-11-29 21:28:44'),
(2, 'Khuyến mãi', 1, '2022-11-30 04:18:44', NULL),
(3, 'Trang sức đồ đồ 1', 0, '2022-11-30 00:59:01', '2022-11-30 00:59:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_cat`
--
ALTER TABLE `news_cat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news_cat`
--
ALTER TABLE `news_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
