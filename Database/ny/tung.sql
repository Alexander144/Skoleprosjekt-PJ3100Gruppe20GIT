-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2016 at 01:00 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tung`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `CommentText` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `DocumentID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `File` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`DocumentID`, `ProjectID`, `File`) VALUES
(0, 19, 0x70726f6a6563742f31392f544b323130305f656b73616d656e666f7262726564656c7365722e646f6378);

-- --------------------------------------------------------

--
-- Table structure for table `Likes`
--

CREATE TABLE `Likes` (
  `LikeID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `LikeValue` int(11) NOT NULL,
  `Username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Likes`
--

INSERT INTO `Likes` (`LikeID`, `ProjectID`, `LikeValue`, `Username`) VALUES
(1, 18, 1, 'Nikoline'),
(4, 19, 1, 'Nikoline'),
(6, 20, 1, 'Nikoline'),
(7, 21, 1, 'Nikoline'),
(8, 22, 1, 'Nikoline'),
(9, 23, 1, 'Nikoline'),
(10, 26, 1, 'Nikoline'),
(11, 27, 1, 'Nikoline'),
(12, 24, 1, 'Nikoline'),
(13, 25, 1, 'Nikoline'),
(14, 55, 1, 'Nikoline'),
(15, 56, 1, 'Nikoline'),
(16, 57, 1, 'Nikoline'),
(17, 54, 1, 'Nikoline'),
(18, 53, 1, 'Nikoline'),
(19, 31, 1, 'Nikoline'),
(21, 32, 1, 'Nikoline'),
(22, 40, 1, 'Nikoline'),
(25, 28, 1, 'Nikoline'),
(26, 41, 1, 'Nikoline'),
(27, 19, 1, 'elsmar14');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `User_id` int(11) NOT NULL,
  `Time` int(11) NOT NULL
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

CREATE TABLE `pictures` (
  `PictureID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `Picture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ProjectID` int(11) NOT NULL,
  `Subject` varchar(70) NOT NULL,
  `AboutProject` text NOT NULL,
  `Creator` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NumberOfParticipants` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectID`, `Subject`, `AboutProject`, `Creator`, `Date`, `NumberOfParticipants`, `Name`) VALUES
(18, '', '', 1, '2016-02-24 22:49:25', 0, ''),
(19, 'dsd', 'fdfdafdf', 3, '2016-03-03 09:26:54', 0, 'lol'),
(20, '', '', 3, '2016-03-03 10:15:36', 0, 'Marthe'),
(21, '', '', 3, '2016-03-03 10:15:45', 0, 'Alex'),
(22, '', '', 3, '2016-03-03 10:29:39', 0, 'Natalie'),
(23, '', 'hahhaaaaa', 3, '2016-03-08 09:35:09', 0, 'Heihei'),
(24, '', 'hahhaaaaa', 3, '2016-03-08 09:35:25', 0, 'Heihei'),
(25, 'Interaksjonsdesign', 'Dette er for en testtest.', 4, '2016-03-09 05:17:27', 0, 'Nikoline'),
(26, 'Scrum', 'Scrum is an Agile framework for completing complex projects.', 4, '2016-03-09 05:18:30', 0, 'Nikoline'),
(27, '', '', 3, '2016-03-09 11:01:11', 0, ''),
(28, 'Historie', 'Quiz har en historie helt tilbake til steinalderen.', 4, '2016-03-10 08:31:35', 0, 'Alle'),
(29, '', '', 4, '2016-03-10 09:28:52', 0, 'Marmar'),
(30, '', '', 4, '2016-03-10 09:28:59', 0, 'Kaffi'),
(31, '', '', 4, '2016-03-10 10:03:42', 0, 'Goddis'),
(32, '', '', 4, '2016-03-10 10:14:34', 0, 'FaceLikeTesttest'),
(33, '', '', 4, '2016-03-10 10:14:39', 0, 'Again'),
(34, '', '', 4, '2016-03-10 10:14:42', 0, 'Melk'),
(35, '', '', 4, '2016-03-10 10:18:38', 0, 'Bodum'),
(36, '', '', 4, '2016-03-10 10:20:52', 0, 'Skaller'),
(37, '', '', 4, '2016-03-10 10:30:19', 0, 'Kevin'),
(38, '', '', 4, '2016-03-10 10:30:23', 0, 'Ã…ge'),
(39, '', '', 4, '2016-03-10 10:30:27', 0, 'Daniel'),
(40, '', '', 4, '2016-03-10 10:44:29', 0, 'Heeeei bloggen'),
(41, '', '', 4, '2016-03-10 10:46:33', 0, 'Rebecca Minkoff'),
(42, '', '', 4, '2016-03-10 11:31:57', 0, 'Pizza'),
(43, '', '', 4, '2016-03-10 11:32:32', 0, 'Php'),
(44, '', '', 4, '2016-03-10 11:32:57', 0, 'Web'),
(45, '', '', 4, '2016-03-10 11:34:36', 0, '.........'),
(46, '', '', 4, '2016-03-10 11:37:00', 0, 'Per'),
(47, '', '', 4, '2016-03-10 11:38:00', 0, 'LOL'),
(48, '', '', 4, '2016-03-10 11:38:04', 0, 'Hei'),
(49, '', '', 4, '2016-03-10 11:38:07', 0, '5'),
(50, '', '', 4, '2016-03-10 11:39:55', 0, 'Nathalie'),
(51, '', '', 4, '2016-03-10 11:40:07', 0, 'Heihei'),
(52, '', '', 4, '2016-03-10 11:40:10', 0, '5'),
(53, '', '', 4, '2016-03-10 11:40:13', 0, '3'),
(54, '', '', 4, '2016-03-10 12:00:07', 0, 'Marthe'),
(55, '', '', 4, '2016-03-10 12:00:33', 0, 'Elsrud'),
(56, '', '', 4, '2016-03-10 12:00:36', 0, 'Nikoline'),
(57, '', '', 4, '2016-03-10 12:00:44', 0, 'elsmarr');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Salt` char(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Email`, `Password`, `Salt`) VALUES
(1, 'Alexander144', 'Alexan2405@gmail.com', '1a86fe1115e39f74778f5b91448fe0ce10a059b88952445bafc7abb256ef973a527cb9846d6709a9641933e9df8c9e309b0c4084a60f926cd7d98a92698c48ce', '98aee7c518fa68e975d9410ba780e6aa86f5097a5f693a6a3525311ac65c70a2eb491ba1f27236729d3900d890ad673b52592f044f9dc8de2f7108df67b43001'),
(2, 'lol', 'lol@gmail.com', '390d30b368b43d3b9204cc18fcf78a11fb543bd29fee2c5e9098723f84bf4cf3061b533c97cdba6e2d6ea3cc90b8acf393ec2d43739a40d0e0790ce59efaf6bb', '38938830865cb32970646ec22c13bc29f80b57f6aa881ea78ae36cd32b4a23bc148b5db0ebdd9781ac7a4205e8506fd463a481485d71b94c522577e871dd1b37'),
(3, 'elsmar14', 'elsmar14@student.westerdals.no', 'f6d821d56827e177e036a4159ac1c4b96b9487e14993a0c5d122e53d2d75881ca35cff05d2beeaaa78a393bf1d656755a5edb6f6a0e777a317b264a65f86e7dc', '81625ff803a51227994c40dcecbdfd7446f91fe876c0f6de85b07a8707eeb1e04f483f0908d4234c54694845fd8c9d8bc5d1cc4d8c04f8c158166fed16418255'),
(4, 'Nikoline', 'martheelsrud@hotmail.no', '1563febfc206410ffbd170d9d68f3d87102503ede96d36d384ab4eb00fdc0ff387a8ca3d3c47dea7ef772e7117ccbccb6cd6f4ae331a8946d9e4735a7c8fd001', '88cc2b3a509afbc8e5e4768536025cd60b239b707017aeaed677d2b43829bf54b4aaf74a03eff29fdca0823648c37184afdf46ec16e4925085a1ed856242e827');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `AddUserProfile` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO UserProfile
  ( UserID)
  VALUES
  ( NEW.id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `userinproject`
--

CREATE TABLE `userinproject` (
  `ProjectID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Role` varchar(12) NOT NULL DEFAULT 'Ikke Valgt'
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
(23, 3, ''),
(24, 3, ''),
(25, 3, ''),
(25, 4, ''),
(26, 4, ''),
(27, 3, ''),
(28, 3, ''),
(28, 4, ''),
(29, 4, ''),
(30, 4, ''),
(31, 4, ''),
(32, 4, ''),
(33, 4, ''),
(34, 4, ''),
(35, 4, ''),
(36, 4, ''),
(37, 4, ''),
(38, 4, ''),
(39, 4, ''),
(40, 4, ''),
(41, 4, ''),
(42, 4, ''),
(43, 4, ''),
(44, 4, ''),
(45, 4, ''),
(46, 4, ''),
(47, 4, ''),
(48, 4, ''),
(49, 4, ''),
(50, 4, ''),
(51, 4, ''),
(52, 4, ''),
(53, 4, ''),
(54, 4, ''),
(55, 4, ''),
(56, 4, ''),
(57, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `UserID` int(11) NOT NULL,
  `Picture` blob,
  `AboutUser` text,
  `CV` blob,
  `PictureName` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`UserID`, `Picture`, `AboutUser`, `CV`, `PictureName`) VALUES
(1, NULL, '', NULL, ''),
(2, NULL, NULL, NULL, ''),
(3, NULL, 'Jeg heter Marthe.', NULL, ''),
(4, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `videolink`
--

CREATE TABLE `videolink` (
  `VideoLinkID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `YoutubeLink` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videolink`
--

INSERT INTO `videolink` (`VideoLinkID`, `ProjectID`, `YoutubeLink`) VALUES
(1, 26, 'https://www.youtube.com/watch?v=sHz2Hmq7soo'),
(2, 26, 'sHz2Hmq7soo'),
(3, 25, 'sHz2Hmq7soo'),
(4, 25, '-6vLp07ZePY'),
(5, 25, 'Y3CDdiBlpXE'),
(6, 26, ''),
(7, 19, 'GI5p7NOn7C4'),
(8, 28, 'GI5p7NOn7C4'),
(9, 26, 'GI5p7NOn7C4'),
(10, 26, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `Comments_Project` (`ProjectID`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`DocumentID`),
  ADD KEY `Documents_Project` (`ProjectID`);

--
-- Indexes for table `Likes`
--
ALTER TABLE `Likes`
  ADD PRIMARY KEY (`LikeID`),
  ADD UNIQUE KEY `LikesOne` (`Username`,`ProjectID`),
  ADD KEY `Likes_Project` (`ProjectID`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD KEY `login_attempts_User` (`User_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`PictureID`),
  ADD KEY `Pictures_Project` (`ProjectID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ProjectID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Unic` (`Username`,`Email`);

--
-- Indexes for table `userinproject`
--
ALTER TABLE `userinproject`
  ADD UNIQUE KEY `OneProject` (`ProjectID`,`UserID`),
  ADD KEY `userAccount_user` (`UserID`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD KEY `userInfo_User` (`UserID`);

--
-- Indexes for table `videolink`
--
ALTER TABLE `videolink`
  ADD PRIMARY KEY (`VideoLinkID`),
  ADD KEY `VideoLink_Project` (`ProjectID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Likes`
--
ALTER TABLE `Likes`
  MODIFY `LikeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ProjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `videolink`
--
ALTER TABLE `videolink`
  MODIFY `VideoLinkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
-- Constraints for table `Likes`
--
ALTER TABLE `Likes`
  ADD CONSTRAINT `Likes_Project` FOREIGN KEY (`ProjectID`) REFERENCES `Project` (`ProjectID`);

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
