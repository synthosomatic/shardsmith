-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: shardsmithdb.cn5kmpwmbexo.us-east-1.rds.amazonaws.com
-- Generation Time: Apr 04, 2018 at 10:41 PM
-- Server version: 5.7.19-log
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `character_sheets`
--
CREATE DATABASE IF NOT EXISTS `character_sheets` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `character_sheets`;

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--
-- Creation: Nov 17, 2017 at 07:59 PM
--

CREATE TABLE `characters` (
  `Alias` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Nickname` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `characters`:
--

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--
-- Creation: Nov 17, 2017 at 08:01 PM
--

CREATE TABLE `stats` (
  `Nickname` varchar(50) NOT NULL,
  `Strength` int(11) NOT NULL,
  `Dexterity` int(11) NOT NULL,
  `Constitution` int(11) NOT NULL,
  `Intelligence` int(11) NOT NULL,
  `Willpower` int(11) NOT NULL,
  `Charisma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `stats`:
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD UNIQUE KEY `Alias` (`Alias`);
