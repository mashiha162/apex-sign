-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 07:21 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apex_sign`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_party`
--

CREATE TABLE `add_party` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `c_name` varchar(75) NOT NULL,
  `mobile` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_party`
--

INSERT INTO `add_party` (`id`, `name`, `c_name`, `mobile`, `address`, `email`) VALUES
(1, 'AMBIKA XEROX', 'AMBIKA XEROX', 123456789, 'Gandhidham', 'ambika@123gmail.com'),
(2, 'ATMIYA PRINTERS', 'ATMIYA PRINTERS', 2147483647, 'Gandhidham', 'atmiya@123gmail.com'),
(3, 'BITS PUBLICITY', 'BITS PUBLICITY', 365982711, 'Gandhidham', 'bits@gmail.com'),
(4, 'BRIGHT XEROX', 'BRIGHT XEROX', 369852175, 'Gandhidham', 'bright@gmail.com'),
(5, 'NARESH ART (ANJAR)', 'NARESH ART (ANJAR)', 2147483647, 'Anjar', 'naresh@gmail.com'),
(6, 'SURYA ARTS', 'surya arts', 369852166, 'Adipur', 'surya@gmail.com'),
(7, 'OLAKH DIGITAL', 'OLAKH Art', 2147483647, 'Bhachau', 'olakh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(50) NOT NULL,
  `material` varchar(50) NOT NULL,
  `hsn_code` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `material`, `hsn_code`) VALUES
(1, 'FLEX        ', 12356),
(2, 'ECO VINYL Lamination ', 45678),
(3, 'STAR FLEX PRINT ', 32165),
(4, 'ECO GLOSSY VINYL', 65432),
(5, 'ECO MATT VINYL', 36542),
(6, 'ONEWAY', 63524),
(7, 'ECO GLOSSY LAMINATION', 36524),
(8, 'EGL WITH FOAMSHEET', 36254),
(9, 'Eco Lamination', 36524),
(11, 'EGLWITH MATT LAMINATION', 365241);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `admin_img` text NOT NULL,
  `admin_contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_img`, `admin_contact`) VALUES
(1, 'Mashiha', 'mashiha162@gmail.com', '123456', '', '9574944952'),
(2, 'vinay', 'vinaypauljana@gmail.com', '9924283987', '', '9924283987');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `emp_name`, `date`, `time_in`, `time_out`) VALUES
(1, 'Bhavik', '2020-03-03', '09:00:00', '10:00:00'),
(4, 'Manoj', '2020-03-03', '09:00:00', '08:00:00'),
(5, 'Nilesh', '2020-03-03', '10:00:00', '10:00:00'),
(6, 'Bhavik', '2020-03-03', '10:00:00', '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cashadvance`
--

CREATE TABLE `cashadvance` (
  `id` int(11) NOT NULL,
  `date_advance` date NOT NULL,
  `emp_name` varchar(150) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashadvance`
--

INSERT INTO `cashadvance` (`id`, `date_advance`, `emp_name`, `amount`) VALUES
(1, '1970-01-01', 'Bhavik', 200),
(2, '1970-01-01', 'Manoj', 500),
(5, '1970-01-01', 'Bhavik', 500),
(6, '2020-03-03', 'Nilesh', 200);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `emp_name`, `address`, `email`, `phone`, `gender`) VALUES
(10, 'Bhavik', 'Adipur', 'bhavik@gmail.com', 2147483647, 'MALE'),
(11, 'Manoj', 'gandhidham', 'manoj@gmail.com', 39857412, 'MALE'),
(12, 'Nilesh', 'Sapnanagar', 'nilesh@gmail.com', 123698574, 'MALE');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(1, 'aaa', '2020-01-28 00:00:00', '2020-01-29 00:00:00'),
(3, 'Anjar', '2020-02-05 00:00:00', '2020-02-06 00:00:00'),
(5, 'lolo', '2020-02-27 00:00:00', '2020-02-28 00:00:00'),
(6, 'j', '2020-03-03 00:00:00', '2020-03-04 00:00:00'),
(7, 'Masiha', '2020-01-27 00:00:00', '2020-01-28 00:00:00'),
(8, 'Lo', '2020-01-27 00:00:00', '2020-01-28 00:00:00'),
(9, 'Hello', '2020-02-04 00:00:00', '2020-02-05 00:00:00'),
(10, 'a', '2020-01-28 00:00:00', '2020-01-29 00:00:00'),
(11, 'aaaaa', '2020-01-28 00:00:00', '2020-01-29 00:00:00'),
(12, 'aaaa', '2020-02-04 00:00:00', '2020-02-05 00:00:00'),
(13, 'Hello ', '2020-03-03 00:00:00', '2020-03-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `bill_no` varchar(50) NOT NULL,
  `party_name` varchar(100) NOT NULL,
  `invoice_date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `gstin` varchar(50) NOT NULL,
  `bill_address` varchar(150) NOT NULL,
  `total` double(10,2) NOT NULL,
  `cgst` int(50) NOT NULL,
  `sgst` int(50) NOT NULL,
  `grand_total` int(200) NOT NULL,
  `notes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `bill_no`, `party_name`, `invoice_date`, `email`, `mobile`, `gstin`, `bill_address`, `total`, `cgst`, `sgst`, `grand_total`, `notes`) VALUES
(21, '63', 'Suraj', '2020-01-02', 'mashiha162@gmail.com', 2147483647, 'jhvhg232', 'baehsree', 60.00, 30, 20, 10, 'kkk'),
(22, '30', 'Navya', '2020-01-02', 'mashiha162@gmail.com', 3652489, '245ADCVGBB', 'Sapnanagar', 500.00, 500, 500, 500, 'ADFSG'),
(28, '10', 'Praveen', '2002-12-20', 'mashiha162@gmail.com', 2147483647, 'jhvhg232', 'Bharatnagar', 200.00, 200, 200, 200, 'Heklo'),
(30, '120', 'bunty shriwastav', '2020-02-15', 'bharat@a.com', 2147483647, '24Adjjndjn', 'Bharatnagar', 5000.00, 500, 500, 6000, 'Pls Pay before month End');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `hsn` varchar(5) NOT NULL,
  `qty` int(11) NOT NULL,
  `sqft` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `invoice_id`, `item`, `hsn`, `qty`, `sqft`, `rate`, `amount`) VALUES
(20, 21, 'LO', '20', 3, 3, 3, 3),
(21, 21, 'aa', '5', 5, 5, 5, 5),
(22, 21, 'kkk', 'k', 0, 0, 0, 0),
(23, 21, 'oo', 'o', 0, 0, 0, 0),
(24, 21, 'cc', 'c', 2, 2, 2, 2),
(25, 22, 'Flex', '320', 1, 5, 5, 500),
(26, 22, 'Eco', '30', 30, 30, 30, 30),
(27, 22, 'Star', '20', 20, 30, 40, 96),
(32, 28, 'Flex', '36598', 12, 1, 7, 35),
(33, 28, 'Eco', '36524', 1, 1, 1, 1),
(34, 30, 'Flex', '36524', 10, 5, 50, 5),
(35, 30, 'Eco Vinyl', '25632', 10, 5, 20, 5),
(36, 30, 'Star Flex', '36521', 20, 1, 52, 100);

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `quot_id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `mobile` int(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `quot_date` date NOT NULL,
  `address` varchar(150) NOT NULL,
  `total` int(200) NOT NULL,
  `cgst` int(75) NOT NULL,
  `sgst` int(75) NOT NULL,
  `grand_total` int(200) NOT NULL,
  `note` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`quot_id`, `name`, `mobile`, `email`, `quot_date`, `address`, `total`, `cgst`, `sgst`, `grand_total`, `note`) VALUES
(28, 'Mashiha', 3185, 'mashiha162@gmail.com', '2020-12-31', 'Bhartanagar', 5000, 6000, 7000, 8000, 'Heklo'),
(29, 'Kanu', 2147483647, 'mashiha162@gmail.com', '2020-12-31', 'sapnanagar', 500, 50, 520, 50, 'Hello'),
(30, 'HR ent', 2147483647, 'mashiha162@gmail.com', '2020-12-31', 'Anjar', 10, 20, 30, 40, '50'),
(31, 'hK', 0, 'mashiha162@gmail.com', '2020-12-30', 'k', 50, 50, 50, 50, 'lll');

-- --------------------------------------------------------

--
-- Table structure for table `quot_items`
--

CREATE TABLE `quot_items` (
  `id` int(11) NOT NULL,
  `quot_id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `sqft` int(50) NOT NULL,
  `rate` int(100) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quot_items`
--

INSERT INTO `quot_items` (`id`, `quot_id`, `item`, `sqft`, `rate`, `amount`) VALUES
(11, 28, 'flex', 200, 5, 1000),
(12, 28, 'eco', 500, 5, 5000),
(13, 28, 'Start', 50006, 5, 500),
(14, 29, 'EGL', 20, 20, 20),
(15, 29, 'EML', 30, 303, 30),
(16, 30, 'Pc', 50, 50, 50),
(17, 30, 'LP', 60, 606, 60),
(18, 30, 'PL', 30, 303, 30),
(19, 31, 'Flex new', 20, 20, 20),
(20, 31, '30', 30, 30, 30),
(21, 32, 'FFFF', 10, 10, 200),
(22, 32, 'GGGG', 20, 20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sale_entry`
--

CREATE TABLE `sale_entry` (
  `sale_id` int(11) NOT NULL,
  `sale_date` date NOT NULL,
  `party_name` varchar(75) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `material` varchar(75) NOT NULL,
  `width` double NOT NULL,
  `height` double NOT NULL,
  `qty` double NOT NULL,
  `total_ft` double(10,2) NOT NULL,
  `rate` double(10,2) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `cash_cre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale_entry`
--

INSERT INTO `sale_entry` (`sale_id`, `sale_date`, `party_name`, `discription`, `material`, `width`, `height`, `qty`, `total_ft`, `rate`, `amount`, `cash_cre`) VALUES
(1, '2020-03-03', 'AMBIKA XEROX', 'ZONE', 'FLEX        ', 8, 4, 1, 32.00, 7.00, 224.00, 'CREDIT'),
(2, '2020-03-04', 'AMBIKA XEROX', 'MACHU', 'FLEX        ', 12, 6, 1, 72.00, 7.00, 504.00, 'CREDIT'),
(3, '2020-03-05', 'AMBIKA XEROX', 'Hanumanji', 'ECO VINYL Lamination ', 3, 12, 1, 36.00, 40.00, 1440.00, 'CREDIT'),
(4, '2020-03-07', 'AMBIKA XEROX', 'Sub Station', 'STAR FLEX PRINT ', 12, 10, 1, 120.00, 15.00, 1800.00, 'CREDIT'),
(5, '2020-03-10', 'AMBIKA XEROX', 'KANDLA', 'ECO GLOSSY VINYL', 4, 3, 1, 12.00, 40.00, 480.00, 'CREDIT'),
(6, '2020-03-19', 'AMBIKA XEROX', 'AMITY', 'ONEWAY', 10, 10, 1, 100.00, 70.00, 7000.00, 'CREDIT'),
(7, '2020-03-20', 'AMBIKA XEROX', 'GURU', 'ECO GLOSSY LAMINATION', 6, 4, 1, 24.00, 40.00, 960.00, 'CREDIT'),
(8, '2020-03-03', 'AMBIKA XEROX', 'FEEDER', 'EGL WITH FOAMSHEET', 5, 5, 1, 25.00, 10.00, 250.00, 'CREDIT'),
(9, '2020-03-03', 'AMBIKA XEROX', 'LOCO', 'STAR FLEX PRINT ', 10, 20, 1, 200.00, 15.00, 3000.00, 'CREDIT'),
(10, '2020-03-03', 'AMBIKA XEROX', 'Hello', 'ECO MATT VINYL', 5, 5, 1, 25.00, 5.00, 125.00, 'CREDIT'),
(11, '2020-03-03', 'ATMIYA PRINTERS', 'FEEDER', 'FLEX        ', 10, 10, 1, 100.00, 7.00, 700.00, 'CREDIT'),
(12, '2020-03-03', 'ATMIYA PRINTERS', 'ASDF', 'ECO VINYL Lamination ', 5, 5, 5, 125.00, 7.00, 875.00, 'CREDIT'),
(13, '2020-03-03', 'ATMIYA PRINTERS', 'AEFGH', 'STAR FLEX PRINT ', 20, 5, 1, 100.00, 7.00, 700.00, 'CREDIT'),
(14, '2020-03-03', 'ATMIYA PRINTERS', 'ZXCVB', 'ECO GLOSSY VINYL', 2, 2, 10, 40.00, 5.00, 200.00, 'CREDIT'),
(15, '2020-03-03', 'ATMIYA PRINTERS', 'LKOP', 'ECO MATT VINYL', 20, 10, 1, 200.00, 7.00, 1400.00, 'CREDIT'),
(16, '2020-03-03', 'ATMIYA PRINTERS', 'LOP', 'ONEWAY', 20, 10, 1, 200.00, 5.00, 1000.00, 'CREDIT'),
(17, '2020-03-03', 'ATMIYA PRINTERS', 'ERTY', 'ECO GLOSSY LAMINATION', 20, 1, 2, 40.00, 50.00, 2000.00, 'CREDIT'),
(18, '2020-03-03', 'ATMIYA PRINTERS', 'WWR', 'EGL WITH FOAMSHEET', 20, 1, 2, 40.00, 50.00, 2000.00, 'CREDIT'),
(19, '2020-03-03', 'ATMIYA PRINTERS', 'AFG', 'Eco Lamination', 5, 5, 5, 125.00, 40.00, 5000.00, 'CREDIT'),
(20, '2020-03-03', 'ATMIYA PRINTERS', 'WEFG', 'EGLWITH MATT LAMINATION', 5, 5, 5, 125.00, 5.00, 625.00, 'CREDIT'),
(21, '2020-03-03', 'BITS PUBLICITY', 'AXCVF', 'FLEX        ', 20, 10, 1, 200.00, 5.00, 1000.00, 'CREDIT'),
(22, '2020-03-03', 'BITS PUBLICITY', 'ARTY', 'ECO VINYL Lamination ', 20, 10, 1, 200.00, 6.00, 1200.00, 'CREDIT'),
(24, '2020-03-03', 'BITS PUBLICITY', 'POL', 'ECO GLOSSY VINYL', 10, 10, 1, 100.00, 5.00, 500.00, 'CASH'),
(25, '2020-03-03', 'BITS PUBLICITY', 'DWF', 'ECO MATT VINYL', 20, 1, 2, 40.00, 40.00, 1600.00, 'CREDIT'),
(26, '2020-03-03', 'BITS PUBLICITY', 'AQWE', 'EGL WITH FOAMSHEET', 30, 10, 1, 300.00, 5.00, 1500.00, 'CREDIT'),
(27, '2020-03-03', 'BITS PUBLICITY', 'ASSC', 'EGLWITH MATT LAMINATION', 20, 10, 1, 200.00, 5.00, 1000.00, 'CREDIT'),
(28, '2020-03-03', 'BITS PUBLICITY', 'AAA', 'FLEX        ', 20, 20, 1, 400.00, 5.00, 2000.00, 'CASH'),
(29, '2020-03-03', 'BITS PUBLICITY', 'ASDW', 'FLEX        ', 20, 10, 1, 200.00, 5.00, 1000.00, 'CASH'),
(30, '2020-03-03', 'BITS PUBLICITY', 'DSWCC', 'STAR FLEX PRINT ', 10, 5, 10, 500.00, 40.00, 20000.00, 'CASH'),
(31, '2020-03-03', 'AMBIKA XEROX', 'asdf      ', 'FLEX        ', 20, 10, 1, 200.00, 7.00, 1400.00, 'CREDIT');

-- --------------------------------------------------------

--
-- Table structure for table `stock_items`
--

CREATE TABLE `stock_items` (
  `id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `items` varchar(100) NOT NULL,
  `hsn_code` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `sqft` int(100) NOT NULL,
  `rate` int(100) NOT NULL,
  `amount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_items`
--

INSERT INTO `stock_items` (`id`, `stock_id`, `items`, `hsn_code`, `qty`, `unit`, `sqft`, `rate`, `amount`) VALUES
(18, 24, 'Flex', 20, 20, 'Sq.Ft.', 20, 20, 20),
(19, 24, 'Eco', 20, 30, 'Sq.Ft.', 30, 30, 30),
(20, 26, 'aaaa', 2, 2, 'SELECT', 2, 2, 2),
(21, 26, '3', 3, 3, 'SELECT', 3, 3, 3),
(22, 28, 'aa', 2, 2, 'SELECT', 2, 2, 2),
(23, 28, 'fff', 2, 2, 'SELECT', 2, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stock_purchase`
--

CREATE TABLE `stock_purchase` (
  `stock_id` int(11) NOT NULL,
  `vendor_name` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `purchase_date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `total` int(100) NOT NULL,
  `cgst` int(150) NOT NULL,
  `sgst` int(150) NOT NULL,
  `transportation_cost` int(100) NOT NULL,
  `grand_total` int(200) NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_purchase`
--

INSERT INTO `stock_purchase` (`stock_id`, `vendor_name`, `email`, `phone`, `purchase_date`, `address`, `total`, `cgst`, `sgst`, `transportation_cost`, `grand_total`, `note`) VALUES
(23, 'ARK ENT', 'mashiha162@gmail.com', 12345, '2020-05-01', '', 5000, 50, 50, 50, 50, '6'),
(24, 'ARK ENT', 'mashiha162@gmail.com', 12345, '2020-05-01', '', 5000, 50, 50, 50, 50, '6'),
(25, 'Mukesh Solanki', '', 0, '2020-05-01', '', 1, 1, 1, 1, 1, '1'),
(26, 'Mukesh Solanki', '', 0, '2020-05-01', '', 1, 1, 1, 1, 1, '1'),
(28, 'uyvkv', 'mashiha162@gmail.com', 12345, '2020-05-01', '2', 55, 5, 5, 5, 5, '5');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `task` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task`, `discription`, `date`) VALUES
(6, 'nn', 'aaaa', '0000-00-00'),
(7, '3 x 2 banner ', 'Gandhidham ME Laganana h', '0000-00-00'),
(8, 'Pasting', 'Anjar', '0000-00-00'),
(9, 'Lion Clubs ', '4 Am Pasting', '0000-00-00'),
(10, 'ESSAR PUM', '6 PM Pasting By Workers ', '0000-00-00'),
(11, 'Bhuj ', '4 X 6 Pasting', '0000-00-00'),
(13, 'Fun Food', '4 x 6 Banner Pasting At 6.00 AM', '0000-00-00'),
(16, 'Hello', 'World', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `vendor_name` varchar(75) NOT NULL,
  `c_name` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `phone` int(75) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `vendor_name`, `c_name`, `email`, `phone`, `address`) VALUES
(7, 'Mehta Enterprise', 'Mehta Enterprise', 'mehta@gmail.com', 39885712, 'Ahmedabad'),
(8, 'Soft', 'hh', 'suraj@123.com', 2485435, 'vjhvjh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_party`
--
ALTER TABLE `add_party`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashadvance`
--
ALTER TABLE `cashadvance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`quot_id`);

--
-- Indexes for table `quot_items`
--
ALTER TABLE `quot_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_entry`
--
ALTER TABLE `sale_entry`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `stock_items`
--
ALTER TABLE `stock_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_purchase`
--
ALTER TABLE `stock_purchase`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_party`
--
ALTER TABLE `add_party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cashadvance`
--
ALTER TABLE `cashadvance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `quot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `quot_items`
--
ALTER TABLE `quot_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sale_entry`
--
ALTER TABLE `sale_entry`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `stock_items`
--
ALTER TABLE `stock_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `stock_purchase`
--
ALTER TABLE `stock_purchase`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
