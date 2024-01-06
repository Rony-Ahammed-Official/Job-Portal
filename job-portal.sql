-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 04:54 PM
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
-- Database: `job-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `phone`, `password`) VALUES
(3, 'sanwar', 'sanwar@gmail.com', '0123456789', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `company_data`
--

CREATE TABLE `company_data` (
  `id` int(11) NOT NULL,
  `comName` varchar(255) NOT NULL,
  `comLocation` varchar(255) NOT NULL,
  `comLogo` varchar(255) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `workTime` varchar(255) NOT NULL,
  `jobType` varchar(255) NOT NULL,
  `jobSalary` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_data`
--

INSERT INTO `company_data` (`id`, `comName`, `comLocation`, `comLogo`, `jobTitle`, `workTime`, `jobType`, `jobSalary`, `description`, `created_at`) VALUES
(1, 'sdffsdf', 'sdffsdf', 'Screenshot 2023-10-16 141450.png', 'sdffsdf', 'sdffsdf', 'sdffsdf', '34343', '<p>Hello, World!</p>', '2023-11-12 20:41:44'),
(2, 'sdffsdf', 'sdffsdf', 'Screenshot 2023-11-06 003040.png', 'sdffsdf', 'sdffsdf', 'sdffsdf', '34343', '<p>Hello, World!</p>', '2023-11-12 20:42:34'),
(3, 'sdffsdf', 'sdffsdf', 'Screenshot 2023-10-20 215952.png', 'sdffsdf', 'sdffsdf', 'sdffsdf', '34343', '<p>Hello, World!</p>', '2023-11-12 20:43:50'),
(4, 'sdffsdf', 'sdffsdf', 'Screenshot 2023-10-20 215952.png', 'sdffsdf', 'sdffsdf', 'sdffsdf', '34343', '<p>Hello, World!</p>', '2023-11-12 20:46:19'),
(5, 'sdffsdf', 'sdffsdf', 'Screenshot 2023-10-20 215952.png', 'sdffsdf', 'sdffsdf', 'sdffsdf', '34343', '<p>Hello, World!</p>', '2023-11-12 20:46:25'),
(6, 'sdffsdf', 'sdffsdf', 'Screenshot 2023-10-20 215952.png', 'sdffsdf', 'sdffsdf', 'sdffsdf', '34343', '<p>Hello, World!</p>', '2023-11-12 20:46:34'),
(7, 'sdffsdf', 'sdffsdf', 'Screenshot 2023-10-20 215952.png', 'sdffsdf', 'sdffsdf', 'sdffsdf', '34343', '<p>Hello, World!</p>', '2023-11-12 20:46:48'),
(8, 'sdffsdf', 'sdffsdf', 'Screenshot 2023-10-20 215952.png', 'sdffsdf', 'sdffsdf', 'sdffsdf', '34343', '<p>Hello, World!</p>', '2023-11-12 20:55:54'),
(9, 'sdffsdf', 'sdffsdf', 'Screenshot 2023-10-20 215952.png', 'sdffsdf', 'sdffsdf', 'sdffsdf', '34343', '<p>Hello, World!</p>', '2023-11-12 20:56:11'),
(10, 'aasdasdadasd', 'aasdasdadasd', 'Screenshot 2023-10-20 215952.png', 'aasdasdadasd', 'aasdasdadasd', 'aasdasdadasd', '12121', '<p>aasdasdadasdaasdasdadasdaasdasdadasdaasdasdadasd</p>', '2023-11-12 21:01:20'),
(11, 'naifa', 'eastern', '1.jpg', 'asdasd', 'asdasd', 'asdasd', '455454545454', '<p>Hello, World!sdasdad</p>', '2023-11-19 20:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `option1` varchar(255) DEFAULT NULL,
  `option2` varchar(255) DEFAULT NULL,
  `option3` varchar(255) DEFAULT NULL,
  `option4` varchar(255) DEFAULT NULL,
  `correct_option` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_option`) VALUES
(262, 'What does HTML stand for?', 'Hyper Text Markup Language', 'High Tech Modern Language', 'Hyperlink and Text Markup Language', 'Hyper Transfer Markup Language', 'Hyper Text Markup Language'),
(263, 'Which of the following is used to add styling to a web page?', 'HTML', 'CSS', 'JS', 'XML', 'CSS'),
(264, 'What is the purpose of JavaScript in web development?', 'Database management', 'Styling web pages', 'Adding interactivity to web pages', 'Creating web layouts', 'Adding interactivity to web pages'),
(265, 'What is the correct syntax for a comment in JavaScript?', '<!-- This is a comment -->', '/* This is a comment */', '# This is a comment #', '// This is a comment', '// This is a comment'),
(266, 'Which of the following is a block-level element in HTML?', 'span', 'div', 'a', 'strong', 'div'),
(267, 'What does CSS stand for?', ' Computer Style Sheets', 'Creative Style Sheets', 'Cascading Style Sheets', 'Colorful Style Sheets', 'Cascading Style Sheets'),
(268, 'Which of the following is NOT a valid way to declare a variable in JavaScript?', 'var x = 10;', 'let x = 10;', 'const x = 10;', 'variable x = 10;', 'variable x = 10;'),
(269, 'What does the \"HTTP\" stand for in a URL?', 'HyperText Transfer Protocol', 'High Transfer Text Protocol', 'HyperText Transmission Protocol', 'High Tech Transfer Protocol', 'HyperText Transfer Protocol'),
(270, 'Which of the following is used to make a responsive web design?', 'JavaScript', 'CSS Grid', 'Bootstrap', 'HTML', 'Bootstrap'),
(271, 'What is the purpose of the \'<\'canvas\'>\'element in HTML5?', 'To embed video files', 'To draw graphics using JavaScript', ' To create forms', 'To define navigation links', 'To draw graphics using JavaScript');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_data`
--
ALTER TABLE `company_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_data`
--
ALTER TABLE `company_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
