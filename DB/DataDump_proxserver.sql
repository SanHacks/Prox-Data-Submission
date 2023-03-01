-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 01, 2023 at 11:00 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ProxServer`
--

-- --------------------------------------------------------

--
-- Table structure for table `proxserver`
--

CREATE TABLE `proxserver` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `idno` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `timeOfSign` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proxserver`
--

INSERT INTO `proxserver` (`id`, `name`, `surname`, `idno`, `dob`, `timeOfSign`) VALUES
(1, 'Gundo', 'Sifhufhi', NULL, '2023-03-16', NULL),
(2, 'Gundo', 'Sifhufhi', '9602142464332', '18/02/1996', '1677707755'),
(3, 'Gundo', 'Sifhufhi', '3624757258578', '18/02/1996', '1677708159'),
(4, 'Gundo', 'San', '4642642727537', '18/02/1996', '1677710708'),
(5, 'Gundo', 'San', '6275725725632', '18/02/1996', '1677710804'),
(6, 'Gundo', 'San', '5637357357421', '18/02/1996', '1677710905'),
(7, 'Gundo', 'Sifhufhi', '3264642646444', '18/02/1996', '1677711051'),
(8, 'Gundo', 'Sifhufhi', '2646426246464', '18/02/1996', '1677711167');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proxserver`
--
ALTER TABLE `proxserver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proxserver`
--
ALTER TABLE `proxserver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
