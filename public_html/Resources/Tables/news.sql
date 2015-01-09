-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Sty 2015, 19:28
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `czysty-las-database`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `Topic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=32 ;

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`Id`, `UserId`, `Topic`, `Content`, `Date`) VALUES
(16, 31, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim tincidunt erat. Pellentesque aliquam neque vel volutpat finibus. Aenean imperdiet dictum odio, lacinia varius sem fermentum ac. Aenean pharetra nulla enim, id vehicula elit tincidunt nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ullamcorper mauris eget metus tempus commodo vel eu nisl. Nullam ut lobortis elit. Nam ut orci scelerisque, malesuada mauris eu, viverra sapien. Sed et felis nec augue ultrices sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2014-10-18'),
(17, 31, 'Temat', '<p><strong>Litwo!</strong> Ojczyzno moja! Ty jesteÅ› jak zdrowie. Ile ciÄ™ trzeba ceniÄ‡, ten zaszczyt naleÅ¼y. IdÄ…c z wieczerzÄ… powynosiÄ‡ z Rejentem wzmogÅ‚a siÄ™ chlubi a w szlacheckim stanie trudno zaradziÄ‡ wolaÅ‚ goÅ›ci Å»ydom do stodoÅ‚y. CieszÄ… siÄ™ w p&oacute;Å‚ godziny juÅ¼ siÄ™ zaczÄ™Å‚y wp&oacute;Å‚gÅ‚oÅ›ne rozmowy. M<em>Ä™Å¼czyÅºni rozsÄ…dzali swe osadzaÅ‚. Dziwna rzecz! Miejsca wkoÅ‚o sarnie i poprawiwszy nieco i mniej zgorszenia. Ach, ja wam sÅ‚uÅ¼yÄ‡, moje panny c&oacute;rki choÄ‡ stryj na ksztaÅ‚t Å›niegu, Åšlad wyraÅºny, lecz podmurowany. ÅšwieciÅ‚y siÄ™ sam siebie, jak noga moja nie chciaÅ‚by do afekt&oacute;w i siano. w wÄ™zeÅ‚ki maÅ‚o w porzÄ…dnym domu, pragnÄ…Å‚ go nie szpieg, a pan Rejent byÅ‚ tytuÅ‚ markiza. JakoÅ¼, kiedy bliÅ¼ej poznaÅ‚ pan&oacute;w lub cicha i za nim</em>. SÅ‚awa czyn&oacute;w tylu lat blisko dwadzieÅ›ci i w pukle, i konstytuowaÄ‡. OgÅ‚osiÅ‚ nam, kolego! lecz go na ksztaÅ‚t ogromnego gmachu sÅ‚oÅ„ce nad niego<span class="marker"> ze dniem ko</span>Å„czÄ… pracÄ™ gospodarze. Pan Å›wiata wie, jak bilardowa kula toczyÅ‚a siÄ™ nie skÄ…piÅ‚. On milczaÅ‚, szczyptÄ™ wziÄ™tÄ… z wolna w drugim koÅ„cu do wojska sposobiÄ‡, Å»e goÅ›cinna i smuci, i w charta. Tak kaÅ¼e u Niemna odebraÅ‚ wiadomoÅ›Ä‡. <s>moÅ¼e by wychowanie.</s></p>\r\n', '2029-10-20'),
(18, 31, 'Ciekawe dane! ', '<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>Alek</td>\r\n			<td>Tomek</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jasiek</td>\r\n			<td>michaÅ‚</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tak</td>\r\n			<td>Nie</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>TreÅ›Ä‡</p>\r\n', '2029-10-20'),
(19, 31, 'Temat', '<p><strong>Litwo!</strong>&nbsp;Ojczyzno moja! Ty jesteÅ› jak zdrowie. Ile ciÄ™ trzeba ceniÄ‡, ten zaszczyt naleÅ¼y. IdÄ…c z wieczerzÄ… powynosiÄ‡ z Rejentem wzmogÅ‚a siÄ™ chlubi a w szlacheckim stanie trudno zaradziÄ‡ wolaÅ‚ goÅ›ci Å»ydom do stodoÅ‚y. CieszÄ… siÄ™ w p&oacute;Å‚ godziny juÅ¼ siÄ™ zaczÄ™Å‚y wp&oacute;Å‚gÅ‚oÅ›ne rozmowy. M<em>Ä™Å¼czyÅºni rozsÄ…dzali swe osadzaÅ‚. Dziwna rzecz! Miejsca wkoÅ‚o sarnie i poprawiwszy nieco i mniej zgorszenia. Ach, ja wam sÅ‚uÅ¼yÄ‡, moje panny c&oacute;rki choÄ‡ stryj na ksztaÅ‚t Å›niegu, Åšlad wyraÅºny, lecz podmurowany. ÅšwieciÅ‚y siÄ™ sam siebie, jak noga moja nie chciaÅ‚by do afekt&oacute;w i siano. w wÄ™zeÅ‚ki maÅ‚o w porzÄ…dnym domu, pragnÄ…Å‚ go nie szpieg, a pan Rejent byÅ‚ tytuÅ‚ markiza. JakoÅ¼, kiedy bliÅ¼ej poznaÅ‚ pan&oacute;w lub cicha i za nim</em>. SÅ‚awa czyn&oacute;w tylu lat blisko dwadzieÅ›ci i w pukle, i konstytuowaÄ‡. OgÅ‚osiÅ‚ nam, kolego! lecz go na ksztaÅ‚t ogromnego gmachu sÅ‚oÅ„ce nad niego<span class="marker">&nbsp;ze dniem ko</span>Å„czÄ… pracÄ™ gospodarze. Pan Å›wiata wie, jak bilardowa kula toczyÅ‚a siÄ™ nie skÄ…piÅ‚. On milczaÅ‚, szczyptÄ™ wziÄ™tÄ… z wolna w drugim koÅ„cu do wojska sposobiÄ‡, Å»e goÅ›cinna i smuci, i w charta. Tak kaÅ¼e u Niemna odebraÅ‚ wiadomoÅ›Ä‡.&nbsp;<s>moÅ¼e by wychowanie.</s></p>\r\n', '2029-10-20'),
(20, 31, 'Temat', '<p><strong>Litwo!</strong>&nbsp;Ojczyzno moja! Ty jesteÅ› jak zdrowie. Ile ciÄ™ trzeba ceniÄ‡, ten zaszczyt naleÅ¼y. IdÄ…c z wieczerzÄ… powynosiÄ‡ z Rejentem wzmogÅ‚a siÄ™ chlubi a w szlacheckim stanie trudno zaradziÄ‡ wolaÅ‚ goÅ›ci Å»ydom do stodoÅ‚y. CieszÄ… siÄ™ w p&oacute;Å‚ godziny juÅ¼ siÄ™ zaczÄ™Å‚y wp&oacute;Å‚gÅ‚oÅ›ne rozmowy. M<em>Ä™Å¼czyÅºni rozsÄ…dzali swe osadzaÅ‚. Dziwna rzecz! Miejsca wkoÅ‚o sarnie i poprawiwszy nieco i mniej zgorszenia. Ach, ja wam sÅ‚uÅ¼yÄ‡, moje panny c&oacute;rki choÄ‡ stryj na ksztaÅ‚t Å›niegu, Åšlad wyraÅºny, lecz podmurowany. ÅšwieciÅ‚y siÄ™ sam siebie, jak noga moja nie chciaÅ‚by do afekt&oacute;w i siano. w wÄ™zeÅ‚ki maÅ‚o w porzÄ…dnym domu, pragnÄ…Å‚ go nie szpieg, a pan Rejent byÅ‚ tytuÅ‚ markiza. JakoÅ¼, kiedy bliÅ¼ej poznaÅ‚ pan&oacute;w lub cicha i za nim</em>. SÅ‚awa czyn&oacute;w tylu lat blisko dwadzieÅ›ci i w pukle, i konstytuowaÄ‡. OgÅ‚osiÅ‚ nam, kolego! lecz go na ksztaÅ‚t ogromnego gmachu sÅ‚oÅ„ce nad niego<span class="marker">&nbsp;ze dniem ko</span>Å„czÄ… pracÄ™ gospodarze. Pan Å›wiata wie, jak bilardowa kula toczyÅ‚a siÄ™ nie skÄ…piÅ‚. On milczaÅ‚, szczyptÄ™ wziÄ™tÄ… z wolna w drugim koÅ„cu do wojska sposobiÄ‡, Å»e goÅ›cinna i smuci, i w charta. Tak kaÅ¼e u Niemna odebraÅ‚ wiadomoÅ›Ä‡.&nbsp;<s>moÅ¼e by wychowanie.</s></p>\r\n', '2029-10-20'),
(21, 31, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim tincidunt erat. Pellentesque aliquam neque vel volutpat finibus. Aenean imperdiet dictum odio, lacinia varius sem fermentum ac. Aenean pharetra nulla enim, id vehicula elit tincidunt nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ullamcorper mauris eget metus tempus commodo vel eu nisl. Nullam ut lobortis elit. Nam ut orci scelerisque, malesuada mauris eu, viverra sapien. Sed et felis nec augue ultrices sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2014-10-18'),
(22, 31, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim tincidunt erat. Pellentesque aliquam neque vel volutpat finibus. Aenean imperdiet dictum odio, lacinia varius sem fermentum ac. Aenean pharetra nulla enim, id vehicula elit tincidunt nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ullamcorper mauris eget metus tempus commodo vel eu nisl. Nullam ut lobortis elit. Nam ut orci scelerisque, malesuada mauris eu, viverra sapien. Sed et felis nec augue ultrices sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2014-10-18'),
(23, 31, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim tincidunt erat. Pellentesque aliquam neque vel volutpat finibus. Aenean imperdiet dictum odio, lacinia varius sem fermentum ac. Aenean pharetra nulla enim, id vehicula elit tincidunt nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ullamcorper mauris eget metus tempus commodo vel eu nisl. Nullam ut lobortis elit. Nam ut orci scelerisque, malesuada mauris eu, viverra sapien. Sed et felis nec augue ultrices sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2014-10-18'),
(24, 31, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim tincidunt erat. Pellentesque aliquam neque vel volutpat finibus. Aenean imperdiet dictum odio, lacinia varius sem fermentum ac. Aenean pharetra nulla enim, id vehicula elit tincidunt nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ullamcorper mauris eget metus tempus commodo vel eu nisl. Nullam ut lobortis elit. Nam ut orci scelerisque, malesuada mauris eu, viverra sapien. Sed et felis nec augue ultrices sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2014-10-18'),
(25, 31, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim tincidunt erat. Pellentesque aliquam neque vel volutpat finibus. Aenean imperdiet dictum odio, lacinia varius sem fermentum ac. Aenean pharetra nulla enim, id vehicula elit tincidunt nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ullamcorper mauris eget metus tempus commodo vel eu nisl. Nullam ut lobortis elit. Nam ut orci scelerisque, malesuada mauris eu, viverra sapien. Sed et felis nec augue ultrices sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2014-10-18'),
(26, 31, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim tincidunt erat. Pellentesque aliquam neque vel volutpat finibus. Aenean imperdiet dictum odio, lacinia varius sem fermentum ac. Aenean pharetra nulla enim, id vehicula elit tincidunt nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ullamcorper mauris eget metus tempus commodo vel eu nisl. Nullam ut lobortis elit. Nam ut orci scelerisque, malesuada mauris eu, viverra sapien. Sed et felis nec augue ultrices sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2014-10-18'),
(27, 31, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim tincidunt erat. Pellentesque aliquam neque vel volutpat finibus. Aenean imperdiet dictum odio, lacinia varius sem fermentum ac. Aenean pharetra nulla enim, id vehicula elit tincidunt nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ullamcorper mauris eget metus tempus commodo vel eu nisl. Nullam ut lobortis elit. Nam ut orci scelerisque, malesuada mauris eu, viverra sapien. Sed et felis nec augue ultrices sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2014-10-18'),
(28, 31, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim tincidunt erat. Pellentesque aliquam neque vel volutpat finibus. Aenean imperdiet dictum odio, lacinia varius sem fermentum ac. Aenean pharetra nulla enim, id vehicula elit tincidunt nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ullamcorper mauris eget metus tempus commodo vel eu nisl. Nullam ut lobortis elit. Nam ut orci scelerisque, malesuada mauris eu, viverra sapien. Sed et felis nec augue ultrices sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2014-10-18'),
(29, 31, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim tincidunt erat. Pellentesque aliquam neque vel volutpat finibus. Aenean imperdiet dictum odio, lacinia varius sem fermentum ac. Aenean pharetra nulla enim, id vehicula elit tincidunt nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ullamcorper mauris eget metus tempus commodo vel eu nisl. Nullam ut lobortis elit. Nam ut orci scelerisque, malesuada mauris eu, viverra sapien. Sed et felis nec augue ultrices sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2014-10-18'),
(30, 31, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim tincidunt erat. Pellentesque aliquam neque vel volutpat finibus. Aenean imperdiet dictum odio, lacinia varius sem fermentum ac. Aenean pharetra nulla enim, id vehicula elit tincidunt nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ullamcorper mauris eget metus tempus commodo vel eu nisl. Nullam ut lobortis elit. Nam ut orci scelerisque, malesuada mauris eu, viverra sapien. Sed et felis nec augue ultrices sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2014-10-18'),
(31, 31, 'Nowy news', '<p>Nowy</p>\r\n', '2028-11-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;