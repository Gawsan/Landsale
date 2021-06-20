-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 07:39 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luckyland`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `Sequence` int(11) NOT NULL,
  `district` varchar(50) NOT NULL,
  `ltype` varchar(50) NOT NULL,
  `size` float NOT NULL,
  `address` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `ownerName` varchar(50) NOT NULL,
  `ownerPno` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`Sequence`, `district`, `ltype`, `size`, `address`, `title`, `description`, `price`, `ownerName`, `ownerPno`, `email`) VALUES
(1, 'ja', 'agr', 2, '37,kankesanthurai Road, Jaffna.', 'Agricultural Land', 'Can do farming. there is watering facilities.', 4500000, 'K.Balakumar', 758476958, 'balakumar12@gmail.com'),
(2, 'Colombo', 'Urban', 2, '21,Vivekananthar Road,colombo-09.', 'Apartment in colombo-09', 'closest to city.can do farming in this land. closest to Hospital,School and market.', 12000000, 'R.Gawsan', 754549201, 'gawsan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `agentrqform`
--

CREATE TABLE `agentrqform` (
  `Agent_name` varchar(50) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `M_number` int(20) NOT NULL,
  `Selected_Date` date DEFAULT NULL,
  `Services` varchar(50) NOT NULL,
  `Details` text DEFAULT NULL,
  `User_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agentrqform`
--

INSERT INTO `agentrqform` (`Agent_name`, `First_name`, `Last_name`, `Email`, `M_number`, `Selected_Date`, `Services`, `Details`, `User_ID`) VALUES
('Agent-Red', 'Ross', 'Geller', 'Ross@mail.com', 712365875, '2021-06-20', 'Only_finacial', '', 'LL83662'),
('Agent-Black', 'Rachel', 'Green', 'Rach@mail.com', 716545875, '2021-05-25', 'Finacial_and_Leagal', '', 'LL76672'),
('Agent-Green', 'Joey', 'Tribbiani', 'joye@mail.com', 714445875, '2021-12-15', 'Only_finacial', '', 'LL76627'),
('Agent-Blue', 'Alex', 'Garrett', 'Alex@mail.com', 758144475, '2021-10-30', 'Only_finacial', '', 'LL72766');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `phoneNo` bigint(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `userName`, `lastName`, `phoneNo`, `email`, `message`) VALUES
(1, 'Panduka', 'Roy', 753487456, 'panduka@gmail.com', 'We need to find a new agent'),
(2, 'Panduka', 'Roy', 753487456, 'panduka@gmail.com', 'We need to find a new agent'),
(3, 'balaji', 'thiru', 76980066, 'balajithi@gmail.com', 'We need to find a new agent');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Sequence` int(11) NOT NULL,
  `Customer_Id` varchar(100) NOT NULL,
  `Customer_Name` varchar(100) NOT NULL,
  `Customer_surename` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Customer_pno` int(11) NOT NULL,
  `Customer_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Sequence`, `Customer_Id`, `Customer_Name`, `Customer_surename`, `email`, `Customer_pno`, `Customer_password`) VALUES
(1, 'IT20296896', 'vaishnavi', 'sivabaskaran', 'it20296896@my.sliit.', 767990779, 'vaish01'),
(2, 'IT20051402', 'Gawsan', 'Raveenthiran', 'gawsan@gmail.com', 759728462, 'gaws21'),
(3, 'IT20663322', 'Ifthikar', 'ali ', 'ifthikar@gmail.com', 764837928, 'ifthikar09'),
(4, 'IT20644512', 'Panduka', 'Wijesundara', 'panduka@gmail.com', 776842578, 'panduka43'),
(5, 'IT20666088', 'Sajith', '', 'sajith@gmail.com', 784597359, 'sajith65'),
(6, 'IT20051402', 'Gawsan', 'Raveendran', 'gawsan@gmail.com', 754549201, 'gaws21');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Seq` int(11) NOT NULL,
  `Emp_Id` varchar(20) NOT NULL,
  `Emp_Name` varchar(100) NOT NULL,
  `Emp_Email` varchar(50) NOT NULL,
  `Emp_pno` int(12) NOT NULL,
  `Emp_Role` varchar(50) NOT NULL,
  `Emp_WorkHours` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Seq`, `Emp_Id`, `Emp_Name`, `Emp_Email`, `Emp_pno`, `Emp_Role`, `Emp_WorkHours`) VALUES
(1, 'IT20296896', 'gajan', 'gajan@gmail.com', 772398675, 'Manager', 5),
(2, 'IT20348526', 'kajani', 'kajani@gmail.com', 742898675, 'Manager', 6);

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `Sequence` int(11) NOT NULL,
  `land_Id` varchar(10) NOT NULL,
  `land_type` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `size` float NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`Sequence`, `land_Id`, `land_type`, `price`, `size`, `description`) VALUES
(1, 'LL008765', 'agriculture', 1400000, 2, 'near to school'),
(2, 'LL124765', 'agriculture', 234000, 3, 'near to city');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Sequence` int(11) NOT NULL,
  `User_Id` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Sequence`, `User_Id`, `Password`) VALUES
(1, 'IT20296896', 'Vaish01'),
(2, 'IT20051402', 'gaws21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`Sequence`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Sequence`,`Customer_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Seq`,`Emp_Id`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`Sequence`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Sequence`,`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `Sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Seq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `Sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Sequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
