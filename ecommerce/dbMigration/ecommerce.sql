--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'DELL'),
(3, 'LG'),
(4, 'Samsung'),
(5, 'Sony'),
(6, 'Toshiba'),
(8, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(7, '::1', 1),
(8, '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Laptops'),
(2, 'Cameras'),
(3, 'Cell phone'),
(4, 'Computers'),
(8, 'IPad');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`) VALUES
(8, '::1', 'Tushar Upadhyay', 'tsu1120030@utdallas.edu', 'swaminarayan', 'United States', 'Irving', '4367', '109 Cimarron trl Apt 2081', 'WIN_20140120_203346.JPG'),
(9, '::1', 'TusharUpadhyay', 'tushar.upadhyay@live.com', 'shyam777', 'United States', 'framingham', '456-789-8888', 'faaagaga', 'IMG_20160526_142556.jpg'),
(10, '::1', 'Sid Jhaveri', 'si.jhaveri@gmail.com', 'sidjhaveri', 'United States', 'boston', '456-789-1234', 'newton ', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `status` text NOT NULL,
  `order_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `p_id`, `c_id`, `qty`, `invoice_no`, `status`, `order_date`) VALUES
(8, 5, 0, 2, 705705316, 'in Progress', '2014-08-08'),
(9, 7, 6, 1, 1935681132, 'in Progress', '2014-08-08'),
(10, 9, 6, 3, 1817786416, 'in Progress', '2014-08-08'),
(11, 5, 6, 2, 423122154, 'in Progress', '2014-08-08'),
(12, 8, 6, 4, 496641685, 'in Progress', '2014-08-08'),
(13, 10, 7, 2, 11112, 'in Progress', '2015-12-02'),
(14, 6, 7, 1, 11112, 'in Progress', '2015-12-02'),
(15, 8, 7, 1, 11112, 'in Progress', '2015-12-02'),
(16, 5, 34, 1, 11112, 'in Progress', '2015-12-02'),
(17, 7, 34, 1, 11112, 'in Progress', '2015-12-02'),
(18, 9, 34, 1, 11112, 'in Progress', '2015-12-02'),
(19, 5, 35, 1, 11112, 'in Progress', '2015-12-02'),
(20, 8, 35, 1, 11112, 'in Progress', '2015-12-02'),
(21, 10, 35, 1, 11112, 'in Progress', '2015-12-02'),
(22, 8, 36, 1, 11112, 'in Progress', '2015-12-02'),
(23, 8, 34, 2, 11112, 'in Progress', '2015-12-06'),
(24, 9, 34, 1, 11112, 'in Progress', '2015-12-06'),
(25, 10, 34, 1, 11112, 'in Progress', '2015-12-06'),
(26, 10, 34, 1, 11112, 'in Progress', '2015-12-06'),
(27, 9, 34, 1, 11112, 'in Progress', '2015-12-06'),
(28, 10, 34, 1, 11112, 'in Progress', '2015-12-06'),
(29, 5, 34, 1, 11112, 'in Progress', '2015-12-06'),
(30, 6, 34, 1, 11112, 'in Progress', '2015-12-06'),
(31, 6, 34, 1, 11112, 'in Progress', '2015-12-06'),
(32, 7, 34, 1, 11112, 'in Progress', '2015-12-06'),
(33, 9, 40, 4, 11112, 'in Progress', '2015-12-07'),
(34, 10, 40, 2, 11112, 'in Progress', '2015-12-07'),
(35, 8, 7, 1, 11112, 'in Progress', '2015-12-07'),
(36, 9, 7, 2, 11112, 'in Progress', '2015-12-07'),
(37, 10, 7, 1, 11112, 'in Progress', '2015-12-07'),
(38, 12, 8, 1, 11112, 'in Progress', '2015-12-11'),
(39, 5, 9, 1, 11112, 'in Progress', '2018-02-10'),
(40, 8, 9, 1, 11112, 'in Progress', '2018-02-10'),
(41, 9, 9, 4, 11112, 'in Progress', '2018-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `currency` text NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `amount`, `customer_id`, `product_id`, `trx_id`, `currency`, `payment_date`) VALUES
(1, 800, 5, 6, '31B07494JS505133P', 'USD', '0000-00-00'),
(2, 500, 5, 9, '18747053K31546734', 'USD', '0000-00-00'),
(3, 1000, 5, 9, '183154524M7953521', 'USD', '0000-00-00'),
(4, 900, 5, 5, '8L053110TE658224T', 'USD', '2014-07-21'),
(5, 450, 5, 8, '42M62596JN658381G', 'USD', '2014-07-21'),
(6, 600, 5, 6, '1FC71986FP579232R', 'USD', '2014-07-21'),
(7, 500, 0, 9, '0AH67056C64289013', 'USD', '2014-07-23'),
(8, 1800, 0, 5, '1F431738AY795223E', 'USD', '2014-08-08'),
(9, 250, 6, 7, '3G918931JL634141Y', 'USD', '2014-08-08'),
(10, 1500, 6, 9, '0BF7586175203573G', 'USD', '2014-08-08'),
(11, 1800, 6, 5, '7RS823437E828061K', 'USD', '2014-08-08'),
(12, 1800, 6, 8, '84J65197FN011600G', 'USD', '2014-08-08'),
(13, 0, 7, 10, '123456ghgh', 'USD', '2015-12-02'),
(14, 200, 7, 6, '123456ghgh', 'USD', '2015-12-02'),
(15, 450, 7, 8, '123456ghgh', 'USD', '2015-12-02'),
(16, 900, 34, 5, '123456ghgh', 'USD', '2015-12-02'),
(17, 250, 34, 7, '123456ghgh', 'USD', '2015-12-02'),
(18, 500, 34, 9, '123456ghgh', 'USD', '2015-12-02'),
(19, 900, 35, 5, '123456ghgh', 'USD', '2015-12-02'),
(20, 450, 35, 8, '123456ghgh', 'USD', '2015-12-02'),
(21, 400, 35, 10, '123456ghgh', 'USD', '2015-12-02'),
(22, 450, 36, 8, '123456ghgh', 'USD', '2015-12-02'),
(23, 450, 34, 8, '123456ghgh', 'USD', '2015-12-06'),
(24, 500, 34, 9, '123456ghgh', 'USD', '2015-12-06'),
(25, 400, 34, 10, '123456ghgh', 'USD', '2015-12-06'),
(26, 400, 34, 10, '123456ghgh', 'USD', '2015-12-06'),
(27, 500, 34, 9, '123456ghgh', 'USD', '2015-12-06'),
(28, 400, 34, 10, '123456ghgh', 'USD', '2015-12-06'),
(29, 900, 34, 5, '123456ghgh', 'USD', '2015-12-06'),
(30, 200, 34, 6, '123456ghgh', 'USD', '2015-12-06'),
(31, 200, 34, 6, '123456ghgh', 'USD', '2015-12-06'),
(32, 250, 34, 7, '123456ghgh', 'USD', '2015-12-06'),
(33, 500, 40, 9, '123456ghgh', 'USD', '2015-12-07'),
(34, 400, 40, 10, '123456ghgh', 'USD', '2015-12-07'),
(35, 450, 7, 8, '123456ghgh', 'USD', '2015-12-07'),
(36, 500, 7, 9, '123456ghgh', 'USD', '2015-12-07'),
(37, 400, 7, 10, '123456ghgh', 'USD', '2015-12-07'),
(38, 1000, 8, 12, '123456ghgh', 'USD', '2015-12-11'),
(39, 900, 9, 5, '123456ghgh', 'USD', '2018-02-10'),
(40, 450, 9, 8, '123456ghgh', 'USD', '2018-02-10'),
(41, 500, 9, 9, '123456ghgh', 'USD', '2018-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(5, 3, 4, 'Samsung mobile', 900, '<p>Front camera: 5MP back camera: 10MP qualcomm processor &nbsp;</p>', 'Samsung-Galaxy-Tab-tablet.jpg', 'Samsung, Cameras, Special'),
(7, 2, 6, 'Toshiba Camera ', 250, '<p>This is a great camera...</p>', 'professional-video-camera.jpg', 'Toshiba, cameras, Special'),
(8, 3, 5, 'Nokia Lumia ', 450, '<p>this is a great thing....</p>', 'nokia-windows-200-dollar-tablet2-640x353.jpg', 'Samsung, Cameras, Special'),
(9, 1, 2, 'Dell XPS Laptop', 500, '<p>this is a very nice <strong>laptop</strong> and I like it very much....</p>', '1.jpg', 'dell, laptops, new, special'),
(10, 1, 1, 'HP Envy Laptop', 400, '<p>this is so much nice laptop..</p>', 'original.jpg', 'dell, laptops, new, special'),
(12, 8, 8, 'Ipad air', 1000, '<p>A6 Qualcomm processor&nbsp;</p>', 'ipad-air-white.jpg', 'ipad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
