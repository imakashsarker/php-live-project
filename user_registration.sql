-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 11:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee1`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `Employee_ID` int(220) NOT NULL,
  `Employee_Name` varchar(220) NOT NULL,
  `Father_Name` varchar(220) NOT NULL,
  `Mother_Name` varchar(220) NOT NULL,
  `E_mail` varchar(220) NOT NULL,
  `Contact_Number` varchar(220) NOT NULL,
  `Gender` varchar(220) NOT NULL,
  `Address` varchar(220) NOT NULL,
  `Qualification` varchar(220) NOT NULL,
  `Designation` varchar(220) NOT NULL,
  `Salary` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`Employee_ID`, `Employee_Name`, `Father_Name`, `Mother_Name`, `E_mail`, `Contact_Number`, `Gender`, `Address`, `Qualification`, `Designation`, `Salary`) VALUES
(5252767, 'harun', 'korim', 'sharmin sultan', 'hsula56@gmail.com', '01743028758', 'male', 'London', 'bsc in civil', 'CA', '120000'),
(5252785, 'Md.Rofiqul Islam35', 'korim453', 'sufia53', 'hdelower83@gmail.com', 'hdelower84@gmail.com', 'hdelower83@gmail.com', 'dsfsd', 'dsf', 'software enger', '568999'),
(4556, 'fgh', 'hagfh', 'fdsfhsh', 'hghs', 'sdhsh', 'male', 'fdhgh', 'dhgsd', 'dshsd', '987678'),
(4556, 'fgh', 'hagfh', 'fdsfhsh', 'hghs', 'sdhsh', 'male', 'fdhgh', 'dhgsd', 'dshsd', '987678'),
(5767, 'gdfh', 'sh', 'dfhs', 'sdhsj', 'sjhj', 'male', 'zxvzxvzx', 'xczzhh', 'dfgdgd', '465563'),
(5767, 'gdfh', 'sh', 'dfhs', 'sdhsj', 'sjhj', 'male', 'zxvzxvzx', 'xczzhh', 'dfgdgd', '465563'),
(875658, 'skdlfsad', 'fsf', 'fsdfas', 'sdfsaf', 'sdfsdf', 'male', 'sdfsdfasdf', 'sdfsdfsa', 'sfsdf', 'sdfsdf'),
(0, 'dfasdf', 'asdfs', 'sdfsad', 'afsad', 'sfas', 'male', 'fdsasdfas', 'sdfsaa', 'fasfas', 'asfasd'),
(5252345, 'dfgdf', 'dfgds', 'dsfg', 'dfg', 'dfgds', 'male', 'dsfgsdg', 'dsgdsfgds', 'sdgsdf', 'dfgdsfg'),
(5252345, 'dfgdf', 'dfgds', 'dsfg', 'dfg', 'dfgds', 'male', 'dsfgsdg', 'dsgdsfgds', 'sdgsdf', 'dfgdsfg'),
(5252345, 'dfgdf', 'dfgds', 'dsfg', 'dfg', 'dfgds', 'male', 'dsfgsdg', 'dsgdsfgds', 'sdgsdf', 'dfgdsfg'),
(4543, 'dfgdsg', 'fgdfsg', 'dfgdsg', 'dfgdsfg', 'dfgdsfg', 'male', 'dfgdsfgdfsg', 'dffgdg', 'dfgdsgs', 'dgsdg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
