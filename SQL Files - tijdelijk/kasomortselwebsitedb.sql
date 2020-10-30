-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 13 okt 2019 om 10:24
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
-- Tabelstructuur voor tabel `homepageslides`
--

DROP TABLE IF EXISTS `homepageslides`;
CREATE TABLE IF NOT EXISTS `homepageslides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `homepageslides`
--

INSERT INTO `homepageslides` (`id`, `image`) VALUES
(10, 'slide2.jpg'),
(9, 'slide1.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `jarengraad`
--

DROP TABLE IF EXISTS `jarengraad`;
CREATE TABLE IF NOT EXISTS `jarengraad` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `jaarnaam` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `jarengraad`
--

INSERT INTO `jarengraad` (`ID`, `jaarnaam`) VALUES
(1, '1ste jaar - 1ste graad'),
(2, '2de jaar - 1ste graad'),
(3, '3de jaar - 2de graad'),
(4, '4de jaar - 2de graad'),
(5, '5de jaar - 3de graad'),
(6, '6de jaar - 3de graad'),
(7, '7de jaar - 3de graad');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kalender`
--

DROP TABLE IF EXISTS `kalender`;
CREATE TABLE IF NOT EXISTS `kalender` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  `datum` date NOT NULL,
  `belangrk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `kalender`
--

INSERT INTO `kalender` (`id`, `titel`, `content`, `datum`, `belangrk`) VALUES
(20, 'Klassenraad', 'Geen school! Leerkrachten hebben klassenraad.', '2019-10-10', 0),
(22, 'Tedst', 'zqdqzffqzf', '2019-10-10', 1),
(21, ' Verjaardag Maxim 6IB', 'Maxim van 6IB (Maker van deze site) is jarig :)', '2019-11-12', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  UNIQUE KEY `text` (`text`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `image`, `caption`, `created_at`) VALUES
(1, 'Rommelmarkt OCOZY', 'De mini onderneming Ocozy organiseerde vandaag een rommelmarkt op de speelplaats van KaSO-Mortsel. Bedankt iedereen om erbij te zijn! Tot na de winter!', 'IMG_20190928_110517.jpg', 'Rommelmarkt Ocozy - 28/09/2019', '2019-09-29 20:53:02'),
(2, 'Golven in de koekenstad', 'Heb jij ooit al eens gehoord dat je in de koekenstad een partijtje golf kan spelen? Wel de jongens en meisjes van de richting Haarzorg haalden alvast hun slagtalenten uit de kast! Gids Vincent zorgde bovendien voor leuke weetjes.', '70902720_3598870830130426_496545146230276096_n.jpg', 'Gids vincent', '2019-09-29 20:54:12'),
(3, 'Bezinning 6de jaar', 'En weg zijn we.... Beauvoorde we komen er aan! Bezinning met alle zesdejaars.â˜ºï¸', '70582843_3593131677371008_3408804767038701568_n.jpg', 'Strandactiviteit in knokke', '2019-09-29 20:55:30'),
(4, 'Peluquero kapsalon', 'Volg vanaf nu de Facebookpagina van het kapsalon van de meisjes van 7 Haarstilist!\r\n\r\nWe geven je ook al mee dat ze op donderdag 17 oktober erin vliegen! Je kan nu alvast een afspraak maken. ðŸ˜‰ðŸ’‡ðŸ¼â€â™€ï¸ðŸ’‡ðŸ¼â€â™‚ï¸', '70090018_3566849803332529_7299107348285489152_n.jpg', 'Kapsalon 7de jaar', '2019-09-29 20:55:30'),
(5, 'Soda attest infodag', 'Gisteren kregen we bezoek van Prisca en David van Accent! Zij brachten twee boeiende uiteenzettingen rond SODA en Boost you life! En nu maar duimen voor dat frietkot.ðŸ˜‰ Accent Jobs ðŸ‘ŠðŸ»', '69952966_3563579100326266_5211818418558205952_n.jpg', 'Soda activiteit', '2019-09-29 20:55:30');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `richtingen`
--

DROP TABLE IF EXISTS `richtingen`;
CREATE TABLE IF NOT EXISTS `richtingen` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `richtingnaam` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `richtingen`
--

INSERT INTO `richtingen` (`ID`, `richtingnaam`) VALUES
(1, 'A-stroom'),
(2, 'B-stroom'),
(3, 'Beroepsvoorbereidend leerjaar'),
(4, 'Ondernemen en IT (Handel)'),
(5, 'Office (Kantoor)'),
(6, 'Haarzorg'),
(7, 'Ondernemen en Marketing (Handel)'),
(8, 'Office management & comm (Secretariaat-talen)'),
(9, 'IT & Netwerken (Informaticabeheer)'),
(10, 'Office & Logistics'),
(11, 'Boekhouden-Informatica'),
(12, 'Haarzorg'),
(13, 'Logistics'),
(15, 'Haarstylist');

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
) ENGINE=MyISAM AUTO_INCREMENT=568 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `uren`
--

INSERT INTO `uren` (`ID`, `jarengraadID`, `richtingenID`, `vakkenID`, `uren`) VALUES
(298, 1, 1, 7, 2),
(299, 1, 1, 8, 1),
(300, 1, 1, 9, 4),
(301, 1, 1, 10, 1),
(302, 1, 1, 11, 2),
(303, 1, 1, 12, 2),
(304, 1, 1, 13, 1),
(305, 1, 1, 14, 2),
(306, 1, 1, 15, 4),
(307, 1, 1, 16, 2),
(308, 1, 1, 17, 2),
(309, 1, 1, 18, 4),
(310, 1, 2, 8, 1),
(311, 1, 2, 9, 2),
(312, 1, 2, 26, 1),
(313, 1, 2, 11, 2),
(314, 1, 2, 23, 3),
(315, 1, 2, 13, 1),
(316, 1, 2, 14, 3),
(317, 1, 2, 15, 4),
(318, 1, 2, 16, 2),
(319, 1, 2, 17, 4),
(320, 1, 2, 18, 4),
(321, 1, 2, 55, 1),
(322, 2, 1, 7, 1),
(323, 2, 1, 11, 2),
(324, 2, 1, 10, 2),
(325, 2, 1, 16, 2),
(326, 2, 1, 13, 1),
(327, 2, 1, 18, 5),
(328, 2, 1, 14, 1),
(329, 2, 1, 25, 3),
(330, 2, 1, 24, 2),
(331, 2, 1, 17, 2),
(332, 2, 1, 15, 5),
(333, 2, 1, 9, 4),
(334, 2, 1, 26, 2),
(335, 2, 3, 11, 2),
(336, 2, 3, 31, 2),
(337, 2, 3, 16, 2),
(338, 2, 3, 13, 1),
(339, 2, 3, 18, 3),
(340, 2, 3, 30, 2),
(341, 2, 3, 14, 2),
(342, 2, 3, 27, 1),
(343, 2, 3, 32, 5),
(344, 2, 3, 33, 1),
(345, 2, 3, 34, 2),
(346, 2, 3, 24, 3),
(347, 2, 3, 20, 4),
(348, 2, 3, 9, 2),
(349, 3, 4, 7, 1),
(350, 3, 4, 10, 1),
(351, 3, 4, 11, 2),
(352, 3, 4, 16, 2),
(353, 3, 4, 14, 2),
(354, 3, 4, 18, 4),
(355, 3, 4, 15, 4),
(356, 3, 4, 9, 4),
(357, 3, 4, 26, 2),
(358, 3, 4, 35, 1),
(359, 3, 4, 28, 3),
(360, 3, 4, 25, 6),
(361, 4, 4, 7, 1),
(362, 4, 4, 10, 1),
(363, 4, 4, 11, 2),
(364, 4, 4, 16, 2),
(365, 4, 4, 14, 2),
(366, 4, 4, 18, 4),
(367, 4, 4, 15, 4),
(368, 4, 4, 9, 4),
(369, 4, 4, 26, 2),
(370, 4, 4, 35, 1),
(371, 4, 4, 28, 3),
(372, 4, 4, 25, 6),
(373, 3, 5, 11, 2),
(374, 3, 5, 27, 1),
(375, 3, 5, 16, 2),
(376, 3, 5, 23, 2),
(377, 3, 5, 18, 2),
(378, 3, 5, 20, 2),
(379, 3, 5, 26, 4),
(380, 3, 5, 9, 4),
(381, 3, 5, 36, 2),
(382, 3, 5, 37, 11),
(383, 4, 5, 11, 2),
(384, 4, 5, 27, 0),
(385, 4, 5, 16, 2),
(386, 4, 5, 23, 2),
(387, 4, 5, 18, 2),
(388, 4, 5, 20, 2),
(389, 4, 5, 26, 4),
(390, 4, 5, 9, 5),
(391, 4, 5, 36, 2),
(392, 4, 5, 37, 11),
(393, 3, 6, 11, 2),
(394, 3, 6, 16, 2),
(395, 3, 6, 23, 2),
(396, 3, 6, 18, 2),
(397, 3, 6, 9, 2),
(398, 3, 6, 20, 2),
(399, 3, 6, 31, 2),
(400, 3, 6, 38, 18),
(401, 4, 6, 11, 2),
(402, 4, 6, 16, 2),
(403, 4, 6, 23, 2),
(404, 4, 6, 18, 2),
(405, 4, 6, 9, 2),
(406, 4, 6, 20, 2),
(407, 4, 6, 31, 2),
(408, 4, 6, 38, 18),
(409, 5, 7, 11, 2),
(410, 5, 7, 18, 3),
(411, 5, 7, 14, 1),
(412, 5, 7, 10, 1),
(413, 5, 7, 7, 1),
(414, 5, 7, 16, 2),
(415, 5, 7, 20, 3),
(416, 5, 7, 9, 4),
(417, 5, 7, 26, 3),
(418, 5, 7, 35, 2),
(419, 5, 7, 25, 9),
(420, 5, 7, 39, 0),
(421, 6, 7, 11, 2),
(422, 6, 7, 18, 3),
(423, 6, 7, 14, 1),
(424, 6, 7, 10, 1),
(425, 6, 7, 7, 1),
(426, 6, 7, 16, 2),
(427, 6, 7, 20, 3),
(428, 6, 7, 9, 4),
(429, 6, 7, 26, 3),
(430, 6, 7, 35, 2),
(431, 6, 7, 25, 9),
(432, 6, 7, 39, 1),
(433, 5, 8, 11, 2),
(434, 5, 8, 18, 2),
(435, 5, 8, 14, 1),
(436, 5, 8, 10, 1),
(437, 5, 8, 7, 1),
(438, 5, 8, 16, 2),
(439, 5, 8, 20, 3),
(440, 5, 8, 9, 3),
(441, 5, 8, 26, 3),
(442, 5, 8, 35, 4),
(443, 5, 8, 40, 2),
(444, 5, 8, 41, 1),
(445, 5, 8, 42, 1),
(446, 5, 8, 43, 5),
(447, 5, 8, 44, 0),
(448, 5, 8, 45, 1),
(449, 6, 8, 11, 2),
(450, 6, 8, 18, 2),
(451, 6, 8, 14, 1),
(452, 6, 8, 10, 1),
(453, 6, 8, 7, 1),
(454, 6, 8, 16, 2),
(455, 6, 8, 20, 3),
(456, 6, 8, 9, 3),
(457, 6, 8, 26, 3),
(458, 6, 8, 35, 4),
(459, 6, 8, 40, 2),
(460, 5, 8, 41, 1),
(461, 5, 8, 42, 1),
(462, 6, 8, 43, 5),
(463, 6, 8, 44, 1),
(464, 6, 8, 45, 0),
(465, 5, 11, 11, 2),
(466, 5, 11, 18, 4),
(467, 5, 11, 14, 1),
(468, 5, 11, 10, 1),
(469, 5, 11, 7, 1),
(470, 5, 11, 16, 2),
(471, 5, 11, 20, 3),
(472, 5, 11, 9, 3),
(473, 5, 11, 26, 3),
(474, 5, 11, 47, 6),
(475, 5, 11, 25, 6),
(476, 5, 11, 39, 1),
(477, 6, 11, 11, 2),
(478, 6, 11, 18, 4),
(479, 6, 11, 14, 1),
(480, 6, 11, 10, 1),
(481, 6, 11, 7, 1),
(482, 6, 11, 16, 2),
(483, 6, 11, 20, 3),
(484, 6, 11, 9, 3),
(485, 6, 11, 26, 3),
(486, 6, 11, 47, 6),
(487, 6, 11, 25, 6),
(488, 6, 11, 39, 1),
(489, 5, 9, 11, 2),
(490, 5, 9, 18, 4),
(491, 5, 9, 14, 1),
(492, 5, 9, 10, 1),
(493, 5, 9, 7, 1),
(494, 5, 9, 16, 2),
(495, 5, 9, 20, 3),
(496, 5, 9, 9, 3),
(497, 5, 9, 26, 3),
(498, 5, 9, 47, 11),
(499, 5, 9, 39, 1),
(500, 5, 9, 48, 0),
(501, 6, 9, 11, 2),
(502, 6, 9, 18, 4),
(503, 6, 9, 14, 1),
(504, 6, 9, 10, 1),
(505, 6, 9, 7, 1),
(506, 6, 9, 16, 2),
(507, 6, 9, 20, 3),
(508, 6, 9, 9, 3),
(509, 6, 9, 26, 3),
(510, 6, 9, 47, 9),
(511, 6, 9, 39, 1),
(512, 6, 9, 48, 2),
(513, 5, 10, 11, 2),
(514, 5, 10, 16, 2),
(515, 5, 10, 23, 2),
(516, 5, 10, 20, 2),
(517, 5, 10, 26, 2),
(518, 5, 10, 9, 3),
(519, 5, 10, 40, 2),
(520, 5, 10, 51, 5),
(521, 5, 10, 52, 10),
(522, 5, 10, 48, 4),
(523, 6, 10, 11, 2),
(524, 6, 10, 16, 2),
(525, 6, 10, 23, 2),
(526, 6, 10, 20, 2),
(527, 6, 10, 26, 2),
(528, 6, 10, 9, 2),
(529, 6, 10, 40, 0),
(530, 6, 10, 51, 3),
(531, 6, 10, 52, 10),
(532, 6, 10, 48, 7),
(533, 5, 12, 11, 2),
(534, 5, 12, 16, 2),
(535, 5, 12, 23, 2),
(536, 5, 12, 9, 2),
(537, 5, 12, 20, 2),
(538, 5, 12, 39, 0),
(539, 5, 12, 31, 2),
(540, 5, 12, 53, 22),
(541, 5, 12, 48, 0),
(542, 6, 12, 11, 2),
(543, 6, 12, 16, 2),
(544, 6, 12, 23, 2),
(545, 6, 12, 9, 2),
(546, 6, 12, 20, 1),
(547, 6, 12, 39, 1),
(548, 6, 12, 31, 2),
(549, 6, 12, 53, 17),
(550, 6, 12, 48, 4),
(551, 7, 13, 11, 2),
(552, 7, 13, 16, 2),
(553, 7, 13, 23, 2),
(554, 7, 13, 51, 9),
(555, 7, 13, 26, 2),
(556, 7, 13, 9, 2),
(557, 7, 13, 15, 2),
(558, 7, 13, 48, 11),
(559, 7, 15, 11, 2),
(560, 7, 15, 16, 2),
(561, 7, 15, 23, 2),
(562, 7, 15, 25, 2),
(563, 7, 15, 26, 2),
(564, 7, 15, 9, 2),
(565, 7, 15, 20, 2),
(566, 7, 15, 54, 13),
(567, 7, 15, 48, 7);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(2, 'admin', '$2y$10$lV4ah4Pt7jEu0/Gpfqysm.NBMHpd/5UiLht3Mfmq/Vif.lNLbrKVC', '2019-02-28 16:58:35'),
(3, 'Maxim', '$2y$10$pj2pEl6wAMWbA0n8ed8VvObk6jYQGDfXgcPSIs0FaDKYzHDNsxZWy', '2019-02-28 17:00:22');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vakken`
--

DROP TABLE IF EXISTS `vakken`;
CREATE TABLE IF NOT EXISTS `vakken` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `vaknaam` varchar(50) NOT NULL,
  `IDvormingen` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `vakken`
--

INSERT INTO `vakken` (`ID`, `vaknaam`, `IDvormingen`) VALUES
(11, 'Godsdienst', 1),
(10, 'Geschiedenis', 1),
(9, 'Frans', 2),
(8, 'Beeld', 1),
(7, 'Aardrijkskunde', 1),
(12, 'Mens en samenleving', 1),
(13, 'Muziek', 1),
(14, 'Natuurwetenschappen', 1),
(15, 'Nederlands', 2),
(16, 'Lichamelijke opvoeding', 1),
(17, 'Techniek', 5),
(18, 'Wiskunde', 1),
(19, 'Latijn', 2),
(20, 'Nederlands', 2),
(21, 'STEM', 1),
(22, 'Taal & Media', 1),
(23, 'Maatschappelijke vorming', 1),
(24, 'ICT', 5),
(25, 'Bedrijfseconomie', 3),
(26, 'Engels', 2),
(27, 'Leefsleutels', 1),
(28, 'Informatica', 3),
(29, 'Wiskunde', 1),
(30, 'Maatschappelijke Opvoeding', 1),
(31, 'Plastische opvoeding', 5),
(32, 'realisatietechnieken: haarzorg', 6),
(33, 'Toegepaste wetenschappen', 6),
(34, 'Initiatie in administratie, retail en logistiek', 6),
(35, 'Duits', 2),
(36, 'Communicatieve vaardigheden', 2),
(37, 'Administratie en retail', 5),
(38, 'Realisatietechnieken', 6),
(39, 'Seminarie', 3),
(40, 'Nederlands zakelijke communicatie', 3),
(41, 'Frans - zakelijke communicatie', 3),
(42, 'Engels - zakelijke communicatie', 3),
(43, 'Secretariaat', 3),
(44, 'Secretariaat - Seminarie', 3),
(45, 'Secretariaat (Toeg. Economie)', 3),
(47, 'Toegepaste informatica', 3),
(48, 'Stage', 6),
(49, 'Hardware', 3),
(50, 'Software', 3),
(51, 'Logistiek', 5),
(52, 'Administratief medewerker', 5),
(53, 'Realisaties haarzorg', 6),
(54, 'Salonwerk', 6),
(55, 'Klasuur', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vormingen`
--

DROP TABLE IF EXISTS `vormingen`;
CREATE TABLE IF NOT EXISTS `vormingen` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Vormingnaam` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `vormingen`
--

INSERT INTO `vormingen` (`ID`, `Vormingnaam`) VALUES
(1, 'Algemene vorming'),
(2, 'Talen'),
(3, 'Bedrijfsgerichte vorming'),
(4, 'Keuzegedeelte'),
(5, 'Specifieke vorming'),
(6, 'Praktijkgerichte vorming'),
(7, 'Praktijkvakken');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
