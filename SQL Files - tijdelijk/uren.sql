-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 10 okt 2019 om 17:59
-- Serverversie: 5.7.23
-- PHP-versie: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasomortselwebsitedb`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `uren`
--

DROP TABLE IF EXISTS `uren`;
CREATE TABLE IF NOT EXISTS `uren` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `jarengraadID` int(11) NOT NULL,
  `richtingenID` int(11) NOT NULL,
  `vakkenID` int(11) NOT NULL,
  `uren` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `uren`
--

INSERT INTO `uren` (`ID`, `jarengraadID`, `richtingenID`, `vakkenID`, `uren`) VALUES
(1, 2, 1, 6, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
