-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 10:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realstate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `admin_number` varchar(20) NOT NULL,
  `admin_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_number`, `admin_image`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin123', '03055520419', 'photo3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` int(10) NOT NULL,
  `agent_name` varchar(100) NOT NULL,
  `agent_contact` varchar(30) NOT NULL,
  `agent_email` varchar(100) NOT NULL,
  `agent_nic` varchar(50) NOT NULL,
  `agent_pan` varchar(100) NOT NULL,
  `agent_address` varchar(200) NOT NULL,
  `agent_city` varchar(30) NOT NULL,
  `agent_state` varchar(30) NOT NULL,
  `agent_pin` varchar(30) NOT NULL,
  `agent_deal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(10) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `client_contact` varchar(30) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_dob` varchar(20) NOT NULL,
  `client_cnic` varchar(50) NOT NULL,
  `client_pan` varchar(100) NOT NULL,
  `client_address` varchar(200) NOT NULL,
  `client_city` varchar(30) NOT NULL,
  `client_state` varchar(30) NOT NULL,
  `client_pin` varchar(30) NOT NULL,
  `client_occupation` varchar(30) NOT NULL,
  `client_organization` varchar(50) NOT NULL,
  `client_designation` varchar(50) NOT NULL,
  `client_source` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE `lead` (
  `lead_id` int(10) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_phone` varchar(30) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `primary_address` varchar(100) NOT NULL,
  `primary_city` varchar(30) NOT NULL,
  `primary_state` varchar(30) NOT NULL,
  `primary_postal_code` varchar(10) NOT NULL,
  `primary_country` varchar(30) NOT NULL,
  `other_address` varchar(100) NOT NULL,
  `other_city` varchar(30) NOT NULL,
  `other_state` varchar(30) NOT NULL,
  `other_postal_code` varchar(10) NOT NULL,
  `other_country` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `lead_source` varchar(30) NOT NULL,
  `status_description` text NOT NULL,
  `lead_source_description` text NOT NULL,
  `opportunity_amount` varchar(20) NOT NULL,
  `referred_by` varchar(50) NOT NULL,
  `assigned_to` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(10) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_location` varchar(100) NOT NULL,
  `project_area` int(10) NOT NULL,
  `project_image` varchar(100) NOT NULL,
  `project_admin` varchar(30) NOT NULL,
  `project_date` varchar(30) NOT NULL,
  `project_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE `property_type` (
  `property_type_id` int(5) NOT NULL,
  `property_type_name` varchar(30) NOT NULL,
  `created_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `source`
--

CREATE TABLE `source` (
  `source_id` int(5) NOT NULL,
  `source_name` varchar(30) NOT NULL,
  `created_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`lead_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `property_type`
--
ALTER TABLE `property_type`
  ADD PRIMARY KEY (`property_type_id`);

--
-- Indexes for table `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`source_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agent_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lead`
--
ALTER TABLE `lead`
  MODIFY `lead_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_type`
--
ALTER TABLE `property_type`
  MODIFY `property_type_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `source`
--
ALTER TABLE `source`
  MODIFY `source_id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
