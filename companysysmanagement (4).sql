-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 12:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companysysmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_title` varchar(200) NOT NULL,
  `banner_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `banner_image`) VALUES
(1, 'Banner 1', 'about.jpg'),
(3, '3', 'bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `Emri` varchar(120) DEFAULT NULL,
  `Useri` varchar(120) DEFAULT NULL,
  `Telefoni` bigint(10) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Fjalekalimi` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `Emri`, `Useri`, `Telefoni`, `Email`, `Fjalekalimi`, `AdminRegdate`) VALUES
(1, 'e', 'admin', 8979555556, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2019-08-01 08:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(11) NOT NULL,
  `Kategoria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `Kategoria`) VALUES
(7, 'Hotelieri'),
(9, 'Ndertim'),
(10, 'Mekanik'),
(11, 'Makineri'),
(12, 'Pastrim dhe Mirembajtje'),
(13, 'Ondulim'),
(14, 'Marketing'),
(15, 'Transportues'),
(16, 'Interiere dhe Mobileri'),
(17, 'Sanitari'),
(18, 'Patundshmeri'),
(19, 'Sherbime tjera(mundesi per punsim dhe kerkim punesimi)');

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `ID` int(50) NOT NULL,
  `Qyteti` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`ID`, `Qyteti`) VALUES
(3, 'Peja'),
(4, 'Gjilani'),
(5, 'Podujeva'),
(6, 'Prishtina'),
(7, 'Gjilani'),
(8, 'Gjakova'),
(9, 'Klina');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomputers`
--

CREATE TABLE `tblcomputers` (
  `ID` int(10) NOT NULL,
  `Emri` varchar(120) DEFAULT NULL,
  `Mbiemri` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomputers`
--

INSERT INTO `tblcomputers` (`ID`, `Emri`, `Mbiemri`) VALUES
(9, '', 'ASDFDASFAF');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(10) NOT NULL,
  `Emri` varchar(120) DEFAULT NULL,
  `Kategoria` varchar(10) DEFAULT NULL,
  `Telefoni` varchar(200) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Pershkrimi` varchar(120) NOT NULL,
  `Qyteti` varchar(120) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `Emri`, `Kategoria`, `Telefoni`, `Email`, `Pershkrimi`, `Qyteti`, `image`) VALUES
(62, 'rijadi3', 'Elektronik', '045803210', 'rijadi1@hotmail.com', '10', '6', '1654-beach-volleyball-pic.jpg'),
(63, 'addafsfdas', 'fdaafd, da', '045803210', 'as@hotmail.com', '10', '1', ''),
(70, 'Rijadi', 'fdaafd, da', '045803210', 'rijadi1@hotmail.com', '10', '8', ''),
(71, 'Rijadiiiiii', 'fdaafd, da', '045803210', 'rijadi1@hotmail.com', '10', '8', ''),
(72, 'rijadi', 'fdaafd, da', '045803210', 'rijad', '10', '5', ''),
(73, 'rijadi', 'fdaafd, da', '045803210', 'aid@hotmail.com', '10', '3', ''),
(74, 'rijadi', 'fdaafd, da', '045803210', 'aid@hotmail.com', '10', '5', ''),
(75, 'Rijadi', 'fdaafd, da', '045803210', 'rijadi_c.ronaldo@hotmail.com', '10', '1', ''),
(76, 'rijadi', 'fdaafd, da', '045803210', 'as@hotmail.com', '10', '4', ''),
(77, 'Rijadi', 'fdaafd, da', '045803210', 'rijadi1@hotmail.com', '10', '8', '6d92175769c1489ec6f0125df8eb6703.jpg'),
(84, 'Rijadi', 'asd', 'dasdas', 'rijadi1@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsa', 'asdsa', '1604529_397276953749932_1151503822_n.jpg'),
(85, 'Rijadi', 'Elektronik', '045803210', 'rijadi1@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsa', 'asdsa', '1654-beach-volleyball-pic.jpg'),
(86, 'rijadi', 'Elektronik', '045803210', 'aid@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsa', 'asdsa', 'k2-_6966e100-ce11-4769-a64d-1c04d0b5fd23.v1.jpg'),
(87, '', '', '', '', '', '', ''),
(88, 'Rijadi', '', '045803210', 'rijadi1@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsa', '', '1002152_622603874430302_1079550256_n.jpg'),
(89, 'Rijadii', '', '045803210', 'rijadi1@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsa', '', '1604529_397276953749932_1151503822_n.jpg'),
(90, 'Rijadi', '', '045803210', 'rijadi_c.ronaldo@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsa', '', '4275-kosovo-flag-painted-on-a-mans-face (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(250) NOT NULL,
  `Kategoria` varchar(120) NOT NULL,
  `Link` varchar(250) NOT NULL,
  `Telefoni` varchar(250) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pershkrimi` varchar(100) NOT NULL,
  `Qyteti` varchar(100) NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`ID`, `Emri`, `Kategoria`, `Link`, `Telefoni`, `Email`, `Pershkrimi`, `Qyteti`, `image`) VALUES
(126, 'Rijadia', 'Hotelieri', '', '045803210', 'rijadi1@hotmail.com', 'Qka bane qysh je              ', 'Peja', '6158_967400806647110_1714497937345609889_n.jpg'),
(125, 'rijadi', 'Hotelieri', '', '045803210', 'aid@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsa', 'Peja', ''),
(124, 'Rijadi', 'Transportues', '', '0458032102222', 'rijadi_c.ronaldo@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsaadfa', 'Peja', '11061284_392134944311408_5871029778025808831_n.jpg'),
(121, 'rijadi', 'Marketing', '', '045803210', 'rijadi1@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsa', 'Peja', '1654-beach-volleyball-pic.jpg'),
(122, 'asdsdasda', 'Ondulim', '', '045803210', 'aid@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsa', 'Peja', '10245419_740219696008726_6172383560826294119_n.jpg'),
(120, 'rijadi1222', 'Pastrim dhe Mirembajtje', '', '045803210', 'rijadi_c.ronaldo@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsa', 'Peja', '1441451_670330376324318_1845934155_n (1).jpg'),
(117, 'fASAD', 'Makineri', '', '045803210', 'rijadi1@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsa', 'Peja', '1441451_670330376324318_1845934155_n (1).jpg'),
(128, 'AAAAAAA TEST', 'Ndertim', '', '049/812-1890', 'gmuliqi@gmail.com', 'kompani qe merret me xhirime', 'Peja', '4275-kosovo-flag-painted-on-a-mans-face (1).jpg'),
(129, 'rijadi', 'Hotelieri', '', '045803210', 'rijadi1@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsa', 'Peja', '6d92175769c1489ec6f0125df8eb6703.jpg'),
(130, 'rijadi', 'Hotelieri', '', '045803210', 'rijadi1@hotmail.com', 'Qka bane ', 'Peja', '1002152_622603874430302_1079550256_n.jpg'),
(131, 'asdsdads', 'Sanitari', '', '045803210', 'aid@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsaadfa', 'Prishtina', '6d92175769c1489ec6f0125df8eb6703.jpg'),
(133, 'rijadi', 'Makineri', '', '045803210', 'rijadi1@hotmail.com', 'Qka bane ', 'Podujeva', '4275-kosovo-flag-painted-on-a-mans-face (1).jpg'),
(135, 'saddssa', 'Hotelieri', 'https://www.facebook.com/telegraficom', '045803210', 'rijadi1@hotmail.com', 'fdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsafdafdaadfsfdsa', 'Podujeva', '6d92175769c1489ec6f0125df8eb6703.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcomputers`
--
ALTER TABLE `tblcomputers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblcomputers`
--
ALTER TABLE `tblcomputers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
