-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 03:38 AM
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
(1, 'Clara Benin', 'Indie', 'https://www.instagram.com/clarabeninmusic/?hl=en', 'https://cdn.girlsclub.asia/wp-content/uploads/2019/09/22125826/CB_2019-3.jpg', 'Clara Benin is a Filipina indie singer-songwriter best known for her track \"Parallel Universe\". As of October 2019, Benin has amassed tens of millions of streams in Spotify'),
(2, 'Gabba Santiago', 'Indie', 'gabbamarie', 'https://i1.sndcdn.com/avatars-000375004016-vesw6s-t500x500.jpg', 'Gabba is the solo project of Manila-based musician Gabba Santiago, best known for his work on instrumental rock act Degs and Gabba'),
(3, 'Banna Harbera', 'Banderitas', 'https://www.instagram.com/bannaharbera/?hl=en', 'https://linkstorage.linkfire.com/medialinks/images/9b435636-59cc-453c-88f2-8cac570ead70/artwork-440x440.jpg', ' Filipino indie quintet Banna Harbera have announced their final show as a band. Titled Sorry & Goodbye'),
(4, 'Munimuni', 'Folk', 'https://www.instagram.com/munitheband/?hl=en', 'https://villagepipol.com/wp-content/uploads/2022/08/Munimuni-FI-1.png', 'Munimuni is a Filipino indie folk band from Quezon City, Philippines. The band currently consists of Adj Jiao, John Owen Castro, Jolo Ferrer, Josh Tumaliuan, and Ben Ayes.'),
(5, 'Ang Bandang Shirley', 'Band', 'https://www.instagram.com/thebandshirley/?hl=en', 'https://asset.onemusic.ph/assetsonemusicph/media/articles/1490253650_shirley.PNG', 'Ang Bandang Shirley is a Filipino pop rock band which started in 2003, with Owel Alvero and Emmanuel Aguila as the original members'),
(6, 'Parokya ni Edgar', 'Opm', 'https://www.instagram.com/parokyaniedgar/', 'https://cdns-images.dzcdn.net/images/artist/6d29025df1a6af919ae4d733cbc46bab/500x500.jpg', 'Parokya ni Edgar is a Filipino band formed in 1993, composed of Chito Miranda, Gab Chee Kee, Buwi Meneses, Darius Semaña, Dindin Moreno, and Vinci Montaner. The band is known for its original rock novelty songs and often satirical covers of popular songs both foreign and local.'),
(7, 'One Click Straight', 'Rock Band', 'https://www.instagram.com/oneclickstraight/', 'https://i.scdn.co/image/ab6761610000e5eb6792462e159d50da934c78b0', 'One Click Straight is an alternative rock band from Parañaque that started in 2009. The band consists of three brothers, Sam, Toffer, Tim'),
(8, 'Toneejay', 'Solo', 'https://www.instagram.com/toneejay/', 'https://pbs.twimg.com/media/FbQFbASaAAAv074.jpg:large', 'Former Vocalist of Munimuni'),
(9, 'The Ransom Collective', 'Indie Folk Band', 'https://www.instagram.com/theransomcollective/?hl=en', 'https://zambulat.com/wp-content/uploads/2020/02/Zam-fbAd-Temp-A.jpg', 'The Ransom Collective are a Filipino indie folk band known for their \"spirited music that makes for perfect adventure tunes.\" The Ransom Collective.'),
(10, 'Up Dharma Down', 'Pop Band', 'https://www.instagram.com/uddph/?hl=en', 'https://cdns-images.dzcdn.net/images/artist/40d8a6d3dcf1cca8b0b9e5427a677ad0/500x500.jpg', 'UDD, shortened for Up Dharma Down, is a Filipino band formed in Manila in 2004. They have released four albums Fragmented, Bipolar, Capacities and U D D'),
(11, 'Lola Amour', 'Funk and Pop', 'https://www.instagram.com/lolaamourph/?hl=en', 'https://businessmirror.com.ph/wp-content/uploads/2022/09/285773983_593504455467010_4801956872503113845_n.jpg', 'Lola Amour is a Filipino rock band from Muntinlupa, Philippines that dabbles in the genres of modern rock, funk, and pop'),
(12, 'Sugarfree', 'OPM-Rock', '', 'https://i.discogs.com/ORneO2JeZcszRKe2FFNccHh0nDuDxdLMCCOwP1OvboQ/rs:fit/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9BLTM1MjEz/MzUtMTQxNjA2MzYw/NS04OTk2LmpwZWc.jpeg', 'A staple of the OPM scene along with the likes of PNE and Eraserheads'),
(13, 'Autotelic', 'Rcok Band', 'https://www.instagram.com/autotelicmusic/?hl=en', 'https://i.scdn.co/image/ab6761610000e5ebe47541cd3c4c0a3d470dd364', 'Autotelic is a Filipino indie-alternative rock band in Manila, Philippines. Formed in 2012, the band consists of Josh Villena, Neil Tin, EJ Edralin, Timothy “Pabs” Vargas, and Gep Macadaeg.'),
(14, 'Hale', 'Alternative Rock', 'https://www.instagram.com/halemusicph/?hl=en', 'https://cdn.platinumlist.net/upload/artist/hale_665-mobile1536494206.jpg', 'Hale is a Filipino alternative rock band, formed in Manila, Philippines in 2004. The group originally consisted of singer and guitarist Champ Lui Pio, bassist Sheldon Gellada, guitarist Roll Martinez and drummer Omnie Saroca.'),
(15, 'Coeli', 'Indie Folk Solo', 'https://www.instagram.com/coelimusic/?hl=en', 'https://i1.sndcdn.com/avatars-OL63rOhOA8Kyqze5-OXrtIQ-t500x500.jpg', 'Experimental Folk Pop Artist / Singer-Songwriter from the Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `gig_id` int(255) NOT NULL,
  `gig_name` varchar(200) NOT NULL,
  `production` varchar(255) NOT NULL,
  `place` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `gig_image_url` varchar(300) NOT NULL,
  `gig_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`gig_id`, `gig_name`, `production`, `place`, `date`, `gig_image_url`, `gig_desc`) VALUES
(1, 'Wanderland', 'Globe', 'Circuit Makati', 'March 7, 2023', 'https://www.nme.com/wp-content/uploads/2022/08/wanderland-festival@2000x1270.jpeg', 'Wanderland is an annual outdoor music and arts festival held in the Philippines organized by Karpos Multimedia. It showcases international and local live music, and art installations.'),
(2, 'Para kay Gab', 'SQYL Prod', '123 Block', 'March 11, 2023', 'http://cdn.shopify.com/s/files/1/0266/3307/6821/products/IMG_20230225_185606_606.jpg?v=1677322622', 'Long set with Itchyworms, Rivermaya and Ebe Dancel'),
(3, 'Gabinanaman', '', '70s Bistro', 'March 21, 2023', '', 'pakibilisan March 21'),
(4, 'Lola Amour 7th Anniversary', '', 'Social House', 'March 3, 2023', 'https://pbs.twimg.com/media/FptWZbqaAAEMZZj?format=jpg&name=medium', 'With Ang Bandang Shirley, Any Names Okay and Toneejay'),
(5, 'Itchyworms Double Vinyl Launch', '', '123 Block', 'February 24, 2023', '', 'Album Launch');

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
  MODIFY `artist_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `gig_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
