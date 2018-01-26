-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2018 at 03:07 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`admin_id`, `admin_username`, `admin_password`) VALUES
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
  `customers_id` int(11) NOT NULL
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
(1, 'Osprey Daylite Plus 20L Travel Pack Beryl Blue', 'OSPREY-407-BB', '<p>Traveling can be difficult but the Daylite makes it easier. With protected, padded storage for a laptop, and just enough organization to keep you moving through the terminal, it\'s the travel companion you never leave behind.</p>', '<p>The Daylite Series started out with humble beginnings, a simple accessory to attach to our larger packs. However, its lightweight, simplicity, durability, comfortable carry and price has proven to be wildly popular, and today their popularity is undeniable. While the Daylite and Daylite Plus continue to serve well as add-on packs for traveling and more, they shine on their own with incredible versatility and are now available in an even more robust color palette than before.</p>\r\n<strong><p class=\"\"orange\"\">Features</p></strong>\r\n<ul>\r\n<li>Large panel-loading main compartment</span></li>\r\n<li>Attaches to a variety of compatible Osprey packs</span></li>\r\n<li>Side mesh pockets</span></li>\r\n<li>Front pocket with mesh organizer and key clip</span></li>\r\n<li>Spacermesh shoulder straps with integrated handle</span></li>\r\n<li>Multi-function interior sleeve for hydration or tablet</span></li>\r\n<li>Mesh-covered backpanel with slotted foam</span></li>\r\n</ul>\r\n<strong><p class=\"orange\">Features</p></strong>\r\n<p><strong>Main</strong> - 210D Nylon Double Diamond Ripstop</p>\r\n<p><strong>Accent</strong> - 400HD Nylon Packcloth</p>\r\n<p><strong>Bottom</strong> - 400HD Nylon Packcloth</p>', '3250.00', 2, 'assets/img/products/Osprey_Daylite_Plus_20L_Travel_Pack_Beryl_Blue_1.jpg\r\n', 'Osprey Daylite Plus 20L Travel Pack Beryl Blue', 'Traveling can be difficult but the Osprey Daylite Plus 20L Travel Pack makes it easier', 'osprey, hiking, manila outdoors, backpack', 2, '2018-01-26 08:24:44'),
(2, 'Ticket to the moon Double Hammock Turquoise / Green', 'TMD1411', '<p>Ticket to the Moon make leight travel hammocks of parachute silk. This breathable nylon dries fast and can be washed. The hammock is packed in a small pouch which is sewed on the hammock and can also be used to put small things in it.</p>', '<p>That is the freedom of today. No luxury, no time planner, only nature, your hammock and you. And if you are on the road \r\nyou appreciate leight luggage. That is why the Ticket to the Moon founder had the idea to create a light weight travel hammock. \r\nThe result are today\'s Ticket to the Moon travel hammocks made of parachute silk. This functional material is not only light but \r\nalso breathable, soft to the skin and washable. You can take this Ticket to the Moon light hammock everywhere, for the holidays, a weekend trip or on a boat for instance. Carrying bag included.</p>\r\n\r\n<strong><p class=\"orange\">Features:</p></strong>\r\n\r\n<ul>\r\n<li>The parachute hammock was made by travellers for travellers. </li>\r\n<li>A comfortable sleep and ideal protection from insects and small reptiles. </li>\r\n<li>It can replace your tent: lightweight, strong, and foldable.</li>\r\n<li>The hammock sets up in less than a minute. </li>\r\n<li>Is rot-resistant and quick to dry (machine washable 30Â°C). </li>\r\n<li>Ideal for camping, trekking and any outdoor activities.</li>\r\n</ul>\r\n\r\n<strong><p class=\"orange\">Specifications:</p></strong>\r\n<p><strong>Load Capacity: </strong>200 kg - 440 lbs<br></p>\r\n<p><strong>Color: </strong>Turquoise / Green<br></p>\r\n<p><strong>Weight: </strong>600 g/1.3 lbs<br></p>\r\n<p><strong>Dimensions: </strong>320 x 200 cm/10.5 x 6.5 ft<br></p>', '3200.00', 12, 'assets/img/products/Ticket_to_the_moon_Double_Hammock_Turquoise_Green_1.jpg', 'Ticket to the moon Double Hammock Turquoise / Green', 'Ticket to the Moon make leight travel hammocks of parachute silk. This breathable nylon dries fast and can be washed. The hammock is packed in a small pouch which is sewed on the hammock and can also be used to put small things in it.', 'hammock, ticket to the moon, manila outdoors, sleeping gear, camping gear', 5, '2018-01-26 08:26:00'),
(3, 'Craghoppers Kimba Lite Men\'s Jacket - Royal Navy', 'CMW694-RN', '<p>The Kimba jacket is constructed from a highly durable yet breathable fabric with Craghoppers innovative AquaDry membrane technology for an optimal performance in all weather conditions. </p>', '<strong><p class=\"orange\">Features:</p></strong>\r\n<ul>\r\n<li>Waterproof, windproof,breathable Aquadry</li> <li>fabric</li>\r\n<li>Stylish cut</li>\r\n<li>Reflective trim</li>\r\n<li>Drawcorded hood</li>\r\n<li>Zippered pockets</li>\r\n<li>Hem Drawcord</li>\r\n<li>Map pocket</li>\r\n<li>Hook and Loop adjustable cuffs</li>\r\n<li>Packable</li>\r\n</ul>\r\n<strong><p class=\"orange\">Specifications:</p></strong>\r\n<p><strong>Color:</strong> Royal Navy<br></p>\r\n<p><strong>Weight:</strong> 750 g<br></p>', '7300.00', 0, 'assets/img/products/Craghoppers_Kimba_Lite_Mens_Jacket_Royal_Navy_1.jpg', 'Craghoppers Kimba Lite Men\'s Jacket - Royal Navy', 'The Craghoppers Kimba Lite Men\'s Jacket - Royal Navy is constructed from a highly durable yet breathable fabric with Craghoppersâ€™s innovative AquaDry membrane technology for an optimal performance in all weather conditions. ', 'craghoppers, kimba, kimba jacket, hiking apparel, manila outdoors', 1, '2018-01-26 08:30:00'),
(4, 'Vargo Titanium Spoon / Fork / Knife Set', 'T-216', '<p>Slightly lighter than our standard campware set, the ULV version features a matte finish and narrow design.</p>', '<p>The Vargo Titanium Spoon/Fork/Knife Set - ULV (U.ltra L.ight V.ersion) features a smaller, narrower design to make them lighter than our standard Titanium Spoon/Fork/Knife Set.</p>\r\n<strong><p class=\"orange\">Features:</p></strong>\r\n<ul>\r\n<li>Matte finish</li>\r\n<li>Made of pure titanium</li>\r\n<li>Biocompatible</li>\r\n<li>Lighter than Lexan utensils</li>\r\n<li>Each piece weighs less than 0.5 ounces (14 grams)</li>\r\n<li>Mini carabiner included</li>\r\n</ul>\r\n<strong><p class=\"orange\">Specifications:</p></strong>\r\n<p><strong>Weight: </strong>38 grams <br></p>\r\n<p><strong>Size: </strong>15.2cm </p>', '1600.00', 24, 'assets/img/products/Vargo_Titanium_Spoon_Fork_Knife_Set_1.jpg', 'Vargo Titanium Spoon / Fork / Knife Set', 'Slightly lighter than our standard campware set, the Vargo Titanium Spoon / Fork / Knife Set version features a matte finish and narrow design.', 'vargo, hiking, camping cutlery, spoon, fork', 4, '2018-01-26 08:33:41'),
(9, 'rabbit', 'rabbitSKU', 'rabbit short description', 'rabbit long description', '2222.00', 1, 'assets/img/products/Rabbit1.jpg', 'rabbit meta title', 'rabbit meta description', 'rabbit meta keywords', 2, '2018-01-26 01:47:18');

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
  ADD KEY `customers_id` (`customers_id`);

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
  MODIFY `product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `customers_id` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_id` FOREIGN KEY (`payment_id`) REFERENCES `payment_details` (`payment_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category` FOREIGN KEY (`category_ID`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
