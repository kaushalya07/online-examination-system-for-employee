-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 11:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blue_kite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` varchar(20) NOT NULL,
  `Admin_Name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_Name`, `password`, `email`) VALUES
('AD220458', 'Pradeep Rathnayake', 'Admin@bluekite', 'ad220458@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` varchar(8) NOT NULL,
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `First_Name`, `Last_Name`, `Password`, `Email`) VALUES
('EM180050', 'kalani', 'tahruka', 'user@345', 'em180050@gmail.com'),
('EM190040', 'Kenura', 'Ransidu', 'bluekite@123', 'em190040@gmail.com'),
('EM200450', 'Rashmika', 'Subhashini', 'bluekite@123', 'em200450@gmail.com'),
('EM220010', 'Kasun', 'Ekanayake', 'bluekite@123', 'em220010@gmail.com'),
('EM220200', 'Dilshan', 'Dilanka', 'bluekite@123', 'em220200@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee_admin`
--

CREATE TABLE `employee_admin` (
  `Employee_ID` varchar(8) NOT NULL,
  `Admin_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_admin`
--

INSERT INTO `employee_admin` (`Employee_ID`, `Admin_ID`) VALUES
('EM180050', 'AD220458'),
('EM190040', 'AD220458'),
('EM200450', 'AD220458'),
('EM220010', 'AD220458'),
('EM220200', 'AD220458');

-- --------------------------------------------------------

--
-- Table structure for table `employee_exam`
--

CREATE TABLE `employee_exam` (
  `Employee_ID` varchar(8) NOT NULL,
  `Exam_ID` varchar(8) NOT NULL,
  `StartTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_exam`
--

INSERT INTO `employee_exam` (`Employee_ID`, `Exam_ID`, `StartTime`) VALUES
('EM180050', 'BK101', NULL),
('EM190040', 'BK102', NULL),
('EM200450', 'BK103', NULL),
('EM220010', 'BK201', NULL),
('EM220200', 'BK301', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_faq`
--

CREATE TABLE `employee_faq` (
  `Employee_ID` varchar(8) NOT NULL,
  `FAQ_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_faq`
--

INSERT INTO `employee_faq` (`Employee_ID`, `FAQ_ID`) VALUES
('EM180050', 2),
('EM190040', 3),
('EM200450', 4),
('EM220010', 5);

-- --------------------------------------------------------

--
-- Table structure for table `employee_phoneno`
--

CREATE TABLE `employee_phoneno` (
  `Employee_ID` varchar(8) NOT NULL,
  `PhoneNo` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_phoneno`
--

INSERT INTO `employee_phoneno` (`Employee_ID`, `PhoneNo`) VALUES
('EM180050', 774412664),
('EM190040', 722412339),
('EM200450', 714411505),
('EM220010', 762402669),
('EM220200', 759831255);

-- --------------------------------------------------------

--
-- Table structure for table `emp_signup`
--

CREATE TABLE `emp_signup` (
  `EmpID` varchar(8) NOT NULL,
  `Firstname` varchar(255) DEFAULT NULL,
  `Lastname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PhoneNumber` int(11) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `ExamID` varchar(8) NOT NULL,
  `ExamLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`ExamID`, `ExamLink`) VALUES
('BK101', 'https://presenter.jivrus.com/p/1Y4j5UgDJvLbmIAfCM0Nx6oOXxgnGPC35yn1Y-71xKmM'),
('BK102', 'https://presenter.jivrus.com/p/15nzeNSfHfYAfHFQYq0Cd0ZQcgYZMBSvr7CgQ6dV3h1U'),
('BK103', 'https://presenter.jivrus.com/p/1NqpJB9UPKta1pgJHa_-EiFl0Ma1s1kf3Kq5FXcBB7DM'),
('BK201', 'https://presenter.jivrus.com/p/1-LZDoMgB4pgp91jKY9FTmsut6gskQumTgb-3D6jjUHE'),
('BK301', 'https://presenter.jivrus.com/p/1wMP_YNXXCfFh8I7TuR9Yz_9_rdWdY4TqwNZCrx_grwo');

-- --------------------------------------------------------

--
-- Table structure for table `examprovider_admin`
--

CREATE TABLE `examprovider_admin` (
  `ExamProvider_ID` varchar(8) NOT NULL,
  `Admin_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examprovider_admin`
--

INSERT INTO `examprovider_admin` (`ExamProvider_ID`, `Admin_ID`) VALUES
('EP180055', 'AD220458'),
('EP190011', 'AD220458'),
('EP190233', 'AD220458'),
('EP221128', 'AD220458'),
('EP230696', 'AD220458');

-- --------------------------------------------------------

--
-- Table structure for table `examprovider_phoneno`
--

CREATE TABLE `examprovider_phoneno` (
  `ExamProvider_ID` varchar(8) NOT NULL,
  `PhoneNo` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examprovider_phoneno`
--

INSERT INTO `examprovider_phoneno` (`ExamProvider_ID`, `PhoneNo`) VALUES
('EP180055', 757672599),
('EP190011', 772432865),
('EP190233', 771799584),
('EP221128', 770256388),
('EP230696', 777577219);

-- --------------------------------------------------------

--
-- Table structure for table `examprovider_result`
--

CREATE TABLE `examprovider_result` (
  `ExamProvider_ID` varchar(8) NOT NULL,
  `Exam_ID` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examprovider_result`
--

INSERT INTO `examprovider_result` (`ExamProvider_ID`, `Exam_ID`) VALUES
('EP180055', 'BK101'),
('EP180055', 'BK201'),
('EP190011', 'BK102'),
('EP190233', 'BK103'),
('EP230696', 'BK301');

-- --------------------------------------------------------

--
-- Table structure for table `exam_admin`
--

CREATE TABLE `exam_admin` (
  `Exam_ID` varchar(8) NOT NULL,
  `Admin_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_admin`
--

INSERT INTO `exam_admin` (`Exam_ID`, `Admin_ID`) VALUES
('BK101', 'AD220458'),
('BK102', 'AD220458'),
('BK103', 'AD220458'),
('BK201', 'AD220458'),
('BK301', 'AD220458');

-- --------------------------------------------------------

--
-- Table structure for table `exam_provider`
--

CREATE TABLE `exam_provider` (
  `ExamProvider_ID` varchar(8) NOT NULL,
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_provider`
--

INSERT INTO `exam_provider` (`ExamProvider_ID`, `First_Name`, `Last_Name`, `Email`, `Password`) VALUES
('EP180055', 'Salman', 'Saley', 'ep180055@gmail.com', 'bluekite@123'),
('EP190011', 'Dahami', 'Kaveesha', 'ep190011@gmail.com', 'bluekite@123'),
('EP190233', 'Supun', 'Lakshan', 'ep190233@gmail.com', 'bluekite@123'),
('EP221128', 'Hiruni', 'Bhagya', 'ep221128@gmail.com', 'bluekite@123'),
('EP230696', 'Shehan', 'Janendra', 'ep230696@gmail.com', 'bluekite@123');

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `Exam_ID` varchar(8) NOT NULL,
  `Employee_ID` varchar(8) NOT NULL,
  `Status` varchar(8) NOT NULL,
  `ExamDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_result`
--

INSERT INTO `exam_result` (`Exam_ID`, `Employee_ID`, `Status`, `ExamDate`) VALUES
('BK101', 'EM180050', 'Pass', '2023-04-12'),
('BK102', 'EM200450', 'fail', '2023-05-10'),
('BK103', 'EM190040', 'Pass', '2023-04-18'),
('BK201', 'EM200450', 'fail', '2023-05-20'),
('BK301', 'EM220010', 'Pass', '2023-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `FAQ_ID` int(11) NOT NULL,
  `Qusetion` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`FAQ_ID`, `Qusetion`, `Answer`) VALUES
(1, 'Can employees get exam results in fast?', 'Yes'),
(2, 'Is blukite provides all exams for emloyees?', 'Yes'),
(3, 'Are there exam unit in this system ?', 'Yes'),
(4, 'Can Employees attempt exam any time ?', 'Yes'),
(5, 'Can Employees can know their grade ', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `faq_supportstaff`
--

CREATE TABLE `faq_supportstaff` (
  `FAQ_ID` int(11) NOT NULL,
  `SupportStaff_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq_supportstaff`
--

INSERT INTO `faq_supportstaff` (`FAQ_ID`, `SupportStaff_ID`) VALUES
(1, 'SS199595'),
(2, 'SS209878'),
(3, 'SS210010'),
(4, 'SS223030');

-- --------------------------------------------------------

--
-- Table structure for table `newemployee_faq`
--

CREATE TABLE `newemployee_faq` (
  `Employee_ID` varchar(8) NOT NULL,
  `FAQ_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supportstaff`
--

CREATE TABLE `supportstaff` (
  `SupportStaff_ID` varchar(10) NOT NULL,
  `SupportStaff_Name` varchar(100) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supportstaff`
--

INSERT INTO `supportstaff` (`SupportStaff_ID`, `SupportStaff_Name`, `Email`, `Password`) VALUES
('SS199595', 'Maleesha Thennakoan', 'ss199595@gmail.com', 'bluekite@123'),
('SS209878', 'Hiru wathsala', 'ss209878@gmail.com', 'bluekite@123'),
('SS210010', 'Themiya Sankajeewa', 'ss210010@gmail.com', 'bluekite@123'),
('SS223030', 'Hansaja Lakruwan', 'ss223030@gmail.com', 'bluekite@123'),
('SS230012', 'Hirun Tharusha', 'ss230012@gmail.com', 'bluekite@123');

-- --------------------------------------------------------

--
-- Table structure for table `supportstaff_admin`
--

CREATE TABLE `supportstaff_admin` (
  `SupportStaff_ID` varchar(10) NOT NULL,
  `Admin_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supportstaff_admin`
--

INSERT INTO `supportstaff_admin` (`SupportStaff_ID`, `Admin_ID`) VALUES
('SS199595', 'AD220458'),
('SS209878', 'AD220458'),
('SS210010', 'AD220458'),
('SS223030', 'AD220458'),
('SS230012', 'AD220458');

-- --------------------------------------------------------

--
-- Table structure for table `supportstaff_phoneno`
--

CREATE TABLE `supportstaff_phoneno` (
  `SupportStaff_ID` varchar(10) NOT NULL,
  `PhoneNo` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supportstaff_phoneno`
--

INSERT INTO `supportstaff_phoneno` (`SupportStaff_ID`, `PhoneNo`) VALUES
('SS199595', 761799335),
('SS209878', 726865133),
('SS210010', 757877311),
('SS223030', 770512487),
('SS230012', 762438954);

-- --------------------------------------------------------

--
-- Table structure for table `systemadmin_phoneno`
--

CREATE TABLE `systemadmin_phoneno` (
  `SystemAdmin_ID` varchar(10) NOT NULL,
  `PhoneNo` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `systemadmin_phoneno`
--

INSERT INTO `systemadmin_phoneno` (`SystemAdmin_ID`, `PhoneNo`) VALUES
('SA220010', 711218744),
('SA220020', 775772190),
('SA220030', 765572317),
('SA220040', 714631872),
('SA220050', 724677215);

-- --------------------------------------------------------

--
-- Table structure for table `system_admin`
--

CREATE TABLE `system_admin` (
  `SystemAdmin_ID` varchar(10) NOT NULL,
  `SystemAdmin_Name` varchar(30) DEFAULT NULL,
  `Password` varchar(128) NOT NULL,
  `Email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_admin`
--

INSERT INTO `system_admin` (`SystemAdmin_ID`, `SystemAdmin_Name`, `Password`, `Email`) VALUES
('SA220010', 'Anjana Indunil', 'admin@sa123', 'sa220010@gmail.com'),
('SA220020', 'Dileka Tharuki', 'admin@sa123', 'sa220020@gamil.com'),
('SA220030', 'Anjana Chathurangi', 'admin@sa123', 'sa220030@gmail.com'),
('SA220040', 'Sachini kaushalya', 'admin@sa123', 'sa220040@gamil.com'),
('SA220050', 'Chalana Kaveesha', 'admin@sa123', 'sa220050@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `employee_admin`
--
ALTER TABLE `employee_admin`
  ADD PRIMARY KEY (`Employee_ID`,`Admin_ID`),
  ADD KEY `EmAdmin_FK2` (`Admin_ID`);

--
-- Indexes for table `employee_exam`
--
ALTER TABLE `employee_exam`
  ADD PRIMARY KEY (`Employee_ID`,`Exam_ID`),
  ADD KEY `EmExam_FK2` (`Exam_ID`);

--
-- Indexes for table `employee_faq`
--
ALTER TABLE `employee_faq`
  ADD PRIMARY KEY (`Employee_ID`,`FAQ_ID`),
  ADD KEY `EmFAQ_FK2` (`FAQ_ID`);

--
-- Indexes for table `employee_phoneno`
--
ALTER TABLE `employee_phoneno`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `emp_signup`
--
ALTER TABLE `emp_signup`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`ExamID`);

--
-- Indexes for table `examprovider_admin`
--
ALTER TABLE `examprovider_admin`
  ADD PRIMARY KEY (`ExamProvider_ID`,`Admin_ID`),
  ADD KEY `ExpAdmin_FK2` (`Admin_ID`);

--
-- Indexes for table `examprovider_phoneno`
--
ALTER TABLE `examprovider_phoneno`
  ADD PRIMARY KEY (`ExamProvider_ID`);

--
-- Indexes for table `examprovider_result`
--
ALTER TABLE `examprovider_result`
  ADD PRIMARY KEY (`ExamProvider_ID`,`Exam_ID`),
  ADD KEY `ExpResult_FK2` (`Exam_ID`);

--
-- Indexes for table `exam_admin`
--
ALTER TABLE `exam_admin`
  ADD PRIMARY KEY (`Exam_ID`,`Admin_ID`),
  ADD KEY `ExAdmin_FK2` (`Admin_ID`);

--
-- Indexes for table `exam_provider`
--
ALTER TABLE `exam_provider`
  ADD PRIMARY KEY (`ExamProvider_ID`);

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD PRIMARY KEY (`Exam_ID`,`Employee_ID`),
  ADD KEY `ER_FK2` (`Employee_ID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`FAQ_ID`);

--
-- Indexes for table `faq_supportstaff`
--
ALTER TABLE `faq_supportstaff`
  ADD PRIMARY KEY (`FAQ_ID`,`SupportStaff_ID`),
  ADD KEY `FAQSs_FK2` (`SupportStaff_ID`);

--
-- Indexes for table `newemployee_faq`
--
ALTER TABLE `newemployee_faq`
  ADD PRIMARY KEY (`Employee_ID`,`FAQ_ID`),
  ADD KEY `nwEmFAQ_FK2` (`FAQ_ID`);

--
-- Indexes for table `supportstaff`
--
ALTER TABLE `supportstaff`
  ADD PRIMARY KEY (`SupportStaff_ID`);

--
-- Indexes for table `supportstaff_admin`
--
ALTER TABLE `supportstaff_admin`
  ADD PRIMARY KEY (`SupportStaff_ID`,`Admin_ID`),
  ADD KEY `SsAdmin_FK2` (`Admin_ID`);

--
-- Indexes for table `supportstaff_phoneno`
--
ALTER TABLE `supportstaff_phoneno`
  ADD PRIMARY KEY (`SupportStaff_ID`);

--
-- Indexes for table `systemadmin_phoneno`
--
ALTER TABLE `systemadmin_phoneno`
  ADD PRIMARY KEY (`SystemAdmin_ID`);

--
-- Indexes for table `system_admin`
--
ALTER TABLE `system_admin`
  ADD PRIMARY KEY (`SystemAdmin_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_faq`
--
ALTER TABLE `employee_faq`
  MODIFY `FAQ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `FAQ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq_supportstaff`
--
ALTER TABLE `faq_supportstaff`
  MODIFY `FAQ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `newemployee_faq`
--
ALTER TABLE `newemployee_faq`
  MODIFY `FAQ_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_admin`
--
ALTER TABLE `employee_admin`
  ADD CONSTRAINT `EmAdmin_FK1` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`EmployeeID`),
  ADD CONSTRAINT `EmAdmin_FK2` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`Admin_ID`);

--
-- Constraints for table `employee_exam`
--
ALTER TABLE `employee_exam`
  ADD CONSTRAINT `EmExam_FK1` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`EmployeeID`),
  ADD CONSTRAINT `EmExam_FK2` FOREIGN KEY (`Exam_ID`) REFERENCES `exam` (`ExamID`);

--
-- Constraints for table `employee_faq`
--
ALTER TABLE `employee_faq`
  ADD CONSTRAINT `EmFAQ_FK1` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`EmployeeID`),
  ADD CONSTRAINT `EmFAQ_FK2` FOREIGN KEY (`FAQ_ID`) REFERENCES `faq` (`FAQ_ID`);

--
-- Constraints for table `employee_phoneno`
--
ALTER TABLE `employee_phoneno`
  ADD CONSTRAINT `EP_FK` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`EmployeeID`);

--
-- Constraints for table `examprovider_admin`
--
ALTER TABLE `examprovider_admin`
  ADD CONSTRAINT `ExpAdmin_FK1` FOREIGN KEY (`ExamProvider_ID`) REFERENCES `exam_provider` (`ExamProvider_ID`),
  ADD CONSTRAINT `ExpAdmin_FK2` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`Admin_ID`);

--
-- Constraints for table `examprovider_phoneno`
--
ALTER TABLE `examprovider_phoneno`
  ADD CONSTRAINT `ExP_FK` FOREIGN KEY (`ExamProvider_ID`) REFERENCES `exam_provider` (`ExamProvider_ID`);

--
-- Constraints for table `examprovider_result`
--
ALTER TABLE `examprovider_result`
  ADD CONSTRAINT `ExpResult_FK1` FOREIGN KEY (`ExamProvider_ID`) REFERENCES `exam_provider` (`ExamProvider_ID`),
  ADD CONSTRAINT `ExpResult_FK2` FOREIGN KEY (`Exam_ID`) REFERENCES `exam` (`ExamID`);

--
-- Constraints for table `exam_admin`
--
ALTER TABLE `exam_admin`
  ADD CONSTRAINT `ExAdmin_FK1` FOREIGN KEY (`Exam_ID`) REFERENCES `exam` (`ExamID`),
  ADD CONSTRAINT `ExAdmin_FK2` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`Admin_ID`);

--
-- Constraints for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD CONSTRAINT `ER_FK1` FOREIGN KEY (`Exam_ID`) REFERENCES `exam` (`ExamID`),
  ADD CONSTRAINT `ER_FK2` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`EmployeeID`);

--
-- Constraints for table `faq_supportstaff`
--
ALTER TABLE `faq_supportstaff`
  ADD CONSTRAINT `FAQSs_FK1` FOREIGN KEY (`FAQ_ID`) REFERENCES `faq` (`FAQ_ID`),
  ADD CONSTRAINT `FAQSs_FK2` FOREIGN KEY (`SupportStaff_ID`) REFERENCES `supportstaff` (`SupportStaff_ID`);

--
-- Constraints for table `newemployee_faq`
--
ALTER TABLE `newemployee_faq`
  ADD CONSTRAINT `nwEmFAQ_FK1` FOREIGN KEY (`Employee_ID`) REFERENCES `emp_signup` (`EmpID`),
  ADD CONSTRAINT `nwEmFAQ_FK2` FOREIGN KEY (`FAQ_ID`) REFERENCES `faq` (`FAQ_ID`);

--
-- Constraints for table `supportstaff_admin`
--
ALTER TABLE `supportstaff_admin`
  ADD CONSTRAINT `SsAdmin_FK1` FOREIGN KEY (`SupportStaff_ID`) REFERENCES `supportstaff` (`SupportStaff_ID`),
  ADD CONSTRAINT `SsAdmin_FK2` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`Admin_ID`);

--
-- Constraints for table `supportstaff_phoneno`
--
ALTER TABLE `supportstaff_phoneno`
  ADD CONSTRAINT `SP_FK` FOREIGN KEY (`SupportStaff_ID`) REFERENCES `supportstaff` (`SupportStaff_ID`);

--
-- Constraints for table `systemadmin_phoneno`
--
ALTER TABLE `systemadmin_phoneno`
  ADD CONSTRAINT `SystemAdmin_FK` FOREIGN KEY (`SystemAdmin_ID`) REFERENCES `system_admin` (`SystemAdmin_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
