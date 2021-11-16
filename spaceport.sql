-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 11:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spaceport`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `id_action` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id_action`, `name`) VALUES
(1, 'deleted a ship'),
(2, 'grant admin'),
(3, 'deleted a user'),
(4, 'logged in'),
(5, 'edited a ship'),
(6, 'signed up'),
(7, 'logged out'),
(8, 'rented a ship'),
(9, 'added a ship');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `ime` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `ime`) VALUES
(1, 'Star Wars'),
(2, 'Star Trek'),
(3, 'Odyssey'),
(4, 'Alien'),
(5, 'Mass Effect');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `time`, `user_id`, `action_id`) VALUES
(1, 1584359672, 1, 4),
(2, 1584359797, 1, 8),
(3, 1584362722, 1, 1),
(4, 1584363788, 1, 9),
(5, 1584445953, 1, 4),
(6, 1584456038, 1, 5),
(9, 1584530569, 1, 4),
(10, 1584530578, 1, 3),
(11, 1584530641, 1, 7),
(14, 1584530668, 1, 4),
(15, 1584530673, 1, 3),
(16, 1584530737, 1, 3),
(17, 1584530840, 1, 3),
(18, 1584530933, 1, 3),
(19, 1584531051, 1, 3),
(20, 1584531782, 1, 7),
(23, 1584531880, 1, 4),
(24, 1584532488, 1, 7),
(28, 1584532510, 1, 4),
(29, 1584532516, 1, 3),
(30, 1585226287, 1, 4),
(31, 1585226825, 1, 7),
(32, 1585226990, 1, 4),
(33, 1585228046, 1, 4),
(34, 1585228099, 1, 7),
(35, 1585228104, 2, 4),
(36, 1585228133, 2, 7),
(37, 1585228138, 1, 4),
(38, 1585228480, 1, 7),
(39, 1585228485, 2, 4),
(40, 1585228507, 2, 7),
(43, 1585228550, 1, 4),
(44, 1585228580, 1, 7),
(45, 1585228584, 1, 4),
(46, 1585304641, 1, 4),
(47, 1585304723, 1, 5),
(48, 1585304742, 1, 4),
(49, 1585304760, 1, 4),
(50, 1585304820, 1, 9),
(51, 1585304909, 2, 4),
(52, 1585304964, 2, 7),
(53, 1585304971, 1, 4),
(54, 1585304983, 1, 1),
(55, 1585305021, 1, 2),
(56, 1585305029, 1, 3),
(57, 1585305048, 1, 7),
(58, 1585305053, 2, 4),
(59, 1585305058, 2, 8),
(60, 1585305065, 2, 8),
(61, 1585305078, 2, 8),
(62, 1585305211, 2, 7),
(63, 1585305216, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id_msg` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id_msg`, `text`, `time`, `user_id`) VALUES
(3, 'Zdravo admin ovo je poruka od korisnika.', 1585228504, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rented`
--

CREATE TABLE `rented` (
  `id_rented` int(11) NOT NULL,
  `crew` tinyint(1) NOT NULL,
  `time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ship_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rented`
--

INSERT INTO `rented` (`id_rented`, `crew`, `time`, `user_id`, `ship_id`) VALUES
(3, 1, 1584359797, 1, 17),
(5, 1, 1585305058, 2, 22),
(6, 0, 1585305065, 2, 5),
(7, 0, 1585305078, 2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `ships`
--

CREATE TABLE `ships` (
  `id_ship` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ships`
--

INSERT INTO `ships` (`id_ship`, `name`, `img`, `story`, `price`, `deleted`, `cat_id`) VALUES
(1, 'Borg Cube', '19.jpg', 'The Borg cube was a type of starship used by the Borg Collective in the 24th century. Along with the Borg sphere, cubes were among the primary types of vessel for its fleet. Described as mighty and omnipotent, Borg cubes were considered one of the most destructive weapons ever known.', 3500, 0, 2),
(2, 'Star Destroyer', '20.jpg', 'A Star Destroyer was a dagger-shaped type of capital ship that were used by the Galactic Republic, the Galactic Empire, and the First Order. Notable examples of Star Destroyers include the Imperial-class Star Destroyer and its predecessor the Venator-class Star Destroyer.', 1800, 0, 1),
(4, 'Reaper', '22.jpg', 'Harbinger is a Reaper who resides in dark space with the rest of the Reaper fleet. It is the overseer of the Collectors\' operations, frequently possessing individual Collectors to fight battles personally. Harbinger\'s involvement first began two months after the Battle of the Citadel, when it made a deal with the Shadow Broker to gain possession of Commander Shepard\'s body following the destruction of the SSV Normandy. ', 1599, 0, 5),
(5, 'Millennium Falcon', '1.jpg', 'The YT-1300 Corellian light freighter is primarily commanded by smuggler Han Solo (Harrison Ford) and his Wookiee first mate, Chewbacca (Peter Mayhew), and was previously owned by gambler con-artist Lando Calrissian (Billy Dee Williams). Described as being one of the fastest vessels in the Star Wars canon, the Falcon looks like a worn-out junker, but despite her humble origins and shabby exterior, the Millennium Falcon has played a critical role in some of the greatest victories of the Rebel Alliance and the New Republic.', 299, 0, 1),
(6, 'Starship Enterprise', '2.jpg', 'The USS Reliant (NCC-1864) was a 23rd century Federation Miranda-class starship operated by Starfleet. In 2285, the Reliant was commanded by Captain Terrell. While under his command, the ship\'s prefix code was 16309.', 1499, 0, 2),
(7, 'X Wing', '17.jpg', 'X-wing starfighters were a type of starfighter marked by their distinctive S-foils that resembled the High Galactic script\'s character \"X\" in attack formation.They were heavily armed with four laser cannons on the S-foils and proton torpedo launchers in the fuselage. X-wings were designed for dogfighting and long missions. During the Galactic Civil War, the Rebel Alliance used T-65B X-wing starfighters and T-65C-A2 X-wings in many battles, including the Battle of Yavin and the Battle of Endor.', 140, 0, 1),
(8, 'Death Star', '18.jpg', 'The DS-1 Orbital Battle Station was originally designed by the Geonosians before the Galactic Republic and later the Galactic Empire took over the project. However, the plans for the battle station were stolen by the Rebel Alliance from Scarif, leading to its destruction at the Battle of Yavin, but not before it unleashed its planet-destroying powers on Alderaan.', 3999, 0, 1),
(9, 'Tantive IV', '3.jpg', 'The Tantive IV was a CR90 corvette in the service of the House of Organa. The ship was a central player in the events at the beginning of the Galactic Civil War, serving as Princess Leia Organa\'s personal starship in the leadup to the Battle of Yavin. Decades later, the vessel re-entered conflict against the Final Order by serving Organa\'s Resistance, again playing a crucial role.', 399, 0, 1),
(11, 'The Nostromo', '4.jpg', 'The USCSS Nostromo, registration number 1809246, was a modified Lockmart CM-88B Bison M-Class starfreighter owned by the Weyland-Yutani Corporation and captained by Arthur Dallas, registered out of Panama. The Nostromo operated as a tug, connecting to and pulling loads like a tractor truck rather than carrying those loads on board like a traditional freighter.', 1200, 0, 4),
(12, 'USS Enterprise', '6.jpg', 'USS Enterprise (NCC-1701) is a starship in the Star Trek media franchise. It is the main setting of the original Star Trek television series (1966–1969) and several Star Trek films, and it has been depicted in various spinoffs, films, books, products, and fan-created media. Under the command of Captain James T. Kirk, the Enterprise carries its crew on a mission \"to explore strange, new worlds; to seek out new life and new civilizations; to boldly go where no man has gone before\".', 1499, 0, 2),
(13, 'The Narcissus', '7.jpg', 'The Narcissus was a modified Lockmart Starcub light shuttle that served as one of two lifeboats aboard the Weyland-Yutani commercial hauler USCSS Nostromo. Warrant Officer Ellen Ripley used the Narcissus to escape the destruction of its parent vessel in 2122, along with the ship\'s cat Jones.', 699, 0, 4),
(14, 'Slave I', '8.jpg', 'Slave I was a modified Firespray-31-class patrol and attack craft used by the infamous bounty hunter Jango Fett before the Clone Wars and later his unaltered cloned son Boba Fett just prior to the Fall of the Republic and during the reign of the Galactic Empire. The ship in its original form was produced by a subsidiary company of Kuat Drive Yards, based on the planet Kuat.', 419, 0, 1),
(15, 'USS Sulaco', '9.jpg', 'Designed by the legendary Syd Mead, this military load carrier only appears in the movie for a couple of shots, but still managed to leave a huge impression on audiences. Consequently, the studio model was only finished down one side to save time and money.', 1500, 0, 4),
(16, 'Discovery Pod', '10.jpg', 'Another vehicle based on theoretical NASA designs of the ear, the Discovery Pod was a throwback to earlier design revisions where the artificial intelligence HAL was to have a full robotic body enabling him to move around the ship. The only remaining aspect of this in the movie is when astronaut Frank Poole is killed by the pod cutting his air pipe. HAL’s eye can be clearly seen at the front of the pod as he takes control.', 89, 0, 3),
(17, 'Aires Lunar Lander', '11.jpg', 'The Aires shuttle was designed using speculative NASA plans for future travel systems and was based on what a hypothetical a scaled-up version of the Apollo era Lunar Landers might eventually become. It seemed a very realistic proposition when it was designed back in 1968.', 845, 0, 3),
(18, 'Pan Am Space Clipper', '12.jpg', 'The Pan Am Space Clipper was presented as a realistic solution to orbital travel. So much so, that in 1968 the airline started their “Moon flight reservations program” and actually put tickets on-sale for future journeys to orbit and beyond. By 1985 they were holding 90,002 reservations.', 599, 0, 3),
(19, 'Discovery One', '13.jpg', 'The Discovery spacecraft design featured nuclear engines, which was the main reason for the huge central spine separating the crew from the fuel and thrusters. This might seen crazy today, but designs of the cold-war and thinking of the 1960s used nuclear engines as a baseline standard for many real-world vehicles.', 1100, 0, 3),
(20, 'Normandy SR-2', '14.jpg', 'The Normandy SR-2 is a starship that appears in 2185, and serves as the \"successor\" to the SR-1. The Illusive Man had Cerberus build the SR-2 for the newly revived Commander Shepard\'s team to aid them in their mission to stop the Collectors\' galaxy-wide campaign of human abductions. The ship serves as the headquarters of the Lazarus Cell.', 750, 0, 5),
(21, 'Turian Cruiser', '15.jpg', 'The turians are a race in Mass Effect, members of the Citadel Council and known for their military role, particularly their contribution of starships to the Citadel fleet. Cruisers are middle-weight combatants, faster than dreadnoughts, and more heavily-armed than frigates. Cruisers are the standard patrol unit, and often lead frigate flotillas. Cruisers cannot land on medium or high-gravity worlds, but do possess the ability to land on low-gravity planets.', 1600, 0, 5),
(22, 'Destiny Ascension', '16.jpg', 'The Destiny Ascension is an asari dreadnought and flagship of the Citadel Fleet. It is a starship of stunning power; according to a volus visitor, it has almost as much firepower as the rest of the asari fleet combined. The Ascension is currently commanded by the asari Matriarch Lidanya.', 1400, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 2),
(7, 'admin2', 'admin2', 'c84258e9c39059a89ab77d846ddab909', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id_action`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `action_id` (`action_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_msg`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rented`
--
ALTER TABLE `rented`
  ADD PRIMARY KEY (`id_rented`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `ship_id` (`ship_id`),
  ADD KEY `ship_id_2` (`ship_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `ships`
--
ALTER TABLE `ships`
  ADD PRIMARY KEY (`id_ship`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `id_action` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rented`
--
ALTER TABLE `rented`
  MODIFY `id_rented` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ships`
--
ALTER TABLE `ships`
  MODIFY `id_ship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`action_id`) REFERENCES `actions` (`id_action`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `log_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rented`
--
ALTER TABLE `rented`
  ADD CONSTRAINT `rented_ibfk_1` FOREIGN KEY (`ship_id`) REFERENCES `ships` (`id_ship`),
  ADD CONSTRAINT `rented_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `ships`
--
ALTER TABLE `ships`
  ADD CONSTRAINT `ships_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id_cat`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
