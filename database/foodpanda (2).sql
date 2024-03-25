-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 01:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodpanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `address_name` varchar(255) DEFAULT NULL,
  `address_type` enum('Home','Work','Other') DEFAULT NULL,
  `delivery_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `address_name`, `address_type`, `delivery_id`, `customer_id`, `latitude`, `longitude`) VALUES
(9, 'kang meas kampong cham', 'Home', 26, 7, '11.9504688', '105.2707989'),
(11, 'khan sen sok', 'Work', 26, 7, '11.5785557', '104.8692475'),
(12, 'Khan mean chey phnom penh', 'Work', 5, 37, '11.5315089', '104.8984702'),
(13, 'Ou Baek K\'am', 'Work', 5, 39, '11.5508326', '104.8746526');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(11) NOT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `cate_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `cate_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cate_id`, `restaurant_id`, `cate_name`, `description`, `cate_img`) VALUES
(2, 13, 'American', 'Hello world', 'Burger.png'),
(4, 13, 'Khmer', 'Hello world', 'Salad.png'),
(8, 12, 'Italian', 'Hello world', 'Pizza.png'),
(9, 12, 'Drink', 'Hello world', 'Coffee.png'),
(10, 10, 'Thai', 'How do you want to get started', 'Fries.png'),
(11, 10, 'France', 'Hello, this is france food\r\n', 'france.png'),
(15, 9, 'Nom Khmer', 'fsdfhajdf', 'k\'tom.png'),
(16, 9, 'Japanese fried rice', 'hello world', 'Japanese-food-omurice-1024x683-removebg-preview.png');

-- --------------------------------------------------------

--
-- Stand-in structure for view `cate_food`
-- (See below for the actual view)
--
CREATE TABLE `cate_food` (
`cate_id` int(11)
,`restaurant_id` int(11)
,`cate_name` varchar(255)
,`cate_img` varchar(255)
,`food_id` int(11)
,`food_name` varchar(255)
,`image` varchar(255)
,`quantity` int(11)
,`price` int(11)
,`rating` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkout_id` int(11) NOT NULL,
  `food_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price_amount` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `checkout_date` datetime DEFAULT current_timestamp(),
  `food_name` varchar(255) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`checkout_id`, `food_id`, `quantity`, `price_amount`, `user_id`, `checkout_date`, `food_name`, `order_id`) VALUES
(38, 12, 1, 5, 37, '2024-03-24 13:10:48', 'Nok ah kour', 18),
(39, 14, 2, 5, 7, '2024-03-24 15:18:30', 'plea sach kor', 19),
(40, 5, 1, 3, 37, '2024-03-24 15:24:41', 'Unknown food', 20),
(41, 11, 1, 5, 37, '2024-03-24 15:24:41', 'Nom banh jok', 20),
(42, 14, 2, 5, 39, '2024-03-24 22:44:31', 'plea sach kor', 21);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `food_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `favorite_id` int(11) NOT NULL,
  `food_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food_id` int(11) NOT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `food_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT 1,
  `price` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT 1,
  `discount` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_id`, `cate_id`, `food_name`, `image`, `quantity`, `price`, `rating`, `discount`) VALUES
(2, 8, 'Unknown', 'popular1.png', 50, 5, 5, 0),
(3, 8, 'Italian desert', 'popular8.png', 100, 5, 5, 0),
(5, 2, 'Unknown food', 'popular2.png', 45, 3, 4, 0),
(8, 10, 'Tong yam', 'thai food.jpg', 50, 5, 3, 0),
(9, 11, 'Omelet', 'france food.jpg', 20, 10, 4, 0),
(10, 9, 'Pokis', 'pokis.jpg', 100, 2, 4, 0),
(11, 2, 'Nom banh jok', 'Nom banh jok.jpg', 100, 5, 4, 0),
(12, 15, 'Nok ah kour', 'khmer desert1.jpg', 50, 5, 4, 0),
(13, 15, 'pumpkin desert ', 'khmer desert2.jpg', 25, 5, 5, 0),
(14, 4, 'plea sach kor', 'plea sach jrok.jpg', 50, 5, 5, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `food_info`
-- (See below for the actual view)
--
CREATE TABLE `food_info` (
`food_id` int(11)
,`food_name` varchar(255)
,`image` varchar(255)
,`quantity` int(11)
,`price` int(11)
,`food_rate` int(11)
,`discount` int(11)
,`cate_id` int(11)
,`cate_name` varchar(255)
,`cate_img` varchar(255)
,`description` varchar(255)
,`restaurant_id` int(11)
,`owner_id` int(11)
,`restaurant_name` varchar(255)
,`location` varchar(255)
,`email` varchar(255)
,`opening_hour` int(11)
,`contact_info` varchar(255)
,`restaurant_img` varchar(255)
,`restaurant_rate` enum('1','2','3','4','5')
,`restaurant_desc` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT 'Cambodia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `city`, `country`) VALUES
(1, 'Phnom penh', 'Cambodia'),
(2, 'Kampong cham', 'Cambodia'),
(3, 'Kandal', 'Cambodia'),
(4, 'Battombong', 'Cambodia'),
(5, 'Siem reap', 'Cambodia');

-- --------------------------------------------------------

--
-- Stand-in structure for view `notifications`
-- (See below for the actual view)
--
CREATE TABLE `notifications` (
`delivery_id` int(11)
,`order_status` varchar(255)
,`address_id` int(11)
,`deliver_date` date
,`customer_id` int(11)
,`address_name` varchar(255)
,`address_type` enum('Home','Work','Other')
,`first_name` varchar(255)
,`last_name` varchar(255)
,`email` varchar(255)
,`phone` varchar(255)
,`profile` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `delivery_id` int(11) DEFAULT NULL,
  `order_status` varchar(255) DEFAULT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `restaurant_name` varchar(255) DEFAULT NULL,
  `deliver_date` date DEFAULT NULL,
  `restaurant_img` varchar(255) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `delivery_id`, `order_status`, `order_date`, `restaurant_name`, `deliver_date`, `restaurant_img`, `address_id`) VALUES
(18, 37, 26, 'On progress', '2024-03-24 13:10:48', 'KPC 168', NULL, 'pexels-lawrence-suzara-1581554.jpg', 9),
(19, 7, 26, 'On progress', '2024-03-24 15:18:30', 'Kon nak Siemeap', NULL, 'pexels-igor-starkov-1055058.jpg', 11),
(20, 37, 5, 'On progress', '2024-03-24 15:24:41', 'Kon nak Siemeap', NULL, 'pexels-igor-starkov-1055058.jpg', 12),
(21, 39, 5, 'On progress', '2024-03-24 22:44:31', 'Kon nak Siemeap', NULL, 'pexels-igor-starkov-1055058.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `checkout_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `valid_through` varchar(255) DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  `card_name` varchar(255) DEFAULT NULL,
  `payment_date` datetime DEFAULT current_timestamp(),
  `payment_amount` int(11) DEFAULT NULL,
  `promo_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `user_id`, `card_number`, `valid_through`, `cvv`, `card_name`, `payment_date`, `payment_amount`, `promo_code`) VALUES
(21, 37, 'Kon khmer', '12/24', 1231, 'Kon khmer', '2024-03-24 13:10:48', 5, 'hi123'),
(22, 7, 'master card', '12/24', 1234, 'master card', '2024-03-24 15:18:30', 5, 'korng369'),
(23, 37, 'master card', '12/24', 1234, 'master card', '2024-03-24 15:24:41', 8, 'mengkorng123'),
(24, 39, 'visa card', '12/24', 1232, 'visa card', '2024-03-24 22:44:31', 5, 'chhuneii123');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `restaurant_name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `opening_hour` int(11) DEFAULT NULL,
  `contact_info` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `restaurant_img` varchar(255) DEFAULT NULL,
  `rating` enum('1','2','3','4','5') DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `owner_id`, `restaurant_name`, `location`, `email`, `password`, `opening_hour`, `contact_info`, `description`, `restaurant_img`, `rating`) VALUES
(9, 11, 'KPC 168', 'Kampong Cham', 'kampong.cham@restaurant.com', '$2y$10$vZORMEt2r3XjKxFMDWKsnOug0BZvgb5OvtmKFJI9ZYK740YVkclES', 8, '+1 (124) 985-1702', 'gfsglk', 'pexels-lawrence-suzara-1581554.jpg', '1'),
(10, 9, 'Khmerhouse', 'Battombong', 'battombong.restaurant@email.com', '$2y$10$xM5JSvFkL6T2ikbfweZ7FeD.ENYKPqfCc9.KMyFiZCoRIy8T5HERa', 8, '+1 (146) 552-6397', 'herasdkfa;s', 'pexels-huy-phan-1383776.jpg', '1'),
(12, 8, 'KFC Cambodia', 'Phnom Penh', 'kfc.cambodia@restaurant.com', '$2y$10$bhuYDhooln9VNJ5Mig2TCObc7Nm8XuJNDVceYSnaUfmB7210CXQk6', 8, '+1 (413) 887-4212', 'hdasdfha', 'pexels-zak-chapman-2290753.jpg', '1'),
(13, 4, 'Kon nak Siemeap', 'Siem Reap', 'siemreap.restaurant@emai.com', '$2y$10$xlqURWvw0joW72TiiRRPKucM/x59vnE7btkH10La6IwqJojLFlwQ.', 8, '+1 (159) 787-4677', 'fasdfhadf', 'pexels-igor-starkov-1055058.jpg', '1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `restaurant_info`
-- (See below for the actual view)
--
CREATE TABLE `restaurant_info` (
`restaurant_id` int(11)
,`first_name` varchar(255)
,`last_name` varchar(255)
,`profile` varchar(255)
,`restaurant_name` varchar(255)
,`location` varchar(255)
,`email` varchar(255)
,`opening_hour` int(11)
,`contact_info` varchar(255)
,`description` varchar(255)
,`restaurant_img` varchar(255)
,`rating` enum('1','2','3','4','5')
);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Owner'),
(3, 'Delivery'),
(4, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `registration_date` datetime DEFAULT current_timestamp(),
  `role_id` int(11) DEFAULT NULL,
  `verify_codes` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `phone`, `profile`, `registration_date`, `role_id`, `verify_codes`) VALUES
(3, 'mengkorng', 'ly', 'mengkorng.ly@admin.passerellesnumeriques.org', '$2y$10$JVRwfiaALFs4J4jCtUG6DejTxcRlQoLj2shkQ5G/MvhsyteYAP8Sa', '+1 (403) 454-5718', 'photo_2023-11-03_22-01-29.jpg', '2024-03-09 14:32:46', 1, NULL),
(4, 'LIEP', 'TOEUR', 'liep.toeur@owner.passerellesnumeriques.org', '$2y$10$6lHsg0tF4P8Zd.he7ME9Be1XrOJDhUuHXW7w5gE/81xlDacnpHe5a', '+1 (413) 887-4212', 'photo_2024-02-05_08-38-15.jpg', '2024-03-09 16:41:22', 2, NULL),
(5, 'chhun eii', 'kokko', 'chhuneii.koko@delivery.passerellesnumeriques.org', '$2y$10$020QnfS7kmGQEnsg7pYJmOLQhTncWeMUD7hglBX2L1Xfmd6LBxJ.u', '+1 (413) 887-4212', 'photo_2024-03-07_13-26-04.jpg', '2024-03-09 16:51:56', 3, NULL),
(6, 'mengkorng', 'smossne', 'mengkorng.ly@deliverysmos.passerellesnumeriques.org', '$2y$10$XMQzpohUKbCwi2g5gyJ6wO4Df6Ae/myD27wvy/pI6ONLPyOJ98o0e', '+1 (146) 552-6397', 'photo_2023-11-03_22-01-29.jpg', '2024-03-10 00:05:08', 3, NULL),
(7, 'mengkorng', 'ly', 'mengkorng.ly@customer.passerellesnumeriques.org', '$2y$10$1YVvyNlo1iz6jfK6k/ObZu07vI0gTA6Yucw5G1O5n5zkPLtWm.Fze', '+1 (403) 454-5718', 'photo_2023-11-03_22-01-29.jpg', '2024-03-10 01:28:13', 4, NULL),
(8, 'DAVIT', 'CHOEUN', 'davit.choeun@owner.passerellesnumeriques.org', '$2y$10$yyHkGXdQ8RWpwj8VOTfT/.xySIlM45/R5Vswn3AmCxsQmc7/IZN0S', '+1 (256) 547-6668', 'photo_2024-03-06_10-57-53.jpg', '2024-03-10 02:55:49', 2, NULL),
(9, 'CHHUN EII', 'OEUY', 'chhuneii.oeuy@owner.passerellesnumeriques.org', '$2y$10$OoGla5omDCaojLM6nTowjuLoaHavWGv0pBTh68Ow4pxBfDqOlOR1q', '+1 (413) 887-4212', 'photo_2024-02-25_16-18-50.jpg', '2024-03-10 12:03:40', 2, NULL),
(10, 'thary', 'oeun', 'thary.oeun@customer.passerellesnumeriques.org', '$2y$10$aDZhDbmRYJGE5hnUFtkKP.hcgckcsu.FaWA5cM930l3dK582aSplW', '0979899310', 'thary-customer.jpg', '2024-03-10 14:55:22', 4, NULL),
(11, 'THARY', 'OEUN', 'thary.oeun@owner.passerellesnumeriques.org', '$2y$10$lE6.si3kgM0csIBwig1umelvNZq6Y3wNXZwV6i8C14cPqXXVLHt7W', '+1 (124) 985-1702', 'photo_2023-12-04_20-05-22.jpg', '2024-03-11 14:05:34', 2, NULL),
(24, 'mengkorng123', 'ly', 'mengkorng.ly@newcustomer.passerellesnumeriques.org', '$2y$10$3PeKc36DOh7FQO2Mi4GLCu4rufhXaSk3QM6ClQpwgCNnDmgW18ZLG', '+1 (526) 259-6055', NULL, '2024-03-12 11:58:47', 4, NULL),
(25, 'DAVIT', 'CHOEUN', 'davit.choeun@customer1.passerellesnumeriques.org', '$2y$10$HYdBPtQ.qiXMil0o1EJOF.bVx0a/p0xjX2wPsY1JFKBHSHfK.K43q', '+1 (464) 441-4173', NULL, '2024-03-12 20:55:18', 4, NULL),
(26, 'Thary', 'oeun', 'thary.oeun@delivery.passerellesnumeriques.org', '$2y$10$3Jft1FiLSlo1jITaXh5XKuBLLCAqEBaKftidILAWiklROJZlGj.Zq', '+1 (335) 247-6512', 'photo_2023-12-04_20-05-22.jpg', '2024-03-21 07:58:27', 3, NULL),
(27, 'Chin', 'Zencara', 'czencara@gmail.com', '$2y$10$ofmTNnT7pJov81Q32vPSOu0W0weDdxzINGfogshM5zRWfS9q/AEIC', '016659556', NULL, '2024-03-23 11:39:29', 4, 0),
(37, 'korng', 'customer', 'mengkorng.ly@student.passerellesnumeriques.org', '$2y$10$XuuI/WPxnHheSCWa526bGuBKk0ANkat2Zd6VaqlsOp7ySaX2tAwhi', '087861976', 'yi sun shin.jpg', '2024-03-24 02:20:01', 4, 0),
(38, 'DAVIT ', 'CHOEUN(delivery)', 'davit.choeun@student.passerellesnumeriques.org', '$2y$10$57hp7AJSlK2dbEDgIt4FYOGB3czi0JUoInjLAnxurGfKmojvphs/m', '+1 (413) 887-4212', NULL, '2024-03-24 18:07:54', 3, NULL),
(39, 'CHHUN EII', 'OEUY(customer)', 'chhuneii.oeuy@student.passerellesnumeriques.org', '$2y$10$3YMPsoxOyjuicmQVqD2vp.M5Eq8iF6KYOLF/wJ6NVzPFz/UQViFDq', '+1 (526) 259-6055', 'photo_2024-03-07_13-26-04.jpg', '2024-03-24 22:38:16', 4, NULL);

-- --------------------------------------------------------

--
-- Structure for view `cate_food`
--
DROP TABLE IF EXISTS `cate_food`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cate_food`  AS SELECT `categories`.`cate_id` AS `cate_id`, `categories`.`restaurant_id` AS `restaurant_id`, `categories`.`cate_name` AS `cate_name`, `categories`.`cate_img` AS `cate_img`, `foods`.`food_id` AS `food_id`, `foods`.`food_name` AS `food_name`, `foods`.`image` AS `image`, `foods`.`quantity` AS `quantity`, `foods`.`price` AS `price`, `foods`.`rating` AS `rating` FROM (`categories` join `foods` on(`foods`.`cate_id` = `categories`.`cate_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `food_info`
--
DROP TABLE IF EXISTS `food_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `food_info`  AS SELECT `foods`.`food_id` AS `food_id`, `foods`.`food_name` AS `food_name`, `foods`.`image` AS `image`, `foods`.`quantity` AS `quantity`, `foods`.`price` AS `price`, `foods`.`rating` AS `food_rate`, `foods`.`discount` AS `discount`, `categories`.`cate_id` AS `cate_id`, `categories`.`cate_name` AS `cate_name`, `categories`.`cate_img` AS `cate_img`, `categories`.`description` AS `description`, `restaurants`.`restaurant_id` AS `restaurant_id`, `restaurants`.`owner_id` AS `owner_id`, `restaurants`.`restaurant_name` AS `restaurant_name`, `restaurants`.`location` AS `location`, `restaurants`.`email` AS `email`, `restaurants`.`opening_hour` AS `opening_hour`, `restaurants`.`contact_info` AS `contact_info`, `restaurants`.`restaurant_img` AS `restaurant_img`, `restaurants`.`rating` AS `restaurant_rate`, `restaurants`.`description` AS `restaurant_desc` FROM ((`restaurants` join `categories` on(`restaurants`.`restaurant_id` = `categories`.`restaurant_id`)) join `foods` on(`categories`.`cate_id` = `foods`.`cate_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `notifications`
--
DROP TABLE IF EXISTS `notifications`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `notifications`  AS SELECT `orders`.`delivery_id` AS `delivery_id`, `orders`.`order_status` AS `order_status`, `orders`.`address_id` AS `address_id`, `orders`.`deliver_date` AS `deliver_date`, `orders`.`customer_id` AS `customer_id`, `address`.`address_name` AS `address_name`, `address`.`address_type` AS `address_type`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`email` AS `email`, `users`.`phone` AS `phone`, `users`.`profile` AS `profile` FROM ((`orders` join `address` on(`orders`.`address_id` = `address`.`address_id`)) join `users` on(`users`.`user_id` = `orders`.`customer_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `restaurant_info`
--
DROP TABLE IF EXISTS `restaurant_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `restaurant_info`  AS SELECT `restaurants`.`restaurant_id` AS `restaurant_id`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`profile` AS `profile`, `restaurants`.`restaurant_name` AS `restaurant_name`, `restaurants`.`location` AS `location`, `restaurants`.`email` AS `email`, `restaurants`.`opening_hour` AS `opening_hour`, `restaurants`.`contact_info` AS `contact_info`, `restaurants`.`description` AS `description`, `restaurants`.`restaurant_img` AS `restaurant_img`, `restaurants`.`rating` AS `rating` FROM (`users` join `restaurants` on(`users`.`user_id` = `restaurants`.`owner_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `delivery_id` (`delivery_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`),
  ADD KEY `categories_ibfk_1` (`restaurant_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkout_id`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_ibfk_1` (`food_id`),
  ADD KEY `comments_ibfk_2` (`user_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`favorite_id`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `delivery_id` (`delivery_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `checkout_id` (`checkout_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `restaurants_ibfk_1` (`owner_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `favorite_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`delivery_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `foods` (`food_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `foods` (`food_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `foods` (`food_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`cate_id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`delivery_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`payment_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`checkout_id`) REFERENCES `checkout` (`checkout_id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
