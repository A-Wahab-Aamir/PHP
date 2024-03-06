-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 01:40 PM
-- Server version: 10.4.21-MariaDB-log
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myaptech`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `class` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `address`, `class`, `phone`, `gender`, `profile_picture`) VALUES
(1, 'Abdul Wahab ', 'KORAN KAARCHI', 'master12', '123-456-7890', 'Male', 'abdul.jfif'),
(2, 'AAMIR KHAN', '456 Elm St, Townsville', 'Grade 11', '456-789-0123', 'Male', '2.jfif'),
(3, 'Ali Khan', 'MALIR', 'Grade 9', '789-012-3456', 'Male', '3.jfif'),
(4, 'Charlie', '321 Pine St, Hamletville', 'Grade 12', '987-654-3210', 'Female', '4.jfif'),
(5, 'SANWAL KHAN', '654 Maple St, Countryside', 'Grade 10', '345-678-9012', 'Male', '5.jfif'),
(6, 'Bilal Ali', '987 Birch St, Suburbia', 'Grade 11', '567-890-1234', 'Male', '6.jfif'),
(7, 'Daniyal Khan', '210 Cedar St, Riverside', 'Grade 9', '234-567-8901', 'Male', '7.jfif'),
(8, 'Ezabel Kaleem', '543 Walnut St, Downtown', 'Grade 12', '876-543-2109', 'Male', '8.jfif'),
(9, 'Gabbar Sign Khataq', '876 Cherry St, Hillside', 'Grade 10', '321-098-7654', 'Male', '9.jfif'),
(10, 'Farhan Arpit Bala', '109 Pineapple St, Lakeside', 'Grade 11', '678-901-2345', 'Male', '10.jfif'),
(11, 'Samiullah saen', '432 Banana St, Beachtown', 'Grade 9', '901-234-5678', 'Male', '11.jfif'),
(12, 'Farhan Khuram', '765 Grape St, Mountainside', 'Grade 12', '543-210-9876', 'Male', '12.jfif'),
(13, 'Ghulam Akbar chemo', '210 Peach St, Countryside', 'Grade 10', '890-123-4567', 'Male', '13.jfif'),
(14, 'Muzammil Farjar Khan', '543 Plum St, Lakeside', 'Grade 11', '234-567-8901', 'Male', '14.jfif'),
(15, 'Hassan Ali ', '876 Orange St, Riverside', 'Grade 9', '678-901-2345', 'Male', '15.jfif'),
(16, 'hanan khan ', 'sadar', 'matric', '0311726348', 'Male', 'undraw_undraw_undraw_notebook_ask4_w99c_4gxu.png'),
(17, 'sir tameez', 'KORAN KAARCHI', 'GRADE 4', '0311726348', 'Male', 'TameezNawabWhite.png'),
(18, 'Admin', 'KORAN KAARCHI', 'master', '0311726348', 'Male', 'victoria-shes-UC0HZdUitWY-unsplash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
