-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 08:04 AM
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
-- Database: `brokerage`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_receiver` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_receiver`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(9, 70, 'abebe', 'kuma', 'abex@gmail.com', 'hey dear kuma i want to buy this car', 'approved', '2023-07-03'),
(10, 70, 'melese', 'kuma', 'mele@gmail.com', 'hey man i want to rent the car can you rent the car for me', 'unapproved', '2023-07-03'),
(11, 70, 'birehanu', 'kuma', 'birex@gmail.com', 'my bro bire the man in the middle', 'unapproved', '2023-07-03'),
(12, 50, 'yakob', 'mike', 'yakoba@gmail.com', 'this comment is from yakob', 'approved', '2023-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photos` text NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photos`, `content`) VALUES
('ajax.png', ''),
('', ''),
('image_5.jpg', ''),
(',,', ''),
('', '????\0JFIF\0\0\0\0\0??\0C\0	\n\n			\n\n		\r\r\n??\0\0d\0d\0??\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0??\0&\0\0\0\0\0\0\0\0!\"1#??\0\0\0?\0?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0??yOP??7???.E????x????I?N?x??bwV??ߴN??H?/6k9'),
('', 'car3.jpg'),
('', 'car4.jpg'),
('', 'edwin.jpg,html.png');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `post_id` int(11) NOT NULL,
  `post_category_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_user` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_user`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(78, 0, 'Car', '', 'kuma', '2023-07-06', 'SINOTRUCK.jpg', 'TITLE: Sino truck\r\nModel: dump trucks\r\nTransmission: Manual\r\nYear: 2018\r\nPrice: 2,700,000 ETB (negotiable)', 'SINO TRUCK', 0, 'published', 0),
(79, 0, 'Car', '', 'kuma', '2023-07-06', 'car1.jpg', 'Brand: Toyota\r\nModel: D4D\r\nTransmission: Manual\r\nYear: 2005\r\nPrice: 2,200,000 ETB negotiable', 'BRAND:TOYOTA', 0, 'published', 0),
(80, 0, 'homiey', '', 'kuma', '2023-07-06', 'google.jpg', 'tyyuyututuytyu', 'this is a high quality house', 0, 'published', 2),
(81, 0, 'MOTORCYCLE', '', 'kuma', '2023-07-06', 'MOTORCYCLE.jpg', 'Brand: Yamaha\r\nCondition: used\r\nPrice: 150,000 ETB( negotiable)', 'MOTORCYCLE', 0, 'published', 0),
(82, 0, 'BAJAJ', '', 'kuma', '2023-07-06', 'car5.jpg', 'Title: TVs\r\nName: Bajaj\r\nPrice: 350,000 ETB', 'BAJAJ', 0, 'published', 0),
(83, 0, 'LAPTOP', '', 'kuma', '2023-07-06', 'personal computer.jpg', 'Brand: Dell Laptop \r\nStorage: 512HDD\r\nRam: 8 GB\r\nBattery: 4hr\r\nSize: 14”inch \r\nTouch Screen \r\nCondition: Best', 'LAPTOP', 0, 'published', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(46, 'kuma', '$2y$12$Fw/7lsyii3x0wvjfRz.FAeY/BFdYbCKvkyLoTuom8Q14K.Tp6.cGG', 'Kumarr', 'Leta', 'kuma123@gmail.com', 'IMG_20221218_145517_347.jpg', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(47, 'mike', '$2y$12$XAW3X9ZaBotrmmXG8e5/Cua.KlsqgCcse30iYID8CMlxsNprN.BZS', 'Mikiyas', 'Girma', 'mike12@gmail.com', 'car4.jpg', 'Admin', '$2y$10$iusesomecrazystrings22'),
(52, 'rebca', '$2y$12$xXZpBlksOv0rrAbYqj.1qulmX9SP.nCX/0ywIYprwEZZr4pGvap0u', 'rebca with edit', 'wondu', 'rebca@gmail.com', 'Pumba.png', 'Admin', '$2y$10$iusesomecrazystrings22'),
(53, 'murte', '$2y$12$W6h4OD5eBJqou1T/C.i7ku5jclAU08RuRRqU1cYu9Fcfr/xo9Z21e', 'murtesa', 'jabessa', 'murte@gmail.com', '', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(54, 'yakob', '$2y$12$z1tTzrhR9FlIB8jZL2KnzOZTpqMCgrzA2RbEwIYWjKV9lnMALYWeK', 'yakob', 'dereje', 'yakob@gmail.com', 'IMG_20221120_185351_220.jpg', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(55, 'abdu', '$2y$12$xZPwXy49P.6n8WgCJpK7Mej.DTCQb7Ikje29QEQd.8lBU7ls251GW', '', '', 'abdu@gmail.com', '', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(56, 'abe', '$2y$12$BmmEBb6bGQBIgZQ8KNdjo.2A6tEWucDV/oHETKhM1HVohjg0n.mz6', '', '', 'abe@gmail.com', '', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(57, 'ali', '$2y$12$jBccihivEIYiZPOblQL2fupEcCW00zhi7dM/d2e6oP9PfdudwIJ6a', '', '', 'alister@gmail.com', '', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(58, 'yordi', '$2y$12$7cHQLSKa1JeV/yDbaSAoDeKUkqk1V9mWF3IxgjyCq1Tcom2an1XHy', '', '', 'yordi@gmail.com', '', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(59, 'man', '$2y$12$O9n0T9vF8j/F6FbAd8jTeerk5wcq4AGCq.i07P3eQs9PzFuvCy8.W', '', '', 'man@gmail.com', '', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(60, 'salah', '$2y$12$e1OTtv95EbPxkGXTL8VaburUfZEZ4937UDZ8X.JZWA1X.28rOrA7y', '', '', 'salah@gmail.com', '', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(61, 'fgsf', '$2y$12$KPcuCvB1x18uc1MWJy54iOtOHctiC8iNzGhsXqqUVtqhjJ4srtlYC', '', '', 'mikumaal223@gmail.com', '', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(62, 'aladin', '$2y$12$YJriQHqr37VFGU7CTCWOgeuuUUnaOO6b67zUFZJjnWFAsB5DusQrm', '', '', 'aladin@gmail.com', '', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(63, 'yakob dereje', '$2y$12$DoA7kQ7RgRUMfwSxpIws5eJok95zWpfS6gSOhaYu98CppsP6soB/2', '', '', '', '', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(64, '12', '$2y$12$Z8/EwSeaZgGuCgpynjMAqONN27yoKplMwPRU5CaZZIPniOF6hyAwG', 'yakob', 'dereje', 'kumaleta2023@gmail.com', '', 'Subscriber', '$2y$10$iusesomecrazystrings22'),
(65, '123', '$2y$12$85UYM5/1bE1ORqYpZC.Jju9ixoyPx3KcsrNadIbfv9PYJQMgd/3ya', 'fgfdd', 'saf', 'kumaleta2023@gmail.com', '', 'Subscriber', '$2y$10$iusesomecrazystrings22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
