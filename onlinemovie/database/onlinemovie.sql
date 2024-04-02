
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'fiction'),
(2, 'adventure'),
(3, 'horror'),
(4, 's'),
(5, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `release_year` int(11) NOT NULL,
  `genre_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `runtime` varchar(4) NOT NULL,
  `description` varchar(100) NOT NULL,
  `viewers` int(11) DEFAULT 1,
  `imgpath` text NOT NULL,
  `videopath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `mid`, `title`, `release_year`, `genre_id`, `country_id`, `runtime`, `description`, `viewers`, `imgpath`, `videopath`) VALUES
(1, 1, 'rampage', 2017, 1, NULL, '120', 'animals', 8, 'rampage.jpg', 'RAMPAGE Trailer.mp4'),
(2, 2, 'black panther', 2017, 1, NULL, '140', 'super hero movie', 13, 'black panther.jpg', 'Black Panther.mp4'),
(3, 3, 'spiderman homecoming', 2018, 1, NULL, '110', 'super hero movie', 5, 'spider-man-homecoming.jpg', 'Spider-Man Homecoming.mp4'),
(4, 4, 'jumanji', 2017, 2, NULL, '130', '4 kids stuck in video game', 12, 'jumanji2017.jpg', 'JUMANJI 17.mp4'),
(5, 5, 'the conjuring', 2013, 3, NULL, '120', 'ghost house', 1, 'Conjuring.jpg', 'The Conjuring.mp4'),
(6, 6, 'the conjuring 2', 2015, 3, NULL, '115', 'cursed family', 1, 'conjuring2.jpg', 'The Conjuring 2.mp4'),
(7, 7, 'infinity wars ', 2018, 1, NULL, '123', 'collaboration of all marvel characters', 5, 'infinity war.jpg', 'Avengers Infinity War.mp4'),
(8, 8, 's', 0, 4, NULL, '', 's', 27, 'Baby Care Website in PHP with Full Source Code.jpg', ''),
(9, 9, 's', 0, 4, NULL, '12', 'sd', 27, 'Online Attendance Management System in PHP with Full Source Code.jpg', 'Attendance Monitoring.mp4'),
(10, 10, 'sadasdas', 0, 5, NULL, '', 'asd', 19, 'Attendance Monitoring System in Android with Full Source Code.jpg', 'Attendance Monitoring.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('') NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `DOB` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `username`, `password`, `email`, `role`, `name`, `phone`, `DOB`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin@gmail.com', '', 'shubham belgaonkar', '8692849041', '25/04/1998'),
(2, 'soubik@gmail.com', '1234', 'soubik@gmail.com', '', 'soubik bera', '8622849041', '16/10/1995'),
(3, 'niru@gmail.com', '1234', 'niru@gmail.com', '', 'niru lal', '1234287564', '16/09/1996'),
(4, 'janobe@gmail.com', 'admin', 'janobe@gmail.com', '', 's s', '9876565421', '15/01/1995');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mid` (`mid`),
  ADD KEY `movies_genre_id_foreign` (`genre_id`),
  ADD KEY `movies_country_id_foreign` (`country_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_movie_id_foreign` (`movie_id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `movies_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user1` (`id`);
COMMIT;

