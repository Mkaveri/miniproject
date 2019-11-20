-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 02:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfood`
--

CREATE TABLE `addfood` (
  `image` varchar(50) NOT NULL,
  `foodname` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addfood`
--

INSERT INTO `addfood` (`image`, `foodname`, `amount`) VALUES
('bite.jpg', 'Bite', 500),
('go.jpg', 'go', 300),
('fancyfeast.png', 'fancyfeast', 495),
('meo.jpg', 'meo', 395),
('puppy.png', 'puppypack', 400),
('whiskas.jpg', 'whiskas', 700);

-- --------------------------------------------------------

--
-- Table structure for table `addpet`
--

CREATE TABLE `addpet` (
  `image` varchar(100) NOT NULL,
  `petname` varchar(50) NOT NULL,
  `food` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addpet`
--

INSERT INTO `addpet` (`image`, `petname`, `food`, `amount`) VALUES
('maltese.jpg', 'maltese', 'pedigree', 9000),
('pomeranian.jpg', 'pomeranian', 'go', 9500),
('european%20shorthair.jpg', 'shorthaircat', 'whiskas', 19000),
('bengalkatzen.jpg', 'bengalkatzen', 'salmon', 15000),
('mainecoon.jpg\"', 'mainecoon', 'fancyfeast', 15000),
('persian.jpg', 'persiancat', 'meo', 10000),
('russianblue.jpg', 'russianbluecat', 'meo', 15000),
('selkirk.jpg', 'selkrik', 'fancyfeast', 9000),
('beagle.jpg', 'beagle', 'pedigree', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `petfood` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `petname` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `numberofpets` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cname`, `email`, `phone`, `petfood`, `address`, `petname`, `amount`, `numberofpets`) VALUES
('abc', 'abc@gmail.com', '6565865565', '', 'bangalore', 'maltese', 9000, 1),
('xyz', 'xyz@gmail.com', '958852232', '', 'doorno 3/21 mangalore', 'pointerdog', 10000, 1),
('', '', '', '', '', '', 0, 0),
('llk', 'lll@gmail.com', '9562482', '', 'mangalore', 'pomeranian', 12000, 1),
('kmn', 'kmn@gmail.com', '65482456', '', 'bangalore', 'pointerdog', 15000, 2),
('kk', 'kk@gmail.com', '6582463', '', 'mysore', 'pointerdog', 1000, 3),
('', '', '', '', '', '', 0, 0),
('', '', '', '', '', '', 0, 0),
('', '', '', '', '', '', 0, 0),
('', '', '', '', '', '', 0, 0),
('bavi', 'bavi@gmail.com', '985413263', '', 'mangalore', '', 0, 2),
('bavi', 'bavi@gmail.com', '985413263', '', 'mangalore', '', 0, 2),
('bavi', 'bavi@gmail.com', '985413263', '', 'mangalore', 'maltese', 9000, 2),
('bavi', 'bavi@gmail.com', '985413263', '', 'mangalore', 'maltese', 9000, 2),
('', '', '', '', '', 'maltese', 9000, 0),
('bavi', 'bavi@gmail.com', '985413263', '', 'mangalore', 'maltese', 9000, 2),
('bavi', 'bavi@gmail.com', '985413263', '', 'mangalore', 'maltese', 9000, 2),
('bavi', 'bavi@gmail.com', '985413263', '', 'mangalore', 'maltese', 9000, 2),
('bavi', 'bavi@gmail.com', '985413263', '', 'mangalore', 'maltese', 9000, 2),
('bavi', 'bavi@gmail.com', '985413263', '', 'mangalore', 'maltese', 9000, 2),
('bavi', 'bavi@gmail.com', '985413263', '', 'mangalore', 'maltese', 9000, 2),
('bavi', 'bavi@gmail.com', '985413263', '', 'mangalore', 'maltese', 9000, 2),
('kk', 'lll@gmail.com', '65482456', '', 'mangalore', 'pomeranian', 9000, 3),
('', '', '', '', '', 'choose pet', 0, 0),
('xyz', 'xyz@gmail.com', '95648215', '', 'bangalore', 'maltese', 15000, 1),
('kk', 'xyz@gmail.com', '9562482', 'pedigree', 'mysore', 'maltese', 15000, 2),
('kk', 'lll@gmail.com', '95648215', 'go', 'bangalore', 'baliness', 9000, 1),
('kk', 'lll@gmail.com', '95648215', 'puppypack', 'mangalore', 'baliness', 9000, 2),
('', '', '', 'select pet food', '', 'choose pet', 0, 0),
('gwgwg', 'lll@gmail.com', '95648215', 'pedigree', 'mangalore', 'maltese', 0, 2),
('gwgwg', 'lll@gmail.com', '95648215', 'pedigree', 'mangalore', 'maltese', 0, 2),
('gwgwg', 'lll@gmail.com', '95648215', 'pedigree', 'mangalore', 'maltese', 0, 2),
('', '', '', 'select pet food', '', 'choose pet', 0, 0),
('sdd', 'sdc@gmail.com', '95648215', 'pedigree', 'mangalore', 'maltese', 0, 2),
('kk', 'lll@gmail.com', '95648215', 'pedigree', 'mangalore', 'baliness', 0, 2),
('kk', 'lll@gmail.com', '95648215', 'pedigree', 'mangalore', 'baliness', 0, 2),
('kk', 'lll@gmail.com', '95648215', 'pedigree', 'mangalore', 'baliness', 0, 2),
('kk', 'lll@gmail.com', '95648215', 'pedigree', 'mangalore', 'baliness', 0, 2),
('kk', 'lll@gmail.com', '95648215', 'pedigree', 'mangalore', 'baliness', 0, 2),
('kk', 'lll@gmail.com', '95648215', 'pedigree', 'mangalore', 'baliness', 0, 2),
('kk', 'lll@gmail.com', '95648215', 'pedigree', 'mangalore', 'baliness', 0, 2),
('kk', 'lll@gmail.com', '95648215', 'pedigree', 'mangalore', 'baliness', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customerr`
--

CREATE TABLE `customerr` (
  `cname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `petname` varchar(50) NOT NULL,
  `numberofpets` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerr`
--

INSERT INTO `customerr` (`cname`, `email`, `phone`, `address`, `petname`, `numberofpets`) VALUES
('abc', 'abc@gmail.com', '95648215', 'mysore', 'pomeranian', 2),
('kmn', 'kk@gmail.com', '985413263', 'mysore', 'shorthaircat', 3),
('xyz', 'lll@gmail.com', '65482456', 'mangalore', 'pomeranian', 2),
('kk', 'lll@gmail.com', '95648215', 'mangalore', 'maltese', 2),
('kmn', 'kmn@gmail.com', '956248255', 'mysore', 'shorthaircat', 3),
('kk', 'xyz@gmail.com', '95648215', 'mangalore', 'pomeranian', 2),
('hgf', 'hgf@gmail.com', '568653', 'khgh', 'persiancat', 2);

-- --------------------------------------------------------

--
-- Table structure for table `finalfood`
--

CREATE TABLE `finalfood` (
  `cname` varchar(50) NOT NULL,
  `foodname` varchar(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalfood`
--

INSERT INTO `finalfood` (`cname`, `foodname`, `total`) VALUES
('abc', 'fancyfeast', 495),
('jhj', 'Bite', 0);

-- --------------------------------------------------------

--
-- Table structure for table `finalpay`
--

CREATE TABLE `finalpay` (
  `cname` varchar(50) NOT NULL,
  `petname` varchar(50) NOT NULL,
  `numberofpets` int(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalpay`
--

INSERT INTO `finalpay` (`cname`, `petname`, `numberofpets`, `amount`, `total`) VALUES
('kk', 'maltese', 2, 9000, 18000),
('kmn', 'shorthaircat', 3, 19000, 57000),
('xyz', 'pomeranian', 2, 9500, 19000),
('kk', 'pomeranian', 2, 9500, 19000),
('hgf', 'persiancat', 2, 10000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `oldcustomer`
--

CREATE TABLE `oldcustomer` (
  `cname` varchar(50) NOT NULL,
  `petname` varchar(50) NOT NULL,
  `numberofpets` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oldcustomer`
--

INSERT INTO `oldcustomer` (`cname`, `petname`, `numberofpets`) VALUES
('xyz', 'pomeranian', 2),
('xyz', 'shorthaircat', 3),
('', 'choose pet', 0),
('xyz', 'pomeranian', 3),
('xyz', 'pomeranian', 2),
('xyz', 'maltese', 2),
('xyz', 'maltese', 2),
('xyz', 'maltese', 2),
('xyz', 'maltese', 2),
('xyz', 'maltese', 2),
('xyz', 'maltese', 2),
('xyz', 'maltese', 2),
('xyz', 'maltese', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orderfood`
--

CREATE TABLE `orderfood` (
  `cname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `foodname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderfood`
--

INSERT INTO `orderfood` (`cname`, `address`, `phone`, `foodname`) VALUES
('k', 'mangalore', '98564265', 'Bite'),
('k', 'mangalore', '98564265', 'Bite'),
('k', 'mangalore', '98564265', 'Bite'),
('xyz', 'mangalore', '98564265', 'go'),
('xyz', 'mangalore', '98546213', 'Bite'),
('abc', 'bangalore', '99565565', 'fancyfeast'),
('abc', 'mangalore', '98546213', 'meo'),
('abc', 'mangalore', '98564265', 'meo'),
('abc', 'mangalore', '98564265', 'meo'),
('k', 'bangalore', '98564265', 'go'),
('abc', 'mangalore', '98564265', 'go'),
('jhj', 'mangalore', '95842265', 'Bite');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
