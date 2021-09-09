-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 02:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
  `id` int(3) NOT NULL,
  `Bodynumber` varchar(17) NOT NULL COMMENT 'เลขตัวถัง',
  `Brand` char(10) NOT NULL COMMENT 'ยี่ห้อ',
  `Generation` varchar(20) NOT NULL COMMENT 'รุ่น',
  `License_plate` varchar(8) NOT NULL COMMENT 'ทะเบียนรถ',
  `Price` int(5) NOT NULL COMMENT 'ราคา',
  `Geartype` char(20) NOT NULL COMMENT 'เกียร์',
  `Color` char(20) NOT NULL COMMENT 'สี',
  `Passenger` int(2) NOT NULL COMMENT 'ผู้โดยสาร',
  `Detail` varchar(300) NOT NULL COMMENT 'รายละเอียด',
  `Picture` varchar(255) NOT NULL COMMENT 'รูปภาพ',
  `Car_Type` char(40) NOT NULL COMMENT 'ประเภทรถ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `Bodynumber`, `Brand`, `Generation`, `License_plate`, `Price`, `Geartype`, `Color`, `Passenger`, `Detail`, `Picture`, `Car_Type`) VALUES
(1, 'MNBAXXMAWAFJ98812', 'Toyota', 'Vios 2015', 'กย-1457', 200, 'AUTO', 'น้ำตาล', 5, 'FM/AM Radio USB/AUX CD/MP3', '20200223_104033.jpg', 'รถเก๋ง'),
(2, 'MRHCR2640DP106543', 'Nissan', 'Note 2017', 'กข-8514', 300, 'AUTO', 'แดง', 4, 'FM/AM Radio USB/AUX Bluetooth', '20200223_103941.jpg', 'Eco Car'),
(3, 'MSKI487COINM52369', 'Honda', 'City 2015', 'ขน-5698', 300, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3', '20200223_103418.png', 'รถเก๋ง'),
(4, 'KMDSS587CD478EEOI', 'Toyota', 'Vios 2018', 'กก-2541', 300, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX ', '20200223_103556.png', 'รถเก๋ง'),
(5, 'MKJ784CKINMBOPE4S', 'Honda', 'City 2019', 'นร-8974', 400, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3', '20200223_103828.png', 'รถเก๋ง'),
(6, 'XDEWQE78DC54HJUI4', 'Toyota', 'Yaris 2018', 'กส-5821', 300, 'AUTO', 'แดง', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth', '20200223_104257.png', 'Eco Car'),
(7, '4CHJKI5EQW8LOIUJ5', 'Suzuki', 'Swift 2018', 'ปท-6325', 300, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3 ', '20200223_104435.png', 'Eco Car'),
(8, 'SLCKI74AS5EWV89LM', 'Honda', 'Jazz 2018', 'ทส-9682', 300, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3', '20200223_104553.png', 'รถเก๋ง'),
(9, 'DPOI74TY52CLK8962', 'Honda', 'CR-V 2015 ', 'พย-9746', 300, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth 4WD', '20200223_104815.png', 'SUV'),
(10, 'ASE58CNBVF52YUJH4', 'Isuzu', 'MU X 2019 ', 'จต-7415', 400, 'AUTO', 'ขาว', 7, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth 4WD GPS ', '20200223_105039.png', 'SUV'),
(11, 'PLOWE58RK4IU56VBN', 'Toyota', 'Fortuner 2', 'คข-9659', 400, 'AUTO', 'ขาว', 7, 'FM/AM Radio USB/AU CD/MP3 Bluetooth 4WD GPS ', '20200223_105241.png', 'SUV'),
(12, 'DSSSCVQW58EPKJ74M', 'MG', 'ZS 2019 ', 'ขก-5588', 400, 'AUTO', 'น้ำเงิน', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth', '20200223_105459.png', 'SUV'),
(13, 'POMJ45BNV2ZS58EOU', 'Nissan', 'Teana 2019', 'ยน-5236', 300, 'AUTO', 'แดง', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth GPS', '20200223_105702.png', 'รถเก๋ง'),
(14, 'OPEW58CVZAQAD458Y', 'Toyota', 'Alphard 2019', 'หก-7488', 400, 'AUTO', 'ขาว', 7, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth GPS\r\n', '20200223_110450.png', 'Van'),
(15, '48CVBJ54KIOM1254G', 'Toyota', 'Vellfire 2', 'รน-1254', 400, 'AUTO', 'ดำ', 7, 'FM/AM Radio        USB/AUX      CD/MP3 Bluetooth GPS ', '20200223_113308.png', 'Van'),
(16, 'AQ85CX4D5VV47B8BB', 'Mercedes', 'CLA 2016 ', 'วย-3678', 450, 'AUTO', 'ขาว', 4, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth GPS 4WD', '20200223_113812.png', 'Luxury'),
(17, 'ADX25CDEE4DAJUYHN', 'BMW', 'Series 3 2019', 'ตท-8121', 500, 'AUTO', 'น้ำเงิน', 4, 'FM/AM Radio USB/AUX CD/MP3 ', '20200223_114012.png', 'Luxury'),
(18, 'JD5CVBNRTG47NMBHJ', 'Mercedes', 'Benz C Class 2019', 'พก-6441', 500, 'AUTO', 'ขาว', 5, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth GPS ', '20200223_114257.png', 'Luxury'),
(19, 'MKIOPDC4BNH5UIOPL', 'Audi', 'A5 2019 ', 'สห-4478', 600, 'AUTO', 'ขาว', 4, 'FM/AM Radio USB/AUX CD/MP3 Bluetooth 4WD', '20200223_114434.png', 'Luxury'),
(20, 'WEQ4V5CZXS859EQRT', 'Lamborghin', 'Aventador ', 'กก-4158', 600, 'AUTO', 'ดำ', 2, 'FM/AM Radio USB/AUX CD/MP3', '20200223_114630.png', 'Luxury');

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
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`ID_con`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID_dep`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`Number_rent`);

--
-- Indexes for table `tax_invoice`
--
ALTER TABLE `tax_invoice`
  ADD PRIMARY KEY (`ID_tax`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `Number_rent` int(3) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่เช่า', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
