-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Okt 14. 13:10
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `teszt`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `f`
--

CREATE TABLE `f` (
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `f`
--

INSERT INTO `f` (`id`) VALUES
(4),
(24);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hianyzok`
--

CREATE TABLE `hianyzok` (
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ulesrend`
--

CREATE TABLE `ulesrend` (
  `id` int(10) UNSIGNED NOT NULL,
  `nev` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `sor` tinyint(3) UNSIGNED NOT NULL,
  `oszlop` tinyint(3) UNSIGNED NOT NULL,
  `jelszo` varchar(32) CHARACTER SET latin1 NOT NULL,
  `felhasznalo` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `ulesrend`
--

INSERT INTO `ulesrend` (`id`, `nev`, `sor`, `oszlop`, `jelszo`, `felhasznalo`) VALUES
(1, 'Kulhanek László ', 1, 1, '', ''),
(2, 'Molnár Gergő', 2, 1, '', ''),
(3, '  ', 2, 2, '', ''),
(4, 'Bakcsányi Dominik', 2, 3, 'f96af09d8bd35393a14c456e2ab990b6', 'furry'),
(5, 'Füstös Lóránt', 2, 4, '4cdb5fb301adeb87064a168c2bcd7f08', 'Bruh'),
(6, '  ', 2, 5, '', ''),
(7, 'Orosz Zsolt', 2, 6, '', ''),
(8, 'Harsányi László', 2, 7, '', ''),
(9, '  ', 2, 8, '', ''),
(10, '', 2, 9, '', ''),
(11, 'Kereszturi Kevin', 3, 1, '', ''),
(12, '  ', 3, 2, '', ''),
(13, 'Juhász Levente', 3, 3, '', ''),
(14, 'Szabó László', 3, 4, '', ''),
(15, '  ', 3, 5, '', ''),
(16, 'Sütő Dániel', 3, 6, '', ''),
(17, 'Detari Klaudia', 3, 7, '', ''),
(18, '  ', 3, 8, '', ''),
(19, '', 3, 9, '', ''),
(20, 'Fazekas Miklós', 4, 1, '', ''),
(21, '  ', 4, 2, '', ''),
(22, 'Gombos János', 4, 3, '', ''),
(23, '  ', 4, 4, '', ''),
(24, 'Tanár úr', 4, 5, 'e3afed0047b08059d0fada10f400c1e5', 'Admin');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `f`
--
ALTER TABLE `f`
  ADD KEY `ibfk_adminok_id` (`id`);

--
-- A tábla indexei `hianyzok`
--
ALTER TABLE `hianyzok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `ulesrend`
--
ALTER TABLE `ulesrend`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `ulesrend`
--
ALTER TABLE `ulesrend`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `f`
--
ALTER TABLE `f`
  ADD CONSTRAINT `ibfk_adminok_id` FOREIGN KEY (`id`) REFERENCES `ulesrend` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `hianyzok`
--
ALTER TABLE `hianyzok`
  ADD CONSTRAINT `ibfk_tanulo_id` FOREIGN KEY (`id`) REFERENCES `ulesrend` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
