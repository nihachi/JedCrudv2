-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2016 at 08:59 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `CRUD`
--

-- --------------------------------------------------------

--
-- Table structure for table `People`
--

CREATE TABLE `People` (
`id` int(6) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `age` varchar(5) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=352 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `People`
--

INSERT INTO `People` (`id`, `name`, `address`, `age`, `contact`) VALUES
(316, 'Angel', '', '', ''),
(318, 'Johnder baul', '', '', ''),
(319, 'John', '', '', ''),
(335, 'Sarah', '', '23', ''),
(340, 'ASDASD', '', '', ''),
(344, 'Sarah', '', '', ''),
(347, 'Sarah', '', '', ''),
(348, 'sds', '', '', ''),
(349, 'Sarah', '', '', ''),
(351, 'Sarah', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `People`
--
ALTER TABLE `People`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `People`
--
ALTER TABLE `People`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=352;