-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 21, 2019 la 09:51 PM
-- Versiune server: 10.1.38-MariaDB
-- Versiune PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `proiect`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `etape`
--

CREATE TABLE `etape` (
  `id_etapa` int(11) NOT NULL,
  `id_proiect` int(11) NOT NULL,
  `nume_etapa` varchar(15) COLLATE utf8mb4_romanian_ci NOT NULL,
  `descriere` varchar(100) COLLATE utf8mb4_romanian_ci NOT NULL,
  `deadline` date NOT NULL,
  `status` set('neinceputa','in progres','finalizata','') COLLATE utf8mb4_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_romanian_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `profesori`
--

CREATE TABLE `profesori` (
  `id_profesor` int(11) NOT NULL,
  `nume` varchar(50) COLLATE utf8mb4_romanian_ci NOT NULL,
  `prenume` varchar(50) COLLATE utf8mb4_romanian_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_romanian_ci NOT NULL,
  `interese` varchar(50) COLLATE utf8mb4_romanian_ci NOT NULL,
  `cabine` varchar(10) COLLATE utf8mb4_romanian_ci NOT NULL,
  `pagina` varchar(10) COLLATE utf8mb4_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_romanian_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `proiecte`
--

CREATE TABLE `proiecte` (
  `id_proiect` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `nume_proiect` varchar(20) COLLATE utf8mb4_romanian_ci NOT NULL,
  `descriere` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `tip_proiect` set('master','licenta','','') COLLATE utf8mb4_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_romanian_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `studenti`
--

CREATE TABLE `studenti` (
  `id_student` int(11) NOT NULL,
  `id_proiect` int(11) NOT NULL,
  `nume_student` varchar(50) COLLATE utf8mb4_romanian_ci NOT NULL,
  `prenume_student` varchar(50) COLLATE utf8mb4_romanian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_romanian_ci NOT NULL,
  `an` set('1','2','3') COLLATE utf8mb4_romanian_ci NOT NULL,
  `tip` set('master','licenta') COLLATE utf8mb4_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_romanian_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` int(11) NOT NULL,
  `nume_utilizator` varchar(50) COLLATE utf8mb4_romanian_ci NOT NULL,
  `parola` varchar(50) COLLATE utf8mb4_romanian_ci NOT NULL,
  `tip_utilizator` enum('1','2','3','') COLLATE utf8mb4_romanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_romanian_ci;

--
-- Eliminarea datelor din tabel `utilizatori`
--

INSERT INTO `utilizatori` (`id`, `nume_utilizator`, `parola`, `tip_utilizator`) VALUES
(1, 'admin', 'admin', '1');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `etape`
--
ALTER TABLE `etape`
  ADD PRIMARY KEY (`id_etapa`),
  ADD UNIQUE KEY `id_etapa` (`id_etapa`);

--
-- Indexuri pentru tabele `profesori`
--
ALTER TABLE `profesori`
  ADD KEY `fk_profesor` (`id_profesor`);

--
-- Indexuri pentru tabele `proiecte`
--
ALTER TABLE `proiecte`
  ADD PRIMARY KEY (`id_proiect`),
  ADD UNIQUE KEY `id_proiect` (`id_proiect`);

--
-- Indexuri pentru tabele `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`id_student`),
  ADD UNIQUE KEY `id_student` (`id_student`);

--
-- Indexuri pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `profesori`
--
ALTER TABLE `profesori`
  ADD CONSTRAINT `fk_profesor` FOREIGN KEY (`id_profesor`) REFERENCES `utilizatori` (`id`);

--
-- Constrângeri pentru tabele `studenti`
--
ALTER TABLE `studenti`
  ADD CONSTRAINT `fk_student` FOREIGN KEY (`id_student`) REFERENCES `utilizatori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
