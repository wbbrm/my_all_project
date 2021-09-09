-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2021 at 03:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rspgpnru_mushroom`
--
CREATE DATABASE IF NOT EXISTS `rspgpnru_mushroom` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `rspgpnru_mushroom`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Id` int(11) NOT NULL COMMENT 'รหัสแอดมิน',
  `Username` varchar(25) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'Username ของแอดมิน',
  `Password` varchar(25) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'รหัสผ่าน ของแอดมิน',
  `Status` char(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'สถานะแอดมิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Id`, `Username`, `Password`, `Status`) VALUES
(1, 'wbbrm', '1234', '1');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `MushroomLocationId` varchar(25) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'รหัสตำแหน่งเห็ด',
  `Zone_Id` int(11) NOT NULL COMMENT 'รหัสโซนพื้นที่',
  `Mushroom_Id` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'รหัสเห็ด',
  `LatitudeX` varchar(13) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ละติจูด',
  `LongitudeY` varchar(13) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลองจิจูด',
  `Status` char(2) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'สถานะเห็ด',
  `Status_date` date NOT NULL COMMENT 'วันที่ปรับสถานะ',
  `QRcode` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ไฟล์ QR code'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `Image_Id` int(11) NOT NULL COMMENT 'รหัสภาพ',
  `MushroomLocationId` varchar(25) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'รหัสตำแหน่งเห็ด',
  `ImageType` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ประเภทภาพ',
  `ImageLocationType` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ไฟล์ภาพในแต่ละประเภทภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mushroom`
--

CREATE TABLE `mushroom` (
  `Mushroom_Id` varchar(25) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'รหัสเห็ด',
  `Mushroom_name` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ชื่อเห็ด',
  `Mushroom_localname` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ชื่อท้องถิ่น',
  `Mushroom_commonname` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ชื่อสามัญ',
  `Mushroom_science` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ชื่อวิทยาศาสตร์',
  `Name_discover` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ชื่อผู้ค้นพบ',
  `Mushroom_icon` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ไฟล์ภาพไอคอนเห็ด',
  `Mushroom_type` char(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ชนิดของเห็ด',
  `Mushroom_habitat` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'แหล่งที่อยู่อาศัย',
  `Mushroom_growth` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'การเจริญของดอกเห็ด',
  `Mushroom_benefit` char(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ประโยชน์ของเห็ด',
  `Mushroom_description` char(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'สรุป',
  `Cap_up` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะหมวกเห็ดเมื่อมองจากด้านบน',
  `Cap_side` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะหมวเห็ดเมื่อมองจากด้านข้าง',
  `Cap_center` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะตรงกลางหมวกเห็ด',
  `Cap_margin` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะขอบหมวกเห็ด',
  `Surface_up` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะพื้นผิวด้านบนหมวกเห็ด',
  `Surface_up_pic` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'รูปลักษณะพื้นผิวด้านบนหมวกเห็ด',
  `Surface_margin` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะพื้นผิวขอบหมวกเห็ด',
  `Surface_margin_pic` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'รูปลักษณะพื้นผิวขอบหมวกเห็ด',
  `Radius` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'เส้นผ่าศูนย์กลางของหมวกเห็ด',
  `Height` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ความสูงของหมวกเห็ด',
  `Cap_color` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'สีของหมวก',
  `Undercap` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะใต้หมวกเห็ด',
  `Gills` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะของครีบ',
  `Gills_pic` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'รูปลักษณะของครีบ',
  `Gills_stipe` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะการติดของครีบบริเวณก้าน',
  `Gills_freq` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ความถี่ของครีบ',
  `Gills_color` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'สีของครีบ',
  `Pores` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะของปากรู',
  `Pores_shape` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'รูปร่างของรู',
  `Pores_color` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'สีของรู',
  `Ridges` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะของสันนูน',
  `Ridges_color` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'สีของสันนูน',
  `Teeth` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะของฟัน',
  `Teeth_width` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ความกว้างของฟัน',
  `Teeth_length` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ความยาวของฟัน',
  `Teeth_color` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'สีของฟัน',
  `Stipe` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ก้าน',
  `Stipe_type` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะของก้าน',
  `Stipe_type_pic` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'รูปลักษณะของก้าน',
  `Stipe_out` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะของก้านด้านนอก',
  `Stipe_in` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะของก้านด้านใน',
  `Stipe_base` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะของโคนก้าน',
  `Stipe_width` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ความกว้างของก้าน',
  `Stipe_base_width` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ความกว้างของโคนก้าน',
  `Stipe_length` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ความยาวของก้าน',
  `Stipe_color` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'สีของก้าน',
  `Stipe_surface` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะพื้นผิวของก้าน',
  `Stipe_surface_pic` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'รูปลักษณะพื้นผิวของก้าน',
  `Ring` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'วงแหวน',
  `Ring_type` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ลักษณะวงแหวน',
  `Volva` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'เยื่อหุ้มดอกเห็ด',
  `Volva_color` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'สีเยื่อหุ้มดอกเห็ด',
  `MushroomFamily_Id` int(11) NOT NULL COMMENT 'รหัสวงศ์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mushroomfamily`
--

CREATE TABLE `mushroomfamily` (
  `MushroomFamily_Id` int(11) NOT NULL COMMENT 'รหัสวงศ์',
  `MushroomFamily_name` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ชื่อวงศ์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `mushroomfamily`
--

INSERT INTO `mushroomfamily` (`MushroomFamily_Id`, `MushroomFamily_name`) VALUES
(1, 'ไม่ทราบ'),
(2, 'Agaricaceae'),
(3, 'Cantharellaceae'),
(4, 'Genodermataceae'),
(5, 'Hydnodontaceae'),
(6, 'Hypoxylaceae'),
(7, 'Marasmiaceae'),
(8, 'Polyporaceae'),
(9, 'Psathyrellaceae'),
(10, 'Russlaceae'),
(11, 'Schizophyllaceae'),
(12, 'Xylariaceae');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `Zone_Id` int(11) NOT NULL COMMENT 'รหัสโซนพื้นที่',
  `Zone_name` varchar(5) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'ชื่อโซน',
  `Zone_description` varchar(500) COLLATE utf8mb4_unicode_nopad_ci NOT NULL COMMENT 'รายละเอียดโซนพื้นที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`Zone_Id`, `Zone_name`, `Zone_description`) VALUES
(1, '9A', 'พื้นที่ศึกษาธรรมชาติ(เขาพลวง)บริเวณซ้ายบน'),
(2, '9B', 'พื้นที่ศึกษาธรรมชาติ(เขาพลวง)บริเวณขวาบน'),
(3, '9C', 'พื้นที่ศึกษาธรรมชาติ(เขาพลวง)บริเวณซ้ายล่าง'),
(4, '9D', 'พื้นที่ศึกษาธรรมชาติ(เขาพลวง)บริเวณขวาล่าง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`MushroomLocationId`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`Image_Id`);

--
-- Indexes for table `mushroom`
--
ALTER TABLE `mushroom`
  ADD PRIMARY KEY (`Mushroom_Id`);

--
-- Indexes for table `mushroomfamily`
--
ALTER TABLE `mushroomfamily`
  ADD PRIMARY KEY (`MushroomFamily_Id`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`Zone_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสแอดมิน', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `Image_Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสภาพ';

--
-- AUTO_INCREMENT for table `mushroomfamily`
--
ALTER TABLE `mushroomfamily`
  MODIFY `MushroomFamily_Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสวงศ์', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `Zone_Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสโซนพื้นที่', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
