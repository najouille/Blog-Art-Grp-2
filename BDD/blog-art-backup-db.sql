-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 fév. 2021 à 00:30
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blogart21`
--

-- --------------------------------------------------------

--
-- Structure de la table `angle`
--

CREATE TABLE `angle` (
  `numAngl` char(8) NOT NULL,
  `libAngl` char(60) DEFAULT NULL,
  `numLang` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `angle`
--

INSERT INTO `angle` (`numAngl`, `libAngl`, `numLang`) VALUES
('ANGL0101', 'allooaY', 'ALLE01'),
('ANGL0102', 'Grandes figures littéraires', 'BULG01'),
('ANGL0103', 'Happy hours', 'FRAN01'),
('ANGL0104', 'Histoire médiévale', 'FRAN01'),
('ANGL0105', 'Intelligence collective', 'FRAN01'),
('ANGL0106', 'Expérience 3.0', 'FRAN01'),
('ANGL0107', 'Chatbot et IA', 'FRAN01'),
('ANGL0108', 'Stories', 'FRAN01'),
('ANGL0109', 'Secret', 'FRAN01'),
('ANGL0110', 'We heart it', 'FRAN01'),
('ANGL0111', 'Yik Yak', 'FRAN01'),
('ANGL0112', 'Shots', 'FRAN01'),
('ANGL0113', 'Tik Tok', 'FRAN01'),
('ANGL0114', 'Recherche vocale', 'FRAN01'),
('ANGL0201', 'Handicap', 'ANGL01'),
('ANGL0202', 'Great literary figures', 'ANGL01'),
('ANGL0203', 'Happy hours', 'ANGL01'),
('ANGL0204', 'Medieval History', 'ANGL01'),
('ANGL0205', 'Collective Intelligence', 'ANGL01'),
('ANGL0206', 'Experience 3.0', 'ANGL01'),
('ANGL0207', 'Chatbot and IA', 'ANGL01'),
('ANGL0208', 'Stories', 'ANGL01'),
('ANGL0209', 'Secret', 'ANGL01'),
('ANGL0210', 'We heart it', 'ANGL01'),
('ANGL0211', 'Yik Yak', 'ANGL01'),
('ANGL0212', 'Shots', 'ANGL01'),
('ANGL0213', 'Tik Tok', 'ANGL01'),
('ANGL0214', 'Voice search', 'ANGL01'),
('ANGL0301', 'Handikap', 'ALLE01'),
('ANGL0302', 'Große literarische Persönlichkeiten', 'ALLE01'),
('ANGL0303', 'Happy hours', 'ALLE01'),
('ANGL0304', 'Mittelalterliche Geschichte', 'ALLE01'),
('ANGL0305', 'Gemeinsame Intelligenz', 'ALLE01'),
('ANGL0306', 'Erfahrung 3.0', 'ALLE01'),
('ANGL0307', 'Chatbot und KI', 'ALLE01'),
('ANGL0308', 'Geschichten', 'ALLE01'),
('ANGL0309', 'Geheimnis', 'ALLE01'),
('ANGL0310', 'Wir lieben es', 'ALLE01'),
('ANGL0311', 'Yik Yak', 'ALLE01'),
('ANGL0312', 'Aufnahmen', 'ALLE01'),
('ANGL0313', 'Tik Tok', 'ALLE01'),
('ANGL0314', 'Sprachsuche', 'ALLE01');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `numArt` int(8) NOT NULL,
  `dtCreArt` datetime DEFAULT NULL,
  `libTitrArt` char(100) DEFAULT NULL,
  `libChapoArt` text DEFAULT NULL,
  `libAccrochArt` char(100) DEFAULT NULL,
  `parag1Art` text DEFAULT NULL,
  `libSsTitr1Art` char(100) DEFAULT NULL,
  `parag2Art` text DEFAULT NULL,
  `libSsTitr2Art` char(100) DEFAULT NULL,
  `parag3Art` text DEFAULT NULL,
  `libConclArt` text DEFAULT NULL,
  `urlPhotArt` char(70) DEFAULT NULL,
  `numAngl` char(8) NOT NULL,
  `numThem` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`numArt`, `dtCreArt`, `libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numAngl`, `numThem`) VALUES
(1, '2019-02-24 16:08:30', 'La surprenante reconversion de la base sous-marine', 'Un bâtiment unique chargé d\'histoire qui a survécu à l\'emprise des Allemands en 1943, et qui est aujourd\'hui l\'un des symboles d\'art de notre ville bordelaise.', 'La grande immergée du port de la Lune, éclairée de son immense néon bleu “something strange happened', 'Oui, notre base sous-marine est notre héritage nazi. En 1943, le bloc de béton, que nous connaissons tous, voit le jour après 22 mois de travaux forcés par des prisonniers.', 'Quel avenir pour cet amas de béton ?', 'Après la destruction et le sabotage du matériel nazis par les Alliés en août 1944. Il a fallu se demander que deviendrait ce bâtiment.', 'Peau neuve, colorée et numérique pour la base bordelaise.', 'Aujourd\'hui la base sous marine occupe une place incontournable dans le paysage culturel bordelais.', 'Pour le mot de la fin : Bruno Monnier, président de Culturespace, affirme que ses équipes et lui ont travaillé d’arrache pied pour imaginer et concevoir la nouvelle base sous marine.', 'imgArt19.jpg', 'ANGL0105', 'THE0101'),
(2, '2019-03-13 20:14:10', 'Le CHU de bordeaux se met-il au bleu ?', 'Le bleu, une couleur si commune, qui provoque tranquillité, sécurité et confiance.', 'Le CHU de Bordeaux, est un lieu au service de tous, il tient un rôle important dans la vie des Borde', 'Tout d’abord, un logo, que vous avez vu et revu, mais auquel vous n\'avez jamais, vraiment prêté attention. ', 'Savez-vous pourquoi les blouses des chirurgiens sont-elles bleues ?', 'Voici une question que vous ne vous êtes peut-être jamais posée. Pourquoi les différents hôpitaux, ont-ils choisi, pour leurs opérations la couleur bleue, ou même vert clair ?', 'Connaissez vous les fées du CHU de Bordeaux ?', 'Les Fées Bleues sont une association créée par le personnel soignant du CHU, qui a pour but d’apporter de la couleur et du confort, dans le monde aseptisé du soin des prématurés ou bien pour les enfants en réanimation.', 'Et voilà vous savez maintenant tout sur le CHU de Bordeaux ! Quoi que … Savez-vous qu’il participe à l\'opération de sensibilisation Mars Bleu ?', 'imgArt18.jpg', 'ANGL0105', 'THE0101'),
(3, '2019-11-09 10:34:20', 'Le Lion bleu de Bordeaux, star des réseaux sociaux', 'Surplombant la place Stalingrad, anciennement place du Pont, et faisant fièrement face au pont de Pierre, le Lion bleu de Xavier Veilhan fait depuis 2005 l’objet de toutes les convoitises.', 'En France, depuis 1951 et l’arrêté des \"1% artistique\", toute construction d’un bâtiment public ayan', 'En construisant les lignes de tramway, la ville de Bordeaux et sa métropole ont donc mis en place le programme \"L\'art dans la ville\".', 'Un symbole de la rive droite', 'On n\'imagine pas la place Stalingrad sans cet imposant félin coloré. Ce lion bleu est devenu l\'emblème de cette place et, pour les habitants de la rive gauche, c\'est le symbole de \"l\'autre rive\", c\'est la première chose que l\'on voit en traversant la Garonne depuis le quartier de Saint-Michel.', 'Un tremplin pour Xavier Veilhan', 'L\'artiste plasticien à l\'origine du Lion bleu, diplômé de l\'EnsAD-Paris (École Nationale Supérieure des Arts Décoratifs) et officier de l\'Ordre des Arts et des Lettres, n\'a pas choisi une figure animalière pour rien. La place Stalingrad est un hommage à la victoire de l\'armée soviétique durant la Seconde Guerre Mondiale.', 'Espérons que cet élan de créativité se poursuive et que, par la suite, Xavier Veilhan réutilise cette couleur qui nous est si chère, le bleu.', 'imgArt23.jpg', 'ANGL0105', 'THE0101'),
(4, '2019-02-26 18:08:30', 'The surprising reconversion of the submarine base', 'A unique building steeped in history that survived the Germans\' hold in 1943, and which today is one of the symbols of art in our Bordeaux city.', 'The large submerged harbour of the Moon, illuminated by its immense blue neon light \"something stran', 'Yes, our submarine base is our Nazi heritage. In 1943, the concrete block, which we all know, was built after 22 months of forced labour by prisoners.', 'What does the future hold for this pile of concrete?', 'After the destruction and sabotage of Nazi equipment by the Allies in August 1944, one had to wonder what would become of this building.', 'New, coloured and digital skin for the Bordeaux base.', 'Today the submarine base occupies an essential place in the cultural landscape of Bordeaux.', 'For the last word : Bruno Monnier, President of Culturespace, says he and his teams have worked hard to imagine and design the new submarine base.', 'imgArt19.jpg', 'ANGL0205', 'THE0201'),
(5, '2019-11-13 20:14:20', 'The Blue Lion of Bordeaux, star of social networks', 'Overlooking Stalingrad Square, formerly Place du Pont, and proudly facing the Stone Bridge, Xavier Veilhan\'s Blue Lion has been the object of much covetousness since 2005.', 'In France, since 1951 and the \"1% artistic\" decree, any construction of a public building with the a', 'With the construction of the tramway lines, the city of Bordeaux and its metropolis have therefore set up the \"Art in the City\" programme.', 'A symbol of the right bank', 'One cannot imagine Stalingrad Square without this imposing colourful feline. This blue lion has become the emblem of this square and, for the inhabitants of the left bank, it is the symbol of \"the other bank\", it is the first thing you see when crossing the Garonne from the Saint-Michel district.', 'A springboard for Xavier Veilhan', 'The visual artist behind the Blue Lion, a graduate of EnsAD-Paris (École Nationale Supérieure des Arts Décoratifs) and an officer of the Ordre des Arts et des Lettres, did not choose an animal figure for nothing. Stalingrad square is a tribute to the victory of the Soviet army during the Second World War.', 'Let\'s hope that this surge of creativity will continue and that Xavier Veilhan will later reuse this colour that is so dear to us, blue.', 'imgArt23.jpg', 'ANGL0205', 'THE0201');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `numSeqCom` int(10) NOT NULL,
  `numArt` int(8) NOT NULL,
  `dtCreCom` datetime DEFAULT NULL,
  `libCom` text NOT NULL,
  `attModOK` tinyint(1) DEFAULT 0,
  `affComOK` tinyint(1) DEFAULT 0,
  `notifComKOAff` text DEFAULT NULL,
  `delLogiq` tinyint(1) DEFAULT 0,
  `numMemb` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`numSeqCom`, `numArt`, `dtCreCom`, `libCom`, `attModOK`, `affComOK`, `notifComKOAff`, `delLogiq`, `numMemb`) VALUES
(1, 1, '2020-11-09 10:13:43', 'Trop cool comme article', 1, 1, NULL, 0, 1),
(1, 2, '2020-11-09 18:24:21', 'Trop cool comme article', 1, 1, NULL, 0, 3),
(1, 3, '2020-11-09 15:31:17', 'Trop cool comme article', 1, 1, NULL, 0, 3),
(2, 1, '2020-11-02 13:18:42', 'Trop cool comme article', 1, 1, NULL, 0, 2),
(2, 2, '2020-11-02 16:29:16', 'Trop cool comme article', 1, 1, NULL, 0, 3),
(2, 3, '2020-12-15 08:31:23', 'Trop cool comme article', 1, 1, NULL, 0, 2),
(3, 1, '2020-11-04 16:21:12', 'Trop cool comme article', 1, 1, NULL, 0, 3),
(3, 2, '2020-11-04 08:16:44', 'Trop cool comme article', 1, 1, NULL, 0, 2),
(3, 3, '2020-12-19 06:28:00', 'Trop cool comme article', 1, 1, NULL, 0, 5),
(4, 1, '2020-11-05 03:15:38', 'Trop cool comme article', 1, 1, NULL, 0, 1),
(4, 2, '2020-11-05 14:27:39', 'Trop cool comme article', 1, 1, NULL, 0, 3),
(4, 3, '2020-12-28 07:30:21', 'Trop cool comme article', 1, 1, NULL, 0, 3),
(5, 1, '2020-11-06 21:16:36', 'Trop cool comme article', 1, 1, NULL, 0, 4),
(5, 2, '2020-11-06 06:31:42', 'Trop cool comme article', 1, 1, NULL, 0, 1),
(5, 3, '2020-12-29 17:31:38', 'Trop cool comme article', 1, 1, NULL, 0, 1),
(6, 1, '2020-11-06 11:20:31', 'Trop cool comme article', 1, 1, NULL, 0, 5),
(6, 2, '2020-11-06 23:50:27', 'Trop cool comme article', 1, 1, NULL, 0, 5),
(6, 3, '2020-12-29 09:31:27', 'Pourri trop, trop comme article', 0, 0, 'Trop insultant', 0, 4),
(7, 1, '2020-11-08 08:41:12', 'Trop cool comme article', 1, 1, NULL, 0, 5),
(7, 2, '2020-11-08 10:37:23', 'Trop pourri comme article', 0, 0, 'Manque de bienveillance', 0, 2),
(7, 3, '2020-12-02 16:33:41', 'Trop cool comme article', 1, 1, NULL, 0, 3),
(8, 1, '2020-11-18 08:41:12', 'De la daube cet article', 0, 0, 'Trop insultant', 0, 1),
(8, 3, '2020-12-03 12:41:47', 'De la daube cet article', 0, 0, 'Trop insultant', 0, 2),
(9, 3, '2020-12-04 10:33:42', 'Trop cool comme article', 1, 1, NULL, 0, 5);

-- --------------------------------------------------------

--
-- Structure de la table `commentplus`
--

CREATE TABLE `commentplus` (
  `numSeqCom` int(10) NOT NULL,
  `numArt` int(8) NOT NULL,
  `numSeqComR` int(10) NOT NULL,
  `numArtR` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentplus`
--

INSERT INTO `commentplus` (`numSeqCom`, `numArt`, `numSeqComR`, `numArtR`) VALUES
(1, 1, 3, 1),
(1, 1, 4, 1),
(1, 1, 6, 1),
(1, 1, 7, 1),
(1, 1, 8, 1),
(1, 2, 2, 2),
(1, 3, 2, 3),
(1, 3, 3, 3),
(1, 3, 4, 3),
(2, 3, 6, 3),
(2, 3, 7, 3),
(3, 2, 4, 2),
(3, 2, 5, 2),
(4, 3, 8, 3),
(4, 3, 9, 3),
(5, 2, 6, 2),
(6, 2, 7, 2);

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE `langue` (
  `numLang` char(8) NOT NULL,
  `lib1Lang` char(30) DEFAULT NULL,
  `lib2Lang` char(60) DEFAULT NULL,
  `numPays` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`numLang`, `lib1Lang`, `lib2Lang`, `numPays`) VALUES
('ALLE01', 'Allemand(e)d', 'Langue allemande', 'ALLE'),
('ANGL01', 'Anglais(e)', 'Langue anglaise', 'ANGL'),
('BULG01', 'Bulgare', 'Langue bulgare', 'BULG'),
('ESPA01', 'Espagnol(e)', 'Langue espagnole', 'ESPA'),
('FRAN01', 'Français(e)', 'Langue française', 'FRAN'),
('ITAL01', 'Italien(ne)', 'Langue italienne', 'ITAL'),
('RUSS01', 'Russe', 'Langue russe', 'RUSS'),
('UKRA01', 'Ukrainien(ne)', 'Langue ukrainienne', 'UKRA');

-- --------------------------------------------------------

--
-- Structure de la table `likeart`
--

CREATE TABLE `likeart` (
  `numMemb` int(10) NOT NULL,
  `numArt` int(8) NOT NULL,
  `likeA` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `likeart`
--

INSERT INTO `likeart` (`numMemb`, `numArt`, `likeA`) VALUES
(1, 1, 1),
(1, 2, 1),
(2, 1, 0),
(2, 3, 1),
(3, 1, 1),
(3, 2, 1),
(3, 3, 1),
(4, 1, 0),
(4, 2, 1),
(4, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `likecom`
--

CREATE TABLE `likecom` (
  `numMemb` int(10) NOT NULL,
  `numSeqCom` int(10) NOT NULL,
  `numArt` int(8) NOT NULL,
  `likeC` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `likecom`
--

INSERT INTO `likecom` (`numMemb`, `numSeqCom`, `numArt`, `likeC`) VALUES
(1, 1, 1, 1),
(2, 4, 2, 1),
(3, 3, 3, 1),
(3, 4, 2, 1),
(4, 6, 3, 1),
(4, 7, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `numMemb` int(10) NOT NULL,
  `prenomMemb` varchar(70) DEFAULT NULL,
  `nomMemb` varchar(70) DEFAULT NULL,
  `pseudoMemb` varchar(70) DEFAULT NULL,
  `passMemb` varchar(70) DEFAULT NULL,
  `eMailMemb` varchar(100) DEFAULT NULL,
  `dtCreaMemb` datetime DEFAULT NULL,
  `souvenirMemb` tinyint(1) DEFAULT NULL,
  `accordMemb` tinyint(1) DEFAULT NULL,
  `idStat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`numMemb`, `prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `souvenirMemb`, `accordMemb`, `idStat`) VALUES
(1, 'Jean', 'Dupont', 'Phil09', 'Ut!D5?h0', 'Phil09@me.com', '2020-01-09 10:13:43', 1, 1, 1),
(2, 'Julie', 'La Rousse', 'juju1989', 'G54;Q22mi5', 'julie@gmail.com', '2020-03-15 14:33:23', 0, 1, 3),
(3, 'David', 'Bowie', 'dav33B', 'kp09,1K4!', 'david.bowie@gmail.com', '2020-07-19 13:13:13', 1, 1, 4),
(4, 'Phil', 'Collins', 'cols2P', 'mq3j4;6GH', 'phil.collins@me.com', '2020-11-04 17:39:09', 1, 1, 2),
(5, 'Prince', 'Rogers Nelson dit PRINCE', 'Rogers222', 'frI3!Px;21', 'prince@gmail.com', '2020-12-14 13:24:23', 0, 1, 9);

-- --------------------------------------------------------

--
-- Structure de la table `motcle`
--

CREATE TABLE `motcle` (
  `numMotCle` int(8) NOT NULL,
  `libMotCle` varchar(60) DEFAULT NULL,
  `numLang` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `motcle`
--

INSERT INTO `motcle` (`numMotCle`, `libMotCle`, `numLang`) VALUES
(1, 'Bordeauxx', 'ALLE01'),
(2, 'CHU', 'FRAN01'),
(3, 'chirurgiens', 'FRAN01'),
(4, 'Hôpital', 'FRAN01'),
(5, 'soignants', 'FRAN01'),
(6, 'bleu', 'FRAN01'),
(7, 'Mars Bleu', 'FRAN01'),
(8, 'Base', 'FRAN01'),
(9, 'sous-marine', 'FRAN01'),
(10, 'Base sous-marine', 'FRAN01'),
(11, 'port de la Lune', 'FRAN01'),
(12, 'histoire', 'FRAN01'),
(13, 'Art', 'FRAN01'),
(14, 'Stalingrad', 'FRAN01'),
(15, 'Pont', 'FRAN01'),
(16, 'Pont de Pierre', 'FRAN01'),
(17, 'Lion bleu', 'FRAN01'),
(18, 'sculpture', 'FRAN01'),
(19, 'Veilhan', 'FRAN01'),
(20, 'blue', 'ANGL01'),
(21, 'Bordeaux', 'ANGL01'),
(22, 'base', 'ANGL01'),
(23, 'submarine', 'ANGL01'),
(24, 'submarine base', 'ANGL01'),
(25, 'Port of the Moon', 'ANGL01'),
(26, 'history', 'ANGL01'),
(27, 'Art', 'ANGL01'),
(28, 'Stalingrad', 'ANGL01'),
(29, 'bridge', 'ANGL01'),
(30, 'stone bridge', 'ANGL01'),
(31, 'Blue Lion', 'ANGL01'),
(32, 'sculpture', 'ANGL01'),
(33, 'Veilhan', 'ANGL01'),
(34, 'blau', 'ALLE01'),
(35, 'bordeaux', 'ALLE01'),
(36, 'kinder', 'ALLE01'),
(37, 'zuhause', 'ALLE01'),
(38, 'menschen', 'ALLE01'),
(39, 'süße', 'ALLE01'),
(40, 'freund', 'ALLE01'),
(41, 'wagen', 'ALLE01'),
(42, 'hafen', 'ALLE01'),
(43, 'brücke', 'ALLE01'),
(44, 'stein', 'ALLE01'),
(45, 'Löwe', 'ALLE01'),
(46, 'sprungbrett', 'ALLE01'),
(49, 'Franchementdd', 'BULG01');

-- --------------------------------------------------------

--
-- Structure de la table `motclearticle`
--

CREATE TABLE `motclearticle` (
  `numArt` int(8) NOT NULL,
  `numMotCle` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `motclearticle`
--

INSERT INTO `motclearticle` (`numArt`, `numMotCle`) VALUES
(1, 1),
(1, 2),
(1, 6),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 49),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(3, 1),
(3, 6),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(4, 11),
(4, 20),
(4, 21),
(4, 22),
(4, 23),
(4, 24),
(4, 25),
(4, 26),
(4, 27),
(5, 20),
(5, 21),
(5, 28),
(5, 29),
(5, 30),
(5, 31),
(5, 32),
(5, 33);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `numPays` char(4) NOT NULL,
  `cdPays` char(2) NOT NULL,
  `frPays` varchar(255) NOT NULL,
  `enPays` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`numPays`, `cdPays`, `frPays`, `enPays`) VALUES
('AFGH', 'AF', 'Afghanistan', 'Afghanistan'),
('AFRI', 'ZA', 'Afrique du Sud', 'South Africa'),
('ALBA', 'AL', 'Albanie', 'Albania'),
('ALGE', 'DZ', 'Algérie', 'Algeria'),
('ALLE', 'DE', 'Allemagne', 'Germany'),
('ANDO', 'AD', 'Andorre', 'Andorra'),
('ANGL', 'GB', 'Royaume-Uni', 'United Kingdom'),
('ANGO', 'AO', 'Angola', 'Angola'),
('ANGU', 'AI', 'Anguilla', 'Anguilla'),
('ANTG', 'AG', 'Antigua-et-Barbuda', 'Antigua & Barbuda'),
('ANTI', 'AN', 'Antilles néerlandaises', 'Netherlands Antilles'),
('ARAB', 'SA', 'Arabie saoudite', 'Saudi Arabia'),
('ARGE', 'AR', 'Argentine', 'Argentina'),
('ARME', 'AM', 'Arménie', 'Armenia'),
('ARTA', 'AQ', 'Antarctique', 'Antarctica'),
('ARUB', 'AW', 'Aruba', 'Aruba'),
('AUST', 'AU', 'Australie', 'Australia'),
('AUTR', 'AT', 'Autriche', 'Austria'),
('AZER', 'AZ', 'Azerbaïdjan', 'Azerbaijan'),
('BAHA', 'BS', 'Bahamas', 'Bahamas, The'),
('BAHR', 'BH', 'Bahreïn', 'Bahrain'),
('BANG', 'BD', 'Bangladesh', 'Bangladesh'),
('BARB', 'BB', 'Barbade', 'Barbados'),
('BELA', 'PW', 'Belau', 'Palau'),
('BELG', 'BE', 'Belgique', 'Belgium'),
('BELI', 'BZ', 'Belize', 'Belize'),
('BENI', 'BJ', 'Bénin', 'Benin'),
('BERM', 'BM', 'Bermudes', 'Bermuda'),
('BHOU', 'BT', 'Bhoutan', 'Bhutan'),
('BIEL', 'BY', 'Biélorussie', 'Belarus'),
('BIRM', 'MM', 'Birmanie', 'Myanmar (ex-Burma)'),
('BOIN', 'IO', 'Territoire britannique de l Océan Indien', 'British Indian Ocean Territory'),
('BOLV', 'BO', 'Bolivie', 'Bolivia'),
('BOSN', 'BA', 'Bosnie-Herzégovine', 'Bosnia and Herzegovina'),
('BOTS', 'BW', 'Botswana', 'Botswana'),
('BOUV', 'BV', 'Ile Bouvet', 'Bouvet Island'),
('BRES', 'BR', 'Brésil', 'Brazil'),
('BRUN', 'BN', 'Brunei', 'Brunei Darussalam'),
('BULG', 'BG', 'Bulgarie', 'Bulgaria'),
('BURK', 'BF', 'Burkina Faso', 'Burkina Faso'),
('BURU', 'BI', 'Burundi', 'Burundi'),
('CAFR', 'CF', 'République centrafricaine', 'Central African Republic'),
('CAMB', 'KH', 'Cambodge', 'Cambodia'),
('CAME', 'CM', 'Cameroun', 'Cameroon'),
('CANA', 'CA', 'Canada', 'Canada'),
('CAYM', 'KY', 'Iles Cayman', 'Cayman Islands'),
('CHIL', 'CL', 'Chili', 'Chile'),
('CHIN', 'CN', 'Chine', 'China'),
('CHRI', 'CX', 'Ile Christmas', 'Christmas Island'),
('CHYP', 'CY', 'Chypre', 'Cyprus'),
('CNOR', 'KP', 'Corée du Nord', 'Korea, Demo. People s Rep. of'),
('COCO', 'CC', 'Iles des Cocos (Keeling)', 'Cocos (Keeling) Islands'),
('COLO', 'CO', 'Colombie', 'Colombia'),
('COMO', 'KM', 'Comores', 'Comoros'),
('CON1', 'CD', 'République démocratique du Congo', 'Congo, Democratic Rep. of the'),
('CON2', 'CG', 'Congo', 'Congo'),
('COOK', 'CK', 'Iles Cook', 'Cook Islands'),
('CROA', 'HR', 'Croatie', 'Croatia'),
('CSUD', 'KR', 'Corée du Sud', 'Korea, (South) Republic of'),
('CUBA', 'CU', 'Cuba', 'Cuba'),
('CVER', 'CV', 'Cap-Vert', 'Cape Verde'),
('DANE', 'DK', 'Danemark', 'Denmark'),
('DJIB', 'DJ', 'Djibouti', 'Djibouti'),
('DOM1', 'DM', 'Dominique', 'Dominica'),
('DOM2', 'DO', 'République dominicaine', 'Dominican Republic'),
('EGYP', 'EG', 'Égypte', 'Egypt'),
('EMIR', 'AE', 'Émirats arabes unis', 'United Arab Emirates'),
('EQUA', 'EC', 'Équateur', 'Ecuador'),
('ERYT', 'ER', 'Érythrée', 'Eritrea'),
('ESPA', 'ES', 'Espagne', 'Spain'),
('ESTO', 'EE', 'Estonie', 'Estonia'),
('ETHO', 'ET', 'Éthiopie', 'Ethiopia'),
('FALK', 'FK', 'Iles Falkland', 'Falkland Islands (Malvinas)'),
('FERO', 'FO', 'Iles Féroé', 'Faroe Islands'),
('FIDJ', 'FJ', 'Iles Fidji', 'Fiji'),
('FINL', 'FI', 'Finlande', 'Finland'),
('FRAN', 'FR', 'France', 'France'),
('GABO', 'GA', 'Gabon', 'Gabon'),
('GAMB', 'GM', 'Gambie', 'Gambia, the'),
('GANA', 'GH', 'Ghana', 'Ghana'),
('GEO1', 'GE', 'Géorgie', 'Georgia'),
('GEO2', 'GS', 'Iles Géorgie du Sud et Sandwich du Sud', 'S. Georgia and S. Sandwich Is.'),
('GIBR', 'GI', 'Gibraltar', 'Gibraltar'),
('GREC', 'GR', 'Grèce', 'Greece'),
('GREN', 'GD', 'Grenade', 'Grenada'),
('GROE', 'GL', 'Groenland', 'Greenland'),
('GUAD', 'GP', 'Guadeloupe', 'Guinea, Equatorial'),
('GUAM', 'GU', 'Guam', 'Guam'),
('GUAT', 'GT', 'Guatemala', 'Guatemala'),
('GUIB', 'GW', 'Guinée-Bissao', 'Guinea-Bissau'),
('GUIE', 'GQ', 'Guinée équatoriale', 'Equatorial Guinea'),
('GUIN', 'GN', 'Guinée', 'Guinea'),
('GUYA', 'GY', 'Guyana', 'Guyana'),
('GUYF', 'GF', 'Guyane française', 'Guiana, French'),
('HAIT', 'HT', 'Haïti', 'Haiti'),
('HEAR', 'HM', 'Iles Heard et McDonald', 'Heard and McDonald Islands'),
('HOND', 'HN', 'Honduras', 'Honduras'),
('HONG', 'HU', 'Hongrie', 'Hungary'),
('INDE', 'IN', 'Inde', 'India'),
('INDO', 'ID', 'Indonésie', 'Indonesia'),
('IRAN', 'IR', 'Iran', 'Iran, Islamic Republic of'),
('IRAQ', 'IQ', 'Iraq', 'Iraq'),
('IRLA', 'IE', 'Irlande', 'Ireland'),
('ISLA', 'IS', 'Islande', 'Iceland'),
('ISRA', 'IL', 'Israël', 'Israel'),
('ITAL', 'IT', 'Italie', 'Italy'),
('IVOI', 'CI', 'Côte d\'Ivoire', 'Ivory Coast (see Cote d\'Ivoire)'),
('JAMA', 'JM', 'Jamaïque', 'Jamaica'),
('JAPO', 'JP', 'Japon', 'Japan'),
('JORD', 'JO', 'Jordanie', 'Jordan'),
('KAZA', 'KZ', 'Kazakhstan', 'Kazakhstan'),
('KIRG', 'KG', 'Kirghizistan', 'Kyrgyzstan'),
('KIRI', 'KI', 'Kiribati', 'Kiribati'),
('KNYA', 'KE', 'Kenya', 'Kenya'),
('KONG', 'HK', 'Hong Kong', 'Hong Kong, (China)'),
('KWEI', 'KW', 'Koweït', 'Kuwait'),
('LAOS', 'LA', 'Laos', 'Lao People s Democratic Republic'),
('LEON', 'SL', 'Sierra Leone', 'Sierra Leone'),
('LESO', 'LS', 'Lesotho', 'Lesotho'),
('LETT', 'LV', 'Lettonie', 'Latvia'),
('LIBA', 'LB', 'Liban', 'Lebanon'),
('LIBE', 'LR', 'Liberia', 'Liberia'),
('LIBY', 'LY', 'Libye', 'Libyan Arab Jamahiriya'),
('LIEC', 'LI', 'Liechtenstein', 'Liechtenstein'),
('LITU', 'LT', 'Lituanie', 'Lithuania'),
('LUXE', 'LU', 'Luxembourg', 'Luxembourg'),
('MACA', 'MO', 'Macao', 'Macao, (China)'),
('MACE', 'MK', 'ex-République yougoslave de Macédoine', 'Macedonia, TFYR'),
('MADA', 'MG', 'Madagascar', 'Madagascar'),
('MALA', 'MY', 'Malaisie', 'Malaysia'),
('MALD', 'MV', 'Maldives', 'Maldives'),
('MALI', 'ML', 'Mali', 'Mali'),
('MALT', 'MT', 'Malte', 'Malta'),
('MALW', 'MW', 'Malawi', 'Malawi'),
('MARI', 'MP', 'Mariannes du Nord', 'Northern Mariana Islands'),
('MARO', 'MA', 'Maroc', 'Morocco'),
('MARS', 'MH', 'Iles Marshall', 'Marshall Islands'),
('MART', 'MQ', 'Martinique', 'Martinique'),
('MAUC', 'MU', 'Maurice', 'Mauritius'),
('MAUR', 'MR', 'Mauritanie', 'Mauritania'),
('MAYO', 'YT', 'Mayotte', 'Mayotte'),
('MEXI', 'MX', 'Mexique', 'Mexico'),
('MICR', 'FM', 'Micronésie', 'Micronesia, Federated States of'),
('MINE', 'UM', 'Iles mineures éloignées des États-Unis', 'US Minor Outlying Islands'),
('MOLD', 'MD', 'Moldavie', 'Moldova, Republic of'),
('MONA', 'MC', 'Monaco', 'Monaco'),
('MONG', 'MN', 'Mongolie', 'Mongolia'),
('MONS', 'MS', 'Montserrat', 'Montserrat'),
('MOZA', 'MZ', 'Mozambique', 'Mozambique'),
('NAMI', 'NA', 'Namibie', 'Namibia'),
('NAUR', 'NR', 'Nauru', 'Nauru'),
('NEPA', 'NP', 'Népal', 'Nepal'),
('NICA', 'NI', 'Nicaragua', 'Nicaragua'),
('NIEV', 'KN', 'Saint-Christophe-et-Niévès', 'Saint Kitts and Nevis'),
('NIGA', 'NG', 'Nigeria', 'Nigeria'),
('NIGE', 'NE', 'Niger', 'Niger'),
('NIOU', 'NU', 'Nioué', 'Niue'),
('NORF', 'NF', 'Ile Norfolk', 'Norfolk Island'),
('NORV', 'NO', 'Norvège', 'Norway'),
('NOUC', 'NC', 'Nouvelle-Calédonie', 'New Caledonia'),
('NOUZ', 'NZ', 'Nouvelle-Zélande', 'New Zealand'),
('OMAN', 'OM', 'Oman', 'Oman'),
('OUGA', 'UG', 'Ouganda', 'Uganda'),
('OUZE', 'UZ', 'Ouzbékistan', 'Uzbekistan'),
('PAKI', 'PK', 'Pakistan', 'Pakistan'),
('PANA', 'PA', 'Panama', 'Panama'),
('PAPU', 'PG', 'Papouasie-Nouvelle-Guinée', 'Papua New Guinea'),
('PARA', 'PY', 'Paraguay', 'Paraguay'),
('PBAS', 'NL', 'pays-Bas', 'Netherlands'),
('PERO', 'PE', 'Pérou', 'Peru'),
('PHIL', 'PH', 'Philippines', 'Philippines'),
('PITC', 'PN', 'Iles Pitcairn', 'Pitcairn Island'),
('POLO', 'PL', 'Pologne', 'Poland'),
('POLY', 'PF', 'Polynésie française', 'French Polynesia'),
('PORT', 'PT', 'Portugal', 'Portugal'),
('QATA', 'QA', 'Qatar', 'Qatar'),
('REUN', 'RE', 'Réunion', 'Reunion'),
('RICA', 'CR', 'Costa Rica', 'Costa Rica'),
('RICO', 'PR', 'Porto Rico', 'Puerto Rico'),
('ROUM', 'RO', 'Roumanie', 'Romania'),
('RUSS', 'RU', 'Russie', 'Russia (Russian Federation)'),
('RWAN', 'RW', 'Rwanda', 'Rwanda'),
('SAHA', 'EH', 'Sahara occidental', 'Western Sahara'),
('SALO', 'SB', 'Iles Salomon', 'Solomon Islands'),
('SALV', 'SV', 'Salvador', 'El Salvador'),
('SAMA', 'AS', 'Samoa américaines', 'American Samoa'),
('SAMO', 'WS', 'Samoa', 'Samoa'),
('SENE', 'SN', 'Sénégal', 'Senegal'),
('SEYC', 'SC', 'Seychelles', 'Seychelles'),
('SING', 'SG', 'Singapour', 'Singapore'),
('SLN_', 'SH', 'Sainte-Hélène', 'Saint Helena'),
('SLOQ', 'SK', 'Slovaquie', 'Slovakia'),
('SLOV', 'SI', 'Slovénie', 'Slovenia'),
('SLUC', 'LC', 'Sainte-Lucie', 'Saint Lucia'),
('SMAR', 'SM', 'Saint-Marin', 'San Marino'),
('SOMA', 'SO', 'Somalie', 'Somalia'),
('SOUD', 'SD', 'Soudan', 'Sudan'),
('SPIE', 'PM', 'Saint-Pierre-et-Miquelon', 'Saint Pierre and Miquelon'),
('SRIL', 'LK', 'Sri Lanka', 'Sri Lanka (ex-Ceilan)'),
('SSIE', 'VA', 'Saint-Siège ', 'Vatican City State (Holy See)'),
('SUED', 'SE', 'Suède', 'Sweden'),
('SUIS', 'CH', 'Suisse', 'Switzerland'),
('SURI', 'SR', 'Suriname', 'Suriname'),
('SVAL', 'SJ', 'Iles Svalbard et Jan Mayen', 'Svalbard and Jan Mayen Islands'),
('SVIN', 'VC', 'Saint-Vincent-et-les-Grenadines', 'Saint Vincent and the Grenadines'),
('SWAZ', 'SZ', 'Swaziland', 'Swaziland'),
('SYRY', 'SY', 'Syrie', 'Syrian Arab Republic'),
('TADJ', 'TJ', 'Tadjikistan', 'Tajikistan'),
('TAIW', 'TW', 'Taïwan', 'Taiwan'),
('TANZ', 'TZ', 'Tanzanie', 'Tanzania, United Republic of'),
('TCHA', 'TD', 'Tchad', 'Chad'),
('TCHE', 'CZ', 'République tchèque', 'Czech Republic'),
('TERR', 'TF', 'Terres australes françaises', 'French Southern Territories - TF'),
('THAI', 'TH', 'Thaïlande', 'Thailand'),
('TIMO', 'TL', 'Timor Oriental', 'Timor-Leste (East Timor)'),
('TOBA', 'TT', 'Trinité-et-Tobago', 'Trinidad & Tobago'),
('TOGO', 'TG', 'Togo', 'Togo'),
('TOKE', 'TK', 'Tokélaou', 'Tokelau'),
('TOME', 'ST', 'Sao Tomé-et-Principe', 'Sao Tome and Principe'),
('TONG', 'TO', 'Tonga', 'Tonga'),
('TUNI', 'TN', 'Tunisie', 'Tunisia'),
('TUR1', 'TC', 'Iles Turks-et-Caicos', 'Turks and Caicos Islands'),
('TUR2', 'TM', 'Turkménistan', 'Turkmenistan'),
('TURQ', 'TR', 'Turquie', 'Turkey'),
('TUVA', 'TV', 'Tuvalu', 'Tuvalu'),
('UKRA', 'UA', 'Ukraine', 'Ukraine'),
('URUG', 'UY', 'Uruguay', 'Uruguay'),
('USA_', 'US', 'États-Unis', 'United States'),
('VANU', 'VU', 'Vanuatu', 'Vanuatu'),
('VENE', 'VE', 'Venezuela', 'Venezuela'),
('VIEA', 'VI', 'Iles Vierges américaines', 'Virgin Islands, U.S.'),
('VIEB', 'VG', 'Iles Vierges britanniques', 'Virgin Islands, British'),
('VIET', 'VN', 'Viêt Nam', 'Viet Nam'),
('WALI', 'WF', 'Wallis-et-Futuna', 'Wallis and Futuna'),
('YEME', 'YE', 'Yémen', 'Yemen'),
('YOUG', 'YU', 'Yougoslavie', 'Saint Pierre and Miquelon'),
('ZAMB', 'ZM', 'Zambie', 'Zambia'),
('ZIMB', 'ZW', 'Zimbabwe', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE `statut` (
  `idStat` int(5) NOT NULL,
  `libStat` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`idStat`, `libStat`) VALUES
(1, 'Membre niveau 1d'),
(2, 'Modérateur niveau 1'),
(3, 'Membre niveau 2'),
(4, 'Modérateur niveau 2'),
(5, 'Administrateur'),
(6, 'Superviseur niveau 1'),
(7, 'Superviseur niveau 2'),
(8, 'Autre'),
(9, 'Super Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `thematique`
--

CREATE TABLE `thematique` (
  `numThem` char(8) NOT NULL,
  `libThem` char(60) DEFAULT NULL,
  `numLang` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `thematique`
--

INSERT INTO `thematique` (`numThem`, `libThem`, `numLang`) VALUES
('THE0101', 'L\'événementd', 'FRAN01'),
('THE0102', 'L\'acteur-clé', 'FRAN01'),
('THE0103', 'Le mouvement émergeant', 'FRAN01'),
('THE0104', 'L\'insolite / le clin d\'oeil', 'FRAN01'),
('THE0201', 'The event', 'ANGL01'),
('THE0202', 'The key player', 'ANGL01'),
('THE0203', 'The emerging movement', 'ANGL01'),
('THE0204', 'The unusual / the wink', 'ANGL01'),
('THE0301', 'Die Veranstaltung', 'ALLE01'),
('THE0302', 'Der Schlüsselakteur', 'ALLE01'),
('THE0303', 'Die entstehende Bewegung', 'ALLE01'),
('THE0304', 'Das Ungewöhnliche / das Augenzwinkern', 'ALLE01'),
('THE0401', 'Genial', 'RUSS01');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `pseudoUser` char(60) NOT NULL,
  `passUser` char(60) NOT NULL,
  `nomUser` char(60) DEFAULT NULL,
  `prenomUser` char(60) DEFAULT NULL,
  `eMailUser` char(70) NOT NULL,
  `idStat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`pseudoUser`, `passUser`, `nomUser`, `prenomUser`, `eMailUser`, `idStat`) VALUES
('admin', 'admin', 'Starr', 'Joe', 'JoeStarr@free.fr', 9),
('BarbieS9', 'P9#7xL', 'La Rousse', 'Julie', 'titou@gmail.com', 2),
('Chris45', 'Ut!D5?h0', 'Dupont', 'Jean', 'cricri@srf.fr', 1),
('Cruella', 'qL:5R!1', 'Mercury', 'Freddy', 'Cruella@free.fr', 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `angle`
--
ALTER TABLE `angle`
  ADD PRIMARY KEY (`numAngl`),
  ADD KEY `ANGLE_FK` (`numAngl`),
  ADD KEY `FK_ASSOCIATION_3` (`numLang`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`numArt`),
  ADD KEY `ARTICLE_FK` (`numArt`),
  ADD KEY `FK_ASSOCIATION_1` (`numAngl`),
  ADD KEY `FK_ASSOCIATION_2` (`numThem`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`numSeqCom`,`numArt`),
  ADD KEY `COMMENT_FK` (`numSeqCom`,`numArt`),
  ADD KEY `FK_ASSOCIATION_8` (`numArt`),
  ADD KEY `FK_ASSOCIATION_9` (`numMemb`);

--
-- Index pour la table `commentplus`
--
ALTER TABLE `commentplus`
  ADD PRIMARY KEY (`numSeqCom`,`numArt`,`numSeqComR`,`numArtR`),
  ADD KEY `COMMENTPLUS_FK` (`numSeqCom`,`numArt`,`numSeqComR`,`numArtR`),
  ADD KEY `FK_COMMENTPLUS` (`numSeqComR`,`numArtR`);

--
-- Index pour la table `langue`
--
ALTER TABLE `langue`
  ADD PRIMARY KEY (`numLang`),
  ADD KEY `LANGUE_FK` (`numLang`),
  ADD KEY `FK_ASSOCIATION_7` (`numPays`);

--
-- Index pour la table `likeart`
--
ALTER TABLE `likeart`
  ADD PRIMARY KEY (`numMemb`,`numArt`),
  ADD KEY `LIKEART_FK` (`numMemb`,`numArt`),
  ADD KEY `FK_LIKEART` (`numArt`);

--
-- Index pour la table `likecom`
--
ALTER TABLE `likecom`
  ADD PRIMARY KEY (`numMemb`,`numSeqCom`,`numArt`),
  ADD KEY `LIKECOM_FK` (`numMemb`,`numSeqCom`,`numArt`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`numMemb`),
  ADD KEY `MEMBRE_FK` (`numMemb`),
  ADD KEY `FK_ASSOCIATION_10` (`idStat`);

--
-- Index pour la table `motcle`
--
ALTER TABLE `motcle`
  ADD PRIMARY KEY (`numMotCle`),
  ADD KEY `MOTCLE_FK` (`numMotCle`),
  ADD KEY `FK_ASSOCIATION_5` (`numLang`);

--
-- Index pour la table `motclearticle`
--
ALTER TABLE `motclearticle`
  ADD PRIMARY KEY (`numArt`,`numMotCle`),
  ADD KEY `MOTCLEARTICLE_FK` (`numArt`),
  ADD KEY `MOTCLEARTICLE2_FK` (`numMotCle`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`numPays`),
  ADD KEY `PAYS_FK` (`numPays`);

--
-- Index pour la table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`idStat`),
  ADD KEY `STATUT_FK` (`idStat`);

--
-- Index pour la table `thematique`
--
ALTER TABLE `thematique`
  ADD PRIMARY KEY (`numThem`),
  ADD KEY `THEMATIQUE_FK` (`numThem`),
  ADD KEY `FK_ASSOCIATION_4` (`numLang`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`pseudoUser`,`passUser`),
  ADD KEY `USER_FK` (`pseudoUser`,`passUser`),
  ADD KEY `FK_ASSOCIATION_6` (`idStat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `numArt` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `numMemb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `motcle`
--
ALTER TABLE `motcle`
  MODIFY `numMotCle` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `statut`
--
ALTER TABLE `statut`
  MODIFY `idStat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `angle`
--
ALTER TABLE `angle`
  ADD CONSTRAINT `FK_ASSOCIATION_3` FOREIGN KEY (`numLang`) REFERENCES `langue` (`numLang`);

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_ASSOCIATION_1` FOREIGN KEY (`numAngl`) REFERENCES `angle` (`numAngl`),
  ADD CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`numThem`) REFERENCES `thematique` (`numThem`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_ASSOCIATION_8` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`),
  ADD CONSTRAINT `FK_ASSOCIATION_9` FOREIGN KEY (`numMemb`) REFERENCES `membre` (`numMemb`);

--
-- Contraintes pour la table `commentplus`
--
ALTER TABLE `commentplus`
  ADD CONSTRAINT `FK_COMMENTPLUS` FOREIGN KEY (`numSeqComR`,`numArtR`) REFERENCES `comment` (`numSeqCom`, `numArt`),
  ADD CONSTRAINT `FK_COMMENTPLUS2` FOREIGN KEY (`numSeqCom`,`numArt`) REFERENCES `comment` (`numSeqCom`, `numArt`);

--
-- Contraintes pour la table `langue`
--
ALTER TABLE `langue`
  ADD CONSTRAINT `FK_ASSOCIATION_7` FOREIGN KEY (`numPays`) REFERENCES `pays` (`numPays`);

--
-- Contraintes pour la table `likeart`
--
ALTER TABLE `likeart`
  ADD CONSTRAINT `FK_LIKEART` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`);

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `FK_ASSOCIATION_10` FOREIGN KEY (`idStat`) REFERENCES `statut` (`idStat`);

--
-- Contraintes pour la table `motcle`
--
ALTER TABLE `motcle`
  ADD CONSTRAINT `FK_ASSOCIATION_5` FOREIGN KEY (`numLang`) REFERENCES `langue` (`numLang`);

--
-- Contraintes pour la table `motclearticle`
--
ALTER TABLE `motclearticle`
  ADD CONSTRAINT `FK_MotCleArt1` FOREIGN KEY (`numMotCle`) REFERENCES `motcle` (`numMotCle`),
  ADD CONSTRAINT `FK_MotCleArt2` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`);

--
-- Contraintes pour la table `thematique`
--
ALTER TABLE `thematique`
  ADD CONSTRAINT `FK_ASSOCIATION_4` FOREIGN KEY (`numLang`) REFERENCES `langue` (`numLang`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_ASSOCIATION_6` FOREIGN KEY (`idStat`) REFERENCES `statut` (`idStat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
