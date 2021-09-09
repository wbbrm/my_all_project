-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 11:47 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrentaaa`
--
CREATE DATABASE IF NOT EXISTS `carrentaaa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `carrentaaa`;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `Bodynumber` varchar(17) NOT NULL COMMENT 'เลขตัวถัง',
  `Brand` char(12) NOT NULL COMMENT 'ยี่ห้อ',
  `Generation` varchar(20) NOT NULL COMMENT 'รุ่น',
  `License_plate` varchar(8) NOT NULL COMMENT 'ทะเบียนรถ',
  `Car_type` char(40) NOT NULL COMMENT 'ประเภทรถ',
  `Price` int(5) NOT NULL COMMENT 'ราคา',
  `Geartype` char(20) NOT NULL COMMENT 'เกียร์',
  `Color` char(20) NOT NULL COMMENT 'สี',
  `Passenger` int(2) NOT NULL COMMENT 'ผู้โดยสาร',
  `Detail` varchar(300) NOT NULL COMMENT 'รายละเอียด',
  `Picture` varchar(255) NOT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `Bodynumber`, `Brand`, `Generation`, `License_plate`, `Car_type`, `Price`, `Geartype`, `Color`, `Passenger`, `Detail`, `Picture`) VALUES
(1, 'MNBAXXMAWAFJ98812', 'Toyota', 'Vios 2015', 'กย-1457', 'รถเก๋ง', 200, 'AUTO', 'น้ำตาล', 5, 'FM/AM Radio USB/AUX CD/MP3', '20200223_104033.jpg'),
(2, 'MRHCR2640DP106543', 'Nissan', 'Note 2017', 'กข-8514', 'Eco Car', 300, 'AUTO', 'แดง', 4, 'FM/AM Radio USB/AUX Bluetooth', '20200223_103941.jpg'),
(3, 'MSKI487COINM52369', 'Honda', 'City 2015', 'ขน-5698', 'รถเก๋ง', 300, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3', '20200223_103418.png'),
(4, 'KMDSS587CD478EEOI', 'Toyota', 'Vios 2018', 'กก-2541', 'รถเก๋ง', 300, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX ', '20200223_103556.png'),
(5, 'MKJ784CKINMBOPE4S', 'Honda', 'City 2019', 'นร-8974', 'รถเก๋ง', 400, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3', '20200223_103828.png'),
(6, 'XDEWQE78DC54HJUI4', 'Toyota', 'Yaris 2018', 'กส-5821', 'Eco Car', 300, 'AUTO', 'แดง', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth', '20200223_104257.png'),
(7, '4CHJKI5EQW8LOIUJ5', 'Suzuki', 'Swift 2018', 'ปท-6325', 'Eco Car', 300, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3 ', '20200223_104435.png'),
(8, 'SLCKI74AS5EWV89LM', 'Honda', 'Jazz 2018', 'ทส-9682', 'รถเก๋ง', 300, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3', '20200223_104553.png'),
(9, 'DPOI74TY52CLK8962', 'Honda', 'CR-V 2015 ', 'พย-9746', 'SUV', 300, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth 4WD', '20200223_104815.png'),
(10, 'ASE58CNBVF52YUJH4', 'Isuzu', 'MU X 2019 ', 'จต-7415', 'SUV', 400, 'AUTO', 'ขาว', 7, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth 4WD GPS ', '20200223_105039.png'),
(11, 'PLOWE58RK4IU56VBN', 'Toyota', 'Fortuner 2019', 'คข-9659', 'SUV', 400, 'AUTO', 'ขาว', 7, 'FM/AM Radio USB/AU CD/MP3 Bluetooth 4WD GPS ', '20200223_105241.png'),
(12, 'DSSSCVQW58EPKJ74M', 'MG', 'ZS 2019 ', 'ขก-5588', 'SUV', 400, 'AUTO', 'น้ำเงิน', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth', '20200223_105459.png'),
(13, 'POMJ45BNV2ZS58EOU', 'Nissan', 'Teana 2019', 'ยน-5236', 'รถเก๋ง', 300, 'AUTO', 'แดง', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth GPS', '20200223_105702.png'),
(14, 'OPEW58CVZAQAD458Y', 'Toyota', 'Alphard 2019', 'หก-7488', 'Van', 400, 'AUTO', 'ขาว', 7, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth GPS\r\n', '20200223_110450.png'),
(15, '48CVBJ54KIOM1254G', 'Toyota', 'Vellfire 2', 'รน-1254', 'Van', 400, 'AUTO', 'ดำ', 7, 'FM/AM Radio        USB/AUX      CD/MP3 Bluetooth GPS ', '20200223_113308.png'),
(16, 'AQ85CX4D5VV47B8BB', 'Mercedes', 'CLA 2016 ', 'วย-3678', 'Luxury', 450, 'AUTO', 'ขาว', 4, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth GPS 4WD', '20200223_113812.png'),
(17, 'ADX25CDEE4DAJUYHN', 'BMW', 'Series 3 2019', 'ตท-8121', 'Luxury', 500, 'AUTO', 'น้ำเงิน', 4, 'FM/AM Radio USB/AUX CD/MP3 ', '20200223_114012.png'),
(18, 'JD5CVBNRTG47NMBHJ', 'Mercedes', 'Benz C Class 2019', 'พก-6441', 'Luxury', 500, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth GPS ', '20200223_114257.png'),
(19, 'MKIOPDC4BNH5UIOPL', 'Audi', 'A5 2019 ', 'สห-4478', 'Luxury', 600, 'AUTO', 'ขาว', 4, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth 4WD', '20200223_114434.png'),
(20, 'WEQ4V5CZXS859EQRT', 'Lamborghini', 'Aventador ', 'กก-4158', 'Luxury', 60000, 'AUTO', 'ดำ', 2, 'FM/AM Radio USB/AUX CD/MP3', '20200223_114630.png'),
(21, 'SD74CVBH58NM4JK57', 'Honda	', 'City 2015', 'คก-8778', 'รถเก๋ง', 300, 'กระปุก', 'ดำ', 5, 'FM/AM Radio USB/AUX CD/MP3	', '20200225_112815.jpg'),
(22, 'WEQ58CLKJU7OPL587', 'Honda	', 'City 2015', 'ยย-6692', 'รถเก๋ง', 300, 'AUTO', 'เทา', 5, 'FM/AM Radio USB/AUX CD/MP3	', '20200225_113204.jpg'),
(23, '85CXHJ44OPE87RG41', 'Toyota	', 'Vios 2018', 'มต-1225', 'รถเก๋ง', 300, 'กระปุก', 'แดง', 5, 'FM/AM Radio USB/AUX	', '20200225_113600.jpg'),
(24, 'GFC14VB4HJNM74KIO', 'Toyota	', 'Yaris 2018', 'กฟ-1445', 'Eco Car', 300, 'กระปุก', 'เขียว', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth', '20200225_115224.jpg'),
(25, 'DCX4ZDSAEQTYH8BNJ', 'Toyota', 'Yaris 2018', 'ทอ-6585', 'Eco Car', 300, 'AUTO', 'ดำ', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth', '20200225_115434.jpg'),
(26, 'LKMMCJUYHV47BNMJO', 'Toyota	', 'Vios 2018', 'บล-6964', 'รถเก๋ง', 300, 'AUTO', 'ดำ', 5, 'FM/AM Radio USB/AUX', '20200225_115742.jpg'),
(27, 'POKID4CV5B2HGFERT', 'Toyota	', 'Vios 2015', 'ยน-9968', 'รถเก๋ง', 200, 'กระปุก', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3', '20200225_120150.jpg'),
(28, 'ADERTYDET4CVBN7JH', 'Toyota', 'Vios 2015', 'พห-2234', 'รถเก๋ง', 200, 'AUTO', 'ดำ', 5, 'FM/AM Radio USB/AUX CD/MP3	', '20200225_140530.jpg'),
(29, 'MYTKJD45CVZX7ERTG', 'Toyota	', 'Vios 2015', 'มส-7741', 'รถเก๋ง', 200, 'กระปุก', 'เทา', 5, 'FM/AM Radio USB/AUX CD/MP3	', '20200225_124057.jpg'),
(30, 'GHJLDKMNBE54WEQRT', 'Toyota	', 'Fortuner 2019', 'สก-2656', 'SUV', 400, 'AUTO', 'ดำ', 7, 'USB/AU CD/MP3 Bluetooth 4WD GPS', '20200225_125938.jpg'),
(31, 'NJKIH47UI5JKIO87I', 'Suzuki	', 'Swift 2018', 'รน-2514', 'Eco Car', 300, 'กระปุก', 'เทา', 5, 'FM/AM Radio USB/AUX CD/MP3	', '20200225_130406.jpg'),
(32, 'ERQE54DFVC74XZSDE', 'Suzuki	', 'Swift 2018', 'มส-2365', 'Eco Car', 300, 'AUTO', 'ดำ', 5, 'FM/AM Radio USB/AUX CD/MP3	', '20200225_135121.jpg'),
(33, 'LKJFG52CXXCVV4DEW', 'Suzuki	', 'Swift 2018', 'งว-9912', 'Eco Car', 300, 'กระปุก', 'เหลือง', 5, 'FM/AM Radio USB/AUX CD/MP3', '20200225_135313.jpg'),
(34, 'POIMJH47GTGHJKMNB', 'Lamborghini	', 'Aventador', 'กก-1111', 'Luxury', 60000, 'AUTO', 'ส้ม', 2, 'FM/AM Radio USB/AUX CD/MP3	', '20200225_140847.jpg'),
(35, 'QWJKKJ47MNLOP4JHY', 'MG	', 'ZS 2019', 'กย-1212', 'SUV', 400, 'กระปุก', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth', '20200225_141313.jpg'),
(36, 'LOIUYREEWDK5MN1BH', 'Nissan	', 'Note 2017', 'อพ-4189', 'Eco Car', 300, 'กระปุก', 'ดำ', 4, 'FM/AM Radio USB/AUX Bluetooth', '20200225_141454.jpg'),
(37, 'OIIUYHBGT41VFGTYU', 'Nissan	', 'Teana 2019', 'ศว-8574', 'รถเก๋ง', 300, 'กระปุก', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth GPS	', '20200225_141911.jpg'),
(38, 'MNBD44EWQDS52CXGG', 'Isuzu	', 'MU X 2019', 'ยฉ-9221', 'SUV', 400, 'กระปุก', 'ดำ', 7, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth 4WD GPS', '20200225_142146.jpg'),
(39, 'IIUYFGBNMKLOP4IUS', 'Honda	', 'Jazz 2018', 'ธร-7754', 'รถเก๋ง', 300, 'กระปุก', 'ดำ', 5, 'FM/AM Radio USB/AUX CD/MP3	', '20200225_142505.jpg'),
(40, 'PWEQSDCCDS5JHBXVB', 'Honda	', 'CR-V 2015', 'ฆด-8852', 'SUV', 300, 'กระปุก', 'ดำ', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth 4WD', '20200225_142741.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `ID_con` int(5) NOT NULL COMMENT 'เลขที่สัญญา',
  `Date_con` date NOT NULL COMMENT 'วันที่ทำสัญญา',
  `ID_emp` int(4) NOT NULL COMMENT 'รหัสพนักงาน',
  `ID_card` varchar(13) NOT NULL COMMENT 'รหัสบัตรประชาชน',
  `Date_exp` date NOT NULL COMMENT 'วันที่สิ้นสุดสัญญา',
  `Condition_rent` char(50) NOT NULL COMMENT 'เงื่อนไข',
  `During_rent` int(3) NOT NULL COMMENT 'ระยะเวลา',
  `Number_rent` int(3) NOT NULL COMMENT 'ลำดับที่เช่า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`ID_con`, `Date_con`, `ID_emp`, `ID_card`, `Date_exp`, `Condition_rent`, `During_rent`, `Number_rent`) VALUES
(16581, '2020-01-01', 5026, '1104200085973', '2020-01-03', 'มั่ว', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `ID_card` varchar(13) NOT NULL COMMENT 'รหัสประจำตัวประชาชน',
  `Address_cus` varchar(50) NOT NULL COMMENT 'ที่อยู่',
  `Phonenumber_cus` varchar(10) NOT NULL COMMENT 'เบอร์โทร',
  `Name_cus` char(25) NOT NULL COMMENT 'ชื่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `ID_card`, `Address_cus`, `Phonenumber_cus`, `Name_cus`) VALUES
(1, '1104200085973', 'เลขที่32 หมู่11 ต.ลำลูกกา อ.ลำลูกกา จ.ปทุมธานี', '0864009274', 'อติกานต์ วิเชียรสมุทร');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID_dep` int(3) NOT NULL COMMENT 'รหัสแผนก',
  `Name_dep` char(15) NOT NULL COMMENT 'ชื่อแผนก',
  `Phonenumber_dep` varchar(10) NOT NULL COMMENT 'เบอร์โทร',
  `Faxnumber_dep` varchar(9) NOT NULL COMMENT 'เบอร์โทรสาร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID_dep`, `Name_dep`, `Phonenumber_dep`, `Faxnumber_dep`) VALUES
(121, 'แผนกดูแลเว็บ', '025877581', '025877580'),
(122, 'แผนกเอกสาร', '025877582', '025877580'),
(123, 'แผนกการเงิน', '025877583', '025877580');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `ID_emp` int(4) NOT NULL COMMENT 'รหัสพนักงาน',
  `Firstname_emp` char(20) NOT NULL COMMENT 'ชื่อจริง',
  `Lastname_emp` char(20) NOT NULL COMMENT 'นามสกุล',
  `Phonenumber_emp` varchar(10) NOT NULL COMMENT 'เบอร์โทร',
  `Address_emp` varchar(50) NOT NULL COMMENT 'ที่อยู่',
  `ID_dep` int(3) NOT NULL COMMENT 'รหัสแผนก',
  `Affiliation_date` date NOT NULL COMMENT 'วันที่สังกัด',
  `Resignation_date` date NOT NULL COMMENT 'วันที่ลาออก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `ID_emp`, `Firstname_emp`, `Lastname_emp`, `Phonenumber_emp`, `Address_emp`, `ID_dep`, `Affiliation_date`, `Resignation_date`) VALUES
(1, 5010, 'พันธกานต์', 'โตเขียว', '0874088069', '71/60 ต.ลาดสวาย อ.ลำลูกกา จ.ปทุมธานี', 121, '2019-12-30', '0000-00-00'),
(2, 5018, 'จตุรงศ์', 'ยุวดำรงชัย', '0874541452', '71/87 ต.ลาดสวาย อ.ลำลูกกา จ.ปทุมธานี', 123, '2019-12-30', '0000-00-00'),
(3, 5026, 'วงศธร', 'วงษ์สุเทพ', '0845877693', '80/14 ต.ประชาธิปัตย์ อ.ธัญบุรี จ.ปทุมธานี', 122, '2019-12-31', '0000-00-00'),
(4, 5030, 'กันต์ฤทัย', 'ขันแสง', '0975856075', '136/89 ต.บางบัวทอง อ.บางบัวทอง จ.นนทบุรี', 121, '2019-12-19', '0000-00-00'),
(5, 5031, 'ภูวรินทร์', 'เนตรไธสง', '0875856921', '39/54 ต.คูคต อ.ลำลูกกา จ.ปทุมธานี', 122, '2019-12-30', '2020-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `Number_rent` int(3) NOT NULL COMMENT 'ลำดับที่เช่า',
  `Date_rent` date NOT NULL COMMENT 'วันที่เช่า',
  `During_rent` int(3) NOT NULL COMMENT 'ระยะเวลา',
  `Date_return` date NOT NULL COMMENT 'วันที่คืน',
  `ID_con` int(5) NOT NULL COMMENT 'เลขที่สัญญา',
  `Bodynumber` varchar(17) NOT NULL COMMENT 'เลขตัวถัง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`Number_rent`, `Date_rent`, `During_rent`, `Date_return`, `ID_con`, `Bodynumber`) VALUES
(1, '2020-01-01', 3, '2020-01-03', 16581, 'MNBAXXMAWAFJ98812');

-- --------------------------------------------------------

--
-- Table structure for table `tax_invoice`
--

CREATE TABLE `tax_invoice` (
  `ID_tax` int(9) NOT NULL COMMENT 'เลขที่ใบกำกับภาษี',
  `ID_emp` int(4) NOT NULL COMMENT 'รหัสพนักงาน',
  `ID_card` varchar(13) NOT NULL COMMENT 'รหัสประจำตัวประชาชน',
  `Name_tax` char(50) NOT NULL COMMENT 'ชื่อรายการ',
  `Date_tax` date NOT NULL COMMENT 'วันที่',
  `ID_con` int(5) NOT NULL COMMENT 'เลขที่สัญญา',
  `Totalmoney_tax` int(6) NOT NULL COMMENT 'จำนวนเงิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax_invoice`
--

INSERT INTO `tax_invoice` (`ID_tax`, `ID_emp`, `ID_card`, `Name_tax`, `Date_tax`, `ID_con`, `Totalmoney_tax`) VALUES
(121458988, 5026, '1104200085973', 'ค่ามัดจำ', '2020-01-01', 16581, 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
