-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 02:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kagatsarap`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category`) VALUES
('All-Time Favorites Hits'),
('Barkada Meals'),
('Rice Meals');

-- --------------------------------------------------------

--
-- Table structure for table `contacttbl`
--

CREATE TABLE `contacttbl` (
  `No` int(250) NOT NULL,
  `contactName` varchar(50) NOT NULL,
  `contactNumber` varchar(25) NOT NULL,
  `contactEmail` varchar(200) NOT NULL,
  `contactcomments` varchar(250) NOT NULL,
  `contactDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacttbl`
--

INSERT INTO `contacttbl` (`No`, `contactName`, `contactNumber`, `contactEmail`, `contactcomments`, `contactDate`) VALUES
(8, 'Angel Gabriel', '09204966789', 'angel_gram_gabriel@yahoo.com', 'Sarap ng Tilapia Pero May dugo pa yung chicken ninyo.', '2019-10-09 12:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `customertbl`
--

CREATE TABLE `customertbl` (
  `UserID` int(10) NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customertbl`
--

INSERT INTO `customertbl` (`UserID`, `Fname`, `Lname`, `Address`, `ContactNumber`, `Email`, `Username`, `Password`, `Status`) VALUES
(3, 'Angel', 'Gabriel', 'Tabon 3 Kawit Cavite 229', '09204966789', 'angel_gram_gabriel@yahoo.', 'Angel', 'd9b1d7db4cd6e70935368a1efb10e377', 1),
(4, 'Legna', 'Gabriel', 'dfvxzczxcs', '0935123456', 'angel_gram_gabriel@yahoo.', 'Legna', 'd9b1d7db4cd6e70935368a1efb10e377', 1),
(5, 'Marcelo', 'Labi', 'sampaloc manila 216', '0935123456', 'angelgramgabriel@yahoo.co', 'Labi', 'd9b1d7db4cd6e70935368a1efb10e377', 1),
(6, 'Airbinay', 'Mendoza', 'Sampaloc, Manila', '09955698976', 'airbinay2@gmail.com', 'dante', 'd9b1d7db4cd6e70935368a1efb10e377', 1),
(7, 'kael', 'duterte', 'Malacanang', '0995568789', 'duterte@yahoo.com', 'du30', 'd9b1d7db4cd6e70935368a1efb10e377', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `ItemName` varchar(25) NOT NULL,
  `ItemQuantity` decimal(20,2) NOT NULL,
  `ItemUnits` varchar(10) NOT NULL,
  `ItemCategory` varchar(25) NOT NULL,
  `ItemPrice` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`ItemName`, `ItemQuantity`, `ItemUnits`, `ItemCategory`, `ItemPrice`) VALUES
('Coke Mismo', '20.00', 'pcs', 'Softdrinks', 12),
('Pork Belly', '250.00', 'g', 'Pork', 80),
('RC', '50.00', 'pcs', 'Softdrinks', 12),
('Tilapya', '10.00', 'g', 'Fish', 30);

-- --------------------------------------------------------

--
-- Table structure for table `inventorycategory`
--

CREATE TABLE `inventorycategory` (
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventorycategory`
--

INSERT INTO `inventorycategory` (`Category`) VALUES
('Chicken'),
('Fish'),
('Pork'),
('Softdrinks');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `NoAction` int(250) NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `Details` varchar(100) NOT NULL,
  `DateMade` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`NoAction`, `Fname`, `Lname`, `Details`, `DateMade`) VALUES
(10, 'Gram', 'Montoya', 'has update a passsword of a account named Gaba Gram', '2019-09-10 11:25:12'),
(11, 'Gram', 'Montoya', 'has change the status account of Gaba Gram', '2019-09-10 11:25:57'),
(12, 'Gram', 'Montoya', 'has change the Position of Gaba Gram', '2019-09-10 11:28:52'),
(13, 'Gram', 'Montoya', 'has change the Position of Gaba Gram', '2019-09-10 11:29:26'),
(14, 'Gram', 'Montoya', 'has change the Position of Gaba Gram', '2019-09-10 11:29:49'),
(15, 'Gram', 'Montoya', 'has change the Position of Gaba Gram', '2019-09-10 11:32:19'),
(16, 'Gram', 'Montoya', 'has change the Position of Gaba Gram', '2019-09-10 11:33:56'),
(17, 'Gram', 'Montoya', 'has change the status account of Gaba Gram', '2019-09-15 09:25:07'),
(18, 'Gram', 'Montoya', 'has created a Item named ', '2019-09-18 03:28:36'),
(19, 'Gram', 'Montoya', 'has send the SMS stated the Order No.  is now being process.', '2019-09-18 03:36:07'),
(20, 'Gram', 'Montoya', 'has send the SMS stated the Order No.  is now being process.', '2019-09-18 03:37:32'),
(21, 'Gram', 'Montoya', 'has send the SMS stated the Order No.  is now being process.', '2019-09-18 03:39:20'),
(22, 'Gram', 'Montoya', 'has send the SMS stated the Order No.  is now being process.', '2019-09-18 04:25:46'),
(23, 'Gram', 'Montoya', 'has send the SMS stated the Order No.  is now being process.', '2019-09-26 09:57:47'),
(24, 'Gram', 'Montoya', 'has Pass the Order No.  to the Driver.', '2019-10-02 02:22:30'),
(25, 'Gaba', 'Gram', 'has completed the Order No. 24.', '2019-10-02 02:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `ordertbl`
--

CREATE TABLE `ordertbl` (
  `OrderNo` int(25) NOT NULL,
  `UserID` int(20) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `ProductName` varchar(25) NOT NULL,
  `ProductQuantity` int(25) NOT NULL,
  `ProductPrice` int(25) NOT NULL,
  `TotalAmount` int(25) NOT NULL,
  `OnChange` varchar(25) NOT NULL,
  `UnCode` varchar(25) NOT NULL,
  `SendSMS` int(11) NOT NULL DEFAULT '0',
  `SendDriver` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertbl`
--

INSERT INTO `ordertbl` (`OrderNo`, `UserID`, `Fname`, `Lname`, `Address`, `ContactNumber`, `ProductName`, `ProductQuantity`, `ProductPrice`, `TotalAmount`, `OnChange`, `UnCode`, `SendSMS`, `SendDriver`) VALUES
(25, 3, 'Angel', 'Gabriel', 'Tabon 3 Kawit Cavite 229', '09204966789', 'Pritong Pata', 1, 340, 340, '40', '2019091552151', 1, 0),
(25, 3, 'Angel', 'Gabriel', 'Tabon 3 Kawit Cavite 229', '09204966789', 'Pritong Liempo', 1, 320, 320, '40', '2019091552151', 1, 0),
(26, 0, 'Angel', 'Gabriel', 'Tabon 3 Kawit Cavite 229', '09204966789', 'Pritong Manok', 1, 75, 75, 'GCash', '2019092650176', 1, 0),
(28, 0, 'Angel', 'Gabriel', 'Tabon 3 Kawit Cavite 229', '09204966789', 'Pritong Isaw', 1, 60, 60, 'GCash', '2019093056934', 0, 0),
(29, 0, 'Angel', 'Gabriel', 'Tabon 3 Kawit Cavite 229', '09204966789', 'Pritong Manok', 1, 75, 75, 'GCash', '2019093047265', 0, 0),
(30, 0, 'Angel', 'Gabriel', 'Tabon 3 Kawit Cavite 229', '09204966789', 'Pritong Pata', 1, 340, 340, 'GCash', '2019100133668', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `producttbl`
--

CREATE TABLE `producttbl` (
  `ProductID` int(25) NOT NULL,
  `ProductName` varchar(25) NOT NULL,
  `ProductDesc` varchar(250) NOT NULL,
  `ProductPrice` varchar(25) NOT NULL,
  `ProductImage` varchar(100) NOT NULL,
  `ProductCategory` varchar(25) NOT NULL,
  `Ingredient` varchar(40) NOT NULL,
  `NoIngredients` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttbl`
--

INSERT INTO `producttbl` (`ProductID`, `ProductName`, `ProductDesc`, `ProductPrice`, `ProductImage`, `ProductCategory`, `Ingredient`, `NoIngredients`) VALUES
(1, 'Pritong Pata', 'Ang Paborito mong Hit na Pritong Pata!', '340', 'menu/prt_pata.jpg', 'All-Time Favorites Hits', 'Pork Belly', '50.00'),
(2, 'Pritong Liempo', 'Ang Paborito mong Hit na Pritong Liempo!', '320', 'menu/prt_liempo.jpg', 'All-Time Favorites Hits', 'Pork Belly', '50.00'),
(3, 'Pritong Manok', 'Ang Paborito mong Hit na Pritong Manok!', '240', 'menu/prt_manok.jpg', 'All-Time Favorites Hits', 'Pork Belly', '50.00'),
(4, 'Pritong Ulo', 'Ang Paborito mong Hit na Pritong Ulo!', '420', 'menu/prt_ulo.jpg', 'All-Time Favorites Hits', 'Pork Belly', '50.00'),
(5, 'Pritong Buto\'t Laman', 'Ang Paborito mong Hit na Pritong Buto\'t Laman!', '270', 'menu/prt_butotlaman.jpg', 'All-Time Favorites Hits', 'Pork Belly', '50.00'),
(6, 'Pritong Sisig Pork', 'Ang Paborito mong Hit na Pritong Pork Sisig!', '140', 'menu/prt_sisig.jpg', 'All-Time Favorites Hits', 'Pork Belly', '50.00'),
(7, 'PritongBulaklak', 'Ang Paborito mong Hit na Pritong Bulaklak!', '220', 'menu/prt_bulaklak.jpg', 'All-Time Favorites Hits', 'Pork Belly', '50.00'),
(8, 'Pritong Itik', 'Ang Paborito mong Hit na Pritong Itik!', '210', 'menu/prt_itik.jpg', 'All-Time Favorites Hits', 'Pork Belly', '50.00'),
(11, 'Pritong Bituka', 'Ang Paborito mong Hit na Pritong Bituka!', '170', 'menu/prt_bituka.jpg', 'All-Time Favorites Hits', 'Pork Belly', '50.00'),
(12, 'Pritong Isaw', 'Ang Paborito mong Hit na Pritong Isaw!', '220', 'menu/prt_isaw.jpg', 'All-Time Favorites Hits', 'Pork Belly', '50.00'),
(13, 'Pritong NekNek', 'Ang Paborito mong Hit na Pritong NekNek!', '105', 'menu/prt_neknek.jpg', 'All-Time Favorites Hits', 'Pork Belly', '50.00'),
(14, 'Pritong PakPak', 'Ang Paborito mong Hit na Pritong PakPak!', '115', 'menu/prt_pakpak.jpg', 'All-Time Favorites Hits', 'Pork Belly', '50.00'),
(15, 'Pritong Manok', 'Ang Paborito mong Hit na Pritong Manok!', '75', 'menu/prt_manok_RM.jpg', 'Rice Meals', 'Pork Belly', '50.00'),
(16, 'PritongLiempo', 'Ang Paborito mong Rice Meal na Pritong Liempo!', '90', 'menu/prt_Liempo_RM.jpg', 'Rice Meals', 'Pork Belly', '50.00'),
(21, 'Pritong Bulaklak', 'Ang Paborito mong Rice Meal na Pritong Bulaklak!', '60', 'menu/prt_bulaklak_RM.jpg', 'Rice Meals', 'Pork Belly', '50.00'),
(22, 'Pritong Bituka', 'Ang Paborito mong Rice Meal na Pritong Bituka!', '55', 'menu/prt_bituka_RM.jpg', 'Rice Meals', 'Pork Belly', '50.00'),
(23, 'Pritong PakPak', 'Ang Paborito mong Rice Meal na Pritong PakPak!', '65', 'menu/prt_pakpak_RM.jpg', 'Rice Meals', 'Pork Belly', '50.00'),
(24, 'Pritong NekNek', 'Ang Paborito mong Rice Meal na Pritong NekNek!', '60', 'menu/prt_neknek_RM.jpg', 'Rice Meals', 'Pork Belly', '50.00'),
(25, 'Pritong Sisig', 'Ang Paborito mong Rice Meal na Pritong Sisig!', '60', 'menu/prt_sisig_RM.jpg', 'Rice Meals', 'Pork Belly', '50.00'),
(26, 'Pritong Isaw', 'Ang Paborito mong Rice Meal na Pritong Isaw!', '60', 'menu/prt_isaw_RM.jpg', 'Rice Meals', 'Pork Belly', '50.00'),
(27, 'PritongPata (BM)', 'BM1 Medium Pata ang paboritong Pata ng inyong Barkada!', '400', 'menu/prt_pata_BM.jpg', 'Barkada Meals', 'Pork Belly', '50.00'),
(28, 'PritongManok (BM)', 'BM2 Whole Chicken ang paboritong Manok ng inyong Barkada!', '270', 'menu/prt_manok_BM.jpg', 'Barkada Meals', 'Pork Belly', '50.00'),
(29, 'PritongLiempo(BM)', 'BM3 Whole Liempo ang paboritong Liempo ng inyong Barkada!', '350', 'menu/prt_liempo_BM.jpg', 'Barkada Meals', 'Pork Belly', '50.00'),
(30, 'PritongButo\'t Laman(BM)', 'BM4 Buto\'t Laman ang paboritong Buto\'t Laman ng inyong Barkada!', '300', 'menu/prt_butotlaman_BM.jpg', 'Barkada Meals', 'Pork Belly', '50.00'),
(31, 'PritongUlo (BM)', 'BM5 Ulo ang paboritong Ulo ng inyong Barkada!', '480', 'menu/prt_ulo_BM.jpg', 'Barkada Meals', 'Pork Belly', '50.00'),
(32, 'PritongItik (BM)', 'BM6 Itik ang paboritong Itik ng inyong Barkada!', '240', 'menu/prt_itik_BM.jpg', 'Barkada Meals', 'Pork Belly', '50.00'),
(33, 'SpecialSisig (BM)', 'BM7 Sisig ang paboritong sisig ng inyong Barkada!', '170', 'menu/prt_sisig_BM.jpg', 'Barkada Meals', 'Pork Belly', '50.00'),
(34, 'Bulaklak (BM)', 'BM8 Bulaklak ang paboritong Bulaklak ng inyong Barkada!', '250', 'menu/prt_bulaklak_BM.jpg', 'Barkada Meals', 'Pork Belly', '50.00');

-- --------------------------------------------------------

--
-- Table structure for table `salestbl`
--

CREATE TABLE `salestbl` (
  `OrderNo` int(10) NOT NULL,
  `Customer` varchar(20) NOT NULL,
  `ProductName` varchar(25) NOT NULL,
  `ProductQuantity` varchar(25) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `UnCode` varchar(20) NOT NULL,
  `Usertype` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Datetransacted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salestbl`
--

INSERT INTO `salestbl` (`OrderNo`, `Customer`, `ProductName`, `ProductQuantity`, `TotalAmount`, `UnCode`, `Usertype`, `Username`, `Datetransacted`) VALUES
(18, 'dante', 'PritongPata (BM)', '2', 800, '2019091556927', '2', 'Admin', '2018-08-22 12:35:26'),
(18, 'dante', 'PritongManok (BM)', '1', 270, '2019091556927', '2', 'Admin', '2018-08-22 12:35:26'),
(18, 'dante', 'PritongLiempo(BM)', '2', 700, '2019091556927', '2', 'Admin', '2018-08-22 12:35:26'),
(20, 'du30', 'Pritong Manok', '1', 75, '2019091556927', '2', 'Admin', '2019-08-23 05:13:37'),
(21, 'Angel', 'Pritong Pata', '2', 680, '2019091556927', '2', 'Admin', '2019-08-23 05:28:43'),
(22, 'Angel', 'Pritong Bituka', '1', 170, '2019091556927', '2', 'Admin', '2019-09-13 03:04:28'),
(24, 'Angel', 'Pritong Itik', '2', 420, '2019091552151', '3', 'Staff2', '2019-10-02 02:30:39'),
(24, 'Angel', 'Pritong Bulaklak', '3', 180, '2019091552151', '3', 'Staff2', '2019-10-02 02:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `OrderNo` varchar(25) NOT NULL,
  `SMSname` varchar(25) NOT NULL,
  `SMSapikey` varchar(50) NOT NULL,
  `GCashNum` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`OrderNo`, `SMSname`, `SMSapikey`, `GCashNum`) VALUES
('31', 'SEMAPHORE', '3b3ba92331450d9871dc7a1b83a1c378', '09204966789');

-- --------------------------------------------------------

--
-- Table structure for table `stafftbl`
--

CREATE TABLE `stafftbl` (
  `UserID` int(25) NOT NULL,
  `UserType` varchar(25) NOT NULL,
  `SFname` varchar(25) NOT NULL,
  `SLname` varchar(25) NOT NULL,
  `SUsername` varchar(25) NOT NULL,
  `SPassword` varchar(250) NOT NULL,
  `Status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafftbl`
--

INSERT INTO `stafftbl` (`UserID`, `UserType`, `SFname`, `SLname`, `SUsername`, `SPassword`, `Status`) VALUES
(1, '2', 'Gram', 'Montoya', 'Admin', 'd9b1d7db4cd6e70935368a1efb10e377', 1),
(2, '1', 'Gabriel', 'Legna', 'Staff', 'd9b1d7db4cd6e70935368a1efb10e377', 2),
(3, '3', 'Gaba', 'Gram', 'Staff2', 'd9b1d7db4cd6e70935368a1efb10e377', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactiontbl`
--

CREATE TABLE `transactiontbl` (
  `TransactionNumber` int(25) NOT NULL,
  `ProductName` varchar(25) NOT NULL,
  `ProductQuantity` varchar(25) NOT NULL,
  `ProductPrice` varchar(25) NOT NULL,
  `dateTransacted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Username` varchar(25) NOT NULL,
  `UserID` int(11) NOT NULL,
  `UserType` varchar(25) NOT NULL,
  `Incharge` varchar(50) NOT NULL,
  `UnCode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactiontbl`
--

INSERT INTO `transactiontbl` (`TransactionNumber`, `ProductName`, `ProductQuantity`, `ProductPrice`, `dateTransacted`, `Username`, `UserID`, `UserType`, `Incharge`, `UnCode`) VALUES
(22, 'PritongBulaklak', '1', '220', '2019-09-13 03:10:21', 'Angel', 3, '2', 'Gram Montoya', '2019091556927'),
(22, 'Pritong PakPak', '1', '115', '2019-09-13 03:10:21', 'Angel', 3, '2', 'Gram Montoya', '2019091556927'),
(23, 'PritongBulaklak', '1', '220', '2019-09-13 03:30:01', 'Angel', 3, '2', 'Gram Montoya', '2019091556927'),
(23, 'Pritong PakPak', '1', '115', '2019-09-13 03:30:01', 'Angel', 3, '2', 'Gram Montoya', '2019091556927'),
(24, 'Pritong Itik', '2', '210', '2019-10-02 02:30:39', 'Angel Gabriel', 3, '3', 'Gaba Gram', '2019091552151'),
(24, 'Pritong Bulaklak', '3', '60', '2019-10-02 02:30:39', 'Angel Gabriel', 3, '3', 'Gaba Gram', '2019091552151');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category`);

--
-- Indexes for table `contacttbl`
--
ALTER TABLE `contacttbl`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `customertbl`
--
ALTER TABLE `customertbl`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ItemName`);

--
-- Indexes for table `inventorycategory`
--
ALTER TABLE `inventorycategory`
  ADD PRIMARY KEY (`Category`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`NoAction`);

--
-- Indexes for table `producttbl`
--
ALTER TABLE `producttbl`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`OrderNo`);

--
-- Indexes for table `stafftbl`
--
ALTER TABLE `stafftbl`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacttbl`
--
ALTER TABLE `contacttbl`
  MODIFY `No` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customertbl`
--
ALTER TABLE `customertbl`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `NoAction` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `producttbl`
--
ALTER TABLE `producttbl`
  MODIFY `ProductID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `stafftbl`
--
ALTER TABLE `stafftbl`
  MODIFY `UserID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
