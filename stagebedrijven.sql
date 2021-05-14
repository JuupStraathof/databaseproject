-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 mei 2021 om 17:32
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

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contactpersonen_gegevens`
--

CREATE TABLE `contactpersonen_gegevens` (
  `bedrijfs_nummer` varchar(100) NOT NULL,
  `contactpersoon_id` varchar(100) NOT NULL,
  `contactpersoon_voornaam` varchar(100) NOT NULL,
  `contactpersoon_achternaam` varchar(100) NOT NULL,
  `contactpersoon_telefoon` varchar(100) NOT NULL,
  `contactpersoon_email` varchar(100) NOT NULL,
  `contactpersoon_werkzaam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contactpersonen_gegevens`
--

INSERT INTO `contactpersonen_gegevens` (`bedrijfs_nummer`, `contactpersoon_id`, `contactpersoon_voornaam`, `contactpersoon_achternaam`, `contactpersoon_telefoon`, `contactpersoon_email`, `contactpersoon_werkzaam`) VALUES
('1', '1', 'joey', 'rojay', '06487112040', 'joeyrojay@g', 'ja'),
('2', '2', '154', 'qqwdfgh', 'dfghy', 'fghyujio', 'asdfgh'),
('1', '3', 'DGFHJIKO', 'GHJKPL[GHYJIKLCVHNJK', 'FGHU', 'DRFTYGUHIOKLJNHGYTR5DFVGHYJUIY8YHJ', 'RTFYUIUYTR');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leerling_gegevens`
--

CREATE TABLE `leerling_gegevens` (
  `student_id` varchar(100) NOT NULL,
  `nova_studentnummer` varchar(1000) NOT NULL,
  `voornaam_student` varchar(1000) NOT NULL,
  `tussenvoegsel` varchar(1000) NOT NULL,
  `achternaam_student` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `leerling_gegevens`
--

INSERT INTO `leerling_gegevens` (`student_id`, `nova_studentnummer`, `voornaam_student`, `tussenvoegsel`, `achternaam_student`) VALUES
('1', '176639', 'juup', '', 'straathof'),
('2', 'sdertfyu', 'wesrdtfyu', 'waesrdtyu', 'wesrdtfyu');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `stage_basisinfo`
--

CREATE TABLE `stage_basisinfo` (
  `bedrijfs_nummer` varchar(100) NOT NULL,
  `stage_id` varchar(100) NOT NULL,
  `student_id` varchar(1000) NOT NULL,
  `school_jaar` varchar(1000) NOT NULL,
  `begin_datum` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `stage_basisinfo`
--

INSERT INTO `stage_basisinfo` (`bedrijfs_nummer`, `stage_id`, `student_id`, `school_jaar`, `begin_datum`) VALUES
('1', '1', '1', '1', '1-1-2021'),
('2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `stage_gegevens`
--

CREATE TABLE `stage_gegevens` (
  `stage_id` varchar(100) NOT NULL,
  `duur` varchar(1000) NOT NULL,
  `accredatie` varchar(1000) NOT NULL,
  `crebo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `stage_gegevens`
--

INSERT INTO `stage_gegevens` (`stage_id`, `duur`, `accredatie`, `crebo`) VALUES
('1', '20 weken', 'ja ', '2016'),
('2', '25', 'ja', '2015');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bedrijfs_gegevens`
--
ALTER TABLE `bedrijfs_gegevens`
  ADD PRIMARY KEY (`bedrijfs_nummer`);

--
-- Indexen voor tabel `contactpersonen_gegevens`
--
ALTER TABLE `contactpersonen_gegevens`
  ADD PRIMARY KEY (`contactpersoon_id`);

--
-- Indexen voor tabel `leerling_gegevens`
--
ALTER TABLE `leerling_gegevens`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexen voor tabel `stage_basisinfo`
--
ALTER TABLE `stage_basisinfo`
  ADD PRIMARY KEY (`bedrijfs_nummer`,`stage_id`);

--
-- Indexen voor tabel `stage_gegevens`
--
ALTER TABLE `stage_gegevens`
  ADD PRIMARY KEY (`stage_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
