-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 05:23 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(12) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `price`, `description`, `photo`) VALUES
(1, 'six pack care (Pro)23 in 1 exercises machine', 'Price-85000ks', 'six pack care (Pro)23 in 1 exercises machine!Price-85000ks(09407146127)\r\nQuality အကောင်းဆုံးနဲ့ Last New Model မှသဘောကျသူများအတွက် ရွေးချယ်စရာ\r\nDesign အသစ်နဲ့ထုတ်လုပ်ထားတဲ့ Model အသစ်\r\nsix pack care (Pro)23 in 1 exercises machine!Price-85000ks(09407146127', '1.jpg'),
(2, '50kg Weight Box\r\nPrice- 145,000/ကျပ်\r\n\r\n', '', '50kg Weight Box\r\nPrice- 145,000/ကျပ်\r\nContact Us \r\n09407146127\r\nWeight Box တစ်လုံး၀ယ်ယူထားရုံနဲ့ ခန္ခာကိုယ်အပေါ်ပိုင်း လေ့ကျင့်ခန်းတွေဖြစ်တဲ့ဆုံ လက်မောင်း ရင်အုပ် ဂုတ်\r\nလက်ဖျံ စတာတွေအပြင် ခန္ခာကိုယ်အောက်ပိုင်း\r\nလေ့ကျင့်ခန်းတွေဖြစ်တဲ့ ပေါင်ရှေ့ ပေါင်နောက် ', 'FB_IMG_1592869694020.jpg'),
(3, '4 in 1 လမ်းလျှောက်စက်(Pradayl Brand)PRICE - 160,000Ks', '', '4 in 1 လမ်းလျှောက်စက်(Pradayl Brand)PRICE - 160,000Ks\r\nFree Installation!Free Delivery Charges For YGN Downtown Area!\r\nMr.Shop Myanmar Online Shop (Call Us - 09407146127)\r\n2020 ရဲ့ လျှပ်စစ်မီးမလို manual ဒီဇိုင်းသစ် Pradayl လမ်းလျှောက်စက်\r\n \r\nမော်တာမပါတာက', 'viber_image_2020-06-12_16-08-47.jpg'),
(4, 'Mini stepper (without handle)\r\n\r\nဈေးနှုန်း -38000ks', '', 'အိမ်တွင်အလွယ်တကူ Mini stapper စက်လေးနဲ့Smart ကျကျ လမ်းလျောက်ပြီး ကြွက်သားလေ့ကျင့်ခန်း အဆီချဝိတ်ထိန်းလိုသူများအတွက်\r\n1.Mini stepper\r\nဈေးနှုန်း -38000ks\r\n**ကဲ ကိုကိုတို့မမတို့ရေဒီစက်လေးရှိရုံနဲ.အားလုံး Ok ပြီနော်။\r\nနွေ မိုး ဆောင်းရာသီ သုံးမျိုးလုံးး အားကစား', '102404495_3027079854042693_3659682166107391474_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE `gym` (
  `id` int(12) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `price1` varchar(255) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`id`, `name1`, `price1`, `description1`, `photo1`) VALUES
(1, '4in 1cross trainer(Price-200,000ks)', 'Price-200,000ks', '', 'received_999162807187199.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cr_date` datetime NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `name`, `price`, `quantity`, `fname`, `phone`, `address`, `cr_date`, `status`) VALUES
(1, 'six pack care (Pro)23 in 1 exercises machine', 'Price-85000ks', 1, 'Aung Ye Hein', '09-692728373', 'thanlyin', '2020-08-03 02:14:46', 0),
(2, '50kg Weight BoxPrice- 145,000/ကျပ်', 'Price-85000ks', 1, 'Aung Ye Hein', '09-692728373', 'thanlyin', '2020-08-03 18:54:22', 0),
(3, '4 in 1 လမ်းလျှောက်စက်(Pradayl Brand)PRICE - 160,000Ks', 'Price-85000ks', 1, 'Aung Ye Hein', '09-692728373', 'thanlyin', '0000-00-00 00:00:00', 0),
(4, 'six pack care (Pro)23 in 1 exercises machine', 'Price-85000ks', 1, 'Aung Ye Hein', '09-692728373', 'thanlyin', '2020-08-03 19:20:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gym`
--
ALTER TABLE `gym`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
