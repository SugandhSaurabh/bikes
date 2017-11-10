-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 07:42 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrentandride`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `logincheck` (IN `un` VARCHAR(78), IN `up` VARCHAR(78), OUT `ret` INT)  NO SQL
BEGIN
DECLARE ap varchar(50);
SELECT password FROM tbusers WHERE email = un into  @ap;
if @ap is null THEN
SET ret = -1; 
ELSE IF @ap = up THEN
SET ret = 1;
ELSE 
set ret = -2;
END IF;
END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `avail_bikes`
--

CREATE TABLE `avail_bikes` (
  `bike_image` varchar(100) NOT NULL,
  `bike_name` varchar(20) NOT NULL,
  `bike_engine` varchar(20) NOT NULL,
  `bike_speed` varchar(20) NOT NULL,
  `bike_mileage` varchar(20) NOT NULL,
  `bike_price` int(11) NOT NULL,
  `bike_id` int(11) NOT NULL,
  `bike_type` varchar(10) NOT NULL,
  `avail_location` varchar(100) NOT NULL,
  `avail_from` date NOT NULL,
  `avail_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avail_bikes`
--

INSERT INTO `avail_bikes` (`bike_image`, `bike_name`, `bike_engine`, `bike_speed`, `bike_mileage`, `bike_price`, `bike_id`, `bike_type`, `avail_location`, `avail_from`, `avail_to`) VALUES
('images/avenger.jpg', 'Avenger', '220 cc', '120 kmph', '40 kmpl', 800, 1, 'Bike', 'phagwara,lpu,jalandhar', '2017-07-05', '2017-07-30'),
('images/pul.jpg', 'Pulsar', '199.5 cc', '136 kmph', '40 kmpl', 700, 2, 'Bike', 'phagwara,lpu', '2017-07-05', '2017-07-30'),
('images/bullet.jpg', 'Royal Enfield', '346 cc', '120 kmph', '30 kmpl', 1200, 3, 'Bike', 'lpu', '2017-07-05', '2017-07-30'),
('images/activa.jpg', 'Activa', '125 cc', '84 kmph', '50 kmpl', 500, 4, 'Scooter', 'phagwara,jalandhar', '2017-07-05', '2017-07-30'),
('images/ple.png', 'Pleasure', '102 cc', '80 kmph', '54 kmpl', 500, 5, 'Scooter', 'phagwara,lpu,jalandhar', '2017-07-05', '2017-07-30'),
('images/dio.jpg', 'Dio', '110 cc', '83 kmph', '50 kmpl', 500, 6, 'Scooter', 'phagwara,lpu,jalandhar', '2017-07-05', '2017-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbord`
--

CREATE TABLE `tbord` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbord`
--

INSERT INTO `tbord` (`id`, `date`) VALUES
(1, '2017-07-12'),
(2, '2017-07-12'),
(3, '2017-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `tborddet`
--

CREATE TABLE `tborddet` (
  `code` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tborddet`
--

INSERT INTO `tborddet` (`code`, `id`, `qty`) VALUES
(1, 1, 3),
(1, 2, 1),
(2, 4, 3),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbusers`
--

CREATE TABLE `tbusers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `phone_no` double NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbusers`
--

INSERT INTO `tbusers` (`id`, `first_name`, `last_name`, `phone_no`, `email`, `password`) VALUES
(6, 'sss', 'Srivastava', 123456789, 'asd@abc.com', '789'),
(8, 'a', 'qwe', 89641532, 'asdd@sd.com', 'Sss@741'),
(10, 'qwe', 'ert', 2345678, 'awe@df.com', '1234567'),
(22, 'mn', 'as', 904139955, 'd@c.com', '123456'),
(19, 't', 'm', 741852, 'dc@gmI.COM', '789456'),
(15, 'zxc', 'asd', 2147483647, 'dsa@gmail.com', '456123'),
(21, 'sdfghjkl', 'qwertyui', 2147483647, 'l@g.com', '123456'),
(23, 'aaaaaaaaaaaa', 'qqqqqqq', 1234567890, 'q@w.com', '123456'),
(20, 'sdfgh', 'hgfds', 2147483647, 'qw@d.com', '123456'),
(7, 'dfgh', 'dfgh', 865, 'sdfghj@gmail.com', '1234'),
(1, 'sugandh', 'saurabh', 2147483647, 'sugandhsaurabh16@gmail.com', '148'),
(5, 'suga', 'sau', 95696741, 'sugandhsrivastavadav@gmail.com', '123'),
(13, 'Gurtaj ', 'Singh', 2147483647, 'tajjatt77@gmail.com', '123456789'),
(18, 'tus', 'mah', 2147483647, 'tm@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avail_bikes`
--
ALTER TABLE `avail_bikes`
  ADD PRIMARY KEY (`bike_id`);

--
-- Indexes for table `tbord`
--
ALTER TABLE `tbord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avail_bikes`
--
ALTER TABLE `avail_bikes`
  MODIFY `bike_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbord`
--
ALTER TABLE `tbord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
