-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 03:07 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud-storeprocedure-php`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteRecords` (IN `uid` INT(11))  NO SQL
BEGIN

DELETE FROM users WHERE id =uid;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetAllRecords` ()  NO SQL
BEGIN
	SELECT * from users;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetSingleRecord` (IN `uid` INT(11))  NO SQL
BEGIN
SELECT * FROM users WHERE id = uid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertData` (IN `fname` VARCHAR(255), IN `lname` VARCHAR(255), IN `uemail` VARCHAR(255))  NO SQL
BEGIN

INSERT INTO users(first_name,last_name,email) VALUES(fname,lname,uemail);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UpdateData` (IN `fname` VARCHAR(255), IN `lname` VARCHAR(255), IN `uemail` VARCHAR(255), IN `uid` INT(11))  NO SQL
BEGIN
UPDATE users SET first_name= fname,last_name= lname,email= uemail WHERE id = uid;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`) VALUES
(2, 'Surbhi', 'Gangrade', 'sur@gmail.com'),
(8, 'test', 'test', 'test@gmail.com'),
(10, 'Bhua', 'Aajao', 'bhuaaajao@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
