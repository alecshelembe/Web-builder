-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 10:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `standard` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `menu-link-1` varchar(200) NOT NULL,
  `menu-link-2` varchar(200) NOT NULL,
  `menu-link-3` varchar(200) NOT NULL,
  `menu-link-4` varchar(200) NOT NULL,
  `main-heading` varchar(200) NOT NULL,
  `paragraph-heading` varchar(200) NOT NULL,
  `header-a` varchar(200) NOT NULL,
  `product-a-1` varchar(200) NOT NULL,
  `product-a-2` varchar(200) NOT NULL,
  `product-a-3` varchar(200) NOT NULL,
  `product-a-4` varchar(200) NOT NULL,
  `header-b` varchar(200) NOT NULL,
  `product-b-1` varchar(200) NOT NULL,
  `product-b-2` varchar(200) NOT NULL,
  `product-b-3` varchar(200) NOT NULL,
  `product-b-4` varchar(200) NOT NULL,
  `header-c` varchar(200) NOT NULL,
  `product-c-1` varchar(200) NOT NULL,
  `product-c-2` varchar(200) NOT NULL,
  `product-c-3` varchar(200) NOT NULL,
  `product-c-4` varchar(200) NOT NULL,
  `header-d` varchar(200) NOT NULL,
  `product-d-1` varchar(200) NOT NULL,
  `product-d-2` varchar(200) NOT NULL,
  `product-d-3` varchar(200) NOT NULL,
  `product-d-4` varchar(200) NOT NULL,
  `header-e` varchar(200) NOT NULL,
  `product-e-1` varchar(200) NOT NULL,
  `product-e-2` varchar(200) NOT NULL,
  `product-e-3` varchar(200) NOT NULL,
  `product-e-4` varchar(200) NOT NULL,
  `header-f` varchar(200) NOT NULL,
  `product-f-1` varchar(200) NOT NULL,
  `product-f-2` varchar(200) NOT NULL,
  `product-f-3` varchar(200) NOT NULL,
  `product-f-4` varchar(200) NOT NULL,
  `header-g` varchar(200) NOT NULL,
  `product-g-1` varchar(200) NOT NULL,
  `product-g-2` varchar(200) NOT NULL,
  `product-g-3` varchar(200) NOT NULL,
  `product-g-4` varchar(200) NOT NULL,
  `header-h` varchar(200) NOT NULL,
  `product-h-1` varchar(200) NOT NULL,
  `product-h-2` varchar(200) NOT NULL,
  `product-h-3` varchar(200) NOT NULL,
  `product-h-4` varchar(200) NOT NULL,
  `header-i` varchar(200) NOT NULL,
  `product-i-1` varchar(200) NOT NULL,
  `product-i-2` varchar(200) NOT NULL,
  `product-i-3` varchar(200) NOT NULL,
  `product-i-4` varchar(200) NOT NULL,
  `header-j` varchar(200) NOT NULL,
  `product-j-1` varchar(200) NOT NULL,
  `product-j-2` varchar(200) NOT NULL,
  `product-j-3` varchar(200) NOT NULL,
  `product-j-4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`standard`, `title`, `number`, `email`, `menu-link-1`, `menu-link-2`, `menu-link-3`, `menu-link-4`, `main-heading`, `paragraph-heading`, `header-a`, `product-a-1`, `product-a-2`, `product-a-3`, `product-a-4`, `header-b`, `product-b-1`, `product-b-2`, `product-b-3`, `product-b-4`, `header-c`, `product-c-1`, `product-c-2`, `product-c-3`, `product-c-4`, `header-d`, `product-d-1`, `product-d-2`, `product-d-3`, `product-d-4`, `header-e`, `product-e-1`, `product-e-2`, `product-e-3`, `product-e-4`, `header-f`, `product-f-1`, `product-f-2`, `product-f-3`, `product-f-4`, `header-g`, `product-g-1`, `product-g-2`, `product-g-3`, `product-g-4`, `header-h`, `product-h-1`, `product-h-2`, `product-h-3`, `product-h-4`, `header-i`, `product-i-1`, `product-i-2`, `product-i-3`, `product-i-4`, `header-j`, `product-j-1`, `product-j-2`, `product-j-3`, `product-j-4`) VALUES
('1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`standard`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
