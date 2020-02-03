-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 11:02 AM
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
-- Database: `astc`
--

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `university` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subdistrict` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `created_at`, `updated_at`, `university`, `faculty`, `address`, `district`, `subdistrict`, `province`, `postcode`, `tel`, `email`) VALUES
(2, '2019-12-25 06:57:51', '2019-12-25 06:57:51', 'มหาวิทยาลัยรังสิต', 'คณะวิทยาศาสตร์', 'อาคาร 4 ชั้น 6 ซอยหมู่บ้านเมืองเอก', 'อำเภอเมือง', 'หลักหก', 'ปทุมธานี', '12000', '029972200-30 ต่อ 1412', 'info@rsu.ac.th'),
(3, '2019-12-25 06:58:55', '2020-01-14 08:15:12', 'มหาวิทยาลัยรังสิต', 'วิทยาลัยนวัตกรรมดิจิทัลและเทคโนโลยีสารสนเทศ', '52/347 พหลโยธิน 87 ถ.พหลโยธิน', 'อำเภอเมือง', 'หลักหก', 'ปทุมธานี', '12000', '0-2997-2200-30 ต่อ 4075, 4061', 'itinfo@rsu.ac.th'),
(4, '2019-12-25 06:59:54', '2019-12-25 06:59:54', 'มหาวิทยาลัยหัวเฉียวเฉลิมพระเกียรติ', 'คณะวิทยาศาสตร์และเทคโนโลยี', '18 18 ถนนบางนา-ตราด', 'อำเภอบางพลี', 'ตำบลบางโฉลง', 'สมุทรปราการ', '10540', '02-3126300-79 ต่อ 1108', NULL),
(5, '2019-12-25 07:00:53', '2019-12-25 07:00:53', 'มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี', 'วิทยาลัยการแพทย์แผนไทย', '8 ซอยพหลโยธิน 87 แยก 2', 'อำเภอธัญบุรี', 'ตำบลประชาธิปัตย์', 'ปทุมธานี', '12130', '02-5921999', 'map.tmc@gmail.com'),
(6, '2019-12-25 07:01:44', '2019-12-25 07:01:44', 'มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี', 'คณะเทคโนโลยีการเกษตร', 'เลขที่ 2 พหลโยธิน 87 ซอย 2', 'อำเภอธัญบุรี', 'ตำบลประชาธิปัตย์', 'ปทุมธานี', '12130', '02-592-1955', 'LALITA_S@RMUTT.AC.TH'),
(7, '2019-12-25 07:02:30', '2019-12-25 07:02:30', 'มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ในพระบรมราชูปถัมภ์', 'คณะเทคโนโลยีการเกษตร และคณะวิทยาศาสตร์และเทคโนโลยี', 'เลขที่ 1 หมู่ 20 ถนนพหลโยธิน กม. 48', 'อ.คลองหลวง', 'ต.คลองหนึ่ง', 'ปทุมธานี', '13180', '02-529-3002 ต่อ 10', NULL),
(8, '2019-12-25 07:03:21', '2019-12-25 07:03:21', 'มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ในพระบรมราชูปถัมภ์', 'คณะวิทยาศาสตร์และเทคโนโลยี', 'เลขที่ 1 หมู่ 20 ถนนพหลโยธิน กม. 48', 'อ.คลองหลวง', 'ต.คลองหนึ่ง', 'ปทุมธานี', '13180', '0-2529-3850', 'sciencetech@vru.ac.th'),
(9, '2019-12-25 07:04:36', '2019-12-25 07:04:36', 'มหาวิทยาลัยสยาม', 'คณะวิทยาศาสตร์', 'เลขที่ 38 ถนนเพชรเกษม', 'เขตภาษีเจริญ', 'แขวงบางหว้า', 'กรุงเทพฯ', '10160', '02-867-8026', 'sci2@siam.edu'),
(10, '2019-12-25 07:05:29', '2019-12-25 07:05:29', 'มหาวิทยาลัยหอการค้าไทย', 'คณะวิทยาศาสตร์และเทคโนโลยี', '126/1 ซอยวิภาวดีรังสิต 2', 'เขตดินแดง', 'แขวงรัชดาภิเษก', 'กรุงเทพมหานคร', '10400', '02-697-6505', NULL),
(11, '2019-12-25 07:06:08', '2019-12-25 07:06:08', 'มหาวิทยาลัยเกษตรศาสตร์วิทยาเขตกำแพงแสน', 'คณะศิลปศาสตร์และวิทยาศาสตร์', 'เลขที่ 1 หมู่ 6', 'กำแพงแสน', 'กำแพงแสน', 'นครปฐม', '73140', '034-300481 ถึง 4', NULL),
(12, '2019-12-25 07:07:05', '2019-12-25 07:07:05', 'มหาวิทยาลัยพระจอมเกล้าพระนครเหนือ', 'คณะวิทยาศาสตร์ประยุกต์', '1518 ถนนประชาราษฎร์1', 'เขตบางซื่อ', 'แขวงวงศ์สว่าง', 'กรุงเทพมหานคร', '10800', '02-555-2000 ต่อ 4213, 4214', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
