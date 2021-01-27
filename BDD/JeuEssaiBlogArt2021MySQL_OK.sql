/**********************************************************************/
/* Blog des articles (BD MySQL) du cours M2203
//
// Jeu d'essai SQL du cours M2203
//
// @Martine Bornerie		Le 25/01/21 13:22:00
//
// nom script : JeuEssaiBlogArt2021MySQL_OK.sql
//
//
//			--  Sans & et \ sur les car. français  --
//      --  Ecriture normale  --
*/
/**********************************************************************/
/*
--	Gestion des articles de Blog
--	Base de données MySQL
*/
--
-- Base de données: BLOGART
--
USE BLOGART21;

-- --------------------------------------------------------------------
/*
-- Respectant les CIR
*/
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
-- --------------------------------------------------------------------
/*
--
-- Table PAYS
--
-- (<numPays char(4) not null, cdPays char(2),
-- frPays varchar(255), enPays varchar(255),>)
--
-- IMPORTER LE SCRIPT DE CREATION DES PAYS (en premier)
-- (JeuEssaiPays2021MySQL_OK.sql)
--
*/
-- --------------------------------------------------------------------
-- --------------------------------------------------------------------


-- --------------------------------------------------------------------
/*
--
-- Table STATUT
--
-- (<idStat int(5) not null>, <libStat varchar(25)>)
*/
INSERT INTO STATUT
	(idStat, libStat)
VALUES
	(1, 'Membre niveau 1'),
	(2, 'Modérateur niveau 1'),
	(3, 'Membre niveau 2'),
	(4, 'Modérateur niveau 2'),
	(5, 'Administrateur'),
	(6, 'Superviseur niveau 1'),
	(7, 'Superviseur niveau 2'),
	(8, 'Autre'),
	(9, 'Super Administrateur');
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
--
-- Table USER
--
-- (<pseudoUser char(60) not null>, <passUser char(60) not null>,
-- <nomUser char(60)>, <prenomUser char(60)>,
-- <eMailUser char(70)>, <idStat int(5)>)
*/
INSERT INTO USER (pseudoUser, passUser, nomUser, prenomUser, eMailUser, idStat)
VALUES
	('Chris45', "Ut!D5?h0", "Dupont", "Jean", "cricri@srf.fr", 1);
INSERT INTO USER (pseudoUser, passUser, nomUser, prenomUser, eMailUser, idStat)
VALUES
  ('admin', "admin", "Starr", "Joe", "JoeStarr@free.fr", 9);
INSERT INTO USER (pseudoUser, passUser, nomUser, prenomUser, eMailUser, idStat)
VALUES
  ('BarbieS9', "P9#7xL", "La Rousse", "Julie", "titou@gmail.com", 2);
INSERT INTO USER (pseudoUser, passUser, nomUser, prenomUser, eMailUser, idStat)
VALUES
  ('Cruella', "qL:5R!1", "Mercury", "Freddy", "Cruella@free.fr", 5);
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
--
-- Table MEMBRE
--
-- (<numMemb int(10) not null>, <prenomMemb varchar(70)>, <nomMemb varchar(70)>,
-- <pseudoMemb varchar(70)>, <passMemb varchar(70)>, <eMailMemb varchar(100)>,
-- <dtCreaMemb datetime>, <souvenirMemb bool>, <accordMemb bool>
-- )
*/

INSERT INTO MEMBRE (numMemb, prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, souvenirMemb, accordMemb)
VALUES
  (01, "Jean", "Dupont", 'Phil09', "Ut!D5?h0", "Phil09@me.com", '2020-01-09 10:13:43', true, true);

INSERT INTO MEMBRE (numMemb, prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, souvenirMemb, accordMemb)
VALUES
  (02, "Julie", "La Rousse", 'juju1989', "G54;Q22mi5", "julie@gmail.com", '2020-03-15 14:33:23', false, true);

INSERT INTO MEMBRE (numMemb, prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, souvenirMemb, accordMemb)
VALUES
  (03, "David", "Bowie", 'dav33B', "kp09,1K4!", "david.bowie@gmail.com", '2020-07-19 13:13:13', true, true);

INSERT INTO MEMBRE (numMemb, prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, souvenirMemb, accordMemb)
VALUES
  (04, "Phil", "Collins", 'cols2P', "mq3j4;6GH", "phil.collins@me.com", '2020-11-04 17:39:09', true, true);

INSERT INTO MEMBRE (numMemb, prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, souvenirMemb, accordMemb)
VALUES
  (05, "Prince", "Rogers Nelson dit PRINCE", 'Rogers222', "frI3!Px;21", "prince@gmail.com", '2020-12-14 13:24:23', false, true);
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
--
-- Table LANGUE
--
-- (<numLang char(8) not null>, <lib1Lang char(30)>, <lib2Lang char(60)>
--  <numPays char(4)>)
----------------------------
Décomposition de la PK :
Table LANGUE :
Lettres du pays :	4 caractères du PAYS en FK dans LANGUE => NumPays
		=> Récupéré dans la table PAYS (numPays)
01, 02, 03		:	concerne les 4 caractères suivants 5 à 8
		S'il s'agit d'une nouvelle langue
		=> no seq langue : no seq = 0 + 1
		si 4 premiers car. de la langue existe en FK dans LANGUE (FRAN, ANGL)
		=> no seq langue : no seq ++ (on incrémente no séquence existant)
*/
INSERT INTO LANGUE
	(numLang, lib1Lang, lib2Lang, numPays)
VALUES
	("FRAN01", "Français(e)", "Langue française", "FRAN");
INSERT INTO LANGUE
	(numLang, lib1Lang, lib2Lang, numPays)
VALUES
	("ANGL01", "Anglais(e)", "Langue anglaise", "ANGL");
INSERT INTO LANGUE
	(numLang, lib1Lang, lib2Lang, numPays)
VALUES
	("ALLE01", "Allemand(e)", "Langue allemande", "ALLE");
INSERT INTO LANGUE
	(numLang, lib1Lang, lib2Lang, numPays)
VALUES
	("ESPA01", "Espagnol(e)", "Langue espagnole", "ESPA");
INSERT INTO LANGUE
	(numLang, lib1Lang, lib2Lang, numPays)
VALUES
	("ITAL01", "Italien(ne)", "Langue italienne", "ITAL");
INSERT INTO LANGUE
	(numLang, lib1Lang, lib2Lang, numPays)
VALUES
	("BULG01", "Bulgare", "Langue bulgare", "BULG");
INSERT INTO LANGUE
	(numLang, lib1Lang, lib2Lang, numPays)
VALUES
	("UKRA01", "Ukrainien(ne)", "Langue ukrainienne", "UKRA");
INSERT INTO LANGUE
	(numLang, lib1Lang, lib2Lang, numPays)
VALUES
	("RUSS01", "Russe", "Langue russe", "RUSS");
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
--
-- Table ANGLE
--
-- (<numAngl char(8) not null>, <libAngl char(60)>, <numLang char(8)>)
--
-- ANGL0101 : 01 -> Contenu de LibAngl / 01, 02, 03 -> Num langue
-- Il aurait fallu faire ANGL0101 0201 0301 ==> A modifier pour l'année prochaine
-- (Cf. script Yoann B. --> A prendre)
----------------------------
Décomposition de la PK :
ANGL		:	table ANGLE :
Lettre de la langue : 4 caractères de LANGUE en FK dans ANGLE => numLang
		=> Récupéré dans la table LANGUE (numLang)
01, 02, 03		:	concerne les 4 caractères suivants 5 à 8
		S'il s'agit d'un nouvel angle
		=> no seq angle : no seq = 0 + 1
		si 4 premiers car. de l'angle existe en FK dans LANGUE (FRAN, ANGL)
		=> no seq angle : no seq ++ (on incrémente no séquence existant)
----------------------------
	PK :
*/
INSERT INTO ANGLE (numAngl, libAngl, numLang)
VALUES
	("ANGL0101", "Handicap", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0201", "Handicap", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0301", "Handikap", "ALLE01");
--
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0102", "Grandes figures littéraires", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0202", "Great literary figures", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0302", "Große literarische Persönlichkeiten", "ALLE01");
--
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0103", "Happy hours", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0203", "Happy hours", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0303", "Happy hours", "ALLE01");
--
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0104", "Histoire médiévale", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0204", "Medieval History", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0304", "Mittelalterliche Geschichte", "ALLE01");
--
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0105", "Intelligence collective", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0205", "Collective Intelligence", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0305", "Gemeinsame Intelligenz", "ALLE01");
--
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0106", "Expérience 3.0", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0206", "Experience 3.0", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0306", "Erfahrung 3.0", "ALLE01");
--
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0107", "Chatbot et IA", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0207", "Chatbot and IA", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0307", "Chatbot und KI", "ALLE01");
--
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0108", "Stories", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0208", "Stories", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0308", "Geschichten", "ALLE01");
--
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0109", "Secret", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0209", "Secret", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0309", "Geheimnis", "ALLE01");
--
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0110", "We heart it", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0210", "We heart it", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0310", "Wir lieben es", "ALLE01");
--
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0111", "Yik Yak", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0211", "Yik Yak", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0311", "Yik Yak", "ALLE01");
--
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0112", "Shots", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0212", "Shots", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0312", "Aufnahmen", "ALLE01");
--
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0113", "Tik Tok", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0213", "Tik Tok", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0313", "Tik Tok", "ALLE01");
--
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0114", "Recherche vocale", "FRAN01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0214", "Voice search", "ANGL01");
INSERT INTO ANGLE	(numAngl, libAngl, numLang)
VALUES
	("ANGL0314", "Sprachsuche", "ALLE01");
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
--
-- Table THEMATIQUE
--
-- (<numThem char(6) not null>, <libThem char(60)>, <numLang char(8)>)

----------------------------
Décomposition de la PK :
THE		:	table THEMATIQUE :
01, 02, 03	:	concerne les caractères 4 & 5
		Il s'agit de la langue :
			- un no différent pour une nouvelle langue
			- le même no si la langue existe déjà dans la table THEMATIQUE
		=> on incrémente le numéro de séquence
01, 02, 03	:	concerne les caractères 6 & 7
		si la langue est abs en FK dans THEMATIQUE (BRES)
		=> no seq = 0 + 1
		si la langue existe en FK dans THEMATIQUE (FRAN, ANGL)
		=> no seq ++ (on incrémente le no séquence)
----------------------------
	PK :
*/
-- FRAN01
INSERT INTO THEMATIQUE (numThem, libThem, numLang)
VALUES
		('THE0101', "L'événement", "FRAN01");
INSERT INTO THEMATIQUE (numThem, libThem, numLang)
VALUES
		('THE0102', "L'acteur-clé", "FRAN01");
INSERT INTO THEMATIQUE (numThem, libThem, numLang)
VALUES
		('THE0103', "Le mouvement émergeant", "FRAN01");
INSERT INTO THEMATIQUE (numThem, libThem, numLang)
VALUES
		('THE0104', "L'insolite / le clin d'oeil", "FRAN01");
-- ANGL01
INSERT INTO THEMATIQUE (numThem, libThem, numLang)
VALUES
		('THE0201', "The event", "ANGL01");
INSERT INTO THEMATIQUE (numThem, libThem, numLang)
VALUES
		('THE0202', "The key player", "ANGL01");
INSERT INTO THEMATIQUE (numThem, libThem, numLang)
VALUES
		('THE0203', "The emerging movement", "ANGL01");
INSERT INTO THEMATIQUE (numThem, libThem, numLang)
VALUES
		('THE0204', "The unusual / the wink", "ANGL01");
-- ALLE01
INSERT INTO THEMATIQUE (numThem, libThem, numLang)
VALUES
		('THE0301', "Die Veranstaltung", "ALLE01");
INSERT INTO THEMATIQUE (numThem, libThem, numLang)
VALUES
		('THE0302', "Der Schlüsselakteur", "ALLE01");
INSERT INTO THEMATIQUE (numThem, libThem, numLang)
VALUES
		('THE0303', "Die entstehende Bewegung", "ALLE01");
INSERT INTO THEMATIQUE (numThem, libThem, numLang)
VALUES
		('THE0304', "Das Ungewöhnliche / das Augenzwinkern", "ALLE01");
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
--
-- Table MOTCLE
--
-- (<numMotCle int(8) not null>, <libMotCle char(60)>, <numLang char(8)>)

----------------------------
Décomposition de la PK :
Table MOTCLE => auto_increment
01, 02, 03	:	concerne les caractères 5 & 6
		Il s'agit de la langue :
			- un no différent pour une nouvelle langue
			- le même no si la langue existe déjà dans la table MOTCLE
		=> on incrémente le numéro de séquence
01, 02, 03	:	concerne les caractères 7 & 8
		si la langue est abs en FK dans MOTCLE (BRES)
		=> no seq = 0 + 1
		si la langue existe en FK dans MOTCLE (FRAN, ANGL)
		=> no seq ++ (on incrémente le no séquence)
----------------------------
	PK :
*/
-- FRAN01
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(01, "Bordeaux", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(02, "CHU", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(03, "chirurgiens", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(04, "Hôpital", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(05, "soignants", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(06, "bleu", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
  (07, "Mars Bleu", "FRAN01");
--
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(08, "Base", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(09, "sous-marine", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(10, "Base sous-marine", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(11, "port de la Lune", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(12, "histoire", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(13, "Art", "FRAN01");
--
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(14, "Stalingrad", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(15, "Pont", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(16, "Pont de Pierre", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(17, "Lion bleu", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(18, "sculpture", "FRAN01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(19, "Veilhan", "FRAN01");
--
-- ANGL01
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(20, "blue", "ANGL01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(21, "Bordeaux", "ANGL01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(22, "base", "ANGL01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(23, "submarine", "ANGL01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(24, "submarine base", "ANGL01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(25, "Port of the Moon", "ANGL01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(26, "history", "ANGL01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(27, "Art", "ANGL01");
--
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(28, "Stalingrad", "ANGL01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(29, "bridge", "ANGL01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(30, "stone bridge", "ANGL01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(31, "Blue Lion", "ANGL01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(32, "sculpture", "ANGL01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(33, "Veilhan", "ANGL01");
--
-- ALLE01
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(34, "blau", "ALLE01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(35, "bordeaux", "ALLE01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(36, "kinder", "ALLE01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(37, "zuhause", "ALLE01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(38, "menschen", "ALLE01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(39, "süße", "ALLE01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(40, "freund", "ALLE01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(41, "wagen", "ALLE01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(42, "hafen", "ALLE01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(43, "brücke", "ALLE01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(44, "stein", "ALLE01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(45, "Löwe", "ALLE01");
INSERT INTO MOTCLE (numMotCle, libMotCle, numLang)
VALUES
	(46, "sprungbrett", "ALLE01");
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
--
-- Table ARTICLE
--
-- (<numArt int(8) not null>, <dtCreArt datetime>, <libTitrArt char(100)>,
-- <libChapoArt char(500)>, <libAccrochArt char(100)>, <parag1Art text(1200)>,
-- <libSsTitr1Art char(100)>, <parag2Art text(1200)>, <libSsTitr2Art char(100)>,
-- <parag3Art text(1200)>, <libConclArt text(800)>, <urlPhotArt char(70)>,
-- 2 FK :
-- <numAngl char(8) not null>, <numThem char(8) not null>
-- )
*/
--
INSERT INTO ARTICLE (numArt, dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art,
   libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt,
   numAngl, numThem)
VALUES
  (01, '2019-02-24 16:08:30', 'La surprenante reconversion de la base sous-marine',
    'Un bâtiment unique chargé d\'histoire qui a survécu à l\'emprise des Allemands en 1943, et qui est aujourd\'hui l\'un des symboles d\'art de notre ville bordelaise.',
    'La grande immergée du port de la Lune, éclairée de son immense néon bleu “something strange happened here” n’as pas toujours été celle que l’on connaît aujourd’hui.',
    'Oui, notre base sous-marine est notre héritage nazi. En 1943, le bloc de béton, que nous connaissons tous, voit le jour après 22 mois de travaux forcés par des prisonniers.',
    'Quel avenir pour cet amas de béton ?',
    'Après la destruction et le sabotage du matériel nazis par les Alliés en août 1944. Il a fallu se demander que deviendrait ce bâtiment.',
    'Peau neuve, colorée et numérique pour la base bordelaise.',
    'Aujourd\'hui la base sous marine occupe une place incontournable dans le paysage culturel bordelais.',
    'Pour le mot de la fin : Bruno Monnier, président de Culturespace, affirme que ses équipes et lui ont travaillé d’arrache pied pour imaginer et concevoir la nouvelle base sous marine.',
    'imgArt19.jpg',
    'ANGL0105', 'THE0101');
--
INSERT INTO ARTICLE (numArt, dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art,
   libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt,
   numAngl, numThem)
VALUES
	(02, '2019-03-13 20:14:10', 'Le CHU de bordeaux se met-il au bleu ?',
    'Le bleu, une couleur si commune, qui provoque tranquillité, sécurité et confiance.',
    'Le CHU de Bordeaux, est un lieu au service de tous, il tient un rôle important dans la vie des Bordelais, et pourtant nous ne le connaissons pas !',
    'Tout d’abord, un logo, que vous avez vu et revu, mais auquel vous n\'avez jamais, vraiment prêté attention. ',
    'Savez-vous pourquoi les blouses des chirurgiens sont-elles bleues ?',
    'Voici une question que vous ne vous êtes peut-être jamais posée. Pourquoi les différents hôpitaux, ont-ils choisi, pour leurs opérations la couleur bleue, ou même vert clair ?',
    'Connaissez vous les fées du CHU de Bordeaux ?',
    'Les Fées Bleues sont une association créée par le personnel soignant du CHU, qui a pour but d’apporter de la couleur et du confort, dans le monde aseptisé du soin des prématurés ou bien pour les enfants en réanimation.',
    'Et voilà vous savez maintenant tout sur le CHU de Bordeaux ! Quoi que … Savez-vous qu’il participe à l\'opération de sensibilisation Mars Bleu ?',
    'imgArt18.jpg',
    'ANGL0105', 'THE0101');
--
INSERT INTO ARTICLE (numArt, dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art,
   libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt,
   numAngl, numThem)
VALUES
	(03, '2019-11-09 10:34:20', 'Le Lion bleu de Bordeaux, star des réseaux sociaux',
    'Surplombant la place Stalingrad, anciennement place du Pont, et faisant fièrement face au pont de Pierre, le Lion bleu de Xavier Veilhan fait depuis 2005 l’objet de toutes les convoitises.',
    'En France, depuis 1951 et l’arrêté des "1% artistique", toute construction d’un bâtiment public ayant pour but d\'accueillir du monde doit prévoir 1% de son budget total pour financer des oeuvres d\'art aux abords du bâtiment.',
    'En construisant les lignes de tramway, la ville de Bordeaux et sa métropole ont donc mis en place le programme "L\'art dans la ville".',
    'Un symbole de la rive droite',
    'On n\'imagine pas la place Stalingrad sans cet imposant félin coloré. Ce lion bleu est devenu l\'emblème de cette place et, pour les habitants de la rive gauche, c\'est le symbole de "l\'autre rive", c\'est la première chose que l\'on voit en traversant la Garonne depuis le quartier de Saint-Michel.',
    'Un tremplin pour Xavier Veilhan',
    'L\'artiste plasticien à l\'origine du Lion bleu, diplômé de l\'EnsAD-Paris (École Nationale Supérieure des Arts Décoratifs) et officier de l\'Ordre des Arts et des Lettres, n\'a pas choisi une figure animalière pour rien. La place Stalingrad est un hommage à la victoire de l\'armée soviétique durant la Seconde Guerre Mondiale.',
    'Espérons que cet élan de créativité se poursuive et que, par la suite, Xavier Veilhan réutilise cette couleur qui nous est si chère, le bleu.',
    'imgArt23.jpg',
    'ANGL0105', 'THE0101');
--
-- Art 01 en anglais => 04
--
INSERT INTO ARTICLE (numArt, dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art,
   libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt,
   numAngl, numThem)
VALUES
  (04, '2019-02-26 18:08:30', 'The surprising reconversion of the submarine base',
  	'A unique building steeped in history that survived the Germans\' hold in 1943, and which today is one of the symbols of art in our Bordeaux city.',
  	'The large submerged harbour of the Moon, illuminated by its immense blue neon light "something strange happened here" was not always the one we know today.',
  	'Yes, our submarine base is our Nazi heritage. In 1943, the concrete block, which we all know, was built after 22 months of forced labour by prisoners.',
  	'What does the future hold for this pile of concrete?',
  	'After the destruction and sabotage of Nazi equipment by the Allies in August 1944, one had to wonder what would become of this building.',
  	'New, coloured and digital skin for the Bordeaux base.',
  	'Today the submarine base occupies an essential place in the cultural landscape of Bordeaux.',
  	'For the last word : Bruno Monnier, President of Culturespace, says he and his teams have worked hard to imagine and design the new submarine base.',
    'imgArt19.jpg',
    'ANGL0205', 'THE0201');
--
-- Art 03 en anglais => 05
--
INSERT INTO ARTICLE (numArt, dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art,
   libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt,
   numAngl, numThem)
VALUES
  (05, '2019-11-13 20:14:20', 'The Blue Lion of Bordeaux, star of social networks',
  	'Overlooking Stalingrad Square, formerly Place du Pont, and proudly facing the Stone Bridge, Xavier Veilhan\'s Blue Lion has been the object of much covetousness since 2005.',
  	'In France, since 1951 and the "1% artistic" decree, any construction of a public building with the aim of welcoming people must provide 1% of its total budget to finance works of art in the vicinity of the building.',
  	'With the construction of the tramway lines, the city of Bordeaux and its metropolis have therefore set up the "Art in the City" programme.',
  	'A symbol of the right bank',
  	'One cannot imagine Stalingrad Square without this imposing colourful feline. This blue lion has become the emblem of this square and, for the inhabitants of the left bank, it is the symbol of "the other bank", it is the first thing you see when crossing the Garonne from the Saint-Michel district.',
  	'A springboard for Xavier Veilhan',
  	'The visual artist behind the Blue Lion, a graduate of EnsAD-Paris (École Nationale Supérieure des Arts Décoratifs) and an officer of the Ordre des Arts et des Lettres, did not choose an animal figure for nothing. Stalingrad square is a tribute to the victory of the Soviet army during the Second World War.',
  	'Let\'s hope that this surge of creativity will continue and that Xavier Veilhan will later reuse this colour that is so dear to us, blue.',
    'imgArt23.jpg',
    'ANGL0205', 'THE0201');
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
--
-- Table COMMENT
--
-- (<numSeqCom int(10) not null>, <numArt int(8) not null>, <dtCreCom datetime>,
-- <libCom text(600)>, <attModOK bool default false>, <affComOK bool default false>,
-- <notifComKOAff text(300)>)
--
   attModOK       -- Attente visa modération
   affComOK       -- Visible ou Non après modération
   notifComKOAff  -- commentaire admin si Non Visible après modération
--
Création PK : dernière PK (numSeqCom) + 1 / à numArt
*/

INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(001, 01, '2020-11-09 10:13:43', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(002, 01, '2020-11-02 13:18:42', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(003, 01, '2020-11-04 16:21:12', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(004, 01, '2020-11-05 03:15:38', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(005, 01, '2020-11-06 21:16:36', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(006, 01, '2020-11-06 11:20:31', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(007, 01, '2020-11-08 08:41:12', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
  (008, 01, '2020-11-18 08:41:12', "De la daube cet article", false, false, "Trop insultant");
--
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(001, 02, '2020-11-09 18:24:21', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(002, 02, '2020-11-02 16:29:16', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(003, 02, '2020-11-04 08:16:44', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(004, 02, '2020-11-05 14:27:39', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(005, 02, '2020-11-06 06:31:42', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(006, 02, '2020-11-06 23:50:27', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(007, 02, '2020-11-08 10:37:23', "Trop pourri comme article", false, false, "Manque de bienveillance");
--
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(001, 03, '2020-11-09 15:31:17', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(002, 03, '2020-12-15 08:31:23', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(003, 03, '2020-12-19 06:28:00', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(004, 03, '2020-12-28 07:30:21', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(005, 03, '2020-12-29 17:31:38', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(006, 03, '2020-12-29 09:31:27', "Pourri trop, trop comme article", false, false, "Trop insultant");
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(007, 03, '2020-12-02 16:33:41', "Trop cool comme article", true, true, null);
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(008, 03, '2020-12-03 12:41:47', "De la daube cet article", false, false, "Trop insultant");
INSERT INTO COMMENT (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff)
VALUES
	(009, 03, '2020-12-04 10:33:42', "Trop cool comme article", true, true, null);
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
--
-- Table COMMENTPLUS
--
-- (<numSeqCom int(10) not null>, <numArt int(8) not null>,
-- <numSeqComR int(10) not null>, <numArtR int(8) not null>)

*/
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (001, 01, 003, 01);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (001, 01, 004, 01);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (001, 01, 006, 01);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (001, 01, 007, 01);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (001, 01, 008, 01);
--
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (001, 02, 002, 02);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (003, 02, 004, 02);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (003, 02, 005, 02);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (005, 02, 006, 02);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (006, 02, 007, 02);
--
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (001, 03, 002, 03);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (001, 03, 003, 03);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (001, 03, 004, 03);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (002, 03, 006, 03);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (002, 03, 007, 03);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (004, 03, 008, 03);
INSERT INTO COMMENTPLUS (numSeqCom, numArt, numSeqComR, numArtR)
VALUES
  (004, 03, 009, 03);
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
--
-- Table LIKEART (TJ)
--
-- (<numMemb int(10) not null>, <numArt int(8) not null>,
-- <likeA bool>)

*/
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (01, 01, true);
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (01, 02, true);
--
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (02, 01, false);
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (02, 03, true);
--
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (03, 01, true);
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (03, 02, true);
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (03, 03, true);
--
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (04, 01, false);
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (04, 02, true);
INSERT INTO LIKEART (numMemb, numArt, likeA)
VALUES
  (04, 03, true);
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
/*
--
-- Table LIKECOM (TJ)
--
-- (<numMemb int(10) not null>, <numSeqCom int(10) not null>,
-- <numArt int(8) not null>,
-- <likeC bool>)

*/
INSERT INTO LIKECOM (numMemb, numSeqCom, numArt, likeC)
VALUES
  (01, 001, 01, true);
--
INSERT INTO LIKECOM (numMemb, numSeqCom, numArt, likeC)
VALUES
  (02, 004, 02, true);
--
INSERT INTO LIKECOM (numMemb, numSeqCom, numArt, likeC)
VALUES
  (03, 003, 03, true);
INSERT INTO LIKECOM (numMemb, numSeqCom, numArt, likeC)
VALUES
  (03, 004, 02, true);
--
INSERT INTO LIKECOM (numMemb, numSeqCom, numArt, likeC)
VALUES
  (04, 006, 03, true);
INSERT INTO LIKECOM (numMemb, numSeqCom, numArt, likeC)
VALUES
  (04, 007, 03, true);
--
-- --------------------------------------------------------------------


-- --------------------------------------------------------------------
/*
--
-- Table MOTCLEARTICLE (TJ)
--
-- (<numArt int(10) not null>, <numMotCle int(8) not null>)
*/
--
-- Art 01
-- 01 : Bordeaux
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (01, 01);
-- 06 : bleu
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (01, 06);
-- 08 : base
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (01, 08);
-- 09 : sous-marine
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (01, 09);
-- 10 : Base sous-marine
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (01, 10);
-- 11 : port de la Lune
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (01, 11);
-- 12 : histoire
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (01, 12);
-- 13 : Art
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (01, 13);
--
-- Art 02
-- 01 : Bordeaux
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 01);
-- 02 : CHU
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 02);
-- 03 : chirurgiens
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 03);
-- 04 : Hôpital
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 04);
-- 05 : soignants
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 05);
-- 06 : bleu
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 06);
-- 07 : Mars Bleu
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (02, 07);
--
-- Art 03
-- 01 : Bordeaux
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (03, 01);
-- 06 : bleu
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (03, 06);
-- 14 : Stalingrad
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (03, 14);
-- 15 : Pont
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (03, 15);
-- 16 : Pierre
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (03, 16);
-- 17 : Lion
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (03, 17);
-- 18 : sculpture
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (03, 18);
-- 19 : Veilhan
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (03, 19);
--
-- Art 01 en anglais => 04
-- 21 : Bordeaux
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (04, 21);
-- 20 : blue
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (04, 20);
-- 22 : base
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (04, 22);
-- 23 : submarine
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (04, 23);
-- 24 : submarine base
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (04, 24);
-- 11 : port de la Lune
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (04, 11);
-- 25 : Port of the Moon
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (04, 25);
-- 26 : history
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (04, 26);
-- 27 : Art
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (04, 27);
--
-- Art 03 en anglais => 05
-- 21 : Bordeaux
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (05, 21);
-- 20 : blue
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (05, 20);
-- 28 : Stalingrad
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (05, 28);
-- 29 : bridge
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (05, 29);
-- 30 : stone bridge
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (05, 30);
-- 31 : Blue Lion
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (05, 31);
-- 32 : sculpture
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (05, 32);
-- 33 : Veilhan
INSERT INTO MOTCLEARTICLE (numArt, numMotCle) VALUES (05, 33);
--
--
-- --------------------------------------------------------------------

-- --------------------------------------------------------------------
-- --------------------------------------------------------------------

