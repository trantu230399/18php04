-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 09:15 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `18php04_shop3`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `password`) VALUES
(1, 'tu', '230399'),
(2, 'tu', '230399'),
(3, 'tu', '230399'),
(4, 'tu', '230399'),
(5, 'tu', '230399'),
(6, 'tu', '230399'),
(7, 'tu', '230399'),
(8, 'tu', '230399'),
(9, 'tu', '230399'),
(10, 'tu', '230399'),
(11, 'tu', '230399'),
(12, 'tu', '230399'),
(13, 'tu', '230399'),
(14, 'tu', '230399'),
(15, 'tu', '230399'),
(16, 'tu', '230399'),
(17, 'tu', '230399'),
(18, 'tu', '230399'),
(19, 'tu', '230399'),
(20, 'tu', '230399'),
(21, 'tu', '230399'),
(22, 'tu', '230399');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`id`, `cart_id`, `product_id`) VALUES
(1, 0, 1),
(2, 1, 1),
(3, 1, 4),
(4, 1, 4),
(5, 1, 4),
(6, 1, 4),
(7, 1, 4),
(8, 1, 4),
(9, 1, 4),
(10, 1, 4),
(11, 1, 4),
(12, 1, 4),
(13, 1, 4),
(14, 1, 1),
(15, 1, 1),
(16, 1, 1),
(17, 1, 1),
(18, 1, 1),
(19, 1, 1),
(20, 1, 1),
(21, 1, 1),
(22, 1, 1),
(23, 1, 1),
(24, 1, 1),
(25, 1, 1),
(26, 1, 1),
(27, 1, 1),
(28, 1, 1),
(29, 1, 1),
(30, 1, 1),
(31, 1, 1),
(32, 1, 1),
(33, 1, 1),
(34, 1, 1),
(35, 1, 1),
(36, 1, 1),
(37, 1, 4),
(38, 1, 1),
(39, 1, 1),
(40, 1, 13),
(41, 1, 13),
(42, 1, 13),
(43, 1, 13),
(44, 1, 13),
(45, 1, 13),
(46, 1, 13),
(47, 1, 13),
(48, 1, 13),
(49, 1, 13),
(50, 1, 13),
(51, 1, 4),
(52, 1, 1),
(53, 1, 1),
(54, 0, 1),
(55, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `name`, `price`, `image`, `description`) VALUES
(1, 2, 'Samsung', 800112000, '5bc351b05ba59samsung.png', 'Điện thoại Samsung giá rẻ, pin khủng 3300mAh, 2 sim hỗ trợ 4G. Bao xài 1 tháng (nếu lỗi) Selfie xóa phông, chụp vô đối trong bóng tối, màn hình tràn viền 6\". Mua ngay! Trả Góp 0% Lãi Suất. Bảo Hành 12 Tháng. Giao Hàng Chỉ Trong 1 Giờ.'),
(4, 1, 'Apple', 500, 'product4.jpg', 'iPhone X là một điện thoại thông minh được Apple Inc. thiết kế, phát triển và ... X được định vị như một mô hình cao cấp, nhằm giới thiệu công nghệ tiên tiến.'),
(13, 2, 'samsung', 10002, '5bc351ebcbd03samsung.png', 'Điện thoại Samsung giá rẻ, pin khủng 3300mAh, 2 sim hỗ trợ 4G. Bao xài 1 tháng (nếu lỗi) Selfie xóa phông, chụp vô đối trong bóng tối, màn hình tràn viền 6\". Mua ngay! Trả Góp 0% Lãi Suất. Bảo Hành 12 Tháng. Giao Hàng Chỉ Trong 1 Giờ.'),
(14, 5, 'Sony1', 1000, '5bc352925b3c7sony.jpg', NULL),
(15, 6, 'Vivo1111', 1000, '5bc352d8ee2c8vivo.jpg', NULL),
(16, 3, 'Oppo', 1000, '5bc352f0e17eboppo.png', 'Nhằm giúp người dùng hiểu thêm về quy trình sản xuất điện thoại, mới đây, kênh Youtube OPPO Vietnam đã đăng tải đoạn video clip mô tả các công đoạn đầy ...');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Oppo'),
(4, 'Xiaomi'),
(5, 'Sony'),
(6, 'Vivo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `images` varchar(150) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `images`, `url`, `date`) VALUES
(1, 'Tráº§n VÃµ Anh TÃº', 'tu', '230399', 'tvat.jpg', 'images/tvat.jpg', NULL),
(2, 'Nguyá»…n Thá»‹ BÃ­ch Tháº£o', 'thao', '270499', 'thao.jpg', 'images/thao.jpg', NULL),
(3, 'Nguyá»…n Thá»‹ Kim NgÃ¢n', 'ngan', '200299', 'kimngan.jpg', 'images/kimngan.jpg', NULL),
(4, 'Mai Vi', 'vi', '1', 'maivi.jpg', 'images/maivi.jpg', NULL),
(5, 'NhÆ° Quá»³nh', 'quynh', '240299', 'quynh.jpg', 'images/quynh.jpg', NULL),
(6, 'Tráº§n Minh Nhá»±t', 'nhut', '150499', 'nhut.jpg', 'images/nhut.jpg', NULL),
(7, 'TÃº Nguyá»…n', 'nguyen', '1', 'nguyen.jpg', 'images/nguyen.jpg', NULL),
(8, 'Mai VÄƒn Triá»‡u VÅ©', 'vu', '071299', 'vu.jpg', 'images/vu.jpg', NULL),
(9, 'Gia HÃ¢n', 'han', '010899', 'han.jpg', 'images/han.jpg', NULL),
(10, 'Tráº§n Anh Tin', 'tin', '270999', 'tin.jpg', 'images/tin.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
