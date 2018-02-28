-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2018 at 09:15 PM
-- Server version: 5.5.54-38.6-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `natopara_bdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_module_asset_head_list`
--

CREATE TABLE IF NOT EXISTS `account_module_asset_head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `account_module_asset_head_list`
--

INSERT INTO `account_module_asset_head_list` (`id`, `list_of_head_accounts_id`, `head_title`, `branch_id`, `status`) VALUES
(1, 1, 'Bank', 0, 1),
(2, 1, 'Current Asset', 0, 1),
(3, 1, 'Fixed Asset', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_balancesheet`
--

CREATE TABLE IF NOT EXISTS `account_module_balancesheet` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `totalasset` varchar(25) DEFAULT NULL,
  `totalliability` varchar(20) NOT NULL,
  `totalequity` varchar(20) NOT NULL,
  `branch_id` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `account_module_balancesheet`
--

INSERT INTO `account_module_balancesheet` (`id`, `totalasset`, `totalliability`, `totalequity`, `branch_id`, `date`, `year`) VALUES
(1, '-420', '-30', '-450', 8, '2015-03-28', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `account_module_bill`
--

CREATE TABLE IF NOT EXISTS `account_module_bill` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `bill_id` int(100) NOT NULL,
  `vendor_id` int(20) DEFAULT NULL,
  `date` varchar(25) DEFAULT NULL,
  `duedate` varchar(25) DEFAULT NULL,
  `subheading` longtext,
  `currency` int(2) DEFAULT NULL,
  `footer` longtext,
  `poso` varchar(255) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  `notes` longtext,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_module_bill_detail`
--

CREATE TABLE IF NOT EXISTS `account_module_bill_detail` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `bill_id` int(20) DEFAULT NULL,
  `pid` int(20) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `tax_id` int(20) DEFAULT NULL,
  `tax_total` varchar(20) DEFAULT NULL,
  `subtotal` varchar(20) DEFAULT NULL,
  `totalamount` varchar(20) NOT NULL,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_module_bill_payment`
--

CREATE TABLE IF NOT EXISTS `account_module_bill_payment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `bill_id` int(20) DEFAULT NULL,
  `vendor_id` int(20) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  `pa` int(20) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  `memo` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_module_budget`
--

CREATE TABLE IF NOT EXISTS `account_module_budget` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `byear` varchar(20) NOT NULL,
  `ladgerid` int(20) NOT NULL,
  `aa` varchar(20) NOT NULL,
  `bb` varchar(20) NOT NULL,
  `cc` varchar(20) NOT NULL,
  `dd` varchar(20) NOT NULL,
  `ee` varchar(20) NOT NULL,
  `branch_id` int(20) NOT NULL,
  `ff` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_module_budget_year`
--

CREATE TABLE IF NOT EXISTS `account_module_budget_year` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `byear` varchar(20) NOT NULL,
  `branch_id` int(20) NOT NULL,
  `curdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_module_buy_product`
--

CREATE TABLE IF NOT EXISTS `account_module_buy_product` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pname` longtext,
  `in_ac_id` int(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `description` longtext,
  `branch_id` int(20) NOT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `account_module_buy_product`
--

INSERT INTO `account_module_buy_product` (`id`, `pname`, `in_ac_id`, `price`, `description`, `branch_id`, `status`) VALUES
(1, 'printer', 74, '35000', 'xvxvxv', 0, 1),
(2, 'Material', 80, '50000', 'hhhhhhhhhhhhhh', 0, 1),
(3, 'Laptop Acer', 74, '40000', 'fffffffffffff', 0, 1),
(4, 'fright charege', 38, '16000', 'aaaaaaaaa', 0, 1),
(5, 'fright expense', 43, '25000', 'for office use', 0, 1),
(6, 'Wood', 24, '25000', 'office purpose', 0, 1),
(7, 'Paper', 24, '5200', 'office purpose', 0, 1),
(8, 'Printing Leaftlet', 76, '5200', 'office purpose', 0, 1),
(9, 'View Sonic Monitor', 59, '53000', 'sfasafddd', 0, 1),
(10, 'Table', 62, '25000', 'vsdb', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_clear_system`
--

CREATE TABLE IF NOT EXISTS `account_module_clear_system` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` text,
  `detail` text,
  `branch_id` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `account_module_clear_system`
--

INSERT INTO `account_module_clear_system` (`id`, `name`, `detail`, `branch_id`, `date`, `status`) VALUES
(1, 'Purchase Voucher', 'From Start date to current time all Purchase Voucher Detail has been removed.', 0, '2014-12-07', 1),
(2, 'Purchase Voucher', 'From Start date to current time all Purchase Voucher Detail has been removed.', 0, '2014-12-07', 1),
(3, 'Purchase Voucher', 'From Start date to current time all Purchase Voucher Detail has been removed.', 0, '2014-12-07', 1),
(4, 'Salary Voucher', 'From Start date to current time all Salary Voucher Detail has been removed.', 0, '2015-01-27', 1),
(5, 'Journal Transaction', 'From Start date to current time all Journal Transaction Detail has been removed.', 0, '2015-01-27', 1),
(6, 'Purchase Voucher', 'From Start date to current time all Purchase Voucher Detail has been removed.', 0, '2015-01-27', 1),
(7, 'Sales Invoices', 'From Start date to current time all Sales Detail has been removed.', 0, '2015-01-27', 1),
(8, 'Ledger Transaction', 'From Start date to current time all ledger transaction has been removed.', 0, '2015-01-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_company_user`
--

CREATE TABLE IF NOT EXISTS `account_module_company_user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  `account_status` int(2) NOT NULL,
  `date` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company_name` longtext,
  `address` longtext,
  `branch_id` int(20) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `account_module_company_user`
--

INSERT INTO `account_module_company_user` (`id`, `name`, `username`, `password`, `status`, `account_status`, `date`, `email`, `company_name`, `address`, `branch_id`, `contact`) VALUES
(1, 'Fahad Bhuyian', 'admin', '123456', 1, 1, '2013-01-28', 'admin@ucchash.com', 'Ucchash IT', 'Nakhal Para,Locacher morr,Tejgao,Dhaka', 1, '01775464609'),
(3, 'Dania School', 'dania', '123456', 2, 1, '2015-04-26', 'mahaburvampare@yahoo.com', NULL, NULL, 0, '02324324'),
(4, 'Sohel', 'sohel', '123456', 1, 1, '2015-04-26', 'f.bhuyian@gmail.com', NULL, NULL, 0, '3242324'),
(5, 'Dania', 'dania', 'asd123', 2, 1, '2015-06-14', 'f.bhuyian@gmail.com', NULL, NULL, 666, '01775464609');

-- --------------------------------------------------------

--
-- Table structure for table `account_module_currency`
--

CREATE TABLE IF NOT EXISTS `account_module_currency` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `detail` longtext,
  `amount` varchar(255) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `account_module_currency`
--

INSERT INTO `account_module_currency` (`id`, `title`, `detail`, `amount`, `branch_id`) VALUES
(1, 'AUD', 'Australian Dollar', '0', 0),
(2, 'AWG', 'Aruban Guilder', '0', 0),
(3, 'AZN', 'New Manat', '0', 0),
(4, 'BAM', 'Convertible Marks', '0', 0),
(5, 'BDT', 'Taka', '0', 0),
(6, 'CAD', 'Canadian Dollar', '0', 0),
(7, 'GBP', 'Pound Strling', '0', 0),
(8, 'HKD', 'Hongkong Dollar', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_customer`
--

CREATE TABLE IF NOT EXISTS `account_module_customer` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `company_name` longtext,
  `email` longtext,
  `fname` longtext,
  `lname` longtext,
  `currency` int(2) DEFAULT NULL,
  `ac` longtext,
  `address` longtext,
  `bankname` longtext,
  `city` longtext,
  `country` longtext,
  `province` longtext,
  `postal_zip` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `toll_free` varchar(255) DEFAULT NULL,
  `website` longtext,
  `branch_id` int(20) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `account_module_customer`
--

INSERT INTO `account_module_customer` (`id`, `company_name`, `email`, `fname`, `lname`, `currency`, `ac`, `address`, `bankname`, `city`, `country`, `province`, `postal_zip`, `phone`, `fax`, `mobile`, `toll_free`, `website`, `branch_id`, `status`) VALUES
(1, 'Ak Traders', 'f.bhuyian@gmail.com', 'Mahamod', 'Fahad Bhuyian', 5, 'AC234324234', '44/P, Kazi Bhavan New Zigatola Road', 'Bank Asia', NULL, NULL, NULL, NULL, '01927608261', NULL, NULL, NULL, NULL, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_customer_shipping`
--

CREATE TABLE IF NOT EXISTS `account_module_customer_shipping` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ship_to_contact` longtext,
  `add1` longtext,
  `add2` longtext,
  `city` longtext,
  `country` longtext,
  `province` longtext,
  `postal_zipcode` varchar(255) DEFAULT NULL,
  `delivery_instructions` longtext,
  `branch_id` int(20) NOT NULL,
  `phone` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_module_custom_report`
--

CREATE TABLE IF NOT EXISTS `account_module_custom_report` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `normal` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `head_id` int(20) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `account_module_custom_report`
--

INSERT INTO `account_module_custom_report` (`id`, `name`, `normal`, `result`, `head_id`, `branch_id`, `date`, `status`) VALUES
(1, 'test 1', 'n1 - n3', 'n2', 1413489244, 0, '2014-10-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_custom_report_head`
--

CREATE TABLE IF NOT EXISTS `account_module_custom_report_head` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cid` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `head_id` int(20) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `account_module_custom_report_head`
--

INSERT INTO `account_module_custom_report_head` (`id`, `cid`, `name`, `head_id`, `branch_id`, `date`, `status`) VALUES
(1, 0, 'Head 1', 1413489244, 0, '2014-10-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_equity_head_list`
--

CREATE TABLE IF NOT EXISTS `account_module_equity_head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `account_module_equity_head_list`
--

INSERT INTO `account_module_equity_head_list` (`id`, `list_of_head_accounts_id`, `head_title`, `branch_id`, `status`) VALUES
(1, 5, 'Equity', 0, 2),
(2, 5, 'Others', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_expense_account`
--

CREATE TABLE IF NOT EXISTS `account_module_expense_account` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) DEFAULT NULL,
  `ladger_id` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `account_module_expense_account`
--

INSERT INTO `account_module_expense_account` (`id`, `uid`, `ladger_id`, `date`, `status`) VALUES
(1, 58, 32, '2015-03-07', 1),
(2, 58, 23, '2015-03-07', 1),
(3, 58, 22, '2015-03-07', 1),
(4, 60, 32, '2015-03-07', 1),
(5, 60, 22, '2015-03-07', 1),
(6, 60, 31, '2015-03-07', 1),
(7, 71, 32, '2015-03-28', 1),
(8, 71, 23, '2015-03-28', 1),
(9, 71, 22, '2015-03-28', 1),
(10, 71, 13, '2015-03-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_expense_head_list`
--

CREATE TABLE IF NOT EXISTS `account_module_expense_head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `account_module_expense_head_list`
--

INSERT INTO `account_module_expense_head_list` (`id`, `list_of_head_accounts_id`, `head_title`, `branch_id`, `status`) VALUES
(1, 4, 'Cost Of Goods', 0, 1),
(2, 4, 'Expense', 0, 1),
(3, 4, 'Others', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_fixassetrates`
--

CREATE TABLE IF NOT EXISTS `account_module_fixassetrates` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `achid` int(20) DEFAULT NULL,
  `rates` int(3) DEFAULT NULL,
  `life` varchar(20) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `account_module_fixassetrates`
--

INSERT INTO `account_module_fixassetrates` (`id`, `achid`, `rates`, `life`, `branch_id`) VALUES
(2, 38, 0, NULL, 0),
(3, 39, 5, NULL, 0),
(4, 41, 5, NULL, 0),
(5, 40, 5, NULL, 0),
(6, 42, 10, NULL, 0),
(7, 43, 10, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_fixed_asset_register`
--

CREATE TABLE IF NOT EXISTS `account_module_fixed_asset_register` (
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
  `branch_id` int(20) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_module_head_list`
--

CREATE TABLE IF NOT EXISTS `account_module_head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `list_of_sub_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` text,
  `branch_id` int(20) NOT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `account_module_head_list`
--

INSERT INTO `account_module_head_list` (`id`, `list_of_head_accounts_id`, `list_of_sub_head_accounts_id`, `head_title`, `branch_id`, `status`) VALUES
(1, 1, 1, 'Bank & Cash', 0, 1),
(3, 1, 2, 'Investments', 0, 1),
(5, 1, 3, 'Long-Term Investments', 0, 1),
(6, 1, 2, 'Other Current Assets', 0, 1),
(8, 2, 1, 'Current Bank Debt', 0, 2),
(9, 2, 1, 'Current Debt', 0, 2),
(10, 2, 2, 'Long-Term Debt', 0, 2),
(11, 3, 1, 'Agriculture', 0, 2),
(12, 3, 1, 'Commissions', 0, 2),
(13, 3, 1, 'Fees & Charges', 0, 2),
(14, 3, 1, 'Investments', 0, 2),
(15, 3, 1, 'Non-Profit', 0, 2),
(16, 3, 1, 'Other Income', 0, 2),
(17, 3, 1, 'Professional Services', 0, 2),
(18, 3, 1, 'Sales Products & Services', 0, 2),
(19, 4, 1, 'Cost Of Goods', 0, 1),
(20, 4, 2, 'Agriculture', 0, 1),
(21, 4, 2, 'Buildings & Equipment', 0, 1),
(22, 4, 2, 'Computers/Communication', 0, 1),
(23, 4, 2, 'Fees, Charges & Subscriptions', 0, 1),
(24, 4, 2, 'Insurance', 0, 1),
(25, 4, 2, 'Non-Profit', 0, 1),
(26, 4, 2, 'Office', 0, 1),
(27, 4, 2, 'Other Expenses', 0, 1),
(28, 4, 2, 'Payroll', 0, 1),
(29, 4, 2, 'Services', 0, 1),
(30, 4, 2, 'Taxes', 0, 1),
(31, 4, 2, 'Tools & Supplies', 0, 1),
(32, 4, 2, 'Vehicle Expenses', 0, 1),
(33, 5, 1, 'Equity', 0, 1),
(34, 1, 2, 'Accounts Receivables', 0, 1),
(35, 4, 2, 'Sales Expense', 0, 1),
(36, 4, 3, 'Contra', 0, 1),
(37, 2, 3, 'Contra Entry', 0, 2),
(38, 1, 3, 'Accumulated Depreciation / Amortization', 0, 1),
(39, 1, 3, 'Land And Properties', 0, 1),
(40, 1, 3, 'Machinery And Electronics', 0, 1),
(41, 1, 3, 'Furniture And Fixtures', 0, 1),
(42, 1, 3, 'Vehicle', 0, 1),
(43, 1, 3, 'Intangible Assets', 0, 1),
(44, 6, 1, 'test 1', 0, 3),
(45, 6, 1, 'BFIDC,MTP Khulna', 0, 3),
(46, 6, 1, 'BFIDC, GM Office, Rubber Division, Ctg', 0, 3),
(47, 6, 1, 'BFIDC, GM Office, Rubber Division, Sylhet', 0, 3),
(48, 6, 2, 'BFIDC, GM Office, Rubber Division, Modhupur', 0, 3),
(49, 6, 1, 'BFIDC, LPC Kaptai', 0, 3),
(50, 6, 1, 'BFIDC. GM Office. Rubber Division. Modhupur', 0, 3),
(51, 2, 3, 'School Liability', 666, 2),
(52, 3, 2, 'Admission', 666, 2);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_head_sub_list`
--

CREATE TABLE IF NOT EXISTS `account_module_head_sub_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `list_of_sub_head_accounts_id` int(20) DEFAULT NULL,
  `list_of_sub_head_list_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=409 ;

--
-- Dumping data for table `account_module_head_sub_list`
--

INSERT INTO `account_module_head_sub_list` (`id`, `list_of_head_accounts_id`, `list_of_sub_head_accounts_id`, `list_of_sub_head_list_id`, `head_title`, `branch_id`, `status`) VALUES
(2, 1, 1, 1, 'Cash Management Account ', 0, 1),
(3, 1, 1, 1, 'Checking Account ', 0, 1),
(4, 1, 1, 1, 'Money Market Account ', 0, 1),
(5, 1, 1, 1, 'Savings Account ', 0, 1),
(6, 1, 1, 1, 'Other Bank Account ', 0, 1),
(7, 1, 3, 38, 'Accumulated Amortization of Buildings ', 0, 1),
(8, 1, 3, 38, 'Accumulated Amortization of Goodwill', 0, 1),
(9, 1, 3, 38, 'Accumulated Amortization of Incorporation Costs', 0, 1),
(10, 1, 3, 38, 'Accumulated Amortization of Land Improvements', 0, 1),
(11, 1, 3, 38, 'Accumulated Amortization of Machinery, Equipment, Furniture & Fixtures', 0, 1),
(12, 1, 3, 38, 'Accumulated Amortization of Machinery, Equipment, Furniture & Fixtures', 0, 1),
(13, 1, 3, 38, 'Accumulated Amortization of Other Tangible Assets', 0, 1),
(14, 1, 3, 38, 'Accumulated Amortization of Resource Properties', 0, 1),
(15, 1, 3, 38, 'Accumulated Amortization of Resource Rights', 0, 1),
(16, 1, 3, 39, 'Buildings', 0, 1),
(18, 1, 3, 43, 'Goodwill', 0, 1),
(19, 1, 3, 43, 'Incorporation Costs', 0, 1),
(20, 1, 3, 39, 'Land', 0, 1),
(21, 1, 3, 39, 'Land Improvements', 0, 1),
(23, 1, 3, 43, 'Other Intangible Assets', 0, 1),
(25, 1, 3, 43, 'Resource Properties', 0, 1),
(26, 1, 3, 43, 'Resource Rights', 0, 1),
(28, 1, 3, 5, 'Annuity', 0, 1),
(29, 1, 3, 5, 'Term Life Insurance', 0, 1),
(30, 1, 3, 5, 'Universal Life Insurance', 0, 1),
(31, 1, 3, 5, 'Whole Life Insurance', 0, 1),
(32, 1, 3, 5, 'Other Investments', 0, 1),
(33, 1, 2, 3, 'Bonds', 0, 1),
(34, 1, 2, 3, 'Brokerage Account', 0, 1),
(35, 1, 2, 3, 'Certificate of Deposit', 0, 1),
(36, 1, 2, 3, 'GIC & Term Deposits', 0, 1),
(37, 1, 2, 3, 'Mutual Fund Account', 0, 1),
(38, 1, 2, 3, 'Other Asset Account', 0, 1),
(39, 1, 2, 3, 'Shares', 0, 1),
(40, 1, 2, 3, 'T-Bills', 0, 1),
(41, 1, 2, 3, 'Other Short-Term Investments', 0, 1),
(42, 1, 2, 6, 'Accrued Investment Income', 0, 1),
(43, 1, 2, 6, 'Allowance for Bad Debt', 0, 1),
(44, 1, 2, 6, 'Due From Related Party', 0, 1),
(45, 1, 2, 6, 'Future (deferred) Income Taxes', 0, 1),
(46, 1, 2, 6, 'Inventory', 0, 1),
(47, 1, 2, 6, 'Notes & Loans Receivable', 0, 1),
(48, 1, 2, 6, 'Prepaid Expenses', 0, 1),
(49, 1, 2, 6, 'Sales Tax Receivable', 0, 1),
(50, 1, 2, 6, 'Taxes Recoverable/Refundable', 0, 1),
(51, 1, 2, 6, 'Other Current Asset', 0, 1),
(52, 2, 1, 8, 'Bank Overdraft ', 0, 2),
(53, 2, 1, 8, 'Billing Accounts', 0, 2),
(54, 2, 1, 8, 'Credit Card', 0, 2),
(55, 2, 1, 8, 'Line of Credit', 0, 2),
(56, 2, 1, 8, 'Other Current Bank Debt', 0, 2),
(57, 2, 1, 9, 'Deposits Received', 0, 2),
(58, 2, 1, 9, 'Dividends Payable', 0, 2),
(59, 2, 1, 9, 'Due to Other Related Party', 0, 2),
(60, 2, 1, 9, 'Future (deferred) Income Taxes', 0, 2),
(61, 2, 1, 9, 'Other Short-Term Debt', 0, 2),
(62, 2, 1, 9, 'Prepaid Income', 0, 2),
(63, 2, 1, 9, 'Sales Tax Payable', 0, 2),
(64, 2, 1, 9, 'Shareholder Loan', 0, 2),
(65, 2, 1, 9, 'Taxes Payable', 0, 2),
(66, 2, 1, 9, 'Other Current Debt', 0, 2),
(67, 2, 2, 10, 'Home Equity Loans', 0, 2),
(68, 2, 2, 10, 'Loans', 0, 2),
(69, 2, 2, 10, 'Mortgages', 0, 2),
(70, 2, 2, 10, 'Other Long-Term Debt', 0, 2),
(71, 3, 1, 11, 'Agricultural Program Payments ', 0, 2),
(72, 3, 1, 11, 'Commodity Credit Loans ', 0, 2),
(73, 3, 1, 11, 'Cooperative Distributions ', 0, 2),
(74, 3, 1, 11, 'Crop Insurance Proceeds ', 0, 2),
(75, 3, 1, 11, 'Crop Sales', 0, 2),
(76, 3, 1, 11, 'Custom Hire Income', 0, 2),
(77, 3, 1, 11, 'Farmers Market Sales', 0, 2),
(78, 3, 1, 11, 'Livestock Sales', 0, 2),
(79, 3, 1, 11, 'Other Agriculture Revenue', 0, 2),
(80, 3, 1, 12, 'Commission Adjustments ', 0, 2),
(81, 3, 1, 12, 'Commission Income ', 0, 2),
(82, 3, 1, 12, 'Other Commission Income ', 0, 2),
(83, 3, 1, 13, 'Finance Charge Income ', 0, 2),
(84, 3, 1, 13, 'Administrative Fees', 0, 2),
(85, 3, 1, 13, 'Capitation Fees ', 0, 2),
(86, 3, 1, 13, 'Fuel Surcharge ', 0, 2),
(87, 3, 1, 13, 'Fuel Tax Credits ', 0, 2),
(88, 3, 1, 13, 'Layover Fees ', 0, 2),
(89, 3, 1, 13, 'Pallet Fees ', 0, 2),
(90, 3, 1, 13, 'Settlement Fees', 0, 2),
(91, 3, 1, 13, 'Stop Fees ', 0, 2),
(92, 3, 1, 13, 'Tenant Fees ', 0, 2),
(93, 3, 1, 13, 'Unloading Fees ', 0, 2),
(94, 3, 1, 13, 'Other Fees & Charges ', 0, 2),
(95, 3, 1, 14, 'Investments – Asset Sales ', 0, 2),
(96, 3, 1, 14, 'Investments – Dividends ', 0, 2),
(97, 3, 1, 14, 'Investments – Interest ', 0, 2),
(98, 3, 1, 14, 'Investments – Other Investment Revenue ', 0, 2),
(99, 3, 1, 14, 'Other Investment Revenue ', 0, 2),
(100, 3, 1, 15, 'Benevolence Offerings', 0, 2),
(101, 3, 1, 15, 'Building Fund ', 0, 2),
(102, 3, 1, 15, 'Childrens Church Offering', 0, 2),
(103, 3, 1, 15, 'Direct Public Grants – Corporate and Business', 0, 2),
(104, 3, 1, 15, 'Direct Public Grants – Foundation and Trust Grants', 0, 2),
(105, 3, 1, 15, 'Direct Public Grants – Nonprofit Organization Grants', 0, 2),
(106, 3, 1, 15, 'Direct Public Support – Business Contributions', 0, 2),
(107, 3, 1, 15, 'Direct Public Support – Corporate Contributions', 0, 2),
(108, 3, 1, 15, 'Direct Public Support – Donated Art', 0, 2),
(109, 3, 1, 15, 'Direct Public Support – Donated Professional Fees or Facilities', 0, 2),
(110, 3, 1, 15, 'Direct Public Support – Gifts in Kind', 0, 2),
(111, 3, 1, 15, 'Direct Public Support – Individual Contributions', 0, 2),
(112, 3, 1, 15, 'Direct Public Support – Legacies and Bequests', 0, 2),
(113, 3, 1, 15, 'Direct Public Support – Uncollectible Pledges', 0, 2),
(114, 3, 1, 15, 'Direct Public Support – Volunteer Services', 0, 2),
(115, 3, 1, 15, 'General Fund', 0, 2),
(116, 3, 1, 15, 'Government Contracts – Agency', 0, 2),
(117, 3, 1, 15, 'Government Contracts – Federal', 0, 2),
(118, 3, 1, 15, 'Government Contracts – Local Government', 0, 2),
(119, 3, 1, 15, 'Government Contracts – State or Provincial', 0, 2),
(120, 3, 1, 15, 'Government Grants – Agency', 0, 2),
(121, 3, 1, 15, 'Government Grants – Federal', 0, 2),
(122, 3, 1, 15, 'Government Grants – Local Government', 0, 2),
(123, 3, 1, 15, 'Government Grants – State or Provincial', 0, 2),
(124, 3, 1, 15, 'Indirect Public Support', 0, 2),
(125, 3, 1, 15, 'Mission Offerings', 0, 2),
(126, 3, 1, 15, 'Pledges', 0, 2),
(127, 3, 1, 15, 'Program Income – Member Assessments', 0, 2),
(128, 3, 1, 15, 'Program Income – Membership Dues', 0, 2),
(129, 3, 1, 15, 'Program Income – Program Service Fees', 0, 2),
(130, 3, 1, 15, 'Youth Group', 0, 2),
(131, 3, 1, 16, 'Insurance Proceeds Received', 0, 2),
(132, 3, 1, 16, 'Interest Income', 0, 2),
(133, 3, 1, 16, 'Proceeds from Sale of Assets', 0, 2),
(134, 3, 1, 16, 'Miscellaneous Revenue', 0, 2),
(135, 3, 1, 16, 'Refunds', 0, 2),
(136, 3, 1, 16, 'Reimbursements', 0, 2),
(137, 3, 1, 16, 'Sales Discounts', 0, 2),
(138, 3, 1, 16, 'Other Income', 0, 2),
(139, 3, 1, 17, 'Accounting Services', 0, 2),
(140, 3, 1, 17, 'Bookkeeping Services', 0, 2),
(141, 3, 1, 17, 'Legal Fees', 0, 2),
(142, 3, 1, 17, 'Non-Medical Income', 0, 2),
(143, 3, 1, 17, 'Other Medical Income', 0, 2),
(144, 3, 1, 17, 'Payroll Services', 0, 2),
(145, 3, 1, 17, 'Tax Preparation Services', 0, 2),
(146, 3, 1, 17, 'Other Professional Services', 0, 2),
(188, 3, 1, 18, ' Assessments,Banquets &amp; Events', 0, 2),
(189, 3, 1, 18, 'Bar Sales', 0, 2),
(190, 3, 1, 18, 'Booth Rental Income', 0, 2),
(191, 3, 1, 18, 'Catering Sales', 0, 2),
(192, 3, 1, 18, 'Coaching', 0, 2),
(193, 3, 1, 18, 'Construction Income', 0, 2),
(194, 3, 1, 18, 'Consulting Income', 0, 2),
(195, 3, 1, 18, 'Design Income', 0, 2),
(196, 3, 1, 18, 'Facial Treatments', 0, 2),
(197, 3, 1, 18, 'Facilitation', 0, 2),
(198, 3, 1, 18, 'Food &amp; Beverage Sales', 0, 2),
(199, 3, 1, 18, 'Gift Shop &amp; Vending Sales', 0, 2),
(200, 3, 1, 18, 'Gross Trucking Income', 0, 2),
(201, 3, 1, 18, 'Hair Coloring Services', 0, 2),
(202, 3, 1, 18, 'Installation Services', 0, 2),
(204, 3, 1, 18, 'Inventory Sales', 0, 2),
(205, 3, 1, 18, 'Job Income', 0, 2),
(206, 3, 1, 18, 'Labor Income', 0, 2),
(207, 3, 1, 18, 'Lodging', 0, 2),
(208, 3, 1, 18, 'Maintenance Services', 0, 2),
(209, 3, 1, 18, 'Manicure/Pedicure', 0, 2),
(210, 3, 1, 18, 'Massage Services', 0, 2),
(211, 3, 1, 18, 'Parts &amp; Materials Sales', 0, 2),
(212, 3, 1, 18, 'Photo &amp; Video Services Income', 0, 2),
(213, 3, 1, 18, 'Product Sales', 0, 2),
(214, 3, 1, 18, 'Reimbursed Expenses', 0, 2),
(215, 3, 1, 18, 'Rental Income', 0, 2),
(216, 3, 1, 18, 'Royalties Received', 0, 2),
(217, 3, 1, 18, 'Sales – Hardware', 0, 2),
(218, 3, 1, 18, 'Sales – Retail Products', 0, 2),
(219, 3, 1, 18, 'Sales – Software Subscription', 0, 2),
(220, 3, 1, 18, 'Sales – Support and Maintenance', 0, 2),
(221, 3, 1, 18, 'Security Sales', 0, 2),
(222, 3, 1, 18, 'Seminars', 0, 2),
(223, 3, 1, 18, 'Services', 0, 2),
(224, 3, 1, 18, 'Shipping &amp; Delivery Income', 0, 2),
(225, 3, 1, 18, 'Special Events Income', 0, 2),
(226, 3, 1, 18, 'Special Services', 0, 2),
(227, 3, 1, 18, 'Tape &amp; Book Sales', 0, 2),
(228, 3, 1, 18, 'Training', 0, 2),
(229, 3, 1, 18, 'Other Products &amp; Services', 0, 2),
(230, 4, 1, 19, 'Merchant Account Fees ', 0, 1),
(231, 4, 1, 19, 'Subcontracted Services', 0, 1),
(232, 4, 1, 19, 'Blueprints & Reproduction', 0, 1),
(233, 4, 1, 19, 'Bond Expense', 0, 1),
(234, 4, 1, 19, 'Commissions Paid', 0, 1),
(235, 4, 1, 19, 'Construction Materials', 0, 1),
(236, 4, 1, 19, 'Contracted Services', 0, 1),
(237, 4, 1, 19, 'Equipment Rental', 0, 1),
(238, 4, 1, 19, 'Equipment Rental for Jobs', 0, 1),
(239, 4, 1, 19, 'Etsy Service Charges', 0, 1),
(240, 4, 1, 19, 'Freight & Shipping Costs', 0, 1),
(241, 4, 1, 19, 'Fuel', 0, 1),
(242, 4, 1, 19, 'Linens & Lodging Supplies', 0, 1),
(243, 4, 1, 19, 'Materials Cost', 0, 1),
(244, 4, 1, 19, 'Media Purchased for Clients', 0, 1),
(245, 4, 1, 19, 'Other Construction Costs', 0, 1),
(246, 4, 1, 19, 'Other Job Related Costs', 0, 1),
(247, 4, 1, 19, 'Outsourced Service Providers', 0, 1),
(248, 4, 1, 19, 'Product Samples', 0, 1),
(249, 4, 1, 19, 'Production & Supplies', 0, 1),
(250, 4, 1, 19, 'Purchases – Food & Beverage', 0, 1),
(251, 4, 1, 19, 'Purchases – Hardware for Resale', 0, 1),
(252, 4, 1, 19, 'Purchases – Parts & Materials', 0, 1),
(253, 4, 1, 19, 'Purchases – Resale Items', 0, 1),
(254, 4, 1, 19, 'Purchases – Software for Resale', 0, 1),
(255, 4, 1, 19, 'Restaurant Supplies', 0, 1),
(256, 4, 1, 19, 'Show and Exhibitor Fees', 0, 1),
(257, 4, 1, 19, 'Studio and Location Costs', 0, 1),
(258, 4, 1, 19, 'Subcontractors Expense', 0, 1),
(259, 4, 1, 19, 'Tools and Craft Supplies', 0, 1),
(260, 4, 1, 19, 'Other Cost of Goods ', 0, 1),
(261, 4, 2, 20, 'Chemicals Purchased', 0, 1),
(262, 4, 2, 20, 'Custom Hire & Contract Labor', 0, 1),
(263, 4, 2, 20, 'Feed Purchased', 0, 1),
(264, 4, 2, 20, 'Fertilizers & Lime', 0, 1),
(265, 4, 2, 20, 'Freight & Trucking', 0, 1),
(266, 4, 2, 20, 'Gasoline, Fuel & Oil', 0, 1),
(267, 4, 2, 20, 'Seed & Plants Purchased', 0, 1),
(268, 4, 2, 20, 'Vaccines & Medicines', 0, 1),
(269, 4, 2, 20, 'Veterinary&rsquo; Breeding&rsquo; Medicine', 0, 1),
(270, 4, 2, 20, 'Other Agriculture Expense', 0, 1),
(271, 4, 2, 21, 'Equipment Lease or Rental', 0, 1),
(272, 4, 2, 21, 'Building & Property Security', 0, 1),
(273, 4, 2, 21, 'Building Maintenance', 0, 1),
(274, 4, 2, 21, 'Property Management Fees', 0, 1),
(275, 4, 2, 21, 'Shop Expense', 0, 1),
(276, 4, 2, 21, 'Storage & Warehousing', 0, 1),
(277, 4, 2, 21, 'Custom Building & Equipment', 0, 1),
(278, 4, 2, 22, 'Other Computer & Communication ', 0, 1),
(279, 4, 2, 23, ' Business Licenses & Permits', 0, 1),
(280, 4, 2, 23, 'Dues & Subscriptions', 0, 1),
(281, 4, 2, 23, 'Bad Debts', 0, 1),
(282, 4, 2, 23, 'Business Registration Fees', 0, 1),
(283, 4, 2, 23, 'Cash Over & Short', 0, 1),
(284, 4, 2, 23, 'Credit Card Discount Fees', 0, 1),
(285, 4, 2, 23, 'Fines, Penalties & Judgments', 0, 1),
(286, 4, 2, 23, 'Fundraising Fees', 0, 1),
(287, 4, 2, 23, 'Late Fees', 0, 1),
(288, 4, 2, 23, 'Memberships & Dues', 0, 1),
(289, 4, 2, 23, 'Trade Commissions', 0, 1),
(290, 4, 2, 23, 'Other Fees&rsquo; Charges &amp; Subscriptions', 0, 1),
(291, 4, 2, 24, 'Insurance – General Liability', 0, 1),
(292, 4, 2, 24, 'Insurance – Health', 0, 1),
(293, 4, 2, 24, 'Insurance – Professional Liability', 0, 1),
(294, 4, 2, 24, 'Insurance – Worker&rsquo;s Compensation', 0, 1),
(295, 4, 2, 24, 'Insurance – Life & Disability', 0, 1),
(296, 4, 2, 24, 'Insurance – Property', 0, 1),
(297, 4, 2, 24, 'Insurance – Other', 0, 1),
(298, 4, 2, 25, 'Awards & Grants', 0, 1),
(299, 4, 2, 25, 'Evangelism & Special Events', 0, 1),
(300, 4, 2, 25, 'Ministry Expenses', 0, 1),
(301, 4, 2, 25, 'Other Non-Profit Expenses', 0, 1),
(302, 4, 2, 26, 'Janitorial Expense', 0, 1),
(303, 4, 2, 26, 'Postage & Delivery', 0, 1),
(304, 4, 2, 26, 'Printing and Reproduction', 0, 1),
(305, 4, 2, 26, 'Furniture & Decoration', 0, 1),
(306, 4, 2, 26, 'Landscaping', 0, 1),
(307, 4, 2, 26, 'Medical Records Supplies', 0, 1),
(308, 4, 2, 26, 'Reference Materials', 0, 1),
(309, 4, 2, 26, 'Training Materials', 0, 1),
(310, 4, 2, 26, 'Other Office Expenses', 0, 1),
(311, 4, 2, 27, 'Donations', 0, 1),
(312, 4, 2, 27, 'Miscellaneous Expense', 0, 1),
(313, 4, 2, 27, 'Political Contributions', 0, 1),
(314, 4, 2, 27, 'Amortization', 0, 1),
(315, 4, 2, 27, 'Catering and Facilities', 0, 1),
(316, 4, 2, 27, 'Conferences & Meetings', 0, 1),
(317, 4, 2, 27, 'Conservation Expense', 0, 1),
(318, 4, 2, 27, 'Other Expenses', 0, 1),
(319, 4, 2, 28, 'Payroll – Bonuses', 0, 1),
(320, 4, 2, 28, 'Payroll – Commissions', 0, 1),
(321, 4, 2, 28, 'Payroll – Tax', 0, 1),
(322, 4, 2, 28, 'Other Payroll', 0, 1),
(323, 4, 2, 29, 'Education & Training', 0, 1),
(324, 4, 2, 29, 'Assessment Costs', 0, 1),
(325, 4, 2, 29, 'Business Services', 0, 1),
(326, 4, 2, 29, 'Contract Services', 0, 1),
(327, 4, 2, 29, 'Financial Advisor', 0, 1),
(328, 4, 2, 29, 'Laboratory Fees', 0, 1),
(329, 4, 2, 29, 'Laundry', 0, 1),
(330, 4, 2, 29, 'Legal Fees', 0, 1),
(331, 4, 2, 29, 'Marketing Expense', 0, 1),
(332, 4, 2, 29, 'Music & Entertainment', 0, 1),
(333, 4, 2, 29, 'Photography Processing & Supplies', 0, 1),
(334, 4, 2, 29, 'Research Services', 0, 1),
(335, 4, 2, 29, 'Training', 0, 1),
(336, 4, 2, 29, 'Transcription Services', 0, 1),
(337, 4, 2, 29, 'Volunteer Services', 0, 1),
(338, 4, 2, 29, 'Other Services ', 0, 1),
(339, 4, 2, 30, 'Taxes – Property Tax', 0, 1),
(340, 4, 2, 30, 'Taxes – Corporate Tax', 0, 1),
(341, 4, 2, 30, 'Taxes – Local Tax', 0, 1),
(342, 4, 2, 30, 'Other Taxes', 0, 1),
(343, 4, 2, 31, 'Linen Expense', 0, 1),
(344, 4, 2, 31, 'Medical Supplies', 0, 1),
(345, 4, 2, 31, 'Salon Supplies, Linens, Laundry', 0, 1),
(346, 4, 2, 31, 'Small Medical Equipment', 0, 1),
(347, 4, 2, 31, 'Small Tools & Equipment', 0, 1),
(348, 4, 2, 31, 'Uniforms', 0, 1),
(349, 4, 2, 31, 'Other Tools & Supplies', 0, 1),
(350, 4, 2, 32, 'Vehicle – Lease Payments', 0, 1),
(351, 4, 2, 32, 'Parking', 0, 1),
(352, 4, 2, 32, 'Public Transportation', 0, 1),
(353, 4, 2, 32, 'Rental Car & Taxi', 0, 1),
(354, 4, 2, 32, 'Other Vehicle Expenses', 0, 1),
(355, 5, 1, 33, 'Owner Investment / Drawings', 0, 1),
(356, 5, 1, 33, 'Cash Dividends', 0, 1),
(357, 5, 1, 33, 'Common Shares', 0, 1),
(358, 5, 1, 33, 'Contributed and Other Surplus', 0, 1),
(359, 5, 1, 33, 'Contributed Surplus', 0, 1),
(360, 5, 1, 33, 'Currency Adjustments', 0, 1),
(361, 5, 1, 33, 'Dividends Declared', 0, 1),
(362, 5, 1, 33, 'Patronage Dividends', 0, 1),
(363, 5, 1, 33, 'Preferred Shares', 0, 1),
(364, 5, 1, 33, 'Prior Period Adjustments', 0, 1),
(365, 5, 1, 33, 'Retained Earnings/Deficit', 0, 1),
(366, 5, 1, 33, 'Share Capital', 0, 1),
(367, 5, 1, 33, 'Share Redemptions', 0, 1),
(368, 5, 1, 33, 'Special Reserves', 0, 1),
(369, 5, 1, 33, 'Other Equity', 0, 1),
(370, 3, 1, 18, 'Sales Software', 0, 2),
(372, 4, 2, 35, 'Discount', 0, 1),
(373, 4, 2, 35, 'Carriage Outwards', 0, 1),
(376, 1, 2, 1, 'Accounts Receivables', 0, 1),
(377, 1, 1, 1, 'Cash On Hand', 0, 1),
(379, 4, 3, 36, 'Sales Return', 0, 1),
(380, 4, 3, 36, 'Sales Discount', 0, 1),
(381, 2, 3, 37, 'Purchase Return', 0, 2),
(382, 2, 3, 37, 'Purchase Discount', 0, 2),
(386, 1, 3, 40, 'Projector', 0, 1),
(387, 1, 3, 40, 'Computer', 0, 1),
(388, 1, 3, 40, 'Laptop', 0, 1),
(389, 1, 3, 41, 'Chair', 0, 1),
(390, 1, 3, 41, 'Table', 0, 1),
(391, 1, 3, 41, 'BookShelf', 0, 1),
(392, 1, 3, 42, 'Car', 0, 1),
(393, 1, 3, 42, 'Micro Bus', 0, 1),
(394, 1, 3, 42, 'Bus', 0, 1),
(395, 4, 2, 27, 'Depriciation', 0, 1),
(396, 1, 3, 38, 'Acumulated Depriciation', 0, 1),
(397, 4, 2, 28, 'Pay & Allowance of Officers', 0, 1),
(398, 4, 2, 28, 'Pay & Allowance of Staffs', 0, 1),
(399, 3, 1, 13, 'Coaching Admission Fees', 0, 2),
(400, 3, 1, 3, 'kljkj', 0, 2),
(401, 4, 3, 1, 'miscelinous account ', 0, 1),
(402, 1, 1, 1, 'Demosa', 0, 1),
(403, 1, 1, 3, 'test', 8, 1),
(404, 4, 2, 26, 'Tiffin', 0, 1),
(405, 2, 3, 51, 'School Development', 666, 2),
(406, 2, 3, 51, 'Management Convince', 666, 2),
(407, 3, 2, 52, 'School Development Fees', 666, 2),
(408, 3, 2, 52, 'Managment Fees', 666, 2);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_income_head_list`
--

CREATE TABLE IF NOT EXISTS `account_module_income_head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `account_module_income_head_list`
--

INSERT INTO `account_module_income_head_list` (`id`, `list_of_head_accounts_id`, `head_title`, `branch_id`, `status`) VALUES
(1, 3, 'Income', 0, 2),
(2, 3, 'School & College', 666, 2);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_income_statement`
--

CREATE TABLE IF NOT EXISTS `account_module_income_statement` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `amount` varchar(25) DEFAULT NULL,
  `directexpense` varchar(20) NOT NULL,
  `totalincome` varchar(20) NOT NULL,
  `grossprofit` varchar(20) NOT NULL,
  `branch_id` int(20) NOT NULL,
  `date` date DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `account_module_income_statement`
--

INSERT INTO `account_module_income_statement` (`id`, `amount`, `directexpense`, `totalincome`, `grossprofit`, `branch_id`, `date`, `year`) VALUES
(1, '-450', '0', '0', '-200', 8, '2015-03-28', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `account_module_inventory`
--

CREATE TABLE IF NOT EXISTS `account_module_inventory` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `begging_value` varchar(25) DEFAULT NULL,
  `end_value` varchar(25) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `year` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_module_invoice`
--

CREATE TABLE IF NOT EXISTS `account_module_invoice` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `month_id` int(20) NOT NULL,
  `invoice_id` int(100) NOT NULL,
  `customer_id` int(20) DEFAULT NULL,
  `date` varchar(25) DEFAULT NULL,
  `duedate` varchar(25) DEFAULT NULL,
  `subheading` longtext,
  `currency` int(2) DEFAULT NULL,
  `footer` longtext,
  `poso` varchar(255) DEFAULT NULL,
  `notes` longtext,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `account_module_invoice`
--

INSERT INTO `account_module_invoice` (`id`, `month_id`, `invoice_id`, `customer_id`, `date`, `duedate`, `subheading`, `currency`, `footer`, `poso`, `notes`, `branch_id`, `link_id`, `status`) VALUES
(1, 0, 1427484768, 1, '03-28-2015', '03-28-2015', 'fdsaf', 5, 'asdasd', 'asdsad', 'sadsad', 8, 1427484768, 0),
(2, 0, 1427485038, 1, '03-28-2015', '03-28-2015', 'sadsadas', 5, 'dasdasd', 'asdas', 'dasdasdasd', 9, 1427485038, 0),
(3, 0, 1429941233, 1, '04-25-2015', '04-25-2015', 'fdsfsdf', 5, 'sdfsdf', 'sdfdsf', 'sdfdsfdsf', 1, 1429941233, 0),
(4, 0, 1429995527, 1, '04-26-2015', '04-26-2015', '', 5, '', '', '', 1, 1429995527, 0),
(5, 5, 1431979662, 209, '2015-05-19', '2015-05-19', 'asaSAs', 5, 'aSA', 'sadasdasd', '', 666, 1431979662, 2),
(6, 5, 1432030590, 206, '2015-05-19', '2015-05-19', 'asaSAs', 5, 'aSA', 'sadad', 'dasdasdsa', 666, 1432030590, 2),
(7, 5, 1432889323, 1851, '2015-05-29', '2015-05-29', '2015-05-29', 5, 'Student Added using Short Admission Form', '', '', 666, 1432889323, 2),
(8, 5, 1432952997, 1854, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432952997, 2),
(9, 5, 1432953022, 1854, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953022, 2),
(10, 5, 1432953038, 1854, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953038, 2),
(11, 5, 1432953055, 1854, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953055, 2),
(12, 5, 1432953065, 1854, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953065, 2),
(13, 5, 1432953104, 1855, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953104, 2),
(14, 5, 1432953106, 1855, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953106, 2),
(15, 5, 1432953108, 1855, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953108, 2),
(16, 5, 1432953109, 1855, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953109, 2),
(17, 5, 1432953110, 1855, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953110, 2),
(18, 5, 1432953110, 1855, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953110, 2),
(19, 5, 1432953111, 1855, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953111, 2),
(20, 5, 1432953111, 1855, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953111, 2),
(21, 5, 1432953113, 1855, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953113, 2),
(22, 5, 1432953178, 1856, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953178, 2),
(23, 5, 1432953351, 1857, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432953351, 2),
(24, 5, 1432954651, 1859, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432954651, 2),
(25, 5, 1432956337, 1859, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432956337, 0),
(26, 5, 1432956777, 1859, '2015-05-30', '2015-05-30', '2015-05-30', 5, 'Student Added using Short Admission Form', '', '', 666, 1432956777, 0),
(27, 6, 1433363809, 1859, '2015-06-04', '2015-06-04', '2015-06-04', 5, 'Student Added using Short Admission Form', '', '', 666, 1433363809, 0),
(28, 6, 1433864689, 1866, '2015-06-09', '2015-06-09', '2015-06-09', 5, 'Student Added using Short Admission Form', '', '', 666, 1433864689, 1),
(29, 6, 1435635949, 1867, '2015-06-30', '2015-06-30', '2015-06-30', 5, 'Student Added using Short Admission Form', '', '', 105949, 1435635948, 0),
(30, 7, 1435736963, 1868, '2015-07-01', '2015-07-01', '2015-07-01', 5, 'Student Added using Short Admission Form', '', '', 105949, 1435736963, 0),
(31, 10, 1477392156, 1869, '2016-10-25', '2016-10-25', '2016-10-25', 5, 'Student Added using Short Admission Form', '', '', 105949, 1477392156, 0);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_invoice_detail`
--

CREATE TABLE IF NOT EXISTS `account_module_invoice_detail` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(20) DEFAULT NULL,
  `pid` int(20) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `tax_id` int(20) DEFAULT NULL,
  `tax_total` varchar(20) DEFAULT NULL,
  `subtotal` varchar(20) DEFAULT NULL,
  `totalamount` varchar(20) NOT NULL,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `account_module_invoice_detail`
--

INSERT INTO `account_module_invoice_detail` (`id`, `invoice_id`, `pid`, `quantity`, `price`, `tax_id`, `tax_total`, `subtotal`, `totalamount`, `branch_id`, `link_id`, `status`) VALUES
(1, 1, 1, 2, '100 ', 3, '30', '200', '230', 8, 1427484768, 0),
(2, 2, 3, 1, '200', 3, '30', '200', '230', 9, 1427485038, 0),
(3, 3, 3, 1, '500.00 ', 0, '0', '500', '500', 1, 1429941233, 0),
(4, 3, 3, 1, '500.00 ', 0, '0', '500', '500', 1, 1429941233, 0),
(5, 4, 3, 5, '500.00 ', 0, '0', '2500', '2500', 1, 1429995527, 0),
(6, 4, 4, 2, '400.00 ', 0, '0', '800', '800', 1, 1429995527, 0),
(7, 5, 3, 1, '500.00 ', 3, '75', '500', '575', 666, 1431979662, 0),
(8, 6, 3, 2, '500.00 ', 3, '150', '1000', '1150', 666, 1432030590, 0),
(9, 25, 5, 1, '50', 0, '0', '50', '50', 666, 1432956337, 0),
(10, 25, 6, 1, '50', 0, '0', '50', '50', 666, 1432956337, 0),
(11, 25, 7, 1, '10', 0, '0', '10', '10', 666, 1432956337, 0),
(12, 26, 5, 1, '50', 0, '0', '50', '50', 666, 1432956777, 0),
(13, 26, 6, 1, '50', 0, '0', '50', '50', 666, 1432956777, 0),
(14, 26, 7, 1, '10', 0, '0', '10', '10', 666, 1432956777, 0),
(15, 27, 7, 1, '10', 0, '0', '10', '10', 666, 1433363809, 0),
(16, 28, 12, 1, '100', 0, '0', '100', '100', 666, 1433864689, 0);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_invoice_payment`
--

CREATE TABLE IF NOT EXISTS `account_module_invoice_payment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(20) DEFAULT NULL,
  `cid` int(20) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  `currentdate` date NOT NULL,
  `pa` int(20) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  `memo` longtext,
  `input_by` int(20) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `account_module_invoice_payment`
--

INSERT INTO `account_module_invoice_payment` (`id`, `invoice_id`, `cid`, `date`, `currentdate`, `pa`, `amount`, `branch_id`, `link_id`, `memo`, `input_by`, `status`) VALUES
(3, 5, 209, '2015-05-19', '0000-00-00', 32, 500, 666, 1431979662, ' sdsfsdfdsfds', 0, 0),
(4, 5, 209, '2015-05-19', '0000-00-00', 32, 75, 666, 1431979662, ' none', 1, 1),
(5, 6, 206, '2015-05-19', '0000-00-00', 32, 600, 666, 1432030590, ' asdadasd', 1, 0),
(6, 6, 206, '2015-05-19', '0000-00-00', 32, 550, 666, 1432030590, ' none', 1, 0),
(7, 0, 1786, '2015-06-04', '2015-06-04', 32, 500, 666, 1433371972, 'asdasdas', 8, 0),
(8, 28, 1866, '2015-06-09', '0000-00-00', 32, 100, 666, 1433864689, ' 100', 1, 1),
(9, 28, 1866, '2015-06-15', '0000-00-00', 32, 300, 666, 1433864689, ' hi', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_journal_description`
--

CREATE TABLE IF NOT EXISTS `account_module_journal_description` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `jd_id` int(100) NOT NULL,
  `jd` longtext,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  `jddate` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_module_journal_transaction`
--

CREATE TABLE IF NOT EXISTS `account_module_journal_transaction` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `jdid` longtext,
  `option_text` varchar(255) DEFAULT NULL,
  `option_jd` longtext,
  `option_debit` varchar(20) DEFAULT NULL,
  `option_cradit` varchar(20) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_module_ladger`
--

CREATE TABLE IF NOT EXISTS `account_module_ladger` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ladger_id` varchar(255) DEFAULT NULL,
  `invoice_id` varchar(20) NOT NULL,
  `ladger_date` date DEFAULT NULL,
  `debit` varchar(20) NOT NULL,
  `cradit` varchar(20) NOT NULL,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `account_module_ladger`
--

INSERT INTO `account_module_ladger` (`id`, `ladger_id`, `invoice_id`, `ladger_date`, `debit`, `cradit`, `branch_id`, `link_id`) VALUES
(1, '25', 'N1', '2015-03-27', '230', '0', 8, 1427484768),
(2, '24', 'N1', '2015-03-27', '0', '200', 8, 1427484768),
(3, '30', 'N1', '2015-03-27', '0', '30', 8, 1427484768),
(6, '25', 'N2', '2015-03-27', '230', '0', 9, 1427485038),
(7, '99', 'N2', '2015-03-27', '0', '200', 9, 1427485038),
(8, '30', 'N2', '2015-03-27', '0', '30', 9, 1427485038),
(9, '102', 'O1', '2015-03-28', '100', '0', 0, 1427488692),
(10, '32', 'O1', '2015-03-28', '0', '100', 0, 1427488692),
(11, '102', 'O2', '2015-03-28', '120', '0', 8, 1427489818),
(12, '32', 'O2', '2015-03-28', '0', '120', 8, 1427489818),
(15, '25', 'N3', '2015-04-25', '500', '0', 1, 1429941233),
(16, '0', 'N3', '2015-04-25', '0', '500', 1, 1429941233),
(17, '', 'N3', '2015-04-25', '0', '0', 1, 1429941233),
(18, '25', 'N3', '2015-04-25', '500', '0', 1, 1429941233),
(19, '0', 'N3', '2015-04-25', '0', '500', 1, 1429941233),
(20, '', 'N3', '2015-04-25', '0', '0', 1, 1429941233),
(23, '25', 'N4', '2015-04-25', '2500', '0', 1, 1429995527),
(24, '0', 'N4', '2015-04-25', '0', '2500', 1, 1429995527),
(25, '', 'N4', '2015-04-25', '0', '0', 1, 1429995527),
(26, '25', 'N4', '2015-04-25', '800', '0', 1, 1429995527),
(27, '0', 'N4', '2015-04-25', '0', '800', 1, 1429995527),
(28, '', 'N4', '2015-04-25', '0', '0', 1, 1429995527),
(29, '25', 'N5', '2015-05-18', '575', '0', 666, 1431979662),
(30, '0', 'N5', '2015-05-18', '0', '500', 666, 1431979662),
(31, '30', 'N5', '2015-05-18', '0', '75', 666, 1431979662),
(32, '32', 'N5', '2015-05-19', '500', '0', 666, 1431979662),
(33, '25', 'N5', '2015-05-19', '0', '500', 666, 1431979662),
(34, '32', 'N5', '2015-05-19', '75', '0', 666, 1431979662),
(35, '25', 'N5', '2015-05-19', '0', '75', 666, 1431979662),
(36, '25', 'N6', '2015-05-19', '1150', '0', 666, 1432030590),
(37, '0', 'N6', '2015-05-19', '0', '1000', 666, 1432030590),
(38, '30', 'N6', '2015-05-19', '0', '150', 666, 1432030590),
(39, '104', 'N6', '2015-05-19', '0', '500', 666, 1432030590),
(40, '103', 'N6', '2015-05-19', '0', '500', 666, 1432030590),
(41, '32', 'N6', '2015-05-19', '600', '0', 666, 1432030590),
(42, '25', 'N6', '2015-05-19', '0', '600', 666, 1432030590),
(43, '104', 'N6', '2015-05-19', '300', '0', 666, 1432030590),
(44, '103', 'N6', '2015-05-19', '300', '0', 666, 1432030590),
(45, '32', 'N6', '2015-05-19', '550', '0', 666, 1432030590),
(46, '25', 'N6', '2015-05-19', '0', '550', 666, 1432030590),
(47, '104', 'N6', '2015-05-19', '275', '0', 666, 1432030590),
(48, '103', 'N6', '2015-05-19', '275', '0', 666, 1432030590),
(49, '25', 'N25', '2015-05-30', '50', '0', 666, 1432956337),
(50, '103', 'N25', '2015-05-30', '0', '50', 666, 1432956337),
(51, '', 'N25', '2015-05-30', '0', '0', 666, 1432956337),
(52, '25', 'N25', '2015-05-30', '50', '0', 666, 1432956337),
(53, '104', 'N25', '2015-05-30', '0', '50', 666, 1432956337),
(54, '', 'N25', '2015-05-30', '0', '0', 666, 1432956337),
(55, '25', 'N25', '2015-05-30', '10', '0', 666, 1432956337),
(56, '105', 'N25', '2015-05-30', '0', '10', 666, 1432956337),
(57, '', 'N25', '2015-05-30', '0', '0', 666, 1432956337),
(58, '25', 'N26', '2015-05-30', '50', '0', 666, 1432956777),
(59, '103', 'N26', '2015-05-30', '0', '50', 666, 1432956777),
(60, '', 'N26', '2015-05-30', '0', '0', 666, 1432956777),
(61, '25', 'N26', '2015-05-30', '50', '0', 666, 1432956777),
(62, '104', 'N26', '2015-05-30', '0', '50', 666, 1432956777),
(63, '', 'N26', '2015-05-30', '0', '0', 666, 1432956777),
(64, '25', 'N26', '2015-05-30', '10', '0', 666, 1432956777),
(65, '105', 'N26', '2015-05-30', '0', '10', 666, 1432956777),
(66, '', 'N26', '2015-05-30', '0', '0', 666, 1432956777),
(67, '25', 'N27', '2015-06-04', '10', '0', 666, 1433363809),
(68, '105', 'N27', '2015-06-04', '0', '10', 666, 1433363809),
(69, '', 'N27', '2015-06-04', '0', '0', 666, 1433363809),
(70, '32', 'N', '2015-06-04', '500', '0', 666, 1433371972),
(71, '25', 'N', '2015-06-04', '0', '500', 666, 1433371972),
(91, '32', 'N28', '2015-06-09', '100', '0', 666, 666),
(92, '25', 'N28', '2015-06-09', '0', '100', 666, 666),
(93, '106', 'N28', '2015-06-09', '100', '0', 666, 666);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_ladger_list_properties`
--

CREATE TABLE IF NOT EXISTS `account_module_ladger_list_properties` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `main_head_id` int(2) NOT NULL,
  `head_sub_list_id` int(20) DEFAULT NULL,
  `head_sub_list_name` varchar(255) DEFAULT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `account_module_ladger_list_properties`
--

INSERT INTO `account_module_ladger_list_properties` (`id`, `main_head_id`, `head_sub_list_id`, `head_sub_list_name`, `created_by`, `branch_id`, `status`) VALUES
(1, 1, 1, 'Cash Management Account ', NULL, 0, 1),
(2, 2, 52, 'Bank Overdraft', NULL, 0, 2),
(3, 2, 53, 'Billing Accounts', NULL, 0, 2),
(4, 2, 54, 'Credit Card', NULL, 0, 2),
(5, 2, 55, 'Line of Credit', NULL, 0, 2),
(6, 2, 56, 'Other Current Bank Debt', NULL, 0, 2),
(7, 2, 57, 'Deposits Received', NULL, 0, 2),
(8, 3, 90, 'Settlement Fees', NULL, 0, 2),
(9, 3, 91, 'Stop Fees ', NULL, 0, 2),
(10, 3, 220, 'Sales – Support and Maintenance', NULL, 0, 2),
(11, 3, 222, 'Seminars', NULL, 0, 2),
(12, 1, 3, 'Checking Account ', '', 0, 1),
(13, 1, 4, 'Money Market Account ', '', 0, 1),
(18, 4, 319, 'Payroll ï¿½ Bonuses', '', 0, 1),
(19, 4, 322, 'Other Payroll', '', 0, 1),
(20, 5, 355, 'Owner Investment / Drawings', '', 0, 1),
(21, 5, 356, 'Cash Dividends', '', 0, 1),
(22, 1, 5, 'Savings Account ', '', 0, 1),
(23, 1, 6, 'Other Bank Account ', '', 0, 1),
(24, 1, 46, 'Inventory', '', 0, 1),
(25, 1, 376, 'Accounts Receivables', '', 0, 1),
(26, 3, 218, 'Sales – Retail Products', '', 0, 2),
(27, 3, 217, 'Sales ï¿½ Hardware', '', 0, 2),
(29, 2, 0, 'AIT', 'System Accounts', 0, 2),
(30, 2, 0, 'VAT', 'System Accounts', 0, 2),
(31, 1, 2, 'Cash Management Account ', '', 0, 1),
(32, 1, 377, 'Cash On Hand', 'System Accounts', 0, 1),
(34, 2, 0, 'Accounts Payable', 'System Accounts', 0, 2),
(35, 3, 219, 'Sales ï¿½ Software Subscription', '', 0, 2),
(37, 4, 372, 'Discount', '', 0, 1),
(38, 4, 373, 'Carriage Outwards', '', 0, 1),
(39, 2, 66, 'Other Current Debt', '', 0, 2),
(41, 2, 375, 'Purchase Return', '', 0, 2),
(42, 4, 249, 'Production & Suppliers', '', 0, 1),
(43, 4, 240, 'Freight  & Sipping', '', 0, 1),
(44, 4, 379, 'Sales Return', '', 0, 1),
(45, 4, 380, 'Sales Discount', '', 0, 1),
(46, 2, 382, 'Purchase Discount', '', 0, 2),
(47, 3, 131, 'Insurance Proceeds Received', '', 0, 2),
(48, 3, 132, 'Interest Income', '', 0, 2),
(49, 3, 133, 'Proceeds from Sale of Assets', '', 0, 2),
(50, 3, 134, 'Miscellaneous Revenue', '', 0, 2),
(51, 3, 135, 'Refunds', '', 0, 2),
(52, 3, 136, 'Reimbursements', '', 0, 2),
(54, 3, 138, 'Other Income', '', 0, 2),
(55, 1, 16, 'Buildings', '', 0, 1),
(56, 1, 20, 'Land', '', 0, 1),
(57, 1, 21, 'Land Improvements', '', 0, 1),
(59, 1, 387, 'Computer', '', 0, 1),
(60, 1, 388, 'Laptop', '', 0, 1),
(61, 1, 389, 'Chair', '', 0, 1),
(63, 1, 391, 'BookShelf', '', 0, 1),
(64, 1, 392, 'Car', '', 0, 1),
(65, 1, 393, 'Micro Bus', '', 0, 1),
(66, 1, 394, 'Bus', '', 0, 1),
(67, 1, 18, 'Goodwill', '', 0, 1),
(68, 1, 19, 'Incorporation Costs', '', 0, 1),
(69, 1, 23, 'Other Intangible Assets', '', 0, 1),
(70, 1, 25, 'Resource Properties', '', 0, 1),
(71, 1, 26, 'Resource Rights', '', 0, 1),
(72, 4, 320, 'Payroll ï¿½ Commissions', '', 0, 1),
(73, 5, 365, 'Retained Earnings/Deficit', '', 0, 1),
(74, 4, 310, 'Other Office Expenses', '', 0, 1),
(75, 4, 353, 'Rental Car ', '', 0, 1),
(76, 4, 304, 'Printing and Reproduction', '', 0, 1),
(77, 4, 305, 'Furniture ', '', 0, 1),
(78, 4, 303, 'Postage ', '', 0, 1),
(79, 4, 273, 'Building Maintenance', '', 0, 1),
(80, 4, 243, 'Materials Cost', '', 0, 1),
(81, 4, 248, 'Product Samples', '', 0, 1),
(82, 1, 7, 'Accumulated Amortization of Buildings ', '', 0, 1),
(83, 1, 12, 'Accumulated Amortization of Machinery, Equipment, Furniture ', '', 0, 1),
(84, 1, 396, 'Acumulated Depriciation', '', 0, 1),
(85, 4, 395, 'Depriciation', '', 0, 1),
(86, 4, 397, 'Pay & Allowance of Officers', '', 0, 1),
(87, 4, 398, 'Pay & Allowance of Staffs', '', 0, 1),
(91, 6, 50, 'BFIDC. GM Office. Rubber Division. Modhupur', '', 0, 3),
(92, 6, 46, 'BFIDC, GM Office, Rubber Division, Ctg', 'System Account', 0, 3),
(93, 3, 399, 'Coaching Admission Fees', '', 0, 2),
(95, 6, 48, 'BFIDC, GM Office, Rubber Division, Modhupur', '', 0, 3),
(96, 4, 230, 'Merchant Account Fees ', '', 0, 1),
(97, 4, 312, 'Miscellaneous Expense', '', 0, 1),
(99, 3, 213, 'Product Sales', NULL, 0, 2),
(100, 3, 370, 'Sales Software', NULL, 0, 2),
(101, 1, 51, 'Other Current Asset', NULL, 0, 1),
(102, 4, 404, 'Tiffin', NULL, 0, 1),
(103, 2, 406, 'Management Convince', NULL, 666, 2),
(104, 2, 405, 'School Development', NULL, 666, 2),
(105, 3, 125, 'Mission Offerings', NULL, 666, 2),
(106, 3, 407, 'School Development Fees', NULL, 0, 2),
(107, 3, 407, 'School Development Fees', NULL, 666, 2),
(108, 3, 408, 'Managment Fees', NULL, 0, 2),
(109, 3, 408, 'Managment Fees', NULL, 666, 2);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_liability_credit_head_list`
--

CREATE TABLE IF NOT EXISTS `account_module_liability_credit_head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `account_module_liability_credit_head_list`
--

INSERT INTO `account_module_liability_credit_head_list` (`id`, `list_of_head_accounts_id`, `head_title`, `branch_id`, `status`) VALUES
(1, 2, 'Current Liability', 0, 2),
(2, 2, 'Non-Current Liability', 0, 2),
(3, 2, 'Others', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_list_of_head_accounts`
--

CREATE TABLE IF NOT EXISTS `account_module_list_of_head_accounts` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `head_title` varchar(255) DEFAULT NULL,
  `tab_name` varchar(255) NOT NULL,
  `branch_id` int(20) NOT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `account_module_list_of_head_accounts`
--

INSERT INTO `account_module_list_of_head_accounts` (`id`, `head_title`, `tab_name`, `branch_id`, `status`) VALUES
(1, 'Asset', 'asset_head_list', 0, 1),
(2, 'Liability Credit Card', ' liability_credit_head_list', 0, 2),
(3, 'Income', 'income_head_list', 0, 2),
(4, 'Expense', 'expense_head_list', 0, 1),
(5, 'Equity', 'equity_head_list', 0, 2),
(6, 'Other', 'other_head_list', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_newtax`
--

CREATE TABLE IF NOT EXISTS `account_module_newtax` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `main_id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `rate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `account_module_newtax`
--

INSERT INTO `account_module_newtax` (`id`, `main_id`, `name`, `branch_id`, `rate`) VALUES
(2, 29, 'AIT', 0, '5'),
(3, 30, 'VAT', 0, '15');

-- --------------------------------------------------------

--
-- Table structure for table `account_module_office_expense_voucher`
--

CREATE TABLE IF NOT EXISTS `account_module_office_expense_voucher` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `expense_id` int(100) NOT NULL,
  `vdate` varchar(20) NOT NULL,
  `dr` varchar(25) NOT NULL,
  `cr` varchar(20) NOT NULL,
  `description` longtext NOT NULL,
  `taka` varchar(20) NOT NULL,
  `currentdate` date NOT NULL,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  `input_by` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `account_module_office_expense_voucher`
--

INSERT INTO `account_module_office_expense_voucher` (`id`, `expense_id`, `vdate`, `dr`, `cr`, `description`, `taka`, `currentdate`, `branch_id`, `link_id`, `input_by`) VALUES
(1, 1427488692, '2015-03-28', '102', '32', 'hwwww', '100', '2015-03-28', 8, 1427488692, 71),
(2, 1427489818, '2015-03-28', '102', '32', 'hwwww', '120', '2015-03-28', 8, 1427489818, 71);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_other_head_list`
--

CREATE TABLE IF NOT EXISTS `account_module_other_head_list` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `list_of_head_accounts_id` int(20) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `account_module_other_head_list`
--

INSERT INTO `account_module_other_head_list` (`id`, `list_of_head_accounts_id`, `head_title`, `branch_id`, `status`) VALUES
(1, 6, 'Inter Project Current Account', 0, 3),
(2, 6, 'Others', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_payabletax`
--

CREATE TABLE IF NOT EXISTS `account_module_payabletax` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ladger_id` varchar(255) DEFAULT NULL,
  `invoice_id` varchar(20) NOT NULL,
  `ladger_date` date DEFAULT NULL,
  `debit` varchar(20) NOT NULL,
  `cradit` varchar(20) NOT NULL,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `account_module_payabletax`
--

INSERT INTO `account_module_payabletax` (`id`, `ladger_id`, `invoice_id`, `ladger_date`, `debit`, `cradit`, `branch_id`, `link_id`) VALUES
(1, '29', 'B10', '2015-02-16', '6.992', '0', 8, 1424078431),
(2, '', 'B14', '2015-02-25', '0', '0', 8, 1424851321),
(3, '', 'B15', '2015-02-25', '0', '0', 8, 1424851968);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_product`
--

CREATE TABLE IF NOT EXISTS `account_module_product` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pname` longtext,
  `in_ac_id` int(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `description` longtext,
  `branch_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `account_module_product`
--

INSERT INTO `account_module_product` (`id`, `pname`, `in_ac_id`, `price`, `description`, `branch_id`, `date`, `status`) VALUES
(3, 'Lecture sheet 1', 99, '500', 'C Unit Lecture', 1, '2015-04-25', 1),
(4, 'Lecture sheet 2', 99, '400', 'D Unit Lecture', 1, '2015-04-25', 1),
(5, 'Management Convince', 103, '50', 'Product Added From Admission System', 666, '2015-05-30', 1),
(6, 'School Development', 104, '50', 'Product Added From Admission System', 666, '2015-05-30', 1),
(7, 'Mission Offerings', 105, '10', 'Product Added From Admission System', 666, '2015-05-30', 1),
(8, 'Management Convince', 103, '50', 'Product Added From Admission System', 666, '2015-05-30', 1),
(9, 'School Development', 104, '50', 'Product Added From Admission System', 666, '2015-05-30', 1),
(10, 'Mission Offerings', 105, '10', 'Product Added From Admission System', 666, '2015-05-30', 1),
(11, 'Mission Offerings', 105, '10', 'Product Added From Admission System', 666, '2015-06-04', 1),
(12, 'School Development Fees', 106, '100', 'Product Added From Admission System', 666, '2015-06-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_salary_deduction`
--

CREATE TABLE IF NOT EXISTS `account_module_salary_deduction` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `sid` int(20) NOT NULL,
  `deduction` varchar(255) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `account_module_salary_deduction`
--

INSERT INTO `account_module_salary_deduction` (`id`, `sid`, `deduction`, `amount`, `branch_id`, `link_id`) VALUES
(1, 1, 'mmmmmmmmm', '10', 0, 0),
(2, 1, 'uuuuuu', '10', 0, 0),
(3, 1, 'mmmmmmmmm', '40', 0, 0),
(4, 2, '1000', '1000', 0, 0),
(5, 2, '1000', '1000', 0, 0),
(6, 3, '1000', '1000', 8, 1424088191),
(7, 4, '1000', '1000', 8, 1424089810);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_salary_earing`
--

CREATE TABLE IF NOT EXISTS `account_module_salary_earing` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `sid` int(20) NOT NULL,
  `earning` varchar(255) NOT NULL,
  `actual` varchar(255) NOT NULL,
  `earned` varchar(255) NOT NULL,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `account_module_salary_earing`
--

INSERT INTO `account_module_salary_earing` (`id`, `sid`, `earning`, `actual`, `earned`, `branch_id`, `link_id`) VALUES
(1, 1, 'qqqqqqqqqqqqq', '100', '100', 0, 0),
(2, 1, 'eeeeeeeeeeeee', '20', '20', 0, 0),
(3, 2, '10000', '10000', '10000', 0, 0),
(4, 2, '1000', '1000', '1000', 0, 0),
(5, 3, '2000', '2000', '4000', 8, 1424088191),
(6, 4, '10000', '10000', '10000', 8, 1424089810);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_salary_voucher`
--

CREATE TABLE IF NOT EXISTS `account_module_salary_voucher` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `salary_id` int(100) NOT NULL,
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
  `total` varchar(20) NOT NULL,
  `paid` varchar(20) NOT NULL,
  `due` varchar(20) NOT NULL,
  `etype` int(20) NOT NULL,
  `branch_id` int(20) NOT NULL,
  `link_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `account_module_salary_voucher`
--

INSERT INTO `account_module_salary_voucher` (`id`, `salary_id`, `company_name`, `payslipdate`, `empcode`, `ename`, `department`, `designation`, `pfac`, `esino`, `f_hname`, `joiningdate`, `bankac`, `mdl`, `total`, `paid`, `due`, `etype`, `branch_id`, `link_id`) VALUES
(1, 0, 'fcgddf', '03/08/2013', 'dfgdfgdfgdfgdfg', 'dfgdf', 'gdfgdfg', 'dfgdfgdfgdf', 'gdfgdfgfd', 'gdfgdfgdfg', 'dfgdfgdfg', '03/28/2013', 'dfgdfgdfgdf', 'gdfgdfgdfgdf', '60', '120', '0', 397, 0, 0),
(2, 1417733552, 'AMS IT', '12/10/2014', '555000', 'Md Mahamod', 'CSE', 'Manager', '12345678', '233', 'Md Moniruzaman Bhuyian', '12/10/2014', '5550000', '2', '9000', '9000', '0', 398, 0, 0),
(3, 1424088191, 'M/S Bismillah Anterprise', '2015-02-09', '555000', 'Md Mahamod', 'sadsadsa', 'Manager', '12345678', '233', 'Md Moniruzaman Bhuyian', '2015-02-17', '5550000', '2', '3000', '3000', '0', 398, 8, 1424088191),
(4, 1424089810, 'M/S Bismillah Anterprise', '2015-02-10', '555000', 'Md Mahamod', 'sadsadsa', 'Manager', '12345678', '233', 'Md Moniruzaman Bhuyian', '2015-02-09', '5550000', '2', '9000', '6000', '3000', 398, 8, 1424089810);

-- --------------------------------------------------------

--
-- Table structure for table `account_module_tax`
--

CREATE TABLE IF NOT EXISTS `account_module_tax` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tname` longtext,
  `abbre` varchar(255) DEFAULT NULL,
  `description` longtext,
  `taxnumber` varchar(255) DEFAULT NULL,
  `taxnumberstatus` int(2) DEFAULT NULL,
  `taxrecoverable` int(2) DEFAULT NULL,
  `compoundtax` int(2) DEFAULT NULL,
  `taxrate` varchar(20) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_module_vendor`
--

CREATE TABLE IF NOT EXISTS `account_module_vendor` (
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
  `branch_id` int(20) NOT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `toll_free` varchar(255) DEFAULT NULL,
  `website` longtext,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `account_module_vendor`
--

INSERT INTO `account_module_vendor` (`id`, `company_name`, `email`, `fname`, `lname`, `currency`, `ac_n`, `add1`, `add2`, `city`, `country`, `province`, `postal_zip`, `phone`, `branch_id`, `fax`, `mobile`, `toll_free`, `website`, `status`) VALUES
(1, 'Bhuyian Host', 'contact@bhuyianhost.com', 'Fahad', 'Bhuyian', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0),
(2, 'UCC', 'dsvzxv', 'xvzxvv', 'xvxv', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0),
(3, 'AMSIT', 'rasel_alone@yahoo.com', '#', '#', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, 0),
(4, 'AMSIT-2', '25nazimulislam25@gmail.com', '#', '#', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ams_add_marks_final`
--

CREATE TABLE IF NOT EXISTS `ams_add_marks_final` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `session_id` int(20) DEFAULT NULL,
  `class_id` int(20) DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL,
  `exam_id` int(20) DEFAULT NULL,
  `mark` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_add_marks_final`
--

INSERT INTO `ams_add_marks_final` (`id`, `school_id`, `session_id`, `class_id`, `user_id`, `exam_id`, `mark`, `date`, `status`) VALUES
(1, 666, 15, 188, 3, 114, 7, '2015-04-16', 1),
(2, 666, 15, 188, 3, 115, 15, '2015-04-16', 1),
(3, 666, 15, 188, 3, 116, 5, '2015-04-16', 1),
(4, 105949, 67, 195, 47, 1, 30, '2015-07-01', 1);

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
(1, 'mama', 'e10adc3949ba59abbe56e057f20f883e', 2, '2014-05-13', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `ams_admin_eiin_number`
--

INSERT INTO `ams_admin_eiin_number` (`id`, `eiin`, `time`, `date`, `status`) VALUES
(24, '666', '', '2014-05-29', 3),
(67, '105949', '09:10:20 am', '2015-06-30', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ams_admin_sms_stteing`
--

INSERT INTO `ams_admin_sms_stteing` (`id`, `eiin_number`, `company_id`, `cline_quantity`, `school_id`, `time`, `date`, `status`) VALUES
(1, '666', 2, '300', 666, '07:48:05 pm', '2014-07-15', 1),
(2, '666', 2, '100', 666, '09:26:31 pm', '2014-07-26', 1),
(3, '666', 2, '100', 666, '09:28:27 pm', '2014-07-26', 1),
(4, '6556', 2, '5', 6556, '01:23:04 pm', '2014-07-26', 1),
(5, '6556', 2, '45', 6556, '12:49:38 am', '2014-07-29', 1),
(6, '14901', 2, '5000', 14901, '05:06:59 pm', '2014-08-09', 2),
(7, '666', 2, '50', 666, '02:40:22 pm', '2014-10-19', 1),
(8, '666', 2, '40', 666, '03:15:09 pm', '2014-10-19', 1),
(9, '14911', 2, '5000', 14911, '05:36:28 pm', '2014-10-20', 1),
(10, '666', 2, '340', 666, '05:31:43 pm', '2014-10-27', 1),
(11, '14910', 2, '20', 14910, '05:37:38 pm', '2014-10-27', 1),
(12, '666', 2, '500', 666, '03:49:08 pm', '2014-11-15', 1),
(13, '666', 2, '30', 666, '01:35:24 pm', '2014-11-20', 1),
(14, '666', 2, '70', 666, '02:41:57 pm', '2014-11-22', 1),
(15, '6556', 2, '10', 6556, '07:07:34 pm', '2015-01-18', 1),
(16, '555000', 2, '500', 555000, '10:34:59 pm', '2015-04-13', 1),
(17, '666000', 2, '30', 666000, '01:49:27 am', '2015-04-14', 1),
(18, '105949', 2, '1000', 105949, '09:21:59 am', '2015-06-30', 1);

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
  `user_id` int(20) NOT NULL,
  `date` varchar(200) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1870 ;

--
-- Dumping data for table `ams_admission`
--

INSERT INTO `ams_admission` (`id`, `name`, `admition`, `school_id`, `class_id`, `roll`, `section_id`, `session_id`, `shift_id`, `group_id`, `dob`, `blood_group`, `gender`, `nationality`, `religion`, `language`, `mother_name`, `father_name`, `guardian_name`, `occupation`, `income`, `number`, `serial_number`, `present_address`, `permanent_address`, `state`, `city`, `zip_code`, `countryr`, `phone_number`, `email`, `photo`, `user_id`, `date`, `status`) VALUES
(1867, 'Demo Student', '10594901873', 105949, 195, '1', 178, 67, 5, 155, '', '', '', '', '', '', '', '', 'Md Demo', '', '', '', '', '', '', '', 0, '', '', '01860748020', '', 'student_1435635946.jpg', 0, '2015-06-30', 1),
(1868, 'Md Fahad Bhuyian', '10594909124', 105949, 195, '101', 178, 67, 5, 155, '', '', '', '', '', '', '', '', 'Md Maniruzamman', '', '', '', '', '', '', '', 0, '', '', '01927608261', '', 'student_1435736781.jpg', 47, '2015-07-01', 1),
(1869, '', '10594947637', 105949, 0, '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '<span id=''invalid''>***Invalid file Size or Type***<span>', 47, '', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ams_category`
--

INSERT INTO `ams_category` (`id`, `name`, `group_id`, `school_id`, `date`, `status`) VALUES
(2, 's', 1, 3, '2014-05-20', 1),
(3, 'e', 1, 3, '2014-05-20', 1),
(4, 'r', 2, 3, '2014-05-20', 1),
(5, 'Demo', 32, 105949, '2015-07-01', 1),
(6, 'Students', 32, 105949, '2016-06-22', 1),
(7, 'Miru', 34, 105949, '2016-06-22', 1),
(8, 'Test', 35, 105949, '2016-10-25', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=205 ;

--
-- Dumping data for table `ams_class`
--

INSERT INTO `ams_class` (`id`, `name`, `school_id`, `section_id`, `session_id`, `group_id`, `shift_id`, `date`, `status`) VALUES
(195, 'Class - One', 105949, 0, 67, 0, 0, '2015-06-30', 1),
(196, 'Class - Two', 105949, 0, 67, 0, 0, '2015-06-30', 1),
(197, 'Class - Three', 105949, 0, 67, 0, 0, '2015-06-30', 1),
(198, 'Class - Four', 105949, 0, 67, 0, 0, '2015-06-30', 1),
(199, 'Class - Five', 105949, 0, 67, 0, 0, '2015-06-30', 1),
(200, 'Class - Six', 105949, 0, 67, 0, 0, '2015-06-30', 1),
(201, 'Class - Seven', 105949, 0, 67, 0, 0, '2015-06-30', 1),
(202, 'Class - Eight', 105949, 0, 67, 0, 0, '2015-06-30', 1),
(203, 'Class - Nine', 105949, 0, 67, 0, 0, '2015-06-30', 1),
(204, 'Class - Ten', 105949, 0, 67, 0, 0, '2015-06-30', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ams_contact`
--

INSERT INTO `ams_contact` (`id`, `name`, `group_id`, `category_id`, `info`, `gender`, `number`, `school_id`, `date`, `status`) VALUES
(1, 'rasel', 1, 1, 'tttttt', 'Male', '01675180510', 3, '2014-05-20', 1),
(2, 'Super ', 32, 5, 'Opekkha', 'Female', '01748009080', 105949, '2015-07-01', 1),
(3, 'Md Mir Hossain', 32, 5, 'Opekkha', 'Male', '01710706541', 105949, '2015-07-01', 1),
(4, 'Babi Famu', 32, 5, 'Opekkha', 'Female', '01851873433', 105949, '2016-06-22', 1),
(5, 'Siri', 32, 5, 'Opekkha', 'Female', '01731633472', 105949, '2016-06-22', 1),
(6, 'Fahima Mir', 32, 5, 'Opekkha', 'Female', '01919706541', 105949, '2016-06-22', 1),
(7, 'Taslima', 32, 5, 'Opekkha', 'Female', '01710706541', 105949, '2016-06-22', 1),
(8, 'Mr.Fahad', 35, 8, 'dvjbxdvbbv', 'Male', '01860748020', 105949, '2016-10-25', 1);

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
(2, 'Comilla', '2015-01-25', 1),
(3, 'Chittagong', '2015-01-25', 1),
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_exam_category`
--

INSERT INTO `ams_exam_category` (`id`, `name`, `session_id`, `class_id`, `section_id`, `shift_id`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, 'Exam 1', 67, 195, 0, 0, 0, 105949, '2015-07-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_exam_category_set`
--

CREATE TABLE IF NOT EXISTS `ams_exam_category_set` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `exam_id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_exam_category_set`
--

INSERT INTO `ams_exam_category_set` (`id`, `exam_id`, `session_id`, `class_id`, `school_id`, `date`, `status`) VALUES
(1, 1, 67, 195, 105949, '2015-07-01', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_exam_result`
--

INSERT INTO `ams_exam_result` (`id`, `name_id`, `session_id`, `class_id`, `subject_id`, `section_id`, `roll`, `shift_id`, `admission_id`, `group_id`, `exam_cateory_id`, `marks`, `marks2`, `marks3`, `marks4`, `marks5`, `marks6`, `marks7`, `marks8`, `mcq`, `school_id`, `date`, `status`) VALUES
(1, 1867, 67, 195, 437, 178, '1', 5, '10594901873', 155, 1, '20', '30', '', '', '', '', '', '', '', 105949, '2015-07-01', 1),
(2, 1868, 67, 195, 437, 178, '101', 5, '10594909124', 155, 1, '30', '30', '', '', '', '', '', '', '', 105949, '2015-07-01', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_exam_subject`
--

INSERT INTO `ams_exam_subject` (`id`, `group_id`, `class_id`, `section_id`, `shift_id`, `session_id`, `exam_id`, `subject_id`, `school_id`, `date`, `status`) VALUES
(1, 0, 195, 0, 0, 67, 1, 437, 105949, '2015-07-01', 1),
(2, 0, 195, 0, 0, 67, 1, 438, 105949, '2015-07-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ams_grading_system_dateils`
--

CREATE TABLE IF NOT EXISTS `ams_grading_system_dateils` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `letter` varchar(200) NOT NULL,
  `point` varchar(200) NOT NULL,
  `point_2` varchar(20) NOT NULL,
  `range_1` varchar(200) NOT NULL,
  `range_2` varchar(200) NOT NULL,
  `category_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=403 ;

--
-- Dumping data for table `ams_grading_system_dateils`
--

INSERT INTO `ams_grading_system_dateils` (`id`, `letter`, `point`, `point_2`, `range_1`, `range_2`, `category_id`, `school_id`, `date`, `status`) VALUES
(1, 'A++', '5.00', '4.51', '90', '100', 1, 0, '2014-07-01', 1),
(2, 'A+', '4.50', '3.76', '81', '90', 1, 0, '2014-07-01', 1),
(3, 'A', '3.75', '3.51', '76', '80', 1, 0, '2014-07-08', 1),
(4, 'A-', '3.50', '3.26', '71', '75', 1, 0, '2014-07-08', 1),
(5, 'B+', '3.25', '3.01', '66', '70', 1, 0, '2014-07-08', 1),
(6, 'B', '3.00', '2.76', '61', '65', 1, 0, '2014-07-08', 1),
(7, 'B-', '2.75', '2.51', '56', '60', 1, 0, '2014-07-08', 1),
(8, 'C+', '2.50', '2.26', '51', '55', 1, 0, '2014-07-08', 1),
(9, 'C', '2.25', '2.01', '46', '50', 1, 0, '2014-07-15', 1),
(10, 'D', '2.00', '1.00', '41', '45', 1, 0, '2014-07-01', 1),
(11, 'F', '0.99', '0.00', '00', '40', 1, 0, '2014-07-15', 1),
(12, 'A+', '4.00', '3.76', '80', '100', 2, 0, '2014-07-01', 1),
(13, 'A', '3.75', '3.51', '76', '80', 2, 0, '2014-07-07', 1),
(14, 'A-', '3.50', '3.26', '71', '75', 2, 0, '2014-07-08', 1),
(15, 'B+', '3.25', '3.01', '66', '70', 2, 0, '2014-07-21', 1),
(16, 'B', '3.00', '2.76', '61', '65', 2, 0, '2014-07-08', 1),
(17, 'B-', '2.75', '2.51', '56', '60', 2, 0, '2014-07-08', 1),
(18, 'C+', '2.50', '2.26', '51', '55', 2, 0, '2014-07-14', 1),
(19, 'C', '2.25', '2.01', '46', '50', 2, 0, '2014-07-15', 1),
(20, 'D', '2.00', '1.00', '41', '45', 2, 0, '2014-07-15', 1),
(21, 'F', '0.99', '0.00', '36', '30', 2, 0, '2014-07-08', 1),
(31, 'A-', '4.00', '3.51', '66', '70', 4, 0, '2014-07-03', 1),
(32, 'B+', '3.50', '3.01', '61', '65', 4, 0, '2014-07-03', 1),
(33, 'B', '3.00', '2.01', '51', '60', 4, 0, '2014-07-03', 1),
(34, 'C', '2.00', '1.01', '41', '50', 4, 0, '2014-07-03', 1),
(35, 'D', '1.00', '1.00', '34', '40', 4, 0, '2014-07-03', 1),
(36, 'F', '0.00', '0.00', '30', '33', 4, 0, '2014-07-03', 1),
(37, 'A++', '5.00', '4.26', '86', '100', 5, 0, '2014-07-03', 1),
(38, 'A+', '4.25', '4.01', '81', '85', 5, 0, '2014-07-03', 1),
(39, 'A', '4.00', '3.76', '76', '80', 5, 0, '2014-07-03', 1),
(40, 'A-', '3.75', '3.51', '71', '75', 5, 0, '2014-07-03', 1),
(41, 'B+', '3.50', '3.26', '66', '70', 5, 0, '2014-07-03', 1),
(42, 'B', '3.25', '3.01', '61', '65', 5, 0, '2014-07-03', 1),
(43, 'B-', '3.00', '2.76', '56', '60', 5, 0, '2014-07-03', 1),
(44, 'C+', '2.75', '2.51', '51', '55', 5, 0, '2014-07-03', 1),
(45, 'C', '2.50', '2.01', '46', '50', 5, 0, '2014-07-03', 1),
(46, 'D', '2.00', '1.00', '41', '45', 5, 0, '2014-07-03', 1),
(47, 'F', '0.99', '0.00', '35', '40', 5, 0, '2014-07-03', 1),
(172, 'A++', '5.00', '4.51', '90', '100', 3, 0, '2014-07-23', 1),
(173, 'A+', '4.50', '4.01', '81', '90', 3, 0, '2014-07-23', 1),
(174, 'A', '4.00', '3.51', '71', '80', 3, 0, '2014-07-23', 1),
(175, 'B+', '3.50', '3.01', '61 ', '70', 3, 0, '2014-07-23', 1),
(176, 'B', '3.00', '2.01', '51', ' 60', 3, 0, '2014-07-23', 1),
(177, 'C', '2.00', '1.99', '41', ' 50', 3, 0, '2014-07-23', 1),
(178, 'D', '1.00', '1.00', '33', '40', 3, 0, '2014-07-23', 1),
(385, 'A-', '4.00', '3.51', '66', '70', 6, 0, '2014-12-31', 1),
(386, 'B+', '3.50', '3.01', '61', '65', 6, 0, '2014-12-31', 1),
(387, 'B', '3.00', '2.51', '51', '60', 6, 0, '2014-12-31', 1),
(388, 'C', '2.50', '2.01', '41', '50', 6, 0, '2014-12-31', 1),
(389, 'D', '1.99', '1.00', '34', '40', 6, 0, '2014-12-31', 1),
(390, 'F', '0.99', '0.00', '30', '33', 6, 0, '2014-12-31', 1),
(397, 'A-', '4.00', '3.51', '66', '70', 6, 105949, '2015-07-01', 2),
(398, 'B+', '3.50', '3.01', '61', '65', 6, 105949, '2015-07-01', 2),
(399, 'B', '3.00', '2.51', '51', '60', 6, 105949, '2015-07-01', 2),
(400, 'C', '2.50', '2.01', '41', '50', 6, 105949, '2015-07-01', 2),
(401, 'D', '1.99', '1.00', '34', '40', 6, 105949, '2015-07-01', 2),
(402, 'F', '0.99', '0.00', '30', '33', 6, 105949, '2015-07-01', 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `ams_management_group`
--

INSERT INTO `ams_management_group` (`id`, `name`, `school_id`, `date`, `status`) VALUES
(31, 'ASSISTANT TEACHER', 0, '2014-10-20', 1),
(32, 'Test', 105949, '2015-07-01', 1),
(33, 'Students', 105949, '2016-06-22', 1),
(34, 'Friend', 105949, '2016-06-22', 1),
(35, 'SUL Developer', 105949, '2016-10-25', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ams_manage_account`
--

INSERT INTO `ams_manage_account` (`id`, `name`, `taka`, `management_group`, `school_id`, `date`, `status`) VALUES
(1, 'Bill_1', '100', 1, 3, '2014-06-01', 1),
(2, 'Bill_2', '200', 1, 3, '2014-06-01', 1),
(3, 'Bill_3', '300', 1, 3, '2014-06-01', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_manage_account_paymant`
--

INSERT INTO `ams_manage_account_paymant` (`id`, `receipt`, `school_id`, `id_number`, `group_id`, `date`, `status`) VALUES
(1, '6505', 3, '3535353', 1, '2014-06-01', 1),
(2, '2115', 3, '3535353', 1, '2014-06-03', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ams_manage_account_paymant_details`
--

INSERT INTO `ams_manage_account_paymant_details` (`id`, `receipt_number`, `id_number`, `account_id`, `amount`, `total`, `account_name_id`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, 6505, 3535353, 1, '11', '100', 1, 1, 3, '2014-06-01', 1),
(2, 6505, 3535353, 1, '33', '200', 2, 1, 3, '2014-06-01', 1),
(3, 6505, 3535353, 1, '77', '300', 3, 1, 3, '2014-06-01', 1),
(4, 2115, 3535353, 1, '33', '100', 1, 1, 3, '2014-06-03', 1),
(5, 2115, 3535353, 1, '33', '200', 2, 1, 3, '2014-06-03', 1),
(6, 2115, 3535353, 1, '33', '300', 3, 1, 3, '2014-06-03', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `ams_marks_mode`
--

INSERT INTO `ams_marks_mode` (`id`, `exam_id`, `session_id`, `class_id`, `mode`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, 1, 7, 13, '5%', 8, 666, '2014-07-26', 1),
(2, 2, 7, 13, '5%', 8, 666, '2014-07-26', 1),
(3, 4, 7, 13, '5%', 8, 666, '2014-07-26', 1),
(4, 5, 7, 13, '5%', 8, 666, '2014-07-26', 1),
(5, 6, 14, 24, '0', 22, 666, '2014-08-05', 1),
(6, 7, 14, 24, '0', 22, 666, '2014-08-05', 1),
(7, 8, 14, 24, '0', 22, 666, '2014-08-05', 1),
(8, 9, 14, 24, '0', 22, 666, '2014-08-05', 1),
(9, 13, 0, 86, '', 62, 1234, '2014-08-30', 1),
(10, 17, 14, 105, '5', 68, 666, '2014-10-23', 1),
(11, 19, 42, 117, '5', 72, 14910, '2014-10-24', 1),
(12, 24, 0, 42, '10', 32, 14901, '2014-12-31', 1),
(13, 25, 0, 42, '10', 32, 14901, '2014-12-31', 1),
(14, 26, 0, 42, '10', 32, 14901, '2014-12-31', 1),
(15, 28, 14, 105, '0', 71, 666, '2015-01-23', 1),
(16, 29, 14, 105, '0', 71, 666, '2015-01-23', 1),
(17, 30, 14, 105, '0', 71, 666, '2015-01-23', 1),
(18, 31, 14, 105, '0', 71, 666, '2015-01-23', 1),
(19, 32, 14, 105, '0', 71, 666, '2015-01-23', 1),
(20, 33, 14, 21, '0', 14, 666, '2015-01-23', 1),
(21, 34, 14, 21, '0', 14, 666, '2015-01-23', 1),
(22, 35, 14, 21, '0', 14, 666, '2015-01-23', 1),
(23, 36, 14, 21, '0', 14, 666, '2015-01-23', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_marks_select`
--

INSERT INTO `ams_marks_select` (`id`, `pass_marks`, `full_marks`, `subject_id`, `exam_id`, `session_id`, `class_id`, `section_id`, `shift_id`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, '33', '100', 437, 1, 67, 195, 0, 0, 0, 105949, '2015-07-01', 1),
(2, '33', '100', 438, 1, 67, 195, 0, 0, 0, 105949, '2015-07-01', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_marks_shite_chos`
--

INSERT INTO `ams_marks_shite_chos` (`id`, `grading_system_id`, `group_id`, `school_id`, `date`, `status`) VALUES
(1, 6, 0, 105949, '2015-07-01', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_massages_book`
--

INSERT INTO `ams_massages_book` (`id`, `name`, `details`, `school_id`, `date`, `status`) VALUES
(1, 'Opekkha', '                                   <p>Opekkha</p>\r\n                                    ', 105949, '2016-06-22', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `ams_notice`
--

INSERT INTO `ams_notice` (`id`, `name`, `word`, `details`, `school_id`, `date`, `status`) VALUES
(19, 'Class Routine', '', 'Class Routine 1 - 2014-09-20', 105949, '2015-06-30', 1),
(20, 'Up Comings', '', 'Upcoming Teachers Day', 105949, '2015-06-30', 2),
(21, 'Morning', '1435702038.png', 'asdasdasd', 105949, '2015-07-01', 1),
(22, 'wwqeqewqe', '1435702189.pdf', 'qwewqeqe', 105949, '2015-07-01', 1),
(23, 'Holiday', '', 'You are supposed to sit for a Quiz test on Saturady 26th october,2016.', 105949, '2016-10-25', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_report`
--

INSERT INTO `ams_report` (`id`, `name`, `school_id`, `date`, `status`) VALUES
(1, 'Subjective', 105949, '2015-07-01', 1),
(2, 'Objective', 105949, '2015-07-01', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_report2`
--

INSERT INTO `ams_report2` (`id`, `report_id`, `school_id`, `date`, `status`) VALUES
(1, 2, 105949, '2015-07-01', 1),
(2, 1, 105949, '2015-07-01', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `ams_sand_sms_class_wise`
--

INSERT INTO `ams_sand_sms_class_wise` (`id`, `name`, `admission`, `class_id`, `guardian_name`, `number`, `school_id`, `company_id`, `time`, `date`, `status`) VALUES
(3, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491158556', 120, 'Amir Hossain', '01718189670', 14911, 0, '', '2014-11-27', 1),
(4, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491194366', 120, 'Mahmudul Haq ', '01710977764', 14911, 0, '', '2014-11-27', 1),
(5, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491173177', 120, 'Fakir Fazlul Haque ', '01715248824', 14911, 0, '', '2014-11-27', 1),
(6, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491112762', 120, 'Md. Ali Akbar Bhuiya ', '01199084761', 14911, 0, '', '2014-11-27', 1),
(7, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491118277', 120, 'Akhter Hossain ', '01713329674', 14911, 0, '', '2014-11-27', 1),
(8, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491161919', 120, 'S.M. Alam Hossain ', '01923851935', 14911, 0, '', '2014-11-27', 1),
(9, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491114645', 120, 'Jamal Shorif ', '01712223772', 14911, 0, '', '2014-11-27', 1),
(10, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491162562', 120, 'Md. Alamgir Hossain ', '01712770165', 14911, 0, '', '2014-11-27', 1),
(11, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491121834', 120, 'Mr. Borhanuddin ', '01820232939', 14911, 0, '', '2014-11-27', 1),
(12, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491118530', 120, 'Mr. Alauddin ', '01816534030', 14911, 0, '', '2014-11-27', 1),
(13, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491180458', 120, 'Sazzadul Alam ', '01914390234', 14911, 0, '', '2014-11-27', 1),
(14, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491124041', 120, 'Md. Golam Kabir ', '01732153467', 14911, 0, '', '2014-11-27', 1),
(15, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491111353', 120, 'Mr. Shamsul Haque ', '01680775700', 14911, 0, '', '2014-11-27', 1),
(16, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491198518', 120, 'Md. Abdur Rob  ', '01715732978', 14911, 0, '', '2014-11-27', 1),
(17, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491132931', 120, 'Shahien Mollah ', ' 01714538580', 14911, 0, '', '2014-11-27', 1),
(18, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491123493', 120, 'Shafiqul Islam ', '01723806609', 14911, 0, '', '2014-11-27', 1),
(19, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491189652', 120, 'Mr. Ismail Hossain ', '01914365505', 14911, 0, '', '2014-11-27', 1),
(20, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491100006', 120, 'Mr. Haresh Ahmed ', '01756405818', 14911, 0, '', '2014-11-27', 1),
(21, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491132544', 120, 'S.M. Aminul Haque ', '01912725570', 14911, 0, '', '2014-11-27', 1),
(22, 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1491120228', 120, 'Jakir Hossain ', '01914690649', 14911, 0, '', '2014-11-27', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=198 ;

--
-- Dumping data for table `ams_section`
--

INSERT INTO `ams_section` (`id`, `name`, `session_id`, `school_id`, `class_id`, `shift_id`, `date`, `status`) VALUES
(1, 'A', 4, 3, 5, 0, '2014-05-20', 1),
(2, 'B', 5, 3, 12, 0, '2014-05-20', 1),
(3, 'A', 3, 3, 9, 0, '2014-05-20', 1),
(4, 'A', 5, 3, 12, 0, '2014-06-02', 1),
(178, 'A', 67, 105949, 195, 0, '2015-06-30', 1),
(179, 'B', 67, 105949, 195, 0, '2015-06-30', 1),
(180, 'A', 67, 105949, 196, 0, '2015-06-30', 1),
(181, 'B', 67, 105949, 196, 0, '2015-06-30', 1),
(182, 'A', 67, 105949, 197, 0, '2015-06-30', 1),
(183, 'B', 67, 105949, 197, 0, '2015-06-30', 1),
(184, 'A', 67, 105949, 198, 0, '2015-06-30', 1),
(185, 'B', 67, 105949, 198, 0, '2015-06-30', 1),
(186, 'A', 67, 105949, 199, 0, '2015-06-30', 1),
(187, 'B', 67, 105949, 199, 0, '2015-06-30', 1),
(188, 'A', 67, 105949, 200, 0, '2015-06-30', 1),
(189, 'B', 67, 105949, 200, 0, '2015-06-30', 1),
(190, 'A', 67, 105949, 201, 0, '2015-06-30', 1),
(191, 'B', 67, 105949, 201, 0, '2015-06-30', 1),
(192, 'A', 67, 105949, 202, 0, '2015-06-30', 1),
(193, 'B', 67, 105949, 202, 0, '2015-06-30', 1),
(194, 'A', 67, 105949, 203, 0, '2015-06-30', 1),
(195, 'B', 67, 105949, 203, 0, '2015-06-30', 1),
(196, 'A', 67, 105949, 204, 0, '2015-06-30', 1),
(197, 'B', 67, 105949, 204, 0, '2015-06-30', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `ams_session`
--

INSERT INTO `ams_session` (`id`, `name`, `school_id`, `date`, `status`) VALUES
(2, '2010', 4, '2014-05-20', 1),
(3, '2012', 3, '2014-05-20', 1),
(4, '2013', 3, '2014-05-23', 1),
(5, '2014', 3, '2014-06-02', 1),
(6, '2016', 3, '2014-06-03', 1),
(67, '2014 - 2015', 105949, '2015-06-30', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `ams_shift`
--

INSERT INTO `ams_shift` (`id`, `name`, `school_id`, `session_id`, `class_id`, `section_id`, `group_id`, `shift_id`, `date`, `status`) VALUES
(5, 'Morning', 105949, 67, 195, 178, 0, 0, '2015-06-30', 1),
(6, 'Day', 105949, 67, 195, 178, 0, 0, '2015-06-30', 1),
(7, 'Morning', 105949, 67, 195, 179, 0, 0, '2015-06-30', 1),
(8, 'Day', 105949, 67, 195, 179, 0, 0, '2015-06-30', 1),
(9, 'Morning', 105949, 67, 196, 180, 0, 0, '2015-06-30', 1),
(10, 'Day', 105949, 67, 196, 180, 0, 0, '2015-06-30', 1),
(11, 'Morning', 105949, 67, 196, 181, 0, 0, '2015-06-30', 1),
(12, 'Day', 105949, 67, 196, 181, 0, 0, '2015-06-30', 1),
(13, 'Morning', 105949, 67, 197, 182, 0, 0, '2015-06-30', 1),
(14, 'Day', 105949, 67, 197, 182, 0, 0, '2015-06-30', 1),
(15, 'Morning', 105949, 67, 197, 183, 0, 0, '2015-06-30', 1),
(16, 'Day', 105949, 67, 197, 183, 0, 0, '2015-06-30', 1),
(17, 'Morning', 105949, 67, 198, 184, 0, 0, '2015-06-30', 1),
(18, 'Day', 105949, 67, 198, 184, 0, 0, '2015-06-30', 1),
(19, 'Morning', 105949, 67, 198, 185, 0, 0, '2015-06-30', 1),
(20, 'Day', 105949, 67, 198, 185, 0, 0, '2015-06-30', 1),
(21, 'Morning', 105949, 67, 199, 186, 0, 0, '2015-06-30', 1),
(22, 'Day', 105949, 67, 199, 186, 0, 0, '2015-06-30', 1),
(23, 'Morning', 105949, 67, 199, 187, 0, 0, '2015-06-30', 1),
(24, 'Day', 105949, 67, 199, 187, 0, 0, '2015-06-30', 1),
(25, 'Morning', 105949, 67, 200, 188, 0, 0, '2015-06-30', 1),
(26, 'Day', 105949, 67, 200, 188, 0, 0, '2015-06-30', 1),
(27, 'Morning', 105949, 67, 200, 189, 0, 0, '2015-06-30', 1),
(28, 'Day', 105949, 67, 200, 189, 0, 0, '2015-06-30', 1),
(29, 'Morning', 105949, 67, 201, 190, 0, 0, '2015-06-30', 1),
(30, 'Day', 105949, 67, 201, 190, 0, 0, '2015-06-30', 1),
(31, 'Morning', 105949, 67, 201, 191, 0, 0, '2015-06-30', 1),
(32, 'Day', 105949, 67, 201, 191, 0, 0, '2015-06-30', 1),
(33, 'Morning', 105949, 67, 202, 192, 0, 0, '2015-06-30', 1),
(34, 'Day', 105949, 67, 202, 192, 0, 0, '2015-06-30', 1),
(35, 'Morning', 105949, 67, 202, 193, 0, 0, '2015-06-30', 1),
(36, 'Day', 105949, 67, 202, 193, 0, 0, '2015-06-30', 1),
(37, 'Morning', 105949, 67, 203, 194, 0, 0, '2015-06-30', 1),
(38, 'Day', 105949, 67, 203, 194, 0, 0, '2015-06-30', 1),
(39, 'Morning', 105949, 67, 203, 195, 0, 0, '2015-06-30', 1),
(40, 'Day', 105949, 67, 203, 195, 0, 0, '2015-06-30', 1),
(41, 'Morning', 105949, 67, 204, 196, 0, 0, '2015-06-30', 1),
(42, 'Day', 105949, 67, 204, 196, 0, 0, '2015-06-30', 1),
(43, 'Morning', 105949, 67, 204, 197, 0, 0, '2015-06-30', 1),
(44, 'Day', 105949, 67, 204, 197, 0, 0, '2015-06-30', 1);

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
  `account_name_estd` varchar(255) NOT NULL,
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
  `bank_name` text NOT NULL,
  `ac` text NOT NULL,
  `branch_name` text NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `ams_singup`
--

INSERT INTO `ams_singup` (`id`, `eiin_number`, `acount_type`, `servic_type`, `acount_name`, `account_name_estd`, `address`, `packs_type`, `country`, `divition`, `city`, `zip_code`, `sms_sander_id`, `choos`, `name`, `email`, `gender`, `number`, `dob`, `time`, `password`, `board_id`, `photo`, `bank_name`, `ac`, `branch_name`, `date`, `status`) VALUES
(47, '105949', 'Educational Institutes', 'Bulk SMS', 'Natopara Girls Dakhil Madrasha', 'ESTD - 1994', 'Natopara, Natopara, Comilla Sadar Dokhin, Comilla', 1, '1', '3', '26', '45', 'NGDM', 'Computer Teacher', 'Md Meer Hossain', 'ngdm@skeletonit.com', 'Male', '01814706541', '2015-06-30', '', '123456', 0, 'big_1435839494_natopara-logo.png', '', '', '', '2015-06-29', 3);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ams_stationery`
--

INSERT INTO `ams_stationery` (`id`, `name`, `taka`, `school_id`, `date`, `status`) VALUES
(1, 'Empty-1', '100', 3, '2014-06-01', 1),
(2, 'Bill_1', '100', 3, '2014-06-01', 1),
(4, 'Bill_2', '100', 3, '2014-06-01', 1),
(5, 'Bill_3', '200', 3, '2014-06-01', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `ams_student_group`
--

INSERT INTO `ams_student_group` (`id`, `name`, `shift_id`, `section_id`, `school_id`, `date`, `status`, `class_id`, `session_id`) VALUES
(1, 'Empty-1', 1, 1, 3, '2014-05-20', 1, 5, 1),
(2, 'WoWW', 4, 4, 3, '2014-05-20', 1, 12, 5),
(3, 'None', 3, 3, 3, '2014-05-22', 1, 9, 3),
(4, 'None', 4, 4, 3, '2014-06-02', 1, 12, 5),
(155, 'None', 0, 0, 105949, '2015-06-30', 1, 195, 67),
(156, 'None', 0, 0, 105949, '2015-06-30', 1, 196, 67),
(157, 'None', 0, 0, 105949, '2015-06-30', 1, 197, 67),
(158, 'None', 0, 0, 105949, '2015-06-30', 1, 198, 67),
(159, 'None', 0, 0, 105949, '2015-06-30', 1, 199, 67),
(160, 'None', 0, 0, 105949, '2015-06-30', 1, 200, 67),
(161, 'None', 0, 0, 105949, '2015-06-30', 1, 201, 67),
(162, 'None', 0, 0, 105949, '2015-06-30', 1, 202, 67),
(163, 'Science', 0, 0, 105949, '2015-06-30', 1, 203, 67),
(165, 'Arts', 0, 0, 105949, '2015-06-30', 1, 203, 67),
(166, 'Business Studies', 0, 0, 105949, '2015-06-30', 1, 203, 67),
(167, 'Science', 0, 0, 105949, '2015-06-30', 1, 204, 67),
(168, 'Arts', 0, 0, 105949, '2015-06-30', 1, 204, 67),
(169, 'Business Studies', 0, 0, 105949, '2015-06-30', 1, 204, 67);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ams_student_list`
--
CREATE TABLE IF NOT EXISTS `ams_student_list` (
`id` int(20)
,`name` varchar(200)
,`admition` varchar(200)
,`school_id` int(20)
,`class` varchar(200)
,`class_id` int(20)
,`roll` varchar(200)
,`section` varchar(200)
,`section_id` int(20)
,`session` varchar(200)
,`session_id` int(20)
,`shift` varchar(200)
,`shift_id` int(20)
,`group` varchar(200)
,`group_id` int(20)
,`dob` varchar(200)
,`blood_group` varchar(200)
,`gender` varchar(200)
,`nationality` varchar(200)
,`religion` varchar(200)
,`language` varchar(200)
,`mother_name` varchar(200)
,`father_name` varchar(200)
,`guardian_name` varchar(200)
,`occupation` varchar(200)
,`income` varchar(200)
,`number` varchar(200)
,`serial_number` varchar(200)
,`present_address` varchar(200)
,`permanent_address` varchar(200)
,`state` varchar(200)
,`city` int(20)
,`zip_code` varchar(200)
,`countryr` varchar(200)
,`phone_number` varchar(200)
,`email` varchar(200)
,`photo` varchar(200)
,`user_id` int(20)
,`date` varchar(200)
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `ams_student_login`
--
CREATE TABLE IF NOT EXISTS `ams_student_login` (
`id` int(20)
,`name` varchar(200)
,`admition` varchar(200)
,`school_id` int(20)
,`class_id` int(20)
,`roll` varchar(200)
,`section_id` int(20)
,`session_id` int(20)
,`shift_id` int(20)
,`group_id` int(20)
,`dob` varchar(200)
,`blood_group` varchar(200)
,`gender` varchar(200)
,`nationality` varchar(200)
,`religion` varchar(200)
,`language` varchar(200)
,`mother_name` varchar(200)
,`father_name` varchar(200)
,`guardian_name` varchar(200)
,`occupation` varchar(200)
,`income` varchar(200)
,`number` varchar(200)
,`serial_number` varchar(200)
,`present_address` varchar(200)
,`permanent_address` varchar(200)
,`state` varchar(200)
,`city` int(20)
,`zip_code` varchar(200)
,`countryr` varchar(200)
,`phone_number` varchar(200)
,`email` varchar(200)
,`photo` varchar(200)
,`password` varchar(200)
,`date` varchar(200)
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `ams_subject`
--

CREATE TABLE IF NOT EXISTS `ams_subject` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `code` varchar(20) NOT NULL,
  `section_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `shift_id` int(20) NOT NULL,
  `session_id` int(20) NOT NULL,
  `school_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `satuts` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=441 ;

--
-- Dumping data for table `ams_subject`
--

INSERT INTO `ams_subject` (`id`, `name`, `code`, `section_id`, `class_id`, `shift_id`, `session_id`, `school_id`, `group_id`, `date`, `satuts`) VALUES
(437, 'Bangla', '101', 0, 195, 0, 67, 105949, 155, '2015-06-30', 1),
(438, 'English', '102', 0, 195, 0, 67, 105949, 155, '2015-06-30', 1),
(439, 'Math', '103', 0, 195, 0, 67, 105949, 155, '2015-06-30', 1),
(440, 'Islamic Studies', '104', 0, 195, 0, 67, 105949, 155, '2015-06-30', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Table structure for table `cms_admission_info`
--

CREATE TABLE IF NOT EXISTS `cms_admission_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `name` longtext,
  `year` int(4) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cms_admission_info`
--

INSERT INTO `cms_admission_info` (`id`, `school_id`, `name`, `year`, `date`, `status`) VALUES
(2, 105949, 'sdsad d a a dasdas', 2015, '2015-06-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_event`
--

CREATE TABLE IF NOT EXISTS `cms_event` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `name` longtext,
  `detail` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_event`
--

INSERT INTO `cms_event` (`id`, `school_id`, `name`, `detail`, `date`, `status`) VALUES
(1, 105949, 'event 1', 'asdasdasdasc ', '2015-07-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_event_photo`
--

CREATE TABLE IF NOT EXISTS `cms_event_photo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `eid` longtext,
  `photo` text,
  `photo2` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `cms_event_photo`
--

INSERT INTO `cms_event_photo` (`id`, `school_id`, `eid`, `photo`, `photo2`, `date`, `status`) VALUES
(2, 105949, '1', 'event_1466113813IMG_20150129_142547.jpg', 'event_1466113813IMG_20150129_142547.jpg', '2016-06-17', 1),
(3, 105949, '1', 'event_1466113821IMG_20150221_105527.jpg', 'event_1466113821IMG_20150221_105527.jpg', '2016-06-17', 1),
(4, 105949, '1', 'event_1466113830IMG_20150221_105630.jpg', 'event_1466113830IMG_20150221_105630.jpg', '2016-06-17', 1),
(5, 105949, '1', 'event_1468559067IMG_20160226_073625.jpg', 'event_1468559068IMG_20160226_073625.jpg', '2016-07-15', 1),
(6, 105949, '1', 'event_1468559212MIRU (22).jpg', 'event_1468559212MIRU (22).jpg', '2016-07-15', 1),
(8, 105949, '1', 'event_1468559511MIRU (3).jpg', 'event_1468559511MIRU (3).jpg', '2016-07-15', 1),
(9, 105949, '1', 'event_1468561227mmm.jpg', 'event_1468561227mmm.jpg', '2016-07-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_history`
--

CREATE TABLE IF NOT EXISTS `cms_history` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `name` longtext,
  `photo` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms_keyperson_chairman`
--

CREATE TABLE IF NOT EXISTS `cms_keyperson_chairman` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `name` longtext,
  `degree` longtext,
  `photo` longtext,
  `message` longtext,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_keyperson_chairman`
--

INSERT INTO `cms_keyperson_chairman` (`id`, `school_id`, `name`, `degree`, `photo`, `message`, `date`, `status`) VALUES
(1, 105949, 'Mr. Md. Shaiful Alam', 'None', 'chairman_1435650891chairman.jpg', 'SayÂ´s :\r\nOn behalf of all staffs and executive members I would like to welcome you to Natopara Girls Dakhil Madrasha. At NGDM we aim to give every child the best start possible to their education. The Early Years are crucial to a child''s development and our Foundation Stage and Key Stage enable the children to get their Madrasha careers off to a flying start.\r\n\r\nThroughout the Madrasha we want our students to enjoy a wide range of experiences which bring the curriculum to life and make learning fun. All our staff work hard to ensure the best possible quality of education for the students .\r\n\r\nWe are always happy to share information about our programs, and we invite you to visit us at any time.', '2015-06-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_keyperson_managing_committee`
--

CREATE TABLE IF NOT EXISTS `cms_keyperson_managing_committee` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `photo` longtext,
  `message` longtext,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_keyperson_managing_committee`
--

INSERT INTO `cms_keyperson_managing_committee` (`id`, `school_id`, `name`, `position`, `degree`, `photo`, `message`, `date`, `status`) VALUES
(1, 105949, 'Mr. Mohammed  Shahed Iqbal', 'Secretary', 'M.A. (English)', 'managing_committee_1435651704secratary.jpg', NULL, '2015-06-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_keyperson_managing_office_staff`
--

CREATE TABLE IF NOT EXISTS `cms_keyperson_managing_office_staff` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `photo` longtext,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cms_keyperson_managing_office_staff`
--

INSERT INTO `cms_keyperson_managing_office_staff` (`id`, `school_id`, `name`, `position`, `photo`, `date`, `status`) VALUES
(2, 105949, 'Md. Ibrahim', 'Office Boy', 'office_staff_1435653049ibrahim.jpg', '2015-06-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_keyperson_principle`
--

CREATE TABLE IF NOT EXISTS `cms_keyperson_principle` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `photo` longtext,
  `message` longtext,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_keyperson_principle`
--

INSERT INTO `cms_keyperson_principle` (`id`, `school_id`, `name`, `position`, `degree`, `photo`, `message`, `date`, `status`) VALUES
(1, 105949, 'Mr. Md. Salehuddin', NULL, 'M. Com (Accounting)', 'chairman_1435652045principal.jpg', 'SayÂ´s :\r\nOn behalf of all staffs and executive members I would like to welcome you to Natopara Girls Dakhil Madrasha. At CDSC we aim to give every child the best start possible to their education. The Early Years are crucial to a child''s development and our Foundation Stage and Key Stage enable the children to get their Madrasha careers off to a flying start.\r\n\r\nThroughout the Madrasha we want our students to enjoy a wide range of experiences which bring the curriculum to life and make learning fun. All our staff work hard to ensure the best possible quality of education for the students .\r\n\r\nWe are always happy to share information about our programs, and we invite you to visit us at any time.', '2015-06-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_keyperson_teacher`
--

CREATE TABLE IF NOT EXISTS `cms_keyperson_teacher` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `photo` longtext,
  `message` longtext,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cms_keyperson_teacher`
--

INSERT INTO `cms_keyperson_teacher` (`id`, `school_id`, `name`, `subject`, `position`, `degree`, `photo`, `message`, `date`, `status`) VALUES
(1, 105949, 'Mr. Abdullah Al Mamun', 'Math', 'Teacher', 'M. Com (Accounting)', 'managing_committee_1435652731g1411328720_1.jpg', NULL, '2015-06-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_mision`
--

CREATE TABLE IF NOT EXISTS `cms_mision` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `name` longtext,
  `photo` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cms_mision`
--

INSERT INTO `cms_mision` (`id`, `school_id`, `name`, `photo`, `date`, `status`) VALUES
(4, 105949, 'Our mission is to produce highly skilled manpower, visionary leaders and enlightened citizens by imparting high quality education through useful research. We are committed to developing human capital by sharpening creative thinking. Besides creation and diffusion of knowledge, our mission includes promotion of humanism and peace. As a part of social component, we endeavor to induce changes for betterment of the society as a whole through educational services. ', 'mission_1435647561cresce2.png.jpg', '2015-06-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_quicklink`
--

CREATE TABLE IF NOT EXISTS `cms_quicklink` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `name` longtext,
  `link` longtext,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cms_quicklink`
--

INSERT INTO `cms_quicklink` (`id`, `school_id`, `name`, `link`, `date`, `status`) VALUES
(1, 105949, 'Education Board Result', 'http://www.educationboardresults.gov.bd/regular/index.php', '2015-06-30', 1),
(2, 105949, 'British Council', 'http://www.britishcouncil.org/', '2015-06-30', 1),
(3, 105949, 'Inter Admission Result', 'http://xiclassadmission.gov.bd/board/cr', '2015-06-30', 1),
(4, 105949, 'Inter Admission ', 'http://xiclassadmission.gov.bd', '2015-06-30', 1),
(5, 105949, 'Google', 'http://www.google.com/', '2015-06-30', 1),
(6, 105949, 'Facebook', 'http://www.facebook.com/', '2015-06-30', 1),
(7, 105949, 'Dhaka University', 'http://www.du.ac.bd/', '2015-06-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_slider`
--

CREATE TABLE IF NOT EXISTS `cms_slider` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `cms_slider`
--

INSERT INTO `cms_slider` (`id`, `school_id`, `name`, `photo`, `date`, `status`) VALUES
(11, 105949, 'Student Convocation', 'home_slider_1466113701IMG_20150129_142547.jpg', '2016-06-17', 1),
(12, 105949, 'Cultural Programs', 'home_slider_1466113727IMG_20150221_105527.jpg', '2016-06-17', 1),
(13, 105949, 'Cultural Programs Relation Nation', 'home_slider_1466113757IMG_20150221_105633.jpg', '2016-06-17', 1),
(15, 105949, 'Academic Building', 'home_slider_1466229341vvvvvvvvvvvvvvvvvvvvvvvvvvvv.jpg', '2016-06-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_vission`
--

CREATE TABLE IF NOT EXISTS `cms_vission` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `name` longtext,
  `photo` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cms_welcome_message`
--

CREATE TABLE IF NOT EXISTS `cms_welcome_message` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `name` longtext,
  `photo` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cms_welcome_message`
--

INSERT INTO `cms_welcome_message` (`id`, `school_id`, `name`, `photo`, `date`, `status`) VALUES
(3, 105949, 'Welcome to Natopara Girls Dakhil Madrasha, where Ã‹''Failure Is Not An Option. We thank you for visiting our website, and we are glad to have a chance to tell you about our Madrasha. It is our goal to partner with parents to create a learning environment that is engaging, challenging, and supportive. We value your child and your support and firmly believe that we provide an education which encourages many core learning values - including creativity, independence, thinking, emotional intelligence and spirituality.We believe that all students can learn, and we will create an academic environment in our classrooms that results in high levels of academic performance.\r\n\r\nOur teachers are qualified professionals committed to excellence in education. They will build on your childrenÃ¢â‚¬â„¢s current skills and help them develop the academic and social skills they need to be successful in Madrasha and in life.\r\n\r\nWe are proud of the accomplishments of our students and Madrasha. We encourage you to visit the Madrasha to see for yourself why teachers, parents, and students make Natopara Girls Dakhil Madrasha a great place to learn and grow. ', 'welcome_message_14356454571.png', '2015-06-30', 1),
(4, 105949, 'Welcome to the Convocation 2016', 'welcome_message_1477392478Storytelling-Blog-Image.jpg', '2016-10-25', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

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
(18, 'PANCHAGARH', 1, 6, '2014-07-22', 1),
(19, 'RANGPUR', 1, 6, '2014-07-15', 1),
(20, 'THAKURGAON', 1, 6, '2014-07-22', 1),
(21, 'HABIGANJ', 1, 7, '2014-07-22', 1),
(22, 'MAULVIBAZAR', 1, 7, '2014-07-22', 1),
(23, 'SUNAMGANJ', 1, 7, '2014-07-22', 1),
(24, 'SYLHET', 1, 7, '2014-07-22', 1),
(25, 'Tangail', 1, 1, '2015-01-25', 1),
(26, 'Comilla', 1, 3, '2015-01-25', 1);

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
-- Table structure for table `fees_ledger`
--

CREATE TABLE IF NOT EXISTS `fees_ledger` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `ledger_id` int(20) DEFAULT NULL,
  `percent` varchar(20) NOT NULL,
  `branch_id` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fees_ledger`
--

INSERT INTO `fees_ledger` (`id`, `session_id`, `class_id`, `group_id`, `ledger_id`, `percent`, `branch_id`, `date`, `status`) VALUES
(1, 15, 188, 147, 106, '100', 666, '2015-06-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fees_paid_ledger`
--

CREATE TABLE IF NOT EXISTS `fees_paid_ledger` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `session_id` int(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `ledger_id` int(20) DEFAULT NULL,
  `percent` varchar(20) NOT NULL,
  `branch_id` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fees_paid_ledger`
--

INSERT INTO `fees_paid_ledger` (`id`, `session_id`, `class_id`, `group_id`, `ledger_id`, `percent`, `branch_id`, `date`, `status`) VALUES
(1, 15, 188, 147, 106, '100', 666, '2015-06-09', 1),
(2, 15, 188, 147, 108, '106', 666, '2015-06-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fees_paid_ledger_amount`
--

CREATE TABLE IF NOT EXISTS `fees_paid_ledger_amount` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `student_id` int(20) DEFAULT NULL,
  `ledger_id` int(20) DEFAULT NULL,
  `session_id` int(20) DEFAULT NULL,
  `class_id` int(20) DEFAULT NULL,
  `group_id` int(20) DEFAULT NULL,
  `branch_id` int(20) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fees_paid_ledger_amount`
--

INSERT INTO `fees_paid_ledger_amount` (`id`, `student_id`, `ledger_id`, `session_id`, `class_id`, `group_id`, `branch_id`, `amount`, `date`, `status`) VALUES
(1, 66691968, 108, 15, 188, 147, 0, '100', '2015-06-15', 1),
(2, 66691968, 106, 15, 188, 147, 0, '200', '2015-06-15', 1),
(3, 66691968, 108, 15, 188, 147, 666, '106', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `fees_paid_ledger_amount_list`
--
CREATE TABLE IF NOT EXISTS `fees_paid_ledger_amount_list` (
`id` int(20)
,`student_id` int(20)
,`ledger_id` int(20)
,`session_id` int(20)
,`class_id` int(20)
,`group_id` int(20)
,`branch_id` int(20)
,`amount` varchar(255)
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` text,
  `detail` longtext,
  `file` text,
  `date` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `name`, `detail`, `file`, `date`, `status`) VALUES
(6, 'Report Chart for DREAMS TECH EIMS Software', 'Report Chart for DREAMS TECH EIMS Software of visited Institute.', '1419674363.doc', '27,Sat Dec 2014', 1),
(8, 'EIMS Software Proposal Letter', 'EIMS Software Proposal Letter for Institute', '1419674775.doc', '27,Sat Dec 2014', 1),
(14, 'EIMS Software- INVOICE ', 'EIMS Software- INVOICE for only EIMS Software', '1421859861.doc', '21,Wed Jan 2015', 1);

-- --------------------------------------------------------

--
-- Table structure for table `previous_exam`
--

CREATE TABLE IF NOT EXISTS `previous_exam` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `previous_exam`
--

INSERT INTO `previous_exam` (`id`, `user_id`, `name`, `date`, `status`) VALUES
(1, 0, 'HSC', '2015-04-14', 1),
(2, 0, 'SSC', '2015-04-14', 1),
(3, 0, 'JSC', '2015-04-14', 1),
(4, 0, 'PSC', '2015-04-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `previous_exam_board`
--

CREATE TABLE IF NOT EXISTS `previous_exam_board` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `previous_exam_board`
--

INSERT INTO `previous_exam_board` (`id`, `user_id`, `name`, `date`, `status`) VALUES
(1, 0, 'Barishal', '2015-04-14', 1),
(2, 0, 'Chittagong', '2015-04-14', 1),
(3, 0, 'Comilla', '2015-04-14', 1),
(4, 0, 'Dhaka', '2015-04-14', 1),
(5, 0, 'Dinajpur', '2015-04-14', 1),
(6, 0, 'Jessore', '2015-04-14', 1),
(7, 0, 'Rajshahi', '2015-04-14', 1),
(8, 0, 'Sylhet', '2015-04-14', 1),
(9, 0, 'Madrasah', '2015-04-14', 1),
(10, 0, 'DIBS', '2015-04-14', 1),
(11, 0, 'Vocational', '2015-04-14', 1),
(12, 0, 'BM', '2015-04-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `previous_exam_group`
--

CREATE TABLE IF NOT EXISTS `previous_exam_group` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `previous_exam_group`
--

INSERT INTO `previous_exam_group` (`id`, `user_id`, `name`, `date`, `status`) VALUES
(1, 0, 'Science', '2015-04-14', 1),
(2, 0, 'Humanities', '2015-04-14', 1),
(3, 0, 'Business Studies', '2015-04-14', 1),
(4, 0, 'Others', '2015-04-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `previous_exam_record`
--

CREATE TABLE IF NOT EXISTS `previous_exam_record` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) DEFAULT NULL,
  `admission_id` int(20) DEFAULT NULL,
  `exam_id` int(2) DEFAULT NULL,
  `institute_name` text,
  `roll` varchar(25) DEFAULT NULL,
  `regno` varchar(20) NOT NULL,
  `board_id` int(20) DEFAULT NULL,
  `group_id` int(20) DEFAULT NULL,
  `exam_session` varchar(20) NOT NULL,
  `passing_year` int(4) DEFAULT NULL,
  `gpa` varchar(5) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `previous_exam_record`
--

INSERT INTO `previous_exam_record` (`id`, `user_id`, `admission_id`, `exam_id`, `institute_name`, `roll`, `regno`, `board_id`, `group_id`, `exam_session`, `passing_year`, `gpa`, `date`, `status`) VALUES
(1, 3, 66672566, 1, 'sdasdsad', 'adasd', '', 1, 1, '', 2015, '3', '2015-04-14', 1),
(2, 3, 66604413, 1, 'sdasdsad', 'adasd', '', 1, 1, '', 2015, '3', '2015-04-14', 1),
(3, 3, 66604413, 1, 'sdasdsad', 'adasd', '', 1, 1, '', 2015, '3', '2015-04-14', 1),
(4, 3, 66604413, 1, 'sdasdsad', 'adasd', '', 1, 1, '', 2015, '3', '2015-04-14', 1),
(5, 3, 66604413, 1, 'sdasdsad', 'adasd', '', 1, 1, '', 2015, '3', '2015-04-14', 1),
(6, 3, 66604413, 1, 'sdasdsad', 'adasd', '', 1, 1, '', 2015, '3', '2015-04-14', 1),
(7, 3, 66604413, 1, 'sdasdsad', 'adasd', '', 1, 1, '', 2015, '3', '2015-04-14', 1),
(8, 3, 66604413, 1, 'sdasdsad', 'adasd', '', 1, 1, '', 2015, '3', '2015-04-14', 1),
(9, 3, 66604413, 1, 'sdasdsad', 'adasd', '', 1, 1, '', 2015, '3', '2015-04-14', 1),
(10, 3, 66604413, 1, 'sdasdsad', 'adasd', '', 1, 1, '', 2015, '3', '2015-04-14', 1),
(11, 3, 66667119, 4, 'ABCD', '123456', '', 4, 4, '', 2005, '5', '2015-04-15', 1),
(12, 3, 66667119, 3, 'ABCD', '123456', '', 4, 4, '', 2009, '5', '2015-04-15', 1),
(13, 3, 66655419, 4, 'ABC School', '123456', '', 4, 1, '', 2005, '5', '2015-04-18', 1),
(14, 3, 66655419, 3, 'ABC School', '123456', '', 4, 1, '', 2008, '5', '2015-04-18', 1),
(15, 3, 66655419, 2, 'ABC School', '123456', '', 4, 1, '', 2010, '5', '2015-04-18', 1),
(16, 3, 66655419, 1, 'ABC School & College', '123456', '', 4, 1, '', 2012, '5', '2015-04-18', 1),
(17, 3, 66609966, 2, 'Goirbang High School', '252525', '', 3, 3, '', 2006, '4.00', '2015-04-18', 1),
(18, 3, 66698585, 2, 'sfdvsdvvds', 'sdfdfd', '', 4, 3, '', 2009, '5', '2015-04-19', 1),
(19, 3, 66679085, 2, 'asas', '4344334', '', 3, 1, '', 2012, '4', '2015-04-20', 1),
(20, 3, 66640171, 1, 'zzxczx', '3242', '', 1, 2, '2015', 2015, '4', '2015-04-23', 1),
(21, 3, 66698796, 1, 'sasdsads', '23432', '', 1, 1, '2015', 2015, '3', '2015-04-23', 1),
(22, 3, 66698796, 2, 'sasdsads', '23432', '', 1, 1, '2015', 2015, '3', '2015-04-23', 1),
(23, 3, 66698796, 3, 'sasdsads', '23432', '', 1, 1, '2015', 2015, '3', '2015-04-23', 1),
(24, 3, 66698796, 4, 'sasdsads', '23432', '', 1, 1, '2015', 2015, '3', '2015-04-23', 1),
(25, 3, 66652407, 2, 'sdasdsad', '123456', '', 2, 2, '2014-2015', 2013, '3', '2015-06-01', 1),
(26, 3, 66652407, 1, 'sdasdsad', '123456', '123213', 2, 2, '2014-2015', 2013, '3', '2015-06-01', 1),
(27, 3, 66664681, 4, 'ABCD', '123456', '', 3, 1, '', 2015, '3', '2015-06-02', 1),
(28, 3, 66677011, 1, 'ABCD', '123456', '435435', 3, 1, '2005-2006', 2009, '3', '2015-06-04', 1),
(29, 47, 2147483647, 4, 'Premnol High School', '101', '100', 3, 3, '2011-2012', 2012, '3.19', '2015-06-30', 1),
(30, 47, 2147483647, 4, 'Premnol High School', '112233', '223344', 3, 4, '2002-2203', 2005, '3.50', '2015-07-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `eiin_number` varchar(255) NOT NULL,
  `phone1` longtext,
  `sms` text,
  `time` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `api_status` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=911 ;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `eiin_number`, `phone1`, `sms`, `time`, `date`, `api_status`) VALUES
(1, '666', '8801927608261', 'hi fahad this is a test sms', '21:35:33 PM', '2014-07-26', '1'),
(2, '666', '8801927608261', 'hi fahad website', '22:35:29 PM', '2014-07-25', '0'),
(3, '666', '8801927608261', 'hi website', '22:37:29 PM', '2014-07-25', '0'),
(4, '666', '8801927608261', 'hi fahad\r\n', '22:38:09 PM', '2014-07-25', '0'),
(5, '666', '8801927608261', 'hi fahad dreams', '22:40:24 PM', '2014-07-25', '1'),
(6, '666', '8801927608261', 'hi fahad dreams', '22:40:25 PM', '2014-07-25', '1'),
(7, '666', '8801927608261', 'hi fahad dreams', '22:40:26 PM', '2014-07-25', '1'),
(8, '666', '8801927608261', 'HI Mama This is a Test SMS From Dreams Tech Please Visit Your Website.', '22:43:10 PM', '2014-07-25', '1'),
(9, '666', '8801671448829', 'HI Mama This is a Test SMS From Dreams Tech Please Visit Your Website.', '22:43:11 PM', '2014-07-25', '1'),
(10, '666', '8801927608261', 'Mama SMS Ki Paichen Taratari Amk Janan.', '23:06:12 PM', '2014-07-25', '1'),
(11, '666', '8801671448829', 'Mama SMS Ki Paichen Taratari Amk Janan.', '23:08:13 PM', '2014-07-25', '0'),
(12, '666', '8801674931139', 'Mama SMS Ki Paichen Taratari Amk Janan.', '23:08:17 PM', '2014-07-25', '1'),
(13, '666', '8801671655623', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE)\r\nWe will start our program after EID holiday Insha-Allah.\r\nPlz. Visit our website...\r\nFrom: Sohel Khan', '12:40:42 PM', '2014-07-26', '0'),
(14, '666', '8801553363017', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE)\r\nWe will start our program after EID holiday Insha-Allah.\r\nPlz. Visit our website...\r\nFrom: Sohel Khan', '12:40:44 PM', '2014-07-26', '0'),
(15, '666', '8801911777406', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE)\r\nWe will start our program after EID holiday Insha-Allah.\r\nPlz. Visit our website...\r\nFrom: Sohel Khan', '12:40:45 PM', '2014-07-26', '0'),
(16, '666', '8801828623201', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE)\r\nWe will start our program after EID holiday Insha-Allah.\r\nPlz. Visit our website...\r\nFrom: Sohel Khan', '12:40:45 PM', '2014-07-26', '0'),
(17, '666', '8801557752304', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE)\r\nWe will start our program after EID holiday Insha-Allah.\r\nPlz. Visit our website...\r\nFrom: Sohel Khan', '12:40:46 PM', '2014-07-26', '0'),
(18, '666', '8801553363017', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website... From: Sohel Khan', '12:44:35 PM', '2014-07-26', '0'),
(19, '666', '8801671448829', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website... From: Sohel Khan', '12:46:04 PM', '2014-07-26', '0'),
(20, '666', '8801927608261', 'hi this is a system sms from dreamstech.net\r\n', '12:52:24 PM', '2014-07-26', '1'),
(21, '666', '8801671448829', 'hi this is a system sms from dreamstech.net\r\n', '12:52:24 PM', '2014-07-26', '0'),
(22, '666', '8801911353197', 'this is a test sms from website\r\n', '12:56:29 PM', '2014-07-26', '1'),
(23, '666', '8801927608261', 'this is a test sms from website\r\n', '12:56:30 PM', '2014-07-26', '1'),
(24, '666', '8801553363017', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website... From: Sohel Khan', '13:03:02 PM', '2014-07-26', '0'),
(25, '666', '8801671448829', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website... From: Sohel Khan', '13:03:02 PM', '2014-07-26', '0'),
(26, '6556', '8801553363017', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website... From: Sohel Khan', '13:27:58 PM', '2014-07-26', '0'),
(27, '666', '8801671655623', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website... ', '05:14:58 AM', '2014-07-26', '1'),
(28, '666', '8801553363017', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website... ', '05:15:00 AM', '2014-07-26', '1'),
(29, '666', '8801911777406', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website... ', '05:15:01 AM', '2014-07-26', '1'),
(30, '666', '8801828623201', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website... ', '05:15:02 AM', '2014-07-26', '1'),
(31, '666', '8801557752304', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website... ', '05:15:07 AM', '2014-07-26', '1'),
(32, '666', '8801671448829', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website... ', '05:15:08 AM', '2014-07-26', '1'),
(33, '666', '8801927608261', 'We are successfully complete our "DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website... ', '05:15:09 AM', '2014-07-26', '1'),
(34, '6556', '8801553363017', 'We are successfully complete our (DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website...', '05:18:17 AM', '2014-07-26', '0'),
(35, '6556', '8801671448829', 'We are successfully complete our (DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website...', '05:19:38 AM', '2014-07-26', '0'),
(36, '6556', '8801911353197', 'We are successfully complete our (DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website...', '05:21:38 AM', '2014-07-26', '0'),
(37, '6556', '8801911353197', 'We are successfully complete our (DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website...', '05:23:46 AM', '2014-07-26', '1'),
(38, '6556', '8801927608261', 'We are successfully complete our (DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website...', '05:23:47 AM', '2014-07-26', '1'),
(39, '6556', '8801911353197', 'We are successfully complete our (DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website...', '05:25:15 AM', '2014-07-26', '0'),
(40, '6556', '8801927608261', 'We are successfully complete our (DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website...', '05:25:15 AM', '2014-07-26', '0'),
(41, '6556', '8801671448829', 'We are successfully complete our (DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website...', '05:26:58 AM', '2014-07-26', '1'),
(42, '6556', '8801553363017', 'We are successfully complete our (DREAMS TECH EIMS SOFTWARE) We will start our program after EID holiday Insha-Allah. Plz. Visit our website...', '05:26:59 AM', '2014-07-26', '1'),
(43, '666', '8801715025701', 'EID MUBARAK\r\nWe are successfully complete our software..\r\nWe will start our program after Eid\r\nPlease visit our website\r\nwww.dreamstech.net', '22:31:11 PM', '2014-07-26', '0'),
(44, '666', '8801670219405', 'EID MUBARAK\r\nWe are successfully complete our software..\r\nWe will start our program after Eid\r\nPlease visit our website\r\nwww.dreamstech.net', '22:33:12 PM', '2014-07-26', '0'),
(45, '6556', '8801671448829', 'EID MUBARAK\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now and always.\r\nEid Mubarak To You & Your Family...\r\n', '01:08:11 AM', '2014-07-27', '2'),
(46, '6556', '8801671448829', 'EID MUBARAK May the Blessing of ALLAH Fill your life with happiness and open all doors of success now and always. Eid Mubarak To You & Your Family....', '01:10:26 AM', '2014-07-27', '2'),
(47, '6556', '8801671448829', 'EID MUBARAK May the Blessing of ALLAH Fill your life with happiness and open all doors of success now and always. Eid Mubarak To You & Your Family.', '01:12:49 AM', '2014-07-27', '2'),
(48, '666', '8801553363017', 'EID MUBARAK May the Blessing of ALLAH Fill your life with happiness and open all doors of success now and always. Eid Mubarak To You & Your Family...', '01:14:17 AM', '2014-07-27', '1'),
(49, '666', '8801671448829', 'EID MUBARAK\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now and always.\r\nEid Mubarak To You & Your Family...', '01:16:42 AM', '2014-07-27', '1'),
(50, '666', '8801553363017', 'EID MUBARAK\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now and always.\r\nEid Mubarak To You & Your Family...', '01:18:49 AM', '2014-07-27', '0'),
(51, '666', '8801553363017', 'EID MUBARAK\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now and always.\r\nEid Mubarak To You & Your Family...', '01:20:30 AM', '2014-07-27', '0'),
(52, '666', '8801553363017', 'EID MUBARAK\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now and always.\r\nEid Mubarak To You & Your Family...', '01:21:34 AM', '2014-07-27', '0'),
(53, '6556', '8801557752304', 'May Allah bless you on this auspicious day of Eid & May it be a new beginning of greater prosperity, success & happiness.\r\nWish you a Happy Eid MUBARAK', '00:58:31 AM', '2014-07-29', '1'),
(54, '666', '8801557752304', 'May Allah bless you on this auspicious day of Eid & May it be new beginning of greater prosperity success & happiness.\r\nWish you a Happy Eid Mubarak.\r\n\r\n(SOHEL)', '09:43:58 AM', '2014-07-29', '0'),
(55, '666', '8801671448829', 'May Allah bless you on this auspicious day of Eid & May it be new beginning of greater prosperity success & happiness.\r\nWish you a Happy Eid Mubarak.\r\n\r\n(SOHEL)', '09:43:58 AM', '2014-07-29', '0'),
(56, '666', '8801553363017', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now and always. Eid Mubarak To You & Your Family.\r\n(SOHEL)', '09:51:36 AM', '2014-07-29', '1'),
(57, '666', '8801671655623', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:21 AM', '2014-07-29', '1'),
(58, '666', '8801911777406', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:23 AM', '2014-07-29', '1'),
(59, '666', '8801828623201', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:25 AM', '2014-07-29', '1'),
(60, '666', '8801557752304', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:27 AM', '2014-07-29', '1'),
(61, '666', '8801927608261', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:29 AM', '2014-07-29', '1'),
(62, '666', '8801715025701', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:31 AM', '2014-07-29', '1'),
(63, '666', '8801670219405', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:33 AM', '2014-07-29', '1'),
(64, '666', '8801718334791', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:34 AM', '2014-07-29', '1'),
(65, '666', '8801741329665', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:40 AM', '2014-07-29', '1'),
(66, '666', '8801674202550', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:41 AM', '2014-07-29', '1'),
(67, '666', '8801719639573', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:42 AM', '2014-07-29', '1'),
(68, '666', '8801927320402', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:44 AM', '2014-07-29', '1'),
(69, '666', '8801675134076', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:51 AM', '2014-07-29', '1'),
(70, '666', '8801711442688', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:52 AM', '2014-07-29', '1'),
(71, '666', '8801673910915', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:54 AM', '2014-07-29', '1'),
(72, '666', '8801711580703', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:55 AM', '2014-07-29', '1'),
(73, '666', '8801675127655', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:56:58 AM', '2014-07-29', '1'),
(74, '666', '8801675838235', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:57:00 AM', '2014-07-29', '1'),
(75, '666', '8801711055206', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:57:02 AM', '2014-07-29', '1'),
(76, '666', '8801711939470', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:57:10 AM', '2014-07-29', '1'),
(77, '666', '8801819157297', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:57:32 AM', '2014-07-29', '1'),
(78, '666', '8801686963467', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:57:47 AM', '2014-07-29', '1'),
(79, '666', '8801680362213', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:57:50 AM', '2014-07-29', '1'),
(80, '666', '8801715157456', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:57:52 AM', '2014-07-29', '1'),
(81, '666', '8801913928020', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:57:54 AM', '2014-07-29', '1'),
(82, '666', '8801819865557', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:57:55 AM', '2014-07-29', '1'),
(83, '666', '8801717009533', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:00 AM', '2014-07-29', '1'),
(84, '666', '8801688742482', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:02 AM', '2014-07-29', '1'),
(85, '666', '8801670857221', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:06 AM', '2014-07-29', '1'),
(86, '666', '8801717508808', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:11 AM', '2014-07-29', '1'),
(87, '666', '8801615768419', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:13 AM', '2014-07-29', '1'),
(88, '666', '8801715972131', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:15 AM', '2014-07-29', '1'),
(89, '666', '8801683019944', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:18 AM', '2014-07-29', '1'),
(90, '666', '8801927608261', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:21 AM', '2014-07-29', '1'),
(91, '666', '8801727565570', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:22 AM', '2014-07-29', '1'),
(92, '666', '8801675180510', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:24 AM', '2014-07-29', '1'),
(93, '666', '8801925778837', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:25 AM', '2014-07-29', '1'),
(94, '666', '8801830803010', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:27 AM', '2014-07-29', '1'),
(95, '666', '8801818929292', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:29 AM', '2014-07-29', '1'),
(96, '666', '8801672409542', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:42 AM', '2014-07-29', '1'),
(97, '666', '8801779199765', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:54 AM', '2014-07-29', '1'),
(98, '666', '8801674089401', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:58:58 AM', '2014-07-29', '1'),
(99, '666', '8801671486127', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:00 AM', '2014-07-29', '1'),
(100, '666', '8801674303234', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:01 AM', '2014-07-29', '1'),
(101, '666', '8801683032576', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:07 AM', '2014-07-29', '1'),
(102, '666', '8801937194480', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:21 AM', '2014-07-29', '1'),
(103, '666', '8801677689818', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:22 AM', '2014-07-29', '1'),
(104, '666', '8801675229920', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:25 AM', '2014-07-29', '1'),
(105, '666', '8801677069874', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:30 AM', '2014-07-29', '1'),
(106, '666', '8801676807028', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:37 AM', '2014-07-29', '1'),
(107, '666', '8801727772208', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:41 AM', '2014-07-29', '1'),
(108, '666', '8801911338233', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:49 AM', '2014-07-29', '1'),
(109, '666', '8801681626857', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:50 AM', '2014-07-29', '1'),
(110, '666', '8801921012951', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:53 AM', '2014-07-29', '1'),
(111, '666', '8801670760000', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:54 AM', '2014-07-29', '1'),
(112, '666', '8801611202800', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:56 AM', '2014-07-29', '1'),
(113, '666', '8801721374786', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:58 AM', '2014-07-29', '1'),
(114, '666', '8801672049119', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '09:59:59 AM', '2014-07-29', '1'),
(115, '666', '8801681495975', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:06 AM', '2014-07-29', '1'),
(116, '666', '8801670219405', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:16 AM', '2014-07-29', '1'),
(117, '666', '8801534971493', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:18 AM', '2014-07-29', '1'),
(118, '666', '8801711579184', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:19 AM', '2014-07-29', '1'),
(119, '666', '8801722404437', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:21 AM', '2014-07-29', '1'),
(120, '666', '8801689495878', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:22 AM', '2014-07-29', '1'),
(121, '666', '8801713080293', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:30 AM', '2014-07-29', '1'),
(122, '666', '8801673884311', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:38 AM', '2014-07-29', '1'),
(123, '666', '8801611710011', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:47 AM', '2014-07-29', '1'),
(124, '666', '8801687945589', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:48 AM', '2014-07-29', '1'),
(125, '666', '8801710757447', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:50 AM', '2014-07-29', '1'),
(126, '666', '8801913048451', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:51 AM', '2014-07-29', '1'),
(127, '666', '8801683071522', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:53 AM', '2014-07-29', '1'),
(128, '666', '8801711011540', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:55 AM', '2014-07-29', '1'),
(129, '666', '8801672702625', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:00:56 AM', '2014-07-29', '1'),
(130, '666', '8801717792919', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:01:01 AM', '2014-07-29', '1'),
(131, '666', '8801713366652', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:01:10 AM', '2014-07-29', '1'),
(132, '666', '8801717944450', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:01:12 AM', '2014-07-29', '1'),
(133, '666', '8801914258075', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:01:15 AM', '2014-07-29', '1'),
(134, '666', '880191157048', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:01:19 AM', '2014-07-29', '0'),
(135, '666', '8801675381065', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:01:21 AM', '2014-07-29', '1'),
(136, '666', '8801914635421', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:01:24 AM', '2014-07-29', '1'),
(137, '666', '8801191225333', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:01:29 AM', '2014-07-29', '1'),
(138, '666', '8801937147677', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:01:32 AM', '2014-07-29', '1'),
(139, '666', '8801716487047', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:01:41 AM', '2014-07-29', '1'),
(140, '666', '8801670052859', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:02:00 AM', '2014-07-29', '1'),
(141, '666', '8801717012840', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:02:11 AM', '2014-07-29', '1'),
(142, '666', '8801729334016', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:02:12 AM', '2014-07-29', '1'),
(143, '666', '8801720075880', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:02:14 AM', '2014-07-29', '1'),
(144, '666', '8801914228678', 'EID MUBARAK.\r\nMay the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always.\r\nEid Mubarak To You & Your Family.\r\n(SOHEL)', '10:02:15 AM', '2014-07-29', '1'),
(145, '666', '8801730451925', 'EID MUBARAK', '20:06:47 PM', '2014-07-29', '1'),
(146, '666', '8801730451925', 'EID MUBARAK.\r\n2014', '20:12:57 PM', '2014-07-29', '1'),
(147, '666', '8801713064615', 'EID MUBARAK.\r\n2014', '20:13:02 PM', '2014-07-29', '1'),
(148, '666', '8801818728407', 'EID MUBARAK.\r\n2014', '20:13:04 PM', '2014-07-29', '1'),
(149, '666', '8801818728407', 'EID MUBARAK-2014\r\n', '21:01:43 PM', '2014-07-29', '1'),
(150, '666', '8801717288133', 'EID MUBARAK-2014\r\n', '21:01:45 PM', '2014-07-29', '1'),
(151, '666', '8801710767692', 'EID MUBARAK-2014\r\n', '21:01:46 PM', '2014-07-29', '1'),
(152, '666', '8801818728407', 'EID MUBARAK- 2014', '21:03:51 PM', '2014-07-29', '1'),
(153, '666', '8801717288133', 'EID MUBARAK- 2014', '21:03:52 PM', '2014-07-29', '1'),
(154, '666', '8801710767692', 'EID MUBARAK- 2014', '21:03:54 PM', '2014-07-29', '1'),
(155, '6556', '8801671655623', 'EID MUBARAK- 2014', '22:46:59 PM', '2014-07-29', '0'),
(156, '6556', '8801671655623', 'EID MUBARAK- 2014', '22:48:42 PM', '2014-07-29', '1'),
(157, '6556', '8801671448829', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '04:42:36 AM', '2014-07-30', '1'),
(158, '6556', '8801671655623', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '04:44:37 AM', '2014-07-30', '0'),
(159, '6556', '8801953602646', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '04:46:37 AM', '2014-07-30', '0'),
(160, '6556', '8801682542128', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '04:48:37 AM', '2014-07-30', '0'),
(161, '6556', '8801682994599', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '04:50:38 AM', '2014-07-30', '0'),
(162, '6556', '8801711579184', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '04:52:38 AM', '2014-07-30', '0'),
(163, '6556', '8801987172865', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '04:54:38 AM', '2014-07-30', '0'),
(164, '6556', '8801971482818', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '04:56:39 AM', '2014-07-30', '0'),
(165, '6556', '8801671448829', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '04:56:41 AM', '2014-07-30', '1'),
(166, '6556', '8801671655623', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '04:58:42 AM', '2014-07-30', '0'),
(167, '6556', '8801953602646', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '05:00:42 AM', '2014-07-30', '0'),
(168, '6556', '8801682542128', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '05:00:44 AM', '2014-07-30', '1'),
(169, '6556', '8801682994599', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '05:00:45 AM', '2014-07-30', '1'),
(170, '6556', '8801711579184', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '05:02:50 AM', '2014-07-30', '0'),
(171, '6556', '8801987172865', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '05:02:51 AM', '2014-07-30', '1'),
(172, '6556', '8801971482818', 'I wish you a very happy EID.\r\nMay ALLAH accept your good deeds,forgive your transgressions and ease the suffering of all people of world.\r\nM.D\r\nDreamsTech LTD', '05:04:52 AM', '2014-07-30', '0'),
(173, '666', '8801621781223', 'Dear Guardian, Shaykh Alvi is Absent today in the class at DREAMS TECH SCHOOL & COLLEGE', '01:02:40 AM', '2014-08-04', '1'),
(174, '666', '8801673910915', 'Dear Guardian, Md. Shafin Khan is Absent today in the class at DREAMS TECH SCHOOL & COLLEGE', '01:02:41 AM', '2014-08-04', '1'),
(175, '666', '8801671448829', 'Dear Guardian, Md. Raju Ahamed is Absent today in the class at DREAMS TECH SCHOOL & COLLEGE', '01:02:43 AM', '2014-08-04', '1'),
(176, '666', '8801671448829', 'Dear Guardian, Munni Akter Papri is Absent today in the class at DREAMS TECH SCHOOL & COLLEGE', '01:02:45 AM', '2014-08-04', '1'),
(177, '666', '8801621781223', '', '01:10:04 AM', '2014-08-04', '0'),
(178, '666', '8801715425423', 'Congratulation,\r\nYou are Successfully purchase 5000 SMS (Tk.3000) from Dreams Tech Ltd.\r\nPlease check your SMS balance.\r\nThanks for with Dreams Tech. ', '17:27:08 PM', '2014-08-09', '1'),
(179, '14901', '8801742477240', 'Welcome To Jurain Adarsha Academy', '13:20:35 PM', '2014-08-13', '1'),
(180, '14901', '8801715425423', 'Welcome', '13:25:39 PM', '2014-08-13', '1'),
(181, '666', '8801557752304', 'Hi, Jaanu......\r\nKemon aso.....?\r\nI miss you......', '17:40:34 PM', '2014-08-13', '1'),
(182, '666', '8801828623201', 'Dear Applicant\r\nYou are selected for Territory Manager.\r\nPls collect your Job Confirmation Letter before 25/08/14 from  11am-5pm)\r\nDreams Tech Ltd\r\n01828623201', '18:57:04 PM', '2014-08-23', '1'),
(183, '666', '8801728971496', 'Dear Applicant\r\nYou are selected for Territory Manager.\r\nPls collect your Job Confirmation Letter before 25/08/14 from  11am-5pm)\r\nDreams Tech Ltd\r\n01828623201', '18:58:10 PM', '2014-08-23', '1'),
(184, '666', '8801926182803', 'Dear Applicant\r\nYou are selected for Territory Manager.\r\nPls collect your Job Confirmation Letter before 25/08/14 from  11am-5pm)\r\nDreams Tech Ltd\r\n01828623201', '18:58:11 PM', '2014-08-23', '1'),
(185, '666', '8801918114439', 'Dear Applicant\r\nYou are selected for Territory Manager.\r\nPls collect your Job Confirmation Letter before 25/08/14 from  11am-5pm)\r\nDreams Tech Ltd\r\n01828623201', '18:58:12 PM', '2014-08-23', '1'),
(186, '666', '8801923060506', 'Dear Applicant\r\nYou are selected for Territory Manager.\r\nPls collect your Job Confirmation Letter before 25/08/14 from  11am-5pm)\r\nDreams Tech Ltd\r\n01828623201', '18:58:13 PM', '2014-08-23', '1'),
(187, '666', '8801712732684', 'Dear Applicant\r\nYou are selected for Territory Manager.\r\nPls collect your Job Confirmation Letter before 25/08/14 from  11am-5pm)\r\nDreams Tech Ltd\r\n01828623201', '18:58:16 PM', '2014-08-23', '1'),
(188, '666', '8801760069959', 'Dear Applicant\r\nYou are selected for Territory Manager.\r\nPls collect your Job Confirmation Letter before 25/08/14 from  11am-5pm)\r\nDreams Tech Ltd\r\n01828623201', '18:58:17 PM', '2014-08-23', '1'),
(189, '666', '8801911147129', 'EID MUBARAK. May the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always. Eid Mubarak To You & Your Family. (SOHEL)', '19:54:23 PM', '2014-08-30', '1'),
(190, '666', '8801683022099', 'EID MUBARAK. May the Blessing of ALLAH Fill your life with happiness and open all doors of success now & always. Eid Mubarak To You & Your Family. (SOHEL)', '19:54:27 PM', '2014-08-30', '1'),
(191, '1234', '8801711071457', 'Dear Guardian, Tanin Zubeyer Result is : Second division', '13:23:33 PM', '2014-09-01', '2'),
(192, '666', '8801715191558', 'Congratulation for using our Demo version of Dreams Tech EIMS Software.\r\nMove forward your institute with Dreams Tech EIMS Software.\r\n', '19:58:41 PM', '2014-09-01', '1'),
(193, '666', '88%2B8801917012920', 'Congratulation you have successfully complete your target. Now keep going and all the best.', '14:08:30 PM', '2014-09-14', '0'),
(194, '666', '88%2B8801917012920', 'Congratulation you have successfully complete your target. Now keep going and all the best', '14:09:08 PM', '2014-09-14', '0'),
(195, '666', '8801671448829', 'Hi, Welcome...', '18:08:03 PM', '2014-09-14', '1'),
(196, '666', '8801917012920', 'Congratulation you have successfully complete your target. Now keep going and all the best.\r\n', '15:49:38 PM', '2014-09-15', '1'),
(197, '666', '8801819216491', 'Welcome to the new world of technology.....\r\n', '18:42:39 PM', '2014-09-23', '1'),
(198, '666', '8801671655623', 'DEAR APPLICANT\r\nPlz check your Malaysia study visa EMGS status from below link.\r\nthanks.\r\nhttp://www.educationmalaysia.gov.my/emgs/application/searchForm/', '01:19:33 AM', '2014-09-26', '1'),
(199, '666', '8801684181969', 'DEAR APPLICANT\r\nPlz check your Malaysia study visa EMGS status from below link.\r\nthanks.\r\nhttp://www.educationmalaysia.gov.my/emgs/application/searchForm/', '01:19:37 AM', '2014-09-26', '1'),
(200, '666', '8801711076508', 'Dear student\r\nPlz check your Malaysia study visa EMGS status from Below link.\r\nThanks\r\nhttp://www.educationmalaysia.gov.my/emgs/application/searchForm/', '01:23:49 AM', '2014-09-26', '1'),
(201, '14911', '8801819216491', 'WELL COME DIGITIZATION OF EVER GREEN INTERNATIONAL SCHOOL.', '17:39:57 PM', '2014-10-20', '1'),
(202, '666', '8801671448829', 'Dear Applicant,\r\nThank You for Submitting an online application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 27-29/10/2014 (11am-5pm) with CV & Photo.\r\nAdd: 148, Shantinagar, Level-5, Dhaka-1217.\r\n(Opposite of White House Hotel)\r\nThanking you DREAMS TECH.', '10:49:13 AM', '2014-10-23', '0'),
(203, '666', '8801671655623', 'Dear Applicant,\r\nWe would like to invite you for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\nWhite House Hotel', '18:45:32 PM', '2014-10-25', '1'),
(204, '666', '8801671655623', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:50:37 PM', '2014-10-25', '1'),
(205, '666', '8801917179580', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:33 PM', '2014-10-25', '1'),
(206, '666', '8801911848407', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:34 PM', '2014-10-25', '1'),
(207, '666', '8801675888451', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:36 PM', '2014-10-25', '1'),
(208, '666', '8801722466688', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:37 PM', '2014-10-25', '1'),
(209, '666', '8801912760176', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:38 PM', '2014-10-25', '1'),
(210, '666', '8801758970322', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:39 PM', '2014-10-25', '1'),
(211, '666', '8801674538443', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:42 PM', '2014-10-25', '1'),
(212, '666', '8801923400920', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:43 PM', '2014-10-25', '1'),
(213, '666', '8801717736062', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:44 PM', '2014-10-25', '1'),
(214, '666', '8801746755138', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:45 PM', '2014-10-25', '1'),
(215, '666', '8801912155072', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:46 PM', '2014-10-25', '1'),
(216, '666', '8801771476406', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:48 PM', '2014-10-25', '1'),
(217, '666', '8801717113808', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:48 PM', '2014-10-25', '1'),
(218, '666', '8801797722115', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:49 PM', '2014-10-25', '1'),
(219, '666', '8801913389366', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:50 PM', '2014-10-25', '1'),
(220, '666', '8801820069285', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:51 PM', '2014-10-25', '1'),
(221, '666', '8801914079500', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:52 PM', '2014-10-25', '1'),
(222, '666', '8801703152413', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:54 PM', '2014-10-25', '1'),
(223, '666', '8801777187763', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:55 PM', '2014-10-25', '1'),
(224, '666', '8801913387474', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:55 PM', '2014-10-25', '1'),
(225, '666', '8801722025460', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:57 PM', '2014-10-25', '1'),
(226, '666', '8801757031337', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:58 PM', '2014-10-25', '1'),
(227, '666', '8801670036983', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:53:59 PM', '2014-10-25', '1'),
(228, '666', '8801779664422', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:00 PM', '2014-10-25', '1'),
(229, '666', '8801723074153', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:01 PM', '2014-10-25', '1'),
(230, '666', '8801952799283', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:05 PM', '2014-10-25', '1'),
(231, '666', '8801712597241', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:06 PM', '2014-10-25', '1'),
(232, '666', '8801740872598', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:07 PM', '2014-10-25', '1'),
(233, '666', '8801750999452', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:08 PM', '2014-10-25', '1'),
(234, '666', '8801536245910', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:09 PM', '2014-10-25', '1'),
(235, '666', '8801674927423', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:11 PM', '2014-10-25', '1'),
(236, '666', '8801759840650', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:11 PM', '2014-10-25', '1'),
(237, '666', '8801924661006', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:12 PM', '2014-10-25', '1'),
(238, '666', '8801671884776', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:13 PM', '2014-10-25', '1'),
(239, '666', '8801717591231', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:14 PM', '2014-10-25', '1'),
(240, '666', '8801684904048', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:40 PM', '2014-10-25', '1'),
(241, '666', '8801913913596', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:42 PM', '2014-10-25', '1');
INSERT INTO `sms` (`id`, `eiin_number`, `phone1`, `sms`, `time`, `date`, `api_status`) VALUES
(242, '666', '8801729572417', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:44 PM', '2014-10-25', '1'),
(243, '666', '8801725019838', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:50 PM', '2014-10-25', '1'),
(244, '666', '8801935285312', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:51 PM', '2014-10-25', '1'),
(245, '666', '8801724487724', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:53 PM', '2014-10-25', '1'),
(246, '666', '8801671776027', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:54 PM', '2014-10-25', '1'),
(247, '666', '8801717308020', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:55 PM', '2014-10-25', '1'),
(248, '666', '8801773471751', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:56 PM', '2014-10-25', '1'),
(249, '666', '8801725224958', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:57 PM', '2014-10-25', '1'),
(250, '666', '8801774890491', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:58 PM', '2014-10-25', '1'),
(251, '666', '8801717345254', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:54:59 PM', '2014-10-25', '1'),
(252, '666', '8801915529219', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:00 PM', '2014-10-25', '1'),
(253, '666', '8801717229977', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:01 PM', '2014-10-25', '1'),
(254, '666', '8801711597555', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:02 PM', '2014-10-25', '1'),
(255, '666', '8801728743176', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:03 PM', '2014-10-25', '1'),
(256, '666', '8801686795408', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:05 PM', '2014-10-25', '1'),
(257, '666', '8801914098168', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:05 PM', '2014-10-25', '1'),
(258, '666', '8801717817232', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:06 PM', '2014-10-25', '1'),
(259, '666', '8801717614780', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:08 PM', '2014-10-25', '1'),
(260, '666', '8801961168317', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:10 PM', '2014-10-25', '1'),
(261, '666', '8801723592408', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:11 PM', '2014-10-25', '1'),
(262, '666', '8801966645497', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:12 PM', '2014-10-25', '1'),
(263, '666', '8801710243317', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:13 PM', '2014-10-25', '1'),
(264, '666', '8801921381761', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:14 PM', '2014-10-25', '1'),
(265, '666', '8801815436479', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:15 PM', '2014-10-25', '1'),
(266, '666', '8801715298831', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:16 PM', '2014-10-25', '1'),
(267, '666', '8801710502235', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:17 PM', '2014-10-25', '1'),
(268, '666', '8801679509948', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:19 PM', '2014-10-25', '1'),
(269, '666', '8801913263979', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:19 PM', '2014-10-25', '1'),
(270, '666', '8801673089193', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:21 PM', '2014-10-25', '1'),
(271, '666', '8801740872598', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:22 PM', '2014-10-25', '1'),
(272, '666', '8801741701343', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:23 PM', '2014-10-25', '1'),
(273, '666', '8801779664422', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:24 PM', '2014-10-25', '1'),
(274, '666', '8801734739233', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:25 PM', '2014-10-25', '1'),
(275, '666', '8801777187763', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:26 PM', '2014-10-25', '1'),
(276, '666', '8801722072343', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:29 PM', '2014-10-25', '1'),
(277, '666', '8801670443314', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:30 PM', '2014-10-25', '1'),
(278, '666', '8801670885684', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:32 PM', '2014-10-25', '1'),
(279, '666', '8801913389366', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:37 PM', '2014-10-25', '1'),
(280, '666', '8801710243317', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:41 PM', '2014-10-25', '1'),
(281, '666', '8801723333203', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:41 PM', '2014-10-25', '1'),
(282, '666', '8801914943121', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:42 PM', '2014-10-25', '1'),
(283, '666', '8801722578553', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:47 PM', '2014-10-25', '1'),
(284, '666', '8801710452052', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:48 PM', '2014-10-25', '1'),
(285, '666', '8801914810233', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:49 PM', '2014-10-25', '1'),
(286, '666', '8801920328616', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:50 PM', '2014-10-25', '1'),
(287, '666', '8801715691949', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:51 PM', '2014-10-25', '1'),
(288, '666', '8801916920095', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:52 PM', '2014-10-25', '1'),
(289, '666', '8801790007006', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:53 PM', '2014-10-25', '1'),
(290, '666', '8801713644609', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:55 PM', '2014-10-25', '1'),
(291, '666', '8801737915292', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:56 PM', '2014-10-25', '1'),
(292, '666', '8801918525700', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:57 PM', '2014-10-25', '1'),
(293, '666', '88+01737971648+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:58 PM', '2014-10-25', '0'),
(294, '666', '8801725440733+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:55:58 PM', '2014-10-25', '0'),
(295, '666', '8801720169292', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:00 PM', '2014-10-25', '1'),
(296, '666', '8801915460694+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:00 PM', '2014-10-25', '0'),
(297, '666', '8801731414226', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:01 PM', '2014-10-25', '1'),
(298, '666', '8801688496590+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:02 PM', '2014-10-25', '0'),
(299, '666', '8801921918338+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:02 PM', '2014-10-25', '0'),
(300, '666', '8801613644609+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:05 PM', '2014-10-25', '0'),
(301, '666', '8801914178160+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:05 PM', '2014-10-25', '0'),
(302, '666', '8801749334408+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:06 PM', '2014-10-25', '0'),
(303, '666', '8801679509948+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:06 PM', '2014-10-25', '0'),
(304, '666', '8801923354015+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:07 PM', '2014-10-25', '0'),
(305, '666', '8801917179580', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:10 PM', '2014-10-25', '1'),
(306, '666', '8801911848407', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:11 PM', '2014-10-25', '1'),
(307, '666', '8801675888451', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:12 PM', '2014-10-25', '1'),
(308, '666', '8801722466688', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:13 PM', '2014-10-25', '1'),
(309, '666', '8801912760176', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:14 PM', '2014-10-25', '1'),
(310, '666', '8801758970322', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:15 PM', '2014-10-25', '1'),
(311, '666', '8801674538443', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:16 PM', '2014-10-25', '1'),
(312, '666', '8801923400920', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:17 PM', '2014-10-25', '1'),
(313, '666', '8801717736062', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:18 PM', '2014-10-25', '1'),
(314, '666', '8801746755138', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:23 PM', '2014-10-25', '1'),
(315, '666', '8801912155072', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:24 PM', '2014-10-25', '1'),
(316, '666', '8801771476406', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:25 PM', '2014-10-25', '1'),
(317, '666', '8801717113808', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:26 PM', '2014-10-25', '1'),
(318, '666', '8801797722115', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:27 PM', '2014-10-25', '1'),
(319, '666', '8801913389366', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:28 PM', '2014-10-25', '1'),
(320, '666', '8801820069285', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:30 PM', '2014-10-25', '1'),
(321, '666', '8801914079500', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:31 PM', '2014-10-25', '1'),
(322, '666', '8801703152413', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:32 PM', '2014-10-25', '1'),
(323, '666', '8801777187763', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:33 PM', '2014-10-25', '1'),
(324, '666', '8801913387474', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:34 PM', '2014-10-25', '1'),
(325, '666', '8801722025460', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:35 PM', '2014-10-25', '1'),
(326, '666', '8801757031337', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:36 PM', '2014-10-25', '1'),
(327, '666', '8801670036983', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:37 PM', '2014-10-25', '1'),
(328, '666', '8801779664422', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:38 PM', '2014-10-25', '1'),
(329, '666', '8801723074153', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:41 PM', '2014-10-25', '1'),
(330, '666', '8801952799283', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:42 PM', '2014-10-25', '1'),
(331, '666', '8801712597241', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:43 PM', '2014-10-25', '1'),
(332, '666', '8801740872598', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:44 PM', '2014-10-25', '1'),
(333, '666', '8801750999452', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:45 PM', '2014-10-25', '1'),
(334, '666', '8801536245910', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:46 PM', '2014-10-25', '1'),
(335, '666', '8801674927423', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:48 PM', '2014-10-25', '1'),
(336, '666', '8801759840650', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:49 PM', '2014-10-25', '1'),
(337, '666', '8801924661006', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:50 PM', '2014-10-25', '1'),
(338, '666', '8801671884776', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:51 PM', '2014-10-25', '1'),
(339, '666', '8801717591231', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:52 PM', '2014-10-25', '1'),
(340, '666', '8801684904048', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:53 PM', '2014-10-25', '1'),
(341, '666', '8801913913596', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:54 PM', '2014-10-25', '1'),
(342, '666', '8801729572417', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:55 PM', '2014-10-25', '1'),
(343, '666', '8801725019838', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:56 PM', '2014-10-25', '1'),
(344, '666', '8801935285312', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:56:57 PM', '2014-10-25', '1'),
(345, '666', '8801724487724', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:01 PM', '2014-10-25', '1'),
(346, '666', '8801671776027', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:03 PM', '2014-10-25', '1'),
(347, '666', '8801717308020', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:04 PM', '2014-10-25', '1'),
(348, '666', '8801773471751', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:05 PM', '2014-10-25', '1'),
(349, '666', '8801725224958', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:06 PM', '2014-10-25', '1'),
(350, '666', '8801774890491', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:07 PM', '2014-10-25', '1'),
(351, '666', '8801717345254', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:08 PM', '2014-10-25', '1'),
(352, '666', '8801915529219', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:09 PM', '2014-10-25', '1'),
(353, '666', '8801717229977', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:11 PM', '2014-10-25', '1'),
(354, '666', '8801711597555', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:12 PM', '2014-10-25', '1'),
(355, '666', '8801728743176', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:12 PM', '2014-10-25', '1'),
(356, '666', '8801686795408', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:14 PM', '2014-10-25', '1'),
(357, '666', '8801914098168', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:15 PM', '2014-10-25', '1'),
(358, '666', '8801717817232', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:16 PM', '2014-10-25', '1'),
(359, '666', '8801717614780', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:17 PM', '2014-10-25', '1'),
(360, '666', '8801961168317', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:18 PM', '2014-10-25', '1'),
(361, '666', '8801723592408', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:19 PM', '2014-10-25', '1'),
(362, '666', '8801966645497', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:20 PM', '2014-10-25', '1'),
(363, '666', '8801710243317', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:21 PM', '2014-10-25', '1'),
(364, '666', '8801921381761', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:21 PM', '2014-10-25', '1'),
(365, '666', '8801815436479', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:23 PM', '2014-10-25', '1'),
(366, '666', '8801715298831', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:25 PM', '2014-10-25', '1'),
(367, '666', '8801710502235', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:25 PM', '2014-10-25', '1'),
(368, '666', '8801679509948', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:27 PM', '2014-10-25', '1'),
(369, '666', '8801913263979', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:28 PM', '2014-10-25', '1'),
(370, '666', '8801673089193', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:30 PM', '2014-10-25', '1'),
(371, '666', '8801740872598', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:31 PM', '2014-10-25', '1'),
(372, '666', '8801741701343', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:32 PM', '2014-10-25', '1'),
(373, '666', '8801779664422', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:32 PM', '2014-10-25', '1'),
(374, '666', '8801734739233', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:33 PM', '2014-10-25', '1'),
(375, '666', '8801777187763', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:34 PM', '2014-10-25', '1'),
(376, '666', '8801722072343', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:37 PM', '2014-10-25', '1'),
(377, '666', '8801670443314', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:40 PM', '2014-10-25', '1'),
(378, '666', '8801670885684', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:41 PM', '2014-10-25', '1'),
(379, '666', '8801913389366', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:42 PM', '2014-10-25', '1'),
(380, '666', '8801710243317', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:44 PM', '2014-10-25', '1'),
(381, '666', '8801723333203', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:44 PM', '2014-10-25', '1'),
(382, '666', '8801914943121', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:45 PM', '2014-10-25', '1'),
(383, '666', '8801722578553', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:46 PM', '2014-10-25', '1'),
(384, '666', '8801710452052', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:47 PM', '2014-10-25', '1'),
(385, '666', '8801914810233', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:49 PM', '2014-10-25', '1'),
(386, '666', '8801920328616', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:50 PM', '2014-10-25', '1'),
(387, '666', '8801715691949', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:53 PM', '2014-10-25', '1'),
(388, '666', '8801916920095', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:54 PM', '2014-10-25', '1'),
(389, '666', '8801790007006', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:55 PM', '2014-10-25', '1'),
(390, '666', '8801713644609', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:56 PM', '2014-10-25', '1'),
(391, '666', '8801737915292', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:58 PM', '2014-10-25', '1'),
(392, '666', '8801918525700', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:59 PM', '2014-10-25', '1'),
(393, '666', '88+01737971648+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:57:59 PM', '2014-10-25', '0'),
(394, '666', '8801725440733+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:58:00 PM', '2014-10-25', '0'),
(395, '666', '8801720169292', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:58:01 PM', '2014-10-25', '1'),
(396, '666', '8801915460694+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:58:01 PM', '2014-10-25', '0'),
(397, '666', '8801731414226', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:58:02 PM', '2014-10-25', '1'),
(398, '666', '8801688496590+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:58:03 PM', '2014-10-25', '0'),
(399, '666', '8801921918338+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:58:03 PM', '2014-10-25', '0'),
(400, '666', '8801613644609+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:58:04 PM', '2014-10-25', '0'),
(401, '666', '8801914178160+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:58:04 PM', '2014-10-25', '0'),
(402, '666', '8801749334408+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:58:05 PM', '2014-10-25', '0'),
(403, '666', '8801679509948+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:58:06 PM', '2014-10-25', '0'),
(404, '666', '8801923354015+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '18:58:06 PM', '2014-10-25', '0'),
(405, '666', '88+01737971648+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:01:50 PM', '2014-10-28', '0'),
(406, '666', '8801725440733+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:01:51 PM', '2014-10-28', '0'),
(407, '666', '8801915460694+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:01:52 PM', '2014-10-28', '0'),
(408, '666', '8801688496590+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:01:53 PM', '2014-10-28', '0'),
(409, '666', '8801921918338+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:01:54 PM', '2014-10-28', '0'),
(410, '666', '8801613644609+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:01:55 PM', '2014-10-28', '0'),
(411, '666', '8801914178160+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:01:55 PM', '2014-10-28', '0'),
(412, '666', '8801749334408+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:01:56 PM', '2014-10-28', '0'),
(413, '666', '8801670219405', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:01:58 PM', '2014-10-28', '1'),
(414, '666', '88+01737971648+', 'Dear Applicant, We''d like to invite u for interview on 29-31/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:35:02 PM', '2014-10-28', '0'),
(415, '666', '8801725440733+', 'Dear Applicant, We''d like to invite u for interview on 29-31/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:35:04 PM', '2014-10-28', '0'),
(416, '666', '8801915460694+', 'Dear Applicant, We''d like to invite u for interview on 29-31/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:35:05 PM', '2014-10-28', '0'),
(417, '666', '8801688496590+', 'Dear Applicant, We''d like to invite u for interview on 29-31/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:35:06 PM', '2014-10-28', '0'),
(418, '666', '8801921918338+', 'Dear Applicant, We''d like to invite u for interview on 29-31/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:35:06 PM', '2014-10-28', '0'),
(419, '666', '8801613644609+', 'Dear Applicant, We''d like to invite u for interview on 29-31/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:35:07 PM', '2014-10-28', '0'),
(420, '666', '8801914178160+', 'Dear Applicant, We''d like to invite u for interview on 29-31/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:35:08 PM', '2014-10-28', '0'),
(421, '666', '8801749334408+', 'Dear Applicant, We''d like to invite u for interview on 29-31/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:35:09 PM', '2014-10-28', '0'),
(422, '666', '8801670219405', 'Dear Applicant, We''d like to invite u for interview on 29-31/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:35:10 PM', '2014-10-28', '1'),
(423, '666', '880172209565', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:41:48 PM', '2014-10-28', '0'),
(424, '666', '8801557785551', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:41:50 PM', '2014-10-28', '1'),
(425, '666', '8801680634750+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:41:51 PM', '2014-10-28', '0'),
(426, '666', '8801911603645+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:41:52 PM', '2014-10-28', '0'),
(427, '666', '8801911730629', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:41:54 PM', '2014-10-28', '1'),
(428, '666', '8801719555333+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:41:56 PM', '2014-10-28', '0'),
(429, '666', '8801678000537+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:41:57 PM', '2014-10-28', '0'),
(430, '666', '8801778723732+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:41:57 PM', '2014-10-28', '0'),
(431, '666', '8801717412112+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:41:58 PM', '2014-10-28', '0'),
(432, '666', '8801923189539+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:41:59 PM', '2014-10-28', '0'),
(433, '666', '8801713-864194+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:41:59 PM', '2014-10-28', '0'),
(434, '666', '8801840131792+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:00 PM', '2014-10-28', '0'),
(435, '666', '8801777187763+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:00 PM', '2014-10-28', '0'),
(436, '666', '88+01719076701+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:01 PM', '2014-10-28', '0'),
(437, '666', '8801684573141+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:02 PM', '2014-10-28', '0'),
(438, '666', '8801738214416+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:02 PM', '2014-10-28', '0'),
(439, '666', '8801745211086+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:03 PM', '2014-10-28', '0'),
(440, '666', '8801913137513+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:04 PM', '2014-10-28', '0'),
(441, '666', '8801722030058+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:04 PM', '2014-10-28', '0'),
(442, '666', '8801913626868+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:05 PM', '2014-10-28', '0'),
(443, '666', '8801622363544', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:06 PM', '2014-10-28', '1'),
(444, '666', '8801671674830+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:08 PM', '2014-10-28', '0'),
(445, '666', '8801768959999+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:09 PM', '2014-10-28', '0'),
(446, '666', '8801913336223+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:09 PM', '2014-10-28', '0'),
(447, '666', '8801683113188+', 'Dear Applicant, We''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:42:10 PM', '2014-10-28', '0'),
(448, '666', '8801711242482', 'Dear Applicant,\r\nWe''d like to invite u for interview on 29-31/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '13:17:09 PM', '2014-10-29', '1'),
(449, '666', '8801671655623', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 29-31/010/2014 (11am-5pm) with CV.\r\nOffice Address:\r\nDREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact:\r\n01671448829, 01671655623\r\nThanking You DREAMS TECH', '13:31:57 PM', '2014-10-29', '0'),
(450, '666', '8801553363017', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 29-31/010/2014 (11am-5pm) with CV.\r\nOffice Address:\r\nDREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact:\r\n01671448829, 01671655623\r\nThanking You DREAMS TECH', '13:31:58 PM', '2014-10-29', '0'),
(451, '666', '8801553363017', 'Dear Applicant, \r\nThank you for submitting an application for the position of TM at DREAMS TECH. \r\nWe would like to invite you to interview within Date: 29-31/010/2014 (11am-5pm) with CV. Office Address: \r\nDREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217 Contact: 01671448829, 01671655623 \r\nThanking You DREAMS TECH', '15:53:00 PM', '2014-10-31', '0'),
(452, '666', '8801553363017', 'Dear Applicant, \r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '15:55:26 PM', '2014-10-31', '1'),
(453, '666', '8801671448829', 'Dear Applicant, \r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '15:57:31 PM', '2014-10-31', '1'),
(454, '666', '880172209565', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:26 PM', '2014-10-31', '0');
INSERT INTO `sms` (`id`, `eiin_number`, `phone1`, `sms`, `time`, `date`, `api_status`) VALUES
(455, '666', '8801557785551', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:28 PM', '2014-10-31', '1'),
(456, '666', '8801680634750+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:29 PM', '2014-10-31', '0'),
(457, '666', '8801911603645+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:30 PM', '2014-10-31', '0'),
(458, '666', '8801911730629', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:32 PM', '2014-10-31', '1'),
(459, '666', '8801719555333+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:33 PM', '2014-10-31', '0'),
(460, '666', '8801678000537+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:33 PM', '2014-10-31', '0'),
(461, '666', '8801778723732+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:36 PM', '2014-10-31', '0'),
(462, '666', '8801717412112+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:38 PM', '2014-10-31', '0'),
(463, '666', '8801923189539+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:39 PM', '2014-10-31', '0'),
(464, '666', '8801713-864194+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:40 PM', '2014-10-31', '0'),
(465, '666', '8801840131792+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:41 PM', '2014-10-31', '0'),
(466, '666', '8801777187763+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:42 PM', '2014-10-31', '0'),
(467, '666', '88+01719076701+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:43 PM', '2014-10-31', '0'),
(468, '666', '8801684573141+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:43 PM', '2014-10-31', '0'),
(469, '666', '8801738214416+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:44 PM', '2014-10-31', '0'),
(470, '666', '8801745211086+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:45 PM', '2014-10-31', '0'),
(471, '666', '8801913137513+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:46 PM', '2014-10-31', '0'),
(472, '666', '8801722030058+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:47 PM', '2014-10-31', '0'),
(473, '666', '8801913626868+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:48 PM', '2014-10-31', '0'),
(474, '666', '8801622363544', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:50 PM', '2014-10-31', '1'),
(475, '666', '8801671674830+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:51 PM', '2014-10-31', '0'),
(476, '666', '8801768959999+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:54 PM', '2014-10-31', '0'),
(477, '666', '8801913336223+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:55 PM', '2014-10-31', '0'),
(478, '666', '8801683113188+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:55 PM', '2014-10-31', '0'),
(479, '666', '8801710502313+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:56 PM', '2014-10-31', '0'),
(480, '666', '8801725019838+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:57 PM', '2014-10-31', '0'),
(481, '666', '8801677084468', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:02:59 PM', '2014-10-31', '1'),
(482, '666', '8801812+799962', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:01 PM', '2014-10-31', '0'),
(483, '666', '8801920810237', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:02 PM', '2014-10-31', '1'),
(484, '666', '8801672835040', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:06 PM', '2014-10-31', '1'),
(485, '666', '8801739522977', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:06 PM', '2014-10-31', '0'),
(486, '666', '8801751588637', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:07 PM', '2014-10-31', '0'),
(487, '666', '8801965007020', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:09 PM', '2014-10-31', '1'),
(488, '666', '8801753836348', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:10 PM', '2014-10-31', '0'),
(489, '666', '8801676086691', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:11 PM', '2014-10-31', '1'),
(490, '666', '8801723324337', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:12 PM', '2014-10-31', '0'),
(491, '666', '8801623040092', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:14 PM', '2014-10-31', '1'),
(492, '666', '8801850775969', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:15 PM', '2014-10-31', '0'),
(493, '666', '8801962491163', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:17 PM', '2014-10-31', '1'),
(494, '666', '8801764654148', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:18 PM', '2014-10-31', '0'),
(495, '666', '8801855318491', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:19 PM', '2014-10-31', '0'),
(496, '666', '8801719076701', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:20 PM', '2014-10-31', '0'),
(497, '666', '8801731238993', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:21 PM', '2014-10-31', '0'),
(498, '666', '8801929948026', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:26 PM', '2014-10-31', '1'),
(499, '666', '8801937576557', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:28 PM', '2014-10-31', '1'),
(500, '666', '8801677742507', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:29 PM', '2014-10-31', '1'),
(501, '666', '8801918511233', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:31 PM', '2014-10-31', '1'),
(502, '666', '8801733620557', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:32 PM', '2014-10-31', '0'),
(503, '666', '8801928854775', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:03:34 PM', '2014-10-31', '1'),
(504, '666', '880172209565', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:17 PM', '2014-10-31', '0'),
(505, '666', '8801557785551', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:19 PM', '2014-10-31', '1'),
(506, '666', '8801680634750+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:19 PM', '2014-10-31', '0'),
(507, '666', '8801911603645+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:20 PM', '2014-10-31', '0'),
(508, '666', '8801911730629', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:25 PM', '2014-10-31', '1'),
(509, '666', '8801719555333+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:26 PM', '2014-10-31', '0'),
(510, '666', '8801678000537+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:27 PM', '2014-10-31', '0'),
(511, '666', '8801778723732+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:28 PM', '2014-10-31', '0'),
(512, '666', '8801717412112+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:29 PM', '2014-10-31', '0'),
(513, '666', '8801923189539+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:29 PM', '2014-10-31', '0'),
(514, '666', '8801713-864194+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:30 PM', '2014-10-31', '0'),
(515, '666', '8801840131792+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:30 PM', '2014-10-31', '0'),
(516, '666', '8801777187763+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:31 PM', '2014-10-31', '0'),
(517, '666', '88+01719076701+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:32 PM', '2014-10-31', '0'),
(518, '666', '8801684573141+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:32 PM', '2014-10-31', '0'),
(519, '666', '8801738214416+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:33 PM', '2014-10-31', '0'),
(520, '666', '8801745211086+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:33 PM', '2014-10-31', '0'),
(521, '666', '8801913137513+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:34 PM', '2014-10-31', '0'),
(522, '666', '8801722030058+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:34 PM', '2014-10-31', '0'),
(523, '666', '8801913626868+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:35 PM', '2014-10-31', '0'),
(524, '666', '8801622363544', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:36 PM', '2014-10-31', '1'),
(525, '666', '8801671674830+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:37 PM', '2014-10-31', '0'),
(526, '666', '8801768959999+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:38 PM', '2014-10-31', '0'),
(527, '666', '8801913336223+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:38 PM', '2014-10-31', '0'),
(528, '666', '8801683113188+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:39 PM', '2014-10-31', '0'),
(529, '666', '8801710502313+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:39 PM', '2014-10-31', '0'),
(530, '666', '8801725019838+', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:40 PM', '2014-10-31', '0'),
(531, '666', '8801677084468', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:41 PM', '2014-10-31', '1'),
(532, '666', '8801812+799962', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:42 PM', '2014-10-31', '0'),
(533, '666', '8801920810237', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:44 PM', '2014-10-31', '1'),
(534, '666', '8801672835040', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:45 PM', '2014-10-31', '1'),
(535, '666', '8801739522977', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:46 PM', '2014-10-31', '0'),
(536, '666', '8801751588637', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:48 PM', '2014-10-31', '0'),
(537, '666', '8801965007020', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:50 PM', '2014-10-31', '1'),
(538, '666', '8801753836348', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:51 PM', '2014-10-31', '0'),
(539, '666', '8801676086691', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:54 PM', '2014-10-31', '1'),
(540, '666', '8801723324337', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:55 PM', '2014-10-31', '0'),
(541, '666', '8801623040092', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:09:56 PM', '2014-10-31', '1'),
(542, '666', '8801850775969', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:10:01 PM', '2014-10-31', '0'),
(543, '666', '8801962491163', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:10:03 PM', '2014-10-31', '1'),
(544, '666', '8801764654148', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:10:03 PM', '2014-10-31', '0'),
(545, '666', '8801855318491', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:10:04 PM', '2014-10-31', '0'),
(546, '666', '8801719076701', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:10:05 PM', '2014-10-31', '0'),
(547, '666', '8801731238993', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:10:06 PM', '2014-10-31', '0'),
(548, '666', '8801929948026', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:10:08 PM', '2014-10-31', '1'),
(549, '666', '8801937576557', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:10:12 PM', '2014-10-31', '1'),
(550, '666', '8801677742507', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:10:14 PM', '2014-10-31', '1'),
(551, '666', '8801918511233', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:10:16 PM', '2014-10-31', '1'),
(552, '666', '8801733620557', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:10:16 PM', '2014-10-31', '0'),
(553, '666', '8801928854775', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka (Near White House Hotel)', '16:10:20 PM', '2014-10-31', '1'),
(554, '666', '8801553363017', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '13:36:04 PM', '2014-10-31', '1'),
(555, '666', '8801553363017', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 29-31/010/2014 (11am-5pm) with CV & Photo\r\nAddress: DREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623 Thanking You DREAMS TECH', '16:28:56 PM', '2014-11-02', '0'),
(556, '666', '8801553363017', 'Dear Applicant,\r\nWe''d like to invite u for interview on 05-07/11/2014 (11am-5pm) with CV&Photo.\r\nAdd: 148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:33:11 PM', '2014-11-02', '0'),
(557, '666', '8801711580703', 'Dear Applicant,\r\nWe''d like to invite u for interview on 05-07/11/2014 (11am-5pm) with CV&Photo.\r\nAdd: 148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '16:33:12 PM', '2014-11-02', '0'),
(558, '666', '01927608261', 'hi fahad this is a test sms', '10:25:35 AM', '2014-11-04', 'S|1701|8801927608261|652a635766bc3e3de8e06f3be0ec184f,'),
(559, '666', '8801553363017', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 29-31/010/2014 (11am-5pm) with CV & Photo\r\nAddress: DREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623 Thanking You DREAMS TECH', '2:36:17 AM', '2014-11-05', 'S|1706,'),
(560, '666', '8801553363017', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 29-31/010/2014 (11am-5pm) with CV & Photo\r\nAddress: DREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623 Thanking You DREAMS TECH', '2:37:52 AM', '2014-11-05', 'S|1706,'),
(561, '666', '8801553363017', 'Dear Applicant,\r\nWe''d like to invite u for interview on 05-07/11/2014 (11am-5pm) with CV&Photo.\r\nAdd: 148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '2:38:45 AM', '2014-11-05', 'S|1706,'),
(562, '666', '01671448829', 'Dear Applicant,\r\nWe''d like to invite u for interview on 27-29/10/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '2:43:25 AM', '2014-11-05', 'S|1701|8801671448829|db2d065b3970c25299295a7314dcbb15,'),
(563, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 06-09/11/2014 (11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623 Thanking You DREAMS TECH', '2:47:18 AM', '2014-11-05', 'S|1701|8801671448829|1fcd4df09e57879c15d0fa158ae67b82,'),
(564, '666', '01553363017', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 06-09/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress:\r\nDREAMS TECH\r\n148, Shantinagar,(5th Floor),\r\nDhaka-1217\r\nContact: 01671448829, 01671655623 Thanking You DREAMS TECH', '2:53:29 AM', '2014-11-05', 'S|1701|8801553363017|cfcd208495d565ef66e7dff9f98764da,'),
(565, '666', '01671655623', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 06-09/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress:\r\nDREAMS TECH\r\n148, Shantinagar,(5th Floor),\r\nDhaka-1217\r\nContact:\r\n01671448829, 01671655623\r\nThanking You DREAMS TECH', '2:56:03 AM', '2014-11-05', 'S|1701|8801671655623|5af84e63d4073bd8506b9baaef64c0cf,'),
(566, '666', '01911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 06-09/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress:\r\nDREAMS TECH\r\n148, Shantinagar,(5th Floor),\r\nDhaka-1217\r\nContact:\r\n01671448829, 01671655623\r\nThanking You DREAMS TECH', '2:58:13 AM', '2014-11-05', 'S|1701|8801911353197|9643b0912797d4c57224bc22d926e779,'),
(567, '666', '01911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 06-09/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress:\r\nDREAMS TECH\r\n148, Shantinagar,(5th Floor),\r\nDhaka-1217\r\nContact:\r\n01671448829, 01671655623\r\nThanking You DREAMS TECH', '3:08:52 AM', '2014-11-05', 'S|1701|8801911353197|c75c438ffe95f5a3389a9ce7c51ddf3a,'),
(568, '666', '01927608261', 'Dear Applicant, Thank you for submitting an application for the position of TM at DREAMS TECH. We would like to invite you to interview within Date: 06-09/11/2014 (11am-5pm) with CV & Photo. Address: DREAMS TECH 148, Shantinagar,(5th Floor), Dhaka-1217 Contact: 01671448829, 01671655623 Thanking You DREAMS TECH', '12:51:15 PM', '2014-11-05', 'S|1701|8801927608261|3fb324f132b80693b769c1082c22e82a,'),
(569, '666', '01927608261', 'Dear Applicant,\r\nWe''d like to invite u for interview on 05-07/11/2014 (11am-5pm) with CV&Photo.\r\nAdd: 148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '8:09:50 PM', '2014-11-05', 'S|1701|8801927608261|f8fa06df787a4eaeecf23fd65ea79a07,'),
(570, '666', '01553363017|8801927608261', 'Dear Applicant, Thank you for submitting an application for the position of TM at DREAMS TECH. We would like to invite you to interview within Date: 06-09/11/2014 (11am-5pm) with CV & Photo. Address: DREAMS TECH 148, Shantinagar,(5th Floor), Dhaka-1217 Contact: 01671448829, 01671655623 Thanking You DREAMS TECH', '8:10:42 PM', '2014-11-05', 'S|1701|8801553363017|cfcd208495d565ef66e7dff9f98764da,S|1701|8801927608261|5fd0e455536f9e7ac98893d5a623922c,'),
(571, '666', '01553363017|8801828623201|8801671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 07-09/11/2014 (11am-5pm) with CV & Photo.\r\nAddress:\r\nDREAMS TEC\r\n148, Shantinagar,(5th Floor), Dhaka-1217 Contact: 01671448829, 01671655623 Thanking You DREAMS TECH', '3:17:19 PM', '2014-11-06', 'S|1701|8801553363017|c3ac83693582fbe4bacf02a0161d43c5,S|1701|8801828623201|02c3f33685f0cc0ebf5fb68165a8a5d7,S|1701|8801671448829|9ef7b13742255dee618ed0ba336add26,'),
(572, '666', '01711580703', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel) 	', '4:34:12 PM', '2014-11-06', 'S|1702,'),
(573, '666', '01711580703', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel) 	', '11:09:08 AM', '2014-11-07', 'S|1702,'),
(574, '666', '01553363017', 'Dear Applicant,\r\nWe''d like to invite u for interview on 05-07/11/2014 (11am-5pm) with CV&Photo.\r\nAdd: 148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '11:11:04 AM', '2014-11-07', 'S|1701|8801553363017|b6ad454de9253329540dc3210ce5c500,'),
(575, '666', '01535494889', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel) 	', '11:12:32 AM', '2014-11-07', 'S|1701|8801535494889|e12cb1e87b72107bc4d610a9982e5bb0,'),
(576, '666', '01911353197', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel) 	', '11:15:11 AM', '2014-11-07', 'S|1701|8801911353197|b3a5ea2f476eab6616d2f2248014fbce,'),
(577, '666', '01916920095|8801792221453|8801918992002 |8801912502170|8801937133787|8801197227779 |8801916076242 |8801913405797 |8801678171812 |8801818277511 |8801670565292 |8801714841891 |88 01711974616 |8801816282929 |8801671379011 |8801764833120|8801723813182 |8801710455719 |8801714289532 |8801723817172 |8801675439964 |88 01670978679 |8801677207702 |8801840007400 |8801720537808|8801965891427 |88 01829570312 |8801734836043|8801732086776 |8801835866321 |8801717669500 |8801766450482 |8801714116572 |8801676063319 |8801744734662|8801739627256 |8801680232696 |8801724112691 |8801912065955 |8801675832924 |8801674009707|8801812907760 |8801812777420 |8801914932137 |8801914079500 |8801710481660 |8801720660199 |8801949303500 |8801714117014 |8801715673142 ', 'Dear Applicant,\r\nWe''d like to invite u for interview on 8-10/11/2014 (11am-5pm) with CV&Photo.\r\nAdd: 148,Shantinagar, 5th Floor, Dhaka\r\n(Near White House Hotel)', '11:27:51 AM', '2014-11-07', 'S|1702,S|1702,S|1702,'),
(578, '666', '01722678011 |8801722273022 |8801736396640 |8801711084098 |8801716610631|8801814767426 |8801795805422|8801722578553 |8801722829080 |8801911624822 |8801915103883 |8801681820693 |8801911771301 |8801624190012 |8801914679677 |8801728605826|8801715649569 |8801912261344 |8801718782372 |88 01921776951 |8801957149353 |8801681162444 |8801918049723 |8801911226408 |8801934375235 |8801912277029 |8801828642919|8801671776027 |8801710089131 |8801715298831 |8801726004443|8801771574383 |8801823234734 |88 01683838797 |8801714947090 |8801676052124 |8801779664422 |8801912151710 |8801714540402 |8801916992366 |8801710452052 |88 01711410003 |8801790007006 |8801717036093 |8801717526631 |8801913728502 |8801716014045 |8801671983066 |8801722080324 |88 01716679811 ', 'Dear Applicant,\r\nWe''d like to invite u for interview on 8-10/11/2014 (11am-5pm) with CV&Photo.\r\nAdd: 148,Shantinagar, 5th Floor, Dhaka\r\n(Near White House Hotel)', '11:35:11 AM', '2014-11-07', 'S|1702,'),
(579, '666', '01671448829', 'Dear Applicant,\r\nWe''d like to invite u for interview on 8-10/11/2014 (11am-5pm) with CV&Photo.\r\nAdd: 148,Shantinagar, 5th Floor, Dhaka\r\n(Near White House Hotel)', '11:36:38 AM', '2014-11-07', 'S|1701|8801671448829|9f13e48c36c2ad9df083f3c804f649e4,'),
(580, '666', '01916920095|8801792221453|8801918992002 |8801912502170|8801937133787|8801197227779 |8801916076242 |8801913405797 |8801678171812 |8801818277511 |8801670565292 |8801714841891 |88 01711974616 |8801816282929 |8801671379011 |8801764833120|8801723813182 |8801710455719 |8801714289532 |8801723817172 |8801675439964 |88 01670978679 |8801677207702 |8801840007400 |8801720537808|8801965891427 |88 01829570312 |8801734836043|8801732086776 |8801835866321 |8801717669500 |8801766450482 |8801714116572 |8801676063319 |8801744734662|8801739627256 |8801680232696 |8801724112691 |8801912065955 |8801675832924 |8801674009707|8801812907760 |8801812777420 |8801914932137 |8801914079500 |8801710481660 |8801720660199 |8801949303500 |8801714117014 |8801715673142 ', 'Dear Applicant,\nWe''d like to invite u for interview on 8-10/11/2014 (11am-5pm) with CV&Photo.\nAdd: 148,Shantinagar, 5th Floor, Dhaka\n(Near White House Hotel)', '11:41:33 AM', '2014-11-07', 'S|1702,S|1702,S|1702,'),
(581, '666', '01916823163', 'Dear Applicant,\r\nWe''d like to invite u for interview on 01/11/2014 (11am-5pm) with CV&Photo. Add:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel) 	', '4:55:12 PM', '2014-11-08', 'S|1701|8801916823163|2132cdcfd992b0a7b402fe9e335e6385,'),
(582, '666', '01911603645 ', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '4:57:50 PM', '2014-11-08', 'S|1702,'),
(583, '666', '01911603645 ', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '4:58:47 PM', '2014-11-08', 'S|1702,'),
(584, '666', '01916823163', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '4:59:18 PM', '2014-11-08', 'S|1701|8801916823163|737483ed1880914a320d3c4c8cb91686,'),
(585, '666', '01814767426 |8801911624822 |8801915103883 |8801681820693 |8801911771301 |8801624190012 |8801914679677 |8801912261344 |88 01921776951 |8801957149353 |8801681162444 |8801918049723 |8801911226408 |8801934375235 |8801912277029 |8801828642919|8801671776027 |8801823234734 |88 01683838797 |8801676052124 |8801912151710 |8801916992366 |8801913728502 |8801671983066 |8801828414603 |8801956726581 |8801921321847 |8801912062480 |8801914839116 |8801912454320 |8801676048513 |8801672831881 |88 01671974571 |8801923034337 |8801676025272 |8801670471825 |8801973000040 |8801817546469 |8801922907813 |8801919302315 |8801855805662 |8801923238668 |8801922292806 |8801675550029 |8801671091858|8801674797346 |8801911324160 |8801911531130 |8801675861961 |8801671978372 |8801925950555 ', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor, Dhaka\r\n(Near White House Hotel)', '5:21:53 PM', '2014-11-08', 'S|1702,'),
(586, '666', '01680634750 |8801911603645 |8801911730629|8801678000537 |8801923189539 |8801840131792 |8801684573141 |8801913137513 |8801913626868 |8801622363544|8801671674830 |8801913336223 |8801683113188 |8801677084468|8801812 799962|8801920810237|8801672835040|8801965007020|8801676086691|8801623040092|8801850775969|8801962491163|8801855318491|8801929948026|8801937576557|8801677742507|8801918511233|8801928854775|8801916920095|8801918992002 |8801912502170|8801937133787|8801916076242 |8801913405797 |8801678171812 |8801818277511 |8801670565292 |8801816282929 |8801671379011 |8801675439964 |88 01670978679 |8801677207702 |8801840007400 |8801965891427 |88 01829570312 |8801835866321 |8801676063319 |8801680232696 |8801912065955 |8801675832924 |8801674009707|8801812907760 |8801812777420 |8801914932137 |8801914079500 |8801949303500 ', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '5:34:29 PM', '2014-11-08', 'S|1702,'),
(587, '666', '01680634750|8801911603645|8801911730629|8801678000537|8801923189539|8801840131792|8801684573141|8801913137513|8801913626868|8801622363544', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '5:39:44 PM', '2014-11-08', 'S|1701|8801680634750|118a989972f0aa2ef4794eea699b3e98,S|1701|8801911603645|c27aff07bbdeadbaff293cf2d3a2dfc3,S|1701|8801911730629|642869bea13e0eefc00312b146cbfb4e,S|1701|8801678000537|b6bf2ee3354fc93768dc715ef6d89cc8,S|1701|8801923189539|2d03381148d36cfedc102669f4e16b83,S|1701|8801840131792|340d0aef390bad4208e233e72421c072,S|1701|8801684573141|62019db0f8f011e4ccc8c3ed626b5d4e,S|1701|8801913137513|0ecbdce148c4ffa3182e883c85c26d51,S|1701|8801913626868|379870e0ef458967dec89a3a264a9586,S|1701|8801622363544|3bb675d9e408cabeb910a4623a2e7e68,'),
(588, '666', '01911771301|8801624190012|8801914679677|8801912261344|8801921776951|8801957149353', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '5:56:32 PM', '2014-11-08', 'S|1701|8801911771301|220e901961e8ee6d8d5b6f8163e988e9,S|1701|8801624190012|a94a30eb767ba2435c2bb4530681a9db,S|1701|8801914679677|58ee7a384383562e5257b2ee42ea0d5e,S|1701|8801912261344|1095410a00f67108ef526e7f053d6dc2,S|1701|8801921776951|651954958c33cb88aca8613b15f90381,S|1701|8801957149353|ae8bd10717704d50574d63fe47568ffe,'),
(589, '666', '01671674830|880193336223|8801683113188|8801611084468|8801812799962|8801920810237|8801672835040|8801965007020|8801676086691|8801623040092|8801850775969|8801962491163|8801855318491|8801929948026|8801937576557|8801677742507|8801918511233|8801928854775|8801916920095|8801918992002|8801912505170|8801937133787|8801916076242|8801913405797|8801678171812|8801818277511|8801670565292|8801816282929|8801671379011|8801675439964|8801670978679|8801677207702|8801840007400|8801965891427|8801829570312|8801835866321|8801676063319|8801680232696|8801912065955|8801675832924|8801674009707|8801812907760|8801812777420|8801914932137|8801914079500|8801949303500|8801814767426|8801911624822|8801915103883|8801681820693|8801918049723|8801911226408|8801934375235|8801912277029|8801828642919|8801671776027', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '6:10:09 PM', '2014-11-08', 'S|1701|8801671674830|8a047afbde8eb8c3bb77683ff3c001f6,S|1702,S|1701|8801683113188|c954f4637446c2f38b71e726fa1d9035,S|1701|8801611084468|ad13c6b86b0454779c9843116527dfcc,S|1701|8801812799962|9cbf9b151513e5bde13c1b301cba639e,S|1701|8801920810237|eeafe9e43461960dc937e047735cb178,S|1701|8801672835040|10ac95bdc19304184067031a4102e5d5,S|1701|8801965007020|79dd227831e2342c440d54413394258d,S|1701|8801676086691|5e9e07b2b1e9686292a7901e45766636,S|1701|8801623040092|3838df6a0c0dc4b40dd3c8d0222f5b60,S|1701|8801850775969|0bc222752b13e015332df01bf0a7bbc7,S|1701|8801962491163|ff042efb6813cfebdbac8f4ad469077c,S|1701|8801855318491|49ccb72e77a9b9fdcf67eee5b27120a5,S|1701|8801929948026|f92104d0ec48fa3699e8546c84b98e3c,S|1701|8801937576557|778cc71210ec2cea296e73733c57b89e,S|1701|8801677742507|9e8ba7f227a74967797f9bcf5f929af0,S|1701|8801918511233|4871ce18acf1172a02bf26992b0ddf2e,S|1701|8801928854775|a297bcf6d7439dd66d865d08c2fc344c,S|1701|8801916920095|b2f08949d6d211a665e70ebaf5662170,S|1701|8801918992002|4aba6517acf51571cd3c53f967d7900a,S|1701|8801912505170|cb6f7980dd6c1a590f36cf612180057e,S|1701|8801937133787|6cd01a1615295cebfc838d25a999bcba,S|1701|8801916076242|152908fac83143448eb08701c743e4c9,S|1701|8801913405797|e7ef2698611db643025eb9b59659830d,S|1701|8801678171812|241155f9c878ab14d11cf6b45bda1d41,S|1701|8801818277511|6a68a1871ccc5ee594b23c883d73798f,S|1701|8801670565292|7f5c45d532280aef89186a57d489e98a,S|1701|8801816282929|09ccc517418e4bee3baf087bbfec3ffe,S|1701|8801671379011|44d67897760253421447fd540e05a4e4,S|1701|8801675439964|e4e7d2dcf7462fdd1976395858a816a6,S|1701|8801670978679|8480b7bb5bc1f82c0c5f46a1306cced4,S|1701|8801677207702|ad9c6ab31e376df57eaa031240bb2f3a,S|1701|8801840007400|8b2b3b493ca1c6bc4f63f23c2ec1196c,S|1701|8801965891427|9a86e497ba933798f606d0f2615aed31,S|1701|8801829570312|83d1e2efcb99445a02781ed1d50d0213,S|1701|8801835866321|18141573fd1471a31c61fc065dc15239,S|1701|8801676063319|cf1b55d84c64c589fe5c37900fa27a83,S|1701|8801680232696|29fbfbb543e7b2924980a7a4758c256c,S|1701|8801912065955|fdbbbbc25ca058e71f7fcf2cf27aaba1,S|1701|8801675832924|99c289880c628046bcdc4ec2564e8fe0,S|1701|8801674009707|ec5b36bd82571cf83ff6575260db58ea,S|1701|8801812907760|c08081daee6a3384c5d17b54673098f7,S|1701|8801812777420|8d0f2d60d16f10c5392d2a18ee0afc68,S|1701|8801914932137|167f9acc4bb9766ce6f7912db97a4b13,S|1701|8801914079500|1cf828955d41c6e81ae41db80058ba68,S|1701|8801949303500|c01f0296cc148c92f8fa2d72d611c9ee,S|1701|8801814767426|cb4e8d52d7e045861d609533b3ad7f20,S|1701|8801911624822|d98f604b24bc857588950d9bdf7dd828,S|1701|8801915103883|041dadacf1e6cced3470e9cafe886c6c,S|1701|8801681820693|181206ae611a3e08324cfb8ea8d54c43,S|1701|8801918049723|c504c6f58c378045f97b066cbe9edfec,S|1701|8801911226408|a9fc804109a8106759c9f21db3108db1,S|1701|8801934375235|069dc279693c19211ef88b126d446024,S|1701|8801912277029|a1a5e8cfc7ec91b69598313f651229aa,S|1701|8801828642919|9fa1515048ad163217af99065d091b29,S|1701|8801671776027|b47983c9f87519a45838d1b44a194e54,'),
(590, '666', '01913336223', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '6:11:45 PM', '2014-11-08', 'S|1701|8801913336223|33991c285f399f569939083e23cdfd6d,'),
(591, '666', '01823234734 |88 01683838797 |8801676052124 |8801912151710 |8801714540402 |8801916992366 |8801913728502 |8801671983066 |8801828414603 |8801956726581 |8801921321847 |8801912062480 |8801914839116 |8801912454320 |8801676048513 |8801672831881 |88 01671974571 |8801923034337 |8801676025272 |8801670471825 |8801973000040 |8801817546469 |8801922907813 |8801919302315 |8801855805662 |8801923238668 |8801922292806 |8801675550029 |8801671091858|8801674797346 |8801911324160 |8801911531130 |8801675861961 |8801671978372 |8801925950555 ', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 01/11/2014 (11am-5pm)\r\nwith CV&Photo. \r\nAdd:148,Shantinagar, 5th Floor,Dhaka \r\n(Near White House Hotel)', '6:25:35 PM', '2014-11-08', 'S|1702,'),
(592, '666', '01823234734 |88 01683838797 |8801676052124 |8801912151710 |8801916992366 |8801913728502 |8801671983066 |8801828414603 |8801956726581 |8801921321847 |8801912062480 |8801914839116 |8801912454320 |8801676048513 |8801672831881 |88 01671974571 |8801923034337 |8801676025272 |8801670471825 |8801973000040 |8801817546469 |8801922907813 |8801919302315 |8801855805662 |8801923238668 |8801922292806 |8801675550029 |8801671091858|8801674797346 |8801911324160 |8801911531130 |8801675861961 |8801671978372 |8801925950555 ', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '6:36:21 PM', '2014-11-08', 'S|1702,'),
(593, '666', '01823234734|8801683838797|8801676052124|8801912151710|8801916992366|8801313728502|8801671983066|8801828414603|8801921321847|8801912062480', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '6:40:12 PM', '2014-11-08', 'S|1701|8801823234734|d3e49bc7ce64b73b3f5276379419911c,S|1701|8801683838797|0d897533a954474816a55c7f6291972b,S|1701|8801676052124|702ca061e262e1d760755e8da8fd8cda,S|1701|8801912151710|53fce0802384839295a880cde65cf328,S|1701|8801916992366|d47f38c4cb98002717dd8f617f6f7e58,S|1706,S|1701|8801671983066|c2051e67ef3b35a0fa41c913f9a5893e,S|1701|8801828414603|05b1fc46f4f3a2ba4df04cdc9fbdefa3,S|1701|8801921321847|6976eaa1791f847a078c5b72e9d1e8ff,S|1701|8801912062480|23150195f2a182847372127af5b05c3c,'),
(594, '666', '01913728502', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '6:41:02 PM', '2014-11-08', 'S|1701|8801913728502|661fa5b4c118f3a9f563bc0d4ffe8ce7,'),
(595, '666', '01914839116|8801912454320|8801676048513|8801672831881|8801671974571|8801923034337|8801676025272|8801670471825|8801973000040|8801817546469|8801922907813|8801919302315|8801855505662|8801923238668|8801922292806|8801675550029|8801671091858 |8801674797346|8801911324160|8801911531130|8801675861961|8801671978372|8801678050012|8801557785551|8801197227779|8801557734004|8801838379737|8801553363017|8801674797346 |8801911324160 |8801911531130 |8801675861961 |8801671978372 |8801925950555 ', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '6:55:30 PM', '2014-11-08', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(596, '666', '01823234734|8801683838797|8801676052124|8801912151710|8801916992366|8801913728502|8801828414603|8801956726581|8801921321847|8801912062480|8801914839116|8801912454320|8801676048513|8801672831881|8801671974571|8801923034337|8801676025272|8801670471825|8801973000040|8801817546469|8801922907813|8801919302315|8801855805662|8801923238668|8801922292806|8801675550029|8801671091858|880174797346|8801911324160|8801911531130|8801675861961|8801671978372|8801925950555|8801678050012', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '7:22:23 PM', '2014-11-08', 'S|1701|8801823234734|114f4059c41fbde34e06e0fc0f3d8e35,S|1701|8801683838797|bf97638e87376aae90d86a08061dffb1,S|1701|8801676052124|50df2bbc14f0e88d30d616ceaea1faa4,S|1701|8801912151710|1265c04ac3be1c3e60cc01206d6f8b7e,S|1701|8801916992366|d9c876f1757bd3f63b9787cf201526ce,S|1701|8801913728502|2c61a7e3ed0a764b37e9ae0c70bca9fa,S|1701|8801828414603|80579f17b5b59153f644d48331271229,S|1701|8801956726581|c45306ed4b0280cc5d1ad934e67b33c4,S|1701|8801921321847|3822a409584e0c3d90b89b018ec59c26,S|1701|8801912062480|403f8f29887eece52bed488890a62e49,S|1701|8801914839116|afbf460393949a8d11c7194d79558b59,S|1701|8801912454320|574d34c1d2500e738ee0c1fbf703a1fd,S|1701|8801676048513|50a036e1bcd11ad9e4ca4bf6a2bc400a,S|1701|8801672831881|df529ca9f4dbfbadfeba023797e3e2b7,S|1701|8801671974571|61146269c199857aecbea4002b0f4ee5,S|1701|8801923034337|cf3c0c613e651bdb53d3d4ec863f8561,S|1701|8801676025272|4940d6be097d3c1c027836f9bcd6138c,S|1701|8801670471825|e91e490cbf7242cc4f41ca8cb033416a,S|1701|8801973000040|252e0d18c821ad434e811fa8ea15cd76,S|1701|8801817546469|09e589fd77e3787447a19b0ed4871d38,S|1701|8801922907813|665f676f5d8554cb9f2b871d4a8d8ec0,S|1701|8801919302315|94513a9c06f513b2d3e1b3d5855e3595,S|1701|8801855805662|cb7ef5acadc16a1beec67833c474c7b1,S|1701|8801923238668|531649eb79a3782364f68769203200f4,S|1701|8801922292806|c65585f590e09da16c868d29984b1534,S|1701|8801675550029|3cfe097a2a4271d81b1db71228ec9611,S|1701|8801671091858|8f05a8714d11a011904a1cd3ea953917,S|1702,S|1701|8801911324160|d906eda3e2179af94b4d1dca71380082,S|1701|8801911531130|0a5052cd6a077bf5d343135d798695e5,S|1701|8801675861961|627cb52606cf3603e3e91c91c5bb5353,S|1701|8801671978372|79301b7bf7e9c8d65445d8706628ae85,S|1701|8801925950555|e6171c5dab90b527ed2a0f454868d6d3,S|1701|8801678050012|15a8acdbaa467e460595208933aa127c,'),
(597, '666', '01674797346', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '7:25:36 PM', '2014-11-08', 'S|1701|8801674797346|6e0bd43916b554176b74c11201d4e26b,'),
(598, '666', ' 01737971648 |8801725440733 |8801915460694 |8801688496590 |8801921918338 |8801613644609 |8801914178160 |8801749334408 ', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '7:30:14 PM', '2014-11-08', 'S|1706,'),
(599, '666', '01915460694|8801688496590|8801921918338|8801613644609|8801914178160|8801838379737|8801553363017|8801711580703', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 9-10/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '7:38:49 PM', '2014-11-08', 'S|1701|8801915460694|34c93a9510b9069824bfd9de67bcb9f3,S|1701|8801688496590|53e7a72ffc50d07d1010adaf416443fc,S|1701|8801921918338|74cdd0f57963c917d0d5893c49d9e207,S|1701|8801613644609|e91fc55177739402c017904cf140d0b1,S|1701|8801914178160|460ebaf45646a88371a6b92b220aa072,S|1701|8801838379737|d2c2dd48488a6da3b9997775751093a8,S|1701|8801553363017|f809ec63e844d5e2c754a4a642d11cd8,S|1702,');
INSERT INTO `sms` (`id`, `eiin_number`, `phone1`, `sms`, `time`, `date`, `api_status`) VALUES
(600, '666', '01913736884 |8801818336302 |8801915478015 |8801853959595 |8801673390888|8801917478278 |8801923652878 |8801914810233 |8801685808232 |8801671884776 |8801686673170 |8801920733522 |8801675951940 |8801670818024 |8801811944242|8801911806804|8801675250858|8801913159194|8801677322497|8801686768631|8801910407125|8801964926075|8801836076227|8801680077879|8801860066660|8801838379737|8801676040331|8801670558550|8801676724403|8801685695575|8801917338990|8801812601966|8801915621858|8801912162354|8801674732413|8801913641810|8801688524868|8801673914131|8801922655810|8801671165385|8801934026982|8801918527186|8801915790350|8801916375767|8801920651048|8801681300379|8801911064553|8801911064653|8801924030070|8801689994519|8801670445151|8801916112375|8801673673535|8801681845686|8801670721520|8801911186880|8801818987544', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 12-13/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '8:37:05 PM', '2014-11-11', 'S|1702,'),
(601, '666', '01913736884|8801813336302|8801915478015|8801853959595|8801673390888|8801917478278|8801923652878|8801914810233|8801685808232|8801671884776|8801686673170|8801920733522|8801675951940|8801670818024|8801811944242|8801911826804|880175250858|8801913159194|8801677322497|8801686768631|8801910407125|8801964926075|8801836076227|8801680077879|8801860066660|8801838379737|8801676040331|8801670558550|8801676724403|8801685695575|8801917338990|8801812601966|8801915621858|8801912162354|8801674732413|8801913641810|8801688524868|8801673914131|8801922655810|880161165385|8801934026982|8801918527186|8801915790350|8801916375767|8801920651048|8801681300379|8801911064553|8801911064653|8801924030070|8801689994519|8801670445151|8801670445151|8801916112375|8801673673535|8801681845686|8801670721520|8801911186880', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 12-13/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '8:55:05 PM', '2014-11-11', 'S|1701|8801913736884|0856e1a005c74dd96a56a505d5bf9f89,S|1701|8801813336302|e19bf294d67fadebfc15576c23621623,S|1701|8801915478015|7fde864890a9f13d4685639621d80680,S|1701|8801853959595|7533bf933bf78f9e09f433f6f2ed9561,S|1701|8801673390888|204c45f4fa76edd21b1b986d4e360c70,S|1701|8801917478278|442762076558d1a90215b75eabd3f08e,S|1701|8801923652878|a6f04ca29d128074674b56d2b0728362,S|1701|8801914810233|8627dc6ac17821ae3c1b78f6957cb903,S|1701|8801685808232|780a4388052c5088fd7a6e63f285fe5a,S|1701|8801671884776|326eb1424f16bc2e87e292b797759a07,S|1701|8801686673170|a84e78ea8dc7b82e2a04b994d305949e,S|1701|8801920733522|45585cc755e1910555176d5295c127d8,S|1701|8801675951940|c60f800a9ca45e2ff0c121dcdc4fee4b,S|1701|8801670818024|5e71d510e4f9f03bc9ae9f20d1da23dc,S|1701|8801811944242|803e7d6d75c2b5208b9a2fafb18b9174,S|1701|8801911826804|c61ea5ef94f62077223a3589d1c508d4,S|1702,S|1701|8801913159194|5881a695de8b28f52c1d50944a056cf8,S|1701|8801677322497|1f08ec60f4404cc1407a7a5a70b98063,S|1701|8801686768631|32f73e457055e06dc59cd2062082526b,S|1701|8801910407125|2a37e9f8a5108027989f4c4eb29bab3c,S|1701|8801964926075|75a46465ea85938daccb9b92da0b82ee,S|1701|8801836076227|c819bb3adddea3536fbf2f604cf99379,S|1701|8801680077879|6526f71766bd65ed27fbab3cacc214d7,S|1701|8801860066660|4fb4e1ee2830ff99844b606698499134,S|1701|8801838379737|552e9ec31810a291cf255c917ec6025b,S|1701|8801676040331|f1e872ea2432eb2cf453b8ddfde7e733,S|1701|8801670558550|800861613d0fc2f7cd0c17a81fe58ed4,S|1701|8801676724403|045e253202dbde70c8c7bcf8a2be2439,S|1701|8801685695575|d3fc452fc53211c9627082d912d1ed9e,S|1701|8801917338990|a42852e8b1040ae78c1cac590a9a56ce,S|1701|8801812601966|7aee82ae43229958ac7e541a8af34e92,S|1701|8801915621858|1bcb158f6833899c448c059508556c2e,S|1701|8801912162354|f883cbc6327975729493e502daab56a9,S|1701|8801674732413|3d36607c8fb1f8323af491e216b91a96,S|1701|8801913641810|b865a828cf528ba5558fb30a6d20a9c6,S|1701|8801688524868|9f6016a30d9e20351054be1a6f38b44b,S|1701|8801673914131|825c461bc9acd2ed43a786fd5965c597,S|1701|8801922655810|fff5b2aad8807c5e19c33f31f894ab6a,S|1702,S|1701|8801934026982|5c2b518ff445dc5316247c6a903bd356,S|1701|8801918527186|7ecb0a155d5e01a9cbd69456e54d2ca8,S|1701|8801915790350|ce193967fc43867f5d48c89b9d6be2e7,S|1701|8801916375767|3a3dadb0a549757109911ab06de546dd,S|1701|8801920651048|a30abb191afc5a365281676903322724,S|1701|8801681300379|2a874d7966856abb5440be23e72d6138,S|1701|8801911064553|981fee402f77ca3b793eab84702f7050,S|1701|8801911064653|8acef26b3c217fc0ab9a5214d368fc6e,S|1701|8801924030070|d995ab77b111ed3a5654ca2a839b8482,S|1701|8801689994519|f65b7999ccc545d9087648870acc394e,S|1701|8801670445151|13df3879390b6b3a1aa3de74f0bd9b67,S|1701|8801670445151|03b79da55045c16e66715a9da21bc200,S|1701|8801916112375|70a777022ad4d31f47a6b456aa88a20d,S|1701|8801673673535|4b7241f478caf95b0cbea8006b7c0093,S|1701|8801681845686|19f5abf72f178beed016079cc27339c2,S|1701|8801670721520|59f567ba0d929dabc1aa1871a7b44cc4,S|1701|8801911186880|ae9af2b632066601e136fef43fbabbd3,'),
(602, '666', '01675250858|8801671165385', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 12-13/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '8:58:13 PM', '2014-11-11', 'S|1701|8801675250858|387184b7785a226342e5681c2af3f068,S|1701|8801671165385|a32e6b48f57ec18bcd058fd4af114960,'),
(603, '666', '01816483868 |8801670966231 |8801671789189 |8801919429080 |8801676412908 |8801836996493 |8801818758085 |8801937576557|8801612022202|8801683886430 |8801675343777 |8801685726277 |8801819122770 |8801913044769 |8801929958460 |8801815728046 |8801915791279|8801913726514 |8801924846715 |8801917143345 |8801673870087 |8801860000046 |8801912298771 |8801672441927 |8801912243300|8801918616844 |8801922663907 |8801918337268 |8801674786842 |8801670538200 |8801920243112 |8801916472477 |8801687350649 |8801687865505 |8801912592737 |8801675285271 |8801687051657 |8801911506258 |8801912056043 |8801823321647 |8801916973198 |8801912021931 |8801729676305 |8801859553545 |8801813232477 |8801840708372 |8801617444234 |8801814306949 |8801670240668 |8801916902851 |8801911686609 |8801670465252 |8801672534802', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 12-13/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '9:04:53 PM', '2014-11-11', 'S|1702,'),
(604, '666', '01816483868|8801670966231|8801671789189|8801919429080|8801676412908|8801836996493|8801818758085|8801937576557|8801612022202|8801683886430|8801675343777|8801685726277|8801819122770|8801913044769|8801929958460|8801815728046|8801915791279|8801913726514|8801924846715|8801917143345|8801673870087|8801860000046|8801912298771|8801672441927|8801912243300|8801918616844|8801922663907|8801918337268|8801674786842|8801670538200|8801920243112|8801916472477|8801687350649|8801687875505|8801912592737|8801675285271|8801687051657|8801911506258|8801912056043|8801823321647|8801916973198|8801912021931|8801859553545|8801813232477|8801924606452|8801840708372|8801617444234|8801814306949|8801670240668|8801916902851|8801911686609|8801670465252|8801672534802', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 12-13/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '9:20:56 PM', '2014-11-11', 'S|1701|8801816483868|102a74a4ec2a2e6f47f28b4b4c248b52,S|1701|8801670966231|a893e8c8b4e66449aa53918cdf26db0d,S|1701|8801671789189|f675cc276e29b3630b909f92139a7975,S|1701|8801919429080|34d79741ebe945780a83c95e9f43ee09,S|1701|8801676412908|1ff4160184ff1e490244e00acbc46114,S|1701|8801836996493|611231442df05e70232117e41e95d0f2,S|1701|8801818758085|d111409c806cc061bf43e85590a3020e,S|1701|8801937576557|5e7a27d758f864a3bba9650e9df23acc,S|1701|8801612022202|240afd384c22622b08bb3c0ffab038ff,S|1701|8801683886430|bd693104842e91822c49d76f9c30580d,S|1701|8801675343777|7e181007326354c9bbbdb6f620d6a585,S|1701|8801685726277|38d077aca25522ef402a7e5ee848fc22,S|1701|8801819122770|c02b373e858df9e0f1da2e4d059d27f4,S|1701|8801913044769|9f53353cb7eb64a4224f1745d798335b,S|1701|8801929958460|774ca64ec79a5dc72f2eba33370c8da8,S|1701|8801815728046|0a3686d40c1b764a4c898eb8c1a8d687,S|1701|8801915791279|f9412cc35a9833983a1e575639bc1897,S|1701|8801913726514|f8ae23106bcb3fb91ffc507be4bc8651,S|1701|8801924846715|46852c92acc0a2c87c00473596d696a2,S|1701|8801917143345|4e825be70bddaf471fb5733735192b7e,S|1701|8801673870087|af53fe8580199e59707be7f51cc98136,S|1701|8801860000046|66db76af180986637c7778db4cbd6208,S|1701|8801912298771|255192089dcda3014515f4c87846bf2b,S|1701|8801672441927|91b36ca91049493b7a0e3709be524cf1,S|1701|8801912243300|d0c9a9506fffaa638b32a0bc0efe8ee4,S|1701|8801918616844|e8d8b3504525dfeff666dbc22c640648,S|1701|8801922663907|6c9e37753073d9438c4044280026e3b1,S|1701|8801918337268|8f87ecbbd2d95f68bce5604391587ecf,S|1701|8801674786842|f7049cc956da676c70de3c706aa3e42c,S|1701|8801670538200|97813b178ca464f08cf1cfe72019c07c,S|1701|8801920243112|f534a4f9a0a70b7cd83ad9192650b031,S|1701|8801916472477|b6a1bfabfd1d9a2346ac0a8d60e3be5c,S|1701|8801687350649|37b9bb8b41f0ec888ff48bd6c9c3579b,S|1701|8801687875505|5bf136f3bcba555d5f2885090368db49,S|1701|8801912592737|1ba5c01d6e177a61f7e726a9646c3019,S|1701|8801675285271|0170bf3c4da1af8b12017f2c56536849,S|1701|8801687051657|b7c8050ed3a45c07546893846c236a8d,S|1701|8801911506258|d001b86e57c1633ce09b0ab2999f0b61,S|1701|8801912056043|e5e21ebd7b6cd6d7325934c5dff25c55,S|1701|8801823321647|38565ee8b2c78b02b2f04fc393f5914a,S|1701|8801916973198|8d42b7dc720ef2aff7cb5b0ab79ebca8,S|1701|8801912021931|396c0f89e2467224a76314139fa747c9,S|1701|8801859553545|469a3af430cf55849260bc38a55dd16d,S|1701|8801813232477|aaab558f28d82ff09653c114a95b29a7,S|1701|8801924606452|2a5bd85c93f7644f40dfac0e3452f267,S|1701|8801840708372|6d4d34c806ff7a2e84cb600d2f5ca270,S|1701|8801617444234|7e30b6151b93c90281643b29321da631,S|1701|8801814306949|1aded0e5a601364fef6cec00c7eda678,S|1701|8801670240668|f159911862f5ea6ab078f173dda7d347,S|1701|8801916902851|8759542a33f8132f6368102ba7338bbe,S|1701|8801911686609|3c3671136372318980122fb90a1de78c,S|1701|8801670465252|101b88e5e402c073315d610974933713,S|1701|8801672534802|2f05f78b8ac5ad12d98af4e483adb97a,'),
(605, '666', '01913514455|8801917642758|8801818166752', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 12-13/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '9:26:46 PM', '2014-11-11', 'S|1701|8801913514455|1c8f72940106cc7bb287acc605d3fdf8,S|1701|8801917642758|6a5b392933275cf99155353ca5787da2,S|1701|8801818166752|2850a80426328385ee6e30514b80ea1d,'),
(606, '666', '01818987544|8801721105563 |8801766990096 |8801713773547 |8801717057112', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 12-13/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '9:33:17 PM', '2014-11-11', 'S|1702,S|1702,'),
(607, '666', '01818987544|8801917481192|8801842308153|8801617285740|8801676927479', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 12-13/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '9:35:52 PM', '2014-11-11', 'S|1701|8801818987544|199bf548dd0ddb2decdcb489a0f6c879,S|1701|8801917481192|97a61e95ebf5d7913e86da5f94cbf0e1,S|1701|8801842308153|4b6c40a5352ac7db918a237d172d9785,S|1701|8801617285740|5e1c67ade46071322f0b8191040d7a27,S|1701|8801676927479|9a3eb114b8ece44d08a7da855f789e05,'),
(608, '666', '01671448829|8801911353197|8801553363017', 'Dear Applicant,\r\nWe''d like to invite u for interview on 15-16/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '12:22:50 PM', '2014-11-14', 'S|1701|8801671448829|a210aaea0558cb7759d8a28b03b9d852,S|1701|8801911353197|97a3a474d44cb8d519d71e30c6b3699f,S|1701|8801553363017|829a449859bf916ccb852aad8c377497,'),
(609, '666', '01711580703', 'Dear Applicant,\r\nWe''d like to invite u for interview on 15-16/11/2014 (11am-5pm)\r\nwith CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '12:25:07 PM', '2014-11-14', 'S|1701|8801711580703|84b8302935751041e78c3dea92c97510,'),
(610, '666', '01671448829|8801911353197|8801553363017', 'Dear Applicant,\r\nThank you for submitting an application for\r\nthe position of TM at DREAMS TECH.\r\nWe would like to invite you to interview\r\nwithin Date: 06-09/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH 148,\r\nShantinagar,(5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623 Thanking You DREAMS TECH', '12:32:35 PM', '2014-11-14', 'S|1701|8801671448829|193f284179fb2ce10aecb389f75237d2,S|1701|8801911353197|35eec242efe9c189bfbd3146c22aab18,S|1701|8801553363017|abded183c979cb8972edca02fbc60e71,'),
(611, '666', '01711442688', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 06-09/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH 148,\r\nShantinagar,(5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '12:40:25 PM', '2014-11-14', 'S|1701|8801711442688|3f72e7c191331e0bd3e833bdea45d748,'),
(612, '666', '01828623201|8801711580703', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 06-09/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress:\r\nDREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '12:43:36 PM', '2014-11-14', 'S|1701|8801828623201|0c14e54f2b7d5686ec4f81453460e0ff,S|1701|8801711580703|da29e8cd0cb66a716363a389951817f2,'),
(613, '666', '01671448829|8801553363017', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 06-09/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress:\r\nDREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '1:35:54 PM', '2014-11-14', 'S|1701|8801671448829|c426eae6934603b9239de07c9ad9d4de,S|1701|8801553363017|5aa9e895090f087642691bcf19e43473,'),
(614, '666', '01675888451|8801722466688|8801758970322|8801717736062|8801746755138|8801771476406|8801717113808|8801797722115|8801820069285|8801703152413|8801777187763|8801757031337|8801670036983|8801779664422|8801723074153|8801712597241|8801740872598|8801536245910|8801759840650|8801671884776|8801717591231|8801729572417|8801725019838|8801724487724|8801717308020|8801773471751|8801725224958|8801774890491|8801717345254|8801717229977|8801711597555|8801728743176|8801686795408|8801717817232|8801717614780|8801723592408|8801710243317|8801715298831|8801710502235|8801679509948|8801673089193|8801740872598|8801741701343|8801779664422|8801734739233|8801777187763|8801722072343|8801670443314|8801670885684|8801710243317|8801723333203|8801722578553|8801710452052|8801715691949|8801790007006|8801713644609|8801737915292|8801720169292|8801731414226|8801755203050 |8801711873357 |8801779300001 |8801719936671|8801739413503 |8801722213793 |8801680076954 |8801673867084 |8801727885727 |8801722538497 |8801671870335 |8801793565979 |88 01676599565 |8801751122367 |8801829534910 |8801841520340 |8801672295466 |8801750637357 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 16-17/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress:\r\nDREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '3:51:21 PM', '2014-11-14', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(615, '666', '01675888451|8801722466688|8801758970322|8801717736062|8801746755138|8801771476406|8801717113808|8801797722115|8801820069285|8801703152413|8801777187763|8801757031337|8801670036983|8801779664422|8801723074153|8801712597241|8801740872598|8801536245910|8801759840650|8801671884776|8801717591231|8801729572417|8801725019838|8801724487724|8801717308020|8801773471751|8801725224958|8801774890491|8801717345254|8801717229977|8801711597555|8801728743176|8801686795408|8801717817232|8801717614780|8801723592408|8801710243317|8801715298831|8801710502235|8801679509948|8801673089193|8801740872598|8801741701343|8801779664422|8801734739233|8801777187763|8801722072343|8801670443314|8801670885684|8801710243317|8801723333203|8801722578553|8801710452052|8801715691949|8801790007006|8801713644609|8801737915292|8801720169292|8801731414226|8801755203050|8801711873357|8801779300001|8801719936671|8801739413503|8801722213793|8801680076954|8801673867084|8801727885727|8801722538497|8801671870335|8801793565979|88 01676599565|8801751122367|8801829534910|8801841520340|8801672295466|8801750637357 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 16-17/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress:\r\nDREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '4:05:47 PM', '2014-11-14', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1706,'),
(616, '666', '01675888451|8801722466688|8801758970322|8801717736062|8801746755138|8801771476406|8801717113808|8801797722115|8801820069285|8801703152413|8801777187763|8801757031337|8801670036983|8801779664422|8801723074153|8801712597241|8801740872598|8801536245910|8801759840650|8801671884776|8801717591231|8801729572417|8801725019838|8801724487724|8801717308020|8801773471751|8801725224958|8801774890491|8801717345254|8801717229977|8801711597555|8801728743176|8801686795408|8801717817232|8801717614780|8801723592408|8801710243317|8801715298831|8801710502235|8801679509948|8801673089193|8801740872598|8801741701343|8801779664422|8801734739233|8801777187763|8801722072343|8801670443314|8801670885684|8801710243317|8801723333203|8801722578553|8801710452052|8801715691949|8801790007006|8801713644609|8801737915292|8801720169292|8801731414226|8801755203050|8801711873357|8801779300001|8801719936671|8801739413503|8801722213793|8801680076954|8801673867084|8801727885727|8801722538497|8801671870335|8801793565979|88 01676599565|8801751122367|8801829534910|8801841520340|8801672295466|8801750637357 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 16-17/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress:\r\nDREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '3:09:21 PM', '2014-11-15', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1706,'),
(617, '666', '01675888451|8801722466688|8801758970322|8801717736062|8801746755138|8801746755138|8801771476401|8801717113808|8801797722115|8801820069285|8801703152413|880177187763|8801757031337|8801670036983|8801779664422|8801723074153|8801712597241|8801740872598|8801536245910|8801759840650|8801671884776|8801717591231|8801729572417|8801725019838|8801724487724|8801717308020|8801773471751|8801725224958|8801774890491|8801717345254|8801717229977|8801711597555|8801728743176|8801686795408|8801717817232|8801717614780|8801723592408|8801710243317|8801715298831|8801710502235|8801679509948|8801673089193|8801740872598|8801741701343|8801779664422|8801734739233|8801777187763|8801722072343|8801670443314|8801670885684|8801710243317|8801723333203|8801722578553|8801710452052|8801715691949|8801790007006|8801713644609|8801737915292|8801720169292|8801731414226|8801755203050|8801711873357|8801779300001|8801710131326|8801722770416|8801741550306|8801840708372|8801617444234|8801711082267|8801814306949|8801780118877|8801712056858|8801670240668|8801746686655|8801732613129|8801722057546|8801772112202', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 16-17/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress:\r\nDREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '3:32:08 PM', '2014-11-15', ''),
(618, '666', '01675888451|8801722466688|8801758970322|8801717736062|8801746755138|8801746755138|8801771476401|8801717113808|8801797722115|8801820069285|8801703152413|880177187763|8801757031337|8801670036983|8801779664422|8801723074153|8801712597241|8801740872598|8801536245910|8801759840650|8801671884776|8801717591231|8801729572417|8801725019838|8801724487724|8801717308020|8801773471751|8801725224958|8801774890491|8801717345254|8801717229977|8801711597555|8801728743176|8801686795408|8801717817232|8801717614780|8801723592408|8801710243317|8801715298831|8801710502235|8801679509948|8801673089193|8801740872598|8801741701343|8801779664422|8801734739233|8801777187763|8801722072343|8801670443314|8801670885684|8801710243317|8801723333203|8801722578553|8801710452052|8801715691949|8801790007006|8801713644609|8801737915292|8801720169292|8801731414226|8801755203050|8801711873357|8801779300001|8801710131326|8801722770416|8801741550306|8801840708372|8801617444234|8801711082267|8801814306949|8801780118877|8801712056858|8801670240668|8801746686655|8801732613129|8801722057546|8801772112202', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 16-17/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress:\r\nDREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '3:33:55 PM', '2014-11-15', 'S|1701|8801675888451|32b79340b5917490d565857d4ff7d72d,S|1701|8801722466688|cabe9879a92aa79338fb820c547bccbe,S|1701|8801758970322|05a471c829c4957f3e4539c50eef9d43,S|1701|8801717736062|e861c945bd544d8c616dde991641b284,S|1701|8801746755138|90755f8690a869e7a4391bbb8db31893,S|1701|8801746755138|05ff73c08229fd0007fb948f43ecc4d3,S|1701|8801771476401|26d693feaf57c9961afc84aa2b86b668,S|1701|8801717113808|6e7b56f4f130f1644554cd5bfa67aaca,S|1701|8801797722115|2a9f6c9b1a262273784a474e68075cf6,S|1701|8801820069285|a4b6a858cf7182c519b7270ca725eb0b,S|1701|8801703152413|c86fd90592729c5fc50bd9523990a146,S|1702,S|1701|8801757031337|6e713e5280b29c647cdb994231f52f5f,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(619, '666', '01777187763|8801670036983|8801779664422|8801723074153|8801712597241|8801740872598|8801536245910|8801759840650|8801671884776|8801717591231|8801729572417|8801725019838|8801724487724|8801717308020|8801773471751|8801725224958|8801774890491|8801717345254|8801717229977|8801711597555|8801728743176|8801686795408|8801717817232|8801717614780|8801723592408|8801710243317|8801715298831|8801710502235|8801679509948|8801673089193|8801740872598|8801741701343|8801779664422|8801734739233|8801777187763|8801722072343|8801670443314|8801670885684|8801710243317|8801723333203|8801722578553|8801710452052|8801715691949|8801790007006|8801713644609|8801737915292|8801720169292|8801731414226|8801755203050|8801711873357|8801779300001|8801710131326|8801722770416|8801741550306|8801840708372|8801617444234|8801711082267|8801814306949|8801780118877|8801712056858|8801670240668|8801746686655|8801732613129|8801722057546|8801772112202', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 16-17/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress:\r\nDREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '3:39:28 PM', '2014-11-15', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(620, '666', '01671448829', 'Dear Applicant,\r\nWe''d like to invite u for interview \r\non 01/11/2014 (11am-5pm) with CV&Photo. \r\nAdd:148,Shantinagar, 5th Floor,Dhaka \r\n(Near White House Hotel)	\r\n', '3:42:18 PM', '2014-11-15', 'S|1702,'),
(621, '666', '01553363017', 'Dear Applicant,\r\nWe''d like to invite u for interview \r\non 01/11/2014 (11am-5pm) with CV&Photo. \r\nAdd:148,Shantinagar, 5th Floor,Dhaka \r\n(Near White House Hotel)', '3:47:26 PM', '2014-11-15', 'S|1702,'),
(622, '666', '01671448829', 'Dear Applicant,\r\nWe''d like to invite u for interview \r\non 01/11/2014 (11am-5pm) with CV&Photo. \r\nAdd:148,Shantinagar, 5th Floor,Dhaka \r\n(Near White House Hotel)', '3:49:53 PM', '2014-11-15', 'S|1702,'),
(623, '666', '01911353197', 'Dear Applicant,\r\nWe''d like to invite u for interview \r\non 01/11/2014 (11am-5pm) with CV&Photo. \r\nAdd:148,Shantinagar, 5th Floor,Dhaka \r\n(Near White House Hotel)', '3:50:36 PM', '2014-11-15', 'S|1702,'),
(624, '666', '01553363017', 'Dear Applicant,\r\nWe''d like to invite u for interview \r\non 01/11/2014 (11am-5pm) with CV&Photo. \r\nAdd:148,Shantinagar, 5th Floor,Dhaka \r\n(Near White House Hotel)', '3:56:13 PM', '2014-11-15', 'S|1702,'),
(625, '666', '01671448829', 'Dear Applicant,\r\nWe''d like to invite u for interview \r\non 01/11/2014 (11am-5pm) with CV&Photo. \r\nAdd:148,Shantinagar, 5th Floor,Dhaka \r\n(Near White House Hotel)', '4:24:29 PM', '2014-11-15', 'S|1702,'),
(626, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 16-17/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress:\r\nDREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '10:42:01 AM', '2014-11-16', 'S|1702,'),
(627, '666', '01671448829', 'hi.....', '10:43:58 AM', '2014-11-16', 'S|1702,'),
(628, '666', '01553363017', 'hi.....', '1:45:50 PM', '2014-11-16', 'S|1702,'),
(629, '666', '01671448829', 'Dear Applicant,\r\nWe''d like to invite u for interview \r\non 01/11/2014 (11am-5pm)\r\nwith CV&Photo. \r\nAdd:148,Shantinagar, 5th Floor,Dhaka \r\n(Near White House Hotel)', '4:53:25 PM', '2014-11-16', 'S|1701|8801671448829|01e2124cf75547d3cdf8bc366cb91412,'),
(630, '666', '01911353197|8801553363017', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 16-17/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress:\r\nDREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '4:56:36 PM', '2014-11-16', 'S|1701|8801911353197|5377af214aaf4b397a749ef15f8b762e,S|1701|8801553363017|b120a6bd01be304d6da51a2e802eb49f,'),
(631, '666', '01828623201', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 16-17/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '4:59:54 PM', '2014-11-16', 'S|1701|8801828623201|2c22196df5f4457e310b368d6185e630,'),
(632, '666', '01749419017', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 16-17/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress:\r\nDREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '5:04:17 PM', '2014-11-16', 'S|1701|8801749419017|e458068c66ad9aa211c64fdcaa57b182,'),
(633, '666', '01771476406|8801777187763|8801670036983|8801779664422|8801723074153|8801712597241|8801740872598|8801536245910|8801759840650', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 16-17/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:18:43 PM', '2014-11-16', 'S|1701|8801771476406|ae11d0fff7e0004b8080f19d371a75ff,S|1701|8801777187763|c6bbabcd3ee490d1599cf141a37d1adb,S|1701|8801670036983|ba1b6ecced47dafc366907cf6660a735,S|1701|8801779664422|c00d9c5a3526784a00bb184807a0136e,S|1701|8801723074153|ab266fc2dfcc7cceed3308561bbbff97,S|1701|8801712597241|8f0fdacdbce8936c4f8c28f5b8f5b56f,S|1701|8801740872598|ae13da029704a984594efb247802ca64,S|1701|8801536245910|9b969f8abc0ad50734e802bc644be5de,S|1701|8801759840650|12cae881bc10425bc4956307159c905e,'),
(634, '666', '01771476406|8801777187763|8801670036983|8801779664422|8801723074153|8801712597241|8801740872598|8801536245910|8801759840650', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:23:53 PM', '2014-11-16', 'S|1701|8801771476406|09e9e95236f237a11cce397e00ce48a1,S|1701|8801777187763|02054a9a43777b759e7d3833fb376e69,S|1701|8801670036983|1cb5d50ad20e091b4724fc5e6cccfdf9,S|1701|8801779664422|a3928024fea75e788f74b074bb1514e9,S|1701|8801723074153|0ec32d0e469427189bf8880979542c0c,S|1701|8801712597241|261330f686630787ecc930ba1e55e800,S|1701|8801740872598|cfc4697f76b4907b1e47a993046cc3e9,S|1701|8801536245910|8af88764c80f99db29c753c254c45e98,S|1701|8801759840650|ef69627fe88ce2c142d6a351424ab16b,'),
(635, '666', '01671884776|8801717591231|8801729572417|8801725019838|8801724487724|8801717308020|8801773471751|8801725224958|8801774890491|8801717345254|8801717229977|8801711597555|8801728743176|8801686795408|8801717817232|8801717614780|8801723592408|8801710243317|8801715298831', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:27:05 PM', '2014-11-16', 'S|1701|8801671884776|d3884423b1b780ec31e2a4c22b746c5b,S|1701|8801717591231|5dff045700c497f56bcb283b3302e962,S|1701|8801729572417|4ddac9ac7ac40bf4fef548a02f731d83,S|1701|8801725019838|cc69eba1c7a7c45b7b68e227b6b452e3,S|1701|8801724487724|2550d2f528051b5ce8094e4255926dcb,S|1701|8801717308020|0aa7ab0d9ffb1ca98797f98ec2004bc5,S|1701|8801773471751|34ee97071eb70d411ba91e82fba333df,S|1701|8801725224958|0920a032549a101430c20b56d63051dc,S|1701|8801774890491|d53319d92dfdc31851245dd78916cf85,S|1701|8801717345254|66cdce8ef0f94bac3f1f0044a3e0cb3b,S|1701|8801717229977|5cee1268ed290553f8f99d48e1d90ccf,S|1701|8801711597555|f569eaa475622da5f9185de440d7d29e,S|1701|8801728743176|4737e4631020c6487add421a62908883,S|1701|8801686795408|97f8efa9f98e2b1999aba8cf8074eb97,S|1701|8801717817232|83a6a0ebbcf50d7915f61be4ec02b83f,S|1701|8801717614780|bd1246bf984583104bb448e51210a898,S|1701|8801723592408|4a90c36c1b6c96574587a65fa0b06870,S|1701|8801710243317|7d0ea44f6d411109538bfaba7b8e05bd,S|1701|8801715298831|a91fc9cd3670ede0b5cf8ac2b9ba8f10,'),
(636, '666', '01710502235|8801679509948|8801673089193|8801740872598|8801741701343|8801779664422|8801734739233|8801777187763|8801722072343|8801670443314|8801670885684|8801710243317|8801723333203|8801722578553|8801710452052|8801715691949|8801790007006|8801713644609|8801737915292|8801720169292', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:29:36 PM', '2014-11-16', 'S|1701|8801710502235|4d1f26ff5552283338c0d8b759e08bc4,S|1701|8801679509948|13e81fe181cad9422dac8271924fc4c8,S|1701|8801673089193|afae5d5fcf997dd8e714c1282facefe1,S|1701|8801740872598|18536191c360466efb1d4f2106d02fc9,S|1701|8801741701343|0483b85abec5f1f6a72d9632aa847666,S|1701|8801779664422|2a5dbe600e17d46e635ada5ca4a76824,S|1701|8801734739233|ac6b7a27c17287c830a2cf058aacb087,S|1701|8801777187763|c64aa726effa6776341672ea469011e7,S|1701|8801722072343|b632ea79071fe7807dfa979d1cd642cf,S|1701|8801670443314|0976a029b735c65c301c0574e35bef95,S|1701|8801670885684|9405b81da607b9e9d3ce60999b466c29,S|1701|8801710243317|671a90e7d7acccf95a9f4c1ca27c9ba0,S|1701|8801723333203|e98b657b96ff3d9ee08fc00e2119d295,S|1701|8801722578553|5b7d5b521b850be8c6f9d6089a64fdb5,S|1701|8801710452052|558ae30a723d3adcdefca646adedd2f6,S|1701|8801715691949|d2fd4bf3a652c7b2bda39bac67210ef0,S|1701|8801790007006|7cbe19974fcb2eae05a597563c185cb1,S|1701|8801713644609|d1203d004d97101a4e3d46905b3bbdc1,S|1701|8801737915292|209318a8a0d2d0bc2e6038263a0fdd92,S|1701|8801720169292|f6c81eace02648f24235040ebded09f0,'),
(637, '666', '01711873357 |8801779300001 |8801719936671|8801739413503 |8801722213793 |8801680076954 |8801673867084 |8801727885727 |8801722538497 |88 01838-471872 |8801671870335 |8801793565979 |88 01676599565 |8801751122367 |8801829534910 |8801841520340 |8801672295466 |8801750637357 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:32:44 PM', '2014-11-16', 'S|1702,'),
(638, '666', '01711873357 |8801779300001 |8801719936671|8801739413503 |8801722213793 |8801680076954 |8801673867084 |8801727885727 |8801722538497 |88 01838-471872 |8801671870335 |8801793565979 |88 01676599565 |8801751122367 |8801829534910 |8801841520340 |8801672295466 |8801750637357 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:34:20 PM', '2014-11-16', 'S|1702,'),
(639, '666', '01731414226|8801755203050 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:35:13 PM', '2014-11-16', 'S|1702,S|1702,'),
(640, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:36:04 PM', '2014-11-16', 'S|1701|8801671448829|46ab53acaad7b32cfcd7269830089ec8,'),
(641, '666', '01731414226|8801755203050 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:37:28 PM', '2014-11-16', 'S|1702,S|1702,'),
(642, '666', '01731414226|8801755203050', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:38:55 PM', '2014-11-16', 'S|1701|8801731414226|68b5ef2ac41246fcf2652c976e3090b9,S|1701|8801755203050|ec811a1452f8dedb1c32534332cd13b7,'),
(643, '666', '01711873357|8801779300001|8801710131326|8801722770416|8801741550306|8801840708372|8801617444234|8801711082267|8801814306949|8801780118877|8801712056858|8801670240668|8801746686655|8801732613129|8801722057546|8801772112202|8801670465252|880119985749', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:43:34 PM', '2014-11-16', 'S|1701|8801711873357|9314e3689bdb219e29e5f92e7c2cf6cf,S|1701|8801779300001|97a98babbe64975e14d3e04bc3a1892e,S|1701|8801710131326|5b4b64d0ec657a679f25860d05ec8fb6,S|1701|8801722770416|e6463a3334ffe1094192e73f5eb0f8c7,S|1701|8801741550306|3ec3eb35157d985e3d876be90d252ab0,S|1701|8801840708372|b368f92ef344c2c723f85834a312ba24,S|1701|8801617444234|5b914ba5df57f93ed8e10976b2920c71,S|1701|8801711082267|4d7d90dd3311f98195a02a84810b0d72,S|1701|8801814306949|54661a541ba1a0b3c8c48683ce222ac6,S|1701|8801780118877|41d7dfbd90a7850e6a5ad13ad6912e74,S|1701|8801712056858|dcbd447ea9978c3f40b85a0bfc5af5be,S|1701|8801670240668|0929e76d0588a9ffd71b1a2dc82e85e2,S|1701|8801746686655|8024cd0e0c8622331a4889b82011a701,S|1701|8801732613129|2ae3763e52058e80856f00746bd54b69,S|1701|8801722057546|9501c3b7f437d9ce64cc458c36ab5742,S|1701|8801772112202|300535e6f9859761f8ffaf9f37dc6231,S|1701|8801670465252|a18119a70b8972bc9ae95ea04bf8e6ca,S|1702,'),
(644, '666', '01719936671|8801739413503 |8801722213793 |8801680076954 |8801673867084 |8801727885727 |8801722538497 |88 01838-471872 |8801671870335 |8801793565979 |88 01676599565 |8801751122367 |8801829534910 |8801841520340 |8801672295466 |8801750637357 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 16-17/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:12:10 PM', '2014-11-16', 'S|1702,S|1702,'),
(645, '666', '01719936671|8801739413503 |8801722213793 |8801680076954 |8801673867084 |8801727885727 |8801722538497 |88 01838-471872 |8801671870335 |8801793565979 |88 01676599565 |8801751122367 |8801829534910 |8801841520340 |8801672295466 |8801750637357 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:18:04 PM', '2014-11-16', 'S|1702,S|1702,'),
(646, '666', '01719936671|8801739413503|8801722213793|8801680076954|8801673867084|8801727885727|8801722538497|8801838471872|8801671870335|8801793565979|8801676599565|8801751122367|8801829534910|8801841520340|8801672295466|8801750637357', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:24:16 PM', '2014-11-16', 'S|1701|8801719936671|736b69cf284c465af18009038d04b041,S|1701|8801739413503|c9e2a2833bc923bb3f8f6acc09d23b7a,S|1701|8801722213793|41b6b56e7b5f4881b976f6372d53a74a,S|1701|8801680076954|48aa4a33393a450d62a483bee45fed89,S|1701|8801673867084|bf252a6a47de87e9690366e49eba33af,S|1701|8801727885727|791f501e72155567a6262ce8e6ef869a,S|1701|8801722538497|4179599822720f9f77bfed8f1b8b860c,S|1701|8801838471872|bc32d65741b469bfeffc481ed30bb28a,S|1701|8801671870335|667fe2ff46a866ce25eb7840a30e7cb4,S|1701|8801793565979|7b3a1f6a1407d9b636e0c441a50bebcb,S|1701|8801676599565|553546cdd518c62aca001c3fe18d46b1,S|1701|8801751122367|0f6ebe168617dc5150c30f97b025c4a1,S|1701|8801829534910|625608e62a2bdd5da5c0ec0374b8dbd5,S|1701|8801841520340|580463dcf7bbb190854691c89bfa89dd,S|1701|8801672295466|47368de451a70bd45a470dd628ee3f7a,S|1701|8801750637357|ca486ffa917a81f54c6b0ed22a6dd95c,'),
(647, '666', '01673827171|8801772219190 |8801728211587 |8801738444849 |8801734739233 |8801780907994 |880170704094 |8801676017795 |8801811572443 |8801744693355 |8801719281980 |8801674993331 |8801717494653|8801727211643|8801855626364 |8801717977365 |8801723192241 |8801819148181|8801721219708 |88 01671870335 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:29:08 PM', '2014-11-16', 'S|1702,S|1702,'),
(648, '666', '01673827171|8801772219190|8801728211587|8801738444849|8801734739233|8801780907994|880170704094|8801676017795|8801811572443|8801744693355|8801719281980|8801674993331|8801717494653|8801727211643|8801855626364|8801717977365|8801723192241|8801819148181|8801721219708|8801671870335', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:35:03 PM', '2014-11-16', 'S|1701|8801673827171|be2da3d74a4713d28298712623bca1e0,S|1701|8801772219190|98cc3a43a5d23af27bf00e56b1c070a0,S|1701|8801728211587|8086bdd408fac62c3b4f907e65a7c274,S|1701|8801738444849|850a89fa29f1a48ad96b2388813fecf0,S|1701|8801734739233|c78ee22e98b43867c6473fe2d6b1eae0,S|1701|8801780907994|85677e49122ce290e31c24d1c723319b,S|1702,S|1701|8801676017795|5eab2d5701c5a7ce8762e0b3306d47c2,S|1701|8801811572443|2072dbffb89aaf56da6734739923319a,S|1701|8801744693355|1ba25981b881f62d3bea49d4558a3a26,S|1701|8801719281980|5845629b32fd07ab788d5217fb216d79,S|1701|8801674993331|33a297843fcc94a6cb97c41b07b5cc23,S|1701|8801717494653|58f2da4b7fecf8a0ffad8a5b5109e808,S|1701|8801727211643|3d34b30ac10e4c0827fa3dd75e523957,S|1701|8801855626364|5dea764b1a4c27fcec106770200992d5,S|1701|8801717977365|19f1256b001be87fcd18e57fe3d7d51f,S|1701|8801723192241|8a4e623e518c0edffe97a2d246bf7c9e,S|1701|8801819148181|c40b12e0c72cd859fe3acc7b50aeef57,S|1701|8801721219708|67c4600225b4a1f6113a643376e691e9,S|1701|8801671870335|45d440fed716fec2baa8a7443a14af6d,'),
(649, '666', '01712348029|8801710243378 |8801711309206 |8801829591378 |8801732176110 |8801672217110|8801670168766 |8801674699156 |8801678039633 |8801818841080 |88 01812759520 |8801729562303 |8801817046896|8801739256996 |8801743725517|8801811982835 |8801728131897 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:41:00 PM', '2014-11-16', 'S|1702,S|1702,'),
(650, '666', ' 01812759520 |8801729562303 |8801817046896|8801739256996 |8801743725517|8801811982835 |8801728131897 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:42:14 PM', '2014-11-16', 'S|1706,'),
(651, '666', '01712348029|8801710243378|8801711309206|8801829591378|8801732176110|8801672217110|8801670168766|8801674699156|8801678039633|8801818841080|8801812759520|8801729562303|8801817046896|8801739256996|8801743725517|8801811982835|8801828131897', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:48:26 PM', '2014-11-16', 'S|1701|8801712348029|9f5b9aa46caf44e079d5426560c4f93b,S|1701|8801710243378|5fa9d8c64b7a2747b565f3f413c59564,S|1701|8801711309206|f65c42624b5e59de9a07bb10639f05b0,S|1701|8801829591378|e807cbd02c2f5814fd0f81a043be6886,S|1701|8801732176110|3585e31f7fc16420a3aa7e9458fe8f41,S|1701|8801672217110|6d465d438fb570f78c52b2bf053d90b3,S|1701|8801670168766|6b2cdc25198e1034c6c009f1f1d691ef,S|1701|8801674699156|e905630e5a6de40856aa3a7f09a8a486,S|1701|8801678039633|3445033969c1e7de0f349ff99cd9eb2e,S|1701|8801818841080|c883dba9c89df750d7c7eccebd75447f,S|1701|8801812759520|a4e4a0d08272c773b1c4148bba568ae4,S|1701|8801729562303|3229b5248613d507d89c61e5c034e291,S|1701|8801817046896|c785f774ab6afc4cbdc363908597f1fc,S|1701|8801739256996|311007911d73b802b943d11ee6e90b77,S|1701|8801743725517|a917bbeb29eed882a66d299d62ca2998,S|1701|8801811982835|1a6e5311b7e25ad87e1f28c25df1be37,S|1701|8801828131897|e9f20dfd5569bf0af2f2dcdebbd249dc,'),
(652, '666', '01745262028 |8801703446988|8801677706342|8801764659487 |8801710494977|8801762470967 |8801710883596 |8801721277487|8801723830584 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:50:38 PM', '2014-11-16', 'S|1702,'),
(653, '666', '01745262028|8801703446988|8801677706342|8801764659487|8801710494977|8801762470967|8801710883596|8801721277487|8801723830584', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:54:04 PM', '2014-11-16', 'S|1701|8801745262028|2d2e1939c5d3d5f6d3a24a59490ea030,S|1701|8801703446988|4966b75cb6737782e691901e2f0eb0ab,S|1701|8801677706342|0826c7ce25c347bca70d16a4a748fbda,S|1701|8801764659487|af2540a1b24abd0a9905be91559e1593,S|1701|8801710494977|4259320a45c4ca493a35c59d205c8a73,S|1701|8801762470967|caffad7a9d36bba3502d0d6a06c815a1,S|1701|8801710883596|aa6aade3f4e6f3ea70a4f4e7c694efb3,S|1701|8801721277487|22d0616e0001ef40b5120a16d09a8d53,S|1701|8801723830584|727e305c7c5e0bbd4c70c745e843df8a,'),
(654, '666', '01712180188 |8801673677777 |8801672843951 |8801737242639 |8801864158171|8801712112346', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:56:48 PM', '2014-11-16', 'S|1702,');
INSERT INTO `sms` (`id`, `eiin_number`, `phone1`, `sms`, `time`, `date`, `api_status`) VALUES
(655, '666', '01712180188|8801673677777|8801672843951|8801737242639|8801864158171|8801712112346', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:58:45 PM', '2014-11-16', 'S|1701|8801712180188|be62775e5b63df703ad0f91469bd93b7,S|1701|8801673677777|21d7707265fd3beefeb2491c05e7b964,S|1701|8801672843951|b135e69b70d478c880beac7d01310470,S|1701|8801737242639|cec36a420a75ff41e44cdb9b3e2e1640,S|1701|8801864158171|a0cc2da940eba9201d51aeef5b5e37f7,S|1701|8801712112346|4d2edf8c1e544a5a7eecf30f1b3bdefb,'),
(656, '666', '0172209565|8801557785551|8801680634750 |8801719555333 |8801678000537 |8801717412112 |8801713864194 |8801840131792 |8801777187763 |88 01719076701 |8801684573141 |8801738214416 |8801722030058 |8801622363544|8801671674830 |8801768959999 |8801710502313 |8801725019838 |8801672835040|8801739522977', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:01:45 PM', '2014-11-16', 'S|1702,S|1702,S|1702,'),
(657, '666', '01812799962|8801557785551|8801680634750 |8801719555333 |8801678000537 |8801717412112 |8801713864194 |8801840131792 |8801777187763 |88 01719076701 |8801684573141 |8801738214416 |8801722030058 |8801622363544|8801671674830 |8801768959999 |8801710502313 |8801725019838 |8801672835040|8801739522977', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:04:29 PM', '2014-11-16', 'S|1702,S|1702,S|1702,'),
(658, '666', '01812799962|8801557785551|8801680634750|8801719555333|8801678000537|8801717412112|8801713864194|8801840131792|8801777187763|8801719076701|8801684573141|8801738214416|8801722030058|8801622363544|8801671674830|8801768959999|8801710502313|8801725019838|8801812799962|8801672835040', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:09:02 PM', '2014-11-16', 'S|1701|8801812799962|30bfde678a6e9c0444f28d7b5aaccdb1,S|1701|8801557785551|acab54c074820ae569249a9faf25d336,S|1701|8801680634750|4404952966d3b5810fdf48e4c59bee0b,S|1701|8801719555333|27de2395e1c1124188d03335bfa7071a,S|1701|8801678000537|6412f676b48444878f06332161e5d0d8,S|1701|8801717412112|ce8e0919d4f47c76a7d05ee7ce191217,S|1701|8801713864194|e825cad69abe8cb9a376209eaeeb390c,S|1701|8801840131792|37e8a2786ce9bb46fd3f11fdd19a5216,S|1701|8801777187763|17323688cbcbf38c2855c0d80cc9ba72,S|1701|8801719076701|0766b19fdacb08a0890e5cc409bfa9ab,S|1701|8801684573141|b9e917b0c59e48fd809404fcec67731a,S|1701|8801738214416|3cc3152f2688dec1c347c426907a008d,S|1701|8801722030058|5a25f685088532a2e4790216fe1781aa,S|1701|8801622363544|ca48c35b72e0ed2bb309d8314ffe9998,S|1701|8801671674830|6399d18c15962a899f0ad80163c54ab1,S|1701|8801768959999|4cb5dc7adf1546d55d976835786666f4,S|1701|8801710502313|e983513ab964b5d281c917ee511d3c94,S|1701|8801725019838|a9d6891df9658f494b9effe0c118d787,S|1701|8801812799962|f4026a905b186f9692260f82ae4f92ed,S|1701|8801672835040|dcecd44767d410fc11d2ea9baee01525,'),
(659, '666', '01739522977', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:10:12 PM', '2014-11-16', 'S|1701|8801739522977|3a955c198c3a9b68766e558af9e2b18a,'),
(660, '666', '01676086691|8801723324337|8801850775969|8801764654148|8801719076701|8801731238993|8801677742507|8801733620557|8801792221453|8801678171812 |8801818277511 |8801670565292 |8801714841891 |88 01711974616 |8801816282929 |8801671379011 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:12:39 PM', '2014-11-16', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(661, '666', '01676086691|8801723324337|8801850775969|8801764654148|8801719076701|8801731238993|8801677742507|8801733620557|8801792221453|8801678171812|8801818277511|8801670565292|8801714841891|8801711974616|8801816282929|8801671379011', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:17:26 PM', '2014-11-16', 'S|1701|8801676086691|d50acbf791d8128cc8e106c19a3953a2,S|1701|8801723324337|0bfc8e7dd9fcad9fa15a0d8b23f92aff,S|1701|8801850775969|28adaa03bef788e2109d670c6813d74f,S|1701|8801764654148|8d279cfb3f5fb135015eeb525cd6794f,S|1701|8801719076701|2e4097ad5f4e18a77f12a825e63d862e,S|1701|8801731238993|e2029d60bbcbed5784b2598be41c7856,S|1701|8801677742507|ac10d5d3abf558ec45340c2705a6caeb,S|1701|8801733620557|9a5f0272c7b7c02822cd7254a4c6ca3e,S|1701|8801792221453|163bda95f35f2ba3f9e94ac2e84149bb,S|1701|8801678171812|5177a04d586f9ac06c5b8edc98dbc7ca,S|1701|8801818277511|426f2c40fedf902f1fc42592844a1d02,S|1701|8801670565292|f1b11398ed71d65953f67b6fccbe5c00,S|1701|8801714841891|35f9877e925393ac86e2ecd676063fa5,S|1701|8801711974616|f4a276ee8468e7a5afbe42af4b53b589,S|1701|8801816282929|279a00cba6e0ae2f2c46c531b4558af3,S|1701|8801671379011|d8046cc85048dfd8be8d311ce6605447,'),
(662, '666', '01764833120|8801723813182 |8801714289532 |8801723817172 |8801675439964 |88 01670978679 |8801840007400 |8801720537808|88 01829570312 |8801734836043', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:19:19 PM', '2014-11-16', 'S|1702,S|1702,'),
(663, '666', '01764833120|8801723813182|8801714289532|8801723817172|8801675439964|8801670978679|8801840007400|8801720537808|8801829570312|8801734836043', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:23:01 PM', '2014-11-16', 'S|1701|8801764833120|d0ef7148283e8ad271e8b044013ab8f5,S|1701|8801723813182|032f2c588c4d569b681ecbd143ffdcfb,S|1701|8801714289532|eb66a91d1d33c3e2ff8b1220feedf854,S|1701|8801723817172|2da5fcd9d214d4b7a345fc7f1b3796ec,S|1701|8801675439964|ec2dc25b258b5a64d2ccb0a8113e8337,S|1701|8801670978679|8a4c868f884cae35b9f039222843fd62,S|1701|8801840007400|d04293215d949759612854d0979497db,S|1701|8801720537808|c20e4cb4acc15650e14a0b41e6ee28f5,S|1701|8801829570312|33e03ec0bf797c098cf933721b8a3f95,S|1701|8801734836043|776a5817a51aeeadc5a1bb014d6197e1,'),
(664, '666', '01732086776 |8801717669500 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:24:18 PM', '2014-11-16', 'S|1702,'),
(665, '666', '01732086776|8801717669500', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:25:39 PM', '2014-11-16', 'S|1701|8801732086776|eef5333504cc7d0fe3e602645d140619,S|1701|8801717669500|a5f8746327388fea24ec22c49e9ad9eb,'),
(666, '666', '01766450482 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:26:44 PM', '2014-11-16', 'S|1702,'),
(667, '666', '01766450482', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:27:58 PM', '2014-11-16', 'S|1701|8801766450482|2e1a7f4d8410f840a4bff66e3067c64b,'),
(668, '666', '01714116572 |8801676063319 |8801744734662|8801739627256 |8801680232696 |8801724112691 |8801675832924 |8801674009707|8801812907760 |8801812777420 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:29:34 PM', '2014-11-16', 'S|1702,'),
(669, '666', '01714116572|8801676063319|8801744734662|8801739627256|8801680232696|8801724112691|8801675832924|8801674009707|8801812907760|8801812777420', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:33:02 PM', '2014-11-16', 'S|1701|8801714116572|79b9554ba0cec82682cba0ec4a5df058,S|1701|8801676063319|cd325bd91b22c366c06633a5fc7a8b1e,S|1701|8801744734662|d6d0f2bd3460f7199197e5c2882c091d,S|1701|8801739627256|334b95693ccb4e0213bd1ff18c19b1ca,S|1701|8801680232696|3323d1fc1493ec79f10d279a6f2b6e8c,S|1701|8801724112691|e3399b5f64c5e0cdccb13acc899fc1d1,S|1701|8801675832924|939f71635ccbb759c05ffd8dea59fee6,S|1701|8801674009707|31450c9631fa38ec93678672b76a9f15,S|1701|8801812907760|8f369ef40049b4678330fcea6730e196,S|1701|8801812777420|0ceb8f47864a220f07157cff0ed18b9a,'),
(670, '666', '01710481660 |8801720660199 |8801714117014 |8801715673142 |8801722678011 |8801722273022 |8801736396640 |8801711084098 |8801716610631|8801814767426 |8801722578553 |8801722829080 |8801681820693 |8801728605826|8801715649569 |8801718782372 |8801681162444 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:35:00 PM', '2014-11-16', 'S|1702,'),
(671, '666', '01710481660|8801720660199|8801714117014|8801715673142|8801722678011|8801722273022|8801736396640|8801711084098|8801716610631|8801814767426|8801722578553|8801722829080|8801681820693|8801728605826|8801715649569|8801718782372|8801681162444', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:41:42 PM', '2014-11-16', 'S|1701|8801710481660|b7a70868b33f8302af4c73bca0dc2c94,S|1701|8801720660199|0333ba1b0ca274916d65bec995cbcc0d,S|1701|8801714117014|93fe07451d54863e42f8f574154a0551,S|1701|8801715673142|ce6eb3f5c8b20c655cb7b161673ecdfe,S|1701|8801722678011|cf224a292359f49bb45637c8e7cbe089,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(672, '666', '01722273022|8801736396640|8801711084098|8801716610631|8801814767426|8801722578553|8801722829080|8801681820693|8801728605826|8801715649569|8801718782372|8801681162444', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:45:30 PM', '2014-11-16', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(673, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:47:15 PM', '2014-11-16', 'S|1702,'),
(674, '666', '01828623201', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:49:43 PM', '2014-11-16', 'S|1702,'),
(675, '666', '01828623201', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:52:55 PM', '2014-11-16', 'S|1702,'),
(676, '666', '01828623201', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:54:39 PM', '2014-11-16', 'S|1702,'),
(677, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '8:01:40 PM', '2014-11-16', 'S|1702,'),
(678, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '8:10:29 PM', '2014-11-16', 'S|1702,'),
(679, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '11:22:14 PM', '2014-11-16', 'S|1702,'),
(680, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '11:22:56 PM', '2014-11-16', 'S|1702,'),
(681, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '11:02:57 AM', '2014-11-17', 'S|1702,'),
(682, '666', '01553363017', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '11:03:28 AM', '2014-11-17', 'S|1702,'),
(683, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH 148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '4:31:17 PM', '2014-11-17', 'S|1701|8801671448829|76d5fe395969f37c8e9bdbcd414dcb81,'),
(684, '666', '01711580703', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 18-19/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '4:55:58 PM', '2014-11-17', 'S|1701|8801711580703|87b36c905c8aea0699a78ae0774922ca,'),
(685, '666', '01711580703', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 18-19/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:39:19 PM', '2014-11-17', 'S|1701|8801711580703|c97a6614c365c4cc55c9155f415f89e1,'),
(686, '666', '01535494889', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:43:39 PM', '2014-11-17', 'S|1701|8801535494889|4e725abe74fb53df441c14418b334a42,'),
(687, '666', '01911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 18-19/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:53:13 PM', '2014-11-17', 'S|1701|8801911353197|9d9af8ee6c9758744b38b4fcfe7685c7,'),
(688, '666', '01722273022 |8801736396640 |8801711084098 |8801716610631|8801814767426 |8801722578553 |8801722829080 |8801681820693 |8801728605826|8801715649569 |8801718782372 |8801681162444 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 18-19/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:56:12 PM', '2014-11-17', 'S|1702,'),
(689, '666', '01736396640|8801711084098|880171661031|8801814767426|8801722578553|8801722829080|8801681820693|8801728605826|8801715649569|8801718782372|8801681162444|8801722273022', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 18-19/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:03:15 PM', '2014-11-17', 'S|1701|8801736396640|bace6d628be0f39fb4f60e09776f2607,S|1701|8801711084098|bef75e77612f599b7f25e2d5caf9cf7d,S|1702,S|1701|8801814767426|0da5c96a7ff3d884294d866bd3a43f50,S|1701|8801722578553|8f6eee11c0e1ddbba062b7f0db3eb2eb,S|1701|8801722829080|47c648adfe792b6cb04ba09bac41d8e3,S|1701|8801681820693|699f11a1186af613f84015227f65d7f6,S|1701|8801728605826|cb5a269902dd76dfa9373eaf4c6fe34a,S|1701|8801715649569|8a8c13aa2f094558d2d70175f6e85be2,S|1701|8801718782372|b4992762eacb8841d49091b86c358fbe,S|1701|8801681162444|0fc9e1e1834a66677dee19f3133ce3b6,S|1701|8801722273022|e6876daf05439b8471dbd47f0625e71b,'),
(690, '666', '01716610631', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 18-19/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:04:51 PM', '2014-11-17', 'S|1701|8801716610631|4cfa5a2ca7e3dca8de25d110d4412b5a,'),
(691, '666', '01828642919|8801710089131 |8801715298831 |8801726004443|8801771574383 |8801823234734 |88 01683838797 |8801714947090 |8801676052124 |8801779664422 |8801714540402 |8801710452052 |88 01711410003 |8801790007006 |8801717036093 |8801717526631 |8801716014045 |8801671983066 |8801722080324 |88 01716679811 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 18-19/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:46:48 PM', '2014-11-17', 'S|1702,S|1702,'),
(692, '666', '01828642919|8801710089131|8801715298831|8801726004443|8801771574383|8801823234734|8801683838797|8801714947090|8801676052124|8801779664422|8801714540402|8801710452052|8801711410003|8801790007006|8801717036093|8801717526631|8801716014045|8801671983066|8801722080324|8801716679811', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 18-19/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:56:49 PM', '2014-11-17', ''),
(693, '666', '01828642919|8801710089131|8801715298831|8801726004443|8801771574383|8801823234734|8801683838797|8801714947090|8801676052124|8801779664422|8801714540402|8801710452052|8801711410003|8801790007006|8801717036093|8801717526631|8801716014045|8801671983066|8801722080324|8801716679811', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 18-19/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:59:45 PM', '2014-11-17', ''),
(694, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 18-19/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:02:31 PM', '2014-11-17', ''),
(695, '666', '01828642919|8801710089131|8801715298831|8801726004443|8801771574383|8801823234734|8801683838797|8801714947090|8801676052124|8801779664422|8801714540402|8801710452052|8801711410003|8801790007006|8801717036093|8801717526631|8801716014045|8801671983066|8801722080324|8801716679811', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 18-19/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '7:29:33 PM', '2014-11-17', ''),
(696, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 17-18/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:04:01 PM', '2014-11-18', 'S|1701|8801671448829|c6e373ad8ed3277d8d33a184ee242ffd,'),
(697, '666', ' 01712243691 |8801676048513 |8801672831881 |88 01671974571 |8801749364041|8801676025272 |8801736333011 |8801722186808 |8801712438075 |8801728134311 |8801722813737 |8801670471825 |8801764654148 |8801710775854|88 01722814115 |8801817546469 |8801723626265 |8801717143545 |8801713274317 |8801855805662 |8801781481428 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:12:39 PM', '2014-11-18', 'S|1706,'),
(698, '666', '01712243691|8801676048513|8801671974571|8801749364041|8801676025272|8801736333011|8801722186808|8801712438075|8801728134311|8801722813737|8801670471825|8801764654148|8801710775854|8801722814115|8801817546469|8801723626265|8801717143545|8801713274317|8801855805662|8801781481428|8801727008863', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:17:51 PM', '2014-11-18', 'S|1702,S|1701|8801676048513|e40bf698264c98994aade4b848e8661b,S|1701|8801671974571|5ace2fd3529f628ab831aa612cd0fb57,S|1702,S|1701|8801676025272|d499a68ea157e4f57c72fe1e787b163b,S|1702,S|1702,S|1702,S|1702,S|1702,S|1701|8801670471825|bfca0768a888c29ad6f676d8e0672603,S|1702,S|1702,S|1702,S|1701|8801817546469|9664943547984a61b70565e5504d99e2,S|1702,S|1702,S|1702,S|1701|8801855805662|256bb2f043f7f51683a3eb320c0335a4,S|1702,S|1702,'),
(699, '666', '01712243691|8801749364041|8801736333011|8801722186808|8801712438075|8801728134311|8801722813737|8801764654148|8801710775854|8801722814115|8801723626265|8801717143545|8801713274317|8801781481428|8801727008863', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:19:19 PM', '2014-11-18', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(700, '666', '01711580703', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH\r\n', '3:20:36 PM', '2014-11-18', 'S|1702,'),
(701, '666', '01675550029 |8801671091858|8801674797346 |8801671978372 |8801678050012 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:25:07 PM', '2014-11-18', 'S|1702,'),
(702, '666', '01675550029|8801671091858|8801674797346|8801671978372|8801678050012', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:26:32 PM', '2014-11-18', 'S|1701|8801675550029|c60da3980a0e7d10202468f96d4a81e3,S|1701|8801671091858|23bf453c75f742f0926fc95189f6503c,S|1701|8801674797346|ad20ec3de8cb7e82986370da9b57426c,S|1701|8801671978372|73163874e43da3d7e9941dc8dae84a14,S|1701|8801678050012|787ae436ac37d60578fd5117ed659d95,'),
(703, '666', '01816483868 |8801670966231 |8801671789189 |8801676412908 |8801836996493 |8801818758085 |8801612022202|8801683886430 |8801536176260 |8801675343777 |8801685726277 |8801819122770 |8801815728046 |8801673870087 |8801860000046 |8801672441927 |8801674786842 |8801670538200 |8801687350649 |8801687865505 |8801675285271 |8801687051657 |8801823321647 |8801813232477 |8801840708372 |8801617444234 |8801814306949 |8801670240668 |8801670465252 |8801672534802|8801818336302 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:31:49 PM', '2014-11-18', 'S|1702,'),
(704, '666', '01816483868 |8801670966231 |8801671789189 |8801676412908 |8801836996493 |8801818758085 |8801612022202|8801683886430 |8801536176260 |8801675343777 |8801685726277 |8801819122770 |8801815728046 |8801673870087 |8801860000046 |8801672441927 |8801674786842 |8801670538200 |8801687350649 |8801687865505 |8801675285271 |8801687051657 |8801823321647 |8801813232477 |8801840708372 |8801617444234 |8801814306949 |8801670240668 |8801670465252 |8801672534802|8801818336302 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:32:49 PM', '2014-11-18', 'S|1702,'),
(705, '666', '01816483868|8801670966231|8801671789189|8801676412908|8801836996493|8801818758085|8801612022202|8801683886430|8801536176260|8801675343777|8801685726277|8801819122770|8801815728046|8801673870087|8801860000046|8801672441927|8801674786842|8801670538200|8801687350649|8801687865505|8801675285271|8801687051657|8801823321647|8801813232477|8801840708372|8801617444234|8801814306949|8801670240668|8801670465252|8801672534802|8801818336302', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:40:16 PM', '2014-11-18', 'S|1701|8801816483868|ca6306d7b59f334d85c78e014b08cabc,S|1701|8801670966231|dc50dc83b4b45cd43ab9d41fe59c03c5,S|1701|8801671789189|a0a8d54b51920495634e6354b9f4fb5c,S|1701|8801676412908|bd3ca41d6847a34043a751949b10fe0b,S|1701|8801836996493|4c949fa904b638d5d0487088a1cca75d,S|1701|8801818758085|c288acba420fe5915d349245e544df4b,S|1701|8801612022202|7b92d63abd881703f5c252726b59093f,S|1701|8801683886430|1548bfae9d23dadb5f2e324c8c1cdd32,S|1701|8801536176260|a9272c612d4c261cb38f8d7aeb30aa58,S|1701|8801675343777|8bc80f5acd5dcef96f846a960d2a84d7,S|1701|8801685726277|2da520abb2c6d3748807d008dbb9b145,S|1701|8801819122770|a365842dfdb25e9af61af2836107f8f0,S|1701|8801815728046|49b4af1006aba3e8ee01d343c44d4c78,S|1701|8801673870087|e49e5926b10cd0e109a96e8e3b453ac1,S|1701|8801860000046|adeef259b7228c5bac8069363b63cd3b,S|1701|8801672441927|90d769c2dbe208e3393bd76bbfecb8b3,S|1701|8801674786842|e9978f00fb4e236594a2df9f8fb70d2e,S|1701|8801670538200|f2618891d2f01a5c8ad74f4b9a008487,S|1701|8801687350649|3dd0e7f69aedaa0b62b6fad23ec42223,S|1701|8801687865505|810d507cf2fbc78cb2e9cbac0977fd0e,S|1701|8801675285271|7b411e92ea928fe1b8ae2da098a5f28b,S|1701|8801687051657|000dcdf8f15290ee9461da82e5597a32,S|1701|8801823321647|88bfc37b141eab61fbc3fbb9c766ee94,S|1701|8801813232477|6043711a2258284fe199dfe6a1fa9f89,S|1701|8801840708372|225c531de0a69f9d5fa0713b0c3c7c65,S|1701|8801617444234|0b3624d2010252d5236a72c248f9e82a,S|1701|8801814306949|a76bcc6b07a60c31792309c27a87eb3c,S|1701|8801670240668|5cb76ed6ea83a94021d9a7fd251913e1,S|1701|8801670465252|ecce749ea9235653c79425e0c45b68b8,S|1701|8801672534802|9b15b58a2342b03b5abcd651935db96e,S|1701|8801818336302|2013cee9fe02ed838aa5bebb255dd50c,'),
(706, '666', '01711242482', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:46:28 PM', '2014-11-18', 'S|1702,'),
(707, '666', '01721105563 |8801766990096 |8801713773547 |8801745754464 |8801768001971 |8801795872958 |8801818166752|8801719627864 |8801718711833 |8801671448829|880711242482|8801911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:56:37 PM', '2014-11-18', 'S|1702,'),
(708, '666', '01721105563|8801766990096|8801713773547|8801745754464|8801768001971|8801795872958|8801818166752|8801719627864|8801718711833|8801671448829|880711242482|8801911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '4:01:28 PM', '2014-11-18', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1701|8801818166752|8d94df3bfd2838cfa227be605902ce58,S|1702,S|1702,S|1701|8801671448829|e200322570e4a150850eaa9a84434b0d,S|1706,S|1701|8801911353197|120853432d0b966feb3eb3f47d6318e7,'),
(709, '666', '01712169276 |8801722272122 |8801726161079 |8801714943718 |8801670445151|8801746628741 |8801757094945|8801673673535|8801756418514 |8801719825518|8801681845686|8801670721520|8801717134208|8801714762676|8801754464655 |8801818987544', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH\r\n', '4:44:38 PM', '2014-11-18', 'S|1702,'),
(710, '666', '01712169276|8801722272122|8801726161079|8801714943718|8801670445151|8801746628741|8801757094945|8801673673535|8801756418514|8801719825518|8801681845686|8801670721520|8801717134208|8801714762676|8801754464655|8801818987544', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH\r\n', '4:47:07 PM', '2014-11-18', 'S|1702,S|1702,S|1702,S|1702,S|1701|8801670445151|9f788ae33db92313689d54888ab1f9b7,S|1702,S|1702,S|1701|8801673673535|f9d1d9dc9c785429a502ddf46f9e0e8d,S|1702,S|1702,S|1701|8801681845686|f02228985089d55b51e9a0ff83b661c4,S|1701|8801670721520|c36a04ac4c268e17592caa7d85f2ad07,S|1702,S|1702,S|1702,S|1701|8801818987544|b925900b20d40772382ae28cc89c361d,'),
(711, '666', '01838379737|8801715716192|8801676040331|8801740401000|8801711309568|8801670558550|8801676724403|8801685695575|8801723982097|8801674732413|8801913641810|8801774453000|8801688524868|8801673914131|8801671165385|88 01717304711 |8801714104887|8801765542089 |8801717080445 |8801737480853 |8801681300379', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '4:51:45 PM', '2014-11-18', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1706,'),
(712, '666', '01838379737|8801715716192|8801676040331|8801740401000|8801711309568|8801670558550|8801676724403|8801685695575|8801723982097|8801674732413|8801913641810|8801774453000|8801688524868|8801673914131|8801671165385|88 01717304711|8801714104887|8801765542089|8801717080445|8801737480853|8801681300379', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '4:53:05 PM', '2014-11-18', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1706,'),
(713, '666', '01838379737|8801715716192|8801676040331|8801740401000|8801711309568|8801670558550|8801676724403|8801685695575|8801723982097|8801674732413|8801913641810|8801774453000|8801688524868|8801673914131|8801671165385|88 01717304711|8801714104887|8801765542089|8801717080445|8801737480853|8801681300379', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '4:55:55 PM', '2014-11-18', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1706,'),
(714, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '4:57:12 PM', '2014-11-18', 'S|1701|8801671448829|d55295fc7a4939f8f756fbe6340a759d,'),
(715, '666', '01723982097|8801674732413|8801774453000|8801688524868|8801673914131|8801671165385|88 01717304711 |8801714104887|8801765542089 |8801717080445 |8801737480853 |8801681300379', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:33:42 PM', '2014-11-18', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1706,'),
(716, '666', '01723982097|8801674732413|8801774453000|8801688524868|8801673914131|8801671165385|88 01717304711|8801714104887|8801765542089|8801717080445|8801737480853|8801681300379', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:35:59 PM', '2014-11-18', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1706,'),
(717, '666', '01838379737|8801715716192|8801676040331|8801740401000|8801711309568|8801670558550|8801676724403|8801685695575|8801723982097|8801674732413|8801774453000|8801671448829|8801688524868|8801673914131|8801671165385|8801717304711|8801714104887|8801765542089|8801717080445|8801737480853|8801681300379', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:50:53 PM', '2014-11-18', 'S|1701|8801838379737|a61539dbe5356555de38ed4757d3287f,S|1702,S|1701|8801676040331|9e2d570ec686fd758ab9a39868b0ea5a,S|1702,S|1702,S|1701|8801670558550|606f83a48fa389c8d4c03cb95efe7bbd,S|1701|8801676724403|87a744c076e9436bac594a968699ad86,S|1701|8801685695575|52aa04ba822c85345ac13e2d46e17883,S|1702,S|1701|8801674732413|bb1b16935c898dda13c7c5f115acc753,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(718, '666', '01724414247 |8801717989283 |8801724135608 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:53:31 PM', '2014-11-18', 'S|1702,'),
(719, '666', '01724414247|8801717989283|8801724135608', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:54:26 PM', '2014-11-18', 'S|1702,S|1702,S|1702,'),
(720, '666', '01853959595 |8801673390888|8801717455726 |8801685808232 |8801671884776 |8801713063553 |8801686673170 |8801724891754 |8801675951940 |8801670818024 |8801811944242|8801723394167|8801737140724|8801675250858|8801677322497|8801686768631|8801719991461|8801723859796', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '5:58:26 PM', '2014-11-18', 'S|1702,'),
(721, '666', '01853959595|8801673390888|8801717455726|8801685802232|8801671884776|8801713063553|8801686673170|8801724891754|8801675951940|8801670818024|8801811944242|8801723394167|8801737140724|8801675250858|8801677322497|8801686768631|8801719991461|8801723859796', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:02:19 PM', '2014-11-18', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(722, '666', '01737014851|8801715416974|8801836076227|8801680077879|8801860066660|8801838379737', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:05:16 PM', '2014-11-18', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(723, '666', '01737014851|8801715416974|8801836076227|8801680077879|8801860066660|8801838379737', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:07:19 PM', '2014-11-18', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(724, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:08:05 PM', '2014-11-18', 'S|1702,'),
(725, '666', '01715716192|8801676040331|8801740401000', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:09:38 PM', '2014-11-18', 'S|1702,S|1702,S|1702,'),
(726, '666', '01916823163', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:12:34 PM', '2014-11-18', 'S|1702,'),
(727, '666', '01828623201', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014 (11am-5pm)\r\nwith CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:13:04 PM', '2014-11-18', 'S|1702,'),
(728, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '10:41:39 AM', '2014-11-19', 'S|1702,'),
(729, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 19-20/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '10:42:20 AM', '2014-11-19', 'S|1702,'),
(730, '666', '01911353197', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 19,20/11/2014\r\n(11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '1:20:28 PM', '2014-11-19', 'S|1702,'),
(731, '666', '01911353197', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 19,20/11/2014\r\n(11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '1:21:02 PM', '2014-11-19', 'S|1702,'),
(732, '666', '01911353197', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 19,20/11/2014\r\n(11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '3:30:22 PM', '2014-11-19', 'S|1702,'),
(733, '666', '01671448829', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 19,20/11/2014\r\n(11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '5:25:49 PM', '2014-11-19', 'S|1702,'),
(734, '666', '01671448829', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 19,20/11/2014\r\n(11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '1:29:43 PM', '2014-11-20', 'S|1702,');
INSERT INTO `sms` (`id`, `eiin_number`, `phone1`, `sms`, `time`, `date`, `api_status`) VALUES
(735, '666', '01671448829', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 19,20/11/2014\r\n(11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '5:40:11 PM', '2014-11-20', 'S|1702,'),
(736, '666', '01671448829', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 19,20/11/2014\r\n(11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '11:16:40 AM', '2014-11-22', 'S|1701|8801671448829|bbc4e02a-e870-4fc7-b5bf-0343d13160e6,'),
(737, '666', '01911353197|8801553363017', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23-24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01671448829, 01671655623\r\nThanking You DREAMS TECH', '11:21:01 AM', '2014-11-22', 'S|1701|8801911353197|0d3f6dbf-808a-408b-9e9f-eadb93da7ece,S|1701|8801553363017|4e5a2e6d-e253-4636-a9bf-d948ff333127,'),
(738, '666', '01911353197', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 23&24/11/2014\r\n(11am-5pm) with CV&Photo.\r\nAdd: 148,Shantinagar, 5th Floor, Dhaka\r\n(Near White House Hotel)', '1:29:28 PM', '2014-11-22', 'S|1701|8801911353197|74cb5a51-a830-44c5-83c5-b458336bbc58,'),
(739, '666', '01911353197', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 23&24/11/2014\r\n(11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar, 5th Floor,Dhaka\r\n(Near White House Hotel)', '1:32:56 PM', '2014-11-22', 'S|1701|8801911353197|32453f6c-8fcd-4b42-afe1-e5f3b5444aa9,'),
(740, '666', '01911353197', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 23&24/11/2014\r\n(11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar,(5th Floor),Dhaka\r\n(Near White House Hotel)', '1:37:03 PM', '2014-11-22', 'S|1701|8801911353197|e4e3bb45-ebb3-49c4-af72-86b807005d6f,'),
(741, '666', '01911353197', 'Dear Applicant,\r\nWe''d like to invite u for interview\r\non 23&24/11/2014\r\n(11am-5pm) with CV&Photo.\r\nAdd:148,Shantinagar,5th Floor, Dhaka\r\n(Near White House Hotel)', '1:39:38 PM', '2014-11-22', 'S|1701|8801911353197|523bedf2-eea4-49fb-91a1-e35e382b51ad,'),
(742, '666', '01917179580|8801911848407|8801912760176|8801923400920|8801952799283|8801924661006|8801913913596|8801935285312|8801914098168|8801961168317|8801966645497|8801921381761', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '1:45:33 PM', '2014-11-22', 'S|1701|8801917179580|32a89180-9e2b-4db2-9d18-6ea013783d17,S|1701|8801911848407|edd3d79b-4743-4844-8d4d-470845ad5499,S|1701|8801912760176|e0e2f962-23a5-4d73-bc5c-9388e1b0ed0b,S|1701|8801923400920|24da8537-45b8-4da4-b464-38a9b8506025,S|1701|8801952799283|55aa3de0-93d9-4293-84ce-509ecff71d53,S|1701|8801924661006|a2adf7b8-1533-4de5-80df-a1b92cb6e3ee,S|1701|8801913913596|f6ca2e87-04a4-4dcb-9360-f38ebffcc50b,S|1701|8801935285312|f219cdc1-34a6-4cf3-8f76-b9bd36e1ee15,S|1701|8801914098168|8639503b-c873-40b6-9533-e3f71646dd10,S|1701|8801961168317|b361834a-fe79-4418-a264-8b60c033a7f1,S|1701|8801966645497|5f791297-1f28-47a4-b635-b1f7f20ab360,S|1701|8801921381761|e63ed7d3-623c-4192-a665-029548ead759,'),
(743, '666', '01913263979|8801914810233|8801923354015 |8801916000296 |8801919996585 |8801924872912 |8801912499181 |8801923087760 |8801934337229 |8801914360672 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '1:48:52 PM', '2014-11-22', 'S|1702,S|1702,S|1702,'),
(744, '666', '01913263979|8801914810233|8801923354015|8801916000296|8801919996585|8801924872912|8801912499181|8801923087760|8801934337229|8801914360672', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '1:50:22 PM', '2014-11-22', 'S|1701|8801913263979|385b2c9c-599f-4b8a-a9ba-296dcdafb771,S|1701|8801914810233|907915de-aae1-4289-b2de-228f8bee5210,S|1701|8801923354015|0c9656f8-3410-4234-80af-58cb6ce929c0,S|1701|8801916000296|555d9833-8494-41fb-bbe4-4cdbb16abc27,S|1701|8801919996585|2f2d402d-1835-4b29-96f7-66e1e3f0981d,S|1701|8801924872912|53a455dd-9562-4f64-8c66-0cfbce9e8c64,S|1701|8801912499181|5f9506fe-707f-4fe6-bcd2-98bad95cf8d4,S|1701|8801923087760|6f7c49a9-e2fc-4478-af0b-4c4bd1b0f37d,S|1701|8801934337229|1886726a-20a4-492b-b534-54fd302a1a8d,S|1701|8801914360672|948f9777-c740-48a0-8d06-7e0a7ffd856f,'),
(745, '666', '01912241978 |88 01923341165 |8801915091833 |8801917473376 |8801916679374 |8801914868289 |8801912819321 |8801915884970 |8801915653914 |8801925477802 |8801928709383 |8801935464439 |8801913091063', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '1:53:19 PM', '2014-11-22', 'S|1702,'),
(746, '666', '01912241978|88 01923341165|8801915091833|8801917473376|8801916679374|8801914868289|8801912819321|8801915884970|8801915653914|8801925477802|8801928709383|8801935464439|8801913091063', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '1:54:32 PM', '2014-11-22', 'S|1702,S|1706,'),
(747, '666', '01923341165|8801915091833|8801917473376|8801916679374|8801914868289|8801912819321|8801915884970|8801915653914|8801925477802|8801928709383|8801935464439|8801913091063|8801912241978', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:01:00 PM', '2014-11-22', 'S|1701|8801923341165|5bcf8780-f2e4-4e3a-a01e-7cbb1c5801e8,S|1701|8801915091833|5b383ddd-f31b-47c5-96af-b0d5e157bbc0,S|1701|8801917473376|037ab1ea-8dac-4d70-b2e3-1adf2ff80b58,S|1701|8801916679374|2f5a71a3-62c7-4b43-91c2-9dc060569efc,S|1701|8801914868289|9ba39f15-b492-4743-b6f3-773ea79f285b,S|1701|8801912819321|74044714-e401-48a6-9abf-3aa10e786beb,S|1701|8801915884970|cb00d7d8-ea8c-42bd-9eb7-6b9455328458,S|1701|8801915653914|d5cf906d-0723-49f0-93fc-bb7348a8341a,S|1701|8801925477802|fec290d4-1108-4ff2-b056-d7cc348fed58,S|1701|8801928709383|9699b7f2-c5bb-4fa0-b65f-a150f644b029,S|1701|8801935464439|01bf8286-3441-420a-b9ce-88455a5b493e,S|1701|8801913091063|d365cf05-e456-4cbe-a976-d9c888f96805,S|1701|8801912241978|dfb21f14-f5f0-48f0-a0cd-df95daabb6ee,'),
(748, '666', '01919863024 |8801926871453 |8801937729322 |8801956583353 |8801911400155 |8801962401311', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:04:24 PM', '2014-11-22', 'S|1702,'),
(749, '666', '01919863024|8801926871453|8801937729322|8801956583353|8801911400155|8801962401311', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:06:04 PM', '2014-11-22', 'S|1701|8801919863024|83c12c63-c3a2-499b-b624-1bcd9ae5f72d,S|1701|8801926871453|2dccf8fa-5f69-4855-8691-5d39b58b2a41,S|1701|8801937729322|c8887765-4a39-4bec-aa67-4d92a4136b99,S|1701|8801956583353|1ad0bf7a-fd8a-41fb-a974-6a1574aa5d42,S|1701|8801911400155|187b32a9-bad1-464a-89f8-2dcbedbff26e,S|1701|8801962401311|d365a58b-b02c-41fa-993c-c907ae7a8082,'),
(750, '666', '01911603645 |8801911730629|8801913137513 |8801913336223 |8801965007020|8801962491163|8801929948026|8801937576557|8801928854775|8801918992002 |8801912502170|8801937133787|8801916076242 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:09:29 PM', '2014-11-22', 'S|1702,'),
(751, '666', '01911603645|8801911730629|8801913137513|8801913336223|8801965007020|8801962491163|8801929948026|8801937576557|8801928854775|8801918992002|8801912502170|8801937133787|8801916076242', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:10:49 PM', '2014-11-22', 'S|1701|8801911603645|bf85dd24-58c7-4f4a-8a60-000edb20fd9f,S|1701|8801911730629|3fb14f37-924f-4009-aa45-c18a08c1003e,S|1701|8801913137513|e4a17bf4-1369-4543-b141-50f6c5c5cd28,S|1701|8801913336223|e9b34714-244e-40ec-bb70-9d0677d54938,S|1701|8801965007020|9137dd25-8ada-42c1-989f-c786b843bc46,S|1701|8801962491163|cb68137b-85a5-4f3d-8a04-96544350c0f0,S|1701|8801929948026|33cba0e2-aee2-4ddc-8414-114ea1fe75c7,S|1701|8801937576557|755d90fd-6d49-48c2-9b13-686eb1065f5a,S|1701|8801928854775|72870644-a4fb-434c-b035-de4466e25655,S|1701|8801918992002|c366be76-67a6-4f60-ab20-dff538e4a073,S|1701|8801912502170|c12128c9-55d3-4820-9b20-e7db8e1ff038,S|1701|8801937133787|42bd8da0-a7b5-47cd-a021-f236bf4b0a74,S|1701|8801916076242|66c74254-6db3-42ec-a208-2de82743b08c,'),
(752, '666', '01912065955 |8801914932137 |8801949303500 |8801915103883 |8801911771301 |8801914679677 |8801912261344 |88 01921776951 |8801957149353 |8801918049723 |8801911226408 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:13:53 PM', '2014-11-22', 'S|1702,'),
(753, '666', '01912065955|8801914932137|8801949303500|8801915103883|8801911771301|8801914679677|8801912261344|88 01921776951|8801957149353|8801918049723|8801911226408', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:15:05 PM', '2014-11-22', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1706,'),
(754, '666', '01914932173|8801949303500|8801915103883|8801911771301|8801914679677|8801912261344|8801921776951|8801957149353|8801918049723|8801911226408|8801912065955', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:23:05 PM', '2014-11-22', 'S|1701|8801914932173|55080ed2-f849-49ae-bbe0-bed020bfa724,S|1701|8801949303500|81d06276-3d95-4f3c-b62d-615c1a0bf25d,S|1701|8801915103883|4da1a78c-2b98-41c1-9a78-1d0ff1a6ed8f,S|1701|8801911771301|989c47ec-03ab-45c0-86a8-b8431d8ad624,S|1701|8801914679677|47e5c669-48a8-4d0f-81b7-56795bd4634f,S|1701|8801912261344|4c6d4ac4-e5d9-40bd-9d11-08ae64af4de3,S|1701|8801921776951|37f87f6d-5e4d-493d-a8a9-10f44bf7c5b6,S|1701|8801957149353|7f516ae3-9200-4867-8b28-242f92cd3e6b,S|1701|8801918049723|47b50fbf-fe85-4d8c-ac3a-78110ca7ebf3,S|1701|8801911226408|90b4f5e7-e19b-462c-b966-f57ecc20f6c0,S|1702,'),
(755, '666', '01912065955', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:24:15 PM', '2014-11-22', 'S|1702,'),
(756, '666', '01912065955', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:24:37 PM', '2014-11-22', 'S|1702,'),
(757, '666', '01934375235 |8801912151710 |8801956726581 |8801921321847 |8801914839116 |8801973000040 |8801919302315 |8801923238668 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:27:41 PM', '2014-11-22', 'S|1702,'),
(758, '666', '01934375235|8801912151710|8801956726581|8801921321847|8801914839116|8801973000040|8801919302315|8801923238668', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:28:23 PM', '2014-11-22', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(759, '666', '01912151710|8801956726581|8801921321847|8801914839116|8801973000040|8801919302315|8801923238668|8801934375235', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:32:51 PM', '2014-11-22', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(760, '666', '01911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:34:17 PM', '2014-11-22', 'S|1702,'),
(761, '666', '01911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:38:27 PM', '2014-11-22', 'S|1702,'),
(762, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:39:39 PM', '2014-11-22', 'S|1702,'),
(763, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:40:49 PM', '2014-11-22', 'S|1702,'),
(764, '666', '01911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:42:41 PM', '2014-11-22', 'S|1702,'),
(765, '666', '01911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '2:44:09 PM', '2014-11-22', 'S|1702,'),
(766, '666', '01911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:12:58 PM', '2014-11-22', 'S|1702,'),
(767, '666', '01911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '6:52:11 PM', '2014-11-22', 'S|1702,'),
(768, '666', '01911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '1:42:24 AM', '2014-11-23', 'S|1702,'),
(769, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '1:42:59 AM', '2014-11-23', 'S|1702,'),
(770, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '1:38:24 PM', '2014-11-23', 'S|1702,'),
(771, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:11:26 PM', '2014-11-23', 'S|1702,'),
(772, '666', '01671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '3:55:11 PM', '2014-11-23', 'S|1702,'),
(773, '666', '01912065955 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '11:50:28 PM', '2014-11-23', 'S|1702,'),
(774, '666', '01911353197|8801671448829', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '11:51:13 PM', '2014-11-23', 'S|1701|8801911353197|2331d6f2-e63f-4c17-be67-16ada0b51c5e,S|1701|8801671448829|4912f845-caa9-4b6e-87c6-b54260a31c92,'),
(775, '666', '01912065955', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '11:52:41 PM', '2014-11-23', 'S|1701|8801912065955|ff88a101-c31e-47c9-acfb-ba851ed32c56,'),
(776, '666', '01722977965|88019116057612|8801684794536|8801732770907|8801726111355|8801915341056|8801952765427|8801799778305|8801723810261|8801712437666|8801914628776|8801712990290|8801816229153', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '11:55:01 PM', '2014-11-23', 'S|1701|8801722977965|b4cca0c3-50a7-4df9-a3e9-a217dad03ca6,S|1701|88019116057612|25ac076f-a8fa-4be0-aacc-9a59cb1c3ba2,S|1701|8801684794536|90d0a778-aaa8-4f87-b1b1-0a61331faf4c,S|1701|8801732770907|10f0c3f5-5912-4716-8618-41a9b8bb0fbd,S|1701|8801726111355|e9a067e9-6a7b-41c2-a038-f54a51bbc2bf,S|1701|8801915341056|0132fb1d-e832-4285-9357-242046d988a1,S|1701|8801952765427|b69d171a-0ff7-43cb-987d-b429f7796950,S|1701|8801799778305|e889f31a-16e0-44a7-ad4f-9c8991657def,S|1701|8801723810261|2a05b64d-67c6-41f2-a15e-ee61bf046ea4,S|1701|8801712437666|30f1c25a-0bca-4fbb-a3dc-371840befc64,S|1701|8801914628776|0332753a-5279-4ca0-bde5-5aa759b5eb0d,S|1701|8801712990290|a2cdf385-b4e6-4f25-b771-7dc598d3603a,S|1701|8801816229153|f39341dd-95c2-4891-8762-1ddf7be8778f,'),
(777, '666', '01934375235 |8801912151710 |8801956726581 |8801921321847 |8801914839116 |8801973000040 |8801919302315 |8801923238668 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '11:59:28 PM', '2014-11-23', 'S|1702,'),
(778, '666', '01934375235|8801912151710|8801956726581|8801921321847|8801914839116|8801973000040|8801919302315|8801923238668', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '12:00:41 AM', '2014-11-24', 'S|1701|8801934375235|f0d6a748-6ab3-47ee-8b75-18de7f959c62,S|1701|8801912151710|2e05377b-5e4f-4b93-b062-8309ec5c53be,S|1701|8801956726581|c2299a38-9ef3-46f0-8d62-82cec151131f,S|1701|8801921321847|a1f649df-ad48-4d93-97ed-5fdd0d94442f,S|1701|8801914839116|416de4b4-6ecf-4b55-91ca-eaab50959c82,S|1701|8801973000040|ce2caf6f-643c-419a-978b-00a5293bc195,S|1701|8801919302315|396ecd1d-c1fa-41d8-aafe-98e453ef6518,S|1701|8801923238668|738a7a31-9e2b-4e63-bba5-7ed20f11687f,'),
(779, '666', '01922292806 |8801911531130 |8801925950555 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '12:03:03 AM', '2014-11-24', 'S|1702,'),
(780, '666', '01922292806|8801911531130|8801925950555', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '12:04:08 AM', '2014-11-24', 'S|1701|8801922292806|c2730e5f-c146-4849-af97-94df9dda98b3,S|1701|8801911531130|f3b5449f-fda5-49a6-acc4-28eba414f9bf,S|1701|8801925950555|5491bfb7-02bf-48e3-abe2-68347cd86b21,'),
(781, '666', '01919429080 |8801937576557|8801913044769 |8801929958460 |8801915791279|8801913726514 |8801924846715 |8801917143345 |8801912298771 |8801912243300|8801918616844 |8801922663907 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '12:07:25 AM', '2014-11-24', 'S|1702,'),
(782, '666', '01919429080|8801937576557|8801913044769|8801929958460|8801915791279|8801913726514|8801924846715|8801917143345|8801912298771|8801912243300|8801918616844|8801922663907', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '12:08:39 AM', '2014-11-24', 'S|1701|8801919429080|4b635be2-2bc0-415d-88f4-9fbb7f483f8b,S|1701|8801937576557|e5058553-4b93-4765-886a-dac0b9387875,S|1701|8801913044769|c5e50ad0-1ec9-40ba-91f1-56a7e27223fb,S|1701|8801929958460|10eb829e-71a3-4e15-bf20-955449c745d0,S|1701|8801915791279|ac24a258-1994-4ca1-b2be-9f3d6f79dc50,S|1701|8801913726514|52f89518-6256-4244-93ca-915db6da4d17,S|1701|8801924846715|332e3489-dfc5-49ed-861d-5eddb96efb6f,S|1701|8801917143345|53ef596b-eecf-4ead-aeec-03bcfa125107,S|1701|8801912298771|08d0fb5c-d7e4-49b1-a149-288a408dd8a4,S|1701|8801912243300|aa2faee6-8ebf-437b-9412-b4c805a16a7c,S|1701|8801918616844|f696c4fb-7013-4a2f-b6f6-b1718b75fb1f,S|1701|8801922663907|1ca30387-7414-4593-b024-2e2d94a5fcac,'),
(783, '666', '01918337268 |8801920243112 |8801916472477 |8801912592737 |8801911506258 |8801912056043 |8801912021931 |8801916902851 |8801911686609 |8801913736884 |8801915478015 ', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '12:12:21 AM', '2014-11-24', 'S|1702,'),
(784, '666', '01918337268|8801920243112|8801916472477|8801912592737|8801911506258|8801912056043|8801912021931|8801916902851|8801911686609|8801913736884|8801915478015', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '12:13:41 AM', '2014-11-24', 'S|1701|8801918337268|4bcd5b5f-9fe7-48b7-9d71-073e84fb3c60,S|1701|8801920243112|6056c4e7-4c2a-410a-8224-fe07dc084423,S|1701|8801916472477|4ecb67ea-0b77-46d3-9e77-f1030203886c,S|1701|8801912592737|9ac0c15b-f8b3-4100-a09f-978ae178fe8c,S|1701|8801911506258|808cbc50-44b1-4e8e-b13d-7f84df682a36,S|1701|8801912056043|b90e5c65-092f-489d-95ff-289009e6df78,S|1701|8801912021931|5fc4eade-df22-4431-bda9-96e360ec997f,S|1701|8801916902851|a13c72d0-df11-426b-84d9-57a5b8a93ac8,S|1701|8801911686609|d9f738bb-4a5d-487e-a8a5-037ea0dcd6f8,S|1701|8801913736884|f641f9e9-72cd-4788-92a5-de9c2e217d4b,S|1701|8801915478015|663a6c51-8c18-4ba4-ad5b-45d8a03a5f83,'),
(785, '666', '01917478278 |8801914810233 |8801920733522 |8801911806804|8801913159194|8801910407125|8801964926075|8801917338990|8801915621858|8801912162354|8801913641810|8801922655810', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '12:17:06 AM', '2014-11-24', 'S|1702,'),
(786, '666', '01917478278|8801914810233|8801920733522|8801911806804|8801913159194|8801910407125|8801964926075|8801917338990|8801915621858|8801912162354|8801913641810|8801922655810', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '12:18:31 AM', '2014-11-24', 'S|1701|8801917478278|a0dc5106-586c-4936-9191-2e193cf77ddf,S|1701|8801914810233|54404b34-3843-4068-9c16-36d71a1836ac,S|1701|8801920733522|f996c9a0-12cc-412a-9c4c-4c317bcaf435,S|1701|8801911806804|c02e99a2-7659-42a0-a758-a036f70f2dd5,S|1701|8801913159194|a1e73dc6-bbf8-4c26-8c6b-95280fbb7176,S|1701|8801910407125|74418edf-9076-47b8-ba14-320aeab73eaf,S|1701|8801964926075|931ef2ae-4ba1-470e-ae20-549bbc4ffd37,S|1701|8801917338990|5e2575bd-5e6d-4cd4-9921-0b9a0b4d2641,S|1701|8801915621858|d901ca19-b75a-452c-8200-c282eab4e59a,S|1701|8801912162354|f514162c-0914-4838-ba31-a782e7b17201,S|1701|8801913641810|27484ec3-3ab7-42a3-a6aa-bed93cd68fbe,S|1701|8801922655810|360742bf-e102-4953-b192-a51ac71139ff,'),
(787, '666', '01934026982|8801918527186|8801916375767|8801920651048|8801911064553|8801911064653|8801924030070|8801911186880|8801913514455|8801911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '12:24:24 AM', '2014-11-24', 'S|1701|8801934026982|d8b1ac06-6279-4e89-b7bd-639e69d282ed,S|1701|8801918527186|fbee8b4f-e187-45b1-baf6-e24e44882859,S|1701|8801916375767|afb91033-ab20-4228-a41c-a806cc6af37c,S|1701|8801920651048|cc5cfddc-aadc-4315-af7f-7c2f3723b357,S|1701|8801911064553|1d55fbb0-3359-4782-a835-59cc47c816dc,S|1701|8801911064653|d9bc60f2-3ec5-4b0a-8c7f-18ef5de0b8fd,S|1701|8801924030070|abdbb079-31cf-46ca-8149-16e4ab17f039,S|1701|8801911186880|96420b96-c1f6-4157-8db3-9169a5bca37b,S|1701|8801913514455|47592d06-07fd-4879-8db4-2193db67e419,S|1701|8801911353197|d9e03464-4fb1-4341-a2d9-01a36f4446cd,'),
(788, '14911', '01819216491', 'hi! sir.', '3:01:22 PM', '2014-11-25', 'S|1701|8801819216491|cd2877ad-d8f6-48d7-b7b9-eafb814471e1,'),
(789, '14911', '01914841090|8801914156744|8801677864320|8801922931285', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M  Kabir, Principal  EVER GREEN INT''L School.', '10:59:46 AM', '2014-11-27', 'S|1701|8801914841090|44cc3b65-5abe-48ff-bb4f-2c8b154aa19d,S|1701|8801914156744|aa2aebbc-c486-48eb-9360-731e4df372c6,S|1701|8801677864320|bc4cee20-553b-4fcc-8bd0-359926470af2,S|1701|8801922931285|2514e0fd-cb07-4923-b108-11b1eb3df609,'),
(790, '14911', '01718189670|8801710977764|8801715248824|8801199084761|8801713329674|8801923851935|8801712223772|8801712770165|8801820232939|8801816534030', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '11:09:37 AM', '2014-11-27', 'S|1701|8801718189670|7e2e5daa-f214-4157-a996-7fc30a0f2d89,S|1701|8801710977764|04e66ad1-0ab2-4cd0-ac64-31d1cac7f16a,S|1701|8801715248824|268ae210-6e58-427a-b6cd-d4ae17464b9f,S|1701|8801199084761|973bb94d-fae2-4432-be5f-0e3c23679946,S|1701|8801713329674|920f0221-caaa-4e29-bc31-0a448c5bb1ca,S|1701|8801923851935|69d9e687-7c9d-4085-9f23-569e69a8af0e,S|1701|8801712223772|47579a0d-2d58-48e9-bf5e-d0e32fb950a7,S|1701|8801712770165|dd198574-e610-45e0-8e7a-7870bbac4986,S|1701|8801820232939|a05fef3c-b3d0-4578-ad87-ceef0ec86177,S|1701|8801816534030|746f0c92-dcba-419d-8160-a9bcb2a0cd32,'),
(791, '14911', '01914390234|8801732153467|8801680775700|8801715732978|88 01714538580|8801723806609|8801914365505|8801756405818|8801912725570|8801914690649', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '11:10:47 AM', '2014-11-27', 'S|1702,S|1702,S|1702,S|1702,S|1706,'),
(792, '14911', '01914390234|8801732153467|8801680775700|8801715732978|88 01714538580|8801723806609|8801914365505|8801756405818|8801912725570|8801914690649', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '11:15:19 AM', '2014-11-27', 'S|1702,S|1702,S|1702,S|1702,S|1706,'),
(793, '14911', '01914390234|8801732153467|8801680775700|8801715732978|88 01714538580|8801723806609|8801914365505|8801756405818|8801912725570|8801914690649', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '11:17:55 AM', '2014-11-27', 'S|1702,S|1702,S|1702,S|1702,S|1706,'),
(794, '14911', '01914390234|8801732153467|8801680775700|8801715732978|88 01714538580|8801723806609|8801914365505|8801756405818|8801912725570|8801914690649', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '11:20:41 AM', '2014-11-27', 'S|1702,S|1702,S|1702,S|1702,S|1706,'),
(795, '14911', '01914390234|8801732153467|8801680775700|8801715732978|88 01714538580|8801723806609|8801914365505|8801756405818|8801912725570|8801914690649', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '11:27:07 AM', '2014-11-27', 'S|1702,S|1702,S|1702,S|1702,S|1706,'),
(796, '14911', '01914390234|8801732153467|8801680775700|8801715732978|88 01714538580|8801723806609|8801914365505|8801756405818|8801912725570|8801914690649', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '1:57:40 PM', '2014-11-27', 'S|1702,S|1702,S|1702,S|1702,S|1706,'),
(797, '14911', '01819216491', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:06:26 PM', '2014-11-27', 'S|1701|8801819216491|3a9d9d8c-da9b-44c0-8470-48a5a88b0b1e,'),
(798, '14911', '01914390234', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:19:43 PM', '2014-11-27', 'S|1701|8801914390234|e334921b-7dab-4a5f-b1c0-4df1b040d584,'),
(799, '14911', '01732153467|8801680775700|8801715732978|88 01714538580|8801723806609|8801914365505|8801756405818|8801912725570|8801914690649', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:21:56 PM', '2014-11-27', 'S|1702,S|1702,S|1702,S|1706,'),
(800, '14911', '01732153467', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:22:55 PM', '2014-11-27', 'S|1701|8801732153467|1f661af0-399f-4638-8831-669c54824053,'),
(801, '14911', '01680775700', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:25:44 PM', '2014-11-27', 'S|1701|8801680775700|32c75709-505e-450a-a1de-0b195197aaac,'),
(802, '14911', '01715732978|88 01714538580', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:27:10 PM', '2014-11-27', 'S|1702,S|1706,'),
(803, '14911', '01715732978', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:27:53 PM', '2014-11-27', 'S|1701|8801715732978|cb239554-a363-497a-9459-f8cec6b47b8e,'),
(804, '14911', ' 01714538580', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:28:34 PM', '2014-11-27', 'S|1706,'),
(805, '14911', '01723806609', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:30:33 PM', '2014-11-27', 'S|1701|8801723806609|3aa88f01-31d0-470a-8335-64b1389939be,'),
(806, '14911', '01914365505', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:31:59 PM', '2014-11-27', 'S|1701|8801914365505|644cc5bf-a098-47fd-86df-5509cc656e04,'),
(807, '14911', '01756405818', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:33:57 PM', '2014-11-27', 'S|1701|8801756405818|be8235b6-16a0-4084-a684-b43d9205375e,'),
(808, '14911', '01912725570', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:34:50 PM', '2014-11-27', 'S|1701|8801912725570|18383ce4-cadf-4118-ad54-cc479c634e7f,'),
(809, '14911', '01914690649', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:35:58 PM', '2014-11-27', 'S|1701|8801914690649|9cc837aa-3495-4cdf-a26b-818c6a38192a,'),
(810, '14911', ' 01714538580', 'A Special Math''s class of PSC student, will be held on 29th November-14 at 8.30-10 am. All St. r req. to Attend. M M Kabir, Principal EVER GREEN INT''L School.', '2:38:16 PM', '2014-11-27', 'S|1706,'),
(811, '666', '01779199765', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '9:43:08 PM', '2014-11-27', 'S|1701|8801779199765|9cbd7e16-d1e8-41da-96b9-6625090393be,'),
(812, '666', '01911353197', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 24&25/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor), Dhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '9:46:44 PM', '2014-11-27', 'S|1701|8801911353197|186fefa9-7728-410d-837c-759af1fbb2aa,'),
(813, '666', '01671448829|8801914754524', 'Admission going on......\r\nRed Leaf Academy (From Play to Eight)', '4:25:04 PM', '2014-11-28', 'S|1701|8801671448829|f7b8cd85-db42-4e58-9380-d19e127a8f30,S|1701|8801914754524|0e11db9a-7989-4169-95db-eb9504fc08b2,'),
(814, '666', '01671655623|8801553363017|8801671448829', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217,\r\nDate: 2,3/12/2014(11am to 5pm)\r\nContact:\r\n01828623201, 01671448829\r\nThanking you Dreams Tech', '7:26:19 PM', '2014-11-29', 'S|1701|8801671655623|4d64143e-b547-4435-b568-eb1e682c5174,S|1701|8801553363017|a8e48c3b-384b-4186-8403-7c5b2cfe6a78,S|1701|8801671448829|d24723d1-6194-407c-b627-ddce4a3bb420,'),
(815, '666', '01911353197', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217,\r\nDate: 2,3/12/2014(11am to 5pm)\r\nContact:\r\n01828623201, 01671448829\r\nThanking you Dreams Tech', '7:27:24 PM', '2014-11-29', 'S|1701|8801911353197|4e0d5d3c-48a5-4365-8e5e-904836bf2c3f,'),
(816, '666', '01711580703', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217,\r\nDate: 2,3/12/2014(11am to 5pm)\r\nContact:\r\n01828623201, 01671448829\r\nThanking you Dreams Tech', '7:28:48 PM', '2014-11-29', 'S|1701|8801711580703|c287e370-ad60-4f29-a2ee-e04ff8a3bd2b,'),
(817, '666', '01671448829|8801713585458', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 2,3/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '7:38:50 PM', '2014-11-29', 'S|1701|8801671448829|ce75f6d4-01b4-4b5c-b283-ee92310cfb5c,S|1701|8801713585458|a1d0bd45-6d14-42c0-a334-ede2afd784a9,'),
(818, '666', '01671655623', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 2,3/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '7:40:04 PM', '2014-11-29', 'S|1701|8801671655623|06d852ec-3029-4d4c-97c7-269b03dbc2ad,'),
(819, '666', '01684996645', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 6,7/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '7:54:52 PM', '2014-11-29', 'S|1701|8801684996645|c4141a24-5d32-4304-8b2d-bf936326e72f,'),
(820, '666', '01828623201', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 6,7/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '7:55:30 PM', '2014-11-29', 'S|1701|8801828623201|2b72e46d-e4a7-4345-8d0f-b9a4fbb03cea,'),
(821, '666', '01671448829|8801711580703', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 7,8/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech\r\n', '6:29:32 PM', '2014-12-03', 'S|1701|8801671448829|9b80d28c-5941-41bb-80ee-173b878b2fa9,S|1701|8801711580703|68ad6080-5833-433a-b9a6-b8726e2c2dc7,'),
(822, '666', '01911353197|8801671448829|8801553363017', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 7,8/12/2014(11am to 5pm)	\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '9:36:09 AM', '2014-12-04', 'S|1701|8801911353197|23a40bd8-bb9b-41e9-8317-caf85e22167f,S|1701|8801671448829|f0e5a993-2d5a-4baa-8c37-66de0b5c0afe,S|1701|8801553363017|e3fae829-08c2-4ece-8246-395384dd7263,'),
(823, '666', '01913389366|8801815436479|8801920328616|8801750999452|8801914943121|8801912155072|8801684904048|8801674927423|8801916920095|8801674538443|8801914178160|8801913387474|8801737971648|8801797494049|8801722025460|8801914079500|8801671776027|8801916112375|8801737500711|8801717057112', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 7,8/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech.', '9:41:38 AM', '2014-12-04', 'S|1701|8801913389366|1aa3b233-60a9-43d6-a379-3369871154dd,S|1701|8801815436479|18bd8fd0-861e-4991-b807-3fe4084e6cac,S|1701|8801920328616|1b3300d6-72b6-4dc0-9c0a-92c44e1f0ba5,S|1701|8801750999452|b25b842c-4522-4e76-974e-c0ee9d1a13af,S|1701|8801914943121|6c2b4a13-9dac-4e87-ba7c-859d999a7996,S|1701|8801912155072|f03fe39a-a268-4f47-8607-931781bdca5a,S|1701|8801684904048|6a26634f-f9e2-40fb-8653-4b24e28524ea,S|1701|8801674927423|ee0d7834-664a-4a72-8026-a5150d75a1bd,S|1701|8801916920095|76fa947a-c63a-40cd-a78d-a1607b9aa0cf,S|1701|8801674538443|6a6e2413-2b39-44b6-aeb7-c6d4b901ac73,S|1701|8801914178160|5cf9c1fd-5153-44f6-8836-bd4b331afb9d,S|1701|8801913387474|230cea83-e7d2-4bbd-a9cf-9ced06d745c7,S|1701|8801737971648|9874df84-5f2b-4788-a772-ec398700fdf9,S|1701|8801797494049|e583b2bf-18b4-4116-a276-fe1883989230,S|1701|8801722025460|2fa6b3c5-8bf0-48a7-b684-ff4585f8144d,S|1701|8801914079500|6e2400e4-5264-4a98-8660-ab378dde970d,S|1701|8801671776027|5b1fd122-983d-43f7-b777-57167140c556,S|1701|8801916112375|2c5b851a-d961-46d5-9f81-943c1f6e76d1,S|1701|8801737500711|07049aee-ae78-44cc-8099-f3b660a83bf6,S|1701|8801717057112|f9e925b7-a150-4f38-8985-77b5107d2bd4,'),
(824, '666', '01812601966|8801766537917|8801729463016|8801725549072|8801726024869|8801719252685|8801745211086|8801770450454|8801765868899|8801855318491|8801918527186|8801920810237|8801623040092 |8801916227227|8801725440733|8801689994519|8801714260094|8801722503033|8801710563231|8801714976800', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 7,8/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '9:44:32 AM', '2014-12-04', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(825, '666', '01812601966|8801766537917|8801729463016|8801725549072|8801726024869|8801719252685|8801745211086|8801770450454|8801765868899|8801855318491|8801918527186|8801920810237|8801623040092 |8801916227227|8801725440733|8801689994519|8801714260094|8801722503033|8801710563231|8801714976800', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 7,8/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '9:46:49 AM', '2014-12-04', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(826, '666', '01671448829', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 7,8/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '9:47:58 AM', '2014-12-04', 'S|1701|8801671448829|fc584cee-b8e9-45ab-a36d-c260dded81e5,');
INSERT INTO `sms` (`id`, `eiin_number`, `phone1`, `sms`, `time`, `date`, `api_status`) VALUES
(827, '666', '01766537917|8801729463016|8801725549072|8801726024869|8801719252685|8801745211086|8801770450454|8801765868899|8801855318491|8801918527186|8801920810237|8801623040092|8801916227227|8801725440733|8801689994519|8801714260094|8801722503033|8801710563231|8801714976800|8801812601966', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 7,8/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '9:58:58 AM', '2014-12-04', 'S|1701|8801766537917|53e7d1a2-c733-4f34-9959-d581e16114de,S|1701|8801729463016|34d37143-22b6-480a-8d98-35568f333153,S|1701|8801725549072|0e6f0bf7-b196-41b0-b8b5-d571d7859396,S|1701|8801726024869|44e28bf6-b278-478b-a2c2-4f754cbaa9b5,S|1701|8801719252685|a609dc5d-6a7c-4630-90b3-c29ef929a210,S|1701|8801745211086|099db5ec-bb54-4001-a99c-c468e8212844,S|1701|8801770450454|c3fcb7ec-93e9-4bb7-aeca-a510fc000f0e,S|1701|8801765868899|2a378725-70bc-4593-98cd-52d04c6650d1,S|1701|8801855318491|09470c5d-3a10-4666-8338-1252fcd21c00,S|1701|8801918527186|d47139cb-f886-4aa5-9092-31d512123d45,S|1701|8801920810237|6c28b048-8702-4e14-964e-fc54b31b044d,S|1701|8801623040092|e1947ff9-10e1-4f02-91e6-6b2b802bcca5,S|1701|8801916227227|12489c2e-e848-4106-ab05-216373786bd7,S|1701|8801725440733|90691fd6-c04f-4a0b-8188-58b40677ae71,S|1701|8801689994519|28a08488-075e-4132-b1f2-7247158667ab,S|1701|8801714260094|3626e90e-31ea-44c2-9282-d1829e04855f,S|1701|8801722503033|7afbb51d-67e6-449b-a61d-c1186f1867f1,S|1701|8801710563231|72d5d8e5-5228-46d5-8147-766dcdbae18e,S|1701|8801714976800|7efb9dc5-9f4b-4dfb-bfa8-0f119f939caf,S|1701|8801812601966|7009db26-6173-42df-b002-2b463a0afa21,'),
(828, '666', '01779727579|8801741550306|8801723744638|8801737613989|8801719364526|8801918525700|8801916973198|8801681300379|8801722272122|8801911186880|8801815728046|8801623800900|8801721919884|8801914810233|8801719602895|8801710139458|8801922655810|8801749794106|8801795805422|8801916992366', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 7,8/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '10:04:07 AM', '2014-12-04', 'S|1701|8801779727579|baf31759-94b2-47be-895d-8623b9fc4e55,S|1701|8801741550306|aec26ab0-289a-4850-a68f-40ea64b04f19,S|1701|8801723744638|cdd8e5d3-b9d2-4aa2-baa0-c1b9100d522d,S|1701|8801737613989|6c5a9407-78d1-4ae2-8a64-6e2b0161c0d0,S|1701|8801719364526|92212bc5-417e-427d-a479-2a5eb129a9ce,S|1701|8801918525700|de8c7e92-a0eb-4b7a-b275-68359a306720,S|1701|8801916973198|0c86c1ca-29bb-438e-8796-88b244fd19b9,S|1701|8801681300379|db262524-99a5-4250-8bbd-076e22a04b97,S|1701|8801722272122|8a9e58c8-cb89-4e1f-b89d-8ad2aeedbb68,S|1701|8801911186880|6d61384a-a35a-4ae6-aea1-e9d1fe482229,S|1701|8801815728046|2bafa256-25e1-4652-b212-f911413a98cf,S|1701|8801623800900|8e293aaa-7bab-4ff3-b60b-58995b2e13fc,S|1701|8801721919884|f59cad8a-95bf-4717-a29d-e5a9386d8bf8,S|1701|8801914810233|08ba46c5-7744-420e-ae30-3c2a6005f1e9,S|1701|8801719602895|fb79626b-5917-469c-af76-cf4756e782b1,S|1701|8801710139458|9dbc2c9e-cd9c-458e-98e6-b10892406ee1,S|1701|8801922655810|ff78133a-b1a7-4955-a972-cde678e442f3,S|1701|8801749794106|335ada63-e3b7-478d-934d-e7112fd6bf4e,S|1701|8801795805422|2de413e6-cbb5-40b1-8f1f-a4750d7c190f,S|1701|8801916992366|055fd27f-3148-49a4-87bc-a00750ba1e36,'),
(829, '666', '01923034337|8801753836348|8801965891427|8801719423223|8801737615848|8801796656612|8801911324160|8801710455719|8801913405797|8801751588637|8801922907813|8801912454320|8801683113188|8801677207702|8801912062480|8801778723732|8801912277029|8801795315366|8801911624822|8801683290189', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 7,8/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '10:08:24 AM', '2014-12-04', 'S|1701|8801923034337|d41db7c8-36c8-47ed-8a5f-0e02994d4404,S|1701|8801753836348|a5cbddd1-505e-432f-859d-0652283d9bfa,S|1701|8801965891427|4e2509d4-859a-4e0f-93a9-db9237b0670b,S|1701|8801719423223|662bc4e4-7f43-4b6b-8103-2f8c412cf151,S|1701|8801737615848|d465ea91-9fd1-469d-a3ed-28adb6d9f5dc,S|1701|8801796656612|beeded63-15c8-4fb0-8c67-1821e2e4234f,S|1701|8801911324160|4fe1548c-f4d4-4289-825a-600a5c8d1dad,S|1701|8801710455719|d5985c35-e6b1-41ab-b964-32d698b93216,S|1701|8801913405797|b77816d4-0622-47a2-b3df-fe4ac9486645,S|1701|8801751588637|56134ced-1345-4af6-81e5-56f9bbdeb2ae,S|1701|8801922907813|dedec0f4-2f4e-47ff-b7d9-0d6404513c0f,S|1701|8801912454320|1b6b032e-c45e-44cb-9b3a-ddf03d94114a,S|1701|8801683113188|08dc8d5f-f817-4af5-a329-0e13baa02fcc,S|1701|8801677207702|9bf7505d-a4c8-4fda-87d5-ab35b3b03c94,S|1701|8801912062480|4863da1e-a910-4427-9057-9ffb6bded5d0,S|1701|8801778723732|58fb9b3a-26fe-4c0d-8162-ae89d2777c5e,S|1701|8801912277029|3fc035a8-5f49-4bf8-a7e0-362297edcd2c,S|1701|8801795315366|63b452fe-47e1-4063-adbb-faf97681dba6,S|1701|8801911624822|91e7fdac-4bf9-410e-aab8-ebbb96afa226,S|1701|8801683290189|1eb4bba9-c50e-4b8a-9896-ff1821ea1818,'),
(830, '666', '01675861961|8801673020714|8801913728502|8801777817207|8801624190012|8801197227779|8801747219868|8801828414603|8801676724403|8801935464439|8801913861675|8801911603645 |8801722057546|8801536417187|8801817046896|8801680634750|8801729562303|8801764659487|8801715716192|8801816483868', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 7,8/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '10:10:47 AM', '2014-12-04', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(831, '666', '01673020714|8801913728502|8801777817207|8801624190012|8801197227779|8801747219868|8801828414603|8801676724403|8801935464439|8801913861675|8801911603645|8801722057546|8801536417187|8801817046896|8801680634750|8801729562303|8801764659487|8801715716192|8801816483868|8801675861961', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 7,8/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '10:20:23 AM', '2014-12-04', 'S|1701|8801673020714|f77a67a5-e249-4a12-9dc1-6822efb2b5f8,S|1701|8801913728502|ac8df694-4fb4-4ee9-aee7-372c6c89d0bc,S|1701|8801777817207|cfe513af-74cf-4e6b-9933-3f677af9f08a,S|1701|8801624190012|8c2a2e4c-7885-4d4e-bd67-68fae75d1fd4,S|1701|8801197227779|e1c30f90-a354-4943-8f71-bc2021afd517,S|1701|8801747219868|7e7f5ab1-810c-415d-9ed4-394f88837325,S|1701|8801828414603|0654f5f8-f34c-46e6-b703-bdc64aa7cd70,S|1701|8801676724403|bb38e953-0454-431b-958c-398d399e7430,S|1701|8801935464439|a5c00587-e93d-4e74-aaae-5b56955267b8,S|1701|8801913861675|ad498fdf-ac49-436a-9f7a-51238612cda1,S|1701|8801911603645|04484b14-8e69-411a-a318-ab23e95db52c,S|1701|8801722057546|a63e0d2f-44fa-4d91-a6cb-668d0c2e49dd,S|1701|8801536417187|800badc9-132f-4088-9a58-20c293375df3,S|1701|8801817046896|a29cac83-4335-47cf-a19e-bd8280109fef,S|1701|8801680634750|be6a6b4f-2e66-4b92-9020-113823f3bf91,S|1701|8801729562303|27b9fb05-fca6-4892-9585-f9f7300a597b,S|1701|8801764659487|0dfb1c50-6f4c-4190-a796-bf0a8b6d6154,S|1701|8801715716192|a30205ed-53c9-4712-a0ce-e8a72f684ccd,S|1701|8801816483868|9cdc611e-f70f-4338-ba07-d88d5bf1496a,S|1701|8801675861961|c753f9a6-a953-401b-affe-7ee83ffac237,'),
(832, '666', '01912241978|8801957149353|8801683886430|8801671974571|8801671091858|8801818336302|8801718711833|8801718782372|8801836996493|8801756418514|8801729572417|8801744734662|8801745262028|8801737915292|8801725019838|8801829534910|8801737242639|8801728743176|8801715673142|8801710243317', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 7,8/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '10:43:57 AM', '2014-12-04', 'S|1701|8801912241978|be5444c9-724b-41fe-a2c4-643d4b88432a,S|1701|8801957149353|e7c52359-5996-4e98-80bb-f1d6aa8ea9b0,S|1701|8801683886430|c8d31acc-8dc8-4236-98b5-b30137a0b9ed,S|1701|8801671974571|cf4fd53c-eb65-4ff2-8335-29113b747f8a,S|1701|8801671091858|e71bdde1-8816-4e77-956f-cb3f3c88ed8d,S|1701|8801818336302|a55cc40b-570c-48d6-b63e-7f57ad13742f,S|1701|8801718711833|886071d4-f961-46f1-b2e1-7d847c6f844c,S|1701|8801718782372|9948ad92-f772-4c2d-a248-b57a01e22bd7,S|1701|8801836996493|2d045ebf-f192-4f6f-b364-9aa4e3032b06,S|1701|8801756418514|c5c5fc50-f0cc-41bb-b9a2-900265bcc2c9,S|1701|8801729572417|94f9ebfc-3f31-4f72-af75-62a9845a2865,S|1701|8801744734662|4640e7bb-49b4-414b-bf89-b7572baf0a76,S|1701|8801745262028|a403f8fd-3eeb-4b8b-9087-420897a610ec,S|1701|8801737915292|df04a1d6-b2a8-40bd-96db-d59b39d654cd,S|1701|8801725019838|b6fed5fd-752a-43c4-b24c-9d3532a34866,S|1701|8801829534910|09196128-68f4-49ba-b842-28621f3c2f80,S|1701|8801737242639|b9f689c8-a59a-45e8-96c8-d4b8ab689626,S|1701|8801728743176|a9531feb-406f-47e9-83e5-640bd52224b9,S|1701|8801715673142|4a186c47-6c11-4c83-afae-4ed1dd92b72b,S|1701|8801710243317|9017d798-faee-4cf9-9e32-3ff5df68c212,'),
(833, '666', '01740855626|8801710494977|8801732613129|8801678039633|8801728211587|8801717308020|8801719555333|8801841520340|8801918911965|8801916902851|8801912056043|8801918049723|8801919996585|8801918616844|8801816229153|8801912151710|8801973000040|8801913736884|8801911531130', 'Dear Applicant,\r\nYou are selected for Territory Manager at Dreams Tech.\r\nPlease collect your Job Confirmation Letter and official toolkit from Dreams Tech Head Office at 148, Shantinagar, Dhaka-1217\r\nDate: 7,8/12/2014(11am to 5pm)\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '10:46:51 AM', '2014-12-04', 'S|1701|8801740855626|9394caf4-8204-4b75-a90d-b270340eebdb,S|1701|8801710494977|eef57fe3-b8c2-4cbb-8a47-f9b604aad3b5,S|1701|8801732613129|b8e74252-3111-4207-94d3-8c1432a17394,S|1701|8801678039633|dcfbe513-b750-4e14-9447-924d996976c9,S|1701|8801728211587|388cfaa1-1c8f-4210-819a-a1d60a5e7723,S|1701|8801717308020|6ba1316d-b006-4f96-8c62-3d1dd641dc10,S|1701|8801719555333|bdb21865-fe2c-4dca-8f31-046488803c9c,S|1701|8801841520340|dda4afd2-8892-41d7-a983-f6b92e074085,S|1701|8801918911965|ab5e3eb7-b6e7-41a3-a4bc-aa12d79567a2,S|1701|8801916902851|5e365aab-acca-4caa-9a72-90b758b857f2,S|1701|8801912056043|18d5b2b1-1b1b-4931-be5c-d4ec6a0cf6c5,S|1701|8801918049723|5476ae3d-80e2-4541-99cc-9796f9479c3e,S|1701|8801919996585|971d8462-f9f5-48d1-b485-ca1be85eaf44,S|1701|8801918616844|a265d3dc-f415-4a77-93c4-528064e99d29,S|1701|8801816229153|5b4959c6-ef65-4e2e-a969-5cd28bcc64fa,S|1701|8801912151710|969a3e28-e795-4787-bebd-32c9a93b3a6f,S|1701|8801973000040|4af6a961-a789-452b-b566-c8e3eca91a2f,S|1701|8801913736884|9f511487-351c-4f2a-8a8c-edc5d70fd7b1,S|1701|8801911531130|4cb28385-04dc-4acb-b0bd-91fb60ebff39,'),
(834, '666', '01686500973', 'Dear Applicant,\r\nThank you for submitting an application for the position of TM at DREAMS TECH.\r\nWe would like to invite you to interview within Date: 23&24/11/2014\r\n(11am-5pm) with CV & Photo.\r\nAddress: DREAMS TECH\r\n148, Shantinagar, (5th Floor),\r\nDhaka-1217\r\nContact: 01828623201, 01671655623\r\nThanking You DREAMS TECH', '12:51:43 PM', '2014-12-06', ''),
(835, '666', '01913389366|8801914943121|8801674927423|8801916920095|8801916112375|8801725549072|8801719252685|8801918527186|8801689994519|8801779727579|8801719364526|8801719602895|8801710139458|8801922655810|8801965891427|8801710455719|8801912454320|8801683113188|8801911624822|8801683290189', 'Dear Selected Applicant,\r\nPlease send your photo with ID & Name to our mail address: contact@dreamstech.net\r\nwithin 11th Dec and deposit 525 Taka to the BRAC BANK at any branch.\r\nA/C Name: DREAMS TECH\r\nA/C No- 1545203021094001\r\nif needed Contact: 01911353197\r\nDREAMS TECH.', '8:19:37 PM', '2014-12-09', 'S|1701|8801913389366|74fdd38d-d4ea-49f0-a7ef-e5ac8b075f0a,S|1701|8801914943121|6b60f8f8-5c8d-4ec4-bed6-efd3a545b858,S|1701|8801674927423|a6fa2dd4-6b15-44f9-8bf6-298a722fea23,S|1701|8801916920095|1d02ad77-d116-4764-a7ce-47e64f16050a,S|1701|8801916112375|64e2c606-de2b-4278-8aa8-43b28a635d12,S|1701|8801725549072|34002da5-be67-4c55-a022-c7401c131ea2,S|1701|8801719252685|297360b5-e61e-4a94-becc-a0ffcdc62059,S|1701|8801918527186|9a0876f4-078c-4f18-96ea-fa1396276b29,S|1701|8801689994519|f87e866d-c26d-4ef8-b83a-fbfb595f824e,S|1701|8801779727579|98d03b92-2748-4b12-9036-5bf0aeba3a5a,S|1701|8801719364526|792bf6a5-4eb1-4a67-9593-b3d5355eb69f,S|1701|8801719602895|452a1bb3-5a8e-4831-92b9-9ac2bafc3491,S|1701|8801710139458|01863757-9fb0-4a6c-ab71-ee69eccb9cad,S|1701|8801922655810|d3d7044c-9c3b-4456-8312-b01c1ca56939,S|1701|8801965891427|92539fec-7212-48c9-ab3b-8353e99e28ca,S|1701|8801710455719|554cab1b-6c0b-425d-b2c8-59fa6a838b20,S|1701|8801912454320|3080b5ce-7151-4060-af78-e50e9e12c9fe,S|1701|8801683113188|b349ed26-86b4-4e8e-b5be-2a4e02e28ed2,S|1701|8801911624822|f6ffc753-d720-4389-b2ab-c27feaa9e91e,S|1701|8801683290189|5bd19977-3703-4aee-a177-12a893be82e2,'),
(836, '666', '01675861961|8801624190012|8801911603645 |8801722057546|8801536417187|8801715716192|8801816483868', 'Dear Selected Applicant,\r\nPlease send your photo with ID & Name to our mail address: contact@dreamstech.net\r\nwithin 11th Dec and deposit 525 Taka to the BRAC BANK at any branch.\r\nA/C Name: DREAMS TECH\r\nA/C No- 1545203021094001\r\nif needed Contact: 01911353197\r\nThanking You DREAMS TECH.', '8:23:57 PM', '2014-12-09', 'S|1702,S|1702,S|1702,'),
(837, '666', '01675861961|8801624190012|8801911603645|8801722057546|8801536417187|8801715716192|8801816483868', 'Dear Selected Applicant,\r\nPlease send your photo with ID & Name to our mail address: contact@dreamstech.net\r\nwithin 11th Dec and deposit 525 Taka to the BRAC BANK at any branch.\r\nA/C Name: DREAMS TECH\r\nA/C No- 1545203021094001\r\nif needed Contact: 01911353197\r\nThanking You DREAMS TECH.', '8:24:45 PM', '2014-12-09', 'S|1701|8801675861961|37f6db9f-39d6-4dc8-9b53-b783242bfe4a,S|1701|8801624190012|a23ded7d-4fb7-436b-ba9e-b259359cf79e,S|1701|8801911603645|a788a4f3-6d53-418d-bd8d-ea3254faf467,S|1701|8801722057546|42216608-d982-4dc4-93b3-ee73f4f5207f,S|1701|8801536417187|4cdd7ab6-730e-402b-ac07-5aebed5306bb,S|1701|8801715716192|0bb67115-1b9c-4832-83be-7c2efd47f56f,S|1701|8801816483868|d7144228-d250-483b-af60-dc3a10170313,'),
(838, '666', '01718711833|8801718782372|8801836996493|8801725019838|8801829534910|8801740855626|8801728211587|8801717308020|8801918911965|8801912056043|8801919996585|8801816229153', 'Dear Selected Applicant,\r\nPlease send your photo with ID & Name to our mail address: contact@dreamstech.net\r\nwithin 11th Dec and deposit 525 Taka to the BRAC BANK at any branch.\r\nA/C Name: DREAMS TECH\r\nA/C No- 1545203021094001\r\nif needed Contact: 01911353197\r\nThanking You DREAMS TECH.', '8:28:00 PM', '2014-12-09', 'S|1701|8801718711833|50c2f90a-423b-4390-b24a-c0661595cbbe,S|1701|8801718782372|b92180ab-5252-453d-b1ea-851f9f382831,S|1701|8801836996493|93e9c828-1881-4598-bafe-0451abfbb43a,S|1701|8801725019838|f38b7e53-0b97-4384-8b52-0f8ba19af0d6,S|1701|8801829534910|b94f0566-dd79-43df-bb04-70ef7242618d,S|1701|8801740855626|2f13c661-58db-4ca3-a9d0-d3d5aa657a26,S|1701|8801728211587|1d1d55c9-e2e8-474e-b1e3-b0e9bc348320,S|1701|8801717308020|c7e313ac-f3cb-4943-83a8-efdb330bd3dc,S|1701|8801918911965|2ba0c81f-66a1-4872-803e-6a04de4cccce,S|1701|8801912056043|cb836e16-ab7c-4495-98c1-4815f9bf5ab2,S|1701|8801919996585|49e823b8-ae31-4282-bb29-8cf449bb1117,S|1701|8801816229153|58a80dc8-6f7c-465d-af59-d88b7baa69e2,'),
(839, '666', '01718711833|8801718782372|8801836996493|8801725019838|8801829534910|8801740855626|8801728211587|8801717308020|8801918911965|8801912056043|8801919996585|8801816229153|8801918911965|8801686500973|8801677084468', 'Dear Selected Applicant,\r\nPlease send your photo with ID & Name to our mail address: contact@dreamstech.net\r\nwithin 11th Dec and deposit 525 Taka to the BRAC BANK at any branch.\r\nA/C Name: DREAMS TECH\r\nA/C No- 1545203021094001\r\nif needed Contact: 01911353197\r\nThanking You DREAMS TECH.', '8:46:14 PM', '2014-12-09', 'S|1701|8801718711833|3414986c-e8a1-4b1c-8a49-237db81b5e5b,S|1701|8801718782372|e5855ead-366b-46ea-9226-d04047df319a,S|1701|8801836996493|953c54b6-0756-44f6-bda9-733582e20d7a,S|1701|8801725019838|fea3ac1f-0284-41f8-8438-29dc5a90e3f5,S|1701|8801829534910|6886e398-871a-414a-87aa-667ca319adef,S|1701|8801740855626|7da90587-0388-4d81-b6a4-7d39eb21d36f,S|1701|8801728211587|4f7080f9-3146-4144-b86f-ebbea91e5e74,S|1701|8801717308020|f9df553f-f028-42b9-8803-5b8e71cdacf2,S|1701|8801918911965|fa8f0ba2-7310-41d2-bd12-794413df9afb,S|1701|8801912056043|6b0f20f0-0178-4bb4-aeaa-0ed07151583a,S|1701|8801919996585|5fed51ad-9623-4756-9366-c10709743a88,S|1701|8801816229153|426797d2-41a5-46cc-b4a2-e1e70ad0c094,S|1701|8801918911965|be18a308-fdc2-4ef4-96e8-2a413b530013,S|1701|8801686500973|4b2967ca-b837-467f-81ce-d1049eb97b9c,S|1701|8801677084468|60e55380-9051-4973-b6e7-dc1800d2a0fd,'),
(840, '666', '01737915292', 'Mr. Zakaria,\r\nYou are selected for the position of Territory Manager at "Dreams Tech"\r\nPlease check your mail address...', '9:08:53 PM', '2014-12-09', 'S|1701|8801737915292|9262e2b3-2426-4d6b-ad01-4bae1cce7ed8,'),
(841, '666', '01711580703', 'Mr. Zakaria Ibrahim, You are selected for the position of Territory Manager at "Dreams Tech" Please check your mail address...', '9:10:25 PM', '2014-12-09', 'S|1701|8801711580703|1cb0a51d-b7c0-4056-b456-34377333b211,'),
(842, '666', '01737915292', 'Mr. ZAKARIA IBRAHIM, You are selected for the position of Territory Manager at "Dreams Tech" Please check your mail address...\r\nAnd visit our web-site Notic', '9:12:01 PM', '2014-12-09', 'S|1701|8801737915292|9fa0bd39-246d-40be-b788-8080dc5e0411,'),
(843, '666', '01676724403', 'Mr. Assaduzzaman,\r\nYou are selected for the position of Territory Manager at "Dreams Tech"\r\nPlease check your mail address...\r\nAnd visit our web-site Notice', '3:05:36 PM', '2014-12-10', 'S|1701|8801676724403|7fafee56-5136-4b17-bfe4-0328a5a07825,'),
(844, '666', '01715673142', 'Mr. MD.ANISUR RAHMAN,\r\nYou are selected for the position of Territory Manager at "Dreams Tech"\r\nPlease check your mail address\r\nAnd visit our web-site Notice', '3:14:49 PM', '2014-12-10', 'S|1701|8801715673142|7f1c5867-3ab6-4414-b3e0-f7fb80035545,'),
(845, '666', '01676724403', 'Please check now your mail address...', '3:18:50 PM', '2014-12-10', 'S|1701|8801676724403|0e7f40d1-1b13-47c0-a67a-69c6edccc5e9,'),
(846, '666', '01676724403', 'Please check again your mail address...', '3:31:20 PM', '2014-12-10', 'S|1701|8801676724403|ffd20308-a7f3-4c70-b0e5-beade56ea7c7,'),
(847, '666', '01715673142', 'Dear Selected Applicant,\r\nPlease send your photo with ID & Name to our mail address: contact@dreamstech.net within 11th Dec and deposit 525 Taka to the BRAC BANK at any branch.\r\nA/C Name: DREAMS TECH\r\nA/C No- 1545203021094001\r\nif needed Contact: 01911353197\r\nThanking You DREAMS TECH.', '3:33:17 PM', '2014-12-10', 'S|1701|8801715673142|07997d8d-86b3-48ff-b1d8-b39e892139a1,'),
(848, '666', '01676724403', 'Dear Selected Applicant,\r\nPlease send your photo with ID & Name to our mail address: contact@dreamstech.net within 11th Dec and deposit 525 Taka to the BRAC BANK at any branch.\r\nA/C Name: DREAMS TECH\r\nA/C No- 1545203021094001\r\nif needed Contact: 01911353197\r\nThanking You DREAMS TECH.', '3:33:53 PM', '2014-12-10', 'S|1701|8801676724403|3070450f-c223-4f28-aba7-a9a713856761,'),
(849, '666', '01671448829|8801611166544', 'Office address:\r\n"DREAMS TECH"\r\n148, Shantinagar, (Floor-5),\r\nDhaka-1217, Bangladesh.\r\n(Near White house hotel)\r\nE-mail: contact@dreamstech.net\r\nWeb-site: www.dreamstech.net\r\nHot-line: 01671448829\r\nThanking you DREAMS TECH', '5:15:17 PM', '2014-12-13', 'S|1701|8801671448829|10e3a236-0f64-4437-8710-b05354c2ba38,S|1701|8801611166544|3dfdadf9-1946-4dbd-a99f-07284fafb441,'),
(850, '666', '01611166544', 'Office address:\r\n"DREAMS TECH"\r\n148, Shantinagar, (Floor-5),\r\nDhaka-1217, Bangladesh.\r\n(Near White house hotel)\r\nE-mail: contact@dreamstech.net\r\nWeb-site: www.dreamstech.net\r\nHot-line: 01671448829\r\nThanking you DREAMS TECH', '5:32:09 PM', '2014-12-13', 'S|1701|8801611166544|0ecbe544-d30b-4263-95d2-5501443a9470,'),
(851, '666', '01913389366|8801750999452|8801912155072|8801914178160|8801719364526|8801918525700|8801721919884|8801911324160|8801913405797|8801675861961|8801624190012', 'Dear,\r\nSelected Territory Manager,\r\nWe are arranging an effective seminar and training session for all of you.\r\nYou are invited this seminar by Dreams Tech.\r\nAddress:\r\nDreams Tech\r\n148, Shantinagar, Floor-5, Dhaka-1217\r\nDate: Friday- 26/12/2014\r\nTime: 3:00 Pm\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech', '6:03:12 PM', '2014-12-19', 'S|1701|8801913389366|68dff080-1861-46c8-9c8c-44fa1eed51c8,S|1701|8801750999452|110d396c-7770-4d35-87d6-f9658639a5eb,S|1701|8801912155072|d93e3949-c968-4726-9fbf-806680d80e17,S|1701|8801914178160|9e4093ef-e98b-442e-b5a7-d162b94659bf,S|1701|8801719364526|aca31073-c253-41fa-9c0b-d1a42d478611,S|1701|8801918525700|0dc259d5-bd30-4560-9cbc-1127a8270534,S|1701|8801721919884|32b950b7-db30-4e67-8100-6a592a95b20e,S|1701|8801911324160|dc054740-27cd-45b2-92fe-a08aefeac3b5,S|1701|8801913405797|ccb0de55-f5ad-4fe3-8d04-425a07039069,S|1701|8801675861961|2f5ba022-ab3f-42f7-87cd-92bea187c211,S|1701|8801624190012|cd8ffeb2-2176-4531-a574-d471ea116932,'),
(852, '666', '01912241978|8801718782372|8801717308020|8801816229153|8801918911965|8801686500973', 'Dear,\r\nSelected Territory Manager,\r\nWe are arranging an effective seminar and training session for all of you.\r\nYou are invited this seminar by Dreams Tech.\r\nAddress:\r\nDreams Tech\r\n148, Shantinagar, Floor-5, Dhaka-1217\r\nDate: Friday- 26/12/2014\r\nTime: 3:00 Pm\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech.', '6:17:22 PM', '2014-12-19', 'S|1701|8801912241978|4aaf5dfb-9291-40c1-9fe9-548d5fcf79a6,S|1701|8801718782372|3ea06da7-e475-4bdc-aa50-41d6e1ba90ba,S|1701|8801717308020|73a13779-f940-40e2-97e0-00979a70095c,S|1701|8801816229153|84d0bac3-d7ed-4896-9883-fc8d7e604006,S|1701|8801918911965|0139af06-240a-411c-a2f3-9a3820c3bee7,S|1701|8801686500973|fb481c39-eca0-4c8a-ab7c-f94c6efd9869,'),
(853, '666', '01918911965', 'Dreams Tech\r\nE-mail: contact@dreamstech\r\nPlease send your Photo with your Name & ID Number\r\nThanking you Dreams Tech', '6:22:19 PM', '2014-12-19', 'S|1701|8801918911965|6bb036e8-3b3f-4502-a117-e81ce50c6413,'),
(854, '666', '01796656612', 'Dear,\r\nSelected Territory Manager,\r\nWe are arranging an effective seminar and training session for all of you.\r\nYou are invited this seminar by Dreams Tech.\r\nAddress:\r\nDreams Tech\r\n148, Shantinagar, Floor-5, Dhaka-1217\r\nDate: Friday- 26/12/2014\r\nTime: 3:00 Pm\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech.', '6:33:28 PM', '2014-12-19', 'S|1701|8801796656612|ebe4327b-8152-4b80-afe2-6bc0e45d23d0,'),
(855, '666', '01913389366|8801750999452|8801912155072|8801914178160|8801719364526|8801918525700|8801721919884|8801796656612|8801911324160|8801913405797|8801675861961|8801624190012', 'Dear,\r\nSelected Territory Manager, \r\nWe are arranging an effective seminar and training session for all of you.\r\nYou are invited this seminar by Dreams Tech.\r\nAddress:\r\nDreams Tech 148, Shantinagar, Floor-5,\r\nDhaka-1217,\r\nDate: Friday- 26/12/2014\r\nTime: 3:00 pm\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech.', '9:12:36 PM', '2014-12-24', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(856, '666', '01913389366|8801750999452|8801912155072|8801914178160|8801719364526|8801918525700|8801721919884|8801796656612|8801911324160|8801913405797|8801675861961|8801624190012', 'Dear,\r\nSelected Territory Manager, \r\nWe are arranging an effective seminar and training session for all of you.\r\nYou are invited this seminar by Dreams Tech.\r\nAddress:\r\nDreams Tech 148, Shantinagar, Floor-5,\r\nDhaka-1217,\r\nDate: Friday- 26/12/2014\r\nTime: 3:00 pm\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech.', '9:13:52 PM', '2014-12-24', 'S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,S|1702,'),
(857, '666', '01671448829', 'Dear,\r\nSelected Territory Manager, \r\nWe are arranging an effective seminar and training session for all of you.\r\nYou are invited this seminar by Dreams Tech.\r\nAddress:\r\nDreams Tech 148, Shantinagar, Floor-5,\r\nDhaka-1217,\r\nDate: Friday- 26/12/2014\r\nTime: 3:00 pm\r\nContact: 01828623201, 01671448829\r\nThanking you Dreams Tech.', '9:14:59 PM', '2014-12-24', 'S|1702,'),
(858, '14901', '01965200829|8801861684858|880192675928|8801552322810|8801715425423|8801912707551|8801716269555|8801911100758', 'Assalamualikum.\r\nThe Result of Annual Examination 2014 of our Academy will be published on 30/12/2014 Insha Allah.\r\nYou are invited on the occasion.\r\n-Principal', '8:12:45 PM', '2014-12-29', 'S|1701|8801965200829|34dc77de-243e-4ebd-b4eb-8550b0ef045b,S|1701|8801861684858|33e0e17a-54be-4f52-9d5f-1dc70087d6f2,S|1701|880192675928|d0001507-acae-473a-8cad-88cd8ce4c0a6,S|1701|8801552322810|48b0e235-99d2-4e36-be7c-439fa6abde2f,S|1701|8801715425423|29b804f1-13b4-4c21-8964-1010754b88ec,S|1701|8801912707551|f73db510-e3a9-4f78-b787-98c27c74f977,S|1701|8801716269555|f531f6f5-70fb-4fe4-9fbf-665b29489510,S|1701|8801911100758|fed65561-c330-415c-8bd8-9ed29d137f23,'),
(859, '14901', '01610425423', 'ASSALAMUALAIKUM', '8:41:42 PM', '2014-12-29', 'S|1701|8801610425423|3e1f9464-a8f6-4998-bf51-92aded2167f6,'),
(860, '666', '01671448829', 'Happy New Year-2015', '8:26:23 PM', '2014-12-30', 'S|1701|8801671448829|9dc84b93-0b32-40da-9ade-c66c9eb923eb,'),
(861, '6556', '01671448829|8801671655623', 'Dear, Territory Manager,\r\nYou must have been archive Two EIMS Software sale within 15-January.\r\nWish you every success in Dreams Tech.\r\nBest of luck...', '5:45:15 PM', '2015-01-05', 'S|1702,S|1702,'),
(862, '6556', '01671448829|8801671655623', 'Dear, Territory Manager,\r\nYou must have been archive Two EIMS Software sale within 15-January.\r\nWish you every success in Dreams Tech.\r\nBest of luck...', '5:47:49 PM', '2015-01-05', 'S|1701|8801671448829|9418ed77-5299-465e-9bd3-cf28b305cd22,S|1701|8801671655623|20725bc9-5054-4426-bc55-dad9793b6a62,'),
(863, '6556', '01913389366|8801750999452|8801912155072|8801914178160|8801719364526|8801918525700|8801796656612|8801911324160|8801675861961|8801624190012|8801912241978|8801717308020|8801816229153|8801686500973|8801918911965', 'Dear, Territory Manager,\r\nYou must have been archive Two EIMS Software sale within 15-January.\r\nWish you every success in Dreams Tech.\r\nBest of luck...', '6:26:15 PM', '2015-01-05', 'S|1701|8801913389366|b4922c62-6ca2-470d-9133-8972ce8a3ebe,S|1701|8801750999452|9479c724-ec49-4f89-9daa-6c70a8df7707,S|1701|8801912155072|e3cd6878-5dde-4792-bf10-63639a5b02c1,S|1701|8801914178160|5f5e23be-5a50-49f6-852a-76eb354bf84d,S|1701|8801719364526|72929b72-36c8-4c6d-8af9-a94bfa0145b7,S|1701|8801918525700|7430410f-23da-4955-8cc8-014704e5622f,S|1701|8801796656612|0eafb6fd-2f44-4abc-bcdc-1b5be74c3754,S|1701|8801911324160|e642613a-f307-4f29-9341-b4efb9c5717f,S|1701|8801675861961|9ab14d80-6346-4d7a-a922-33b53bdc51ad,S|1701|8801624190012|ba679ba2-00d5-4e0e-8061-ec01e9f51952,S|1701|8801912241978|2b2c0aef-9fd3-4aea-afff-7a9cd5aa8017,S|1701|8801717308020|d3c441b3-c5fe-415e-a1e1-6ebd1dee74cc,S|1701|8801816229153|381261db-278d-4757-958e-f2b47a852bab,S|1701|8801686500973|20e3896f-2f46-4b21-b108-0dd89435ab53,S|1701|8801918911965|7715b5c3-2ac9-49be-b48c-0c9a1e01be31,'),
(864, '666', '01775464609', 'hi this is a test sms', '8:24:37 PM', '2015-01-12', 'S|1701|8801775464609|a80eb393-927b-4f8c-9735-acb9c905697f,'),
(865, '666', '01775464609', 'hi this is 2nd sms happy new year', '8:26:14 PM', '2015-01-12', 'S|1702,'),
(866, '14910', '01923111302', 'Happy New Year 2015', '4:06:52 PM', '2015-01-13', 'S|1701|8801923111302|341992b2-e030-421c-878d-afe98561056d,'),
(867, '6556', '01913389366|8801750999452|8801912155072|8801914178160|8801719364526|8801918525700|8801796656612|8801911324160|8801675861961|8801624190012|8801912241978|8801717308020|8801816229153|8801686500973|8801918911965|88017140855626|8801673717263|8801677084468', 'Dear,\r\nTerritory Manager, \r\nWe are arranging an effective training session for all of you.\r\nYou are invited 20/01/14 at 3:00 pm\r\nContact: 01671448829\r\n', '7:03:51 PM', '2015-01-18', 'S|1701|8801913389366|a7fcdf0c-19a2-4e14-bec1-d06dd31a3349,S|1701|8801750999452|accdd08a-97fc-4816-990b-bc3576cb23a2,S|1701|8801912155072|fa40fb76-d0d7-415b-adb5-b9cbaa39e1d6,S|1701|8801914178160|12dcf08a-a973-48f4-b5bd-9ea1f56905a6,S|1701|8801719364526|de09dcbe-6bc4-4ee1-b0ee-26c46f20d3a2,S|1701|8801918525700|28102d04-8ed4-415e-b6dd-1d3b498ac05b,S|1701|8801796656612|e3537878-215e-40f9-bfdf-a24a07b458e3,S|1701|8801911324160|d3d1ded7-7fec-400a-a8ce-0c2f884e138f,S|1701|8801675861961|92109bc7-a308-4009-b558-0930e86e2d6f,S|1701|8801624190012|0db1e23d-e3be-4e8f-bb41-68773aeecfe7,S|1701|8801912241978|48961f7c-851a-40b2-b964-414d226740d1,S|1701|8801717308020|46667b7a-ec7a-4db5-8143-30ca75648e0c,S|1701|8801816229153|786840ff-a3c1-4ce0-bcd7-d5a3bad58da8,S|1701|8801686500973|434ccae4-2d9e-400a-b2c0-be1ad6d8b5e7,S|1701|8801918911965|5068d83e-d824-41e1-b598-181191a6d6e9,S|1701|88017140855626|d75e78e1-ff61-4be1-a9ff-445af78e4b7b,S|1701|8801673717263|393d9742-45b3-4505-a11f-91654fec7e34,S|1701|8801677084468|60dc10ad-4379-4033-b9ad-58d107d36d4e,'),
(868, '6556', '01913389366|8801922232452|8801912155072|8801914178160|8801719364526|8801918525700|8801796656612|8801911324160|8801675861961|8801624190012|8801912241978|8801717308020|8801816229153|8801686500973|8801918911965|88017140855626|8801673717263|8801677084468', 'Dear,\r\nTerritory Manager,\r\nWe are arranging an effective training session for all of you.\r\nYou are invited 20/01/2015 at 3:00 pm\r\nContact: 01671448829 ', '7:10:49 PM', '2015-01-18', 'S|1701|8801913389366|1ebc0932-a0ce-4d50-a5a5-bd47159da72c,S|1701|8801922232452|2ebf8699-cb0a-4bb9-91e5-6f1fea233b9f,S|1701|8801912155072|6cba50fe-1390-4dc0-a480-2f4f433112b6,S|1701|8801914178160|a683810a-42b3-4d12-ac06-fb9d50f0297f,S|1701|8801719364526|ba39e0a5-addd-404f-872f-11987af678d9,S|1701|8801918525700|a38f0102-0365-49ba-b60c-a815f018edd8,S|1701|8801796656612|3708f1fc-2a0a-476e-a9f5-93ac5b903e57,S|1701|8801911324160|a8107f11-a6fc-4d98-82c2-4f4faffa133f,S|1701|8801675861961|d9904deb-5d60-4362-80d9-029a094df1a7,S|1701|8801624190012|24ded762-635c-4344-a5b9-fcc16bfb24d4,S|1701|8801912241978|2d6b188c-1832-4f9b-93a9-32e58991b220,S|1701|8801717308020|613b5133-1248-4f43-b569-62327695f074,S|1701|8801816229153|cea13050-03ae-46da-a57c-32bb9852d3bc,S|1701|8801686500973|ff7c8f3a-9983-4405-b7a9-6a458928c04d,S|1701|8801918911965|11236b55-d2c9-4dc4-bb30-f91e13e3c357,S|1701|88017140855626|3e9d2ecb-5f05-42da-9f2a-f079b1629241,S|1701|8801673717263|b8ad76b1-6664-4382-aaa0-8b7adde0021b,S|1701|8801677084468|740774df-19d1-4823-a12b-30aaa15cc099,'),
(869, '6556', '01671448829', 'Hi....', '7:16:36 PM', '2015-01-18', 'S|1701|8801671448829|b237c4aa-0ac8-4302-b42b-403b81b4bf32,'),
(870, '666', '01676815102', 'Happy New Year-2015\r\nBest of Luck\r\nSohel', '4:37:19 PM', '2015-01-19', 'S|1701|8801676815102|e6c703ee-b6ba-4f36-aecb-0dfd848ed3e0,'),
(871, '6556', '01688709152', 'Dear,\r\nTerritory Manager,\r\nWe are arranging an effective training session for all of you.\r\nYou are invited 20/01/2015 at 3:00 pm\r\nContact: 01671448829 ', '5:34:14 PM', '2015-01-19', 'S|1701|8801688709152|d1abaeea-a786-4717-ba24-2ae57846a978,'),
(872, '666', '01688742482', 'Happy New Year- 2015', '12:18:23 PM', '2015-01-22', 'S|1701|8801688742482|ef6bcc56-79c3-433a-95d1-3c936ca43780,'),
(873, '666', '01671448829', 'Dear Guardian, Fahad BHuyian Result is : B=78, E=68, M=77,<br>', '9:33:20 PM', '2015-01-23', 'S|1702,'),
(874, '666', '01911353197', 'Dear Guardian, S.k. Alvi Result is : B=75, E=72, M=82<br>', '9:33:22 PM', '2015-01-23', 'S|1702,'),
(875, '666', '', 'Dear Guardian, Your Child/Brother/Sister is Absent today class at DREAMS TECH SCHOOL & COLLEGE', '9:34:07 PM', '2015-01-23', 'S|1706,'),
(876, '666', '01671448829|8801911353197', 'Dear Guardian, Your Child/Brother/Sister is Present today in the class at DREAMS TECH SCHOOL & COLLEGE', '9:34:09 PM', '2015-01-23', 'S|1702,S|1702,'),
(877, '666', '01671448829', 'Hi, How are you..?', '9:35:42 PM', '2015-01-23', 'S|1702,'),
(878, '666', '01671448829', 'Hidfbfrjkrsv', '9:36:32 PM', '2015-01-23', 'S|1702,'),
(879, '666', '01927608261', 'hi mama i am fahga', '7:00:56 PM', '2015-01-25', 'S|1702,'),
(880, '666', '01927608261', 'hi mama i am fahga', '7:01:18 PM', '2015-01-25', 'S|1702,'),
(881, '666', '', 'Dear Guardian, Your Child/Brother/Sister is Absent today class at DREAMS TECH SCHOOL & COLLEGE', '7:07:31 PM', '2015-01-25', 'S|1706,'),
(882, '666', '029339846', 'Dear Guardian, Your Child/Brother/Sister is Present today in the class at DREAMS TECH SCHOOL & COLLEGE', '7:07:32 PM', '2015-01-25', 'S|1706,'),
(883, '666', '01703261905', 'hi this is a test sms ', '5:18:58 PM', '2015-03-20', 'S|1701|8801703261905|052e4d05-e68f-437e-876d-e03f84814d9d,'),
(884, '555000', '01732228078|8801775464609', 'Choitrer Raat Shese\r\nShurjo Ashe Notun Beshe,\r\nShei Shurjer Rongin Aalo\r\nMuche Dik Tomar Jiboner Shokol Kalo,\r\nShuvo Nabobarso-1422.\r\n\r\nFrom-Fahad Bhuyian', '10:39:38 PM', '2015-04-13', 'S|1701|8801732228078|44192e1e-afd5-4b5e-958d-03a03d38d873,S|1701|8801775464609|84ae9b30-6c29-4a5c-94b7-e041650c5b46,'),
(885, '555000', '01928683462|8801676678254', 'Baisakh dilo Notuner dak,\r\nPurono dukkho jak muche jak.\r\nkhushir poroshe notun horoshe\r\nVore jak mon pran.\r\nâ€“ Subho Nababarsho 1422', '11:05:15 PM', '2015-04-13', 'S|1701|8801928683462|d0aebced-d537-4d6d-925f-23eeee40da38,S|1701|8801676678254|9c1b1a09-70af-4431-b822-26e0d43a785e,'),
(886, '555000', '01676678254', 'Baisakh dilo Notuner dak,\r\nPurono dukkho jak muche jak.\r\nkhushir poroshe notun horoshe\r\nVore jak mon pran.\r\nâ€“ Subho Nababarsho 1422', '11:10:10 PM', '2015-04-13', 'S|1701|8801676678254|890c3718-e094-446a-9dc7-ba924da4b815,'),
(887, '555000', '01676678254', 'Baisakh dilo Notuner dak,<br>\r\nPurono dukkho jak muche jak.<br>\r\nkhushir poroshe notun horoshe<br>\r\n', '11:52:13 PM', '2015-04-13', 'S|1701|8801676678254|74d48ee8-9c54-4b0f-bb9e-69ad1d864642,'),
(888, '555000', '01775464609', 'hi sssss', '12:23:43 AM', '2015-04-14', 'S|1701|8801775464609|0bceda0a-ae6e-4213-975e-a2161c1e7ead,'),
(889, '555000', '01937171342|8801622650952|8801535412933|8801674931139', 'Choitrer Raat Shese\r\nShurjo Ashe Notun Beshe,\r\nShei Shurjer Rongin Aalo\r\nMuche Dik Amader Jiboner Shokol Kalo,\r\nShuvo Nabobarso-1422.\r\n', '1:16:40 AM', '2015-04-14', 'S|1701|8801937171342|5483b75d-80e6-466b-9e9b-92a7a5636531,S|1701|8801622650952|877572af-3bfa-4c10-9581-47e8632e3359,S|1701|8801535412933|a81ba494-b399-4d8a-89b6-02a0b0d4edaf,S|1701|8801674931139|0e4805fa-0aed-4cd3-9e5a-834257d98e88,'),
(890, '555000', '01825508030|88016319439283|8801966379453|8801912860996|8801923132009|8801733226640|8801670219405|8801914272921|8801816277816|8801730057412', 'Choitrer Raat Shese\r\nShurjo Ashe Notun Beshe,\r\nShei Shurjer Rongin Aalo\r\nMuche Dik Tomar Jiboner Shokol Kalo,\r\nShuvo Nabobarso-1422.\r\n', '1:18:26 AM', '2015-04-14', 'S|1701|8801825508030|c3c6b3c9-9053-4a3e-9b76-c98d3b1d9f64,S|1701|88016319439283|82b08a9e-f3da-4f03-870a-747380789ba3,S|1701|8801966379453|bd649beb-9880-4ae7-9291-a7172d8c8a0b,S|1701|8801912860996|4445464a-2853-445a-967c-78ad71aa7cb3,S|1701|8801923132009|02567d6f-f392-40c5-9fd0-81381928f820,S|1701|8801733226640|52483a9a-9590-4559-9dd3-96f65f2c35f4,S|1701|8801670219405|e846b999-459a-444e-9b1b-563f991cb31c,S|1701|8801914272921|65d4c848-81c1-43d9-93c3-a1109d933308,S|1701|8801816277816|a1f1723e-56aa-4a12-b269-d5aedce40f20,S|1701|8801730057412|4a80566d-7ba1-44c0-94b5-3a84e279e438,'),
(891, '555000', '01710307386|8801911049298|8801822668010|8801784411112|8801815282555|8801779199765|8801675180510|8801823661161|8801742051137|8801742051137|8801736947816|8801914584232|8801735661492|8801917555999|8801732410004|8801912508463|8801740752871|8801759814220|8801842742990|8801720625829|8801675626797|8801823201293|8801728414480|8801757246968|8801919194949', 'Choitrer Raat Shese\r\nShurjo Ashe Notun Beshe,\r\nShei Shurjer Rongin Aalo\r\nMuche Dik Tomar Jiboner Shokol Kalo,\r\nShuvo Nabobarso-1422.\r\n', '1:19:38 AM', '2015-04-14', 'S|1701|8801710307386|0d8532b6-476a-4849-a7ce-138c488e8b3d,S|1701|8801911049298|3f9de709-4dd6-4750-8534-eabf3a2fe40f,S|1701|8801822668010|93172717-de46-448b-a160-449b318ccde7,S|1701|8801784411112|95e573e7-1bc0-4bbd-a1f9-c9b1fb661b55,S|1701|8801815282555|8216951f-4dc1-4560-a025-62d2449d532c,S|1701|8801779199765|cc8789f3-149e-48c5-8697-a14922faed81,S|1701|8801675180510|24050d71-d295-4209-a54e-cbb97bd880e1,S|1701|8801823661161|36a93dde-b001-4b42-bbef-0dfa7c5d35bf,S|1701|8801742051137|44d3f5b6-25d7-400b-bf65-8009f3dcc6fc,S|1701|8801742051137|d264cd60-18c7-4534-ade0-4624804cff33,S|1701|8801736947816|d9ba2fac-5f43-453a-96f5-af799ca552f9,S|1701|8801914584232|10d52fad-48b9-421a-bd85-7a0d2b63868f,S|1701|8801735661492|bdcd7b2d-b1d6-4495-a627-bf5cfb7244a4,S|1701|8801917555999|2cc2c365-d465-421d-a01e-355d6ccb26bb,S|1701|8801732410004|e3a6fce9-8ae8-4a53-9d8a-11f062987811,S|1701|8801912508463|c2104b3c-b5db-4186-8892-e4793da29ea9,S|1701|8801740752871|3214c887-b586-4a83-b940-1f1b217f0a41,S|1701|8801759814220|d26f1371-fa55-45b6-ba3b-676842fdca43,S|1701|8801842742990|2083d8ca-0316-49f5-8864-fdce6441e7b3,S|1701|8801720625829|aeab0e58-e9ee-45f2-b4f3-2c0670a76686,S|1701|8801675626797|0442b2b5-a59d-4a08-bc29-48e6d6284325,S|1701|8801823201293|6198521a-79c4-4206-b41e-f9168d9fce39,S|1701|8801728414480|536b9085-7a07-47ea-a1e8-7cc7b457a218,S|1701|8801757246968|1b4c0386-ecf0-45a9-9b94-e4b795d49009,S|1701|8801919194949|c0ac5c22-fb33-4d09-919c-77349057abce,'),
(892, '555000', '01732228078|8801775464609|8801928683462|8801676678254|8801675269046|8801932567533|8801839371751|8801676538522|8801682193166|8801830725739|8801726110295|8801851950931|8801851644147|8801712864932|8801860748020|8801725500898|8801778547760|8801746636167|8801779839833|8801833937313|8801815218896', 'Choitrer Raat Shese\r\nShurjo Ashe Notun Beshe,\r\nShei Shurjer Rongin Aalo\r\nMuche Dik Tomar Jiboner Shokol Kalo,\r\nShuvo Nabobarso-1422.\r\n', '1:21:32 AM', '2015-04-14', 'S|1701|8801732228078|4e96d7f3-1132-4008-93f6-b27bb54958e8,S|1701|8801775464609|fcb3b0d6-b951-4e0e-b2cb-dbd5b6d3ed81,S|1701|8801928683462|bc2a423d-e0ff-49a9-a158-51f20917d120,S|1701|8801676678254|a41382e1-ad4e-4ee2-ac14-47af84900f6e,S|1701|8801675269046|68857f0b-fcfa-432a-a970-c04ed42beb88,S|1701|8801932567533|1d9acbe6-665e-4e0c-98f5-3d9a5747e463,S|1701|8801839371751|5591fda5-b5b9-4ba9-b656-1b1e363e5e74,S|1701|8801676538522|f8783e05-1707-4134-a95b-0ace510d7b0a,S|1701|8801682193166|1fb95859-8840-425d-9711-d9c732515ad4,S|1701|8801830725739|9b510760-8f80-4e1e-b22e-540997fc0f2e,S|1701|8801726110295|a6dbd27d-007b-4119-a1be-7ce4c29f45c4,S|1701|8801851950931|ba8c4887-5b80-4164-8640-988d94ac15da,S|1701|8801851644147|01fa2d7f-fa97-4409-91c0-01215c2124fe,S|1701|8801712864932|dcf98cc8-8606-4cab-84c3-6e2e89b1b4ae,S|1701|8801860748020|169de70e-77b7-4842-8023-6a2b7e8d7821,S|1701|8801725500898|21c5c1bd-c318-42a2-bd2c-b457f19097a0,S|1701|8801778547760|9679a802-b7d5-495d-b391-34dfa542bd4f,S|1701|8801746636167|9a4834bb-657c-4ed4-ae93-ba0b3eff24e3,S|1701|8801779839833|360656e3-8e97-4eba-a827-f5bf40210992,S|1701|8801833937313|0b14d6c2-c693-4f53-b27d-cdc37ed968f2,S|1701|8801815218896|7ce47305-60fc-48e0-b8ae-c1c93cca69af,'),
(893, '555000', '01723733624|8801676853161|8801713620478|8801830803010|8801727565570|8801830027982|8801911751762|8801843513563|8801719465579|8801847135031|8801780590556|8801764333663|8801923318408|8801979808707|8801733676906|8801932493135|8801672061032|8801787899203|8801719715285', 'Choitrer Raat Shese\r\nShurjo Ashe Notun Beshe,\r\nShei Shurjer Rongin Aalo\r\nMuche Dik Tomar Jiboner Shokol Kalo,\r\nShuvo Nabobarso-1422.\r\n', '1:23:00 AM', '2015-04-14', 'S|1701|8801723733624|1a26fa94-5ac0-4935-b9f1-f21a5f079fcf,S|1701|8801676853161|0583d00b-3883-4b09-9f02-0882a66c9e99,S|1701|8801713620478|0dd35250-ef2f-4572-915d-740333f6fdcd,S|1701|8801830803010|70e309a0-7de0-44f6-8d64-ed36bed27e75,S|1701|8801727565570|844774d2-f502-41a8-8e77-10911d587230,S|1701|8801830027982|238ce963-49a3-4812-af12-251f9fc00a0b,S|1701|8801911751762|fe133124-5c34-4060-a4f4-c67f76ed5d0a,S|1701|8801843513563|9d22b9ce-c358-4596-ba71-0d78b9ed1459,S|1701|8801719465579|2886a5bd-0067-4168-9d2b-2ecd3aa52684,S|1701|8801847135031|675dd2fc-b757-4822-84bc-a3f852e6ef50,S|1701|8801780590556|ee0d0828-9a48-4ae1-ae00-aedf5db90b7e,S|1701|8801764333663|b994304a-afa5-4f28-b643-f5afb486ee9e,S|1701|8801923318408|b52ea0ab-4bdc-42a8-92a5-87d48363670a,S|1701|8801979808707|5c16cd3a-b044-4b5d-826a-e5da2f7fc0cf,S|1701|8801733676906|113c8465-7247-4843-955c-a387049a1fc0,S|1701|8801932493135|458f217a-f947-42e7-a2f7-47826bcd0cf7,S|1701|8801672061032|51a40a37-2e52-44f0-ade1-5ae1d0829aee,S|1701|8801787899203|1c931f37-20f0-4855-9c55-6d42ab2dbcce,S|1701|8801719715285|e2f38f75-125a-4a0d-a616-96090972899f,'),
(894, '555000', '01867149775', 'Choitrer Raat Shese\r\nShurjo Ashe Notun Beshe,\r\nShei Shurjer Rongin Aalo\r\nMuche Dik Tomar Jiboner Shokol Kalo,\r\nShuvo Nabobarso-1422.\r\n', '1:29:07 AM', '2015-04-14', 'S|1701|8801867149775|5e91e4ad-c462-4447-87bf-bef20045f996,'),
(895, '555000', '01772714087', 'Choitrer Raat Shese\r\nShurjo Ashe Notun Beshe,\r\nShei Shurjer Rongin Aalo\r\nMuche Dik Tomar Jiboner Shokol Kalo,\r\nShuvo Nabobarso-1422.\r\n', '1:30:16 AM', '2015-04-14', 'S|1701|8801772714087|ed2e42a2-0bc2-4e7b-92b6-02ebbf924939,'),
(896, '555000', '01866055770|8801689092206|8801824122224|8801858224616|8801838602879|8801839351174|8801791783399|8801855755309|8801840064375|8801832585326|8801838961946|8801521450064|8801772714087|8801795517265|8801775464609|8801986055457|8801862450929|8801837005295|8801796665026|8801867506229|8801825948444|8801819691581|8801864187637|8801850959571|8801781898178|8801835076321|8801837757504|8801772514545|8801812053226|8801867149775', 'Notun bhorer notun alo\r\nNotun ashar prodip jalo,\r\nNotun Shurer Notun Gane\r\nNotun kore egiye cholo.\r\nSubho Nababarso 1422.', '2:02:02 AM', '2015-04-14', 'S|1701|8801866055770|caa289fc-8552-40ea-b82e-bd8997d21c63,S|1701|8801689092206|39973588-f458-457a-8352-f9510fa9458c,S|1701|8801824122224|12d540bd-cf25-41d4-b278-850866c04c8c,S|1701|8801858224616|09cdd037-0921-419c-896c-840acca9cdce,S|1701|8801838602879|4cebd79a-18b4-4935-9b78-29bbf1bf1bf6,S|1701|8801839351174|3c67a65a-cb5e-467e-bbd9-af65d15d05e4,S|1701|8801791783399|11cfb114-81e9-4ca6-8eb6-dfd02cd0f95b,S|1701|8801855755309|82d8eb90-ee0d-41b5-8d02-59a0281241d2,S|1701|8801840064375|efd6cf78-bb56-4170-8690-20bdd7511bee,S|1701|8801832585326|db9e5bca-892c-47cf-838d-3896666bcfc8,S|1701|8801838961946|c8f0c541-1b7b-45d4-8960-eb6c396168fe,S|1701|8801521450064|4a8366b0-8e0c-479b-895a-4b5f4ef1f3ea,S|1701|8801772714087|e3c70a8f-72db-4c00-b9e0-b13aabe14803,S|1701|8801795517265|cefbbce8-2a24-4cc2-a86e-e13dac83d4c0,S|1701|8801775464609|0af960b9-c19e-4b1a-891a-88bf9c7de752,S|1701|8801986055457|9fefa21f-a47d-4f08-8768-1168d8fd6045,S|1701|8801862450929|30f15acb-4807-4e02-8b88-a38151623e05,S|1701|8801837005295|c41e6bde-a9f0-4cea-a207-0cc7147cf320,S|1701|8801796665026|5d4f307f-044a-4899-9948-d1feba2263d5,S|1701|8801867506229|5cbabf6b-a6d7-4366-bd9d-313cb32a1cf9,S|1701|8801825948444|3565c87d-265f-4873-82ea-14c39dcd2463,S|1701|8801819691581|378748cb-7861-41c0-95ae-30c8b4b74ba7,S|1701|8801864187637|34ac22bc-5b53-47a1-b9b8-11a0b39429eb,S|1701|8801850959571|b77b159c-00ba-4a94-a3ac-f249c8876af6,S|1701|8801781898178|486dd146-5398-4b33-bd00-3ac8669fb6bf,S|1701|8801835076321|cf4afd40-8389-4d44-a25f-da2b0122973b,S|1701|8801837757504|b85b29e0-665e-42da-b4e0-45757c4909f8,S|1701|8801772514545|440ac06f-d9fa-4499-811b-ee3a4175781b,S|1701|8801812053226|72f555d2-7b69-4c74-aec7-3b4bcac411f8,S|1701|8801867149775|4d119e13-e324-492e-8fdc-ffd6c89058d1,'),
(897, '666000', '01775464609|8801750117002|8801712864932|8801677136045|8801670477145|8801727538323|8801688038343|8801778675259|8801772553023|8801855516563|8801918237511|8801622738178|8801685329249|8801813608742|880172841480|8801834040588|8801721124974|8801787899203|8801676632365|8801685354391|8801928683462', 'Boisakh dilo Notuner dak,\r\nPurono dukkho jak muche jak.\r\nkhushir poroshe notun horoshe\r\nVore jak mon pran.\r\nâ€“ Subho Nababarsho - 1422', '2:02:35 AM', '2015-04-14', 'S|1701|8801775464609|8b7ce2ce-1fa0-47f4-8088-ee5d86f93c84,S|1701|8801750117002|31b95352-bef7-47cc-94a5-a6e1abc9dcbe,S|1701|8801712864932|239c5cf2-4d37-469e-ab4d-031a37a6ce06,S|1701|8801677136045|bd089ded-6458-443c-a121-5fb11e91cf92,S|1701|8801670477145|feca16f7-75ee-42de-a21c-b489bd3b5f5a,S|1701|8801727538323|07ef5fe8-6893-444f-a6e6-4d5d2dd9730e,S|1701|8801688038343|1394d363-658d-4fa6-880f-ec09d10a4ed6,S|1701|8801778675259|b277a4af-2297-4c04-af21-706d751b20b7,S|1701|8801772553023|204d5d95-a67a-4fd2-8031-fca0f8a51877,S|1701|8801855516563|d0f081c9-f2d5-430f-adf2-aa86cf183226,S|1701|8801918237511|c82d901f-66ce-4e70-92d5-9849d70a6f02,S|1701|8801622738178|5a0bff7c-00b0-496a-968a-4d91bc36136b,S|1701|8801685329249|19abfee8-01d3-46c1-a708-a8bb836032aa,S|1701|8801813608742|abcec7a2-f8a4-43ae-a546-3ac006c43b4e,S|1701|880172841480|10f6fd8c-aedf-4b54-b86c-861067eaf514,S|1701|8801834040588|4c076155-7da1-416d-b3ec-a7f865b75e83,S|1701|8801721124974|42d69d3d-2afb-495b-98cd-6d75043dabbf,S|1701|8801787899203|01b9eca6-8711-49cb-b826-9e9030034fd7,S|1701|8801676632365|ca04c68f-1452-41fc-a08b-0b5a485d95bc,S|1701|8801685354391|c374d680-2296-4abb-9f68-1d2497bf1ba5,S|1701|8801928683462|dc4cd21d-e915-4699-b434-19b97ad33f2b,'),
(898, '666000', '01863291354', 'Boishakh dilo Notuner dak,\r\nPurono dukkho jak muche jak.\r\nkhushir poroshe notun horoshe\r\nVore jak mon pran.\r\nâ€“ Subho Nababarsho - 1422', '2:06:48 AM', '2015-04-14', 'S|1701|8801863291354|d515bb6e-acf1-4a97-a3e9-f9f850dfa0e5,'),
(899, '105949', '', 'hi Fahad Bhuyian', '9:54:16 AM', '2015-06-30', 'S|1706,'),
(900, '105949', '01860748020', 'hi Fahad Bhuyian', '9:54:43 AM', '2015-06-30', 'S|1701|8801860748020|86aa385e-3de4-4c83-aa8f-9b1cb73904c7,'),
(901, '105949', '01748009080|8801710706541', 'Welcome To Natopara Girls Dakhil Madrasha. ', '1:35:58 PM', '2015-07-01', ''),
(902, '105949', '01748009080|8801710706541', 'Welcome To Natopara Girls Dakhil Madrasha. ', '1:36:40 PM', '2015-07-01', ''),
(903, '105949', '01710706541', 'hiiii', '3:11:36 PM', '2016-06-22', 'S|1701|8801710706541|1bbf1d9b-c0b1-4ec4-addf-61669f4a4ac4,'),
(904, '105949', '+8801851873433|8801710706541', 'joto bada asuk ami tomar jonno opekkha korbo. ami tomar jonno opekkhay thakbo. Forget me not....', '3:30:10 PM', '2016-06-22', 'S|1706,S|1701|8801710706541|23a6ac80-5b08-4d74-8666-04d06a7fba03,'),
(905, '105949', '01710706541|88+8801851873433|88+8801731633472', 'Apni hoyto sukhe achen apnar best friend k kosto diye, Kinto sotti ki tai? Deri na kore aj oi apnar friend k akhon oi sms korun na hoy apni chiro diner jonno apni harate bosben. Send by {Obiman}', '3:41:42 PM', '2016-06-22', 'S|1701|8801710706541|2d9fe934-0934-4e34-873d-711dbbcb08ef,S|1706,S|1706,'),
(906, '105949', '01710706541|88+8801731633472|88+8801919706541', 'R deri noy..... ', '3:46:55 PM', '2016-06-22', 'S|1701|8801710706541|319a60f1-d8a7-4d73-baf9-e30f63659ba5,S|1706,S|1706,'),
(907, '105949', '+8801731633472|88+8801919706541', 'Opekkha', '4:03:11 PM', '2016-06-22', 'S|1706,S|1706,'),
(908, '105949', '01851873433|8801731633472|8801919706541', 'Opekkha.............', '4:10:53 PM', '2016-06-22', 'S|1701|8801851873433|01c1bdd4-a6fd-4555-b821-c4d65527ceff,S|1701|8801731633472|59e3242f-4eb7-4de8-9839-40641cbd3546,S|1701|8801919706541|05569110-d41c-495a-b169-56af07000933,'),
(909, '105949', '01731633472|8801919706541|8801710706541', 'Welcome to select our number...', '4:22:18 PM', '2016-06-22', 'S|1701|8801731633472|2ffe85e0-0cef-458c-9edd-43eb508e55a7,S|1701|8801919706541|1db3169c-b38e-426d-a607-5c390e18e2f5,S|1701|8801710706541|897fd918-0a74-4018-8901-9171e895f1ab,'),
(910, '105949', '01860748020', 'Hello Mr.Fahad,\r\nasjhasanhjwidqiwd', '5:04:11 PM', '2016-10-25', 'S|1701|8801860748020|3a596ea9-5335-42f2-87f6-7df0f1789a56,');

-- --------------------------------------------------------

--
-- Table structure for table `sms_inventory`
--

CREATE TABLE IF NOT EXISTS `sms_inventory` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `eiin_number` int(20) NOT NULL,
  `note` varchar(255) NOT NULL,
  `sms` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sms_inventory`
--

INSERT INTO `sms_inventory` (`id`, `eiin_number`, `note`, `sms`, `date`, `status`) VALUES
(1, 666, 'Free From AMS IT', 1001, '2014-05-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_fees_amount`
--

CREATE TABLE IF NOT EXISTS `student_fees_amount` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `branch_id` int(20) NOT NULL,
  `student_id` int(20) DEFAULT NULL,
  `session_id` int(20) DEFAULT NULL,
  `class_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student_fees_amount`
--

INSERT INTO `student_fees_amount` (`id`, `branch_id`, `student_id`, `session_id`, `class_id`, `group_id`, `amount`, `date`, `status`) VALUES
(1, 666, 66691968, 15, 188, 147, '94', NULL, NULL),
(2, 666, 66691968, 15, 188, 147, '-106', NULL, NULL),
(3, 666, 66691968, 15, 188, 147, '-6', NULL, NULL),
(4, 666, 66691968, 15, 188, 147, '100', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_module_student_photo`
--

CREATE TABLE IF NOT EXISTS `student_module_student_photo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) DEFAULT NULL,
  `user_id` int(20) DEFAULT NULL,
  `admission_id` int(20) DEFAULT NULL,
  `photo` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `student_module_student_photo`
--

INSERT INTO `student_module_student_photo` (`id`, `school_id`, `user_id`, `admission_id`, `photo`, `date`, `status`) VALUES
(1, 666, 3, 66678460, 'student_1428371614.jpg', '2015-04-07', 1),
(2, 666, 3, 66618456, 'student_1428393302.jpg', '2015-04-07', 1),
(3, 666, 3, 66682748, 'student_1428507768.jpg', '2015-04-08', 1),
(4, 666, 3, 66689173, 'student_1428528895.jpg', '2015-04-09', 1),
(5, 666, 3, 66624217, 'student_1428787204.jpg', '2015-04-12', 1),
(6, 666, 3, 66642759, 'student_1428792019.jpg', '2015-04-12', 1),
(7, 666, 3, 66659475, 'student_1428792210.jpg', '2015-04-12', 1),
(8, 666, 3, 66632617, 'student_1428796760.jpg', '2015-04-12', 1),
(9, 666, 3, 66657670, 'student_1428804557.jpg', '2015-04-12', 1),
(10, 666, 3, 66653064, 'student_1428855811.jpg', '2015-04-12', 1),
(11, 666, 3, 66640170, 'student_1428863451.jpg', '2015-04-13', 1),
(12, 666, 3, 66667119, 'student_1429108603.jpg', '2015-04-15', 1),
(13, 666, 3, 66655419, 'student_1429295048.jpg', '2015-04-18', 1),
(14, 666, 3, 66688527, 'student_1429297319.jpg', '2015-04-18', 1),
(15, 666, 3, 66609966, 'student_1429352566.jpg', '2015-04-18', 1),
(16, 666, 3, 66679085, 'student_1429513789.jpg', '2015-04-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_sms_attendence`
--

CREATE TABLE IF NOT EXISTS `student_sms_attendence` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `admission_id` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student_sms_attendence`
--

INSERT INTO `student_sms_attendence` (`id`, `admission_id`, `date`, `status`) VALUES
(1, 66625131, '2015-01-23', 1),
(2, 66611184, '2015-01-23', 1),
(3, 66606934, '2015-01-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

CREATE TABLE IF NOT EXISTS `student_subject` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `school_id` int(20) NOT NULL,
  `session_id` varchar(20) NOT NULL,
  `class_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `student_id` int(20) NOT NULL,
  `subject_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

--
-- Dumping data for table `student_subject`
--

INSERT INTO `student_subject` (`id`, `school_id`, `session_id`, `class_id`, `group_id`, `user_id`, `student_id`, `subject_id`, `date`, `status`) VALUES
(1, 666, '15', 188, 146, 3, 66610085, 413, '2015-04-12', 1),
(2, 666, '15', 188, 146, 3, 66610085, 414, '2015-04-12', 1),
(3, 666, '15', 188, 146, 3, 66610085, 415, '2015-04-12', 1),
(4, 666, '15', 188, 146, 3, 66610085, 416, '2015-04-12', 1),
(5, 666, '15', 188, 146, 3, 66610085, 417, '2015-04-12', 1),
(6, 666, '15', 188, 146, 3, 66628252, 413, '2015-04-12', 1),
(7, 666, '15', 188, 146, 3, 66628252, 414, '2015-04-12', 1),
(10, 666, '15', 188, 146, 3, 66628252, 417, '2015-04-12', 1),
(14, 666, '15', 188, 146, 3, 66672498, 416, '2015-04-12', 1),
(15, 666, '15', 188, 146, 3, 66672498, 417, '2015-04-12', 1),
(16, 666, '15', 188, 146, 3, 66672498, 418, '2015-04-12', 1),
(17, 666, '15', 188, 146, 3, 66646388, 413, '2015-04-12', 1),
(27, 666, '15', 188, 146, 3, 66657684, 417, '2015-04-12', 1),
(28, 666, '15', 188, 146, 3, 66657684, 418, '2015-04-12', 1),
(29, 666, '15', 188, 146, 3, 66657684, 419, '2015-04-12', 1),
(30, 666, '15', 188, 146, 3, 66642691, 413, '2015-04-12', 1),
(31, 666, '15', 188, 146, 3, 66642691, 414, '2015-04-12', 1),
(32, 666, '15', 188, 146, 3, 66642691, 415, '2015-04-12', 1),
(33, 666, '15', 188, 146, 3, 66642691, 416, '2015-04-12', 1),
(34, 666, '15', 188, 146, 3, 66642691, 417, '2015-04-12', 1),
(38, 666, '15', 188, 146, 3, 66642691, 419, '2015-04-12', 2),
(39, 666, '15', 188, 146, 3, 66642691, 420, '2015-04-12', 2),
(43, 666, '15', 188, 146, 3, 66642691, 421, '2015-04-12', 1),
(44, 666, '15', 188, 146, 3, 66642691, 418, '2015-04-12', 3),
(45, 666, '15', 188, 146, 3, 66642691, 422, '2015-04-12', 2),
(46, 666, '15', 188, 146, 3, 66657670, 413, '2015-04-12', 1),
(47, 666, '15', 188, 146, 3, 66657670, 414, '2015-04-12', 1),
(48, 666, '15', 188, 146, 3, 66657670, 415, '2015-04-12', 1),
(49, 666, '15', 188, 146, 3, 66657670, 416, '2015-04-12', 1),
(50, 666, '15', 188, 146, 3, 66657670, 417, '2015-04-12', 1),
(51, 666, '15', 188, 146, 3, 66657670, 420, '2015-04-12', 1),
(52, 666, '15', 188, 146, 3, 66657670, 418, '2015-04-12', 2),
(53, 666, '15', 188, 146, 3, 66657670, 419, '2015-04-12', 2),
(55, 666, '15', 188, 146, 3, 66657670, 422, '2015-04-12', 3),
(56, 666, '15', 188, 146, 3, 66657670, 421, '2015-04-12', 1),
(57, 666, '15', 188, 146, 3, 66653064, 413, '2015-04-12', 1),
(58, 666, '15', 188, 146, 3, 66653064, 414, '2015-04-12', 1),
(59, 666, '15', 188, 146, 3, 66653064, 415, '2015-04-12', 1),
(60, 666, '15', 188, 146, 3, 66653064, 416, '2015-04-12', 1),
(62, 666, '15', 188, 146, 3, 66653064, 421, '2015-04-12', 1),
(63, 666, '15', 188, 146, 3, 66653064, 422, '2015-04-12', 1),
(64, 666, '15', 188, 146, 3, 66653064, 419, '2015-04-12', 2),
(65, 666, '15', 188, 146, 3, 66653064, 420, '2015-04-12', 2),
(66, 666, '15', 188, 146, 3, 66653064, 418, '2015-04-12', 3),
(67, 666, '15', 188, 146, 3, 66653064, 417, '2015-04-12', 2),
(68, 666, '15', 188, 146, 3, 66667119, 413, '2015-04-15', 1),
(69, 666, '15', 188, 146, 3, 66667119, 414, '2015-04-15', 1),
(70, 666, '15', 188, 146, 3, 66667119, 421, '2015-04-15', 1),
(71, 666, '15', 188, 146, 3, 66667119, 422, '2015-04-15', 1),
(72, 666, '15', 188, 146, 3, 66667119, 416, '2015-04-15', 1),
(73, 666, '15', 188, 146, 3, 66667119, 417, '2015-04-15', 1),
(74, 666, '15', 188, 146, 3, 66667119, 420, '2015-04-15', 2),
(75, 666, '15', 188, 146, 3, 66667119, 418, '2015-04-15', 3),
(76, 666, '15', 188, 146, 3, 66655419, 413, '2015-04-18', 1),
(77, 666, '15', 188, 146, 3, 66655419, 421, '2015-04-18', 1),
(78, 666, '15', 188, 146, 3, 66655419, 414, '2015-04-18', 1),
(79, 666, '15', 188, 146, 3, 66655419, 422, '2015-04-18', 1),
(85, 666, '15', 188, 146, 3, 66655419, 416, '2015-04-18', 2),
(86, 666, '15', 188, 146, 3, 66655419, 417, '2015-04-18', 2),
(87, 666, '15', 188, 146, 3, 66655419, 415, '2015-04-18', 2),
(88, 666, '15', 188, 146, 3, 66655419, 418, '2015-04-18', 3),
(89, 666, '15', 188, 146, 3, 66609966, 413, '2015-04-18', 1),
(90, 666, '15', 188, 146, 3, 66609966, 414, '2015-04-18', 1),
(91, 666, '15', 188, 146, 3, 66609966, 415, '2015-04-18', 1),
(92, 666, '15', 188, 146, 3, 66609966, 422, '2015-04-18', 1),
(93, 666, '15', 188, 146, 3, 66609966, 421, '2015-04-18', 1),
(94, 666, '15', 188, 146, 3, 66609966, 417, '2015-04-18', 2),
(95, 666, '15', 188, 146, 3, 66609966, 418, '2015-04-18', 2),
(96, 666, '15', 188, 146, 3, 66609966, 419, '2015-04-18', 2),
(97, 666, '15', 188, 146, 3, 66609966, 420, '2015-04-18', 3),
(98, 666, '15', 188, 146, 3, 66679085, 413, '2015-04-20', 1),
(99, 666, '15', 188, 146, 3, 66679085, 413, '2015-04-20', 1),
(100, 666, '15', 188, 146, 3, 66679085, 414, '2015-04-20', 1),
(101, 666, '15', 188, 146, 3, 66679085, 415, '2015-04-20', 1),
(102, 666, '15', 188, 146, 3, 66679085, 416, '2015-04-20', 1),
(103, 666, '15', 188, 146, 3, 66679085, 417, '2015-04-20', 1),
(104, 666, '15', 188, 146, 3, 66679085, 418, '2015-04-20', 1),
(105, 666, '15', 188, 146, 3, 66679085, 419, '2015-04-20', 2),
(106, 666, '15', 188, 146, 3, 66679085, 420, '2015-04-20', 2),
(107, 666, '15', 188, 146, 3, 66679085, 421, '2015-04-20', 2),
(108, 666, '15', 188, 146, 3, 66679085, 422, '2015-04-20', 3),
(109, 666, '15', 188, 146, 3, 66698796, 413, '2015-04-23', 1),
(111, 666, '15', 188, 146, 3, 66698796, 414, '2015-04-23', 1),
(112, 666, '15', 188, 146, 3, 66698796, 415, '2015-04-23', 1),
(113, 666, '15', 188, 146, 3, 66698796, 416, '2015-04-23', 1),
(114, 666, '15', 188, 146, 3, 66698796, 417, '2015-04-23', 1),
(115, 666, '15', 188, 146, 3, 66698796, 418, '2015-04-23', 2),
(116, 666, '15', 188, 146, 3, 66698796, 419, '2015-04-23', 2),
(117, 666, '15', 188, 146, 3, 66698796, 420, '2015-04-23', 2),
(120, 666, '15', 188, 146, 3, 66698796, 435, '2015-04-23', 3),
(121, 666, '15', 188, 146, 3, 66698796, 422, '2015-04-23', 1),
(122, 666, '15', 188, 146, 3, 66698796, 421, '2015-04-23', 1),
(123, 666, '15', 188, 146, 3, 66664681, 413, '2015-06-02', 1),
(124, 666, '15', 188, 146, 3, 66664681, 414, '2015-06-02', 2),
(125, 666, '15', 188, 146, 3, 66664681, 415, '2015-06-02', 2),
(126, 666, '15', 188, 146, 3, 66664681, 416, '2015-06-02', 1),
(127, 666, '15', 188, 146, 3, 66664681, 417, '2015-06-02', 1),
(128, 666, '15', 188, 146, 3, 66664681, 418, '2015-06-02', 1),
(129, 666, '15', 188, 146, 3, 66664681, 419, '2015-06-02', 1),
(130, 666, '15', 188, 146, 3, 66664681, 420, '2015-06-02', 3),
(131, 666, '15', 188, 146, 3, 66664681, 421, '2015-06-02', 3),
(132, 666, '15', 188, 146, 3, 66664681, 422, '2015-06-02', 1),
(133, 666, '15', 188, 146, 3, 66664681, 435, '2015-06-02', 2),
(134, 666, '15', 188, 147, 3, 66677011, 423, '2015-06-04', 1),
(135, 666, '15', 188, 147, 3, 66677011, 424, '2015-06-04', 1),
(136, 666, '15', 188, 147, 3, 66677011, 425, '2015-06-04', 1),
(137, 666, '15', 188, 147, 3, 66677011, 426, '2015-06-04', 1),
(138, 666, '15', 188, 147, 3, 66677011, 427, '2015-06-04', 1),
(139, 666, '15', 188, 147, 3, 66677011, 428, '2015-06-04', 1),
(140, 666, '15', 188, 147, 3, 66677011, 429, '2015-06-04', 1),
(141, 666, '15', 188, 147, 3, 66677011, 430, '2015-06-04', 2),
(142, 666, '15', 188, 147, 3, 66677011, 431, '2015-06-04', 2),
(143, 666, '15', 188, 147, 3, 66677011, 432, '2015-06-04', 2),
(144, 666, '15', 188, 147, 3, 66677011, 433, '2015-06-04', 3),
(145, 105949, '67', 195, 155, 47, 2147483647, 437, '2015-06-30', 1),
(146, 105949, '67', 195, 155, 47, 2147483647, 438, '2015-06-30', 1),
(147, 105949, '67', 195, 155, 47, 2147483647, 439, '2015-06-30', 1),
(148, 105949, '67', 195, 155, 47, 2147483647, 440, '2015-06-30', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

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
(42, 'Kadamtoli', 1, 1, 1, '2014-05-24', 1),
(44, 'Lakhshan', 1, 3, 26, '2015-01-25', 1),
(45, 'Comilla Sadar Dokhin', 1, 3, 26, '2015-06-30', 1);

-- --------------------------------------------------------

--
-- Structure for view `ams_student_list`
--
DROP TABLE IF EXISTS `ams_student_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`natoparabdm`@`localhost` SQL SECURITY DEFINER VIEW `ams_student_list` AS select `ams_admission`.`id` AS `id`,`ams_admission`.`name` AS `name`,`ams_admission`.`admition` AS `admition`,`ams_admission`.`school_id` AS `school_id`,(select `ams_class`.`name` from `ams_class` where (`ams_admission`.`class_id` = `ams_class`.`id`)) AS `class`,`ams_admission`.`class_id` AS `class_id`,`ams_admission`.`roll` AS `roll`,(select `ams_section`.`name` from `ams_section` where (`ams_admission`.`section_id` = `ams_section`.`id`)) AS `section`,`ams_admission`.`section_id` AS `section_id`,(select `ams_session`.`name` from `ams_session` where (`ams_admission`.`session_id` = `ams_session`.`id`)) AS `session`,`ams_admission`.`session_id` AS `session_id`,(select `ams_shift`.`name` from `ams_shift` where (`ams_admission`.`shift_id` = `ams_shift`.`id`)) AS `shift`,`ams_admission`.`shift_id` AS `shift_id`,(select `ams_student_group`.`name` from `ams_student_group` where (`ams_admission`.`group_id` = `ams_student_group`.`id`)) AS `group`,`ams_admission`.`group_id` AS `group_id`,`ams_admission`.`dob` AS `dob`,`ams_admission`.`blood_group` AS `blood_group`,`ams_admission`.`gender` AS `gender`,`ams_admission`.`nationality` AS `nationality`,`ams_admission`.`religion` AS `religion`,`ams_admission`.`language` AS `language`,`ams_admission`.`mother_name` AS `mother_name`,`ams_admission`.`father_name` AS `father_name`,`ams_admission`.`guardian_name` AS `guardian_name`,`ams_admission`.`occupation` AS `occupation`,`ams_admission`.`income` AS `income`,`ams_admission`.`number` AS `number`,`ams_admission`.`serial_number` AS `serial_number`,`ams_admission`.`present_address` AS `present_address`,`ams_admission`.`permanent_address` AS `permanent_address`,`ams_admission`.`state` AS `state`,`ams_admission`.`city` AS `city`,`ams_admission`.`zip_code` AS `zip_code`,`ams_admission`.`countryr` AS `countryr`,`ams_admission`.`phone_number` AS `phone_number`,`ams_admission`.`email` AS `email`,`ams_admission`.`photo` AS `photo`,`ams_admission`.`user_id` AS `user_id`,`ams_admission`.`date` AS `date`,`ams_admission`.`status` AS `status` from `ams_admission`;

-- --------------------------------------------------------

--
-- Structure for view `ams_student_login`
--
DROP TABLE IF EXISTS `ams_student_login`;

CREATE ALGORITHM=UNDEFINED DEFINER=`natoparabdm`@`localhost` SQL SECURITY DEFINER VIEW `ams_student_login` AS select `ams_admission`.`id` AS `id`,`ams_admission`.`name` AS `name`,`ams_admission`.`admition` AS `admition`,`ams_admission`.`school_id` AS `school_id`,`ams_admission`.`class_id` AS `class_id`,`ams_admission`.`roll` AS `roll`,`ams_admission`.`section_id` AS `section_id`,`ams_admission`.`session_id` AS `session_id`,`ams_admission`.`shift_id` AS `shift_id`,`ams_admission`.`group_id` AS `group_id`,`ams_admission`.`dob` AS `dob`,`ams_admission`.`blood_group` AS `blood_group`,`ams_admission`.`gender` AS `gender`,`ams_admission`.`nationality` AS `nationality`,`ams_admission`.`religion` AS `religion`,`ams_admission`.`language` AS `language`,`ams_admission`.`mother_name` AS `mother_name`,`ams_admission`.`father_name` AS `father_name`,`ams_admission`.`guardian_name` AS `guardian_name`,`ams_admission`.`occupation` AS `occupation`,`ams_admission`.`income` AS `income`,`ams_admission`.`number` AS `number`,`ams_admission`.`serial_number` AS `serial_number`,`ams_admission`.`present_address` AS `present_address`,`ams_admission`.`permanent_address` AS `permanent_address`,`ams_admission`.`state` AS `state`,`ams_admission`.`city` AS `city`,`ams_admission`.`zip_code` AS `zip_code`,`ams_admission`.`countryr` AS `countryr`,`ams_admission`.`phone_number` AS `phone_number`,`ams_admission`.`email` AS `email`,`ams_admission`.`photo` AS `photo`,`ams_admission`.`admition` AS `password`,`ams_admission`.`date` AS `date`,`ams_admission`.`status` AS `status` from `ams_admission`;

-- --------------------------------------------------------

--
-- Structure for view `fees_paid_ledger_amount_list`
--
DROP TABLE IF EXISTS `fees_paid_ledger_amount_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`natoparabdm`@`localhost` SQL SECURITY DEFINER VIEW `fees_paid_ledger_amount_list` AS select `fees_paid_ledger_amount`.`id` AS `id`,`fees_paid_ledger_amount`.`student_id` AS `student_id`,`fees_paid_ledger_amount`.`ledger_id` AS `ledger_id`,`fees_paid_ledger_amount`.`session_id` AS `session_id`,`fees_paid_ledger_amount`.`class_id` AS `class_id`,`fees_paid_ledger_amount`.`group_id` AS `group_id`,`fees_paid_ledger_amount`.`branch_id` AS `branch_id`,`fees_paid_ledger_amount`.`amount` AS `amount`,`fees_paid_ledger_amount`.`date` AS `date`,`fees_paid_ledger_amount`.`status` AS `status` from `fees_paid_ledger_amount`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
