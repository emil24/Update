-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2016 at 07:34 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pairprogramming`
--

-- --------------------------------------------------------

--
-- Table structure for table `firsttab`
--

CREATE TABLE `firsttab` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `firsttab`
--

INSERT INTO `firsttab` (`id`, `title`, `des`, `text`, `img`) VALUES
(1, 'FOR EVERY <span>Emil</span>', 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, earum dicta quia voluptatem numquam cumque aliquid placeat laboriosam soluta facilis, sint repudiandae ut odit quaerat nesciunt minima maxime beatae maiores.', 'img/features/917633.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `des`) VALUES
(1, 'TEst', 'dlshadlashdlashdlashd');

-- --------------------------------------------------------

--
-- Table structure for table `secondtab`
--

CREATE TABLE `secondtab` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `secondtab`
--

INSERT INTO `secondtab` (`id`, `title`, `des`, `text`, `img`) VALUES
(1, 'NEW AGE <span>Emil</span>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laborum ea totam ab, labore. Illum ut odit.', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.', 'img/features/695617.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `thirdtab`
--

CREATE TABLE `thirdtab` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `icon1` varchar(255) NOT NULL,
  `head1` varchar(255) NOT NULL,
  `des1` text NOT NULL,
  `icon2` varchar(255) NOT NULL,
  `head2` varchar(255) NOT NULL,
  `des2` text NOT NULL,
  `icon3` varchar(255) NOT NULL,
  `head3` varchar(255) NOT NULL,
  `des3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thirdtab`
--

INSERT INTO `thirdtab` (`id`, `title`, `des`, `icon1`, `head1`, `des1`, `icon2`, `head2`, `des2`, `icon3`, `head3`, `des3`) VALUES
(1, '3 EASY STEPS', 'Lorem ipsum dolor sit atmet sit dolor greand fdanrh s dfs sit atmet sit dolor greand fdanrh sdfs', 'fa fa-list-alt', 'PLACE ORDER', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.', 'fa fa-cog', 'OUR SYSTEM RUNS', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.', 'fa fa-facebook', 'RECEIVE REPORT', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firsttab`
--
ALTER TABLE `firsttab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secondtab`
--
ALTER TABLE `secondtab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thirdtab`
--
ALTER TABLE `thirdtab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `firsttab`
--
ALTER TABLE `firsttab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `secondtab`
--
ALTER TABLE `secondtab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `thirdtab`
--
ALTER TABLE `thirdtab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
