-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 07:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `exhibitions`
--

CREATE TABLE `exhibitions` (
  `ExhibitionName` varchar(100) NOT NULL,
  `ExhibitionImage` varchar(100) NOT NULL,
  `ExhibitionLocation` varchar(100) NOT NULL,
  `ExhibitionGallery` varchar(100) NOT NULL,
  `ExhibitionStartDate` date NOT NULL,
  `ExhibitionEndDate` date NOT NULL,
  `ExhibitionTime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exhibitions`
--

INSERT INTO `exhibitions` (`ExhibitionName`, `ExhibitionImage`, `ExhibitionLocation`, `ExhibitionGallery`, `ExhibitionStartDate`, `ExhibitionEndDate`, `ExhibitionTime`) VALUES
('Water', 'imageshiddenupload/76c3f828-4b8c-4da9-959a-3e00835863a9.jpg', 'weretr', 'wertt', '2023-07-21', '2023-07-15', '4pm to 8pm');

-- --------------------------------------------------------

--
-- Table structure for table `usercredintials`
--

CREATE TABLE `usercredintials` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userreviews`
--

CREATE TABLE `userreviews` (
  `ReviewerName` varchar(30) NOT NULL,
  `GalleryVisited` varchar(50) NOT NULL,
  `Review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userreviews`
--

INSERT INTO `userreviews` (`ReviewerName`, `GalleryVisited`, `Review`) VALUES
('Darren', 'Saskia Art Gallery', 'Great Experience !!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exhibitions`
--
ALTER TABLE `exhibitions`
  ADD PRIMARY KEY (`ExhibitionName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
