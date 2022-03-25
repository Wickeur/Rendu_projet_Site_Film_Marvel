-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 21 nov. 2021 à 16:56
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `film_mcu`
--

-- --------------------------------------------------------

--
-- Structure de la table `ennemi`
--

CREATE TABLE `ennemi` (
  `id_mechant` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ennemi`
--

INSERT INTO `ennemi` (`id_mechant`, `id_film`) VALUES
(1, 1),
(4, 2),
(5, 2),
(3, 3),
(6, 4),
(6, 6),
(2, 5),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(27, 12),
(13, 13),
(14, 14),
(16, 15),
(18, 17),
(15, 14),
(19, 18),
(20, 19),
(29, 19),
(21, 20),
(30, 21),
(20, 22),
(22, 23),
(23, 24),
(24, 24),
(25, 25),
(26, 25),
(28, 26),
(28, 26),
(7, 28),
(22, 29),
(17, 16),
(28, 27),
(7, 28),
(22, 29),
(7, 30),
(2, 31),
(18, 28),
(22, 29),
(22, 30);

-- --------------------------------------------------------

--
-- Structure de la table `hero`
--

CREATE TABLE `hero` (
  `id_hero` int(11) NOT NULL,
  `surnom_hero` varchar(255) NOT NULL,
  `nom_acteur` varchar(255) NOT NULL,
  `image_perso` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hero`
--

INSERT INTO `hero` (`id_hero`, `surnom_hero`, `nom_acteur`, `image_perso`) VALUES
(1, 'Iron man', 'Robert Downey Jr', 'https://tse4.mm.bing.net/th?id=OIP.sdAJoBjJp3hyo08QUXh6agHaKc&pid=Api'),
(2, 'Captain America', 'Chris Evans', 'https://cdn.goliath.com/eyJidWNrZXQiOiJwdWItc3RvcmFnZSIsImtleSI6ImdvbGlhdGgvd3AtY29udGVudC91cGxvYWRzLzIwMTYvMDUvQ2FwdGFpbi1BbWVyaWNhLmpwZyIsImVkaXRzIjpbXX0='),
(3, 'Hulk', 'Mark Ruffalo', 'https://tse1.mm.bing.net/th?id=OIP.x05Si_YETywblLYJpiLzyAHaDt&pid=Api'),
(4, 'Thor', 'Chris Helmsworth', 'https://tse3.mm.bing.net/th?id=OIP.30pVK5tw6SkHGF1wX8e7EwHaEK&pid=Api'),
(5, 'Black Widow', 'Scarlett Johansson', 'https://tse1.mm.bing.net/th?id=OIP.H3kbMJeodH5397nfOvwzHQHaEb&pid=Api'),
(6, 'Hawkeye', 'Jeremy Renner', 'https://tse1.mm.bing.net/th?id=OIP.iTtHEDBGzc40n2eVKU3DzAHaKc&pid=Api'),
(7, 'War Machine', 'Don Cheadle', 'https://tse2.mm.bing.net/th?id=OIP.dovBUsnRYBZeLYaKomzmGAHaD5&pid=Api'),
(8, 'Star Lord', 'Chris Pratt', 'https://tse1.mm.bing.net/th?id=OIP.DkrWVkMm_ubQRQkWdhARTgHaEK&pid=Api'),
(9, 'Gamora', 'Zoe Saldana', 'https://tse2.mm.bing.net/th?id=OIP.4zrPU_tTsBuJZLf1WdixgQHaHa&pid=Api'),
(10, 'Drax the destroyer', 'Dave Bautista', 'https://static1.cbrimages.com/wordpress/wp-content/uploads/2020/05/drax-Cropped.jpg'),
(11, 'Rocket Raccoon', 'Bradley Cooper', 'https://tse1.mm.bing.net/th?id=OIP.vY__7FsP2m3vCV5oLIpohwHaJZ&pid=Api'),
(12, 'Groot', 'Vin Diesel', 'https://tse4.mm.bing.net/th?id=OIP.XxCKKMd5a2pavtDj_OgkCgHaE8&pid=Api'),
(13, 'Doctor Strange', 'Benedic Cumberbatch', 'https://tse4.mm.bing.net/th?id=OIP.Sbb8PtA_3To7clkCWAJ4NAHaJV&pid=Api'),
(14, 'Black Panter', 'Chadwick Boseman', 'https://tse4.mm.bing.net/th?id=OIP.xpcdKYY6P4ExZmjBsU_uBQHaJm&pid=Api'),
(15, 'Spider Man', 'Tom Holland', 'https://tse2.mm.bing.net/th?id=OIP.8lacrFH3lSKdZsZf3cF6BAHaJQ&pid=Api'),
(16, 'Bucky Barnes', 'Sebastian Stan', 'https://tse2.mm.bing.net/th?id=OIP.RUtc1QqKw2lFstW6msJdAgAAAA&pid=Api'),
(17, 'Falcon', 'Anthony Mackie', 'https://tse3.mm.bing.net/th?id=OIP.E-iMezTDnv0cE0B8CjL0awHaK2&pid=Api'),
(18, 'Mantis', 'Pom Klementieff', 'https://tse2.mm.bing.net/th?id=OIP.3LJe-I-U8eNAtR6TwCHulAHaKm&pid=Api'),
(19, 'The Wasp', 'Evangeline Lilly', 'https://tse3.mm.bing.net/th?id=OIP.3i5xAoe9ZAakd1EGSlvBPgHaKg&pid=Api'),
(20, 'Scarlet Witch', 'Elizabeth Olsen', 'https://tse3.mm.bing.net/th?id=OIP.7RFyy4vBl-GmKGRuhN0QpwHaEK&pid=Api'),
(21, 'Quicksilver', '\r\nAaron Taylor-Johnson', 'https://tse1.explicit.bing.net/th?id=OIP.e5oEdCkRv8Y3O70ohBfrQgHaMM&pid=Api'),
(22, 'Vision', 'Paul Bettany', 'https://tse4.mm.bing.net/th?id=OIP.tI5VCl_xyhYjXCOzlZTbIwHaIi&pid=Api'),
(23, 'Ant-man', 'Paul Rudd', 'https://tse3.mm.bing.net/th?id=OIP.yAl36m0G-vRt0oLNeI74RwHaKc&pid=Api'),
(24, 'Sersi', 'Gemma Chan', 'https://fr.web.img2.acsta.net/r_1920_1080/pictures/21/10/13/10/33/3661702.jpg'),
(25, 'Ikaris', 'Richard Madden', 'https://fr.web.img6.acsta.net/r_1920_1080/pictures/21/10/13/10/33/4089849.jpg'),
(26, 'Ajak', 'Salma Hayek', 'https://fr.web.img6.acsta.net/r_1920_1080/pictures/21/10/13/10/33/4334054.jpg'),
(27, 'Thena', 'Angelina Jolie', 'https://fr.web.img6.acsta.net/r_1920_1080/pictures/21/10/13/10/33/4177209.jpg'),
(28, 'Druig', 'Barry Keoghan', 'https://fr.web.img5.acsta.net/r_1920_1080/pictures/21/10/13/10/34/0003969.jpg'),
(29, 'Kingo', 'Barry Keoghan', 'https://fr.web.img6.acsta.net/r_1920_1080/pictures/21/10/13/10/33/3918249.jpg'),
(30, 'Phastos', 'Brian Tyree Henry', 'https://fr.web.img3.acsta.net/r_1920_1080/pictures/21/10/13/10/33/3360626.jpg'),
(31, 'Gilgamesh', 'Ma Dong-seok', 'https://fr.web.img4.acsta.net/r_1920_1080/pictures/21/10/13/10/33/3490809.jpg'),
(32, 'Valkirie', 'Tessa Thompson', 'https://tse3.mm.bing.net/th?id=OIP.wtwP4imdzlsAi3U0GjsbqwHaEK&pid=Api'),
(33, 'Captain Marvel', 'Brie Larson', 'https://tse1.mm.bing.net/th?id=OIP.1suXeDoWaEw-tjqPhJ62eQHaKE&pid=Api'),
(34, 'Shang-Chi', 'Simu Liu', 'https://tse1.mm.bing.net/th?id=OIP.EoUt2SSsRs9izSLbvD3DcwHaEK&pid=Api'),
(35, 'Sprite', 'Lia McHugh', 'https://fr.web.img6.acsta.net/r_1920_1080/pictures/21/10/13/10/33/5744276.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `les_films`
--

CREATE TABLE `les_films` (
  `id_film` int(11) NOT NULL,
  `affiche_film` text,
  `titre_film` varchar(255) NOT NULL,
  `annee_sortie_film` int(11) NOT NULL,
  `realisateur_film` varchar(255) NOT NULL,
  `phase_MCU_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `les_films`
--

INSERT INTO `les_films` (`id_film`, `affiche_film`, `titre_film`, `annee_sortie_film`, `realisateur_film`, `phase_MCU_film`) VALUES
(1, 'https://media.senscritique.com/media/000006414750/150/Iron_Man.jpg', 'Iron Man', 2008, 'Jhon Favreau', 1),
(2, 'https://media.senscritique.com/media/000007895449/150/L_Incroyable_Hulk.jpg', 'L\'incroyable Hulk', 2008, 'Louis Leterrier', 1),
(3, 'https://media.senscritique.com/media/000004737077/150/Iron_Man_2.jpg', 'Iron Man 2', 2010, 'Jhon Favreau', 1),
(4, 'https://media.senscritique.com/media/000006414863/150/Thor.jpg', 'Thor', 2011, 'Kenneth Branagh', 1),
(5, 'https://media.senscritique.com/media/000005821362/150/Captain_America_First_Avenger.jpg', 'Captain America : First Avenger', 2011, 'Joe Johnston', 1),
(6, 'https://media.senscritique.com/media/000005676799/150/Avengers.jpg', 'Marvel\'s The Avengers', 2012, 'Joss Whedon', 1),
(7, 'https://media.senscritique.com/media/000006425182/150/Iron_Man_3.jpg', 'Iron Man 3', 2013, 'Shane Black', 2),
(8, 'https://media.senscritique.com/media/000016222794/150/Thor_Le_Monde_des_Tenebres.jpg', 'Thor: The Dark World', 2013, 'Alan Taylor', 2),
(9, 'https://media.senscritique.com/media/000006535707/150/Captain_America_Le_Soldat_de_l_hiver.jpg', 'Captain America: The Winter Soldier', 2014, 'Anthony et Joe Russo', 2),
(10, 'https://media.senscritique.com/media/000016933664/150/Les_Gardiens_de_la_galaxie.jpg', 'Guardians of the Galaxy', 2014, 'James Gunn', 2),
(11, 'https://media.senscritique.com/media/000009596608/150/Avengers_L_Ere_d_Ultron.jpg', 'Avengers: Age of Ultron', 2015, 'Joss Whedon', 2),
(12, 'https://media.senscritique.com/media/000009690356/150/Ant_Man.jpg', 'Ant-man', 2015, 'Peyton Reed', 2),
(13, 'https://media.senscritique.com/media/000015137859/150/Captain_America_Civil_War.jpg', 'Captain America : Civil War', 2016, 'Anthony et Joe Russo', 3),
(14, 'https://media.senscritique.com/media/000016434017/150/Doctor_Strange.jpg', 'Doctor Strange', 2016, 'Scott Derrickson', 3),
(15, 'https://media.senscritique.com/media/000016933682/150/Les_Gardiens_de_la_galaxie_Vol_2.jpg', 'Guardians of the Galaxy Vol. 2', 2017, 'James Gunn', 3),
(16, 'https://media.senscritique.com/media/000018616762/150/Spider_Man_Homecoming.jpg', 'Spider-man : Homecoming', 2017, 'Jon Watts', 3),
(17, 'https://media.senscritique.com/media/000019125980/150/Thor_Ragnarok.jpg', 'Thor: Ragnarok', 2017, 'Taika Waititi', 3),
(18, 'https://media.senscritique.com/media/000017572797/150/Black_Panther.jpg', 'Black Panter', 2018, 'Ryan Coogler', 3),
(19, 'https://media.senscritique.com/media/000017671962/150/Avengers_Infinity_War.jpg', 'Avengers : Infinity War ', 2018, 'Anthony et Joe Russo', 3),
(20, 'https://media.senscritique.com/media/000017848056/150/Ant_Man_et_la_Guepe.jpg', 'Ant-man and the Wasp', 2018, 'Peyton Reed	', 3),
(21, 'https://media.senscritique.com/media/000018355538/150/Captain_Marvel.jpg', 'Captain Marvel', 2019, 'Anna Boden et Ryan Fleck', 3),
(22, 'https://media.senscritique.com/media/000018476719/150/Avengers_Endgame.jpg', 'Avengers : Endgame', 2019, 'Anthony et Joe Russo', 3),
(23, 'https://media.senscritique.com/media/000018606707/150/Spider_Man_Far_From_Home.jpg', 'Spider-man : Far From Home', 2019, 'Jon Watts', 3),
(24, 'https://media.senscritique.com/media/000020125027/150/Black_Widow.jpg', 'Black Widow', 2021, 'Cate Shortland', 4),
(25, 'https://media.senscritique.com/media/000020215846/150/Shang_Chi_et_la_Legende_des_Dix_Anneaux.jpg', 'Shang-Chi and the Legend of the Ten Rings', 2021, 'Destin Daniel Cretton', 4),
(27, 'https://media.senscritique.com/media/000020284694/150/Les_Eternels.png', 'Eternals', 2021, 'Chloé Zao', 4);

-- --------------------------------------------------------

--
-- Structure de la table `mechant`
--

CREATE TABLE `mechant` (
  `id_mechant` int(11) NOT NULL,
  `nom_mechant` varchar(255) NOT NULL,
  `nom_acteur` varchar(255) DEFAULT NULL,
  `image_mechant` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mechant`
--

INSERT INTO `mechant` (`id_mechant`, `nom_mechant`, `nom_acteur`, `image_mechant`) VALUES
(1, 'Iron Monger', 'Jeff Bridges', 'https://tse4.mm.bing.net/th?id=OIP.EclQCRCtfPN_fIfEfBS7xQHaHw&pid=Api'),
(2, 'Red Skull', 'Hugo Weaving', 'https://tse2.mm.bing.net/th?id=OIP.EUTt_2koqW2aGpBRAnrISwAAAA&pid=Api'),
(3, 'Whiplash', 'Mickey Rourke', 'https://tse2.mm.bing.net/th?id=OIP.EnRtvJMwfTTAF_ZVWlzN7gHaI5&pid=Api'),
(4, 'L\'Abomination', 'Tim Roth', 'https://tse4.mm.bing.net/th?id=OIP.hWW4SQzONhrKYYwIyICH-gHaEJ&pid=Api'),
(5, 'Général Ross', 'William Hurt', 'https://tse1.mm.bing.net/th?id=OIP.HmYtjnI4UbM5SIfyQ_6uFQHaE7&pid=Api'),
(6, 'Loki', 'Tom Hiddleston', 'https://tse1.mm.bing.net/th?id=OIP.28AkodlJ95nvnk8hpdpk1gHaEK&pid=Api'),
(7, 'Aldrich Killian', 'Guy Pearce', 'https://tse2.mm.bing.net/th?id=OIP.TTIG4S31Q3oErCJPIWPIBwHaEo&pid=Api'),
(8, 'Malekith', 'Christopher Eccleston', 'https://tse2.mm.bing.net/th?id=OIP.lO7xcJ_qi6kHT0lvXl360gAAAA&pid=Api'),
(9, 'Winter Soldier', 'Sebastian Stan', 'https://i.pinimg.com/originals/74/f0/28/74f028bb8e984b7254096299eacf9fae.jpg'),
(10, 'Ronan the Accuser', 'Lee Pace', 'https://tse2.mm.bing.net/th?id=OIP.ajnyRdnLNYFoNRAMzbzv_gHaE7&pid=Api'),
(11, 'Ultron', 'James Spader', 'https://tse4.mm.bing.net/th?id=OIP.ggHRMHaltpcROPH85-0rQQHaFj&pid=Api'),
(13, 'Zemo', 'Daniel Brühl', 'https://tse3.mm.bing.net/th?id=OIP.TF8yAtHJeyeAqt4zEoJL2QHaEJ&pid=Api'),
(14, 'Kaecilius', 'Mads Mikkelsen', 'https://tse3.mm.bing.net/th?id=OIP.BTEXy_yNro3BTaPGmeUd1QHaDt&pid=Api'),
(15, 'Dormammu', 'Benedict Cumberbatch', 'https://tse4.mm.bing.net/th?id=OIP.QzG1JN0xvtYWAbsPfw-sawHaEK&pid=Api'),
(16, 'Ego', 'Kurt Russell', 'https://tse1.mm.bing.net/th?id=OIP.xwEb7lUmCtLQ1tthqlYKVwAAAA&pid=Api'),
(17, 'Vulture', 'Micheal Keaton', 'https://tse4.mm.bing.net/th?id=OIP.ZJob4mpGXKPyaCpmthC5_gHaEK&pid=Api'),
(18, 'Hela', 'Cate Blanchett', 'https://tse3.mm.bing.net/th?id=OIP.0roMF2mAdCEY2pq93Xco_AHaHa&pid=Api'),
(19, 'Killmonger', 'Micheal B.Jordan', 'https://tse1.mm.bing.net/th?id=OIP.TZTs81Lcm6ozx_8LEgiDJgHaHa&pid=Api'),
(20, 'Thanos', 'Josh Brolin', 'https://tse4.mm.bing.net/th?id=OIP.wdqgliDJ1XEA1h80Pbla4AHaJl&pid=Api'),
(21, 'Ghost', 'Hannah John-Kamen', 'https://tse4.mm.bing.net/th?id=OIP.kXWOYlzmnYCW1QJWUi0rbgHaKY&pid=Api'),
(22, 'Mysterio', 'Jake Gyllenhaal', 'https://tse1.mm.bing.net/th?id=OIP.SW9AFjO5uzPdHsFSOyPNEgHaK-&pid=Api'),
(23, 'Taskmaster', 'Olga Kurylenko', 'https://tse3.mm.bing.net/th?id=OIP.3skBLsY88Z8FWgNmccmmzAHaEO&pid=Api'),
(24, 'Dreykov', 'Rey Winstone', 'https://tse1.mm.bing.net/th?id=OIP.gR-m0TBvXZZ_AbF3zhC-fgHaEK&pid=Api'),
(25, 'The Mandarin', 'Tony Leung Chiu-Wai', 'https://tse1.mm.bing.net/th?id=OIP.oCxJeOJHBfksiK6piJ2VEAHaDt&pid=Api'),
(26, 'Dweller-in-Darkness', 'Non définit', 'https://tse2.mm.bing.net/th?id=OIF.e12VXVPkcsYTtScd9T0Whg&pid=Api'),
(27, 'Yellow Jacket', 'Corey Stoll', 'https://tse1.mm.bing.net/th?id=OIP.i_AL255pqNaBL6LjjedKXQHaFm&pid=Api'),
(28, 'Deviants', 'Non défini', 'https://tse2.mm.bing.net/th?id=OIP.EPyW0_4m7-s5KLLT3f2-EwHaEK&pid=Api'),
(29, 'Black Order', 'Non défini', 'https://tse4.mm.bing.net/th?id=OIP.I6nTbhimB8jyPwe3XiuqcgHaEK&pid=Api'),
(30, 'Yon-Rogg / Starfore Commander', 'Jude Law', 'https://tse4.mm.bing.net/th?id=OIP.GZtiFxzTuyYmehn1Fn7tlAHaKg&pid=Api');

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE `personnage` (
  `id_hero` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnage`
--

INSERT INTO `personnage` (`id_hero`, `id_film`) VALUES
(1, 1),
(1, 3),
(3, 2),
(4, 4),
(2, 5),
(1, 6),
(2, 6),
(3, 6),
(4, 6),
(5, 6),
(6, 6),
(1, 7),
(4, 8),
(2, 9),
(5, 9),
(17, 9),
(8, 10),
(9, 10),
(10, 10),
(11, 10),
(12, 10),
(1, 11),
(2, 11),
(3, 11),
(4, 11),
(5, 11),
(6, 11),
(20, 11),
(21, 11),
(22, 11),
(23, 11),
(23, 12),
(23, 26),
(23, 26),
(1, 13),
(2, 13),
(3, 13),
(4, 13),
(5, 13),
(6, 13),
(7, 13),
(14, 13),
(15, 13),
(16, 13),
(17, 13),
(20, 13),
(22, 13),
(23, 13),
(13, 14),
(8, 15),
(9, 15),
(9, 15),
(10, 15),
(11, 15),
(12, 15),
(18, 15),
(15, 16),
(3, 17),
(4, 17),
(32, 17),
(1, 19),
(2, 19),
(3, 19),
(4, 19),
(5, 19),
(7, 19),
(8, 19),
(9, 19),
(10, 19),
(11, 19),
(12, 19),
(13, 19),
(14, 19),
(15, 19),
(16, 19),
(17, 19),
(18, 19),
(20, 19),
(22, 19),
(1, 16),
(14, 18),
(19, 20),
(23, 20),
(33, 21),
(15, 23),
(5, 24),
(34, 25),
(24, 26),
(25, 26),
(26, 26),
(27, 26),
(28, 26),
(29, 26),
(30, 26),
(31, 26),
(1, 22),
(2, 22),
(3, 22),
(4, 22),
(5, 22),
(6, 22),
(7, 22),
(23, 22),
(33, 22),
(24, 27),
(25, 27),
(26, 27),
(27, 27),
(28, 27),
(29, 27),
(30, 27),
(31, 27),
(35, 27),
(1, 31),
(12, 28),
(25, 29),
(25, 30);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nom_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `nom_role`) VALUES
(1, 'administrateur'),
(2, 'membre');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(255) NOT NULL,
  `mdp_utilisateur` varchar(255) NOT NULL,
  `id_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `mdp_utilisateur`, `id_role`) VALUES
(1, 'Julian', '$2y$10$QaZIpZ5TvDMIgRNbjhA4Xu/hXdWQL91wDH0NZZ4EYzpqJsqMgJcw6', '1'),
(4, 'Quentin', '$2y$10$v2pKn20CCu5emYBMSaWpm.wvRnkzYIY/Wm0pjYZW.CW6MTh8aICJ.', '2'),
(6, 'membre', '$2y$10$uc/2wjkv5R7Il.lS1wJHFOXWkWMdJH3BrxRqzKltVh/16vulUmTZC', '2'),
(7, 'floooo', '$2y$10$D0CPBxoNCJHWeoiHKgD0wuR8lKZ3tHxe470eRREiKGMyxN4ZWlwSO', '2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id_hero`);

--
-- Index pour la table `les_films`
--
ALTER TABLE `les_films`
  ADD PRIMARY KEY (`id_film`);

--
-- Index pour la table `mechant`
--
ALTER TABLE `mechant`
  ADD PRIMARY KEY (`id_mechant`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `nom_utilisateur` (`nom_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `hero`
--
ALTER TABLE `hero`
  MODIFY `id_hero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `les_films`
--
ALTER TABLE `les_films`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `mechant`
--
ALTER TABLE `mechant`
  MODIFY `id_mechant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
