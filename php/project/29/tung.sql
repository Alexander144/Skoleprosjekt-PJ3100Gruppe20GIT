-- phpMyAdmin SQL Dump
-- version 3.4.1
-- http://www.phpmyadmin.net
--
-- Vert: mysql.nith.no
-- Generert den: 18. Apr, 2016 17:10 PM
-- Tjenerversjon: 5.5.47
-- PHP-Versjon: 5.4.45-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `larale14`
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
  `LikeID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `LikeValue` int(11) NOT NULL,
  `Username` varchar(11) NOT NULL,
  PRIMARY KEY (`LikeID`),
  UNIQUE KEY `LikesOne` (`Username`,`ProjectID`),
  UNIQUE KEY `ProjectID` (`ProjectID`,`Username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dataark for tabell `likes`
--

INSERT INTO `likes` (`LikeID`, `ProjectID`, `LikeValue`, `Username`) VALUES
(78, 26, 1, 'Alexander14'),
(80, 26, 1, 'Larale14'),
(82, 26, 1, 'dalsar14'),
(85, 27, 1, 'Alexander14'),
(86, 27, 1, 'agetest'),
(88, 26, 1, 'agetest'),
(96, 28, 1, 'Alexander14'),
(99, 26, 1, 'atle'),
(103, 27, 1, 'atle'),
(104, 28, 1, 'atle'),
(105, 26, 1, 'flora'),
(106, 29, 1, 'Alexander14'),
(113, 30, 1, 'Alexander14'),
(115, 31, 1, 'Alexander14'),
(120, 32, 1, 'Alexander14');

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
(11, 1457718424),
(18, 1457767855),
(11, 1460979223),
(11, 1460979234),
(11, 1460983233),
(11, 1460983242),
(11, 1460991642),
(11, 1460991652),
(11, 1460991659);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `PictureID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `Picture` varchar(64) NOT NULL,
  PRIMARY KEY (`PictureID`),
  KEY `Pictures_Project` (`ProjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dataark for tabell `pictures`
--

INSERT INTO `pictures` (`PictureID`, `ProjectID`, `Picture`) VALUES
(1, 27, 'project/27/download.jpeg'),
(2, 27, 'project/27/download.jpeg');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `ProjectID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Subject` text NOT NULL,
  `AboutProject` varchar(500) NOT NULL,
  `Creator` varchar(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NumberOfParticipants` int(11) NOT NULL,
  PRIMARY KEY (`ProjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dataark for tabell `project`
--

INSERT INTO `project` (`ProjectID`, `Name`, `Subject`, `AboutProject`, `Creator`, `Date`, `NumberOfParticipants`) VALUES
(26, 'Make a Robot - Robocode', 'C#', 'Jeg lager en robot.', '11', '2016-03-11 15:44:22', 0),
(27, 'MinAnka', '', 'UndersÃ¸kelse av hur en anka reagerar pÃ¥ vann.', '15', '2016-03-11 18:04:46', 0),
(28, 'Interaktivt', 'Interaktivt', 'Her kommer det en prototype av typen interaktivt design', '17', '2016-03-11 18:30:00', 0),
(29, 'Matlaging', 'Mexicoooo', 'mat', '19', '2016-03-14 19:42:21', 0),
(30, 'Hello', 'supp', 'Jepp', '11', '2016-04-18 11:35:14', 0),
(31, 'test5', '', '', '11', '2016-04-18 12:41:05', 0),
(32, 'test 5', '', '', '11', '2016-04-18 15:01:24', 0);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Salt` char(128) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Unic` (`Username`,`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dataark for tabell `user`
--

INSERT INTO `user` (`ID`, `Username`, `Email`, `Password`, `Salt`) VALUES
(11, 'Alexander144', 'Alexan2405@gmail.com', '051e7120771f4ece596e29ced9c2b9d77af2c011c8908832655be8436a782d0b17a34f3a98e1bb7995a0d3fa6e6d5e34bf7d653d9e5c14d9cc6fbdd93119ac66', 'b5dc82d5667e8a88a9219d548eca7c2b5b8102c590b71c8b1dbf9c5f57c9aed6bb01db8106b8317b22f74b5ea658949bc2546e3457aa7178c367c0658b937c54'),
(14, 'Larale14', 'Larale14@student.westerdals.no', 'c6cbf6715d06a321292b3659f329de8be0dae5ca089bde86ffd1523aad2a9410706a9330c5ee43e34db90bec3827cf519c51b1b8c03d231f4654f1e38f437655', '3cb397c52e7b0e0201d3abdfaffd4934b0f0b776903bac6333aef1ac162f3802ffa11136d90fbbb9e0fa959a2d2b2894cf490a13d185025c0f8286cd582cd31a'),
(15, 'dalsar14', 'dalsar14@student.westerdals.no', 'ef4fd87aa21b9aa58c1770c00bc990fca3fa659279fb1c00e05eff6f115d20c8430ebcee74c1a3e3262fb65bb15971ab857890d6a3584b3c66e20c912508dc75', 'e7caee704180712d30e93bce76df1a8160a44da64ff2274571f87a0d634d6d8378c62c095eb178cbdedd2c99a6ab0dc401e6738383b3a9857235ad245ba36ac1'),
(16, 'kriage14', 'kriage14@westerdals.student.com', '07eb29780d6ccba29578cac95876a3927730b35d48cb80ff2472238b65caafc31413ad1632d0580a60abba31f3826af4671e107ac3a855e90109ad2358b493ab', '1a75386b8eaa79b974f2e54b7cd3039c20a6e90bed1c766a777b2d0f68aa0b029cb4428b8a73e0aff9519868aa5ca5ea24b108965fb1ef71c0a2991ac96db46c'),
(17, 'agetest', 'agetest@test.com', '5ee0223c9547dcf3977a9a1a7baec07771fd4dd677c7d8c325f61f4e83bf2ed5ed5aee98ed4e1232986f072e0820863e352ec180e87bc397df812feacf0055da', 'f5ea201f3837f799d118508e6edd720053c187ba656806f6e973662baf09f972831ead4e6105bf303f209758b46b47977cfc0fdbb6415896e854bfec388f6666'),
(18, 'atle', 'atle.nyrud.johansen@gmail.com', '85092632c1fe81533b2ef9edba4601c3144ca3b37fe5f900573561f55267921c7c65eaf0ae6d45e964627deeacc03c345d9cdfac5651d7f6b4cabe28954209e3', 'c0d6e96cd6024fe053106e43627353fc0cb33d682e20d60807336cdc7c2a507b6e231bb4e74ce562776ae7940270881bf3c2ae844e3bffce77f8d66e7a66af05'),
(19, 'flora', 'flora@gmail.com', '0f40ea4073a88dd2ca2e4eb6eb4fa655900ceeca4d86ab53768f0e43ea7761820892c1f08058ae1f58ddfa1d4e7c88f5fa5a3d26e4acfe65e286950a46bb7037', '10924fc6285180ee74710e3cb9b985bd5c825bcf916ac469957568978c3ad94509dea2c51c34873f81a66b4b26c82a450a98dbb2e41ed1633afc109938358eb3');

--
-- Triggere `user`
--
DROP TRIGGER IF EXISTS `AddUserProfile`;
DELIMITER //
CREATE TRIGGER `AddUserProfile` AFTER INSERT ON `user`
 FOR EACH ROW INSERT INTO userprofile
   ( UserID)
   VALUES
   ( NEW.ID)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `userinproject`
--

CREATE TABLE IF NOT EXISTS `userinproject` (
  `ProjectID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Role` varchar(12) NOT NULL,
  UNIQUE KEY `OneProject` (`ProjectID`,`UserID`),
  KEY `userAccount_user` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `userinproject`
--

INSERT INTO `userinproject` (`ProjectID`, `UserID`, `Role`) VALUES
(26, 11, ''),
(27, 15, ''),
(28, 11, ''),
(28, 17, ''),
(29, 11, ''),
(29, 19, ''),
(30, 11, ''),
(31, 11, ''),
(32, 11, '');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `userprofile`
--

CREATE TABLE IF NOT EXISTS `userprofile` (
  `UserID` int(11) NOT NULL,
  `Picture` blob,
  `AboutUser` text,
  `CV` varchar(64) DEFAULT NULL,
  `PictureName` varchar(64) NOT NULL,
  `Grades` varchar(64) NOT NULL,
  KEY `userInfo_User` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `userprofile`
--

INSERT INTO `userprofile` (`UserID`, `Picture`, `AboutUser`, `CV`, `PictureName`, `Grades`) VALUES
(11, NULL, 'Hei', NULL, 'images/11/1091100_10151513974277413_586596509_o.jpg', ''),
(14, NULL, NULL, NULL, '', ''),
(15, NULL, NULL, NULL, '', ''),
(16, NULL, NULL, NULL, '', ''),
(17, NULL, 'Ã…ge er en fantastisk kar, han elsker alle og ingen andre er bedre. Jeg vil ikke ha noen likes pÃ¥ mine prosjekter siden jeg er en sjenert fyr.', NULL, '', ''),
(18, NULL, NULL, NULL, '', ''),
(19, NULL, 'jkdnfklasdhjdflskzhd', NULL, 'images/19/StavangerkameratenePresse.jpg', '');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `videolink`
--

CREATE TABLE IF NOT EXISTS `videolink` (
  `VideoLinkID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `YoutubeLink` varchar(128) NOT NULL,
  PRIMARY KEY (`VideoLinkID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dataark for tabell `videolink`
--

INSERT INTO `videolink` (`VideoLinkID`, `ProjectID`, `YoutubeLink`) VALUES
(4, 27, ''),
(5, 27, ''),
(6, 28, 'gYeAscy46HA');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
