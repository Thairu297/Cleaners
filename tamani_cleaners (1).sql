-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 03:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tamani_cleaners`
--

-- --------------------------------------------------------

--
-- Table structure for table `administartor`
--

CREATE TABLE `administartor` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `admin_username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `admin_phone_number` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administartor`
--

INSERT INTO `administartor` (`admin_id`, `admin_name`, `admin_username`, `admin_email`, `admin_phone_number`, `admin_password`) VALUES
(1, 'Lilian Thairu', 'Admin', 'thairulilian9@gmail.com', '0719379216', '$2y$10$5WE18irtYa7qKxXxykS7bOKpb4xuQ9q9EjPmuS9iQZ2wK/nJjihtK');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `customer_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_email`, `phone_number`, `customer_password`) VALUES
(11, 'David Munya', 'Munya@gmail.com', '0715435678', '$2y$10$LwCQS6S.qpWH3HAxcLxQ3uDSU'),
(12, 'Paul Wanyoike', 'Wanyoike12@gmail.com', '0721564783', '$2y$10$b/4Sjtw9ZTQhiXr67HQL1e8aT'),
(13, 'Condrad Ojiambo', 'cojiambo@strathmore.edu', '0714567265', '$2y$10$bzpZOByl770GPa/17ctnvOapT'),
(14, 'Ashley Mwenda', 'Ashley.Mwenda@gmail.com', '0712567876', '$2y$10$JiN4Bg4ddYXM5BHbXAf3IuQzqLjw3JgK2eCefuEZ2My3HIvS4FSMK'),
(17, 'Kennedy Ntawasa', 'NtawasaKen@gmail.com', '0719345776', '$2y$10$35lbbM1OTsbJvE7lR0Tgp.nncKH8s8JD87afqoj7vcoVV5Eab8Ueu'),
(22, 'Hellen Linneaus', 'jmorellenlinnie@gmail.com', '0720116116', '$2y$10$Tj9g5zx1pX9/.BUyrgdnE.kPoSfeBtUIZ9ZxZ5oxb9D6ewccr7bCy'),
(25, 'Dylan', 'OnyangoDylan@gmail.com', '0796896889', '$2y$10$cc3Wzd5zUE.ibkm.gpmS5O7aDj2SsecMaW8ldNx3swX.8S40EeAr6'),
(26, 'Daniel Kurui', 'dkurui@strathmore.edu', '0734567567', '$2y$10$c.P/Pys10WHZU1ITluEUyOrU1/IVLjpiEa5AtABlIW1Mcb2Lw.6j2'),
(27, 'Brenda', 'brendamukami254@gmail.com', '0796739990', '$2y$10$DenUM.Jh6iD4AGZEcKtPv.T1iZuAJbIRGe7OPT77ggT1nRpps6xv6');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `employee_username` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `employee_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `employee_phone_number` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `employee_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_name`, `employee_username`, `employee_email`, `employee_phone_number`, `employee_password`) VALUES
(2, 'Mark Mwinda', 'Em2', 'Mark.Mwinda@gmail.com', '0738567998', '$2y$10$ip3oBNjcunHUY9zmk2J3NOaslQdSf/OtBUpvyWNQr9Jbj4zERXCbW'),
(3, 'Jackline Chelangat', 'Em3', 'Jackline.Chelangat@gmail.com', '0713555777', '$2y$10$.A5C1bFi9IjIaboX33QSs.yL6dThM.YlvMdBI0t3JBQlunLmjow5.'),
(4, 'Celestine', 'Em4', 'celenyingi2@gmail.com', '0728456876', '$2y$10$F3VM1qA9BxV0Q9Z74Snx5.NGE1oOEF1UsL8r3Q.7DHL/Anbr5E9De');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `manager_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `manager_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `manager_username` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `manager_phone_number` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `manager_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `manager_name`, `manager_email`, `manager_username`, `manager_phone_number`, `manager_password`) VALUES
(2, 'Walter Kamau', 'Walter.Kamau@gmail.com', 'Ma2', '0719367897', '$2y$10$RHCFR4kKzDsjsQvrWiN0au9SYy05QBlZ9839nG2IM5NmFDTBJ76qe'),
(3, 'Selina Nyaguthii', 'Selina.Nyaguthii@gmail.com', 'Ma3', '0718667224', '$2y$10$EAuv./Z/1.frHnTIJmvpN.ywHUleH2zR4eU/Baa7jXtZ0nPExW8YW'),
(4, 'Susan Kilonzo', 'susan.kilonzo@gmail.com', 'Ma4', '0796123946', '$2y$10$pYZfU/fHExTfIUIrVwn9KuoEG24wXcsLd6LlVW5OUjdoHSQzYdEKS'),
(5, 'Triza', 'triza.mukatia@strathmore.edu', 'Ma5', '0798556333', '$2y$10$UEa8N.Xra08woakFnIXQC.NGyiuULfhV6BLmD2xyZzk3qj1Jld0qS');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'customer'),
(2, 'employee'),
(3, 'manager'),
(4, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_price` double NOT NULL,
  `service_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_price`, `service_type`) VALUES
(1, 'furniture', 35000, 'cleaning'),
(2, 'fumigation', 20000, 'pest_control'),
(3, 'floor', 50000, 'cleaning'),
(4, 'carpet', 20000, 'cleaning'),
(5, 'constructions', 70000, 'cleaning'),
(6, 'curtain', 10000, 'cleaning');

-- --------------------------------------------------------

--
-- Table structure for table `service_booking`
--

CREATE TABLE `service_booking` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `date_requested` int(11) NOT NULL,
  `time-requested` time NOT NULL,
  `date_completed` date NOT NULL,
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_paid` double NOT NULL,
  `date_paid` date NOT NULL,
  `time_paid` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` text COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administartor`
--
ALTER TABLE `administartor`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_name` (`customer_name`,`customer_email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`,`employee_username`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`,`manager_username`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_booking`
--
ALTER TABLE `service_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administartor`
--
ALTER TABLE `administartor`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_booking`
--
ALTER TABLE `service_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
