-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 09:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'Admin', 'admin123', '2021-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `consultancyFees` varchar(100) DEFAULT NULL,
  `Meeting` varchar(100) NOT NULL,
  `appointmentDate` varchar(255) DEFAULT NULL,
  `month` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `appointmentTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `userStatus` int(11) DEFAULT NULL,
  `doctorStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctor`, `userId`, `consultancyFees`, `Meeting`, `appointmentDate`, `month`, `year`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(7, 'Doctor Name', 1, '1500', 'Home', '2020-02-17', 'February', 2020, '2:45 PM', '2021-02-12 21:42:32', 1, 0, '2021-02-23 22:26:17'),
(14, 'Doctor Name', 2, '1000', 'Physical', '2020-03-02', 'March', 2020, '3:00 AM', '2021-02-12 21:53:37', 1, 0, '2021-02-23 22:51:14'),
(15, 'Doctor Name', 2, '1000', 'Physical', '2020-05-23', 'May', 2020, '7:15 AM', '2021-02-13 02:11:55', 0, 1, '2021-02-24 10:37:26'),
(16, 'Doctor Name', 2, '1500', 'Home', '2021-03-09', 'March', 2021, '7:15 AM', '2021-02-13 02:12:38', 1, 1, '2021-02-23 22:50:24'),
(21, 'Main Doctor', 1, '500', 'Online', '2021-01-19', 'January', 2021, '3:15 PM', '2021-02-18 10:10:40', 1, 1, '2021-02-23 22:52:50'),
(22, 'Main Doctor', 2, '1500', 'Home', '2021-01-23', 'January', 2021, '3:30 PM', '2021-02-18 10:18:09', 1, 1, '2021-02-23 22:52:54'),
(23, 'Main Doctor', 2, '1000', 'Physical', '2021-01-01', 'January', 2021, '3:30 PM', '2021-02-18 10:24:28', 1, 1, '2021-02-23 22:52:58'),
(24, 'Main Doctor', 2, '1000', 'Physical', '2021-01-01', 'January', 2021, '3:30 PM', '2021-02-18 10:28:17', 1, 1, '2021-02-23 22:53:02'),
(25, 'Main Doctor', 2, '1000', 'Physical', '2021-02-01', 'February', 2021, '3:30 PM', '2021-02-18 10:30:22', 1, 1, '2021-02-23 22:53:08'),
(26, 'Main Doctor', 2, '1500', 'Home', '2021-02-16', 'February', 2021, '5:00 PM', '2021-02-18 11:48:18', 1, 1, '2021-02-23 22:49:21'),
(28, 'Main Doctor', 2, '500', 'Online', '2021-03-09', 'February', 2021, '12:45 PM', '2021-02-21 07:36:51', 1, 1, '2021-02-23 20:59:05'),
(29, 'Ayesha', 11, '500', 'Physical', '2021-02-24', 'February', 2021, '2:45 PM', '2021-02-23 09:40:18', 1, 1, '2021-02-23 20:57:47'),
(30, 'Ayesha', 1, '300', 'Online', '2021-03-02', 'February', 2021, '2:00 AM', '2021-02-23 20:55:17', 1, 1, NULL),
(31, 'Ayesha', 2, '300', 'Online', '2021-03-25', 'February', 2021, '3:45 PM', '2021-02-24 10:37:15', 1, 1, NULL),
(32, 'Main Doctor', 4, '500', 'Physical', '2021-03-02', 'February', 2021, '3:45 PM', '2021-02-25 10:39:28', 0, 1, '2021-02-25 10:56:26'),
(33, 'Main Doctor', 4, '500', 'Physical', '2021-03-02', 'February', 2021, '3:45 PM', '2021-02-25 10:41:46', 1, 1, NULL),
(34, 'Main Doctor', 4, '500', 'Physical', '2021-03-02', 'February', 2021, '3:45 PM', '2021-02-25 10:42:14', 1, 1, NULL),
(35, 'Main Doctor', 4, '500', 'Physical', '2021-03-02', 'February', 2021, '3:45 PM', '2021-02-25 10:43:04', 1, 1, NULL),
(36, 'Main Doctor', 4, '500', 'Physical', '2021-03-02', 'February', 2021, '3:45 PM', '2021-02-25 10:43:04', 1, 1, NULL),
(37, 'Main Doctor', 4, '500', 'Physical', '2021-03-02', 'February', 2021, '3:45 PM', '2021-02-25 10:43:10', 1, 1, NULL),
(38, 'Main Doctor', 4, '500', 'Physical', '2021-03-02', 'February', 2021, '3:45 PM', '2021-02-25 10:43:10', 1, 1, NULL),
(39, 'Main Doctor', 4, '500', 'Physical', '2021-03-02', 'February', 2021, '3:45 PM', '2021-02-25 10:43:29', 1, 1, NULL),
(40, 'Main Doctor', 4, '500', 'Physical', '2021-03-02', 'February', 2021, '3:45 PM', '2021-02-25 10:44:15', 1, 1, NULL),
(41, 'Main Doctor', 4, '500', 'Physical', '2021-03-02', 'February', 2021, '3:45 PM', '2021-02-25 10:44:51', 1, 1, NULL),
(42, 'Main Doctor', 4, '500', 'Physical', '2021-03-02', 'February', 2021, '3:45 PM', '2021-02-25 10:45:35', 1, 1, NULL),
(43, 'Main Doctor', 4, '500', 'Physical', '2021-03-02', 'February', 2021, '3:45 PM', '2021-02-25 10:47:41', 1, 1, NULL),
(44, 'abc', 4, '300', 'Online', '2021-03-04', 'February', 2021, '4:00 PM', '2021-02-25 10:48:01', 1, 1, NULL),
(45, 'abc', 4, '300', 'Online', '2021-03-04', 'February', 2021, '4:00 PM', '2021-02-25 10:49:41', 1, 1, NULL),
(46, 'abc', 4, '300', 'Online', '2021-03-04', 'February', 2021, '4:00 PM', '2021-02-25 10:52:10', 1, 1, NULL),
(47, 'abc', 4, '300', 'Online', '2021-03-04', 'February', 2021, '4:00 PM', '2021-02-25 10:52:34', 1, 1, NULL),
(48, 'abc', 4, '300', 'Online', '2021-03-04', 'February', 2021, '4:00 PM', '2021-02-25 10:52:39', 1, 1, NULL),
(49, 'abc', 4, '300', 'Online', '2021-03-04', 'February', 2021, '4:00 PM', '2021-02-25 10:52:47', 1, 1, NULL),
(50, 'abc', 4, '300', 'Online', '2021-03-04', 'February', 2021, '4:00 PM', '2021-02-25 10:55:23', 1, 1, NULL),
(51, 'abc', 4, '300', 'Online', '2021-03-04', 'February', 2021, '4:00 PM', '2021-02-25 10:55:50', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `home_fees` varchar(100) NOT NULL,
  `physical_fee` int(100) NOT NULL,
  `online_fee` int(100) NOT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `home_fees`, `physical_fee`, `online_fee`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(11, 'General Physician', 'Ayesha Aslam', 'ABC Road', '200', 350, 50, 3321546592, 'adoc@gmail.com', 'doc123', '2021-02-23 09:22:40', '2021-03-25 20:19:26'),
(15, 'Homeopath', 'shees', 'abc', '1000', 2000, 3003, 3219868565, 'sdoc@gmail.com', 'doc123', '2021-02-26 12:26:51', '2021-03-25 20:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `doctorslog`
--

CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 7, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 08:45:11', '18-02-2021 02:17:35 PM', 1),
(2, 7, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 08:48:38', '18-02-2021 02:29:02 PM', 1),
(3, 7, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 11:43:36', '18-02-2021 05:17:48 PM', 1),
(4, 7, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 11:51:58', NULL, 1),
(5, 7, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 16:27:45', '18-02-2021 10:00:20 PM', 1),
(6, 7, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 17:53:18', '18-02-2021 11:25:33 PM', 1),
(7, NULL, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 17:55:56', NULL, 0),
(8, NULL, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 17:56:34', NULL, 0),
(9, 7, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 18:00:18', NULL, 1),
(10, NULL, 'docter', 0x3a3a3100000000000000000000000000, '2021-02-20 11:26:50', NULL, 0),
(11, NULL, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-20 11:27:32', NULL, 0),
(12, 7, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-20 11:27:45', '20-02-2021 05:17:03 PM', 1),
(13, 7, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-20 12:05:47', NULL, 1),
(14, 7, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-22 08:58:36', '22-02-2021 02:49:24 PM', 1),
(15, NULL, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-22 09:22:13', NULL, 0),
(16, NULL, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-22 09:22:15', NULL, 0),
(17, NULL, 'd@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-23 09:17:51', NULL, 0),
(18, NULL, 'd@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-23 09:18:06', NULL, 0),
(19, 11, 'a@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-23 09:22:51', NULL, 1),
(20, 11, 'a@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-23 09:54:23', NULL, 1),
(21, NULL, 's@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-23 19:33:05', NULL, 0),
(22, NULL, 's@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-23 19:33:31', NULL, 0),
(23, NULL, 'd@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-23 23:18:05', NULL, 0),
(24, NULL, 'd@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-23 23:18:32', NULL, 0),
(25, NULL, 'd@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-23 23:20:27', NULL, 0),
(26, 11, 'a@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-23 23:22:44', '24-02-2021 04:57:54 AM', 1),
(27, 11, 'a@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-24 08:15:29', NULL, 1),
(28, 11, 'a@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-24 11:05:26', NULL, 1),
(29, NULL, 'a@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-25 10:09:51', NULL, 0),
(30, 11, 'a@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-25 10:09:57', NULL, 1),
(31, 11, 'a@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-25 13:12:14', '25-02-2021 06:45:50 PM', 1),
(32, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2021-02-25 13:45:22', NULL, 0),
(33, 11, 'a@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-25 13:45:30', '25-02-2021 07:18:01 PM', 1),
(34, 15, 'sdoc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-25 20:21:29', '26-03-2021 02:02:12 AM', 1),
(35, NULL, 'sdoc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-25 20:34:15', NULL, 0),
(36, NULL, 'sdoc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-25 20:34:45', NULL, 0),
(37, NULL, 'sdoc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-25 20:35:14', NULL, 0),
(38, 15, 'sdoc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-25 20:36:48', '26-03-2021 02:07:01 AM', 1),
(39, 11, 'adoc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-25 20:37:16', '26-03-2021 02:09:40 AM', 1),
(40, 15, 'sdoc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-25 20:48:51', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Gynecologist/Obstetrician', '2016-12-28 06:37:25', '0000-00-00 00:00:00'),
(2, 'General Physician', '2016-12-28 06:38:12', '0000-00-00 00:00:00'),
(3, 'Dermatologist', '2016-12-28 06:38:48', '0000-00-00 00:00:00'),
(4, 'Homeopath', '2016-12-28 06:39:26', '0000-00-00 00:00:00'),
(6, 'Dentist', '2016-12-28 06:40:08', '0000-00-00 00:00:00'),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2016-12-28 06:41:18', '0000-00-00 00:00:00'),
(9, 'Demo test', '2016-12-28 07:37:39', '0000-00-00 00:00:00'),
(10, 'Bones Specialist demo', '2017-01-07 08:07:53', '0000-00-00 00:00:00'),
(11, 'Test', '2019-06-23 17:51:06', '2019-06-23 17:55:06'),
(12, 'Dermatologist', '2019-11-10 18:36:36', '2019-11-10 18:36:50'),
(13, 'dentist', '2021-02-24 12:25:39', NULL),
(14, 'saud', '2021-02-24 12:25:50', NULL),
(15, '', '2021-02-24 13:06:15', NULL),
(16, 'surgeon', '2021-02-25 10:59:30', NULL),
(17, '', '2021-02-25 10:59:57', NULL),
(18, '', '2021-02-25 11:01:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_image`
--

CREATE TABLE `doctor_image` (
  `Doctor_Id` int(11) NOT NULL,
  `Doctor_Img` varchar(100) NOT NULL,
  `Doctor_Name` varchar(100) NOT NULL,
  `Doctor_Specialization` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_image`
--

INSERT INTO `doctor_image` (`Doctor_Id`, `Doctor_Img`, `Doctor_Name`, `Doctor_Specialization`) VALUES
(1, 'doctor-1.jpg', 'Dr. Butcher', 'Ophthomologist'),
(2, 'doctor-2.jpg', 'Dr. Brick Wall', 'Dermatologist'),
(3, 'doctor-3.jpg', 'Dr. Snow White', 'Neorologist'),
(4, 'doctor-4.jpg', 'Dr. Mangle Taleebin', 'Surgeon');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_request`
--

CREATE TABLE `medicine_request` (
  `Id` int(100) NOT NULL,
  `Medicine_Name` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Patient_name` varchar(100) NOT NULL,
  `Request_Date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_request`
--

INSERT INTO `medicine_request` (`Id`, `Medicine_Name`, `Image`, `Patient_name`, `Request_Date`) VALUES
(2, 'Flagyl', 'Flagyl.jpg', 'shees', '2021-02-24 15:41:34.000000');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Suggestion` varchar(300) NOT NULL,
  `Date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`Id`, `Name`, `Suggestion`, `Date`) VALUES
(2, 'shees', 'kal raat se bht tez bukar h toh  halat ese h k me Apke pas ah nae sktaa hoo Ap muje koi medicine btadeee', '2021-02-24 15:45:29.000000'),
(3, 'shees', 'kal raat se bht tez bukar h toh  halat ese h k me Apke pas ah nae sktaa hoo Ap muje koi medicine btadeee', '2021-02-24 15:46:03.000000'),
(4, 'owais', '<p>edddd ffrfr frf</p>\r\n', '2021-02-25 15:56:58.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `IsRead` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `fullname`, `email`, `contactno`, `message`, `PostingDate`, `AdminRemark`, `LastupdationDate`, `IsRead`) VALUES
(1, 'test user', 'test@gmail.com', 2523523522523523, ' This is sample text for the test.', '2019-06-29 19:03:08', 'Test Admin Remark', '2019-06-30 12:55:23', 1),
(2, 'Ahmed', 'abcd@gmail.com', 923021456546, ' This is sample text for testing.  This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing. This is sample text for testing.', '2019-06-30 13:06:50', NULL, '2021-02-18 09:13:24', NULL),
(3, 'fdsfsdf', 'fsdfsd@ghashhgs.com', 923457896541, 'sample text   sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  sample text  ', '2019-11-10 18:53:48', 'vfdsfgfd', '2021-02-18 09:13:44', 1),
(4, 'sadsad', 's@gmail.com', 32254530132, 'abvcasc', '2021-02-22 09:37:17', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicalhistory`
--

CREATE TABLE `tblmedicalhistory` (
  `ID` int(10) NOT NULL,
  `PatientID` int(10) DEFAULT NULL,
  `BloodPressure` varchar(200) DEFAULT NULL,
  `BloodSugar` varchar(200) NOT NULL,
  `Weight` varchar(100) DEFAULT NULL,
  `Temperature` varchar(200) DEFAULT NULL,
  `MedicalPres` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmedicalhistory`
--

INSERT INTO `tblmedicalhistory` (`ID`, `PatientID`, `BloodPressure`, `BloodSugar`, `Weight`, `Temperature`, `MedicalPres`, `CreationDate`) VALUES
(2, 3, '120/185', '80/120', '85 Kg', '101 degree', '#Fever, #BP high\r\n1.Paracetamol\r\n2.jocib tab\r\n', '2019-11-06 04:20:07'),
(3, 2, '90/120', '92/190', '86 kg', '99 deg', '#Sugar High\r\n1.Petz 30', '2019-11-06 04:31:24'),
(4, 1, '125/200', '86/120', '56 kg', '98 deg', '# blood pressure is high\r\n1.koil cipla', '2019-11-06 04:52:42'),
(5, 1, '96/120', '98/120', '57 kg', '102 deg', '#Viral\r\n1.gjgjh-1Ml\r\n2.kjhuiy-2M', '2019-11-06 04:56:55'),
(6, 4, '90/120', '120', '56', '98 F', '#blood sugar high\r\n#Asthma problem', '2019-11-06 14:38:33'),
(7, 3, '80/120', '120', '85', '98.6', 'Rx\r\n\r\nAbc tab\r\nxyz Syrup', '2021-02-25 10:17:50'),
(8, 6, '125', '100', '60', '0', 'abc', '2021-02-25 10:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(10) NOT NULL,
  `Docid` int(10) DEFAULT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `PatientContno` bigint(10) DEFAULT NULL,
  `PatientEmail` varchar(200) DEFAULT NULL,
  `PatientGender` varchar(50) DEFAULT NULL,
  `PatientAdd` mediumtext DEFAULT NULL,
  `PatientAge` int(10) DEFAULT NULL,
  `PatientMedhis` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`ID`, `Docid`, `PatientName`, `PatientContno`, `PatientEmail`, `PatientGender`, `PatientAdd`, `PatientAge`, `PatientMedhis`, `CreationDate`, `UpdationDate`) VALUES
(1, 1, 'Iqra', 3245784541, 'test@gmail.com', 'Female', '\"\"J&K Block J-127, Laxmi Nagar New Delhi', 26, 'She is diabetic patient', '2019-11-04 21:38:06', '2021-03-25 19:56:05'),
(2, 5, 'Ali', 3021457412, 'raghu@gmail.com', 'Male', 'ABC Apartment Mayur Vihar Ph-1 New Delhi', 39, 'No', '2019-11-05 10:40:13', '2021-03-25 19:56:22'),
(3, 7, 'Mehak', 3421451214, 'jk@gmail.com', 'Female', 'abcroad karachi', 46, 'No', '2019-11-05 10:49:41', '2021-03-25 19:56:32'),
(4, 7, 'Ali Ahmed', 9230125451, 'sharma@gmail.com', 'Male', 'Karachi', 45, 'He is long suffered by asthma', '2019-11-06 14:33:54', '2021-03-25 19:56:40'),
(5, 9, 'John', 1234567890, 'john@test.com', 'male', 'Test ', 25, 'THis is sample text for testing.', '2019-11-10 18:49:24', NULL),
(6, 11, 'Zohaib', 321456785, 'za@gmail.com', 'Male', 'abc', 25, 'Dil me dukh h bht', '2021-02-25 10:12:12', '2021-02-25 10:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 2, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 08:44:15', '18-02-2021 02:14:39 PM', 1),
(2, 2, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 08:47:48', '18-02-2021 02:18:26 PM', 1),
(3, 2, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 10:10:23', '18-02-2021 04:02:01 PM', 1),
(4, 2, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 11:43:05', '18-02-2021 05:13:24 PM', 1),
(5, 2, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 11:48:01', '18-02-2021 05:21:46 PM', 1),
(6, 2, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-18 16:22:59', '18-02-2021 09:57:12 PM', 1),
(7, 2, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-20 11:09:10', NULL, 1),
(8, NULL, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-20 11:49:15', NULL, 0),
(9, 2, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-20 11:49:29', '20-02-2021 05:34:59 PM', 1),
(10, 2, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-20 12:05:31', NULL, 1),
(11, NULL, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-22 08:47:25', NULL, 0),
(12, 2, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-22 08:47:34', '22-02-2021 02:18:37 PM', 1),
(13, NULL, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-22 08:57:39', NULL, 0),
(14, 2, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-22 08:57:54', '22-02-2021 02:27:56 PM', 1),
(15, NULL, 'doc@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-22 11:02:45', NULL, 0),
(16, NULL, 'ayesha@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-22 11:56:45', NULL, 0),
(17, NULL, 'lckjglkfdsjg;lk', 0x3132372e302e302e3100000000000000, '2021-02-22 11:57:00', NULL, 0),
(18, NULL, 'saud@yahoo.com', 0x3132372e302e302e3100000000000000, '2021-02-22 11:58:01', NULL, 0),
(19, NULL, 'saud@yahoo.com', 0x3132372e302e302e3100000000000000, '2021-02-22 12:02:05', NULL, 0),
(20, NULL, 'saud@yahoo.com', 0x3132372e302e302e3100000000000000, '2021-02-22 12:03:55', NULL, 0),
(21, 1, 'saud@yahoo.com', 0x3132372e302e302e3100000000000000, '2021-02-22 12:13:50', NULL, 1),
(22, NULL, 'ayesha@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-23 09:42:45', NULL, 0),
(23, NULL, 'ayesha@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-23 09:42:54', NULL, 0),
(24, NULL, 'saud', 0x3132372e302e302e3100000000000000, '2021-02-23 09:43:10', NULL, 0),
(25, NULL, 'saud@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-23 09:43:20', NULL, 0),
(26, 2, 's@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-23 09:44:28', '23-02-2021 03:24:04 PM', 1),
(27, NULL, 'ayesha@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-23 18:03:24', NULL, 0),
(28, 2, 's@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-23 18:04:27', NULL, 1),
(29, 2, 's@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-23 23:28:21', NULL, 1),
(30, NULL, 'ayesha@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-24 08:29:10', NULL, 0),
(31, NULL, 'shees@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-24 08:29:21', NULL, 0),
(32, 2, 's@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-24 08:30:16', NULL, 1),
(33, NULL, 'a@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-24 10:34:32', NULL, 0),
(34, NULL, 'a@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-24 10:34:39', NULL, 0),
(35, 2, 's@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-24 10:34:45', '24-02-2021 04:23:17 PM', 1),
(36, 3, 'z@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-24 11:00:01', NULL, 1),
(37, 3, 'z@gmail.com', 0x3132372e302e302e3100000000000000, '2021-02-24 11:03:19', '24-02-2021 04:35:10 PM', 1),
(38, NULL, 's@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-25 09:19:49', NULL, 0),
(39, 2, 's@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-25 09:19:59', NULL, 1),
(40, 4, 'o@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-25 10:36:41', NULL, 1),
(41, 2, 's@gmail.com', 0x3a3a3100000000000000000000000000, '2021-02-25 13:15:58', '25-02-2021 06:54:47 PM', 1),
(42, 2, 's@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-25 19:06:27', '26-03-2021 12:45:31 AM', 1),
(43, 2, 's@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-25 19:21:55', '26-03-2021 12:58:41 AM', 1),
(44, NULL, 'm@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-25 19:37:00', NULL, 0),
(45, NULL, 'Ayesha Khan', 0x3a3a3100000000000000000000000000, '2021-03-25 19:37:01', NULL, 0),
(46, NULL, 'M.Muain', 0x3a3a3100000000000000000000000000, '2021-03-25 19:37:19', NULL, 0),
(47, 5, 'm@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-25 19:41:25', '26-03-2021 01:12:24 AM', 1),
(48, 2, 'shees@gmail.com', 0x3a3a3100000000000000000000000000, '2021-03-25 20:03:12', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `contact`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(1, 'saud', 'saud', 'karachi', 'male', 'saud@gmail.com', '123', '2021-02-22 12:01:50', '2021-03-25 19:55:07'),
(2, 'shees', 'abcdef', 'karachi', 'male', 'shees@gmail.com', '123456', '2021-02-23 09:44:14', '2021-03-25 19:55:15'),
(3, 'zohaib', 'abc karachi', '0121354354', 'male', 'zohaib@gmail.com', '1234', '2021-02-24 10:59:39', '2021-03-25 19:55:21'),
(4, 'owais', 'abc', '+92321132234', 'male', 'owais@gmail.com', '123', '2021-02-25 10:36:28', '2021-03-25 19:55:25'),
(5, 'M.Muain', 'karachi pakistan', '0345987547899', 'male', 'm@gmail.com', 'muain123', '2021-03-25 19:36:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zoom_history`
--

CREATE TABLE `zoom_history` (
  `Id` int(100) NOT NULL,
  `Zoom_Id` varchar(255) NOT NULL,
  `Zoom_Pass` varchar(255) NOT NULL,
  `Zoom_Link` varchar(255) NOT NULL,
  `Patient_Id` int(255) NOT NULL,
  `Doctor` varchar(255) NOT NULL,
  `Send_Date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zoom_history`
--

INSERT INTO `zoom_history` (`Id`, `Zoom_Id`, `Zoom_Pass`, `Zoom_Link`, `Patient_Id`, `Doctor`, `Send_Date`) VALUES
(1, '', 'ahjdshjahkfj', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 15:51:36.000000'),
(2, '', 'ahjdshjahkfj', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 15:51:37.000000'),
(3, '', 'afdsadsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 15:51:52.000000'),
(4, '198498321639621', '123456', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 15:59:43.000000'),
(5, '198498321639621', '123456', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 16:01:36.000000'),
(6, '198498321639621', '123456', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 16:02:44.000000'),
(7, '198498321639621', '123456', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 16:03:12.000000'),
(8, '12321321', 'casadsadsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 16:11:06.000000'),
(9, '12321321', 'casadsadsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 16:12:39.000000'),
(10, '12321321', 'casadsadsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 16:13:42.000000'),
(11, '12321321', 'casadsadsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 16:14:04.000000'),
(12, '12321321', 'casadsadsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 16:14:10.000000'),
(13, '12321321', 'casadsadsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 16:15:13.000000'),
(14, '123456789', 'asvadscsad123213', '2', 0, '', '2021-02-23 16:15:41.000000'),
(15, '123456789', 'asvadscsad123213', '2', 0, '', '2021-02-23 16:17:27.000000'),
(16, '789123456', 'abcdefghij', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 2, 'Main Doctor', '2021-02-23 16:17:53.000000'),
(17, '123456', 'abcdef', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 16:47:24.000000'),
(18, '555566645', 'hakjdhkjsadsagdgsajhgdjhsadjsagdjgsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 16:54:51.000000'),
(19, '555566645', 'hakjdhkjsadsagdgsajhgdjhsadjsagdjgsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 0, '', '2021-02-23 16:56:51.000000'),
(20, '555566645', 'hakjdhkjsadsagdgsajhgdjhsadjsagdjgsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 2, 'Main Doctor', '2021-02-23 16:58:16.000000'),
(21, '555566645', 'hakjdhkjsadsagdgsajhgdjhsadjsagdjgsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 2, 'Main Doctor', '2021-02-23 16:58:31.000000'),
(22, '123213213213', 'dsafdsafsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 2, 'Main Doctor', '2021-02-23 17:00:03.000000'),
(23, '123213213213', 'dsafdsafsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 2, 'Main Doctor', '2021-02-23 17:03:14.000000'),
(24, '123213213213', 'dsafdsafsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 2, 'Main Doctor', '2021-02-23 17:10:58.000000'),
(25, '123213213213', 'dsafdsafsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 2, 'Main Doctor', '2021-02-23 17:12:22.000000'),
(26, '123213213213', 'dsafdsafsa', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 2, 'Main Doctor', '2021-02-23 17:15:00.000000'),
(27, '123789999', 'abced', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 2, 'Main Doctor', '2021-02-23 17:15:27.000000'),
(28, '12321321321321', 'abcde', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 2, 'Main Doctor', '2021-02-23 17:20:35.000000'),
(29, '123423413', 'abcdefg', 'https://us04web.zoom.us/j/6343424162?pwd=ejhjOG0rWFozcHpLdW1LektzNy9SUT09', 2, 'Main Doctor', '2021-02-23 17:24:36.000000'),
(30, '17221321321', 'e45476554765', 'https://us04web.zoom.us/j/2517768793?pwd=UFNXT2gzdk5nN0FpMWFmTWZJZkxKdz09', 2, 'Ayesha', '2021-02-24 16:05:54.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorslog`
--
ALTER TABLE `doctorslog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_image`
--
ALTER TABLE `doctor_image`
  ADD PRIMARY KEY (`Doctor_Id`);

--
-- Indexes for table `medicine_request`
--
ALTER TABLE `medicine_request`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `zoom_history`
--
ALTER TABLE `zoom_history`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctorslog`
--
ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `doctor_image`
--
ALTER TABLE `doctor_image`
  MODIFY `Doctor_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicine_request`
--
ALTER TABLE `medicine_request`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `zoom_history`
--
ALTER TABLE `zoom_history`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
