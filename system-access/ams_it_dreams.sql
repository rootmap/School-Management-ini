-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2014 at 04:11 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_academic_calendar`
--

INSERT INTO `ams_academic_calendar` (`id`, `start_date`, `end_date`, `description`, `events_id`, `title`, `school_id`, `date`, `status`) VALUES
(1, '2014-04-23', '2014-04-24', 'Eid', 3, 'holyday', 0, '2014-04-30', 1);

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
(1, 'babu', '123456', 0, '2014-05-13', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `ams_admin_eiin_number`
--

INSERT INTO `ams_admin_eiin_number` (`id`, `eiin`, `time`, `date`, `status`) VALUES
(23, '23649', '', '2014-05-21', 3),
(24, '666', '', '2014-05-19', 3),
(30, '222343', '04:54:13 pm', '2014-05-19', 3),
(31, '777777', '04:54:35 pm', '2014-05-19', 3),
(32, '888888', '05:01:45 pm', '2014-05-19', 3),
(33, '867678', '05:06:21 pm', '2014-05-19', 3),
(34, '66666666', '04:04:33 pm', '2014-05-21', 1),
(35, '00000000', '04:05:05 pm', '2014-05-21', 1),
(36, '11111111', '04:05:19 pm', '2014-05-21', 1),
(37, '22222222', '04:05:34 pm', '2014-05-21', 1),
(38, '21212121', '04:05:49 pm', '2014-05-21', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_admin_sms_stteing`
--

INSERT INTO `ams_admin_sms_stteing` (`id`, `eiin_number`, `company_id`, `cline_quantity`, `school_id`, `time`, `date`, `status`) VALUES
(1, '23649 4 ', 2, '44', 4, '04:27:00 pm', '2014-05-21', 1),
(2, '666 3 ', 2, '200', 3, '04:27:57 pm', '2014-05-21', 1),
(3, '666 3 ', 2, '56', 3, '06:52:21 pm', '2014-05-21', 1),
(4, '666 3 ', 2, '700', 3, '07:01:01 pm', '2014-05-21', 1);

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
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `ams_admission`
--

INSERT INTO `ams_admission` (`id`, `name`, `admition`, `school_id`, `class_id`, `roll`, `section_id`, `session_id`, `shift_id`, `group_id`, `dob`, `blood_group`, `gender`, `nationality`, `religion`, `language`, `mother_name`, `father_name`, `guardian_name`, `occupation`, `income`, `number`, `serial_number`, `present_address`, `permanent_address`, `state`, `city`, `zip_code`, `countryr`, `phone_number`, `email`, `photo`, `date`, `status`) VALUES
(15, 'Sheikh Rasel', '335874', 3, 5, '44', 1, 1, 1, 1, 'Tue-May-2014', '3', 'Male', 'Bangladeshi', 'Islam', 'Bangali', 'Rabeya', 'Alimuddin', 'Alimuddin', 'Studant', 'none', '01983637383', '', 'uttara', 'uttara', '1', 1, 'ashkona', 'Bangladesh', '01675180510', 'rasel_alone@yahool.com', 'big_1400582601_stude.png', '2014-05-20', 1),
(16, 'tt', '399449', 3, 5, '4545', 2, 1, 2, 2, '2014-05-15', '2', 'Male', 'Bangladeshi', 'Islam', 'Bangali', 'ty', 'tyt', 'tyty', 'tyty', 'tyty', 'tytty', '', 'tyyt', 'tyt', '1', 1, 'ytyt', 'Bangladesh', 'tyty', 'tytyt', 'big_1400594651_images.jpg', '2014-05-20', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_attendance_reg_details`
--

INSERT INTO `ams_attendance_reg_details` (`id`, `rand_id`, `day_id`, `class_id`, `date`, `status`) VALUES
(1, 1399718278, 1, 5, '2014-05-10', 1),
(2, 1399718278, 1, 6, '2014-05-10', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_attendance_reg_stng`
--

INSERT INTO `ams_attendance_reg_stng` (`id`, `session_id`, `rand_id`, `group_id`, `shift_id`, `weekly_id`, `date1`, `class_id`, `school_id`, `date`, `status`) VALUES
(1, 5, 1400585826, 1, 1, 1, '2014-05-20', 1, 3, '2014-05-20', 1),
(2, 5, 1400585826, 1, 1, 3, '2014-05-20', 1, 3, '2014-05-20', 1),
(3, 5, 1400585826, 1, 1, 5, '2014-05-20', 1, 3, '2014-05-20', 1),
(4, 5, 1400585826, 1, 1, 7, '2014-05-20', 1, 3, '2014-05-20', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_category`
--

INSERT INTO `ams_category` (`id`, `name`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, 'a', 1, 3, '2014-05-20', 1),
(2, 's', 1, 3, '2014-05-20', 1),
(3, 'e', 1, 3, '2014-05-20', 1),
(4, 'r', 2, 3, '2014-05-20', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `ams_class`
--

INSERT INTO `ams_class` (`id`, `name`, `school_id`, `section_id`, `session_id`, `group_id`, `shift_id`, `date`, `status`) VALUES
(1, 'Class-I', 4, 0, 2, 0, 0, '2014-05-20', 1),
(2, 'Class-II', 4, 0, 2, 0, 0, '2014-05-20', 1),
(3, 'Class-One', 4, 0, 2, 0, 0, '2014-05-20', 1),
(4, 'Class-Two', 4, 0, 2, 0, 0, '2014-05-20', 1),
(5, 'Class-I', 3, 0, 1, 0, 0, '2014-05-20', 1),
(6, 'Class-II', 3, 0, 1, 0, 0, '2014-05-20', 1),
(7, 'Class-One', 3, 0, 1, 0, 0, '2014-05-20', 1),
(8, 'Class-Two', 3, 0, 1, 0, 0, '2014-05-20', 1),
(9, 'Class-I', 3, 0, 3, 0, 0, '2014-05-20', 1),
(10, 'One', 3, 0, 4, 0, 0, '2014-05-23', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_class_time_setting`
--

INSERT INTO `ams_class_time_setting` (`id`, `session_id`, `class_id`, `section_id`, `shift_id`, `group_id`, `table`, `school_id`, `date`, `status`) VALUES
(1, 1, 5, 1, 1, 2, '<p>ryrtyrtytr</p>\r\n', 2, '2014-05-13', 1),
(2, 1, 5, 1, 1, 1, '<table align="center" border="0" cellpadding="0" cellspacing="1" style="width: 100%;">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">r</th>\r\n			<th scope="col">r</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>ss</td>\r\n			<td>ss</td>\r\n		</tr>\r\n		<tr>\r\n			<td>sss</td>\r\n			<td>sss</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 3, '2014-05-21', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_contact`
--

INSERT INTO `ams_contact` (`id`, `name`, `group_id`, `category_id`, `info`, `gender`, `number`, `school_id`, `date`, `status`) VALUES
(1, 'rasel', 1, 1, 'tttttt', 'Male', '01675180510', 3, '2014-05-20', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_exam_category`
--

INSERT INTO `ams_exam_category` (`id`, `name`, `session_id`, `class_id`, `section_id`, `shift_id`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, '1st Semester', 3, 9, 3, 3, 3, 3, '2014-05-22', 1),
(2, '2nd Semester', 3, 9, 3, 3, 3, 3, '2014-05-22', 1),
(3, '3rd Semester', 3, 9, 3, 3, 3, 3, '2014-05-22', 1),
(4, 'Summer Exam', 3, 9, 3, 3, 3, 3, '2014-05-22', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `ams_exam_category_set`
--

INSERT INTO `ams_exam_category_set` (`id`, `exam_id`, `session_id`, `class_id`, `section_id`, `shift_id`, `group_id`, `school_id`, `date`, `status`) VALUES
(71, 1, 3, 9, 3, 3, 3, 0, '0000-00-00', 0),
(72, 2, 3, 9, 3, 3, 3, 0, '0000-00-00', 0),
(75, 4, 3, 9, 3, 3, 3, 0, '0000-00-00', 0);

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
  `essy` varchar(200) NOT NULL,
  `mcq` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_exam_result`
--

INSERT INTO `ams_exam_result` (`id`, `name_id`, `session_id`, `class_id`, `subject_id`, `section_id`, `roll`, `shift_id`, `admission_id`, `group_id`, `exam_cateory_id`, `essy`, `mcq`, `school_id`, `date`, `status`) VALUES
(1, 15, 1, 5, 1, 1, '44', 1, '335874', 1, 1, '44', '33', 3, '2014-05-21', 1),
(2, 16, 1, 5, 1, 2, '4545', 2, '399449', 2, 1, '45', '23', 3, '2014-05-21', 1),
(3, 15, 1, 5, 3, 1, '44', 1, '335874', 1, 1, '22', '22', 3, '2014-05-21', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_exam_result_two`
--

INSERT INTO `ams_exam_result_two` (`id`, `student_name_id`, `admission`, `roll`, `category_id`, `subject_id`, `school_id`, `date`, `satuts`) VALUES
(1, 0, '', 0, 0, 0, 2, '2014-05-07', 1);

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
(1, 3, 9, 3, 3, 3, 1, 4, 3, '2014-05-24', 1),
(2, 3, 9, 3, 3, 3, 1, 5, 3, '2014-05-24', 1),
(3, 3, 9, 3, 3, 3, 1, 6, 3, '2014-05-24', 1),
(4, 3, 9, 3, 3, 3, 1, 7, 3, '2014-05-24', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_group`
--

INSERT INTO `ams_group` (`id`, `name`, `school_id`, `date`, `status`) VALUES
(1, 'Empty-1', 3, '2014-05-20', 1),
(2, 'r', 3, '2014-05-20', 1),
(3, 'None', 3, '2014-05-22', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_management_group`
--

INSERT INTO `ams_management_group` (`id`, `name`, `school_id`, `date`, `status`) VALUES
(1, 'student', 3, '2014-05-20', 1),
(2, 'Teacher', 3, '2014-05-20', 1);

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
  `department_id` int(20) NOT NULL,
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
  `marital_status` varchar(200) NOT NULL,
  `spouse_name` varchar(200) NOT NULL,
  `children` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_management_profile`
--

INSERT INTO `ams_management_profile` (`id`, `name`, `group_id`, `id_number`, `joining_date`, `department_id`, `category_id`, `position_id`, `job_id`, `gender`, `m_status`, `qualification`, `experience_start`, `experience_end`, `experience_info`, `f_name`, `m_name`, `dob`, `blood_id`, `marital_status`, `spouse_name`, `children`, `nationality`, `religion`, `number`, `photo`, `school_id`, `date`, `status`) VALUES
(1, 'Sheikh Rasel', 1, '3535353', '14-05-20', 5, 1, '0', '0', 'male', 'ty', 'ty', '2', '1', 'ty', 'hg', 'gh', '2014-05-08', 1, '1', '1', '1', '1', 'Islam', '01675180510', 'big_1400591925_ff9170_8f732dd0a43b9b74bd5a757b9060c3ed.jpg_srz_980_635_85_22_0.50_1.20_0.00_jpg_srz.jpg', 3, '2014-05-20', 1),
(2, 'rt', 1, '3453435', '14-05-20', 6, 1, '0', '0', 'male', 'ghgh', 'hgg', '4', '2', 'ghg', 'ghh', 'gh', '2014-04-30', 1, '2', '1', '1', '1', 'Hindu', '01983637383', 'big_1400591976_stude.png', 3, '2014-05-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_management_sms`
--

CREATE TABLE IF NOT EXISTS `ams_management_sms` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `text` varchar(200) NOT NULL,
  `number` int(20) NOT NULL,
  `id_number` varchar(200) NOT NULL,
  `group_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_management_sms`
--

INSERT INTO `ams_management_sms` (`id`, `text`, `number`, `id_number`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, 'sdfsdf', 46545, '5645646', 4, 2, '2014-05-12', 1),
(2, 'sdfsdf', 1983637383, '556356', 5, 2, '2014-05-12', 1);

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
  `mode` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_marks_mode`
--

INSERT INTO `ams_marks_mode` (`id`, `exam_id`, `mode`, `school_id`, `date`, `status`) VALUES
(1, 1, '11', 3, '2014-05-24', 1),
(2, 2, '10%', 3, '2014-05-24', 1),
(3, 4, '', 3, '2014-05-24', 1),
(4, 0, '10%', 3, '2014-05-24', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `ams_next_class_promot`
--

INSERT INTO `ams_next_class_promot` (`id`, `roll`, `old_roll_id`, `class_id`, `session_id`, `section_id`, `shift_id`, `group_id`, `old_class_id`, `old_section_id`, `old_shift_id`, `old_session_id`, `old_group_id`, `school_id`, `date`, `status`) VALUES
(15, '44', 21, 5, 1, 1, 1, 1, 5, 1, 1, 1, 1, 3, '2014-05-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_notice`
--

CREATE TABLE IF NOT EXISTS `ams_notice` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `details` varchar(200) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ams_notice`
--

INSERT INTO `ams_notice` (`id`, `name`, `details`, `school_id`, `date`, `status`) VALUES
(3, 'etertr', 'szdfds sdfsf sdfds sdfsd sdfsd  sdfsdf ad', 0, '2014-04-08', 1),
(4, 'hihihihihi', 'xcbm hbvcx khvbxc xkvx ', 0, '2014-04-29', 1),
(5, 'sdfdssdfsd', 'sdfsdfsdf', 2, '2014-05-04', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_package_type`
--

INSERT INTO `ams_package_type` (`id`, `name`, `date`, `status`) VALUES
(1, 'Normal', '2014-05-13', 1),
(2, 'Classic', '2014-05-13', 1),
(3, 'Standard', '2014-05-05', 1),
(4, 'Premium ', '2014-05-07', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_payment`
--

INSERT INTO `ams_payment` (`id`, `roll`, `admission`, `receipt`, `school_id`, `date`, `status`) VALUES
(1, '44', '335874', '7445', 3, '2014-05-21', 0),
(2, '4545', '399449', '7803', 3, '2014-05-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ams_payment_details`
--

CREATE TABLE IF NOT EXISTS `ams_payment_details` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `receipt_number` varchar(200) NOT NULL,
  `roll` varchar(200) NOT NULL,
  `account_id` int(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `account_name_id` int(20) NOT NULL,
  `school_id` int(2) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ams_payment_details`
--

INSERT INTO `ams_payment_details` (`id`, `receipt_number`, `roll`, `account_id`, `amount`, `account_name_id`, `school_id`, `date`, `status`) VALUES
(1, '7445', '44', 335874, '44', 1, 3, '2014-05-21', 1),
(2, '7445', '44', 335874, '33', 2, 3, '2014-05-21', 1),
(3, '7445', '44', 335874, '34', 3, 3, '2014-05-21', 1),
(4, '7445', '44', 335874, '34', 4, 3, '2014-05-21', 1),
(5, '7445', '44', 335874, '344', 5, 3, '2014-05-21', 1),
(6, '7445', '44', 335874, '34', 6, 3, '2014-05-21', 1),
(7, '7803', '4545', 399449, '23', 1, 3, '2014-05-21', 1),
(8, '7803', '4545', 399449, '11', 2, 3, '2014-05-21', 1),
(9, '7803', '4545', 399449, '11', 3, 3, '2014-05-21', 1),
(10, '7803', '4545', 399449, '11', 4, 3, '2014-05-21', 1),
(11, '7803', '4545', 399449, '11', 5, 3, '2014-05-21', 1),
(12, '7803', '4545', 399449, '11', 6, 3, '2014-05-21', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ams_report`
--

INSERT INTO `ams_report` (`id`, `name`, `school_id`, `date`, `status`) VALUES
(1, 'Full Marks', 3, '2014-05-24', 1),
(2, 'Pass Marks', 3, '2014-05-24', 1),
(3, 'Marks Obtained', 3, '2014-05-24', 1),
(4, 'Essay', 3, '2014-05-24', 1),
(5, 'M.C.Q', 3, '2014-05-24', 1),
(6, 'Highest Marks', 3, '2014-05-24', 1),
(7, 'Letter Grade', 3, '2014-05-24', 1),
(8, 'Grade Point', 3, '2014-05-24', 1),
(9, 'Position', 3, '2014-05-24', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
  `date` date NOT NULL,
  `satuts` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_result_wise_sms`
--

INSERT INTO `ams_result_wise_sms` (`id`, `pass_fail`, `admission`, `class_id`, `number`, `school_id`, `company_id`, `date`, `satuts`) VALUES
(1, 'pass', '335874', 5, '01675180510', 3, 0, '2014-05-20', 1);

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
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_sand_sms_class_wise`
--

INSERT INTO `ams_sand_sms_class_wise` (`id`, `name`, `admission`, `class_id`, `guardian_name`, `number`, `school_id`, `company_id`, `date`, `status`) VALUES
(1, 'rert tet', '335874', 5, 'Alimuddin', '01675180510', 3, 0, '2014-05-20', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_section`
--

INSERT INTO `ams_section` (`id`, `name`, `session_id`, `school_id`, `class_id`, `shift_id`, `date`, `status`) VALUES
(1, 'A', 1, 3, 5, 0, '2014-05-20', 1),
(2, 'B', 1, 3, 5, 0, '2014-05-20', 1),
(3, 'A', 3, 3, 9, 0, '2014-05-20', 1),
(4, 'A', 4, 3, 10, 0, '2014-05-23', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_session`
--

INSERT INTO `ams_session` (`id`, `name`, `school_id`, `date`, `status`) VALUES
(1, '2010', 3, '2014-05-20', 1),
(2, '2010', 4, '2014-05-20', 1),
(3, '2012', 3, '2014-05-20', 1),
(4, '2013', 3, '2014-05-23', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_shift`
--

INSERT INTO `ams_shift` (`id`, `name`, `school_id`, `session_id`, `class_id`, `section_id`, `group_id`, `shift_id`, `date`, `status`) VALUES
(1, 'Morning', 3, 1, 5, 1, 0, 0, '2014-05-20', 1),
(2, 'Evening', 3, 1, 5, 2, 0, 0, '2014-05-20', 1),
(3, 'Morning', 3, 3, 9, 3, 0, 0, '2014-05-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_singup`
--

CREATE TABLE IF NOT EXISTS `ams_singup` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `eiin_number` varchar(200) NOT NULL,
  `acount_type` int(20) NOT NULL,
  `servic_type` int(20) NOT NULL,
  `acount_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `packs_type` int(20) NOT NULL,
  `country` varchar(200) NOT NULL,
  `divition` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `zip_code` varchar(200) NOT NULL,
  `sms_sander_id` int(20) NOT NULL,
  `choos` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `time` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ams_singup`
--

INSERT INTO `ams_singup` (`id`, `eiin_number`, `acount_type`, `servic_type`, `acount_name`, `address`, `packs_type`, `country`, `divition`, `city`, `zip_code`, `sms_sander_id`, `choos`, `name`, `email`, `gender`, `number`, `dob`, `time`, `password`, `date`, `status`) VALUES
(3, '666', 1, 0, 'ssss', '', 2, '4', '2', 'Licensed', '1122', 0, 'Trial', 'daf', 'ads', 'Male', '', 'sdf', '', '123456', '2014-05-22', 3),
(4, '222343', 0, 0, 'errrrr', '', 0, 'Country', 'Division/State', 'District/City', 'uttara', 0, 'Choose the best describes you', '', '', 'Gender', '', '', '', '123456', '2014-05-22', 3),
(16, '777777', 1, 0, 'fhjfhjg', 'ghjgj', 1, 'Afrikaans', '1', 'Trial', 'ghjhg', 0, '21', 'ghjgh', 'ghjgh', 'Male', 'ghjghj', '2014-05-07', '', 'ghjgh', '2014-05-22', 3),
(17, '888888', 1, 0, 'amsit', 'dhaka', 1, 'Bangladesh', '1', 'Trial', 'uttara', 444, '21', 'rasel', 'rasel_alone@yahoo.com', 'Male', '01983637383', '2014-05-07', '', '123456', '2014-05-19', 3),
(18, '867678', 1, 0, 'fghf', 'fghfghf', 1, 'Afrikaans', '1', 'Trial', 'fghfghf', 0, '11', 'fghfg', 'fghfg', 'Male', 'fghfg', '2014-05-14', '', 'fghfgh', '2014-05-19', 3);

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
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_sms_attendance`
--

INSERT INTO `ams_sms_attendance` (`id`, `admission`, `class_id`, `text`, `number`, `school_id`, `company_id`, `date`, `status`) VALUES
(1, '335874', 5, 'hfjjssgddkfgkdk;', '01675180510', 3, 0, '2014-05-20', 1);

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
-- Table structure for table `ams_studenn_all_sms`
--

CREATE TABLE IF NOT EXISTS `ams_studenn_all_sms` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `admission` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `number` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `company_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_studenn_all_sms`
--

INSERT INTO `ams_studenn_all_sms` (`id`, `admission`, `class_id`, `number`, `school_id`, `name`, `company_id`, `date`, `status`) VALUES
(1, 335874, 5, 1983637383, 3, 'ertertrte', 0, '2014-05-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_student_account`
--

CREATE TABLE IF NOT EXISTS `ams_student_account` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `taka` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ams_student_account`
--

INSERT INTO `ams_student_account` (`id`, `name`, `taka`, `date`, `status`) VALUES
(1, '1st', '2000', '2014-04-01', 1),
(2, '2nd', '200', '2014-04-08', 1),
(3, '3rd', '200', '2014-04-01', 1),
(4, 'other', '200', '2014-04-01', 1),
(5, 'Session/Annual Fee', '488', '2014-04-08', 1),
(6, 'Registration Fee', '200', '2014-04-08', 1);

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
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_student_attendance`
--

INSERT INTO `ams_student_attendance` (`id`, `admission`, `class_id`, `day_id`, `attendance`, `group_id`, `shift_id`, `section_id`, `school_id`, `date`, `status`) VALUES
(1, '335874', 5, 1, 1, 1, 1, 1, 3, '2014-05-20', 1),
(2, '335874', 5, 3, 2, 1, 1, 1, 3, '2014-05-20', 1),
(3, '335874', 5, 5, 1, 1, 1, 1, 3, '2014-05-20', 1),
(4, '335874', 5, 7, 1, 1, 1, 1, 3, '2014-05-20', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_student_group`
--

INSERT INTO `ams_student_group` (`id`, `name`, `shift_id`, `section_id`, `school_id`, `date`, `status`, `class_id`, `session_id`) VALUES
(1, 'Empty-1', 1, 1, 3, '2014-05-20', 1, 5, 1),
(2, 'r', 2, 2, 3, '2014-05-20', 1, 5, 1),
(3, 'None', 3, 3, 3, '2014-05-22', 1, 9, 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `ams_subject`
--

INSERT INTO `ams_subject` (`id`, `name`, `section_id`, `class_id`, `shift_id`, `session_id`, `school_id`, `group_id`, `date`, `satuts`) VALUES
(1, 'Bangla', 1, 5, 1, 1, 3, 1, '2014-05-21', 1),
(2, 'English', 1, 5, 1, 1, 3, 1, '2014-05-21', 1),
(3, 'Math', 1, 5, 1, 1, 3, 1, '2014-05-21', 1),
(4, 'Bangla', 3, 9, 3, 3, 3, 3, '2014-05-22', 1),
(5, 'English', 3, 9, 3, 3, 3, 3, '2014-05-22', 1),
(6, 'Math', 3, 9, 3, 3, 3, 3, '2014-05-22', 1),
(7, 'Painting', 3, 9, 3, 3, 3, 3, '2014-05-22', 1),
(8, 'Giogaphy', 3, 9, 3, 3, 3, 3, '2014-05-22', 1),
(9, 'Biology', 3, 9, 3, 3, 3, 3, '2014-05-22', 1),
(10, '', 0, 0, 0, 0, 3, 0, '2014-05-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_teacher`
--

CREATE TABLE IF NOT EXISTS `ams_teacher` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_teacher`
--

INSERT INTO `ams_teacher` (`id`, `name`, `date`, `status`) VALUES
(1, 'fahad', '2014-04-01', 1),
(2, 'mahabub', '2014-04-01', 1),
(3, 'nadim', '2014-04-01', 1);

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
-- Table structure for table `ams_transfer`
--

CREATE TABLE IF NOT EXISTS `ams_transfer` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `roll_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_transfer`
--

INSERT INTO `ams_transfer` (`id`, `roll_id`, `date`, `status`) VALUES
(1, 545, '2014-05-12', 2);

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
  `area` varchar(200) NOT NULL,
  `category_id` int(20) NOT NULL,
  `gnder` varchar(200) NOT NULL,
  `qualification_id` int(20) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

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
(17, 'Tangail', 1, 1, '2014-05-23', 1);

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
