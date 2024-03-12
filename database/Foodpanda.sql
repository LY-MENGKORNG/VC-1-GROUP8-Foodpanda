-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 02:19 PM
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
(1, 13, 'Breakfast', 'Hello, this is breakfast!\r\n', 'Breakfast.png'),
(2, 13, 'American', 'Hello world', 'Burger.png'),
(4, 13, 'Khmer', 'Hello world', 'Salad.png'),
(8, 12, 'Italian', 'Hello world', 'Pizza.png'),
(9, 12, 'Drink', 'Hello world', 'Coffee.png'),
(10, 10, 'Thai', 'How do you want to get started', 'Fries.png'),
(11, 10, 'France', 'Hello, this is france food\r\n', 'france.png');

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
  `rating` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_id`, `cate_id`, `food_name`, `image`, `quantity`, `price`, `rating`) VALUES
(2, 8, 'Unknown', 'popular1.png', 50, 5, 5),
(3, 8, 'Italian desert', 'popular8.png', 100, 5, 5),
(4, 4, 'Bror Hit', 'popular7.png', 100, 5, 4),
(5, 2, 'Unknown food', 'popular2.png', 50, 3, 4),
(8, 10, 'Tong yam', 'thai food.jpg', 50, 5, 3),
(9, 11, 'Omelet', 'france food.jpg', 20, 10, 4),
(10, 9, 'Pokis', 'pokis.jpg', 100, 2, 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `foods_info`
-- (See below for the actual view)
--
CREATE TABLE `foods_info` (
`food_id` int(11)
,`cate_id` int(11)
,`cate_name` varchar(255)
,`description` varchar(255)
,`cate_img` varchar(255)
,`food_name` varchar(255)
,`image` varchar(255)
,`quantity` int(11)
,`price` int(11)
,`rating` int(11)
,`owner_id` int(11)
,`restaurant_name` varchar(255)
,`location` varchar(255)
,`email` varchar(255)
,`opening_hour` int(11)
,`restaurant_img` varchar(255)
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
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `noti_id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `sender` int(11) DEFAULT NULL,
  `recipient` int(11) DEFAULT NULL,
  `time` datetime DEFAULT current_timestamp(),
  `type` varchar(255) DEFAULT 'Email'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_amount` decimal(10,2) DEFAULT NULL,
  `payment_date` datetime DEFAULT current_timestamp(),
  `payment_method` varchar(255) DEFAULT NULL,
  `status` enum('pending','completed','failed') DEFAULT NULL,
  `description` text DEFAULT NULL,
  `payment_gateway` enum('Stripe','PayPal','Bank Transfer') DEFAULT NULL,
  `refund_status` enum('pending','processed','completed','failed') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(9, 3, 'KPC 168', 'Kampong Cham', 'kampong.cham@restaurant.com', '$2y$10$vZORMEt2r3XjKxFMDWKsnOug0BZvgb5OvtmKFJI9ZYK740YVkclES', NULL, '+1 (124) 985-1702', 'gfsglk', 'pexels-lawrence-suzara-1581554.jpg', '1'),
(10, 9, 'Khmerhouse', 'Battombong', 'battombong.restaurant@email.com', '$2y$10$xM5JSvFkL6T2ikbfweZ7FeD.ENYKPqfCc9.KMyFiZCoRIy8T5HERa', NULL, '+1 (146) 552-6397', 'herasdkfa;s', 'pexels-huy-phan-1383776.jpg', '1'),
(12, 8, 'KFC Cambodia', 'Phnom Penh', 'kfc.cambodia@restaurant.com', '$2y$10$bhuYDhooln9VNJ5Mig2TCObc7Nm8XuJNDVceYSnaUfmB7210CXQk6', NULL, '+1 (413) 887-4212', 'hdasdfha', 'pexels-zak-chapman-2290753.jpg', '1'),
(13, 4, 'Kon nak Siemeap', 'Siem Reap', 'siemreap.restaurant@emai.com', '$2y$10$xlqURWvw0joW72TiiRRPKucM/x59vnE7btkH10La6IwqJojLFlwQ.', NULL, '+1 (159) 787-4677', 'fasdfhadf', 'pexels-igor-starkov-1055058.jpg', '1');

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
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `phone`, `profile`, `registration_date`, `role_id`) VALUES
(3, 'mengkorng', 'ly', 'mengkorng.ly@admin.passerellesnumeriques.org', '$2y$10$JVRwfiaALFs4J4jCtUG6DejTxcRlQoLj2shkQ5G/MvhsyteYAP8Sa', '+1 (403) 454-5718', 'photo_2023-11-03_22-01-29.jpg', '2024-03-09 14:32:46', 1),
(4, 'LIEP', 'TOEUR', 'liep.toeur@owner.passerellesnumeriques.org', '$2y$10$6lHsg0tF4P8Zd.he7ME9Be1XrOJDhUuHXW7w5gE/81xlDacnpHe5a', '+1 (413) 887-4212', 'photo_2024-02-05_08-38-15.jpg', '2024-03-09 16:41:22', 2),
(5, 'chhun eii', 'kokko', 'chhuneii.koko@delivery.passerellesnumeriques.org', '$2y$10$020QnfS7kmGQEnsg7pYJmOLQhTncWeMUD7hglBX2L1Xfmd6LBxJ.u', '+1 (413) 887-4212', 'photo_2024-03-07_13-26-04.jpg', '2024-03-09 16:51:56', 3),
(6, 'mengkorng', 'smossne', 'mengkorng.ly@deliverysmos.passerellesnumeriques.org', '$2y$10$XMQzpohUKbCwi2g5gyJ6wO4Df6Ae/myD27wvy/pI6ONLPyOJ98o0e', '+1 (146) 552-6397', 'photo_2023-11-03_22-01-29.jpg', '2024-03-10 00:05:08', 3),
(7, 'mengkorng', 'ly', 'mengkorng.ly@customer.passerellesnumeriques.org', '$2y$10$1YVvyNlo1iz6jfK6k/ObZu07vI0gTA6Yucw5G1O5n5zkPLtWm.Fze', '+1 (403) 454-5718', NULL, '2024-03-10 01:28:13', 4),
(8, 'DAVIT', 'CHOEUN', 'davit.choeun@owner.passerellesnumeriques.org', '$2y$10$yyHkGXdQ8RWpwj8VOTfT/.xySIlM45/R5Vswn3AmCxsQmc7/IZN0S', '+1 (256) 547-6668', 'photo_2024-03-06_10-57-53.jpg', '2024-03-10 02:55:49', 2),
(9, 'CHHUN EII', 'OEUY', 'chhuneii.oeuy@owner.passerellesnumeriques.org', '$2y$10$OoGla5omDCaojLM6nTowjuLoaHavWGv0pBTh68Ow4pxBfDqOlOR1q', '+1 (413) 887-4212', 'photo_2024-02-25_16-18-50.jpg', '2024-03-10 12:03:40', 2),
(10, 'thary', 'oeun', 'thary.oeun@customer.passerellesnumeriques.org', '$2y$10$aDZhDbmRYJGE5hnUFtkKP.hcgckcsu.FaWA5cM930l3dK582aSplW', '0979899310', NULL, '2024-03-10 14:55:22', 4),
(11, 'THARY', 'OEUN', 'thary.oeun@owner.passerellesnumeriques.org', '$2y$10$lE6.si3kgM0csIBwig1umelvNZq6Y3wNXZwV6i8C14cPqXXVLHt7W', '+1 (124) 985-1702', NULL, '2024-03-11 14:05:34', 2);

-- --------------------------------------------------------

--
-- Structure for view `cate_food`
--
DROP TABLE IF EXISTS `cate_food`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cate_food`  AS SELECT `categories`.`cate_id` AS `cate_id`, `categories`.`restaurant_id` AS `restaurant_id`, `categories`.`cate_name` AS `cate_name`, `categories`.`cate_img` AS `cate_img`, `foods`.`food_id` AS `food_id`, `foods`.`food_name` AS `food_name`, `foods`.`image` AS `image`, `foods`.`quantity` AS `quantity`, `foods`.`price` AS `price`, `foods`.`rating` AS `rating` FROM (`categories` join `foods` on(`foods`.`cate_id` = `categories`.`cate_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `foods_info`
--
DROP TABLE IF EXISTS `foods_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `foods_info`  AS SELECT `foods`.`food_id` AS `food_id`, `foods`.`cate_id` AS `cate_id`, `categories`.`cate_name` AS `cate_name`, `categories`.`description` AS `description`, `categories`.`cate_img` AS `cate_img`, `foods`.`food_name` AS `food_name`, `foods`.`image` AS `image`, `foods`.`quantity` AS `quantity`, `foods`.`price` AS `price`, `foods`.`rating` AS `rating`, `restaurants`.`owner_id` AS `owner_id`, `restaurants`.`restaurant_name` AS `restaurant_name`, `restaurants`.`location` AS `location`, `restaurants`.`email` AS `email`, `restaurants`.`opening_hour` AS `opening_hour`, `restaurants`.`restaurant_img` AS `restaurant_img` FROM ((`restaurants` join `categories` on(`categories`.`restaurant_id` = `restaurants`.`restaurant_id`)) join `foods` on(`categories`.`cate_id` = `foods`.`cate_id`)) ;

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`),
  ADD KEY `categories_ibfk_1` (`restaurant_id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`noti_id`),
  ADD KEY `notifications_ibfk_1` (`sender`),
  ADD KEY `notifications_ibfk_2` (`recipient`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `noti_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`recipient`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
