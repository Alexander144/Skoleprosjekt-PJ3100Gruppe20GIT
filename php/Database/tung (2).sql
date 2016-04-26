-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26. Apr, 2016 10:01 
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
  `DocumentID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `File` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`DocumentID`),
  KEY `Documents_Project` (`ProjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dataark for tabell `documents`
--

INSERT INTO `documents` (`DocumentID`, `ProjectID`, `File`) VALUES
(36, 33, 'project/33/Git Info.PNG'),
(38, 34, 'project/34/008003-glossy-black-icon-arrows-arrowhead-solid-left.png'),
(39, 34, 'project/34/yubnubandchill.png'),
(53, 35, 'project/35/Booking.PNG'),
(54, 67, 'project/67/Variables.txt'),
(55, 67, 'project/67/bierstadt_1280-800.jpg'),
(56, 67, 'project/67/Booking.PNG'),
(57, 68, 'project/68/008003-glossy-black-icon-arrows-arrowhead-solid-left.png');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `LikeID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `LikeValue` int(11) NOT NULL,
  `Username` varchar(64) NOT NULL,
  PRIMARY KEY (`LikeID`),
  UNIQUE KEY `LikesOne` (`Username`,`ProjectID`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Username_2` (`Username`),
  KEY `Likes_Project` (`ProjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dataark for tabell `likes`
--

INSERT INTO `likes` (`LikeID`, `ProjectID`, `LikeValue`, `Username`) VALUES
(1, 18, 1, '1'),
(2, 35, 1, 'pulings');

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
(1, 1456353947),
(3, 1456919585),
(3, 1456919599),
(6, 1461316421),
(6, 1461579293),
(6, 1461579947);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `PictureID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `Picture` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`PictureID`),
  KEY `Pictures_Project` (`ProjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Dataark for tabell `pictures`
--

INSERT INTO `pictures` (`PictureID`, `ProjectID`, `Picture`) VALUES
(114, 32, 'project/32/Dolan.jpg'),
(115, 32, 'project/32/Git Info.PNG'),
(116, 32, 'project/32/bierstadt_1280-800.jpg'),
(117, 32, 'project/32/Dolan.jpg'),
(118, 67, 'project/67/008003-glossy-black-icon-arrows-arrowhead-solid-left.png'),
(119, 67, 'project/67/008003-glossy-black-icon-arrows-arrowhead-solid-left.png'),
(120, 67, ''),
(121, 67, 'project/67/Booking.PNG'),
(122, 67, ''),
(123, 68, 'project/67/Skjermbilde.PNG'),
(124, 68, ''),
(125, 68, 'project/68/Dolan.jpg'),
(126, 68, 'project/68/Git Info.PNG'),
(127, 68, 'project/68/Git Info.PNG'),
(128, 70, 'project/70/Dolan.jpg');

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
  `Avdeling` varchar(20) NOT NULL,
  PRIMARY KEY (`ProjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dataark for tabell `project`
--

INSERT INTO `project` (`ProjectID`, `Subject`, `AboutProject`, `Creator`, `Date`, `NumberOfParticipants`, `Name`, `Avdeling`) VALUES
(18, '', '', 1, '2016-02-24 22:49:25', 0, '', ''),
(19, 'PHP', 'Hei her har du php prosjekt', 4, '2016-03-07 11:30:10', 0, 'Test', ''),
(20, 'Interaktivt', 'YOYO', 4, '2016-03-08 11:25:55', 0, 'PHP', ''),
(21, 'koolboy', 'Hei lol', 4, '2016-03-08 11:28:37', 0, 'Lol', ''),
(22, 'asdasd', 'asdasdas', 4, '2016-03-11 10:58:07', 0, 'kkkkk', ''),
(23, 'interaktivt', 'Hei hei her kommer prosjekt beskrivelsem', 3, '2016-03-11 11:23:58', 0, 'hei', ''),
(24, 'ads', 'asd', 3, '2016-04-20 10:40:20', 0, 'asd', ''),
(25, 'ads', 'asd', 3, '2016-04-20 10:40:32', 0, 'asd', ''),
(26, 'asd', 'asd', 3, '2016-04-20 10:40:40', 0, 'asd', ''),
(27, 'kuk', 'asdasdasdasd', 3, '2016-04-20 10:42:10', 0, 'teknologi', ''),
(28, 'Avdeling test', '', 3, '2016-04-20 10:44:28', 0, 'Avdeling test', ''),
(29, 'You only Yolo Once', 'Yolo', 3, '2016-04-20 10:51:43', 0, 'peniskringle', ''),
(30, '', '', 3, '2016-04-20 10:53:00', 0, 'anuskringle', ''),
(31, 'lol', 'kuk', 3, '2016-04-20 10:54:05', 0, 'anus', ''),
(32, 'TestKrapyl', 'HER ER INFO OM PROSJEKT TEST', 3, '2016-04-21 11:52:05', 0, 'Test', 'Teknologi'),
(33, 'Krepering', 'Krapylet sin test', 6, '2016-04-22 08:20:33', 0, 'Krapyl', 'Kommunikasjon'),
(34, '', '', 6, '2016-04-22 08:40:34', 0, 'krapyl2', 'Teknologi'),
(35, 'pj', 'eqwasdasdads', 6, '2016-04-22 08:57:31', 0, 'test Prosjekt', 'Teknologi'),
(49, '', '', 6, '2016-04-25 10:37:06', 0, '', 'Teknologi'),
(66, '', '', 6, '2016-04-25 11:25:55', 0, 'Mitt', 'Teknologi'),
(67, '', '', 6, '2016-04-25 11:46:48', 0, '', 'Teknologi'),
(68, '', '', 6, '2016-04-25 12:51:34', 0, 'lol', 'Teknologi'),
(69, '', '', 6, '2016-04-25 13:02:34', 0, 'hello', 'Teknologi'),
(70, 'Matlaging', 'Hey mine sÃ¸nner, det her er mor asdasda', 8, '2016-04-26 07:22:53', 0, 'mamma', 'Ledelse');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dataark for tabell `user`
--

INSERT INTO `user` (`ID`, `Username`, `Email`, `Password`, `Salt`) VALUES
(1, 'Alexander144', 'Alexan2405@gmail.com', '1a86fe1115e39f74778f5b91448fe0ce10a059b88952445bafc7abb256ef973a527cb9846d6709a9641933e9df8c9e309b0c4084a60f926cd7d98a92698c48ce', '98aee7c518fa68e975d9410ba780e6aa86f5097a5f693a6a3525311ac65c70a2eb491ba1f27236729d3900d890ad673b52592f044f9dc8de2f7108df67b43001'),
(2, 'lol', 'lol@gmail.com', '390d30b368b43d3b9204cc18fcf78a11fb543bd29fee2c5e9098723f84bf4cf3061b533c97cdba6e2d6ea3cc90b8acf393ec2d43739a40d0e0790ce59efaf6bb', '38938830865cb32970646ec22c13bc29f80b57f6aa881ea78ae36cd32b4a23bc148b5db0ebdd9781ac7a4205e8506fd463a481485d71b94c522577e871dd1b37'),
(3, 'age', 'lol@lol.com', 'd29055260ad2216655e4fcfcc2a5a9893c0ae871cc403f01016263fb8d67e6403746a7b6b0372d2f5f9335fb303a247101497908182dabd193b54b1ebc68c788', '00c3de022ebc09981dbcab982552fcd038ecb482eab22eabaa4885a0e8d4dfffed7572c6dba3852373b3c807e27ddff51abfd4c7b0e019036e5833478f96a282'),
(4, 'kriage14', 'lol@lola.com', '63bdb66d375dea2bb29c845eebf257c7cdff820a0d61491b2a13ad605f06fe9d427d5e8eefba64dc46a7f315fe59876a361fde7297345dc772f63f5ef4171c28', '6bc0d8df2980a4ea7c83b91775ca6c28e6c813c5e862614d91914e9f70b03598a9910de0d66ac96a9cc786b8267198f9c74bd426834301c4ddf98f5f3ae8a4e2'),
(5, 'krapyl', 'krapylet@krapyl.com', '1d54e3816840258bf333ce7f99791645d39495f269325795cf2965ad813f39d5e32b99efdced7d202c7acbcbedadafb73025f4f5e77ab27ea40fc5b59e3b219c', 'db644b45430a908b8b54d6df5aa5310b19bc21eb658c6b2b5c30b169f390ba1af25b34aad0178db6f55a78bc5604698dc1f3743c19b1bb2d2e5ebf1c6848712c'),
(6, 'pulings', 'test@krapyl.krapylet.no', '761ee4b472623e337e1200e9de11b9bd680d164fd0cc247074bb03cf56d717736015b93ff85bcd8e0f68ea6af67ee6ef2a1dcf42feca5616cacca6b92fe22c67', '8e3f7ddc1413390b85fdd4809b429a096cf67a7921d8506f76f009845d348d6fd84e7bfdb6d923c7bab8b688afcb8ed929e1efc99bd330be0422cf5272ae21ea'),
(7, 'toget', 'ageakristiansen@gmail.com', 'bd60d2253f8321937a57bc2037f3f80f80e0cfc059bc31ced03e121ab84c00f1148e7f6c6f02a6200eba630e96cbd93540db90981755bb91c89f7c988a618c9b', '309380f1382eeb465700443b2ad90daf4efe7eff96c39189a9d5d9451c93c932769ded8b447856ccbb3cb68f22f2466cae472fcd36416b93f9b55114aea22e6f'),
(8, 'mamma', 'mammemail@mail.com', 'eb6b4c5eb85149b79e7b662a176103b198a457c35a0ec7a747ab8082067fc33be17b6a939997278d5387900259ca57ddb3efbc6841ccb9ae138fb2437321e775', '7639f1543e1fde21f90e7d03ac84b5833b07da420895331503c153f5b75126ea59ce5a04fc2a29212c7469dc5e70d2025da31a1cda1567e2d1d422e056f929e4');

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
(18, 2, ''),
(19, 4, ''),
(20, 4, ''),
(20, 5, ''),
(21, 2, ''),
(21, 4, ''),
(22, 4, ''),
(23, 3, ''),
(24, 3, ''),
(25, 3, ''),
(26, 3, ''),
(27, 3, ''),
(31, 3, ''),
(32, 3, ''),
(33, 2, ''),
(34, 6, ''),
(35, 2, ''),
(35, 4, ''),
(35, 6, ''),
(66, 2, ''),
(66, 6, ''),
(67, 2, ''),
(67, 6, ''),
(68, 6, ''),
(69, 6, ''),
(70, 2, ''),
(70, 8, '');

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
  `Grades` varchar(100) NOT NULL,
  KEY `userInfo_User` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `userprofile`
--

INSERT INTO `userprofile` (`UserID`, `Picture`, `AboutUser`, `CV`, `PictureName`, `Grades`) VALUES
(1, NULL, '', NULL, '', ''),
(2, NULL, NULL, NULL, '', ''),
(3, '', 'kuk satan', '', 'images/3/Gordonsetter.jpg', 'grades_students/3/Dolan.jpg'),
(4, NULL, 'Ã…ge er en god kar, jobber hardt og beste scrummaster som har eksistert.ugguggugug.hhhjhjhjhjh-jkhkjhk', 'cv_students/4/6843575-bloodhound-wallpaper.jpg', 'images/4/6843575-bloodhound-wallpaper.jpg', 'grades_students/4/Booking.PNG'),
(5, NULL, NULL, NULL, '', ''),
(6, NULL, '', NULL, 'images/6/Gordonsetter.jpg', ''),
(7, NULL, NULL, NULL, '', ''),
(8, NULL, '', NULL, 'images/8/yubnubandchill.png', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dataark for tabell `videolink`
--

INSERT INTO `videolink` (`VideoLinkID`, `ProjectID`, `YoutubeLink`) VALUES
(3, 20, 'iOK283YBsZQ'),
(4, 23, ''),
(5, 27, ''),
(6, 27, ''),
(7, 27, ''),
(8, 27, ''),
(9, 32, 'cU8HrO7XuiE'),
(10, 32, 'AmfAl-Ik5no'),
(11, 35, 'cU8HrO7XuiE');

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
