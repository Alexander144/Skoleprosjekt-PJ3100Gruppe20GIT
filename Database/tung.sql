-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2016 at 01:26 PM
-- Server version: 5.6.17
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
-- Table structure for table `comments`
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
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `DocumentID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `File` varchar(100) DEFAULT NULL,
  `projectImage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`DocumentID`),
  KEY `Documents_Project` (`ProjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`DocumentID`, `ProjectID`, `File`, `projectImage`) VALUES
(0, 19, 'project/19/gpa-calculator-with-retake.gif', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `LikeID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `LikeValue` int(11) NOT NULL,
  `Username` int(11) NOT NULL,
  PRIMARY KEY (`LikeID`),
  UNIQUE KEY `Likes_ak_1` (`LikeID`,`Username`),
  UNIQUE KEY `ProjectID` (`ProjectID`,`Username`),
  KEY `Likes_Project` (`ProjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`LikeID`, `ProjectID`, `LikeValue`, `Username`) VALUES
(13, 20, 1, 0),
(14, 19, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `User_id` int(11) NOT NULL,
  `Time` int(11) NOT NULL,
  KEY `login_attempts_User` (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`User_id`, `Time`) VALUES
(1, 1456353947);

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `PictureID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  PRIMARY KEY (`PictureID`),
  KEY `Pictures_Project` (`ProjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`PictureID`, `ProjectID`, `Picture`) VALUES
(1, 19, 'project/19/curriculum-vitae---complete.jpg'),
(2, 20, 'project/20/colorsgame.png'),
(3, 19, 'project/20/colorsgame.png'),
(4, 20, 'project/20/colorsgame.png'),
(5, 19, 'project/20/colorsgame.png'),
(6, 19, 'project/20/colorsgame.png'),
(7, 19, 'project/20/colorsgame.png'),
(8, 20, 'project/20/colorsgame.png'),
(9, 19, 'project/19/curriculum-vitae---complete.jpg'),
(10, 20, 'project/20/colorsgame.png'),
(11, 19, 'project/19/curriculum-vitae---complete.jpg'),
(12, 20, 'project/20/samplegrading-sheet-1-728.jpg'),
(13, 19, 'project/19/curriculum-vitae---complete.jpg'),
(14, 20, 'project/20/colorsgame.png'),
(15, 19, 'project/19/colorsgame.png'),
(16, 19, 'project/19/gjensidige.png'),
(17, 20, 'project/20/colorsgame.png'),
(18, 19, 'project/19/gjensidige.png'),
(19, 20, 'project/20/colorsgame.png'),
(20, 19, 'project/20/colorsgame.png'),
(21, 19, 'project/20/colorsgame.png'),
(22, 19, 'project/19/gjensidige.png'),
(23, 19, 'project/19/gjensidige.png'),
(24, 19, 'project/19/gjensidige.png'),
(25, 19, 'project/19/gjensidige.png'),
(26, 19, 'project/19/gjensidige.png'),
(27, 19, 'project/19/gjensidige.png');

-- --------------------------------------------------------

--
-- Table structure for table `project`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectID`, `Subject`, `AboutProject`, `Creator`, `Date`, `NumberOfParticipants`, `Name`) VALUES
(18, '', '', 1, '2016-02-24 22:49:25', 0, ''),
(19, 'Design', 'Ett prosjekt der eg redesigna websiden til Gjensidige.', 3, '2016-03-04 10:31:30', 0, 'Gjensidige'),
(20, 'Spill', 'Fargespill tilpasset mobil. Du kan spille alene eller mot venner.', 3, '2016-03-04 10:35:05', 0, 'Spill'),
(21, 'Webside', 'Vi samarbeida med VG for redesign av deira webside.', 3, '2016-03-04 10:41:43', 0, 'vg.no'),
(22, 'App.', 'Tekst tekst', 3, '2016-03-11 11:17:34', 0, 'Spill'),
(23, 'Prog.', 'hshdhdd', 3, '2016-03-11 11:36:14', 0, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Salt` char(128) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Unic` (`Username`,`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Email`, `Password`, `Salt`) VALUES
(1, 'Alexander144', 'Alexan2405@gmail.com', '1a86fe1115e39f74778f5b91448fe0ce10a059b88952445bafc7abb256ef973a527cb9846d6709a9641933e9df8c9e309b0c4084a60f926cd7d98a92698c48ce', '98aee7c518fa68e975d9410ba780e6aa86f5097a5f693a6a3525311ac65c70a2eb491ba1f27236729d3900d890ad673b52592f044f9dc8de2f7108df67b43001'),
(2, 'lol', 'lol@gmail.com', '390d30b368b43d3b9204cc18fcf78a11fb543bd29fee2c5e9098723f84bf4cf3061b533c97cdba6e2d6ea3cc90b8acf393ec2d43739a40d0e0790ce59efaf6bb', '38938830865cb32970646ec22c13bc29f80b57f6aa881ea78ae36cd32b4a23bc148b5db0ebdd9781ac7a4205e8506fd463a481485d71b94c522577e871dd1b37'),
(3, 'uranat14', 'uranes743@hotmail.com', '42489407d050a83bbf62ea28e66cc9c7579d0d62ac76a94a5eda5d9b5a52a8d85192809de3fc1862859de008bd0a456f59f58ef994ef93b9038cf61185c2d964', '3431304928cee19a8a379fde46938cb649a251c73a08333c14f8f5b742e5c5e7a3c371f40fe9abfc80912d410f7193ec0ba25dad810ccd3b8630ebf4c8f41550');

--
-- Triggers `user`
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
-- Table structure for table `userinproject`
--

CREATE TABLE IF NOT EXISTS `userinproject` (
  `ProjectID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Role` varchar(12) NOT NULL DEFAULT 'Ikke Valgt',
  UNIQUE KEY `OneProject` (`ProjectID`,`UserID`),
  KEY `userAccount_user` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinproject`
--

INSERT INTO `userinproject` (`ProjectID`, `UserID`, `Role`) VALUES
(18, 1, ''),
(18, 2, ''),
(19, 3, ''),
(20, 3, ''),
(21, 3, ''),
(22, 3, ''),
(23, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE IF NOT EXISTS `userprofile` (
  `UserID` int(11) NOT NULL,
  `Picture` blob,
  `AboutUser` text,
  `CV` varchar(64) DEFAULT NULL,
  `PictureName` varchar(64) NOT NULL,
  `Grades` varchar(100) DEFAULT NULL,
  KEY `userInfo_User` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`UserID`, `Picture`, `AboutUser`, `CV`, `PictureName`, `Grades`) VALUES
(1, NULL, '', NULL, '', NULL),
(2, NULL, NULL, NULL, '', NULL),
(3, NULL, 'Studerer Interaktivt design ved Westerdals Oslo ACT.\r\n\r\n<br><br>\r\n\r\nEr interessert i en deltidsjobb ved siden av studiene.', 'cv_students/3/curriculum-vitae---complete.jpg', 'images/3/IMG_20151026_075615rc.jpg', 'grades_students/3/samplegrading-sheet-1-728.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `videolink`
--

CREATE TABLE IF NOT EXISTS `videolink` (
  `VideoLinkID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectID` int(11) NOT NULL,
  `YoutubeLink` varchar(128) NOT NULL,
  PRIMARY KEY (`VideoLinkID`),
  KEY `VideoLink_Project` (`ProjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `videolink`
--

INSERT INTO `videolink` (`VideoLinkID`, `ProjectID`, `YoutubeLink`) VALUES
(37, 19, 'SPdA12G3nHE'),
(40, 19, '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Comments_Project` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `Documents_Project` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `Likes_Project` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Constraints for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD CONSTRAINT `login_attempts_User` FOREIGN KEY (`User_id`) REFERENCES `user` (`ID`);

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `Pictures_Project` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

--
-- Constraints for table `userinproject`
--
ALTER TABLE `userinproject`
  ADD CONSTRAINT `UserAccount_Prosject` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`),
  ADD CONSTRAINT `userAccount_user` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD CONSTRAINT `userInfo_User` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `videolink`
--
ALTER TABLE `videolink`
  ADD CONSTRAINT `VideoLink_Project` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
