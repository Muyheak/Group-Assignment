-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2025 at 12:17 PM
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
-- Table structure for table `eoi`
--

CREATE TABLE `eoi` (
  `EOInumber` int(11) NOT NULL,
  `Job Reference Number` varchar(5) NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `Street Address` varchar(100) NOT NULL,
  `Suburb/Town` int(50) NOT NULL,
  `State` int(50) NOT NULL,
  `Postcode` varchar(4) NOT NULL,
  `Email Address` int(40) NOT NULL,
  `Phone Number` int(12) NOT NULL,
  `Windows` tinyint(1) NOT NULL,
  `Linux` tinyint(1) NOT NULL,
  `iOS/MacOS` tinyint(1) NOT NULL,
  `Android` tinyint(1) NOT NULL,
  `Java` tinyint(1) NOT NULL,
  `Python` tinyint(1) NOT NULL,
  `C++` tinyint(1) NOT NULL,
  `JavaScript` tinyint(1) NOT NULL,
  `HTML/CSS` tinyint(1) NOT NULL,
  `SQLskill` tinyint(1) NOT NULL,
  `Other Skills` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_ref_number` varchar(5) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_description` text NOT NULL,
  `job_requirements` text NOT NULL,
  `salary_min` decimal(10,2) NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary_max` decimal(10,2) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `Key_responsibilities` text NOT NULL,
  `Preferable_requirements` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_ref_number`, `job_title`, `job_description`, `job_requirements`, `salary_min`, `location`, `salary_max`, `sort_order`, `Key_responsibilities`, `Preferable_requirements`) VALUES
(1, 'ITS01', 'IT Support Technician', 'We are looking for an IT Support Technician to help maintain and troubleshoot our company\'s IT infrastructure, ensuring smooth day-to-day operations.\r\n', '<ul>\r\n  <li>Degree in IT or a related field</li>\r\n  <li>2+ years of IT support experience</li>\r\n  <li>Knowledge of Windows, macOS, and Linux</li>\r\n  <li>Networking and hardware troubleshooting skills</li>\r\n</ul>', 55000.00, 'Melbourne, VIC', 70000.00, 2, '<ul>\r\n        <li>Provide technical support for internal staff</li>\r\n        <li>Install and configure hardware/software</li>\r\n        <li>Monitor IT systems for optimal performance</li>\r\n        <li>Assist with IT-related projects</li>\r\n        <li>Document IT procedures and maintain a knowledge base</li>\r\n      </ul>', ' <ol>\r\n        <li>Certifications: CompTIA A+, MCITP</li>\r\n        <li>Experience with cloud services like AWS or Azure</li>\r\n      </ol>\r\n'),
(2, 'DTS02', 'Data Scientist', 'We are looking for a skilled Data Scientist to analyze and interpret complex datasets, providing actionable insights to guide business decisions.\r\n', '<ul>\r\n  <li>Degree in Computer Science, Statistics, or related field</li>\r\n  <li>3+ years of experience in data analysis and machine learning</li>\r\n  <li>Proficiency in Python, R, SQL</li>\r\n  <li>Experience with data visualization tools (e.g., Tableau, Power BI)</li>\r\n</ul>', 80000.00, 'Melbourne, VIC', 100000.00, 1, ' <ul>\r\n        <li>Analyze and interpret data to guide decision-making</li>\r\n        <li>Develop and implement machine learning models</li>\r\n        <li>Collaborate with teams to translate challenges into data solutions</li>\r\n        <li>Create reports and visualizations for stakeholders</li>\r\n      </ul>', '<ol>\r\n        <li>Master’s or PhD in Data Science or related field</li>\r\n        <li>Experience with big data technologies (Hadoop, Spark)</li>\r\n      </ol>'),
(3, 'UID04', 'UI Designer', 'We are seeking a creative and detail-oriented UI Designer to craft intuitive and visually appealing digital interfaces that enhance user experience across web and mobile platforms.\r\n', '<ul>\r\n  <li>Degree in Computer Science, Statistics, or related field</li>\r\n  <li>Degree in Design, Human-Computer Interaction, or a related field</li>\r\n  <li>Proficiency in Figma, Adobe XD, or Sketch</li>\r\n  <li>Strong understanding of layout, typography, and color theory</li>\r\n</ul>\r\n', 75000.00, 'Melbourne, VIC', 95000.00, 4, '<ul>\r\n        <li>Design user interfaces for websites, apps, and digital products</li>\r\n        <li>Create wireframes, mockups, and interactive prototypes</li>\r\n        <li>Collaborate with UX designers, developers, and stakeholders</li>\r\n        <li>Maintain consistency with design systems and brand guidelines</li>\r\n      </ul>', ' <ol>\r\n        <li>Experience with motion design or animation tools</li>\r\n        <li>Familiarity with front-end development (HTML, CSS, JavaScript)</li>\r\n      </ol>'),
(4, 'SWE03', 'Software Engineer', 'We are seeking a talented Software Engineer to design, develop, and maintain software applications that meet our clients\' needs.\r\n', '<ul>\r\n  <li>Bachelor\'s degree in Computer Science or related field</li>\r\n  <li>3+ years of software development experience</li>\r\n  <li>Proficiency in Java, C#, or Python</li>\r\n  <li>Experience with RESTful APIs and microservices architecture</li>\r\n</ul>\r\n\r\n', 90000.00, 'Melbourne, VIC', 120000.00, 3, ' <ul>\r\n        <li>Develop and maintain software applications</li>\r\n        <li>Collaborate with cross-functional teams to define requirements</li>\r\n        <li>Troubleshoot and debug applications</li>\r\n        <li>Participate in code reviews and maintain coding standards</li>\r\n      </ul>', '<ol>\r\n        <li>Experience with cloud platforms (AWS, Azure)</li>\r\n        <li>Kubernetes or Docker experience is a plus</li>\r\n      </ol>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eoi`
--
ALTER TABLE `eoi`
  ADD PRIMARY KEY (`EOInumber`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eoi`
--
ALTER TABLE `eoi`
  MODIFY `EOInumber` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
