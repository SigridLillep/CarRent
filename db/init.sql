-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Märts 12, 2026 kell 10:53 EL
-- Serveri versioon: 10.4.32-MariaDB
-- PHP versioon: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `crsigrid`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `engin` varchar(255) NOT NULL,
  `fuel` enum('bensiin','diisel','elekter','gaas') NOT NULL,
  `price` int(4) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Andmete tõmmistamine tabelile `cars`
--

INSERT INTO `cars` (`id`, `mark`, `model`, `engin`, `fuel`, `price`, `image`) VALUES
(1, 'Audi ', 'Q8', 'V8', 'bensiin', 1500, 'audiq8.jpg'),
(2, 'Oldsmobile', 'Silhouette', 'V6', 'diisel', 479, '/morbi/odio/odio/elementum/eu.png'),
(3, 'Suzuki', 'SJ', 'V12', 'diisel', 239, '/vel.aspx'),
(4, 'Mazda', 'RX-7', 'V12', 'bensiin', 906, '/vitae/quam/suspendisse.aspx'),
(5, 'Ford', 'Windstar', 'V8', 'gaas', 739, '/dapibus/at/diam/nam/tristique/tortor.aspx'),
(6, 'Ford', 'Edge', 'V12', 'bensiin', 340, '/quam/fringilla.json'),
(7, 'Acura', 'TL', 'V12', 'gaas', 223, '/ut/tellus.aspx'),
(8, 'Dodge', 'Avenger', 'V8', 'elekter', 596, '/eget.json'),
(9, 'GMC', 'Safari', 'V12', 'elekter', 698, '/amet.png'),
(10, 'Saturn', 'L-Series', 'V6', 'bensiin', 413, '/id/nulla/ultrices/aliquet.png'),
(11, 'Maybach', 'Landaulet', 'V8', 'diisel', 528, '/sit/amet/nulla/quisque.json'),
(12, 'Isuzu', 'Hombre', 'V12', 'elekter', 702, '/dui/luctus/rutrum/nulla.jsp'),
(13, 'Acura', 'RL', 'V12', 'bensiin', 291, '/massa.js'),
(14, 'Audi', 'A8', 'V6', 'bensiin', 342, '/in/eleifend/quam/a/odio.js'),
(15, 'Pontiac', '6000', 'V8', 'bensiin', 902, '/a/nibh/in/quis/justo/maecenas.jpg'),
(16, 'Kia', 'Sportage', 'V6', 'gaas', 597, '/vestibulum/rutrum.jpg'),
(17, 'Chevrolet', 'Express 3500', 'V12', 'bensiin', 350, '/pulvinar/nulla.xml'),
(18, 'Mercury', 'Sable', 'V6', 'elekter', 569, '/ultrices/enim/lorem/ipsum/dolor/sit/amet.jsp'),
(19, 'Audi', 'TT', 'V8', 'elekter', 156, '/enim/sit/amet.aspx'),
(20, 'Pontiac', 'Bonneville', 'V8', 'bensiin', 318, '/dis/parturient/montes/nascetur/ridiculus/mus/etiam.jpg'),
(21, 'Honda', 'Accord', 'V6', 'bensiin', 881, '/consequat.jpg'),
(22, 'Chrysler', 'Sebring', 'V12', 'elekter', 534, '/risus/auctor/sed/tristique.png'),
(23, 'Chevrolet', 'Lumina', 'V12', 'elekter', 501, '/rhoncus/dui/vel/sem.xml'),
(24, 'Subaru', 'Justy', 'V6', 'diisel', 111, '/sed/accumsan/felis/ut/at/dolor.jpg'),
(25, 'Pontiac', 'Tempest', 'V12', 'diisel', 533, '/gravida/nisi.aspx'),
(26, 'Bugatti', 'Veyron', 'V12', 'gaas', 907, '/sem/sed/sagittis/nam/congue/risus.aspx'),
(27, 'BMW', 'X5', 'V6', 'gaas', 142, '/rutrum/ac.json'),
(28, 'Hummer', 'H1', 'V8', 'bensiin', 912, '/cursus/urna/ut.xml'),
(29, 'Panoz', 'Esperante', 'V12', 'gaas', 820, '/cum/sociis.js'),
(30, 'Pontiac', 'Grand Prix', 'V8', 'gaas', 186, '/pede/ullamcorper/augue/a/suscipit/nulla.html'),
(31, 'Lexus', 'LS', 'V6', 'gaas', 123, '/quam/nec/dui/luctus/rutrum/nulla/tellus.aspx'),
(32, 'Pontiac', 'Grand Prix', 'V8', 'bensiin', 649, '/risus/praesent/lectus/vestibulum/quam/sapien/varius.png'),
(33, 'Ford', 'F350', 'V12', 'gaas', 870, '/primis/in/faucibus/orci/luctus/et.jsp'),
(34, 'Saab', '9-3', 'V6', 'elekter', 112, '/libero.jpg'),
(35, 'Chevrolet', 'Camaro', 'V12', 'gaas', 314, '/pharetra/magna/ac/consequat/metus.jsp'),
(36, 'Isuzu', 'Rodeo', 'V6', 'bensiin', 542, '/orci/luctus/et/ultrices/posuere.json'),
(37, 'MINI', 'Countryman', 'V8', 'gaas', 101, '/lacus.xml'),
(38, 'GMC', 'Yukon XL 2500', 'V8', 'diisel', 598, '/sed.aspx'),
(39, 'Dodge', 'Ram 2500', 'V12', 'gaas', 255, '/ac/est/lacinia/nisi/venenatis/tristique/fusce.aspx'),
(40, 'Land Rover', 'Range Rover', 'V12', 'elekter', 833, '/convallis/eget/eleifend/luctus/ultricies/eu.js'),
(41, 'Oldsmobile', 'LSS', 'V8', 'gaas', 135, '/malesuada/in/imperdiet.html');

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
