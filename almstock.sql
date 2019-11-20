-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 08:15 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almstock`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sel` varchar(100) NOT NULL,
  `address` mediumtext NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `pin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Name`, `email`, `sel`, `address`, `Mobile`, `pin`) VALUES
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', 'Class 8', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406'),
('Vatsal Raj Krishna', 'kanove6223@ymail365.com', 'Class 3', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406'),
('Vatsal Raj Krishna', 'milan.kk007@gmail.com', 'Class 10', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406'),
('Vatsal Raj Krishna', 'ashu@gmail.com', 'Class 1', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `Name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `address` mediumtext NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `sel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`Name`, `email`, `quantity`, `address`, `Mobile`, `pin`, `sel`) VALUES
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', '2', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406', 'val1'),
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', '2', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406', 'val3'),
('Vatsal Raj Krishna', 'vat@gmail.com', '4', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406', ' Clothes For Above 20 and Below 40'),
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', '114', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406', ' Clothes For Above 40'),
('Vatsal Raj Krishna', 'vat@gmail.com', '4', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406', 'Clothes For Above 20 and Below 40'),
('Vatsal Raj Krishna', 'milan.kk007@gmail.com', '12', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406', 'Clothes For Above 40'),
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', '23', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406', ' Clothes For Below 12'),
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', '1', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406', ' Clothes For Above 12 and Below 20');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `address` mediumtext NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `pin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`Name`, `email`, `quantity`, `address`, `Mobile`, `pin`) VALUES
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', 'two', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406'),
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', 'two', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406'),
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', 'two', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406'),
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', 'two', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406'),
('Vatsal Raj Krishna', 'milan.kk007@gmail.com', 'eight', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406'),
('Vatsal Raj Krishna', 'milan.kk007@gmail.com', 'one', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', '9760293880', '281406'),
('Tanujtyg', 'vhhvgh@gjhn.com', 'one', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura, Uttar Pradesh', '9760293880', '281406');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `Name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sel` varchar(100) NOT NULL,
  `address` mediumtext NOT NULL,
  `item` varchar(1000) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `pin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`Name`, `email`, `sel`, `address`, `item`, `Mobile`, `pin`) VALUES
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', '12', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', 'hbjcnxc vcnsj cncncmdkc', '9760293880', '281406'),
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', '2', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', 'njknjknvdf njdfnvdfjv', '9760293880', '281406'),
('Vatsal Raj Krishna', 'milan.kk007@gmail.com', '14', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', 'nova boat', '9760293880', '281406'),
('Vatsal Raj Krishna', 'vat@gmail.com', '32', '17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan, Mathura\r\n17km Stone, NH-2, Mathura-Delhi Road P.O. Chaumuhan', 'hbjcnxc vcnsj cncncmdkc', '9760293880', '281406');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Password` mediumtext NOT NULL,
  `Mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `email`, `username`, `Password`, `Mobile`) VALUES
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', 'vatsalrajkrishna', '123456', '9760293880'),
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', 'vatsalrajkrishna1', '1234567', '9760293880'),
('Vatsal Raj Krishna', 'vatsalrajkrishna@gmail.com', 'tanuj', '123456', '9760293880');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
