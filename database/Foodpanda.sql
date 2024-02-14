CREATE TABLE `Admin` (
  `admin_id` int UNIQUE PRIMARY KEY,
  `admin_name` varchar(20),
  `email` varchar(100),
  `password` varchar(50),
  `phone` varchar(20),
  `image` varchar(255)
);

CREATE TABLE `Customers` (
  `customer_id` int PRIMARY KEY AUTO_INCREMENT,
  `first_name` varchar(50),
  `last_name` varchar(50),
  `email` varchar(255),
  `password` varchar(255),
  `phone` varchar(20),
  `registration_date` datetime
);

CREATE TABLE `Restaurants` (
  `restaurant_id` int PRIMARY KEY AUTO_INCREMENT,
  `admin_id` int,
  `restaurant_name` varchar(100),
  `owner_name` varchar(100) UNIQUE,
  `location` varchar(255),
  `rating` int(1),
  `opening_hours` timestamp,
  `contact_info` varchar(20),
  `description` varchar(255),
  `is_open` bool DEFAULT true
);

CREATE TABLE `Deliveries` (
  `delivery_id` int PRIMARY KEY AUTO_INCREMENT,
  `delivery_name` varchar(50),
  `phone` varchar(20),
  `delivery_fee` int,
  `status` bool DEFAULT true
);

CREATE TABLE `Orders` (
  `order_id` int PRIMARY KEY AUTO_INCREMENT,
  `customer_id` int,
  `delivery_id` int,
  `address` varchar(255),
  `order_date` datetime
);

CREATE TABLE `Order_Details` (
  `order_detail_id` int PRIMARY KEY AUTO_INCREMENT,
  `food_id` int,
  `order_id` int,
  `quantity` int
);

CREATE TABLE `MenuItems` (
  `item_id` int PRIMARY KEY AUTO_INCREMENT,
  `restaurant_id` int,
  `cuisine` varchar(100),
  `available_status` bool 
);

CREATE TABLE `Foods` (
  `food_id` int PRIMARY KEY AUTO_INCREMENT,
  `item_id` int,
  `food_name` varchar(50),
  `image` varchar(255),
  `quantity` int NOT NULL,
  `price` int,
  `rating` int
);

CREATE TABLE `Comments` (
  `comment_id` int PRIMARY KEY AUTO_INCREMENT,
  `food_id` int,
  `customer_id` int
);

CREATE TABLE `Favorites` (
  `food_id` int,
  `customer_id` int,
  `status` bool
);

CREATE TABLE `Payments` (
  `payment_id` int PRIMARY KEY AUTO_INCREMENT,
  `customer_id` int,
  `order_detail_id` int,
  `payment_date` datetime,
  `status` bool
);

CREATE TABLE `Delivery_Notifications` (
  `noti_id` int PRIMARY KEY AUTO_INCREMENT,
  `order_id` int
);

ALTER TABLE `Restaurants` ADD FOREIGN KEY (`admin_id`) REFERENCES `Admin` (`admin_id`);

ALTER TABLE `Orders` ADD FOREIGN KEY (`customer_id`) REFERENCES `Customers` (`customer_id`);

ALTER TABLE `Orders` ADD FOREIGN KEY (`delivery_id`) REFERENCES `Deliveries` (`delivery_id`);

ALTER TABLE `Order_Details` ADD FOREIGN KEY (`food_id`) REFERENCES `Foods` (`food_id`);

ALTER TABLE `Order_Details` ADD FOREIGN KEY (`order_id`) REFERENCES `Orders` (`order_id`);

ALTER TABLE `MenuItems` ADD FOREIGN KEY (`restaurant_id`) REFERENCES `Restaurants` (`restaurant_id`);

ALTER TABLE `Foods` ADD FOREIGN KEY (`item_id`) REFERENCES `MenuItems` (`item_id`);

ALTER TABLE `Comments` ADD FOREIGN KEY (`food_id`) REFERENCES `Foods` (`food_id`);

ALTER TABLE `Comments` ADD FOREIGN KEY (`customer_id`) REFERENCES `Customers` (`customer_id`);

ALTER TABLE `Favorites` ADD FOREIGN KEY (`food_id`) REFERENCES `Foods` (`food_id`);

ALTER TABLE `Favorites` ADD FOREIGN KEY (`customer_id`) REFERENCES `Customers` (`customer_id`);

ALTER TABLE `Payments` ADD FOREIGN KEY (`customer_id`) REFERENCES `Customers` (`customer_id`);

ALTER TABLE `Payments` ADD FOREIGN KEY (`order_detail_id`) REFERENCES `Order_Details` (`order_detail_id`);

ALTER TABLE `Delivery_Notifications` ADD FOREIGN KEY (`order_id`) REFERENCES `Orders` (`order_id`);
