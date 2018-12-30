-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: 26 mar, 2011 at 02:38 
-- Versione MySQL: 5.5.8
-- Versione PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `magazzino_evo`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `dipendenti`
--

CREATE TABLE IF NOT EXISTS `dipendenti` (
  `id_dipendente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` char(30) NOT NULL,
  `cognome` char(30) NOT NULL,
  PRIMARY KEY (`id_dipendente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50892 ;

--
-- Dump dei dati per la tabella `dipendenti`
--

INSERT INTO `dipendenti` (`id_dipendente`, `nome`, `cognome`) VALUES
(50891, 'alessio', 'ciraci');

-- --------------------------------------------------------

--
-- Struttura della tabella `merci`
--

CREATE TABLE IF NOT EXISTS `merci` (
  `id_merce` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` char(30) NOT NULL,
  `giacenze` int(11) NOT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `modello` varchar(255) DEFAULT NULL,
  `stato` varchar(255) DEFAULT NULL,
  `data_deposito` date NOT NULL,
  `scaffale` int(11) NOT NULL,
  `descrizione` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_merce`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=186 ;

--
-- Dump dei dati per la tabella `merci`
--

INSERT INTO `merci` (`id_merce`, `tipo`, `giacenze`, `marca`, `modello`, `stato`, `data_deposito`, `scaffale`, `descrizione`) VALUES
(125, 'cuffie', 2, 'jabra', 'gn 2000 duo', 'nuovo', '2011-03-25', 2, 'cuffie con adattatore voip usb'),
(126, 'adattatore', 2, 'gn netcom', 'gn 8120', 'nuovo', '2011-03-25', 2, 'adattatore usb voip per cuffie jabra'),
(127, 'cuffie', 64, 'plantronics', '80299-03', 'nuovo', '2011-03-25', 0, 'doppio auricolare, controller usb'),
(128, 'switch', 1, '', '', 'usato', '2011-03-25', 1, 'switch mouse, tastiera, monitor'),
(129, 'switch', 1, '', '', 'usato', '2011-03-26', 1, 'switch mouse, tastiera, monitor x4'),
(130, 'switch', 1, 'lindy', '32084', 'usato', '2011-03-26', 1, 'switch porta parallela'),
(131, 'altro', 1, 'shintek', 'alluminium coling station', 'nuovo', '2011-03-26', 1, 'ventola per notebook'),
(132, 'pc', 1, 'asus', 'Eee Box', 'nuovo', '2011-03-26', 1, 'pc desktop ultra slim '),
(133, 'switch', 1, 'netgear', 'jfs524e', 'nuovo', '2011-03-26', 1, '24 porte fast ethernet switch'),
(134, 'tastiera', 1, 'samsung', '', 'usato', '2011-03-26', 1, 'mini tastiera usb'),
(135, 'walky-talky', 6, 'midland', 'm99', 'nuovo', '2011-03-26', 1, '99 canali, raggio max +10km '),
(136, 'walky-talky', 1, 'midland', 'alan 42', 'usato', '2011-03-26', 1, ''),
(137, 'adattatore', 1, '', '', 'usato', '2011-03-26', 1, 'coassiale -> svideo'),
(138, 'adattatore', 1, '', '', 'nuovo', '2011-03-26', 1, 'usb -> spinotto alimentazione 3 mm'),
(139, 'mouse', 1, 'trust', '', 'nuovo', '2011-03-26', 1, 'mouse bluetooth ottico'),
(140, 'tastiera', 1, 'trust', '', 'nuovo', '2011-03-26', 1, 'tastierino numerico usb'),
(141, 'lettore', 1, 'exagerate', 'exfd2012', 'nuovo', '2011-03-26', 1, 'lettore floppy usb'),
(142, 'hard-disk', 2, 'verbatim', '53018 1tb', 'nuovo', '2011-03-26', 2, 'hdd esterno usb 1tb'),
(143, 'scheda audio', 3, 'eminet', 'pci sound 5.1', 'nuovo', '2011-03-26', 2, 'scheda audio 5.1'),
(144, 'lettore', 1, 'freecom', 'hard drive dock', 'nuovo', '2011-03-26', 2, 'lettore esterno hdd 3.5-2.5'),
(145, 'scheda video', 1, 'sparkle', 'geforce 6200', 'nuovo', '2011-03-26', 2, 'scheda video AGP 8x'),
(146, 'lettore', 2, '', '', 'usato', '2011-03-26', 2, 'lettore floppy'),
(147, 'lettore', 1, 'hp', 'dc361b', 'nuovo', '2011-03-26', 2, 'lettore floppy usb'),
(148, 'modem', 2, 'hamlet', 'isdn 128k', 'nuovo', '2011-03-26', 2, 'modem idsn 128k usb'),
(149, 'lettore', 1, 'adj', 'mlcim04', 'nuovo', '2011-03-26', 2, 'lettore memory card'),
(150, 'scheda video', 1, 'sparkle', '', 'nuovo', '2011-03-26', 2, 'scheda video AGP, uscita vga'),
(151, 'rack', 1, '', 'mobile rack', 'nuovo', '2011-03-26', 2, 'rack per hdd pata'),
(152, 'lettore', 1, 'samsung', 'super-write master', 'nuovo', '2011-03-26', 2, 'masterizzatore dvd esterno'),
(153, 'scheda wireless', 1, 'd-link', 'dwl-520+', 'usato', '2011-03-26', 2, 'scheda di rete wireless'),
(154, 'scheda usb', 1, '', '', 'usato', '2011-03-26', 2, 'scheda espansione porte usb - 4 porte'),
(155, 'scheda audio', 3, 'trust', '', 'usato', '2011-03-26', 2, 'scheda audio 5.1 - game port'),
(156, 'modem', 1, 'trust', '', 'usato', '2011-03-26', 2, 'modem 56k usb'),
(157, 'alimentatore', 3, 'd-link', 'jta0302f-e', 'nuovo', '2011-03-26', 2, '5volt - 3 ampere'),
(159, 'hard-disk', 1, 'maxtor', 'diamond max plus 8', 'guasto', '2011-03-26', 2, 'hdd pata 40gb'),
(160, 'hard-disk', 4, 'maxtor', 'diamond max plus 8', 'usato', '2011-03-26', 2, 'hdd pata 40gb'),
(161, 'hard-disk', 2, 'AT', 'fireball', 'usato', '2011-03-26', 2, 'hdd pata 30gb'),
(162, 'hard-disk', 1, 'maxtor', 'diamond max plus 9', 'usato', '2011-03-26', 2, 'hdd pata 80gb'),
(163, 'hard-disk', 1, 'maxtor', 'diamond max 23', 'usato', '2011-03-26', 2, 'hdd 500gb sata'),
(164, 'firewall', 1, 'd-link', 'dfl-200', 'usato', '2011-03-26', 2, 'firewall'),
(165, 'router', 2, 'd-link', 'dsl-g604t', 'usato', '2011-03-26', 2, 'router wireless'),
(166, 'switch', 1, 'd-link', 'dgs-1008d', 'usato', '2011-03-26', 2, 'switch gigabit'),
(167, 'router', 1, 'd-link', 'dsl-g624t', 'usato', '2011-03-26', 2, 'router wireless adsl2+'),
(168, 'switch', 1, 'hamlet', 'hn05s', 'usato', '2011-03-26', 2, '5 porte 10/100m'),
(170, 'mouse', 5, 'ibm', '', 'usato', '2011-03-26', 2, 'mouse ps2'),
(171, 'mouse', 9, 'tea', '', 'usato', '2011-03-26', 2, 'mouse ps2'),
(172, 'mouse', 1, 'acer', '', 'usato', '2011-03-26', 2, 'mouse ps2'),
(173, 'mouse', 2, 'logitech', '', 'nuovo', '2011-03-26', 2, 'mouse ottico ps2'),
(174, 'cavo', 3, 'logitech', '', 'usato', '2011-03-26', 2, 'usb a -> usb b'),
(175, 'cavo', 6, 'welly pro', '', 'nuovo', '2011-03-26', 2, 'cavo psi'),
(176, 'cavo', 1, 'welly pro', '', 'nuovo', '2011-03-26', 2, 'prolunga vga'),
(177, 'cavo', 1, 'welly pro', '', 'nuovo', '2011-03-26', 2, 'cavo vga'),
(178, 'cavo', 1, '', '', 'nuovo', '2011-03-26', 2, 'cavo doppio jack 3.5 mm'),
(179, 'ram', 5, 'v-data', '', 'usato', '2011-03-26', 2, '256mb - 333 mhz - drr'),
(180, 'ram', 2, 'v-data', '', 'usato', '2011-03-26', 2, '256mb - 266 mhz - drr'),
(181, 'ram', 1, 'a-data', '', 'usato', '2011-03-26', 2, '512mb - 400 mhz - ddr'),
(182, 'ram', 8, 'kingston', '', 'nuovo', '2011-03-26', 2, '1gb - 400mhz - ddr'),
(183, 'ram', 4, 'elpida', '', 'usato', '2011-03-26', 2, '512 mb - 444mhz - ddr2'),
(184, 'ram', 2, 'v-data', '', 'usato', '2011-03-26', 2, '512 mb - 533mhz - ddr2'),
(185, 'ram', 4, 'corsair', '', 'nuovo', '2011-03-26', 2, '1 gb - 533mhz - ddr2');

-- --------------------------------------------------------

--
-- Struttura della tabella `prelievi`
--

CREATE TABLE IF NOT EXISTS `prelievi` (
  `data_prelievo` date NOT NULL,
  `id_dipendente` int(11) NOT NULL,
  `id_merce` int(11) NOT NULL,
  `q_prelevata` int(11) NOT NULL,
  `scorte` varchar(255) NOT NULL,
  `destinazione` varchar(255) NOT NULL,
  `counter` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`counter`),
  UNIQUE KEY `counter` (`counter`),
  KEY `id_dipendente` (`id_dipendente`),
  KEY `id_merce` (`id_merce`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dump dei dati per la tabella `prelievi`
--

INSERT INTO `prelievi` (`data_prelievo`, `id_dipendente`, `id_merce`, `q_prelevata`, `scorte`, `destinazione`, `counter`) VALUES
('2011-03-21', 3, 74, 2, '', '', 42),
('2011-03-21', 3, 74, 2, '', '', 43),
('2011-03-21', 3, 74, 3, '', '', 44),
('2011-03-21', 3, 71, 1, '', '', 45),
('2011-03-21', 3, 70, 1, '', '', 46),
('2011-03-21', 3, 70, 1, '', '', 47),
('2011-03-21', 3, 68, 1, 'terminate', '', 48),
('2011-03-21', 3, 66, 1, '', '', 49),
('2011-03-21', 3, 66, 1, '', '', 50),
('2011-03-21', 3, 66, 5, '', '', 51),
('2011-03-21', 3, 69, 1, '', '', 52),
('2011-03-21', 3, 68, 1, 'terminate', '', 53),
('2011-03-21', 3, 115, 5, '', '', 54),
('2011-03-23', 3, 68, 6, '', '', 55),
('2011-03-23', 3, 68, 6, '', '', 56),
('2011-03-23', 3, 115, 4, '', '', 57),
('2011-03-23', 3, 115, 1, '', '', 58),
('2011-03-23', 3, 119, 1, '1', '', 59),
('2011-03-23', 3, 119, 1, '1', '', 60),
('2011-03-23', 3, 119, 1, '1', '', 61),
('2011-03-23', 3, 119, 1, '1', '', 62),
('2011-03-23', 3, 119, 4, '', '', 63),
('2011-03-23', 3, 119, 1, '', '', 64),
('2011-03-23', 3, 119, 1, '', '', 65),
('2011-03-23', 3, 119, 1, '', '', 66),
('2011-03-23', 3, 119, 2, '', '', 67),
('2011-03-23', 3, 119, 1, '', '', 68),
('2011-03-23', 3, 119, 1, '', '', 69),
('2011-03-23', 3, 119, 1, '', '', 70),
('2011-03-23', 3, 119, 2, '', '', 71),
('2011-03-23', 3, 119, 3, '', '', 72),
('2011-03-23', 3, 119, 1, '', '', 73),
('2011-03-23', 3, 119, 1, '', '', 74),
('2011-03-23', 3, 119, 1, '', '', 75),
('2011-03-23', 3, 119, 1, '', '', 76),
('2011-03-23', 3, 118, 1, '', '', 77),
('2011-03-23', 3, 117, 1, '', '', 78),
('2011-03-23', 3, 116, 1, '', '', 79),
('2011-03-23', 3, 115, 1, '', '', 80),
('2011-03-23', 3, 68, 1, '', '', 81),
('2011-03-23', 3, 68, 9, '', '', 82),
('2011-03-23', 3, 68, 9, '', '', 83),
('2011-03-23', 3, 117, 1, '9', '', 84),
('2011-03-23', 3, 120, 1, '9', '', 85),
('2011-03-23', 3, 120, 9, 'terminate', '', 86),
('2011-03-23', 3, 117, 1, '8', '', 87),
('2011-03-23', 3, 118, 1, '9', '', 88),
('2011-03-24', 3, 121, 5, '2', '', 89),
('2011-03-24', 3, 68, 1, '9', 'postazione 25', 90),
('2011-03-24', 3, 123, 2, '3', 'postazione 25,26', 91),
('2011-03-26', 50891, 142, 1, '2', 'uso personale(massimigliano)', 92);
