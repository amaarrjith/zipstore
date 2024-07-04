-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql201.byetcluster.com
-- Generation Time: Apr 15, 2024 at 12:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_36290200_zipstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `login_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`login_id`, `username`, `password`) VALUES
(1, 'amaarrjith', 'Jithu@123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_billing`
--

CREATE TABLE `tbl_billing` (
  `billing_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address_1` text NOT NULL,
  `address_2` text NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` bigint(6) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_billing`
--

INSERT INTO `tbl_billing` (`billing_id`, `customer_id`, `bill_id`, `first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`, `payment`) VALUES
(1, 1, 1011, 'AMARJITH ', 'B', 'jithurdh17@gmail.com', 9061800209, 'Radeepam Knra 88', 'PO Chevayur ', 'KOZHIKODE', 'Calicut', 673017, 'Nothing', 'Online-Payment'),
(2, 15, 1002, 'Sreeja', 'V', 'cssurya08072003@gmail.com', 9400685309, 'Santhi nagar second Street ', '', 'KOLLAM', 'Malappuram', 679329, 'HSS College ', 'Cash-On-Delivery'),
(3, 16, 1003, 'Akhil k', 'K', 'akhiljr100@gmail.com', 9645335074, 'Kullapurath house po puthiyangadi pavangad', '', 'KOZHIKODE', 'Pavangad', 673021, 'Eicher', 'Cash-On-Delivery'),
(4, 17, 1004, 'Sujith', 'PB', 'sujithpbiju2000@gmail.com', 9645689736, 'Pala', 'Palq', 'KOTTAYAM', 'KOTTAYAM', 686576, 'Church road pala', 'Cash-On-Delivery'),
(5, 18, 1005, 'Saketha', 'Sajesh', 'sakethasajesh09@gmail.com', 1917306864315, 'Jubilee house', 'Kovur kozhukode ', 'KOZHIKODE', 'Kozhikode', 673017, 'Values supermarket', 'Cash-On-Delivery'),
(6, 1, 1011, 'Bhavya ', 'Das K', 'jithurdh17@gmail.com', 9061800209, 'Saraswathi Nivas , Parayancheri , ', 'Kuthiravattom po ', 'KOZHIKODE', 'KOZHIKODE', 673016, 'NEAR', 'Online-Payment'),
(7, 19, 1012, 'Ashwin', 'Jith', 'Ashwinjith9388@gmail.com ', 73566, 'Kavu nagar', '', 'KOZHIKODE', 'Calicut', 673571, 'Best bakery ', 'Online-Payment');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `cart_date` date NOT NULL,
  `cart_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `product_id`, `rate`, `customer_id`, `cart_date`, `cart_status`) VALUES
(175, 6, '25000', 0, '2024-04-09', 'carted'),
(176, 6, '25000', 0, '2024-04-09', 'carted');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Home Appliances'),
(2, 'Electronic Gadgets '),
(3, 'Cosmetics'),
(4, 'Footwears'),
(7, 'Grocery');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `registration_date` date NOT NULL,
  `password` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `email_id`, `contact_no`, `registration_date`, `password`, `status`) VALUES
(1, 'AMARJITH B', 'jithurdh17@gmail.com', 9061800209, '2024-03-20', 'Jithu@123', 'active'),
(3, 'Baijulal E', 'baijulal@gmail.com', 9061800209, '2024-03-20', '12121974', 'active'),
(4, 'Baijulal E', 'baijulalayswariya@gmail.com', 9048247564, '2024-03-20', 'Baiju@123', 'active'),
(5, 'deepa', 'jithurdh17@gmail.com', 7034350083, '2024-03-23', '123456', 'active'),
(6, 'akash k', 'k814948@gmail.com', 7306216003, '2024-04-03', 'akash123', 'active'),
(7, 'AMARJITH B', 'jithurdh21@gmail.com', 9061800200, '2024-04-09', 'Amarjith@123', 'active'),
(8, 'AMARJITH B', 'jithurdh21@gmail.com', 9061800200, '2024-04-09', 'Amarjith@123', 'active'),
(9, 'ttffgf nbhnbnb', 'jithurdh17@gmail.com', 9061800209, '2024-04-09', 'Jithuohfuad', 'active'),
(10, 'ttffgf nbhnbnb', 'jithurdh17@gmail.com', 9061800209, '2024-04-09', 'Jithuohfuad', 'active'),
(11, 'AMARJITH B', 'jithurdh17@gmail.com', 2352613716, '2024-04-09', 'Jithu@123', 'active'),
(12, 'AMARJITH B', 'jithurdh17@gmail.com', 2352613716, '2024-04-09', 'Jithu@123', 'active'),
(13, 'AMARJITH B', 'jithurdh17@gmail.com', 2352613716, '2024-04-09', 'Jithu@123', 'active'),
(14, '', '', 0, '2024-04-09', '', 'active'),
(15, 'SURYA C S', 'cssurya08072003@gmail.com', 9400685309, '2024-04-09', 'Surya@123', 'active'),
(16, 'Akhil k', 'akhiljr100@gmail.com', 9645335074, '2024-04-09', 'Akhiljr10', 'active'),
(17, 'Sujith PB', 'sujithpbiju2000@gmail.com', 9645689736, '2024-04-09', 'Sujith@123', 'active'),
(18, 'Saketha', 'sakethasajesh09@gmail.com', 1917306864315, '2024-04-10', 'saaah', 'active'),
(19, 'Ashwin ', 'Ashwinjith9388@gmail.com ', 73566, '2024-04-12', 'delete123', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(1, 'ALAPPUZHA'),
(2, 'ERNAKULAM'),
(3, 'IDUKKI'),
(4, 'KANNUR'),
(5, 'KASARGODE'),
(6, 'KOLLAM'),
(7, 'KOTTAYAM'),
(8, 'KOZHIKODE'),
(9, 'MALAPPURAM'),
(10, 'PALAKKAD'),
(11, 'PATHANAMTHITTA'),
(12, 'THIRUVANANTHAPURAM'),
(13, 'THRISSUR'),
(14, 'WAYANAD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order(details)`
--

CREATE TABLE `tbl_order(details)` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `bill_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_detail_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order(details)`
--

INSERT INTO `tbl_order(details)` (`order_id`, `order_date`, `bill_id`, `customer_id`, `quantity`, `product_id`, `order_detail_status`) VALUES
(1, '2024-04-09', 1001, 1, 1, 12, 'confirmed'),
(2, '2024-04-09', 1002, 15, 1, 10, 'confirmed'),
(3, '2024-04-09', 1003, 16, 1, 13, 'confirmed'),
(4, '2024-04-09', 1004, 17, 1, 3, 'confirmed'),
(5, '2024-04-10', 1005, 18, 1, 4, 'confirmed'),
(6, '2024-04-12', 1011, 1, 1, 4, 'confirmed'),
(7, '2024-04-12', 1012, 19, 1, 15, 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order(master)`
--

CREATE TABLE `tbl_order(master)` (
  `master_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `total_amount` bigint(20) NOT NULL,
  `order_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order(master)`
--

INSERT INTO `tbl_order(master)` (`master_id`, `customer_id`, `order_date`, `total_amount`, `order_status`) VALUES
(1000, 0, '0000-00-00', 0, ''),
(1001, 1, '2024-04-09', 950, 'delivered'),
(1002, 15, '2024-04-09', 220, 'delivered'),
(1003, 16, '2024-04-09', 1500, 'delivered'),
(1004, 17, '2024-04-09', 54999, 'delivered'),
(1005, 18, '2024-04-10', 40000, 'shipped'),
(1006, 18, '2024-04-10', 40000, 'confirmed'),
(1007, 18, '2024-04-10', 40000, 'confirmed'),
(1008, 18, '2024-04-10', 40000, 'confirmed'),
(1009, 18, '2024-04-10', 40000, 'confirmed'),
(1010, 18, '2024-04-10', 40000, 'confirmed'),
(1011, 1, '2024-04-12', 40000, 'shipped'),
(1012, 19, '2024-04-12', 130, 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `card_no` bigint(50) NOT NULL,
  `total_amount` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `bill_id`, `payment_date`, `card_no`, `total_amount`) VALUES
(1, 1001, '0000-00-00', 0, 950),
(2, 1011, '0000-00-00', 0, 40000),
(3, 1012, '0000-00-00', 0, 130);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` text NOT NULL,
  `product_description` text NOT NULL,
  `stock` varchar(5) NOT NULL,
  `og_rate` varchar(20) NOT NULL,
  `rate` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `subcategory_id`, `product_name`, `product_image`, `product_description`, `stock`, `og_rate`, `rate`, `status`) VALUES
(2, 2, 3, 'IPhone 14 Pro , 128 GB', 'Iphone15Pro.png', 'Dynamic Island | 128 GB | Color : Black | 5G Technology', '92', '1,23,000', '99999', 'Live'),
(3, 2, 3, 'IPhone 14  , 128 GB', 'Iphone15Pro.png', 'IPhone 14 | Size 128 GB | Operating System	IOS | 5G Technology', '93', '59.999', '54999', 'Live'),
(4, 2, 3, 'IPhone 13  , 128 GB', 'Iphone15Pro.png', 'IPhone 13  | Size 128 GB | Operating System IOS | 5G Technology', '197', '46,999', '40000', 'Live'),
(6, 1, 1, 'Panasonic LED-Backlit LCD HD TV', 'panasonictv.png', 'TV', '71', '32,000', '25000', 'Live'),
(7, 1, 2, 'Haier Refrigerator Double Door', 'pngwing.com (3).png', 'High Quality ', '93', '55,000', '40000', 'Live'),
(8, 1, 9, 'Haier Air Conditioner - Inverter ', 'pngwing.com (4).png', 'Haier AC With Inbuild Inverter', '97', '35000', '25000', 'Live'),
(9, 2, 4, 'Mac Book Pro Apple M2 ', 'â€”Pngtreeâ€”apple macbook pro vector_8933405.png', 'High Quality ', '83', '299999', '215000', 'Live'),
(10, 3, 5, 'Nivea Men Face Wash', 'nivea.png', 'None', '74', '160', '120', 'Active'),
(11, 2, 11, 'Apple Watch Series 2', 'pngwing.com (6).png', 'With Call Function', '89', '50400', '45999', 'Live'),
(12, 3, 7, 'N5 Channel Fragrance Bottle', 'pngwing.com (7).png', 'Good Smell', '97', '1500', '850', 'Live'),
(13, 4, 8, 'Adidas Shoe ', 'shoe.png', 'Good Shoe', '100', '2000', '1500', 'Live'),
(14, 7, 10, 'Ponni Rice 5 KG ', 'Rice_image.png', '5 KG Ponni Rice | Pure Quality ', '100', '275', '220', 'Live'),
(15, 7, 12, 'Onion 1KG ', 'pngwing.com 2.png', 'High Quality Onion', '99', '33', '30', 'Live');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_redeem`
--

CREATE TABLE `tbl_redeem` (
  `redeem_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `reedem_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address_1` text NOT NULL,
  `address_2` text NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` bigint(6) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `customer_id`, `bill_id`, `first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`, `payment`) VALUES
(1, 1, 1011, 'AMARJITH ', 'B', 'jithurdh17@gmail.com', 9061800209, 'Radeepam Knra 88', 'PO Chevayur ', 'KOZHIKODE', 'Calicut', 673017, 'Nothing', 'Online-Payment'),
(2, 15, 1002, 'Sreeja', 'V', 'cssurya08072003@gmail.com', 9400685309, 'Santhi nagar second Street ', '', 'KOLLAM', 'Malappuram', 679329, 'HSS College ', 'Cash-On-Delivery'),
(3, 16, 1003, 'Akhil k', 'K', 'akhiljr100@gmail.com', 9645335074, 'Kullapurath house po puthiyangadi pavangad', '', 'KOZHIKODE', 'Pavangad', 673021, 'Eicher', 'Cash-On-Delivery'),
(4, 17, 1004, 'Sujith', 'PB', 'sujithpbiju2000@gmail.com', 9645689736, 'Pala', 'Palq', 'KOTTAYAM', 'KOTTAYAM', 686576, 'Church road pala', 'Cash-On-Delivery'),
(5, 18, 1005, 'Saketha', 'Sajesh', 'sakethasajesh09@gmail.com', 1917306864315, 'Jubilee house', 'Kovur kozhukode ', 'KOZHIKODE', 'Kozhikode', 673017, 'Values supermarket', 'Cash-On-Delivery'),
(6, 1, 1011, 'Bhavya ', 'Das K', 'jithurdh17@gmail.com', 9061800209, 'Saraswathi Nivas , Parayancheri , ', 'Kuthiravattom po ', 'KOZHIKODE', 'KOZHIKODE', 673016, 'NEAR', 'Online-Payment'),
(7, 19, 1012, 'Ashwin', 'Jith', 'Ashwinjith9388@gmail.com ', 73566, 'Kavu nagar', '', 'KOZHIKODE', 'Calicut', 673571, 'Best bakery ', 'Online-Payment');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(100) NOT NULL,
  `subcategory_img` text NOT NULL,
  `subcategory_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `category_id`, `subcategory_name`, `subcategory_img`, `subcategory_description`) VALUES
(1, 1, 'Television', 'tv.png', 'None'),
(2, 1, 'Refrigerator', 'fridge.png', 'None'),
(3, 2, 'IPhone', 'iphone.png', 'None'),
(4, 2, 'Lap-Tops', 'laptop.png', 'None'),
(5, 3, 'Body Care Products', 'Body Care.png', 'None'),
(7, 3, 'Fragrance Combo', 'perfumes.png', 'None'),
(8, 4, 'Shoes', 'Screenshot (4).png', 'Nice shoes'),
(9, 1, 'Air conditioner', 'pngwing.com (2).png', 'Nice AC'),
(10, 7, 'Rice', '', ''),
(11, 2, 'Smart-Watches', 'pngwing.com (6).png', 'None'),
(12, 7, 'Vegetables', 'pngwing.com.png', 'Vegetables ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_billing`
--
ALTER TABLE `tbl_billing`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_order(details)`
--
ALTER TABLE `tbl_order(details)`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order(master)`
--
ALTER TABLE `tbl_order(master)`
  ADD PRIMARY KEY (`master_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_billing`
--
ALTER TABLE `tbl_billing`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_order(details)`
--
ALTER TABLE `tbl_order(details)`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_order(master)`
--
ALTER TABLE `tbl_order(master)`
  MODIFY `master_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
