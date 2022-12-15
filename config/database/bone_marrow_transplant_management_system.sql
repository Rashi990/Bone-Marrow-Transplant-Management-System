-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 09:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
-- Table structure for table `bloodbank_reports`
--

CREATE TABLE `bloodbank_reports` (
  `report_bid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_stock`
--

CREATE TABLE `bloodbank_stock` (
  `sample_bid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE `blood_bank` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`admin_id`, `email`, `user_name`, `password`) VALUES
(1, 'admin', 'admin', '112233');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `camp_id` int(11) NOT NULL,
  `camp_name` varchar(255) NOT NULL,
  `camp_date` date NOT NULL,
  `camp_time` time NOT NULL,
  `camp_venue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinician`
--

INSERT INTO `clinician` (`clinician_id`, `clinician_name`, `email`, `telephone_no`, `address`, `user_name`, `password`, `hospital_id`) VALUES
(1, 'Thilini De Mel', '9898.thilini@gmail.com', '0772440643', 'No.2/61, Lady Macclums Drive, Hawaeliya, Nuwaraeliya', 'thili_99', '120899', 1),
(2, 'Nisal', 'nis@gmail.com', '0115555448', 'Flower Road, Kandy', 'nisal', '440000', 2),
(3, 'Ashi', 'ash@gamil.com', '0112997222', '77/A, Galle Road, Colombo', 'ashi', '668899', 2),
(4, 'Dinu', 'di@gmail.com', '0112996666', '44/97, Silver Street , Matara', 'dinu77', '997755', 1),
(6, 'Hashi', 'hashi@gmail.com', '0112467999', '55/99, Baker Street, Colombo', 'hashi88', '8899jj', 1),
(7, 'Mashi', 'mashi@gmail.com', '0778866667', '55/9,Galle Road, Hikkaduwa', 'mashi66', '888999', 1),
(8, 'Samantha', 'sam@gmail.com', '0778866111', '44/2,Mahawa Road,Galle', 'sam778', '666555', 2),
(9, 'Fathima', 'fa@gmail.com', '0778866000', '44/9,Matara Road, Matara', 'fathima66', 'fa33333', 2),
(12, 'Sanjana', 'sanj@gmail.com', '0778861111', '22/9,Galle Road, Colombo', 'Sanju99', '228899', 1),
(13, 'Sarath Silva', 'sarath@gmail.com', '0778862222', '78/5, Main Road, Jaffna', 'sarath22', 'sa8800', 3),
(15, 'P.Samaranayaka', 'sama@gmail.com', '0778866111', 'Main Road, Colombo', 'sama22', '222333', 1);

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
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`consultant_id`, `consultant_name`, `email`, `telephone_no`, `address`, `image`, `user_name`, `password`, `hospital_id`) VALUES
(1, 'Thilini De Mel', '9898.thilini@gmail.com', '772440643', 'No.61/2, Lady Macclums Drive, Hawaeliya, Nuwaraeliya', '', 'thili_99', '120899', 1),
(2, 'Malsha Samadhika', 'malsha@gmail.com', '771234567', 'No.235, Kandy Road, Kegalle', '', 'salma_99', '1234', 1),
(3, 'Rashini Lakshika', 'rash@gmail.com', '712589634', 'No.24/3, Park Road, Galle', '', 'rash_99', '1111', 2),
(4, 'Subodhinie', 'subo@gmail.com', '759865472', 'No.33, Upper Lake Road, Colombo 07', '', 'subo_99', '3333', 3);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(11) NOT NULL,
  `donor_name` varchar(255) NOT NULL,
  `telephone_no` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of dirth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `id_number` text NOT NULL,
  `marital_state` varchar(255) NOT NULL,
  `image` mediumblob NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `donor_name`, `telephone_no`, `email`, `address`, `date_of dirth`, `gender`, `id_number`, `marital_state`, `image`, `blood_group`, `user_name`, `password`) VALUES
(1, 'Warami Nethunya', 762531489, 'wara@gmail.com', 'No.258, Gregory lake road, Nuwaraeliya', '2000-11-15', 'Female', '200015326923', 'Unmarried', '', 'B-', 'wara_00', '987'),
(2, 'Nelsan Bandara', 115632489, 'nelson@gmail.com', '-', '1986-11-18', 'Male', '198612395633', 'Married', '', 'B+', 'nel123', '123');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_hla_details`
--

INSERT INTO `donor_hla_details` (`dh_id`, `donor_id`, `hla_antigen`, `hla_allele_family`, `hla_2nd_type`, `hla_3rd_type`, `hla_4th_type`, `hla_5th_type`) VALUES
(1, 1, 'HLA-A', '02', '101', '01', '02', 'N'),
(2, 2, 'HLA-B', '08', '01', '01', '01', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `donor_request`
--

CREATE TABLE `donor_request` (
  `donor_request_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `date_availability` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`, `email`, `telephone_no`, `address`, `date_availability`, `user_name`, `password`) VALUES
(1, 'Apeksha Hospital', 'apeksha@gmail.com', '0112467448', 'New road, Maharagama', '2022/06/10', 'apeksha', '123456'),
(2, 'Karapitiya Hospital', 'karapitiya@gmail.com', '0112992222', '66/5, Kaluwella Road, Galle', '2022/07/10', 'karapitiya', '222444'),
(3, 'Mahaweli Hospital', ' maha@gmail.com', '0112233444', 'Panideniya Road, Kandy', '2022/06/14', 'maha22', 'ma4466'),
(4, 'Ninewells', ' ninewells@gamil.com', ' 011223311', 'Main Road, Colo', '', '', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_stock`
--

CREATE TABLE `hospital_stock` (
  `sample_hid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `departure_time` time NOT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `match_requests`
--

CREATE TABLE `match_requests` (
  `match_request_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone_no` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `id_number` text NOT NULL,
  `marital_state` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `email`, `telephone_no`, `address`, `date_of_birth`, `gender`, `id_number`, `marital_state`, `blood_group`, `hospital_id`) VALUES
(1, 'Malki Nethusha', 'malki.12@gmail.com', 753264189, 'No.23, Hetti Vidiya, Colombo 07', '1996-11-14', 'Female', '199612547893', 'Unmarried', 'B+', 1),
(2, 'Mallika Kumari', '-', 522236589, 'No.29, Malwaththa Road, Kandana', '1951-08-15', 'Female', '51125878923', 'Married', 'AB-', 1),
(3, 'Kamal Jayathilake', 'kamal@gmail.com', 715236489, 'No.25, Park Road, Walimada', '1973-12-21', 'Male', '197312547693', 'Married', 'O-', 2),
(4, 'Amali Bhagya', 'ama_b98@gmail.com', 752369852, 'No.63, Chapel Road, Nugegoda', '1998-06-16', 'Female', '199823651492', 'Unmarried', 'A+', 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_clinical_reports`
--

INSERT INTO `patient_clinical_reports` (`patient_cr_id`, `patient_id`, `date`, `drug_name`, `dosage`, `route`, `frequency`) VALUES
(12, 3, '2022-01-21', 'Amoxapine', 12, 'two times a day', '6 days'),
(13, 4, '2022-02-14', 'Aspirin', 9, 'three times a day', '3 days'),
(15, 1, '2022-05-12', 'Dexamethasone', 14, 'two times a day', '1 week'),
(16, 4, '2022-03-09', 'Aspirin', 19, 'three times a day', '1 week');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_hla_details`
--

INSERT INTO `patient_hla_details` (`ph_id`, `patient_id`, `hla_antigen`, `hla_allele_family`, `hla_2nd_type`, `hla_3rd_type`, `hla_4th_type`, `hla_5th_type`) VALUES
(1, 1, 'HLA-C', '24', '02', '01', '02', 'S'),
(2, 2, 'HLA-A', '44', '02', '01', '02', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `pending_donor`
--

CREATE TABLE `pending_donor` (
  `pending_donor_id` int(11) NOT NULL,
  `pending_donor_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone_no` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `id_number` int(12) NOT NULL,
  `marital_state` varchar(255) NOT NULL,
  `image` mediumblob NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `session_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `participation_count` int(11) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `test_id` int(11) NOT NULL,
  `test_date` date NOT NULL,
  `test_time` int(11) NOT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`camp_id`);

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
  ADD PRIMARY KEY (`donor_id`);

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
  ADD PRIMARY KEY (`sample_hid`);

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
  ADD PRIMARY KEY (`match_request_id`);

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
-- Indexes for table `pending_donor`
--
ALTER TABLE `pending_donor`
  ADD PRIMARY KEY (`pending_donor_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`test_id`);

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
-- AUTO_INCREMENT for table `bloodbank_reports`
--
ALTER TABLE `bloodbank_reports`
  MODIFY `report_bid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bloodbank_stock`
--
ALTER TABLE `bloodbank_stock`
  MODIFY `sample_bid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_bank`
--
ALTER TABLE `blood_bank`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `camp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clinician`
--
ALTER TABLE `clinician`
  MODIFY `clinician_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `consultant`
--
ALTER TABLE `consultant`
  MODIFY `consultant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `match_request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_clinical_reports`
--
ALTER TABLE `patient_clinical_reports`
  MODIFY `patient_cr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `patient_hla_details`
--
ALTER TABLE `patient_hla_details`
  MODIFY `ph_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pending_donor`
--
ALTER TABLE `pending_donor`
  MODIFY `pending_donor_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `match_details`
--
ALTER TABLE `match_details`
  ADD CONSTRAINT `f3` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `transplant_request`
--
ALTER TABLE `transplant_request`
  ADD CONSTRAINT `tr3` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
