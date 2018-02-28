-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2015 at 04:27 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `corporate_accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset_head_list`
--

CREATE TABLE IF NOT EXISTS `asset_head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `asset_head_list`
--

INSERT INTO `asset_head_list` (`id`, `list_of_head_accounts_id`, `head_title`, `status`) VALUES
(1, 1, 'Bank', 1),
(2, 1, 'Current Asset', 1),
(3, 1, 'Fixed Asset', 1);

-- --------------------------------------------------------

--
-- Table structure for table `asset_voucher`
--

CREATE TABLE IF NOT EXISTS `asset_voucher` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(20) DEFAULT NULL,
  `date` varchar(25) DEFAULT NULL,
  `duedate` varchar(25) DEFAULT NULL,
  `subheading` longtext,
  `currency` int(2) DEFAULT NULL,
  `footer` longtext,
  `poso` varchar(255) DEFAULT NULL,
  `notes` longtext,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `asset_voucher_detail`
--

CREATE TABLE IF NOT EXISTS `asset_voucher_detail` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `bill_id` int(20) DEFAULT NULL,
  `pid` int(20) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `tax_id` int(20) DEFAULT NULL,
  `tax_total` varchar(20) DEFAULT NULL,
  `subtotal` varchar(20) DEFAULT NULL,
  `totalamount` varchar(20) NOT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `asset_voucher_payment`
--

CREATE TABLE IF NOT EXISTS `asset_voucher_payment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `bill_id` int(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `pa` int(20) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `memo` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `balancesheet`
--

CREATE TABLE IF NOT EXISTS `balancesheet` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `totalasset` varchar(25) DEFAULT NULL,
  `totalliability` varchar(20) NOT NULL,
  `totalequity` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `balancesheet`
--

INSERT INTO `balancesheet` (`id`, `totalasset`, `totalliability`, `totalequity`, `date`, `year`) VALUES
(1, '45007000', '-25400', '-35400', '2013-04-04', '2013'),
(2, '45005300', '4000', '-35700', '2014-08-31', '2014');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(20) DEFAULT NULL,
  `date` varchar(25) DEFAULT NULL,
  `duedate` varchar(25) DEFAULT NULL,
  `subheading` longtext,
  `currency` int(2) DEFAULT NULL,
  `footer` longtext,
  `poso` varchar(255) DEFAULT NULL,
  `notes` longtext,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `vendor_id`, `date`, `duedate`, `subheading`, `currency`, `footer`, `poso`, `notes`, `status`) VALUES
(1, 0, '03-30-2013', '03-30-2013', '', 0, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE IF NOT EXISTS `bill_detail` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `bill_id` int(20) DEFAULT NULL,
  `pid` int(20) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `tax_id` int(20) DEFAULT NULL,
  `tax_total` varchar(20) DEFAULT NULL,
  `subtotal` varchar(20) DEFAULT NULL,
  `totalamount` varchar(20) NOT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `bill_id`, `pid`, `quantity`, `price`, `tax_id`, `tax_total`, `subtotal`, `totalamount`, `status`) VALUES
(1, 1, 1, 1, '16000 ', 3, '2400', '16000', '18400', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bill_payment`
--

CREATE TABLE IF NOT EXISTS `bill_payment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `bill_id` int(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `pa` int(20) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `memo` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bill_payment`
--

INSERT INTO `bill_payment` (`id`, `bill_id`, `date`, `pa`, `amount`, `memo`) VALUES
(1, 1, '2014-08-12', 32, 18400, ' dsafsadsad');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE IF NOT EXISTS `budget` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `byear` varchar(20) NOT NULL,
  `ladgerid` int(20) NOT NULL,
  `aa` varchar(20) NOT NULL,
  `bb` varchar(20) NOT NULL,
  `cc` varchar(20) NOT NULL,
  `dd` varchar(20) NOT NULL,
  `ee` varchar(20) NOT NULL,
  `ff` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `budget_year`
--

CREATE TABLE IF NOT EXISTS `budget_year` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `byear` varchar(20) NOT NULL,
  `curdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `buy_product`
--

CREATE TABLE IF NOT EXISTS `buy_product` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pname` longtext,
  `in_ac_id` int(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `description` longtext,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `buy_product`
--

INSERT INTO `buy_product` (`id`, `pname`, `in_ac_id`, `price`, `description`, `status`) VALUES
(1, 'Printing Leaftlet', 76, '16000', 'office purpose', 1);

-- --------------------------------------------------------

--
-- Table structure for table `buy_product_asset_voucher`
--

CREATE TABLE IF NOT EXISTS `buy_product_asset_voucher` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pname` longtext,
  `in_ac_id` int(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `description` longtext,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `company_user`
--

CREATE TABLE IF NOT EXISTS `company_user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company_name` longtext,
  `address` longtext,
  `contact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company_user`
--

INSERT INTO `company_user` (`id`, `username`, `password`, `status`, `date`, `email`, `company_name`, `address`, `contact`) VALUES
(1, 'admin', 'admin', 1, '2013-01-28', 'admin@ucchash.com', 'Ucchash IT', 'Nakhal Para,Locacher morr,Tejgao,Dhaka', '01775464609');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `detail` longtext,
  `amount` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `title`, `detail`, `amount`) VALUES
(1, 'AUD', 'Australian Dollar', '0'),
(2, 'AWG', 'Aruban Guilder', '0'),
(3, 'AZN', 'New Manat', '0'),
(4, 'BAM', 'Convertible Marks', '0'),
(5, 'BDT', 'Taka', '0'),
(6, 'CAD', 'Canadian Dollar', '0'),
(7, 'GBP', 'Pound Strling', '0'),
(8, 'HKD', 'Hongkong Dollar', '0');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `company_name` longtext,
  `email` longtext,
  `fname` longtext,
  `lname` longtext,
  `currency` int(2) DEFAULT NULL,
  `ac_n` longtext,
  `add1` longtext,
  `add2` longtext,
  `city` longtext,
  `country` longtext,
  `province` longtext,
  `postal_zip` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `toll_free` varchar(255) DEFAULT NULL,
  `website` longtext,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `company_name`, `email`, `fname`, `lname`, `currency`, `ac_n`, `add1`, `add2`, `city`, `country`, `province`, `postal_zip`, `phone`, `fax`, `mobile`, `toll_free`, `website`, `status`) VALUES
(5, 'Bhuyian Host', 'mdmahamodurzaman@gmail.com', 'Fahad Bhuyian', 'Zaman', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 'Ucchash', 'contact@bhuyianhost.com', 'hhhh', 'kjakdnajkcfc', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, 'ABCD', 'fahad@accamail.com', 'Fahad', 'Bhuia', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_shipping`
--

CREATE TABLE IF NOT EXISTS `customer_shipping` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ship_to_contact` longtext,
  `add1` longtext,
  `add2` longtext,
  `city` longtext,
  `country` longtext,
  `province` longtext,
  `postal_zipcode` varchar(255) DEFAULT NULL,
  `delivery_instructions` longtext,
  `phone` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dd_info`
--

CREATE TABLE IF NOT EXISTS `dd_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` text,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `dd_info`
--

INSERT INTO `dd_info` (`id`, `name`, `status`) VALUES
(1, 'Marketing', 1),
(2, 'Sales', 1),
(3, 'Accounts', 1),
(4, 'Human Resource', 1),
(5, 'Marketing Excutive', 2),
(6, 'Human Resouce Manager', 2),
(7, 'Managing Director', 2),
(8, 'CEO', 2),
(9, 'Chairman', 2),
(10, 'Junior Accountant', 2),
(11, 'Jounior Programmer', 2),
(12, 'Junior Designer', 2),
(13, 'Personal Assistant', 2),
(14, 'Co-Ordinator', 2);

-- --------------------------------------------------------

--
-- Table structure for table `emp_info`
--

CREATE TABLE IF NOT EXISTS `emp_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `payslipdate` varchar(20) NOT NULL,
  `empcode` varchar(255) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `pfac` varchar(255) NOT NULL,
  `esino` varchar(255) NOT NULL,
  `f_hname` varchar(255) NOT NULL,
  `joiningdate` varchar(20) NOT NULL,
  `bankac` varchar(255) NOT NULL,
  `mdl` varchar(255) NOT NULL,
  `etype` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `emp_info`
--

INSERT INTO `emp_info` (`id`, `company_name`, `payslipdate`, `empcode`, `ename`, `department`, `designation`, `pfac`, `esino`, `f_hname`, `joiningdate`, `bankac`, `mdl`, `etype`) VALUES
(2, 'UCC', '', '003', 'Mahamod', '3', '3', 'gdfgdfgfd', '', 'sdfsdfdsf', '03/22/2013', '8678686786867', '', 397),
(3, 'UCCHASH', '', '004', 'sdfsaf', '1', '4', 'jkn2132', '', 'ascfsf', '03/12/2013', 'sf333333333', '', 398),
(4, '', '', '', '', '', '', '', '', '', '', '', '', 0),
(5, 'admin', 'admin', '2013-01-28', '01775464609', '', '', '', '', '', '', '', '', 0),
(6, '   m bnvg', '', '3124', 'ses', '1', '8', '11221', '', 'v vc', '08/04/2014', '2400', '', 398);

-- --------------------------------------------------------

--
-- Table structure for table `equity_head_list`
--

CREATE TABLE IF NOT EXISTS `equity_head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `equity_head_list`
--

INSERT INTO `equity_head_list` (`id`, `list_of_head_accounts_id`, `head_title`, `status`) VALUES
(1, 5, 'Equity', 2),
(2, 5, 'Others', 2);

-- --------------------------------------------------------

--
-- Table structure for table `expense_head_list`
--

CREATE TABLE IF NOT EXISTS `expense_head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `expense_head_list`
--

INSERT INTO `expense_head_list` (`id`, `list_of_head_accounts_id`, `head_title`, `status`) VALUES
(1, 4, 'Cost Of Goods', 1),
(2, 4, 'Expense', 1),
(3, 4, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fixassetrates`
--

CREATE TABLE IF NOT EXISTS `fixassetrates` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `achid` int(20) DEFAULT NULL,
  `rates` int(3) DEFAULT NULL,
  `life` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fixassetrates`
--

INSERT INTO `fixassetrates` (`id`, `achid`, `rates`, `life`) VALUES
(2, 38, 2, NULL),
(3, 39, 5, NULL),
(4, 41, 10, NULL),
(5, 40, 10, NULL),
(6, 42, 10, NULL),
(7, 43, 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fixed_asset_register`
--

CREATE TABLE IF NOT EXISTS `fixed_asset_register` (
  `fid` int(20) NOT NULL AUTO_INCREMENT,
  `lid` int(20) DEFAULT NULL,
  `pid` varchar(20) DEFAULT NULL,
  `sup_name` int(20) DEFAULT NULL,
  `location` text,
  `dop` varchar(20) DEFAULT NULL,
  `cost` varchar(20) DEFAULT NULL,
  `installation` varchar(20) DEFAULT NULL,
  `charge` varchar(20) DEFAULT NULL,
  `total` varchar(20) DEFAULT NULL,
  `nod` varchar(20) DEFAULT NULL,
  `years` varchar(20) DEFAULT NULL,
  `nomal` varchar(20) DEFAULT NULL,
  `doubled` varchar(20) DEFAULT NULL,
  `three` varchar(20) DEFAULT NULL,
  `totald` varchar(20) DEFAULT NULL,
  `cumdep` varchar(20) DEFAULT NULL,
  `wdv` varchar(20) DEFAULT NULL,
  `adjustment` varchar(20) DEFAULT NULL,
  `tdctdos` varchar(20) DEFAULT NULL,
  `awdv` varchar(20) DEFAULT NULL,
  `proceed` varchar(20) DEFAULT NULL,
  `plos` varchar(20) DEFAULT NULL,
  `ondate` varchar(20) NOT NULL,
  `bywhim` varchar(255) NOT NULL,
  `recordyear` varchar(5) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `head_list`
--

CREATE TABLE IF NOT EXISTS `head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `list_of_sub_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` text,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `head_list`
--

INSERT INTO `head_list` (`id`, `list_of_head_accounts_id`, `list_of_sub_head_accounts_id`, `head_title`, `status`) VALUES
(1, 1, 1, 'Bank & Cash', 1),
(3, 1, 2, 'Investments', 1),
(5, 1, 3, 'Long-Term Investments', 1),
(6, 1, 2, 'Other Current Assets', 1),
(8, 2, 1, 'Current Bank Debt', 2),
(9, 2, 1, 'Current Debt', 2),
(10, 2, 2, 'Long-Term Debt', 2),
(11, 3, 1, 'Agriculture', 2),
(12, 3, 1, 'Commissions', 2),
(13, 3, 1, 'Fees & Charges', 2),
(14, 3, 1, 'Investments', 2),
(15, 3, 1, 'Non-Profit', 2),
(16, 3, 1, 'Other Income', 2),
(17, 3, 1, 'Professional Services', 2),
(18, 3, 1, 'Sales Products & Services', 2),
(19, 4, 1, 'Cost Of Goods', 1),
(20, 4, 2, 'Agriculture', 1),
(21, 4, 2, 'Buildings & Equipment', 1),
(22, 4, 2, 'Computers/Communication', 1),
(23, 4, 2, 'Fees, Charges & Subscriptions', 1),
(24, 4, 2, 'Insurance', 1),
(25, 4, 2, 'Non-Profit', 1),
(26, 4, 2, 'Office', 1),
(27, 4, 2, 'Other Expenses', 1),
(28, 4, 2, 'Payroll', 1),
(29, 4, 2, 'Services', 1),
(30, 4, 2, 'Taxes', 1),
(31, 4, 2, 'Tools & Supplies', 1),
(32, 4, 2, 'Vehicle Expenses', 1),
(33, 5, 1, 'Equity', 1),
(34, 1, 2, 'Accounts Receivables', 1),
(35, 4, 2, 'Sales Expense', 1),
(36, 4, 3, 'Contra', 1),
(37, 2, 3, 'Contra Entry', 2),
(38, 1, 3, 'Accumulated Depreciation / Amortization', 1),
(39, 1, 3, 'Land And Properties', 1),
(40, 1, 3, 'Machinery And Electronics', 1),
(41, 1, 3, 'Furniture And Fixtures', 1),
(42, 1, 3, 'Vehicle', 1),
(43, 1, 3, 'Intangible Assets', 1),
(45, 6, 1, 'BFIDC,MTP Khulna', 3),
(46, 6, 1, 'BFIDC, GM Office, Rubber Division, Ctg', 3),
(47, 6, 1, 'BFIDC, GM Office, Rubber Division, Sylhet', 3),
(49, 6, 1, 'BFIDC, LPC Kaptai', 3),
(50, 6, 1, 'BFIDC. GM Office. Rubber Division. Modhupur', 3),
(51, 1, 3, 'Tangible Assets', 1),
(52, 6, 2, 'Head Office Overhead', 3),
(53, 1, 2, 'Advance Deposit and Prepayment', 1),
(54, 5, 1, 'Reserve and Serplus', 2),
(55, 2, 1, 'Provision', 2),
(56, 4, 2, 'Revenue Expenditure', 1);

-- --------------------------------------------------------

--
-- Table structure for table `head_sub_list`
--

CREATE TABLE IF NOT EXISTS `head_sub_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `list_of_sub_head_accounts_id` int(20) DEFAULT NULL,
  `list_of_sub_head_list_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=424 ;

--
-- Dumping data for table `head_sub_list`
--

INSERT INTO `head_sub_list` (`id`, `list_of_head_accounts_id`, `list_of_sub_head_accounts_id`, `list_of_sub_head_list_id`, `head_title`, `status`) VALUES
(2, 1, 1, 1, 'Cash Management Account ', 1),
(3, 1, 1, 1, 'Checking Account ', 1),
(4, 1, 1, 1, 'Money Market Account ', 1),
(5, 1, 1, 1, 'Savings Account ', 1),
(6, 1, 1, 1, 'Other Bank Account ', 1),
(7, 1, 3, 38, 'Accumulated Amortization of Buildings ', 1),
(8, 1, 3, 38, 'Accumulated Amortization of Goodwill', 1),
(9, 1, 3, 38, 'Accumulated Amortization of Incorporation Costs', 1),
(10, 1, 3, 38, 'Accumulated Amortization of Land Improvements', 1),
(11, 1, 3, 38, 'Accumulated Amortization of Machinery, Equipment, Furniture & Fixtures', 1),
(12, 1, 3, 38, 'Accumulated Amortization of Machinery, Equipment, Furniture & Fixtures', 1),
(13, 1, 3, 38, 'Accumulated Amortization of Other Tangible Assets', 1),
(14, 1, 3, 38, 'Accumulated Amortization of Resource Properties', 1),
(15, 1, 3, 38, 'Accumulated Amortization of Resource Rights', 1),
(16, 1, 3, 39, 'Buildings', 1),
(18, 1, 3, 43, 'Goodwill', 1),
(19, 1, 3, 43, 'Incorporation Costs', 1),
(20, 1, 3, 39, 'Land', 1),
(21, 1, 3, 39, 'Land Improvements', 1),
(23, 1, 3, 43, 'Other Intangible Assets', 1),
(25, 1, 3, 43, 'Resource Properties', 1),
(26, 1, 3, 43, 'Resource Rights', 1),
(28, 1, 3, 5, 'Annuity', 1),
(29, 1, 3, 5, 'Term Life Insurance', 1),
(30, 1, 3, 5, 'Universal Life Insurance', 1),
(31, 1, 3, 5, 'Whole Life Insurance', 1),
(32, 1, 3, 5, 'Other Investments', 1),
(33, 1, 2, 3, 'Bonds', 1),
(34, 1, 2, 3, 'Brokerage Account', 1),
(35, 1, 2, 3, 'Certificate of Deposit', 1),
(36, 1, 2, 3, 'GIC & Term Deposits', 1),
(37, 1, 2, 3, 'Mutual Fund Account', 1),
(38, 1, 2, 3, 'Other Asset Account', 1),
(39, 1, 2, 3, 'Shares', 1),
(40, 1, 2, 3, 'T-Bills', 1),
(41, 1, 2, 3, 'Other Short-Term Investments', 1),
(42, 1, 2, 6, 'Accrued Investment Income', 1),
(43, 1, 2, 6, 'Allowance for Bad Debt', 1),
(44, 1, 2, 6, 'Due From Related Party', 1),
(45, 1, 2, 6, 'Future (deferred) Income Taxes', 1),
(46, 1, 2, 6, 'Inventory', 1),
(47, 1, 2, 6, 'Notes & Loans Receivable', 1),
(48, 1, 2, 6, 'Prepaid Expenses', 1),
(49, 1, 2, 6, 'Sales Tax Receivable', 1),
(50, 1, 2, 6, 'Taxes Recoverable/Refundable', 1),
(51, 1, 2, 6, 'Other Current Asset', 1),
(52, 2, 1, 8, 'Bank Overdraft ', 2),
(53, 2, 1, 8, 'Billing Accounts', 2),
(54, 2, 1, 8, 'Credit Card', 2),
(55, 2, 1, 8, 'Line of Credit', 2),
(56, 2, 1, 8, 'Other Current Bank Debt', 2),
(57, 2, 1, 9, 'Deposits Received', 2),
(58, 2, 1, 9, 'Dividends Payable', 2),
(59, 2, 1, 9, 'Due to Other Related Party', 2),
(60, 2, 1, 9, 'Future (deferred) Income Taxes', 2),
(61, 2, 1, 9, 'Other Short-Term Debt', 2),
(62, 2, 1, 9, 'Prepaid Income', 2),
(63, 2, 1, 9, 'Sales Tax Payable', 2),
(64, 2, 1, 9, 'Shareholder Loan', 2),
(65, 2, 1, 9, 'Taxes Payable', 2),
(66, 2, 1, 9, 'Other Current Debt', 2),
(67, 2, 2, 10, 'Home Equity Loans', 2),
(68, 2, 2, 10, 'Loans', 2),
(69, 2, 2, 10, 'Mortgages', 2),
(70, 2, 2, 10, 'Other Long-Term Debt', 2),
(71, 3, 1, 11, 'Agricultural Program Payments ', 2),
(72, 3, 1, 11, 'Commodity Credit Loans ', 2),
(73, 3, 1, 11, 'Cooperative Distributions ', 2),
(74, 3, 1, 11, 'Crop Insurance Proceeds ', 2),
(75, 3, 1, 11, 'Crop Sales', 2),
(76, 3, 1, 11, 'Custom Hire Income', 2),
(77, 3, 1, 11, 'Farmers Market Sales', 2),
(78, 3, 1, 11, 'Livestock Sales', 2),
(79, 3, 1, 11, 'Other Agriculture Revenue', 2),
(80, 3, 1, 12, 'Commission Adjustments ', 2),
(81, 3, 1, 12, 'Commission Income ', 2),
(82, 3, 1, 12, 'Other Commission Income ', 2),
(83, 3, 1, 13, 'Finance Charge Income ', 2),
(84, 3, 1, 13, 'Administrative Fees', 2),
(85, 3, 1, 13, 'Capitation Fees ', 2),
(86, 3, 1, 13, 'Fuel Surcharge ', 2),
(87, 3, 1, 13, 'Fuel Tax Credits ', 2),
(88, 3, 1, 13, 'Layover Fees ', 2),
(89, 3, 1, 13, 'Pallet Fees ', 2),
(90, 3, 1, 13, 'Settlement Fees', 2),
(91, 3, 1, 13, 'Stop Fees ', 2),
(92, 3, 1, 13, 'Tenant Fees ', 2),
(93, 3, 1, 13, 'Unloading Fees ', 2),
(94, 3, 1, 13, 'Other Fees & Charges ', 2),
(95, 3, 1, 14, 'Investments – Asset Sales ', 2),
(96, 3, 1, 14, 'Investments – Dividends ', 2),
(97, 3, 1, 14, 'Investments – Interest ', 2),
(98, 3, 1, 14, 'Investments – Other Investment Revenue ', 2),
(99, 3, 1, 14, 'Other Investment Revenue ', 2),
(100, 3, 1, 15, 'Benevolence Offerings', 2),
(101, 3, 1, 15, 'Building Fund ', 2),
(102, 3, 1, 15, 'Childrens Church Offering', 2),
(103, 3, 1, 15, 'Direct Public Grants – Corporate and Business', 2),
(104, 3, 1, 15, 'Direct Public Grants – Foundation and Trust Grants', 2),
(105, 3, 1, 15, 'Direct Public Grants – Nonprofit Organization Grants', 2),
(106, 3, 1, 15, 'Direct Public Support – Business Contributions', 2),
(107, 3, 1, 15, 'Direct Public Support – Corporate Contributions', 2),
(108, 3, 1, 15, 'Direct Public Support – Donated Art', 2),
(109, 3, 1, 15, 'Direct Public Support – Donated Professional Fees or Facilities', 2),
(110, 3, 1, 15, 'Direct Public Support – Gifts in Kind', 2),
(111, 3, 1, 15, 'Direct Public Support – Individual Contributions', 2),
(112, 3, 1, 15, 'Direct Public Support – Legacies and Bequests', 2),
(113, 3, 1, 15, 'Direct Public Support – Uncollectible Pledges', 2),
(114, 3, 1, 15, 'Direct Public Support – Volunteer Services', 2),
(115, 3, 1, 15, 'General Fund', 2),
(116, 3, 1, 15, 'Government Contracts – Agency', 2),
(117, 3, 1, 15, 'Government Contracts – Federal', 2),
(118, 3, 1, 15, 'Government Contracts – Local Government', 2),
(119, 3, 1, 15, 'Government Contracts – State or Provincial', 2),
(120, 3, 1, 15, 'Government Grants – Agency', 2),
(121, 3, 1, 15, 'Government Grants – Federal', 2),
(122, 3, 1, 15, 'Government Grants – Local Government', 2),
(123, 3, 1, 15, 'Government Grants – State or Provincial', 2),
(124, 3, 1, 15, 'Indirect Public Support', 2),
(125, 3, 1, 15, 'Mission Offerings', 2),
(126, 3, 1, 15, 'Pledges', 2),
(127, 3, 1, 15, 'Program Income – Member Assessments', 2),
(128, 3, 1, 15, 'Program Income – Membership Dues', 2),
(129, 3, 1, 15, 'Program Income – Program Service Fees', 2),
(130, 3, 1, 15, 'Youth Group', 2),
(131, 3, 1, 16, 'Insurance Proceeds Received', 2),
(132, 3, 1, 16, 'Interest Income', 2),
(133, 3, 1, 16, 'Proceeds from Sale of Assets', 2),
(134, 3, 1, 16, 'Miscellaneous Revenue', 2),
(135, 3, 1, 16, 'Refunds', 2),
(136, 3, 1, 16, 'Reimbursements', 2),
(137, 3, 1, 16, 'Sales Discounts', 2),
(138, 3, 1, 16, 'Other Income', 2),
(139, 3, 1, 17, 'Accounting Services', 2),
(140, 3, 1, 17, 'Bookkeeping Services', 2),
(141, 3, 1, 17, 'Legal Fees', 2),
(142, 3, 1, 17, 'Non-Medical Income', 2),
(143, 3, 1, 17, 'Other Medical Income', 2),
(144, 3, 1, 17, 'Payroll Services', 2),
(145, 3, 1, 17, 'Tax Preparation Services', 2),
(146, 3, 1, 17, 'Other Professional Services', 2),
(188, 3, 1, 18, ' Assessments,Banquets &amp; Events', 2),
(189, 3, 1, 18, 'Bar Sales', 2),
(190, 3, 1, 18, 'Booth Rental Income', 2),
(191, 3, 1, 18, 'Catering Sales', 2),
(192, 3, 1, 18, 'Coaching', 2),
(193, 3, 1, 18, 'Construction Income', 2),
(194, 3, 1, 18, 'Consulting Income', 2),
(195, 3, 1, 18, 'Design Income', 2),
(196, 3, 1, 18, 'Facial Treatments', 2),
(197, 3, 1, 18, 'Facilitation', 2),
(198, 3, 1, 18, 'Food &amp; Beverage Sales', 2),
(199, 3, 1, 18, 'Gift Shop &amp; Vending Sales', 2),
(200, 3, 1, 18, 'Gross Trucking Income', 2),
(201, 3, 1, 18, 'Hair Coloring Services', 2),
(202, 3, 1, 18, 'Installation Services', 2),
(204, 3, 1, 18, 'Inventory Sales', 2),
(205, 3, 1, 18, 'Job Income', 2),
(206, 3, 1, 18, 'Labor Income', 2),
(207, 3, 1, 18, 'Lodging', 2),
(208, 3, 1, 18, 'Maintenance Services', 2),
(209, 3, 1, 18, 'Manicure/Pedicure', 2),
(210, 3, 1, 18, 'Massage Services', 2),
(211, 3, 1, 18, 'Parts &amp; Materials Sales', 2),
(212, 3, 1, 18, 'Photo &amp; Video Services Income', 2),
(213, 3, 1, 18, 'Product Sales', 2),
(214, 3, 1, 18, 'Reimbursed Expenses', 2),
(215, 3, 1, 18, 'Rental Income', 2),
(216, 3, 1, 18, 'Royalties Received', 2),
(217, 3, 1, 18, 'Sales – Hardware', 2),
(218, 3, 1, 18, 'Sales – Retail Products', 2),
(219, 3, 1, 18, 'Sales – Software Subscription', 2),
(220, 3, 1, 18, 'Sales – Support and Maintenance', 2),
(221, 3, 1, 18, 'Security Sales', 2),
(222, 3, 1, 18, 'Seminars', 2),
(223, 3, 1, 18, 'Services', 2),
(224, 3, 1, 18, 'Shipping &amp; Delivery Income', 2),
(225, 3, 1, 18, 'Special Events Income', 2),
(226, 3, 1, 18, 'Special Services', 2),
(227, 3, 1, 18, 'Tape &amp; Book Sales', 2),
(228, 3, 1, 18, 'Training', 2),
(229, 3, 1, 18, 'Other Products &amp; Services', 2),
(230, 4, 1, 19, 'Merchant Account Fees ', 1),
(231, 4, 1, 19, 'Subcontracted Services', 1),
(232, 4, 1, 19, 'Blueprints & Reproduction', 1),
(233, 4, 1, 19, 'Bond Expense', 1),
(234, 4, 1, 19, 'Commissions Paid', 1),
(235, 4, 1, 19, 'Construction Materials', 1),
(236, 4, 1, 19, 'Contracted Services', 1),
(237, 4, 1, 19, 'Equipment Rental', 1),
(238, 4, 1, 19, 'Equipment Rental for Jobs', 1),
(239, 4, 1, 19, 'Etsy Service Charges', 1),
(240, 4, 1, 19, 'Freight & Shipping Costs', 1),
(241, 4, 1, 19, 'Fuel', 1),
(242, 4, 1, 19, 'Linens & Lodging Supplies', 1),
(243, 4, 1, 19, 'Materials Cost', 1),
(244, 4, 1, 19, 'Media Purchased for Clients', 1),
(245, 4, 1, 19, 'Other Construction Costs', 1),
(246, 4, 1, 19, 'Other Job Related Costs', 1),
(247, 4, 1, 19, 'Outsourced Service Providers', 1),
(248, 4, 1, 19, 'Product Samples', 1),
(249, 4, 1, 19, 'Production & Supplies', 1),
(250, 4, 1, 19, 'Purchases – Food & Beverage', 1),
(251, 4, 1, 19, 'Purchases – Hardware for Resale', 1),
(252, 4, 1, 19, 'Purchases – Parts & Materials', 1),
(253, 4, 1, 19, 'Purchases – Resale Items', 1),
(254, 4, 1, 19, 'Purchases – Software for Resale', 1),
(255, 4, 1, 19, 'Restaurant Supplies', 1),
(256, 4, 1, 19, 'Show and Exhibitor Fees', 1),
(257, 4, 1, 19, 'Studio and Location Costs', 1),
(258, 4, 1, 19, 'Subcontractors Expense', 1),
(259, 4, 1, 19, 'Tools and Craft Supplies', 1),
(260, 4, 1, 19, 'Other Cost of Goods ', 1),
(261, 4, 2, 20, 'Chemicals Purchased', 1),
(262, 4, 2, 20, 'Custom Hire & Contract Labor', 1),
(263, 4, 2, 20, 'Feed Purchased', 1),
(264, 4, 2, 20, 'Fertilizers & Lime', 1),
(265, 4, 2, 20, 'Freight & Trucking', 1),
(266, 4, 2, 20, 'Gasoline, Fuel & Oil', 1),
(267, 4, 2, 20, 'Seed & Plants Purchased', 1),
(268, 4, 2, 20, 'Vaccines & Medicines', 1),
(269, 4, 2, 20, 'Veterinary&rsquo; Breeding&rsquo; Medicine', 1),
(270, 4, 2, 20, 'Other Agriculture Expense', 1),
(271, 4, 2, 21, 'Equipment Lease or Rental', 1),
(272, 4, 2, 21, 'Building & Property Security', 1),
(273, 4, 2, 21, 'Building Maintenance', 1),
(274, 4, 2, 21, 'Property Management Fees', 1),
(275, 4, 2, 21, 'Shop Expense', 1),
(276, 4, 2, 21, 'Storage & Warehousing', 1),
(277, 4, 2, 21, 'Custom Building & Equipment', 1),
(278, 4, 2, 22, 'Other Computer & Communication ', 1),
(279, 4, 2, 23, ' Business Licenses & Permits', 1),
(280, 4, 2, 23, 'Dues & Subscriptions', 1),
(281, 4, 2, 23, 'Bad Debts', 1),
(282, 4, 2, 23, 'Business Registration Fees', 1),
(283, 4, 2, 23, 'Cash Over & Short', 1),
(284, 4, 2, 23, 'Credit Card Discount Fees', 1),
(285, 4, 2, 23, 'Fines, Penalties & Judgments', 1),
(286, 4, 2, 23, 'Fundraising Fees', 1),
(287, 4, 2, 23, 'Late Fees', 1),
(288, 4, 2, 23, 'Memberships & Dues', 1),
(289, 4, 2, 23, 'Trade Commissions', 1),
(290, 4, 2, 23, 'Other Fees&rsquo; Charges &amp; Subscriptions', 1),
(291, 4, 2, 24, 'Insurance – General Liability', 1),
(292, 4, 2, 24, 'Insurance – Health', 1),
(293, 4, 2, 24, 'Insurance – Professional Liability', 1),
(294, 4, 2, 24, 'Insurance – Worker&rsquo;s Compensation', 1),
(295, 4, 2, 24, 'Insurance – Life & Disability', 1),
(296, 4, 2, 24, 'Insurance – Property', 1),
(297, 4, 2, 24, 'Insurance – Other', 1),
(298, 4, 2, 25, 'Awards & Grants', 1),
(299, 4, 2, 25, 'Evangelism & Special Events', 1),
(300, 4, 2, 25, 'Ministry Expenses', 1),
(301, 4, 2, 25, 'Other Non-Profit Expenses', 1),
(302, 4, 2, 26, 'Janitorial Expense', 1),
(303, 4, 2, 26, 'Postage & Delivery', 1),
(304, 4, 2, 26, 'Printing and Reproduction', 1),
(305, 4, 2, 26, 'Furniture & Decoration', 1),
(306, 4, 2, 26, 'Landscaping', 1),
(307, 4, 2, 26, 'Medical Records Supplies', 1),
(308, 4, 2, 26, 'Reference Materials', 1),
(309, 4, 2, 26, 'Training Materials', 1),
(310, 4, 2, 26, 'Other Office Expenses', 1),
(311, 4, 2, 27, 'Donations', 1),
(312, 4, 2, 27, 'Miscellaneous Expense', 1),
(313, 4, 2, 27, 'Political Contributions', 1),
(314, 4, 2, 56, 'Amortization', 1),
(315, 4, 2, 27, 'Catering and Facilities', 1),
(316, 4, 2, 27, 'Conferences & Meetings', 1),
(317, 4, 2, 27, 'Conservation Expense', 1),
(318, 4, 2, 27, 'Other Expenses', 1),
(319, 4, 2, 28, 'Payroll – Bonuses', 1),
(320, 4, 2, 28, 'Payroll – Commissions', 1),
(321, 4, 2, 28, 'Payroll – Tax', 1),
(322, 4, 2, 28, 'Other Payroll', 1),
(323, 4, 2, 29, 'Education & Training', 1),
(324, 4, 2, 29, 'Assessment Costs', 1),
(325, 4, 2, 29, 'Business Services', 1),
(326, 4, 2, 29, 'Contract Services', 1),
(327, 4, 2, 29, 'Financial Advisor', 1),
(328, 4, 2, 29, 'Laboratory Fees', 1),
(329, 4, 2, 29, 'Laundry', 1),
(330, 4, 2, 29, 'Legal Fees', 1),
(331, 4, 2, 29, 'Marketing Expense', 1),
(332, 4, 2, 29, 'Music & Entertainment', 1),
(333, 4, 2, 29, 'Photography Processing & Supplies', 1),
(334, 4, 2, 29, 'Research Services', 1),
(335, 4, 2, 29, 'Training', 1),
(336, 4, 2, 29, 'Transcription Services', 1),
(337, 4, 2, 29, 'Volunteer Services', 1),
(338, 4, 2, 29, 'Other Services ', 1),
(339, 4, 2, 30, 'Taxes – Property Tax', 1),
(340, 4, 2, 30, 'Taxes – Corporate Tax', 1),
(341, 4, 2, 30, 'Taxes – Local Tax', 1),
(342, 4, 2, 30, 'Other Taxes', 1),
(343, 4, 2, 31, 'Linen Expense', 1),
(344, 4, 2, 31, 'Medical Supplies', 1),
(345, 4, 2, 31, 'Salon Supplies, Linens, Laundry', 1),
(346, 4, 2, 31, 'Small Medical Equipment', 1),
(347, 4, 2, 31, 'Small Tools & Equipment', 1),
(348, 4, 2, 31, 'Uniforms', 1),
(349, 4, 2, 31, 'Other Tools & Supplies', 1),
(350, 4, 2, 32, 'Vehicle – Lease Payments', 1),
(351, 4, 2, 32, 'Parking', 1),
(352, 4, 2, 32, 'Public Transportation', 1),
(353, 4, 2, 32, 'Rental Car & Taxi', 1),
(354, 4, 2, 32, 'Other Vehicle Expenses', 1),
(355, 5, 1, 33, 'Owner Investment / Drawings', 1),
(356, 5, 1, 33, 'Cash Dividends', 1),
(357, 5, 1, 33, 'Common Shares', 1),
(358, 5, 1, 33, 'Contributed and Other Surplus', 1),
(359, 5, 1, 33, 'Contributed Surplus', 1),
(360, 5, 1, 33, 'Currency Adjustments', 1),
(361, 5, 1, 33, 'Dividends Declared', 1),
(362, 5, 1, 33, 'Patronage Dividends', 1),
(363, 5, 1, 33, 'Preferred Shares', 1),
(364, 5, 1, 33, 'Prior Period Adjustments', 1),
(365, 5, 1, 33, 'Retained Earnings/Deficit', 1),
(366, 5, 1, 33, 'Share Capital', 1),
(367, 5, 1, 33, 'Share Redemptions', 1),
(368, 5, 1, 33, 'Special Reserves', 1),
(369, 5, 1, 33, 'Other Equity', 1),
(370, 3, 1, 18, 'Sales Software', 2),
(372, 4, 2, 35, 'Discount', 1),
(373, 4, 2, 35, 'Carriage Outwards', 1),
(376, 1, 2, 1, 'Accounts Receivables', 1),
(377, 1, 1, 1, 'Cash On Hand', 1),
(379, 4, 3, 36, 'Sales Return', 1),
(380, 4, 3, 36, 'Sales Discount', 1),
(381, 2, 3, 37, 'Purchase Return', 2),
(382, 2, 3, 37, 'Purchase Discount', 2),
(386, 1, 3, 40, 'Projector', 1),
(387, 1, 3, 40, 'Computer', 1),
(388, 1, 3, 40, 'Laptop', 1),
(389, 1, 3, 41, 'Chair', 1),
(390, 1, 3, 41, 'Table', 1),
(391, 1, 3, 41, 'BookShelf', 1),
(392, 1, 3, 42, 'Car', 1),
(393, 1, 3, 42, 'Micro Bus', 1),
(394, 1, 3, 42, 'Bus', 1),
(395, 4, 2, 56, 'Depriciation', 1),
(396, 1, 3, 38, 'Acumulated Depriciation', 1),
(397, 4, 2, 56, 'Pay & Allowance of Officers', 1),
(398, 4, 2, 56, 'Pay & Allowance of Staffs', 1),
(399, 1, 3, 51, 'Land & Properties', 1),
(400, 1, 3, 51, 'Plant & Mechineries', 1),
(401, 1, 3, 51, 'Furnitur & Fixtures', 1),
(402, 1, 3, 51, 'Computers & Electronics', 1),
(403, 1, 3, 51, 'Vehicle', 1),
(404, 1, 3, 43, 'Software', 1),
(405, 2, 1, 9, 'Accounts Payable', 2),
(406, 2, 1, 9, 'AIT Payable', 2),
(407, 2, 1, 9, 'VAT Payable', 2),
(408, 1, 2, 53, 'Loan and advance ', 1),
(409, 1, 2, 53, 'House building advance', 1),
(410, 1, 2, 53, 'Motor cycle advance', 1),
(411, 5, 1, 54, 'Interest om Bank Deposit', 2),
(412, 5, 1, 54, 'Interest on motor cycle advance', 2),
(413, 2, 1, 55, 'Provision for Gratuity', 2),
(414, 2, 1, 55, 'Provision for Bad debt', 2),
(415, 4, 2, 56, 'Gratuity Fund', 1),
(416, 4, 2, 56, 'Foreign Rubber fair/ Brikha mela ', 1),
(417, 4, 2, 56, 'Repair and maintenance of lift', 1),
(418, 1, 3, 38, 'Accumulated Amortization', 1),
(419, 4, 2, 56, 'Generator fuel', 1),
(420, 1, 1, 1, 'STD Bank Account', 1),
(421, 1, 1, 1, 'Current Account', 1),
(422, 2, 1, 9, 'TDS Payable', 2),
(423, 3, 1, 13, 'Admission Fees', 2);

-- --------------------------------------------------------

--
-- Table structure for table `income_head_list`
--

CREATE TABLE IF NOT EXISTS `income_head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `income_head_list`
--

INSERT INTO `income_head_list` (`id`, `list_of_head_accounts_id`, `head_title`, `status`) VALUES
(1, 3, 'Income', 2);

-- --------------------------------------------------------

--
-- Table structure for table `income_statement`
--

CREATE TABLE IF NOT EXISTS `income_statement` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `amount` varchar(25) DEFAULT NULL,
  `directexpense` varchar(20) NOT NULL,
  `totalincome` varchar(20) NOT NULL,
  `grossprofit` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `income_statement`
--

INSERT INTO `income_statement` (`id`, `amount`, `directexpense`, `totalincome`, `grossprofit`, `date`, `year`) VALUES
(1, '-35400', '0', '0', '0', '2013-04-04', '2013'),
(2, '-35700', '0', '0', '0', '2014-09-13', '2014');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `begging_value` varchar(25) DEFAULT NULL,
  `end_value` varchar(25) DEFAULT NULL,
  `year` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `customer_id` int(20) DEFAULT NULL,
  `date` varchar(25) DEFAULT NULL,
  `duedate` varchar(25) DEFAULT NULL,
  `subheading` longtext,
  `currency` int(2) DEFAULT NULL,
  `footer` longtext,
  `poso` varchar(255) DEFAULT NULL,
  `notes` longtext,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `customer_id`, `date`, `duedate`, `subheading`, `currency`, `footer`, `poso`, `notes`, `status`) VALUES
(1, 7, '08-12-2014', '08-12-2014', '', 5, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_detail`
--

CREATE TABLE IF NOT EXISTS `invoice_detail` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(20) DEFAULT NULL,
  `pid` int(20) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `tax_id` int(20) DEFAULT NULL,
  `tax_total` varchar(20) DEFAULT NULL,
  `subtotal` varchar(20) DEFAULT NULL,
  `totalamount` varchar(20) NOT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `invoice_detail`
--

INSERT INTO `invoice_detail` (`id`, `invoice_id`, `pid`, `quantity`, `price`, `tax_id`, `tax_total`, `subtotal`, `totalamount`, `status`) VALUES
(1, 1, 1, 1, '20000 ', 3, '3000', '20000', '23000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_payment`
--

CREATE TABLE IF NOT EXISTS `invoice_payment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `pa` int(20) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `memo` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `journal_description`
--

CREATE TABLE IF NOT EXISTS `journal_description` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `jd` longtext,
  `jddate` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `journal_description`
--

INSERT INTO `journal_description` (`id`, `jd`, `jddate`) VALUES
(1, 'Fund receive for administrative cost!', '03/30/2013'),
(2, 'Fund transfer', '03/23/2013'),
(3, 'Revenue exp', '03/30/2013'),
(4, 'Fund transfer', '04/24/2013');

-- --------------------------------------------------------

--
-- Table structure for table `journal_transaction`
--

CREATE TABLE IF NOT EXISTS `journal_transaction` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `jdid` longtext,
  `option_text` varchar(255) DEFAULT NULL,
  `option_jd` longtext,
  `option_debit` varchar(20) DEFAULT NULL,
  `option_cradit` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `journal_transaction`
--

INSERT INTO `journal_transaction` (`id`, `jdid`, `option_text`, `option_jd`, `option_debit`, `option_cradit`) VALUES
(1, '1', '127', 'Fund', '20000000', '0'),
(2, '1', '101', 'Fund', '0', '20000000'),
(3, '2', '128', 'Fund', '20000000', '0'),
(4, '2', '127', 'Fund', '0', '20000000'),
(5, '3', '90', 'cb', '17000', '0'),
(6, '3', '118', 'fg', '0', '17000'),
(7, '4', '128', 'Fund', '25000000', '0'),
(8, '4', '127', 'Fund', '0', '25000000');

-- --------------------------------------------------------

--
-- Table structure for table `ladger`
--

CREATE TABLE IF NOT EXISTS `ladger` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ladger_id` varchar(255) DEFAULT NULL,
  `invoice_id` varchar(20) NOT NULL,
  `ladger_date` date DEFAULT NULL,
  `debit` varchar(20) NOT NULL,
  `cradit` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `ladger`
--

INSERT INTO `ladger` (`id`, `ladger_id`, `invoice_id`, `ladger_date`, `debit`, `cradit`) VALUES
(1, '127', 'J1', '2013-03-30', '20000000', '0'),
(2, '101', 'J1', '2013-03-30', '0', '20000000'),
(3, '87', 'S1', '2013-03-30', '17000', '0'),
(4, '128', 'S1', '2013-03-30', '0', '10000'),
(5, '34', 'S1', '2013-03-30', '0', '7000'),
(6, '128', 'J2', '2013-03-30', '20000000', '0'),
(7, '127', 'J2', '2013-03-30', '0', '20000000'),
(8, '127', 'P1', '2013-03-30', '25000000', '0'),
(9, '92', 'P1', '2013-03-30', '0', '25000000'),
(10, '34', 'B1', '2013-03-30', '0', '18400'),
(11, '76', 'B1', '2013-03-30', '18400', '0'),
(12, '90', 'J3', '2013-03-30', '17000', '0'),
(13, '118', 'J3', '2013-03-30', '0', '17000'),
(14, '128', 'J4', '2013-04-01', '25000000', '0'),
(15, '127', 'J4', '2013-04-01', '0', '25000000'),
(16, '34', '', '0000-00-00', '7000', '0'),
(17, '123', '', '0000-00-00', '0', '7000'),
(18, '18', 'O1', '2014-06-07', '300', '0'),
(19, '122', 'O1', '2014-06-07', '0', '300'),
(20, '34', '', '0000-00-00', '7000', '0'),
(21, '123', '', '0000-00-00', '0', '7000'),
(22, '25', 'N1', '2014-08-12', '23000', '0'),
(23, '92', 'N1', '2014-08-12', '0', '20000'),
(24, '30', 'N1', '2014-08-12', '0', '3000'),
(25, '32', 'B1', '2014-08-12', '0', '18400'),
(26, '34', 'B1', '2014-08-12', '18400', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ladger_list_properties`
--

CREATE TABLE IF NOT EXISTS `ladger_list_properties` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `main_head_id` int(2) NOT NULL,
  `head_sub_list_id` int(20) DEFAULT NULL,
  `head_sub_list_name` varchar(255) DEFAULT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `ladger_list_properties`
--

INSERT INTO `ladger_list_properties` (`id`, `main_head_id`, `head_sub_list_id`, `head_sub_list_name`, `created_by`, `status`) VALUES
(2, 2, 52, 'Bank Overdraft', NULL, 2),
(3, 2, 53, 'Billing Accounts', NULL, 2),
(4, 2, 54, 'Credit Card', NULL, 2),
(7, 2, 57, 'Deposits Received', NULL, 2),
(11, 3, 222, 'Seminars', NULL, 2),
(18, 4, 319, 'Payroll - Bonuses', '', 1),
(19, 4, 322, 'Other Payroll', '', 1),
(21, 5, 356, 'Cash Dividends', '', 1),
(24, 1, 46, 'Inventory', '', 1),
(25, 1, 376, 'Accounts Receivables', 'System Account', 1),
(27, 3, 217, 'Sales - Hardware', '', 2),
(29, 2, 406, 'AIT Payable', 'System Accounts', 2),
(30, 2, 407, 'VAT Payable', 'System Accounts', 2),
(32, 1, 377, 'Cash On Hand', 'System Accounts', 1),
(34, 2, 405, 'Accounts Payable', 'System Accounts', 2),
(37, 4, 372, 'Discount', '', 1),
(38, 4, 373, 'Carriage Outwards', '', 1),
(39, 2, 66, 'Other Current Debt', '', 2),
(41, 2, 375, 'Purchase Return', '', 2),
(42, 4, 249, 'Production & Suppliers', '', 1),
(43, 4, 240, 'Freight  & Sipping', '', 1),
(44, 4, 379, 'Sales Return', '', 1),
(45, 4, 380, 'Sales Discount', '', 1),
(46, 2, 382, 'Purchase Discount', '', 2),
(47, 3, 131, 'Insurance Proceeds Received', '', 2),
(48, 3, 132, 'Interest Income', '', 2),
(49, 3, 133, 'Proceeds from Sale of Assets', '', 2),
(50, 3, 134, 'Miscellaneous Revenue', '', 2),
(51, 3, 135, 'Refunds', '', 2),
(52, 3, 136, 'Reimbursements', '', 2),
(54, 3, 138, 'Other Income', '', 2),
(56, 1, 20, 'Land', '', 1),
(58, 1, 386, 'Projector', '', 1),
(59, 1, 387, 'Computer', '', 1),
(60, 1, 388, 'Laptop', '', 1),
(61, 1, 389, 'Chair', '', 1),
(62, 1, 390, 'Table', '', 1),
(63, 1, 391, 'BookShelf', '', 1),
(64, 1, 392, 'Car', '', 1),
(65, 1, 393, 'Micro Bus', '', 1),
(67, 1, 18, 'Goodwill', '', 1),
(68, 1, 19, 'Incorporation Costs', '', 1),
(69, 1, 23, 'Other Intangible Assets', '', 1),
(72, 4, 320, 'Payroll - Commissions', '', 1),
(73, 5, 365, 'Retained Earnings/Deficit', '', 1),
(74, 4, 310, 'Other Office Expenses', '', 1),
(75, 4, 353, 'Rental Car ', '', 1),
(76, 4, 304, 'Printing and Reproduction', '', 1),
(77, 4, 305, 'Furniture ', '', 1),
(78, 4, 303, 'Postage ', '', 1),
(79, 4, 273, 'Building Maintenance', '', 1),
(80, 4, 243, 'Materials Cost', '', 1),
(81, 4, 248, 'Product Samples', '', 1),
(84, 1, 396, 'Acumulated Depriciation', '', 1),
(85, 4, 395, 'Depriciation', '', 1),
(86, 4, 397, 'Pay & Allowance of Officers', '', 1),
(87, 4, 398, 'Pay & Allowance of Staffs', '', 1),
(89, 6, 47, 'BFIDC, GM Office, Rubber Division, Sylhet', '', 3),
(90, 6, 49, 'BFIDC, LPC Kaptai', '', 3),
(91, 6, 50, 'BFIDC. GM Office. Rubber Division. Modhupur', '', 3),
(92, 6, 46, 'BFIDC, GM Office, Rubber Division, Ctg', '', 3),
(93, 1, 399, 'Land ', '', 1),
(95, 1, 29, 'Term Life Insurance', '', 1),
(98, 1, 32, 'Other Investments', '', 1),
(99, 1, 404, 'Software', '', 1),
(100, 2, 67, 'Home Equity Loans', '', 2),
(101, 2, 68, 'Loans', '', 2),
(102, 2, 69, 'Mortgages', '', 2),
(103, 2, 70, 'Other Long-Term Debt', '', 2),
(107, 1, 408, 'Loan and advance ', '', 1),
(108, 1, 409, 'House building advance', '', 1),
(109, 1, 410, 'Motor cycle advance', '', 1),
(110, 5, 411, 'Interest om Bank Deposit', '', 2),
(111, 5, 412, 'Interest on motor cycle advance', '', 2),
(112, 5, 366, 'Share Capital', '', 1),
(113, 2, 413, 'Provision for Gratuity', '', 2),
(114, 2, 414, 'Provision for Bad debt', '', 2),
(115, 4, 415, 'Gratuity Fund', '', 1),
(116, 1, 418, 'Accumulated Amortization', '', 1),
(117, 4, 314, 'Amortization', '', 1),
(118, 6, 52, 'Head Office Overhead', '', 3),
(119, 4, 416, 'Foreign Rubber fair/ Brikha mela ', '', 1),
(120, 4, 417, 'Repair and maintenance of lift', '', 1),
(121, 4, 419, 'Generator fuel', '', 1),
(122, 1, 3, 'Checking Account ', 'System Account', 1),
(123, 1, 2, 'Cash Management Account ', '', 1),
(124, 1, 4, 'Money Market Account ', '', 1),
(125, 1, 5, 'Savings Account ', '', 1),
(126, 1, 6, 'Other Bank Account ', '', 1),
(127, 1, 420, 'STD Bank Account', '', 1),
(128, 1, 421, 'Current Account', '', 1),
(129, 2, 422, 'TDS Payable', '', 2),
(130, 1, 33, 'Bonds', '', 1),
(131, 3, 423, 'Admission Fees', '', 2),
(132, 3, 84, 'Administrative Fees', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `liability_credit_head_list`
--

CREATE TABLE IF NOT EXISTS `liability_credit_head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `liability_credit_head_list`
--

INSERT INTO `liability_credit_head_list` (`id`, `list_of_head_accounts_id`, `head_title`, `status`) VALUES
(1, 2, 'Current Liability', 2),
(2, 2, 'Non-Current Liability', 2),
(3, 2, 'Others', 2);

-- --------------------------------------------------------

--
-- Table structure for table `list_of_head_accounts`
--

CREATE TABLE IF NOT EXISTS `list_of_head_accounts` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `head_title` varchar(255) DEFAULT NULL,
  `tab_name` varchar(255) NOT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `list_of_head_accounts`
--

INSERT INTO `list_of_head_accounts` (`id`, `head_title`, `tab_name`, `status`) VALUES
(1, 'Asset', 'asset_head_list', 1),
(2, 'Liability/Credit Card', ' liability_credit_head_list', 2),
(3, 'Income', 'income_head_list', 2),
(4, 'Expense', 'expense_head_list', 1),
(5, 'Equity', 'equity_head_list', 2),
(6, 'Other', 'other_head_list', 3);

-- --------------------------------------------------------

--
-- Table structure for table `newtax`
--

CREATE TABLE IF NOT EXISTS `newtax` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `main_id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `newtax`
--

INSERT INTO `newtax` (`id`, `main_id`, `name`, `rate`) VALUES
(2, 29, 'AIT', '5'),
(3, 30, 'VAT', '15');

-- --------------------------------------------------------

--
-- Table structure for table `office_expense_voucher`
--

CREATE TABLE IF NOT EXISTS `office_expense_voucher` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `vdate` varchar(20) NOT NULL,
  `dr` varchar(25) NOT NULL,
  `cr` varchar(20) NOT NULL,
  `description` longtext NOT NULL,
  `taka` varchar(20) NOT NULL,
  `currentdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `office_expense_voucher`
--

INSERT INTO `office_expense_voucher` (`id`, `vdate`, `dr`, `cr`, `description`, `taka`, `currentdate`) VALUES
(1, '06/11/2014', '18', '122', 'cxbffdsf', '300', '2014-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `other_head_list`
--

CREATE TABLE IF NOT EXISTS `other_head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `other_head_list`
--

INSERT INTO `other_head_list` (`id`, `list_of_head_accounts_id`, `head_title`, `status`) VALUES
(1, 6, 'Inter Project Current Account', 3),
(2, 6, 'Others', 3);

-- --------------------------------------------------------

--
-- Table structure for table `payabletax`
--

CREATE TABLE IF NOT EXISTS `payabletax` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ladger_id` varchar(255) DEFAULT NULL,
  `invoice_id` varchar(20) NOT NULL,
  `ladger_date` date DEFAULT NULL,
  `debit` varchar(20) NOT NULL,
  `cradit` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payabletax`
--

INSERT INTO `payabletax` (`id`, `ladger_id`, `invoice_id`, `ladger_date`, `debit`, `cradit`) VALUES
(1, '30', 'B1', '2013-03-30', '2400', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pname` longtext,
  `in_ac_id` int(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `description` longtext,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `in_ac_id`, `price`, `description`, `status`) VALUES
(1, 'Product 1', 92, '20000', 'wqewqeq', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservesurplus_description`
--

CREATE TABLE IF NOT EXISTS `reservesurplus_description` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `jd` longtext,
  `jddate` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reservesurplus_description`
--

INSERT INTO `reservesurplus_description` (`id`, `jd`, `jddate`) VALUES
(1, 'Rubber sale', '03/30/2013');

-- --------------------------------------------------------

--
-- Table structure for table `reservesurplus_transaction`
--

CREATE TABLE IF NOT EXISTS `reservesurplus_transaction` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `jdid` longtext,
  `option_text` varchar(255) DEFAULT NULL,
  `option_jd` longtext,
  `option_debit` varchar(20) DEFAULT NULL,
  `option_cradit` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reservesurplus_transaction`
--

INSERT INTO `reservesurplus_transaction` (`id`, `jdid`, `option_text`, `option_jd`, `option_debit`, `option_cradit`) VALUES
(1, '1', '127', 'Rubber sale', '25000000', '0'),
(2, '1', '92', 'Rubber sale', '0', '25000000');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_serplus_payment`
--

CREATE TABLE IF NOT EXISTS `reserve_serplus_payment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `pa` int(20) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `memo` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `salary_deduction`
--

CREATE TABLE IF NOT EXISTS `salary_deduction` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `sid` int(20) NOT NULL,
  `deduction` varchar(255) NOT NULL,
  `amount` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `salary_deduction`
--

INSERT INTO `salary_deduction` (`id`, `sid`, `deduction`, `amount`) VALUES
(1, 1, 'tds', '3000');

-- --------------------------------------------------------

--
-- Table structure for table `salary_earing`
--

CREATE TABLE IF NOT EXISTS `salary_earing` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `sid` int(20) NOT NULL,
  `earning` varchar(255) NOT NULL,
  `actual` varchar(255) NOT NULL,
  `earned` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `salary_earing`
--

INSERT INTO `salary_earing` (`id`, `sid`, `earning`, `actual`, `earned`) VALUES
(1, 1, 'cbcvb', '20000', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `salary_voucher`
--

CREATE TABLE IF NOT EXISTS `salary_voucher` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `empid` int(255) NOT NULL,
  `total` varchar(20) NOT NULL,
  `paid` varchar(20) NOT NULL,
  `due` varchar(20) NOT NULL,
  `etype` int(20) NOT NULL,
  `sdate` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `salary_voucher`
--

INSERT INTO `salary_voucher` (`id`, `empid`, `total`, `paid`, `due`, `etype`, `sdate`) VALUES
(1, 3, '17000', '10000', '7000', 398, '30/03/2013');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_depriciation`
--

CREATE TABLE IF NOT EXISTS `schedule_depriciation` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `dyear` varchar(20) NOT NULL,
  `hid` int(20) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE IF NOT EXISTS `tax` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tname` longtext,
  `abbre` varchar(255) DEFAULT NULL,
  `description` longtext,
  `taxnumber` varchar(255) DEFAULT NULL,
  `taxnumberstatus` int(2) DEFAULT NULL,
  `taxrecoverable` int(2) DEFAULT NULL,
  `compoundtax` int(2) DEFAULT NULL,
  `taxrate` varchar(20) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `company_name` longtext,
  `email` longtext,
  `fname` longtext,
  `lname` longtext,
  `currency` int(2) DEFAULT NULL,
  `ac_n` longtext,
  `add1` longtext,
  `add2` longtext,
  `city` longtext,
  `country` longtext,
  `province` longtext,
  `postal_zip` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `toll_free` varchar(255) DEFAULT NULL,
  `website` longtext,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `company_name`, `email`, `fname`, `lname`, `currency`, `ac_n`, `add1`, `add2`, `city`, `country`, `province`, `postal_zip`, `phone`, `fax`, `mobile`, `toll_free`, `website`, `status`) VALUES
(1, 'Bhuyian Host', 'contact@bhuyianhost.com', 'Fahad', 'Bhuyian', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 'UCC', 'dsvzxv', 'xvzxvv', 'xvxv', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 'akib', 'aki@yahoo.com', 'akib', 'ddju', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
