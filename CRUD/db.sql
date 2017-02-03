-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2017 at 03:31 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hampertown`
--

-- --------------------------------------------------------

--
-- Table structure for table `ht_users`
--

CREATE TABLE IF NOT EXISTS `ht_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `shipping_address` text NOT NULL,
  `nearest_landmark` varchar(255) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `landline` int(11) NOT NULL,
  `user_fname` varchar(100) NOT NULL,
  `user_lname` varchar(100) NOT NULL,
  `user_public_name` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `apt` varchar(100) NOT NULL COMMENT 'apt/suite',
  `city` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `zip` int(11) NOT NULL,
  `country` varchar(150) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active_status` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `block_status` enum('Yes','No') NOT NULL DEFAULT 'No',
  `user_ip` varchar(50) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `facebook_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `facebook_retargeting` text NOT NULL,
  `conversion_pixel` text NOT NULL,
  `google_id` text NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `acc_no` text NOT NULL,
  `ifsc` text NOT NULL,
  `user_type` enum('seller','buyer') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=248 ;

--
-- Dumping data for table `ht_users`
--

INSERT INTO `ht_users` (`user_id`, `shipping_address`, `nearest_landmark`, `mobile`, `landline`, `user_fname`, `user_lname`, `user_public_name`, `street`, `apt`, `city`, `state`, `zip`, `country`, `user_email`, `user_phone`, `user_name`, `user_pass`, `gender`, `reg_date`, `active_status`, `block_status`, `user_ip`, `auth`, `facebook_id`, `status`, `facebook_retargeting`, `conversion_pixel`, `google_id`, `branch_name`, `h_name`, `acc_no`, `ifsc`, `user_type`) VALUES
(13, 'vxsfhsdfhsdfghfsdh sdfhdfghdf', 'fhshgsfh sh hssfgh', '2147483647', 0, 'ghdfhdfghfh', '', '', '', '', 'hycbv', 'Tamil Nadu', 543456, '', 'dfgsdfgs@sdfgsg.com', 456345, '', '', '', '2016-05-19 11:19:34', 'Yes', 'No', '', '', '', '', '', '', '', '', '', '', '', 'buyer'),
(14, '', 'kjnkjn', '8106050265', 0, '', '', '', '', '', 'kjn', 'Telangana', 502281, '', '', 0, '', 'f70170c9cc3875d13cec34540f971b9a', '', '2016-05-20 04:14:41', 'Yes', 'No', '', '', '', '', '', '', '', '', '', '', '', 'buyer'),
(15, 'Alpt', 'Alpt', '8106050265', 0, 'K srinivas', '', '', '', '', 'Hyderabad', 'Jharkhand', 502281, '', 'hampertown3@gmail.com', 0, '', '', '', '2016-05-20 04:15:35', 'Yes', 'No', '', '', '', '', '', '', '', '', '', '', '', 'buyer'),
(16, '83 sanjeevapuram parsiguttta secunderabad', 'ANDHRA PRADESH', '9010292323', 0, 'shravan kumar kolanu', 'kolanu', '', '', '', 'hyderabad', 'Andhra Pradesh', 500061, '', 'skshravan.kolanu@gmail.com', 919010292323, '', 'f955b4545c51a887aaeabe44464d55dc', '', '2016-05-26 02:47:37', 'Yes', 'No', '', '', '', '', '', '', '', '', '', '', '', 'buyer'),
(17, '', 'kjnkjn', '8106050265', 0, '', '', '', '', '', 'kjn', 'Telangana', 502281, '', '', 0, '', '75807f10034e0edc11d4bbf4275bfff8', '', '2016-05-27 06:14:11', 'Yes', 'No', '', '', '', '', '', '', '', '', '', '', '', 'buyer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
