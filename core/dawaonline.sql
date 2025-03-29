
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
                        `cart_id` int(11) NOT NULL,
                        `user_id` int(11) NOT NULL,
                        `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
                           `item_id` int(11) NOT NULL,
                           `item_name` varchar(255) NOT NULL,
                           `item_price` double(10,2) NOT NULL,
                           `item_image` varchar(255) NOT NULL,
                           `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- insert data for table `product`
--

INSERT INTO `product` (`item_id`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
                                                                                                              (1, 'BIODERMA', 110.00, 'images/product_01.png', '2025-01-28 18:13:57'), -- NOW()
                                                                                                              (2, 'Chanca Piedra', 250.00, 'images/product_02.png', '2025-01-28 18:14:57'),
                                                                                                              (3, 'Umcka coldCare', 130.00, 'images/product_03.png', '2025-01-28 18:14:57'),
                                                                                                              (4,  'CetylPure', 120.00, 'images/product_04.png', '2025-01-28 18:14:57'),
                                                                                                              (5, 'CLA CORE', 120.00, 'images/product_05.png', '2025-01-28 18:15:57'),
                                                                                                              (6,  'POO-POURRI', 140.00, 'images/product_06.png', '2025-01-28 18:15:57');
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
                         `user_id` int(11) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         `email` varchar(255) NOT NULL,
                         `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------



ALTER TABLE `cart`
    ADD PRIMARY KEY (`cart_id`);


ALTER TABLE `product`
    ADD PRIMARY KEY (`item_id`);


ALTER TABLE `users`
    ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
    MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
    MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;