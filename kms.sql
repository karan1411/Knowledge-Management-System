-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 08:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'karan141198', 'kumawat123@');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(225) NOT NULL,
  `uploader` varchar(10000) NOT NULL,
  `date` datetime(6) NOT NULL,
  `filename` varchar(10000) NOT NULL,
  `status` int(25) NOT NULL,
  `downloads` int(225) NOT NULL,
  `category` varchar(10000) NOT NULL,
  `title` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `uploader`, `date`, `filename`, `status`, `downloads`, `category`, `title`) VALUES
(1, '12019002001115', '2021-11-03 09:55:04.000000', '/data-karan/12019002001115-Doc11.pdf', 1, 0, 'Papers', 'jatinnn'),
(2, '12019002001115', '2021-11-03 09:55:49.000000', 'data-karan/12019002001115-exam-az-900-microsoft-azure-fundamentals-skills-measured.pdf', 1, 0, 'Notes', 'jatin'),
(3, '12019002001097', '2021-11-03 11:18:22.000000', 'data-karan/12019002001097-Q.1__Karan Kumawat_12019002001097_Sec B.pdf', 1, 0, 'Papers', 'My name'),
(4, '12019002001097', '2021-11-20 08:52:07.000000', 'data-karan/12019002001097-PolSci-SQP.pdf', 1, 0, 'Papers', 'karan-1'),
(5, '12019002001098', '2021-11-21 12:27:25.000000', 'data-karan/12019002001098-12019002001098_ESP_Q4.pdf', 1, 0, 'Papers', 'file by saurabh'),
(6, '12019002001115', '2021-11-21 03:05:39.000000', 'data-karan/12019002001115-EFE Module 1.pdf', 1, 0, 'Notes', 'test file by jatin'),
(7, '12019002001116', '2021-11-22 12:27:56.000000', 'data-karan/12019002001116-sample.pdf', 0, 0, 'Resume', 'file by dipya'),
(9, '12019002001115', '2021-12-05 08:08:04.000000', 'data-karan/12019002001115-a-laboratory-experiment-in-linear-series-voltage-regulators.pdf', 0, 0, 'Papers', 'file by karan pc'),
(10, '12019002001115', '2021-12-05 08:27:41.000000', 'data-karan/12019002001115-01-Rectifiers.pdf', 1, 0, 'Resume', '1111'),
(11, '12019002001158', '2021-12-05 09:23:49.000000', 'data-karan/12019002001158-NOTICE_.pdf', 1, 0, 'Notes', 'Chinu '),
(12, '12019002001158', '2021-12-05 12:02:55.000000', 'data-karan/12019002001158-edc1_expt_04.pdf', 1, 0, 'Papers', 'Chinu Sokil Kumawat');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `username` varchar(10000) NOT NULL,
  `password` varchar(10000) NOT NULL,
  `Enroll` bigint(255) NOT NULL,
  `email` varchar(10000) NOT NULL,
  `login_stat` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `password`, `Enroll`, `email`, `login_stat`) VALUES
(11, 'Jatin Kumawat', 'jatin1115', 'kumawat123@', 12019002001115, 'jatinkumawat20@gmail.com', 1),
(12, 'dipendu', 'dipya', '123456', 12019002001116, 'dipya@gmail.com', 0),
(13, 'ankit', 'ankit11954', 'kumawat123', 12019002001158, 'kumawat123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
