-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 17, 2020 at 02:40 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `thierry_simon`
--

-- --------------------------------------------------------

--
-- Table structure for table `projets`
--

CREATE TABLE `projets` (
  `project_id` int(7) NOT NULL,
  `project_title` char(150) NOT NULL,
  `project_description` text NOT NULL,
  `project_image` varchar(500) NOT NULL,
  `project_date` date NOT NULL,
  `project_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projets`
--

INSERT INTO `projets` (`project_id`, `project_title`, `project_description`, `project_image`, `project_date`, `project_category`) VALUES
(1, 'jogging +', 'refonte du site', 'https://thierry-gaudiche.com/Portfolio/images/projet2.png', '2019-05-24', ''),
(3, 'ma ville accessible', 'lobbying citoyen', 'https://thierry-gaudiche.com/Portfolio/images/projet1.png', '2020-03-01', ''),
(4, 'ma carte sonore', 'carte sonore iut', 'https://thierry-gaudiche.com/Portfolio/images/projet6.png', '2020-01-06', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
  MODIFY `project_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
