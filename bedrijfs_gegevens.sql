-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 apr 2021 om 09:52
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stagebedrijven`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bedrijfs_gegevens`
--

CREATE TABLE `bedrijfs_gegevens` (
  `bedrijfs_nummer` varchar(100) NOT NULL,
  `bedrijfs_naam` varchar(100) NOT NULL,
  `bedrijfs_straat` varchar(100) NOT NULL,
  `bedrijfs_postcode` varchar(7) NOT NULL,
  `bedrijfs_plaats` varchar(100) NOT NULL,
  `bedrijfs_email` varchar(100) NOT NULL,
  `bedrijfs_telefoon` varchar(20) NOT NULL,
  `bedrijfs_website` varchar(100) NOT NULL,
  `geaccrediteerd` varchar(100) NOT NULL,
  `stages_2_jaar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `bedrijfs_gegevens`
--

INSERT INTO `bedrijfs_gegevens` (`bedrijfs_nummer`, `bedrijfs_naam`, `bedrijfs_straat`, `bedrijfs_postcode`, `bedrijfs_plaats`, `bedrijfs_email`, `bedrijfs_telefoon`, `bedrijfs_website`, `geaccrediteerd`, `stages_2_jaar`) VALUES
('1', 'sadfgtyui', 'sdfctujk', 'drft', 'qaszdfrt', '`sdreftgyh', 'sdxfg', 'sadxrftrgy', 'aszdxftg', 100),
('2', 'qwer4t6', 'qwaerdyuio', 'sdfrt', 'asdf', 'aszdf', 'asdf', 'asdfgh', 'aszderft', 10);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bedrijfs_gegevens`
--
ALTER TABLE `bedrijfs_gegevens`
  ADD PRIMARY KEY (`bedrijfs_nummer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
