-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 06:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anonimo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `user` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`user`, `message`) VALUES
('granite123', 'you are very good'),
('granite123', 'you are very good'),
('granite123', 'you are very good'),
('granite123', 'you are very good'),
('guiado', 'very good'),
('akg', 'very much good'),
('granite123', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur'),
('meow', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur'),
('Mahmud un nabi mridul', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur'),
('Mahmud un nabi Mridul', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur'),
('Mahmud un nabi Mridul', 'asdassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss'),
('Mahmud un nabi Mridul', 'font-family: \'Gloria Hallelujah\', cursive;\r\n    font-weight: bold;'),
('asdg', 'asd'),
('asdg', 'asd'),
('asdg', 'asd'),
('asdg', 'asd'),
('asdg', 'asd'),
('asdg', 'asd'),
('asdg', 'asd'),
('asdg', 'asd'),
('asdg', 'asd'),
('asdg', 'asd'),
('asdg', 'asd'),
('asdg', 'to be honest , you are the best person in the world'),
('bring', 'asd'),
('bring', 'wtf is wrong with you'),
('back', 'WELCOME TO ANONIMO,PLEASE SHARE THE LINK ABOVE TO YOUR SOCIAL MEDIA TO LET YOUR FRIEND MESSAGE YOU ANONIMOUSLY'),
('hotas', 'WELCOME TO ANONIMO,PLEASE SHARE THE LINK ABOVE TO YOUR SOCIAL MEDIA TO LET YOUR FRIEND MESSAGE YOU ANONIMOUSLY'),
('hotas', 'hello my friend , how are you? guess who I am!\r\n'),
('hmmm', 'WELCOME TO ANONIMO,PLEASE SHARE THE LINK ABOVE TO YOUR SOCIAL MEDIA TO LET YOUR FRIEND MESSAGE YOU ANONIMOUSLY'),
('', 'WELCOME TO ANONIMO,PLEASE SHARE THE LINK ABOVE TO YOUR SOCIAL MEDIA TO LET YOUR FRIEND MESSAGE YOU ANONIMOUSLY'),
('mridul', 'WELCOME TO ANONIMO,PLEASE SHARE THE LINK ABOVE TO YOUR SOCIAL MEDIA TO LET YOUR FRIEND MESSAGE YOU ANONIMOUSLY'),
('mridul', 'to be honest, you are the best person in the world'),
('mridul', ''),
('mridul', 'asdasd'),
('mridul', 'asdasd'),
('mridul', 'asdasd'),
('mridul', 'asdasd'),
('Safa bin salam', 'WELCOME TO ANONIMO,PLEASE SHARE THE LINK ABOVE TO YOUR SOCIAL MEDIA TO LET YOUR FRIEND MESSAGE YOU ANONIMOUSLY'),
('Safa bin salam', 'to be honest, you are the best person in the world');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Email`, `Username`, `Password`) VALUES
('munmridul@gmail.com', 'mridul', '$2y$10$tFj7RCaKcqD2L.FQvcb.a.ikLu817P/K6TXCNcad7j11i5AIRJivu'),
('safa@gmail.com', 'Safa bin salam', '$2y$10$jTHrr9Fuw/Gu2ehhsDlzX.v5t9OErtGTFrHj8mLN7e4qIfR1c9FwS'),
('zarif@gmail.com', 'apex', '$2y$10$AAdone6LnjWmlk2WEvYrHeTI5PPv.q0CHmXSIqtG/LZ3FHf24AaN6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
