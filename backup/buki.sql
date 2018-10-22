-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Paź 2018, 20:42
-- Wersja serwera: 10.1.35-MariaDB
-- Wersja PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `buki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `frequency`
--

CREATE TABLE `frequency` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `professor_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_date_id` int(11) NOT NULL,
  `type_of_abcence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `frequency`
--

INSERT INTO `frequency` (`id`, `date`, `professor_id`, `student_id`, `subject_date_id`, `type_of_abcence`) VALUES
(2, '0000-00-00', 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `subject_id` int(11) NOT NULL,
  `grade` tinyint(4) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `grades`
--

INSERT INTO `grades` (`id`, `professor_id`, `student_id`, `date`, `subject_id`, `grade`, `weight`) VALUES
(1, 1, 0, '2018-10-19 00:00:01', 1, 5, 4),
(2, 2, 0, '2018-10-19 00:00:00', 2, 4, 1),
(3, 1, 0, '2018-10-19 00:00:00', 1, 3, 1),
(4, 4, 2, '2018-10-19 00:00:00', 4, 1, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grades_weight`
--

CREATE TABLE `grades_weight` (
  `id` int(11) NOT NULL,
  `weight` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `grades_weight`
--

INSERT INTO `grades_weight` (`id`, `weight`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `messages`
--

INSERT INTO `messages` (`id`, `date`, `student_id`, `professor_id`, `content`) VALUES
(4, '0000-00-00', 0, 3, 'Lorem Ipsum jest tekstem stosowanym jako przyk?adowy wype?niacz w przemy?le poligraficznym. Zosta? po raz pierwszy u?yty w XV w. przez nieznanego drukarza do wype?nienia tekstem próbnej ksi??ki. Pi?? wieków pó?niej zacz?? by? u?ywany przemy?le elektronicznym, pozostaj?c praktycznie niezmienionym. Spopularyzowa? si? w latach 60. XX w. wraz z publikacj? arkuszy Letrasetu, zawieraj?cych fragmenty Lorem Ipsum, a ostatnio z zawieraj?cym ró?ne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker'),
(5, '0000-00-00', 0, 3, 'Wiadomosc testowa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `professors`
--

CREATE TABLE `professors` (
  `id` int(11) NOT NULL,
  `professor_name` varchar(64) NOT NULL,
  `professor_adres` varchar(128) NOT NULL,
  `professor_avatar` varchar(128) NOT NULL,
  `login` varchar(128) NOT NULL,
  `password` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `professors`
--

INSERT INTO `professors` (`id`, `professor_name`, `professor_adres`, `professor_avatar`, `login`, `password`) VALUES
(1, 'Carol Mumbeson', 'Gangnan', 'img/avatar/avatar000.png', 'psr0001', 'fdf04e9eec4180183c9477905422fb42'),
(2, 'Leeann Barkway', 'Lugang', 'img/avatar/avatar000.png', 'psr0002', 'fdf04e9eec4180183c9477905422fb42'),
(3, 'Rickie Molan', 'Babakantonggoh', 'img/avatar/avatar000.png', 'psr0003', 'fdf04e9eec4180183c9477905422fb42'),
(4, 'Brande Goldstraw', 'Aomori Shi', 'img/avatar/avatar000.png', 'psr0004', 'fdf04e9eec4180183c9477905422fb42'),
(5, 'Zsa zsa Franceschino', 'Baishan', 'img/avatar/avatar000.png', 'psr0005', 'fdf04e9eec4180183c9477905422fb42'),
(6, 'Gabby McGlone', 'Limoges', 'img/avatar/avatar000.png', 'psr0006', 'fdf04e9eec4180183c9477905422fb42'),
(7, 'Desirae Threadgall', 'Hesheng', 'img/avatar/avatar000.png', 'psr0007', 'fdf04e9eec4180183c9477905422fb42'),
(8, 'Lidia Armfield', 'Bozkow', 'img/avatar/avatar000.png', 'psr0008', 'fdf04e9eec4180183c9477905422fb42'),
(9, 'Lisha Fairman', 'Ziway', 'img/avatar/avatar000.png', 'psr0009', 'fdf04e9eec4180183c9477905422fb42'),
(10, 'Dael Corderoy', 'Madjeouéni', 'img/avatar/avatar000.png', 'psr0010', 'fdf04e9eec4180183c9477905422fb42');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `name` varchar(1024) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `adres` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `school`
--

INSERT INTO `school` (`id`, `name`, `adres`) VALUES
(1, 'Szkola Testowa', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_name` varchar(64) NOT NULL,
  `student_adres` varchar(128) NOT NULL,
  `student_avatar` varchar(128) NOT NULL,
  `login` varchar(128) NOT NULL,
  `password` varchar(1024) NOT NULL,
  `class_name` varchar(3) NOT NULL,
  `class_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `students`
--

INSERT INTO `students` (`id`, `student_name`, `student_adres`, `student_avatar`, `login`, `password`, `class_name`, `class_id`) VALUES
(0, 'Jan Jedrzejak', 'Zamiejska 1', 'img/avatars/1539873989_avatar000.png', 'std0000', 'fdf04e9eec4180183c9477905422fb42', '1A', 1),
(1, 'Jan Kowalski', 'Zamkowa 2/3 Krakow', 'img/avatars/avatar000.png', 'std0001', 'f97743eb9e52f605c77a14f1f4a449e7', '1A', 1),
(2, 'Braden Jakoubec', 'Chicago', 'img/avatars/avatar000.png', 'std0001', 'fdf04e9eec4180183c9477905422fb42', '1A', 1),
(3, 'Ingaberg Krienke', 'Zimmi', 'img/avatars/avatar000.png', 'std0002', 'fdf04e9eec4180183c9477905422fb42', '1A', 1),
(4, 'Theodore Woolner', 'Amaigbo', 'img/avatars/avatar000.png', 'std0003', 'fdf04e9eec4180183c9477905422fb42', '1A', 1),
(5, 'Tymon Archer', 'Pantijan No 2', 'img/avatars/avatar000.png', 'std0004', 'fdf04e9eec4180183c9477905422fb42', '1A', 1),
(6, 'Noah Speeding', 'Opatov', 'img/avatars/avatar000.png', 'std0005', 'fdf04e9eec4180183c9477905422fb42', '1A', 1),
(7, 'Barrett Elliston', 'Guatraché', 'img/avatars/avatar000.png', 'std0006', 'fdf04e9eec4180183c9477905422fb42', '1A', 1),
(8, 'Mavra Jopke', 'Fulu', 'img/avatars/avatar000.png', 'std0007', 'fdf04e9eec4180183c9477905422fb42', '1A', 1),
(9, 'Rudolph Kenan', 'San Miguel', 'img/avatars/avatar000.png', 'std0008', 'fdf04e9eec4180183c9477905422fb42', '1A', 1),
(10, 'Leonard Durrett', 'Shaydon', 'img/avatars/avatar000.png', 'std0009', 'fdf04e9eec4180183c9477905422fb42', '1B', 2),
(11, 'Silvan Windows', 'Tours', 'img/avatars/avatar000.png', 'std0010', 'fdf04e9eec4180183c9477905422fb42', '1B', 2),
(12, 'Debbie Scipsey', 'Bene \'Ayish', 'img/avatars/avatar000.png', 'std0011', 'fdf04e9eec4180183c9477905422fb42', '1B', 2),
(13, 'Cleveland Dukelow', 'San Antonio Oeste', 'img/avatars/avatar000.png', 'std0012', 'fdf04e9eec4180183c9477905422fb42', '1B', 2),
(14, 'Marianna Barbour', 'Gaoping', 'img/avatars/avatar000.png', 'std0013', 'fdf04e9eec4180183c9477905422fb42', '1B', 2),
(15, 'Waverly Maltman', 'Tianyuan', 'img/avatars/avatar000.png', 'std0014', 'fdf04e9eec4180183c9477905422fb42', '1B', 2),
(16, 'Raquela Alvin', 'La Escondida', 'img/avatars/avatar000.png', 'std0015', 'fdf04e9eec4180183c9477905422fb42', '1B', 2),
(17, 'Bartholomeus Stanlock', 'Kirzhach', 'img/avatars/avatar000.png', 'std0016', 'fdf04e9eec4180183c9477905422fb42', '1B', 2),
(18, 'Riccardo Dupey', 'Soutocico', 'img/avatars/avatar000.png', 'std0017', 'fdf04e9eec4180183c9477905422fb42', '1B', 2),
(19, 'Morten Stennet', 'Wonorejo', 'img/avatars/avatar000.png', 'std0018', 'fdf04e9eec4180183c9477905422fb42', '1B', 2),
(20, 'Bernard Garey', 'Chur', 'img/avatars/avatar000.png', 'std0019', 'fdf04e9eec4180183c9477905422fb42', '1C', 3),
(21, 'Hope Renak', 'Presidente Epitácio', 'img/avatars/avatar000.png', 'std0020', 'fdf04e9eec4180183c9477905422fb42', '1C', 3),
(22, 'Bond Scarbarrow', 'Banovo Polje', 'img/avatars/avatar000.png', 'std0021', 'fdf04e9eec4180183c9477905422fb42', '1C', 3),
(23, 'Walther Safont', 'Z?bkowice ?l?skie', 'img/avatars/avatar000.png', 'std0022', 'fdf04e9eec4180183c9477905422fb42', '1C', 3),
(24, 'Fowler Feehery', 'Gryaznovskoye', 'img/avatars/avatar000.png', 'std0023', 'fdf04e9eec4180183c9477905422fb42', '1C', 3),
(25, 'Teodorico Aikenhead', 'São Bartolomeu', 'img/avatars/avatar000.png', 'std0024', 'fdf04e9eec4180183c9477905422fb42', '1C', 3),
(26, 'Venita Fawthrop', 'Miaotou', 'img/avatars/avatar000.png', 'std0025', 'fdf04e9eec4180183c9477905422fb42', '1C', 3),
(27, 'Charmaine Playden', 'Kraljevica', 'img/avatars/avatar000.png', 'std0026', 'fdf04e9eec4180183c9477905422fb42', '1C', 3),
(28, 'Carri Crennell', 'Acaraú', 'img/avatars/avatar000.png', 'std0027', 'fdf04e9eec4180183c9477905422fb42', '1C', 3),
(29, 'Korry Berrey', 'Antwerpen', 'img/avatars/avatar000.png', 'std0028', 'fdf04e9eec4180183c9477905422fb42', '1C', 3),
(30, 'Lonni Jerzyk', 'Miguel Hidalgo', 'img/avatars/avatar000.png', 'std0029', 'fdf04e9eec4180183c9477905422fb42', '2A', 4),
(31, 'Alexa Tamsett', 'Pyin Oo Lwin', 'img/avatars/avatar000.png', 'std0030', 'fdf04e9eec4180183c9477905422fb42', '2A', 4),
(32, 'Lauri Bathow', 'Malausma Kidul', 'img/avatars/avatar000.png', 'std0031', 'fdf04e9eec4180183c9477905422fb42', '2A', 4),
(33, 'Quintus Calveley', 'Al Q???yah', 'img/avatars/avatar000.png', 'std0032', 'fdf04e9eec4180183c9477905422fb42', '2A', 4),
(34, 'Burton Hugill', 'Segbwema', 'img/avatars/avatar000.png', 'std0033', 'fdf04e9eec4180183c9477905422fb42', '2A', 4),
(35, 'Susanetta Close', 'Deder', 'img/avatars/avatar000.png', 'std0034', 'fdf04e9eec4180183c9477905422fb42', '2A', 4),
(36, 'Noelyn Bonhome', 'Changxingbao', 'img/avatars/avatar000.png', 'std0035', 'fdf04e9eec4180183c9477905422fb42', '2A', 4),
(37, 'Russ Jurgenson', 'San Emilio', 'img/avatars/avatar000.png', 'std0036', 'fdf04e9eec4180183c9477905422fb42', '2A', 4),
(38, 'Bili Alexsandrovich', 'København', 'img/avatars/avatar000.png', 'std0037', 'fdf04e9eec4180183c9477905422fb42', '2A', 4),
(39, 'Jake Scaife', 'Bayantal', 'img/avatars/avatar000.png', 'std0038', 'fdf04e9eec4180183c9477905422fb42', '2A', 4),
(40, 'Berrie Greenhall', 'Jianyangping', 'img/avatars/avatar000.png', 'std0039', 'fdf04e9eec4180183c9477905422fb42', '2A', 4),
(41, 'Emmit Klimentov', 'Falun', 'img/avatars/avatar000.png', 'std0040', 'fdf04e9eec4180183c9477905422fb42', '2B', 5),
(42, 'Faulkner Juett', 'Le Bourget-du-Lac', 'img/avatars/avatar000.png', 'std0041', 'fdf04e9eec4180183c9477905422fb42', '2B', 5),
(43, 'Dulcine Aneley', 'Likasi', 'img/avatars/avatar000.png', 'std0042', 'fdf04e9eec4180183c9477905422fb42', '2B', 5),
(44, 'Tandie Escale', 'Tuanchengshan', 'img/avatars/avatar000.png', 'std0043', 'fdf04e9eec4180183c9477905422fb42', '2B', 5),
(45, 'Avrit Tchir', 'Deskle', 'img/avatars/avatar000.png', 'std0044', 'fdf04e9eec4180183c9477905422fb42', '2B', 5),
(46, 'Bronny Goldingay', 'Ayacucho', 'img/avatars/avatar000.png', 'std0045', 'fdf04e9eec4180183c9477905422fb42', '2B', 5),
(47, 'Tova Pennrington', 'Novogornyy', 'img/avatars/avatar000.png', 'std0046', 'fdf04e9eec4180183c9477905422fb42', '2B', 5),
(48, 'Jaclyn Klyn', 'Butel', 'img/avatars/avatar000.png', 'std0047', 'fdf04e9eec4180183c9477905422fb42', '2B', 5),
(49, 'Nicola Deehan', 'Ccuntuma', 'img/avatars/avatar000.png', 'std0048', 'fdf04e9eec4180183c9477905422fb42', '2B', 5),
(50, 'Willdon Sallarie', 'Guacarí', 'img/avatars/avatar000.png', 'std0049', 'fdf04e9eec4180183c9477905422fb42', '2B', 6),
(51, 'Michaeline Hourahan', 'Nhà Bè', 'img/avatars/avatar000.png', 'std0050', 'fdf04e9eec4180183c9477905422fb42', '2C', 6),
(52, 'Luciano Shales', 'Pinheiro Machado', 'img/avatars/avatar000.png', 'std0051', 'fdf04e9eec4180183c9477905422fb42', '2C', 6),
(53, 'Matthaeus Pointing', 'Surin', 'img/avatars/avatar000.png', 'std0052', 'fdf04e9eec4180183c9477905422fb42', '2C', 6),
(54, 'Verne Filliskirk', 'Nai Harn', 'img/avatars/avatar000.png', 'std0053', 'fdf04e9eec4180183c9477905422fb42', '2C', 6),
(55, 'Marigold Mindenhall', 'Subic', 'img/avatars/avatar000.png', 'std0054', 'fdf04e9eec4180183c9477905422fb42', '2C', 6),
(56, 'Heather Olsson', 'Ouango', 'img/avatars/avatar000.png', 'std0055', 'fdf04e9eec4180183c9477905422fb42', '2C', 6),
(57, 'Linell McCaughan', 'Wangji', 'img/avatars/avatar000.png', 'std0056', 'fdf04e9eec4180183c9477905422fb42', '2C', 6),
(58, 'Alta Brezlaw', 'Bzenec', 'img/avatars/avatar000.png', 'std0057', 'fdf04e9eec4180183c9477905422fb42', '2C', 6),
(59, 'Desirae Robinet', 'Kuala Pilah', 'img/avatars/avatar000.png', 'std0058', 'fdf04e9eec4180183c9477905422fb42', '2C', 6),
(60, 'Kristian Ochterlony', 'Lleida', 'img/avatars/avatar000.png', 'std0059', 'fdf04e9eec4180183c9477905422fb42', '2C', 6),
(61, 'Onida Irvine', 'Borzna', 'img/avatars/avatar000.png', 'std0060', 'fdf04e9eec4180183c9477905422fb42', '3A', 7),
(62, 'Giselbert Pasquale', 'Vostochnyy', 'img/avatars/avatar000.png', 'std0061', 'fdf04e9eec4180183c9477905422fb42', '3A', 7),
(63, 'Nola Alesin', 'Petrolina', 'img/avatars/avatar000.png', 'std0062', 'fdf04e9eec4180183c9477905422fb42', '3A', 7),
(64, 'Smith Belvard', 'Bern', 'img/avatars/avatar000.png', 'std0063', 'fdf04e9eec4180183c9477905422fb42', '3A', 7),
(65, 'Cortie Plomer', 'Golubinci', 'img/avatars/avatar000.png', 'std0064', 'fdf04e9eec4180183c9477905422fb42', '3A', 7),
(66, 'Jeff Dron', 'Higuerote', 'img/avatars/avatar000.png', 'std0065', 'fdf04e9eec4180183c9477905422fb42', '3A', 7),
(67, 'Terri Prettyjohn', 'Tairan Camp', 'img/avatars/avatar000.png', 'std0066', 'fdf04e9eec4180183c9477905422fb42', '3A', 7),
(68, 'Hakeem Scantlebury', 'Malvern', 'img/avatars/avatar000.png', 'std0067', 'fdf04e9eec4180183c9477905422fb42', '3A', 7),
(69, 'Farand Wackett', 'Ulichnoye', 'img/avatars/avatar000.png', 'std0068', 'fdf04e9eec4180183c9477905422fb42', '3A', 7),
(70, 'Tami Spread', 'Lannion', 'img/avatars/avatar000.png', 'std0069', 'fdf04e9eec4180183c9477905422fb42', '3A', 7),
(71, 'Lizbeth Baudinot', 'New York City', 'img/avatars/avatar000.png', 'std0070', 'fdf04e9eec4180183c9477905422fb42', '3B', 8),
(72, 'Darline Castrillo', 'Hostou?', 'img/avatars/avatar000.png', 'std0071', 'fdf04e9eec4180183c9477905422fb42', '3B', 8),
(73, 'Darby Delagua', 'Svetogorsk', 'img/avatars/avatar000.png', 'std0072', 'fdf04e9eec4180183c9477905422fb42', '3B', 8),
(74, 'Nicolai Dreinan', 'Vendychany', 'img/avatars/avatar000.png', 'std0073', 'fdf04e9eec4180183c9477905422fb42', '3B', 8),
(75, 'Antonetta Kemet', 'Lazdijai', 'img/avatars/avatar000.png', 'std0074', 'fdf04e9eec4180183c9477905422fb42', '3B', 8),
(76, 'Andris Stollman', 'Cassilândia', 'img/avatars/avatar000.png', 'std0075', 'fdf04e9eec4180183c9477905422fb42', '3B', 8),
(77, 'Audie Antusch', 'Sacramento', 'img/avatars/avatar000.png', 'std0076', 'fdf04e9eec4180183c9477905422fb42', '3B', 8),
(78, 'Harlan Yanin', 'Bailizhou', 'img/avatars/avatar000.png', 'std0077', 'fdf04e9eec4180183c9477905422fb42', '3B', 8),
(79, 'Leonelle Laskey', 'Stockholm', 'img/avatars/avatar000.png', 'std0078', 'fdf04e9eec4180183c9477905422fb42', '3B', 8),
(80, 'Brook Manford', 'Youludu Sibage', 'img/avatars/avatar000.png', 'std0079', 'fdf04e9eec4180183c9477905422fb42', '3B', 8),
(81, 'Lamond Edyson', 'Choa Said?n Sh?h', 'img/avatars/avatar000.png', 'std0080', 'fdf04e9eec4180183c9477905422fb42', '3C', 9),
(82, 'Maryjo State', 'Bilyayivka', 'img/avatars/avatar000.png', 'std0081', 'fdf04e9eec4180183c9477905422fb42', '3C', 9),
(83, 'Cull Potteridge', 'Bulri', 'img/avatars/avatar000.png', 'std0082', 'fdf04e9eec4180183c9477905422fb42', '3C', 9),
(84, 'Uta Furlong', 'Saaban', 'img/avatars/avatar000.png', 'std0083', 'fdf04e9eec4180183c9477905422fb42', '3C', 9),
(85, 'Bordy Bachelor', 'Dongjin', 'img/avatars/avatar000.png', 'std0084', 'fdf04e9eec4180183c9477905422fb42', '3C', 9),
(86, 'Audy McLaine', 'Jaraguá', 'img/avatars/avatar000.png', 'std0085', 'fdf04e9eec4180183c9477905422fb42', '3C', 9),
(87, 'Vassily Lamey', 'Morden', 'img/avatars/avatar000.png', 'std0086', 'fdf04e9eec4180183c9477905422fb42', '3C', 9),
(88, 'Derward Fosdyke', 'Denver', 'img/avatars/avatar000.png', 'std0087', 'fdf04e9eec4180183c9477905422fb42', '3C', 9),
(89, 'Bentlee Climar', 'Santa Monica', 'img/avatars/avatar000.png', 'std0088', 'fdf04e9eec4180183c9477905422fb42', '3C', 9),
(90, 'Allianora Houseley', 'Myasnikyan', 'img/avatars/avatar000.png', 'std0089', 'fdf04e9eec4180183c9477905422fb42', '3C', 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `students_record_subject`
--

CREATE TABLE `students_record_subject` (
  `id` int(11) NOT NULL,
  `id_date` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `students_record_subject`
--

INSERT INTO `students_record_subject` (`id`, `id_date`, `student_id`) VALUES
(1, 1, 0),
(2, 1, 1),
(3, 1, 2),
(4, 1, 3),
(5, 1, 4),
(6, 1, 5),
(7, 1, 6),
(8, 1, 7),
(9, 1, 8),
(10, 1, 9),
(11, 2, 41),
(12, 2, 42),
(13, 2, 43),
(14, 2, 44),
(15, 2, 45),
(16, 2, 46),
(17, 2, 47),
(18, 2, 48),
(19, 2, 49),
(20, 2, 50),
(21, 3, 30),
(22, 3, 31),
(23, 3, 32),
(24, 3, 33),
(25, 3, 34),
(26, 3, 35),
(27, 3, 36),
(28, 3, 37),
(29, 3, 38),
(30, 3, 39),
(31, 3, 40),
(32, 4, 10),
(33, 4, 11),
(34, 4, 12),
(35, 4, 13),
(36, 4, 14),
(37, 4, 15),
(38, 4, 16),
(39, 4, 17),
(40, 4, 18),
(41, 4, 19),
(42, 5, 71),
(43, 5, 72),
(44, 5, 73),
(45, 5, 74),
(46, 5, 75),
(47, 5, 76),
(48, 5, 77),
(49, 5, 78),
(50, 5, 79),
(51, 5, 80),
(52, 6, 61),
(53, 6, 62),
(54, 6, 63),
(55, 6, 64),
(56, 6, 65),
(57, 6, 66),
(58, 6, 67),
(59, 6, 68),
(60, 6, 69),
(61, 6, 70),
(62, 7, 41),
(63, 7, 42),
(64, 7, 43),
(65, 7, 44),
(66, 7, 45),
(67, 7, 46),
(68, 7, 47),
(69, 7, 48),
(70, 7, 49),
(71, 7, 50),
(72, 8, 41),
(73, 8, 42),
(74, 8, 43),
(75, 8, 44),
(76, 8, 45),
(77, 8, 46),
(78, 8, 47),
(79, 8, 48),
(80, 8, 49),
(81, 8, 50),
(82, 9, 30),
(83, 9, 31),
(84, 9, 32),
(85, 9, 33),
(86, 9, 34),
(87, 9, 35),
(88, 9, 36),
(89, 9, 37),
(90, 9, 38),
(91, 9, 39),
(92, 9, 40),
(93, 10, 71),
(94, 10, 72),
(95, 10, 73),
(96, 10, 74),
(97, 10, 75),
(98, 10, 76),
(99, 10, 77),
(100, 10, 78),
(101, 10, 79),
(102, 10, 80),
(103, 11, 61),
(104, 11, 62),
(105, 11, 63),
(106, 11, 64),
(107, 11, 65),
(108, 11, 66),
(109, 11, 67),
(110, 11, 68),
(111, 11, 69),
(112, 11, 70),
(113, 12, 10),
(114, 12, 11),
(115, 12, 12),
(116, 12, 13),
(117, 12, 14),
(118, 12, 15),
(119, 12, 16),
(120, 12, 17),
(121, 12, 18),
(122, 12, 19),
(123, 13, 71),
(124, 13, 72),
(125, 13, 73),
(126, 13, 74),
(127, 13, 75),
(128, 13, 76),
(129, 13, 77),
(130, 13, 78),
(131, 13, 79),
(132, 13, 80),
(133, 14, 30),
(134, 14, 31),
(135, 14, 32),
(136, 14, 33),
(137, 14, 34),
(138, 14, 35),
(139, 14, 36),
(140, 14, 37),
(141, 14, 38),
(142, 14, 39),
(143, 14, 40),
(144, 15, 61),
(145, 15, 62),
(146, 15, 63),
(147, 15, 64),
(148, 15, 65),
(149, 15, 66),
(150, 15, 67),
(151, 15, 68),
(152, 15, 69),
(153, 15, 70),
(154, 16, 0),
(155, 16, 1),
(156, 16, 2),
(157, 16, 3),
(158, 16, 4),
(159, 16, 5),
(160, 16, 6),
(161, 16, 7),
(162, 16, 8),
(163, 16, 9),
(164, 17, 71),
(165, 17, 72),
(166, 17, 73),
(167, 17, 74),
(168, 17, 75),
(169, 17, 76),
(170, 17, 77),
(171, 17, 78),
(172, 17, 79),
(173, 17, 80),
(174, 18, 61),
(175, 18, 62),
(176, 18, 63),
(177, 18, 64),
(178, 18, 65),
(179, 18, 66),
(180, 18, 67),
(181, 18, 68),
(182, 18, 69),
(183, 18, 70),
(184, 19, 41),
(185, 19, 42),
(186, 19, 43),
(187, 19, 44),
(188, 19, 45),
(189, 19, 46),
(190, 19, 47),
(191, 19, 48),
(192, 19, 49),
(193, 19, 50),
(194, 20, 0),
(195, 20, 1),
(196, 20, 2),
(197, 20, 3),
(198, 20, 4),
(199, 20, 5),
(200, 20, 6),
(201, 20, 7),
(202, 20, 8),
(203, 20, 9),
(204, 21, 10),
(205, 21, 11),
(206, 21, 12),
(207, 21, 13),
(208, 21, 14),
(209, 21, 15),
(210, 21, 16),
(211, 21, 17),
(212, 21, 18),
(213, 21, 19),
(214, 22, 41),
(215, 22, 42),
(216, 22, 43),
(217, 22, 44),
(218, 22, 45),
(219, 22, 46),
(220, 22, 47),
(221, 22, 48),
(222, 22, 49),
(223, 22, 50),
(224, 23, 71),
(225, 23, 72),
(226, 23, 73),
(227, 23, 74),
(228, 23, 75),
(229, 23, 76),
(230, 23, 77),
(231, 23, 78),
(232, 23, 79),
(233, 23, 80),
(234, 24, 41),
(235, 24, 42),
(236, 24, 43),
(237, 24, 44),
(238, 24, 45),
(239, 24, 46),
(240, 24, 47),
(241, 24, 48),
(242, 24, 49),
(243, 24, 50),
(244, 25, 61),
(245, 25, 62),
(246, 25, 63),
(247, 25, 64),
(248, 25, 65),
(249, 25, 66),
(250, 25, 67),
(251, 25, 68),
(252, 25, 69),
(253, 25, 70),
(254, 26, 71),
(255, 26, 72),
(256, 26, 73),
(257, 26, 74),
(258, 26, 75),
(259, 26, 76),
(260, 26, 77),
(261, 26, 78),
(262, 26, 79),
(263, 26, 80),
(264, 27, 0),
(265, 27, 1),
(266, 27, 2),
(267, 27, 3),
(268, 27, 4),
(269, 27, 5),
(270, 27, 6),
(271, 27, 7),
(272, 27, 8),
(273, 27, 9),
(274, 28, 10),
(275, 28, 11),
(276, 28, 12),
(277, 28, 13),
(278, 28, 14),
(279, 28, 15),
(280, 28, 16),
(281, 28, 17),
(282, 28, 18),
(283, 28, 19),
(284, 29, 71),
(285, 29, 72),
(286, 29, 73),
(287, 29, 74),
(288, 29, 75),
(289, 29, 76),
(290, 29, 77),
(291, 29, 78),
(292, 29, 79),
(293, 29, 80),
(294, 30, 0),
(295, 30, 1),
(296, 30, 2),
(297, 30, 3),
(298, 30, 4),
(299, 30, 5),
(300, 30, 6),
(301, 30, 7),
(302, 30, 8),
(303, 30, 9),
(304, 31, 41),
(305, 31, 42),
(306, 31, 43),
(307, 31, 44),
(308, 31, 45),
(309, 31, 46),
(310, 31, 47),
(311, 31, 48),
(312, 31, 49),
(313, 31, 50),
(314, 32, 41),
(315, 32, 42),
(316, 32, 43),
(317, 32, 44),
(318, 32, 45),
(319, 32, 46),
(320, 32, 47),
(321, 32, 48),
(322, 32, 49),
(323, 32, 50),
(324, 33, 30),
(325, 33, 31),
(326, 33, 32),
(327, 33, 33),
(328, 33, 34),
(329, 33, 35),
(330, 33, 36),
(331, 33, 37),
(332, 33, 38),
(333, 33, 39),
(334, 33, 40),
(335, 34, 10),
(336, 34, 11),
(337, 34, 12),
(338, 34, 13),
(339, 34, 14),
(340, 34, 15),
(341, 34, 16),
(342, 34, 17),
(343, 34, 18),
(344, 34, 19),
(345, 35, 0),
(346, 35, 1),
(347, 35, 2),
(348, 35, 3),
(349, 35, 4),
(350, 35, 5),
(351, 35, 6),
(352, 35, 7),
(353, 35, 8),
(354, 35, 9),
(355, 36, 71),
(356, 36, 72),
(357, 36, 73),
(358, 36, 74),
(359, 36, 75),
(360, 36, 76),
(361, 36, 77),
(362, 36, 78),
(363, 36, 79),
(364, 36, 80),
(365, 37, 10),
(366, 37, 11),
(367, 37, 12),
(368, 37, 13),
(369, 37, 14),
(370, 37, 15),
(371, 37, 16),
(372, 37, 17),
(373, 37, 18),
(374, 37, 19),
(375, 38, 61),
(376, 38, 62),
(377, 38, 63),
(378, 38, 64),
(379, 38, 65),
(380, 38, 66),
(381, 38, 67),
(382, 38, 68),
(383, 38, 69),
(384, 38, 70),
(385, 39, 71),
(386, 39, 72),
(387, 39, 73),
(388, 39, 74),
(389, 39, 75),
(390, 39, 76),
(391, 39, 77),
(392, 39, 78),
(393, 39, 79),
(394, 39, 80),
(395, 40, 30),
(396, 40, 31),
(397, 40, 32),
(398, 40, 33),
(399, 40, 34),
(400, 40, 35),
(401, 40, 36),
(402, 40, 37),
(403, 40, 38),
(404, 40, 39),
(405, 40, 40),
(406, 41, 41),
(407, 41, 42),
(408, 41, 43),
(409, 41, 44),
(410, 41, 45),
(411, 41, 46),
(412, 41, 47),
(413, 41, 48),
(414, 41, 49),
(415, 41, 50),
(416, 42, 0),
(417, 42, 1),
(418, 42, 2),
(419, 42, 3),
(420, 42, 4),
(421, 42, 5),
(422, 42, 6),
(423, 42, 7),
(424, 42, 8),
(425, 42, 9),
(426, 43, 30),
(427, 43, 31),
(428, 43, 32),
(429, 43, 33),
(430, 43, 34),
(431, 43, 35),
(432, 43, 36),
(433, 43, 37),
(434, 43, 38),
(435, 43, 39),
(436, 43, 40),
(437, 44, 30),
(438, 44, 31),
(439, 44, 32),
(440, 44, 33),
(441, 44, 34),
(442, 44, 35),
(443, 44, 36),
(444, 44, 37),
(445, 44, 38),
(446, 44, 39),
(447, 44, 40),
(448, 45, 41),
(449, 45, 42),
(450, 45, 43),
(451, 45, 44),
(452, 45, 45),
(453, 45, 46),
(454, 45, 47),
(455, 45, 48),
(456, 45, 49),
(457, 45, 50),
(458, 46, 31),
(459, 46, 32),
(460, 46, 33),
(461, 46, 34),
(462, 46, 35),
(463, 46, 36),
(464, 46, 37),
(465, 46, 38),
(466, 46, 39),
(467, 46, 40),
(468, 47, 61),
(469, 47, 62),
(470, 47, 63),
(471, 47, 64),
(472, 47, 65),
(473, 47, 66),
(474, 47, 67),
(475, 47, 68),
(476, 47, 69),
(477, 47, 70),
(478, 48, 71),
(479, 48, 72),
(480, 48, 73),
(481, 48, 74),
(482, 48, 75),
(483, 48, 76),
(484, 48, 77),
(485, 48, 78),
(486, 48, 79),
(487, 48, 80),
(488, 49, 10),
(489, 49, 11),
(490, 49, 12),
(491, 49, 13),
(492, 49, 14),
(493, 49, 15),
(494, 49, 16),
(495, 49, 17),
(496, 49, 18),
(497, 49, 19),
(498, 50, 0),
(499, 50, 1),
(500, 50, 2),
(501, 50, 3),
(502, 50, 4),
(503, 50, 5),
(504, 50, 6),
(505, 50, 7),
(506, 50, 8),
(507, 50, 9),
(508, 51, 41),
(509, 51, 42),
(510, 51, 43),
(511, 51, 44),
(512, 51, 45),
(513, 51, 46),
(514, 51, 47),
(515, 51, 48),
(516, 51, 49),
(517, 51, 50),
(518, 52, 61),
(519, 52, 62),
(520, 52, 63),
(521, 52, 64),
(522, 52, 65),
(523, 52, 66),
(524, 52, 67),
(525, 52, 68),
(526, 52, 69),
(527, 52, 70),
(528, 53, 41),
(529, 53, 42),
(530, 53, 43),
(531, 53, 44),
(532, 53, 45),
(533, 53, 46),
(534, 53, 47),
(535, 53, 48),
(536, 53, 49),
(537, 53, 50),
(538, 54, 61),
(539, 54, 62),
(540, 54, 63),
(541, 54, 64),
(542, 54, 65),
(543, 54, 66),
(544, 54, 67),
(545, 54, 68),
(546, 54, 69),
(547, 54, 70),
(548, 55, 30),
(549, 55, 31),
(550, 55, 32),
(551, 55, 33),
(552, 55, 34),
(553, 55, 35),
(554, 55, 36),
(555, 55, 37),
(556, 55, 38),
(557, 55, 39),
(558, 55, 40),
(559, 56, 30),
(560, 56, 31),
(561, 56, 32),
(562, 56, 33),
(563, 56, 34),
(564, 56, 35),
(565, 56, 36),
(566, 56, 37),
(567, 56, 38),
(568, 56, 39),
(569, 56, 40),
(570, 57, 0),
(571, 57, 1),
(572, 57, 2),
(573, 57, 3),
(574, 57, 4),
(575, 57, 5),
(576, 57, 6),
(577, 57, 7),
(578, 57, 8),
(579, 57, 9),
(590, 59, 41),
(591, 59, 42),
(592, 59, 43),
(593, 59, 44),
(594, 59, 45),
(595, 59, 46),
(596, 59, 47),
(597, 59, 48),
(598, 59, 49),
(599, 59, 50),
(600, 60, 0),
(601, 60, 1),
(602, 60, 2),
(603, 60, 3),
(604, 60, 4),
(605, 60, 5),
(606, 60, 6),
(607, 60, 7),
(608, 60, 8),
(609, 60, 9),
(610, 61, 41),
(611, 61, 42),
(612, 61, 43),
(613, 61, 44),
(614, 61, 45),
(615, 61, 46),
(616, 61, 47),
(617, 61, 48),
(618, 61, 49),
(619, 61, 50),
(620, 62, 10),
(621, 62, 11),
(622, 62, 12),
(623, 62, 13),
(624, 62, 14),
(625, 62, 15),
(626, 62, 16),
(627, 62, 17),
(628, 62, 18),
(629, 62, 19),
(630, 63, 71),
(631, 63, 72),
(632, 63, 73),
(633, 63, 74),
(634, 63, 75),
(635, 63, 76),
(636, 63, 77),
(637, 63, 78),
(638, 63, 79),
(639, 63, 80),
(640, 64, 30),
(641, 64, 31),
(642, 64, 32),
(643, 64, 33),
(644, 64, 34),
(645, 64, 35),
(646, 64, 36),
(647, 64, 37),
(648, 64, 38),
(649, 64, 39),
(650, 64, 40),
(651, 65, 60),
(652, 65, 61),
(653, 65, 62),
(654, 65, 63),
(655, 65, 64),
(656, 65, 65),
(657, 65, 66),
(658, 65, 67),
(659, 65, 68),
(660, 65, 69),
(661, 65, 70),
(662, 66, 30),
(663, 66, 31),
(664, 66, 32),
(665, 66, 33),
(666, 66, 34),
(667, 66, 35),
(668, 66, 36),
(669, 66, 37),
(670, 66, 38),
(671, 66, 39),
(672, 66, 40),
(673, 67, 0),
(674, 67, 1),
(675, 67, 2),
(676, 67, 3),
(677, 67, 4),
(678, 67, 5),
(679, 67, 6),
(680, 67, 7),
(681, 67, 8),
(682, 67, 9),
(683, 68, 0),
(684, 68, 1),
(685, 68, 2),
(686, 68, 3),
(687, 68, 4),
(688, 68, 5),
(689, 68, 6),
(690, 68, 7),
(691, 68, 8),
(692, 68, 9),
(693, 69, 71),
(694, 69, 72),
(695, 69, 73),
(696, 69, 74),
(697, 69, 75),
(698, 69, 76),
(699, 69, 77),
(700, 69, 78),
(701, 69, 79),
(702, 69, 80),
(703, 70, 0),
(704, 70, 1),
(705, 70, 2),
(706, 70, 3),
(707, 70, 4),
(708, 70, 5),
(709, 70, 6),
(710, 70, 7),
(711, 70, 8),
(712, 70, 9),
(713, 71, 10),
(714, 71, 11),
(715, 71, 12),
(716, 71, 13),
(717, 71, 14),
(718, 71, 15),
(719, 71, 16),
(720, 71, 17),
(721, 71, 18),
(722, 71, 19),
(723, 72, 41),
(724, 72, 42),
(725, 72, 43),
(726, 72, 44),
(727, 72, 45),
(728, 72, 46),
(729, 72, 47),
(730, 72, 48),
(731, 72, 49),
(732, 72, 50),
(733, 73, 30),
(734, 73, 31),
(735, 73, 32),
(736, 73, 33),
(737, 73, 34),
(738, 73, 35),
(739, 73, 36),
(740, 73, 37),
(741, 73, 38),
(742, 73, 39),
(743, 73, 40),
(744, 75, 61),
(745, 75, 62),
(746, 75, 63),
(747, 75, 64),
(748, 75, 65),
(749, 75, 66),
(750, 75, 67),
(751, 75, 68),
(752, 75, 69),
(753, 75, 70),
(754, 76, 71),
(755, 76, 72),
(756, 76, 73),
(757, 76, 74),
(758, 76, 75),
(759, 76, 76),
(760, 76, 77),
(761, 76, 78),
(762, 76, 79),
(763, 76, 80),
(764, 77, 10),
(765, 77, 11),
(766, 77, 12),
(767, 77, 13),
(768, 77, 14),
(769, 77, 15),
(770, 77, 16),
(771, 77, 17),
(772, 77, 18),
(773, 77, 19),
(774, 78, 0),
(775, 78, 1),
(776, 78, 2),
(777, 78, 3),
(778, 78, 4),
(779, 78, 5),
(780, 78, 6),
(781, 78, 7),
(782, 78, 8),
(783, 78, 9),
(784, 79, 10),
(785, 79, 11),
(786, 79, 12),
(787, 79, 13),
(788, 79, 14),
(789, 79, 15),
(790, 79, 16),
(791, 79, 17),
(792, 79, 18),
(793, 79, 19),
(794, 80, 41),
(795, 80, 42),
(796, 80, 43),
(797, 80, 44),
(798, 80, 45),
(799, 80, 46),
(800, 80, 47),
(801, 80, 48),
(802, 80, 49),
(803, 80, 50),
(804, 81, 61),
(805, 81, 62),
(806, 81, 63),
(807, 81, 64),
(808, 81, 65),
(809, 81, 66),
(810, 81, 67),
(811, 81, 68),
(812, 81, 69),
(813, 81, 70),
(814, 82, 71),
(815, 82, 72),
(816, 82, 73),
(817, 82, 74),
(818, 82, 75),
(819, 82, 76),
(820, 82, 77),
(821, 82, 78),
(822, 82, 79),
(823, 82, 80),
(824, 83, 10),
(825, 83, 11),
(826, 83, 12),
(827, 83, 13),
(828, 83, 14),
(829, 83, 15),
(830, 83, 16),
(831, 83, 17),
(832, 83, 18),
(833, 83, 19);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `subjects`
--

INSERT INTO `subjects` (`id`, `name`) VALUES
(1, 'JÄ™zyk polski'),
(2, 'JÄ™zyk obcy'),
(3, 'Historia'),
(4, 'WOS'),
(5, 'Geografia'),
(6, 'Biologia'),
(7, 'Chemia'),
(8, 'Fizyka'),
(9, 'Matematyka'),
(10, 'Informatyka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `subject_date`
--

CREATE TABLE `subject_date` (
  `id` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `subject_day` tinyint(6) NOT NULL,
  `subject_hour` tinyint(6) NOT NULL,
  `room` tinyint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `subject_date`
--

INSERT INTO `subject_date` (`id`, `professor_id`, `subject_id`, `subject_day`, `subject_hour`, `room`) VALUES
(1, 1, 1, 1, 3, 22),
(2, 1, 1, 1, 4, 7),
(3, 1, 1, 1, 5, 18),
(4, 1, 1, 1, 6, 5),
(5, 1, 1, 1, 8, 19),
(6, 1, 1, 1, 9, 5),
(7, 2, 2, 1, 6, 10),
(8, 3, 3, 1, 5, 1),
(9, 4, 4, 1, 6, 18),
(10, 4, 4, 1, 7, 20),
(11, 5, 5, 1, 7, 18),
(12, 6, 6, 1, 5, 23),
(13, 6, 6, 1, 6, 14),
(14, 6, 6, 1, 7, 22),
(15, 6, 6, 1, 8, 15),
(16, 7, 7, 1, 2, 4),
(17, 8, 8, 1, 5, 21),
(18, 8, 8, 1, 6, 25),
(19, 8, 8, 1, 7, 26),
(20, 9, 9, 1, 1, 1),
(21, 10, 10, 1, 7, 15),
(22, 10, 10, 1, 8, 9),
(23, 10, 10, 1, 9, 14),
(24, 1, 1, 2, 3, 19),
(25, 1, 1, 2, 4, 3),
(26, 1, 1, 2, 5, 28),
(27, 1, 1, 2, 6, 1),
(28, 3, 3, 2, 1, 18),
(29, 3, 3, 2, 2, 1),
(30, 4, 4, 2, 4, 16),
(31, 4, 4, 2, 5, 4),
(32, 5, 5, 2, 6, 19),
(33, 5, 5, 2, 7, 24),
(34, 6, 6, 2, 3, 1),
(35, 6, 6, 2, 5, 27),
(36, 6, 6, 2, 6, 26),
(37, 7, 7, 2, 2, 9),
(38, 7, 7, 2, 3, 28),
(39, 7, 7, 2, 4, 15),
(40, 7, 7, 2, 6, 29),
(41, 7, 7, 2, 7, 14),
(42, 8, 8, 2, 7, 18),
(43, 8, 8, 2, 9, 19),
(44, 10, 10, 2, 8, 1),
(45, 1, 1, 3, 3, 1),
(46, 1, 1, 3, 4, 29),
(47, 1, 1, 3, 5, 21),
(48, 1, 1, 3, 6, 25),
(49, 2, 2, 3, 5, 28),
(50, 3, 3, 3, 5, 10),
(51, 3, 3, 3, 7, 21),
(52, 3, 3, 3, 8, 25),
(53, 4, 4, 3, 4, 7),
(54, 4, 4, 3, 6, 7),
(55, 5, 5, 3, 3, 19),
(56, 6, 6, 3, 7, 23),
(57, 6, 6, 3, 8, 6),
(58, 7, 7, 3, 5, 16),
(59, 8, 8, 3, 6, 10),
(60, 8, 8, 3, 7, 4),
(61, 9, 9, 3, 2, 21),
(62, 9, 9, 3, 4, 5),
(63, 9, 9, 3, 5, 1),
(64, 9, 9, 3, 6, 28),
(65, 9, 9, 3, 7, 14),
(66, 10, 10, 3, 5, 14),
(67, 10, 10, 3, 6, 15),
(68, 1, 1, 4, 3, 26),
(69, 1, 1, 4, 4, 16),
(70, 2, 2, 4, 4, 10),
(71, 2, 2, 4, 5, 3),
(72, 2, 2, 4, 6, 27),
(73, 2, 2, 4, 7, 10),
(75, 4, 4, 4, 1, 13),
(76, 4, 4, 4, 2, 1),
(77, 5, 5, 4, 6, 21),
(78, 7, 7, 4, 2, 18),
(79, 8, 8, 4, 7, 27),
(80, 9, 9, 4, 7, 19),
(81, 10, 10, 4, 2, 27),
(82, 10, 10, 4, 3, 14),
(83, 10, 10, 4, 4, 24);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `type_of_absence`
--

CREATE TABLE `type_of_absence` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `type_of_absence`
--

INSERT INTO `type_of_absence` (`id`, `name`) VALUES
(1, 'nieusprawiedliwione'),
(2, 'usprawiedliwione');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `frequency`
--
ALTER TABLE `frequency`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professor_id` (`professor_id`,`student_id`,`subject_date_id`,`type_of_abcence`),
  ADD KEY `type_of_abcence` (`type_of_abcence`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_date_id` (`subject_date_id`);

--
-- Indeksy dla tabeli `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professor_id` (`professor_id`,`student_id`,`subject_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `weight` (`weight`);

--
-- Indeksy dla tabeli `grades_weight`
--
ALTER TABLE `grades_weight`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`,`professor_id`),
  ADD KEY `professor_id` (`professor_id`);

--
-- Indeksy dla tabeli `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `students_record_subject`
--
ALTER TABLE `students_record_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `id_date` (`id_date`) USING BTREE;

--
-- Indeksy dla tabeli `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `subject_date`
--
ALTER TABLE `subject_date`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professor_id` (`professor_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `subject_id_2` (`subject_id`);

--
-- Indeksy dla tabeli `type_of_absence`
--
ALTER TABLE `type_of_absence`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `frequency`
--
ALTER TABLE `frequency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `students_record_subject`
--
ALTER TABLE `students_record_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=834;

--
-- AUTO_INCREMENT dla tabeli `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `frequency`
--
ALTER TABLE `frequency`
  ADD CONSTRAINT `frequency_ibfk_1` FOREIGN KEY (`type_of_abcence`) REFERENCES `type_of_absence` (`id`),
  ADD CONSTRAINT `frequency_ibfk_2` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`id`),
  ADD CONSTRAINT `frequency_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `frequency_ibfk_4` FOREIGN KEY (`subject_date_id`) REFERENCES `subject_date` (`id`);

--
-- Ograniczenia dla tabeli `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `grades_ibfk_3` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`id`),
  ADD CONSTRAINT `grades_ibfk_4` FOREIGN KEY (`weight`) REFERENCES `grades_weight` (`id`);

--
-- Ograniczenia dla tabeli `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`id`);

--
-- Ograniczenia dla tabeli `students_record_subject`
--
ALTER TABLE `students_record_subject`
  ADD CONSTRAINT `students_record_subject_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `students_record_subject_ibfk_2` FOREIGN KEY (`id_date`) REFERENCES `subject_date` (`id`);

--
-- Ograniczenia dla tabeli `subject_date`
--
ALTER TABLE `subject_date`
  ADD CONSTRAINT `subject_date_ibfk_1` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`id`),
  ADD CONSTRAINT `subject_date_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
