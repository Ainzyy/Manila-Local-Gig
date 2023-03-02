-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 06:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gig_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist_data`
--

CREATE TABLE `artist_data` (
  `artist_id` int(255) NOT NULL,
  `band_name` varchar(50) NOT NULL,
  `band_type` varchar(50) NOT NULL,
  `ig_links` varchar(200) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `descript` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist_data`
--

INSERT INTO `artist_data` (`artist_id`, `band_name`, `band_type`, `ig_links`, `image_url`, `descript`) VALUES
(1, 'Clara Benin', 'Indie', 'claramarie', 'https://cdn.girlsclub.asia/wp-content/uploads/2019/09/22125826/CB_2019-3.jpg', 'Clara Benin is a Filipina indie singer-songwriter best known for her track \"Parallel Universe\". As of October 2019, Benin has amassed tens of millions of streams in Spotify'),
(2, 'Gabba Santiago', 'Indie', 'gabbamarie', 'https://i1.sndcdn.com/avatars-000375004016-vesw6s-t500x500.jpg', 'Gabba is the solo project of Manila-based musician Gabba Santiago, best known for his work on instrumental rock act Degs and Gabba'),
(3, 'Hanna Barbera', 'Banderitas', '@bannabeninmusic', 'https://theflyinglugawph.files.wordpress.com/2019/03/banna-harbera.jpg', ' Filipino indie quintet Banna Harbera have announced their final show as a band. Titled Sorry & Goodbye'),
(4, 'Munimuni', 'Folk', '@munibeninmusic', 'https://mb.com.ph/wp-content/uploads/2020/10/muni.jpeg', 'Munimuni is a Filipino indie folk band from Quezon City, Philippines. The band currently consists of Adj Jiao, John Owen Castro, Jolo Ferrer, Josh Tumaliuan, and Ben Ayes.'),
(5, 'Ang Bandang Shirley', 'Band', '@shirleybeninmusic', 'https://cdn.filestackcontent.com/crop=d:[0,65,968,484]/pjpg=q:90/compress/Oo6lQXpkRlyK66lFQkYI', 'Ang Bandang Shirley is a Filipino pop rock band which started in 2003, with Owel Alvero and Emmanuel Aguila as the original members'),
(6, 'Parokya ni Edgar', 'Opm', '@parokyabeninmusic', 'https://cdns-images.dzcdn.net/images/artist/6d29025df1a6af919ae4d733cbc46bab/500x500.jpg', 'Parokya ni Edgar is a Filipino band formed in 1993, composed of Chito Miranda, Gab Chee Kee, Buwi Meneses, Darius Semaña, Dindin Moreno, and Vinci Montaner. The band is known for its original rock novelty songs and often satirical covers of popular songs both foreign and local.'),
(7, 'One Click Straight', 'Rock', '@twoclickmeow', 'https://www.nme.com/wp-content/uploads/2022/07/one-click-straight@2000x1270.jpg', 'Sam and Tim Marquez, brothers and half of the band, Zoom in from their homes in Manila, tossing around phrases like “nitty-gritty”'),
(8, 'Toneejay', 'Solo', '@TJ', 'https://pbs.twimg.com/media/FbQFbASaAAAv074.jpg:large', 'Former Vocalist of Munimuni');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `gig_id` int(255) NOT NULL,
  `gig_name` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `gig_image_url` varchar(300) NOT NULL,
  `gig_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`gig_id`, `gig_name`, `place`, `date`, `gig_image_url`, `gig_desc`) VALUES
(1, 'Wanderland', 'Circuit Makati', 'March 7, 2023', 'https://www.nme.com/wp-content/uploads/2022/08/wanderland-festival@2000x1270.jpeg', 'Wanderland is an annual outdoor music and arts festival held in the Philippines organized by Karpos Multimedia. It showcases international and local live music, and art installations.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist_data`
--
ALTER TABLE `artist_data`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`gig_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist_data`
--
ALTER TABLE `artist_data`
  MODIFY `artist_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `gig_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
