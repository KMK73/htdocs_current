-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2015 at 11:07 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `peak_360`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wod_results`
--

CREATE TABLE `wod_results` (
  `workout_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rep_score` int(11) NOT NULL,
  `round_score` int(11) NOT NULL,
  `time_score` time NOT NULL,
  `level` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workouts`
--

CREATE TABLE `workouts` (
`workout_id` int(11) NOT NULL,
  `workout_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `wod_date` date NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `workouts`
--

INSERT INTO `workouts` (`workout_id`, `workout_name`, `type`, `wod_date`, `description`) VALUES
(16, 'Jesus', 'timed', '2015-03-18', 'Sit Ups'),
(17, 'crossfit open 15.3', 'reps', '2015-03-19', 'WORKOUT 15.3 Complete as many rounds and reps as possible in 14 minutes of: 7 muscle-ups 50 wall-ball shots 100 double-unders Men use 20-lb. ball to 10 feet, Women use 14-lb. ball to 9 feet Scaled Option: 14 Minute AMRAP 50 wall-ball shots 200 Single-unders');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workouts`
--
ALTER TABLE `workouts`
 ADD PRIMARY KEY (`workout_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `workouts`
--
ALTER TABLE `workouts`
MODIFY `workout_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;