-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Lun 28 Octobre 2013 à 14:35
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `globalsun`
--

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `sexe` text,
  `date_insccription` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `nom`, `prenom`, `email`, `sexe`, `date_insccription`) VALUES
(1, 'Zorro', 'toto', 'zorro@toto.fr', 'h', '2013-10-23'),
(3, 'Mitterand', 'FranÃ§ois', 'mimi@chaudlapin.com', 'h', '2013-10-03'),
(5, 'Pompidou', 'Georges', 'pompom@france.fr', 'h', '2013-10-03'),
(6, 'Chirac', 'Bernadette', 'berbert@retraite.fr', 'f', '2004-10-19'),
(7, 'De Gaulle', 'Charles', 'charles@cimetiere.fr', 'h', '2012-01-25'),
(8, 'Coti', 'RenÃ©', 'cotcot@codac.com', 'h', '0000-00-00'),
(9, 'Tiefen', 'Ã©lÃ©phant', 'hulu@gmail.com', 'h', '2013-10-24'),
(10, 'monaco', 'Caroline', 'caca@monaco.fr', 'f', '2013-10-23');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `login`, `password`) VALUES
(1, 'toto', 'titi'),
(2, 'zorro', 'diego');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
