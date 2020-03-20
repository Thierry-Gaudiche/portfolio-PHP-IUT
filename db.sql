-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 20, 2020 at 09:01 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `thierry_simon`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(2, 'Web-design'),
(3, 'Wev-development'),
(4, 'Branding'),
(5, 'Vidéo');

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
  `project_link` varchar(200) DEFAULT NULL,
  `project_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projets`
--

INSERT INTO `projets` (`project_id`, `project_title`, `project_description`, `project_image`, `project_date`, `project_link`, `project_category`) VALUES
(3, 'ma ville accessible', 'lobbying citoyen', 'https://thierry-gaudiche.com/Portfolio/images/projet1.png', '2020-03-01', NULL, '2'),
(4, 'ma carte sonore', 'carte sonore iut', 'https://thierry-gaudiche.com/Portfolio/images/projet6.png', '2020-01-06', NULL, '3'),
(7, 'Mort dure 4', 'Vidéo parodie', 'https://thierry-gaudiche.com/Portfolio/images/projet6.png', '2019-05-24', 'https://www.youtube.com/embed/LRF-AA68JHU', '5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_lastname` text NOT NULL COMMENT 'nom de famille',
  `user_firstname` text NOT NULL COMMENT 'prenom',
  `user_description` text NOT NULL,
  `user_cvlink` varchar(200) DEFAULT NULL,
  `user_image` varchar(500) DEFAULT NULL,
  `user_password` varchar(500) NOT NULL,
  `user_mail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_lastname`, `user_firstname`, `user_description`, `user_cvlink`, `user_image`, `user_password`, `user_mail`) VALUES
(4, 'TEST', 'TEST', 'test', NULL, NULL, '098f6bcd4621d373cade4e832627b4f6', 'simon.deflesschouwer@mmibordeaux.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
  MODIFY `project_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
