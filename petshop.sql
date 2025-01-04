-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2025 at 10:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin') NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `email`, `password`, `role`) VALUES
(1, 'Admin Gaoel', 'laianeville8@gmail.com', '$2y$10$r8umTKlNhteyNvS9mdxVqOeG/FSzOmI7UBF3h0/PTOnL.C.JdDmoe', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('member') NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`user_id`, `username`, `email`, `password`, `role`) VALUES
(1, 'udin', 'udin@gmail.com', '$2y$10$MMMQLDgUrQW7yRVh8mAuFuG2PQOS8ZvGE6FmlOX9Gfn81LPk768.m', 'member'),
(2, 'syarah', 'syarahafni08@gmail.com', '$2y$10$vj8Z7L/XxH5qv02ywDMD3uhC7L5wg03dogWJASq9iq0LOyQas3x/S', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-05-06-043915', 'App\\Database\\Migrations\\Admin', 'default', 'App', 1733571035, 1),
(2, '2023-05-06-052555', 'App\\Database\\Migrations\\Member', 'default', 'App', 1733571036, 1),
(3, '2023-05-08-051433', 'App\\Database\\Migrations\\Prosev', 'default', 'App', 1733571036, 1),
(4, '2023-05-09-150406', 'App\\Database\\Migrations\\OrderTransaction', 'default', 'App', 1733571036, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_transaction`
--

CREATE TABLE `order_transaction` (
  `transaction_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `prosev_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_transaction`
--

INSERT INTO `order_transaction` (`transaction_id`, `user_id`, `prosev_id`, `stock`, `amount`) VALUES
(1, 2, 1, 1, 80000);

-- --------------------------------------------------------

--
-- Table structure for table `prosev`
--

CREATE TABLE `prosev` (
  `prosev_id` int(11) UNSIGNED NOT NULL,
  `prosev_name` varchar(255) NOT NULL,
  `prosev_price` bigint(20) NOT NULL,
  `prosev_desc` varchar(255) NOT NULL,
  `prosev_img` varchar(255) NOT NULL,
  `prosev_stock` int(11) NOT NULL DEFAULT 0,
  `prosev_category` enum('Product','Service') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `prosev`
--

INSERT INTO `prosev` (`prosev_id`, `prosev_name`, `prosev_price`, `prosev_desc`, `prosev_img`, `prosev_stock`, `prosev_category`) VALUES
(1, 'Whiskas', 80000, 'makanan kucing yang bergizi', '1733571552_a967e48b78f5985772f4.jpeg', 49, 'Product');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_transaction`
--
ALTER TABLE `order_transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `prosev`
--
ALTER TABLE `prosev`
  ADD PRIMARY KEY (`prosev_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_transaction`
--
ALTER TABLE `order_transaction`
  MODIFY `transaction_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prosev`
--
ALTER TABLE `prosev`
  MODIFY `prosev_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
