-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 05:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lavn`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL,
  `number_of_people` int(11) NOT NULL,
  `message` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `customer_email`, `date`, `time`, `number_of_people`, `message`) VALUES
(0, 'chloeting@gmail.com', '2022-01-29', '19:00', 2, 'This is a message.'),
(1, 'chloeting@gmail.com', '2022-01-26', '12:00', 3, 'Hi there, thank you!'),
(2, 'chloeting@gmail.com', '2022-01-25', '13:30', 5, 'Another reservation.'),
(3, 'ohmpawat@email.ca', '2022-02-25', '20:57', 2, 'Another reservation.'),
(4, 'ohmpawat@email.ca', '2022-04-18', '09:00', 1, 'Hi, this is my request!'),
(5, 'chloeting@gmail.com', '2022-01-25', '15:45', 2, 'Hi!'),
(6, 'ohmpawat@email.ca', '2022-01-25', '08:30', 2, 'This is a message.'),
(7, 'ohmpawat@email.ca', '2022-01-29', '22:31', 6, ''),
(8, 'nanon@email.com', '2022-01-31', '11:45', 10, 'We need a table near the window. Thank you!'),
(9, 'chloeting@gmail.com', '2022-11-02', '10:00', 5, 'No special request'),
(10, 'ohmpawat@email.ca', '2022-09-30', '17:00', 1, 'Another request from me!'),
(11, 'bounprem@gmail.com', '2022-10-31', '19:30', 2, 'Thank you!'),
(12, 'chloeting@gmail.com', '2022-02-16', '12:00', 1, 'I need hot food!'),
(13, 'bounprem@gmail.com', '2022-03-01', '14:00', 2, 'Je voudrais un bouquet de fleurs, svp!');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `customer_name`, `customer_id`, `phone_number`, `password`, `status`) VALUES
('bounprem@gmail.com', 'Boun Prem', 715275836, '413-213-4413', '123', 'Offline now'),
('chloeting@gmail.com', 'Chloe Ting', 1154669627, '123-231-3213', '123', 'Offline now'),
('nanon@email.com', 'Nanon Korapat', 68703026, '12134567890', '123', 'Offline now'),
('ohmpawat@email.ca', 'Ohm Pawat', 716041183, '123-123-1234', '123', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `customer_email` (`customer_email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`customer_email`) REFERENCES `customer` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
