-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 09:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emergencysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `emergencies`
--

CREATE TABLE `emergencies` (
  `emergency_id` int(4) NOT NULL,
  `emergency_name` text NOT NULL,
  `emergency_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emergencies`
--

INSERT INTO `emergencies` (`emergency_id`, `emergency_name`, `emergency_location`) VALUES
(1, 'Car Accident', 'Moi Avenue'),
(2, 'Fire Outbreak', 'Pacific Market'),
(3, 'Car Accident', 'Nyayo'),
(4, 'Fire breakout', 'Uhuru');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(8) NOT NULL,
  `user_name` text NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_phonenumber` int(11) NOT NULL,
  `user_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_phonenumber`, `user_location`) VALUES
('1111', 'MarinaPolice', 'Marina00#', 700001111, 'Nairobi CBD'),
('11112222', 'Marina Hospital', 'Marina2021#', 711112222, 'Nairobi CBD'),
('15148618', 'Calvin Maina', 'Maina11.', 798513535, 'Mirema'),
('22222222', 'admin', 'admin', 798513343, 'Kijabe'),
('22223333', 'Marina Fire Station', 'Marinapolice2024#', 722223333, 'Nairobi CBD'),
('84426432', 'Harvey Elliot', 'Harv980.', 765659264, 'Luthuli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emergencies`
--
ALTER TABLE `emergencies`
  ADD PRIMARY KEY (`emergency_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
