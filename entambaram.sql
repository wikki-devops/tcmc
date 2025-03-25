-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2025 at 07:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entambaram`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration_officials`
--

CREATE TABLE `administration_officials` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administration_officials`
--

INSERT INTO `administration_officials` (`id`, `name`, `designation`, `phone`, `email`) VALUES
(1, 'Thiru.S.Sivarasu IAS', 'Director of Municipal Administration', '044-29864457', 'cma.tncma@nic.in'),
(2, 'Thiru.Lalitaditya Neelam IAS', 'Joint Commissioner of Municipal Administration', '044-29864443', 'jcma.tncma@nic.in'),
(3, 'Dr.C.Vijayakumar,Phd.,', 'Additional Director of Municipal Administration', '044-29864442', 'admam.tncma@gmail.com'),
(4, 'Thiru.S.Thirumavalavan', 'Chief Engineer', '044-29864580', 'ce.tncma@nic.in'),
(5, 'Thiru. K.R.Balasubramaniyan', 'Financial Advisor', '044-29864452', 'fa.tncma@nic.in'),
(6, 'Tmt.P.Saratha', 'Joint Commissioner (Admin)', '044-29864447', 'jcadmin.tncma@nic.in'),
(7, 'Thiru.R.Lakshmanan,B.E', 'Joint Director (Admin)', '044-29864446', 'jda.cma1@gmail.com'),
(8, 'Tmt.S.Parijatham B.Pharm,MBA', 'Joint Director (Corporation)', '044-29864439', 'jdc.tncma@nic.in'),
(9, 'Thiru.K.Achaiah,MSc,Mphil.,', 'Joint Director [Monitoring]', '', 'jdm.cma@tn.gov.in'),
(10, 'Tmt.Umamaheshwari, MSc, Mphil', 'Joint Director (Schemes)', '044-29864451', 'jds.cma@tn.gov.in');

-- --------------------------------------------------------

--
-- Table structure for table `administrativereport`
--

CREATE TABLE `administrativereport` (
  `id` int(11) NOT NULL,
  `year` text NOT NULL,
  `administrative_report_document` text NOT NULL,
  `updated_on` date NOT NULL,
  `published_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrativereport`
--

INSERT INTO `administrativereport` (`id`, `year`, `administrative_report_document`, `updated_on`, `published_on`) VALUES
(1, '2021-2022\r\n', '../assets/downloads/administrative-reports/2021-2022-Administration-Report.pdf', '2022-04-05', '2022-04-05'),
(2, '2022-2023', '../assets/downloads/administrative-reports/Administrative-Report-2022-23_0001.pdf', '2024-06-30', '2024-06-30'),
(3, '2024-2025', '../assets/downloads/administrative-reports/administrative-Report-2023-24_0001.pdf', '2024-07-31', '2024-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `amrut_reforms`
--

CREATE TABLE `amrut_reforms` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `reforms` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `amrut_reforms`
--

INSERT INTO `amrut_reforms` (`id`, `name`, `reforms`, `link`) VALUES
(1, 'Online Notification of Recruitment rules for all Municipal cadres', 'REFORM -I', NULL),
(2, 'Online upto Date Service Records', 'REFORM -I', '../assets/downloads/amrut-reforms/attendence.pdf'),
(3, 'Staff details and Seniority List', 'REFORM -I', '../assets/downloads/amrut-reforms/staff.pdf'),
(4, 'Online Bio Metric Attendance System', 'REFORM -I', '../assets/downloads/amrut-reforms/attendence.pdf'),
(5, 'Online Payment of Salary and Wages', 'REFORM -I', '../assets/downloads/amrut-reforms/salary-1.pdf'),
(6, 'Online Employees Grievance Rederessal System', 'REFORM -I', '../assets/downloads/amrut-reforms/empgrivance.pdf'),
(7, 'Suo-motu disclosure under RTI Act', 'REFORM -I', '../assets/downloads/amrut-reforms/rti-1.pdf'),
(8, 'Online  issue of Notice inviting   Tender and Providing tender documents', 'REFORM -II', '../assets/downloads/amrut-reforms/tender.pdf'),
(9, 'Online submission of tender including online payment of EMD', 'REFORM -II', '../assets/downloads/amrut-reforms/emd.pdf'),
(10, 'Online Payments to contractor', 'REFORM -II', '../assets/downloads/amrut-reforms/payment.pdf'),
(11, 'Geo tagging of Assets created', 'REFORM -II', '../assets/downloads/amrut-reforms/geo-tagg.pdf'),
(12, 'Annual Financial Statement', 'REFORM -IV', '../assets/downloads/amrut-reforms/salary-1.pdf'),
(13, 'Development / construction and value addition in a park with children’s facilities', 'REFORM -V', '../assets/downloads/amrut-reforms/parks2-1.pdf'),
(14, 'City Sanitation Plan', 'REFORM -VI', '../assets/downloads/amrut-reforms/city-sanitation-plan-1.pdf'),
(15, 'City Sanitation Plan DPR', 'REFORM -VI', '../assets/downloads/amrut-reforms/dpr.pdf'),
(16, 'Elimination of Open defecation', 'REFORM -VI', '../assets/downloads/amrut-reforms/ods-1.pdf'),
(17, '% of wards with 100% door to door waste collection', 'REFORM -VI', '../assets/downloads/amrut-reforms/waste-collection-1.pdf'),
(18, '% of complaints resolution on  Swachh App', 'REFORM -VI', '../assets/downloads/amrut-reforms/swachhcity-2.pdf'),
(19, 'Percentage of wards practicing 100% source segregation', 'REFORM -VI', '../assets/downloads/amrut-reforms/source-segregation-1.pdf'),
(20, '% of waste being processed scientifically', 'REFORM -VI', '../assets/downloads/amrut-reforms/route-map-1.pdf'),
(21, 'Status of Solid Waste Management', 'REFORM -VI', '../assets/downloads/amrut-reforms/swm-1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `icons` varchar(255) NOT NULL,
  `tax_name` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `image`, `icons`, `tax_name`, `link`) VALUES
(1, 'assets/images/services/1.png', '16.png', 'Property Tax', 'https://tnurbanepay.tn.gov.in/PT_CPPaymentDetails.aspx#'),
(2, 'assets/images/services/2.png', '17.png', 'Water Charges', 'https://tnurbanepay.tn.gov.in/WS_PaymentDetails.aspx#'),
(3, 'assets/images/services/3.png', '18.png', 'Under Ground Drainage', 'https://tnurbanepay.tn.gov.in/UGD_PaymentDetails.aspx#'),
(4, 'assets/images/services/4.png', '19.png', 'Profession tax', 'https://tnurbanepay.tn.gov.in/CP_ProfTaxPaymentDetails.aspx#'),
(5, 'assets/images/services/5.png', '20.png', 'Non-Tax', 'https://tnurbanepay.tn.gov.in/NonTax_RentalCollection1.aspx#');

-- --------------------------------------------------------

--
-- Table structure for table `area-glance`
--

CREATE TABLE `area-glance` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area-glance`
--

INSERT INTO `area-glance` (`id`, `icon`, `title`, `content`, `slug`) VALUES
(1, 'assets/images/icons/4.png', 'Area', '87.64 Sq Km', 'javascript:void(0)'),
(2, 'assets/images/icons/5.png', 'Roads', '980.46 Km', 'roads'),
(3, 'assets/images/icons/6.png', 'Population', '10,11,328', 'population'),
(4, 'assets/images/icons/7.png', 'Street Lights', '46,536', 'street-lights'),
(5, 'assets/images/icons/8.png', 'Bus Shelters', '53', 'bus-stand'),
(6, 'assets/images/icons/9.png', 'Parks', '244', 'parks'),
(7, 'assets/images/icons/10.png', 'Wards', '70', 'javascript:void(0)'),
(8, 'assets/images/icons/11.png', 'Voters', '7,77,939', 'voters-details'),
(9, 'assets/images/icons/12.png', 'Public Toilet', '440', 'toilet');

-- --------------------------------------------------------

--
-- Table structure for table `audited_financial_statement`
--

CREATE TABLE `audited_financial_statement` (
  `id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `revenue_fund` text NOT NULL,
  `water_supply_fund` text NOT NULL,
  `elementary_education_fund` text NOT NULL,
  `updated_on` text DEFAULT NULL,
  `published_on` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audited_financial_statement`
--

INSERT INTO `audited_financial_statement` (`id`, `year`, `revenue_fund`, `water_supply_fund`, `elementary_education_fund`, `updated_on`, `published_on`) VALUES
(1, '2015-2016', '../assets/downloads/audited-financial-statement/TBMaccounts-2015-16_RF.pdf', '../assets/downloads/audited-financial-statement/TBMaccounts-2015-16_WSpdf.pdf', '../assets/downloads/audited-financial-statement/TBMaccounts-2015-16_EE-1.pdf', '24.04.2017', '24.04.2017'),
(2, '2016-2017', '../assets/downloads/audited-financial-statement/TBMaccounts16-17_RF.pdf', '../assets/downloads/audited-financial-statement/TBMaccounts16-17_WS.pdf', '../assets/downloads/audited-financial-statement/TBMaccounts16-17_EE.pdf', NULL, NULL),
(3, '2017-2018', '../assets/downloads/audited-financial-statement/TBMaudit-statement-2017-18_RF.pdf', '../assets/downloads/audited-financial-statement/TBMaudit-statement-2017-18_WS.pdf', '../assets/downloads/audited-financial-statement/TBMaudit-statement-2017-18_EE.pdf', '06.12.2018', '06.12.2018'),
(4, '2018-2019', '../assets/downloads/audited-financial-statement/TBMaccounts_18-19_RF.pdf', '../assets/downloads/audited-financial-statement/TBMaccounts_18-19_WS.pdf', '../assets/downloads/audited-financial-statement/TBMaccounts_18-19_EE.pdf', '09.12.2019', '09.12.2019'),
(5, '2019-2020', '../assets/downloads/audited-financial-statement/2019-20_TBM-RF.pdf', '../assets/downloads/audited-financial-statement/2019-20_TBM-WS.pdf', '../assets/downloads/audited-financial-statement/2019-20_TBM-EE.pdf', '29.01.2021', '29.01.2021'),
(6, '2020-2021', '../assets/downloads/audited-financial-statement/2020-21_RF.pdf', '../assets/downloads/audited-financial-statement/2020-21_WS.pdf', '../assets/downloads/audited-financial-statement/2020-21_EE.pdf', '07.03.2022', '07.03.2022'),
(7, '2021-2022', '../assets/downloads/audited-financial-statement/RF_2021-22.pdf', '../assets/downloads/audited-financial-statement/WS_2021-22.pdf', '../assets/downloads/audited-financial-statement/EE_2021-22.pdf', '23.08.2022', '23.08.2022'),
(8, '2022-2023', '../assets/downloads/audited-financial-statement/RF_FUND.pdf', '../assets/downloads/audited-financial-statement/WS_FUND.pdf', '../assets/downloads/audited-financial-statement/EE_FUND.pdf', '20.05.2024', '20.05.2024'),
(9, '2023-2024', '../assets/downloads/audited-financial-statement/RF_2023-24.pdf', '../assets/downloads/audited-financial-statement/WS_2023-24.pdf', '../assets/downloads/audited-financial-statement/EE_2023-24.pdf', '14.05.2024', '14.05.2024');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `budget_document` text NOT NULL,
  `council_approved_on` text NOT NULL,
  `updated_on` text NOT NULL,
  `published_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id`, `year`, `budget_document`, `council_approved_on`, `updated_on`, `published_on`) VALUES
(1, '2015', '../assets/downloads/budget/BUDGET_2015-16.pdf', '03.04.2016', '03.04.2016', '03.04.2016'),
(2, '2016', '../assets/downloads/budget/BUDGET_2016-17.pdf', '04.04.2017', '04.04.2017', '04.04.2017'),
(3, '2017', '../assets/downloads/budget/BUDGET_2017-18.pdf', '04.03.2018', '04.03.2018', '04.03.2018'),
(4, '2018', '../assets/downloads/budget/BUDGET_2018-19.pdf', '05.07.2019', '05.07.2019', '05.07.2019'),
(5, '2019', '../assets/downloads/budget/BUDGET_2019-20.pdf', '04.03.2020', '04.03.2020', '04.03.2020'),
(6, '2020', '../assets/downloads/budget/BUDGET_2020-21.pdf', '20.04.2020', '20.04.2020', '20.04.2020'),
(7, '2021', '../assets/downloads/budget/BUDGET_2021-22.pdf', '16.02.2021', '16.02.2021', '16.02.2021'),
(8, '2022', '../assets/downloads/budget/BUDGET_2022-23.pdf', '28.01.2022', '28.01.2022', '28.01.2022'),
(9, '2023', '../assets/downloads/budget/BUDGET_2023-24.pdf', '20.02.2023', '20.02.2023', '20.02.2023'),
(10, '2024', '../assets/downloads/budget/BUDGET_2024-25.pdf', '24.04.2024', '24.04.2024', '24.04.2024');

-- --------------------------------------------------------

--
-- Table structure for table `bus_stand`
--

CREATE TABLE `bus_stand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `filter` varchar(255) NOT NULL,
  `zone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus_stand`
--

INSERT INTO `bus_stand` (`id`, `name`, `image`, `filter`, `zone`) VALUES
(1, 'Arignar Anna Bus Terminal, Sanatorium', 'https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/assets/images/bus-stand/1.png', 'bus-stand', NULL),
(2, 'Tambaram Bus stand near Railway Station', 'https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/assets/images/bus-stand/2.png', 'bus-stand', NULL),
(3, 'Anakaputhur', 'https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/assets/images/bus-stand/3.png', 'bus-stand', NULL),
(4, 'Keelkatalai', 'https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/assets/images/bus-stand/4.png', 'bus-stand', NULL),
(5, 'Tambaram GH', NULL, 'bus-shelters', 'Zone 1'),
(6, 'Pammal - Pozhichalur road', NULL, 'bus-shelters', 'Zone 1'),
(7, 'Pammal Krishna Nagar', NULL, 'bus-shelters', 'Zone 1'),
(8, 'Pammal Police booth', NULL, 'bus-shelters', 'Zone 1'),
(9, 'Pammal Shankar Nagar', NULL, 'bus-shelters', 'Zone 1'),
(10, 'Anakaputhur, (Near ambedkar statue )', NULL, 'bus-shelters', 'Zone 1'),
(11, 'Anakaputhur, Amman kovil stop', NULL, 'bus-shelters', 'Zone 1'),
(12, 'Anakaputhur Bus stand', NULL, 'bus-shelters', 'Zone 1'),
(13, 'Tirneermalai East mada street', NULL, 'bus-shelters', 'Zone 1'),
(14, 'Tirneermalai West mada street', NULL, 'bus-shelters', 'Zone 1'),
(15, 'Pallavaram East Side (GST Road)', NULL, 'bus-shelters', 'Zone 2'),
(16, 'Chrompet East Side (GST Road)', NULL, 'bus-shelters', 'Zone 2'),
(17, 'Pallavaram West Side (GST Road)', NULL, 'bus-shelters', 'Zone 2'),
(18, 'Chrompet West Side (GST Road)', NULL, 'bus-shelters', 'Zone 2'),
(19, 'Keelkattalai (Medavakkam main road)', NULL, 'bus-shelters', 'Zone 2'),
(20, 'Nehru Nagar', NULL, 'bus-shelters', 'Zone 3'),
(21, 'Kumara Kundram', NULL, 'bus-shelters', 'Zone 3'),
(22, 'RP Road -Velachery Main Road', NULL, 'bus-shelters', 'Zone 3'),
(23, 'Kamarajapuram -2 Nos', NULL, 'bus-shelters', 'Zone 3'),
(24, 'Sembakkam - 1 No', NULL, 'bus-shelters', 'Zone 3'),
(25, 'Gowrivakkam - 2 Nos', NULL, 'bus-shelters', 'Zone 3'),
(26, 'Sanatorium', NULL, 'bus-shelters', 'Zone 4'),
(27, 'Irumbuliyur - 2nos', NULL, 'bus-shelters', 'Zone 4'),
(28, 'Fire station opp- TB Hospital', NULL, 'bus-shelters', 'Zone 4'),
(29, 'Mudichur road- Kone krishna bus stop', NULL, 'bus-shelters', 'Zone 4'),
(30, 'Krishna Nagar', NULL, 'bus-shelters', 'Zone 4'),
(31, 'Old Perungalathur', NULL, 'bus-shelters', 'Zone 4'),
(32, 'Perungalathur', NULL, 'bus-shelters', 'Zone 4'),
(33, 'Peerkanakarani Erikkarai', NULL, 'bus-shelters', 'Zone 4'),
(34, 'Tambaram Railway station - 2nos', NULL, 'bus-shelters', 'Zone 4'),
(35, 'Tambaram Bus stop -2nos', NULL, 'bus-shelters', 'Zone 4'),
(36, 'MCC Collage', NULL, 'bus-shelters', 'Zone 5'),
(37, 'Ksist King Bus Stop', NULL, 'bus-shelters', 'Zone 5'),
(38, 'Camp Road Junction', NULL, 'bus-shelters', 'Zone 5'),
(39, 'Mahalakshimi nagar', NULL, 'bus-shelters', 'Zone 5'),
(40, 'Indira nagar', NULL, 'bus-shelters', 'Zone 5'),
(41, 'Bharath engg Collage', NULL, 'bus-shelters', 'Zone 5'),
(42, 'Sudharsan nagar', NULL, 'bus-shelters', 'Zone 5'),
(43, 'Kollipannai', NULL, 'bus-shelters', 'Zone 5'),
(44, 'Bagani koil', NULL, 'bus-shelters', 'Zone 5'),
(45, 'Vengalliyamman Koil', NULL, 'bus-shelters', 'Zone 5'),
(46, 'Sivan Koil', NULL, 'bus-shelters', 'Zone 5'),
(47, 'Noothancherri', NULL, 'bus-shelters', 'Zone 5'),
(48, 'Ramar koil', NULL, 'bus-shelters', 'Zone 5'),
(49, 'Manikkam nagar', NULL, 'bus-shelters', 'Zone 5'),
(50, 'Jothi nagar', NULL, 'bus-shelters', 'Zone 5'),
(51, 'ALS nagar', NULL, 'bus-shelters', 'Zone 5'),
(52, 'Yasvanth Nagar', NULL, 'bus-shelters', 'Zone 5'),
(53, 'Padmavathy Nagar', NULL, 'bus-shelters', 'Zone 5'),
(54, 'Pathuvancherry', NULL, 'bus-shelters', 'Zone 5'),
(55, 'Kaspapuram', NULL, 'bus-shelters', 'Zone 5'),
(56, 'Mappedu', NULL, 'bus-shelters', 'Zone 5'),
(57, 'Agaram', NULL, 'bus-shelters', 'Zone 5');

-- --------------------------------------------------------

--
-- Table structure for table `by_law`
--

CREATE TABLE `by_law` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icons` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `by_law`
--

INSERT INTO `by_law` (`id`, `title`, `icons`, `pdf`) VALUES
(1, 'Water Supply By Law', '24.png', '../assets/downloads/by-laws/water-supply-by-law.pdf'),
(2, 'UGSS By Law', '25.png', '../assets/downloads/by-laws/ugss-by-law.pdf'),
(3, 'SWM 2016 By Laws', '26.png', '../assets/downloads/by-laws/swm-2016-by-laws.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `designation`, `phone_number`, `section`, `zone`) VALUES
(1, 'S. Balachander', 'Commissioner', '7397392218', 'General', 'Main office'),
(2, 'S. Sasikala', 'Deputy Commissioner', '9655703212', 'General', 'Main office'),
(3, 'Gnanavel T', 'Executive Engineer', '8248888577', 'Engineering', 'Main office'),
(4, 'Porchelvan', 'City Health Officer', '9840361340', 'Public Health', 'Main office'),
(5, 'G Sivakumar', 'Town Planning Officer', '9444030586', 'Town Planning', 'Main office'),
(6, 'Senthil Kumar Rathinam', 'Assistant Commissioner', '9940824564', 'Revenue', 'Main office'),
(7, 'P Prabhu', 'Public Relation Officer', '9962368905', 'General', 'Main office'),
(8, 'A Rajakumar', 'Manager', '9840909937', 'General', 'Main office'),
(9, 'R. Hemamalini', 'Superintendent', '9941344614', 'General', 'Main office'),
(10, 'P. Hemalatha', 'Superintendent', '9941295456', 'General', 'Main office'),
(11, 'B Sornalatha', 'Assistant Commissioner', '9500877977', 'General', 'Zone 1'),
(12, 'P Suresh', 'Superintendent', '8056207144', 'General', 'Zone 1'),
(13, 'Gnanavel T', 'Executive Engineer', '8248888577', 'Engineering', 'Zone 1'),
(14, 'Sathyaseelan', 'Assistant Executive Engineer', '9789901184', 'Engineering', 'Zone 1'),
(15, 'J. Venkatesan', 'Junior Engineer', '7010461239', 'Engineering', 'Zone 1'),
(16, 'R.Sivakumar', 'Sanitary Officer', '7401540002', 'Public Health', 'Zone 1'),
(17, 'B Ramesh', 'Sanitary Inspector', '9841626977', 'Public Health', 'Zone 1'),
(18, 'P Suresh', 'Asst. Revenue Officer', '8056207144', 'Revenue', 'Zone 1'),
(19, 'M Chellapandi', 'Town Planning Inspector', '9790593017', 'Town Planning', 'Zone 1'),
(20, 'B Sornalatha', 'Assistant Commissioner', '9500877977', 'General', 'Zone 2'),
(21, 'S Raju', 'Superintendent', '8608398373', 'General', 'Zone 2'),
(22, 'M Shankar', 'Assistant Executive Engineer', '9499012767', 'Engineering', 'Zone 2'),
(23, 'G.K. Prakash', 'Junior Engineer', '9444654384', 'Engineering', 'Zone 2'),
(24, 'N. Marimuthu', 'Sanitary Officer', '8754033760', 'Public Health', 'Zone 2'),
(25, 'V Selvaraju', 'Sanitary Inspector', '9842678323', 'Public Health', 'Zone 2'),
(26, 'Raja Simhar R', 'Sanitary Inspector', '8608398467', 'Public Health', 'Zone 2'),
(27, 'Abdul Jamal Mannan', 'Asst. Revenue Officer', '9003106260', 'Revenue', 'Zone 2'),
(28, 'Vignesh', 'Asst.Draughtsman', '9444030586', 'Town Planning', 'Zone 2'),
(29, 'G. Rajalakshmi', 'Assistant Commissioner', '7904985456', 'General', 'Zone 3'),
(30, 'P Selvarani', 'Administrative Officer', '9841607135', 'General', 'Zone 3'),
(31, 'Veeramani B', 'Manager', '9840239814', 'General', 'Zone 3'),
(32, 'M Devakumar', 'Superintendent', '8608049447', 'General', 'Zone 3'),
(33, 'Ragupathi R', 'Assistant Executive Engineer', '8637474953', 'Engineering', 'Zone 3'),
(34, 'Palani', 'Junior Engineer', '9444138551', 'Engineering', 'Zone 3'),
(35, 'R Janarthanam', 'Sanitary Officer', '9444248578', 'Public Health', 'Zone 3'),
(36, 'R Govindaraj', 'Sanitary Inspector', '8825665966', 'Public Health', 'Zone 3'),
(37, 'M Devakumar', 'Asst. Revenue Officer', '8608049447', 'Revenue', 'Zone 3'),
(38, 'M Chellapandi', 'Town Planning Inspector', '9790593017', 'Town Planning', 'Zone 3'),
(39, 'Shakila S', 'Assistant Commissioner', '9445665985', 'General', 'Zone 4'),
(40, 'K Saravanan', 'Superintendent', '9444859559', 'General', 'Zone 4'),
(41, 'V Thangadurai', 'Assistant Executive Engineer', '9445228590', 'Engineering', 'Zone 4'),
(42, 'B Venkitesan', 'Assistant Engineer', '9551287754', 'Engineering', 'Zone 4'),
(43, 'N.Sivakumar', 'Sanitary Officer', '9843814055', 'Public Health', 'Zone 4'),
(44, 'E. Lakshmi Ganesan', 'Sanitary Inspector', '9840805344', 'Public Health', 'Zone 4'),
(45, 'K V Senthilkumar', 'Sanitary Inspector', '7305530304', 'Public Health', 'Zone 4'),
(46, 'Suresh N', 'Revenue Officer', '9843465133', 'Revenue', 'Zone 4'),
(47, 'L. Jaisankar', 'Town Planning Inspector', '9677257159', 'Town Planning', 'Zone 4'),
(48, 'G. Rajalakshmi', 'Assistant Commissioner', '7904985456', 'General', 'Zone 5'),
(49, 'N Vijayalakshmi', 'Manager', '9940525009', 'General', 'Zone 5'),
(50, 'D.Gajendran', 'Superintendent', '9841554677', 'General', 'Zone 5'),
(51, 'Kumar', 'Assistant Executive Engineer', '9840627106', 'Engineering', 'Zone 5'),
(52, 'Prathapa Chandran R', 'Junior Engineer', '9382121509', 'Engineering', 'Zone 5'),
(53, 'K Lakshmi Priya', 'Sanitary Officer', '9944155266', 'Public Health', 'Zone 5'),
(54, 'A Samuel', 'Sanitary Inspector', '9840276963', 'Public Health', 'Zone 5'),
(55, 'Nagarajan R', 'Sanitary Inspector', '9962720153', 'Public Health', 'Zone 5'),
(56, 'Suresh N', 'Revenue Officer', '9843465133', 'Revenue', 'Zone 5'),
(57, 'M Chellapandi', 'Town Planning Inspector', '9790593017', 'Town Planning', 'Zone 5');

-- --------------------------------------------------------

--
-- Table structure for table `council_resolution`
--

CREATE TABLE `council_resolution` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `council_resolution`
--

INSERT INTO `council_resolution` (`id`, `name`, `link`, `year`) VALUES
(1, 'April Ordinary', '../assets/downloads/council-resolution/04-2022-ordinary.pdf', '2022'),
(2, 'Zone 2 April Ordinary', '../assets/downloads/council-resolution/zone-2-April-2022-Ordinary.pdf', '2022'),
(3, 'April Urgent', '../assets/downloads/council-resolution/04-2022-Urgent.pdf', '2022'),
(4, 'Zone 2 April Urgent', '../assets/downloads/council-resolution/Zone-2-April-2022-Urgent.pdf', '2022'),
(5, 'May Ordinary', '../assets/downloads/council-resolution/05-2022-ordinary.pdf', '2022'),
(6, 'Zone 1 May', '../assets/downloads/council-resolution/zone-1-May-2022-resolution.pdf', '2022'),
(7, 'Zone 2 May Ordinary', '../assets/downloads/council-resolution/Zone-2-May-2022-Ordinary.pdf', '2022'),
(8, 'Zone 4 May Ordinary', '../assets/downloads/council-resolution/Zone-4-Council-Meeting-Minutes-25.05.2022.pdf', '2022'),
(9, 'Zone 5 May Ordinary', '../assets/downloads/council-resolution/RESOLUTION-zone-5-agenda-27.05.pdf', '2022'),
(10, 'May Urgent', '../assets/downloads/council-resolution/05-2022-Urgent.pdf', '2022'),
(11, 'Zone 2 May Urgent', '../assets/downloads/council-resolution/Zone2-May-2022-Urgent.pdf', '2022'),
(12, 'Zone 1 June Ordinary', '../assets/downloads/council-resolution/zone-1-ordinary-June-2022-Resolution.pdf', '2022'),
(13, 'Zone 2 June Ordinary', '../assets/downloads/council-resolution/zone-2-June-2022-Ordinary.pdf', '2022'),
(14, 'Zone 3 June Ordinary', '../assets/downloads/council-resolution/zone-3-Ordinary-june-1-1.pdf', '2022'),
(15, 'June Urgent', '../assets/downloads/council-resolution/06-2022-urgent.pdf', '2022'),
(16, 'July Ordinary', '../assets/downloads/council-resolution/07-2022-ordinary.pdf', '2022'),
(17, 'Zone 4 July Ordinary', '../assets/downloads/council-resolution/Zone-4-July-ordinary.pdf', '2022'),
(18, 'Zone 5 July ordinary', '../assets/downloads/council-resolution/Zone-6-July-4-ordinary.pdf', '2022'),
(19, 'July Urgent', '../assets/downloads/council-resolution/07-2022-urgent-1.pdf', '2022'),
(20, 'August Main Ordinary', '../assets/downloads/council-resolution/08-2022-ordinary.pdf', '2022'),
(21, 'August Zone 1 Ordinary', '../assets/downloads/council-resolution/javascript:void(0)', '2022'),
(22, 'August Zone 2 Ordinary', '../assets/downloads/council-resolution/Zone-2-Aug-2022-Ordinary.pdf', '2022'),
(23, 'August Zone 3 Ordinary', '../assets/downloads/council-resolution/ZONE-3-ORDINARY-MEETING-AUG.pdf', '2022'),
(24, 'August Zone 4 Ordinary', '../assets/downloads/council-resolution/Zone-4-Council-Meeting-Minutes-30.08.2022.pdf', '2022'),
(25, 'August Zone 5 Aug Ordinary', '../assets/downloads/council-resolution/RESOLUTION-Subject-Aug-2022-dated-29.08.2022-10.15-AM.pdf', '2022'),
(26, 'Zone 2 Aug urgent', '../assets/downloads/council-resolution/-2-Aug-2022-Urgent.pdf', '2022'),
(27, 'Zone 3 Aug Urgent', '../assets/downloads/council-resolution/ZONE-3-URGENT-MEETING-DATED-5-8-2022.pdf', '2022'),
(28, 'September Zone 3 Ordinary', '../assets/downloads/council-resolution/zone-3-Ordinary-Meeting-Dated-30-9-2022.pdf', '2022'),
(29, 'October Main Office Ordinary', '../assets/downloads/council-resolution/10-2022-Ordinary.pdf', '2022'),
(30, 'Oct Zone 1 Ordinary', '../assets/downloads/council-resolution/october-resolution-2022.pdf', '2022'),
(31, 'Oct Zone 2 Oridinary', '../assets/downloads/council-resolution/8-Oct-2022-Ordinary.pdf', '2022'),
(32, 'Main Office Urgent', '../assets/downloads/council-resolution/10-2022-Urgent.pdf', '2022'),
(33, 'Nov Zone – 4 Ordinary', '../assets/downloads/council-resolution/Zone-4-Council-Meeting-Minutes-16.11.2022.pdf', '2022'),
(34, 'Nov Zone – 5 Ordinary', '../assets/downloads/council-resolution/ZONE-V-MEETING-RESOLUTION-NOV-2022.pdf', '2022'),
(35, 'December Main ordinary', '../assets/downloads/council-resolution/12-2022-ordinary.pdf', '2022'),
(36, 'Zone 2 Dec Ordinary', '../assets/downloads/council-resolution/9-Dec-2022-Ordinary.pdf', '2022'),
(37, 'December Main Urgent', '../assets/downloads/council-resolution/12-2022-Urgent.pdf', '2022'),
(38, 'Zone 2 Dec Urgent', '../assets/downloads/council-resolution/10-Dec-2022-Urgent.pdf', '2022'),
(39, 'Zone 2 Jan ordinary-02022023', '../assets/downloads/council-resolution/Zone-2-Feb-2023-Ordinary.pdf', '2023'),
(40, 'Zone 5 Feb ordinary-09032023', '../assets/downloads/council-resolution/zone-5-FEB-ordinary.pdf', '2023'),
(41, 'Main March-05042023 	', '../assets/downloads/council-resolution/03-2023-ordinary.pdf', '2023'),
(42, 'Zone 2 April ordinary-06052023', '../assets/downloads/council-resolution/zone-2-April-2023-Ordinary.pdf', '2023'),
(43, 'Main Jan Urgent -05022023', '../assets/downloads/council-resolution/01-2023-Urgent.pdf', '2023'),
(44, 'Zone 2 April -urgent -06052023', '../assets/downloads/council-resolution/zone-2-April-2023-Urgent.pdf', '2023'),
(45, 'Zone 1 May ordinary 06062023', '../assets/downloads/council-resolution/zone-1-may.pdf', '2023'),
(46, 'Zone 2 May 06062023', '../assets/downloads/council-resolution/zone-2-May-2023-Ordinary.pdf', '2023'),
(47, 'Zone 4 May-ordinary-05062023', '../assets/downloads/council-resolution/zone-4-MAY-2023-final.pdf', '2023'),
(48, 'Zone 5 May ordinary-05062023', '../assets/downloads/council-resolution/zone-5-may-ordinary.pdf', '2023'),
(49, 'Zone 2 May -urgent-06062023', '../assets/downloads/council-resolution/zone-2-May-2023-Urgent.pdf', '2023'),
(50, 'Main -June-Oridinary-22072023', '../assets/downloads/council-resolution/06-2023-Meeting-Ordinary-1.pdf', '2023'),
(51, 'Main July Ordinary-19082023', '../assets/downloads/council-resolution/07-2023-ordinary1.pdf', '2023'),
(52, 'Zone 1 July  ordinary03082023', '../assets/downloads/council-resolution/zone-1July-2023.pdf', '2023'),
(53, 'Zone 2-july-ordinary03082023', '../assets/downloads/council-resolution/6-July-2023-Ordinary.pdf', '2023'),
(54, 'Zone 4 July Ordinary13082023', '../assets/downloads/council-resolution/Zone-4-JULY-2023-_signed_.pdf', '2023'),
(55, 'Zone 2  Urgent-july-2023', '../assets/downloads/council-resolution/7-July-2023-Urgent.pdf', '2023'),
(56, 'Zone 3 August ordinary07092023', '../assets/downloads/council-resolution/ZONE-AUGUST-2023-COUNCIL-MEETING.pdf', '2023'),
(57, 'Zone 5 August23092023', '../assets/downloads/council-resolution/Zone-5-August-2023.pdf', '2023'),
(58, 'Main september-ordinary-21102023', '../assets/downloads/council-resolution/09-2023-ordinary.pdf', '2023'),
(59, 'Main September-urgent21102023', '../assets/downloads/council-resolution/09-2023-urgent.pdf', '2023'),
(60, 'Zone 1 October Ordinary27102023', '../assets/downloads/council-resolution/October-2023-Council-Subject-Revised_1_.pdf', '2023'),
(61, 'Zone 2 October ordinary03112023', '../assets/downloads/council-resolution/Zone-2-Oct-2023-Ordinary.pdf', '2023'),
(62, 'Zone 4 October ordinary12112023', '../assets/downloads/council-resolution/council_zone4.pdf', '2023'),
(63, 'Zone 2 October Urgent03112023', '../assets/downloads/council-resolution/zone-2-9-Oct-2023-Urgent.pdf', '2023'),
(64, 'Main November ordinary9122023', '../assets/downloads/council-resolution/11-2023-ordinary.pdf', '2023'),
(65, 'December Main Ordinary28012023', '../assets/downloads/council-resolution/javascript:void(0)', '2023'),
(66, 'Main Feb Ordinary-14032024', '../assets/downloads/council-resolution/02-2024-Ordinary.pdf', '2024'),
(67, 'Main Feb Urgent-14032024', '../assets/downloads/council-resolution/02-2024-Urgent.pdf', '2024'),
(68, 'Zone 2 March Ordinary', '../assets/downloads/council-resolution/10-March-2024-Ordinary-pdf.pdf', '2024'),
(69, 'Zone 4 March Ordinary04042024', '../assets/downloads/council-resolution/Zone-4_MARCH-2024-ORDINARY.pdf', '2024'),
(70, 'Zone 4 March Urgent04042024', '../assets/downloads/council-resolution/Zone4_MARCH-2024-URGENT-.pdf', '2024'),
(71, 'Zone 5 March Ordinary04042024', '../assets/downloads/council-resolution/March_2024_Agenda_Ordinary-Meeting-1.pdf', '2024'),
(72, 'Zone 5 March Urgent04042024', '../assets/downloads/council-resolution/March_2024_Agenda_Urgent-Meeting.pdf', '2024'),
(73, 'Main July Ordinary-19082024', '../assets/downloads/council-resolution/07-2024-ordinary.pdf', '2024'),
(74, 'Main August Urgent -04092024', '../assets/downloads/council-resolution/08-2024-urgent.pdf', '2024'),
(75, 'Main August Ordinary-04092024', '../assets/downloads/council-resolution/08-2024-ordinary.pdf', '2024'),
(76, 'Zone 2 August Ordinary', '../assets/downloads/council-resolution/11-August-2024-Ordinary-_PDF_.pdf', '2024'),
(77, 'Zone 2 August Urgent', '../assets/downloads/council-resolution/12-August-2024-Urgent-_PDF_.pdf', '2024'),
(78, 'Zone 4 August Urgent -03092', '../assets/downloads/council-resolution/Aug-2024-URGENT-.pdf', '2024'),
(79, 'Zone  1 August Ordinary 180924', '../assets/downloads/council-resolution/DOC-20240918-WA0021..pdf', '2024'),
(80, 'Zone 5 August Ordinary -130920242424', '../assets/downloads/council-resolution/AUGUST_2024_Agenda-Ordinary-Meeting.pdf', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `title`, `pdf`) VALUES
(1, 'Below Poverty Line Families', 'assets/downloads/bpl-list.pdf'),
(2, 'Water Supply', 'assets/downloads/water-supply.pdf'),
(3, 'Street Lights', 'assets/downloads/street-lights.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `institute` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `institute`, `address`) VALUES
(1, 'Municipal Middle School', 'Kannadapalayam, Dargas Road, West Tambaram'),
(2, 'Government Adi Dravidar Welfare Middle School', 'Thirunirmalai Road, West Tambaram'),
(3, 'Seventh-day Adventist Matriculation School', 'GST Road, Kadapperi, West Tambaram'),
(4, 'Valluvar Kurukulam Matriculation High School', 'Grand Southern Trunk Rd, Ranganathapuram, Tambaram'),
(5, 'Jayagopal Corodia National High School', 'Bharatmata Street, East Tambaram'),
(6, 'Sita Devi Corodia High School', 'East Tambaram'),
(7, 'Vidyamandir Matriculation School', 'Ganapati Colony, East Tambaram'),
(8, 'Misrimal Bukraj Bora Government Girls High School', 'Kalamekam Street, East Tambaram'),
(9, 'Municipal High School', 'Salaiyoor'),
(10, 'Venkateswara Matriculation School', '100 ft Road, Salaiyoor'),
(11, 'Bharathi Matriculation School', '100 ft Road, Salaiyoor'),
(12, 'Municipal Primary School', 'Salaiyoor'),
(13, 'Christuraja Girls High School', 'East Tambaram'),
(14, 'Sita Devi Corodia High School', 'East Tambaram'),
(15, 'Valluvar Kurukulam Primary School', 'G.S.T. Road, West Copper'),
(16, 'Chennai Sevasathan High School', 'Gandhi Road, West Tambaram'),
(17, 'Anand Jain Vidyalaya', 'Kakkan Road, West Tambaram'),
(18, 'Municipal Middle School', 'Kannadapalayam'),
(19, 'Ehil Montessori Nursery and Primary School', 'CTO Colony, West Tambaram'),
(20, 'St. Jacob’s Primary School', 'Arasan Nagar, West Tambaram'),
(21, 'MCCRSL High School', 'Gandhi Road, West Tambaram'),
(22, 'Municipal Primary School', 'Kalyan Nagar, Old Tambaram'),
(23, 'Baby High School', 'Abdul Razak Street, West Tambaram'),
(24, 'Christ King Girls High School', 'East Tambaram'),
(25, 'Alvin Memorial Public School', 'Salaiyoor'),
(26, 'ADWPS', 'Anakaputhur'),
(27, 'Panchayat Union Primary School', 'Anakaputhur'),
(28, 'PUMS', 'Pasumpon Nagar, Pammal'),
(29, 'Panchayat Union Middle School', 'Moongileri'),
(30, 'MMS', 'Keelkattalai'),
(31, 'MMS Urdu', 'Pallavaram'),
(32, 'MPL PS ESA', 'Pallavaram'),
(33, 'MPL PS Zamin', 'Pallavaram'),
(34, 'MPS', 'Hasthinapuram'),
(35, 'ADWPS', 'Nagalkeni'),
(36, 'Pallavapuram Municipal Primary School', 'Zaminroyapetai, Chromepet'),
(37, 'ADWMS', 'Kadaperi'),
(38, 'MPS', 'Selaiyur'),
(39, 'MMS', 'Vinoba Nagar'),
(40, 'MMS', 'Irumbuliyur'),
(41, 'MPS', 'Old Tambaram'),
(42, 'MMS', 'Kannadiyarpalayam'),
(43, 'MPS', 'MGR Nagar'),
(44, 'PUPS', 'Chitlapakkam'),
(45, 'ADWPS', 'Chitlapakkam'),
(46, 'PUPS', 'Sanitoriam'),
(47, 'PUPS', 'Ramakrishnapuram'),
(48, 'PUPS', 'Madambakkam'),
(49, 'PUPS', 'Peerkankaranai'),
(50, 'PUPS', 'East Perungalathur'),
(51, 'PUPS', 'Old Perungalathur'),
(52, 'PUPS', 'Lakshmipuram'),
(53, 'PUMS', 'Thiruneermalai'),
(54, 'PUPS', 'Thiruneermalai');

-- --------------------------------------------------------

--
-- Table structure for table `engineering_section`
--

CREATE TABLE `engineering_section` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `engineering_section`
--

INSERT INTO `engineering_section` (`id`, `name`, `designation`, `contact_no`, `zone`) VALUES
(1, 'Thiru.Murugesan', 'City Engineer', '9384593855', 'Main office'),
(2, 'Thiru. Gnanavel', 'Executive Engineer', '8248888577', 'Zone 1'),
(3, 'Thiru. Sathyaseelan', 'Assistant Executive Engineer', '9789901184', 'Zone 1'),
(4, 'Thiru. J. Venkatesan', 'Junior Engineer', '7010461239', 'Zone 1'),
(5, 'Thiru. V.Arunachalam', 'Work Inspector', '9944901040', 'Zone 1'),
(6, 'Thiru. Narendra Raju', 'Technical Assistant', '9840752919', 'Zone 1'),
(7, 'Thiru. C. Sathish', 'Driver', '9710899155', 'Zone 1'),
(8, 'Thiru. J. Mahalingam', 'Electrician, Gr 2', '8122857610', 'Zone 1'),
(9, 'Thiru. E.Kumar', 'Wireman helper', '9941656919', 'Zone 1'),
(10, 'BABU S', 'Driver', '8148033446', 'Zone 1'),
(11, 'SIGAMANI G', 'Driver', '7200553546', 'Zone 1'),
(12, 'C PUSHPARAJ', 'Driver', '8939100741', 'Zone 1'),
(13, 'Thiru. Shankar', 'Assistant Executive Engineer', '9499012767', 'Zone 2'),
(14, 'Thiru. G.K. Prakash', 'Junior Engineer', '9444654384', 'Zone 2'),
(15, 'Thiru.S.Ruthramurthi', 'Technical Assistant Skilled II', '7305779013', 'Zone 2'),
(16, 'Thiru. R. Nedunchezhian', 'Driver', '9941993803', 'Zone 2'),
(17, 'Thiru. L. Gopal', 'Driver', '9710061417', 'Zone 2'),
(18, 'Thiru. V. Baskar Rao', 'Driver', '9791142044', 'Zone 2'),
(19, 'Thiru. R. Damodharan', 'Wireman', '9841151156', 'Zone 2'),
(20, 'Thiru. D.Baskar', 'Wireman helper', '8870007684', 'Zone 2'),
(21, 'Thiru.G.Tamilmani', 'Wireman helper', '9790993403', 'Zone 2'),
(22, 'Thiru. D.Anbu', 'Wireman helper', '9952982800', 'Zone 2'),
(23, 'YOVAN A', 'Driver', '9092789971', 'Zone 2'),
(24, 'R MOHAN', 'Driver', '8825889469', 'Zone 2'),
(25, 'Thiru. Ragupathy', 'Assistant Executive Engineer', '8637474953', 'Zone 3'),
(26, 'Thiru. Thamizharasu', 'Draughtsman', '9840960616', 'Zone 3'),
(27, 'Thiru. M.Palani', 'Junior Engineer', '9444138551', 'Zone 3'),
(28, 'Thiru. Jayakumar', 'Driver', '9790725535', 'Zone 3'),
(29, 'Thiru. R. Palani', 'Driver', '9789841415', 'Zone 3'),
(30, 'Thiru.S.Elango', 'Technical Assistant', '9940749356', 'Zone 3'),
(31, 'Thiru. B. Johnson', 'Wireman', '9283207018', 'Zone 3'),
(32, 'Thiru. A.Elango', 'Wireman helper', '9710346754', 'Zone 3'),
(33, 'Thiru. V.Thangadurai', 'Assistant Executive Engineer', '9445228590', 'Zone 4'),
(34, 'Thiru. B. Venkitesan', 'Assistant Engineer', '9551287754', 'Zone 4'),
(35, 'R.Thirumalai', 'Technical Assistant Skilled II', '9380714199', 'Zone 4'),
(36, 'Thiru. R. Parthasarathy', 'Electrician', '9840893125', 'Zone 4'),
(37, 'Thiru. R. Sounder', 'Wireman', '7299473138', 'Zone 4'),
(38, 'Thiru. K. Srinivasan', 'Wireman helper', '9941279053', 'Zone 4'),
(39, 'Thiru. Kumar', 'Assistant Executive Engineer', '9840627106', 'Zone 5'),
(40, 'Thiru. R. Prathapa chandran', 'Junior Engineer', '9382121509', 'Zone 5'),
(41, 'Thiru. K. Vembu', 'Driver', '9444896705', 'Zone 5'),
(42, 'Thiru. R. Manohar', 'Wireman', '9789800556', 'Zone 5'),
(43, 'Thiru. S. Kabilan', 'Wireman', '9789974637', 'Zone 5');

-- --------------------------------------------------------

--
-- Table structure for table `fcg`
--

CREATE TABLE `fcg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fcg`
--

INSERT INTO `fcg` (`id`, `name`, `link`) VALUES
(1, 'Audit statement 2015-16', '../assets/downloads/performance-grant/audit-statement-2015-16.pdf'),
(2, 'Audit statement 2016 - 2017', '../assets/downloads/performance-grant/audit-statement-2016-17.pdf'),
(3, 'Audit statement 2017 - 2018', '../assets/downloads/performance-grant/audit-statement-2017-18.pdf'),
(4, 'Unaudit Statement 18-19', '../assets/downloads/performance-grant/unaudit-statement-18-19.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `footer_menu`
--

CREATE TABLE `footer_menu` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `filter` text NOT NULL,
  `has_page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer_menu`
--

INSERT INTO `footer_menu` (`id`, `title`, `slug`, `filter`, `has_page`) VALUES
(1, 'Public Disclosure', 'public-disclosure', 'information', 1),
(2, 'Combined Development and Building Rules, 2019', '../assets/downloads/footer/TN_combined_development_building_rules_2019.pdf', 'information', 0),
(3, 'Master Plan and Land Use', 'master-plan-and-land-use', 'information', 1),
(4, 'SWM Rule 2016', '../assets/downloads/footer/SWM-Rule-2016-Tamil-1.pdf', 'information', 0),
(5, 'By Law', 'by-law', 'information', 1),
(6, 'Service Level Bench Mark', 'service-level-bench-mark', 'information', 1),
(8, 'Amrut Reforms', 'amrut-reforms', 'information', 1),
(9, 'Municipal Directory', '../assets/downloads/footer/MUNICIPALDIRECTORY-1.pdf', 'information', 0),
(10, '14th Finance Commission (FFC) Grant', 'finance-commission-grant', 'information', 1),
(11, 'Bribery is against the law', 'bribery-is-against-the-law', 'information', 1),
(12, 'Important G.Os and Notifications', 'important-gos-and-notifications', 'information', 1),
(14, 'Tenders', 'https://tntenders.gov.in/nicgep/app', 'downloads', 0),
(15, 'Miscellaneous Applications', '../assets/downloads/footer/Misc.pdf', 'downloads', 0),
(16, 'Building Plan Applications', '../assets/downloads/footer/Building-plan.pdf', 'downloads', 0),
(17, 'Tax Applications', '../assets/downloads/footer/TAX.pdf', 'downloads', 0);

-- --------------------------------------------------------

--
-- Table structure for table `general_section`
--

CREATE TABLE `general_section` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `zone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general_section`
--

INSERT INTO `general_section` (`id`, `name`, `designation`, `contact_no`, `zone`) VALUES
(1, 'A. Rajkumar', 'Accountant (Class II)', '9840909937', 'Main office'),
(2, 'P. Hemalatha', 'Superintendent', '9941295456', 'Main office'),
(3, 'R. Hemamalini', 'Superintendent', '9941344614', 'Main office'),
(4, 'V. Muthukumar', 'Assistant', '9442677956', 'Main office'),
(5, 'C Geetha', 'Assistant', '8122210765', 'Main office'),
(6, 'L.Sakthivel', 'Assistant', '9884209649', 'Main office'),
(7, 'R. Sangeetha', 'Assistant', '9600855961', 'Main office'),
(8, 'T. Ankaiah', 'Assistant', '7299469339', 'Main office'),
(9, 'P Subash Chandra Bose', 'Assistant', '9444600059', 'Main office'),
(10, 'Nagaraj', 'Assistant', '9043628771', 'Main office'),
(11, 'S.Saritha', 'Assistant', '9841099193', 'Main office'),
(12, 'G. Dhanalakshmi', 'Junior Assistant', '7339478715', 'Main office'),
(13, 'R. Sangeetha', 'Junior Assistant', '8870739085', 'Main office'),
(14, 'S Venkatasamy', 'Junior Assistant', '9043513952', 'Main office'),
(15, 'A. Dhanalakshmi', 'Junior Assistant', '7397296101', 'Main office'),
(16, 'K. Kumaran', 'Junior Assistant', '9976543921', 'Main office'),
(17, 'M. Dhanasekar', 'Record Clerk', '9884707987', 'Main office'),
(18, 'S. Parthiban', 'Office Assistant', '9444066994', 'Main office'),
(19, 'R. Anandababu', 'Office Assistant', '9840947872', 'Main office'),
(20, 'Veeramani', 'Office Assistant', '8940102128', 'Main office'),
(21, 'M. Ramachandran', 'Office Assistant', '9551212618', 'Main office'),
(22, 'R. Boopalan', 'Office Assistant', '9677156357', 'Main office'),
(23, 'Devi', 'Office Assistant', '7358298621', 'Main office'),
(24, 'P. Prabhu', 'Public Relation Officer', '9962368905', 'Main office'),
(25, 'P. Suresh', 'Superintendent', '8056207144', 'Zone 1'),
(26, 'Chinnakutty', 'Superintendent', '9445376823', 'Zone 1'),
(27, 'Suguna', 'Assistant', '7401084300', 'Zone 1'),
(28, 'Jain Arokia Suveetha', 'Junior Assistant', '7401327929', 'Zone 1'),
(29, 'Rajeswari', 'Junior Assistant', '9176314343', 'Zone 1'),
(30, 'A.J. Jaisankar', 'Junior Assistant', '9600118002', 'Zone 1'),
(31, 'M. Vijayakumar', 'Junior Assistant', '9751167974', 'Zone 1'),
(32, 'R. Muthukumar', 'Junior Assistant', '9943884363', 'Zone 1'),
(33, 'R.Saravanrao', 'Junior Assistant', '9791640400', 'Zone 1'),
(34, 'Thangam', 'Junior Assistant', '9943251723', 'Zone 1'),
(35, 'T.K.S. Neethipathi', 'Office Assistant', NULL, 'Zone 1'),
(36, 'R. Sridhar', 'Night Watchman', '9941171222', 'Zone 1'),
(37, 'S.Raju', 'Superintendent', '8608398373', 'Zone 2'),
(38, 'Ponraj', 'Assistant', '9382135244', 'Zone 2'),
(39, 'Amalarasi', 'Assistant', '9865460283', 'Zone 2'),
(40, 'Lalitha Mary', 'Assistant', '9894338449', 'Zone 2'),
(41, 'N.Kameshwaran', 'Assistant', '9962126061', 'Zone 2'),
(42, 'V. THIRUPURASUNDARI', 'Assistant', '9941749313', 'Zone 2'),
(43, 'Manickavasagam', 'Junior Assistant', '9789279382', 'Zone 2'),
(44, 'Lydia Selva kumari', 'Junior Assistant', '9840714024', 'Zone 2'),
(45, 'Jagan', 'Junior Assistant', '9600360943', 'Zone 2'),
(46, 'Premkumar', 'Junior Assistant', '9500346008', 'Zone 2'),
(47, 'Anbazhagan', 'Typist', '9962547678', 'Zone 2'),
(48, 'Ilaiyaraja', 'Record Clerk', '8610415410', 'Zone 2'),
(49, 'Rajesh', 'Office Assistant', '9677267623', 'Zone 2'),
(50, 'Babu', 'Office Assistant', NULL, 'Zone 2'),
(51, 'Jayaraman', 'Office Assistant', '9952908450', 'Zone 2'),
(52, 'P.Selvarani', 'Administrative officer', '9841607135', 'Zone 3'),
(53, 'B. Veeramani', 'Accountant (Class Iv)', '9840239814', 'Zone 3'),
(54, 'M. Devakumar', 'Superintendent', '8608049447', 'Zone 3'),
(55, 'Sivasamy', 'Assistant', '9865211319', 'Zone 3'),
(56, 'Nandhini Devi', 'Junior Assistant', '8883592589', 'Zone 3'),
(57, 'Meenatchi', 'Junior Assistant', '8526314751', 'Zone 3'),
(58, 'Soloman', 'Junior Assistant', '9884046741', 'Zone 3'),
(59, 'S. Santhosh', 'Junior Assistant', '6374335574', 'Zone 3'),
(60, 'S. Kaliamurthy', 'Junior Assistant', '9500409882', 'Zone 3'),
(61, 'M Srinivasan', 'Junior Assistant', '7603879300', 'Zone 3'),
(62, 'D. Sathish', 'Night Watchman', '9940225836', 'Zone 3'),
(63, 'Abdul Jamal Mannan', 'Manager (Class IV)', '9003106260', 'Zone 4'),
(64, 'K.Saravanan', 'Superintendent', '9444859559', 'Zone 4'),
(65, 'G. Raja', 'Assistant', '9840660451', 'Zone 4'),
(66, 'S.Abirameesawari', 'Assistant', '9952013435', 'Zone 4'),
(67, 'M.Vignesh', 'Assistant', '8438998689', 'Zone 4'),
(68, 'Prabu', 'Junior Assistant', '9094945957', 'Zone 4'),
(69, 'D Ravichandran', 'Junior Assistant', '9384344606', 'Zone 4'),
(70, 'Suresh', 'Record Clerk', '9629541612', 'Zone 4'),
(71, 'S. Gokulakrishnan', 'Night Watchman', '8056283711', 'Zone 4'),
(72, 'N. Vijayalakshmi', 'Manager (Class IV)', '9940525009', 'Zone 5'),
(73, 'D. Gajendran', 'Superintendent', '9841554677', 'Zone 5'),
(74, 'ANURATHA S', 'Assistant', '9841012723', 'Zone 5'),
(75, 'Nancy Rani', 'Junior Assistant', '9003336243', 'Zone 5'),
(76, 'R. Murali', 'Junior Assistant', '9698562275', 'Zone 5'),
(77, 'Annapoorani', 'Record Clerk', '9789089540', 'Zone 5'),
(78, 'Manivannan', 'Office Assistant', '9941398098', 'Zone 5');

-- --------------------------------------------------------

--
-- Table structure for table `gos_and_notifications`
--

CREATE TABLE `gos_and_notifications` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `size` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gos_and_notifications`
--

INSERT INTO `gos_and_notifications` (`id`, `date`, `details`, `size`, `link`) VALUES
(1, '20.10.2022', 'Corporation G.O. 152 Dated 20.10.2022', '2.45 MB', '../assets/downloads/gos-and-notifications/G.O.152.pdf'),
(2, '11.11.2022', 'Revision G.O  53 03.03.2022', '393KB', '../assets/downloads/gos-and-notifications/Revision-G.O.pdf'),
(3, '02.09.2020', 'COVID -19 Lockdown – Waiver of Payment of Lease Rental Amount period from 01.04.2020 to 31.05.2020 (G.O.(D) No. 298 dated 02.09.2020', '1.06 MB', '../assets/downloads/gos-and-notifications/COVID-19-Lockdown.pdf'),
(4, '31.01.2020', 'Tamilnadu Combined Development and Building Rule 2019\r\n\r\n(G.O.(Ms) No. 16 Dated 31.01.2020)', '16.2 MB', '../assets/downloads/gos-and-notifications/Tamilnadu-Combined-Development-and-Building-Rule-2019.pdf'),
(5, '17.09.2018', 'Property Tax Re-measurement of Buildings 12 half year-Mask Circular', '0.5 MB', '../assets/downloads/gos-and-notifications/Revenue.pdf'),
(6, '19.07.2018', 'Property-Tax-Revision-G.O.Ms-No. 73 & 76', '1.00 MB', '../assets/downloads/gos-and-notifications/Property-Tax-Revision-G.O.Ms-No.-73-76.pdf'),
(7, '21.05.2018', 'Professional-Tax-Revision-Circular', '0.40 MB', '../assets/downloads/gos-and-notifications/Professional-Tax-Revision-Circular.pdf'),
(8, '09.08.2017', 'Online Submission – Profession Tax & Trade License via Citizen Portal Circular', '0.18 MB', '../assets/downloads/gos-and-notifications/Online-Profession-Tax-Trade-License-Submission-in-Citizen-Portal-Circular.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `helpline`
--

CREATE TABLE `helpline` (
  `id` int(11) NOT NULL,
  `helpline` text NOT NULL,
  `icons` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `area` text DEFAULT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `helpline`
--

INSERT INTO `helpline` (`id`, `helpline`, `icons`, `address`, `area`, `phone`) VALUES
(1, 'Police Station', 'taxi.gif', 'Tambaram Police Station, West Tambaram, Chennai-45', 'West Tambaram', 22266250),
(2, 'Fire & Rescue Station', 'fire-truck.gif', 'Station Officer, Fire & Rescue Station, Tambaram,Chennai-47', 'Tambaram', 22382204),
(3, 'TNEB ', 'electricity.gif', 'TNEB, Tambaram West Section, 52, Kakkan Street, West Tambaram', 'Tambaram', 22382204),
(4, ' Police Station', 'taxi.gif', 'Selaiyur Police Station, Velachery Road, East Tambaram, Chennai-54', 'East Tamabaram', 22376003),
(5, ' Police Station', 'taxi.gif', 'Women Police Station, Abdul Razack Street, Tambaram, Chennai-45', 'Tambaram', 22264726);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `hospital` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospital`, `address`) VALUES
(1, 'Deepam Hospital', 'No. 327, Muthurangam Road, West Tambaram, Chennai - 45'),
(2, 'Hindu Mission Hospital', '39, GST Road, West Tambaram, Chennai - 45'),
(3, 'Kasthuri Hospital', '119, Shanmugam Road, West Tambaram, Chennai - 45'),
(4, 'S.K. Nursing Home', 'N0. 14, Duraiswamy Pillai Street, West Tambaram, Chennai - 45'),
(5, 'V.N.Hospital', 'No.1, Kattabomman Street, West Tambaram, Chennai - 45'),
(6, 'K.K. Eye Care Hospital', 'Gandhi Road, West Tambaram, Chennai - 45'),
(7, 'Deepam Speciality Hospital', 'No.24, M.K. Reddy Street, West Tambaram, Chennai - 45'),
(8, 'Deepam Kidney Hospital', 'GST Road, West Tambaram'),
(9, 'Dr. Agarwall’s Eye Hospital', 'M.K. Reddy Street, West Tambaram, Chennai 45'),
(10, 'N.N. Hospital', '39, Gandhi Rod,  West Tambaram, Chennai – 45.'),
(11, 'Manoj Poly clinic', 'Azhagesn Street, West Tambaram, Chennai - 45'),
(12, 'Nirmal Eye Hospital', 'Ayyasamy Street, West Tambaram, Chennai - 45'),
(13, 'Sri Jeyam Hospital', 'Ramakrishna Street,  West Tambaram, Chennai - 45'),
(14, 'N.S. Hospital', 'Venkatesan Street,  West Tambaram, Chennai - 45'),
(15, 'Rainbow Child Hospital', 'VOC Street,  West Tambaram, Chennai - 45'),
(16, 'Doctor’s Plaza', 'V.O.C. Street, West Tambaram, Chennai - 45'),
(17, 'Sundar Health Centre', '10-A, Bakthavatchalam Street, West Tambaram, Chennai – 45.'),
(18, 'Babu Maternity Hospital', '7, Duraisamy Reddy Street, West Tambaram, Chennai – 45'),
(19, 'Jawahar Hospital', 'Lurtharan Church Street, West Tambaram'),
(20, 'Chrisdudas Hospital', 'No.1, Elangovan Street, East Tambaram,Chennai - 59'),
(21, 'Bethesda Child Care Hospital', '31, Bharathy Nagar,IOB Colony, East Tambaram'),
(22, 'Cosh Hospital', 'IAF Road, East Tambaram No.9, Duraisamy Nagar, Chennai - 56'),
(23, 'Mohan Hospital (Clinic & Consultancy)', '8, VVS Iyer Street,Ganapathipuram, East Tambaram, Chennai - 59'),
(24, 'Sugam Hospital', 'Velachery Main Road, Chennai - 73'),
(25, 'Janani Nursing Home', '22,23,24, Ranganathan Nagar, Selaiyur, Chennai - 73'),
(26, 'Municipal Hospital', 'Kambar Street,East Tambaram, Chennai 59.'),
(27, 'Aravind Malar Clinic', '2, Vera Badran Street, Ganapathipuram, East Tambaram, Chennai- 59'),
(28, 'Sindhu Hospital', '203, Camp Road, Selaiyur, Chennai - 73'),
(29, 'Kumaran Nursing Home', '3A-8, Kakkan Street, West Tambaram,Chennai - 45'),
(30, 'A.G. Hospital', '29, Kakkan Street, West Tambaram, Chennai - 45'),
(31, 'Bethesda Hospital', 'Beemeswaran Koil Street, West Tambaram, Chennai - 45'),
(32, 'Mano Hospital', '1&2, Krishna Nagar, 8th Street, West Tambaram,Chennai - 45');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `hotellodge` tinyint(1) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `vegnonveg` tinyint(1) DEFAULT NULL,
  `no_of_rooms` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `address`, `hotellodge`, `phone`, `vegnonveg`, `no_of_rooms`) VALUES
(1, 'Bhats Hotel', '34, Shanmugam Road, West Tambaram,\r\nChennai-45.', 1, 22367587, 0, NULL),
(2, 'Hotel Parkway', '52, Rajaji Road,\r\nWest Tambaram, Chennai – 45.', 1, 22266023, 0, 16),
(3, 'Aruna Natraj Lodge', 'No. 9, Rajaji Road, Tambaram, Chennai-600 045.', 1, 22264966, 0, NULL),
(4, 'Hotel Vasantha Bhavan', 'G.S.T. Road,\r\nNew Post Office,\r\nTambaram West, Chennai – 45.', 0, 22264441, 0, NULL),
(5, 'Hotel Arasampatti', 'Duraisamy Reddy st.', 0, 0, 1, NULL),
(6, 'Hotel Lions India', 'MUDICHUR ROAD,TAMBARAM,CHENNAI-45', 0, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `important_contacts`
--

CREATE TABLE `important_contacts` (
  `id` int(11) NOT NULL,
  `place` text NOT NULL,
  `phone` text NOT NULL,
  `contact` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `important_contacts`
--

INSERT INTO `important_contacts` (`id`, `place`, `phone`, `contact`) VALUES
(1, 'மாவட்ட ஆட்சித் தலைவர், செங்கல்பட்டு', '27237433', NULL),
(2, 'வருவாய் கோட்ட அலுவர், செங்கல்பட்டு', '27422642', '9786986809'),
(3, 'வட்டாட்சியர், தாம்பரம்', '22382210', '9384094644'),
(4, 'அரசு பொது மருத்துவமனை, குரோம்பேட்டை', '22382400', NULL),
(5, 'நிர்வாக பொறியாளர்,தமிழ்நாடு குடிநீர் வடிகால் வாரியம்,மறைமலைநகர் பராமரிப்புக் கோட்டம்', '27452627', NULL),
(6, 'உதவிபொறியாளர், தமிழ்நாடு குடிநீர் வடிகால் வாரியம்,கடப்பேரி,  பராமரிப்பு பகுதி, சென்னை.45', '22388208', NULL),
(7, 'தீயணைப்பு நிலையம், தாம்பரம்', '22382204 ', '8072270589'),
(8, 'சார் பதிவாளர், தாம்பரம்', '22263267', NULL),
(9, 'உதவி ஆணையர், காவல் துறை, தாம்பரம்', '9498173555', NULL),
(10, 'மேற்கு, தாம்பரம் காவல் நிலையம்', '23452769', NULL),
(11, 'உதவி ஆணையர், காவல்துறை, சேலையூர்', '22397995', '9840937232'),
(12, 'சேலையூர் காவல் நிலையம்', '22396003', NULL),
(13, 'செயற் பொறியாளர் தமிழ்நாடு மின்சார வாரியம், தாம்பரம்', '22266681', '9445850227'),
(14, 'உதவி செயற் பொறியாளர் தமிழ்நாடு மின்சார வாரியம்(மே)', '22266200', '22414550'),
(15, 'உதவி பொறியாளர் தமிழ்நாடு மின்சார வாரியம்(கி)', '2290229', NULL),
(16, 'சார் பதிவாளர், பல்லாவரம்', '22413425', NULL),
(17, 'குரோம்பேட்டை காவல் நிலையம்', '23452770', NULL),
(18, 'சிட்டலப்பாக்கம் காவல் நிலையம்', '22232005', NULL),
(19, 'தமிழ்நாடு மின்சார வாரியம் குரோம்பேட்டை', '22654000', NULL),
(20, 'உதவி பொறியாளர் தமிழ்நாடு மின்சார வாரியம்(மே)', '9445850250', NULL),
(21, 'போக்குவரத்து காவல் துறை', '8754548878', NULL),
(22, 'நீர்ஆதாரத் துறை', '8778022574', '9443227382'),
(23, 'METRO/TWAD', '8939854473', NULL),
(24, 'CEO, Chengalpattu', '8220738028', NULL),
(25, 'CMO, GH Chrompet', '7358151806', NULL),
(26, 'போக்குவரத்து கழகம்', '9445030569', ''),
(27, 'தமிழ்நாடு மாசுக்கட்டுபாட்டு வாரியம்', '9994908189', '8056042178'),
(28, 'தமிழ்நாடு குடிசை மாற்று வாரியம்', '8248232765', ''),
(29, 'தமிழ்நாடு நுகர்பொருள் வணிப கழகம்', '9445000164', '');

-- --------------------------------------------------------

--
-- Table structure for table `information_technology_section`
--

CREATE TABLE `information_technology_section` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information_technology_section`
--

INSERT INTO `information_technology_section` (`id`, `name`, `designation`, `contact_no`, `zone`) VALUES
(1, 'P.Kamaraj', 'Assistant Programmer', '9944950823', 'Main office'),
(2, 'R. Kalpana Devi', 'Assistant Programmer', '9840736011', 'Main office'),
(3, 'S. Jemma Santhi', 'Data Entry Operator', '9444528887', 'Main office'),
(4, 'C. K.Padmavathy', 'Data Entry Operator', '9382123457', 'Zone 1'),
(5, 'Gomathy', 'Data Entry Operator', '9944782269', 'Zone 3'),
(6, 'Vasanthi', 'Data Entry Operator', '9444545674', 'Zone 5');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_center`
--

CREATE TABLE `knowledge_center` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `utilities` text NOT NULL,
  `amenities` text NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `knowledge_center`
--

INSERT INTO `knowledge_center` (`id`, `name`, `image`, `utilities`, `amenities`, `location`) VALUES
(1, 'Knowledge Centre at Corporation Higher Secondary School, Selaiyur', 'assets/images/knowledge-center/1.png', 'Entrance lobby, Reception with seating space, CCTV, Wifi, Smart Class Facility\r\n', 'Store room, Hand-wash, Toilets (Male & Female), Parking(2,4 wheeler) ', 'Selaiyur, East Tambaram'),
(2, 'Knowledge Center at Parali Nellaipper School', 'assets/images/knowledge-center/2.png', 'Entrance lobby, Reception with seating space, CCTV, Wifi connection.\r\n', 'Toilets (Male & Female), Parking (2 wheeler)\r\n', 'Parali Nellaipper School, Chromepet, Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `marquee`
--

CREATE TABLE `marquee` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `link` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marquee`
--

INSERT INTO `marquee` (`id`, `content`, `link`, `date`) VALUES
(1, 'Tambaram Corporation - WhatsApp Channel', 'https://www.whatsapp.com/channel/0029VaqlOACBadmejYWP7b3T', '2024-11-26'),
(2, 'Tambaram Corporation Flood Vulnerable Areas', '../assets/downloads/marquee/TCMC_vulnerable-area.pdf', '2024-11-26'),
(3, 'Tambaram Corporation Flood Relief Shelters', '../assets/downloads/marquee/TCMC_relief-shelters1.pdf', '2024-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `master_plan`
--

CREATE TABLE `master_plan` (
  `id` int(11) NOT NULL,
  `place` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_plan`
--

INSERT INTO `master_plan` (`id`, `place`, `link`) VALUES
(1, 'Tambaram', '../assets/downloads/footer/tambaram-a0-h.pdf'),
(2, 'Kadapperi', '../assets/downloads/footer/kadapperi-a1-h.pdf'),
(3, 'Selaiyur', '../assets/downloads/footer/selaiyur-a0-h.pdf'),
(4, 'Pulikoradu', '../assets/downloads/footer/pulikoradu-a1-h.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `has_submenu` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `slug`, `has_submenu`, `icon`) VALUES
(1, 'About us', '', 1, 'fa-users'),
(2, 'Information', '', 1, 'fa-info-circle '),
(3, 'Who\'s Who', 'whos-who', 0, 'fa-user-tie'),
(4, 'Departments', '', 1, 'fa-building'),
(5, 'Publications', '', 1, 'fa-book-open'),
(6, 'General Info', '', 1, 'fa-globe'),
(7, 'City Services', '', 1, 'fa-cogs'),
(8, 'Schemes', 'all-other-schemes', 0, 'fa-project-diagram'),
(9, 'Gallery', 'gallery', 0, 'fa-images');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `instagram_url` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `instagram_url`, `date`) VALUES
(1, '1.jpg', 'https://www.instagram.com/', '2025-01-06'),
(2, '2.jpg', 'https://www.instagram.com/', '2025-01-06'),
(3, '3.jpg', 'https://www.instagram.com/', '2025-01-06'),
(4, '4.jpg', 'https://www.instagram.com/', '2025-01-06'),
(5, '5.jpg', 'https://www.instagram.com/', '2025-01-06'),
(6, '6.jpg', 'https://www.instagram.com/', '2025-01-06'),
(7, '7.jpg', 'https://www.instagram.com/', '2025-01-06'),
(8, '8.jpg', 'https://www.instagram.com/', '2025-01-06'),
(9, '9.jpg', 'https://www.instagram.com/', '2025-01-06'),
(10, '10.jpg', 'https://www.instagram.com/', '2025-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `parks`
--

CREATE TABLE `parks` (
  `id` int(11) NOT NULL,
  `park` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parks`
--

INSERT INTO `parks` (`id`, `park`, `zone`) VALUES
(1, 'Sri Sankara Nagar Main Road', 'Zone I'),
(2, 'Sri Sankar Nagar 41St Street', 'Zone I'),
(3, 'VOC Nagar\r\n Sundaravadivel Street', 'Zone I'),
(4, 'Anna Nagar\r\n Elango Street', 'Zone I'),
(5, 'SBI Colony Giri Square Street', 'Zone I'),
(6, 'Sivasankaran Nagar\r\n Sigamani Street', 'Zone I'),
(7, 'Gandhi Nagar Ramanathan Street', 'Zone I'),
(8, 'James Street\r\n Arulpandian Street (Periyar Nagar)', 'Zone I'),
(9, 'Thiruvalluvar Street\r\n Thangaiah Street', 'Zone I'),
(10, 'Thirumal Nagar Old Periyapalayathamman Koil Street', 'Zone I'),
(11, 'Samundeswari Nagar Mohan Street', 'Zone I'),
(12, 'Prasanthi Nagar\r\n Bharathiyar Street', 'Zone I'),
(13, 'Viswesapuram', 'Zone I'),
(14, 'VGN Appartments', 'Zone I'),
(15, 'Chandran Nagar Park-1', 'Zone I'),
(16, 'Chandran Nagar Park-2', 'Zone I'),
(17, 'Golden Jublie Flats', 'Zone II'),
(18, 'Lakshmi Nagar Layout', 'Zone II'),
(19, 'GGN School,Naidu Shop Road', 'Zone II'),
(20, 'Perumal Nagar', 'Zone II'),
(21, 'Pallava Garden', 'Zone II'),
(22, 'Silver Jublie Layout', 'Zone II'),
(23, 'Subam Nagar P-I', 'Zone II'),
(24, 'Subam Nagar P-II', 'Zone II'),
(25, 'Subam Nagar P-III', 'Zone II'),
(26, 'Ags Nagar', 'Zone II'),
(27, 'Kasivisalatchipuram I', 'Zone II'),
(28, 'Kasivisalatchipuram II', 'Zone II'),
(29, 'Kasivisalatchipuram III', 'Zone II'),
(30, 'Arul Murugan Nagar', 'Zone II'),
(31, 'Balaji Nagar', 'Zone II'),
(32, 'Ayypaa Layout, Subbamaal Street', 'Zone II'),
(33, 'Ayypaa Layout, Subbamaal Street PARK -2', 'Zone II'),
(34, 'Arg Nagar', 'Zone II'),
(35, 'Santhi Nagar - I', 'Zone II'),
(36, 'Thiru Nagar', 'Zone II'),
(37, 'Sivagami Ammal', 'Zone II'),
(38, 'Gayathiri Nagar', 'Zone II'),
(39, 'Krishana Nagar', 'Zone II'),
(40, 'Bashiyam Nagar', 'Zone II'),
(41, 'Jain Nagar 1st Street', 'Zone II'),
(42, 'Balaji Nagar - I', 'Zone II'),
(43, 'State Bank Colony', 'Zone II'),
(44, 'Ngo Colony', 'Zone II'),
(45, 'Kurinji Nagar', 'Zone II'),
(46, 'Muthusamy Nagar', 'Zone II'),
(47, 'Kannammal Nagar', 'Zone II'),
(48, 'Saraswathi Nagar', 'Zone II'),
(49, 'Padmanaba Nagar', 'Zone II'),
(50, 'Venkatraman Street', 'Zone II'),
(51, 'Manikandan Nagar', 'Zone II'),
(52, 'Srinivasa Nagar', 'Zone II'),
(53, 'AGS Colony', 'Zone II'),
(54, 'Nethaji Nagar', 'Zone II'),
(55, 'Jothi Nagar', 'Zone III'),
(56, 'Kamaraj Nagar', 'Zone III'),
(57, 'Barath Avanue', 'Zone III'),
(58, 'Gomathi Nagar', 'Zone III'),
(59, 'Thirumuran Nagar', 'Zone III'),
(60, 'MGR Nagar', 'Zone III'),
(61, 'Kalaivanar Nagar', 'Zone III'),
(62, 'Kumar Avanue', 'Zone III'),
(63, 'Anandha Nagar', 'Zone III'),
(64, 'Kalaivanar Salai', 'Zone III'),
(65, 'Muthulakshmi Avanue', 'Zone III'),
(66, 'SBI Colony', 'Zone III'),
(67, 'Sarvamanagala Nagar', 'Zone III'),
(68, 'Ambethkar Nagar', 'Zone III'),
(69, 'Babu Street', 'Zone III'),
(70, 'Kamatchi Nagar Park', 'Zone IV'),
(71, 'Amar Nagar Park', 'Zone IV'),
(72, 'Burma Colony', 'Zone IV'),
(73, 'Pachamalai Park-1', 'Zone IV'),
(74, 'Pachamalai Park-2', 'Zone IV'),
(75, 'Rajagopal Nagar', 'Zone IV'),
(76, 'Madras Co-Operative Society Layout Park', 'Zone IV'),
(77, 'Haritha Enclave', 'Zone IV'),
(78, 'Amal Nagar Park', 'Zone IV'),
(79, 'Old SBI Colony', 'Zone IV'),
(80, 'New SBI Colony', 'Zone IV'),
(81, 'Sri Sai Nagar', 'Zone IV'),
(82, 'VGN-Kurunji Nagar Main Road-I', 'Zone IV'),
(83, 'VGN-Kurunji Nagar Main Road-II', 'Zone IV'),
(84, 'VGN-Kurunji Nagar Main Road-IV', 'Zone IV'),
(85, 'VGN-Kurunji Nagar Main Road-III', 'Zone IV'),
(86, 'VGN-Kurunji Nagar Main Road-V', 'Zone IV'),
(87, 'VGN-Kurunji Nagar Main Road-VI', 'Zone IV'),
(88, 'Krishna Nagar', 'Zone IV'),
(89, 'Muthurangam Park', 'Zone IV'),
(90, 'Metro Classic City Park -1', 'Zone IV'),
(91, 'Metro Classic City Park -2', 'Zone IV'),
(92, 'Kvt Civil Ereetor Park', 'Zone IV'),
(93, 'Park', 'Zone IV'),
(94, 'Park', 'Zone IV'),
(95, 'Park', 'Zone IV'),
(96, 'Sansu Avenue', 'Zone IV'),
(97, 'Vengateswara Nagar Layout', 'Zone IV'),
(98, 'Albin Garden', 'Zone IV'),
(99, 'Parameswara Nagar', 'Zone IV'),
(100, 'Ags Colony', 'Zone IV'),
(101, 'Jayasri Associate', 'Zone IV'),
(102, 'Sriram Nagar Layout', 'Zone IV'),
(103, 'Parvathi Nagar Pillaiyar Kovil Street', 'Zone IV'),
(104, 'Ganapathi Salai Nethaji Subash Chandrabose Park', 'Zone IV'),
(105, 'Annai Indra Nagar Park', 'Zone IV'),
(106, 'Sakthi Nagar Park', 'Zone IV'),
(107, 'Nithyananda Nagar', 'Zone IV'),
(108, 'Arul Nagar Park 1', 'Zone V'),
(109, 'Arul Nagar Park 2', 'Zone V'),
(110, 'Arul Nagar Park 4', 'Zone V'),
(111, 'Arul Nagar Park 5', 'Zone V'),
(112, 'Secretariat Colony Park -I', 'Zone V'),
(113, 'Secretariat Colony Park -II', 'Zone V'),
(114, 'Secretariat Colony Park -III', 'Zone V'),
(115, 'Yeswanth Nagar Park', 'Zone V'),
(116, 'Shiradi Sai Nagar Park', 'Zone V'),
(117, 'Sri Devi Nagar', 'Zone V'),
(118, 'Sudarson Nagar', 'Zone V'),
(119, 'Dwarakapuri Garden', 'Zone V'),
(120, 'Joy Nagar', 'Zone V'),
(121, 'Ramana Nagar Extension', 'Zone V'),
(122, 'Greater Kailash Nagar', 'Zone V'),
(123, 'Malleswari Nagar', 'Zone V'),
(124, 'Jaiwanthpuram', 'Zone V'),
(125, 'Bridavan Nagar', 'Zone V'),
(126, 'Sri Prasanthi Colony', 'Zone V'),
(127, 'Sri Thambaiya Reddy Colony', 'Zone V'),
(128, 'Radha Nagar', 'Zone V'),
(129, 'Tellus Avenue -I', 'Zone V'),
(130, 'Tellus Avenue -II', 'Zone V'),
(131, 'Bhuvaneswari Nagar', 'Zone V'),
(132, 'Isha Homes Layout', 'Zone V'),
(133, 'Bhai Garden', 'Zone V'),
(134, 'Balaji Nagar', 'Zone V'),
(135, 'A.S.K. Nagar', 'Zone V'),
(136, 'Kumarasamy Estate', 'Zone V'),
(137, 'A.L.S. Nagar', 'Zone V'),
(138, 'Shanthinekethan Park', 'Zone V'),
(139, 'Karumari Ammon Nagar Park', 'Zone V'),
(140, 'Aravind Nagar', 'Zone V'),
(141, 'Gandhi Nagar Park', 'Zone V'),
(142, 'Adithiya Nagar Park', 'Zone V'),
(143, 'Thiruvalluvar Street Park', 'Zone V'),
(144, 'Rajammal Nagar Park', 'Zone V'),
(145, 'West Mada Veedi Park', 'Zone V'),
(146, 'S.R.Colony Park', 'Zone V'),
(147, 'Sadasivam Nagar', 'Zone V'),
(148, 'Jalvayu Vihar', 'Zone V'),
(149, 'Gandhi Street Park', 'Zone V'),
(150, 'Paduvancheri Park', 'Zone V'),
(151, 'Krishna Nagar', 'Zone V'),
(152, 'Tellus Avenue II-1', 'Zone V'),
(153, 'Tellus Avenue II-2', 'Zone V'),
(154, 'Tellus Avenue-I, Abdulkalam Park', 'Zone III'),
(155, 'Tellus Avenue-I, Sarojini Park', 'Zone III'),
(156, 'Tellus Avenue I, Bharathiyar Park', 'Zone III'),
(157, 'Saraswathiy Nagar Park', 'Zone III'),
(158, 'Vgp Srinivasa Nagar (South)', 'Zone III'),
(159, 'Saravana Nagar Park', 'Zone III'),
(160, 'Thirumagal Nagar Park', 'Zone III'),
(161, 'Maruthi Nagar', 'Zone III'),
(162, 'Radhe Shyam Avenue', 'Zone III'),
(163, 'Sha Avenue Extension-I', 'Zone III'),
(164, 'Koushik Avenue', 'Zone III'),
(165, 'VGP Srinivasa Nagar (North)', 'Zone III'),
(166, 'Bhahiyam Nagar', 'Zone III'),
(167, 'VGP Pon Nagar Park-I', 'Zone III'),
(168, 'VGP Pon Nagar Park-II', 'Zone III'),
(169, 'Heritage Jeyandra Nagar', 'Zone III'),
(170, 'Pallaniappan Nagar', 'Zone III'),
(171, 'Santhanammal Nagar', 'Zone III'),
(172, 'Shanthi Nagar', 'Zone III'),
(173, 'Sivagami Nagar', 'Zone III'),
(174, 'Thirumalai Nagar', 'Zone III'),
(175, 'Thirupur Kumaran Poonga', 'Zone V'),
(176, 'Gandhi Park', 'Zone V'),
(177, 'Bharathi Poonga', 'Zone V'),
(178, 'Subbarayan Park Vinobha Nagar', 'Zone V'),
(179, 'Karpagam Nagar', 'Zone V'),
(180, 'IOB Colony', 'Zone V'),
(181, 'Natraj Colony', 'Zone V'),
(182, 'Tamil Poonga', 'Zone IV'),
(183, 'Nandanar Street', 'Zone I'),
(184, 'Rajarajan Street, Annanagar', 'Zone I'),
(185, 'Anna Nagar 8Th Cross Street & 6Th Main Road', 'Zone I'),
(186, 'Viswesapuram', 'Zone I'),
(187, 'Sri Sankar Nagar 2Nd Street', 'Zone I'),
(188, 'Lakshmi Nagar', 'Zone I'),
(189, 'Silver Jublie Flats', 'Zone II'),
(190, 'Magaeshwari Nagar', 'Zone II'),
(191, 'Gajalakshmi Nagar Cps', 'Zone II'),
(192, 'Padmanaba Nagar, Sangam Street', 'Zone III'),
(193, 'Nallappa Street', 'Zone III'),
(194, 'Ragava Nagar', 'Zone III'),
(195, 'Thiru.Vi.Ka.Nagar', 'Zone III'),
(196, 'Fathima Colony', 'Zone III'),
(197, 'Venkatraman Nagar', 'Zone III'),
(198, 'Pachamalai Cps', 'Zone IV'),
(199, 'Thiru.Vi.Ka Nagar Cps', 'Zone IV'),
(200, 'Moulana Nagar', 'Zone IV'),
(201, 'Parvathi Nagar', 'Zone IV'),
(202, 'Indira Nagar CPS', 'Zone V'),
(203, 'Srinivasa Nagar Cps', 'Zone V'),
(204, 'New Balaji Nagar Cps', 'Zone V'),
(205, 'Jagajeevan Ram Nagar', 'Zone V'),
(206, 'Selaiyur School Playground', 'Zone V'),
(207, 'Jain Housing', 'Zone I'),
(208, 'Shankar Nagar\r\n (Appasamy Housing) East Main Road, Shankar Nagar', 'Zone I'),
(209, 'Shankar Nagar(Appasamy Housing )', 'Zone I'),
(210, 'Shankar Nagar Extn (Merlin Beloni Group Ltd)', 'Zone I'),
(211, 'Radiance\r\n Pammal Main Road', 'Zone I'),
(212, 'Jain Appartments', 'Zone I'),
(213, 'Jain Appartments', 'Zone I'),
(214, 'Bhashyam Appartments', 'Zone I'),
(215, 'Chithira Layout', 'Zone II'),
(216, 'K.G.Houseing Jayanthi & Others', 'Zone II'),
(217, 'Jain Housing Darga Road', 'Zone II'),
(218, 'Balaji Medical College', 'Zone II'),
(219, 'Gst Road (Olympia Flats)', 'Zone II'),
(220, 'Alliance Business Parks Pvt Ltd', 'Zone II'),
(221, 'Mantri Hamlet Pvt Ltd', 'Zone II'),
(222, 'Mantri Hamlet Pvt Ltd', 'Zone II'),
(223, 'Raj Paris', 'Zone II'),
(224, 'Fortune Four Housing Pvt Ltd', 'Zone II'),
(225, 'Agni Pvt Ltd', 'Zone II'),
(226, 'Raj Paris', 'Zone II'),
(227, 'Saravana Store', 'Zone II'),
(228, 'Saravana Store', 'Zone II'),
(229, 'Shriram Apartment OSR-1', 'Zone IV'),
(230, 'Shriram Apartment OSR-1', 'Zone IV'),
(231, 'Marutham Apartments (Barathidasan Nagar)', 'Zone IV'),
(232, 'Service Road, Pace Builders', 'Zone IV'),
(233, 'Service Road, Pace Builders', 'Zone IV'),
(234, 'Service Road, Step Stones', 'Zone IV'),
(235, 'Visnu Nagar, Service Road', 'Zone IV'),
(236, 'Old SBI Colony, Doshi Apartment', 'Zone IV'),
(237, 'Rajmohan Nagar', 'Zone IV'),
(238, 'PTN Pace Adarsa Apartment Park-I', 'Zone V'),
(239, 'PTN Pace Adarsa Apartment Park-II', 'Zone V'),
(240, 'Jain Abhishek Apartments Park-I', 'Zone V'),
(241, 'Jain Abhishek Apartments Park-II', 'Zone V'),
(242, 'Rajparis Apartment OSR-1', 'Zone V'),
(243, 'Rajparis Apartment OSR-2', 'Zone V'),
(244, 'Rajparis Apartment OSR-3', 'Zone V');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `ward_no` int(11) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` text DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `partyname` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `ward_no`, `zone`, `name`, `designation`, `address`, `contact_no`, `email_id`, `partyname`, `image`) VALUES
(1, NULL, NULL, 'Thirumathi. K. Vasanthakumari', 'Mayor', 'No.25, Bajanai Koil Street, Kadaperi, West Tambaram, Chennai  – 600 045', '91 73055 41470', 'vasanthakumarigokul@gmail.com', NULL, 'mayor.png'),
(2, NULL, NULL, 'Thiru. G.Kamaraj', 'Deputy Mayor', '1st Pillayar Koil street, Lakshmipuram, Chrompet, Chennai-600044', '91 93810 35552', 'kamarajgtambaram@gmail.com', NULL, 'deputy-mayor.png'),
(3, NULL, NULL, 'Thiru.S.Balachander.,  I.A.S', 'Commissioner', '28, Muthurengam Street, West Tambaram, Chennai – 600 045.', '044-2226 6206', 'commr.tambaram@tn.gov.in', NULL, 'commissioner.png'),
(4, NULL, NULL, 'Tmt.S.Sasikala', 'Deputy Commissioners', '28, Muthurengam Street, West Tambaram, Chennai – 600 045.', '044-22261700', 'commr.tambaram@tn.gov.in', NULL, NULL),
(5, NULL, NULL, 'Tmt S.Shakila', 'Assistant Commissioners', 'Kamarajar Nedunchalai, Old Perungalthur, Chennai-63', '044-22261700', 'commr.tambaram@tn.gov.in', NULL, NULL),
(6, NULL, NULL, 'Tmt.B.Sornalatha', 'Assistant Commissioners', 'New Colony,Chrompet, Chennai-44', '044-22261700', 'commr.tambaram@tn.gov.in', NULL, NULL),
(7, NULL, NULL, 'Tmt.G.Rajalakshmi', 'Assistant Commissioners', 'No 1, Kalaivani street, Kamarajapuram, Rajakilpakkam, Chennai -73', '044-22261700', 'commr.tambaram@tn.gov.in', NULL, NULL),
(8, NULL, NULL, 'Thiru. Senthil Kumar Rathinam', 'Assistant Commissioners', '28, Muthurengam Street, West Tambaram, Chennai – 600 045.', '044-22261700', 'commr.tambaram@tn.gov.in', NULL, NULL),
(9, 1, 'Zone 1', 'Tmt. Kalaivani Prabu P', 'Councillor', 'No.5,Kulakkarai street, Anakaputhur', '91 94440 42114', NULL, 'D.M.K', NULL),
(10, 2, 'Zone 1', 'Thiru. Naresh Kanna R', 'Councillor', 'No.6,2nd Main Road, Balaji Nagar,Anakaputhur', '91 98403 63080', NULL, 'D.M.K', NULL),
(11, 3, 'Zone 1', 'Tmt. Vanisri M V', 'Councillor', 'No.9, Rangaiya Chetty Street, Anakaputhur', '91 98843 08481', NULL, 'D.M.K', NULL),
(12, 4, 'Zone 1', 'Tmt. Chitra T', 'Councillor', 'No.34, Bakthavatchalam Street, Anakaputhur', '91 99419 77009', NULL, 'D.M.K', NULL),
(13, 5, 'Zone 1', 'Thiru. Jeganathan V', 'Councillor', 'Plot No.A, Door No.1, Gandhi Main Road, Sankar Nagar, Pammal.', '91 98412 75549', NULL, 'A.I.A.D.M.K', NULL),
(14, 6, 'Zone 1', 'Tmt. Kalyani D', 'Councillor', 'No.12, Vedagiri Mudali Street, Pammal.', '91 98413 68368', NULL, 'D.M.K', NULL),
(15, 7, 'Zone 1', 'Thiru. Inbasekar M', 'Councillor', 'No.7, Prabakaran Street, Hindustan, Lever Colony, Pammal', '91 98407 88971', NULL, 'D.M.K', NULL),
(16, 8, 'Zone 1', 'Tmt. Ramya S', 'Councillor', 'No.30, Elumalai Street, Thiruvalluvar  Nagar, Pammal', '91 98414 15848', NULL, 'D.M.K', NULL),
(17, 9, 'Zone 2', 'Tmt. Latha S', 'Councillor', 'No.24, Yasin Khan 2nd Street, Pallavaram.', '91 97108 84089', NULL, 'D.M.K', NULL),
(18, 10, 'Zone 1', 'Tmt. Madhina Begum A', 'Councillor', 'No.8/28, Masthan Sahib Street, Nehru Nagar, Pallavaram.', '91 98406 49668', NULL, 'D.M.K', NULL),
(19, 11, 'Zone 1', 'Thiru. Karunanithi VE', 'Councillor', 'No.9, Rajivgandhi Nagar 1st Street, Nagelkeni, Chennai 600 044', '91 99403 47714', NULL, 'D.M.K', NULL),
(20, 12, 'Zone 1', 'Tmt. Sathya M', 'Councillor', 'No.12,5th Street, Adam Nagar, Nagelkeni, Chrompet, Chennai 600044', '91 98400 94328', NULL, 'D.M.K', NULL),
(21, 13, 'Zone 2', 'Tmt. Renukadevi P', 'Councillor', 'No.13, Nagarathinam Street, Kamarajar Nagar, Chrompet, Chennai 600 044,', '91 97907 30334', NULL, 'D.M.K', NULL),
(22, 14, 'Zone 2', 'Tmt. Mangaiar Thilagam R', 'Councillor', 'No.16, Sundaresan Street, Rajaji Nagar, Pallavaram, Chennai 600043', '91 77080 33916', NULL, 'D.M.K', NULL),
(23, 15, 'Zone 2', 'Thiru. Rajendran T V', 'Councillor', 'No.2, malagananathapuram 2nd Street, Zamin Pallavaram, Chennai 600 04', '91 93821 36999', NULL, 'D.M.K', NULL),
(24, 16, 'Zone 2', 'Thiru. Nedunchezhiyan S', 'Councillor', 'No.32A, Thulukkathamman Koil Street, Bharathi Nagar, Zamin Pallavaram, Chennai 600 043', '91 98414 27295', NULL, 'D.M.K', NULL),
(25, 17, 'Zone 2', 'Thiru. Joseph Annadurai I', 'Councillor', 'No.11, Thirupoorkumaran Street, Radha Nagar, Chrompet, Chennai 600 044', '91 91764 78479', NULL, 'D.M.K', NULL),
(26, 18, 'Zone 2', 'Tmt. Premalatha P', 'Councillor', 'No.1, 5th Street, Thiruvalluvar Nagar, Keelkattalai, Chennai 600 117', '91 96770 29522', NULL, 'D.M.K', NULL),
(27, 19, 'Zone 2', 'Tmt. Brindha Devi E', 'Councillor', 'No.11, Kirubanandha Variyaar Street, Keelkattalai, Pallavaram, Chennai 600 117', '91 99403 22263', NULL, 'D.M.K', NULL),
(28, 20, 'Zone 2', 'Thiru. Muthukumar C', 'Councillor', 'No.118/2, Garden Woodroff Nagar 4th Cross Street, Old Pallavaram, Chennai 600043', '91 91763 34390', NULL, 'D.M.K', NULL),
(29, 21, 'Zone 2', 'Tmt. Kalaiselvi V', 'Councillor', 'No.32/57, Ponniamman Koil Street, Old Pallavaram, Chennai – 43', '91 94443 30769', NULL, 'D.M.K', NULL),
(30, 22, 'Zone 3', 'Thiru. Krishnamurthy A', 'Councillor', 'No.7,Sriram Nagar, 1st street, Hasthinapuram, Chennai – 64', '91 98419 98480', NULL, 'INDEPENDENT', NULL),
(31, 23, 'Zone 3', 'Thiru. Kannan N', 'Councillor', 'No.30/53, Pillaiyar Koil Street, Zamin Royapettai, Chrompet, Chennai – 44', '91 98412 22283', NULL, 'INDEPENDENT', NULL),
(32, 24, 'Zone 2', 'Tmt. Geetha N', 'Councillor', 'No.15/24, Kannabiran Koil Street, Chrompet, Chennai – 44', '91 94451 01699', NULL, 'D.M.K', NULL),
(33, 25, 'Zone 3', 'Thiru. Senthilkumar R S', 'Councillor', 'No.55, Nellaiappar Street, Bharathipuram, Chrompet, Chennai-44', '91 98848 11745', NULL, 'CONGRESS', NULL),
(34, 26, 'Zone 2', 'Tmt. Bushirabanu N', 'Councillor', 'No.30, Church Road, Radha Nagar, Chrompet, Chennai -44', '91 98407 40720', NULL, 'M.D.M.K', NULL),
(35, 27, 'Zone 2', 'Tmt. Maheshwari K', 'Councillor', 'No.35, 1st Street, T.s.Lakshmanan Nagar, Chrompet, Chennai -44', '91 98413 19985', NULL, 'D.M.K', NULL),
(36, 28, 'Zone 2', 'Tmt. Vijayalakshmi G', 'Councillor', 'No.16A, Sri Durgai Flats, 6th Cross street, New Colony, Chrompet, Chennai -4', '91 94451 21297', NULL, 'INDEPENDENT', NULL),
(37, 29, 'Zone 1', 'Tmt. Shanmuga Sundari J', 'Councillor', 'No.16, Maduvappan 2nd street, Lakshmipuram, Chrompet, Chennai -44', '91 96770 26060', NULL, 'D.M.K', NULL),
(38, 30, 'Zone 3', 'Thiru. Kamaraj G', 'Councillor', 'No.100, Pillaiyar Koil 1st Street, Lakshmipuram, Chrompet, Chennai – 44', '91 93810 35552', NULL, 'D.M.K', NULL),
(39, 31, 'Zone 3', 'Tmt. Chitradevi M', 'Councillor', 'No.51/11, Sivaraj Street, Thiruneermalai, Chennai', '91 97890 60155', NULL, 'D.M.K', NULL),
(40, 32, 'Zone 4', 'Tmt. Vasanthakumari K', 'Councillor', 'No.25, Bajanai Koil Street, Kadaperi, West Tambaram,Chennai', '91 99404 06474', NULL, 'D.M.K', NULL),
(41, 33, 'Zone 4', 'Thiru. Suresh C', 'Councillor', 'No.9/17, Sithi Vinayagar Kovil Street, Tambaram, Sanatorium, Chennai', '91 94442 22803', NULL, 'D.M.K', NULL),
(42, 34, 'Zone 3', 'Tmt. Subashini P', 'Councillor', 'No.14, Ramakrishnapuram, Tambaram East, Chennai', '91 99526 84684', NULL, 'A.I.A.D.M.K', NULL),
(43, 35, 'Zone 3', 'Tmt. Sangeetha V', 'Councillor', 'No.14, Gangaiamman Koil Cross Street, Chromepet, Chennai,', '91 98841 48584', NULL, 'INDEPENDENT', NULL),
(44, 36, 'Zone 3', 'Tmt. Saraswathi C', 'Councillor', 'No.1, Narathapuri Kamala Street, N.S.K.Nagar, Chromepet, Chennai', '91 99520 10256', NULL, 'D.M.K', NULL),
(45, 37, 'Zone 3', 'Tmt. Mahalakshmi K', 'Councillor', 'No.3, Sai Illam, Sarangan Street, Nehru Nagar, Chromepet, Chennai', '91 98842 64207', NULL, 'D.M.K', NULL),
(46, 38, 'Zone 3', 'Tmt. Saranya C', 'Councillor', 'No.32, 6th Street, Vinobaji Nagar, Hasthinapuram, Chennai', '91 84389 34656', NULL, 'D.M.K', NULL),
(47, 39, 'Zone 3', 'Tmt. Girija C', 'Councillor', 'No.32, Bavanandhiar Street, Sembakkam, Chennai – 73', '91 70109 16008', NULL, 'INDEPENDENT', NULL),
(48, 40, 'Zone 3', 'Thiru. Jayapradeep C', 'Councillor', 'No.32, Bavanandhiar Street, Sembakkam, Chennai', '91 99400 74567', NULL, 'INDEPENDENT', NULL),
(49, 41, 'Zone 3', 'Tmt. Karpagam S', 'Councillor', 'No.9/3, Sangothi Amman Koil 2nd Street Cross, Sembakkam, Chennai', '91 81245 22868', NULL, 'D.M.K', NULL),
(50, 42, 'Zone 3', 'Tmt. Kalyani M', 'Councillor', 'No.12, Anna Street, Kamarajapuram, Chennai', '91 93808 75983', NULL, 'D.M.K', NULL),
(51, 43, 'Zone 3', 'Thiru. Jagan C', 'Councillor', '19, pamban swamigal salai, Chitlapakkam, Chennai', '91 98418 11550', NULL, 'D.M.K', NULL),
(52, 44, 'Zone 3', 'Thiru. Raja R', 'Councillor', '9, Thirunavukkarasu Street, Annai Indira Nagar, Chitlapakkam', '91 95141 23444', NULL, 'D.M.K', NULL),
(53, 45, 'Zone 5', 'Thiru. Dhamodharan R', 'Councillor', 'No.11. Muthalamman Koil Street, Selaiyur, Tamlnadu, Chennai', '91 98410 62046', NULL, 'D.M.K', NULL),
(54, 46, 'Zone 5', 'Tmt. Ramani A', 'Councillor', '97/10, Thiruneermalai Road, West Tambaram , Chennai', '91 94440 88220', NULL, 'D.M.K', NULL),
(55, 47, 'Zone 5', 'Thiru. Ganesan S', 'Councillor', '13/5A, Anjaneyar Koi Street, East Tambaram, Chennai', '91 9444 02874', NULL, 'A.I.A.D.M.K', NULL),
(56, 48, 'Zone 5', 'Tmt. Sasikala R', 'Councillor', 'No.112/176, T2 Suganth Tower, Bharatha Madha Street, EastTambaram, Chennai', '91 99624 16140', NULL, 'D.M.K', NULL),
(57, 49, 'Zone 4', 'Thiru. Kamaraj D', 'Councillor', '44, Bheemeswarar Koil Street, West Tambaram', '91 98409 44466', NULL, 'D.M.K', NULL),
(58, 50, 'Zone 4', 'Thiru. Yacoob M', 'Councillor', 'No.18/59, Kalyana Sundaram Street, Kasthuribai Nagar, West Tambaram, Chennai', '91 97102 17545', NULL, 'D.M.K', NULL),
(59, 51, 'Zone 4', 'Tmt. Lingeswari B', 'Councillor', '43, Bajanai Kovil Street, West Tambaram, Chennai – 60004', '91 95661 04151', NULL, 'D.M.K', NULL),
(60, 52, 'Zone 4', 'Thiru. Periyanayagam L', 'Councillor', 'No.3A, Devasagayam Nagar,Kannadapalayam, Kishkinda Road, West Tambaram, Chennai -600045', '91 98411 60270', NULL, 'INDEPENDENT', NULL),
(61, 53, 'Zone 4', 'Thiru. Gopi T R', 'Councillor', 'No.31, Pillaiyar Kovil Street, West Tambaram, Chennai – 600045', '91 73053 64969', NULL, 'D.M.K', NULL),
(62, 54, 'Zone 4', 'Thiru. Star Prabha', 'Councillor', 'No. 23/53, 2nd Street, CTO Colony, West Tambaram, Chennai – 600045', '91 93802 34619', NULL, 'A.I.A.D.M.K', NULL),
(63, 55, 'Zone 4', 'Thiru. Pugazhendhi P', 'Councillor', 'No.2/3, Rukmani Street, Manavalan Nagar, Old Perungalathur, Chennai – 600063', '91 99520 15066', NULL, 'D.M.K', NULL),
(64, 56, 'Zone 4', 'Thiru. Sekar S', 'Councillor', 'No.66, Krishna Road, new Perungalathur, Chennai – 600063', '91 93810 11715', NULL, 'D.M.K', NULL),
(65, 57, 'Zone 4', 'Tmt. Kamala S', 'Councillor', 'No. 66, Krishna Road, NewPerungalathur, Chennai- 600063', '91 99403 37629', NULL, 'D.M.K', NULL),
(66, 58, 'Zone 4', 'Tmt. Madhumitha S', 'Councillor', 'No. 3/2, Mothilal Street, New Perugalathur, Chennai – 600063', '91 98406 76389', NULL, 'D.M.K', NULL),
(67, 59, 'Zone 4', 'Tmt. Rajeswari S', 'Councillor', '12, Kalaignar High road, Srinivasa Nagar, Peerkankaranai, Chennai – 600063', '91 98407 19618', NULL, 'D.M.K', NULL),
(68, 60, 'Zone 4', 'Tmt. Geetha V', 'Councillor', 'No.9, 3rd cross street, nithyanandam nagar, Irumbuliyur, west tambaram, chennai-600045', '91 98404 98555', NULL, 'A.I.A.D.M.K', NULL),
(69, 61, 'Zone 4', 'Tmt. Hemavathi S', 'Councillor', 'No.17, Erikarai Salai, Devanesan Nagar, Peerkankaranai, Chennai', '91 98405 59044', NULL, 'INDEPENDENT', NULL),
(70, 62, 'Zone 5', 'Thiru. Indiran S', 'Councillor', 'No.40, Suddhanantha Bharathi Street, Irumbuliyur, East Tambaram, Chennai', '91 98410 30515', NULL, 'D.M.K', NULL),
(71, 63, 'Zone 5', 'Thiru. Jothikumar P', 'Councillor', '2/23, Parali Nellaiappar Street, Tambaram East, Chennai', '91 98411 74718', NULL, 'D.M.K', NULL),
(72, 64, 'Zone 5', 'Tmt. Shakila Jancy Mary', 'Councillor', '40, Muthumariamman Koil Street,  Adhi Nagar, East Tambaram, Chennai', '91 73771 23123', NULL, 'CONGRESS', NULL),
(73, 65, 'Zone 5', 'Thiru. Sankar G', 'Councillor', 'No.19, Vedhachalam Nagar,Selaiyur, Chennai', '91 98410 19472', NULL, 'A.I.A.D.M.K', NULL),
(74, 66, 'Zone 5', 'Tmt. Vanisri M V', 'Councillor', 'No.10, Parasakthi Nagar, Extension Camp Road, Sembakkam, Chennai', '91 98414 70360', NULL, 'A.I.A.D.M.K', NULL),
(75, 67, 'Zone 5', 'Thiru. Natarajan A', 'Councillor', 'No. 54, Sudharasn Street, 2nd street, Madambakkam, Chennai- 600 126', '91 98414 38242', NULL, 'D.M.K', NULL),
(76, 68, 'Zone 5', 'Tmt. Ramadevi S', 'Councillor', '14B, Rajammal Nagar, 2nd Main Road, Madambakkam, Chennai', '91 98842 22945', NULL, 'D.M.K', NULL),
(77, 69, 'Zone 5', 'Thiru. Raj K', 'Councillor', 'No-6, Secretariat Colony, Madambakkam, Pathuvanchery, Chennai', '91 93828 32067', NULL, NULL, NULL),
(78, 70, 'Zone 5', 'Thiru. Devendran M', 'Councillor', 'No.40, Jothi Nagar Main Road, Madambakkam, Chennai', '91 93811 42487', NULL, 'A.I.A.D.M.K', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pincode`
--

CREATE TABLE `pincode` (
  `id` int(11) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `zone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pincode`
--

INSERT INTO `pincode` (`id`, `pincode`, `zone`) VALUES
(1, '600044', 'ZONE 1'),
(2, '600045', 'ZONE 1'),
(3, '600070', 'ZONE 1'),
(4, '600043', 'ZONE 2'),
(5, '600044', 'ZONE 2'),
(6, '600117', 'ZONE 2'),
(7, '600044', 'ZONE 3'),
(8, '600045', 'ZONE 3'),
(9, '600047', 'ZONE 3'),
(10, '600073', 'ZONE 3'),
(11, '600045', 'ZONE 4'),
(12, '600063', 'ZONE 4'),
(13, '600045', 'ZONE 5'),
(14, '600073', 'ZONE 5');

-- --------------------------------------------------------

--
-- Table structure for table `place_of_interest`
--

CREATE TABLE `place_of_interest` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `distance` text NOT NULL,
  `place` text NOT NULL,
  `brief` text NOT NULL,
  `scroll` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `place_of_interest`
--

INSERT INTO `place_of_interest` (`id`, `image`, `distance`, `place`, `brief`, `scroll`) VALUES
(1, '1.png', '45 km', 'VGP Golden Beach', 'Experience 33 acres of luxury at VGP Golden Beach Resort—where pristine sands meet world-class amenities, cozy cottages, and thrilling amusement. Just 30 km from Chennai, it’s your perfect escape for fun, relaxation, and unforgettable memories!', 'vgp-golden-beach'),
(2, '2.png', '30 km', 'Muttukadu', 'Muttukadu, a paradise for water sports lovers, offers thrilling jet ski rides, serene boat cruises, and windsurfing lessons guided by skilled trainers at the TTDC boathouse. Beyond the waves, explore charming temples, vibrant markets, and traditional fishing hamlets.', 'muttukadu'),
(3, '3.png', '45 km', 'Kovalam', 'Kovalam Beach, near Mahabalipuram, is a tranquil haven known for its golden sands, clear waters, and picturesque views. A hotspot for water sports and relaxing getaways, it’s a perfect blend of natural beauty and coastal charm, just a stone’s throw from Chennai!', 'kovalam'),
(4, '4.png', '3 km', 'Vandalur Zoo', 'Vandalur Zoo, officially the Arignar Anna Zoological Park, is a sprawling wildlife haven near Chennai. Home to diverse species in their natural habitats, it’s perfect for nature enthusiasts and families. Explore lush landscapes, majestic animals, and an unforgettable encounter with nature!', 'vandalur-zoo'),
(5, '5.png', '45 km', 'Vendanthangal', 'Vedanthangal Bird Sanctuary, a paradise for bird lovers, is a serene haven where migratory birds from around the world gather. Just a short drive from Chennai, this lush sanctuary offers breathtaking sights and a tranquil escape into nature’s embrace.', 'vendanthangal'),
(6, '6.png', '50.2 km', 'Mahabalipuram Shore Temple', 'The Mahabalipuram Shore Temple is a stunning UNESCO World Heritage site on the Coromandel Coast near Chennai. Built in the 8th century by the Pallavas, this architectural marvel stands as a testament to ancient Dravidian craftsmanship. Overlooking the Bay of Bengal, the temple’s intricate carvings, rock-cut sculptures, and serene coastal setting make it a must-visit for history lovers and travelers seeking timeless beauty.', 'mahabalipuram-shore-temple'),
(7, '7.png', '28.2 km', 'Marina Beach', 'Marina Beach, the pride of Chennai, is India’s longest urban beach, stretching along the Bay of Bengal. Known for its golden sands, breathtaking sunrises, and lively atmosphere, it’s a favorite spot for locals and tourists alike. From iconic landmarks to street food delights, Marina Beach offers a perfect blend of relaxation and cultural vibrancy, making it an unmissable destination in the city.', 'marina-beach'),
(8, '8.png', '26.4 km', 'Kapaleeshwarar Temple', 'Kapaleeshwarar Temple, located in Mylapore, Chennai, is a magnificent Dravidian-style temple dedicated to Lord Shiva. With its towering gopuram, intricate sculptures, and rich history dating back to the 7th century, it is a spiritual and architectural gem. The temple’s vibrant festivals, serene ambiance, and cultural significance make it a must-visit for devotees and heritage enthusiasts alike.', 'kapaleeshwarar-temple'),
(9, '9.png', '26.6 km', 'Santhome Cathedral Basilica', 'Santhome Cathedral Basilica, a historic church in Chennai, stands as a symbol of faith and architectural splendor. Built over the tomb of Saint Thomas, one of Jesus twelve apostles, this neo-Gothic basilica is a sacred pilgrimage site. With its stunning white facade, stained glass windows, and peaceful ambiance, it offers visitors a glimpse into Chennai’s rich Christian heritage and colonial history.', 'santhome-cathedral-basilica'),
(10, '10.png', '26 km', 'Government Museum Chennai', 'Government Museum, Chennai, located in Egmore, is one of India\'s oldest and most renowned museums. Established in 1851, it houses an extensive collection of artifacts, including ancient sculptures, rare coins, and mesmerizing paintings. The museum’s highlight is the Bronze Gallery, featuring exquisite Chola bronzes. A treasure trove of history, art, and culture, it’s a must-visit for history enthusiasts and knowledge seekers.', 'government-museum-chennai'),
(11, '11.png', '26.8 km', 'DakshinaChitra Heritage Museum', 'DakshinaChitra Heritage Museum, located near Chennai, is a vibrant cultural village showcasing the rich heritage of South India. This living museum offers a glimpse into traditional architecture, art, and craftsmanship from Tamil Nadu, Kerala, Karnataka, and Andhra Pradesh. With its beautifully restored homes, folk performances, and interactive workshops, DakshinaChitra provides an immersive experience of South India\'s diverse traditions and lifestyles.', 'dakshinachitra-heritage-museum'),
(12, '12.png', '20.7 km', 'Guindy National Park', 'Guindy National Park, located in the heart of Chennai, is one of India\'s smallest yet most diverse national parks. Home to rich flora and fauna, including blackbucks, spotted deer, and numerous bird species, it offers a peaceful escape into nature. With its lush greenery, eco-trails, and the adjoining Children\'s Park, it’s a perfect destination for wildlife enthusiasts, families, and nature lovers.', 'guindy-national-park');

-- --------------------------------------------------------

--
-- Table structure for table `population`
--

CREATE TABLE `population` (
  `id` int(11) NOT NULL,
  `total_population` varchar(255) NOT NULL,
  `sc_population` varchar(255) NOT NULL,
  `st_population` varchar(255) NOT NULL,
  `ward_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `population`
--

INSERT INTO `population` (`id`, `total_population`, `sc_population`, `st_population`, `ward_no`) VALUES
(1, '16524', '1322', '25', '1'),
(2, '12628', '790', '18', '2'),
(3, '16984', '1182', '129', '3'),
(4, '14564', '5648', '6', '4'),
(5, '17064', '1402', '32', '5'),
(6, '17324', '2189', '16', '6'),
(7, '15124', '1095', '38', '7'),
(8, '12632', '3508', '16', '8'),
(9, '14312', '2137', '23', '9'),
(10, '21468', '3053', '38', '10'),
(11, '13676', '4109', '33', '11'),
(12, '15492', '5291', '25', '12'),
(13, '9656', '2554', '33', '13'),
(14, '13676', '2573', '25', '14'),
(15, '14516', '6771', '152', '15'),
(16, '11624', '4774', '14', '16'),
(17, '19076', '2890', '150', '17'),
(18, '11924', '1121', '55', '18'),
(19, '13340', '531', '49', '19'),
(20, '16320', '3391', '88', '20'),
(21, '15128', '3880', '37', '21'),
(22, '18192', '2042', '82', '22'),
(23, '14388', '820', '19', '23'),
(24, '16508', '881', '100', '24'),
(25, '14376', '758', '50', '25'),
(26, '13496', '811', '92', '26'),
(27, '12672', '4731', '0', '27'),
(28, '16480', '1076', '26', '28'),
(29, '11968', '439', '4', '29'),
(30, '16260', '2246', '13', '30'),
(31, '16652', '6591', '61', '31'),
(32, '7608', '3573', '0', '32'),
(33, '16068', '1682', '808', '33'),
(34, '16348', '1448', '68', '34'),
(35, '11292', '890', '11', '35'),
(36, '9808', '771', '101', '36'),
(37, '14360', '650', '172', '37'),
(38, '14540', '1026', '110', '38'),
(39, '11856', '1343', '22', '39'),
(40, '14404', '1281', '26', '40'),
(41, '15776', '1321', '21', '41'),
(42, '13644', '678', '36', '42'),
(43, '17284', '1454', '47', '43'),
(44, '15364', '1679', '179', '44'),
(45, '11572', '915', '14', '45'),
(46, '11872', '556', '522', '46'),
(47, '12552', '1223', '122', '47'),
(48, '14148', '1267', '80', '48'),
(49, '11656', '1021', '58', '49'),
(50, '16544', '1772', '33', '50'),
(51, '12224', '5438', '8', '51'),
(52, '11960', '2321', '92', '52'),
(53, '12880', '1031', '27', '53'),
(54, '8548', '663', '7', '54'),
(55, '13436', '1777', '101', '55'),
(56, '17580', '4072', '16', '56'),
(57, '15768', '2071', '231', '57'),
(58, '15456', '999', '388', '58'),
(59, '19812', '1691', '75', '59'),
(60, '15948', '3173', '37', '60'),
(61, '18196', '3024', '159', '61'),
(62, '11456', '769', '23', '62'),
(63, '13924', '2588', '52', '63'),
(64, '13916', '2855', '20', '64'),
(65, '15724', '2006', '23', '65'),
(66, '15756', '1620', '161', '66'),
(67, '12712', '1957', '24', '67'),
(68, '12580', '1750', '77', '68'),
(69, '16876', '2879', '40', '69'),
(70, '15836', '3644', '205', '70');

-- --------------------------------------------------------

--
-- Table structure for table `public_health_section`
--

CREATE TABLE `public_health_section` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `public_health_section`
--

INSERT INTO `public_health_section` (`id`, `name`, `designation`, `contact_no`, `zone`) VALUES
(1, 'Dr. S.Porchelvan', 'City Health Officer', '9840361340', 'Main office'),
(2, 'THIRU.B.RAMESH', 'Sanitary Inspector', '9841626977', 'Zone 1'),
(3, 'THIRU.R.SIVAKUMAR', 'Sanitary Officer', '9952949362', 'Zone 2'),
(4, 'THIRU. RAJA SIMAR', 'Sanitary Inspector', '8610108621', 'Zone 2'),
(5, 'THIRU. GOVINDARAJ', 'Sanitary Inspector', '9962720153', 'Zone 3'),
(6, 'THIRU.R.JANARTHANAM', 'Sanitary Officer', '9444248578', 'Zone 3'),
(7, 'THIRU.LAKSHMI GANESAN', 'Sanitary Inspector', '9840805344', 'Zone 4'),
(8, 'THIRU .R.NAGARAJAN', 'Sanitary Inspector', '9962720153', 'Zone 5'),
(9, 'Thiru.Krishnan', 'Sanitary Supervisor', '9600027125', 'Zone 1'),
(10, 'Thiru. Baskar', 'Sanitary Supervisor', '8754040495', 'Zone 2'),
(11, 'Thiru. Ravikumar', 'Sanitary Supervisor', '8754040497', 'Zone 3'),
(12, 'Thiru. Jothi', 'Sanitary Supervisor', '8754040498', 'Zone 3'),
(13, 'Thiru. Ravi', 'Sanitary Supervisor', '8056080724', 'Zone 4'),
(14, 'Thiru.Jaisankar', 'Sanitary Supervisor', NULL, 'Zone 1'),
(15, 'Thiru.Durairaj', 'Sanitary Supervisor', NULL, 'Zone 4'),
(16, 'Thiru. Gokulakrishnan', 'Sanitary Supervisor', '9840626593', 'Zone 4'),
(17, 'Thiru.Vivekanandan', 'Sanitary Supervisor', '8754040499', 'Zone 4'),
(18, 'PREMNATH A', 'Driver', '9444216649', 'Zone 1'),
(19, 'KANNAN K', 'Driver', '9381898915', 'Zone 1'),
(20, 'VENKATESAN P', 'Driver', '9940412201', 'Zone 1'),
(21, 'ELAVARASAN K', 'Driver', '9791189686', 'Zone 1'),
(22, 'N NAGARAJAN', 'Driver', '9840412468', 'Zone 1'),
(23, 'RAMESH E', 'Driver', '7010808525', 'Zone 1'),
(24, 'RAVI V', 'Driver', '9841517099', 'Zone 2'),
(25, 'GUNASEKAR R', 'Driver', '9952902264', 'Zone 2'),
(26, 'NANDHA KUMAR S', 'Driver', '8883742037', 'Zone 2'),
(27, 'ABDULKHAN U', 'Driver', NULL, 'Zone 2'),
(28, 'ARUMUGAM C', 'Driver', '9841099369', 'Zone 2'),
(29, 'SARAVANAN NR', 'Driver', '9710351830', 'Zone 2'),
(30, 'MOHAN G', 'Driver', '9710344748', 'Zone 3'),
(31, 'J SAMPATH KUMAR', 'Driver', NULL, 'Zone 4'),
(32, 'G PETER M K GURUVAIHAH', 'Driver', NULL, 'Zone 4'),
(33, 'B MURUGAN', 'Driver', NULL, 'Zone 4'),
(34, 'G KUMARESAN', 'Driver', NULL, 'Zone 4'),
(35, 'G RAMACHANDRAN', 'Driver', NULL, 'Zone 4'),
(36, 'J KARTHIKEYAN', 'Driver', NULL, 'Zone 4'),
(37, 'B MURALI RAJA', 'Driver', NULL, 'Zone 4'),
(38, 'K THANGARAJ', 'Driver', NULL, 'Zone 4'),
(39, 'J JAMES', 'Driver', NULL, 'Zone 4'),
(40, 'C V RAJAN', 'Driver', NULL, 'Zone 4'),
(41, 'KRISHNAN E', 'Driver', '9003067718', 'Zone 4'),
(42, 'K MURALI KRISHNAN', 'Driver', '8056061819', 'Zone 5'),
(43, 'J MEGANATHAN', 'Driver', '9941555551', 'Zone 5'),
(44, 'V SAMSON', 'Driver', NULL, 'Zone 5'),
(45, 'INDIRAN GANESAN', 'Driver', NULL, 'Zone 5');

-- --------------------------------------------------------

--
-- Table structure for table `quick_links`
--

CREATE TABLE `quick_links` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `filter` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quick_links`
--

INSERT INTO `quick_links` (`id`, `title`, `slug`, `filter`, `status`) VALUES
(1, 'Who\'s Who', 'whos-who', 'quick-link', 0),
(2, 'CMA', 'https://www.tnurbantree.tn.gov.in/', 'quick-link', 1),
(3, 'Contact Directory', 'contact-us', 'quick-link', 0),
(4, 'E-Governance', 'e-governance', 'quick-link', 1),
(5, 'Places of Interest', 'place-of-interest', 'place-of-interest', 1),
(6, 'How to Reach', 'how-to-reach', 'place-of-interest', 1),
(7, 'Events & Festivals', 'events-festivals', 'place-of-interest', 1),
(8, 'Tourist Information\n', 'tourist-information', 'place-of-interest', 1);

-- --------------------------------------------------------

--
-- Table structure for table `revenue_section`
--

CREATE TABLE `revenue_section` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `revenue_section`
--

INSERT INTO `revenue_section` (`id`, `name`, `designation`, `contact_no`, `zone`) VALUES
(1, 'Tiru.SenthilKumar Rethinam', 'Assistant Commissioner', '9940824564', 'Main office'),
(2, 'Thiru.Chinnakutty', 'Assistant Revenue Officer', '9445376823', 'Zone 1'),
(3, 'Salamon', 'Revenue Assistant I/C', '9884046741', 'Zone 1'),
(4, 'Salamon', 'Revenue Assistant I/C', '9884046741', 'Zone 1'),
(5, 'Sivagnana subramani', 'Revenue Assistant', '9444457013', 'Zone 1'),
(6, 'Sivagnana subramani', 'Revenue Assistant', '9444457013', 'Zone 1'),
(7, 'Sivagnana subramani', 'Revenue Assistant', '9444457013', 'Zone 1'),
(8, 'Ishak', 'Revenue Assistant I/C', '9790985507', 'Zone 1'),
(9, 'Babu', 'Revenue Assistant I/C', '9380910204', 'Zone 1'),
(10, 'Babu', 'Revenue Assistant I/C', '9380910204', 'Zone 1'),
(11, 'Ramesh', 'Revenue Assistant I/C', '7305124828', 'Zone 1'),
(12, 'Somu', 'Revenue Assistant I/C', '8248617959', 'Zone 1'),
(13, 'Prabakaran( Spl .RI)', 'Spl Revenue Inspector', '9962290961', 'Zone 1'),
(14, 'Thangam(B.C INCHARGE)', 'Revenue Assistant', '9943251723', 'Zone 1'),
(15, 'Thangam(B.C INCHARGE)', 'Revenue Assistant', '9943251723', 'Zone 1'),
(16, 'Simon (B.C INCHARGE) & Jayashankar (R.A)', 'Revenue Assistant I/C', '7550149986', 'Zone 1'),
(17, 'Thiru.Raju', 'Assistant Revenue Officer', '8608398373', 'Zone 2'),
(18, 'E.Arul Jothi', 'Revenue Assistant', '8056292230', 'Zone 2'),
(19, 'E.Arul Jothi', 'Revenue Assistant', '8056292230', 'Zone 2'),
(20, 'E.Arul Jothi', 'Revenue Assistant', '8056292230', 'Zone 2'),
(21, 'Mohan', 'Revenue Assistant I/C', NULL, 'Zone 2'),
(22, 'Mohan', 'Revenue Assistant I/C', NULL, 'Zone 2'),
(23, 'Palani', 'Revenue Assistant', '8667216292', 'Zone 2'),
(24, 'Palani', 'Revenue Assistant', '8667216292', 'Zone 2'),
(25, 'Palani', 'Revenue Assistant', '8667216292', 'Zone 2'),
(26, 'S.Sarathababu', 'Revenue Assistant', '8608158289', 'Zone 2'),
(27, 'S.Sarathababu', 'Revenue Assistant', '8608158289', 'Zone 2'),
(28, 'S.Sarathababu', 'Revenue Assistant', '8608158289', 'Zone 2'),
(29, 'M.Varalakshmi', 'Revenue Assistant', '9444926120', 'Zone 2'),
(30, 'M.Varalakshmi', 'Revenue Assistant', '9444926120', 'Zone 2'),
(31, 'M.Varalakshmi', 'Revenue Assistant', '9444926120', 'Zone 2'),
(32, 'Thiru.Devakumar', 'Assistant Revenue Officer', '9944782269', 'Zone 3'),
(33, 'Siva subramanian', 'Revenue Assistant', '9786144274', 'Zone 3'),
(34, 'Siva subramanian', 'Revenue Assistant', '9786144274', 'Zone 3'),
(35, 'Saravanan', 'Revenue Assistant I/C', NULL, 'Zone 3'),
(36, 'Banu', 'Revenue Assistant I/C', NULL, 'Zone 3'),
(37, 'Ponnuvel', 'Revenue Assistant I/C', '9840926854', 'Zone 3'),
(38, 'Om murugan', 'Revenue Assistant', '9894737641', 'Zone 3'),
(39, 'Om murugan and Manohar', 'Revenue Assistant', '9894737641', 'Zone 3'),
(40, 'Santhosh', 'Revenue Assistant I/C', '6374335574', 'Zone 3'),
(41, 'Santhosh', 'Revenue Assistant I/C', '6374335574', 'Zone 3'),
(42, 'Ramesh and Srinivasan', 'Revenue Assistant I/C', NULL, 'Zone 3'),
(43, 'Anand', 'Revenue Assistant I/C', NULL, 'Zone 3'),
(44, 'Sivasamy', 'Revenue Assistant I/C', NULL, 'Zone 3'),
(45, 'Giri', 'Revenue Assistant I/C', NULL, 'Zone 3'),
(46, 'Babu', 'Revenue Assistant I/C', NULL, 'Zone 3'),
(47, 'Thiru.Suresh', 'Assistant Revenue Officer', '9843465133', 'Zone 4'),
(48, 'Suresh', 'Revenue Assistant I/C', NULL, 'Zone 4'),
(49, 'Charles', 'Revenue Assistant', '9080961052', 'Zone 4'),
(50, 'Charles & Venkaiah', 'Revenue Assistant', '9080961052', 'Zone 4'),
(51, 'Chellappa', 'Revenue Assistant I/C', NULL, 'Zone 4'),
(52, 'Indira', 'Revenue Assistant I/C', '9840151901', 'Zone 4'),
(53, 'Lakshmipathy', 'Revenue Assistant I/C', NULL, 'Zone 4'),
(54, 'Manikandan', 'Revenue Assistant I/C', NULL, 'Zone 4'),
(55, 'Prabhu', 'Revenue Assistant I/C', NULL, 'Zone 4'),
(56, 'Rajesh', 'Revenue Assistant', '7010484892', 'Zone 4'),
(57, 'Rajesh', 'Revenue Assistant', '7010484892', 'Zone 4'),
(58, 'Rajesh', 'Revenue Assistant', '7010484892', 'Zone 4'),
(59, 'Sankaran', 'Spl Revenue Inspector', '9566162019', 'Zone 4'),
(60, 'Seenivasan', 'Revenue Assistant', '9840124767', 'Zone 4'),
(61, 'Seenivasan', 'Revenue Assistant', '9840124767', 'Zone 4'),
(62, 'Solliappan', 'Revenue Assistant I/C', NULL, 'Zone 4'),
(63, 'Thiru.Suresh', 'Assistant Revenue Officer', '9843465133', 'Zone 5'),
(64, 'Karthikeyan RA', 'Revenue Assistant I/C', NULL, 'Zone 5'),
(65, 'Vasanthy DEO', 'Revenue Assistant I/C', '9444545674', 'Zone 5'),
(66, 'Nancy/Annapoorani', 'Revenue Assistant I/C', '9003336243', 'Zone 5'),
(67, 'Vaishali', 'Revenue Assistant', '7550175570', 'Zone 5'),
(68, 'Vaishali', 'Revenue Assistant', '7550175570', 'Zone 5'),
(69, 'Gajendiran', 'Superitendant', '9841554677', 'Zone 5'),
(70, 'Gajendiran', 'Superitendant', '9841554677', 'Zone 5'),
(71, 'Narendran', 'Revenue Assistant', '9840744725', 'Zone 5'),
(72, 'Narendran', 'Revenue Assistant', '9840744725', 'Zone 5'),
(73, 'Sharath babu', 'Revenue Assistant I/C', NULL, 'Zone 5'),
(74, 'Srinivasan', 'Revenue Assistant I/C', NULL, 'Zone 5'),
(75, 'Janarthanan', 'Revenue Assistant', '9442537017', 'Zone 5');

-- --------------------------------------------------------

--
-- Table structure for table `roads`
--

CREATE TABLE `roads` (
  `id` int(11) NOT NULL,
  `roads` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roads`
--

INSERT INTO `roads` (`id`, `roads`, `length`) VALUES
(1, 'Black toping Surface', '663.24 Km'),
(2, 'Cement Concrete', '263.06 Km'),
(3, 'Paver Block', '36.97 Km'),
(4, 'WBM', '5.01 Km'),
(5, 'Footpath', '0.390 Km'),
(6, 'Earthern', '11.79 Km'),
(7, 'Total Length', '980.46 Km'),
(8, 'Total Length of Highways', '64.406 Km');

-- --------------------------------------------------------

--
-- Table structure for table `road_project`
--

CREATE TABLE `road_project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `roads` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `road_project`
--

INSERT INTO `road_project` (`id`, `name`, `package`, `roads`, `length`, `project`) VALUES
(1, 'TNSUDP 22-23', '10', '82', '19.24', '2000.00'),
(2, 'TURIP 2022-23', '7', '82', '12.621', '990.50'),
(3, 'NSMT 2022-23', '11', '118', '23.134', '989.00'),
(4, 'Total', '28', '282', '54.995', '3979.50'),
(5, 'TUIRP  2023-24', '28', '497', '78.615', '3151.20'),
(6, 'NSMT 2023-24', '36', '471', '80.125', '3192.60'),
(7, 'KNMT  2023-24', '4', '21', '2.259', '162.00'),
(8, 'Total', '68', '989', '160.999', '6505.80'),
(9, 'TUIRP  2024-25', '10', '156', '35.580', '1693.99'),
(10, 'SFC -URDF 24-25', '2', '16', '1.510', '102.00'),
(11, '15th CFC 23-24', '2', '17', '3.650', '175.00'),
(12, 'TUIRP  2024-25-2nd allotment', '13', '253', '40.460', '1973.93'),
(13, 'Total', '27', '442', '81.20', '3944.92');

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `id` int(11) NOT NULL,
  `scheme` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `year_of_completion` varchar(255) NOT NULL,
  `benefited_people` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`id`, `scheme`, `work`, `cost`, `year_of_completion`, `benefited_people`, `image`) VALUES
(1, 'National Urban Health Mission(NUHM)', 'Construction Additional Block of Primary Health Centre in PV Vaithiyalingam Hospital at Ward No.12', '25.00', '09.09.2024', '1856', ''),
(2, 'Namakku Naame Thittam (NNT)', 'Construction of RCC Slab Culvert Crossing at Pappan Cannal at Durgas Road Side in West Tambaram', '42.00', '17.09.24', '1856', ''),
(3, 'Namakku Naame Thittam  (NNT)', 'Construction of Storm Water drain and Culvert at Punithavathi Colony Main Road in ward no. 31 Sembakkam in Tambaram Corporation', '9.00', '10.06.22', '1856', ''),
(4, 'Namakku Naame Thittam (NNT)', 'Relaying of Road-009/05/070/R/5663-SADASIVA NAGAR 3RD MAIN ROAD', '20.00', '16.09.24', '1856', ''),
(5, 'Capital Grant Fund (CGF)', 'Construction of Gasifier Crematorium in Sembakkam Municipality (Site Changed to Madambakkam)', '135.00', '12.10.2023', '1253', ''),
(6, 'Capital Grant Fund (CGF)', 'CONSTRUCTION OF KNOWLEDGE AND STUDY CENTER (TYPE I) AT PARALI NELLIAPPER SCHOOL, CHROMPET WARD NO.25 (ZONE – III)', '150.00', '11.09.2023', '3525', ''),
(7, 'Capital Grant Fund (CGF)', 'Construction of Shopping Complex in Kamarajar Salai Main Road in Ward No 56 in Perungalathur', '200.00', '02.02.2024', '4231', ''),
(8, 'Capital Grant Fund (CGF)', 'Construction of LPG Gasifier Crematorium in Perungalathur Burial Ground at Ward No 56 (S. No. 288)', '250.00', '25.05.2023', '1250', ''),
(9, 'Capital Grant Fund (CGF)', 'Construction of LPG Gasifier Crematorium in Thiruneermalai Lakshmipuram Burial Ground at Ward No 30 (S. No. 386/28, Zone-I)', '250.00', '04.06.2024', '850', ''),
(10, 'Capital Grant Fund (CGF)', 'Construction of Knowledge Centre at Corporation Higher Secondary School at Selaiyur East Tambaram In Ward No. 64, Zone No V', '250.00', '26.04.2024', '4250', ''),
(11, '15th CFC-Health', 'Construction of 9 Health Center @ Tambaram City Municipal Corporation', '225.00', '05.01.2023', '125450', ''),
(12, 'SBM 2.0', 'Construction of 2nos CT in Tambaram City Municipal corporation', '54.00', '06.02.2024', '1250', ''),
(13, 'SBM 2.0', 'Construction of 4nos PT in Tambaram City Municipal corporation', '130.00', '20.11.2023', '3260', ''),
(14, 'SBM 2.0', 'Construction of 16nos Urinal in Tambaram City Municipal corporation', '22.00', '16.09.2024', '8520', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_level_bench_mark`
--

CREATE TABLE `service_level_bench_mark` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_level_bench_mark`
--

INSERT INTO `service_level_bench_mark` (`id`, `name`, `link`) VALUES
(1, 'Service Level Bench Mark 2018-2019\r\n', '../assets/downloads/service-level-bench-mark/service-level-bench-mark-2018-2019.pdf'),
(2, 'Service Level Bench Mark 2019-2020', '../assets/downloads/service-level-bench-mark/service-level-bench-mark-2019-2020.pdf'),
(3, 'Service Level Bench Mark -2020-2021', '../assets/downloads/service-level-bench-mark/service-level-bench-mark--2020-2021.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcenter`
--

CREATE TABLE `shoppingcenter` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `textilestore` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shoppingcenter`
--

INSERT INTO `shoppingcenter` (`id`, `name`, `address`, `textilestore`) VALUES
(1, 'Rajan Fancy Store', 'Shanmugam Road,\r\nTambaram', 1),
(2, 'Roja Store', 'Rajajai Road, Tambaram', 1),
(3, 'Food World', 'MK Reddy Street,Tambaram', 1),
(4, 'Sriram Cards', '13-Rajaji Road,Tambaram', 1),
(5, 'Trinethra Departmental Store', 'Rajaji Road,Tambaram', 1),
(6, 'Win To Win Departmental', 'Rajaji Road,Tambaram', 1),
(7, 'Furn City Furniture', 'Shivashanmugam Street,Tambaram', 1),
(8, 'PRR and Sons', 'MK Reddy Street,Tambaram', 1),
(9, 'Raja Store', 'Shanmugam Road,Tambaram.', 0),
(10, 'Jeans Park', 'Rajaji Road,Tambaram.', 0),
(11, 'Latha Textiles', 'Shanmugam Road,Tambaram', 0),
(12, 'Tamil Nadu Textiles', 'Shanmugam Road,Tambaram', 0),
(13, 'Kishkintha Textiles', 'Shanmugam Road,Tambaram', 0),
(14, 'Poompukar Textiles', 'Ramasamy Street,Tambaram', 0),
(15, 'Santhosh Textile', 'Velachery Road,Tambara East', 0),
(16, 'Dolphine Textile', 'Rajaji Road,Tambaram', 0),
(17, 'LNC Textile', 'Mudichur Road,Tambaram', 0);

-- --------------------------------------------------------

--
-- Table structure for table `storm_water_drains`
--

CREATE TABLE `storm_water_drains` (
  `id` int(11) NOT NULL,
  `drains` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `storm_water_drains`
--

INSERT INTO `storm_water_drains` (`id`, `drains`, `length`) VALUES
(1, 'Pucca drain with cover slab', '564.679 Km'),
(2, 'Pucca drain without cover slab', '253.000 Km'),
(3, 'Kutcha drain', '22.077 Km'),
(4, 'Total', '839.756 Km'),
(5, 'Zone 1', '147.095'),
(6, 'Zone 2', '122.616 Km'),
(7, 'Zone 3', '137.295 Km'),
(8, 'Zone 4', '240.710 Km'),
(9, 'Zone 5', '192.040 Km'),
(10, 'Total', '839.756  Km'),
(11, 'Major Drains  (Connecting to Lakes and  canal)', '62.74 Km');

-- --------------------------------------------------------

--
-- Table structure for table `street_light`
--

CREATE TABLE `street_light` (
  `id` int(11) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `conversion_led` varchar(255) NOT NULL,
  `leftout_led` varchar(255) NOT NULL,
  `existing_led` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `street_light`
--

INSERT INTO `street_light` (`id`, `zone`, `conversion_led`, `leftout_led`, `existing_led`, `total`) VALUES
(1, '1', '7,636', '602', '1,218', '9,456'),
(2, '2', '7,582', '458', '868', '8,908'),
(3, '3', '7,080', '380', '810', '8,270'),
(4, '4', '7,611', '1,098', '792', '9,501'),
(5, '5', '7,894', '1,096', '1,411', '10,401'),
(6, 'G.Total', '37,803', '3,634', '5,099', '46,536');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `submenu` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `submenu`, `slug`, `menu_id`) VALUES
(1, 'About City', 'about-city', 1),
(2, 'How to reach', 'how-to-reach', 1),
(3, 'Place of interest', 'place-of-interest', 1),
(4, 'Contact us', 'contact-us', 1),
(5, 'E-Governance', 'e-governance', 2),
(6, 'Citizen Charter', 'citizen-charter', 2),
(7, 'Officer Details', 'officer-details', 2),
(8, 'General', 'general-section', 4),
(9, 'Revenue', 'revenue-section', 4),
(10, 'Town Planning', 'town-planning-section', 4),
(11, 'Engineering', 'engineering-section', 4),
(12, 'Public Health', 'public-health-section', 4),
(13, 'Information Technology', 'information-technology-section', 4),
(14, 'Administrative Reports', 'administrative-reports', 5),
(15, 'Audited Financial Statement', 'audited-financial-statement', 5),
(16, 'Budget Details', 'budget-details', 5),
(17, 'Council Resolution', 'council-resolution', 5),
(18, 'Solid Waste Management', 'solid-waste-management', 5),
(19, 'Population', 'population', 6),
(20, 'Voters Details\r\n', 'voters-details', 6),
(21, 'Sewerage', 'sewerage', 6),
(22, 'Roads', 'roads', 6),
(23, 'Bus Stand\r\n', 'bus-stand', 6),
(24, 'Storm Water Drains\r\n', 'storm-water-drains', 6),
(25, 'Helpline', 'helpline', 7),
(26, 'Important Contacts', 'important-contacts', 7),
(27, 'Hospitals', 'hospitals', 7),
(28, 'Education Institutions', 'educational-institutions', 7),
(32, 'Knowledge Center', 'knowledge-center', 7),
(33, 'Parks', 'parks', 6),
(34, 'Street Lights', 'street-lights', 6),
(35, 'Toilets', 'toilet', 6);

-- --------------------------------------------------------

--
-- Table structure for table `swm`
--

CREATE TABLE `swm` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `swm`
--

INSERT INTO `swm` (`id`, `name`, `value`) VALUES
(1, 'Extent (Sq. Km)', '87.64'),
(2, 'Population 2011 Census', '7,23,982'),
(3, 'Present Population', '10,11,320'),
(4, 'No. of Administrative Zones', '5'),
(5, 'Wards', '70'),
(6, 'Total Length of Roads (KM)', '993.31'),
(7, 'Total Length of Drains (KM)', '749'),
(8, 'Total Households', '2,52,830'),
(9, 'Total No. of Streets', '6607'),
(10, 'Quantity of Waste Generation Per Day', '400 MT'),
(11, 'Total No. of Sanitary Workers (Outsourcing)', '1624'),
(12, 'Total No. of Sanitary Workers (ULB)', '508'),
(13, 'Total No. of LCV', '378'),
(14, 'Total No. of HCV', '53'),
(15, 'Total No. of Drivers (Outsourcing)', '431'),
(16, 'Total No. of MCC', '32'),
(17, 'Total No. of OCC', '48'),
(18, 'Total No. of Bulk Waste Generators', '354'),
(19, 'Ton Per Day', '3941');

-- --------------------------------------------------------

--
-- Table structure for table `swm_2`
--

CREATE TABLE `swm_2` (
  `id` int(11) NOT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `house_hold` varchar(255) DEFAULT NULL,
  `population` varchar(255) DEFAULT NULL,
  `existing_mcc` varchar(255) DEFAULT NULL,
  `existing_ct` varchar(255) DEFAULT NULL,
  `existing_pt` varchar(255) DEFAULT NULL,
  `existing_urinal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `swm_2`
--

INSERT INTO `swm_2` (`id`, `zone`, `house_hold`, `population`, `existing_mcc`, `existing_ct`, `existing_pt`, `existing_urinal`) VALUES
(1, 'Zone 1', '54588', '218352', '6', '9', '3', '3'),
(2, 'Zone 2', '49683', '198932', '6', '14', '2', '2'),
(3, 'Zone 3', '50408', '201632', '6', '8', '2', '3'),
(4, 'Zone 4', '53420', '213680', '8', '10', '4', '4'),
(5, 'Zone 5', '44731', '178924', '5', '8', '5', '4'),
(6, 'TOTAL', '252830', '1011320', '32', '49', '23', '16');

-- --------------------------------------------------------

--
-- Table structure for table `tnsudp`
--

CREATE TABLE `tnsudp` (
  `id` int(11) NOT NULL,
  `annexure_1` text NOT NULL,
  `annexure_1_link` text NOT NULL,
  `annexure_2` text NOT NULL,
  `annexure_2_link` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tnsudp`
--

INSERT INTO `tnsudp` (`id`, `annexure_1`, `annexure_1_link`, `annexure_2`, `annexure_2_link`, `link`) VALUES
(1, 'Tambaram Env Screening', 'assets/downloads/tnsudp/Tambaram-Env-Screening.pdf', 'TNSUDP 2020-21', 'assets/downloads/tnsudp/TNSUDP-2020-21.pdf', 'assets/downloads/tnsudp/ENVIRONMENTAL-ASSESSMENT-REPORT.pdf'),
(2, 'Tambaram Town Map', 'assets/downloads/tnsudp/Tambaram-Town-map.jpg', 'TNSUDP 2020-21 Attendence', 'assets/downloads/tnsudp/TNSUDP-2020-2021-Attendance-.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `toilet`
--

CREATE TABLE `toilet` (
  `id` int(11) NOT NULL,
  `male` varchar(255) NOT NULL,
  `female` varchar(255) NOT NULL,
  `differently_abled` varchar(255) NOT NULL,
  `child_seats` varchar(255) NOT NULL,
  `transgender_seats` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toilet`
--

INSERT INTO `toilet` (`id`, `male`, `female`, `differently_abled`, `child_seats`, `transgender_seats`, `total`, `location`, `zone`) VALUES
(1, '2', '2', '0', '0', '0', '4', 'Sbm - 2.0 Shanmugam muthali', 'Zone 1'),
(2, '5', '5', '2', '0', '2', '14', 'Anakaputhur Bus Stand', 'Zone 1'),
(3, '2', '2', '0', '0', '0', '4', 'Uyyaliamman Koil Street', 'Zone 1'),
(4, '2', '3', '1', '0', '0', '6', 'SBM 2.0 - KEELKATTALAI BUS STAND', 'Zone 2'),
(5, '3', '2', '1', '0', '0', '6', 'GST ROAD CHROMPET BUS STAND', 'Zone 2'),
(6, '2', '2', '2', '0', '0', '6', 'MIT GATE GANGAIYAMMAN KOVIL', 'Zone 3'),
(7, '2', '1', '0', '0', '0', '3', 'OFFICE CAMPUS - KAMARAJAPURAM', 'Zone 3'),
(8, '5', '5', '2', '0', '2', '14', 'SBM - 2.0 SANATORIUM BUS STAND - NEW', 'Zone 4'),
(9, '2', '2', '0', '0', '0', '4', 'Thiruvalluvar Bus Stand', 'Zone 4'),
(10, '2', '2', '0', '0', '0', '4', 'SBM - 2.0 Anna Bus Stand Front Side', 'Zone 4'),
(11, '5', '5', '2', '0', '0', '12', 'SANATORIUM BUS STAND', 'Zone 4'),
(12, '4', '4', '0', '0', '0', '8', 'ABDUL RAZZAK STREET', 'Zone 4'),
(13, '2', '2', '1', '0', '0', '5', 'Nehru Nagar', 'Zone 4'),
(14, '5', '5', '2', '0', '2', '14', 'Perungalathur Bus stand', 'Zone 4'),
(15, '2', '2', '0', '0', '0', '4', 'MUTHURANGAM PARK', 'Zone 4'),
(16, '5', '5', '2', '0', '2', '14', 'SBM - 2.0 Puthu Nagar', 'Zone 5'),
(17, '9', '9', '0', '0', '0', '18', 'Gandhi Nagar', 'Zone 5'),
(18, '0', '6', '0', '0', '0', '6', 'Vayalkarai Street', 'Zone 5'),
(19, '0', '6', '0', '0', '0', '6', 'Mamoothiyamman Koil Street', 'Zone 5');

-- --------------------------------------------------------

--
-- Table structure for table `town_planning_section`
--

CREATE TABLE `town_planning_section` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `town_planning_section`
--

INSERT INTO `town_planning_section` (`id`, `name`, `designation`, `contact_no`, `zone`) VALUES
(1, 'Thiru. G. Sivakumar', 'City Planner', '9444030586', 'Main office'),
(2, 'Thiru. R.Vigneshwar', 'Asst .Draughtsman', '9566886398', 'Zone 1'),
(3, 'Thiru. R.Vigneshwar', 'Asst .Draughtsman', '9566886398', 'Zone 2'),
(4, 'Thiru. L. Jaisankar', 'AEE (Planning)', '9443563010', 'Zone 4'),
(5, 'Thiru. M. Chellapandi', 'Town Planning Inspector', '9790593017', 'Zone 3'),
(6, 'Thiru. M. Chellapandi', 'Town Planning Inspector', '9790593017', 'Zone 5');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id` int(11) NOT NULL,
  `mode` text NOT NULL,
  `schedule` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id`, `mode`, `schedule`) VALUES
(1, 'Train', 'https://etrain.info/in'),
(2, 'Bus', 'https://www.tnstc.in/TNSTCOnline/'),
(3, 'chennai bus route', 'https://chennaicitybus.in/');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `updates` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `tags` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `updates`, `link`, `tags`) VALUES
(1, 'E-Pay\nTN Urban ePay enables online tax payments, trade licenses, and approvals for all Tamil Nadu municipalities (except Chennai) and provides Birth & Death certificates.', 'https://tnurbanepay.tn.gov.in/', 0),
(2, 'Property Tax revision (Government Order)', '../assets/downloads/updates/property-tax-go520001-1.pdf', 0),
(3, 'Tambaram Corporation Water Test Report', '../assets/downloads/updates/water-test-report.pdf', 0),
(4, 'Tambaram Corporation Bulk Waster Management', '../assets/downloads/updates/water-supply-0001.pdf', 0),
(5, 'Tambaram Corporation Flood Relief Shelters', '../assets/downloads/updates/tcmcrelief-shelters1.pdf', 1),
(6, 'Tambaram Corporation Flood Vulnerable Areas', '../assets/downloads/updates/tcmcvulnerable-area\n.pdf', 1),
(7, 'SOP for PET Registration', '../assets/downloads/updates/sop-pet-animal.pdf', 1),
(8, 'Tender notice Zone 11', '../assets/downloads/updates/tender-notice-zone-11\n.pdf', 1),
(9, 'Tambaram City Municipal Corporation Water Supply Distribution Time Table', '../assets/downloads/updates/zonel-nov.pdf', 1),
(10, 'Manual scavenging by humans has been prohibited.\n(Act - December 6, 2013)\n\nFor complaints, contact: 14420 and 1800 425 4420.', 'tel:1800 425 4420', 0),
(11, 'Tambaram City Municipal Corporation Sewage Lorry Operator Permitted Vehicles List', '../assets/downloads/updates/property-tax-go520001-1.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(4, 'Ragul', '$2y$10$Osxg6vud5AUG6nIuv3J6POJQ8ZIEm6WoAA18c6t8NKHQTbyS.AQES'),
(5, 'Vignesh', '$2y$10$g2ON9qgoXCozgWrTXoDgyuHy2X.s3wl6wlHnVeaLZwwprauc7GHrm'),
(6, 'admin', '$2y$10$TJZnbgy6niiGCx11zDy01OtbOvgB7FPo1Tgl/n/vqQfONXdsYDgMu');

-- --------------------------------------------------------

--
-- Table structure for table `voters_details`
--

CREATE TABLE `voters_details` (
  `id` int(11) NOT NULL,
  `ward_no` varchar(255) NOT NULL,
  `male` varchar(255) NOT NULL,
  `female` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voters_details`
--

INSERT INTO `voters_details` (`id`, `ward_no`, `male`, `female`, `others`, `total`) VALUES
(1, '1', '6228', '6483', '0', '12711'),
(2, '2', '4961', '4751', '1', '9713'),
(3, '3', '6447', '6615', '2', '13064'),
(4, '4', '5580', '5616', '6', '11202'),
(5, '5', '6603', '6523', '0', '13126'),
(6, '6', '6668', '6658', '1', '13327'),
(7, '7', '5865', '5770', '0', '11635'),
(8, '8', '4732', '4982', '2', '9716'),
(9, '9', '5406', '5602', '1', '11009'),
(10, '10', '8243', '8268', '2', '16513'),
(11, '11', '5290', '5229', '0', '10519'),
(12, '12', '5794', '6122', '0', '11916'),
(13, '13', '3656', '3772', '1', '7429'),
(14, '14', '5148', '5370', '1', '10519'),
(15, '15', '5449', '5717', '1', '11167'),
(16, '16', '4427', '4514', '0', '8941'),
(17, '17', '7369', '7306', '0', '14675'),
(18, '18', '4543', '4629', '0', '9172'),
(19, '19', '5286', '4973', '1', '10260'),
(20, '20', '6227', '6327', '1', '12555'),
(21, '21', '5834', '5803', '1', '11638'),
(22, '22', '7072', '6920', '3', '13995'),
(23, '23', '5510', '5559', '0', '11069'),
(24, '24', '6284', '6413', '1', '12698'),
(25, '25', '5507', '5550', '2', '11059'),
(26, '26', '5118', '5263', '2', '10383'),
(27, '27', '4765', '4983', '1', '9749'),
(28, '28', '6283', '6392', '1', '12676'),
(29, '29', '4595', '4610', '0', '9205'),
(30, '30', '6229', '6277', '1', '12507'),
(31, '31', '6324', '6481', '3', '12808'),
(32, '32', '2836', '3014', '1', '5851'),
(33, '33', '6136', '6223', '1', '12360'),
(34, '34', '6261', '6313', '0', '12574'),
(35, '35', '4238', '4447', '0', '8685'),
(36, '36', '3733', '3813', '0', '7546'),
(37, '37', '5524', '5523', '0', '11047'),
(38, '38', '5515', '5670', '1', '11186'),
(39, '39', '4573', '4548', '0', '9121'),
(40, '40', '5558', '5521', '0', '11079'),
(41, '41', '6095', '6038', '1', '12134'),
(42, '42', '5194', '5300', '0', '10494'),
(43, '43', '6726', '6569', '1', '13296'),
(44, '44', '5874', '5941', '2', '11817'),
(45, '45', '4413', '4488', '0', '8901'),
(46, '46', '4535', '4598', '0', '9133'),
(47, '47', '4717', '4938', '1', '9656'),
(48, '48', '5275', '5607', '0', '10882'),
(49, '49', '4513', '4452', '2', '8967'),
(50, '50', '6230', '6492', '4', '12726'),
(51, '51', '4582', '4822', '0', '9404'),
(52, '52', '4577', '4622', '1', '9200'),
(53, '53', '4973', '4932', '2', '9907'),
(54, '54', '3355', '3219', '0', '6574'),
(55, '55', '5257', '5077', '1', '10335'),
(56, '56', '6771', '6750', '3', '13524'),
(57, '57', '6020', '6106', '3', '12129'),
(58, '58', '5879', '6007', '2', '11888'),
(59, '59', '7660', '7578', '2', '15240'),
(60, '60', '6023', '6244', '1', '12268'),
(61, '61', '6842', '7151', '4', '13997'),
(62, '62', '4360', '4450', '2', '8812'),
(63, '63', '5203', '5508', '1', '10712'),
(64, '64', '5255', '5445', '4', '10704'),
(65, '65', '6000', '6094', '1', '12095'),
(66, '66', '6081', '6038', '2', '12121'),
(67, '67', '4949', '4824', '6', '9779'),
(68, '68', '4786', '4889', '1', '9676'),
(69, '69', '6430', '6547', '5', '12982'),
(70, '70', '6162', '6015', '4', '12181');

-- --------------------------------------------------------

--
-- Table structure for table `waste_generation`
--

CREATE TABLE `waste_generation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `waste_generation`
--

INSERT INTO `waste_generation` (`id`, `name`, `value`) VALUES
(1, 'Total Waste Generation', '400 MT'),
(2, 'Per Capita Generation', '0.395 gms'),
(3, 'Total Wet Waste Quantity', '160 MT'),
(4, 'Total Dry Waste Quantity', '240 MT'),
(5, 'Total Existing Capacity (MCC & OCC)', '130 MT'),
(6, 'Total Existing Capacity (RCC)', '20 MT'),
(7, 'Wet Waste (40%)', '160 MT'),
(8, 'Dry Waste (38%) (Combustible Waste)', '152 MT'),
(9, 'Saleable Waste (5%)', '20 MT'),
(10, 'Garden Waste (5%)', '20 MT'),
(11, 'Meat Waste (2%)', '8 MT'),
(12, 'Inert & Silt Waste (10%)', '40 MT'),
(13, 'Total (100%)', '400 MT'),
(14, 'C & D Waste (Apart from total waste 5%)', '20 MT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration_officials`
--
ALTER TABLE `administration_officials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administrativereport`
--
ALTER TABLE `administrativereport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amrut_reforms`
--
ALTER TABLE `amrut_reforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area-glance`
--
ALTER TABLE `area-glance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audited_financial_statement`
--
ALTER TABLE `audited_financial_statement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_stand`
--
ALTER TABLE `bus_stand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `by_law`
--
ALTER TABLE `by_law`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `council_resolution`
--
ALTER TABLE `council_resolution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engineering_section`
--
ALTER TABLE `engineering_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fcg`
--
ALTER TABLE `fcg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_menu`
--
ALTER TABLE `footer_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_section`
--
ALTER TABLE `general_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gos_and_notifications`
--
ALTER TABLE `gos_and_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helpline`
--
ALTER TABLE `helpline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_contacts`
--
ALTER TABLE `important_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information_technology_section`
--
ALTER TABLE `information_technology_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowledge_center`
--
ALTER TABLE `knowledge_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marquee`
--
ALTER TABLE `marquee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_plan`
--
ALTER TABLE `master_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parks`
--
ALTER TABLE `parks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pincode`
--
ALTER TABLE `pincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_of_interest`
--
ALTER TABLE `place_of_interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `population`
--
ALTER TABLE `population`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_health_section`
--
ALTER TABLE `public_health_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_links`
--
ALTER TABLE `quick_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revenue_section`
--
ALTER TABLE `revenue_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roads`
--
ALTER TABLE `roads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `road_project`
--
ALTER TABLE `road_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_level_bench_mark`
--
ALTER TABLE `service_level_bench_mark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingcenter`
--
ALTER TABLE `shoppingcenter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storm_water_drains`
--
ALTER TABLE `storm_water_drains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `street_light`
--
ALTER TABLE `street_light`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swm`
--
ALTER TABLE `swm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swm_2`
--
ALTER TABLE `swm_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tnsudp`
--
ALTER TABLE `tnsudp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toilet`
--
ALTER TABLE `toilet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `town_planning_section`
--
ALTER TABLE `town_planning_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters_details`
--
ALTER TABLE `voters_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waste_generation`
--
ALTER TABLE `waste_generation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration_officials`
--
ALTER TABLE `administration_officials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `administrativereport`
--
ALTER TABLE `administrativereport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `amrut_reforms`
--
ALTER TABLE `amrut_reforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `area-glance`
--
ALTER TABLE `area-glance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `audited_financial_statement`
--
ALTER TABLE `audited_financial_statement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bus_stand`
--
ALTER TABLE `bus_stand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `by_law`
--
ALTER TABLE `by_law`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `council_resolution`
--
ALTER TABLE `council_resolution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `engineering_section`
--
ALTER TABLE `engineering_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `fcg`
--
ALTER TABLE `fcg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footer_menu`
--
ALTER TABLE `footer_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `general_section`
--
ALTER TABLE `general_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `gos_and_notifications`
--
ALTER TABLE `gos_and_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `helpline`
--
ALTER TABLE `helpline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `important_contacts`
--
ALTER TABLE `important_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `information_technology_section`
--
ALTER TABLE `information_technology_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `knowledge_center`
--
ALTER TABLE `knowledge_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marquee`
--
ALTER TABLE `marquee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_plan`
--
ALTER TABLE `master_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parks`
--
ALTER TABLE `parks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `pincode`
--
ALTER TABLE `pincode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `place_of_interest`
--
ALTER TABLE `place_of_interest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `population`
--
ALTER TABLE `population`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `public_health_section`
--
ALTER TABLE `public_health_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `quick_links`
--
ALTER TABLE `quick_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `revenue_section`
--
ALTER TABLE `revenue_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `roads`
--
ALTER TABLE `roads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `road_project`
--
ALTER TABLE `road_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `scheme`
--
ALTER TABLE `scheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `service_level_bench_mark`
--
ALTER TABLE `service_level_bench_mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shoppingcenter`
--
ALTER TABLE `shoppingcenter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `storm_water_drains`
--
ALTER TABLE `storm_water_drains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `street_light`
--
ALTER TABLE `street_light`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `swm`
--
ALTER TABLE `swm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `swm_2`
--
ALTER TABLE `swm_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tnsudp`
--
ALTER TABLE `tnsudp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `toilet`
--
ALTER TABLE `toilet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `town_planning_section`
--
ALTER TABLE `town_planning_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `voters_details`
--
ALTER TABLE `voters_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `waste_generation`
--
ALTER TABLE `waste_generation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
