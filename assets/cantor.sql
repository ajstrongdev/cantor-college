-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 10:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cantorcourses`
--

-- --------------------------------------------------------

--
-- Table structure for table `cantor`
--

CREATE TABLE `cantor` (
  `Title` text NOT NULL,
  `Type` text NOT NULL,
  `Summary` text NOT NULL,
  `Award` text NOT NULL,
  `Code` text NOT NULL,
  `Points` int(11) NOT NULL,
  `Entry` text NOT NULL,
  `Attendance` text NOT NULL,
  `Study` text NOT NULL,
  `Foundation` text NOT NULL,
  `Subject` text NOT NULL,
  `Recruiting` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cantor`
--

INSERT INTO `cantor` (`Title`, `Type`, `Summary`, `Award`, `Code`, `Points`, `Entry`, `Attendance`, `Study`, `Foundation`, `Subject`, `Recruiting`) VALUES
('Computing', 'Undergraduate', 'Learn how to code, configure and integrate applications, databases and systems architectures which form the pillars of modern technology in today&rsquo;s world.', 'BSc (Honours)', 'G504', 112, '2022/23', 'Full-time', '3 / 4 Years', 'false', 'Computing', 'false'),
('Computer Networks', 'Undergraduate', 'This course includes general computing skills in programming, cyber security, information systems, management and professionalism in a technical environment.', 'BSc (Honours)', 'G420', 112, '2022/23', 'Full-time', '3 / 4 Years', 'false', 'Computing', 'false'),
('Cyber Security with Forensics', 'Undergraduate', 'Prepare for a career in cyber security by designing security systems, identifying evidence of cybercrimes and acting as detectives in a digital world.', 'BSc (Honours)', 'F4G4', 112, '2022/23', 'Full-time', '3 / 4 Years', 'false', 'Computing', 'false'),
('Computer Science for Games', 'Undergraduate', 'Create the software powering the next generation of blockbuster games.', 'BSc (Honours)', 'G611', 112, '2022/23', 'Full-time', '3 / 4 Years', 'false', 'Computing', 'false'),
('Software Engineering', 'Undergraduate', 'Gain experience in the whole software development process and prepare for a career in software engineering.', 'BEng (Honours)', 'G600', 112, '2022/23', 'Full-time', '3 / 4 Years', 'false', 'Computing', 'false'),
('Computer Science', 'Undergraduate', 'Gain a solid foundation in the core areas of computer science, including programming, algorithms, data structures and software development.', 'BSc (Honours)', 'G400', 112, '2022/23', 'Full-time', '3 / 4 Years', 'false', 'Computing', 'false'),
('Computing with Foundation Year', 'Undergraduate', 'Gain a degree in computing&nbsp;&ndash; with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A020', 80, '2022/23', 'Full-time', '4/5 Years', 'true', 'Computing', 'true'),
('Cyber Security with Forensics with Foundation Year', 'Undergraduate', 'Gain a degree in cyber security with forensics, with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A023', 80, '2022/23', 'Full-time', '4/5 Years', 'true', 'Computing', 'true'),
('Software Engineering with Foundation Year', 'Undergraduate', 'Gain a degree in software engineering, with an initial foundation year to prepare for the course.', 'BEng (Honours)', 'A017', 80, '2022/23', 'Full-time', '4/5 Years', 'true', 'Computing', 'true'),
('Cyber Security with Foundation Year', 'Undergraduate', 'Gain a degree in cyber security &ndash; with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A093', 80, '2022/23', 'Full-time', '4/5 Years', 'true', 'Computing', 'true'),
('Information Technology with Business Studies with Foundation Year', 'Undergraduate', 'Gain a degree in information technology with business studies, with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A019', 80, '2022/23', 'Full-time', '4/5 Years', 'true', 'Computing', 'true'),
('Computer Science with Foundation Year', 'Undergraduate', 'Gain a degree in computer science, with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A022', 80, '2022/23', 'Full-time', '4/5 Years', 'true', 'Computing', 'true'),
('Computer Science for Games with Foundation Year', 'Undergraduate', 'Gain a degree in computer science for games, with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A092', 80, '2022/23', 'Full-time', '4/5 Years', 'true', 'Computing', 'true'),
('Business and Digital Technology with Foundation Year', 'Undergraduate', 'Gain a degree in business and digital communications technology &ndash; with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A018', 80, '2022/23', 'Full-time', '4/5 Years', 'true', 'Computing', 'true'),
('Computing', 'Postgraduate', 'A course enhanced by real-life project experience for non-computing graduates wanting to pursue a career in the IT industry.', 'MSc', '', 0, '2022/23', 'Part-time', '3 Years', 'false', 'Computing', 'false'),
('Computing and Informatics', 'Postgraduate', 'Conduct a period of intensive, supervised study where you critically investigate and evaluate an approved topic and make an original contribution to knowledge.', 'MPhil', '', 0, '2022/23', 'Part-time', '3 Years', 'false', 'Computing', 'false'),
('Cyber Security', 'Postgraduate', 'Develop your skills and academic knowledge in the growing field of cyber security through academic teaching, industry input and practical skills development.&nbsp;<strong>Currently applications for this course are only open to home students.</strong>', 'MSc', '', 0, '2022/23', 'Full-time', '1 Year', 'false', 'Computing', 'false'),
('Graphic Design', 'Undergraduate', 'Develop your own creative and innovative approach to graphic design by challenging and exploring contemporary practices through a series of exciting and diverse projects.', 'BA (Honours)', 'W210', 112, '2022/23', 'Full-time', '3 / 4 Years', 'false', 'Art and design', 'false'),
('Interior Architecture and Design', 'Undergraduate', 'Develop your own creative and sustainable approach to interior architecture and design by challenging and exploring contemporary practices through a series of exciting and diverse projects.', 'BA (Honours)', 'W250', 112, '2022/23', 'Full-time', '3 / 4 Years', 'false', 'Art and design', 'false'),
('Jewellery, Materials and Design', 'Undergraduate', 'Develop your own creative and innovative approach to jewellery design, challenging and exploring contemporary practices through new technologies and craft techniques.', 'BA (Honours)', 'W721', 112, '2022/23', 'Full-time', '3 / 4 Years', 'false', 'Art and design', 'false'),
('Game Design and Development', 'Undergraduate', 'Study a course with a distinctive, practice-based approach to games design &ndash; gaining a diverse skill set and useful experience within the field.', 'BA (Honours)', 'A112', 112, '2022/23', 'Full-time', '3 / 4 Years', 'false', 'Art and design', 'false'),
('Product Design', 'Undergraduate', 'Develop a highly creative approach to producing innovative \'future-facing\' products by exploring and challenging design through a series of exciting and diverse projects.', 'BSc (Honours)', 'D009', 112, '2022/23', 'Full-time', '3 / 4 Years', 'false', 'Art and design', 'false'),
('Product Design', 'Undergraduate', 'Develop a creative and innovative approach to product design and service innovation by challenging and exploring contemporary practices through a series of exciting and diverse projects.', 'BA (Honours)', 'W240', 112, '2022/23', 'Full-time', '3 / 4 Years', 'false', 'Art and design', 'false'),
('Digital Media Production', 'Undergraduate', 'Design and produce new media products in film, animation, interactive media, web, apps, VR, cross-media and games.', 'BA (Honours)', 'W212', 112, '2022/23', 'Full-time', '3 / 4 Years', 'false', 'Art and design', 'false');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
