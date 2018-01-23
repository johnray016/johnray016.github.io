-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 07:42 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manilaoutdoors`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Apparel'),
(2, 'Backpacks'),
(3, 'Tents'),
(4, 'Hiking Gears'),
(5, 'Hammocks'),
(6, 'Sleeping Gears');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `contact_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `street_address`, `barangay`, `city`, `province`, `country`, `contact_number`) VALUES
(1, 'John Ray', 'Pantaleon', '', 'johnray016', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '744 Tantiongco St.', 'San Guillermo', 'Morong', 'Rizal', 'Philippines', '09353137125');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `invoice_number` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_ordered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity_ordered` smallint(6) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_id` int(11) NOT NULL,
  `payment_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_id`, `payment_details`) VALUES
(1, 'Paypal'),
(2, 'Maestro'),
(3, 'Dragon Pay'),
(4, 'VISA');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_ID` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `image` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `category_ID` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_ID`, `product_name`, `sku`, `short_description`, `long_description`, `price`, `quantity`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `category_ID`, `date_created`) VALUES
(1, 'Osprey Daylite Plus 20L Travel Pack Beryl Blue', 'OSPREY-407-BB', '<p>Traveling can be difficult but the Daylite makes it easier. With protected, padded storage for a laptop, and just enough organization to keep you moving through the terminal, it\'s the travel companion you never leave behind.</p>', '<p>The Daylite Series started out with humble beginnings, a simple accessory to attach to our larger packs. However, its lightweight, simplicity, durability, comfortable carry and price has proven to be wildly popular, and today their popularity is undeniable. While the Daylite and Daylite Plus continue to serve well as add-on packs for traveling and more, they shine on their own with incredible versatility and are now available in an even more robust color palette than before.</p>\r\n<p class=\"orange-text\">Features</span></p>\r\n<ul>\r\n<li>Large panel-loading main compartment</span></li>\r\n<li>Attaches to a variety of compatible Osprey packs</span></li>\r\n<li>Side mesh pockets</span></li>\r\n<li>Front pocket with mesh organizer and key clip</span></li>\r\n<li>Spacermesh shoulder straps with integrated handle</span></li>\r\n<li>Multi-function interior sleeve for hydration or tablet</span></li>\r\n<li>Mesh-covered backpanel with slotted foam</span></li>\r\n</ul>\r\n<p class=\"orange-text\">Features</span></p>\r\n<p><strong>Main</strong> - 210D Nylon Double Diamond Ripstop</p>\r\n<p><strong>Accent</strong> - 400HD Nylon Packcloth</p>\r\n<p><strong>Bottom</strong> - 400HD Nylon Packcloth</p>', '3250.00', 2, 'Osprey_Daylite_Plus_20L_Travel_Pack_Beryl_Blue_1.jpg', 'Osprey Daylite Plus 20L Travel Pack Beryl Blue', 'Traveling can be difficult but the Osprey Daylite Plus 20L Travel Pack makes it easier', 'osprey, hiking, manila outdoors, backpack', 2, '2018-01-23 05:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE `shipping_details` (
  `shipping_id` int(11) NOT NULL,
  `shipping_details` varchar(255) NOT NULL,
  `shipping_amount` decimal(10,0) NOT NULL,
  `shipping_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`shipping_id`, `shipping_details`, `shipping_amount`, `shipping_date`) VALUES
(1, 'Regular Postage', '100', 'Please wait 6-10 business days'),
(2, 'Express Postage', '200', 'Please wait 1-2 business days');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`invoice_number`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customers_id` (`customers_id`),
  ADD KEY `shipping_id` (`shipping_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_ID`),
  ADD KEY `category_id` (`category_ID`) USING BTREE;

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `invoice_number` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shipping_details`
--
ALTER TABLE `shipping_details`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `customers_id` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_id` FOREIGN KEY (`payment_id`) REFERENCES `payment_details` (`payment_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `shipping_id` FOREIGN KEY (`shipping_id`) REFERENCES `shipping_details` (`shipping_id`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category` FOREIGN KEY (`category_ID`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
