-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 02:14 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wps_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(50) NOT NULL,
  `User_Name` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Conform_Password` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Gender` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `User_Name`, `Password`, `Conform_Password`, `Image`, `Gender`) VALUES
(1, 'Admin', 'admin', 'admin', 'team5.jpg', 'Male'),
(2, 'Asif', 'asif', 'asif', 'team1.jpg', 'Male'),
(3, 'Hanif', '12345', '12345', 'team3.jpg', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `banner_table`
--

CREATE TABLE IF NOT EXISTS `banner_table` (
  `Banner_Id` int(10) NOT NULL,
  `Banner_Picture` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_table`
--

INSERT INTO `banner_table` (`Banner_Id`, `Banner_Picture`) VALUES
(1, 'banner1.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE IF NOT EXISTS `contact_table` (
  `Id` int(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`Id`, `Name`, `Email`, `Message`) VALUES
(1, 'Asif', 'a@gmail.com', 'Hi I am Asif');

-- --------------------------------------------------------

--
-- Table structure for table `faq_table`
--

CREATE TABLE IF NOT EXISTS `faq_table` (
  `Id` int(50) NOT NULL,
  `Question` varchar(200) NOT NULL,
  `Answer` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq_table`
--

INSERT INTO `faq_table` (`Id`, `Question`, `Answer`) VALUES
(1, 'How to view the image files?', 'Just click the image.'),
(2, 'How to register with the site?', 'Open the website and click the sign up button then easly you can register.'),
(3, 'How to download the picture file?', 'Please right click the image and select the save as option.'),
(4, 'How to upload the picture file?', 'Click the dropdown and select the Share photo,first you enter image title and then choose the image then click the upload button.'),
(5, 'How to post a Query?', 'Go to Contact us Page abd fill the form and submit'),
(6, 'Is there any limitation in uploading files?', 'uploading images limitation is 35.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_table`
--

CREATE TABLE IF NOT EXISTS `feedback_table` (
  `Id` int(50) NOT NULL,
  `Your_Review` varchar(200) NOT NULL,
  `Overall_Experience` varchar(50) NOT NULL,
  `Timely_Response` varchar(50) NOT NULL,
  `Our_Support` varchar(50) NOT NULL,
  `Overall_Satisfaction` varchar(50) NOT NULL,
  `Question` varchar(200) NOT NULL,
  `Uid` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_table`
--

INSERT INTO `feedback_table` (`Id`, `Your_Review`, `Overall_Experience`, `Timely_Response`, `Our_Support`, `Overall_Satisfaction`, `Question`, `Uid`) VALUES
(1, 'No Review', 'Excellent', 'Good', 'Fair', 'Good', 'Good Website', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_table`
--

CREATE TABLE IF NOT EXISTS `gallery_table` (
  `Id` int(50) NOT NULL,
  `Picture` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_table`
--

INSERT INTO `gallery_table` (`Id`, `Picture`) VALUES
(1, '1.jpg'),
(2, '18.jpg'),
(3, '20.jpg'),
(4, '43.jpg'),
(5, '2.jpg'),
(6, '4.jpg'),
(7, '5.jpg'),
(8, '6.jpg'),
(9, '21.jpg'),
(10, '26.jpg'),
(11, '27.jpg'),
(12, '28.jpg'),
(13, '29.jpg'),
(14, '30.jpg'),
(15, '31.jpg'),
(16, '32.jpg'),
(17, '33.jpg'),
(18, '34.jpg'),
(19, '35.jpg'),
(20, '36.jfif'),
(21, '37.jpg'),
(22, '40.jpeg'),
(23, '42.png'),
(24, '45.jpg'),
(25, '46.jpg'),
(26, '47.jpg'),
(27, '50.jpg'),
(28, '63.jpg'),
(29, '65.jpg'),
(30, '67.jpg'),
(31, '68.jpg'),
(32, '92.jpg'),
(33, '107.jpg'),
(34, '113.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_table`
--

CREATE TABLE IF NOT EXISTS `home_table` (
  `Id` int(50) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_table`
--

INSERT INTO `home_table` (`Id`, `Picture`, `Description`) VALUES
(1, '107.jpg', 'This Picture is Randomly taken by Photographer.');

-- --------------------------------------------------------

--
-- Table structure for table `user_picture`
--

CREATE TABLE IF NOT EXISTS `user_picture` (
  `Id` int(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `U_Id` int(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_picture`
--

INSERT INTO `user_picture` (`Id`, `Title`, `Picture`, `U_Id`, `Date`) VALUES
(1, 'Title1', '1.jpg', 2, '2019-04-23'),
(2, 'Title2', '2.jpg', 2, '2019-04-23'),
(3, 'Title3', '4.jpg', 2, '2019-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `User_Id` int(50) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone_no` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`User_Id`, `User_Name`, `Password`, `Email`, `Phone_no`, `Gender`, `Picture`, `Date`) VALUES
(1, 'Hanif', 'hanif', 'h@gmail.com', '03457474747', 'Male', 'team5.jpg', '23/04/19'),
(2, 'Asif', 'asif', 'a@gmail.com', '03451313131', 'Male', '47.jpg', '23/04/19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `banner_table`
--
ALTER TABLE `banner_table`
  ADD PRIMARY KEY (`Banner_Id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faq_table`
--
ALTER TABLE `faq_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback_table`
--
ALTER TABLE `feedback_table`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Uid` (`Uid`);

--
-- Indexes for table `gallery_table`
--
ALTER TABLE `gallery_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `home_table`
--
ALTER TABLE `home_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_picture`
--
ALTER TABLE `user_picture`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `banner_table`
--
ALTER TABLE `banner_table`
  MODIFY `Banner_Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faq_table`
--
ALTER TABLE `faq_table`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `feedback_table`
--
ALTER TABLE `feedback_table`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery_table`
--
ALTER TABLE `gallery_table`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `home_table`
--
ALTER TABLE `home_table`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_picture`
--
ALTER TABLE `user_picture`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `User_Id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback_table`
--
ALTER TABLE `feedback_table`
  ADD CONSTRAINT `feedback_table_ibfk_1` FOREIGN KEY (`Uid`) REFERENCES `user_table` (`User_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
