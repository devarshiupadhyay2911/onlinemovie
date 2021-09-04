-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2021 at 03:20 PM
-- Server version: 8.0.26
-- PHP Version: 7.3.29-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinemovie`
--

-- --------------------------------------------------------

--
-- Table structure for table `Add_movie`
--

CREATE TABLE `Add_movie` (
  `id` int NOT NULL,
  `movie_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Language` varchar(10) DEFAULT NULL,
  `Launch_date` date NOT NULL,
  `duration_time` time DEFAULT NULL,
  `Screen_no` varchar(30) DEFAULT NULL,
  `Image` varchar(50) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Add_movie`
--

INSERT INTO `Add_movie` (`id`, `movie_name`, `Description`, `Language`, `Launch_date`, `duration_time`, `Screen_no`, `Image`, `City`, `amount`, `status`) VALUES
(2, 'bellbottom', 'Amongst multiple heinous airplane hijacks, India was made to face another such challenge in 1984. BellBottom, a RAW agent played by Akshay Kumar sees through the plan and thus, begins India`s first covert operation.\r\n\r\nA story inspired on true events, led by BellBottom, that went on to create one of the most defining moments of the country.', 'hindi', '2021-08-19', '03:00:00', '1', NULL, 'ahmedabad', 150, NULL),
(3, 'bhuj the pride of India', 'Bhuj: The Pride of India is a 2021 Indian Hindi-language war film[2] directed by Abhishek Dudhaiya.[3] Set during the Indo-Pakistani War of 1971, it follows Indian Air Force Squadron Leader Vijay Karnik — then in-charge of the Bhuj Air Force Base who, with the help of 300 local women, reconstructed the damaged landing strip in 72 hours.[4] The film features Ajay Devgn as Karnik, alongside Sanjay Dutt, Sonakshi Sinha, Nora Fatehi, Sharad Kelkar, Ammy Virk, Pranitha Subhash and Ihana Dhillon.[5]', 'hindi', '2021-08-14', '00:00:00', '2', NULL, 'gandhinagar', 135, NULL),
(5, 'shershah', 'Shershaah (transl. Lion King) is a 2021 Indian Hindi-language biographical war film directed by Vishnuvardhan in his Bollywood debut and written by Sandeep Shrivastava. The film follows the life of Param Vir Chakra-awardee Captain Vikram Batra, from his first posting in the army to his death in the Kargil War. The film stars Sidharth Malhotra as Batra and Kiara Advani as his girlfriend Dimple Cheema. The film was produced by Dharma Productions and Kaash Entertainment, with Hiroo Yash Johar, Karan Johar, Apoorva Mehta, Shabbir Boxwala, Ajay Shah and Himanshu Gandhi serving as co-producers.[2]', 'hindi', '2021-08-13', '02:30:00', '3', NULL, 'baroda', 210, NULL),
(7, 'The Conjuring: The Devil Made Me Do It', 'Paranormal investigators Ed and Lorraine Warren are faced with one of their most challenging cases when a murder suspect claims to be possessed by a demon.', 'English', '2021-08-13', '01:54:00', '4', NULL, 'gandhinagar', 210, NULL),
(17, 'mimi', 'Mimi is a 2021 Indian Hindi-language comedy-drama film written and directed by Laxman Utekar and co-written by Rohan Shankar, which is a remake of the Marathi film Mala Aai Vhhaychy! (2011) by Samruddhi Porey. Jointly produced by Dinesh Vijan under his banner Maddock Films and Jio Studios. The film stars Kriti Sanon in the titular role of Mimi, a young woman who opts to be a surrogate mother for a foreign couple.', 'hindi', '2021-07-30', '02:18:00', '4', NULL, 'baroda', 140, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Add_movie`
--
ALTER TABLE `Add_movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Add_movie`
--
ALTER TABLE `Add_movie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
