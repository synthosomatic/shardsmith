--
-- Database: `wow`
--
CREATE DATABASE IF NOT EXISTS `wow` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wow`;

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--
-- Creation: Jan 29, 2018 at 08:07 PM
--

CREATE TABLE `characters` (
  `Nickname` varchar(12) NOT NULL,
  `First` varchar(10) NOT NULL,
  `Last` varchar(10) NOT NULL,
  `Race` varchar(20) NOT NULL,
  `Class` int(12) NOT NULL,
  `Spec` int(13) NOT NULL,
  `Profession1` int(14) NOT NULL,
  `Profession2` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `characters`:
--
