-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 06:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kormatron_`
--

-- --------------------------------------------------------

--
-- Table structure for table `toilet`
--

CREATE TABLE `toilet` (
  `id` int(5) NOT NULL,
  `location` int(5) NOT NULL,
  `type` int(1) NOT NULL,
  `button_count` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toilet`
--

INSERT INTO `toilet` (`id`, `location`, `type`, `button_count`, `status`) VALUES
(1, 2, 0, 0, 1),
(2, 6, 2, 0, 1),
(3, 3, 0, 0, 1),
(4, 5, 2, 0, 1),
(5, 1, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `toilet_log`
--

CREATE TABLE `toilet_log` (
  `toilet_id` int(5) NOT NULL,
  `time` datetime(6) NOT NULL,
  `last_cleaned` varchar(6) DEFAULT NULL,
  `worker_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toilet_log`
--

INSERT INTO `toilet_log` (`toilet_id`, `time`, `last_cleaned`, `worker_id`) VALUES
(3, '2021-12-10 18:04:08.628833', NULL, 1),
(4, '2021-12-10 18:04:25.955256', NULL, 1),
(4, '2021-12-10 18:11:21.898737', NULL, 1),
(3, '2021-12-10 18:11:28.473765', NULL, 1),
(4, '2021-12-10 18:12:07.574266', NULL, NULL),
(3, '2021-12-10 18:14:03.489805', NULL, NULL),
(2, '2021-12-10 18:14:06.893797', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `pincode` int(5) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `pincode`, `level`) VALUES
(1, 'Shaq', 'Boktor', 6969, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `toilet`
--
ALTER TABLE `toilet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toilet_log`
--
ALTER TABLE `toilet_log`
  ADD KEY `toilet_id` (`toilet_id`),
  ADD KEY `worker_id` (`worker_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `toilet`
--
ALTER TABLE `toilet`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `toilet_log`
--
ALTER TABLE `toilet_log`
  ADD CONSTRAINT `toilet_log_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `toilet_log_ibfk_2` FOREIGN KEY (`toilet_id`) REFERENCES `toilet` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
