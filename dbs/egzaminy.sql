-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lut 2023, 20:21
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `egzaminy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ee08styczen2022`
--

CREATE TABLE `ee08styczen2022` (
  `idpytania` int(11) DEFAULT NULL,
  `odp` text COLLATE utf8_polish_ci DEFAULT NULL,
  `nazwa_pliku` text COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ee08styczen2022`
--

INSERT INTO `ee08styczen2022` (`idpytania`, `odp`, `nazwa_pliku`) VALUES
(1, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(2, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(3, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(4, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(5, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(6, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(7, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(8, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(9, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(10, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(11, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(12, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(13, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(14, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(15, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(16, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(17, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(18, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(19, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(20, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(21, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(22, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(23, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(24, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(25, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(26, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(27, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(28, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(29, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(30, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(31, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(32, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(33, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(34, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(35, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(36, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(37, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(38, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(39, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(40, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ee08_egzamin_2021`
--

CREATE TABLE `ee08_egzamin_2021` (
  `idpytania` int(11) DEFAULT NULL,
  `odp` text COLLATE utf8_polish_ci DEFAULT NULL,
  `nazwa_pliku` text COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ee08_egzamin_2021`
--

INSERT INTO `ee08_egzamin_2021` (`idpytania`, `odp`, `nazwa_pliku`) VALUES
(1, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(2, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(3, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(4, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(5, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(6, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(7, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(8, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(9, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(10, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(11, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(12, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(13, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(14, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(15, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(16, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(17, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(18, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(19, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(20, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(21, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(22, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(23, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(24, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(25, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(26, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(27, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(28, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(29, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(30, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(31, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(32, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(33, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(34, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(35, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(36, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(37, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(38, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(39, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(40, 'A', 'ee08-2021-czerwiec-egzamin-zawodowy-pisemny.pdf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ee08_egzamin_czerwiec2022`
--

CREATE TABLE `ee08_egzamin_czerwiec2022` (
  `idpytania` int(11) DEFAULT NULL,
  `odp` text COLLATE utf8_polish_ci DEFAULT NULL,
  `nazwa_pliku` text COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ee08_egzamin_czerwiec2022`
--

INSERT INTO `ee08_egzamin_czerwiec2022` (`idpytania`, `odp`, `nazwa_pliku`) VALUES
(1, 'B', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(2, 'C', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(3, 'D', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(4, 'C', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(5, 'C', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(6, 'B', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(7, 'C', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(8, 'C', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(9, 'A', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(10, 'B', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(11, 'B', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(12, 'A', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(13, 'A', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(14, 'A', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(15, 'D', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(16, 'D', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(17, 'D', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(18, 'B', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(19, 'B', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(20, 'C', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(21, 'D', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(22, 'C', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(23, 'C', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(24, 'A', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(25, 'C', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(26, 'A', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(27, 'B', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(28, 'A', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(29, 'D', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(30, 'D', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(31, 'A', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(32, 'B', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(33, 'D', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(34, 'A', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(35, 'A', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(36, 'D', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(37, 'A', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(38, 'B', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(39, 'A', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf'),
(40, 'D', 'ee08-2022-czerwiec-egzamin-zawodowy-pisemny.pdf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ee09_styczen_2022`
--

CREATE TABLE `ee09_styczen_2022` (
  `idpytania` int(11) DEFAULT NULL,
  `odp` text COLLATE utf8_polish_ci DEFAULT NULL,
  `nazwa_pliku` text COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ee09_styczen_2022`
--

INSERT INTO `ee09_styczen_2022` (`idpytania`, `odp`, `nazwa_pliku`) VALUES
(1, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(2, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(3, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(4, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(5, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(6, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(7, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(8, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(9, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(10, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(11, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(12, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(13, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(14, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(15, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(16, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(17, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(18, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(19, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(20, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(21, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(22, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(23, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(24, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(25, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(26, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(27, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(28, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(29, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(30, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(31, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(32, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(33, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(34, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(35, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(36, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(37, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(38, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(39, 'A', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf'),
(40, 'D', 'ee08-2022-styczen-egzamin-zawodowy-pisemny.pdf');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_polish_ci NOT NULL,
  `password` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$boDIlc6bgCc3mAWRSSZkH.3l5g6CuJNFk3DJYSaJTPEhYn2XxAF9K');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyniki`
--

CREATE TABLE `wyniki` (
  `data` text COLLATE utf8_polish_ci NOT NULL,
  `nazwa_egzaminu` text COLLATE utf8_polish_ci NOT NULL,
  `imie_nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `wynik` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
