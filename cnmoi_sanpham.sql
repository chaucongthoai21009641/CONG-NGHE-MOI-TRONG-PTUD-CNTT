-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2025 at 11:08 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cnmoi_sanpham`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `idhd` int(10) unsigned NOT NULL auto_increment,
  `soluong` varchar(100) collate utf8_unicode_ci NOT NULL,
  `ngaymuahang` datetime NOT NULL,
  `idsp` int(11) NOT NULL,
  PRIMARY KEY  (`idhd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`idhd`, `soluong`, `ngaymuahang`, `idsp`) VALUES
(1, '23', '2025-04-09 09:48:17', 1),
(2, '232', '2025-04-04 09:49:12', 2),
(3, '1', '2025-04-06 09:50:20', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(10) unsigned NOT NULL auto_increment,
  `tensp` varchar(100) collate utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  PRIMARY KEY  (`idsp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `gia`) VALUES
(1, 'IPhone 15 promax', 4500),
(2, 'Samsung Galaxy S22 Ultra', 1000),
(3, 'oppo', 20);
