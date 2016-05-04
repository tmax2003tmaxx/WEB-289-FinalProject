/*
Designed and Created by: Cody Mogensen
Creates 1 Admin and 1 Member user for testing purposes.
Admin: admin@gmail password
Memeber: billythekid@gmail password
*/ 
CREATE TABLE `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `userLevel` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  PRIMARY KEY (`member_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` VALUES(1, 'Cody', 'Mogensen', 'admin@gmail.com', '123 wood ave', 'Admin', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 0);
INSERT INTO `members` VALUES(14, 'Billy', 'Kid', 'billythekid@gmail.com', 'ff', 'Member', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_name` varchar(255) NOT NULL,
  `description` longtext,
  `price` int(11) DEFAULT '0',
  `product_id` varchar(255) NOT NULL DEFAULT '',
  `category` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `servings` int(10) NOT NULL,
  `member_price` int(4) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` VALUES('Chocolate Cookies', 'Better than grandmas chocolate chip cookies', 10, '7', 'Cookies', 12, 12, 0);
INSERT INTO `products` VALUES('Oatmeal Rasin Cookies', 'Oldfashion oatmeal rasin cookies', 15, '8', 'Cookies', 12, 12, 0);
INSERT INTO `products` VALUES('Pecan Pie', 'Delicious Pecan Pie', 10, '9', 'Pie', 1, 10, 0);
INSERT INTO `products` VALUES('Red Velvet Cake', '8 Inches of Silky Smooth Cake', 20, '10', 'Cake', 1, 10, 0);
INSERT INTO `products` VALUES('Oreo Cupcakes', 'Delcious Oreo Goodness', 12, '11', 'Cupcakes', 12, 12, 0);
INSERT INTO `products` VALUES('Peanut Butter Cookies', 'Peanutty cookies', 12, '12', 'Cookies', 12, 12, 0);
INSERT INTO `products` VALUES('Apple Pie', 'Tasty Apple Pie', 15, '1', 'Pie', 1, 10, 0);
INSERT INTO `products` VALUES('Pumpkin Pie', 'Tasty Pumpkin Pie', 15, '2', 'Pie', 1, 10, 0);
INSERT INTO `products` VALUES('Chocolate Cake 8in', 'Delicious Chocolate Cake', 50, '3', 'Cake', 1, 10, 0);
INSERT INTO `products` VALUES('Vanilla Cake 8in', 'Delicous cake perfect for a birthday party', 20, '4', 'Cake', 1, 10, 0);
INSERT INTO `products` VALUES('Chocolate Cupcakes', 'tasty cupcakes', 10, '5', 'Cupcakes', 12, 12, 0);
INSERT INTO `products` VALUES('Vanilla Cupcakes', 'Melt in your mouth vanilla gold', 23, '6', 'Cupcakes', 12, 12, 0);
