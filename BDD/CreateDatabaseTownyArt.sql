-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 03 mars 2021 à 17:59
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
-- Base de données : `townyartdb`
--
CREATE DATABASE IF NOT EXISTS `townyartdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `townyartdb`;

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
('ANGL0001', 'Street-Art', 'FRAN01'),
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
(15, '2021-03-02 10:53:41', 'Le street art, ses origines et son impact mondial', 'Découvre les origines du street-art, l’impact de celui-ci dans la ville de Bordeaux, ainsi que les évènements à ne pas manquer.', 'Le street-art est la continuité des premières peintures préhistoriques, c’est le support d\'une expre', 'Le street-art est apparu au Mexique dans les années 1910 suite à la [Révolution Mexicaine](https://baripedia.org/wiki/La_R%C3%A9volution_mexicaine_:_1910_-_1940). Ce mouvement artistique contemporain s’est développé au début du siècle dernier dans l’objectif d\'exprimer des revendications sociales, politiques et esthétiques. Ces œuvres qualifiées de [muralisme](https://www.universalis.fr/encyclopedie/muralisme/)d’artistes de rue sont les débuts du street art. Le Mexique est d’ailleurs connu pour ses nombreux artistes et peintures murales présentes dans chaque villes mexicaines. On retrouve aussi des fresques de propagande en Russie du [régime soviétique](https://www.monde-diplomatique.fr/1967/03/FERON/27705), souvent de grande envergure. Cependant, c’est à la fin du 20ème siècle que ce mouvement s’affirme. De par la forte influence américaine, de nombreux subways sont recouvert de “tags” signés par leur auteur souvent dans l’objectif de marquer son territoire. On retrouve notamment [Taki 183](https://www.taki183.net/), un artiste précurseur du tag new yorkais, écrivant son pseudo sur de nombreux murs de Manhattan. On peut également citer [Keith Haring](http://www.artnet.fr/artistes/keith-haring/), un avangardiste du domaine.\r\n\r\nC’est à partir de Mai 1968 que le street-art a traversé l’océan Atlantique pour arriver en France. Il fut un moyen de revendiquer des idées politiques. Entre 1980 et 1990, la municipalité corse la législation et traque les street-artistes. Cette manière de s’exprimer à travers les époques, les cultures ainsi que les pays s’est développée, malgré son côté illégal. Ces dernières années, le street-art se démocratise et s\'ancre de plus en plus dans nos rues.', '## Les origines du street-art', 'Cette tendance mondiale n’échappe pas à Bordeaux, il existe de nombreux recoins cachés dans les multiples quartiers bordelais. Comme vous le savez, les fresques de street-art sont le plus souvent peintes dans l’illégalité, ce qui rend la discipline insolite. Depuis 2016, la ville de Bordeaux encourage le secteur de l’art urbain en organisant une saison culturelle annuelle dédiée à l’art urbain. Ainsi, une trentaine de fresques ont donc été réalisées, la municipalité a permis à plusieurs artistes d’embellir la métropole bordelaise d’éclats créatifs graffés en toute légalité. Les ruelles, les façades ou encore les murs sont un véritable terrain de jeu pour les artistes qui utilisent la ville comme support de création. Plusieurs associations et projets permettent aux curieux de découvrir des œuvres mises en avant à travers des visites ou des lieux dédiés à ces œuvres.\r\nLe [M.U.R](https://www.bordeaux-tourisme.com/patrimoine-culturel/mur-bordeaux.html). est un tableau à ciel ouvert de 35m² recouvert de multiples couches de peinture au roulement des fresques peintes par des artistes du monde entier. Les œuvres sur ce mur changent tous les mois, l’occasion de découvrir de nouveaux artistes et leurs techniques.\r\nLa [base sous-marine](https://www.bassins-lumieres.com/) est aujourd’hui réaffectée en centre culturel anciennement utilisée pendant la Seconde Guerre mondiale. Ce lieu abrite le plus grand centre d’art numérique au monde, présentant des œuvres d’art contemporain. Certaines façades de l\'intérieur de la base sous-marine sont recouvertes de graffitis.', '## Le street art bordelais', '## Les évènements à Bordeaux\r\n\r\nSi vous souhaitez vous imprégner d’une bonne dose de culture street-art, on peut vous conseiller 3 initiatives bordelaises qui sauront vous séduire. Vous avez le choix entre une balade pour découvrir le street-art à vélo, un festival dédié au street-art et une exposition d’art urbain.\r\nSi vous habitez à Bordeaux, vous avez sûrement remarqué que la bicyclette est un moyen de transport très prisé, c\'est pourquoi [Emmanuel Moulinier](https://canelesetchocolatines.com/) à décider de créer des visites street-art à vélo dans les ruelles, places, passages secrets et coins insolites de Bordeaux. Le vélo permet ainsi de parcourir plus de distance et donc de voir plus d\'œuvres. Cette visite de 2h30, agrémentée de gourmandises sera vous convenir à vous et votre famille. \r\nVous pouvez également vous rendre au festival [Shake Well](https://shakewellfest.com/), qui existe depuis 2016 et accueille plus de 5000 visiteurs chaque année. Le festival vous propose des démonstrations de graffeurs, des pièces de théâtre et des expositions diverses. Pendant 3 jours, une centaine de graffeurs tapisse 6.500 m² de murs en friche du quartier [Bassins à flot](https://www.bordeaux-metropole.fr/Grands-projets/Projets-d-amenagements/Projets-urbains/Bassins-a-flot).\r\nLe dernier événement est [“TRANSFERT #6”](https://www.jeanrooble.fr/home/expositions-exhibitions-1/transfert-6/), un collectif street-art situé au Virgin Mégastore de la place Gambetta. Dans ce lieu désaffecté, vous découvrirez un melting pot d\'œuvres artistiques de tous genres, aussi bien musicales qu’audiovisuelles. L’ambiance y est underground, l’entrée est comme dans une boite de nuit, mais vous y trouverez des œuvres grandeur nature.', NULL, '/front/assets/image/jon-tyson-HuRTqaEMD4I-unsplash 1.png', 'ANGL0001', 'THE0101'),
(16, '2021-03-02 10:53:41', 'Portrait de Frédéric Ducos, photographe bordelais', 'En 2014, [Frédéric Ducos](https://fredericducos.com) a choisi de quitter le milieu du vin pour rejoindre celui de la\r\nphotographie. Une reconversion, on peut le dire, réussie ! En effet,\r\nquelques années plus tard, il remporte le [Umbra International Photography Awards](https://www.umbrawards.com/), un concours de renommée mondiale. Pourtant, à première vue, le pari\r\nétait risqué. N’ayant jamais touché à un appareil, Frédéric a pris ses\r\npremiers cours de photographie sur la place de la Bourse à Bordeaux.\r\nCe fut un réel déclic qui lui a donné envie de se lancer pleinement\r\ndans le domaine. Un an et demi après, il s’installe en tant\r\nqu’artiste-photographe. Aujourd’hui, âgé de 44 ans, il vit de sa\r\npassion.', '## “La photographie est l’expression d’émotions par la recherche d’un certain minimalisme”', 'Les périodes creuses de la vie ont parfois leurs avantages. Celle de\r\n  Frédéric Ducos lui aura permis de se rendre compte d’une chose :\r\n  l’importance de créer. C’est un véritable tremplin de motivation qui\r\n  va le pousser à se lancer dans la photographie à plein temps. Un\r\n  milieu qu’il nous décrit comme emprunt de diversité et de possibilités\r\n  artistiques. En effet, on peut divaguer entre la photo d’art, la\r\n  publicité et bien d’autres domaines. Ce moyen d’expression offre\r\n  également la possibilité de rencontrer du monde et ainsi de partager\r\n  sa passion, de la pluraliser.\r\n\r\n  Très vite, la photographie urbaine a pris une grande place dans sa vie\r\n  artistique. C’est à la suite de plusieurs voyages (en Espagne\r\n  notamment) qu’il se rend compte de la beauté de l’architecture. Ces\r\n  éléments géométriques, omniprésents dans nos villes, sont ainsi\r\n  devenus une obsession pour le photographe. Il nous confie d’ailleurs\r\n  passer beaucoup de temps à étudier les angles, les lignes ou encore\r\n  les perspectives. Capturer l’aspect géométrique pour en retirer une\r\n  émotion lui parle beaucoup.\r\n\r\n  Bordeaux devient le terrain d’entraînement du photographe même si,\r\n  dit-il, cette ville est assez difficile à photographier. La fusion\r\n  entre l’ancien et le moderne mêle beaucoup de formes différentes et\r\n  complexes. Il finira tout de même par choisir son quartier de\r\n  prédilection : la place de la Bourse et les anciens bâtiments classés\r\n  à l’[UNESCO](https://whc.unesco.org/fr/list/1256/) qui l’entourent. Le tramway offre également l’occasion de mêler\r\n  l’architecture à la vie quotidienne bordelaise.', '### Le désir de créer et de partager', 'Marcher. Découvrir. Ne rien prévoir. Telle est la philosophie qui\r\nguide Frédéric Ducos. Ce photographe spécialisé dans la photographie\r\nurbaine ne se pose pas de questions. Il part à la découverte de villes\r\ntoujours plus intéressantes d’un point de vue artistique et “parfois\r\nles villes qui intéressent ne sont pas celles que l’on croit’’.\r\nExplorer la vie telle qu’elle l’est, observer le monde changer et\r\ncapturer les instants d’exception… C’est le processus de réflexion\r\nadopté par le photographe. En effet, Frédéric cherche à se rapprocher\r\nde l\'œil du visiteur lambda et soutient que l’inspiration vient\r\nsouvent lors d’une première rencontre avec l’endroit dans lequel il se\r\ntrouve. Peu importe la météo, ce photographe trouve toujours de\r\nnouvelles inspirations notamment en jouant avec les motifs qui forment\r\nle ciel en constante évolution.\r\n\r\n‘’Dans la photo, mon état d’esprit est de ne rien forcer, je suis\r\nobservateur, je me balade et je vois ce qui sort.’’\r\n\r\nL’utilisation d’un seul objectif (28-300 mm) lui permet une grande\r\npolyvalence, ce n’est pas l’idéal en termes de qualité nous a-t-il\r\nconfié, mais cela augmente grandement les possibilités de prises de\r\nvue. De plus, l’utilisation d’un tel objectif diminue son encombrement\r\net augmente sa mobilité à travers les villes.', '### La démarche artistique : capturer l’instant présent', '### Un minimalisme au service de l’émotion\r\n\r\nFrédéric Ducos est continuellement à la recherche d’une identité\r\nforte. Selon lui, l’un des buts de la photographie est d\'arriver à se\r\ndémarquer pour ne pas tomber dans le traditionnel. Sa ligne de\r\nconduite est ainsi d’exprimer une vision conceptuelle et poétique du\r\nmonde à travers un style unique et reconnaissable. Pour cela,\r\nl’artiste nous confie ses secrets dans une interview qu’il nous a\r\naccordé.\r\n\r\n“Selon moi, la photographie est l’expression d’émotions par la\r\nrecherche d’un certain minimalisme. Moins il y a d’informations et\r\nplus la photo est forte.”\r\n\r\nIl suffit de contempler les clichés du photographe pour s’apercevoir\r\nde l’importance du noir et blanc dans son identité visuelle. Alors\r\npourquoi utiliser ce procédé ? Cela lui permet de rajouter du grain,\r\ndu flou ou encore de travailler la texture sans pour autant surcharger\r\nla photo. L’allègement de l’image est donc à privilégier. Dans la\r\nphoto d’art, laisser place à l’imagination est primordial. Le noir et\r\nblanc pousse à réfléchir à cette problématique et améliore la\r\nlisibilité tout en apportant un apportant une touche artistique. On se\r\npositionne sur un élément simple pour exprimer un maximum\r\nd’informations. La couleur n’a de l’importance que si elle apporte\r\nquelque chose. Cet état d’esprit conforte ce qui est mentionné plus\r\nhaut. Par ce minimalisme au service de l’émotion, Frédéric Ducos\r\nretranscrit à merveille l’instant présent. Il pousse à l’imagination\r\net à la réflexion.', 'En constante recherche d’équilibre artistique, Frédéric Ducos manipule\r\nà la perfection nos sens. Entre beauté visuelle, conceptualisme et\r\nimagination, ses photographies expriment les émotions de l’instant\r\nprésent. Parti de rien, l’artiste est aujourd’hui reconnu mondialement\r\npour son talent et sa personnalité. Cependant, il ne compte pas en\r\nrester là : son objectif est de collaborer plus grandement avec les\r\nmarques et ainsi d’adapter ses connaissances de la photographie au\r\nmonde du commerce.', '/front/assets/image/portaitphotographe.png', 'ANGL0001', 'THE0102'),
(17, '2021-03-02 10:53:41', 'TOP 3 des oeuvres les plus insolites de Bordeaux', 'Bordeaux, de son surnom “La Belle endormie” du fait de sa quiétude, est en réalité un paradis pour les fans de street art. Du panneau de signalisation modifié aux magnifiques fresques murales en passant par des sculptures originales, Bordeaux regorge de street art à chaque coin de rue. On te propose dans cet article un top 3 des lieux insolites que tu dois absolument connaitre.', '', '### La Jaguar du parking Victor-Hugo\r\n\r\nSi tu es déjà venu à Bordeaux, tu es forcément passé par la [rue St Catherine](https://fr.wikipedia.org/wiki/Rue_Sainte-Catherine_(Bordeaux)), mais tu n\'es peut-être jamais sorti des sentiers battus. Pour les aventuriers, ceux qui, poussés par la curiosité décident de s\'égarer dans les rues de Bordeaux, le parking Victor Hugo </a> leur est familier. A vrai dire, il n\'est pas vraiment caché puisqu\'il se situe à 30 mètres de la promenade St Catherine. Mais qu\'y a t\'il de si spécial pour que l\'on te parle de ce parking ? Ne t\'en fais pas, on va te l\'expliquer. <br> <br>\r\nCe parking a été construit au début des années 60 par les architectes toulousains [Jean Dauriac](https://www.pss-archi.eu/architecte/4667) et [Pierre Laffitte](https://www.pss-archi.eu/architecte/4449). Mais en 1993, lors de la rénovation de l’édifice, l’architecte bordelais [Jean-François Dosso](https://www.darchitectures.com/voir-dosso-parmi-les-architectes-d-interieur,p104501.html) a eu l’idée de créer un signe distinctif pour ce parking. Il positionne une [Jaguar MK1](https://en.wikipedia.org/wiki/Jaguar_Mark_1) verte encastrée dans la façade. <br> <br>\r\nA l’œil nu, le véhicule paraît suspendu au-dessus de nos têtes et ne tenant qu’à un fil de subir les lois de la gravité. Au premier regard, l\'impression qu\'un accident vient de se produire nous rend inquiet. C\'est en se rapprochant de la scène et en réfléchissant quelques instants que l\'on comprend la supercherie. En effet, la Jaguar est, en réalité, posée sur la structure même du parking. <br> <br>\r\nEn regardant depuis le sol, tu pourras constater que le moteur a été retiré de la carrosserie afin d’éviter de l’alourdir et pour conforter sa dimension artistique. <br> <br>\r\nUne œuvre insolite aux airs de films hollywoodiens qui ravira les passionnés d\'automobiles comme les passants. Effet de surprise garanti à la [place de la Ferme Richemont, 33000 Bordeaux](https://www.google.fr/maps/place/Parking+Victor+Hugo/@44.8356518,-0.5727747,17z/data=!4m5!3m4!1s0xd5527cf467c845b:0xa3373b532c1611dd!8m2!3d44.8356518!4d-0.572775). <br> <br>', '### La sculpture “Un détail” <br> <br>', 'Alors que nous nous promenons sur les quais de la rive gauche, non loin de la gare Saint Jean, notre œil ne peut qu\'être attiré par cette immense structure à l\'architecture futuriste. Mais attention ! Si tu veux en voir la totalité, il te faudra lever la tête. <br> <br>\r\nSiégeant sur la rive gauche de la Garonne et située à cinq minutes à pied de la gare Saint-Jean, [La MÉCA](https://www.la-meca.com) est une arche en béton brute mesurant 37 mètres de haut et 180 mètres de large. <br> <br>\r\nConçu par l\'architecte [BIG](https://fr.wikipedia.org/wiki/Bjarke_Ingels) (Bjarke Ingels Group) et conçu en septembre 2018, ce bâtiment est caractérisé par ses formes futuristes et ses dimensions gigantesques, comme si cette arche venait tout droit du futur. <br> <br>\r\nDerrière cet édifice se cache une statue étrangement perturbante reposant sur les gradins extérieurs. Cette œuvre, qui s’intitule [“Un détail”](http://www.aquitaineonline.com/actualites-en-aquitaine/sud-ouest/7222-sculpture-un-detail-de-benoit-maire.html) est celle de [Benoît Maire](https://www.franceculture.fr/personne-benoit-maire), artiste Pessacais de 43 ans. <br> <br>\r\nFaite de bronze, elle représente une demi-tête d\'Hermès. Cette sculpture de 3 mètres de hauteur, à été réalisée par l’atelier de fonderie artisanale “Fonderie des cyclopes” à Mérignac. <br> <br>\r\nSelon l\'artiste : « La moitié absente de la sculpture est à compléter par le spectateur dans l\'intérieur vidé de la chambre urbaine. Ce travail de l\'imagination est renforcé par le fini poli-miroir de la tranche coupée qui permet de faire l\'expérience de la réflexion dans son sens littéral. » <br> <br>\r\nUne œuvre qui vaut le détour si tu aimes les illusions d’optiques et la sculpture, mais aussi la démesure. La MÉCA est situé au [PARVIS CORTO MALTESE, Quai de Paludate, 33800 Bordeaux](https://www.google.fr/maps/place/La+Méca/@44.8283478,-0.5529029,17.95z/data=!4m8!1m2!2m1!1zbcOpY2E!3m4!1s0xd552647aaf3f8c9:0xa1e23388c8395821!8m2!3d44.828803!4d-0.5525432).', '### La sculpture “Un détail”', '### La fresque géante du CHU Pellegrin <br> <br> \r\n\r\nC’est en allant prendre mon repas au restaurant universitaire que je passe pour la première fois devant cet hôpital. Aux premiers abords, rien d\'étonnant, jusqu’à ce que je me tourne vers la gauche. Là, j\'aperçois une petite fille qui me fixe du regard. Une petite fille… de 15 mètres de hauteur. On est d\'accord, c’est impossible… Mais tu vas bientôt comprendre pourquoi ça l\'est. <br> <br>\r\nRemontons dans le temps jusqu’en 2013, année où l’artiste pochoiriste [Jef Aerosol](https://www.jefaerosol.com) est appelé pour la réalisation d’une œuvre de 15m x 6m à l’entrée de l\'[hôpital Pellegrin](https://fr.wikipedia.org/wiki/Hôpital_Pellegrin). Cette œuvre, réalisée en 4 jours, représente une image forte et symbolique. En effet, cette fresque monumentale permet de casser l’image anxiogène qui règne à l’hôpital. <br> <br>\r\n[Philippe Vigouroux](https://www.chu-bordeaux.fr/Espace-média/Archives/Philippe-Vigouroux-nommé-directeur-général-du-CHU-de-Bordeaux/), directeur général du CHU de Bordeaux en parle : <br>\r\n“La petite fille tient avec précaution un globe terrestre, porteur de toute une humanité. Son sourire est celui de l’hospitalité, sa gravité est celle de la responsabilité de qui tient des vies entre ses mains. » <br> <br>\r\nMais pourquoi une petite fille ? L’artiste nous confie que l\'enfance, c\'est l\'innocence, l\'avenir, l\'espoir. La jeunesse, c\'est à la fois le futur et aussi ce que nous laissons derrière nous. A travers cette fresque, cette petite fille nous dit que ce monde nous appartient et c’est à nous de savoir ce que nous voulons en faire. <br> <br>\r\nOn te conseille vivement d’aller à l\'hôpital Pellegrin… Non pas pour des soucis de santé on l’espère, mais pour admirer ce chef d\'œuvre visible [link](https://www.google.fr/maps/place/Groupe+Hospitalier+Pellegrin/@44.827611,-0.6087224,16z/data=!4m8!1m2!2m1!1spellegrin!3m4!1s0xd54d875aca3b753:0x57ed7f829e557bc8!8m2!3d44.827611!4d-0.604345) Place Amélie Raba Léon à Bordeaux', 'En constante recherche d’équilibre artistique, Frédéric Ducos manipule à la perfection nos sens. Entre beauté visuelle, conceptualisme et imagination, ses photographies expriment les émotions de l’instant présent. Parti de rien, l’artiste est aujourd’hui reconnu mondialement pour son talent et sa personnalité. Cependant, il ne compte pas en rester là : son objectif est de collaborer plus grandement avec les marques et ainsi d’adapter ses connaissances de la photographie au monde du commerce.', '/front/assets/image/bordeaux2.jpg', 'ANGL0001', 'THE0104');

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
(49, 'Franchementdd', 'BULG01'),
(100, 'architecture', 'FRAN01'),
(101, 'urbain', 'FRAN01'),
(102, 'art', 'FRAN01'),
(103, 'évènement', 'FRAN01'),
(104, 'insolite', 'FRAN01'),
(105, 'street-art  ', 'FRAN01'),
(106, 'photographie', 'FRAN01');

-- --------------------------------------------------------

--
-- Structure de la table `motclearticle`
--

CREATE TABLE `motclearticle` (
  `numArt` int(8) NOT NULL,
  `numMotCle` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `motclearticle` (`numArt`, `numMotCle`)
VALUES
    ('16', '101'),
    ('16', '100'),
    ('16', '102'),
    ('16', '106'),
    ('15', '101'),
    ('15', '105'),
    ('15', '103'),
    ('15', '102'),
    ('17', '104'),
    ('17', '105'),
    ('17', '106'),
    ('17', '102');

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
  MODIFY `numArt` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `numMemb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `motcle`
--
ALTER TABLE `motcle`
  MODIFY `numMotCle` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

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