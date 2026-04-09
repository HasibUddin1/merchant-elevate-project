-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 11:03 PM
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
-- Database: `vipekhdt_ecomsaleshub`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) NOT NULL,
  `paid_amount` float(10,2) NOT NULL,
  `paid_amount_currency` varchar(10) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `customer_name`, `customer_email`, `item_name`, `item_price`, `item_price_currency`, `paid_amount`, `paid_amount_currency`, `txn_id`, `payment_status`, `created`, `modified`) VALUES
(1, 'Hassan Javaid Rao', 'company@example.com', 'Business Plan', 69.80, 'USD', 69.80, 'usd', 'pi_3MuOKFIaU57BynBS2JtCB70V', 'succeeded', '2023-04-08 03:05:56', '2023-04-08 03:05:56'),
(2, 'Hassan Javaid Rao', 'company@example.com', 'Business Plan', 69.80, 'USD', 69.80, 'usd', 'pi_3MuOKFIaU57BynBS2JtCB70V', 'succeeded', '2023-04-08 03:05:56', '2023-04-08 03:05:56'),
(3, 'Hassan Javaid Rao', 'company@example.com', 'Basic Plan', 29.99, 'USD', 29.99, 'usd', 'pi_3MuOTfIaU57BynBS0lmK6RuK', 'succeeded', '2023-04-08 03:14:13', '2023-04-08 03:14:13'),
(4, 'hassan', 'hassanjrao@gmai.com', 'Business Plan', 69.80, 'USD', 69.80, 'usd', 'pi_3MvVazIaU57BynBS0Lchbb2V', 'succeeded', '2023-04-11 05:03:06', '2023-04-11 05:03:06'),
(5, 'Hassan', 'hassanjrao@gmail.com', 'Business Plan', 69.80, 'USD', 69.80, 'usd', 'pi_3MvVe7IaU57BynBS0CwXDmMI', 'succeeded', '2023-04-11 05:05:55', '2023-04-11 05:05:55'),
(6, 'hassan', 'hassanjrao@gmail.com', 'Business Plan', 69.80, 'USD', 69.80, 'usd', 'pi_3MvVgKIaU57BynBS0rCp5bGk', 'succeeded', '2023-04-11 05:08:06', '2023-04-11 05:08:06'),
(7, 'hassan', 'hassanjrao@mc.om', 'Business Plan', 69.80, 'USD', 69.80, 'usd', 'pi_3MvVhsIaU57BynBS2ZLoxnwU', 'succeeded', '2023-04-11 05:09:36', '2023-04-11 05:09:36'),
(8, 'hassan', 'hassanjrao@g.com', 'Business Plan', 69.80, 'USD', 69.80, 'usd', 'pi_3MvVikIaU57BynBS10L8WuYw', 'succeeded', '2023-04-11 05:10:55', '2023-04-11 05:10:55'),
(9, 'hassan', 'hassanjrao@gmai.com', 'Business Plan', 69.80, 'USD', 69.80, 'usd', 'pi_3MvVkaIaU57BynBS2sqLppEg', 'succeeded', '2023-04-11 05:12:28', '2023-04-11 05:12:28'),
(10, 'hassan', 'hassanjrao@gm.com', 'Business Plan', 69.80, 'USD', 69.80, 'usd', 'pi_3MvVsPIaU57BynBS2aMlb4oz', 'succeeded', '2023-04-11 05:20:26', '2023-04-11 05:20:26'),
(11, 'hassan', 'hassanjrao@gmail.com', 'Basic Plan', 29.99, 'USD', 29.99, 'usd', 'pi_3MvVuWIaU57BynBS1W7lrFVj', 'succeeded', '2023-04-11 05:23:35', '2023-04-11 05:23:35'),
(12, 'hassan', 'hassanjrao@gmo.com', 'Luxury Plan', 139.98, 'USD', 139.98, 'usd', 'pi_3MvVx7IaU57BynBS2Xs5ZPBD', 'succeeded', '2023-04-11 05:25:19', '2023-04-11 05:25:19'),
(13, 'hassan', 'h@m.com', 'Business Plan', 69.80, 'USD', 69.80, 'usd', 'pi_3MvVy5IaU57BynBS1OtEw0Yb', 'succeeded', '2023-04-11 05:26:16', '2023-04-11 05:26:16'),
(14, 'hassan', 'hassan@m.com', 'Business Plan', 69.80, 'USD', 69.80, 'usd', 'pi_3MvVzNIaU57BynBS2omJ67sV', 'succeeded', '2023-04-11 05:27:37', '2023-04-11 05:27:37'),
(15, 'hass', 'h@m.com', 'Basic Plan', 29.99, 'USD', 29.99, 'usd', 'pi_3MvW3RIaU57BynBS03Y0fCNc', 'succeeded', '2023-04-11 05:31:54', '2023-04-11 05:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(36, 'admin@admin.com', 'admin', '2023-10-09 07:27:31', NULL),
(44, 'hamzanazir0@gmail.com', 'hamza', '2023-10-30 02:27:31', NULL),
(45, 'admin@ecomsaleshub.com', 'admin', '2023-10-29 19:27:31', NULL),
(46, 'a@a.com', 'a', '2023-10-30 05:43:31', NULL),
(49, 'g@g.com', 'g', '2023-10-17 12:03:47', NULL),
(50, 'ecomsaleshub1@gmail.com', '3gtPM&9Ch3MiqBFz', '2023-10-30 07:31:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_detail_id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `date_of_birth` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `drivers_license_file` varchar(255) DEFAULT NULL,
  `tax_return_1` varchar(255) DEFAULT NULL,
  `tax_return_2` varchar(255) DEFAULT NULL,
  `bank_statement_1` varchar(255) DEFAULT NULL,
  `bank_statement_2` varchar(255) DEFAULT NULL,
  `utility_bill_file` varchar(255) DEFAULT NULL,
  `credit_score_file` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_detail_id`, `user_id`, `status`, `first_name`, `last_name`, `email`, `phone_number`, `date_of_birth`, `address`, `city`, `state`, `zip`, `drivers_license_file`, `tax_return_1`, `tax_return_2`, `bank_statement_1`, `bank_statement_2`, `utility_bill_file`, `credit_score_file`, `timestamp`) VALUES
(18, 36, 'Approved', 'Admin', 'admin', 'admin@admin.com', '123123123', '12-10-2001', 'Guest House Newyork Street, 41216 Dodoma, Dodoma Region, Tanzania', 'Dodoma', 'Dodoma Region', '41216', '../uploads/36/Driver License Admin admin.png', '../uploads/36/Tax Return 1 Admin admin.png', '../uploads/36/Tax Return 2 Admin admin.', '../uploads/36/Bank Statement 1 Admin admin.png', '../uploads/36/Bank Statement 2 Admin admin.', '../uploads/36/Utility Bill Admin admin.png', '../uploads/36/Credit Score Admin admin.png', '2023-10-25 21:30:39'),
(19, 46, 'Approved', '', 'a', 'a@a.com', 'a', '12-12-1212', 'Gatwala Park, PB, Pakistan', 'sadasd', 'asdasd', 'asdasdasd', '../uploads/46/Driver License asdas a.png', '../uploads/46/Tax Return 1 asdas a.png', '', '../uploads/46/Bank Statement 1 asdas a.png', '', '../uploads/46/Utility Bill asdas a.png', '../uploads/46/Credit Score asdas a.png', '2023-10-26 18:34:32'),
(20, 44, 'Rejected', 'Hamza', 'Nazir', 'hamzanazir0@gmail.com', '213414312412412', '10/10/2023', 'Teleplus Newyork LTD, Road Number 01, Gulshan, Dhaka - 2467, Bangladesh', 'Dhaka', 'Dhaka Division', '2467', '../uploads/44/Driver License Hamza Nazir.png', '../uploads/44/Tax Return 1 Hamza Nazir.png', '../uploads/44/Tax Return 2 Hamza Nazir.', '../uploads/44/Bank Statement 1 Hamza Nazir.png', '../uploads/44/Bank Statement 2 Hamza Nazir.', '../uploads/44/Utility Bill Hamza Nazir.png', '../uploads/44/Credit Score Hamza Nazir.png', '2023-10-26 18:36:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_detail_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
