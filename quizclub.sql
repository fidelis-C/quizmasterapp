-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 09:49 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gradeone`
--

CREATE TABLE `gradeone` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question2`
--

CREATE TABLE `question2` (
  `id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `right_option` varchar(255) NOT NULL,
  `view` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `right_option` varchar(255) NOT NULL,
  `view` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option1`, `option2`, `option3`, `right_option`, `view`) VALUES
(1, 'What is the name of the capital city of nigeria', 'Abuja', 'Kano', 'Lagos', 'Abuja', 'disabled'),
(2, 'how many colors make rainbow', 'seven', 'eight', 'nine', 'seven', 'disabled'),
(3, 'How many color is the Nigerian flag', '3', '8', '2', '2', 'disabled'),
(4, 'How many days makes a week?', 'eight', 'nine', 'seven', 'seven', 'disabled');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `Score` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `lastname`, `user_id`, `class`, `Score`, `profile`, `password`) VALUES
(1, 'Fidelis', 'Castro', '418523134', 'Gradethree', '120', 'img/18320442_1468909893182225_1173878479393264195_o.jpg', '12345'),
(2, 'Faith', 'Edheki', '329197616', 'Gradefour', '', '../asset/img/class4 (1).jpg', 'faith'),
(3, 'Jamal', 'Alebiosu', '363372366', 'gradeone', '12', 'img/IMG_20220126_113913.jpg', 'jamal'),
(4, 'Oghene', 'Fejiro', '877606625', 'gradeone', '9', 'img/IMG_20220126_114005.jpg', 'Oghene'),
(5, 'Joy', 'Nwaokoru', '874680452', 'gradeone', '', 'img/IMG_20220126_113941.jpg', 'joy'),
(6, 'Ofoma', 'Chinemerem J', '651411641', 'gradeone', '3', 'img/IMG_20220126_114056.jpg', 'ofoma'),
(7, 'Victory', 'Philip', '305437244', 'gradeone', '', 'img/IMG_20220126_114019.jpg', 'victory'),
(8, 'Fingesi', 'B. Achies', '215845486', 'gradeone', '3', 'img/IMG_20220126_120648.jpg', 'fingesi'),
(9, 'D. Perfection', 'Tombari', '634214577', 'gradeone', '', 'img/IMG_20220126_120901.jpg', 'd.perfection'),
(10, 'Roberis ', 'Joel', '341727572', 'gradeone', '6', 'img/IMG_20220126_120821.jpg', 'Cyber@12'),
(11, 'Mirabelle', 'Uko', '148675708', 'Gradefour', '', '../asset/img/class4 (2).jpg', 'mirabelle'),
(12, 'Agape', 'Damini', '402288670', 'Gradefour', '', '../asset/img/class4 (3).jpg', 'agape'),
(13, 'Okpe', 'Franklin', '550987992', 'Gradefour', '', '../asset/img/class4 (4).jpg', 'okpe'),
(14, 'Belema', 'Ibibia', '877521189', 'Gradefour', '', '../asset/img/class4 (5).jpg', 'belema');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gradeone`
--
ALTER TABLE `gradeone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question2`
--
ALTER TABLE `question2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gradeone`
--
ALTER TABLE `gradeone`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question2`
--
ALTER TABLE `question2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
