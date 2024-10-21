-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2024 at 10:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maher`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `id` bigint(12) NOT NULL,
  `p_id` bigint(12) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `price` bigint(12) NOT NULL,
  `qty` bigint(12) NOT NULL,
  `total` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`id`, `p_id`, `u_id`, `price`, `qty`, `total`) VALUES
(25, 43, 'audu', 1700, 1, 1700),
(26, 39, 'kabiru', 2000, 1, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` bigint(12) NOT NULL,
  `p_id` bigint(12) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `location` text NOT NULL,
  `delivered` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `p_id`, `u_id`, `name`, `mobile`, `email`, `location`, `delivered`) VALUES
(56, 43, 'audu', 'Kabiru Auwal', 9030402030, 'kabiru@gmaiil.com', 'no. 10 samaru', b'1'),
(57, 39, 'kabiru', 'Kabiru Auwal', 9030402030, 'kabiru@gmaiil.com', 'no. 10 samaru', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_man`
--

CREATE TABLE `delivery_man` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_man`
--

INSERT INTO `delivery_man` (`id`, `fname`, `phone`, `address`, `username`, `password`) VALUES
(1, 'Audu Sani', 2147483647, 'No. 1 kaura street', 'audu', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `food_cat`
--

CREATE TABLE `food_cat` (
  `id` bigint(12) NOT NULL,
  `catnm` varchar(100) NOT NULL,
  `sub_cat` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `food_cat`
--

INSERT INTO `food_cat` (`id`, `catnm`, `sub_cat`) VALUES
(31, 'tava', 'Rotla'),
(48, 'tava', 'Ghee Rotla'),
(49, 'tava', 'Bhakhari'),
(50, 'tava', 'Ghee Bhakhari'),
(51, 'tava', 'Tava Paratha'),
(52, 'tava', 'Rotlanu Churmu'),
(53, 'tava', 'Bhakhari nu Churmu'),
(54, 'tava', 'Dryfruit Churmu'),
(55, 'tava', 'Vagharelo Rotlo Dry'),
(56, 'tava', 'Vagharelo Rotlo Dahi'),
(57, 'swallows', 'Eba'),
(58, 'swallows', 'Fufu'),
(59, 'swallows', 'Amala'),
(60, 'soups', 'Egusi Soup'),
(61, 'soups', 'Ogbono Soup'),
(62, 'soups', 'Afang Soup'),
(63, 'rice dishes', 'Jollof Rice'),
(64, 'rice dishes', 'Fried Rice'),
(65, 'rice dishes', 'White Rice & Stew'),
(66, 'grilled and fried foods', 'Grilled Chicken'),
(67, 'grilled and fried foods', 'Fried Chicken'),
(68, 'grilled and fried foods', 'Grilled Fish'),
(69, 'soups', 'Bitterleaf Soup'),
(70, 'swallows', 'Wheat'),
(71, 'rice dishes', 'Ofada Rice'),
(72, 'grilled and fried foods', 'Fried Fish'),
(73, 'grilled and fried foods', 'Grilled Beef'),
(74, 'soups', 'Okra Soup'),
(75, 'swallows', 'Semo'),
(76, 'soups', 'Oha Soup');

-- --------------------------------------------------------

--
-- Table structure for table `food_parcel`
--

CREATE TABLE `food_parcel` (
  `id` bigint(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `food_id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(12) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(11, 'img/f1.jpeg'),
(12, 'img/f2.jpeg'),
(13, 'img/f3.jpeg'),
(14, 'img/f4.jpeg'),
(15, 'img/f5.jpeg'),
(16, 'img/f6.jpeg'),
(17, 'img/f7.jpeg'),
(18, 'img/f8.jpeg'),
(19, 'img/f9.jpeg'),
(20, 'img/f10.jpeg'),
(21, 'img/f11.jpeg'),
(22, 'img/f12.jpeg'),
(23, 'img/f13.jpeg'),
(24, 'img/f14.jpeg'),
(25, 'img/f15.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(12) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_cat` varchar(120) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` bigint(6) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category`, `sub_cat`, `title`, `description`, `price`, `image`) VALUES
(35, 'swallows', 'Amala', 'Amala with Ewedu', 'Traditional yam flour served with ewedu and assorted meats.', 1500, 'mimg/f1.jpeg'),
(36, 'soups', 'Egusi', 'Egusi Soup with Goat Meat', 'Rich melon seed soup cooked with goat meat, served with your choice of swallow.', 2000, 'mimg/f2.jpeg'),
(37, 'rice dishes', 'Jollof Rice', 'Party Jollof Rice', 'Popular West African rice dish cooked in tomato sauce, served with fried plantain and chicken.', 2500, 'mimg/f3.jpeg'),
(38, 'grilled and fried foods', 'Grilled Chicken', 'Spicy Grilled Chicken', 'Chicken marinated in spicy sauce and grilled to perfection.', 1800, 'mimg/f4.jpeg'),
(39, 'swallows', 'Pounded Yam', 'Pounded Yam with Okro Soup', 'Smooth and soft pounded yam served with flavorful okro soup and assorted meats.', 2000, 'mimg/f5.jpeg'),
(40, 'soups', 'Ogbono', 'Ogbono Soup with Stockfish', 'Draw soup made from wild mango seeds, cooked with stockfish and assorted meats.', 2200, 'mimg/f6.jpeg'),
(41, 'rice dishes', 'Fried Rice', 'Nigerian Fried Rice', 'Colorful fried rice mixed with vegetables, shrimps, and beef liver, served with chicken.', 2700, 'mimg/f7.jpeg'),
(42, 'grilled and fried foods', 'Fried Fish', 'Crispy Fried Fish', 'Golden and crispy fried fish served with a side of spicy sauce.', 2000, 'mimg/f8.jpeg'),
(43, 'swallows', 'Eba', 'Eba with Ogbono Soup', 'Gari (cassava flakes) served with drawy ogbono soup and assorted meats.', 1700, 'mimg/f9.jpeg'),
(44, 'soups', 'Afang', 'Afang Soup', 'Delicious and nutritious soup made from okazi leaves, served with your choice of swallow.', 2300, 'mimg/f10.jpeg'),
(45, 'rice dishes', 'White Rice', 'White Rice with Ofada Sauce', 'Steamed white rice served with spicy and flavorful ofada sauce.', 2400, 'mimg/f11.jpeg'),
(46, 'grilled and fried foods', 'Grilled Fish', 'Grilled Tilapia Fish', 'Whole tilapia fish grilled with spices, served with vegetables.', 3000, 'mimg/f12.jpeg'),
(47, 'swallows', 'Fufu', 'Fufu with Bitterleaf Soup', 'Cassava fufu served with traditional bitterleaf soup and assorted meats.', 2000, 'mimg/f13.jpeg'),
(48, 'soups', 'Oha', 'Oha Soup', 'Savory and rich soup made with oha leaves, served with your choice of swallow.', 2500, 'mimg/f14.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` bigint(12) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `userid`, `password`, `email`, `full_name`, `phone_number`, `address`, `gender`, `dob`) VALUES
(9, 'Kabiru', '123456', 'kabiru@gmaiil.com', 'Kabiru Auwal', '09030402030', 'no. 10 samaru', 'Male', '2005-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `review`, `description`) VALUES
(8, 'abba musa', 'Exellent', 'very delicious food'),
(9, 'kabir auwal ', 'Exellent', 'the best restaurant ever');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_man`
--
ALTER TABLE `delivery_man`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_cat`
--
ALTER TABLE `food_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `delivery_man`
--
ALTER TABLE `delivery_man`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_cat`
--
ALTER TABLE `food_cat`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
