-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2025 at 05:51 AM
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
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_description` text NOT NULL,
  `job_requirements` text NOT NULL,
  `salary_min` decimal(10,2) NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary_max` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_title`, `job_description`, `job_requirements`, `salary_min`, `location`, `salary_max`) VALUES
(1, 'IT Support Technician (ITS01)', 'We are looking for an IT Support Technician to help maintain and troubleshoot our company\'s IT infrastructure, ensuring smooth day-to-day operations.\r\n', 'Degree in IT or a related field\r\n2+ years of IT support experience</li>\r\nKnowledge of Windows, macOS, and Linux\r\nNetworking and hardware troubleshooting skills', 55000.00, 'Melbourne, VIC', 70000.00),
(2, 'Data Scientist (DTS02)', 'We are looking for a skilled Data Scientist to analyze and interpret complex datasets, providing actionable insights to guide business decisions.\r\n', 'Degree in Computer Science, Statistics, or related field\r\n3+ years of experience in data analysis and machine learning\r\nProficiency in Python, R, SQL\r\nExperience with data visualization tools (e.g., Tableau, Power BI)', 80000.00, 'Melbourne, VIC', 100000.00),
(3, 'UI Designer (UID04)', 'We are seeking a creative and detail-oriented UI Designer to craft intuitive and visually appealing digital interfaces that enhance user experience across web and mobile platforms.\r\n', 'Degree in Design, Human-Computer Interaction, or a related field\r\n2+ years of professional UI design experience\r\nProficiency in Figma, Adobe XD, or Sketch\r\nStrong understanding of layout, typography, and color theory', 75000.00, 'Melbourne, VIC', 95000.00),
(4, 'Software Engineer (SWE03)', 'We are seeking a talented Software Engineer to design, develop, and maintain software applications that meet our clients\' needs.\r\n', 'Bachelor\'s degree in Computer Science or related field\r\n3+ years of software development experience\r\nProficiency in Java, C#, or Python\r\nExperience with RESTful APIs and microservices architecture', 90000.00, 'Melbourne, VIC', 120000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
