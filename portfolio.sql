-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 02:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud1`
--

CREATE TABLE `crud1` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `special_instruction` varchar(255) NOT NULL,
  `delivery_address` varchar(200) NOT NULL,
  `contact_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud1`
--

INSERT INTO `crud1` (`id`, `first_name`, `food`, `email`, `special_instruction`, `delivery_address`, `contact_number`) VALUES
(2, 'Malithi', 'Milk rice,ice coffee,avacado juice', 'malithi@gmail.com', 'no', 'Mihin mawath,Mihintale', '0716262118'),
(3, 'gamage', 'Rice,ice coffee', 'ridmirasanjalee63@gmail.com', 'no', 'Missaka mawath,Mihintale', '0774154567'),
(4, 'Chamodya Dinethmi', 'Parota,sandwitch,two ice coffee,fruit salad', 'chamod08@gmail.com', 'no', 'Viduli mawatha,Mihintale', '0711211959'),
(5, 'Thenuja Niduwara', 'Rice and curry,ice cream', 'thenuk@gmail.com', 'no', 'Dahaiyama Anuradhapura', '0763660817'),
(6, 'Ridmi', 'Thosai,shorteats,ice coffee', 'ridmirasanjalee63@gmail.com', 'no', 'Lane1 Anuradhapura', '0774154567'),
(7, 'Imasha ', 'Noodles', 'imashasewwandi2703@gmail.com', 'no', 'Mihindu mawatha Mihintale', '772424254'),
(8, 'Adeesha Sathruwan', 'Thosai,shorteats,ice coffee', 'adee2008@gmail.com', 'no', 'Mihindu mawatha Mihintale', '0714563455'),
(9, 'Eshan Dewranga', 'Milk rice,ice coffee,avacado juice', 'eshandev@gmail.com', 'no', 'Lane2,Anuradhapura', '0712343235'),
(10, 'Nimasha', 'Rice', 'nimasha99kavindi@gmail.com', 'no', 'Campus,mihintale', '0714567675');

-- --------------------------------------------------------

--
-- Table structure for table `crud2`
--

CREATE TABLE `crud2` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `contact_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud2`
--

INSERT INTO `crud2` (`id`, `first_name`, `email`, `message`, `contact_number`) VALUES
(2, 'Malithi', 'malithi@gmail.com', 'Wow what a great work.New concept!', '0716262118'),
(3, 'gamage', 'ridmirasanjalee63@gmail.com', 'Great!', '0774154567'),
(4, 'Chamodya Dinethmi', 'chamod08@gmail.com', 'Excellent.Keep it up', '0711211959'),
(5, 'Thenuja Niduwara', 'thenuk@gmail.com', 'What a surprice', '0763660817'),
(6, 'Ridmi', 'ridmirasanjalee63@gmail.com', 'Reasonable price', '0774154567'),
(7, 'Imasha ', 'imashasewwandi2703@gmail.com', 'Wow my buddy', '772424254');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'Ridmi Rasanjalee', 'ridmirasanjalee63@gmail.com', '$', 'user'),
(3, 'Nimasha Kavindi', 'nimasha99kavindi@gmail.com', 'ae2e5dbafee114818f5c2233cf8d98c1', 'user'),
(4, 'Rashmi Ekanayake', 'rashmi@gmail.com', '95be0168b2485dabfa20d6c51b75a474', 'user'),
(5, 'Amanda Jeewanthi', 'amandaj10@gmail.com', '0f4004e836509904e0005999a4fadc48', 'user'),
(6, 'Imasha Balasooriya', 'imashasewwandi2703@gmail.com', '69f3f1bd20d132f90fc8f2aa7f6af0a3', 'admin'),
(7, 'Harini Kehara', 'harinikeha@gmail.com', '0ba9e625ac96f500d35cf349852ee602', 'admin'),
(8, 'Madhuka Prabodani', 'madhuka123@gmail.com', '3b7d42f00c89f9b9603d3967318fa3d5', 'admin'),
(9, 'Eshan Dewranga', 'eshandev@gmail.com', '85f40aac0d159975f9184a6e626799ea', 'admin'),
(10, 'Deshan Sevinda', 'Sevin20@gmail.com', 'e0c603440527d3b35296f51d85736798', 'admin'),
(11, 'Chamodya Dinethmi', 'chamod08@gmail.com', 'd3db4008a767bff02538f95820e887b8', 'user'),
(12, 'Adeesha Sathruwan', 'adee2008@gmail.com', 'a35e58610ccb56a6b56f30c26a1b1365', 'user'),
(13, 'Pulindu Dilsara', 'pulid22@gmail.com', 'fd6238cfb1e2005307895e6fa9db968f', 'admin'),
(14, 'Thenuri Kenara', 'thenuk@gmail.com', 'c19f9fe5228b656c77684454f758aaef', 'user'),
(15, 'Thenuja Niduwara', 'niduwara@gmail.com', 'b19e56fed0d8dc654533d69d10d88ddd', 'admin'),
(16, 'Dinaya Abhimani', 'abhi123@gmail.com', '167784d36ab99e49738fe6a6a98798b7', 'user'),
(17, 'Asanthi Malshani', 'asa@gmail.com', 'f86de2ac92056facbbaea3908dba85ce', 'user'),
(18, 'Oshana Sathmika', 'oshanas@gmail.com', '4fd937972ad9e6701b61f6cd3b58602b', 'user'),
(19, 'Sarath Kumara', 'sarath26@gmail.com', '48128c60c3c3610a41cb37fc97be80ea', 'user'),
(20, 'Pamoda Gayathri', 'pamog@gmail.com', 'd4c40b3f1a6a476523476b10e1adceea', 'user'),
(21, 'Danushika Madhuwanthi', 'danumad32@gmail.com', '0e591dd3b5ebfb3d6c161dab3b993687', 'user'),
(22, 'Menushika Prabodani', 'menu1234@gmail.com', 'a804171b40f471c2c9cf7b49906aab00', 'user'),
(23, 'Vishwani Uthpalawanna', 'vish99@gmail.com', '628f73113fed40f40f030ed4cda3052b', 'user'),
(24, 'Navanjana Sewmini', 'navasew9@gmail.com', '4e6836000de40188e8f9a3345f857d3e', 'user'),
(25, 'Sanduni Saumya', 'saumyakaru99@gmail.com', '9f4b01563b81eb1b114365270041af91', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud1`
--
ALTER TABLE `crud1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud2`
--
ALTER TABLE `crud2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud1`
--
ALTER TABLE `crud1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `crud2`
--
ALTER TABLE `crud2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
