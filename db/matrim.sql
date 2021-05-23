-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 08:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrim`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(225) CHARACTER SET latin1 NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(5, 'Shivam', 'shivamranpiseppp@gmail.com', '1234'),
(7, 'Admin', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE `box` (
  `id` int(225) NOT NULL,
  `sender` varchar(225) NOT NULL,
  `msg` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`id`, `sender`, `msg`, `date`) VALUES
(1, 'HydraShr', 'sfh', '01-May-2021'),
(2, 'VaibhavNotOp', 'hiiii', '03-May-2021'),
(3, 'sambhai', 'go', '04-May-2021'),
(4, 'sambhai', 'go', '04-May-2021');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(100) NOT NULL,
  `image_url` text CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `email`) VALUES
(25, 'post1.jpg', 'anita@gmail.com'),
(26, 'post2.jpg', 'anita@gmail.com'),
(27, 'post3.jpg', 'anita@gmail.com'),
(28, 'post4.jpg', 'anita@gmail.com'),
(29, 'shivam.jpg', 'shivamranpise4545@gmail.com'),
(30, 'Shreyas.jpg', 'shivamranpise4545@gmail.com'),
(31, 'vaibhav.jpg', 'shivamranpise4545@gmail.com'),
(32, 'avengers_infinity_war_2018_4k_8k.jpg', 'shreyaslandage85@gmail.com'),
(34, 'avengers_iron_man_3_robert_downey_jr__tony_stark_4k_8k_hd_iron_man_3.jpg', 'shreyaslandage85@gmail.com'),
(35, 'iron_man_spider_man_tom_holland_vulture_4k_8k_hd_spider_man_homecoming.jpg', 'shreyaslandage85@gmail.com'),
(36, '20995.jpg', 'Kiran@gmail.com'),
(37, '20998.jpg', 'Kiran@gmail.com'),
(39, '3.jpg', 'vaibhavshinde@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 333333333, 111111111, 'sdb'),
(2, 333333333, 111111111, 'asdb'),
(3, 333333333, 333333333, 'sdcb'),
(4, 333333333, 333333333, 'adbs'),
(5, 333333333, 333333333, 'asdbv'),
(6, 333333333, 333333333, 'sadfasghd'),
(7, 333333333, 111111111, 'sdbcvsdc'),
(8, 333333333, 111111111, 'sdbfv'),
(9, 333333333, 111111111, 'efh'),
(10, 222222222, 111111111, 'hii'),
(11, 333333333, 111111111, 'asbd'),
(12, 804841590, 111111111, 'jhsdguashfga'),
(13, 333333333, 111111111, 'scd'),
(14, 222222222, 111111111, 'fwef'),
(15, 222222222, 111111111, 'dfsd'),
(16, 286598254, 111111111, 'sdfdf'),
(17, 333333333, 111111111, 'sdbgd'),
(18, 333333333, 111111111, 'erser'),
(19, 333333333, 111111111, 'sbdfvs'),
(20, 333333333, 111111111, 'sdfsdf'),
(21, 333333333, 111111111, 'gjdftd'),
(27, 333333333, 286598254, 'aghsf'),
(28, 333333333, 286598254, 'asdas'),
(29, 222222222, 286598254, 'hiiiiiiiiiiiiiiiii'),
(33, 222222222, 111111111, 'hii'),
(34, 804841590, 111111111, 'abnsdba'),
(35, 222222222, 111111111, 'tp'),
(36, 222222222, 111111111, 'to'),
(37, 333333333, 111111111, 'how are you'),
(38, 333333333, 111111111, 'tp'),
(39, 333333333, 111111111, 'hello'),
(40, 804841590, 111111111, 'd'),
(41, 804841590, 111111111, 'tp'),
(42, 295740139, 111111111, 'hii'),
(43, 295740139, 111111111, 'hi'),
(44, 295740139, 111111111, 'bro'),
(45, 286598254, 111111111, 'bhava'),
(46, 333333333, 111111111, 'ji'),
(47, 333333333, 111111111, 'hello'),
(48, 804841590, 111111111, 'tp'),
(49, 333333333, 111111111, 'hi'),
(50, 804841590, 111111111, 'tp'),
(51, 804841590, 111111111, '4'),
(52, 333333333, 111111111, 'hii'),
(53, 333333333, 111111111, 'hii'),
(54, 333333333, 111111111, 'hii'),
(55, 333333333, 111111111, 'e'),
(56, 333333333, 111111111, 'hi'),
(57, 333333333, 111111111, 'hii'),
(58, 333333333, 111111111, 'hiiiii'),
(59, 333333333, 111111111, 'hii'),
(60, 333333333, 111111111, 'tp'),
(61, 333333333, 111111111, 'hii'),
(62, 333333333, 222222222, 'hii'),
(63, 333333333, 222222222, 'hii'),
(64, 111111111, 222222222, '5'),
(65, 111111111, 222222222, '6'),
(66, 111111111, 222222222, 'this is vaibhav'),
(67, 222222222, 111111111, 'hi'),
(68, 804841590, 111111111, 'tp'),
(69, 222222222, 111111111, 'oo'),
(70, 333333333, 111111111, 'ga'),
(71, 295740139, 111111111, 'as'),
(72, 222222222, 111111111, 'go'),
(73, 111111111, 222222222, 'hi bhava'),
(74, 111111111, 222222222, 'hi'),
(75, 333333333, 222222222, 'hii'),
(76, 111111111, 222222222, 'to'),
(77, 111111111, 222222222, 'hii'),
(78, 111111111, 222222222, 'tp'),
(79, 222222222, 111111111, 'tp'),
(80, 804841590, 111111111, 'shreyas'),
(81, 111111111, 804841590, 'hii'),
(82, 222222222, 111111111, 'hi'),
(83, 295740139, 111111111, 'go'),
(84, 333333333, 111111111, 'tp'),
(85, 222222222, 111111111, 'hi'),
(86, 295740139, 111111111, 'tp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(225) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `username` varchar(225) NOT NULL,
  `nick` varchar(225) NOT NULL,
  `dob` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `date` varchar(40) NOT NULL,
  `religion` varchar(225) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `username`, `nick`, `dob`, `email`, `gender`, `contact`, `password`, `date`, `religion`, `about`, `image`, `status`) VALUES
(1, 333333333, 'Shivam Ranpise', 'Its_Shivam_96k', '2002-02-27', 'shivamranpise4545@gmail.com', 'male', '7620930942', 'e4b21770f184b3d8632e30f6456f21ee061316d7', '30-Apr-2021', 'Hindu-Maratha', 'computer science student', 'image/shivam.jpg', ''),
(2, 222222222, 'vaibhav shinde', 'VaibhavNotOp', '2002-03-04', 'vaibhavshinde@gmail.com', 'male', '1234567890', '4894b587ec8eee1a63171c8004ed298fbb460f67', '30-Apr-2021', 'Hindu-maratha', 'Pubg pro player ', 'image/vaibhav.jpg', ''),
(3, 111111111, 'shreyas landage', 'HydraShr', '2002-11-06', 'shreyaslandage85@gmail.com', 'male', '9967321842', '838f2f3482888c55c623b0800ed2d3240039b28e', '01-May-2021', 'Ichalkaranji', 'Website holder', 'image/20998.jpg', ''),
(5, 804841590, 'sambhai', 'sambhai', '1999-12-01', 'sambhai@gmail.com', 'male', '1234567890', '050989490f1fb728fd7e7866c9af0974d3d32470', '03-May-2021', 'Muslim', 'Software engineer', 'image/20995.jpg', 'Active now'),
(6, 286598254, 'Kiran kale', 'Kiran', '2000-01-01', 'Kiran@gmail.com', 'female', '1234567890', '936a014fc67e26abd1bc1405824b74ee958d016b', '03-May-2021', 'Hindu-maratha', 'cute girl', 'image/20995.jpg', 'Active now'),
(7, 295740139, 'aniket adavkar', 'aniket96', '2001-05-19', 'aniket@gmail.com', 'male', '97984535', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '03-May-2021', 'hindu', 'student', 'image/5.jpg', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `box`
--
ALTER TABLE `box`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
