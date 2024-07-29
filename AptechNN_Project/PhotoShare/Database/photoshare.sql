-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 02:11 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photoshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Tel` varchar(30) NOT NULL,
  `Address` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `Email`, `Phone`, `Tel`, `Address`) VALUES
(1, 'mohjav031010@gmail.com', '9234802141231', '122-786-122', 'Office #22, ABC Building, Shahrah-e-Faisal, Karachi, Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `contactusmsgs`
--

CREATE TABLE `contactusmsgs` (
  `C_ID` int(11) NOT NULL,
  `By_Email` varchar(100) NOT NULL,
  `C_Msg` varchar(2000) NOT NULL,
  `C_Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `FAQ_ID` int(11) NOT NULL,
  `FAQ_Question` varchar(1000) NOT NULL,
  `FAQ_Answer` varchar(2000) NOT NULL,
  `FAQ_ByUser` int(11) NOT NULL,
  `FAQ_QuestionDate` varchar(70) NOT NULL,
  `FAQ_AnswerDate` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`FAQ_ID`, `FAQ_Question`, `FAQ_Answer`, `FAQ_ByUser`, `FAQ_QuestionDate`, `FAQ_AnswerDate`) VALUES
(18, 'Best Website To Share My Captured Photos :)', 'Thank You, Ù…Ø­Ø³Ù†', 8, '20-Oct-2019', '20-Oct-2019'),
(26, 'I love This Website', 'Thank You Mohsin, For your support.', 5, '20-Oct-2019', '20-Oct-2019');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `Follow_ID` int(11) NOT NULL,
  `Following_User` int(11) NOT NULL,
  `Follow_ByUser` int(11) NOT NULL,
  `Follow_Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`Follow_ID`, `Following_User`, `Follow_ByUser`, `Follow_Date`) VALUES
(10, 8, 5, '24-10-2019'),
(16, 7, 5, '24-10-2019'),
(17, 7, 8, '24-10-2019'),
(20, 8, 7, '24-10-2019'),
(22, 5, 8, '24-10-2019'),
(23, 5, 7, '24-10-2019');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Image_ID` int(11) NOT NULL,
  `Image_Name` varchar(500) NOT NULL,
  `Image_Tags` varchar(5000) NOT NULL,
  `Image_File` varchar(3000) NOT NULL,
  `Image_ByUser` int(11) NOT NULL,
  `Image_Date` varchar(50) NOT NULL,
  `Downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Image_ID`, `Image_Name`, `Image_Tags`, `Image_File`, `Image_ByUser`, `Image_Date`, `Downloads`) VALUES
(2, 'Nature', 'nature,tree,wallpaper,image', 'UploadedImages/header1.jpg', 5, '04-10-2019', 0),
(3, 'Nature ', 'nature,tree,forest,lake,image,wallpaper', 'UploadedImages/header.jpg', 5, '04-10-2019', 0),
(7, 'Dark Nature', 'dark,tree,dark nature,forest,black,wallpaper,road,highway', 'UploadedImages/header4.jpg', 5, '04-10-2019', 0),
(8, 'Camera', 'camera,photo,desk,image,wallpaper', 'UploadedImages/signup.jpg', 5, '04-10-2019', 0),
(13, 'Laptop', 'laptop,iphone,mobile,wallpaper,camera', 'UploadedImages/login.jpg', 5, '04-10-2019', 0),
(14, 'Wallpaper', 'wallpaper,hp wallpaper', 'UploadedImages/blue-pink-wallpapers-25167-8574869.jpg', 5, '04-10-2019', 0),
(16, 'Spark', 'Spark,spark,light,dark,fire', 'UploadedImages/7vjJbdDRga27ApDoYicw_Sparks.jpg', 5, '05-10-2019', 3),
(28, 'gaming', 'gaming,Gaming,Gaming wallpapers,wallpapers', 'UploadedImages/photo-1542751371-adc38448a05e.jpg', 8, '10-10-2019', 0),
(29, 'gaming', 'gaming,Gaming,wallpaper,Wallpaper,Gaming Wallpapers', 'UploadedImages/photo-1511512578047-dfb367046420.jpg', 8, '10-10-2019', 0),
(30, 'gaming', 'gaming', 'UploadedImages/photo-1560253023-3ec5d502959f.jpg', 8, '10-10-2019', 1),
(31, 'gaming', 'gaming', 'UploadedImages/photo-1501569420805-e4dd535ec970.jpg', 8, '10-10-2019', 0),
(32, 'Coding', 'Coding,coding,coding wallpaper,wallpaper', 'UploadedImages/photo-1550645612-83f5d594b671.jpg', 7, '10-10-2019', 0),
(33, 'Coding', 'Coding,coding', 'UploadedImages/photo-1534972195531-d756b9bfa9f2.jpg', 7, '10-10-2019', 0),
(34, 'Coding', 'Coding', 'UploadedImages/photo-1544256718-3bcf237f3974.jpg', 7, '10-10-2019', 0),
(35, 'Coding', 'Coding,coding', 'UploadedImages/photo-1517694712202-14dd9538aa97.jpg', 7, '10-10-2019', 0),
(36, 'Programming', 'programming,Programmer', 'UploadedImages/photo-1510915228340-29c85a43dcfe.jpg', 7, '10-10-2019', 0),
(37, 'Programming', 'Programming,programming', 'UploadedImages/photo-1537432376769-00f5c2f4c8d2.jpg', 7, '10-10-2019', 0),
(38, 'Programming', 'Programming,programming', 'UploadedImages/photo-1529465230221-a0d10e46fcbb.jpg', 7, '10-10-2019', 0),
(39, 'Office', 'office,office wallpaper', 'UploadedImages/photo-1510074377623-8cf13fb86c08.jpg', 7, '10-10-2019', 0),
(40, 'Office', 'office,Office', 'UploadedImages/photo-1522071820081-009f0129c71c.jpg', 7, '10-10-2019', 0),
(41, 'Office', 'Office,office', 'UploadedImages/photo-1499750310107-5fef28a66643.jpg', 7, '10-10-2019', 0),
(42, 'Office', 'Office', 'UploadedImages/photo-1531973576160-7125cd663d86.jpg', 7, '10-10-2019', 1),
(43, 'Office', 'Office,Office Building,office buildings,buildings', 'UploadedImages/photo-1486406146926-c627a92ad1ab.jpg', 7, '10-10-2019', 0),
(44, 'Art', 'art,wall art', 'UploadedImages/photo-1551732998-9573f695fdbb.jpg', 5, '10-10-2019', 0),
(45, 'Art', 'Art,art,wall art', 'UploadedImages/photo-1548809630-b1e80b396103.jpg', 5, '10-10-2019', 1),
(46, 'Art', 'Art,art,painting', 'UploadedImages/photo-1541753866388-0b3c701627d3.jpg', 5, '10-10-2019', 0),
(47, 'Art', 'Art,art,painting', 'UploadedImages/photo-1531913764164-f85c52e6e654.jpg', 5, '10-10-2019', 0),
(48, 'Dark', 'dark,Dark,dark wallpaper,wallpaper,shining,stars', 'UploadedImages/photo-1444703686981-a3abbc4d4fe3.jpg', 5, '10-10-2019', 0),
(49, 'Love', 'love,life,girl,wallpaper,mobile wallpaper', 'UploadedImages/photo-1517917901756-d03bae98b33f.jpg', 5, '10-10-2019', 0),
(50, 'View', 'view,mountains,sea', 'UploadedImages/photo-1570652514269-14037a4eabfc.jpg', 5, '10-10-2019', 0),
(51, 'Dark', 'dark,light,laser,art', 'UploadedImages/photo-1454817481404-7e84c1b73b4a.jpg', 5, '10-10-2019', 0),
(52, 'View', 'view,sun,boy,rock,mountain,wallpaper', 'UploadedImages/photo-1521358522799-ad7a75d9e346.jpg', 5, '10-10-2019', 0),
(53, 'Shoes', 'shoes,pant,girl,sand,forest,wallpaper', 'UploadedImages/photo-1570608948448-1db267dc080d.jpg', 5, '10-10-2019', 0),
(54, 'Camera', 'camera,Camera', 'UploadedImages/photo-1570614263838-920725683ca9.jpg', 5, '10-10-2019', 0),
(55, 'Awain', 'tea', 'UploadedImages/photo-1570581279605-411fc07bbb3e.jpg', 5, '10-10-2019', 0),
(56, 'View from the top of mountains', 'view,hand,forest,lake', 'UploadedImages/photo-1506112573664-1a1b66d93ff3.jpg', 5, '10-10-2019', 1),
(58, 'Bike', 'bike,wallpaper', 'UploadedImages/photo-1558981403-c5f9899a28bc.jpg', 8, '10-10-2019', 6),
(67, 'Bike', 'cycle,wall art,wall,bicycle', 'UploadedImages/photo-1499781350541-7783f6c6a0c8.jpg', 8, '13-10-2019', 0),
(68, 'Phone Booth', 'phone booth,phone,street,black', 'UploadedImages/photo-1485986844597-e3ae2f2c487e.jpg', 8, '13-10-2019', 0),
(69, 'A Boy', 'boy,cap,bag,bridge,cycle,train', 'UploadedImages/photo-1495706891067-35a06798dbca.jpg', 8, '13-10-2019', 0),
(70, 'Forest and Cycles', 'forest,mountain,cycle', 'UploadedImages/photo-1507520413369-94de50653411.jpg', 8, '13-10-2019', 0),
(72, 'Ford Mustang', 'ford,mustang,car,sports car,car wallpaper', 'UploadedImages/photo-1494905998402-395d579af36f.jpg', 8, '13-10-2019', 0),
(73, 'Lamborgini', 'Lamborgini,car,sports car,car wallpaper,wallpaper', 'UploadedImages/photo-1514316703755-dca7d7d9d882.jpg', 8, '13-10-2019', 1),
(77, 'View', 'View,mountains,forest,wallpaper', 'UploadedImages/photo-1570992260383-8deccbe87184.jpg', 8, '15-10-2019', 0),
(78, 'dark track', 'train,train track,dark,dark wallpaper,wallpaper', 'UploadedImages/photo-1571127642887-3dd409f7542a.jpg', 8, '15-10-2019', 0),
(79, 'View', 'View,house,smoke,forest', 'UploadedImages/photo-1571136541173-7e4a0fa4210c.jpg', 8, '15-10-2019', 0),
(80, 'Bikes', 'bikes,sports bike,sports bikes,white bike,rider', 'UploadedImages/photo-1489731110502-23f1239ea56c.jpg', 8, '15-10-2019', 0),
(81, 'Bike', 'Bikes,bike,sports bike,rider,wallpaper,bike wallpaper', 'UploadedImages/photo-1504160820508-da86e9dc8a28.jpg', 8, '15-10-2019', 0),
(82, 'Bike', 'bike,bikes,cafe racer,fat tire,old bike', 'UploadedImages/photo-1535050804459-06db46aac01a.jpg', 8, '15-10-2019', 0),
(83, 'Harley Devidson', 'Harley Devidson,bike,bikes,bike wallpaper,wallpaper', 'UploadedImages/photo-1524591652733-73fa1ae7b5ee.jpg', 8, '15-10-2019', 0),
(84, 'Sports Bike', 'bike,bikes,sports bike,black bike', 'UploadedImages/photo-1525160354320-d8e92641c563.jpg', 8, '15-10-2019', 0),
(85, 'Drone View', 'drone shot,drone,travel,view,sea,mountains,ships', 'UploadedImages/photo-1564425230164-1e63b4922d3f.jpg', 8, '15-10-2019', 0),
(86, 'Architecture', 'architecture,old architecture', 'UploadedImages/photo-1567626143573-dfee80dddb2c.jpg', 8, '15-10-2019', 0),
(87, 'Architecture', 'architecture,building,escalator', 'UploadedImages/photo-1570133905349-eeee60c1343b.jpg', 8, '15-10-2019', 0),
(88, 'Building', 'building,architecture,hotel,big building', 'UploadedImages/photo-1570272817978-bd1e43a9897e.jpg', 8, '15-10-2019', 0),
(89, 'Smile', 'simle,dark,top,light', 'UploadedImages/photo-1544450804-9e5f64cb18de.jpg', 8, '15-10-2019', 0),
(90, 'Batman', 'batman,dark', 'UploadedImages/photo-1531259683007-016a7b628fc3.jpg', 8, '15-10-2019', 0),
(91, 'Joker', 'joker,wallpaper,hd wallpaper', 'UploadedImages/thumb-1920-429889.jpg', 8, '15-10-2019', 0),
(92, 'Joker', 'joker,wallpaper', 'UploadedImages/thumb-1920-60578.jpg', 8, '15-10-2019', 1),
(93, 'Joker', 'joker,wallpaper,card', 'UploadedImages/DbVqKjI.jpg', 8, '15-10-2019', 0),
(94, 'Graffiti', 'graffiti,wall art,wall paint,wallpaper', 'UploadedImages/photo-1465812041851-4c0bbc509cd0.jpg', 8, '15-10-2019', 0),
(95, 'Graffiti', 'wall art,graffiti,Wall paint,wallpaper', 'UploadedImages/photo-1495482432709-15807c8b3e2b.jpg', 8, '15-10-2019', 0),
(96, 'Car', 'car,red car,sports car', 'UploadedImages/photo-1506671753197-8d137cc5d53c.jpg', 8, '15-10-2019', 0),
(97, 'Sports Car', 'car,green car,sports car,modified car,fat tire', 'UploadedImages/photo-1490641815614-b45106d6dd04.jpg', 8, '15-10-2019', 0),
(98, 'Car', 'old car,car,orange caR,SPORTS CAR', 'UploadedImages/photo-1502219422320-9ca47798b75b.jpg', 8, '15-10-2019', 0),
(99, 'Car', 'headlight,car,sharp light', 'UploadedImages/photo-1518306727298-4c17e1bf6942.jpg', 8, '15-10-2019', 4),
(101, 'Gaming Wallpaper', 'gaming,wallpaper,gaming wallpaper,joker,marvel', 'UploadedImages/maxresdefault.jpg', 7, '17-10-2019', 0),
(102, 'Gaming Wallpaper', 'skull,wallpaper,gaming wallpaper', 'UploadedImages/91085.jpg', 7, '17-10-2019', 0),
(103, 'Eagle', 'eagle', 'UploadedImages/photo-1569431876779-f924b49ac555.jpg', 7, '17-10-2019', 1),
(105, 'Dragon', 'Dragon,Wallpaper,gaming wallpaper', 'UploadedImages/442793.jpg', 7, '17-10-2019', 0),
(106, 'Gaming', 'wallpaper,gaming wallpaper,games', 'UploadedImages/4k-gaming-wallpaper-14.jpg', 7, '17-10-2019', 0),
(108, 'Gaming', 'gaming wallpaper', 'UploadedImages/Image-MetroLastLightBackgroundLastHope.jpg-SteamTrading....png', 8, '19-10-2019', 2),
(109, 'Programming Wallpaper', 'Programming Wallpaper,wallpaper,code', 'UploadedImages/thumb-1920-665093.jpg', 7, '20-10-2019', 0),
(110, 'Plane View', 'plane,view,plane view,mountains,sky', 'UploadedImages/photo-1571393412388-59b30e9b21b0.jpg', 5, '21-10-2019', 0),
(111, 'Nike Shoes', 'shoes,nike,AIR', 'UploadedImages/photo-1571601035754-5c927f2d7edc.jpg', 5, '21-10-2019', 1),
(112, 'Painting', 'painting,red,wallpaper,paint', 'UploadedImages/photo-1571607063267-25c08c8d9b15.jpg', 5, '21-10-2019', 0),
(113, 'Gun in smoke', 'gun,smoke,army,weapon', 'UploadedImages/photo-1516744096552-aec945acef07.jpg', 5, '21-10-2019', 0),
(114, 'Tank on the side of road', 'army,tank,sky,war', 'UploadedImages/photo-1545631757-8b75025a310e.jpg', 5, '21-10-2019', 0),
(115, 'Soldier', 'Soldier,army,gun', 'UploadedImages/photo-1566566716921-b50e82140547.jpg', 5, '21-10-2019', 0),
(116, 'Soldier with gun', 'Soldier,army,gun,weapon,smoke', 'UploadedImages/photo-1560177776-295b9cd779de.jpg', 5, '21-10-2019', 0),
(117, 'Soldier standing with gun', 'Soldier,army,gun,weapon', 'UploadedImages/photo-1560177776-55a762c5c000.jpg', 5, '21-10-2019', 0),
(118, 'Gaming controller in blue light', 'gaming,gaming wallapaper,controller,console', 'UploadedImages/harpal-singh-eY9nCR7G0xw-unsplash.jpg', 5, '21-10-2019', 0),
(119, 'Cutted Woods', 'Cutted Woods,woods,wood', 'UploadedImages/photo-1571868703918-74becfde876f.jpg', 5, '24-10-2019', 0),
(120, 'Evening view in the city', 'Evening,city,view,lights', 'UploadedImages/photo-1571822325836-7373fd6d3344.jpg', 5, '24-10-2019', 0),
(121, 'Car in forst', 'forest,road,tree,trees', 'UploadedImages/photo-1571858541981-dd6334e6b89d.jpg', 5, '24-10-2019', 0),
(122, 'Show fall view', 'snow fall,snow,road,tree,mountains', 'UploadedImages/photo-1571879766442-188c413d0e50.jpg', 5, '24-10-2019', 0),
(123, 'Man standing on mountains', 'mountains,snow,man', 'UploadedImages/photo-1571782605941-8c8fd0d43df6.jpg', 5, '24-10-2019', 0),
(124, 'Man stating on a tree in water', 'water,lake,man,smoke', 'UploadedImages/photo-1571765560738-c1f356bdb2b1.jpg', 5, '24-10-2019', 1),
(125, 'Water', 'water,sea,aqua', 'UploadedImages/photo-1572380492053-f43f59891d7a.jpg', 7, '30-10-2019', 0),
(126, 'Apple Computer', 'apple,computer', 'UploadedImages/photo-1572385000357-e6cb5a069a75.jpg', 7, '30-10-2019', 0),
(127, 'Shoes', 'shoes', 'UploadedImages/photo-1572292919078-aa185708f65c.jpg', 7, '30-10-2019', 0),
(128, 'Camera Gears', 'camera,camera gear,gear,gears,camera gears', 'UploadedImages/photo-1572419541484-276b0e8f4ed4.jpg', 7, '30-10-2019', 0),
(129, 'Evening View In Forest', 'forest,evening,view,birds', 'UploadedImages/photo-1572383565744-c166896623c4.jpg', 7, '30-10-2019', 0),
(130, 'Lake under mountains', 'mountains,forest,lake,wallpaper,forest wallpaper', 'UploadedImages/photo-1572295727871-7638149ea3d7.jpg', 7, '30-10-2019', 0);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `Like_ID` int(11) NOT NULL,
  `Like_ImageID` int(11) NOT NULL,
  `Image_ByUserID` int(11) NOT NULL,
  `Like_ByUser` int(11) NOT NULL,
  `Like_Date` varchar(50) NOT NULL,
  `Seen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`Like_ID`, `Like_ImageID`, `Image_ByUserID`, `Like_ByUser`, `Like_Date`, `Seen`) VALUES
(24, 43, 7, 5, '30-Oct-2019', 'True'),
(28, 52, 5, 5, '30-Oct-2019', 'True'),
(29, 42, 7, 5, '30-Oct-2019', 'True'),
(45, 55, 5, 8, '30-Oct-2019', 'True'),
(46, 53, 5, 8, '30-Oct-2019', 'True'),
(48, 45, 5, 8, '30-Oct-2019', 'True'),
(54, 56, 5, 8, '30-Oct-2019', 'True'),
(55, 69, 8, 8, '30-Oct-2019', 'True'),
(57, 92, 8, 8, '30-Oct-2019', 'True'),
(66, 102, 7, 8, '30-Oct-2019', 'True'),
(67, 101, 7, 8, '30-Oct-2019', 'True'),
(149, 95, 8, 8, '30-Oct-2019', 'True'),
(205, 91, 8, 8, '30-Oct-2019', 'True'),
(210, 99, 8, 5, '30-Oct-2019', 'True'),
(214, 108, 8, 7, '30-Oct-2019', 'True'),
(220, 98, 8, 5, '30-Oct-2019', 'True'),
(232, 116, 5, 8, '30-Oct-2019', 'True'),
(233, 113, 5, 8, '30-Oct-2019', 'True'),
(234, 114, 5, 8, '30-Oct-2019', 'True'),
(250, 109, 7, 8, '30-Oct-2019', 'True'),
(253, 96, 8, 5, '30-Oct-2019', 'True'),
(255, 95, 8, 5, '30-Oct-2019', 'True'),
(257, 86, 8, 5, '30-Oct-2019', 'True'),
(261, 89, 8, 5, '30-Oct-2019', 'True'),
(262, 92, 8, 5, '30-Oct-2019', 'True'),
(263, 93, 8, 5, '30-Oct-2019', 'True'),
(264, 90, 8, 5, '30-Oct-2019', 'True'),
(266, 108, 8, 5, '30-Oct-2019', 'True'),
(268, 112, 5, 5, '30-Oct-2019', 'True'),
(269, 118, 5, 5, '30-Oct-2019', 'True'),
(277, 117, 5, 8, '30-Oct-2019', 'True'),
(279, 115, 5, 8, '30-Oct-2019', 'True'),
(285, 118, 5, 8, '30-Oct-2019', 'True'),
(286, 111, 5, 8, '30-Oct-2019', 'True'),
(297, 81, 8, 8, '30-Oct-2019', 'True'),
(300, 98, 8, 8, '30-Oct-2019', 'True'),
(301, 117, 5, 5, '30-Oct-2019', 'True'),
(304, 122, 5, 5, '30-Oct-2019', 'True'),
(310, 121, 5, 8, '30-Oct-2019', 'True'),
(311, 120, 5, 8, '30-Oct-2019', 'True'),
(324, 99, 8, 8, '30-Oct-2019', 'True'),
(327, 108, 8, 8, '30-Oct-2019', 'True'),
(328, 97, 8, 8, '30-Oct-2019', 'True'),
(352, 105, 7, 8, '30-Oct-2019', 'True'),
(372, 103, 7, 8, '30-Oct-2019', 'True'),
(413, 106, 7, 8, '30-Oct-2019', 'True'),
(414, 119, 5, 5, '30-Oct-2019', 'True'),
(415, 120, 5, 5, '30-Oct-2019', 'True'),
(421, 123, 5, 8, '30-Oct-2019', 'True'),
(422, 124, 5, 8, '30-Oct-2019', 'True'),
(427, 123, 5, 5, '30-Oct-2019', 'True'),
(431, 124, 5, 5, '30-Oct-2019', 'True'),
(434, 129, 7, 7, '30-Oct-2019', 'True'),
(435, 130, 7, 7, '30-Oct-2019', 'True'),
(436, 128, 7, 7, '30-Oct-2019', 'True'),
(437, 125, 7, 7, '30-Oct-2019', 'True'),
(438, 126, 7, 7, '30-Oct-2019', 'True'),
(439, 127, 7, 7, '30-Oct-2019', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `pendingsignup`
--

CREATE TABLE `pendingsignup` (
  `Pending_ID` int(11) NOT NULL,
  `User_FirstName` varchar(50) NOT NULL,
  `User_LastName` varchar(50) NOT NULL,
  `User_Username` varchar(50) NOT NULL,
  `User_Email` varchar(100) NOT NULL,
  `User_Password` varchar(30) NOT NULL,
  `User_Role` int(11) NOT NULL,
  `Request_Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_apply`
--

CREATE TABLE `reg_apply` (
  `Reg_ApplyID` int(11) NOT NULL,
  `Reg_ApplyUser` int(11) NOT NULL,
  `Red_ApplyDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_ID` int(11) NOT NULL,
  `Report_ByUser` int(11) NOT NULL,
  `Report_Image` int(11) NOT NULL,
  `Report_Type` varchar(100) NOT NULL,
  `Report_Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `Role_ID` int(11) NOT NULL,
  `Role_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`Role_ID`, `Role_Name`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Sub_Admin');

-- --------------------------------------------------------

--
-- Table structure for table `save`
--

CREATE TABLE `save` (
  `Save_ID` int(11) NOT NULL,
  `Save_ImageID` int(11) NOT NULL,
  `Image_ByUserID` int(11) NOT NULL,
  `Save_ByUser` int(11) NOT NULL,
  `Saved` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `save`
--

INSERT INTO `save` (`Save_ID`, `Save_ImageID`, `Image_ByUserID`, `Save_ByUser`, `Saved`) VALUES
(7, 106, 7, 8, 'True'),
(9, 105, 7, 8, 'True'),
(16, 108, 8, 7, 'True'),
(19, 124, 5, 7, 'True');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Role` int(11) NOT NULL,
  `Signup_Date` varchar(50) NOT NULL,
  `User_Image` varchar(3000) NOT NULL,
  `Bio` varchar(200) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `WorkAt` varchar(200) NOT NULL,
  `WorkAtLink` varchar(1000) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Registered` varchar(20) NOT NULL,
  `Ban` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `First_Name`, `Last_Name`, `Username`, `Email`, `Password`, `Role`, `Signup_Date`, `User_Image`, `Bio`, `Country`, `WorkAt`, `WorkAtLink`, `Status`, `Registered`, `Ban`) VALUES
(1, 'Photoshare', 'Admin', '', 'mohsinjaved', '123', 1, '03-10-2019', 'UserImages/q2t34kjldqrqv0pl7ihh.png', '', 'Pakistan', '', '', 'Offline', '', ''),
(5, 'Mohsin', 'Javed ãƒ„', 'mohJav', 'mohsinjaved414@yahoo.com', '123', 2, '04-Oct-2019', 'UserImages/72863974_593528861389499_8450892889877118976_n.jpg', 'There is one thing the photograph must contain, the humanity of the moment ðŸ˜‚.', 'Pakistan', 'Self Photographer', 'http://melissajphoto.com/', 'Offline', 'True', ''),
(7, 'Zubair', 'Arshad', 'Zubi', 'zubairarshad55@gmail.com', '123', 2, '05-Oct-2019', 'UserImages/174869.png', 'â€œTaking an image, freezing a moment, reveals how rich reality truly is.â€', 'Pakistan', 'Not Yet Working', '', 'Offline', 'True', 'False'),
(8, 'Ù…Ø­Ø³Ù†', 'Ø¬Ø§ÙˆÛŒØ¯', 'MohsinCaps', 'mohjav031010@gmail.com', '123', 2, '07-Oct-2019', 'UserImages/User113742721.png', 'In photography there is a reality so subtle that it becomes more real than reality.', 'Pakistan', 'FOANA Photography By Osama Sarwar', 'https://www.facebook.com/FPbyOsamaSarwar/', 'Offline', 'False', ''),
(11, 'Ahsan', 'Javed', '', 'aj', '123', 3, '15-10-2019', 'UserImages/iStock-476085198.jpg', '', 'Pakistan', '', '', 'Offline', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contactusmsgs`
--
ALTER TABLE `contactusmsgs`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`FAQ_ID`),
  ADD KEY `FAQ_ByUser` (`FAQ_ByUser`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`Follow_ID`),
  ADD KEY `Following_User` (`Following_User`),
  ADD KEY `Follow_ByUser` (`Follow_ByUser`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Image_ID`),
  ADD KEY `Image_ByUser` (`Image_ByUser`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`Like_ID`),
  ADD KEY `Like_ByUser` (`Like_ByUser`),
  ADD KEY `Like_ImageID` (`Like_ImageID`),
  ADD KEY `Image_ByUserID` (`Image_ByUserID`);

--
-- Indexes for table `pendingsignup`
--
ALTER TABLE `pendingsignup`
  ADD PRIMARY KEY (`Pending_ID`),
  ADD KEY `User_Role` (`User_Role`);

--
-- Indexes for table `reg_apply`
--
ALTER TABLE `reg_apply`
  ADD PRIMARY KEY (`Reg_ApplyID`),
  ADD KEY `Reg_ApplyUser` (`Reg_ApplyUser`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report_ID`),
  ADD KEY `Report_ByUser` (`Report_ByUser`),
  ADD KEY `Report_Image` (`Report_Image`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Role_ID`);

--
-- Indexes for table `save`
--
ALTER TABLE `save`
  ADD PRIMARY KEY (`Save_ID`),
  ADD KEY `Save_ByUser` (`Save_ByUser`),
  ADD KEY `Save_ImageID` (`Save_ImageID`),
  ADD KEY `Image_ByUserID` (`Image_ByUserID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`),
  ADD KEY `Role` (`Role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactusmsgs`
--
ALTER TABLE `contactusmsgs`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `FAQ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `Follow_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `Image_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `Like_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440;

--
-- AUTO_INCREMENT for table `pendingsignup`
--
ALTER TABLE `pendingsignup`
  MODIFY `Pending_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reg_apply`
--
ALTER TABLE `reg_apply`
  MODIFY `Reg_ApplyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Report_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `Role_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `save`
--
ALTER TABLE `save`
  MODIFY `Save_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_ibfk_1` FOREIGN KEY (`FAQ_ByUser`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`Following_User`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `follow_ibfk_2` FOREIGN KEY (`Follow_ByUser`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`Image_ByUser`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`Like_ByUser`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`Like_ImageID`) REFERENCES `images` (`Image_ID`),
  ADD CONSTRAINT `likes_ibfk_3` FOREIGN KEY (`Image_ByUserID`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `pendingsignup`
--
ALTER TABLE `pendingsignup`
  ADD CONSTRAINT `pendingsignup_ibfk_1` FOREIGN KEY (`User_Role`) REFERENCES `roles` (`Role_ID`);

--
-- Constraints for table `reg_apply`
--
ALTER TABLE `reg_apply`
  ADD CONSTRAINT `reg_apply_ibfk_1` FOREIGN KEY (`Reg_ApplyUser`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`Report_ByUser`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`Report_Image`) REFERENCES `images` (`Image_ID`);

--
-- Constraints for table `save`
--
ALTER TABLE `save`
  ADD CONSTRAINT `save_ibfk_1` FOREIGN KEY (`Save_ByUser`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `save_ibfk_2` FOREIGN KEY (`Save_ImageID`) REFERENCES `images` (`Image_ID`),
  ADD CONSTRAINT `save_ibfk_3` FOREIGN KEY (`Image_ByUserID`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Role`) REFERENCES `roles` (`Role_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
