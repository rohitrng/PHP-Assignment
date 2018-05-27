-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2018 at 12:35 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(100) NOT NULL AUTO_INCREMENT,
  `u_username` varchar(200) NOT NULL,
  `u_password` varchar(200) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_dob` varchar(200) NOT NULL,
  `u_mobile` varchar(100) NOT NULL,
  `u_address` text NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_username`, `u_password`, `u_email`, `u_dob`, `u_mobile`, `u_address`) VALUES
(4, 'Kiran Rao3', 'demo1', 'kiran3@rao.com', '05-29-2018', '9898989898', 'demo1'),
(5, 'Kiran Rao4', 'demo1', 'kiran4@rao.com', '05-29-2018', '9898989898', 'demo1'),
(6, 'Kiran Rao5', 'demo1', 'kiran5@rao.com', '05-30-2018', '9898989898', 'demo1'),
(7, 'Kiran Rao6', 'demo1', 'kiran6@rao.com', '05-30-2018', '9898989898', 'demo1'),
(8, 'Kiran Rao7', 'demo1', 'kiran7@rao.com', '05-31-2018', '9898989898', 'demo1'),
(9, 'Kiran Rao8', 'demo1', 'kiran8@rao.com', '05-31-2018', '9898989898', 'demo1'),
(10, 'Kiran Rao9', 'demo1', 'kiran9@rao.com', '06-01-2018', '9898989898', 'demo1'),
(11, 'Kiran Rao10', 'demo1', 'kiran10@rao.com', '06-01-2018', '9898989898', 'demo1'),
(12, 'Kiran Rao11', 'demo1', 'kiran11@rao.com', '06-02-2018', '9898989898', 'demo1'),
(13, 'Kiran Rao12', 'demo1', 'kiran12@rao.com', '06-02-2018', '9898989898', 'demo1'),
(14, 'Kiran Rao13', 'demo1', 'kiran13@rao.com', '06-03-2018', '9898989898', 'demo1'),
(15, 'Kiran Rao14', 'demo1', 'kiran14@rao.com', '06-03-2018', '9898989898', 'demo1'),
(16, 'Kiran Rao15', 'demo1', 'kiran15@rao.com', '06-04-2018', '9898989898', 'demo1'),
(17, 'Kiran Rao16', 'demo1', 'kiran16@rao.com', '06-04-2018', '9898989898', 'demo1'),
(18, 'Kiran Rao17', 'demo1', 'kiran17@rao.com', '06-05-2018', '9898989898', 'demo1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
