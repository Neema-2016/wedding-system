-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 09:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `couples`
--

CREATE TABLE `couples` (
  `couple_id` int(11) NOT NULL,
  `spouse1_name` varchar(50) NOT NULL,
  `spouse1_phone` text NOT NULL,
  `spouse1_email` varchar(100) NOT NULL,
  `spouse1_gender` enum('Female','Male','Other') NOT NULL,
  `spouse1_image` text DEFAULT NULL,
  `spouse2_name` varchar(50) NOT NULL,
  `spouse2_phone` text NOT NULL,
  `spouse2_email` varchar(100) NOT NULL,
  `spouse2_gender` enum('Female','Male','Other') NOT NULL,
  `spouse2_image` text DEFAULT NULL,
  `location` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `venue_map` varchar(50) NOT NULL,
  `box` varchar(50) NOT NULL,
  `event_name` varchar(60) NOT NULL,
  `event_date` date NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `couples`
--

INSERT INTO `couples` (`couple_id`, `spouse1_name`, `spouse1_phone`, `spouse1_email`, `spouse1_gender`, `spouse1_image`, `spouse2_name`, `spouse2_phone`, `spouse2_email`, `spouse2_gender`, `spouse2_image`, `location`, `venue`, `venue_map`, `box`, `event_name`, `event_date`, `user`) VALUES
(4, 'Enock Sagini', '0799509119', 'sagini@gmail.com', 'Male', 'team-1.jpg', 'Bubba Kemunto', '0798509119', 'kemunto@gmail.com', 'Female', 'team-2.jpg', 'Bofa,Kilifi', 'MPC Central (Mwembe Tayari)', '-3.6274176, 39.84868028412105', '74368778-994737t', 'Pre-wedding', '2021-07-30', 24),
(5, 'Kwamboka Selina', '0799509119', 'selina@gmail.com', 'Female', 'team-2.jpg', 'Brian Omolo', '07998509181', 'omolo@gmail.com', 'Male', 'team-3.jpg', 'Nanyuki,Laikipia', 'MPC Central', ',', '67789-088766', 'Wedding', '2021-08-08', 25);

-- --------------------------------------------------------

--
-- Table structure for table `individuals`
--

CREATE TABLE `individuals` (
  `individual_id` int(11) NOT NULL,
  `individual_name` varchar(40) NOT NULL,
  `individual_email` varchar(100) NOT NULL,
  `individual_phone` text NOT NULL,
  `individual_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individuals`
--

INSERT INTO `individuals` (`individual_id`, `individual_name`, `individual_email`, `individual_phone`, `individual_location`) VALUES
(1, 'Marigi Kemunto', 'rigiggz98@gmail.com', '0771071088', 'Mnarani,Kilifi'),
(2, 'sautisol', 'sautisol@gmail.com', '0787675643', 'kasarani');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `reg_date` datetime NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `reg_date`, `vendor_id`) VALUES
(4, 'Yvonne', 'y.marigi@merimesolutions.com', 'TEST MESSAGE', 'this is a test message.i AM using , commas to test the string escape function.', '2021-07-09 00:00:00', 12),
(7, 'Kemz', 'Iggy@gmail.com', 'Test', 'tewtyfuyhjioferng', '2021-07-09 00:00:00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `average_rates` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registry`
--

CREATE TABLE `registry` (
  `id` int(11) NOT NULL,
  `gift_name` varchar(50) NOT NULL,
  `gift_category` enum('Kitchen','Top Bench','Beddings','Bath','Home Decor','Lifestyle','Drinkware','Other') DEFAULT NULL,
  `gift_shops` varchar(1000) NOT NULL,
  `user` int(11) NOT NULL,
  `gift_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registry`
--

INSERT INTO `registry` (`id`, `gift_name`, `gift_category`, `gift_shops`, `user`, `gift_image`) VALUES
(20, 'Dressing Mirror', 'Top Bench', 'Naivas,Kilimall', 24, 'bathmirror.PNG'),
(21, 'Bed', 'Top Bench', 'Naivas', 24, 'beddings.PNG'),
(22, 'Lamp', 'Home Decor', '', 24, 'lamp.PNG'),
(23, 'Home Mirror', 'Lifestyle', 'Naivas,Top furniture', 24, 'mirror.PNG'),
(24, 'Wall Frames', 'Top Bench', 'Top Furniture,Naivas', 24, 'frames.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rate` int(1) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `rate`, `feedback`, `email`, `vendor_id`, `reg_date`) VALUES
(1, 'Marigi Yvonne', 5, 'test review', 'y.marigi@gmail.com', 12, '2021-07-08 00:00:00'),
(2, 'Kemunto Yvonne', 2, 'I like your service..but it took you too long to respond to my message..you should improve your response time.I like your service..but it took you too long to respond to my message..you should improve your response time.I like your service..but it took you too long to respond to my message..you should improve your response time.I like your service..but it took you too long to respond to my message..you should improve your response time.I like your service..but it took you too long to respond to my message..you should improve your response time.I like your service..but it took you too long to respond to my message..you should improve your response time.I like your service..but it took you too long to respond to my message..you should improve your response time.I like your service..but it took you too long to respond to my message..you should improve your response time.I like your service..but it took you too long to respond to my message..you should improve your response time.', 'officialmarigi63@gmail.com', 12, '2021-07-08 00:00:00'),
(3, 'Farhat', 5, 'Really really love your service...You delivered on time and your products were top shelf.', 'farhat@gmail.com', 7, '2021-07-09 00:00:00'),
(4, 'bhrdse', 3, 'serdrftyy89u78gtr45cwaazsexcdfgbuhyvcdswa3wedrt6gb', 'bha@gmail.com', 24, '2021-07-09 00:00:00'),
(5, 'Riigz', 4, 'Lovely service..My only issue would be that you were a little late on delivery.Other than that..great work', 'rigz@gmail.com', 26, '2021-07-10 00:00:00'),
(6, 'Rigz', 5, 'LOVED IT.................................', 'marigi@yahoo.com', 27, '2021-07-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `team_image` varchar(40) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_title` varchar(50) NOT NULL,
  `team_message` varchar(400) NOT NULL,
  `team_facebook` varchar(500) NOT NULL,
  `team_twitter` varchar(500) NOT NULL,
  `team_linkedin` varchar(500) NOT NULL,
  `team_instagram` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `vendor_id`, `team_image`, `team_name`, `team_title`, `team_message`, `team_facebook`, `team_twitter`, `team_linkedin`, `team_instagram`) VALUES
(4, 12, 'kuser .png', 'Marigi Yvonne', 'CEO', 'I believe in quality service.', 'https://www.linkedin.com/in/marigi-yvonne-2a1b7b1b6/', 'https://www.linkedin.com/in/marigi-yvonne-2a1b7b1b6/', 'https://www.linkedin.com/in/marigi-yvonne-2a1b7b1b6/', 'https://www.linkedin.com/in/marigi-yvonne-2a1b7b1b6/'),
(5, 24, 'team-2.jpg', 'Kemunto Mokeira', 'CEO', 'I believe in efficiency', '', '', '', ''),
(6, 26, 'team-2.jpg', 'Sagini ', 'Chief Planner', 'Saginini is responsible for all matters concerning planning', 'https://www.instagram.com/she.who.mustnt.be.named/', 'https://www.instagram.com/she.who.mustnt.be.named/', 'https://www.instagram.com/she.who.mustnt.be.named/', 'https://www.instagram.com/she.who.mustnt.be.named/'),
(7, 26, 'team-3.jpg', 'Demakufu', 'DJ', 'our reknown Dj', 'https://www.instagram.com/she.who.mustnt.be.named/', 'https://www.instagram.com/she.who.mustnt.be.named/', 'https://www.instagram.com/she.who.mustnt.be.named/', 'https://www.instagram.com/she.who.mustnt.be.named/'),
(8, 27, 'add_user.png', 'Teammember1', 'CEO', 'the CEO', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `password`, `role`) VALUES
(21, 'Marigi Florists', 'y.marigi@gmail.com', 'kaleo12', 'Vendor'),
(22, 'marigi', 'marigi@gmail.com', 'kaleo12', 'Vendor'),
(23, 'wafula Agency', 'wafula@gmail.com', 'wafula12', 'Vendor'),
(24, 'Enock and Bubba', 'enock12@gmail.com', 'kaleo12', 'Couple'),
(25, 'Kwamboka And Brian', 'malkia@gmail.com', 'kaleo12', 'Couple');

-- --------------------------------------------------------

--
-- Table structure for table `vending`
--

CREATE TABLE `vending` (
  `id` int(10) NOT NULL,
  `vendor_category` int(40) NOT NULL,
  `vendor_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(40) NOT NULL,
  `vendor_email` varchar(100) NOT NULL,
  `vendor_location` varchar(100) NOT NULL,
  `vendor_phone` text NOT NULL,
  `vendor_category` varchar(40) NOT NULL,
  `pending` enum('1','0') NOT NULL,
  `vendor_description` varchar(1000) DEFAULT NULL,
  `vendor_phone1` text DEFAULT NULL,
  `vendor_facebook` varchar(1000) DEFAULT NULL,
  `vendor_twitter` varchar(1000) DEFAULT NULL,
  `vendor_whatsapp` varchar(1000) DEFAULT NULL,
  `vendor_linkedin` varchar(1000) DEFAULT NULL,
  `vendor_images` varchar(100) NOT NULL,
  `vendor_box` varchar(100) DEFAULT NULL,
  `user` int(10) DEFAULT NULL,
  `vendor_map` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `vendor_email`, `vendor_location`, `vendor_phone`, `vendor_category`, `pending`, `vendor_description`, `vendor_phone1`, `vendor_facebook`, `vendor_twitter`, `vendor_whatsapp`, `vendor_linkedin`, `vendor_images`, `vendor_box`, `user`, `vendor_map`) VALUES
(26, 'Marigi Florists', 'y.marigi@gmail.com', 'Mnarani Kilifi', '0799509119', 'Planners,Florists,', '1', 'We are Florists located in Mnarani Kiifimdkfjiweuifhguywfdvsbfh', '0771071088', 'https://www.instagram.com/she.who.mustnt.be.named/', 'https://www.instagram.com/she.who.mustnt.be.named/', 'https://www.instagram.com/she.who.mustnt.be.named/', 'https://www.instagram.com/she.who.mustnt.be.named/', '200.jpg', '352546-987', 21, '-3.631535452309217, 39.84740382184496'),
(27, 'Marigi Ent', 'marigi@gmail.com', 'Mnarani,Kilifi', '0789878987', 'Orchestra,Planners,Florists,', '1', 'Floristsgjheirgoruigbghiheuirhufygghvfdjiovnjdbvhsgyuguidfiewiufieuwiwfoijfbdhsugfyudsgfyugsheihfiuhuifheiugfgebhfbuiehfugeygfbhefhiueuhfuegufhbdhbjdhuifguyfvheiufhyuegbfuheiufgyuegufheiuh', '0771234567', 'https://www.instagram.com/she.who.mustnt.be.named/', 'https://www.instagram.com/she.who.mustnt.be.named/', 'https://www.instagram.com/she.who.mustnt.be.named/', 'https://www.instagram.com/she.who.mustnt.be.named/', '200.jpg', '56387489856-65', 22, '-3.6305990645368693, 39.847692520694366'),
(28, 'Mombasa Ent', 'wafula@gmail.com', 'Mnarani ,Kilifi', '0789786559', 'Bands,Dancers,Orchestra,', '1', '          ufhruhguheufuhhefgyuerfgrygeuhfuhueijfuejfnhuebfhugbdybfhudbhcudbcbhgbhcbgydb\"\"\"\"\"\"\"\"\"\"', '0789876757', '', '', '', '', 'plan3.jpg', '54657-i8978', 23, ',');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_images`
--

CREATE TABLE `vendor_images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `vendor_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_images`
--

INSERT INTO `vendor_images` (`id`, `file_name`, `uploaded_on`, `vendor_id`) VALUES
(29, 'chairs.jpg', '2021-07-07 15:06:40', 12),
(30, 'hema.jpg', '2021-07-07 15:06:40', 12),
(31, 'login.jpg', '2021-07-07 15:06:40', 12),
(32, 'demo - Copy.jpg', '2021-07-07 17:40:05', 12),
(33, 'login - Copy.jpg', '2021-07-07 17:40:05', 12),
(34, 'couple.jpg', '2021-07-09 20:32:35', 24),
(35, 'plan1.jpg', '2021-07-09 20:32:35', 24),
(36, 'plan2.jpg', '2021-07-09 20:32:35', 24),
(37, 'plan3.jpg', '2021-07-09 20:32:35', 24),
(38, 'art - Copy - Copy.jpg', '2021-07-10 09:43:07', 26),
(39, 'art - Copy (2).jpg', '2021-07-10 09:43:07', 26),
(40, 'art.jpg', '2021-07-10 09:43:07', 26),
(41, 'stool.jpg', '2021-07-10 09:45:15', 26),
(42, 'plan1.jpg', '2021-07-10 09:49:26', 26),
(43, 'plan2.jpg', '2021-07-10 09:49:26', 26),
(44, 'plan3.jpg', '2021-07-10 09:49:26', 26),
(45, '3.jpg', '2021-07-10 10:10:50', 27),
(46, '5.jpg', '2021-07-10 10:10:50', 27),
(47, '7.jpg', '2021-07-10 10:10:50', 27),
(48, '7.jpg', '2021-07-10 19:42:31', 28),
(49, 'plan1.jpg', '2021-07-10 19:42:31', 28),
(50, 'plan3.jpg', '2021-07-10 19:42:31', 28),
(51, 'villa6.jpg', '2021-07-10 19:42:31', 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couples`
--
ALTER TABLE `couples`
  ADD PRIMARY KEY (`couple_id`);

--
-- Indexes for table `individuals`
--
ALTER TABLE `individuals`
  ADD PRIMARY KEY (`individual_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registry`
--
ALTER TABLE `registry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vending`
--
ALTER TABLE `vending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `vendor_images`
--
ALTER TABLE `vendor_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couples`
--
ALTER TABLE `couples`
  MODIFY `couple_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `individuals`
--
ALTER TABLE `individuals`
  MODIFY `individual_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registry`
--
ALTER TABLE `registry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `vending`
--
ALTER TABLE `vending`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `vendor_images`
--
ALTER TABLE `vendor_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
