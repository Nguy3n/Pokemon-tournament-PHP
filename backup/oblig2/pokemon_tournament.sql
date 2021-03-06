-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 25. Mar, 2016 02:45 AM
-- Server-versjon: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokemon_tournament`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'asdfasdf');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `pokemon`
--

CREATE TABLE `pokemon` (
  `pokemon_id` int(3) NOT NULL,
  `name` varchar(40) NOT NULL,
  `type` varchar(30) NOT NULL,
  `attack1` varchar(50) NOT NULL,
  `attack2` varchar(50) NOT NULL,
  `attack3` varchar(50) NOT NULL,
  `attack4` varchar(50) NOT NULL,
  `owner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `pokemon`
--

INSERT INTO `pokemon` (`pokemon_id`, `name`, `type`, `attack1`, `attack2`, `attack3`, `attack4`, `owner`) VALUES
(1, 'Pikachu', 'Lightning', 'Quick Attack', 'Lightning', 'Thunderbolt', 'Double Team', '1'),
(2, 'Raichu', 'Lightning', 'Tackle', 'Cut', 'Rest', 'Spark', '1'),
(3, 'Diglett', 'Earth', 'Tickle', 'Dig', 'Earthquake', 'Harden', '1'),
(4, 'Gyarados', 'Dragon', 'Dragon Rage', 'Hydropump', 'Ice Beam', 'Recover', '2'),
(5, 'Mew', 'Normal', 'Nightmare', 'Retaliate', 'Sing', 'Fly', '2'),
(6, 'Mewtwo', 'Normal', 'Flail', 'Cosmic Power', 'Imprison', 'Pin Missile', '2'),
(7, 'Pikachu', 'Electric', 'Screech', 'Sharpen', 'Helping Hand', 'Electrify', '3'),
(8, 'Charizard', 'Fire', 'Heat Crash', 'Inferno', 'Overheat', 'Ember', '3'),
(9, 'Blastoise', 'Water', 'Hydro Pump', 'Bubble', 'Tackle', 'Surf', '4'),
(10, 'Scyther', 'Grass', 'Solar Beam', 'Petal Dance', 'Giga Drain', 'Quick Attack', '4'),
(11, 'Seal', 'Ice', 'Blizzard', 'Icy Wind', 'Haze', 'Mist', '4'),
(12, 'Hitmontop', 'Fightning', 'Double Kick', 'Dynamic Punch', 'Triple Kick', 'Double Team', '5'),
(13, 'Butterfree', 'Poison', 'Sleep powder', 'Acid', 'Poison Tail', 'Fury Attack', '5'),
(14, 'Muk', 'Ground', 'Mud-Slap', 'Sand Tomb', 'Dig', 'Sand Attack', '6'),
(15, 'Pidgeotto', 'Flying', 'Gust', 'Quick Attack', 'Tackle', 'Fly', '6'),
(16, 'Abra', 'Psychic', 'Teleport', 'Calm Mind', 'Confusion', 'Telekinesis', '6'),
(17, 'Beedrill', 'Bug', 'Sticky Web', 'Twineedle', 'Bug Bite', '', '8'),
(18, 'Onyx', 'Rock', 'Rollout', 'Tackle', 'Head Smash', 'Rock Slide', '8'),
(19, 'Ghastly', 'Ghost', 'Curse', 'Lick', 'Shadow Ball', 'Nightmare', '8');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `stage`
--

CREATE TABLE `stage` (
  `stage_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `amount_seats` int(5) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `stage`
--

INSERT INTO `stage` (`stage_id`, `type`, `address`, `amount_seats`, `image`) VALUES
(1, 'Water', 'Cerulean City', 10000, 'images/stage/water.png'),
(2, 'Fire', 'Oslo S', 400, 'images/stage/fire.jpg'),
(3, 'Earth', 'Kongens gate 1', 3040, 'images/stage/earth.jpg'),
(4, 'Grass', 'Kanto street 5', 20, 'images/stage/grass.jpg');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(2) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `hometown` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `phone_number` int(8) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `first_name`, `last_name`, `hometown`, `age`, `phone_number`, `image`) VALUES
(1, 'Ash', 'Ketchum', 'Pallet Town', 10, 12345678, 'images/trainers/1.png'),
(2, 'Gary', 'Oak', 'Pallet Town', 10, 87654321, 'images/trainers/2.jpg'),
(3, 'Misty', 'Waterflower', 'Cerulean City', 10, 12312312, 'images/trainers/3.jpg'),
(4, 'Brock', 'Harrison', 'Pewter City', 15, 9876543, 'images/trainers/4.jpg'),
(5, 'Jessie', 'Musashi', 'Ukjent', 25, 51098324, 'images/trainers/5.jpg'),
(6, 'Red', '???', 'Pallet Town', 16, 50287588, 'images/trainers/6.png'),
(8, 'May', 'Haruka', 'Petalburg City', 10, 50427512, 'images/trainers/may.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`pokemon_id`);

--
-- Indexes for table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`stage_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `pokemon_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `stage`
--
ALTER TABLE `stage`
  MODIFY `stage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainer_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
