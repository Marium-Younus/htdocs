-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 09:49 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(100) NOT NULL,
  `User_Name` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Conform_Password` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `roleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `User_Name`, `Password`, `Conform_Password`, `Image`, `Gender`, `roleid`) VALUES
(1, 'Haseeb', 'admin123', 'admin123', '1.jpg', 'Male', 1),
(3, 'Wasiq Ali', 'ali123', 'ali123', 'img1.png', 'Male', 2),
(4, 'Sara', 'sara123', 'sara123', 'a.jpg', 'Male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `Id` int(100) NOT NULL,
  `Authore_Name` varchar(200) NOT NULL,
  `Authore_History` varchar(500) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`Id`, `Authore_Name`, `Authore_History`, `Date_Of_Birth`, `Image`, `Gender`) VALUES
(1, 'Allama Iqbal', 'Sir Muhammad Iqbal (November 9, 1877 â€“ April 21, 1938), widely known as Allama Iqbal, was a Muslim poet and philosopher . He became the national poet of Pakistan. ... His vision of an independent state for the Muslims of British India was a starting point for the creation of Pakistan.\r\n', '1877-11-09', 'ii.jpg', 'Male'),
(3, 'William Shakespeare', 'William Shakespeare was the son of John Shakespeare, an alderman and a successful glover (glove-maker) originally from Snitterfield, and Mary Arden, the daughter of an affluent landowning farmer.', '1564-04-14', 'ws.jpg', 'Male'),
(4, 'Kristin Hannah', 'Kristin Hannah is the award-winning and bestselling author of more than 20 novels including the international blockbuster, The Nightingale, which was named Goodreads ', '1989-07-26', 'ff.png', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Id` int(100) NOT NULL,
  `Book_Title` varchar(200) NOT NULL,
  `Book_Description` varchar(500) NOT NULL,
  `Date_of_Publish` date NOT NULL,
  `Book_Price` int(50) NOT NULL,
  `Book` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `author_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `status_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Id`, `Book_Title`, `Book_Description`, `Date_of_Publish`, `Book_Price`, `Book`, `Image`, `author_id`, `publisher_id`, `catid`, `status_id`) VALUES
(1, 'Alls Well That Ends Well', 'Text Text Text Text Text ', '2018-12-23', 5000, '', 'b1.jpg', 3, 1, 1, 1),
(2, 'Javid Nama', 'The Javid Nama (Persian: Ø¬Ø§ÙˆÛŒØ¯ Ù†Ø§Ù…Ûâ€Ž), or Book of Eternity, is a Persian book of poetry written by Allama Muhammad Iqbal and published in 1932. It is considered to be one of the masterpieces of Iqbal.', '2018-12-18', 700, '', 'j.jpg', 1, 3, 3, 2),
(3, 'Sonnet 1', 'In Sonnet 1 the speaker engages in an argument with the youth regarding procreation.', '2018-12-18', 400, '', 'so.jpg', 3, 1, 1, 2),
(4, 'Doing Good', 'Doing Good by Doing Good shows companies how to improve the bottom line by implementing an engaging, authentic, and business-enhancing program that helps staff and business thrive. International CSR consultant Peter Baines draws upon lessons learnt from the challenges faced in his career as a police officer, forensic investigator, and founder of Hands Across the Water to describe the Australian CSR landscape, and the factors that make up a program that benefits everyone involved. Case studies il', '2018-12-22', 300, '', 'doing_good.jpg', 3, 1, 1, 3),
(5, 'Romeo And Juliet', 'Romeo and Juliet is a tragedy written by William Shakespeare early in his career about two young star-crossed lovers whose deaths ultimately reconcile their feuding families. It was among Shakespeare most popular plays during his lifetime and along with Hamlet, is one of his most frequently performed plays.', '2018-12-23', 1000, '', 's1.jpg', 3, 3, 3, 2),
(6, 'The Reconstruction of Religious Thought in Islam', 'The Reconstruction of Religious Thought in Islam (1930) is Muhammad Iqbal major philosophic work: a series of profound reflections on the perennial conflict among science, religion, and philosophy, culminating in new visions of the unity of human knowledge, of the human spirit, and of God. Iqbal thought contributed significantly to the establishment of Pakistan, to the religious and political ideals of the Iranian Revolution, and to the survival of Muslim identity in parts of the former USSR.', '2018-12-23', 800, '', 'N2.jpg', 1, 1, 1, 3),
(7, 'The Two Gentlemen of Verona', 'The Two Gentlemen of Verona is a comedy by William Shakespeare, believed to have been written between 1589 and 1593. It is considered by some to be Shakespeare first play, and is often seen as showing his first tentative steps in laying out some of the themes and motifs with which he would later deal in more detail; for example, it is the first of his plays in which a heroine dresses as a boy.', '2018-12-24', 650, '', 'S2.jpg', 3, 1, 3, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `bookview`
-- (See below for the actual view)
--
CREATE TABLE `bookview` (
`Id` int(100)
,`Category_Name` varchar(50)
,`Book_Title` varchar(200)
,`Book_Description` varchar(500)
,`Date_of_Publish` date
,`Authore_Name` varchar(200)
,`Publisher_Name` varchar(200)
,`Book_Price` int(50)
,`Image` varchar(200)
,`Status` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Category_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Category_Name`) VALUES
(1, 'Novels '),
(3, 'Story Books ');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Id`, `Name`, `Email`, `Message`) VALUES
(1, 'Wasiq Ali', 'wasiq5884@gmail.com', 'Hello World'),
(2, 'Allama Iqbal', 'ali123@gmail.com', 'Hello Allama Iqbal');

-- --------------------------------------------------------

--
-- Table structure for table `customer_signup`
--

CREATE TABLE `customer_signup` (
  `Id` int(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Conform_Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_signup`
--

INSERT INTO `customer_signup` (`Id`, `Name`, `Email`, `Password`, `Conform_Password`) VALUES
(1, 'Ali', 'ali123@gmail.com', 'aptech', 'aptech'),
(2, 'Sara', 'sara12@gmail.com', 'sara123', 'sara123'),
(3, 'abc', 'wasiq5884@gmail.com', 'abc', 'abc'),
(4, 'Zain', 'za@gmail.com', 'za123', 'za123');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `Id` int(50) NOT NULL,
  `Question` varchar(200) NOT NULL,
  `Answer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`Id`, `Question`, `Answer`) VALUES
(2, 'Do I need special software or hardware to read eBooks?', 'All you need is your PC, laptop or hand held device and the free Reader software. We offer eBooks in three different formats: PDF download, EPUB download and Online Reader.  Our Online Reader requires');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `Id` int(100) NOT NULL,
  `Full_Name` varchar(200) NOT NULL,
  `Phone_No` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Address_Type` varchar(200) NOT NULL,
  `Town_City` varchar(50) NOT NULL,
  `Total_Amount` int(100) NOT NULL,
  `Customer_Id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`Id`, `Full_Name`, `Phone_No`, `Address`, `Address_Type`, `Town_City`, `Total_Amount`, `Customer_Id`) VALUES
(1, 'Wasiq Ali', '0312 2609768', 'Gulshan', 'Commercial', 'Karachi', 1000, 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderview`
-- (See below for the actual view)
--
CREATE TABLE `orderview` (
`Id` int(100)
,`Full_Name` varchar(200)
,`Phone_No` varchar(50)
,`Address` varchar(200)
,`Address_Type` varchar(200)
,`Town_City` varchar(50)
,`Total_Amount` int(100)
,`Name` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `Id` int(200) NOT NULL,
  `Orderid` int(200) NOT NULL,
  `Bookid` int(200) NOT NULL,
  `Quantity` int(200) NOT NULL,
  `Date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`Id`, `Orderid`, `Bookid`, `Quantity`, `Date`) VALUES
(5, 1, 5, 1, '2018-12-26 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `Id` int(100) NOT NULL,
  `Publisher_Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`Id`, `Publisher_Name`) VALUES
(1, 'Alpha'),
(3, 'Betas');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Id` int(50) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Id`, `Role`) VALUES
(1, 'Admin'),
(2, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `Id` int(50) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`Id`, `Image`) VALUES
(1, 'd.jpg'),
(2, 'header-EN.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Id` int(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Id`, `Status`) VALUES
(1, 'Free'),
(2, 'Buy'),
(3, 'Coming Soon');

-- --------------------------------------------------------

--
-- Stand-in structure for view `userview`
-- (See below for the actual view)
--
CREATE TABLE `userview` (
`Id` int(100)
,`User_Name` varchar(200)
,`Password` varchar(200)
,`Conform_Password` varchar(200)
,`Image` varchar(200)
,`Gender` varchar(50)
,`Role` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `bookview`
--
DROP TABLE IF EXISTS `bookview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bookview`  AS  select `books`.`Id` AS `Id`,`category`.`Category_Name` AS `Category_Name`,`books`.`Book_Title` AS `Book_Title`,`books`.`Book_Description` AS `Book_Description`,`books`.`Date_of_Publish` AS `Date_of_Publish`,`authors`.`Authore_Name` AS `Authore_Name`,`publisher`.`Publisher_Name` AS `Publisher_Name`,`books`.`Book_Price` AS `Book_Price`,`books`.`Image` AS `Image`,`status`.`Status` AS `Status` from ((((`books` join `category` on((`books`.`catid` = `category`.`Id`))) join `authors` on((`books`.`author_id` = `authors`.`Id`))) join `publisher` on((`books`.`publisher_id` = `publisher`.`Id`))) join `status` on((`books`.`status_id` = `status`.`Id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `orderview`
--
DROP TABLE IF EXISTS `orderview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderview`  AS  select `ordertable`.`Id` AS `Id`,`ordertable`.`Full_Name` AS `Full_Name`,`ordertable`.`Phone_No` AS `Phone_No`,`ordertable`.`Address` AS `Address`,`ordertable`.`Address_Type` AS `Address_Type`,`ordertable`.`Town_City` AS `Town_City`,`ordertable`.`Total_Amount` AS `Total_Amount`,`customer_signup`.`Name` AS `Name` from (`ordertable` join `customer_signup` on((`ordertable`.`Customer_Id` = `customer_signup`.`Id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `userview`
--
DROP TABLE IF EXISTS `userview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `userview`  AS  select `admin`.`Id` AS `Id`,`admin`.`User_Name` AS `User_Name`,`admin`.`Password` AS `Password`,`admin`.`Conform_Password` AS `Conform_Password`,`admin`.`Image` AS `Image`,`admin`.`Gender` AS `Gender`,`role`.`Role` AS `Role` from (`admin` join `role` on((`admin`.`roleid` = `role`.`Id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `roleid` (`roleid`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `books_ibfk_1` (`publisher_id`),
  ADD KEY `catid` (`catid`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer_signup`
--
ALTER TABLE `customer_signup`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `cusid` (`Customer_Id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Orderid` (`Orderid`),
  ADD KEY `order_detail_ibfk_2` (`Bookid`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_signup`
--
ALTER TABLE `customer_signup`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `role` (`Id`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`Id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `authors` (`Id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`catid`) REFERENCES `category` (`Id`),
  ADD CONSTRAINT `books_ibfk_4` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`Id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`Bookid`) REFERENCES `books` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
