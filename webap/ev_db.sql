-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 30, 2023 at 04:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ev_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_qty`, `created_at`) VALUES
(14, 3, 6, 4, '2023-05-29 04:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` mediumtext NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `popular` enum('0','1') NOT NULL DEFAULT '0',
  `image` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(1, 'High Wattage Charger', 'highcharger', '', '1', '1', '1685359311.jpg', 'HighWattageCharger', '150-350kW', 'High Wattage', '2023-05-29 11:21:51'),
(2, 'Low Wattage Charger', 'lowcharger', '', '1', '1', '1685359452.png', 'Low Wattage Charger', '5-100kW', 'Low Wattage', '2023-05-29 11:24:12'),
(3, 'Tyres', 'tyres', '', '1', '0', '1685359777.png', 'Tyres', 'All Wheel Tyres', 'Tyres', '2023-05-29 11:29:37'),
(4, 'Mobile Charger', 'mobilecharger', '', '1', '1', '1685360515.jpg', 'Mobile Charger', 'Can give upto 350 km of charge', 'Mobile Charger', '2023-05-29 11:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text NOT NULL,
  `pincode` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `payment_mode` tinyint(1) NOT NULL,
  `payment_id` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `comments` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`, `created_at`) VALUES
('ABC878699999999', 4, 'ABC', 'a@gmail.com', 2147483647, 'ABC,XYZ', 12222, 4620, 1, '4339', 0, '', '2023-05-30 11:16:48'),
('dfs1988423423', 4, 'dfs', 'abc@gmail.com', 23423423, 'fdafsdas', 24323, 800, 1, '4809', 0, '', '2023-05-28 18:33:18'),
('fsd51857657476', 3, 'fsd', 'abc@gmail.com', 877657476, 'hhjkkbjkl', 78909, 800, 1, '3679', 0, '', '2023-05-28 09:13:13'),
('gfd137011280947', 3, 'gfd', 'dfg@gmail.com', 2147483647, 'gdf', 122017, 2440, 1, '3798', 0, '', '2023-05-28 09:02:17'),
('gfd188811280947', 3, 'gfd', 'dfg@gmail.com', 2147483647, 'gdf', 122017, 2440, 1, '3602', 0, '', '2023-05-28 08:53:25'),
('gfd302011280947', 3, 'gfd', 'dfg@gmail.com', 2147483647, 'gdf', 122017, 2440, 0, '285', 0, '', '2023-05-28 08:48:32'),
('gfd377611280947', 3, 'gfd', 'dfg@gmail.com', 2147483647, 'gdf', 122017, 2440, 0, '624', 0, '', '2023-05-28 08:46:32'),
('gfd394311280947', 3, 'gfd', 'dfg@gmail.com', 2147483647, 'gdf', 122017, 2440, 1, '3976', 0, '', '2023-05-28 08:58:06'),
('gfd559111280947', 3, 'gfd', 'dfg@gmail.com', 2147483647, 'gdf', 122017, 2440, 1, '3116', 0, '', '2023-05-28 08:52:21'),
('gfd602811280947', 3, 'gfd', 'dfg@gmail.com', 2147483647, 'gdf', 122017, 2440, 1, '3422', 0, '', '2023-05-28 08:58:46'),
('gfd632011280947', 3, 'gfd', 'dfg@gmail.com', 2147483647, 'gdf', 122017, 2440, 0, '294', 0, '', '2023-05-28 08:50:31'),
('gfd688111280947', 3, 'gfd', 'dfg@gmail.com', 2147483647, 'gdf', 122017, 2440, 1, '838', 0, '', '2023-05-28 08:51:57'),
('gfd830011280947', 3, 'gfd', 'dfg@gmail.com', 2147483647, 'gdf', 122017, 2440, 1, '3140', 0, '', '2023-05-28 08:55:35'),
('gfd977111280947', 3, 'gfd', 'dfg@gmail.com', 2147483647, 'gdf', 122017, 2440, 1, '3854', 0, '', '2023-05-28 08:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` varchar(191) NOT NULL,
  `prod_id` int(191) NOT NULL,
  `qty` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`) VALUES
(1, '0', 6, 3, 800, '2023-05-28 08:53:25'),
(2, '0', 7, 2, 20, '2023-05-28 08:53:25'),
(3, '0', 6, 3, 800, '2023-05-28 08:53:46'),
(4, '0', 7, 2, 20, '2023-05-28 08:53:46'),
(5, '0', 6, 3, 800, '2023-05-28 08:55:35'),
(6, '0', 7, 2, 20, '2023-05-28 08:55:35'),
(7, '', 6, 3, 800, '2023-05-28 08:58:06'),
(8, '', 7, 2, 20, '2023-05-28 08:58:06'),
(9, '7', 6, 3, 800, '2023-05-28 08:58:46'),
(10, '6', 7, 2, 20, '2023-05-28 08:58:46'),
(11, 'gfd137011280947', 6, 3, 800, '2023-05-28 09:02:17'),
(12, 'gfd137011280947', 7, 2, 20, '2023-05-28 09:02:17'),
(13, 'fsd51857657476', 6, 1, 800, '2023-05-28 09:13:13'),
(14, 'dfs1988423423', 6, 1, 800, '2023-05-28 18:33:18'),
(15, 'ABC878699999999', 1, 4, 80, '2023-05-30 11:16:48'),
(16, 'ABC878699999999', 14, 1, 4300, '2023-05-30 11:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(12) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `location` varchar(191) NOT NULL,
  `trending` tinyint(1) NOT NULL DEFAULT 0,
  `meta_title` text NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `o_cost` int(11) NOT NULL,
  `s_cost` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `description`, `image`, `status`, `location`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `o_cost`, `s_cost`, `created_at`, `updated_at`) VALUES
(1, 1, '250kW High Wattage Charger', '250kWhc', 'Charges a regular car in under 2 hours.Provided by the companies in the country.', '1685360968.png', 1, 'EESL Veer Savarkar Marg, Lajpat Nagar, SDMC parking New Delhi Phone', 1, '250 High W', 'High wattage 250', '250kW Charger', 100, 80, '2023-05-29 11:49:28', '2023-05-29 11:49:28'),
(2, 1, '300 kw High Wattage Charger', '300kwhc', 'Charges a regular car in under 2 hours.Provided by the companies in the country.', '1685361753.jpeg', 1, 'EESL Veer Savarkar Marg, Lajpat Nagar, SDMC parking New Delhi Phone', 1, '300kW High Wattage', '300kW High Wattage', '300kW Charger', 120, 100, '2023-05-29 12:02:33', '2023-05-29 12:02:33'),
(14, 3, 'Snow Tyres', 'snowtyres', 'What is the description of winter tires?\nWinter tires have a special tread design that is made to remove snow and ice from your tires. All-season tires have a different tread design that is made for dry pavement and warm, wet conditions. Winter tires will be marked with a special snowflake and mountain symbol, meaning that they are a certified winter tires', '1685430803.png', 1, 'HAREDA EESL Panchkula\r\nHAREDA, Akshay Urja Bhawan , Institutional plot No.1 Sector-17 Panchkula , 134109 Haryana', 1, 'Snow Tyres', 'Snow Winter', 'Tyres for extreme snowy conditions', 4500, 4300, '2023-05-30 07:13:23', '2023-05-30 07:13:23'),
(15, 3, 'All weather tyres', 'allweathertyres', 'These are developed to deal with any kind of weather, be it summer or winter. It comes with an innovative and durable tread that lasts longer. It is capable to run on all surfaces and gives you the confidence of handling a vehicle even in worst weather conditions. All season radials offers maximum traction on water filled roads, just like the winter tyres. On the other hand, a firm grip is also guaranteed on dry and sand covered patches. The companies build them by combining the rigid rubber as well as tread compounds, which are usually found on the winter and summer radials.', '1685431118.jpg', 1, 'ANERT-EESL Ernakulam Kerala\r\nState Council For Child Welfare, CV Raman Pillai Rd, Near Kerala, Housing Board, Thycaud, Thiruvananthapuram, Kerala 695014', 0, 'All season tyres', 'All season', 'Tyres for both hot anc cold climate', 5800, 5400, '2023-05-30 07:18:38', '2023-05-30 07:18:38'),
(16, 4, 'Mobi EV Mobile Charger', 'mevmobilecharger', 'A mobile alternative to stationary Level 2 chargers, Mobi EV Chargers are battery-powered – providing powerful charging without the need for complex and costly electrical infrastructure. A truly portable solution, Mobi can be deployed anywhere and utilize a drive system with joystick operation to allow for exact placement. Equipped with dual connectors, Mobi EV Chargers are also supported by a full-featured software platform for intelligent energy and asset management.', '1685440439.jpg', 1, 'HAREDA EESL Panchkula\r\nHAREDA, Akshay Urja Bhawan , Institutional plot No.1 Sector-17 Panchkula , 134109 Haryana', 1, 'Mobi EV Chagrer', 'Portable Charger', 'Portable Charger by Mobi EV', 2000, 1800, '2023-05-30 09:53:59', '2023-05-30 09:53:59'),
(17, 4, 'Go Fuel Mobile Charger', 'gofmobilecharger', 'For four-wheelers, the mobile charging solution will comprise of a van with on-board energy storage, which can be dispatched to your location and charge your vehicle. The system is being designed to offer fast charge with a rate of up to 200kW.\n\nFor two and three-wheelers, where the battery packs are often removable, GoFuel is also offering mobile battery swapping solutions, where it will dispatch fully-charged battery packs to your location, allowing you to get back on the go in minutes. Furthermore, it is also offering swapping subscription packages, where it offers users battery swapping services overnight.', '1685440649.jpg', 1, '7TH FLOOR, ISHARESPACE, NO123/124, ISPAHANI CENTER NUNGAMBAKKAM HIGH ROAD', 0, 'Go Fuel Mobile Charger', 'Fuel on the go', 'Go Fuel Mobile upto 200kW', 2800, 2400, '2023-05-30 09:57:29', '2023-05-30 09:57:29'),
(18, 2, 'ABC Low Wattage Charger', 'abclwcharger', '1', '1685445566.', 1, 'abc,xyz', 0, 'Abc Low wattage charger', 'Low wattage Charger', 'ABC Low Wattage charger', 100, 90, '2023-05-30 11:19:26', '2023-05-30 11:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `country` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `role` enum('admin','superadmin','customer') NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `created_at`, `country`, `state`, `city`, `role`) VALUES
(3, 'Udbhav', 'abc@gmail.com', 9711280947, '1234', '2023-05-25 14:13:06', 'India', 'Haryana', 'Gurgaon', 'admin'),
(4, 'i', 'i@gmail.com', 686876876, 'i', '2023-05-25 14:25:03', 'i', 'i', 'i', 'customer'),
(5, 'Faith Nguyen', 'amet.ultricies@hotmail.edu', 1, '8618', '2023-05-30 07:36:04', 'South Georgia and The South Sandwich Islands', 'xyz', 'SZL', 'customer'),
(6, 'Byron Lee', 'posuere@aol.net', 1, '3055', '2023-05-30 07:36:04', 'Marshall Islands', 'xyz', 'RON', 'customer'),
(7, 'Kelly Carson', 'gravida@google.ca', 528, '5608', '2023-05-30 07:36:04', 'Central African Republic', 'xyz', '\'EUR', 'admin'),
(8, 'Wyatt Pugh', 'sed.dictum.eleifend@aol.edu', 1, '9909', '2023-05-30 07:36:04', 'Canada', 'gg', 'COP', 'admin'),
(9, 'Jada Golden', 'iaculis.lacus@google.org', 285, '9884', '2023-05-30 07:36:04', 'Antigua and Barbuda', 'zz', 'LYD', 'admin'),
(10, 'Ezekiel Booker', 'morbi.non@hotmail.couk', 410, '1765', '2023-05-30 07:36:04', 'Indonesia', 'xyz', 'ZMW', 'customer'),
(11, 'Sonya Cline', 'magna@google.org', 675, '2998', '2023-05-30 07:36:04', 'Tokelau', 'zz', 'ISK', 'customer'),
(12, 'Karina O\'connor', 'nonummy@aol.com', 1, '5570', '2023-05-30 07:36:04', 'Turkmenistan', 'abc', 'VEF', 'customer'),
(13, 'Rooney Bowman', 'nam.ac@yahoo.org', 1, '6775', '2023-05-30 07:36:04', 'Botswana', 'gg', 'OMR', 'customer'),
(14, 'Wesley Foster', 'ut.molestie.in@icloud.couk', 830, '2023', '2023-05-30 07:36:04', 'Egypt', 'zz', 'KGS', 'customer'),
(15, 'Murphy Stuart', 'justo.proin.non@icloud.couk', 200, '9161', '2023-05-30 07:36:04', 'Saint Helena, Ascension and Tristan da Cunha', 'gg', 'PGK', 'customer'),
(16, 'Ivana Sweeney', 'et.magnis@icloud.edu', 1, '4606', '2023-05-30 07:36:04', 'Reunion', 'abc', 'FJD', 'customer'),
(17, 'Willa Foster', 'quam@outlook.net', 387, '4193', '2023-05-30 07:36:04', 'Spain', 'gg', 'GYD', 'customer'),
(18, 'Quemby Medina', 'pede.cum.sociis@outlook.com', 1, '2635', '2023-05-30 07:36:04', 'Cambodia', 'gg', 'PKR', 'admin'),
(19, 'Lenore Hardy', 'justo.proin@hotmail.net', 818, '4988', '2023-05-30 07:36:04', 'Georgia', 'gg', 'BGN', 'admin'),
(20, 'Zeph Blake', 'integer.vitae@google.org', 817, '1329', '2023-05-30 07:36:04', 'Christmas Island', 'abc', 'UZS', 'customer'),
(21, 'Ciara Morrison', 'ligula.elit.pretium@icloud.org', 1, '4286', '2023-05-30 07:36:04', 'Samoa', 'gg', 'BRL', 'customer'),
(22, 'Nomlanga Conway', 'congue.a@hotmail.com', 1, '9093', '2023-05-30 07:36:04', 'Fiji', 'zz', 'GBP', 'customer'),
(23, 'Kadeem Bernard', 'sem@aol.edu', 501, '6272', '2023-05-30 07:36:04', 'South Africa', 'abc', 'LKR', 'customer'),
(24, 'Eaton Le', 'sit@yahoo.ca', 885, '6972', '2023-05-30 07:36:04', 'Saint Kitts and Nevis', 'aa', 'ZAR', 'customer'),
(25, 'Wendy Daniel', 'rutrum.non@protonmail.edu', 1, '6340', '2023-05-30 07:36:04', 'Grenada', 'zz', 'EUR', 'customer'),
(26, 'Basil Branch', 'sollicitudin.adipiscing.ligula@outlook.org', 484, '8023', '2023-05-30 07:36:04', 'French Guiana', 'xyz', 'GBP', 'admin'),
(27, 'Sybill Doyle', 'libero.mauris@icloud.com', 1, '3653', '2023-05-30 07:36:04', 'Congo (Brazzaville)', 'abc', 'CAD', 'admin'),
(28, 'Jerry Klein', 'eros.turpis.non@aol.net', 1, '8489', '2023-05-30 07:36:04', 'Ethiopia', 'abc', 'DZD', 'customer'),
(29, 'Yvette Chan', 'mauris.sapien@protonmail.com', 1, '9382', '2023-05-30 07:36:04', 'Saint Helena, Ascension and Tristan da Cunha', 'xyz', 'XOF', 'customer'),
(30, 'Xaviera Smith', 'vulputate@icloud.couk', 319, '9776', '2023-05-30 07:36:04', 'Burundi', 'abc', 'PEN', 'admin'),
(31, 'Nasim Johnson', 'sit@icloud.net', 1, '3064', '2023-05-30 07:36:04', 'Pakistan', 'xyz', 'NZD', 'customer'),
(32, 'Kennan Calhoun', 'sem@yahoo.org', 877, '6847', '2023-05-30 07:36:04', 'Madagascar', 'aa', 'DZD', 'customer'),
(33, 'Sean Beasley', 'morbi.tristique@protonmail.org', 327, '9084', '2023-05-30 07:36:04', 'Senegal', 'abc', 'CDF', 'admin'),
(34, 'Shelby Walter', 'auctor.nunc@outlook.com', 548, '6175', '2023-05-30 07:36:04', 'Sudan', 'gg', 'JMD', 'admin'),
(35, 'Priscilla Hubbard', 'luctus.aliquet.odio@icloud.net', 618, '5685', '2023-05-30 07:36:04', 'Venezuela', 'aa', 'EUR', 'admin'),
(36, 'Kiara Simon', 'cubilia.curae.phasellus@google.couk', 673, '3424', '2023-05-30 07:36:04', 'Myanmar', 'xyz', 'EUR', 'customer'),
(37, 'Jakeem Daugherty', 'arcu@aol.edu', 697, '6341', '2023-05-30 07:36:04', 'Solomon Islands', 'gg', 'DOP', 'customer'),
(38, 'Dillon Cooke', 'semper.auctor.mauris@protonmail.edu', 336, '8892', '2023-05-30 07:36:04', 'Faroe Islands', 'abc', 'MNT', 'admin'),
(39, 'Elvis Hurley', 'commodo.auctor.velit@protonmail.org', 1, '5474', '2023-05-30 07:36:04', 'Palau', 'abc', 'TRY', 'customer'),
(40, 'Conan Mcgowan', 'ornare@icloud.org', 302, '1492', '2023-05-30 07:36:04', 'Slovakia', 'abc', 'LYD', 'admin'),
(41, 'Adrian Lucas', 'lorem@aol.edu', 892, '8248', '2023-05-30 07:36:04', 'France', 'abc', 'ISK', 'customer'),
(42, 'Joseph Barr', 'erat.vitae@protonmail.ca', 798, '1442', '2023-05-30 07:36:04', 'Holy See (Vatican City State)', 'abc', 'MAD', 'customer'),
(43, 'Jorden Anthony', 'malesuada.integer@protonmail.com', 613, '9502', '2023-05-30 07:36:04', 'Egypt', 'aa', 'THB', 'customer'),
(44, 'Simone Valentine', 'quis.diam@aol.com', 1, '8370', '2023-05-30 07:36:04', 'Papua New Guinea', 'zz', 'EUR', 'admin'),
(45, 'Reece Rollins', 'convallis.ligula@icloud.org', 807, '9506', '2023-05-30 07:36:04', 'Montserrat', 'aa', 'TRY', 'admin'),
(46, 'Amal Mcfadden', 'consectetuer@yahoo.couk', 212, '6608', '2023-05-30 07:36:04', 'Tokelau', 'aa', 'EUR', 'customer'),
(47, 'Shelly Mcmahon', 'massa.vestibulum@outlook.ca', 1, '4622', '2023-05-30 07:36:04', 'Rwanda', 'gg', 'NIO', 'customer'),
(48, 'Claudia Cherry', 'vulputate@icloud.ca', 1, '7330', '2023-05-30 07:36:04', 'Seychelles', 'gg', 'IMP', 'customer'),
(49, 'Alika Freeman', 'lobortis@protonmail.net', 904, '9741', '2023-05-30 07:36:04', 'Togo', 'gg', 'XAF', 'customer'),
(50, 'Ulla Moreno', 'aliquet@aol.couk', 1, '4290', '2023-05-30 07:36:04', 'Norfolk Island', 'abc', 'FJD', 'admin'),
(51, 'Patrick Becker', 'montes.nascetur@hotmail.couk', 1, '2957', '2023-05-30 07:36:04', 'Cocos (Keeling) Islands', 'xyz', '\'EUR', 'customer'),
(52, 'Hayes Holmes', 'risus@protonmail.ca', 482, '7819', '2023-05-30 07:36:04', 'Puerto Rico', 'aa', 'CRC', 'customer'),
(53, 'Lev Wilkerson', 'luctus.et@google.com', 580, '6347', '2023-05-30 07:36:04', 'Philippines', 'zz', 'BMD', 'admin'),
(54, 'Selma Contreras', 'molestie@yahoo.couk', 1, '3136', '2023-05-30 07:36:04', 'Sweden', 'aa', 'KWD', 'admin'),
(55, 'Kasper Mullen', 'nunc@aol.com', 1, '5808', '2023-05-30 07:36:04', 'Puerto Rico', 'xyz', 'AMD', 'admin'),
(56, 'Geoffrey Wright', 'arcu.vivamus@hotmail.couk', 426, '5304', '2023-05-30 07:36:04', 'Cook Islands', 'gg', 'COP', 'admin'),
(57, 'Kai Puckett', 'eget.metus@yahoo.com', 639, '1222', '2023-05-30 07:36:04', 'United Kingdom (Great Britain)', 'abc', 'EUR', 'customer'),
(58, 'Ursa Lawson', 'ridiculus.mus@outlook.ca', 685, '3224', '2023-05-30 07:36:04', 'Belize', 'abc', '\'EUR', 'admin'),
(59, 'Constance Mccall', 'mauris.integer@hotmail.ca', 1, '7399', '2023-05-30 07:36:04', 'Greece', 'abc', 'NIO', 'customer'),
(60, 'Mannix Todd', 'sem.molestie.sodales@hotmail.com', 1, '7545', '2023-05-30 07:36:04', 'Sudan', 'gg', 'MZN', 'customer'),
(61, 'Cassandra Faulkner', 'eu.lacus.quisque@icloud.com', 855, '6842', '2023-05-30 07:36:04', 'Sweden', 'abc', 'ZWD', 'customer'),
(62, 'Ferris Hammond', 'dolor@hotmail.org', 1, '4761', '2023-05-30 07:36:04', 'South Sudan', 'abc', 'TZS', 'customer'),
(63, 'Reuben French', 'enim@outlook.org', 421, '6901', '2023-05-30 07:36:04', 'Marshall Islands', 'aa', 'BYN', 'customer'),
(64, 'Sasha Delgado', 'vitae.sodales.at@hotmail.net', 1, '5241', '2023-05-30 07:36:04', 'Sweden', 'aa', '\'CZK', 'admin'),
(65, 'Raven Baldwin', 'quisque.varius@google.org', 353, '2068', '2023-05-30 07:36:04', 'Libya', 'gg', 'LBP', 'admin'),
(66, 'Martin Cochran', 'sem.elit@icloud.ca', 248, '9743', '2023-05-30 07:36:04', 'Uganda', 'zz', 'TWD', 'admin'),
(67, 'Coby Farrell', 'cras.convallis.convallis@icloud.net', 1, '4772', '2023-05-30 07:36:04', 'Zimbabwe', 'gg', 'UGX', 'admin'),
(68, 'Margaret Bauer', 'mattis@google.org', 1, '6163', '2023-05-30 07:36:04', 'Greenland', 'aa', 'GTQ', 'admin'),
(69, 'Vanna Hammond', 'eget.metus@google.couk', 1, '8442', '2023-05-30 07:36:04', 'Hungary', 'gg', 'GHS', 'admin'),
(70, 'Callie Hamilton', 'eu.lacus@protonmail.net', 631, '7116', '2023-05-30 07:36:04', 'United Kingdom (Great Britain)', 'abc', 'BBD', 'customer'),
(71, 'Isadora Vaughan', 'dolor.sit@aol.com', 1, '2199', '2023-05-30 07:36:04', 'Kiribati', 'aa', 'HRK', 'admin'),
(72, 'Ashely Richards', 'sed@outlook.edu', 1, '6251', '2023-05-30 07:36:04', 'Åland Islands', 'gg', 'GEL', 'admin'),
(73, 'Kirestin Stewart', 'consectetuer.adipiscing@hotmail.org', 723, '3377', '2023-05-30 07:36:04', 'Cayman Islands', 'xyz', 'GHS', 'customer'),
(74, 'Akeem Cain', 'lobortis.class.aptent@google.org', 173, '8526', '2023-05-30 07:36:04', 'Turks and Caicos Islands', 'gg', 'BOB', 'customer'),
(75, 'David Lane', 'magna@hotmail.net', 1, '1410', '2023-05-30 07:36:04', 'Uzbekistan', 'xyz', 'NZD', 'customer'),
(76, 'Rana O\'Neill', 'in.tempus@aol.com', 1, '6675', '2023-05-30 07:36:04', 'Morocco', 'aa', 'MZN', 'admin'),
(77, 'Rogan Lyons', 'tempus.lorem.fringilla@outlook.couk', 1, '3627', '2023-05-30 07:36:04', 'Madagascar', 'xyz', 'IDR', 'customer'),
(78, 'Danielle Perkins', 'scelerisque@hotmail.com', 986, '6946', '2023-05-30 07:36:04', 'Bermuda', 'gg', 'PHP', 'customer'),
(79, 'Alroleair Dorsey', 'amet.consectetuer@yahoo.ca', 298, '8689', '2023-05-30 07:36:04', 'Tokelau', 'gg', 'NGN', 'customer'),
(80, 'Teagan Stein', 'tellus.suspendisse.sed@aol.org', 555, '5958', '2023-05-30 07:36:04', 'Ghana', 'abc', 'UAH', 'customer'),
(81, 'Guy Moreno', 'porta.elit@protonmail.edu', 294, '3590', '2023-05-30 07:36:04', 'Czech Republic', 'gg', 'EUR', 'customer'),
(82, 'Dawn Kerr', 'lectus.justo.eu@icloud.ca', 911, '5730', '2023-05-30 07:36:04', 'Mali', 'abc', 'EUR', 'customer'),
(83, 'Sylvester Mcguire', 'facilisis.eget@outlook.org', 131, '5297', '2023-05-30 07:36:04', 'Canada', 'abc', 'UAH', 'customer'),
(84, 'Kane Guzman', 'mollis.duis@hotmail.org', 482, '8626', '2023-05-30 07:36:04', 'Rwanda', 'aa', 'BWP', 'customer'),
(85, 'Charde Bell', 'amet.diam.eu@icloud.com', 422, '8391', '2023-05-30 07:36:04', 'Saint Kitts and Nevis', 'zz', 'MRU', 'admin'),
(86, 'Jerome Rodriquez', 'nibh@google.ca', 513, '2458', '2023-05-30 07:36:04', 'Poland', 'xyz', 'EUR', 'customer'),
(87, 'Pearl Osborn', 'lectus.quis.massa@protonmail.com', 1, '3647', '2023-05-30 07:36:04', 'Bonaire, Sint Eustatius and Saba', 'zz', 'MXN', 'admin'),
(88, 'Wing Mullins', 'egestas.hendrerit@google.org', 1, '7061', '2023-05-30 07:36:04', 'Austria', 'zz', 'MUR', 'admin'),
(89, 'Ryder Clarke', 'auctor@aol.edu', 1, '3033', '2023-05-30 07:36:04', 'Pakistan', 'xyz', 'KES', 'customer'),
(90, 'Rajah Lee', 'elit.elit@google.net', 745, '5190', '2023-05-30 07:36:04', 'Korea, North', 'aa', 'EUR', 'customer'),
(91, 'Ciara Weeks', 'urna.nullam.lobortis@aol.couk', 422, '2676', '2023-05-30 07:36:04', 'Finland', 'abc', 'GIP', 'admin'),
(92, 'Aimee Glenn', 'in.consequat@protonmail.org', 1, '4989', '2023-05-30 07:36:04', 'Norfolk Island', 'gg', 'USD', 'customer'),
(93, 'Rana Carver', 'dolor.nulla.semper@yahoo.ca', 159, '4392', '2023-05-30 07:36:04', 'Libya', 'abc', 'EUR', 'admin'),
(94, 'Stone Ross', 'urna.nec@protonmail.edu', 1, '4425', '2023-05-30 07:36:04', 'Libya', 'zz', 'CDF', 'admin'),
(95, 'Madaline Cameron', 'quisque.porttitor@icloud.ca', 1, '7054', '2023-05-30 07:36:04', 'Niue', 'gg', 'KGS', 'admin'),
(96, 'Gareth Carlson', 'nec.metus.facilisis@icloud.couk', 375, '5423', '2023-05-30 07:36:04', 'Venezuela', 'xyz', 'KWD', 'customer'),
(97, 'Haley Coffey', 'amet.orci@icloud.couk', 1, '9943', '2023-05-30 07:36:04', 'Falkland Islands', 'aa', 'BHD', 'customer'),
(98, 'Kyla Nixon', 'nostra@protonmail.net', 1, '6509', '2023-05-30 07:36:04', 'Saint Vincent and The Grenadines', 'abc', 'MWK', 'admin'),
(99, 'Gray Workman', 'mus@yahoo.net', 1, '5940', '2023-05-30 07:36:04', 'Belarus', 'abc', 'RWF', 'admin'),
(100, 'Jack Saunders', 'a.nunc@icloud.net', 739, '3690', '2023-05-30 07:36:04', 'Reunion', 'xyz', 'KZT', 'customer'),
(101, 'Yeo Payne', 'pharetra@aol.com', 1, '2359', '2023-05-30 07:36:04', 'Saint Barthélemy', 'aa', 'NZD', 'admin'),
(102, 'Zelda Olson', 'donec.tempus.lorem@hotmail.couk', 459, '3520', '2023-05-30 07:36:04', 'Greece', 'xyz', 'XAF', 'customer'),
(103, 'Caleb Barron', 'pellentesque.massa@icloud.ca', 1, '9368', '2023-05-30 07:36:04', 'Gambia', 'abc', 'HRK', 'admin'),
(104, 'Ima Walker', 'mauris.erat.eget@yahoo.edu', 1, '8409', '2023-05-30 07:36:04', 'El Salvador', 'aa', 'NZD', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
