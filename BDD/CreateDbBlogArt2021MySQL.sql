/**********************************************************************/
/* Blog des articles (BD MySQL) du cours M2203
//
// Création du script de la base de données BLOGART
//
// @Martine Bornerie    Le 25/01/21 13:22:00
//
// nom script : CreateDbBlogArt2021MySQL_OK.sql
//
*/
/**********************************************************************/
/*====================================================================*/
/*
** Format d'un article (détail tuple) :

	ILLUSTRATION / PHOTO ⇒ URL

	TITRE :			  100 caractères

	CHAPEAU :		  500 caractères

   ACCROCHE :       100 caractères

	PARAGRAPHE 1 :
     SOUS-TITRE 1 : 100 caractères
	  DÉTAIL :       1200 caractères

   PARAGRAPHE 2 :
     SOUS-TITRE 2 : 100 caractères
	  DÉTAIL :       1200 caractères

   PARAGRAPHE 3 :
	  DÉTAIL :	     1200 caractères

	CONCLUSION :	  800 caractères

	MOTS-CLÉS :		  60 caractères
**
*/
/*====================================================================*/

-- First we create the database

CREATE DATABASE BLOGART21
DEFAULT CHARACTER SET UTF8			  -- Tous les formats de caractères
DEFAULT COLLATE utf8_general_ci ;  --

-- SHOW VARIABLES;					  -- Voir les paramètres de la BD

-- Then we add a user to the database

GRANT ALL PRIVILEGES ON `BLOGART21`.* TO 'blogArt21_user'@'%' IDENTIFIED BY 'blogArt21_password';;
GRANT ALL PRIVILEGES ON `BLOGART21`.* TO 'blogArt21_user'@'LOCALHOST' IDENTIFIED BY 'blogArt21_password';;


-- Flush / Init all privileges
FLUSH PRIVILEGES;

-- Now we create the Database

-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 13 mars 2020 à 17:17
-- Version du serveur: 5.5.33
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: BLOGART
--
USE BLOGART21;


-- --------------------------------------------------------------------
--
-- Structure de la table ANGLE
--
/*====================================================================*/
/* Table : ANGLE                                                	    */
/*====================================================================*/
create table ANGLE
(
   numAngl       char(8) not null,	-- PK numéro de l'angle
   libAngl       char(60),			   -- nom de l'angle
   numLang       char(8) not null,	-- FK numéro de la langue
   primary key (numAngl)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : ANGLE_FK                                     			       */
/*====================================================================*/
create index ANGLE_FK on ANGLE
(
   numAngl
);


-- --------------------------------------------------------------------
--
-- Structure de la table THEMATIQUE
--
/*====================================================================*/
/* Table : THEMATIQUE                                                 */
/*====================================================================*/
create table THEMATIQUE
(
   numThem   char(8) not null,  -- PK numéro de la thématique
   libThem   char(60),          -- nom de la thèmatique
   numLang   char(8) not null,  -- FK numéro de la langue
   primary key (numThem)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : THEMATIQUE_FK                                              */
/*====================================================================*/
create index THEMATIQUE_FK on THEMATIQUE
(
   NumThem
);


-- --------------------------------------------------------------------
--
-- Structure de la table LANGUE
--
/*====================================================================*/
/* Table : LANGUE                                                     */
/*====================================================================*/
create table LANGUE
(
   numLang   char(8) not null,  -- PK numéro de la langue
   lib1Lang  char(30),          -- Libellé court de la langue
   lib2Lang  char(60),          -- Libellé long de la langue
   numPays   char(4) null,      -- FK sans CIR du code pays de la langue
   primary key (numLang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : LANGUE_FK                                                  */
/*====================================================================*/
create index LANGUE_FK on LANGUE
(
   numLang
);


-- --------------------------------------------------------------------
--
-- Structure de la table PAYS
--
/*====================================================================*/
/* Table : PAYS                                                       */
/*====================================================================*/
create table PAYS
(
   numPays  char(4)      not null,      -- numéro du pays
   cdPays   char(2)      not null,      -- code du pays
   frPays   varchar(255) not null,      -- nom du pays en français
   enPays   varchar(255) default null,  -- nom du pays en anglais
   primary key (numPays)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : PAYS_FK                                                    */
/*====================================================================*/
create index PAYS_FK on PAYS
(
   numPays
);


-- --------------------------------------------------------------------
--
-- Structure de la table MEMBRE
--
/*====================================================================*/
/* Table : MEMBRE                                                     */
/*====================================================================*/
create table MEMBRE
(
   numMemb       int(10) not null auto_increment,   -- PK
   prenomMemb    varchar(70),
   nomMemb       varchar(70),
   pseudoMemb    varchar(70),
   passMemb      varchar(70),
   eMailMemb     varchar(100),
   dtCreaMemb    datetime,
   souvenirMemb  bool,
   accordMemb    bool,
   primary key (numMemb)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : MEMBRE_FK                                                  */
/*====================================================================*/
create index MEMBRE_FK on MEMBRE
(
   numMemb
);


-- --------------------------------------------------------------------
--
-- Structure de la table ARTICLE
--
/*====================================================================*/
/* Table : ARTICLE                                              	    */
/*====================================================================*/
create table ARTICLE
(
   numArt        int(8) not null auto_increment,   -- PK numéro de l'article
   -- Date de création article :	MM/JJ/AAAA
   dtCreArt      datetime,				-- Date de création de l'article
   -- TITRE :			100 caractères
   libTitrArt    char(100),			-- Titre de l'article
   -- CHAPEAU :		500 caractères
   libChapoArt   text(500),			-- Titre du chapeau
   -- PARAGRAPHE 1 :	ACCROCHE : 100 caractères
   libAccrochArt char(100),			-- Accroche du paragraphe 1
   -- PARAGRAPHE 1 :	DÉTAIL : 1200 caractères
   parag1Art     text(1200),			-- Paragraphe 1 du chapeau
   -- SOUS-TITRE 1 :	100 caractères
   libSsTitr1Art char(100),		   -- Titre du sous-titre 1
   -- PARAGRAPHE 2 :	1200 caractères
   parag2Art     text(1200),			-- Paragraphe 2 du sous-titre 2
   -- SOUS-TITRE 2 :	100 caractères
   libSsTitr2Art char(100),		   -- Titre du sous-titre 2
   -- PARAGRAPHE 3 :	1200 caractères
   parag3Art     text(1200),			-- Paragraphe 3
   -- CONCLUSION :	800 caractères
   libConclArt   text(800),			-- Conclusion : Paragraphe de la conclusion
   -- ILLUSTRATION / PHOTO ⇒ URL
   urlPhotArt    char(70),			   -- url de la photo de l'article
   -- FK : Angle, Thématique
   numAngl       char(8) not null,	-- FK numéro de l'angle
   numThem       char(8) not null,	-- FK numéro de la thématique
   primary key (numArt)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : ARTICLE_FK                                     			    */
/*====================================================================*/
create index ARTICLE_FK on ARTICLE
(
   numArt
);


-- --------------------------------------------------------------------
--
-- Structure de la table USER
--
/*====================================================================*/
/* Table : USER                                                 	    */
/*====================================================================*/
create table USER
(
   pseudoUser   char(60) not null,	-- PK login de l'utilisateur
   passUser     char(60) not null,	-- PK password de l'utilisateur
   nomUser      char(60) null,		-- Nom facultatif de l'utilisateur
   prenomUser   char(60) null,		-- Prénom facultatif de l'utilisateur
   eMailUser    char(70) not null,  -- e-mail de l'utilisateur
   idStat       int(5)   not null,  -- FK
   primary key (pseudoUser, passUser)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : USER_FK                                     				    */
/*====================================================================*/
create index USER_FK on USER
(
   pseudoUser,
   passUser
);


-- --------------------------------------------------------------------
--
-- Structure de la table STATUT
--
/*====================================================================*/
/* Table : STATUT                                                 	 */
/*====================================================================*/
create table STATUT
(
   idStat     int(5) not null auto_increment,   -- PK
   libStat    varchar(25),
   primary key (idStat)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : STATUT_FK                                     				 */
/*====================================================================*/
create index STATUT_FK on STATUT
(
   idStat
);


-- --------------------------------------------------------------------
--
-- Structure de la table MOTCLE
--
/*====================================================================*/
/* Table : MOTCLE                                                     */
/*====================================================================*/
create table MOTCLE
(
   numMotCle     int(8)  not null auto_increment,   -- PK
   libMotCle     varchar(60),
   numLang       char(8) not null,    -- FK
   primary key (numMotCle)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : MOTCLE_FK                                                  */
/*====================================================================*/
create index MOTCLE_FK on MOTCLE
(
   numMotCle
);


-- --------------------------------------------------------------------
--
-- Structure de la table MOTCLEARTICLE   (TJ)
--
/*====================================================================*/
/* Table : MOTCLEARTICLE                                              */
/*====================================================================*/
create table MOTCLEARTICLE
(
   numArt       int(8) not null,   -- PK, FK
   numMotCle    int(8) not null,   -- PK, FK
   primary key (numArt, numMotCle)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : MOTCLEARTICLE_FK                                           */
/*====================================================================*/
create index MOTCLEARTICLE_FK on MOTCLEARTICLE
(
   numArt
);

/*====================================================================*/
/* Index : MOTCLEARTICLE2_FK                                          */
/*====================================================================*/
create index MOTCLEARTICLE2_FK on MOTCLEARTICLE
(
   numMotCle
);


-- --------------------------------------------------------------------
--
-- Structure de la table COMMENT
--
/*====================================================================*/
/* Table : COMMENT                                                    */
/*====================================================================*/
create table COMMENT
(
   numSeqCom      int(10)   not null,     -- PK (ident. Relatif)
   numArt         int(8)    not null,     -- PK, FK
   dtCreCom       datetime,               -- Date jour à la création du commentaire
   libCom         text(600) not null,     -- Au moins un caractère :-)
   attModOK       bool default false,     -- Attente visa modération
   affComOK       bool default false,     -- Visible ou Non après modération
   notifComKOAff  text(300) default null, -- commentaire admin si Non Visible après modération
   primary key (numSeqCom, numArt)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : COMMENT_FK                                                 */
/*====================================================================*/
create index COMMENT_FK on COMMENT
(
   numSeqCom,
   numArt
);


-- --------------------------------------------------------------------
--
-- Structure de la table COMMENTPLUS   (TJ)
--
/*====================================================================*/
/* Table : COMMENTPLUS                                                */
/*====================================================================*/
create table COMMENTPLUS
(
   numSeqCom      int(10) not null,  -- PK, FK (ident. Relatif)
   numArt         int(8)  not null,  -- PK, FK
   numSeqComR     int(10) not null,  -- PK, FK (ident. Relatif)
   numArtR        int(8)  not null,  -- PK, FK
   primary key (numSeqCom, numArt, numSeqComR, numArtR)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : COMMENTPLUS_FK                                             */
/*====================================================================*/
create index COMMENTPLUS_FK on COMMENTPLUS
(
   numSeqCom,
   numArt,
   numSeqComR,
   numArtR
);


-- --------------------------------------------------------------------
--
-- Structure de la table LIKEART   (TJ)
--
/*====================================================================*/
/* Table : LIKEART                                                    */
/*====================================================================*/
create table LIKEART
(
   numMemb         int(10) not null,  -- PK, FK
   numArt          int(8)  not null,  -- PK, FK
   likeA           bool,
   primary key (numMemb, numArt)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : LIKEART_FK                                                 */
/*====================================================================*/
create index LIKEART_FK on LIKEART
(
   numMemb,
   numArt
);


-- --------------------------------------------------------------------
--
-- Structure de la table LIKECOM   (TJ)
--
/*====================================================================*/
/* Table : LIKECOM                                                    */
/*====================================================================*/
create table LIKECOM
(
   numMemb         int(10) not null,  -- PK, FK
   numSeqCom       int(10) not null,  -- PK, FK (ident. Relatif)
   numArt          int(8)  not null,  -- PK, FK
   likeC           bool,
   primary key (numMemb, numSeqCom, numArt)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*====================================================================*/
/* Index : LIKECOM_FK                                                 */
/*====================================================================*/
create index LIKECOM_FK on LIKECOM
(
   numMemb,
   numSeqCom,
   numArt
);

-- --------------------------------------------------------------------


-- --------------------------------------------------------------------
-- --------------------------------------------------------------------
--
-- CIR : contraintes pour les tables exportées (ON RESTRICT)
--
-- --------------------------------------------------------------------
-- --------------------------------------------------------------------


-- --------------------------------------------------------------------

alter table ARTICLE add constraint FK_ASSOCIATION_1 foreign key (numAngl)
      references ANGLE (numAngl) on delete restrict on update restrict;

alter table ARTICLE add constraint FK_ASSOCIATION_2 foreign key (numThem)
      references THEMATIQUE (numThem) on delete restrict on update restrict;

alter table ANGLE add constraint FK_ASSOCIATION_3 foreign key (numLang)
      references LANGUE (numLang) on delete restrict on update restrict;

alter table THEMATIQUE add constraint FK_ASSOCIATION_4 foreign key (numLang)
      references LANGUE (numLang) on delete restrict on update restrict;

alter table MOTCLE add constraint FK_ASSOCIATION_5 foreign key (numLang)
      references LANGUE (numLang) on delete restrict on update restrict;

-- --------------------------------------------------------------------

alter table USER add constraint FK_ASSOCIATION_6 foreign key (idStat)
      references STATUT (idStat) on delete restrict on update restrict;

-- --------------------------------------------------------------------

alter table LANGUE add constraint FK_ASSOCIATION_7 foreign key (numPays)
      references PAYS (numPays) on delete restrict on update restrict;

-- --------------------------------------------------------------------

alter table COMMENT add constraint FK_ASSOCIATION_8 foreign key (numArt)
      references ARTICLE (numArt) on delete restrict on update restrict;

-- --------------------------------------------------------------------

alter table COMMENTPLUS add constraint FK_COMMENTPLUS foreign key (numSeqComR, numArtR)
      references COMMENT (numSeqCom, numArt) on delete restrict on update restrict;

alter table COMMENTPLUS add constraint FK_COMMENTPLUS2 foreign key (numSeqCom, numArt)
      references COMMENT (numSeqCom, numArt) on delete restrict on update restrict;

-- --------------------------------------------------------------------

alter table MOTCLEARTICLE add constraint FK_MotCleArt1 foreign key (numMotCle)
      references MOTCLE (numMotCle) on delete restrict on update restrict;

alter table MOTCLEARTICLE add constraint FK_MotCleArt2 foreign key (numArt)
      references ARTICLE (numArt) on delete restrict on update restrict;

-- --------------------------------------------------------------------

alter table LIKEART add constraint FK_LIKEART foreign key (numArt)
      references ARTICLE (numArt) on delete restrict on update restrict;

alter table LIKEART add constraint FK_LIKEART2 foreign key (numMemb)
      references MEMBRE (numMemb) on delete restrict on update restrict;

-- --------------------------------------------------------------------

alter table LIKECOM add constraint FK_LIKECOM foreign key (numSeqCom, numArt)
      references COMMENT (numSeqCom, numArt) on delete restrict on update restrict;

alter table LIKECOM add constraint FK_LIKECOM2 foreign key (numMemb)
      references MEMBRE (numMemb) on delete restrict on update restrict;

-- --------------------------------------------------------------------


-- --------------------------------------------------------------------
-- --------------------------------------------------------------------

