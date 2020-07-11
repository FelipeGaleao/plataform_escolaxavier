-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 02:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escola_xavier`
--
CREATE DATABASE IF NOT EXISTS `escola_xavier` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `escola_xavier`;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `active` varchar(11) DEFAULT NULL,
  `school_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `created`, `modified`, `active`, `school_id`) VALUES
(5, 'Biológicas', 'Curso de biológicas da Sede 01 na Escola Xavier', '2020-07-10 15:21:43', '2020-07-10 15:21:43', NULL, 4),
(6, 'Exatas', 'Curso de Exatas da Escola Xavier', '2020-07-10 15:26:49', '2020-07-10 15:26:49', 'on', 4),
(7, 'Humanas', 'Curso de Humanas da Escola Xavier', '2020-07-10 15:28:06', '2020-07-10 15:28:06', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `dailybooks`
--

CREATE TABLE `dailybooks` (
  `id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dailybooks`
--

INSERT INTO `dailybooks` (`id`, `course_id`, `subject_id`, `created`, `modified`, `data`) VALUES
(1, 5, 6, '2020-07-10 16:52:39', '2020-07-10 16:52:39', NULL),
(2, 5, 4, '2020-07-10 17:04:16', '2020-07-10 17:04:16', NULL),
(4, 5, 5, '2020-07-10 21:11:21', '2020-07-10 21:11:21', ''),
(5, 6, 7, '2020-07-10 21:11:36', '2020-07-10 21:11:36', ''),
(6, 6, 8, '2020-07-10 21:11:53', '2020-07-10 21:11:53', ''),
(8, 6, 9, '2020-07-10 21:12:41', '2020-07-10 21:12:41', ''),
(9, 7, 10, '2020-07-10 21:12:59', '2020-07-10 21:12:59', ''),
(10, 7, 11, '2020-07-10 21:13:16', '2020-07-10 21:13:16', ''),
(11, 7, 12, '2020-07-10 23:11:36', '2020-07-10 23:11:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `created`, `modified`, `status`, `course_id`, `subject_id`, `student_id`) VALUES
(7, '2020-07-10 15:31:31', '2020-07-10 15:31:31', 'Em andamento', 5, 4, 3),
(8, '2020-07-10 15:31:53', '2020-07-10 15:31:53', 'Em andamento', 5, 5, 3),
(9, '2020-07-10 15:32:26', '2020-07-10 15:32:26', 'Em andamento', 5, 6, 3),
(10, '2020-07-10 15:31:31', '2020-07-10 15:31:31', 'Em andamento', 5, 4, 4),
(11, '2020-07-10 15:31:53', '2020-07-10 15:31:53', 'Em andamento', 5, 5, 4),
(12, '2020-07-10 15:32:26', '2020-07-10 15:32:26', 'Em andamento', 5, 6, 4),
(13, '2020-07-10 15:38:05', '2020-07-10 15:38:05', 'Em andamento', 6, 7, 4),
(14, '2020-07-10 15:38:30', '2020-07-10 15:38:30', 'Em andamento', 6, 8, 4),
(15, '2020-07-10 15:38:54', '2020-07-10 15:38:54', 'Em andamento', 6, 9, 4),
(16, '2020-07-10 15:39:42', '2020-07-10 15:39:42', 'Em andamento', 7, 10, 5),
(17, '2020-07-10 15:40:08', '2020-07-10 15:40:08', 'Em andamento', 7, 11, 5),
(18, '2020-07-10 23:08:49', '2020-07-10 23:08:49', 'Em andamento', 7, 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text,
  `description` text,
  `grade_value` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `enrollment_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name`, `description`, `grade_value`, `created`, `modified`, `enrollment_id`) VALUES
(3, 'Avaliação P1', 'Avaliação P1', '7', '2020-07-10 15:43:08', '2020-07-10 15:43:08', 7),
(4, 'Avaliação P1', 'Avaliação P1', '5', '2020-07-10 15:43:42', '2020-07-10 15:44:06', 8),
(5, 'Avaliação P1', 'Avaliação P1', '10', '2020-07-10 15:45:36', '2020-07-10 15:45:36', 9),
(6, 'Avaliação P1', 'Avaliação P1', '7', '2020-07-10 15:46:11', '2020-07-10 15:46:11', 10),
(7, 'Avaliação P1', 'Avaliação P1', '8', '2020-07-10 16:00:00', '2020-07-10 16:00:00', 11),
(8, 'Avaliação P1', 'Avaliação P1', '6.5', '2020-07-10 16:01:08', '2020-07-10 16:01:08', 12),
(9, 'Avaliação P1', 'Avaliação P1', '5', '2020-07-10 16:01:42', '2020-07-10 16:01:42', 13),
(10, 'Avaliação P1', 'Avaliação P1', '5.5', '2020-07-10 16:02:03', '2020-07-10 16:02:03', 14),
(11, 'Avaliação P1', 'Avaliação P1', '8', '2020-07-10 16:02:27', '2020-07-10 16:02:27', 15),
(12, 'Avaliação P1', 'Avaliação P1', '6.5', '2020-07-10 16:03:07', '2020-07-10 16:03:07', 17),
(13, 'Avaliação P1', 'Avaliação P1', '9', '2020-07-10 16:03:31', '2020-07-10 16:03:31', 16),
(14, 'Avaliação Final', '7', '7', '2020-07-10 23:10:13', '2020-07-10 23:10:13', 18);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `average_final` varchar(30) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `course_id`, `subject_id`, `average_final`, `status`, `created`, `modified`, `student_id`) VALUES
(59, 5, 4, '7', NULL, '2020-07-10 20:48:51', '2020-07-10 20:48:51', 3),
(60, 5, 6, '6.5', NULL, '2020-07-10 20:51:36', '2020-07-10 20:51:36', 4),
(61, 5, 6, '10', NULL, '2020-07-10 20:51:42', '2020-07-10 20:51:42', 3),
(62, 7, 11, '6.5', NULL, '2020-07-10 21:13:59', '2020-07-10 21:13:59', 5),
(63, 7, 10, '9', NULL, '2020-07-10 21:19:15', '2020-07-10 21:19:15', 5),
(64, 6, 9, '8', NULL, '2020-07-10 21:19:31', '2020-07-10 21:19:31', 4),
(65, 6, 8, '5.5', NULL, '2020-07-10 21:19:40', '2020-07-10 21:19:40', 4),
(66, 6, 7, '5', NULL, '2020-07-10 21:19:48', '2020-07-10 21:19:48', 4),
(67, 5, 5, '8', NULL, '2020-07-10 21:19:56', '2020-07-10 21:19:56', 4),
(68, 5, 5, '5', NULL, '2020-07-10 21:19:56', '2020-07-10 21:19:56', 3),
(69, 5, 4, '7', NULL, '2020-07-10 21:20:20', '2020-07-10 21:20:20', 4),
(70, 7, 12, '7', NULL, '2020-07-10 23:14:00', '2020-07-10 23:14:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `name` text,
  `description` text,
  `address` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `active` varchar(40) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`name`, `description`, `address`, `created`, `modified`, `active`, `id`) VALUES
('Escola Xavier - Sede 01', 'Escola Xavier', 'Parque dos Poderes', '2020-07-10 15:19:31', '2020-07-10 15:19:31', 'on', 4);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text,
  `cpf` varchar(50) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `school_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `cpf`, `email`, `created`, `modified`, `school_id`) VALUES
(3, 'Aluno 01', '072.090.871-09', 'aluno01@sgi.com.br', '2020-07-10 15:28:44', '2020-07-10 15:28:44', 4),
(4, 'Aluno 02', '072.090.871-09', 'aluno02@sgi.com', '2020-07-10 15:29:34', '2020-07-10 15:29:34', 4),
(5, 'Aluno 03', '072.090.871-09', 'aluno03@sgi.com', '2020-07-10 15:30:00', '2020-07-10 15:30:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(400) DEFAULT NULL,
  `description` varchar(400) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `active` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `description`, `course_id`, `created`, `modified`, `active`) VALUES
(4, 'Aerobiologia', 'Matéria de Aerobiologia', 5, '2020-07-10 15:23:09', '2020-07-10 15:23:09', 'on'),
(5, 'Anatomia', 'Matéria de Anatomia do curso de Biológicas', 5, '2020-07-10 15:25:13', '2020-07-10 15:25:13', NULL),
(6, 'Antropologia', 'Matéria de Antropologia do curso de Biológicas', 5, '2020-07-10 15:25:40', '2020-07-10 15:25:40', NULL),
(7, 'Cálculo', 'Calculo do Curso de Exatas', 6, '2020-07-10 15:34:23', '2020-07-10 15:34:23', 'on'),
(8, 'Geometria', 'Geometria do Curso de Exatas', 6, '2020-07-10 15:34:50', '2020-07-10 15:34:50', 'on'),
(9, 'Trigonometria', 'Trigonometria do Curso de Exatas', 6, '2020-07-10 15:35:43', '2020-07-10 15:35:43', 'on'),
(10, 'Direito Civil', 'Direito Civil do curso de Humanas', 7, '2020-07-10 15:36:35', '2020-07-10 15:36:35', 'on'),
(11, 'Psicologia', 'Psicologia do Curso de Humanas', 7, '2020-07-10 15:37:04', '2020-07-10 15:37:04', 'on'),
(12, 'Filosofia', 'Filosofia do curso de Humanas', 7, '2020-07-10 23:07:56', '2020-07-10 23:07:56', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `username` text NOT NULL,
  `email` varchar(300) DEFAULT NULL,
  `password` text,
  `active` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `active`, `created`, `modified`, `role`) VALUES
(6, 'Maycon Felipe da Silva Mota', 'mayconfelipemotamw3@gmail.com', 'mayconfelipemotamw3@gmail.com', '$2y$10$ncE2guw//NY1QgREy5U8le0zsuoztJBKJ0dBkA1d/FKhP3blHeWDK', 1, '2020-07-10 00:38:00', '2020-07-10 00:51:04', 1),
(7, 'Maycon Felipe da Silva Mota', 'mayconfelipemotamw3@gmail.com', 'mayconfelipemotamw33@gmail.com', '$2y$10$Y2NVN/NaFVyaCcY0Q/oNveydnP0x.yWD8il.x04yR0PZ7iWT1/kmy', 1, '2020-07-10 00:41:16', '2020-07-10 00:41:16', 1),
(8, 'Maycon Felipe da Silva Mota', '', 'maycon@projetomedalha.org', '$2y$10$1J6WWyfKOmJovqcKPiM9cuGCljEaA97kWz94SqKs5t.KngpVLvm5y', 1, '2020-07-10 00:42:23', '2020-07-10 00:42:23', 1),
(9, 'MAYCON FELIPE DA SILVA MOTA', 'maycao@gmail.com', 'maycao@gmail.com', '$2y$10$EPONX1EeUXQk31za5DPfkuVCzr.MqI2TYPQKelYF71sLJO5wFfaxu', 1, '2020-07-10 00:43:08', '2020-07-10 00:43:08', 1),
(10, 'Paola Bucharelli', 'paola.bucharelli@escolaxavier.com', 'paola.bucharelli@escolaxavier.com', '$2y$10$MRBNGjoZsI7Rs5HbHTz3KuddEkxm6t3DeNi36ClbWo1gFavzxSoTa', NULL, '2020-07-10 23:37:18', '2020-07-10 23:37:18', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_courses_school_idx` (`school_id`);

--
-- Indexes for table `dailybooks`
--
ALTER TABLE `dailybooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_enrollments_courses1_idx` (`course_id`),
  ADD KEY `fk_enrollments_subjects1_idx` (`subject_id`),
  ADD KEY `fk_enrollments_students1_idx` (`student_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_grades_enrollments1_idx` (`enrollment_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_students_school1_idx` (`school_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dailybooks`
--
ALTER TABLE `dailybooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `fk_courses_school` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `fk_enrollments_courses1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_enrollments_students1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_enrollments_subjects1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `fk_grades_enrollments1` FOREIGN KEY (`enrollment_id`) REFERENCES `enrollments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_students_school1` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
