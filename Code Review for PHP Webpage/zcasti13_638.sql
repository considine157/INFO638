-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 10:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zcasti13_638`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `anime_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `anime_title` varchar(100) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `anime_format` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`anime_id`, `company_id`, `anime_title`, `release_date`, `anime_format`) VALUES
(1, 1, 'Extra Olympia Kyklos', '2020-04-20', 'tv series'),
(2, 2, 'Woodpecker Detective\'s Office', '2020-04-13', 'tv series'),
(3, 3, 'Kaguya-sama: Love Is War? Season 2', '2020-04-11', 'tv series'),
(4, 4, 'The Genie Family', '2020-04-11', 'tv series'),
(5, 5, 'Puzzle & Dragon', '2020-04-11', 'tv series'),
(6, 6, 'BNA', '2020-04-09', 'tv series'),
(7, 7, 'Troublesome Old Man', '2020-04-08', 'tv series'),
(8, 8, 'Diary of our Days at the Breakwater', '2020-04-07', 'tv series'),
(9, 9, 'Shironeko Project: Zero Chronicle', '2020-04-06', 'tv series'),
(10, 10, 'Dropkick on My Devil!!', '2020-04-06', 'tv series'),
(11, 11, 'Kingdom 3rd Season', '2020-04-06', 'tv series'),
(12, 12, 'Gal & Dino', '2020-04-05', 'tv series'),
(13, 13, 'My Next Life as a Villainess: All Routes Lead to Doom!', '2020-04-05', 'tv series'),
(14, 8, 'Sing \"Yesterday\" for Me', '2020-05-05', 'tv series'),
(15, 14, 'Arte', '2020-04-04', 'tv series');

-- --------------------------------------------------------

--
-- Table structure for table `anime_genre`
--

CREATE TABLE `anime_genre` (
  `anime_genre_code` int(11) NOT NULL,
  `anime_id` int(11) NOT NULL,
  `genre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime_genre`
--

INSERT INTO `anime_genre` (`anime_genre_code`, `anime_id`, `genre_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 1),
(5, 5, 1),
(6, 6, 6),
(7, 7, 4),
(8, 8, 1),
(9, 9, 4),
(10, 10, 1),
(11, 11, 4),
(12, 12, 1),
(13, 13, 1),
(14, 14, 3),
(15, 15, 5);

-- --------------------------------------------------------

--
-- Table structure for table `anime_language`
--

CREATE TABLE `anime_language` (
  `anime_language_code` int(11) NOT NULL,
  `anime_id` int(11) NOT NULL,
  `language_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime_language`
--

INSERT INTO `anime_language` (`anime_language_code`, `anime_id`, `language_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `anime_production_company`
--

CREATE TABLE `anime_production_company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime_production_company`
--

INSERT INTO `anime_production_company` (`company_id`, `company_name`) VALUES
(1, 'Nobishiro Lab'),
(2, 'Liden Films'),
(3, 'A-1 Pictures'),
(4, 'Nippon Animation'),
(5, 'Studio Pierrot'),
(6, 'Trigger'),
(7, 'Kachidoki Studio'),
(8, 'Doga Kobo'),
(9, 'Project No. 9'),
(10, 'Nomad'),
(11, 'St. Signpost'),
(12, 'Kamikaze Douga'),
(13, 'Silver Link'),
(14, 'Seven Arcs');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `anime_genre_code` int(11) DEFAULT NULL,
  `genre_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `anime_genre_code`, `genre_name`) VALUES
(1, 1, 'Comedy'),
(2, 2, 'Mystery'),
(3, 3, 'Romance'),
(4, 4, 'Adventure'),
(5, 5, 'Historical'),
(6, 6, 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `language_table`
--

CREATE TABLE `language_table` (
  `language_id` int(11) NOT NULL,
  `anime_language_code` int(11) DEFAULT NULL,
  `language_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language_table`
--

INSERT INTO `language_table` (`language_id`, `anime_language_code`, `language_name`) VALUES
(1, 1, 'Japanese');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`anime_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `anime_genre`
--
ALTER TABLE `anime_genre`
  ADD PRIMARY KEY (`anime_genre_code`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `anime_id` (`anime_id`);

--
-- Indexes for table `anime_language`
--
ALTER TABLE `anime_language`
  ADD PRIMARY KEY (`anime_language_code`),
  ADD KEY `anime_id` (`anime_id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indexes for table `anime_production_company`
--
ALTER TABLE `anime_production_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `language_table`
--
ALTER TABLE `language_table`
  ADD PRIMARY KEY (`language_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anime`
--
ALTER TABLE `anime`
  ADD CONSTRAINT `anime_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `anime_production_company` (`company_id`);

--
-- Constraints for table `anime_genre`
--
ALTER TABLE `anime_genre`
  ADD CONSTRAINT `anime_genre_ibfk_1` FOREIGN KEY (`anime_id`) REFERENCES `anime` (`anime_id`),
  ADD CONSTRAINT `anime_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`),
  ADD CONSTRAINT `anime_genre_ibfk_3` FOREIGN KEY (`anime_id`) REFERENCES `anime` (`anime_id`);

--
-- Constraints for table `anime_language`
--
ALTER TABLE `anime_language`
  ADD CONSTRAINT `anime_language_ibfk_1` FOREIGN KEY (`anime_id`) REFERENCES `anime` (`anime_id`),
  ADD CONSTRAINT `anime_language_ibfk_2` FOREIGN KEY (`anime_id`) REFERENCES `anime` (`anime_id`),
  ADD CONSTRAINT `anime_language_ibfk_3` FOREIGN KEY (`language_id`) REFERENCES `language_table` (`language_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
