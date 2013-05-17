-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2013 at 11:40 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `a_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `article` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`a_id`, `title`, `type`, `date`, `article`) VALUES
(1, 'test', 'test', '2013-05-01', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `article_commit`
--

CREATE TABLE IF NOT EXISTS `article_commit` (
  `ac_id` int(4) NOT NULL AUTO_INCREMENT,
  `a_id` int(4) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `commit` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ac_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `article_commit`
--

INSERT INTO `article_commit` (`ac_id`, `a_id`, `username`, `email`, `commit`, `date`, `ip`) VALUES
(1, 1, 'test', 'test@qq.com', 'test', '2013-05-08 00:00:00', ''),
(2, 1, '中文测试', '中文测试', '中文测试', '2013-05-30 00:00:00', ''),
(3, 1, '中文测试', '中文测试', '中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试中文测试', '2013-05-22 00:00:00', ''),
(4, 1, 'q', 'w', 'e', '2013-05-17 16:56:42', ''),
(5, 1, 'ä¸­æ–‡', 'ä¸­æ–‡', 'ä¸­æ–‡', '2013-05-17 16:57:22', ''),
(6, 1, 'æˆ‘è¯´', '', 'ä½ è¿™è®©æˆ‘æƒ…ä½•ä»¥å ªå•Šã€‚ã€‚ã€‚mysqlé‡Œæ˜¯ä¸­æ–‡ï¼Œè¿™é‡Œå°±æ˜¾ç¤ºä¹±ç ï¼Œè¿™é‡Œæ˜¾ç¤ºä¸­æ–‡ï¼Œmysqlé‡Œå°±æ˜¾ç¤ºä¹±ç ã€‚ã€‚ã€‚ä½ åˆ°åº•æƒ³æ€Žæ ·ã€‚ã€‚ã€‚', '2013-05-17 17:01:37', ''),
(7, 1, 'çš„', 'd', 'd', '2013-05-17 17:03:35', ''),
(8, 1, 'çš„', 'd', 'd', '2013-05-17 17:03:58', ''),
(9, 1, 'çš„', 'd', 'd', '2013-05-17 17:04:40', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
