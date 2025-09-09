-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 28 Απρ 2022 στις 21:38:08
-- Έκδοση διακομιστή: 10.4.11-MariaDB
-- Έκδοση PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `questionhouse`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `answers`
--

CREATE TABLE `answers` (
  `AnswerID` int(11) NOT NULL,
  `QQID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `qq`
--

CREATE TABLE `qq` (
  `QQID` int(11) NOT NULL,
  `QuestionID` int(11) NOT NULL,
  `QuizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `questions`
--

CREATE TABLE `questions` (
  `QuestionID` int(11) NOT NULL,
  `text` varchar(100) NOT NULL,
  `A1` varchar(100) NOT NULL,
  `A2` varchar(100) NOT NULL,
  `A3` varchar(100) NOT NULL,
  `A4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `quiz`
--

CREATE TABLE `quiz` (
  `QuizID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `UsersID` int(11) NOT NULL,
  `usertype` enum('user','admin') NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersSurname` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`UsersID`, `usertype`, `usersName`, `usersSurname`, `usersUid`, `usersPwd`, `usersEmail`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '$2y$10$Akk2M6.2T46WJu3APjm38u7tSgtLL83WJEqas9smoUyEa30gDDvJq', 'admin@gmail.com'),
(2, 'user', 'John', 'Doe', 'JohnDoe', '$2y$10$paAd/nxFtCNxqHH9d7pxD.CjjdDN2etE3G7wpK/3/GFntZs3Ck7NW', 'JohnDoe@gmail.com');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`AnswerID`);

--
-- Ευρετήρια για πίνακα `qq`
--
ALTER TABLE `qq`
  ADD PRIMARY KEY (`QQID`);

--
-- Ευρετήρια για πίνακα `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QuestionID`);

--
-- Ευρετήρια για πίνακα `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`QuizID`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UsersID`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `answers`
--
ALTER TABLE `answers`
  MODIFY `AnswerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `qq`
--
ALTER TABLE `qq`
  MODIFY `QQID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `questions`
--
ALTER TABLE `questions`
  MODIFY `QuestionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `quiz`
--
ALTER TABLE `quiz`
  MODIFY `QuizID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `UsersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
