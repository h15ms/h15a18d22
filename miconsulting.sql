-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2017 at 02:11 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `miconsulting`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(22) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` datetime NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `alt_mobile` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `locality_id` bigint(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` int(100) NOT NULL,
  `iso2` varchar(10) NOT NULL,
  `iso3` varchar(10) NOT NULL,
  `state_id` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL COMMENT '1 - active , 0 - block',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `consult_qa`
--

CREATE TABLE IF NOT EXISTS `consult_qa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `iso2` varchar(10) NOT NULL,
  `iso3` varchar(10) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '1- Active   0 - block',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `dob` datetime NOT NULL,
  `fees` int(10) NOT NULL,
  `time_table` int(200) NOT NULL,
  `education` int(200) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `experience` tinyint(4) NOT NULL,
  `service` varchar(200) NOT NULL,
  `registration_number` varchar(25) NOT NULL,
  `registration_organisation` varchar(100) NOT NULL,
  `awards` varchar(200) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `others` varchar(200) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(22) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `alt_mobile` varchar(15) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '1 - Active , 0 - Block',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fees_collection`
--

CREATE TABLE IF NOT EXISTS `fees_collection` (
  `id` bigint(22) NOT NULL,
  `amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `token` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '1- Active   0 - block',
  PRIMARY KEY (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `locality`
--

CREATE TABLE IF NOT EXISTS `locality` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `city_id` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`id`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mi_admins`
--

CREATE TABLE IF NOT EXISTS `mi_admins` (
  `id` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` varchar(155) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `street` varchar(155) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `city` varchar(155) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mobile` varchar(55) NOT NULL,
  `date` varchar(22) DEFAULT '0',
  `userlevel` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mi_admins`
--

INSERT INTO `mi_admins` (`id`, `password`, `position`, `firstname`, `lastname`, `street`, `zip`, `city`, `email`, `telephone`, `mobile`, `date`, `userlevel`) VALUES
(10006, '123456', 'CEO', 'Mustafa', 'Ismail', '', '', '', 'm.ismail@misoft.tech', '', '', '28.06.2015', '1'),
(123, '123', 'Admin', 'Ankit', 'Vikalp', 'dfgdfg', 'dfgdfg', 'dfgdfg', 'ankit.vikalp18@gmail.com', '+91 78234782374', '+91 89234689724', '28.10.2016', '0'),
(1231, '123', 'Admin', 'Harpreet', 'Kaur', 'dfgdfg', 'dfgdfg', 'dfgdfg', 'ankit.vikalp18@gmail.com', '+91 78234782374', '+91 89234689724', '28.10.2016', '0');

-- --------------------------------------------------------

--
-- Table structure for table `mi_apply`
--

CREATE TABLE IF NOT EXISTS `mi_apply` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `app_id` varchar(55) NOT NULL,
  `embassy_id` varchar(255) NOT NULL,
  `visa_id` varchar(255) NOT NULL,
  `applying_country` varchar(155) NOT NULL,
  `indian_mission` varchar(155) NOT NULL,
  `nationality` varchar(155) NOT NULL,
  `date_of_birth` varchar(155) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_arrival` varchar(55) NOT NULL,
  `visa_type` varchar(155) NOT NULL,
  `surname` varchar(155) NOT NULL,
  `given_name` varchar(155) NOT NULL,
  `changed_name` varchar(12) NOT NULL,
  `previous_surname` varchar(155) NOT NULL,
  `previous_name` varchar(155) NOT NULL,
  `sex` varchar(55) NOT NULL,
  `city_of_birth` varchar(155) NOT NULL,
  `country_of_birth` varchar(155) NOT NULL,
  `national_id` varchar(55) NOT NULL,
  `religion` varchar(55) NOT NULL,
  `other_religion` varchar(55) NOT NULL,
  `visible_identification_marks` varchar(155) NOT NULL,
  `educational_qualification` varchar(55) NOT NULL,
  `acquire_nationality` varchar(55) NOT NULL,
  `previous_nationality` varchar(155) NOT NULL,
  `passport_no` varchar(55) NOT NULL,
  `place_of_issue` varchar(155) NOT NULL,
  `date_of_issue` varchar(55) NOT NULL,
  `date_of_expiry` varchar(55) NOT NULL,
  `other_valid_passport` varchar(15) NOT NULL,
  `other_country_of_issue` varchar(155) NOT NULL,
  `other_passport_no` varchar(55) NOT NULL,
  `other_date_of_issue` varchar(55) NOT NULL,
  `other_place_of_issue` varchar(155) NOT NULL,
  `other_nationality_mentioned` varchar(155) NOT NULL,
  `street_present` varchar(155) NOT NULL,
  `city_present` varchar(155) NOT NULL,
  `state_present` varchar(155) NOT NULL,
  `country_present` varchar(155) NOT NULL,
  `zip_code_present` varchar(55) NOT NULL,
  `phone_no` varchar(55) NOT NULL,
  `mobile_no` varchar(55) NOT NULL,
  `email_present` varchar(255) NOT NULL,
  `same_address_permanent` varchar(15) NOT NULL,
  `street_permanent` varchar(155) NOT NULL,
  `city_permanent` varchar(155) NOT NULL,
  `state_permanent` varchar(155) NOT NULL,
  `name_father` varchar(155) NOT NULL,
  `nationality_father` varchar(155) NOT NULL,
  `previous_nationality_father` varchar(155) NOT NULL,
  `place_of_birth_father` varchar(155) NOT NULL,
  `country_of_birth_father` varchar(155) NOT NULL,
  `name_mother` varchar(155) NOT NULL,
  `nationality_mother` varchar(155) NOT NULL,
  `previous_nationality_mother` varchar(155) NOT NULL,
  `place_of_birth_mother` varchar(155) NOT NULL,
  `country_of_birth_mother` varchar(155) NOT NULL,
  `applicant_marital_status` varchar(15) NOT NULL,
  `name_married` varchar(155) NOT NULL,
  `nationality_married` varchar(155) NOT NULL,
  `previous_nationality_married` varchar(155) NOT NULL,
  `place_of_birth_married` varchar(155) NOT NULL,
  `country_of_birth_married` varchar(155) NOT NULL,
  `grandparents_pakistan` varchar(15) NOT NULL,
  `grandparents_pakistan_details` varchar(255) NOT NULL,
  `present_occupation` varchar(155) NOT NULL,
  `occupation_other` varchar(155) NOT NULL,
  `business_name` varchar(155) NOT NULL,
  `designation` varchar(155) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(155) NOT NULL,
  `past_occupation` varchar(155) NOT NULL,
  `military` varchar(15) NOT NULL,
  `military_organisation` varchar(155) NOT NULL,
  `military_designation` varchar(155) NOT NULL,
  `military_rank` varchar(155) NOT NULL,
  `military_place_of_posting` varchar(155) NOT NULL,
  `business_visa_result` varchar(255) NOT NULL,
  `bv_company_name` varchar(155) NOT NULL,
  `bv_address` varchar(255) NOT NULL,
  `bv_phone` varchar(155) NOT NULL,
  `bv_email` varchar(155) NOT NULL,
  `medical_visa_result` varchar(255) NOT NULL,
  `mv_hr_name` varchar(155) NOT NULL,
  `mv_hr_address` varchar(155) NOT NULL,
  `mv_hr_doctor_name` varchar(155) NOT NULL,
  `mv_hr_phone` varchar(155) NOT NULL,
  `mv_hr_email` varchar(155) NOT NULL,
  `mv_hi_name` varchar(155) NOT NULL,
  `mv_hi_address` varchar(155) NOT NULL,
  `mv_hi_doctor_name` varchar(155) NOT NULL,
  `mv_hi_phone` varchar(155) NOT NULL,
  `mv_hi_email` varchar(155) NOT NULL,
  `mv_hi_illness` varchar(255) NOT NULL,
  `tv_places_visited` varchar(255) NOT NULL,
  `v_duration_of_visa` varchar(55) NOT NULL,
  `v_no_of_entries` varchar(55) NOT NULL,
  `v_purpose_of_visit` varchar(155) NOT NULL,
  `v_expected_date_journey` varchar(55) NOT NULL,
  `v_port_arrival` varchar(155) NOT NULL,
  `v_port_exit` varchar(155) NOT NULL,
  `visited_india_before` varchar(15) NOT NULL,
  `visited_address_1` varchar(155) NOT NULL,
  `visited_address_2` varchar(155) NOT NULL,
  `visited_address_3` varchar(155) NOT NULL,
  `cities_previously_visited_india` varchar(255) NOT NULL,
  `last_indian_visa_no` varchar(155) NOT NULL,
  `last_type_visa` varchar(55) NOT NULL,
  `last_place_of_issue` varchar(55) NOT NULL,
  `last_date_of_issue` varchar(15) NOT NULL,
  `last_visit_previously_refused` varchar(15) NOT NULL,
  `mention_control_no` varchar(255) NOT NULL,
  `refused_date` varchar(100) NOT NULL,
  `countries_visited_last_10_years` varchar(255) NOT NULL,
  `visited_saarc_countries` varchar(15) NOT NULL,
  `saarc_country_name_1` varchar(55) NOT NULL,
  `saarc_country_year_1` varchar(15) NOT NULL,
  `saarc_country_no_visits_1` varchar(15) NOT NULL,
  `saarc_country_name_2` varchar(55) NOT NULL,
  `saarc_country_year_2` varchar(15) NOT NULL,
  `saarc_country_no_visits_2` varchar(15) NOT NULL,
  `saarc_country_name_3` varchar(55) NOT NULL,
  `saarc_country_year_3` varchar(15) NOT NULL,
  `saarc_country_no_visits_3` varchar(15) NOT NULL,
  `saarc_country_name_4` varchar(155) NOT NULL,
  `saarc_country_year_4` varchar(15) NOT NULL,
  `saarc_country_no_visits_4` varchar(15) NOT NULL,
  `saarc_country_name_5` varchar(155) NOT NULL,
  `saarc_country_year_5` varchar(15) NOT NULL,
  `saarc_country_no_visits_5` varchar(15) NOT NULL,
  `saarc_country_name_6` varchar(155) NOT NULL,
  `saarc_country_year_6` varchar(15) NOT NULL,
  `saarc_country_no_visits_6` varchar(15) NOT NULL,
  `saarc_country_name_7` varchar(155) NOT NULL,
  `saarc_country_year_7` varchar(15) NOT NULL,
  `saarc_country_no_visits_7` varchar(15) NOT NULL,
  `saarc_country_name_8` varchar(155) NOT NULL,
  `saarc_country_year_8` varchar(15) NOT NULL,
  `saarc_country_no_visits_8` varchar(15) NOT NULL,
  `reference_name_india` varchar(155) NOT NULL,
  `reference_address_india_1` varchar(155) NOT NULL,
  `reference_address_india_2` varchar(155) NOT NULL,
  `reference_phone_india` varchar(55) NOT NULL,
  `reference_name_country` varchar(155) NOT NULL,
  `reference_address_country_1` varchar(155) NOT NULL,
  `reference_address_country_2` varchar(155) NOT NULL,
  `reference_phone_country` varchar(55) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0' COMMENT '0 = New, 1 = In progress, 2 = Approved, 3 = Rejected, 4 = Cloesd',
  `user_id` varchar(55) NOT NULL,
  `apply_date` varchar(55) NOT NULL,
  `notice` text NOT NULL,
  `app_update` varchar(55) NOT NULL DEFAULT '0',
  `emp_working` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10057 ;

--
-- Dumping data for table `mi_apply`
--

INSERT INTO `mi_apply` (`id`, `app_id`, `embassy_id`, `visa_id`, `applying_country`, `indian_mission`, `nationality`, `date_of_birth`, `email`, `date_of_arrival`, `visa_type`, `surname`, `given_name`, `changed_name`, `previous_surname`, `previous_name`, `sex`, `city_of_birth`, `country_of_birth`, `national_id`, `religion`, `other_religion`, `visible_identification_marks`, `educational_qualification`, `acquire_nationality`, `previous_nationality`, `passport_no`, `place_of_issue`, `date_of_issue`, `date_of_expiry`, `other_valid_passport`, `other_country_of_issue`, `other_passport_no`, `other_date_of_issue`, `other_place_of_issue`, `other_nationality_mentioned`, `street_present`, `city_present`, `state_present`, `country_present`, `zip_code_present`, `phone_no`, `mobile_no`, `email_present`, `same_address_permanent`, `street_permanent`, `city_permanent`, `state_permanent`, `name_father`, `nationality_father`, `previous_nationality_father`, `place_of_birth_father`, `country_of_birth_father`, `name_mother`, `nationality_mother`, `previous_nationality_mother`, `place_of_birth_mother`, `country_of_birth_mother`, `applicant_marital_status`, `name_married`, `nationality_married`, `previous_nationality_married`, `place_of_birth_married`, `country_of_birth_married`, `grandparents_pakistan`, `grandparents_pakistan_details`, `present_occupation`, `occupation_other`, `business_name`, `designation`, `address`, `phone`, `past_occupation`, `military`, `military_organisation`, `military_designation`, `military_rank`, `military_place_of_posting`, `business_visa_result`, `bv_company_name`, `bv_address`, `bv_phone`, `bv_email`, `medical_visa_result`, `mv_hr_name`, `mv_hr_address`, `mv_hr_doctor_name`, `mv_hr_phone`, `mv_hr_email`, `mv_hi_name`, `mv_hi_address`, `mv_hi_doctor_name`, `mv_hi_phone`, `mv_hi_email`, `mv_hi_illness`, `tv_places_visited`, `v_duration_of_visa`, `v_no_of_entries`, `v_purpose_of_visit`, `v_expected_date_journey`, `v_port_arrival`, `v_port_exit`, `visited_india_before`, `visited_address_1`, `visited_address_2`, `visited_address_3`, `cities_previously_visited_india`, `last_indian_visa_no`, `last_type_visa`, `last_place_of_issue`, `last_date_of_issue`, `last_visit_previously_refused`, `mention_control_no`, `refused_date`, `countries_visited_last_10_years`, `visited_saarc_countries`, `saarc_country_name_1`, `saarc_country_year_1`, `saarc_country_no_visits_1`, `saarc_country_name_2`, `saarc_country_year_2`, `saarc_country_no_visits_2`, `saarc_country_name_3`, `saarc_country_year_3`, `saarc_country_no_visits_3`, `saarc_country_name_4`, `saarc_country_year_4`, `saarc_country_no_visits_4`, `saarc_country_name_5`, `saarc_country_year_5`, `saarc_country_no_visits_5`, `saarc_country_name_6`, `saarc_country_year_6`, `saarc_country_no_visits_6`, `saarc_country_name_7`, `saarc_country_year_7`, `saarc_country_no_visits_7`, `saarc_country_name_8`, `saarc_country_year_8`, `saarc_country_no_visits_8`, `reference_name_india`, `reference_address_india_1`, `reference_address_india_2`, `reference_phone_india`, `reference_name_country`, `reference_address_country_1`, `reference_address_country_2`, `reference_phone_country`, `picture`, `status`, `user_id`, `apply_date`, `notice`, `app_update`, `emp_working`) VALUES
(10000, '532524GHE123KL13', '1234567890', '', 'AFGHANISTAN', 'AFGK - AFGANISTAN-KABUL', 'AFGHANISTAN', '05/10/1984', 'email@mailinator.com', '30/10/2016', 'BUSINESS VISA', 'KHALID', 'TAMER KHALID', 'No', '', '', 'Male', 'KABUL', 'AFGHANISTAN', '123123123', 'ISLAM', '', 'NONE', 'GRADUATE', 'By Birth', '', 'CX123123123', 'KABUL', '03/06/2014', '02/06/2024', 'No', '', '', '', '', '', '123 SUBWAY RD', 'KABUL', 'KABUL', 'AFGHANISTAN', '1234', '+93 1234 12345', '+93 1234 12345', '', 'Yes', '123 SUBWAY RD', 'KABUL', 'KABUL', 'WALID KHALID', 'AFGHANISTAN', '', 'KABUL', 'AFGHANISTAN', 'MARIA KHALID', 'AFGHANISTAN', '', 'KABUL', 'AFGHANISTAN', 'Single', '', '', '', '', '', 'No', '', 'BUSINESS PERSON', '', 'POWER OF KABUL', '', 'SALANG RD, KABUL, AFGHANISTAN', '+93 1234 12335', '', 'No', '', '', '', '', '', 'POWER OF KABUL', 'SALANG RD, KABUL, AFGHANISTAN', '+93 1234 12335', 'info@kabulpower.com', '', '', '', '', '', '', '', '', '', '', '', '', '', 'NEW DEHLI', 'Multiple', 'Business', '20/10/2016', 'NEW DEHLI', 'NEW DEHLI', 'Yes', '652, Sector 42, Gurgaon', '', '', 'NEW DEHLI', '21312312', 'TOURIST VISA', 'USA', '14/03/2016', 'No', '', '', 'USA, Turkey', 'Yes', 'PAKISTAN', '2012', '1', 'SRI LANKA', '2013', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ISLAM MURDABA', 'SMALL ROOM 3, GURGAON, INDIA', '', '+ 91 1234 12345', 'HAMDULA KHALID', 'FREE RD, KABUL, AFGHANISTAN', '', '+ 93 1234 12345', 'h3hsi3j93ns13jd9.png', '1', '10001', '04.10.2016 3:46 PM', 'Working\r\n', '1475829552', 'Ankit Vikalp'),
(10055, '9MFWTEV01QRCPU3K', '', '', 'AFGHANISTAN', 'AFGH - AFGANISTAN-HERAT', 'Afghanistan', '', '', '', 'BUSINESS VISA', '', 'Ankit Vikalp', '0', '', '', 'Male', '', 'Afghanistan', '', 'Bahai', '', '', 'BELOW MATRICULATION', '', 'Afghanistan', '', '', '', '', 'no', 'Afghanistan', '', '', '', 'Afghanistan', '', '', '', 'Afghanistan', '', '', '', '', 'No', '', '', '', '', 'Afghanistan', 'Afghanistan', '', 'Afghanistan', '', 'Afghanistan', 'Afghanistan', '', 'Afghanistan', 'Single', '', 'Afghanistan', 'Afghanistan', '', 'Afghanistan', 'no', '', 'Air force', '', '', '', '', '', 'Air force', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Visa Type', '', '', '0', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', 'Aeon.jpg', '0', '1', '1484898482', '', '0', ''),
(10056, 'AFGS12FGLYB0PU', '', '', 'AFGHANISTAN', 'AFGH - AFGANISTAN-HERAT', 'American Samoa', '01/17/2017', 'ankit.vikalp@harkemedia.com', '01/10/2017', 'BUSINESS VISA', '', 'Deepak Porwal', 'Yes', 'DFSDFSA', 'dfgdfsg', 'Male', 'Delhi', 'Albania', '', 'Hindu', '', 'dfsgdfsg', 'NA BEING MINOR', '', 'Afghanistan', '54et654etdgd', 'sadf', '01/17/2017', '01/09/2017', 'no', 'Andorra', 'dfgredgre', '01/10/2017', 'dfcxgredgred', 'Anguilla', 'Delhi', 'sadf', 'Delhi', 'Andorra', 'Delhi', 'dfsa', 'dfsa', 'dfsadfs@dfg.dsg', 'No', 'Delhi', 'sadf', 'Delhi', 'sdfghfsdh', 'Andorra', 'Andorra', 'fsghfsg', 'Algeria', 'dfsdfg', 'Andorra', 'Andorra', 'dfsgdfg', 'Bahrain', 'Single', 'zxczxc', 'Andorra', 'Andorra', 'zcxzxc', 'Albania', 'no', 'dsf', 'Air force', '', 'zxczx', 'czcx', 'zxcxzc', 'c', 'Missionary', 'No', 'sghfhfg@fjgh.dfg', 'dsfgdsf@sdfgd.dfg', 'sdaf@vgdfsg.dsg', 'sdaf@vgdfsg.dsg', '', 'ghfsgh', 'sdfa', 'fsgh', 'dfghfdghfgh@dfdfgdf.dfg', '', '', '', '', '', 'dfghdfgh@gdfsdf.dfs', '', '', '', '', 'dfsgdfgg@xfg.fghgf', '', '', 'tryujty', '', '', '', '', '', '', 'Delhi', '', '', 'Delhi', '', 'Visa Type', '', '', '0', '', '', '', 'Yes', 'BHUTAN', '2015', 'Andorra', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', 'profileimage.jpg', '0', '1', '1484908088', '', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `mi_customer`
--

CREATE TABLE IF NOT EXISTS `mi_customer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(155) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `street` varchar(155) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `city` varchar(155) NOT NULL,
  `state` varchar(65) NOT NULL,
  `country` varchar(55) NOT NULL DEFAULT 'United States',
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `regtime` varchar(55) NOT NULL,
  `avatar` varchar(55) NOT NULL DEFAULT 'default_avatar.png',
  `email_code` varchar(155) NOT NULL,
  `email_confirm` varchar(1) DEFAULT '0',
  `user_type` tinyint(2) NOT NULL DEFAULT '3' COMMENT '1=admin, 2=agent / dealer, 3= customer / patient',
  `registration_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'agent registration approved by admin crm status update as 1',
  `status` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mi_customer`
--

INSERT INTO `mi_customer` (`id`, `username`, `password`, `firstname`, `lastname`, `street`, `zip`, `city`, `state`, `country`, `email`, `phone`, `regtime`, `avatar`, `email_code`, `email_confirm`, `user_type`, `registration_status`, `status`) VALUES
(1, '', '123456', 'Ankit', 'Vikalkp', 'sdfa', 'sdaf', 'sadf', 'sadf', 'United States', 'info@miconsulting.in', '123456789', '1484633646', 'localhost.sql', '', '0', 3, 0, '0'),
(2, '', '123456', 'dkjfghs', 'ILKHDCGB', '', '', 'patna', '', 'United States', 'info@gdfhjk.in', '567567', '1484634327', '', '', '0', 2, 0, '0'),
(3, '', '123456', 'kjhsadfk', 'KJBGHDFK', '', 'DFGH', 'FGH', 'DFG', 'United StatesF', 'info@DKFGL.in', '5675675647', '1484635314', '', '', '0', 3, 0, '0'),
(4, '', '123456', 'Deepak', 'Porwal', 'sector-29', '122001', 'Gurgaon', 'Haryana', 'India', 'deepak@misoft.tech', '123456789', '1484916273', 'profileimage.jpg', '', '0', 3, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `mi_doctors`
--

CREATE TABLE IF NOT EXISTS `mi_doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `registration_no` varchar(150) NOT NULL,
  `clinic_hospital` varchar(150) NOT NULL,
  `practiceAs` varchar(150) NOT NULL,
  `managment` varchar(100) NOT NULL,
  `member_of` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `available_time` varchar(50) NOT NULL,
  `available_day` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `consultancy_fee` varchar(50) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `ref_hospital` int(20) NOT NULL COMMENT 'if doctor link with our hospital database',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mi_hospital_detail`
--

CREATE TABLE IF NOT EXISTS `mi_hospital_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_id` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `distance_from_airport` varchar(150) NOT NULL,
  `emergency_services` varchar(150) NOT NULL,
  `hospital_type` varchar(50) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mi_patient_appointment`
--

CREATE TABLE IF NOT EXISTS `mi_patient_appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL COMMENT 'Regular/ urgent/ follow up',
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `appointment_date` varchar(30) NOT NULL,
  `reports` varchar(200) NOT NULL COMMENT 'patient medical reports ',
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `reason_for_reject` varchar(300) NOT NULL COMMENT 'if doctor not approve appointment date',
  `rejected_by` varchar(100) NOT NULL COMMENT 'patient / doctor',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=apply,1=fixed,2=rejected,3=closed',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `dob` datetime NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `alt_mobile` varchar(15) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passport_number` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '1 - Active , 0 - Block',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(25) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` enum('PENDING','DONE','INPROCESS') NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL,
  `iso3` varchar(10) NOT NULL,
  `iso2` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tour_package`
--

CREATE TABLE IF NOT EXISTS `tour_package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(100) NOT NULL,
  `amt` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visa`
--

CREATE TABLE IF NOT EXISTS `visa` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
