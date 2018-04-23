-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Ian 2017 la 04:56
-- Versiune server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `booking`
--

CREATE TABLE `booking` (
  `Flight Id` int(3) NOT NULL,
  `Username` int(11) NOT NULL,
  `Ticket purchased` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `flights`
--

CREATE TABLE `flights` (
  `Id` tinyint(3) NOT NULL,
  `Source location` text NOT NULL,
  `Destination` text NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Seats available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `flights`
--

INSERT INTO `flights` (`Id`, `Source location`, `Destination`, `Date`, `Time`, `Seats available`) VALUES
(1, 'Madrid', 'Luxemburg', '2017-01-18', '06:30:00', 100),
(2, 'Budapest', 'New York', '2017-01-18', '14:45:00', 60),
(3, 'Bucharest', 'London', '2017-01-18', '18:25:00', 20),
(4, 'London', 'Moscow', '2017-01-18', '15:16:00', 50),
(5, 'Barcelona', 'Berlin', '2017-01-19', '09:00:00', 80);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `registration`
--

CREATE TABLE `registration` (
  `accountID` int NOT NULL 
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Date of birth` date NOT NULL,
  `Email` text NOT NULL,
  `Country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `registration`
--

INSERT INTO `registration` ( `accountID`,`First Name`, `Last Name`, `Username`, `Password`, `Date of birth`, `Email`, `Country`) VALUES
('1','Ambrus', 'Lehel', 'Lehelxp', 'robotes', '1996-08-29', 'as_lehel11x@yahoo.com', 'Romania'),
('2','John', 'Dale', 'Jdale', '123456', '1970-09-06', 'j.dale@gmail.com', 'United Kingdom'),
('3','Jane', 'Heather', 'Jheart', '246810', '1992-05-20', 'jane@yahoo.com', 'France');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `Id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
