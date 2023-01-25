-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 05:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_book` int(30) NOT NULL,
  `name_book` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `book_price` int(100) NOT NULL,
  `photo_book` varchar(500) NOT NULL,
  `id_category` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_book`, `name_book`, `author`, `book_price`, `photo_book`, `id_category`) VALUES
(1, 'Angels & Demons', 'Daniel Gerhard Brown', 135000, 'Angels _ Demons.jpg', 1),
(3, 'The Hobbit', 'J.R.R. Tolkien', 40000, 'The Hobbit.jpg', 1),
(6, 'Yesterday Afternoon Boy', 'Ikram Marki', 59000, 'Yesterday Afternoon Boy.jpg', 2),
(7, 'When Everything Feels Like Romcoms', 'Candra Aditya', 82500, 'When Everything Feels Like Romcoms.jpg', 2),
(8, 'Ubur-Ubur Lembur', 'Raditya Dika', 72600, 'Ubur-Ubur Lembur.jpg', 2),
(10, 'Skeptic Tank: Curahan Hati Pemuda Skeptis', 'Jacob Julian', 30000, 'Skeptic Tank_ Curahan Hati Pemuda Skeptis.jpg', 2),
(11, 'Percy Jackson & the Olympians: The Lightning Thief', 'Rick Riordan', 152000, 'Percy Jackson _ the Olympians Book One The Lightning Thief.jpg', 3),
(12, 'Ruin and Rising ', 'Leigh Bardugo ', 78400, 'Ruin and Rising.jpg', 3),
(13, 'The Alchemist ', 'Paulo Coelho', 172313, 'The Alchemist The Great American Read.jpg', 3),
(14, 'The House in the Cerulean Sea', 'TJ Klune', 189000, 'The House in the Cerulean Sea.jpg', 3),
(15, 'The Last Olympian ', 'Rick Riordan', 143000, 'The Last Olympian The Graphic Novel (Percy Jackson and the Olympians Series) Paperback.png', 3),
(16, 'The Stars Are Fire', 'Anita Shreve', 79000, 'The Stars Are Fire.jpg', 4),
(17, 'The Girl who Saved the King of Sweden', 'Jonas Jonasson', 97000, 'The Girl Who Saved The King Of Sweden.jpg', 4),
(18, 'FS Majapahit Milenia', 'Bre Redana', 80000, 'Majapahit Milenia.jpg', 4),
(19, '19 Derajat Ufuk Timur', 'Munandar Harits W.', 69000, '19 Derajat Ufuk Timur.jpg', 4),
(20, 'Madiun Dalam Kemelut Sejarah', 'Onghokham', 90000, 'Madiun Dalam Kemelut Sejarah.jpg', 4),
(21, 'Merinding', 'Tuti Kasih', 45000, 'Merinding.jpg', 5),
(22, 'Boneka Sandya', 'Eve Shi', 60000, 'Boneka Sandya.jpg', 5),
(23, 'Lewat Tengah Malam - Ganjil', 'Sweta Kartika', 68000, 'Lewat Tengah Malam - Ganjil.jpg', 5),
(24, 'Creepy Case Club: Kasus Nyanyian Berhantu', 'Rizal Iwan', 40000, 'Kasus Nyayian Berhantu.jpg', 5),
(25, 'Kisah Hantu & Legenda Dari Korea', 'Karina Tyas Widyaningrum', 50000, 'Kisah Hantu dan Legenda dari Korea.jpg', 5),
(26, 'Pride and Prejudice', 'Jane Austen', 74000, 'Pride and Prejudice.jpg', 6),
(27, 'Beautiful Disaster', 'Jamie McGuire', 118000, 'Beautiful Disaster.jpg', 6),
(28, 'It Ends With Us', 'Colleen Hoover', 81000, 'It Ends With Us.jpg', 6),
(29, 'The Spanish Love Deception', 'Elena Armas', 103000, 'The Spanish Love Deception.jpg', 6),
(30, 'The Hating Game', 'Sally Thorne', 70000, 'The Hating Game.jpg', 6),
(31, 'Ayat-ayat Cinta 2', 'Habiburrahman El Shirazy', 90000, 'Ayat-ayat Cinta 2.jpg', 7),
(32, 'Fatimah Az-Zahra', 'Sibel Eraslan', 85000, 'Fatimah Az-Zahra.jpg', 7),
(33, 'Bidadari Berbisik', 'Asma Nadia', 78000, 'Bidadari Berbisik.jpg', 7),
(34, 'Langkah Kaki', 'Shineeminka', 90000, 'Langkah kaki.jpg', 7),
(35, 'Rembulan Di Langit Konstantinopel', 'El Salman Ayashi. Rz', 45000, 'Rembulan di Langit Konstantinopel.jpg', 7),
(36, 'Bibliophile', 'Thurff', 79000, 'Bibliophile.jpg', 8),
(37, 'Seseorang Dari Matahari', 'Mas Ian', 86000, 'Seseorang Dari Matahari.jpg', 8),
(38, 'Senja Dan Pagi', 'Alffy Rev', 94000, 'Senja Dan Pagi.jpg', 8),
(39, 'Hujan', 'Tere Liye', 78000, 'Hujan.jpg', 8),
(40, 'Trisurya', 'Liu Cixin', 100000, 'Trisurya.jpg', 8),
(44, 'Ngenest - Ngetawain Hidup Ala Ernest', 'Ernest Prakasa', 60500, 'Ngenest - Ngetawain Hidup Ala Ernest.jpg', 2),
(48, 'Pulang', 'Tere Liye', 89000, 'Pulang.jpg', 1),
(49, 'The Lord Of The Rings: Dua Menara (The Two Towers) ', 'J.R.R Tolkien', 93000, 'The Two Towers.jpg', 1),
(57, 'Skripsick', 'Chara Perdana', 29000, 'Skripsick.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(30) NOT NULL,
  `name_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Action and Adventure'),
(2, 'Comedy'),
(3, 'Fantasy'),
(4, 'Historical'),
(5, 'Horror'),
(6, 'Romance'),
(7, 'Spiritual'),
(8, 'Young Adult');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(30) NOT NULL,
  `id_user` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `expedition` varchar(20) NOT NULL,
  `method` varchar(40) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `total_price` varchar(30) NOT NULL,
  `proof` varchar(300) NOT NULL,
  `id_order` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `id_user`, `name`, `number`, `email`, `address`, `city`, `state`, `zip`, `expedition`, `method`, `cardname`, `card_number`, `total_price`, `proof`, `id_order`) VALUES
(4, 3, 'Tamara Zackary', '2938812368', 'arthamevia0607@gmail.com', 'Perumahan Bintang Raya', 'Bandung', '175', '16820', 'JNE', 'BCA', 'Tamara Zackary', '1123-2635-2736', '', '1.png', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id_notify` int(30) NOT NULL,
  `id_user` int(30) NOT NULL,
  `id_order` int(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_notif` date NOT NULL,
  `num_receipt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id_notify`, `id_user`, `id_order`, `status`, `date_notif`, `num_receipt`) VALUES
(1, 3, 123, 'Sent', '2022-01-01', '6f61924695'),
(3, 11, 100, 'Prepared', '2021-12-31', '-'),
(5, 3, 2, 'Packaged', '2021-12-31', 'xxsrwegwe34'),
(7, 3, 10, 'Packaged', '2021-12-31', '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(30) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `uname`, `password`, `level`) VALUES
(1, 'Nadhif Ahmad', 'ahmadnadhif', 'nadhif123', 'admin'),
(2, 'Yanifa Fadhilah', 'fadhilahnifa', 'nifa456', 'cashier'),
(3, 'Tamara Zackary', 'tamara', 'tamara123', 'buyer'),
(11, 'Vinaputri Purnama', 'vinaputri', 'vina', 'buyer'),
(14, 'Hasna Syifa', 'hasna456', 'hasna', 'cashier'),
(19, 'Andrea Rahmania', 'andrea02', 'andrea', 'admin'),
(23, 'Vinaputri Purnama', 'vina123', '1234', 'buyer'),
(24, 'Sarah Nuraisya', 'sarah456', 'sarah', 'cashier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`id_notify`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id_notify` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notify`
--
ALTER TABLE `notify`
  ADD CONSTRAINT `notify_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
