-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 04:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbabyxpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `babysitter`
--

CREATE TABLE `babysitter` (
  `babysitter_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birth_place` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `specialization` varchar(50) DEFAULT NULL,
  `employment_history` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `certificate` tinyint(1) DEFAULT NULL,
  `certificate_photo` blob DEFAULT NULL,
  `photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `babysitter`
--

INSERT INTO `babysitter` (`babysitter_id`, `name`, `birth_place`, `date_of_birth`, `address`, `email`, `phone_number`, `specialization`, `employment_history`, `note`, `certificate`, `certificate_photo`, `photo`) VALUES
(1, 'Dania Daniela', 'Jakarta', '1999-01-10', 'Jl. Jembatan 3 No.14 RT.02 RW.01, Jakarta Barat, DKI Jakarta.', 'daniadaniela@gmail.com', '081232322323', '1 - 3 years old', 'Telah bekerja sebagai babysitter selama 5 tahun (2018-2023)', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `employee_id` int(11) DEFAULT NULL,
  `joined_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `min_price` decimal(10,2) DEFAULT NULL,
  `max_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`employee_id`, `joined_date`, `min_price`, `max_price`) VALUES
(1, '2023-06-14 22:13:43', '100.00', '150.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `full_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `email`, `password`, `name`, `phone_number`, `date_of_birth`, `city`, `province`, `postal_code`, `full_address`) VALUES
(1, 'customer', 'john@example.com', 'password1', 'John Smith', '08123456789', '1990-01-01', 'Jakarta', 'DKI Jakarta', '12345', 'Jl. Sudirman No. 123'),
(2, 'customer', 'jane@example.com', 'password2', 'Jane Doe', '08123456788', '1995-05-05', 'Bandung', 'Jawa Barat', '67890', 'Jl. Merdeka No. 456'),
(3, 'babysitter', 'sara@example.com', 'password3', 'Sara Lee', '08234567890', '1992-10-10', 'Surabaya', 'Jawa Timur', '54321', 'Jl. A. Yani No. 789'),
(4, 'babysitter', 'peter@example.com', 'password4', 'Peter Parker', '08234567891', '1998-12-25', 'Yogyakarta', 'DI Yogyakarta', '24680', 'Jl. Malioboro No. 101'),
(5, 'customer', 'joe@example.com', 'password5', 'Joe Biden', '08123456787', '1942-11-20', 'Washington DC', 'USA', '00001', '1600 Pennsylvania Ave NW'),
(6, '', 'aaa@gmail.com', '$2y$10$oH1lVvnL.q/psvpGL4sjy.hu3oETrN6hDHT0ML9vvMszsvZuiBvBy', '', '', '0000-00-00', '', '', '', ''),
(7, '', 'sara2@example.com', '$2y$10$K2doo.cEfu24WC11pSou3updC5m.yP8zYmJSsGErMpBcKrk067A6y', '', '', '0000-00-00', '', '', '', ''),
(8, '', '123@gmail.com', '$2y$10$fmXH1RvB1DQw6E.96y4lB.LaThj3Yr5u.Y4fQdmRCQsk5X2abwHzu', '', '', '0000-00-00', '', '', '', ''),
(9, '', 'asa@gmail.com', '$2y$10$bDWJI7Zdbv5t69Il8NRDe.kbEhGoxuD0yym.s5kJBaZaTo0cVQomu', '', '', '0000-00-00', '', '', '', ''),
(10, '', 'bbb@gmail.com', 'bbb', '', '', '0000-00-00', '', '', '', ''),
(11, '', 'aaaa@gmail.com', 'aaaa', '', '', '0000-00-00', '', '', '', ''),
(12, '', 'asdf@gmail.com', 'asdf', '', '', '0000-00-00', '', '', '', ''),
(13, '', '', '', '', '', '0000-00-00', '', '', '', ''),
(14, '', 'vinny@gmail.com', 'vinny', '', '', '0000-00-00', '', '', '', ''),
(15, 'home.php', 'lolo@gmail.com', 'lolo', 'lolololo', '12', '2003-09-11', 'jb', 'DKI Jakarta', '2', 'ddd \r\n                ddd'),
(16, 'home.php', 'abab@gmail.com', 'abab', 'abababab', '12', '2003-09-11', 'sjjsjs', 'jsjsjs', '12', '    \r\n            1ssdfghtr    '),
(17, 'registerasBS.php', 'soso@gmail.com', 'soso', 'soso', '12', '2003-09-11', 'soso', 'soso', '12', '    sososo\r\n                '),
(18, 'registerasBS.php', 'jaja@gmail.com', 'jaja', 'jaja', '12', '2003-09-11', 'jaja', 'jaja', '12', '    \r\n               jaja '),
(19, 'Babysitter', 'jojo@gmail.com', 'jojo', 'jojo', '12', '2003-09-11', 'jojo', 'jojo', '12', '    jojo\r\n                '),
(20, 'Babysitter', 'lala@gmail.com', 'lala', 'lala', '12', '2003-09-11', 'lala', 'lala', '12', '    \r\n                lala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `babysitter`
--
ALTER TABLE `babysitter`
  ADD PRIMARY KEY (`babysitter_id`);

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `babysitter`
--
ALTER TABLE `babysitter`
  MODIFY `babysitter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employment`
--
ALTER TABLE `employment`
  ADD CONSTRAINT `employment_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `babysitter` (`babysitter_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
