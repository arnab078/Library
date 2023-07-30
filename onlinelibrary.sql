-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 12:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinelibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `password`) VALUES
(1, 'arnab', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `author` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `cotegary` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `price` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `pdf` varchar(200) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `author`, `cotegary`, `price`, `image`, `pdf`) VALUES
(1, 'science fiction', 'einsteen', 'Science', '200', 'sci1.jpg', 'science1.pdf'),
(2, 'the new science of curiosity', 'newton', 'Science', '110', 'sci2.jpg', 'science2.pdf'),
(3, 'biology', 'beerbala rastogi', 'Science', '200', 'sci3.jpg', 'science3.pdf'),
(5, 'creative art concept', 'Martin ', 'Art', '200', 'art1.jpg', 'art1.pdf'),
(6, 'the Creative brain art', 'brian eagleman', 'Art', '180', 'art2.jpg', 'art2.pdf'),
(7, 'black flowers art', 'shashi kushwaha', 'Art', '320', 'art3.jpg', 'art3.pdf'),
(8, 'godan', 'prem chand', 'Novel', '350', 'nov1.jpg', 'novel1.pdf'),
(9, 'anand matth', 'bankim chandra chatarji', 'Novel', '270', 'nov2.jpg', 'novel2.pdf'),
(10, 'crow moon', 'Anna Mckerrow', 'Novel', '580', 'nov3.jpg', 'novel3.pdf'),
(11, 'sachin tendulkar', 'Sachin tendulkar', 'Biography', '290', 'bio1.jpg', 'biography1.pdf'),
(12, 'the life of mahatma gandhi', 'Louis fischer', 'Biography', '190', 'bio2.jpg', 'biography3.pdf'),
(13, 'subhas chandra bose', 'Shubhash chandra bhosh', 'Biography', '245', 'bio3.jpg', 'biography2.pdf'),
(14, 'clockwork princess', 'Cassandra clare', 'Novel', '450', 'nov4.jpg', 'novel4.pdf'),
(15, 'new trends in physics', 'salvatore magazu', 'Science', '250', 'sci4.jpg', 'science4.pdf'),
(16, 'quantum  physics', 'Carl J pratt', 'Science', '200', 'sci5.jpg', 'science5.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `issued`
--

CREATE TABLE `issued` (
  `r_id` int(11) NOT NULL,
  `b_id` int(11) DEFAULT NULL,
  `r_city` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `r_add` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `r_pin` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `issued`
--

INSERT INTO `issued` (`r_id`, `b_id`, `r_city`, `r_add`, `r_pin`) VALUES
(7, 2, 'Basirhat', 'Matia', '743411'),
(7, 5, 'Howrah', 'Shibpur', '700007'),
(7, 9, 'Habra', 'ashok nagar', '700012'),
(7, 12, 'Kolkata', 'Bidhannagar', '700012'),
(7, 7, 'Malatipur', 'Gopalpur', '743422');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(50) NOT NULL,
  `uname` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `mobno` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `clg` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `psw` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `uname`, `email`, `mobno`, `gender`, `clg`, `psw`) VALUES
(7, 'user1', 'Arnabsaha25@gmail.com', '9093840236', 'Male', 'Narula Institute of  Technology', 'arnab25'),
(8, 'user2', 'sudiptaghosh17@gmail.com', '9051338412', 'Male', 'Techno India university', 'sudipta17'),
(11, 'user3', 'taraknath25@gmail.com', '9635440442', 'Male', 'Basirhat university', 'tarakyo25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issued`
--
ALTER TABLE `issued`
  ADD KEY `b_id` (`b_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issued`
--
ALTER TABLE `issued`
  ADD CONSTRAINT `issued_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `book` (`id`),
  ADD CONSTRAINT `issued_ibfk_2` FOREIGN KEY (`r_id`) REFERENCES `reg` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
