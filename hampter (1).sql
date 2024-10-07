-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 07, 2024 at 10:08 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hampter`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kraj`
--

CREATE TABLE `kraj` (
  `id_kraj` int(11) NOT NULL,
  `nazwa_kraju` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kraj`
--

INSERT INTO `kraj` (`id_kraj`, `nazwa_kraju`) VALUES
(1, 'Polska'),
(2, 'Niemcy'),
(3, 'Francja'),
(4, 'Hiszpania'),
(5, 'Włochy'),
(6, 'Wielka Brytania'),
(7, 'Holandia'),
(8, 'Belgia'),
(9, 'Szwecja'),
(10, 'Norwegia'),
(11, 'Dania'),
(12, 'Finlandia'),
(13, 'Portugalia'),
(14, 'Czechy'),
(15, 'Słowacja'),
(16, 'Węgry'),
(17, 'Austria'),
(18, 'Szwajcaria'),
(19, 'Grecja'),
(20, 'Rumunia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `osoby`
--

CREATE TABLE `osoby` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `id_kraj` int(11) DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `osoby`
--

INSERT INTO `osoby` (`id`, `user_name`, `id_kraj`, `ranking`) VALUES
(1, 'jpoli0', 8, 1),
(2, 'lcattlemull1', 1, 2),
(3, 'mdyke2', 1, 3),
(4, 'jfudge3', 16, 4),
(5, 'agrocutt4', 2, 5),
(6, 'fmacparlan5', 17, 6),
(7, 'gsinkins6', 20, 7),
(8, 'egregan7', 20, 8),
(9, 'cmaplesden8', 3, 9),
(10, 'haberkirder9', 20, 10),
(11, 'aoxborougha', 20, 11),
(12, 'dmacveyb', 3, 12),
(13, 'smerrittc', 12, 13),
(14, 'cbaroched', 5, 14),
(15, 'dmcphatee', 10, 15),
(16, 'pwhitlowf', 3, 16),
(17, 'jdorsayg', 1, 17),
(18, 'mmcneelyh', 19, 18),
(19, 'skalei', 3, 19),
(20, 'vgreslyj', 12, 20),
(21, 'ehillhousek', 2, 21),
(22, 'mdudderidgel', 7, 22),
(23, 'bcocklandm', 17, 23),
(24, 'kfassbendern', 17, 24),
(25, 'ihailo', 17, 25),
(26, 'sjindrichp', 1, 26),
(27, 'mguwerq', 15, 27),
(28, 'mcatterallr', 16, 28),
(29, 'ddavidovitss', 11, 29),
(30, 'mtomickit', 2, 30),
(31, 'kwoodwardu', 11, 31),
(32, 'dsavegev', 7, 32),
(33, 'wmaywoodw', 16, 33),
(34, 'cclinganx', 17, 34),
(35, 'abayfieldy', 4, 35),
(36, 'egarrattz', 11, 36),
(37, 'zglendza10', 11, 37),
(38, 'apaulo11', 18, 38),
(39, 'cbremeyer12', 10, 39),
(40, 'hsmeath13', 18, 40),
(41, 'tsollner14', 11, 41),
(42, 'agroucock15', 11, 42),
(43, 'agraveney16', 2, 43),
(44, 'sgaspard17', 16, 44),
(45, 'jmacanespie18', 3, 45),
(46, 'yfransemai19', 18, 46),
(47, 'bboow1a', 15, 47),
(48, 'santhoney1b', 4, 48),
(49, 'vpreto1c', 15, 49),
(50, 'fkeeffe1d', 19, 50),
(51, 'igrigori1e', 13, 51),
(52, 'cstrowthers1f', 16, 52),
(53, 'nmatzkaitis1g', 6, 53),
(54, 'tgoldsworthy1h', 4, 54),
(55, 'cconnal1i', 8, 55),
(56, 'blarrington1j', 13, 56),
(57, 'lboyne1k', 18, 57),
(58, 'dgoretti1l', 16, 58),
(59, 'kwestman1m', 10, 59),
(60, 'rpaschke1n', 18, 60),
(61, 'bprys1o', 14, 61),
(62, 'bblackwell1p', 5, 62),
(63, 'lelgie1q', 7, 63),
(64, 'mbucham1r', 7, 64),
(65, 'cbergstrand1s', 19, 65),
(66, 'gsimonnin1t', 9, 66),
(67, 'aketton1u', 4, 67),
(68, 'dswenson1v', 17, 68),
(69, 'mchandlar1w', 14, 69),
(70, 'ccussins1x', 19, 70),
(71, 'phonsch1y', 5, 71),
(72, 'bwoolen1z', 2, 72),
(73, 'gingarfield20', 4, 73),
(74, 'jholborn21', 15, 74),
(75, 'pboutflour22', 10, 75),
(76, 'jarson23', 19, 76),
(77, 'ihattrick24', 8, 77),
(78, 'bcannan25', 19, 78),
(79, 'gskellington26', 9, 79),
(80, 'acharsley27', 19, 80),
(81, 'vgraham28', 20, 81),
(82, 'ggrimme29', 8, 82),
(83, 'lbrophy2a', 1, 83),
(84, 'erichardon2b', 17, 84),
(85, 'cbilsland2c', 11, 85),
(86, 'erosenstein2d', 13, 86),
(87, 'rargente2e', 10, 87),
(88, 'cmariotte2f', 4, 88),
(89, 'hhalpine2g', 1, 89),
(90, 'cmabbott2h', 4, 90),
(91, 'jfrounks2i', 18, 91),
(92, 'kcornew2j', 1, 92),
(93, 'rspeariett2k', 10, 93),
(94, 'sbagnal2l', 13, 94),
(95, 'fwiley2m', 8, 95),
(96, 'mbassindale2n', 10, 96),
(97, 'jmcgettrick2o', 4, 97),
(98, 'fgemson2p', 8, 98),
(99, 'psmallshaw2q', 8, 99),
(100, 'cmowle2r', 16, 100);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kraj`
--
ALTER TABLE `kraj`
  ADD PRIMARY KEY (`id_kraj`);

--
-- Indeksy dla tabeli `osoby`
--
ALTER TABLE `osoby`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kraj` (`id_kraj`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kraj`
--
ALTER TABLE `kraj`
  MODIFY `id_kraj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `osoby`
--
ALTER TABLE `osoby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `osoby`
--
ALTER TABLE `osoby`
  ADD CONSTRAINT `osoby_ibfk_1` FOREIGN KEY (`id_kraj`) REFERENCES `kraj` (`id_kraj`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
