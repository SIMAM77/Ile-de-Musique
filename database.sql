-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Dim 04 Juin 2017 à 11:43
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `zikoos`
--

-- --------------------------------------------------------

--
-- Structure de la table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `band` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guitar1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` text COLLATE utf8mb4_unicode_ci,
  `img_band` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_guitar1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_bass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_drum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_amp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `content`
--

INSERT INTO `content` (`id`, `type`, `band`, `guitar1`, `bass`, `drum`, `amp`, `commentaire`, `img_band`, `img_guitar1`, `img_bass`, `img_drum`, `img_amp`, `visible`) VALUES
(1, 'Pop', 'Beatles', 'Rickenbacker 325c64', 'Hofner 500/1', 'Ludwig', 'VOX AC30 v2', 'The Beatles est un groupe de musique britannique originaire de Liverpool, composé de John Lennon, Paul McCartney, George Harrison et Ringo Starr. Il demeure, en dépit de sa séparation en 1970, l''un des groupes de rock les plus populaires au monde.', 'img-content/groupes/beatles.jpg', 'img-content/Guitar/rickenbacker.jpg', 'img-content/Bass/245909.jpg', 'img-content/Drum/1133641_27522_popup.jpg', 'img-content/ampli/ac30brn.jpg', 1),
(2, 'Pop', 'Taylor Swift', 'Gibson j200 Standard', 'Fender American Standard Jazz Bass', 'Pearl', 'Fender Acoustasonic 90', 'Taylor Alison Swift, née le 13 décembre 1989 à Reading, en Pennsylvanie, est une auteur-compositrice-interprète et actrice américaine.', 'img-content/groupes/taylor.jpg', 'img-content/Guitar/Gibsonj200.jpg', 'img-content/Bass/fender-american-standard-jazz-bass-v-3-color-sunburst-rosewood.jpg', 'img-content/Drum/batterie-pearl-export-standard-22-red-wine-av.jpg', 'img-content/ampli/2313800000_amp_dtl_004_nr.jpg', 1),
(3, 'Heavy Metal', 'Iron Maiden', 'Fender Stratocaster Dave Murray signature', 'Fender Precision Bass', 'Premier Iron Maiden', 'Marshall AS50 D', 'Iron Maiden est un groupe de heavy metal britannique, originaire de Londres. Le groupe est formé en décembre 1975 par le bassiste Steve Harris et rejoint très rapidement par Dave Murray. ', 'img-content/groupes/iron-maiden.jpg', 'img-content/Guitar/fender-stratocaster-9569.jpg', 'img-content/Bass/12983910_f520.jpg', 'img-content/Drum/Nicko.jpg', 'img-content/ampli/6930322_800.jpg', 1),
(4, 'Heavy Metal', 'Led Zeppelin', 'Gibson Les Paul Gold Top', 'Manson E-Bass', 'Ludwig', 'Orange Thunder 30', 'Led Zeppelin est un groupe de rock britannique fondé en 1968 à Londres par Jimmy Page, avec Robert Plant, John Paul Jones et John Bonham, et dissous à la suite de la mort de ce dernier, en 1980. ', 'img-content/groupes/ledzep.jpg', 'img-content/Guitar/1954gibsonlespaulgoldtop.jpg', 'img-content/Bass/Manson E-Bass Front WEB_0.jpg', 'img-content/Drum/1133641_27522_popup.jpg', 'img-content/ampli/orange-thunder-30_2.jpg', 1),
(5, 'Blues', 'Johnny Cash', 'Gibson ES335 Studio', 'Gibson Firebird', 'Yamaha', 'Marshall JMD102', 'Johnny Cash est un chanteur, guitariste et auteur-compositeur de musique country américain. Il a également pratiqué les styles rock ''n'' roll, rockabilly, blues, folk ou encore gospel.', 'img-content/groupes/johnny-cash.jpg', 'img-content/Guitar/ESSD15WRNH1_CALLOUT_HERO.jpg', 'img-content/Bass/DSF15VSCH1_CALLOUT_HERO.jpg', 'img-content/Drum/batterie-yamaha-pack-gigmaker-standard-22.jpg', 'img-content/ampli/23539.jpg', 1),
(6, 'Blues', 'Buddy Guy', 'Fender Telecaster Malcolm 56', 'Fender Jazz Bass Standard', 'Pearl', 'Orange Thunderverb 50', 'George « Buddy » Guy, né le 30 juillet 1936 à Lettsworth, est un musicien américain de blues et de musique rock. Il est le père de la rappeuse Shawnna.', 'img-content/groupes/buddy.jpg', 'img-content/Guitar/fender-american-standard-telecaster.jpg', 'img-content/Bass/8389822_f520.jpg', 'img-content/Drum//batterie-pearl-export-standard-22-red-wine-av.jpg.jpg', 'img-content/ampli/orange-thunderverb-50.jpg', 1),
(7, 'Grunge', 'Pearl Jam', 'Gibson SG Special Faded', 'Musicman Stingray', 'Paiste', '1959''s Fender Twin Amp', 'Pearl Jam est un groupe de rock américain, originaire de Seattle, ville de l''État de Washington. Formé en 1990, par le guitariste Stone Gossard et le bassiste Jeff Ament, Pearl Jam est l''un des groupes les plus populaires du mouvement grunge : le Big Four of Seattle, aux côtés de Soundgarden, Nirvana et Alice in Chains.', 'img-content/groupes/pearl.jpg', 'img-content/Guitar/gibson-sg-special-faded_2.jpg', 'img-content/Bass/musicman-stingray_2.jpg', 'img-content/Drum/71GuGeafmLL._SX355_.jpg', 'img-content/ampli/03A-FENDER-TWIN-AMP-1959.jpg', 1),
(8, 'Grunge', 'Foo Fighters', 'Gibson ES335 Dave Grohl signature', 'Fender Jazz Bass Studio', 'Tama', 'MESA Triple Rectifier 150W', 'Foo Fighters est un groupe de rock américain, formé à Seattle, Washington. Il est formé en 1994 durant la dissolution de Nirvana, à la suite de la mort de son leader Kurt Cobain. ', 'img-content/groupes/foofighters.jpg', 'img-content/Guitar/xl_60446-tmp63E3.jpg', 'img-content/Bass/fender-jazz-bass-standard-mexique-black.jpg', 'img-content/Drum/71GuGeafmLL._SX355_.jpg', 'img-content/ampli/MESA+MMB-2TR1X-B.jpg', 1),
(9, 'Indie', 'Noah and the Whale', 'Fender Jaguar Special HH', 'SRF 700', 'Ludwig', 'VOX Valvetronic VT80+', 'Noah and the Whale est un groupe de folk rock indie anglais formé à Twickenham en 2006. Il est composé de Charlie Fink (au chant et à la guitare), Tom Hobden (violon et clavier), Matt Owens (guitare basse), Fred Abbott (guitare et clavier) et Michael Petulla (percussions).', 'img-content/groupes/noah.jpg', 'img-content/Guitar/fender-classic-player-jaguar-special-hh.jpg', 'img-content/Bass/ibanez-srf-700-bbf-burst-flat-395962.jpg', 'img-content/Drum/1133641_27522_popup.jpg', 'img-content/ampli/Product_IMG-VT80plus.jpg', 1),
(10, 'Indie', 'The Lumineers', 'Guild Westerly OM240E', 'Gibson Midstown Standard', 'Sonor', 'Marshall MGX 30W', 'The Lumineers est un groupe américain de folk rock originaire de Ramsey, dans le New Jersey. Le groupe est composé de Wesley Schultz au chant et à la guitare, Jeremiah Fraites à la batterie et Neyla Pekarek au violoncelle et au chant.', 'img-content/groupes/lumineers.jpg', 'img-content/Guitar/s-l225.jpg', 'img-content/Bass/DSDC15EBCH3_CALLOUT_HERO.jpg', 'img-content/Drum/sonor-force-3003-265139.jpg', 'img-content/ampli/H76561000001000-00-500x500.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Abonne` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
