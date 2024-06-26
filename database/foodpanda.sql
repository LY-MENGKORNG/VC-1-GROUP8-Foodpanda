-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2024 at 06:52 AM
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
(15, 'khan sen sok, phnom penh, cambodia', 'Work', 48, 43, '11.5785557', '104.8692475'),
(16, 'Phnom Penh International Airport', 'Other', 46, 43, '11.5470571', '104.84811156075017'),
(17, 'Phnom Penh International Airport', 'Work', 48, 43, '11.5470571', '104.84811156075017'),
(18, 'Phnom Penh International Airport', 'Work', 48, 43, '11.5470571', '104.84811156075017'),
(19, 'International Airport', 'Work', 52, 43, '-33.9349749', '151.1658747');

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
(19, 17, 'France', 'Enjoy with our France foods', 'france.png'),
(20, 16, 'Khmer', 'Enjoy with khmer food', 'Salad.png'),
(21, 16, 'American', 'Enjoy with our american food', 'Burger.png'),
(22, 16, 'Japanese', 'Enjoy with japanese food', 'japanese.png'),
(23, 18, 'Italian', 'Enjoy with Italian food', 'Pizza.png'),
(29, 16, 'Potatoes', 'Enjoy with our product', 'Fries.png'),
(30, 20, 'Desert', 'Enjoy with new desert', 'k\'tom.png');

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
(54, 17, 2, 20, 43, '2024-03-28 19:36:48', 'Châteaubriand', 29),
(55, 21, 2, 5, 43, '2024-03-28 20:44:21', 'Spahetti', 30),
(56, 23, 2, 5, 43, '2024-03-29 12:44:39', 'pumpkins desert', 31);

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
(17, 19, 'Châteaubriand', 'Châteaubriand.jpg', 43, 20, 4, 0),
(18, 20, 'Ah mok', 'ah mok.jpg', 50, 5, 5, 0),
(19, 21, 'Steak', 'img8.jpg', 50, 50, 5, 0),
(20, 22, 'Sushi', 'japanese food.jpg', 100, 50, 5, 0),
(21, 23, 'Spahetti', 'spahetti.jpg', 100, 5, 5, 0),
(22, 29, 'potatoes', 'thai food.jpg', 50, 5, 3, 0),
(23, 30, 'pumpkins desert ', 'khmer desert2.jpg', 50, 5, 5, 0);

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
(29, 43, 48, 'On progress', '2024-03-28 19:36:48', 'Battombong Restaurant', NULL, 'battombong.jpg', 15),
(30, 43, 48, 'On progress', '2024-03-28 20:44:21', 'Phnom penh Restaurant', NULL, 'pexels-igor-starkov-1055058.jpg', 17),
(31, 43, 52, 'On progress', '2024-03-29 12:44:39', 'Siem reap Restaurant', NULL, 'pexels-zak-chapman-2290753.jpg', 18);

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
  `promo_code` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT 'VISA'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `user_id`, `card_number`, `valid_through`, `cvv`, `card_name`, `payment_date`, `payment_amount`, `promo_code`, `method`) VALUES
(31, 43, 'Cassady Saunders', '12/24', 232, 'Cassady Saunders', '2024-03-28 19:36:48', 20, 'hi322', 'VISA'),
(32, 43, 'mengkorng visa', '12/24', 123, 'mengkorng visa', '2024-03-28 20:44:21', 5, 'hi23', 'VISA'),
(33, 43, 'mengkorng visa', '12/24', 1231, 'mengkorng visa', '2024-03-29 12:44:39', 5, ' ', 'MASTER CARD');

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
  `opening_hour` int(11) DEFAULT NULL,
  `contact_info` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `restaurant_img` varchar(255) DEFAULT NULL,
  `rating` enum('1','2','3','4','5') DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `owner_id`, `restaurant_name`, `location`, `email`, `opening_hour`, `contact_info`, `description`, `restaurant_img`, `rating`) VALUES
(16, 47, 'KPC Restaurant', 'Kampong Cham', 'kpc.restaurant@email.com', NULL, '+1 (124) 985-1702', 'Welcome to KPC restaurant', 'kpc restaurant.jpg', '1'),
(17, 44, 'Battombong Restaurant', 'Battombong', 'battombong.restaurant@email.com', NULL, '+1 (124) 985-1702', 'Welcome to battombong restaurant', 'battombong.jpg', '1'),
(18, 49, 'Phnom penh Restaurant', 'Phnom penh', 'phnompenh.restaurant@gmail.com', NULL, '012332232', 'Welcome to Phnom penh restaurant', 'pexels-igor-starkov-1055058.jpg', '1'),
(19, 50, 'KFC Restaurant', 'Phnom penh', 'kfc.restaurant@gmail.com', NULL, '012 34 12123', 'welcome to kfc restaurant', '3609b0f6a2ee7874a04689027a311537.jpg', '1'),
(20, 51, 'Siem reap Restaurant', 'Siem reap', 'siemreap.restaurant@gmail.com', NULL, '015 23 32 23', 'Welcome to Siem reap restaurant', 'pexels-zak-chapman-2290753.jpg', '1');

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
(42, 'mengkorng', 'Admin', 'mengkorng.ly@student.passerellesnumeriques.org', '$2y$10$1DRpkBVuHOn4lMEverOWbOgjFd5CnCO5TIhgsoFfzdWrQwP35AtTS', '+1 (373) 603-4309', 'mengkorng_owner.jpg', '2024-03-28 01:55:22', 1, NULL),
(43, 'mengkorng', 'ly(customer1)', 'lymengkorng54@gmail.com', '$2y$10$kNGURxDSf/cpVuMbv7hcz.aHjUDXYvcvB4gF7gegHfpdS5Yy8za3G', '+1 (464) 441-4173', 'photo_2023-11-03_22-01-29.jpg', '2024-03-28 15:02:39', 4, 0),
(44, 'CHHUN EII', 'OEUY(owner)', 'chhuneii.oeuy@student.passerellesnumeriques.org', '$2y$10$Xe8Gq.O6eo6ZEZg8cWITtO2nAtKKkytL5wNgRMO8e9Or9s5jxV/Bi', '+1 (124) 985-1702', 'photo_2024-02-25_16-18-50.jpg', '2024-03-28 16:09:09', 2, NULL),
(46, 'CHHUN EII', 'OEUY(delivery)', 'chhuneii.koko@delivery.passerellesnumeriques.org', '$2y$10$4WrRZC3f.2AAq2KSdyeWduQ7/HIUi/Z3xJWgyn8KwvKdO4B3oKXA2', '+1 (159) 787-4677', 'photo_2024-03-07_13-26-04.jpg', '2024-03-28 19:06:58', 3, NULL),
(47, 'LIEP', 'TOEUR(owner)', 'liep.toeur@student.passerellesnumeriques.org', '$2y$10$RCGEO0gVakuzdZnIXG7iresU1uImUSFWhRCJT0zwfo4Hwy0NFhEAm', '+1 (146) 552-6397', 'photo_2024-02-05_08-38-15.jpg', '2024-03-28 19:09:18', 2, NULL),
(48, 'mengkorng', 'ly(delivery2)', 'mengkorng.ly@delivery.passerellesnumeriques.org', '$2y$10$Ej0NKJIjjnTU612.quAl9OqhMiFgJofh5oAqRvnFFHJo.szQeVB9y', '+1 (159) 787-4677', 'yi sun shin.jpg', '2024-03-28 19:23:11', 3, NULL),
(49, 'davit', 'owner', 'davit.chhoen@owner.passerellesnumeriques.org', '$2y$10$qcVEquEl9LHhnQCW1WIyGuPQjRo7VqDPwVPQX8Hu5oDjZkltvRc6y', '012 34 12123', 'photo_2024-03-06_10-57-53.jpg', '2024-03-28 20:33:02', 2, NULL),
(50, 'mengkorng', 'owner', 'mengkorng.ly@owner.passerellesnumeriques.org', '$2y$10$xTgkASuZl/YDFh5siJE/8upsC8S2ULfp0jLyAwqPEUIVLzh0JjG5O', '097 34 23 43', 'baki.png', '2024-03-29 00:14:20', 2, NULL),
(51, 'Thary ', 'owner', 'thary.ouen@owner.passerellesnumeriques.org', '$2y$10$Nm1SZ9thoH.Gp4YDEEEKwueuSvNWUblNURhsayytdP.yJ0Lp3C9Um', '012 34 343', 'photo_2023-12-04_20-05-22.jpg', '2024-03-29 12:33:24', 2, NULL),
(52, 'davit', 'delivery', 'davit.chhoen@delivery.passerellesnumeriques.org', '$2y$10$BYq7y7JUjzihSPpLv1JQP.63QoqNKbO7y4m2xXd3HooQ9dnI8IcaO', '+1 (898) 436-4963', NULL, '2024-03-29 12:39:46', 3, NULL);

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
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
