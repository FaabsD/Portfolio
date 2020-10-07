-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 okt 2020 om 10:35
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_test`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `project_name` text NOT NULL,
  `description_short` varchar(255) NOT NULL,
  `description_long` longtext NOT NULL,
  `live_link` varchar(255) NOT NULL,
  `github_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projects`
--

INSERT INTO `projects` (`project_id`, `image`, `project_name`, `description_short`, `description_long`, `live_link`, `github_link`) VALUES
(1, 'image-frame-1.png', 'De Fruitmachine', 'Deze opdracht was voor één van de Front-end lessen. De opdracht was om een fruitmachine te maken waarbij er willekeurige afbeeldingen op een rij worden geladen', 'Deze opdracht was voor één van de Front-end lessen. De opdracht was om een fruitmachine te maken waarbij er willekeurige afbeeldingen op een rij worden geladen.\r\ngebruikte programmertalen: <span class=\"HTML\">HTML</span>, <span class=\"CSS\">CSS</span> & <sp', 'http://19959.hosts1.ma-cloud.nl/bewijzenmap/periode1.2/fro/Fruit-machine/', 'https://github.com/FaabsD/Fruit-machine'),
(2, 'image-frame-mobile-1.png', 'Opleidingspromo', 'Dit was een opdracht uit het eerste leerjaar voor Projectmagement Waarbij ik een landingspage moest maken om mijn opleiding te promoten', 'Wat heb ik hiervan geleerd?<br>Wat je zo al op een landingspage moet laten terug komen<br>\r\neen werkende email formulier maken<br>\r\nGebruikte talen: <span class=\"HTML\">HTML</span>, <span class=\"CSS\">CSS</span> & <span class=\"PHP\">PHP</span>.', 'http://19959.hosts1.ma-cloud.nl/bewijzenmap/periode1.2/proj/project_OP/', 'https://github.com/FaabsD/proj-project-op'),
(3, 'image-frame-mobile-2.png', 'The Wall', 'Een project waarbij je in teams van twee, een Instagram achtige website moest maken, je mocht bij dit project zelf bepalen voor welke doelgroep je dit ging maken', 'Een project waarbij je in teams van twee, een Instagram achtige website moest maken, je mocht bij dit project zelf bepalen voor welke doelgroep je dit ging maken.\r\n\r\nDe vereisten voor dit project waren.<br>\r\nDe gebruiker moet zich kunnen registreren, kunnen inloggen en uitloggen. Gebruikers kunnen een afbeelding uploaden met een beschrijving. Wat ik van dit project heb geleerd is dat een goede communicatie heel belangrijk is in een samenwerkings project.<br>Dit project is gemaakt in: <span class=\"HTML\">HTML</span>, <span class=\"CSS\">CSS</span>, <span class=\"PHP\">PHP</span> & <span class=\"JS\">JavaScript</span>. Mijn bijdrage aan dit project bestaat uit het maken van: Het registratie script(PHP), het upload script(PHP), het tonen van posts vanuit een database(PHP), het uitloggen(PHP) en het schuivende menu (HTML, CSS)', '', 'https://github.com/FaabsD/proj-project-The-Wall'),
(4, 'image-frame-2.png', 'Covid-19 hulptool', 'Weer een project in samenwerkingsverband. Dit keer moest je als team vanwege de Corona crisis een hulptool ontwikkelen.', 'Voor dit project hadden wij als team de volledige vrijheid om iets te maken wat de mensen zou helpen in deze crisis.<br>\r\nWij kozen ervoor om een website te maken waarop mensen kunnen kijken wat de druktes in hun lokale winkels zijn. Men kan de winkel opzoeken en dan vervolgens aangeven hoe druk het is. Als hun winkel er niet tussen staat, dan kunnen ze een account aanmaken en inloggen om de ontbrekende winkel vervolgens zelf toe te voegen. Dit is ook het eerste project geweest waarin we hebben gewerkt in een MVC structuur<br>\r\nMijn taken in dit project bestonden uit: het maken van de zoekfunctie(PHP), Het maken en afhandelen van het registratie formulier(HTML, CSS, PHP), Het toevoegen van een winkel(PHP) en het aangeven van de drukte(PHP).<br>\r\nDit project is gemaakt in: <span class=\"HTML\">HTML</span>, <span class=\"CSS\">CSS</span> & <span class=\"PHP\">PHP</span>			', 'http://19959.hosts1.ma-cloud.nl/covid/public/', 'https://github.com/FaabsD/Covid'),
(5, 'image-frame-3.png', 'Bootstrap Oefening', 'Een eerste oefening om kennis te maken met Bootstrap', 'Om kennis te maken met Bootstrap kregen wij deze opdracht waarin gebruik gemaakt moest worden van Bootstrap.<br>\r\nHierin is er gebruik gemaakt van: <span class=\"HTML\">HTML</span>, <span class=\"CSS\">(Bootstrap) CSS</span> & <span class=\"JS\">JavaScript(JQuery, Bootstrap.js)</span>', 'http://19959.hosts1.ma-cloud.nl/bewijzenmap/periode1.4/fro/LOTR/startDoc.html#', 'https://github.com/FaabsD/LOTR'),
(6, 'image-frame-mobile-3.png', 'JavaScript calculator', 'Dit is een eigen project in <span class= \"HTML\">HTML</span>, <span class=\"CSS\">CSS</span> en <span class=\"JS\">JavaScript</span>.', '', '', ''),
(7, 'image-frame-mobile-3.png', 'Hier komt toekomstig werk.', '', '', '', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
