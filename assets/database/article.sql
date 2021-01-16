-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Okt 2020 um 14:43
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `dbphpsearch`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `article`
--

CREATE TABLE `article` (
  `a_id` int(11) NOT NULL,
  `a_title` varchar(256) NOT NULL,
  `a_text` text NOT NULL,
  `hashtag` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `article`
--

INSERT INTO `article` (`a_id`, `a_title`, `a_text`, `hashtag`) VALUES
(1, 'SHOP-UZ', 'Shop-uz is an online shop what was created by Everest.com. This website includes technic-shop, drug-store and fashion-shop you can order limited shoes or new technics and all sorts of parfums. The prices is cheap as in other Online-shops and the delivery is faster than light. We can deliver accros the globe per DHL and Hermes all our products are verified', '#online-shop'),
(2, 'TRAVEL-UZ', 'The travel.uz is a tour organizer page, on this page you can let organize your trip to Uzbekistan, Our jab is to organize your holiday and your jab is to relax! If you like history, go out into Wild, climbing, tasty food or fresh air then wisit our website and fly to Uzbekistan to Heaven on earth', '#Travel #Tour #Trip'),
(3,'Applications','The best javascript plugin for app look-alike on- and off-canvas menus with sliding submenus for your website and web-app.','#Apps'),
(4,'Websites','Let Everest.com build your first website for free. We will help you create a beautiful website to impress and engage new customers – and establish your business online.','#web #websites');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `article`
--
ALTER TABLE `article`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
