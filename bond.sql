-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 01:44 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bond`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `code` int(11) NOT NULL,
  `title` varchar(256) COLLATE latin1_bin NOT NULL,
  `price` int(200) NOT NULL,
  `image` varchar(255) COLLATE latin1_bin NOT NULL,
  `category` varchar(256) COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`code`, `title`, `price`, `image`, `category`) VALUES
(2, 'A-Tree-Grows-in-Brooklyn', 0, 'images/book_icons/biography/A-Tree-Grows-in-Brooklyn-by-Betty-Smith-458x700.jpg', 'biography'),
(3, 'A-Walk-in-the-Woods', 0, 'images/book_icons/biography/A-Walk-in-the-Woods-by-Bill-Bryson-426x700.jpg', 'biography'),
(4, 'Boys-in-the-Boat', 0, 'images/book_icons/biography/Boys-in-the-Boat-by-Daniel-Brown-463x700.jpg', 'biography'),
(5, 'Daily-Rituals', 0, 'images/book_icons/biography/Daily-Rituals-by-Mason-Currey-459x700.jpg', 'biography'),
(6, 'Into-Thin-Air', 0, 'images/book_icons/biography/Into-Thin-Air-by-Jon-Krakauer-455x700.jpg', 'biography'),
(7, 'JustMercy', 0, 'images/book_icons/biography/JustMercy-by-BryanStevenson-458x700.jpg', 'biography'),
(8, 'Moneyball', 0, 'images/book_icons/biography/Moneyball-by-Michael-Lewis-457x700.jpg', 'biography'),
(9, 'Mountains-Beyond-Mountains', 0, 'images/book_icons/biography/Mountains-Beyond-Mountains-by-Tracy-Kidder-456x700.jpg', 'biography'),
(10, 'Night', 0, 'images/book_icons/biography/Night-by-Elie-Wiesel-437x700.jpg', 'biography'),
(11, 'Red-Notice', 0, 'images/book_icons/biography/Red-Notice-by-Bill-Browder-462x700.jpg', 'biography'),
(12, 'The-Blind-Side', 0, 'images/book_icons/biography/The-Blind-Side-by-Michael-Lewis-467x700.jpg', 'biography'),
(13, 'The-New-New-Thing', 0, 'images/book_icons/biography/The-New-New-Thing-by-Michael-Lewis-467x700.jpg', 'biography'),
(14, 'The-Reason-I-Jump', 0, 'images/book_icons/biography/TheReasonIJump-by-NaokiHigashida-473x700.jpg', 'biography'),
(15, 'When-Breath-Bcomes-Air', 0, 'images/book_icons/biography/WHEN-BREATH-BECOMES-AIR-by-PAUL-KALANITHI-474x700.jpg', 'biography'),
(16, 'Wild', 0, 'images/book_icons/biography/Wild-by-Cheryl-Strayed-472x700.jpg', 'biography'),
(17, 'A-Game-of-Thrones', 0, 'images/book_icons/fantasy/A-Game-of-Thrones-by-George-RR-Martin-461x700.jpg', 'fantasy'),
(18, 'Harry-Potter-Chamber-of-Secrets', 0, 'images/book_icons/fantasy/Harry-Potter-Chamber-of-Secrets-JK-Rowling-463x700.jpg', 'fantasy'),
(19, 'Harry-Potter-Deathly-Hallows', 0, 'images/book_icons/fantasy/Harry-Potter-Deathly-Hallows-by-JK-Rowling-464x700.jpg', 'fantasy'),
(20, 'Harry-Potter-Half-Blood-Prince', 0, 'images/book_icons/fantasy/Harry-Potter-Half-Blood-Prince-by-JK-Rowling-487x700.jpg', 'fantasy'),
(21, 'Harry-Potter-Order-of-Phoenix', 0, 'images/book_icons/fantasy/Harry-Potter-Order-of-Phoenix-by-JK-Rowling-473x700.jpg', 'fantasy'),
(22, 'Harry-Potter-Prisoner-of-Azkaban', 0, 'images/book_icons/fantasy/Harry-Potter-Prisoner-of-Azkaban-by-JK-Rowling-491x700.jpeg', 'fantasy'),
(23, 'Lord-of-the-Flies', 0, 'images/book_icons/fantasy/Lord-of-the-Flies-by-William-Golding-414x700.jpg', 'fantasy'),
(24, 'Lord-of-the-Rings', 0, 'images/book_icons/fantasy/Lord-of-the-Rings-by-JRR-Tolkien-541x700.jpg', 'fantasy'),
(25, 'She', 0, 'images/book_icons/fantasy/She-by-H-Rider-Haggard-467x700.jpg', 'fantasy'),
(26, 'The-Adventures-of-Huckleberry-Finn', 0, 'images/book_icons/fantasy/The-Adventures-of-Huckleberry-Finn-by-Mark-Twain-479x700.jpg', 'fantasy'),
(27, 'The-Alchemist', 0, 'images/book_icons/fantasy/The-Alchemist-by-Paulo-Coelho-461x700.jpg', 'fantasy'),
(28, 'The-Andromeda-Strain', 0, 'images/book_icons/fantasy/The-Andromeda-Strain-by-Michael-Crichton-430x700.jpg', 'fantasy'),
(29, 'The-Hobbit-by-JRR-Tolkien-', 0, 'images/book_icons/fantasy/The-Hobbit-by-JRR-Tolkien-483x700.jpg', 'fantasy'),
(30, 'The-Lion-Witch-Wardrobe', 0, 'images/book_icons/fantasy/The-Lion-Witch-Wardrobe-by-CS-Lewis-495x700.jpg', 'fantasy'),
(31, 'Twilight', 0, 'images/book_icons/fantasy/Twilight-by-Stephanie-Meyer-464x700.jpg', 'fantasy'),
(32, 'All-the-Light-We-Cannot-See', 0, 'images/book_icons/fiction/All-the-Light-We-Cannot-See-by-Anthony-Doerr-466x700.jpg', 'fiction'),
(33, 'Anne-of-Green-Gables', 0, 'images/book_icons/fiction/Anne-of-Green-Gables-by-LM-Montgomery-488x700.jpg', 'fiction'),
(34, 'Black-Beauty', 0, 'images/book_icons/fiction/Black-Beauty-by-Anna-Sewell-466x700.jpg', 'fiction'),
(35, 'Candide', 0, 'images/book_icons/fiction/Candide-by-Voltaire-499x700.jpg', 'fiction'),
(36, 'Don-Quixote', 0, 'images/book_icons/fiction/Don-Quixote-by-Miguel-de-Cervantes-420x700.jpg', 'fiction'),
(37, 'Eleanor-&-Park', 0, 'images/book_icons/fiction/eleanor&park.jpg', 'fiction'),
(38, 'Everything-I-Never-Told-You', 0, 'images/book_icons/fiction/Everything-I-Never-Told-You-by-Celeste-Ng-458x700.jpg', 'fiction'),
(39, 'Great-Expectations', 0, 'images/book_icons/fiction/Great-Expectations-by-Charles-Dickens-458x700.jpg', 'fiction'),
(40, 'GunsGermsAndSteel', 0, 'images/book_icons/fiction/GunsGermsAndSteel-by-JaredDiamond-459x700.jpg', 'fiction'),
(41, 'Inferno', 0, 'images/book_icons/fiction/Inferno-by-Dante-Alighieri-431x700.jpg', 'fiction'),
(42, 'I\'ll- Give-You-the-Sun', 0, 'images/book_icons/fiction/iWillGiveYouSun.jpg', 'fiction'),
(43, 'Lolita', 0, 'images/book_icons/fiction/Lolita-by-Vladimir-Nabokov-448x700.png', 'fiction'),
(44, 'Sapiens', 0, 'images/book_icons/fiction/sapiens-by-yuval-noah-harari-469x700.jpg', 'fiction'),
(45, 'State-of-Wonder', 0, 'images/book_icons/fiction/State-of-Wonder-by-Ann-Patchett-471x700.jpg', 'fiction'),
(46, 'The-Book-Thief', 0, 'images/book_icons/fiction/The-Book-Thief-by-Markus-Zusak-466x700.jpg', 'fiction'),
(47, 'The-Catcher-in-the-Rye', 0, 'images/book_icons/fiction/The-Catcher-in-the-Rye-by-JD-Salinger-488x700.jpg', 'fiction'),
(48, 'The-Dream-of-the-Red-Chamber', 0, 'images/book_icons/fiction/The-Dream-of-the-Red-Chamber-by-Cao-Xueqin-448x700.jpg', 'fiction'),
(49, 'The-Kite-Runner', 0, 'images/book_icons/fiction/The-Kite-Runner-by-Khaled-Hosseini-444x700.jpg', 'fiction'),
(50, 'The-Lessons-of-History', 0, 'images/book_icons/fiction/The-Lessons-of-History-BY-Will-Ariel-Durant-455x700.jpg', 'fiction'),
(51, 'The-Namesake', 0, 'images/book_icons/fiction/The-Namesake-by-Jhumpa-Lahiri-460x700.jpg', 'fiction'),
(52, 'The-Old-Man-and-the-Sea', 0, 'images/book_icons/fiction/The-Old-Man-and-the-Sea-by-Ernest-Hemingway-478x700.jpg', 'fiction'),
(53, 'The-Poisonwood-Bible', 0, 'images/book_icons/fiction/The-Poisonwood-Bible-by-Barbara-Kingsolver-445x700.jpg', 'fiction'),
(54, 'The-Secret-Life-of-Bees', 0, 'images/book_icons/fiction/The-Secret-Life-of-Bees-by-Sue-Monk-Kidd-453x700.jpg', 'fiction'),
(55, 'The-Stranger', 0, 'images/book_icons/fiction/The-Stranger-by-Albert-Camus-453x700.jpg', 'fiction'),
(56, 'To-Kill-a-Mockingbird', 0, 'images/book_icons/fiction/To_Kill_a_Mockingbird.JPG', 'fiction'),
(57, 'And-Then-There-Were-None', 0, 'images/book_icons/mystery/And-Then-There-Were-None-by-Agatha-Christie-435x700.jpg', 'mystery'),
(58, 'Murder-on-the-Orient-Express', 0, 'images/book_icons/mystery/murderOnTheOrientExpress.jpg', 'mystery'),
(59, 'Mystery-River', 0, 'images/book_icons/mystery/mysteryRiver.jpg', 'mystery'),
(60, 'Shutter-Island', 0, 'images/book_icons/mystery/shutterIsland.jpg', 'mystery'),
(61, 'The-Alienist', 0, 'images/book_icons/mystery/theAlienist.jpg', 'mystery'),
(62, 'The-Bone-Collector', 0, 'images/book_icons/mystery/theBoneCollector.jpg', 'mystery'),
(63, 'The-Da-Vinci-Code', 0, 'images/book_icons/mystery/The-Da-Vinci-Code-by-Dan-Brown-468x700.jpg', 'mystery'),
(64, 'The-Girl-With-The-Dragon-Tattoo', 0, 'images/book_icons/mystery/theGirlWithTheDragonTattoo.jpg', 'mystery'),
(65, 'The-Godfather', 0, 'images/book_icons/mystery/theGodfather.jpg', 'mystery'),
(66, 'The-Redbreast', 0, 'images/book_icons/mystery/The-Redbreast-by-Jo-Nesbo-435x700.jpg', 'mystery'),
(67, '1984', 0, 'images/book_icons/scienceFiction/1984-by-George-Orwell-460x700.jpg', 'scienceFiction'),
(68, 'Altered-Carbon', 0, 'images/book_icons/scienceFiction/alteredCarbon.jpg', 'scienceFiction'),
(69, 'Apocalypse-for-Beginners', 0, 'images/book_icons/scienceFiction/apocalypseForBeginners.jpg', 'scienceFiction'),
(70, 'Blackout', 0, 'images/book_icons/scienceFiction/blackOut.jpg', 'scienceFiction'),
(71, 'James-Bond', 0, 'images/book_icons/scienceFiction/James-Bond-by-Ian-Fleming-404x700.jpg', 'scienceFiction'),
(72, 'Nexus', 0, 'images/book_icons/scienceFiction/nexus.jpg', 'scienceFiction'),
(73, 'One-Hundred-Years-of-Solitude', 0, 'images/book_icons/scienceFiction/One-Hundred-Years-of-Solitude-by-Gabriel-Garcia-marquez-469x700.jpg', 'scienceFiction'),
(74, 'Pattern-Recognition', 0, 'images/book_icons/scienceFiction/patternRecognition.jpg', 'scienceFiction'),
(75, 'Ready-Player-One', 0, 'images/book_icons/scienceFiction/readyPlayerOne.jpg', 'scienceFiction'),
(76, 'Seveneves', 0, 'images/book_icons/scienceFiction/seveneves.jpg', 'scienceFiction'),
(77, 'Star-Wars', 0, 'images/book_icons/scienceFiction/Star-Wars-by-various-authors-486x700.jpg', 'scienceFiction'),
(78, 'The-Hunger-Games', 0, 'images/book_icons/scienceFiction/theHungerGames.jpg', 'scienceFiction'),
(79, 'The-Martian', 0, 'images/book_icons/scienceFiction/The-Martian-by-Andy-Weir-461x700.jpeg', 'scienceFiction'),
(80, 'World-War-Z', 0, 'images/book_icons/scienceFiction/worldWarZ.jpg', 'scienceFiction');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sid` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `category` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sid`, `username`, `title`, `image`, `category`) VALUES
(20, 'anish', 'Boys-in-the-Boat', 'images/book_icons/bi', 'biography'),
(30, 'omkar', 'Altered-Carbon', 'images/book_icons/scienceFiction/alteredCarbon.jpg', 'scienceFiction'),
(31, 'omkar', 'A-Tree-Grows-in-Brooklyn', 'images/book_icons/biography/A-Tree-Grows-in-Brooklyn-by-Betty-Smith-458x700.jpg', 'biography'),
(32, 'omkar', 'A-Walk-in-the-Woods', 'images/book_icons/biography/A-Walk-in-the-Woods-by-Bill-Bryson-426x700.jpg', 'biography'),
(33, 'dev', 'A-Walk-in-the-Woods', 'images/book_icons/biography/A-Walk-in-the-Woods-by-Bill-Bryson-426x700.jpg', 'biography'),
(34, 'dev', 'Boys-in-the-Boat', 'images/book_icons/biography/Boys-in-the-Boat-by-Daniel-Brown-463x700.jpg', 'biography'),
(35, 'dev', 'Into-Thin-Air', 'images/book_icons/biography/Into-Thin-Air-by-Jon-Krakauer-455x700.jpg', 'biography'),
(36, 'omkar', 'When-Breath-Bcomes-Air', 'images/book_icons/biography/WHEN-BREATH-BECOMES-AIR-by-PAUL-KALANITHI-474x700.jpg', 'biography'),
(37, 'omkar', 'Anne-of-Green-Gables', 'images/book_icons/fiction/Anne-of-Green-Gables-by-LM-Montgomery-488x700.jpg', 'fiction'),
(38, 'omkar', 'Black-Beauty', 'images/book_icons/fiction/Black-Beauty-by-Anna-Sewell-466x700.jpg', 'fiction'),
(40, 'anish', 'Black-Beauty', 'images/book_icons/fiction/Black-Beauty-by-Anna-Sewell-466x700.jpg', 'fiction'),
(44, 'omkar', 'Daily-Rituals', 'images/book_icons/biography/Daily-Rituals-by-Mason-Currey-459x700.jpg', 'biography'),
(47, 'omkar', 'Boys-in-the-Boat', 'images/book_icons/biography/Boys-in-the-Boat-by-Daniel-Brown-463x700.jpg', 'biography');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `phone`) VALUES
(1, 'omkar', '202cb962ac59075b964b07152d234b70', 'omkar@gmail.com', 0),
(2, 'anish', '202cb962ac59075b964b07152d234b70', 'anish@gmail.com', 0),
(3, 'dev', '202cb962ac59075b964b07152d234b70', 'dev@gmail.com', 0),
(4, 'qais', '202cb962ac59075b964b07152d234b70', 'qais@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
