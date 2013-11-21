-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 21 Novembre 2013 à 19:17
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `sitevote`
--

-- --------------------------------------------------------

--
-- Structure de la table `sitevote_subject`
--

CREATE TABLE IF NOT EXISTS `sitevote_subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_design` varchar(20) NOT NULL,
  `subject_vote` int(11) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `sitevote_user`
--

CREATE TABLE IF NOT EXISTS `sitevote_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(20) NOT NULL,
  `user_password` varchar(20) CHARACTER SET utf32 NOT NULL,
  `user_ip` varchar(15) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table d''informations sur les utilisateurs' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
