-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 09:28 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` char(5) NOT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `PASSWORD`) VALUES
('AD001', '11112222');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `PatientID` int(11) NOT NULL,
  `SessionID` int(11) NOT NULL,
  `Hospitalcharges` double DEFAULT NULL,
  `VAT` double DEFAULT NULL,
  `Ispaid` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`PatientID`, `SessionID`, `Hospitalcharges`, `VAT`, `Ispaid`) VALUES
(2000, 1, 200, 100, 1),
(2001, 2, 200, 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DocID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Specialization` varchar(100) DEFAULT NULL,
  `WorkingHospital` varchar(100) DEFAULT NULL,
  `TelNo` char(10) DEFAULT NULL,
  `DoctorCharge` double DEFAULT NULL,
  `SLMC` int(11) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DocID`, `Name`, `Specialization`, `WorkingHospital`, `TelNo`, `DoctorCharge`, `SLMC`, `Gender`, `Password`) VALUES
(1, 'B.D.A.Perera', 'Plastic Surgeon', 'General Hospital Colombo', '0712435825', 1500, 13593, 'Male', '1111'),
(2, 'Dr.G.T.De Z.Rajakaruna', 'Neuro Surgeons', 'Colombo North  Hospital Ragama', '0774401777', 2000, 2341, 'Male', '1111'),
(3, 'Dr.S.U.W.Wadanamby', 'Neuro Surgeons', 'General Hospital Colombo', '0765585687', 1000, 6267, 'Female', '1111'),
(4, 'Dr. (Mrs) Sepalika Mendis', 'Cardiologists', 'General Hospital Negombo', '0712695820', 1500, 23132, 'Male', '1111'),
(5, 'Dr HSU Amarasekara', 'Cardiologists', 'Colombo North  Hospital Ragama', '0767323338', 1000, 4325, 'Female', '1111'),
(6, 'Dr AK Pathirana', 'Cardiologists', 'General Hospital Colombo', '0702421893', 2000, 36546, 'Male', '1111'),
(7, 'Dr B.A.S.P.Somaweera', 'Anaesthetists', 'General Hospital Colombo', '0762439544', 1000, 63436, 'Female', '1111'),
(8, 'Dr.T.C.P.Hapuarachchi', 'Anaesthetists', 'General Hospital Negombo', '0774584146', 2000, 76454, 'Male', '1111'),
(9, 'Dr.B.G.N.Rathnasena', 'General Surgeons', 'Colombo North  Hospital Ragama', '0712692180', 1500, 56434, 'Female', '1111'),
(10, 'Dr.A.S.K.Banagala', 'General Surgeons', 'General Hospital Gampaha', '0705325063', 1000, 3646, 'Male', '1111'),
(11, 'Dr.M.B.A.P.De Silva', 'General Surgeons', 'General Hospital Colombo', '0772684238', 2500, 76865, 'Female', '1111'),
(12, 'Dr (Mrs) Chandra J ayasuriya', 'ENT Surgeons', 'General Hospital Negombo', '0779435206', 1500, 3656, 'Male', '1111'),
(13, 'Dr.G.C.A.U.Patabedige', 'Microbiologist', 'General Hospital Gampaha', '0702334322', 2000, 3243, 'Male', '1111'),
(14, 'Dr.P M A Abeywickrama', 'Radiologists', 'General Hospital Negombo', '0776159412', 2500, 545654, 'Female', '1111'),
(15, 'Dr.A.S.Pallewatta', 'Radiologists', 'Colombo North  Hospital Ragama', '0712421089', 2000, 5234, 'Male', '1111'),
(16, 'Dr.A.L.M.Nazar', 'Nephrologists', 'General Hospital Colombo', '0702581342', 1500, 32431, 'Female', '1111'),
(17, 'Dr Jeewani Rubasinghe', 'Rheumatologists', 'General Hospital Negombo', '0776541078', 2000, 5463, 'Female', '1111'),
(18, 'Dr.P.N.Rajapakshe', 'Cardiothoracic Surgeons', 'General Hospital Gampaha', '0718432615', 2500, 65444, 'Female', '1111'),
(19, 'Dr.Chandima Amarasena', 'Cardiothoracic Surgeons', 'General Hospital Negombo', '0712330491', 2000, 5435, 'Male', '1111'),
(20, 'Dr.S.D.Rajamanthri', 'Vascular Surgeons', 'General Hospital Colombo', '0714541263', 1500, 36533, 'Male', '1111'),
(22, 'Dr.Dammika Perera', 'Gastroenterology', 'General Hospital Gampaha', '0785695691', 2000, 14875, 'Male', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `medicalsession`
--

CREATE TABLE `medicalsession` (
  `SessionID` int(11) NOT NULL,
  `SessionDate` date DEFAULT NULL,
  `SessionTime` time DEFAULT NULL,
  `DocID` int(11) DEFAULT NULL,
  `NurseID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalsession`
--

INSERT INTO `medicalsession` (`SessionID`, `SessionDate`, `SessionTime`, `DocID`, `NurseID`) VALUES
(1, '2020-12-17', '17:00:00', 1, 1000),
(2, '2020-12-22', '13:00:00', 12, 1004),
(3, '2020-12-20', '16:00:00', 2, 1007),
(4, '2020-12-21', '14:00:00', 3, 1015);

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `NurseID` int(5) NOT NULL,
  `TelNo` char(10) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`NurseID`, `TelNo`, `Name`, `Gender`, `DOB`, `Address`) VALUES
(1000, '0712223356', 'Mr.K.B.Ilangasinghe', 'Male', '1987-02-03', 'N0 12,Galle Road, Wellawatta'),
(1001, '0333454536', 'Mrs.M.K.Wathsala', 'Female', '1969-11-08', 'N0 46/H,Naiwala road,Bemmulla'),
(1002, '0754363636', 'Mrs.R.M.D.Chandima', 'Female', '1985-05-22', 'N0 32,Dombawala, Udugampola'),
(1003, '0715755656', 'Mrs.W.G.Rasika', 'Female', '1992-06-15', 'N0 6,Naiwala Road, Divulapitiya'),
(1004, '0783635445', 'Mr.I.U.Kulathunga', 'Male', '1989-09-03', 'N0 44,Minuwangoda road, Asgiriya'),
(1005, '0779565544', 'Mr.P.M.C.Kumara', 'Male', '1997-02-09', 'N0 88,Colombo road,Bandarawatta'),
(1006, '0756448774', 'Mrs.R.T.Ramanayaka', 'Female', '1992-06-30', 'N0 67,Colombo road, Miriswatta'),
(1007, '0776564444', 'Mr.K.A.N.Attanayaka', 'Male', '1995-08-23', 'N0 8,Galle Road, Wellawatta'),
(1008, '0723625444', 'Mrs.R.Deepani', 'Female', '1985-07-03', 'N0 21/A,Naiwala Road, Divulapitiya'),
(1009, '0757848567', 'Mrs.S.T.Chamari', 'Female', '1994-04-21', 'N0 78,Gampaha road, Weediyawatta'),
(1010, '0118485445', 'Mrs.D.M.Maheshika', 'Female', '1996-03-14', 'N0 16,Dombawala, Udugampola'),
(1011, '0712132454', 'Mrs.M.N.Priyangani', 'Female', '1987-06-23', 'N0 12,Dalugama Road, Minuwangoda'),
(1012, '0756487754', 'Mr.D.M.Dissanayaka', 'Male', '1989-12-03', 'N0 97,Negombo Road, Seeduwa'),
(1013, '0782564544', 'Mrs.K.B.Pushpalatha', 'Female', '1981-06-10', 'N0 126,Dharmapala Mawatha, Colombo 7'),
(1014, '0758487656', 'Mrs.L.P.Liyanage', 'Female', '1997-02-05', 'N0 79,Dalugama Road, Minuwangoda'),
(1015, '0717778744', 'Mr.S.P.Herath', 'Male', '1987-05-13', 'N0 36,Kandy Road, Thihariya'),
(1016, '0765697784', 'Mrs.M.L.Durga', 'Female', '1979-09-21', 'N0 258,Gampaha road, Weediyawatta'),
(1017, '0784542154', 'Mr.P.N.Senevirathna', 'Male', '1981-12-16', 'N0 76,Dombawala, Udugampola'),
(1018, '0713232222', 'Mr.K.P.Silva', 'Male', '1997-03-03', 'N0 66,Naiwala Road, Divulapitiya'),
(1019, '0728454444', 'Mrs.P.Y.Kumari', 'Female', '1985-06-05', 'N0 39,Galle Road, Wellawatta');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `TelNo` int(11) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientID`, `Name`, `Address`, `DOB`, `TelNo`, `Gender`, `Password`) VALUES
(2000, 'Nirmala Gamage', 'No 10, Galle Road, Wellawatta', '1979-02-15', 756262263, 'Female', '2222'),
(2001, 'Mrs.Dilma Dulakshi', 'N0 46,Dharmapala Mawatha, Colombo 7', '1997-02-23', 712223356, 'Female', '1111'),
(2002, 'Mrs.B.Chandima Kumari', 'N0 10,Colombo road, Miriswatta', '1990-12-30', 774346453, 'Female', '1111'),
(2003, 'Mr.P.Vipulasena', 'N0 115/A,Minuwangoda road, Asgiriya', '1956-02-02', 752223356, 'Male', '1111'),
(2004, 'Mr.G.S.Godakumara', 'N0 45,Dombawala,Udugampola', '1988-12-16', 717463356, 'Male', '1111'),
(2005, 'Mrs.Muditha Athukorala', 'N0 7,Colombo road, Gampaha', '1999-01-19', 774363633, 'Female', '1111'),
(2006, 'Mr.A.P.Munasinghe', 'N0 45,Negambo Road, Kotugoda', '2000-05-06', 762523356, 'Male', '1111'),
(2007, 'Mrs.Sunethra Karunarathna', 'N0 10/B,Naiwala Road, Divulapitiya', '2002-12-07', 782452356, 'Female', '1111'),
(2008, 'Mr.P.Siriwardhana', 'N0 32,Dombawala, Udugampola', '1988-11-17', 712226556, 'Male', '1111'),
(2009, 'Mr.Bandula Kumara', 'N0 25/C,Negombo Road, Seeduwa', '1990-12-30', 332435326, 'Male', '1111'),
(2011, 'Mrs.N.Thilakawardhana', 'N0 33,Gampaha road, Weediyawatta', '2005-03-30', 113265354, 'Female', '1111'),
(2012, 'Mr.J.K.Kudahetti', 'N0 10,Dombawala, Doranagoda', '1999-01-19', 715347899, 'Male', '1111'),
(2013, 'Mr.Ananda Atukorala', 'N0 52,Dalugama Road, Minuwangoda', '1997-02-23', 783356546, 'Male', '1111'),
(2014, 'Mr.Naveen Tharaka', 'N0 25,Dombawala, Udugampola', '2006-11-13', 332223356, 'Male', '1111'),
(2015, 'Mr.Asha Amali', 'N0 87,Naiwala road,Bemmulla', '1999-01-19', 722968876, 'Female', '1111'),
(2016, 'Mr.Priyanka de silva', 'N0 22,Minuwangoda road, Asgiriya', '2014-03-09', 752245356, 'Male', '1111'),
(2017, 'Mr.Lahiru Madushan', 'N0 12,Colombo road,Bandarawatta', '1998-08-12', 782224356, 'Male', '1111'),
(2018, 'Mrs.Jayakumar', 'N0 145/A,Dombawala, Udugampola', '1990-07-22', 118888356, 'Female', '1111'),
(2019, 'Mr.Ananda Gunarathne', 'N0 52,Galle Road, Wellawatta', '1990-12-30', 782928756, 'Male', '1111'),
(2020, 'Mr.S.Shareena', 'N0 10,Kandy Road, Thihariya', '1997-02-23', 754243356, 'Female', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`PatientID`,`SessionID`),
  ADD KEY `SessionID` (`SessionID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DocID`);

--
-- Indexes for table `medicalsession`
--
ALTER TABLE `medicalsession`
  ADD PRIMARY KEY (`SessionID`),
  ADD KEY `DocID` (`DocID`),
  ADD KEY `NurseID` (`NurseID`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`NurseID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `DocID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `NurseID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1020;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PatientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2021;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `appoinment_ibfk_1` FOREIGN KEY (`PatientID`) REFERENCES `patient` (`PatientID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appoinment_ibfk_2` FOREIGN KEY (`SessionID`) REFERENCES `medicalsession` (`SessionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicalsession`
--
ALTER TABLE `medicalsession`
  ADD CONSTRAINT `medicalsession_ibfk_1` FOREIGN KEY (`DocID`) REFERENCES `doctor` (`DocID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medicalsession_ibfk_2` FOREIGN KEY (`NurseID`) REFERENCES `nurse` (`NurseID`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
