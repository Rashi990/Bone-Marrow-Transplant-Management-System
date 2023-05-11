-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

-- Generation Time: May 01, 2023 at 08:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

-- Generation Time: May 09, 2023 at 06:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bone_marrow_transplant_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `aid` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userlevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`aid`, `uid`, `username`, `password`, `userlevel`) VALUES
(1, '4', '', '0', 1),
(2, '4', 'ann', '0', 1),
(3, '5', 'shan', '0', 1),
(4, '5', 'niki', '0', 1),
(5, '4', 'ken', '0', 1),
(6, '4', 'pet', '0', 1),
(7, '4', 'go', '0', 1),
(8, '4', 'nesh', '0', 1),
(9, '4', 'his', '0', 1),
(10, '8', 'vin', '0', 1),
(11, '9', 'yo', '0', 1),
(12, '10', 'din', '0', 1),
(13, '11', 'js', 'Js112233', 1),
(14, '15', 'gg', 'Gg112233', 1),
(15, '16', 'jone', 'Jo112233', 1),
(16, '17', 'sa', 'Sa112233', 1),
(17, '', 'bb', 'Bb112233', 2),
(18, '17', 'kk', 'Kk112233', 2),
(19, '17', 'ww', 'Ww112233', 2),
(20, '17', 'hh', 'Hh112233', 2),
(21, '17', 'rr', 'Rr112233', 2),
(22, '18', 'go123', 'Go1234', 1),
(23, '17', 'rin', 'Rin123', 2),
(24, '17', 'faa', 'Fa1234', 2),
(25, '18', 'hoo', 'Hoo123', 2),
(28, '20', 'laa', 'Laa123', 2),
(29, '21', 'saaa', 'Sa1234', 2),
(30, '22', 'ooo', 'Oo1234', 2),
(32, '20', 'www', 'Ww1234', 1),
(33, '24', 'ddd', 'Dd1234', 2),
(34, '21', 'mee', 'Me1234', 1),
(35, '22', 'cc', 'Cc1234', 1),
(37, '24', 'hhh', 'Hh1234', 1),
(38, '25', 'kkk', 'Kk1234', 1),
(39, '26', 'pp', 'Pp1234', 1),
(40, '27', 'xx', 'Xx1234', 1),
(42, '29', 'gaa', 'Ga1234', 1),
(43, '30', 'qq', 'Qq1234', 1),
(45, '32', 'si', 'Si1234', 1),
(46, '33', 'kee', 'Ke1234', 1),
(47, '34', 'Rash', 'Ra1234', 1),
(48, '25', 'ishu', 'Ish1234', 2),
(49, '35', 'mali22', 'ghhhhh', 1),
(52, '26', 'desh', 'ffff', 2),
(53, '27', 'shri', 'Sh1234', 2),
(55, '29', 'nishanthi', 'Ni1234', 2),
(56, '9', 'central99', ' 112233', 3),
(57, '10', 'Nigambo12', ' Ni1234', 3),
(58, '1', 'admin', 'Ad112233\r\n', 0),
(59, '11', 'asiri22', ' As1122', 3),
(60, '11', 'matara', ' Ma1234', 3),
(61, '12', 'hhh123', ' Hh1234', 3),
(62, '13', 'ruhunu', ' Ru1234', 3),
(63, '14', 'maha33', ' Ma1234', 3),
(64, '29', 'lasanthi', 'La1234', 2),
(66, '32', 'niseka', 'Ni1234', 2),
(67, '33', 'gayesha', 'Ga1234', 2),
(68, '34', 'ishara', 'Ish123', 2),
(70, '39', 'kasun', 'Ka1234', 1),
(71, '35', 'nehara', 'Neha22', 2),
(72, '40', 'janitha', 'Ja1234', 1),

(73, '36', 'madu', 'Ma1122', 2);

(75, '38', 'madara', 'Ma1234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `telephone_no` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `apply_date` date NOT NULL,
  `status` varchar(20) DEFAULT 'Not Updated Yet',
  `remark` varchar(255) DEFAULT 'Not Updated Yet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `patient_name`, `telephone_no`, `email`, `appointment_date`, `appointment_time`, `apply_date`, `status`, `remark`) VALUES
(1, 'Pond Naravit', 773256984, 'ppnaravit@gmail.com', '2023-05-31', '10:00:00', '2023-05-08', 'Not Updated Yet', 'Not Updated Yet'),
(2, 'Phuwin Tang', 773256256, 'phuwintang@gmail.com', '2023-05-30', '11:00:00', '2023-05-09', 'Not Updated Yet', 'Not Updated Yet');


-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_reports`
--

CREATE TABLE `bloodbank_reports` (
  `report_bid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_stock`
--

CREATE TABLE `bloodbank_stock` (
  `sample_bid` int(11) NOT NULL,
  `sample_owner_id` int(255) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `stored_date` date NOT NULL,
  `time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `expiry_date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodbank_stock`
--

INSERT INTO `bloodbank_stock` (`sample_bid`, `sample_owner_id`, `hospital_id`, `stored_date`, `time`, `arrival_time`, `expiry_date`, `status`) VALUES
(1, 12, 2, '2022-12-19', '12:00:00', '02:00:00', '2022-12-26', 'Active'),
(2, 13, 2, '2022-12-12', '12:00:00', '03:00:00', '2022-12-19', 'expired');

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE `blood_bank` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`admin_id`, `email`, `user_name`, `password`) VALUES
(1, 'admin', 'admin', 'Ad112233');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `camp_id` int(11) NOT NULL,
  `camp_name` varchar(255) NOT NULL,
  `camp_date` date NOT NULL,
  `camp_time` time NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`camp_id`, `camp_name`, `camp_date`, `camp_time`, `hospital_id`) VALUES

(1, 'introduction about boan marrow ', '2023-02-09', '19:34:00', 1);

(1, 'introduction about boan marrow ', '2023-02-09', '19:34:00', 1),
(2, 'Transplant', '2023-05-02', '00:00:00', 3);


-- --------------------------------------------------------

--
-- Table structure for table `clinician`
--

CREATE TABLE `clinician` (
  `clinician_id` int(11) NOT NULL,
  `clinician_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone_no` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clinician`
--

INSERT INTO `clinician` (`clinician_id`, `clinician_name`, `email`, `telephone_no`, `address`, `username`, `password`, `hospital_id`) VALUES
(1, 'Thilini De Mel', '9898.thilini@gmail.com', '0772440643', 'No.2/61, Lady Macclums Drive, Hawaeliya, Nuwaraeliya', '', '', 1),
(2, 'Nisal', 'nis@gmail.com', '0115555448', 'Flower Road, Kandy', '', '', 2),
(3, 'Ashi', 'ash@gamil.com', '0112997222', '77/A, Galle Road, Colombo', '', '', 2),
(4, 'Dinu', 'di@gmail.com', '0112996666', '44/97, Silver Street , Matara', '', '', 1),
(6, 'Hashi', 'hashi@gmail.com', '0112467999', '55/99, Baker Street, Colombo', '', '', 1),
(7, 'Mashi', 'mashi@gmail.com', '0778866667', '55/9,Galle Road, Hikkaduwa', '', '', 1),
(8, 'Samantha', 'sam@gmail.com', '0778866111', '44/2,Mahawa Road,Galle', '', '', 2),
(9, 'Fathima', 'fa@gmail.com', '0778866000', '44/9,Matara Road, Matara', '', '', 2),
(12, 'Sanjana', 'sanj@gmail.com', '0778861111', '22/9,Galle Road, Colombo', '', '', 1),
(13, 'Sarath Silva', 'sarath@gmail.com', '0778862222', '78/5, Main Road, Jaffna', '', '', 3),
(15, 'P.Samaranayaka', 'sama@gmail.com', '0778866111', 'Main Road, Colombo', '', '', 1),
(16, 'Mashi', 'ma@gmail.com', '0778866667', 'Panideniya Road, Kandy', '', '', 1),
(17, 'mahagama', 'mahaga@gmail.com', '0778866667', '55/9,Galle Road, Hikkaduwa', '', '', 1),
(18, 'hoo', 'hoo@gmail.com', '0778866667', 'Main Road, Colombo', '', '', 1),
(20, 'laa', 'laa@gmail.com', '0778866667', 'Main Road, Colombo', '', '', 2),
(21, 'sa', 'sa@gmail.com', '0778866667', 'Main Road, Colombo', '', '', 2),
(22, 'oo', 'oo@gmail.com', '0778866667', 'Main Road, Colombo', '', '', 1),
(24, 'ddd', 'ddd@gmail.com', '0778866667', 'Main Road, Colombo', '', '', 1),
(25, 'Ishara Silva', 'ish@gmail.com', '0778866667', 'Main Road, Colombo', '', '', 1),
(26, 'Desha Kavya', 'desh@gmail.com', '0778866111', 'Main Road, Colombo', '', '', 1),
(27, 'Shriya Aseka', 'shri@gmail.com', '0778866000', 'Main Road, Colombo', '', '', 1),
(29, 'Nishanthi Gamage', 'nish@gmail.com', '0778866000', 'Panideniya Road, Kandy', '', '', 1),
(32, 'Niseka', 'nise@gmail.com', '0778866667', 'Main Road, Colombo', '', '', 14),
(33, 'Gayesha', 'Gaye@gmail.com', '0778866667', 'Main Road, Colombo', '', '', 14),
(34, 'Ishara', 'ishara@gmail.com', '0778866667', 'Main Road, Colombo', '', '', 14),
(35, 'K.G.Nehara Wijesiri', 'nehara@gmail.com', '0778866999', 'Main Road, Colombo', '', '', 13),

(36, 'H.Maduri Kumar', 'madu@gmail.com', '0778866111', 'Main Road, Colombo', '', '', 13);

(38, 'K.G.Madara ', 'mada@gmail.com', '0778866667', 'Main Road, Colombo', '', '', 13);


-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `consultant_id` int(11) NOT NULL,
  `consultant_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone_no` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` mediumblob NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`consultant_id`, `consultant_name`, `email`, `telephone_no`, `address`, `image`, `username`, `password`, `hospital_id`) VALUES
(1, 'Thilini De Mel', '9898.thilini@gmail.com', '772440643', 'No.61/2, Lady Macclums Drive, Hawaeliya, Nuwaraeliya', '', '', '', 1),
(2, 'Malsha Samadhika', 'malsha@gmail.com', '771234567', 'No.235, Kandy Road, Kegalle', '', '', '', 1),
(3, 'Rashini Lakshika', 'rash@gmail.com', '712589634', 'No.24/3, Park Road, Galle', '', '', '', 2),
(4, 'Subodhinie', 'subo@gmail.com', '759865472', 'No.33, Upper Lake Road, Colombo 07', '', '', '', 3),
(8, 'vin', 'vin@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(9, 'yo', 'yo@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(10, 'din', 'din@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(11, 'js', 'js@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(12, 'fa', 'fa@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(13, 'mas', 'mas@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(14, 'dd', 'dd@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(15, 'gg', 'gg@gmail.com', '0778866111', 'Main Road, Colombo', '', '', '', 1),
(16, 'jone', 'jo@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(17, 'sa', 'sa@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(18, 'go', 'go@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(19, 'noo', 'noo@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 2),
(20, 'ww', 'ww@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(21, 'mee', 'mee@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(22, 'cc', 'cc@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(23, 'bb', 'bb@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(24, 'hh', 'hhh@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(25, 'kk', 'kkk@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(26, 'pp', 'pp@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(27, 'xx', 'xx@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(28, 'tt', 'tt@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(29, 'gaa', 'gaa@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(30, 'qq', 'qq@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(31, 'perera', 'pee@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(32, 'silva', 'si@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(33, 'Kee Silva', 'kee@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(34, 'Rashi Herath', 'ra@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(35, 'Mali ', 'mali@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(36, 'Himaya', 'hima@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(37, 'Masha Silva', 'masha@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 1),
(39, 'Kasun Rathnayaka', 'kasun@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 14),
(40, 'G.Janitha Lakeshi', 'janitha@gmail.com', '0778866667', 'Main Road, Colombo', '', '', '', 13);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(11) NOT NULL,
  `donor_name` varchar(100) NOT NULL,
  `telephone_no` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of dirth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `id_number` text NOT NULL,
  `marital_state` varchar(10) NOT NULL,
  `image` mediumblob NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `donor_name`, `telephone_no`, `email`, `address`, `date_of dirth`, `gender`, `id_number`, `marital_state`, `image`, `blood_group`, `user_name`, `password`, `hospital_id`) VALUES
(3, 'Sarani Silva', 112467448, 'sarani@gmail.com', 'No 88/56, Main Road, Colombo', '2015-04-09', 'Female', '995510310V', 'Unmarried', '', 'O+', 'sarani', 'Sa1234', 14),
(5, 'malsha', 0, '', '', '0000-00-00', '', '', '', '', 'B+', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donor_clinical_reports`
--

CREATE TABLE `donor_clinical_reports` (
  `donor_cr_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `drug_name` varchar(255) NOT NULL,
  `dosage` int(2) NOT NULL,
  `route` varchar(255) NOT NULL,
  `frequency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor_hla_details`
--

CREATE TABLE `donor_hla_details` (
  `dh_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `hla_antigen` varchar(255) NOT NULL,
  `hla_allele_family` varchar(255) NOT NULL,
  `hla_2nd_type` varchar(255) NOT NULL,
  `hla_3rd_type` varchar(255) NOT NULL,
  `hla_4th_type` varchar(255) NOT NULL,
  `hla_5th_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor_request`
--

CREATE TABLE `donor_request` (
  `donor_request_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone_no` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date_availability` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`, `email`, `telephone_no`, `address`, `city`, `date_availability`, `username`, `password`) VALUES
(1, 'Apeksha Hospital', 'apeksha@gmail.com', '0112467448', 'New road, Maharagama', 'Maharagama', '2022/06/10', '', ''),
(2, 'Karapitiya Hospital', 'karapitiya@gmail.com', '0112992222', '66/5, Kaluwella Road, Galle', 'Galle', '2022/07/10', '', ''),
(3, 'Mahaweli Hospital', ' maha@gmail.com', '0112233444', 'Panideniya Road, Kandy', 'Kandy', '2022/06/14', '', ''),
(8, 'Kegalle Hospital', ' kegalle@gmail.com', ' 011236548', 'Main road, Kegalle', 'Kegalle', '', '', ''),
(9, 'Central Hospital', ' central@gmail.com', ' 011223377', 'Main Road, Colombo', 'Colombo', '', '', ''),
(10, 'Negambo Hospital', ' ni@gmail.com', ' 011223377', 'Panideniya Road, Kandy', 'Kandy', '', '', ''),
(11, 'Asiri Hospital', ' asiri@gmail.com', ' 011223377', 'Main Road, Colombo', 'Colombo', '', 'asiri22', 'As1122'),
(12, 'HH', ' hh@gmail.com', ' 011223377', 'Main Road, Colombo', 'Colombo', '', 'hhh123', 'Hh1234'),
(13, 'Rhunu Hospital', ' ruhunu@gmail.com', ' 011223377', 'Main Road, Colombo', 'Colombo', '', 'ruhunu', 'Ru1234'),
(14, 'Mahaweli Hospital', ' maha@gmail.com', ' 011223377', 'Main Road, Colombo', 'Colombo', '', 'maha33', 'Ma1234');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_reports`
--

CREATE TABLE `hospital_reports` (
  `report_hid` int(11) NOT NULL,
  `repo_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_stock`
--

CREATE TABLE `hospital_stock` (
  `sample_hid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,

  `departure_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

  `departure_time` time NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `match_details`
--

CREATE TABLE `match_details` (
  `match_id` int(11) NOT NULL,
  `match_date` date NOT NULL,
  `match_time` time NOT NULL,
  `match_count` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `match_requests`
--

CREATE TABLE `match_requests` (
  `match_request_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `patient_status` varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `match_requests`
--

INSERT INTO `match_requests` (`match_request_id`, `patient_id`, `hospital_id`, `patient_status`) VALUES
(1, 1, 1, 'critical');

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `match_requests`
--

INSERT INTO `match_requests` (`match_request_id`, `patient_id`, `hospital_id`, `patient_status`) VALUES
(1, 1, 1, 'critical');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone_no` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(11) NOT NULL,

  `gender` varchar(255) NOT NULL,
  `id_number` text NOT NULL,
  `marital_state` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,

  `gender` enum('Male','Female','Other') NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `NIC` text NOT NULL,
  `marital_state` enum('Married','Unmarried') NOT NULL,
  `blood_group` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `current_status` enum('Critical','Normal') NOT NULL,

  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--


INSERT INTO `patient` (`patient_id`, `patient_name`, `email`, `telephone_no`, `address`, `date_of_birth`, `age`, `gender`, `id_number`, `marital_state`, `blood_group`, `hospital_id`) VALUES
(1, 'Malki Nethusha', 'malki.12@gmail.com', 753264189, 'No.23, Hetti Vidiya, Colombo 07', '1996-11-14', 0, 'Female', '199612547893', 'Unmarried', 'B+', 1),
(2, 'Mallika Kumari', '-', 522236589, 'No.29, Malwaththa Road, Kandana', '1951-08-15', 0, 'Female', '51125878923', 'Married', 'AB-', 1),
(3, 'Kamal Jayathilake', 'kamal@gmail.com', 715236489, 'No.25, Park Road, Walimada', '1973-12-21', 0, 'Male', '197312547693', 'Married', 'O-', 2),
(4, 'Amali Bhagya', 'ama_b98@gmail.com', 752369852, 'No.63, Chapel Road, Nugegoda', '1998-06-16', 0, 'Female', '199823651492', 'Unmarried', 'A+', 2),
(5, 'Ramani Biseka', 'rama@gmail.com', 112467448, 'No 55/99, Main Road, Kandy', '2013-04-17', 0, 'Female', '996498230V', 'Married', 'AB+', 14);

INSERT INTO `patient` (`patient_id`, `patient_name`, `email`, `telephone_no`, `address`, `date_of_birth`, `age`, `gender`, `height`, `weight`, `NIC`, `marital_state`, `blood_group`, `diagnosis`, `current_status`, `hospital_id`) VALUES
(1, 'Malki Nethusha', 'malki.12@gmail.com', '753264189', 'No.23, Hetti Vidiya, Colombo 07', '1996-11-14', 0, 'Female', 0, 0, '1996125478', 'Unmarried', 'B+', '', '', 1),
(2, 'Mallika Kumari', '-', '522236589', 'No.29, Malwaththa Road, Kandana', '1951-08-15', 0, 'Female', 0, 0, '5112587892', 'Married', 'AB-', '', '', 1),
(3, 'Kamal Jayathilake', 'kamal@gmail.com', '715236489', 'No.25, Park Road, Walimada', '1973-12-21', 0, 'Male', 0, 0, '1973125476', 'Married', 'O-', '', '', 2),
(4, 'Amali Bhagya', 'ama_b98@gmail.com', '752369852', 'No.63, Chapel Road, Nugegoda', '1998-06-16', 0, 'Female', 0, 0, '1998236514', 'Unmarried', 'A+', '', '', 2),
(5, 'Ramani Biseka', 'rama@gmail.com', '112467448', 'No 55/99, Main Road, Kandy', '2013-04-17', 0, 'Female', 0, 0, '996498230V', 'Married', 'AB+', '', '', 14),
(8, '', 'shan@gmail.com', '0778866667', '55/9,Galle Road, Hikkaduwa', '0000-00-00', 57, '', 126, 78, '', '', '', 'Thalisemia', '', 13),
(10, 'S.G.Nishani', 'nisha@gmail.com', '0112467448', 'Main Road, Galle', '2013-04-17', 44, 'Female', 125, 55, '998949210V', 'Unmarried', 'AB+', 'Anemia', 'Critical', 13),
(11, '', 'fiya@gmail.com', '0778866111', 'Main Road, Colombo', '0000-00-00', 66, '', 124, 56, '', '', '', 'Blood Cancer', '', 13),
(12, '', 'banu@gmail.com', '0778855555', 'Main Road, Colombo', '0000-00-00', 76, '', 139, 34, '', '', '', 'Thalisemia', '', 13),
(13, '', 'ja@gmail.com', '0778855555', '55/9,Galle Road, Hikkaduwa', '0000-00-00', 70, '', 150, 67, '', '', '', 'Thalisemia', '', 13),
(14, '', 'hani@gmail.com', '0778866000', 'Panideniya Road, Kandy', '0000-00-00', 56, '', 56, 78, '', '', '', 'Blood Cancer', '', 13),
(17, 'Nehara silva', 'neha@gmail.com', '0778866667', '55/9,Galle Road, Hikkaduwa', '0000-00-00', 34, '', 110, 45, '', '', '', 'Thalisemia', '', 13),
(18, 'Ashi Dileka', 'ashi@gmail.com', '0778866667', 'no.23,Galle', '2004-12-27', 76, '', 134, 56, '996719720V', '', '', 'Thalisemia', 'Critical', 13),
(19, 'Akash Weerasiri', 'akash@gmail.com', '0778866111', 'Panideniya Road, Kandy', '2003-01-29', 66, 'Male', 150, 78, '996719820V', 'Married', 'AB-', 'Thalisemia', 'Critical', 13),
(20, 'Ashadi Silva', 'asha@gmail.com', '0778866667', 'Main Road, Colombo', '2023-05-09', 66, 'Male', 120, 57, '996719820V', 'Married', 'A+', 'Anemia', 'Critical', 13),
(21, 'Gihan Dias', 'giha@gmail.com', '0778866000', 'no.23,Galle', '2015-03-18', 100, 'Male', 120, 57, '996719821V', 'Married', 'A+', 'Thalisemia', 'Critical', 13),
(22, 'Waruna Zoysa', 'waru@gmail.com', '0778866667', '55/9,Galle Road, Hikkaduwa', '2008-01-30', 15, 'Male', 136, 66, '996719827V', 'Married', 'A+', 'Anemia', 'Critical', 13),
(23, 'Geetha ', 'gee@gmail.com', '0778855555', 'Main Road, Colombo', '2014-01-09', 9, 'Female', 139, 58, '996719820V', 'Unmarried', 'B+', 'Thalisemia', 'Normal', 13);


-- --------------------------------------------------------

--
-- Table structure for table `patient_clinical_reports`
--

CREATE TABLE `patient_clinical_reports` (
  `patient_cr_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `drug_name` varchar(255) NOT NULL,
  `dosage` int(11) NOT NULL,
  `route` varchar(255) NOT NULL,
  `frequency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_clinical_reports`
--

INSERT INTO `patient_clinical_reports` (`patient_cr_id`, `patient_id`, `date`, `drug_name`, `dosage`, `route`, `frequency`) VALUES
(12, 3, '2022-01-21', 'Amoxapine', 12, 'two times a day', '6 days'),
(13, 4, '2022-02-14', 'Aspirin', 9, 'three times a day', '3 days'),
(15, 1, '2022-05-12', 'Dexamethasone', 14, 'two times a day', '1 week'),
(16, 4, '2022-03-09', 'Aspirin', 19, 'three times a day', '1 week'),
(18, 3, '2022-10-10', 'Dexamethasone', 11, 'three times a day', '1 week');

-- --------------------------------------------------------

--
-- Table structure for table `patient_hla_details`
--

CREATE TABLE `patient_hla_details` (
  `ph_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,

  `hla_antigen` varchar(255) NOT NULL,
  `hla_allele_family` varchar(255) NOT NULL,
  `hla_2nd_type` varchar(255) NOT NULL,
  `hla_3rd_type` varchar(255) NOT NULL,
  `hla_4th_type` varchar(255) NOT NULL,
  `hla_5th_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

  `HLA-A_allele_group` varchar(11) NOT NULL,
  `HLA-A_protein` varchar(11) NOT NULL,
  `HLA-A_syn_exons` varchar(11) NOT NULL,
  `HLA-A_syn_introns` varchar(11) NOT NULL,
  `HLA-A_ex_level` varchar(11) NOT NULL,
  `HLA-B_allele_group` varchar(11) NOT NULL,
  `HLA-B_protein` varchar(11) NOT NULL,
  `HLA-B_syn_exons` varchar(11) NOT NULL,
  `HLA-B_syn_introns` varchar(11) NOT NULL,
  `HLA-B_ex_level` varchar(11) NOT NULL,
  `HLA-C_allele_group` varchar(11) NOT NULL,
  `HLA-C_protein` varchar(11) NOT NULL,
  `HLA-C_syn_exons` varchar(11) NOT NULL,
  `HLA-C_syn_introns` varchar(11) NOT NULL,
  `HLA-C_ex_level` varchar(11) NOT NULL,
  `HLA-DRB1_allele_group` varchar(11) NOT NULL,
  `HLA-DRB1_protein` varchar(11) NOT NULL,
  `HLA-DRB1_syn_exons` varchar(11) NOT NULL,
  `HLA-DRB1_syn_introns` varchar(11) NOT NULL,
  `HLA-DRB1_ex_level` varchar(11) NOT NULL,
  `HLA-DRB3,4,5_allele_group` varchar(11) NOT NULL,
  `HLA-DRB3,4,5_protein` varchar(11) NOT NULL,
  `HLA-DRB3,4,5_syn_exons` varchar(11) NOT NULL,
  `HLA-DRB3,4,5_syn_introns` varchar(11) NOT NULL,
  `HLA-DRB3,4,5_ex_level` varchar(11) NOT NULL,
  `HLA-DQB1_allele_group` varchar(11) NOT NULL,
  `HLA-DQB1_protein` varchar(11) NOT NULL,
  `HLA-DQB1_syn_exons` varchar(11) NOT NULL,
  `HLA-DQB1_syn_introns` varchar(11) NOT NULL,
  `HLA-DQB1_ex_level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `patient_hla_details`
--

INSERT INTO `patient_hla_details` (`ph_id`, `patient_id`, `HLA-A_allele_group`, `HLA-A_protein`, `HLA-A_syn_exons`, `HLA-A_syn_introns`, `HLA-A_ex_level`, `HLA-B_allele_group`, `HLA-B_protein`, `HLA-B_syn_exons`, `HLA-B_syn_introns`, `HLA-B_ex_level`, `HLA-C_allele_group`, `HLA-C_protein`, `HLA-C_syn_exons`, `HLA-C_syn_introns`, `HLA-C_ex_level`, `HLA-DRB1_allele_group`, `HLA-DRB1_protein`, `HLA-DRB1_syn_exons`, `HLA-DRB1_syn_introns`, `HLA-DRB1_ex_level`, `HLA-DRB3,4,5_allele_group`, `HLA-DRB3,4,5_protein`, `HLA-DRB3,4,5_syn_exons`, `HLA-DRB3,4,5_syn_introns`, `HLA-DRB3,4,5_ex_level`, `HLA-DQB1_allele_group`, `HLA-DQB1_protein`, `HLA-DQB1_syn_exons`, `HLA-DQB1_syn_introns`, `HLA-DQB1_ex_level`) VALUES
(1, 1, '0', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 2, '0', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient_hla_summary`
--

CREATE TABLE `patient_hla_summary` (
  `phs_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `HLA-A` varchar(11) NOT NULL,
  `HLA-B` varchar(11) NOT NULL,
  `HLA-C` varchar(11) NOT NULL,
  `HLA-DRB1` varchar(11) NOT NULL,
  `HLA-DRB3,4,5` varchar(11) NOT NULL,
  `HLA-DQB1` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pending_donor`
--

CREATE TABLE `pending_donor` (
  `pending_donor_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `second_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone_no` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `id_number` int(12) NOT NULL,
  `marital_state` varchar(255) NOT NULL,
  `image` mediumblob NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `request_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending_donor`
--

INSERT INTO `pending_donor` (`pending_donor_id`, `first_name`, `second_name`, `email`, `telephone_no`, `address`, `city`, `district`, `date_of_birth`, `gender`, `id_number`, `marital_state`, `image`, `blood_group`, `user_name`, `password`, `status`, `request_date`) VALUES
(1, 'Kamal', 'Vithanage', 'kmv12@gmail.com', 912563845, 'No.25,Main Road,Galle', 'Nagoda', 'Galle', '1988-05-12', 'Male', 2147483647, 'Married', '', '', '', '', 'Qualified\r\n', NULL),
(2, 'Nimal', 'Hewage', 'ni@gmail.com', 112233777, 'Main Road, Colombo', 'Colombo', 'Colombo', '2022-11-30', 'Male', 2147483647, 'Married', '', '', '', '', 'Disqualified\r\n', NULL),
(3, 'Kaveesha', 'Perarra', 'kw@gmail.com', 912275845, 'no.23,Galle', 'Galle', 'Galle', '1999-02-15', 'Male', 2147483647, 'Unmarried', '', '', '', '', 'Qualified\r\n', NULL),
(4, 'Dashi', 'Hewage', 'das@gmail.com', 112233777, 'Main Road, Colombo', 'Colombo', 'Colombo', '2022-10-12', 'Male', 996518540, 'Married', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `session_name` varchar(100) NOT NULL,
  `session_image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `camp_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `test_id` int(11) NOT NULL,
  `test_date` date NOT NULL,
  `test_time` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `transplant_details`
--

CREATE TABLE `transplant_details` (
  `transplant_id` int(11) NOT NULL,
  `transplant_request_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` date NOT NULL,
  `succeed_rate` varchar(100) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transplant_request`
--

CREATE TABLE `transplant_request` (
  `transplant_request_id` int(11) NOT NULL,
  `transplant_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(10) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `bloodbank_reports`
--
ALTER TABLE `bloodbank_reports`
  ADD PRIMARY KEY (`report_bid`);

--
-- Indexes for table `bloodbank_stock`
--
ALTER TABLE `bloodbank_stock`
  ADD PRIMARY KEY (`sample_bid`);

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`camp_id`),
  ADD KEY `camp_venue` (`hospital_id`);

--
-- Indexes for table `clinician`
--
ALTER TABLE `clinician`
  ADD PRIMARY KEY (`clinician_id`),
  ADD KEY `Test` (`hospital_id`);

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`consultant_id`),
  ADD KEY `Test1` (`hospital_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`),
  ADD KEY `for` (`hospital_id`);

--
-- Indexes for table `donor_clinical_reports`
--
ALTER TABLE `donor_clinical_reports`
  ADD PRIMARY KEY (`donor_cr_id`);

--
-- Indexes for table `donor_hla_details`
--
ALTER TABLE `donor_hla_details`
  ADD PRIMARY KEY (`dh_id`),
  ADD KEY `test4` (`donor_id`);

--
-- Indexes for table `donor_request`
--
ALTER TABLE `donor_request`
  ADD KEY `Testing` (`donor_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `hospital_reports`
--
ALTER TABLE `hospital_reports`
  ADD PRIMARY KEY (`report_hid`),
  ADD KEY `Test2` (`hospital_id`);

--
-- Indexes for table `hospital_stock`
--
ALTER TABLE `hospital_stock`
  ADD PRIMARY KEY (`sample_hid`),
  ADD KEY `stock-test1` (`hospital_id`);

--
-- Indexes for table `match_details`
--
ALTER TABLE `match_details`
  ADD PRIMARY KEY (`match_id`),
  ADD KEY `f1` (`donor_id`),
  ADD KEY `f2` (`patient_id`),
  ADD KEY `f3` (`hospital_id`);

--
-- Indexes for table `match_requests`
--
ALTER TABLE `match_requests`
  ADD PRIMARY KEY (`match_request_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `hospital` (`hospital_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `Test3` (`hospital_id`);

--
-- Indexes for table `patient_clinical_reports`
--
ALTER TABLE `patient_clinical_reports`
  ADD PRIMARY KEY (`patient_cr_id`);

--
-- Indexes for table `patient_hla_details`
--
ALTER TABLE `patient_hla_details`
  ADD PRIMARY KEY (`ph_id`),
  ADD KEY `test5` (`patient_id`);

--
-- Indexes for table `patient_hla_summary`
--
ALTER TABLE `patient_hla_summary`
  ADD PRIMARY KEY (`phs_id`),
  ADD KEY `phs` (`patient_id`);

--
-- Indexes for table `pending_donor`
--
ALTER TABLE `pending_donor`
  ADD PRIMARY KEY (`pending_donor_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `camp_data` (`camp_id`),
  ADD KEY `hospital_id` (`hospital_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `donor` (`donor_id`),
  ADD KEY `hos` (`hospital_id`);

--
-- Indexes for table `transplant_details`
--
ALTER TABLE `transplant_details`
  ADD PRIMARY KEY (`transplant_id`);

--
-- Indexes for table `transplant_request`
--
ALTER TABLE `transplant_request`
  ADD PRIMARY KEY (`transplant_request_id`),
  ADD KEY `tr1` (`donor_id`),
  ADD KEY `tr2` (`patient_id`),
  ADD KEY `tr3` (`hospital_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`

  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


--
-- AUTO_INCREMENT for table `bloodbank_reports`
--
ALTER TABLE `bloodbank_reports`
  MODIFY `report_bid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bloodbank_stock`
--
ALTER TABLE `bloodbank_stock`
  MODIFY `sample_bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blood_bank`
--
ALTER TABLE `blood_bank`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `camp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clinician`
--
ALTER TABLE `clinician`

  MODIFY `clinician_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

  MODIFY `clinician_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;


--
-- AUTO_INCREMENT for table `consultant`
--
ALTER TABLE `consultant`

  MODIFY `consultant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

  MODIFY `consultant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;


--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`

  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


--
-- AUTO_INCREMENT for table `donor_clinical_reports`
--
ALTER TABLE `donor_clinical_reports`
  MODIFY `donor_cr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor_hla_details`
--
ALTER TABLE `donor_hla_details`
  MODIFY `dh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hospital_reports`
--
ALTER TABLE `hospital_reports`
  MODIFY `report_hid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital_stock`
--
ALTER TABLE `hospital_stock`
  MODIFY `sample_hid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `match_details`
--
ALTER TABLE `match_details`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `match_requests`
--
ALTER TABLE `match_requests`
  MODIFY `match_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `patient_clinical_reports`
--
ALTER TABLE `patient_clinical_reports`
  MODIFY `patient_cr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `patient_hla_details`
--
ALTER TABLE `patient_hla_details`
  MODIFY `ph_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_hla_summary`
--
ALTER TABLE `patient_hla_summary`
  MODIFY `phs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending_donor`
--
ALTER TABLE `pending_donor`
  MODIFY `pending_donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transplant_details`
--
ALTER TABLE `transplant_details`
  MODIFY `transplant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transplant_request`
--
ALTER TABLE `transplant_request`
  MODIFY `transplant_request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaign`
--
ALTER TABLE `campaign`
  ADD CONSTRAINT `camp_venue` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clinician`
--
ALTER TABLE `clinician`
  ADD CONSTRAINT `Test` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`);

--
-- Constraints for table `consultant`
--
ALTER TABLE `consultant`
  ADD CONSTRAINT `Test1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `for` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donor_hla_details`
--
ALTER TABLE `donor_hla_details`
  ADD CONSTRAINT `test4` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donor_request`
--
ALTER TABLE `donor_request`
  ADD CONSTRAINT `Testing` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hospital_reports`
--
ALTER TABLE `hospital_reports`
  ADD CONSTRAINT `Test2` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hospital_stock`
--
ALTER TABLE `hospital_stock`
  ADD CONSTRAINT `stock-test1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `match_details`
--
ALTER TABLE `match_details`
  ADD CONSTRAINT `f3` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `match_requests`
--
ALTER TABLE `match_requests`
  ADD CONSTRAINT `hospital` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `Test3` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`);

--
-- Constraints for table `patient_hla_details`
--
ALTER TABLE `patient_hla_details`
  ADD CONSTRAINT `test5` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_hla_summary`
--
ALTER TABLE `patient_hla_summary`
  ADD CONSTRAINT `phs` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `hospital_id` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testing`
--
ALTER TABLE `testing`
  ADD CONSTRAINT `donor` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hos` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transplant_request`
--
ALTER TABLE `transplant_request`
  ADD CONSTRAINT `tr3` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
