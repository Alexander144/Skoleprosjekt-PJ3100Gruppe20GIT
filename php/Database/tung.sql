-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25. Feb, 2016 00:05 a.m.
-- Server-versjon: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tung`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `CommentID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `CommentText` varchar(500) NOT NULL,
  PRIMARY KEY (`CommentID`),
  KEY `Comments_Project` (`ProjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `DocumentID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `File` blob NOT NULL,
  PRIMARY KEY (`DocumentID`),
  KEY `Documents_Project` (`ProjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `LikeID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `LikeValue` int(11) NOT NULL,
  `Username` int(11) NOT NULL,
  PRIMARY KEY (`LikeID`),
  UNIQUE KEY `Likes_ak_1` (`LikeID`,`Username`),
  KEY `Likes_Project` (`ProjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `User_id` int(11) NOT NULL,
  `Time` int(11) NOT NULL,
  KEY `login_attempts_User` (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `login_attempts`
--

INSERT INTO `login_attempts` (`User_id`, `Time`) VALUES
(1, 1456353947);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `PictureID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `Picture` blob NOT NULL,
  PRIMARY KEY (`PictureID`),
  KEY `Pictures_Project` (`ProjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `ProjectID` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(70) NOT NULL,
  `AboutProject` text NOT NULL,
  `Creator` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NumberOfParticipants` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  PRIMARY KEY (`ProjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dataark for tabell `project`
--

INSERT INTO `project` (`ProjectID`, `Subject`, `AboutProject`, `Creator`, `Date`, `NumberOfParticipants`, `Name`) VALUES
(18, '', '', 1, '2016-02-24 22:49:25', 0, '');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Salt` char(128) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Unic` (`Username`,`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dataark for tabell `user`
--

INSERT INTO `user` (`ID`, `Username`, `Email`, `Password`, `Salt`) VALUES
(1, 'Alexander144', 'Alexan2405@gmail.com', '1a86fe1115e39f74778f5b91448fe0ce10a059b88952445bafc7abb256ef973a527cb9846d6709a9641933e9df8c9e309b0c4084a60f926cd7d98a92698c48ce', '98aee7c518fa68e975d9410ba780e6aa86f5097a5f693a6a3525311ac65c70a2eb491ba1f27236729d3900d890ad673b52592f044f9dc8de2f7108df67b43001'),
(2, 'lol', 'lol@gmail.com', '390d30b368b43d3b9204cc18fcf78a11fb543bd29fee2c5e9098723f84bf4cf3061b533c97cdba6e2d6ea3cc90b8acf393ec2d43739a40d0e0790ce59efaf6bb', '38938830865cb32970646ec22c13bc29f80b57f6aa881ea78ae36cd32b4a23bc148b5db0ebdd9781ac7a4205e8506fd463a481485d71b94c522577e871dd1b37');

--
-- Triggere `user`
--
DROP TRIGGER IF EXISTS `AddUserProfile`;
DELIMITER //
CREATE TRIGGER `AddUserProfile` AFTER INSERT ON `user`
 FOR EACH ROW INSERT INTO UserProfile
  ( UserID)
  VALUES
  ( NEW.id)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `userinproject`
--

CREATE TABLE IF NOT EXISTS `userinproject` (
  `ProjectID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Role` varchar(12) NOT NULL DEFAULT 'Ikke Valgt',
  UNIQUE KEY `OneProject` (`ProjectID`,`UserID`),
  KEY `userAccount_user` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `userinproject`
--

INSERT INTO `userinproject` (`ProjectID`, `UserID`, `Role`) VALUES
(18, 1, ''),
(18, 2, '');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `userprofile`
--

CREATE TABLE IF NOT EXISTS `userprofile` (
  `UserID` int(11) NOT NULL,
  `Picture` blob,
  `AboutUser` text,
  `CV` blob,
  KEY `userInfo_User` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `userprofile`
--

INSERT INTO `userprofile` (`UserID`, `Picture`, `AboutUser`, `CV`) VALUES
(1, NULL, '', NULL),
(2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `videolink`
--

CREATE TABLE IF NOT EXISTS `videolink` (
  `VideoLinkID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `YoutubeLink` varchar(128) NOT NULL,
  PRIMARY KEY (`VideoLinkID`),
  KEY `VideoLink_Project` (`ProjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Begrensninger for dumpede tabeller
--

--
-- Begrensninger for tabell `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Comments_Project` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Begrensninger for tabell `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `Documents_Project` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Begrensninger for tabell `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `Likes_Project` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Begrensninger for tabell `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD CONSTRAINT `login_attempts_User` FOREIGN KEY (`User_id`) REFERENCES `user` (`ID`);

--
-- Begrensninger for tabell `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `Pictures_Project` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Begrensninger for tabell `userinproject`
--
ALTER TABLE `userinproject`
  ADD CONSTRAINT `UserAccount_Prosject` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`),
  ADD CONSTRAINT `userAccount_user` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Begrensninger for tabell `userprofile`
--
ALTER TABLE `userprofile`
  ADD CONSTRAINT `userInfo_User` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Begrensninger for tabell `videolink`
--
ALTER TABLE `videolink`
  ADD CONSTRAINT `VideoLink_Project` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
