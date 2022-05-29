-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 03:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db2059524`
--

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--

CREATE TABLE `weather` (
  `city` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  `temperature` float NOT NULL,
  `weather_main` varchar(10) NOT NULL,
  `feels` float NOT NULL,
  `description` varchar(50) NOT NULL,
  `humidity` int(11) NOT NULL,
  `pressure` int(11) NOT NULL,
  `wind_speed` float NOT NULL,
  `wind_degree` int(11) NOT NULL,
  `icon_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weather`
--

INSERT INTO `weather` (`city`, `date_time`, `temperature`, `weather_main`, `feels`, `description`, `humidity`, `pressure`, `wind_speed`, `wind_degree`, `icon_code`) VALUES
('Sunderland', '2022-05-02 20:42:00', 10.3, 'Clouds', 9.63, 'overcast clouds', 86, 1013, 1.34, 340, '04d'),
('Sunderland', '2022-05-02 21:17:34', 10.38, 'Clouds', 9.69, 'overcast clouds', 85, 1013, 0.45, 45, '04d'),
('Sunderland', '2022-05-05 12:35:40', 9.81, 'Clouds', 9.81, 'overcast clouds', 86, 1012, 0.89, 292, '04d'),
('Kathmandu', '2022-05-05 13:53:56', 24.12, 'Clouds', 24.08, 'broken clouds', 57, 1014, 4.12, 260, '04d'),
('Kathmandu', '2022-05-05 14:21:23', 25.12, 'Clouds', 25.07, 'broken clouds', 53, 1013, 4.12, 280, '04d');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
