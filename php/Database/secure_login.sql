-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26. Nov, 2015 10:40 a.m.
-- Server-versjon: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `secure_login`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(2, '1448529703');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dataark for tabell `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`) VALUES
(1, 'test_user', 'test@example.com', '00807432eae173f652f2064bdca1b61b290b52d40e429a7d295d76a71084aa96c0233b82f1feac45529e0726559645acaed6f3ae58a286b9f075916ebf66cacc', 'f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef'),
(2, 'Alexander144', 'Alexan2405@gmail.com', 'b5de486fb9bb3f7c7105ba84683c6c0f2e21405a6e8241e59e0add3efc3d8f9167b7890bf1254f48cb9f68bac1edbd371f96ab8d90eb9ae90f8240636fea16a7', 'a709f9f1d75afc5e36a5ebfbb8d772a3fb34e7b575080e69195d612f1f311a692c9cedd04316fe3d8ff330d3eff3bc3efd68703be255a88adf854df04fa3ad09');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `ProsjectID` int(11) NOT NULL AUTO_INCREMENT,
  `UserAccount_User_UserID` int(11) NOT NULL,
  `Subject` text NOT NULL,
  PRIMARY KEY (`ProsjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `projectinfo`
--

CREATE TABLE IF NOT EXISTS `projectinfo` (
  `ProjectName` varchar(40) NOT NULL,
  `Prosject_ProsjectID` int(11) NOT NULL,
  `Pictures` blob,
  `Video` blob,
  `Link` text,
  `Date` date NOT NULL,
  `Info` int(11) DEFAULT NULL,
  `NumberStudent` int(11) NOT NULL,
  PRIMARY KEY (`Prosject_ProsjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `projectpublic`
--

CREATE TABLE IF NOT EXISTS `projectpublic` (
  `ProjectInfo_Prosject_ProsjectID` int(11) NOT NULL,
  `Comments` text NOT NULL,
  `Likes` int(11) NOT NULL,
  PRIMARY KEY (`ProjectInfo_Prosject_ProsjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(99) NOT NULL,
  `Email` varchar(99) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Salt` char(128) NOT NULL,
  PRIMARY KEY (`UserID`,`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `useraccount`
--

CREATE TABLE IF NOT EXISTS `useraccount` (
  `User_UserID` int(11) NOT NULL,
  `User_Email` varchar(99) NOT NULL,
  `Prosject_ProsjectID` int(11) DEFAULT NULL,
  PRIMARY KEY (`User_UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `UserAccount_User_UserID` int(11) NOT NULL,
  `Picture` blob,
  `InfoText` text,
  `Grades` blob,
  `CV` blob,
  PRIMARY KEY (`UserAccount_User_UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
