-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2024 at 07:32 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `class_id` int NOT NULL AUTO_INCREMENT,
  `grade` varchar(55) NOT NULL,
  `section` varchar(11) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `grade`, `section`) VALUES
(6, 'A-11', 'A'),
(4, 'A-12', 'B'),
(5, 'B-11', 'C'),
(7, 'B-12', 'D'),
(8, 'C-11', 'E'),
(9, 'C-12', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `grades_id` int NOT NULL AUTO_INCREMENT,
  `grades_code` varchar(55) NOT NULL,
  `grade` varchar(11) NOT NULL,
  PRIMARY KEY (`grades_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grades_id`, `grades_code`, `grade`) VALUES
(3, '11', 'A'),
(2, '12', 'A'),
(4, '11', 'B'),
(5, '12', 'B'),
(6, '11', 'C'),
(7, '12', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `section_id` int NOT NULL AUTO_INCREMENT,
  `section` varchar(11) NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section`) VALUES
(14, 'A'),
(13, 'B'),
(16, 'C'),
(9, 'D'),
(15, 'E'),
(17, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(127) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(127) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `grade` varchar(11) NOT NULL,
  `section` varchar(11) NOT NULL,
  `address` varchar(31) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `username`, `password`, `fname`, `lname`, `grade`, `section`, `address`, `gender`, `email_address`, `date_of_birth`) VALUES
(10, 'lika', '$2y$10$dQCMkIpqsi1gkwotg3nIgOI99HU1K.C/ZBkP.qDMtVSfFIMC.CVNW', 'lika', 'san', 'A-11', 'A', 'phnompenh', 'male', 'phnom penh', '2024-01-28'),
(7, 'solika', '$2y$10$QRuAIh2vRtISrRFWqjhUKuycC0pR.zTfK0tO5sTMGwDvg0uDnPyGy', 'solika', 'pich', 'A-11', 'A', 'phnompenh', 'female', 'phnom penh', '2024-02-06'),
(8, 'tynin', '$2y$10$jnre6.GVPnXWtcn1lTyMDub641nMc/rK6PD.7C5iv56d3mKz.x9lW', 'tynin', 'kong', 'A-12', 'B', 'phnompenh', 'female', 'phnom penh', '2024-02-07'),
(22, 'sothea', '$2y$10$R1FqWUoswBihQUVKr6VbDuRgSwaBXgGoVfIzLCfY5eYYZ6o6qSv4i', 'sothea', 'tit', 'B-12', 'D', 'phnompenh', 'male', 'phnom penh', '2024-02-11'),
(20, 'ravy', '$2y$10$dAyM8ERHVgs99nmBECdQe.sGSTbpHYoGh93TBd/vm9lytXsUxomGm', 'ravy', 'chy', 'C-12', 'F', 'phnompenh', 'male', 'phnom penh', '2024-01-28'),
(19, 'sophy', '$2y$10$pW3RdreJ7F3rtxz0tAub9O3xJ8ekIAVxu9Y8v0mq0zFywmQaqWBRC', 'sophy', 'kim', 'B-11', 'C', 'phnompenh', 'male', 'phnom penh', '2024-01-30'),
(21, 'meng', '$2y$10$iwyF5TBYJxU81wW/XxNpAOZYxPwlt17iRhUL5KcZmLn/Ffx9gQ7tK', 'meng', 'kim', 'A-11', 'A', 'phnompenh', 'male', 'phnom penh', '2024-01-29'),
(15, 'visak', '$2y$10$yON32Log8LUB.kIzG2QML.n7JugfOllN7yy0bmpgLmSAbxV6cumTW', 'visak', 'van', 'C-11', 'E', 'phnompenh', 'male', 'phnom penh', '2024-02-07'),
(16, 'sothy', '$2y$10$N0JANToC.zbBqqcG1JCXleoQzi9V./6npOzAGv1XXhum0SsOXVMym', 'sothy', 'pen', 'B-11', 'C', 'phnompenh', 'male', 'phnom penh', '2024-02-12'),
(17, 'veasna', '$2y$10$quBvuw8ghThZ8yOg7zx1neVQ31Qfs.MCQHyGqe9dP9t0HM.jfyQhi', 'veasna', 'kim', 'B-12', 'D', 'phnompenh', 'male', 'phnom penh', '2024-01-30'),
(18, 'chheat', '$2y$10$VTo5narO7Hav/ojhrWO48.TaHiE73eZQGiqDDvcbDFtDHUGwo6mZC', 'chheat', 'heng', 'A-11', 'A', 'phnompenh', 'male', 'phnom penh', '2024-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(11) NOT NULL,
  `subject_code` varchar(55) NOT NULL,
  `grade` varchar(11) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `subject_code`, `grade`) VALUES
(3, 'Bootstrap', '1', 'A-11'),
(4, 'Veu js', '2', 'A-12'),
(5, 'Java', '3', 'B-11'),
(7, 'C++', '4', 'B-12'),
(10, 'Angula', '5', 'C-11'),
(11, 'React', '6', 'C-12');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `teachers_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(127) NOT NULL,
  `password` varchar(255) NOT NULL,
  `class` varchar(31) NOT NULL,
  `fname` varchar(127) NOT NULL,
  `lname` varchar(127) NOT NULL,
  `subjects` varchar(31) NOT NULL,
  `address` varchar(31) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_number` varchar(31) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  PRIMARY KEY (`teachers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teachers_id`, `username`, `password`, `class`, `fname`, `lname`, `subjects`, `address`, `date_of_birth`, `phone_number`, `gender`, `email_address`) VALUES
(10, 'vireak', '$2y$10$jzD5UhJv4msriA8Cb0UY2.5lwn2SEPG/2oPf4oxmYkZUIT.wg53LG', 'A-12(B)', 'vireak', 'sinh', '   Veu js', 'phnompenh', '2024-02-20', '0123212321', 'male', 'phnom penh'),
(8, 'sokreaksa', '$2y$10$V1Q/Jw7dcth4Q/vVmpAk1.izvdJEYQQs8DoEBkJV7.0dqhLLEBaYO', 'A-11(A)', 'sokreaksa', 'san', 'Bootstrap', 'phnompenh', '2024-01-30', '2323231', 'female', 'phnom penh'),
(11, 'piseth', '$2y$10$yb.pzLtdzmZ.D6GtzZB3neGYd6OgAew3Wi.4ULwln38va9TerL17y', 'B-11(C)', 'piseth', 'tep', 'Java', 'phnompenh', '2024-01-16', '0123212321', 'male', 'phnom penh'),
(16, 'oudom', '$2y$10$wumTzOwE9KqjqmOlLlUaHeUGqErFRILLqmLUPHyR.lolhdY9siub.', 'C-11(E)', 'oudom', 'nou', '   Angula', 'phnompenh', '2024-01-30', '0964654754', 'male', 'phnom penh'),
(15, 'virak', '$2y$10$4yI3jLIUwFzqdZtpe/3Pu.k8J4NpghcHtAkxOBlpltM3QYaMmvbNa', 'B-12(D)', 'virak', 'man', '   C++', 'phnompenh', '2024-02-06', '053237538', 'male', 'phnom penh'),
(14, 'kimheng', '$2y$10$.fhKt2F8R9tHATvU8wD4MuM59KeHPxs.B17.4YDWyuGgvsj.FdSIK', 'C-12(F)', 'kimheng', 'loem', '   React', 'phnompenh', '2024-01-30', '0123212321', 'male', 'phnom penh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `pwd` varchar(150) DEFAULT NULL,
  `roles` varchar(50) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `phone_number`, `pwd`, `roles`, `gender`) VALUES
(1, 'admin', 'Myadmin', 'admin@example.com', 'admin', '099767645', '$2y$10$3QOas0Z//GHIU0Q75DazEe7A17K/No9YtreeAh0ogJL3fClUoAeTq', 'Admin', 'male'),
(21, 'piseth', 'tep', '', 'piseth', '0123212321', '$2y$10$yb.pzLtdzmZ.D6GtzZB3neGYd6OgAew3Wi.4ULwln38va9TerL17y', 'teachers', 'male'),
(20, 'vireak', 'sinh', '', 'vireak', '0123212321', '$2y$10$jzD5UhJv4msriA8Cb0UY2.5lwn2SEPG/2oPf4oxmYkZUIT.wg53LG', 'teachers', 'male'),
(13, 'tynin', 'kong', '', 'tynin', '', '$2y$10$jnre6.GVPnXWtcn1lTyMDub641nMc/rK6PD.7C5iv56d3mKz.x9lW', 'student', 'female'),
(16, 'sokreaksa', 'san', '', 'sokreaksa', '2323231', '$2y$10$V1Q/Jw7dcth4Q/vVmpAk1.izvdJEYQQs8DoEBkJV7.0dqhLLEBaYO', 'teachers', 'female'),
(17, 'lika', 'san', '', 'lika', '', '$2y$10$dQCMkIpqsi1gkwotg3nIgOI99HU1K.C/ZBkP.qDMtVSfFIMC.CVNW', 'student', 'female'),
(31, 'sophy', 'kim', '', 'sophy', '', '$2y$10$pW3RdreJ7F3rtxz0tAub9O3xJ8ekIAVxu9Y8v0mq0zFywmQaqWBRC', 'student', 'male'),
(36, 'oudom', 'nou', '', 'oudom', '0964654754', '$2y$10$wumTzOwE9KqjqmOlLlUaHeUGqErFRILLqmLUPHyR.lolhdY9siub.', 'teachers', 'male'),
(35, 'virak', 'man', '', 'virak', '053237538', '$2y$10$4yI3jLIUwFzqdZtpe/3Pu.k8J4NpghcHtAkxOBlpltM3QYaMmvbNa', 'teachers', 'male'),
(33, 'meng', 'kim', '', 'meng', '', '$2y$10$iwyF5TBYJxU81wW/XxNpAOZYxPwlt17iRhUL5KcZmLn/Ffx9gQ7tK', 'student', 'male'),
(32, 'ravy', 'chy', '', 'ravy', '', '$2y$10$dAyM8ERHVgs99nmBECdQe.sGSTbpHYoGh93TBd/vm9lytXsUxomGm', 'student', 'male'),
(27, 'visak', 'van', '', 'visak', '', '$2y$10$yON32Log8LUB.kIzG2QML.n7JugfOllN7yy0bmpgLmSAbxV6cumTW', 'student', 'male'),
(28, 'sothy', 'pen', '', 'sothy', '', '$2y$10$N0JANToC.zbBqqcG1JCXleoQzi9V./6npOzAGv1XXhum0SsOXVMym', 'student', 'male'),
(29, 'veasna', 'kim', '', 'veasna', '', '$2y$10$quBvuw8ghThZ8yOg7zx1neVQ31Qfs.MCQHyGqe9dP9t0HM.jfyQhi', 'student', 'male'),
(30, 'chheat', 'heng', '', 'chheat', '', '$2y$10$VTo5narO7Hav/ojhrWO48.TaHiE73eZQGiqDDvcbDFtDHUGwo6mZC', 'student', 'male'),
(34, 'kimheng', 'loem', '', 'kimheng', '0123212321', '$2y$10$.fhKt2F8R9tHATvU8wD4MuM59KeHPxs.B17.4YDWyuGgvsj.FdSIK', 'teachers', 'male'),
(37, 'sothea', 'tit', '', 'sothea', '', '$2y$10$R1FqWUoswBihQUVKr6VbDuRgSwaBXgGoVfIzLCfY5eYYZ6o6qSv4i', 'student', 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
