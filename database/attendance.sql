-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 28 août 2024 à 14:11
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `attendance`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234'),
(2, 'admin', '1234'),
(3, 'EschosysTech', 'eschosys@123'),
(4, 'EschosysTech', 'eschosys@123'),
(5, 'EschosysTech', 'eschosys@123'),
(6, 'admin', '123'),
(7, 'EschosysTech', 'eschosys@123'),
(8, 'admin', '123'),
(9, 'admin', '12344'),
(10, 'EschosysTech', 'eschosys'),
(11, 'admin', '1233'),
(12, 'EschosysTech', 'eschosys@123'),
(13, 'admin', '2'),
(14, 'admin', '23'),
(15, 'admin', '123'),
(16, 'EschosysTech', 'eschosys@123'),
(17, 'EschosysTech', 'eschosy'),
(18, 'EschosysTech', 'e'),
(19, 'EschosysTech', 'e'),
(20, 'EschosysTech', 'e'),
(21, 'EschosysTech', 'e'),
(22, 'EschosysTech', 'es'),
(23, 'EschosysTech', 'es'),
(24, 'EschosysTech', 'w'),
(25, 'EschosysTech', 's'),
(26, 'EschosysTech', 's'),
(27, 'EschosysTech', '3'),
(28, 'EschosysTech', 'w'),
(29, 'a', '1'),
(30, 'EschosysTech', 'eschosys@123'),
(31, 'EschosysTech', 'eschosys@123'),
(32, 'EschosysTech', 'eschosys@123'),
(33, 'EschosysTech', 'eschosys@123'),
(34, 'EschosysTech', 'eschosys@123'),
(35, 'EschosysTech', 'eschosys@123'),
(36, 'EschosysTech', 'eschosys@123'),
(37, 'EschosysTech', 'eschosys@123'),
(38, 'EschosysTech', 'eschosys@123'),
(39, 'EschosysTech', 'eschosys@123'),
(40, 'EschosysTech', 'eschosys@123'),
(41, 'EschosysTech', 'eschosys@123'),
(42, 'EschosysTech', 'eschosys@123'),
(43, 'EschosysTech', 'eschosys@123'),
(44, 'EschosysTech', 'eschosys@123'),
(45, 'EschosysTech', 'eschosys\"123'),
(46, 'EschosysTech', 'eschosys@123'),
(47, 'EschosysTech', 'eschosys@123'),
(48, 'EschosysTech', 'eschosys@123'),
(49, 'Eschosys Tech', 'eschosys@123'),
(50, 'Eschosys Tech', 'eschosys@123'),
(51, 'Eschosys Tech', 'eschosys@123'),
(52, 'Eschosys Tech', 'eschosys@123'),
(53, 'Eschosys Tech', '12'),
(54, 'Eschosys Tech', '12'),
(55, 'EschosysTech', '12'),
(56, 'EschosysTech', '12');

-- --------------------------------------------------------

--
-- Structure de la table `adminsessions`
--

CREATE TABLE `adminsessions` (
  `id` int(10) NOT NULL,
  `adminusername` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `adminsessions`
--

INSERT INTO `adminsessions` (`id`, `adminusername`, `password`) VALUES
(1, 'EschosysTech', 'eschosys@123');

-- --------------------------------------------------------

--
-- Structure de la table `attends`
--

CREATE TABLE `attends` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `attendance` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `attends`
--

INSERT INTO `attends` (`id`, `name`, `attendance`, `date`) VALUES
(14, 'favour', 'Absent', '2024-08-02 15:39:18'),
(15, 'Martha', 'Present', '2024-08-02 15:39:18'),
(16, 'Sylia', 'Absent', '2024-08-02 15:39:18'),
(17, 'jhsd', 'Present', '2024-08-02 15:39:41'),
(18, 'marth', 'Present', '2024-08-12 22:00:00'),
(19, 'another', 'Present', '2024-08-05 22:00:00'),
(20, 'jkd', 'Present', '2024-08-01 22:00:00'),
(21, ',qsdn', 'Present', '2024-08-01 22:00:00'),
(22, 'ytryt', 'Present', '2024-07-31 22:00:00'),
(23, ',qsdn', 'Present', '2024-08-01 22:00:00'),
(24, 'jbfjdh', 'Present', '2024-08-01 22:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `passwordreset`
--

CREATE TABLE `passwordreset` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `username`, `password`, `role`) VALUES
(1, 'EschosysTech', 'eschosys@123', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `signin`
--

CREATE TABLE `signin` (
  `id` int(10) NOT NULL,
  `fullname` text NOT NULL,
  `username` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `batch` text NOT NULL,
  `gender` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(255) NOT NULL,
  `reset_token_expiry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `signin`
--

INSERT INTO `signin` (`id`, `fullname`, `username`, `email`, `batch`, `gender`, `password`, `reset_token`, `reset_token_expiry`) VALUES
(1, 'Ebenda Assene Marthe Davida', 'DataDavinci', 'davidaebenda@gmail.com', '2', 'gender', '$2y$10$zsI7TzEQPc5OYH077dTl9ONtjvjw9YvLqiJy75gF5mvAi4kTrZXYS', '', ''),
(2, 'Ebenda Assene Marthe Davida', 'DataDavinci', 'davidaebenda@gmail.com', '2', 'gender', '$2y$10$wOd3BqFui2oKn.32Wpnb/e1xVfyqPRet4l8jLdgMhouDwzrw9TaNa', '', ''),
(3, 'Ebenda Assene Marthe Davida', 'DataDavinci', 'davidaebenda@gmail.com', '2', 'gender', '$2y$10$2v3C5FQRKllyCTtE0RdBy.naeRFsc1YXUlX/ZAKxgA/pE6nuewYWG', '', ''),
(4, 'Frikang Favour Divine', 'Matrivyne', 'Matrivyne@gmail.com', '2', 'gender', '$2y$10$QEUz0jMlKgtDBLS9WcWrOeGTws0DS/IQIZSpp7vRUoZRiPRW6dBHi', '', ''),
(5, 'Frikang Favour Divine', 'Matrivyne', 'Matrivyne@gmail.com', '2', 'gender', '$2y$10$hxuOKPteuDmjYP..SBTHzuKEPpjgxu5okfj5sjjgfMKXvGQw2X9KO', '', ''),
(6, 'Frikang Favour Divine', 'Love', 'Matrivyne@gmail.com', '2', 'gender', '$2y$10$2aKawuytSmZPD6wmrJerq.2X8jbs36Dd.wHFsz988L5ErnXUtwgF.', '', ''),
(7, 'Ebenda Assene Marthe Davida', 'Levi', 'jwood@mail.com', '2', 'gender', '$2y$10$.b3rOtYV4PtvK7OL0.T9a.NCQ5dDT6uLXomVk09ODrNx.9H6FjjPC', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `subject`
--

INSERT INTO `subject` (`id`, `subject`, `date`) VALUES
(2, 'hjvsd', '2024-08-14'),
(3, 'hjvsd', '2024-08-14'),
(4, 'yftyughvghfu', '2024-08-07'),
(5, 'swe', '2024-08-15'),
(6, 'web programming', '2024-08-02');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `adminsessions`
--
ALTER TABLE `adminsessions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `attends`
--
ALTER TABLE `attends`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `passwordreset`
--
ALTER TABLE `passwordreset`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `adminsessions`
--
ALTER TABLE `adminsessions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `attends`
--
ALTER TABLE `attends`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `passwordreset`
--
ALTER TABLE `passwordreset`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
