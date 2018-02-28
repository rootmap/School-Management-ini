-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2014 at 05:59 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ams_it_dreams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `school_id`, `date`, `status`) VALUES
(1, 'admin', '123456', 2, '2014-04-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_academic_calendar`
--

CREATE TABLE IF NOT EXISTS `ams_academic_calendar` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `start_date` varchar(200) NOT NULL,
  `end_date` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `events_id` int(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ams_academic_calendar`
--

INSERT INTO `ams_academic_calendar` (`id`, `start_date`, `end_date`, `description`, `events_id`, `title`, `school_id`, `date`, `status`) VALUES
(4, '2014-06-04', '2014-06-05', 'dfgfgf', 1, 'dgdg', 23649, '2014-06-09', 1),
(5, '2014-06-11', '2014-06-12', 'sfsfs', 1, 'sfsf', 666, '2014-06-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_admin_eiin`
--

CREATE TABLE IF NOT EXISTS `ams_admin_eiin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `company_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_admin_eiin`
--

INSERT INTO `ams_admin_eiin` (`id`, `name`, `password`, `company_id`, `date`, `status`) VALUES
(1, 'babu', '123456', 2, '2014-05-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_admin_eiin_active`
--

CREATE TABLE IF NOT EXISTS `ams_admin_eiin_active` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `eiin` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_admin_eiin_active`
--

INSERT INTO `ams_admin_eiin_active` (`id`, `eiin`, `date`, `status`) VALUES
(1, '23649', '2014-05-19', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ams_admin_eiin_chk`
--

CREATE TABLE IF NOT EXISTS `ams_admin_eiin_chk` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `company_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_admin_eiin_chk`
--

INSERT INTO `ams_admin_eiin_chk` (`id`, `name`, `password`, `company_id`, `date`, `status`) VALUES
(1, 'eiin', '123456', 2, '2014-05-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_admin_eiin_number`
--

CREATE TABLE IF NOT EXISTS `ams_admin_eiin_number` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `eiin` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `ams_admin_eiin_number`
--

INSERT INTO `ams_admin_eiin_number` (`id`, `eiin`, `time`, `date`, `status`) VALUES
(23, '23649', '', '2014-06-09', 3),
(24, '666', '', '2014-05-29', 3),
(30, '222343', '04:54:13 pm', '2014-05-19', 3),
(31, '777777', '04:54:35 pm', '2014-05-19', 3),
(32, '888888', '05:01:45 pm', '2014-05-19', 3),
(33, '867678', '05:06:21 pm', '2014-05-19', 3),
(34, '66666666', '04:04:33 pm', '2014-06-07', 3),
(35, '00000000', '04:05:05 pm', '2014-05-21', 1),
(36, '11111111', '04:05:19 pm', '2014-05-29', 3),
(37, '22222222', '04:05:34 pm', '2014-05-29', 2),
(38, '21212121', '04:05:49 pm', '2014-05-29', 2),
(39, '44444444', '04:27:56 pm', '2014-06-07', 1),
(40, '89898989', '01:40:29 pm', '2014-06-09', 1),
(41, '656565', '01:47:29 pm', '2014-06-09', 1),
(42, '55005500', '07:12:59 pm', '2014-07-02', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ams_admin_sms_send`
--

CREATE TABLE IF NOT EXISTS `ams_admin_sms_send` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `company_id` int(20) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_admin_sms_send`
--

INSERT INTO `ams_admin_sms_send` (`id`, `company_id`, `quantity`, `date`, `status`) VALUES
(1, 2, '10000', '2014-05-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_admin_sms_stteing`
--

CREATE TABLE IF NOT EXISTS `ams_admin_sms_stteing` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `eiin_number` varchar(200) NOT NULL,
  `company_id` int(20) NOT NULL,
  `cline_quantity` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_admin_sms_stteing`
--

INSERT INTO `ams_admin_sms_stteing` (`id`, `eiin_number`, `company_id`, `cline_quantity`, `school_id`, `time`, `date`, `status`) VALUES
(1, '666', 2, '300', 666, '07:48:05 pm', '2014-07-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_admission`
--

CREATE TABLE IF NOT EXISTS `ams_admission` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `admition` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `roll` varchar(200) NOT NULL,
  `section_id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `blood_group` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `language` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `guardian_name` varchar(200) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `income` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `serial_number` varchar(200) NOT NULL,
  `present_address` varchar(200) NOT NULL,
  `permanent_address` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` int(20) NOT NULL,
  `zip_code` varchar(200) NOT NULL,
  `countryr` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `ams_admission`
--

INSERT INTO `ams_admission` (`id`, `name`, `admition`, `school_id`, `class_id`, `roll`, `section_id`, `session_id`, `shift_id`, `group_id`, `dob`, `blood_group`, `gender`, `nationality`, `religion`, `language`, `mother_name`, `father_name`, `guardian_name`, `occupation`, `income`, `number`, `serial_number`, `present_address`, `permanent_address`, `state`, `city`, `zip_code`, `countryr`, `phone_number`, `email`, `photo`, `date`, `status`) VALUES
(1, 'Sheikh Rasel', '3424', 23649, 14, '53545', 11, 8, 9, 6, '2014-06-10', '2', 'Male', 'Bangladeshi', 'Islam', 'Bangali', 'gdf', 'dfgd', 'fgdfg', 'dfgd', 'dfg', '01675180510', '', 'dgdhd', 'fgd', '1', 1, '1', 'Bahasa Indonesia (Indonesia)', '01675180510', 'rasel_alone@yahool.com', 'big_1402316189_Lighthouse.jpg', '2014-06-09', 1),
(4, 'hjkhj', '2364993528', 23649, 14, 'kjkhjk', 11, 8, 9, 6, '2014-06-11', '1', 'Male', 'Bangladeshi', 'Islam', 'Language', 'hjkhjkh', 'jkhjk', 'hjkhj', 'hjkhjkhj', 'khjk', 'hjkhjk', '', 'jhkhk', 'hjkh', '1', 1, 'hjkhjk', 'Bangladesh', 'hjkhjkh', 'hjkhj', 'big_1402317549_Jellyfish.jpg', '0000-00-00', 1),
(12, 'gdgf', '45674', 23649, 15, '577', 12, 9, 11, 7, '', '', '', '', '', '', '', '', 'hhjhgj', '', '', '', '', '', '', '', 0, '', '', '01644554544', '', 'big_1402403884_stude.png', '2014-06-10', 1),
(13, 'gdfghh', '456546', 23649, 14, '545645 	', 11, 8, 9, 6, '', '', '', '', '', '', '', '', 'ghjghjgh', '', '', '', '', '', '', '', 0, '', '', '01675180510', '', 'big_1402404005_ff9170_8f732dd0a43b9b74bd5a757b9060c3ed.jpg_srz_980_635_85_22_0.50_1.20_0.00_jpg_srz.jpg', '2014-06-10', 1),
(14, 'MD: SHAFIKUL ISLAM RAJIB', '3434', 666, 13, '555', 14, 7, 12, 8, '', '', '', '', '', '', '', '', 'fgghg', '', '', '', '', '', '', 'Division / State', 0, 'District / City', 'Country', '01675180510', '', 'big_1403184176_Koala.jpg', '2014-06-10', 1),
(15, 'MD: SHAFIKUL ISLAM RAJIB', '6465', 23649, 14, '45646', 11, 8, 9, 6, '2014-06-11', '', 'Male', '', '', '', '', '', 'ytu', '', '', '', '', '', '', '', 0, '', '', '01644554544', '', 'big_1402405399_Students_Home_Page_Image.jpg', '2014-06-10', 1),
(16, 'Md: Rafi Ahammed', '5500550093763', 55005500, 20, '1000', 28, 13, 13, 11, '', '', '', '', '', '', '', '', 'fdgdf', '', '', '', '', '', '', '', 0, '', '', '01675180510', '', 'big_1404307181_celebration-2008-marine-guide-coaching.jpg', 'Wed-Jul-2014', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_all_manege_group_sms`
--

CREATE TABLE IF NOT EXISTS `ams_all_manege_group_sms` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(200) NOT NULL,
  `group_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `number` int(20) NOT NULL,
  `text` text NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_all_manege_group_sms`
--

INSERT INTO `ams_all_manege_group_sms` (`id`, `id_number`, `group_id`, `category_id`, `number`, `text`, `school_id`, `date`, `status`) VALUES
(1, '556356', 5, 1, 1983637383, 'ghjgjh', 2, '2014-05-12', 1),
(2, '5645646', 4, 3, 46545, 'ghjgjh', 2, '2014-05-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_all_shift`
--

CREATE TABLE IF NOT EXISTS `ams_all_shift` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_all_shift`
--

INSERT INTO `ams_all_shift` (`id`, `name`, `date`, `status`) VALUES
(1, 'Morning', '2014-05-12', 1),
(2, 'Evening', '2014-06-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_annual_final`
--

CREATE TABLE IF NOT EXISTS `ams_annual_final` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ams_annual_final`
--

INSERT INTO `ams_annual_final` (`id`, `name`, `session_id`, `class_id`, `section_id`, `shift_id`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, '1st Semester', 7, 13, 14, 12, 8, 666, '2014-07-14', 1),
(2, '2nd Semester', 7, 13, 14, 12, 8, 666, '2014-07-14', 1),
(4, 'Attendance ', 7, 13, 14, 12, 8, 666, '2014-07-14', 1),
(5, 'C . T Exam ', 7, 13, 14, 12, 8, 666, '2014-07-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_attendance_reg_details`
--

CREATE TABLE IF NOT EXISTS `ams_attendance_reg_details` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `rand_id` int(20) NOT NULL,
  `day_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ams_attendance_reg_stng`
--

CREATE TABLE IF NOT EXISTS `ams_attendance_reg_stng` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `session_id` int(20) NOT NULL,
  `rand_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `weekly_id` int(20) NOT NULL,
  `date1` varchar(200) NOT NULL,
  `class_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ams_attendance_reg_stng`
--

INSERT INTO `ams_attendance_reg_stng` (`id`, `session_id`, `rand_id`, `group_id`, `shift_id`, `weekly_id`, `date1`, `class_id`, `school_id`, `date`, `status`) VALUES
(1, 7, 1404734578, 8, 12, 1, '07-07-2014', 13, 666, '2014-07-07', 1),
(2, 7, 1404734578, 8, 12, 2, '07-07-2014', 13, 666, '2014-07-07', 1),
(3, 7, 1404734578, 8, 12, 3, '07-07-2014', 13, 666, '2014-07-07', 1),
(4, 7, 1404734578, 8, 12, 4, '07-07-2014', 13, 666, '2014-07-07', 1),
(5, 7, 1404734578, 8, 12, 5, '07-07-2014', 13, 666, '2014-07-07', 1),
(6, 7, 1404734578, 8, 12, 6, '07-07-2014', 13, 666, '2014-07-07', 1),
(7, 7, 1404734578, 8, 12, 7, '07-07-2014', 13, 666, '2014-07-07', 1),
(8, 7, 1404734692, 8, 12, 1, '07-07-2014', 13, 666, '2014-07-07', 1),
(9, 7, 1404734692, 8, 12, 2, '07-07-2014', 13, 666, '2014-07-07', 1),
(10, 7, 1404734692, 8, 12, 3, '07-07-2014', 13, 666, '2014-07-07', 1),
(11, 7, 1404734692, 8, 12, 4, '07-07-2014', 13, 666, '2014-07-07', 1),
(12, 7, 1404734692, 8, 12, 5, '07-07-2014', 13, 666, '2014-07-07', 1),
(13, 7, 1404734692, 8, 12, 6, '07-07-2014', 13, 666, '2014-07-07', 1),
(14, 7, 1404734692, 8, 12, 7, '07-07-2014', 13, 666, '2014-07-07', 1),
(15, 7, 1404735056, 8, 12, 1, '07-07-2014', 13, 666, '2014-07-07', 1),
(16, 7, 1404735056, 8, 12, 2, '07-07-2014', 13, 666, '2014-07-07', 1),
(17, 7, 1404735056, 8, 12, 3, '07-07-2014', 13, 666, '2014-07-07', 1),
(18, 7, 1404735056, 8, 12, 4, '07-07-2014', 13, 666, '2014-07-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_blood_group`
--

CREATE TABLE IF NOT EXISTS `ams_blood_group` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ams_blood_group`
--

INSERT INTO `ams_blood_group` (`id`, `name`, `date`, `status`) VALUES
(1, 'A+', '2014-05-13', 1),
(2, 'A-', '2014-05-12', 1),
(3, 'B+', '2014-05-12', 1),
(4, 'B-', '2014-05-13', 1),
(5, 'O+', '2014-05-12', 1),
(6, 'O-', '2014-05-05', 1),
(7, 'AB+', '2014-05-12', 1),
(8, 'AB-', '2014-05-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_category`
--

CREATE TABLE IF NOT EXISTS `ams_category` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `group_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `ams_category`
--

INSERT INTO `ams_category` (`id`, `name`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, 'a', 1, 666, '2014-05-20', 1),
(2, 's', 1, 3, '2014-05-20', 1),
(3, 'e', 1, 3, '2014-05-20', 1),
(4, 'r', 2, 3, '2014-05-20', 1),
(5, 'Admin', 3, 23649, '2014-06-09', 1),
(7, 'gffg', 8, 23649, '2014-06-10', 1),
(9, 'Tacher', 1, 666, '2014-07-01', 1),
(10, 'School', 10, 55005500, '2014-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_city`
--

CREATE TABLE IF NOT EXISTS `ams_city` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_city`
--

INSERT INTO `ams_city` (`id`, `name`, `date`, `status`) VALUES
(1, 'uttara', '2014-04-01', 1),
(2, 'Gazipur', '2014-04-01', 1),
(3, 'barishal', '2014-04-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_class`
--

CREATE TABLE IF NOT EXISTS `ams_class` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `ams_class`
--

INSERT INTO `ams_class` (`id`, `name`, `school_id`, `section_id`, `session_id`, `group_id`, `shift_id`, `date`, `status`) VALUES
(1, 'Class-I', 4, 0, 2, 0, 0, '2014-05-20', 1),
(2, 'Class-II', 4, 0, 2, 0, 0, '2014-05-20', 1),
(3, 'Class-One', 4, 0, 2, 0, 0, '2014-05-20', 1),
(4, 'Class-Two', 4, 0, 2, 0, 0, '2014-05-20', 1),
(5, 'Class-I', 3, 0, 4, 0, 0, '2014-05-20', 1),
(6, 'Class-II', 3, 0, 5, 0, 0, '2014-05-20', 1),
(7, 'Class-One', 3, 0, 4, 0, 0, '2014-05-20', 1),
(8, 'Class-Two', 3, 0, 6, 0, 0, '2014-05-20', 1),
(9, 'Class-I', 3, 0, 3, 0, 0, '2014-05-20', 1),
(11, 'One', 3, 0, 3, 0, 0, '2014-05-28', 1),
(12, 'Class One', 3, 0, 5, 0, 0, '2014-06-02', 1),
(13, 'Two', 666, 0, 7, 0, 0, '2014-06-09', 1),
(14, 'Two', 23649, 0, 8, 0, 0, '2014-06-09', 1),
(15, 'One', 23649, 0, 9, 0, 0, '2014-06-09', 1),
(16, 'Three', 666, 0, 7, 0, 0, '2014-06-11', 1),
(20, 'Two', 55005500, 0, 13, 0, 0, '2014-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_class_time_setting`
--

CREATE TABLE IF NOT EXISTS `ams_class_time_setting` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `table` text NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ams_class_time_setting`
--

INSERT INTO `ams_class_time_setting` (`id`, `session_id`, `class_id`, `section_id`, `shift_id`, `group_id`, `table`, `school_id`, `date`, `status`) VALUES
(1, 1, 5, 1, 1, 2, '<p>ryrtyrtytr</p>\r\n', 2, '2014-05-13', 1),
(2, 1, 5, 1, 1, 1, '<table align="center" border="0" cellpadding="0" cellspacing="1" style="width: 100%;">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">r</th>\r\n			<th scope="col">r</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>ss</td>\r\n			<td>ss</td>\r\n		</tr>\r\n		<tr>\r\n			<td>sss</td>\r\n			<td>sss</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 3, '2014-05-21', 1),
(3, 13, 20, 28, 13, 11, '<table align="center" border="0" cellpadding="1" cellspacing="1" style="width: 500px;">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">&nbsp;</th>\r\n			<th scope="col">&nbsp;</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 55005500, '2014-07-02', 1),
(4, 7, 13, 14, 12, 8, '<table border="0" cellpadding="1" cellspacing="1" class="display" id="example" style="width: 100%;">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">r</th>\r\n			<th scope="col">r</th>\r\n			<th scope="col">r</th>\r\n			<th scope="col">r</th>\r\n			<th scope="col">r</th>\r\n			<th scope="col">r</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>r</td>\r\n			<td>r</td>\r\n			<td>r</td>\r\n			<td>r</td>\r\n			<td>r</td>\r\n			<td>r</td>\r\n		</tr>\r\n		<tr>\r\n			<td>r</td>\r\n			<td>r</td>\r\n			<td>r</td>\r\n			<td>r</td>\r\n			<td>r</td>\r\n			<td>r</td>\r\n		</tr>\r\n		<tr>\r\n			<td>r</td>\r\n			<td>r</td>\r\n			<td>r</td>\r\n			<td>r</td>\r\n			<td>r</td>\r\n			<td>r</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 666, '2014-07-03', 1),
(5, 7, 13, 14, 12, 8, '', 666, '2014-07-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_class_time_setting_two`
--

CREATE TABLE IF NOT EXISTS `ams_class_time_setting_two` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `day_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ams_contact`
--

CREATE TABLE IF NOT EXISTS `ams_contact` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `group_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `info` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ams_contact`
--

INSERT INTO `ams_contact` (`id`, `name`, `group_id`, `category_id`, `info`, `gender`, `number`, `school_id`, `date`, `status`) VALUES
(1, 'rasel', 1, 1, 'tttttt', 'Male', '01675180510', 3, '2014-05-20', 1),
(2, 'fgffffff', 3, 5, 'tttttt', 'Male', '01675180510', 23649, '2014-06-09', 1),
(3, 'fghh', 3, 5, 'fhfhgh', 'Male', '01644554544', 23649, '2014-06-10', 1),
(4, 'fghhfhf', 7, 6, 'fgd', 'Male', 'fghfghfhf', 666, '2014-06-11', 1),
(5, 'Sheikh Rasel', 10, 8, 'fggfgf', 'Male', '01675180510', 666, '2014-06-25', 1),
(6, 'RAFI MCQ', 10, 10, 'ddfggg', 'Male', '01687465412', 55005500, '2014-07-02', 1),
(7, 'rtrtrty', 1, 9, 'fghfghfg', 'Male', 'fghfghfgh', 666, '2014-07-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_department`
--

CREATE TABLE IF NOT EXISTS `ams_department` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_department`
--

INSERT INTO `ams_department` (`id`, `name`, `date`, `status`) VALUES
(1, 'czvczz', '2014-04-07', 1),
(2, 'bhgh', '2014-04-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_division`
--

CREATE TABLE IF NOT EXISTS `ams_division` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ams_division`
--

INSERT INTO `ams_division` (`id`, `name`, `date`, `status`) VALUES
(1, 'Dhaka', '2014-04-01', 1),
(2, 'comilla', '2014-04-08', 1),
(3, 'chittagong', '2014-04-08', 1),
(4, 'Rangpur', '2014-05-06', 1),
(5, 'khulna', '2014-05-12', 1),
(6, 'Rajshahi', '2014-05-14', 1),
(7, 'Shylhet', '2014-05-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_events`
--

CREATE TABLE IF NOT EXISTS `ams_events` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `color` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_events`
--

INSERT INTO `ams_events` (`id`, `name`, `color`, `date`, `status`) VALUES
(1, 'Is Events', '#172487', '2014-04-07', 1),
(2, 'Is Examination', '#ae0505', '2014-04-08', 1),
(3, 'Is Holiday', '#128512', '2014-04-14', 1),
(4, 'Is Dues', '#8e0f9d', '2014-04-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_examination`
--

CREATE TABLE IF NOT EXISTS `ams_examination` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `exam_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_examination`
--

INSERT INTO `ams_examination` (`id`, `session_id`, `class_id`, `group_id`, `section_id`, `shift_id`, `exam_id`, `school_id`, `date`, `status`) VALUES
(1, 1, 5, 1, 1, 1, 1, 3, 2014, 1),
(2, 1, 5, 1, 1, 1, 2, 3, 2014, 1),
(3, 1, 5, 1, 1, 1, 3, 3, 2014, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_exam_category`
--

CREATE TABLE IF NOT EXISTS `ams_exam_category` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ams_exam_category`
--

INSERT INTO `ams_exam_category` (`id`, `name`, `session_id`, `class_id`, `section_id`, `shift_id`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, '1st Semester', 7, 13, 10, 10, 5, 666, '2014-06-16', 1),
(2, '2nd Semester', 7, 13, 10, 10, 5, 666, '2014-06-16', 1),
(3, '1st Semester', 7, 13, 14, 12, 8, 666, '2014-06-16', 1),
(4, '2nd Semester', 7, 13, 14, 12, 9, 666, '2014-06-16', 1),
(5, '1st Semester', 7, 13, 10, 10, 10, 666, '2014-06-16', 1),
(6, '2nd Semester', 7, 13, 10, 10, 10, 666, '2014-06-16', 1),
(7, '1st Semester', 13, 20, 28, 13, 11, 55005500, '2014-07-02', 1),
(8, '1st Semester', 13, 20, 28, 13, 13, 55005500, '2014-07-06', 1),
(9, '2nd Semester', 7, 13, 14, 12, 8, 666, '2014-07-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_exam_category_set`
--

CREATE TABLE IF NOT EXISTS `ams_exam_category_set` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `exam_id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_exam_category_set`
--

INSERT INTO `ams_exam_category_set` (`id`, `exam_id`, `session_id`, `class_id`, `section_id`, `shift_id`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, 3, 7, 13, 14, 12, 8, 666, '2014-07-17', 1),
(2, 9, 7, 13, 14, 12, 8, 666, '2014-07-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_exam_fainal`
--

CREATE TABLE IF NOT EXISTS `ams_exam_fainal` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ams_exam_result`
--

CREATE TABLE IF NOT EXISTS `ams_exam_result` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name_id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `subject_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `roll` varchar(200) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `admission_id` varchar(200) NOT NULL,
  `group_id` int(20) NOT NULL,
  `exam_cateory_id` int(20) NOT NULL,
  `marks` varchar(200) NOT NULL,
  `marks2` varchar(255) NOT NULL,
  `marks3` varchar(255) NOT NULL,
  `marks4` varchar(200) NOT NULL,
  `marks5` varchar(200) NOT NULL,
  `marks6` varchar(200) NOT NULL,
  `marks7` varchar(200) NOT NULL,
  `marks8` varchar(200) NOT NULL,
  `mcq` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_exam_result`
--

INSERT INTO `ams_exam_result` (`id`, `name_id`, `session_id`, `class_id`, `subject_id`, `section_id`, `roll`, `shift_id`, `admission_id`, `group_id`, `exam_cateory_id`, `marks`, `marks2`, `marks3`, `marks4`, `marks5`, `marks6`, `marks7`, `marks8`, `mcq`, `school_id`, `date`, `status`) VALUES
(1, 14, 7, 13, 1, 14, '555', 12, '3434', 8, 3, '10', '40', '', '', '', '', '', '', '', 666, '2014-07-17', 1),
(2, 14, 7, 13, 2, 14, '555', 12, '3434', 8, 3, '20', '40', '', '', '', '', '', '', '', 666, '2014-07-17', 1),
(3, 14, 7, 13, 4, 14, '555', 12, '3434', 8, 3, '20', '40', '', '', '', '', '', '', '', 666, '2014-07-17', 1),
(4, 14, 7, 13, 1, 14, '555', 12, '3434', 8, 9, '20', '40', '', '', '', '', '', '', '', 666, '2014-07-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_exam_result_two`
--

CREATE TABLE IF NOT EXISTS `ams_exam_result_two` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `student_name_id` int(20) NOT NULL,
  `admission` varchar(200) NOT NULL,
  `roll` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `subject_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `satuts` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ams_exam_subject`
--

CREATE TABLE IF NOT EXISTS `ams_exam_subject` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `group_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  `exam_id` int(20) NOT NULL,
  `subject_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_exam_subject`
--

INSERT INTO `ams_exam_subject` (`id`, `group_id`, `class_id`, `section_id`, `shift_id`, `session_id`, `exam_id`, `subject_id`, `school_id`, `date`, `status`) VALUES
(1, 8, 13, 14, 12, 7, 3, 1, 666, '2014-07-17', 1),
(2, 8, 13, 14, 12, 7, 3, 2, 666, '2014-07-17', 1),
(3, 8, 13, 14, 12, 7, 3, 4, 666, '2014-07-17', 1),
(4, 8, 13, 14, 12, 7, 9, 1, 666, '2014-07-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_grading_system_dateils`
--

CREATE TABLE IF NOT EXISTS `ams_grading_system_dateils` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `letter` varchar(200) NOT NULL,
  `point` varchar(200) NOT NULL,
  `range_1` varchar(200) NOT NULL,
  `range_2` varchar(200) NOT NULL,
  `category_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=162 ;

--
-- Dumping data for table `ams_grading_system_dateils`
--

INSERT INTO `ams_grading_system_dateils` (`id`, `letter`, `point`, `range_1`, `range_2`, `category_id`, `school_id`, `date`, `status`) VALUES
(1, 'A++', '5.00', '90', '100', 1, 0, '2014-07-01', 1),
(2, 'A+', '4.50', '81', '90', 1, 0, '2014-07-01', 1),
(3, 'A', '3.75', '76', '80', 1, 0, '2014-07-08', 1),
(4, 'A-', '3.50', '71', '75', 1, 0, '2014-07-08', 1),
(5, 'B+', '3.25', '66', '70', 1, 0, '2014-07-08', 1),
(6, 'B', '3.00', '61', '65', 1, 0, '2014-07-08', 1),
(7, 'B-', '2.75', '56', '60', 1, 0, '2014-07-08', 1),
(8, 'C+', '2.50', '51', '55', 1, 0, '2014-07-08', 1),
(9, 'C', '2.25', '46', '50', 1, 0, '2014-07-15', 1),
(10, 'D', '2.00', '41', '45', 1, 0, '2014-07-01', 1),
(11, 'F', '0.00', '00', '40', 1, 0, '2014-07-15', 1),
(12, 'A+', '4.00', '80', '100', 2, 0, '2014-07-01', 1),
(13, 'A', '3.75', '76', '80', 2, 0, '2014-07-07', 1),
(14, 'A-', '3.50', '71', '75', 2, 0, '2014-07-08', 1),
(15, 'B+', '3.25', '66', '70', 2, 0, '2014-07-21', 1),
(16, 'B', '3.00', '61', '65', 2, 0, '2014-07-08', 1),
(17, 'B-', '2.75', '56', '60', 2, 0, '2014-07-08', 1),
(18, 'C+', '2.50', '51', '55', 2, 0, '2014-07-14', 1),
(19, 'C', '2.25', '46', '50', 2, 0, '2014-07-15', 1),
(20, 'D', '2.00', '41', '45', 2, 0, '2014-07-15', 1),
(21, 'F', '0.00', '36', '30', 2, 0, '2014-07-08', 1),
(22, 'A++', '5.00', '90', '100', 3, 0, '2014-07-01', 1),
(23, 'A+', '4.50', '81', '90', 3, 0, '2014-07-07', 1),
(24, 'A', '4.00', '71', '80', 3, 0, '2014-07-14', 1),
(25, 'B', '3.00', '61', '70', 3, 0, '2014-07-07', 1),
(26, 'C', '2.00', '51', '60', 2, 0, '2014-07-08', 1),
(27, 'D', '1.00', '41', '50', 3, 0, '2014-07-08', 1),
(28, 'F', '0.00', '36', '40', 3, 0, '2014-07-08', 1),
(29, 'A+', '5.00', '81', '100', 4, 0, '2014-07-03', 1),
(30, 'A', '4.50', '71', '80', 4, 0, '2014-07-03', 1),
(31, 'A-', '4.00', '66', '70', 4, 0, '2014-07-03', 1),
(32, 'B+', '3.50', '61', '65', 4, 0, '2014-07-03', 1),
(33, 'B', '3.00', '51', '60', 4, 0, '2014-07-03', 1),
(34, 'C', '2.00', '41', '50', 4, 0, '2014-07-03', 1),
(35, 'D', '1.00', '34', '40', 4, 0, '2014-07-03', 1),
(36, 'F', '0.00', '30', '33', 4, 0, '2014-07-03', 1),
(37, 'A++', '5.00', '86', '100', 5, 0, '2014-07-03', 1),
(38, 'A+', '4.25', '81', '85', 5, 0, '2014-07-03', 1),
(39, 'A', '4.00', '76', '80', 5, 0, '2014-07-03', 1),
(40, 'A-', '3.75', '71', '75', 5, 0, '2014-07-03', 1),
(41, 'B+', '3.50', '66', '70', 5, 0, '2014-07-03', 1),
(42, 'B', '3.25', '61', '65', 5, 0, '2014-07-03', 1),
(43, 'B-', '3.00', '56', '60', 5, 0, '2014-07-03', 1),
(44, 'C+', '2.75', '51', '55', 5, 0, '2014-07-03', 1),
(45, 'C', '2.50', '46', '50', 5, 0, '2014-07-03', 1),
(46, 'D', '2.00', '41', '45', 5, 0, '2014-07-03', 1),
(47, 'F', '0.00', '35', '40', 5, 0, '2014-07-03', 1),
(152, 'A++', '5.00', '90', '100', 1, 666, '2014-07-17', 2),
(153, 'A+', '4.50', '81', '90', 1, 666, '2014-07-17', 2),
(154, 'A', '3.75', '76', '80', 1, 666, '2014-07-17', 2),
(155, 'A-', '3.50', '71', '75', 1, 666, '2014-07-17', 2),
(156, 'B+', '3.25', '66', '70', 1, 666, '2014-07-17', 2),
(157, 'B', '3.00', '61', '65', 1, 666, '2014-07-17', 2),
(158, 'B-', '2.75', '56', '60', 1, 666, '2014-07-17', 2),
(159, 'C+', '2.50', '51', '55', 1, 666, '2014-07-17', 2),
(160, 'C', '2.25', '46', '50', 1, 666, '2014-07-17', 2),
(161, 'D', '2.00', '41', '45', 1, 666, '2014-07-17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ams_grading_system_dateils_all`
--

CREATE TABLE IF NOT EXISTS `ams_grading_system_dateils_all` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `letter` varchar(200) NOT NULL,
  `point` varchar(200) NOT NULL,
  `category_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `ams_grading_system_dateils_all`
--

INSERT INTO `ams_grading_system_dateils_all` (`id`, `name`, `letter`, `point`, `category_id`, `date`, `status`) VALUES
(1, '90 or above', 'A++', '5.00', 1, '2014-07-01', 1),
(2, '80-below 90', 'A+', '4.50', 1, '2014-07-01', 1),
(3, '75-below 80', 'A', '3.75', 1, '2014-07-08', 1),
(4, '70-below 75', 'A-', '3.50', 1, '2014-07-08', 1),
(5, '65-below 70', 'B+', '3.25', 1, '2014-07-08', 1),
(6, '60-below 65', 'B', '3.00', 1, '2014-07-08', 1),
(7, '55-below 60', 'B-', '2.75', 1, '2014-07-08', 1),
(8, '50-below 55', 'C+', '2.50', 1, '2014-07-08', 1),
(9, '45-below 50', 'C', '2.25', 1, '2014-07-15', 1),
(10, '40-below 45', 'D', '2.00', 1, '2014-07-01', 1),
(11, 'Below 40', 'F', '0.00', 1, '2014-07-15', 1),
(12, '80 of avobe', 'A+', '4.00', 2, '2014-07-01', 1),
(13, '75-below 80', 'A', '3.75', 2, '2014-07-07', 1),
(14, '70-below 75', 'A-', '3.50', 2, '2014-07-08', 1),
(15, '65-below 70', 'B+', '3.25', 2, '2014-07-21', 1),
(16, '60-below 65', 'B', '3.00', 2, '2014-07-08', 1),
(17, '55-below 60', 'B-', '2.75', 2, '2014-07-08', 1),
(18, '50-below 55', 'C+', '2.50', 2, '2014-07-14', 1),
(19, '45-below 50', 'C', '2.25', 2, '2014-07-15', 1),
(20, '40-below 45', 'D', '2.00', 2, '2014-07-15', 1),
(21, 'below 40', 'F', '0.00', 2, '2014-07-08', 1),
(22, '90 or above', 'A++', '5.00', 3, '2014-07-01', 1),
(23, '80-below 90', 'A+', '4.50', 3, '2014-07-07', 1),
(24, '70-below 80', 'A', '4.00', 3, '2014-07-14', 1),
(25, '60-below 70', 'B', '3.00', 3, '2014-07-07', 1),
(26, '50-below 60', 'C', '2.00', 2, '2014-07-08', 1),
(27, '40-below 50', 'D', '1.00', 3, '2014-07-08', 1),
(28, 'Below 40', 'F', '0.00', 3, '2014-07-08', 1),
(29, '80 or above', 'A+', '5.00', 4, '2014-07-03', 1),
(30, '70-below 80', 'A', '4.50', 4, '2014-07-03', 1),
(31, '65-below 70', 'A-', '4.00', 4, '2014-07-03', 1),
(32, '60-below 65', 'B+', '3.50', 4, '2014-07-03', 1),
(33, '50-below 60', 'B', '3.00', 4, '2014-07-03', 1),
(34, '40-below 50', 'C', '2.00', 4, '2014-07-03', 1),
(35, '33-below 40', 'D', '1.00', 4, '2014-07-03', 1),
(36, 'Below 33', 'F', '0.00', 4, '2014-07-03', 1),
(37, '85 or above', 'A++', '5.00', 5, '2014-07-03', 1),
(38, '80-below 85', 'A+', '4.25', 5, '2014-07-03', 1),
(39, '75-below 80', 'A', '4.00', 5, '2014-07-03', 1),
(40, '70-below 75', 'A-', '3.75', 5, '2014-07-03', 1),
(41, '65-below 70', 'B+', '3.50', 5, '2014-07-03', 1),
(42, '60-below 65', 'B', '3.25', 5, '2014-07-03', 1),
(43, '55-below 60', 'B-', '3.00', 5, '2014-07-03', 1),
(44, '50-below 55', 'C+', '2.75', 5, '2014-07-03', 1),
(45, '45-below 50', 'C', '2.50', 5, '2014-07-03', 1),
(46, '40-below 45', 'D', '2.00', 5, '2014-07-03', 1),
(47, 'Below 40', 'F', '0.00', 5, '2014-07-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_grading_system_name`
--

CREATE TABLE IF NOT EXISTS `ams_grading_system_name` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ams_grading_system_name`
--

INSERT INTO `ams_grading_system_name` (`id`, `name`, `date`, `status`) VALUES
(1, '1st Grading System', '2014-07-07', 1),
(2, '2nd Grading System', '2014-07-14', 1),
(3, '3rd Grading System', '2014-07-08', 1),
(4, '4th Grading System', '2014-07-01', 1),
(5, '5th Grading System', '2014-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_group`
--

CREATE TABLE IF NOT EXISTS `ams_group` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ams_group`
--

INSERT INTO `ams_group` (`id`, `name`, `school_id`, `date`, `status`) VALUES
(1, 'Empty-1', 3, '2014-05-20', 1),
(3, 'None', 3, '2014-05-22', 1),
(4, 'None', 3, '2014-06-02', 1),
(5, 'none', 666, '2014-06-09', 1),
(6, 'none', 23649, '2014-06-09', 1),
(7, 'none', 23649, '2014-06-09', 1),
(8, 'Empty-1', 666, '2014-06-10', 1),
(9, 'None', 666, '2014-06-10', 1),
(10, 'Empty-1', 666, '2014-06-10', 1),
(11, 'Empty-1', 55005500, '2014-07-02', 1),
(13, 'Shapla', 55005500, '2014-07-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_job`
--

CREATE TABLE IF NOT EXISTS `ams_job` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_job`
--

INSERT INTO `ams_job` (`id`, `name`, `date`, `status`) VALUES
(1, 'dsfd', '2014-04-15', 1),
(2, 'jgjhfghf', '2014-04-15', 1),
(3, 'sdfsd', '2014-04-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_management_group`
--

CREATE TABLE IF NOT EXISTS `ams_management_group` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `ams_management_group`
--

INSERT INTO `ams_management_group` (`id`, `name`, `school_id`, `date`, `status`) VALUES
(1, 'Teacher', 666, '2014-06-25', 1),
(3, 'Tacher', 23649, '2014-06-09', 1),
(8, 'hhh', 23649, '2014-06-09', 1),
(9, 'rrrr', 666, '2014-06-11', 1),
(10, 'Tacher', 55005500, '2014-07-02', 1),
(11, 'ghghgh', 666, '2014-07-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_management_profile`
--

CREATE TABLE IF NOT EXISTS `ams_management_profile` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `group_id` int(20) NOT NULL,
  `id_number` varchar(200) NOT NULL,
  `joining_date` varchar(200) NOT NULL,
  `department_id` varchar(200) NOT NULL,
  `category_id` int(20) NOT NULL,
  `position_id` varchar(200) NOT NULL,
  `job_id` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `m_status` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `experience_start` varchar(200) NOT NULL,
  `experience_end` varchar(200) NOT NULL,
  `experience_info` varchar(200) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `m_name` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `blood_id` int(20) NOT NULL,
  `marital_status` int(20) NOT NULL,
  `spouse_name` varchar(200) NOT NULL,
  `children` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `state` int(20) NOT NULL,
  `present_address` varchar(200) NOT NULL,
  `permanent_address` varchar(200) NOT NULL,
  `city` int(20) NOT NULL,
  `zip_code` int(20) NOT NULL,
  `countryr` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ams_management_profile`
--

INSERT INTO `ams_management_profile` (`id`, `name`, `group_id`, `id_number`, `joining_date`, `department_id`, `category_id`, `position_id`, `job_id`, `gender`, `m_status`, `qualification`, `experience_start`, `experience_end`, `experience_info`, `f_name`, `m_name`, `dob`, `blood_id`, `marital_status`, `spouse_name`, `children`, `nationality`, `religion`, `number`, `state`, `present_address`, `permanent_address`, `city`, `zip_code`, `countryr`, `email`, `photo`, `school_id`, `date`, `status`) VALUES
(1, 'Sheikh Rasel', 8, '3535353', '14-05-20', '5', 1, '0', '0', 'male', 'ty', 'ty', '2', '1', 'ty', 'hg', 'gh', '2014-05-08', 1, 1, '1', '1', '1', 'Islam', '01675180510', 0, '', '', 0, 0, '', '', 'big_1400591925_ff9170_8f732dd0a43b9b74bd5a757b9060c3ed.jpg_srz_980_635_85_22_0.50_1.20_0.00_jpg_srz.jpg', 23649, '2014-05-20', 1),
(3, 'Md: Rafi Ahammed', 1, '402006833', '14-07-01', 'ghghgh', 1, 'General', 'fghfh', 'male', 'fghfgh', 'hfghfgh', '8 Years', '2', 'dfgd', 'fghfgh', 'fghfgh', '2014-07-16', 1, 0, 'fgdfgf', 'dfgdfg', 'Bangladeshi', 'Islam', 'fghfgh', 2, 'dfdfdfdf', 'fdfdf', 2, 0, 'Country', 'rasel_alone@yahool.com', 'big_1404195561_10305609_10202408666276914_2694080315363148172_n.jpg', 666, '2014-07-01', 1),
(6, 'dfdfggf', 1, '103968233', '14-07-01', 'gdfgdf', 1, 'General', 'dfgdfg', 'male', 'dfgdfgd', 'dfgdfgdf', '2 Years', '1', 'dfgdfgdfg', 'dfgdfgdf', 'gdfgdfg', '2014-07-09', 1, 1, 'dfgdf', 'fdgdfg', 'Bangladeshi', 'Islam', 'dfgdf', 1, 'fgdfg', 'dfgdf', 1, 1, 'English (Ireland)', 'kazy.emon', 'big_1404218657_celebration-2013-marine-guide-coaching.jpg', 666, '2014-07-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_management_sms`
--

CREATE TABLE IF NOT EXISTS `ams_management_sms` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `text` varchar(200) NOT NULL,
  `number` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `ams_management_sms`
--

INSERT INTO `ams_management_sms` (`id`, `text`, `number`, `school_id`, `time`, `date`, `status`) VALUES
(1, 'fgdgdfgdfgd', 1675180510, 666, '08:11:41 pm', '2014-06-25', 1),
(2, 'dffdfdd', 1675180510, 666, '08:12:07 pm', '2014-06-25', 1),
(3, 'gfgfdgfdg', 1675180510, 666, '09:11:25 pm', '2014-06-25', 1),
(4, 'sdafsadsad', 1675180510, 666, '09:18:50 pm', '2014-06-25', 1),
(5, 'hi class', 1644554544, 666, '09:24:50 pm', '2014-06-25', 1),
(6, 'hi class', 1675180510, 666, '09:24:50 pm', '2014-06-25', 1),
(7, 'Dear Guardian,  was Absent Today at  in the class. ', 1644554544, 666, '10:12:46 pm', '2014-06-25', 1),
(8, 'Dear Guardian,  was Absent Today at  in the class. ', 1675180510, 666, '10:12:46 pm', '2014-06-25', 1),
(9, 'Dear Guardian,  was Absent Today at  in the class. ', 1675180510, 666, '10:12:46 pm', '2014-06-25', 1),
(10, 'Dear Guardian,  was Absent Today at  in the class. ', 1675180510, 666, '10:12:46 pm', '2014-06-25', 1),
(11, 'Dear Guardian,  was Absent Today at  in the class. ', 1675180510, 666, '10:12:46 pm', '2014-06-25', 1),
(12, 'Dear Guardian, Today gdfghh is Absent in the class at ', 1644554544, 666, '10:16:49 pm', '2014-06-25', 1),
(13, 'Dear Guardian, Today fgfdgd is Absent in the class at ', 1675180510, 666, '10:16:49 pm', '2014-06-25', 1),
(14, 'Dear Guardian, Today fdgdfgdfg is Absent in the class at ', 1675180510, 666, '10:16:49 pm', '2014-06-25', 1),
(15, 'Dear Guardian, Today hgfg is Absent in the class at ', 1675180510, 666, '10:16:49 pm', '2014-06-25', 1),
(16, 'Dear Guardian, Today MD: SHAFIKUL ISLAM RAJIB is Absent in the class at ', 1675180510, 666, '10:16:49 pm', '2014-06-25', 1),
(17, 'Dear Guardian, gdfghh is Absent today in the class at AMS IT SOFT', 1644554544, 666, '10:22:44 pm', '2014-06-25', 1),
(18, 'Dear Guardian, fgfdgd is Absent today in the class at AMS IT SOFT', 1675180510, 666, '10:22:44 pm', '2014-06-25', 1),
(19, 'Dear Guardian, fdgdfgdfg is Absent today in the class at AMS IT SOFT', 1675180510, 666, '10:22:44 pm', '2014-06-25', 1),
(20, 'Dear Guardian, hgfg is Absent today in the class at AMS IT SOFT', 1675180510, 666, '10:22:44 pm', '2014-06-25', 1),
(21, 'Dear Guardian, MD: SHAFIKUL ISLAM RAJIB is Absent today in the class at AMS IT SOFT', 1675180510, 666, '10:22:44 pm', '2014-06-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_manage_account`
--

CREATE TABLE IF NOT EXISTS `ams_manage_account` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `taka` varchar(200) NOT NULL,
  `management_group` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ams_manage_account`
--

INSERT INTO `ams_manage_account` (`id`, `name`, `taka`, `management_group`, `school_id`, `date`, `status`) VALUES
(1, 'Bill_1', '100', 1, 3, '2014-06-01', 1),
(2, 'Bill_2', '200', 1, 3, '2014-06-01', 1),
(3, 'Bill_3', '300', 1, 3, '2014-06-01', 1),
(6, 'lkljjljo', '44444', 7, 666, '2014-06-09', 1),
(7, 'Admin', '100', 3, 23649, '2014-06-09', 1),
(8, 'Tacher', '100', 10, 55005500, '2014-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_manage_account_paymant`
--

CREATE TABLE IF NOT EXISTS `ams_manage_account_paymant` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `receipt` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `id_number` varchar(200) NOT NULL,
  `group_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_manage_account_paymant`
--

INSERT INTO `ams_manage_account_paymant` (`id`, `receipt`, `school_id`, `id_number`, `group_id`, `date`, `status`) VALUES
(1, '6505', 3, '3535353', 1, '2014-06-01', 1),
(2, '2115', 3, '3535353', 1, '2014-06-03', 1),
(3, '4141', 666, '402006833', 1, '2014-07-01', 1),
(4, '2247', 666, '402006833', 1, '2014-07-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_manage_account_paymant_details`
--

CREATE TABLE IF NOT EXISTS `ams_manage_account_paymant_details` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `receipt_number` int(20) NOT NULL,
  `id_number` int(20) NOT NULL,
  `account_id` int(20) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `account_name_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ams_manage_account_paymant_details`
--

INSERT INTO `ams_manage_account_paymant_details` (`id`, `receipt_number`, `id_number`, `account_id`, `amount`, `total`, `account_name_id`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, 6505, 3535353, 1, '11', '100', 1, 1, 3, '2014-06-01', 1),
(2, 6505, 3535353, 1, '33', '200', 2, 1, 3, '2014-06-01', 1),
(3, 6505, 3535353, 1, '77', '300', 3, 1, 3, '2014-06-01', 1),
(4, 2115, 3535353, 1, '33', '100', 1, 1, 3, '2014-06-03', 1),
(5, 2115, 3535353, 1, '33', '200', 2, 1, 3, '2014-06-03', 1),
(6, 2115, 3535353, 1, '33', '300', 3, 1, 3, '2014-06-03', 1),
(7, 4141, 402006833, 4, '44', '44444', 6, 1, 666, '2014-07-01', 1),
(8, 2247, 402006833, 3, '66', '44444', 6, 1, 666, '2014-07-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_marital`
--

CREATE TABLE IF NOT EXISTS `ams_marital` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_marital`
--

INSERT INTO `ams_marital` (`id`, `name`, `date`, `status`) VALUES
(1, 'Single', '2014-04-08', 1),
(2, 'Married', '2014-04-08', 1),
(3, 'Divorced', '2014-04-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_marks_mode`
--

CREATE TABLE IF NOT EXISTS `ams_marks_mode` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `exam_id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `mode` varchar(200) NOT NULL,
  `group_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_marks_mode`
--

INSERT INTO `ams_marks_mode` (`id`, `exam_id`, `session_id`, `class_id`, `mode`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, 1, 7, 13, '10', 8, 666, '2014-07-15', 1),
(2, 2, 7, 13, '15', 8, 666, '2014-07-15', 1),
(3, 4, 7, 13, '20', 8, 666, '2014-07-15', 1),
(4, 5, 7, 13, '25', 8, 666, '2014-07-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_marks_select`
--

CREATE TABLE IF NOT EXISTS `ams_marks_select` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pass_marks` varchar(200) NOT NULL,
  `full_marks` varchar(200) NOT NULL,
  `subject_id` int(20) NOT NULL,
  `exam_id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ams_marks_select`
--

INSERT INTO `ams_marks_select` (`id`, `pass_marks`, `full_marks`, `subject_id`, `exam_id`, `session_id`, `class_id`, `section_id`, `shift_id`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, '33%', '100%', 1, 3, 7, 13, 14, 12, 8, 666, '2014-07-06', 1),
(2, '33%', '100%', 2, 3, 7, 13, 14, 12, 8, 666, '2014-07-06', 1),
(6, '100%', '30%', 4, 3, 7, 13, 14, 12, 8, 666, '2014-07-17', 1),
(7, '30', '100', 30, 9, 7, 13, 14, 12, 8, 666, '2014-07-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_marks_shite_chos`
--

CREATE TABLE IF NOT EXISTS `ams_marks_shite_chos` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `grading_system_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_marks_shite_chos`
--

INSERT INTO `ams_marks_shite_chos` (`id`, `grading_system_id`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, 1, 8, 666, '2014-07-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_massages_book`
--

CREATE TABLE IF NOT EXISTS `ams_massages_book` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_massages_book`
--

INSERT INTO `ams_massages_book` (`id`, `name`, `details`, `school_id`, `date`, `status`) VALUES
(3, 'Morning', '<p>In previous years Marine Guide Coaching has achieved its utmost success which was highly admired. Besides achieving its own success Marine Guide Coaching played a great role in promoting marine profession within prospective students. Marine Guide Coaching is determined to keep this continuity of success. Now Marine Guide Coaching is not confined in marine sector only, it is also running the program of DU- A unit admission, leather and textile admission with great success which is reflected on its previous achievements.</p>\r\n', 666, '2014-06-18', 1),
(4, 'EID Massages', '                                   <p>In previous years Marine Guide Coaching has achieved its utmost success wide Coaching is not confined in marine sector only, it is also running the program of DU- A unit admission, leather and textile admission with great success which is reflected on its previous achievements.</p>\r\n                                    ', 666, '2014-06-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_next_class_promot`
--

CREATE TABLE IF NOT EXISTS `ams_next_class_promot` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `roll` varchar(200) NOT NULL,
  `old_roll_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `old_class_id` int(20) NOT NULL,
  `old_section_id` int(20) NOT NULL,
  `old_shift_id` int(20) NOT NULL,
  `old_session_id` int(20) NOT NULL,
  `old_group_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `ams_next_class_promot`
--

INSERT INTO `ams_next_class_promot` (`id`, `roll`, `old_roll_id`, `class_id`, `session_id`, `section_id`, `shift_id`, `group_id`, `old_class_id`, `old_section_id`, `old_shift_id`, `old_session_id`, `old_group_id`, `school_id`, `date`, `status`) VALUES
(2, '555', 545645, 13, 7, 14, 12, 8, 13, 10, 10, 7, 5, 666, '2014-06-11', 1),
(5, '555', 56556, 13, 7, 14, 12, 8, 13, 10, 10, 7, 5, 666, '2014-06-11', 1),
(8, '5555', 6464, 13, 7, 14, 12, 8, 13, 10, 10, 7, 5, 666, '2014-06-11', 1),
(14, '555', 4545, 13, 7, 14, 12, 8, 13, 10, 10, 7, 5, 666, '2014-06-11', 1),
(16, '1000', 5555, 20, 13, 28, 13, 11, 20, 28, 13, 13, 11, 55005500, '2014-07-02', 1),
(17, '334', 1221, 9, 3, 3, 3, 3, 9, 3, 3, 3, 3, 3, '2014-06-09', 1),
(18, '4434', 676, 9, 3, 3, 3, 3, 9, 3, 3, 3, 3, 3, '2014-06-09', 1),
(19, '3434', 7878, 9, 3, 3, 3, 3, 9, 3, 3, 3, 3, 3, '2014-06-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_notice`
--

CREATE TABLE IF NOT EXISTS `ams_notice` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `word` varchar(200) NOT NULL,
  `details` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `ams_notice`
--

INSERT INTO `ams_notice` (`id`, `name`, `word`, `details`, `school_id`, `date`, `status`) VALUES
(1, 'ddgfhfh', '', 'fghfghfgh', 23649, '2014-06-09', 1),
(2, 'Holyday', '', 'fggdf dfgdfg dfg dfg dfg fg ', 666, '2014-06-09', 1),
(4, 'Holyday', '', 'dfsdf sdf sdf sdf sdf', 666, '2014-06-09', 1),
(5, 'babu', '1404290325tmp', 'hi', 666, '2014-07-02', 1),
(6, '2011', '1404290457txt', 'dfgdfgdf', 666, '2014-07-02', 1),
(7, 'sadsadasd', '1404290491.txt', 'adsadasdasd', 666, '2014-07-02', 1),
(8, 'asdsadsad', '1404290529.php', 'sadasdasd', 666, '2014-07-02', 1),
(9, 'ryhrgfhgf', '1404291129.txt', 'dfg', 666, '2014-07-02', 1),
(10, 'gfgfgfg', '1404306864.txt', 'gfgfgf', 55005500, '2014-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_package_type`
--

CREATE TABLE IF NOT EXISTS `ams_package_type` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_package_type`
--

INSERT INTO `ams_package_type` (`id`, `name`, `date`, `status`) VALUES
(1, 'Platinum', '2014-05-13', 1),
(2, 'Gold', '2014-05-13', 1),
(3, 'Silver', '2014-05-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_payment`
--

CREATE TABLE IF NOT EXISTS `ams_payment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `roll` varchar(200) NOT NULL,
  `admission` varchar(200) NOT NULL,
  `receipt` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ams_payment`
--

INSERT INTO `ams_payment` (`id`, `roll`, `admission`, `receipt`, `school_id`, `date`, `status`) VALUES
(1, '555', '3434', '9796', 666, '2014-07-01', 0),
(2, '1000', '5500550093763', '7095', 55005500, '2014-07-02', 0),
(3, '555', '456546', '9998', 666, '2014-07-06', 0),
(4, '555', '456546', '3744', 666, '2014-07-06', 0),
(5, '555', '456546', '0501', 666, '2014-07-07', 0),
(6, '555', '456546', '2019', 666, '2014-07-07', 0),
(7, '686', '80890789', '7742', 666, '2014-07-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ams_payment_details`
--

CREATE TABLE IF NOT EXISTS `ams_payment_details` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `rr` varchar(200) NOT NULL,
  `receipt_number` varchar(200) NOT NULL,
  `roll` varchar(200) NOT NULL,
  `account_id` int(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `total` varchar(200) NOT NULL,
  `account_name_id` int(20) NOT NULL,
  `totall` varchar(200) NOT NULL,
  `totalll` varchar(200) NOT NULL,
  `totall_taka` varchar(200) NOT NULL,
  `totall_name` varchar(200) NOT NULL,
  `school_id` int(2) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ams_payment_details`
--

INSERT INTO `ams_payment_details` (`id`, `rr`, `receipt_number`, `roll`, `account_id`, `amount`, `total`, `account_name_id`, `totall`, `totalll`, `totall_taka`, `totall_name`, `school_id`, `date`, `status`) VALUES
(1, '', '3744', '555', 456546, '33', '100', 1, '200', '', '20', 'Tution Fee ________TO________', 666, '2014-07-06', 1),
(2, '', '3744', '555', 456546, '33', '200', 2, '200', '', '20', 'Tution Fee ________TO________', 666, '2014-07-06', 1),
(3, '', '3744', '555', 456546, '34', '222', 3, '200', '', '20', 'Tution Fee ________TO________', 666, '2014-07-06', 1),
(4, '', '0501', '555', 456546, '445', '100', 1, '44', '', '4544', 'Tution Fee ________TO________', 666, '2014-07-07', 1),
(5, '', '0501', '555', 456546, '545', '200', 2, '44', '', '4544', 'Tution Fee ________TO________', 666, '2014-07-07', 1),
(6, '', '0501', '555', 456546, '4545', '222', 3, '44', '', '4544', 'Tution Fee ________TO________', 666, '2014-07-07', 1),
(7, '', '2019', '555', 456546, '100', '100', 1, '200', '10', '100', '10', 666, '2014-07-07', 1),
(8, '', '2019', '555', 456546, '100', '200', 2, '200', '10', '100', '10', 666, '2014-07-07', 1),
(9, '', '2019', '555', 456546, '100', '222', 3, '200', '10', '100', '10', 666, '2014-07-07', 1),
(10, '', '7742', '686', 80890789, '121', '100', 1, '111', '12', '23', '12', 666, '2014-07-15', 1),
(11, '', '7742', '686', 80890789, '1', '200', 2, '111', '12', '23', '12', 666, '2014-07-15', 1),
(12, '', '7742', '686', 80890789, '23', '222', 3, '111', '12', '23', '12', 666, '2014-07-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_performance`
--

CREATE TABLE IF NOT EXISTS `ams_performance` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `ams_performance`
--

INSERT INTO `ams_performance` (`id`, `name`, `school_id`, `date`, `status`) VALUES
(1, 'Attentiveness', 3, '2014-05-25', 1),
(2, 'Discipline', 3, '2014-05-25', 1),
(3, 'Position', 3, '2014-05-25', 1),
(4, 'Total Attendance', 3, '2014-05-25', 1),
(5, 'Working Days', 3, '2014-05-25', 1),
(6, 'fdfd', 666, '2014-06-25', 1),
(7, 'Attentiveness', 55005500, '2014-07-02', 1),
(8, 'Discipline', 55005500, '2014-07-02', 1),
(9, ' Attendance ', 666, '2014-07-06', 1),
(10, ' C . T Exam', 666, '2014-07-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_performance2`
--

CREATE TABLE IF NOT EXISTS `ams_performance2` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `performance_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ams_performance2`
--

INSERT INTO `ams_performance2` (`id`, `performance_id`, `school_id`, `date`, `status`) VALUES
(3, 1, 3, '2014-05-25', 2),
(4, 5, 3, '2014-05-25', 2),
(5, 7, 55005500, '2014-07-02', 2),
(6, 8, 55005500, '2014-07-02', 2),
(7, 9, 666, '2014-07-09', 2),
(8, 10, 666, '2014-07-09', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ams_position`
--

CREATE TABLE IF NOT EXISTS `ams_position` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_position`
--

INSERT INTO `ams_position` (`id`, `name`, `date`, `status`) VALUES
(1, 'dfgdg', '2014-04-08', 1),
(2, 'fdgf', '2014-04-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_qualification`
--

CREATE TABLE IF NOT EXISTS `ams_qualification` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_qualification`
--

INSERT INTO `ams_qualification` (`id`, `name`, `date`, `status`) VALUES
(1, 'dfd', '2014-04-15', 1),
(2, 'vbvb', '2014-04-16', 1),
(3, 'bfgf', '2014-04-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_report`
--

CREATE TABLE IF NOT EXISTS `ams_report` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ams_report`
--

INSERT INTO `ams_report` (`id`, `name`, `school_id`, `date`, `status`) VALUES
(1, 'MCQ', 666, '2014-06-29', 1),
(2, 'Essy', 666, '2014-06-29', 1),
(3, 'MCQ ', 55005500, '2014-07-02', 1),
(4, 'Essy', 55005500, '2014-07-02', 1),
(5, 'writen ', 666, '2014-07-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_report2`
--

CREATE TABLE IF NOT EXISTS `ams_report2` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `report_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ams_report2`
--

INSERT INTO `ams_report2` (`id`, `report_id`, `school_id`, `date`, `status`) VALUES
(2, 2, 666, '2014-06-29', 2),
(3, 3, 55005500, '2014-07-02', 2),
(4, 4, 55005500, '2014-07-02', 2),
(6, 1, 666, '2014-07-06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ams_result_wise_sms`
--

CREATE TABLE IF NOT EXISTS `ams_result_wise_sms` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pass_fail` varchar(200) NOT NULL,
  `admission` varchar(200) NOT NULL,
  `class_id` int(20) NOT NULL,
  `number` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `company_id` int(20) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `satuts` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_result_wise_sms`
--

INSERT INTO `ams_result_wise_sms` (`id`, `pass_fail`, `admission`, `class_id`, `number`, `school_id`, `company_id`, `time`, `date`, `satuts`) VALUES
(1, '44', '389566', 9, '01675180510', 3, 2, '04:48:01 pm', '2014-06-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_sand_sms_class_wise`
--

CREATE TABLE IF NOT EXISTS `ams_sand_sms_class_wise` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `admission` varchar(200) NOT NULL,
  `class_id` int(20) NOT NULL,
  `guardian_name` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `company_id` int(20) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_sand_sms_class_wise`
--

INSERT INTO `ams_sand_sms_class_wise` (`id`, `name`, `admission`, `class_id`, `guardian_name`, `number`, `school_id`, `company_id`, `time`, `date`, `status`) VALUES
(1, 'wetyt ', '389566', 9, 'rr', '01675180510', 3, 2, '07:21:08 pm', '2014-06-07', 1),
(2, 'wewtw', '389566', 9, 'rr', '01675180510', 3, 2, '07:24:57 pm', '2014-06-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_school`
--

CREATE TABLE IF NOT EXISTS `ams_school` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_school`
--

INSERT INTO `ams_school` (`id`, `name`, `date`, `status`) VALUES
(1, 'amsit', '2014-04-01', 1),
(2, 'ams_it', '2014-04-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_section`
--

CREATE TABLE IF NOT EXISTS `ams_section` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `session_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `ams_section`
--

INSERT INTO `ams_section` (`id`, `name`, `session_id`, `school_id`, `class_id`, `shift_id`, `date`, `status`) VALUES
(1, 'A', 4, 3, 5, 0, '2014-05-20', 1),
(2, 'B', 5, 3, 12, 0, '2014-05-20', 1),
(3, 'A', 3, 3, 9, 0, '2014-05-20', 1),
(4, 'A', 5, 3, 12, 0, '2014-06-02', 1),
(10, 'A', 7, 666, 13, 0, '2014-06-09', 1),
(11, 'A', 8, 23649, 14, 0, '2014-06-09', 1),
(12, 'A', 9, 23649, 15, 0, '2014-06-09', 1),
(13, 'A', 8, 23649, 14, 0, '2014-06-09', 1),
(14, 'B', 7, 666, 13, 0, '2014-06-10', 1),
(15, 'C', 7, 666, 13, 0, '2014-06-11', 1),
(19, 'A', 7, 666, 16, 0, '2014-06-11', 1),
(20, 'B', 7, 666, 16, 0, '2014-06-11', 1),
(21, 'C', 7, 666, 16, 0, '2014-06-11', 1),
(28, 'A', 13, 55005500, 20, 0, '2014-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_session`
--

CREATE TABLE IF NOT EXISTS `ams_session` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ams_session`
--

INSERT INTO `ams_session` (`id`, `name`, `school_id`, `date`, `status`) VALUES
(2, '2010', 4, '2014-05-20', 1),
(3, '2012', 3, '2014-05-20', 1),
(4, '2013', 3, '2014-05-23', 1),
(5, '2014', 3, '2014-06-02', 1),
(6, '2016', 3, '2014-06-03', 1),
(7, '2011', 666, '2014-06-09', 1),
(8, '2011', 23649, '2014-06-09', 1),
(9, '2010', 23649, '2014-06-09', 1),
(12, '2014', 23649, '2014-06-10', 1),
(13, '2010', 55005500, '2014-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_shift`
--

CREATE TABLE IF NOT EXISTS `ams_shift` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ams_shift`
--

INSERT INTO `ams_shift` (`id`, `name`, `school_id`, `session_id`, `class_id`, `section_id`, `group_id`, `shift_id`, `date`, `status`) VALUES
(1, 'Morning', 3, 4, 5, 1, 0, 0, '2014-05-20', 1),
(2, 'Morning', 3, 5, 12, 2, 0, 0, '2014-05-20', 1),
(3, 'Morning', 3, 3, 9, 3, 0, 0, '2014-05-22', 1),
(4, 'Morning', 3, 5, 12, 4, 0, 0, '2014-06-02', 1),
(6, 'Evening', 3, 5, 12, 4, 0, 0, '2014-06-03', 1),
(8, 'Morning', 0, 3, 9, 3, 0, 0, '2014-06-09', 1),
(9, 'Day', 23649, 8, 14, 11, 0, 0, '2014-06-09', 1),
(10, 'Day', 666, 7, 13, 10, 0, 0, '2014-06-09', 1),
(11, 'Day', 23649, 9, 15, 12, 0, 0, '2014-06-09', 1),
(12, 'Day', 666, 7, 13, 14, 0, 0, '2014-06-10', 1),
(13, 'Day', 55005500, 13, 20, 28, 0, 0, '2014-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_singup`
--

CREATE TABLE IF NOT EXISTS `ams_singup` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `eiin_number` varchar(200) NOT NULL,
  `acount_type` varchar(255) NOT NULL,
  `servic_type` varchar(200) NOT NULL,
  `acount_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `packs_type` int(20) NOT NULL,
  `country` varchar(200) NOT NULL,
  `divition` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `zip_code` varchar(200) NOT NULL,
  `sms_sander_id` varchar(200) NOT NULL,
  `choos` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `time` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `board_id` int(20) NOT NULL,
  `photo` text NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `ams_singup`
--

INSERT INTO `ams_singup` (`id`, `eiin_number`, `acount_type`, `servic_type`, `acount_name`, `address`, `packs_type`, `country`, `divition`, `city`, `zip_code`, `sms_sander_id`, `choos`, `name`, `email`, `gender`, `number`, `dob`, `time`, `password`, `board_id`, `photo`, `date`, `status`) VALUES
(3, '666', 'Educational Institutes', 'Bulk SMS', 'AMS IT SOFT', 'Dhakha,Zigatola', 1, '1', '1', '1', '2', '1212', 'CEO', 'Sheikh Rasel', 'rasel_alone@yahool.com', 'Male', '01675180510', '2013-01-08', '', '123456', 2, 'big_1402900760_Desert.jpg', '2014-07-15', 3),
(4, '222343', '0', '0', 'errrrr', '', 0, 'Country', 'Division/State', 'District/City', 'uttara', '0', 'Choose the best describes you', '', '', 'Gender', '', '', '', '123456', 0, '', '2014-05-22', 3),
(16, '777777', '1', '0', 'fhjfhjg', 'ghjgj', 1, 'Afrikaans', '1', 'Trial', 'ghjhg', '0', '21', 'ghjgh', 'ghjgh', 'Male', 'ghjghj', '2014-05-07', '', 'ghjgh', 0, '', '2014-05-22', 3),
(17, '888888', '1', '0', 'amsit', 'dhaka', 1, 'Bangladesh', '1', 'Trial', 'uttara', '444', '21', 'rasel', 'rasel_alone@yahoo.com', 'Male', '01983637383', '2014-05-07', '', '123456', 0, '', '2014-05-19', 3),
(18, '867678', '1', '0', 'fghf', 'fghfghf', 1, 'Afrikaans', '1', 'Trial', 'fghfghf', '0', '11', 'fghfg', 'fghfg', 'Male', 'fghfg', '2014-05-14', '', 'fghfgh', 0, '', '2014-05-19', 3),
(19, '66666666', 'Educational Institutes', 'Bulk SMS', 'fadf', 'sdf', 1, '1', '1', '1', '1', 'sdfs', 'Advocate', 'sdf', 'sdf', 'Male', 'sdf', '2014-05-27', '', '123456', 0, '', '2014-06-07', 3),
(20, '23649', 'Educational Institutes', 'Bulk SMS', 'retet', 'ertet', 2, '1', '1', '1', '1', 'erterte', 'Beautician', 'ertert', 'ertert', 'Male', 'ertert', '2014-05-28', '', '123456', 0, 'big_1402410606_images.jpg', '2014-06-09', 3),
(21, '55005500', 'Educational Institutes', 'Bulk SMS', 'fdfd', 'dfdfdfdf', 1, '1', '1', '1', '1', 'dfdfd', 'Beautician', 'dffsfs', 'rasel_alone@yahool.com', 'Male', 'dsfsdf', '2014-07-10', '', '123456', 3, '', '2014-07-02', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ams_sms_attendance`
--

CREATE TABLE IF NOT EXISTS `ams_sms_attendance` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `admission` varchar(200) NOT NULL,
  `class_id` int(20) NOT NULL,
  `text` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `company_id` int(20) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_sms_attendance`
--

INSERT INTO `ams_sms_attendance` (`id`, `admission`, `class_id`, `text`, `number`, `school_id`, `company_id`, `time`, `date`, `status`) VALUES
(1, '389566', 9, 'hfjjssgddkfgkdk;', '01675180510', 3, 2, '04:45:34 pm', '2014-06-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_sms_guardiant`
--

CREATE TABLE IF NOT EXISTS `ams_sms_guardiant` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `admission` varchar(200) NOT NULL,
  `class_id` int(20) NOT NULL,
  `guardian_name` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  `number` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `company_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `satuts` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_sms_guardiant`
--

INSERT INTO `ams_sms_guardiant` (`id`, `admission`, `class_id`, `guardian_name`, `text`, `number`, `school_id`, `company_id`, `date`, `satuts`) VALUES
(1, '335874', 5, 'Alimuddin', 'reterte', 1675180510, 3, 0, '2014-05-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_stationery`
--

CREATE TABLE IF NOT EXISTS `ams_stationery` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `taka` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ams_stationery`
--

INSERT INTO `ams_stationery` (`id`, `name`, `taka`, `school_id`, `date`, `status`) VALUES
(1, 'Empty-1', '100', 3, '2014-06-01', 1),
(2, 'Bill_1', '100', 3, '2014-06-01', 1),
(4, 'Bill_2', '100', 3, '2014-06-01', 1),
(5, 'Bill_3', '200', 3, '2014-06-01', 1),
(6, 'erewr', '100', 23649, '2014-06-09', 1),
(7, 'erewr', '100', 666, '2014-06-09', 1),
(8, 'test', '100', 55005500, '2014-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_stationery_paymant`
--

CREATE TABLE IF NOT EXISTS `ams_stationery_paymant` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `roll` varchar(200) NOT NULL,
  `admission` varchar(200) NOT NULL,
  `receipt` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_stationery_paymant`
--

INSERT INTO `ams_stationery_paymant` (`id`, `roll`, `admission`, `receipt`, `school_id`, `date`, `status`) VALUES
(1, '555', '3434', '2404', 666, '2014-07-01', 1),
(2, '686', '80890789', '9358', 666, '2014-07-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_stationery_paymant_details`
--

CREATE TABLE IF NOT EXISTS `ams_stationery_paymant_details` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `receipt_number` int(20) NOT NULL,
  `roll` varchar(200) NOT NULL,
  `account_id` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `account_name_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_stationery_paymant_details`
--

INSERT INTO `ams_stationery_paymant_details` (`id`, `receipt_number`, `roll`, `account_id`, `amount`, `total`, `account_name_id`, `school_id`, `date`, `status`) VALUES
(1, 9358, '686', '80890789', '121', '100', 7, 666, '2014-07-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_studenn_all_sms`
--

CREATE TABLE IF NOT EXISTS `ams_studenn_all_sms` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `admission` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `number` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `company_id` int(20) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_studenn_all_sms`
--

INSERT INTO `ams_studenn_all_sms` (`id`, `admission`, `class_id`, `number`, `school_id`, `name`, `company_id`, `time`, `date`, `status`) VALUES
(1, 335874, 5, '01983637383', 3, 'fgfdhfg', 2, '04:51:58 pm', '2014-06-07', 1),
(2, 399449, 5, 'tytty', 3, 'fgfdhfg', 2, '04:51:58 pm', '2014-06-07', 1),
(3, 389566, 9, '01983637383', 3, 'fgfdhfg', 2, '04:51:58 pm', '2014-06-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_student_account`
--

CREATE TABLE IF NOT EXISTS `ams_student_account` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `taka` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ams_student_account`
--

INSERT INTO `ams_student_account` (`id`, `name`, `taka`, `school_id`, `date`, `status`) VALUES
(1, 'tesr', '100', 666, '2014-06-11', 1),
(2, 'Empty-1', '200', 666, '2014-06-11', 1),
(3, 'Empty-1', '222', 666, '2014-06-11', 1),
(4, 'Empty-1', '200', 23649, '2014-06-11', 1),
(5, 'ertert', '100', 23649, '2014-06-11', 1),
(6, 'Admin', '100', 23649, '2014-06-11', 1),
(7, 'Three', '100', 55005500, '2014-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_student_attendance`
--

CREATE TABLE IF NOT EXISTS `ams_student_attendance` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `admission` varchar(200) NOT NULL,
  `class_id` int(20) NOT NULL,
  `day_id` int(20) NOT NULL,
  `attendance` int(2) NOT NULL,
  `group_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `rand` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `ams_student_attendance`
--

INSERT INTO `ams_student_attendance` (`id`, `admission`, `class_id`, `day_id`, `attendance`, `group_id`, `shift_id`, `section_id`, `school_id`, `rand`, `date`, `status`) VALUES
(1, '456546', 13, 1, 1, 8, 12, 14, 666, '1', '2014-07-07', 1),
(2, '456546', 13, 2, 1, 8, 12, 14, 666, '2', '2014-07-07', 1),
(3, '456546', 13, 3, 1, 8, 12, 14, 666, '3', '2014-07-07', 1),
(4, '456546', 13, 4, 1, 8, 12, 14, 666, '4', '2014-07-07', 1),
(5, '456546', 13, 5, 1, 8, 12, 14, 666, '5', '2014-07-07', 1),
(6, '456546', 13, 7, 1, 8, 12, 14, 666, '14', '2014-07-07', 1),
(7, '67575', 13, 1, 2, 8, 12, 14, 666, '1', '2014-07-07', 1),
(8, '67575', 13, 2, 2, 8, 12, 14, 666, '2', '2014-07-07', 1),
(9, '67575', 13, 3, 1, 8, 12, 14, 666, '3', '2014-07-07', 1),
(10, '67575', 13, 4, 1, 8, 12, 14, 666, '4', '2014-07-07', 1),
(11, '80890789', 13, 6, 1, 8, 12, 14, 666, '13', '2014-07-07', 1),
(12, '64564', 13, 1, 1, 8, 12, 14, 666, '1', '2014-07-07', 1),
(13, '80890789', 13, 1, 1, 8, 12, 14, 666, '1', '2014-07-07', 1),
(14, '3434', 13, 1, 1, 8, 12, 14, 666, '1', '2014-07-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_student_group`
--

CREATE TABLE IF NOT EXISTS `ams_student_group` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  `class_id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ams_student_group`
--

INSERT INTO `ams_student_group` (`id`, `name`, `shift_id`, `section_id`, `school_id`, `date`, `status`, `class_id`, `session_id`) VALUES
(1, 'Empty-1', 1, 1, 3, '2014-05-20', 1, 5, 1),
(2, 'WoWW', 4, 4, 3, '2014-05-20', 1, 12, 5),
(3, 'None', 3, 3, 3, '2014-05-22', 1, 9, 3),
(4, 'None', 4, 4, 3, '2014-06-02', 1, 12, 5),
(5, 'none', 10, 10, 666, '2014-06-09', 1, 13, 7),
(6, 'none', 9, 11, 23649, '2014-06-09', 1, 14, 8),
(7, 'none', 11, 12, 23649, '2014-06-09', 1, 15, 9),
(8, 'Empty-1', 12, 14, 666, '2014-06-10', 1, 13, 7),
(9, 'None', 12, 14, 666, '2014-06-10', 1, 13, 7),
(10, 'Empty-1', 10, 10, 666, '2014-06-10', 1, 13, 7),
(11, 'Empty-1', 13, 28, 55005500, '2014-07-02', 1, 20, 13),
(13, 'Shapla', 13, 28, 55005500, '2014-07-06', 1, 20, 13);

-- --------------------------------------------------------

--
-- Table structure for table `ams_subject`
--

CREATE TABLE IF NOT EXISTS `ams_subject` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `section_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `satuts` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_subject`
--

INSERT INTO `ams_subject` (`id`, `name`, `section_id`, `class_id`, `shift_id`, `session_id`, `school_id`, `group_id`, `date`, `satuts`) VALUES
(1, 'Bangla', 14, 13, 12, 7, 666, 8, '2014-06-29', 1),
(2, 'English', 14, 13, 12, 7, 666, 8, '2014-06-29', 1),
(3, 'Bangla', 28, 20, 13, 13, 55005500, 11, '2014-07-02', 1),
(4, 'Math', 14, 13, 12, 7, 666, 8, '2014-07-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_teacher`
--

CREATE TABLE IF NOT EXISTS `ams_teacher` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_teacher`
--

INSERT INTO `ams_teacher` (`id`, `name`, `school_id`, `date`, `status`) VALUES
(1, 'fahad', 0, '2014-04-01', 1),
(2, 'mahabub', 0, '2014-04-01', 1),
(3, 'nadim', 0, '2014-04-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_teacher_time_table`
--

CREATE TABLE IF NOT EXISTS `ams_teacher_time_table` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `stutas` int(2) NOT NULL,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `table` text NOT NULL,
  `school_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_teacher_time_table`
--

INSERT INTO `ams_teacher_time_table` (`id`, `date`, `stutas`, `session_id`, `class_id`, `section_id`, `shift_id`, `group_id`, `table`, `school_id`) VALUES
(1, '2014-05-13', 1, 1, 5, 1, 1, 2, '<table border="1" cellpadding="1" cellspacing="1" style="width: 500px;">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 2),
(2, '2014-05-21', 1, 1, 5, 2, 2, 2, '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ams_time_table`
--

CREATE TABLE IF NOT EXISTS `ams_time_table` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_time_table`
--

INSERT INTO `ams_time_table` (`id`, `name`, `date`, `status`) VALUES
(1, '12:30 pm', '2014-04-08', 1),
(2, '9:30 am', '2014-04-15', 1),
(3, '10:30 am', '2014-04-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_time_table_1`
--

CREATE TABLE IF NOT EXISTS `ams_time_table_1` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `time1` varchar(200) NOT NULL,
  `time2` varchar(200) NOT NULL,
  `time3` varchar(200) NOT NULL,
  `time4` varchar(200) NOT NULL,
  `time5` varchar(200) NOT NULL,
  `time6` varchar(200) NOT NULL,
  `time7` varchar(200) NOT NULL,
  `time8` varchar(200) NOT NULL,
  `subject1` varchar(200) NOT NULL,
  `subject2` varchar(200) NOT NULL,
  `subject3` varchar(200) NOT NULL,
  `subject4` varchar(200) NOT NULL,
  `subject5` varchar(200) NOT NULL,
  `subject6` varchar(200) NOT NULL,
  `subject7` varchar(200) NOT NULL,
  `subject8` varchar(200) NOT NULL,
  `subject9` varchar(200) NOT NULL,
  `subject10` varchar(200) NOT NULL,
  `subject11` varchar(200) NOT NULL,
  `subject12` varchar(200) NOT NULL,
  `subject13` varchar(200) NOT NULL,
  `subject14` varchar(200) NOT NULL,
  `subject15` varchar(200) NOT NULL,
  `subject16` varchar(200) NOT NULL,
  `subject17` varchar(200) NOT NULL,
  `subject18` varchar(200) NOT NULL,
  `subject19` varchar(200) NOT NULL,
  `subject20` varchar(200) NOT NULL,
  `subject21` varchar(200) NOT NULL,
  `subject22` varchar(200) NOT NULL,
  `subject23` varchar(200) NOT NULL,
  `subject24` varchar(200) NOT NULL,
  `subject25` varchar(200) NOT NULL,
  `subject26` varchar(200) NOT NULL,
  `subject27` varchar(200) NOT NULL,
  `subject28` varchar(200) NOT NULL,
  `subject29` varchar(200) NOT NULL,
  `subject30` varchar(200) NOT NULL,
  `subject31` varchar(200) NOT NULL,
  `subject32` varchar(200) NOT NULL,
  `subject33` varchar(200) NOT NULL,
  `subject34` varchar(200) NOT NULL,
  `subject35` varchar(200) NOT NULL,
  `subject36` varchar(200) NOT NULL,
  `subject37` varchar(200) NOT NULL,
  `subject38` varchar(200) NOT NULL,
  `subject39` varchar(200) NOT NULL,
  `subject40` varchar(200) NOT NULL,
  `subject41` varchar(200) NOT NULL,
  `subject42` varchar(200) NOT NULL,
  `subject37a` int(200) NOT NULL,
  `subject6a` varchar(200) NOT NULL,
  `subject6b` varchar(200) NOT NULL,
  `subject6c` varchar(200) NOT NULL,
  `subject6d` varchar(200) NOT NULL,
  `subject6e` varchar(200) NOT NULL,
  `subject6f` varchar(200) NOT NULL,
  `subject6g` varchar(200) NOT NULL,
  `tffin` varchar(200) NOT NULL,
  `teacher1` varchar(200) NOT NULL,
  `teacher2` varchar(200) NOT NULL,
  `teacher3` varchar(200) NOT NULL,
  `teacher4` varchar(200) NOT NULL,
  `teacher5` varchar(200) NOT NULL,
  `teacher6` varchar(200) NOT NULL,
  `teacher7` varchar(200) NOT NULL,
  `teacher8` varchar(200) NOT NULL,
  `teacher9` varchar(200) NOT NULL,
  `teacher10` varchar(200) NOT NULL,
  `teacher11` varchar(200) NOT NULL,
  `teacher12` varchar(200) NOT NULL,
  `teacher13` varchar(200) NOT NULL,
  `teacher14` varchar(200) NOT NULL,
  `teacher15` varchar(200) NOT NULL,
  `teacher16` varchar(200) NOT NULL,
  `teacher17` varchar(200) NOT NULL,
  `teacher18` varchar(200) NOT NULL,
  `teacher19` varchar(200) NOT NULL,
  `teacher20` varchar(200) NOT NULL,
  `teacher21` varchar(200) NOT NULL,
  `teacher22` varchar(200) NOT NULL,
  `teacher23` varchar(200) NOT NULL,
  `teacher24` varchar(200) NOT NULL,
  `teacher25` varchar(200) NOT NULL,
  `teacher26` varchar(200) NOT NULL,
  `teacher27` varchar(200) NOT NULL,
  `teacher28` varchar(200) NOT NULL,
  `teacher29` varchar(200) NOT NULL,
  `teacher30` varchar(200) NOT NULL,
  `teacher31` varchar(200) NOT NULL,
  `teacher32` varchar(200) NOT NULL,
  `teacher33` varchar(200) NOT NULL,
  `teacher34` varchar(200) NOT NULL,
  `teacher35` varchar(200) NOT NULL,
  `teacher36` varchar(200) NOT NULL,
  `teacher37` varchar(200) NOT NULL,
  `teacher38` varchar(200) NOT NULL,
  `teacher39` varchar(200) NOT NULL,
  `teacher40` varchar(200) NOT NULL,
  `teacher41` varchar(200) NOT NULL,
  `teacher42` varchar(200) NOT NULL,
  `teacher6a` varchar(200) NOT NULL,
  `teacher6b` varchar(200) NOT NULL,
  `teacher6c` varchar(200) NOT NULL,
  `teacher6d` varchar(200) NOT NULL,
  `teacher6e` varchar(200) NOT NULL,
  `teacher6f` varchar(200) NOT NULL,
  `teacher6g` varchar(200) NOT NULL,
  `day1` varchar(200) NOT NULL,
  `day2` varchar(200) NOT NULL,
  `day3` varchar(200) NOT NULL,
  `day4` varchar(200) NOT NULL,
  `day5` varchar(200) NOT NULL,
  `day6` varchar(200) NOT NULL,
  `day7` varchar(200) NOT NULL,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_time_table_1`
--

INSERT INTO `ams_time_table_1` (`id`, `time1`, `time2`, `time3`, `time4`, `time5`, `time6`, `time7`, `time8`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`, `subject11`, `subject12`, `subject13`, `subject14`, `subject15`, `subject16`, `subject17`, `subject18`, `subject19`, `subject20`, `subject21`, `subject22`, `subject23`, `subject24`, `subject25`, `subject26`, `subject27`, `subject28`, `subject29`, `subject30`, `subject31`, `subject32`, `subject33`, `subject34`, `subject35`, `subject36`, `subject37`, `subject38`, `subject39`, `subject40`, `subject41`, `subject42`, `subject37a`, `subject6a`, `subject6b`, `subject6c`, `subject6d`, `subject6e`, `subject6f`, `subject6g`, `tffin`, `teacher1`, `teacher2`, `teacher3`, `teacher4`, `teacher5`, `teacher6`, `teacher7`, `teacher8`, `teacher9`, `teacher10`, `teacher11`, `teacher12`, `teacher13`, `teacher14`, `teacher15`, `teacher16`, `teacher17`, `teacher18`, `teacher19`, `teacher20`, `teacher21`, `teacher22`, `teacher23`, `teacher24`, `teacher25`, `teacher26`, `teacher27`, `teacher28`, `teacher29`, `teacher30`, `teacher31`, `teacher32`, `teacher33`, `teacher34`, `teacher35`, `teacher36`, `teacher37`, `teacher38`, `teacher39`, `teacher40`, `teacher41`, `teacher42`, `teacher6a`, `teacher6b`, `teacher6c`, `teacher6d`, `teacher6e`, `teacher6f`, `teacher6g`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`, `session_id`, `class_id`, `section_id`, `shift_id`, `group_id`, `category_id`, `school_id`, `date`, `status`) VALUES
(1, 'ghfghfg', 'hfghfghf', '', '', '', '', '', '', '', 'hff', '', '', '', 'hfghfg', 'hfghfg', '', '', '', '', '', 'hfgh', '', '', '', 'hfghf', '', 'fghfgh', '', '', '', '', '', '', '', '', '', '', '', 'ghfgh', '', '', '', '', '', 'fghfgh', '', '', '', '', '', 0, 'hfg', 'hfghfg', 'hfghfg', 'ghfgh', 'fghfg', 'hfgh', 'fghfg', 'TIFFIN', 'hf', '', '', 'fghfghfg', 'hfghfg', 'hfgh', 'fghfg', '', '', '', '', '', 'hfgh', '', '', '', '', '', 'ghfgh', '', '', '', '', '', 'fghfg', '', '', '', '', '', 'fghfghf', '', '', '', '', '', '', '', '', '', '', '', 'hfghfg', 'hfhfg', 'fghfg', 'hfghf', 'fhfgh', 'hfghfg', 'fghfgh', 'hfghfg', 'ghfghfg', 'hfghfg', 'hfghfg', 'hghfg', 'fgfghf', 'fghf', 7, 13, 14, 12, 8, 4, 666, '2014-07-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_time_table_category`
--

CREATE TABLE IF NOT EXISTS `ams_time_table_category` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_time_table_category`
--

INSERT INTO `ams_time_table_category` (`id`, `name`, `date`, `status`) VALUES
(1, 'Design One', '2014-07-13', 1),
(2, 'Design Two', '2014-07-08', 1),
(3, 'Design Three', '2014-07-09', 1),
(4, 'Design Four', '2014-07-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_time_table_teacher`
--

CREATE TABLE IF NOT EXISTS `ams_time_table_teacher` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `time1` varchar(200) NOT NULL,
  `time2` varchar(200) NOT NULL,
  `time3` varchar(200) NOT NULL,
  `time4` varchar(200) NOT NULL,
  `time5` varchar(200) NOT NULL,
  `time6` varchar(200) NOT NULL,
  `time7` varchar(200) NOT NULL,
  `time8` varchar(200) NOT NULL,
  `subject1` varchar(200) NOT NULL,
  `subject2` varchar(200) NOT NULL,
  `subject3` varchar(200) NOT NULL,
  `subject4` varchar(200) NOT NULL,
  `subject5` varchar(200) NOT NULL,
  `subject6` varchar(200) NOT NULL,
  `subject7` varchar(200) NOT NULL,
  `subject8` varchar(200) NOT NULL,
  `subject9` varchar(200) NOT NULL,
  `subject10` varchar(200) NOT NULL,
  `subject11` varchar(200) NOT NULL,
  `subject12` varchar(200) NOT NULL,
  `subject13` varchar(200) NOT NULL,
  `subject14` varchar(200) NOT NULL,
  `subject15` varchar(200) NOT NULL,
  `subject16` varchar(200) NOT NULL,
  `subject17` varchar(200) NOT NULL,
  `subject18` varchar(200) NOT NULL,
  `subject19` varchar(200) NOT NULL,
  `subject20` varchar(200) NOT NULL,
  `subject21` varchar(200) NOT NULL,
  `subject22` varchar(200) NOT NULL,
  `subject23` varchar(200) NOT NULL,
  `subject24` varchar(200) NOT NULL,
  `subject25` varchar(200) NOT NULL,
  `subject26` varchar(200) NOT NULL,
  `subject27` varchar(200) NOT NULL,
  `subject28` varchar(200) NOT NULL,
  `subject29` varchar(200) NOT NULL,
  `subject30` varchar(200) NOT NULL,
  `subject31` varchar(200) NOT NULL,
  `subject32` varchar(200) NOT NULL,
  `subject33` varchar(200) NOT NULL,
  `subject34` varchar(200) NOT NULL,
  `subject35` varchar(200) NOT NULL,
  `subject36` varchar(200) NOT NULL,
  `subject37` varchar(200) NOT NULL,
  `subject38` varchar(200) NOT NULL,
  `subject39` varchar(200) NOT NULL,
  `subject40` varchar(200) NOT NULL,
  `subject41` varchar(200) NOT NULL,
  `subject42` varchar(200) NOT NULL,
  `subject37a` int(200) NOT NULL,
  `subject6a` varchar(200) NOT NULL,
  `subject6b` varchar(200) NOT NULL,
  `subject6c` varchar(200) NOT NULL,
  `subject6d` varchar(200) NOT NULL,
  `subject6e` varchar(200) NOT NULL,
  `subject6f` varchar(200) NOT NULL,
  `subject6g` varchar(200) NOT NULL,
  `tffin` varchar(200) NOT NULL,
  `teacher1` varchar(200) NOT NULL,
  `teacher2` varchar(200) NOT NULL,
  `teacher3` varchar(200) NOT NULL,
  `teacher4` varchar(200) NOT NULL,
  `teacher5` varchar(200) NOT NULL,
  `teacher6` varchar(200) NOT NULL,
  `teacher7` varchar(200) NOT NULL,
  `teacher8` varchar(200) NOT NULL,
  `teacher9` varchar(200) NOT NULL,
  `teacher10` varchar(200) NOT NULL,
  `teacher11` varchar(200) NOT NULL,
  `teacher12` varchar(200) NOT NULL,
  `teacher13` varchar(200) NOT NULL,
  `teacher14` varchar(200) NOT NULL,
  `teacher15` varchar(200) NOT NULL,
  `teacher16` varchar(200) NOT NULL,
  `teacher17` varchar(200) NOT NULL,
  `teacher18` varchar(200) NOT NULL,
  `teacher19` varchar(200) NOT NULL,
  `teacher20` varchar(200) NOT NULL,
  `teacher21` varchar(200) NOT NULL,
  `teacher22` varchar(200) NOT NULL,
  `teacher23` varchar(200) NOT NULL,
  `teacher24` varchar(200) NOT NULL,
  `teacher25` varchar(200) NOT NULL,
  `teacher26` varchar(200) NOT NULL,
  `teacher27` varchar(200) NOT NULL,
  `teacher28` varchar(200) NOT NULL,
  `teacher29` varchar(200) NOT NULL,
  `teacher30` varchar(200) NOT NULL,
  `teacher31` varchar(200) NOT NULL,
  `teacher32` varchar(200) NOT NULL,
  `teacher33` varchar(200) NOT NULL,
  `teacher34` varchar(200) NOT NULL,
  `teacher35` varchar(200) NOT NULL,
  `teacher36` varchar(200) NOT NULL,
  `teacher37` varchar(200) NOT NULL,
  `teacher38` varchar(200) NOT NULL,
  `teacher39` varchar(200) NOT NULL,
  `teacher40` varchar(200) NOT NULL,
  `teacher41` varchar(200) NOT NULL,
  `teacher42` varchar(200) NOT NULL,
  `teacher6a` varchar(200) NOT NULL,
  `teacher6b` varchar(200) NOT NULL,
  `teacher6c` varchar(200) NOT NULL,
  `teacher6d` varchar(200) NOT NULL,
  `teacher6e` varchar(200) NOT NULL,
  `teacher6f` varchar(200) NOT NULL,
  `teacher6g` varchar(200) NOT NULL,
  `day1` varchar(200) NOT NULL,
  `day2` varchar(200) NOT NULL,
  `day3` varchar(200) NOT NULL,
  `day4` varchar(200) NOT NULL,
  `day5` varchar(200) NOT NULL,
  `day6` varchar(200) NOT NULL,
  `day7` varchar(200) NOT NULL,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_time_table_teacher`
--

INSERT INTO `ams_time_table_teacher` (`id`, `time1`, `time2`, `time3`, `time4`, `time5`, `time6`, `time7`, `time8`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`, `subject11`, `subject12`, `subject13`, `subject14`, `subject15`, `subject16`, `subject17`, `subject18`, `subject19`, `subject20`, `subject21`, `subject22`, `subject23`, `subject24`, `subject25`, `subject26`, `subject27`, `subject28`, `subject29`, `subject30`, `subject31`, `subject32`, `subject33`, `subject34`, `subject35`, `subject36`, `subject37`, `subject38`, `subject39`, `subject40`, `subject41`, `subject42`, `subject37a`, `subject6a`, `subject6b`, `subject6c`, `subject6d`, `subject6e`, `subject6f`, `subject6g`, `tffin`, `teacher1`, `teacher2`, `teacher3`, `teacher4`, `teacher5`, `teacher6`, `teacher7`, `teacher8`, `teacher9`, `teacher10`, `teacher11`, `teacher12`, `teacher13`, `teacher14`, `teacher15`, `teacher16`, `teacher17`, `teacher18`, `teacher19`, `teacher20`, `teacher21`, `teacher22`, `teacher23`, `teacher24`, `teacher25`, `teacher26`, `teacher27`, `teacher28`, `teacher29`, `teacher30`, `teacher31`, `teacher32`, `teacher33`, `teacher34`, `teacher35`, `teacher36`, `teacher37`, `teacher38`, `teacher39`, `teacher40`, `teacher41`, `teacher42`, `teacher6a`, `teacher6b`, `teacher6c`, `teacher6d`, `teacher6e`, `teacher6f`, `teacher6g`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`, `session_id`, `class_id`, `section_id`, `shift_id`, `group_id`, `category_id`, `school_id`, `date`, `status`) VALUES
(1, 'ghfghfg', 'hfghfghf', '', '', '', '', '', '', '', 'hff', '', '', '', 'hfghfg', 'hfghfg', '', '', '', '', '', 'hfgh', '', '', '', 'hfghf', '', 'fghfgh', '', '', '', '', '', '', '', '', '', '', '', 'ghfgh', '', '', '', '', '', 'fghfgh', '', '', '', '', '', 0, 'hfg', 'hfghfg', 'hfghfg', 'ghfgh', 'fghfg', 'hfgh', 'fghfg', 'TIFFIN', 'hf', '', '', 'fghfghfg', 'hfghfg', 'hfgh', 'fghfg', '', '', '', '', '', 'hfgh', '', '', '', '', '', 'ghfgh', '', '', '', '', '', 'fghfg', '', '', '', '', '', 'fghfghf', '', '', '', '', '', '', '', '', '', '', '', 'hfghfg', 'hfhfg', 'fghfg', 'hfghf', 'fhfgh', 'hfghfg', 'fghfgh', 'hfghfg', 'ghfghfg', 'hfghfg', 'hfghfg', 'hghfg', 'fgfghf', 'fghf', 7, 13, 14, 12, 8, 4, 666, '2014-07-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_total_count`
--

CREATE TABLE IF NOT EXISTS `ams_total_count` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `total` varchar(200) NOT NULL,
  `sms` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `company_id` int(20) NOT NULL,
  `sms_quantity` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_total_count`
--

INSERT INTO `ams_total_count` (`id`, `total`, `sms`, `school_id`, `company_id`, `sms_quantity`, `time`, `date`, `status`) VALUES
(1, '1', 'wetyt ', 3, 2, '', '07:21:08 pm', '2014-06-07', 1),
(2, '1', 'wewtw', 3, 2, '', '07:24:57 pm', '2014-06-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_transfer`
--

CREATE TABLE IF NOT EXISTS `ams_transfer` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `roll_id` varchar(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_transfer`
--

INSERT INTO `ams_transfer` (`id`, `roll_id`, `school_id`, `date`, `status`) VALUES
(1, '53545', 23649, '2014-06-09', 2),
(2, 'kjkhjk', 23649, '2014-06-09', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ams_transport_setting_profile`
--

CREATE TABLE IF NOT EXISTS `ams_transport_setting_profile` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `driver_id` varchar(200) NOT NULL,
  `joining_date` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `transport_number` varchar(200) NOT NULL,
  `group_id` int(20) NOT NULL,
  `area` varchar(200) NOT NULL,
  `category_id` int(20) NOT NULL,
  `gnder` varchar(200) NOT NULL,
  `qualification_id` varchar(200) NOT NULL,
  `experience_start` varchar(200) NOT NULL,
  `experience_end` varchar(200) NOT NULL,
  `experience_info` varchar(200) NOT NULL,
  `status_s` varchar(200) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `m_name` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `blood_group_id` int(20) NOT NULL,
  `marital_status_id` int(20) NOT NULL,
  `spouse_name` varchar(200) NOT NULL,
  `children` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `present_address` varchar(200) NOT NULL,
  `permanent_address` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `zip_code` varchar(200) NOT NULL,
  `countryr` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_transport_setting_profile`
--

INSERT INTO `ams_transport_setting_profile` (`id`, `driver_id`, `joining_date`, `name`, `transport_number`, `group_id`, `area`, `category_id`, `gnder`, `qualification_id`, `experience_start`, `experience_end`, `experience_info`, `status_s`, `f_name`, `m_name`, `dob`, `blood_group_id`, `marital_status_id`, `spouse_name`, `children`, `nationality`, `religion`, `number`, `present_address`, `permanent_address`, `state`, `city`, `zip_code`, `countryr`, `email`, `photo`, `school_id`, `date`, `status`) VALUES
(2, '1045362718', '24-06-2014', 'Vaoooooo', 'rtyrt', 7, 'rtyrty', 6, 'Female', 'fgfgfgf', '2 Years', '2 Months', 'ytytry', 'yrtyrty', 'tyrtyrt', 'tryrty', '2014-06-04', 1, 1, 'tyrty', 'tyrty', 'bangladeshi', 'Islam', '01675180510', 'dfdfdfdf', 'sdfgdgf', '1', '1', 'tyty', 'Bangladesh', 'rasel_alone@yahool.com', 'big_1403686297_10464268_10152404418564123_690257513261172116_n.jpg', 666, '2014-06-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_weekly`
--

CREATE TABLE IF NOT EXISTS `ams_weekly` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ams_weekly`
--

INSERT INTO `ams_weekly` (`id`, `name`, `date`, `status`) VALUES
(1, 'Sunday', '2014-04-01', 1),
(2, 'Monday', '2014-04-08', 1),
(3, 'Saturday', '2014-04-15', 1),
(4, 'Tuesday', '2014-04-08', 1),
(5, 'Wednesday', '2014-04-08', 1),
(6, 'Thursday', '2014-04-15', 1),
(7, 'Firday', '2014-04-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `date`, `status`) VALUES
(1, 'Bangladesh', '2014-05-23', 1),
(2, 'India', '2014-05-23', 1),
(3, 'USA', '2014-05-23', 1),
(4, 'Canada', '2014-05-23', 1),
(5, 'Australia', '2014-05-23', 1),
(6, 'UK', '2014-05-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `country_id` int(20) DEFAULT NULL,
  `division_id` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `country_id`, `division_id`, `date`, `status`) VALUES
(1, 'Dhaka', 1, 1, '2014-05-23', 1),
(2, 'Faridpur', 1, 1, '2014-05-23', 1),
(3, 'Gazipur', 1, 1, '2014-05-23', 1),
(4, 'Gopalganj', 1, 1, '2014-05-23', 1),
(5, 'Jamalpur', 1, 1, '2014-05-23', 1),
(6, 'Kishoreganj', 1, 1, '2014-05-23', 1),
(7, 'Madaripur', 1, 1, '2014-05-23', 1),
(8, 'Manikganj', 1, 1, '2014-05-23', 1),
(9, 'Munshiganj', 1, 1, '2014-05-23', 1),
(10, 'Mymensingh', 1, 1, '2014-05-23', 1),
(11, 'Narayanganj', 1, 1, '2014-05-23', 1),
(12, 'Narsingdi', 1, 1, '2014-05-23', 1),
(13, 'Netrakona', 1, 1, '2014-05-23', 1),
(14, 'Rajbari', 1, 1, '2014-05-23', 1),
(15, 'Shariatpur', 1, 1, '2014-05-23', 1),
(16, 'Sherpur', 1, 1, '2014-05-23', 1),
(17, 'Tangail', 1, 1, '2014-05-23', 1),
(18, 'PANCHAGARH', 1, 6, '2014-07-22', 1),
(19, 'RANGPUR', 1, 6, '2014-07-15', 1),
(20, 'THAKURGAON', 1, 6, '2014-07-22', 1),
(21, 'HABIGANJ', 1, 7, '2014-07-22', 1),
(22, 'MAULVIBAZAR', 1, 7, '2014-07-22', 1),
(23, 'SUNAMGANJ', 1, 7, '2014-07-22', 1),
(24, 'SYLHET', 1, 7, '2014-07-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `country_id` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `name`, `country_id`, `date`, `status`) VALUES
(1, 'Dhaka', 1, '2014-05-23', 1),
(2, 'Barisal', 1, '2014-05-23', 1),
(3, 'Chittagong', 1, '2014-05-23', 1),
(4, 'Khulna', 1, '2014-05-23', 1),
(5, 'Rajshahi', 1, '2014-05-23', 1),
(6, 'Rangpur', 1, '2014-05-23', 1),
(7, 'Sylhet', 1, '2014-05-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thana`
--

CREATE TABLE IF NOT EXISTS `thana` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `country_id` int(20) DEFAULT NULL,
  `division_id` int(20) DEFAULT NULL,
  `district_id` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `thana`
--

INSERT INTO `thana` (`id`, `name`, `country_id`, `division_id`, `district_id`, `date`, `status`) VALUES
(1, 'Khilgaon', 1, 1, 1, '2014-05-24', 1),
(2, 'Badda', 1, 1, 1, '2014-05-24', 1),
(3, 'Biman Bandar', 1, 1, 1, '2014-05-24', 1),
(4, 'Cantonment', 1, 1, 1, '2014-05-24', 1),
(5, 'Dhanmondi', 1, 1, 1, '2014-05-24', 1),
(6, 'Motijheel', 1, 1, 1, '2014-05-24', 1),
(7, 'Ramna', 1, 1, 1, '2014-05-24', 1),
(8, 'Sabujbagh', 1, 1, 1, '2014-05-24', 1),
(9, 'Tejgaon', 1, 1, 1, '2014-05-24', 1),
(10, 'Uttara', 1, 1, 1, '2014-05-24', 1),
(11, 'Paltan', 1, 1, 1, '2014-05-24', 1),
(12, 'Gulshan', 1, 1, 1, '2014-05-24', 1),
(13, 'Demra', 1, 1, 1, '2014-05-24', 1),
(14, 'Sutrapur', 1, 1, 1, '2014-05-24', 1),
(15, 'Shyampur', 1, 1, 1, '2014-05-24', 1),
(16, 'Pallabi', 1, 1, 1, '2014-05-24', 1),
(17, 'Mohammadpur', 1, 1, 1, '2014-05-24', 1),
(18, 'Mirpur', 1, 1, 1, '2014-05-24', 1),
(19, 'Mugda', 1, 1, 1, '2014-05-24', 1),
(20, 'Lalbagh', 1, 1, 1, '2014-05-24', 1),
(21, 'Kamringir Char', 1, 1, 1, '2014-05-24', 1),
(22, 'Kafrul', 1, 1, 1, '2014-05-24', 1),
(23, 'Hazaribagh', 1, 1, 1, '2014-05-24', 1),
(24, 'Kotwali', 1, 1, 1, '2014-05-24', 1),
(25, 'Dhamrai', 1, 1, 1, '2014-05-24', 1),
(26, 'Dohar', 1, 1, 1, '2014-05-24', 1),
(27, 'Keraniganj', 1, 1, 1, '2014-05-24', 1),
(28, 'Nawabganj', 1, 1, 1, '2014-05-24', 1),
(29, 'Savar', 1, 1, 1, '2014-05-24', 1),
(30, 'Bhaluka', 1, 1, 10, '2014-05-24', 1),
(31, 'Trishal', 1, 1, 10, '2014-05-24', 1),
(32, 'Haluaghat', 1, 1, 10, '2014-05-24', 1),
(33, 'Muktagachha', 1, 1, 10, '2014-05-24', 1),
(34, 'Dhobaura', 1, 1, 10, '2014-05-24', 1),
(35, 'Fulbaria', 1, 1, 10, '2014-05-24', 1),
(36, 'Gaffargaon', 1, 1, 10, '2014-05-24', 1),
(37, 'Gauripur', 1, 1, 10, '2014-05-24', 1),
(38, 'Ishwarganj', 1, 1, 10, '2014-05-24', 1),
(39, 'Mymensingh Sadar', 1, 1, 10, '2014-05-24', 1),
(40, 'Nandail', 1, 1, 10, '2014-05-24', 1),
(41, 'Phulpur', 1, 1, 10, '2014-05-24', 1),
(42, 'Kadamtoli', 1, 1, 1, '2014-05-24', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
