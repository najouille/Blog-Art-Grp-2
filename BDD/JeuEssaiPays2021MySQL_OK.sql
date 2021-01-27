/*************************************************************************/
/* Blog des articles (BD MySQL) du cours M2203
//
// Création du script de la base de données BLOGART
//
// @Martine Bornerie    Le 23/01/21 12:30:00
//
// nom script : JeuEssaiPays2021MySQL_OK.sql
//
*/
/*************************************************************************/
--
-- Base de données: BLOGART
--
USE BLOGART21;

-- ---------------------------------------------------------------------- --
-- ---------------------------------------------------------------------- --
--
-- Data/tuples de la table PAYS
--
-- (<numPays char(4) not null, cdPays char(2),
-- frPays varchar(255), enPays varchar(255),>)
--
-- ---------------------------------------------------------------------- --
-- ---------------------------------------------------------------------- --

INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('AFGH', 'AF', 'Afghanistan','Afghanistan');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('AFRI', 'ZA', 'Afrique du Sud','South Africa');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ALBA', 'AL', 'Albanie','Albania');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ALGE', 'DZ', 'Algérie','Algeria');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ALLE', 'DE', 'Allemagne','Germany');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ANDO', 'AD', 'Andorre','Andorra');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ANGO', 'AO', 'Angola','Angola');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ANGU', 'AI', 'Anguilla','Anguilla');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ARTA', 'AQ', 'Antarctique','Antarctica');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ANTG', 'AG', 'Antigua-et-Barbuda','Antigua & Barbuda');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ANTI', 'AN', 'Antilles néerlandaises','Netherlands Antilles');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ARAB', 'SA', 'Arabie saoudite','Saudi Arabia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ARGE', 'AR', 'Argentine','Argentina');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ARME', 'AM', 'Arménie','Armenia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ARUB', 'AW', 'Aruba','Aruba');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('AUST', 'AU', 'Australie','Australia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('AUTR', 'AT', 'Autriche','Austria');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('AZER', 'AZ', 'Azerbaïdjan','Azerbaijan');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BENI', 'BJ', 'Bénin','Benin');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BAHA', 'BS', 'Bahamas','Bahamas, The');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BAHR', 'BH', 'Bahreïn','Bahrain');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BANG', 'BD', 'Bangladesh','Bangladesh');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BARB', 'BB', 'Barbade','Barbados');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BELA', 'PW', 'Belau','Palau');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BELG', 'BE', 'Belgique','Belgium');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BELI', 'BZ', 'Belize','Belize');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BERM', 'BM', 'Bermudes','Bermuda');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BHOU', 'BT', 'Bhoutan','Bhutan');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BIEL', 'BY', 'Biélorussie','Belarus');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BIRM', 'MM', 'Birmanie','Myanmar (ex-Burma)');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BOLV', 'BO', 'Bolivie','Bolivia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BOSN', 'BA', 'Bosnie-Herzégovine','Bosnia and Herzegovina');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BOTS', 'BW', 'Botswana','Botswana');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BRES', 'BR', 'Brésil','Brazil');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BRUN', 'BN', 'Brunei','Brunei Darussalam');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BULG', 'BG', 'Bulgarie','Bulgaria');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BURK', 'BF', 'Burkina Faso','Burkina Faso');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BURU', 'BI', 'Burundi','Burundi');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('IVOI', 'CI', 'Côte d\'Ivoire','Ivory Coast (see Cote d\'Ivoire)');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CAMB', 'KH', 'Cambodge','Cambodia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CAME', 'CM', 'Cameroun','Cameroon');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CANA', 'CA', 'Canada','Canada');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CVER', 'CV', 'Cap-Vert','Cape Verde');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CHIL', 'CL', 'Chili','Chile');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CHIN', 'CN', 'Chine','China');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CHYP', 'CY', 'Chypre','Cyprus');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('COLO', 'CO', 'Colombie','Colombia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('COMO', 'KM', 'Comores','Comoros');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CON2', 'CG', 'Congo','Congo');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CNOR', 'KP', 'Corée du Nord','Korea, Demo. People s Rep. of');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CSUD', 'KR', 'Corée du Sud','Korea, (South) Republic of');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('RICA', 'CR', 'Costa Rica','Costa Rica');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CROA', 'HR', 'Croatie','Croatia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CUBA', 'CU', 'Cuba','Cuba');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('DANE', 'DK', 'Danemark','Denmark');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('DJIB', 'DJ', 'Djibouti','Djibouti');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('DOM1', 'DM', 'Dominique','Dominica');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('EGYP', 'EG', 'Égypte','Egypt');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('EMIR', 'AE', 'Émirats arabes unis','United Arab Emirates');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('EQUA', 'EC', 'Équateur','Ecuador');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ERYT', 'ER', 'Érythrée','Eritrea');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ESPA', 'ES', 'Espagne','Spain');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ESTO', 'EE', 'Estonie','Estonia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('USA_', 'US', 'États-Unis','United States');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ETHO', 'ET', 'Éthiopie','Ethiopia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('FINL', 'FI', 'Finlande','Finland');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('FRAN', 'FR', 'France','France');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GEO1', 'GE', 'Géorgie','Georgia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GABO', 'GA', 'Gabon','Gabon');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GAMB', 'GM', 'Gambie','Gambia, the');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GANA', 'GH', 'Ghana','Ghana');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GIBR', 'GI', 'Gibraltar','Gibraltar');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GREC', 'GR', 'Grèce','Greece');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GREN', 'GD', 'Grenade','Grenada');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GROE', 'GL', 'Groenland','Greenland');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GUAD', 'GP', 'Guadeloupe','Guinea, Equatorial');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GUAM', 'GU', 'Guam','Guam');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GUAT', 'GT', 'Guatemala','Guatemala');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GUIN', 'GN', 'Guinée','Guinea');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GUIE', 'GQ', 'Guinée équatoriale','Equatorial Guinea');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GUIB', 'GW', 'Guinée-Bissao','Guinea-Bissau');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GUYA', 'GY', 'Guyana','Guyana');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GUYF', 'GF', 'Guyane française','Guiana, French');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('HAIT', 'HT', 'Haïti','Haiti');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('HOND', 'HN', 'Honduras','Honduras');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('KONG', 'HK', 'Hong Kong','Hong Kong, (China)');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('HONG', 'HU', 'Hongrie','Hungary');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BOUV', 'BV', 'Ile Bouvet','Bouvet Island');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CHRI', 'CX', 'Ile Christmas','Christmas Island');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('NORF', 'NF', 'Ile Norfolk','Norfolk Island');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CAYM', 'KY', 'Iles Cayman','Cayman Islands');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('COOK', 'CK', 'Iles Cook','Cook Islands');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('FERO', 'FO', 'Iles Féroé','Faroe Islands');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('FALK', 'FK', 'Iles Falkland','Falkland Islands (Malvinas)');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('FIDJ', 'FJ', 'Iles Fidji','Fiji');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('GEO2', 'GS', 'Iles Géorgie du Sud et Sandwich du Sud','S. Georgia and S. Sandwich Is.');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('HEAR', 'HM', 'Iles Heard et McDonald','Heard and McDonald Islands');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MARS', 'MH', 'Iles Marshall','Marshall Islands');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('PITC', 'PN', 'Iles Pitcairn','Pitcairn Island');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SALO', 'SB', 'Iles Salomon','Solomon Islands');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SVAL', 'SJ', 'Iles Svalbard et Jan Mayen','Svalbard and Jan Mayen Islands');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TUR1', 'TC', 'Iles Turks-et-Caicos','Turks and Caicos Islands');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('VIEA', 'VI', 'Iles Vierges américaines','Virgin Islands, U.S.');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('VIEB', 'VG', 'Iles Vierges britanniques','Virgin Islands, British');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('COCO', 'CC', 'Iles des Cocos (Keeling)','Cocos (Keeling) Islands');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MINE', 'UM', 'Iles mineures éloignées des États-Unis','US Minor Outlying Islands');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('INDE', 'IN', 'Inde','India');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('INDO', 'ID', 'Indonésie','Indonesia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('IRAN', 'IR', 'Iran','Iran, Islamic Republic of');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('IRAQ', 'IQ', 'Iraq','Iraq');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('IRLA', 'IE', 'Irlande','Ireland');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ISLA', 'IS', 'Islande','Iceland');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ISRA', 'IL', 'Israël','Israel');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ITAL', 'IT', 'Italie','Italy');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('JAMA', 'JM', 'Jamaïque','Jamaica');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('JAPO', 'JP', 'Japon','Japan');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('JORD', 'JO', 'Jordanie','Jordan');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('KAZA', 'KZ', 'Kazakhstan','Kazakhstan');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('KNYA', 'KE', 'Kenya','Kenya');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('KIRG', 'KG', 'Kirghizistan','Kyrgyzstan');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('KIRI', 'KI', 'Kiribati','Kiribati');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('KWEI', 'KW', 'Koweït','Kuwait');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('LAOS', 'LA', 'Laos','Lao People s Democratic Republic');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('LESO', 'LS', 'Lesotho','Lesotho');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('LETT', 'LV', 'Lettonie','Latvia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('LIBA', 'LB', 'Liban','Lebanon');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('LIBE', 'LR', 'Liberia','Liberia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('LIBY', 'LY', 'Libye','Libyan Arab Jamahiriya');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('LIEC', 'LI', 'Liechtenstein','Liechtenstein');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('LITU', 'LT', 'Lituanie','Lithuania');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('LUXE', 'LU', 'Luxembourg','Luxembourg');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MACA', 'MO', 'Macao','Macao, (China)');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MADA', 'MG', 'Madagascar','Madagascar');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MALA', 'MY', 'Malaisie','Malaysia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MALW', 'MW', 'Malawi','Malawi');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MALD', 'MV', 'Maldives','Maldives');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MALI', 'ML', 'Mali','Mali');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MALT', 'MT', 'Malte','Malta');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MARI', 'MP', 'Mariannes du Nord','Northern Mariana Islands');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MARO', 'MA', 'Maroc','Morocco');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MART', 'MQ', 'Martinique','Martinique');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MAUC', 'MU', 'Maurice','Mauritius');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MAUR', 'MR', 'Mauritanie','Mauritania');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MAYO', 'YT', 'Mayotte','Mayotte');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MEXI', 'MX', 'Mexique','Mexico');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MICR', 'FM', 'Micronésie','Micronesia, Federated States of');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MOLD', 'MD', 'Moldavie','Moldova, Republic of');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MONA', 'MC', 'Monaco','Monaco');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MONG', 'MN', 'Mongolie','Mongolia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MONS', 'MS', 'Montserrat','Montserrat');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MOZA', 'MZ', 'Mozambique','Mozambique');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('NEPA', 'NP', 'Népal','Nepal');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('NAMI', 'NA', 'Namibie','Namibia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('NAUR', 'NR', 'Nauru','Nauru');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('NICA', 'NI', 'Nicaragua','Nicaragua');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('NIGE', 'NE', 'Niger','Niger');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('NIGA', 'NG', 'Nigeria','Nigeria');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('NIOU', 'NU', 'Nioué','Niue');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('NORV', 'NO', 'Norvège','Norway');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('NOUC', 'NC', 'Nouvelle-Calédonie','New Caledonia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('NOUZ', 'NZ', 'Nouvelle-Zélande','New Zealand');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('OMAN', 'OM', 'Oman','Oman');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('OUGA', 'UG', 'Ouganda','Uganda');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('OUZE', 'UZ', 'Ouzbékistan','Uzbekistan');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('PERO', 'PE', 'Pérou','Peru');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('PAKI', 'PK', 'Pakistan','Pakistan');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('PANA', 'PA', 'Panama','Panama');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('PAPU', 'PG', 'Papouasie-Nouvelle-Guinée','Papua New Guinea');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('PARA', 'PY', 'Paraguay','Paraguay');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('PBAS', 'NL', 'pays-Bas','Netherlands');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('PHIL', 'PH', 'Philippines','Philippines');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('POLO', 'PL', 'Pologne','Poland');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('POLY', 'PF', 'Polynésie française','French Polynesia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('RICO', 'PR', 'Porto Rico','Puerto Rico');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('PORT', 'PT', 'Portugal','Portugal');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('QATA', 'QA', 'Qatar','Qatar');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CAFR', 'CF', 'République centrafricaine','Central African Republic');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('CON1', 'CD', 'République démocratique du Congo','Congo, Democratic Rep. of the');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('DOM2', 'DO', 'République dominicaine','Dominican Republic');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TCHE', 'CZ', 'République tchèque','Czech Republic');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('REUN', 'RE', 'Réunion','Reunion');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ROUM', 'RO', 'Roumanie','Romania');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ANGL', 'GB', 'Royaume-Uni','United Kingdom');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('RUSS', 'RU', 'Russie','Russia (Russian Federation)');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('RWAN', 'RW', 'Rwanda','Rwanda');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SENE', 'SN', 'Sénégal','Senegal');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SAHA', 'EH', 'Sahara occidental','Western Sahara');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('NIEV', 'KN', 'Saint-Christophe-et-Niévès','Saint Kitts and Nevis');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SMAR', 'SM', 'Saint-Marin','San Marino');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SPIE', 'PM', 'Saint-Pierre-et-Miquelon','Saint Pierre and Miquelon');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SSIE', 'VA', 'Saint-Siège ','Vatican City State (Holy See)');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SVIN', 'VC', 'Saint-Vincent-et-les-Grenadines','Saint Vincent and the Grenadines');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SLN_', 'SH', 'Sainte-Hélène','Saint Helena');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SLUC', 'LC', 'Sainte-Lucie','Saint Lucia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SALV', 'SV', 'Salvador','El Salvador');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SAMO', 'WS', 'Samoa','Samoa');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SAMA', 'AS', 'Samoa américaines','American Samoa');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TOME', 'ST', 'Sao Tomé-et-Principe','Sao Tome and Principe');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SEYC', 'SC', 'Seychelles','Seychelles');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('LEON', 'SL', 'Sierra Leone','Sierra Leone');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SING', 'SG', 'Singapour','Singapore');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SLOV', 'SI', 'Slovénie','Slovenia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SLOQ', 'SK', 'Slovaquie','Slovakia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SOMA', 'SO', 'Somalie','Somalia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SOUD', 'SD', 'Soudan','Sudan');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SRIL', 'LK', 'Sri Lanka','Sri Lanka (ex-Ceilan)');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SUED', 'SE', 'Suède','Sweden');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SUIS', 'CH', 'Suisse','Switzerland');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SURI', 'SR', 'Suriname','Suriname');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SWAZ', 'SZ', 'Swaziland','Swaziland');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('SYRY', 'SY', 'Syrie','Syrian Arab Republic');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TAIW', 'TW', 'Taïwan','Taiwan');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TADJ', 'TJ', 'Tadjikistan','Tajikistan');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TANZ', 'TZ', 'Tanzanie','Tanzania, United Republic of');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TCHA', 'TD', 'Tchad','Chad');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TERR', 'TF', 'Terres australes françaises','French Southern Territories - TF');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('BOIN', 'IO', 'Territoire britannique de l Océan Indien','British Indian Ocean Territory');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('THAI', 'TH', 'Thaïlande','Thailand');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TIMO', 'TL', 'Timor Oriental','Timor-Leste (East Timor)');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TOGO', 'TG', 'Togo','Togo');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TOKE', 'TK', 'Tokélaou','Tokelau');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TONG', 'TO', 'Tonga','Tonga');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TOBA', 'TT', 'Trinité-et-Tobago','Trinidad & Tobago');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TUNI', 'TN', 'Tunisie','Tunisia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TUR2', 'TM', 'Turkménistan','Turkmenistan');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TURQ', 'TR', 'Turquie','Turkey');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('TUVA', 'TV', 'Tuvalu','Tuvalu');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('UKRA', 'UA', 'Ukraine','Ukraine');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('URUG', 'UY', 'Uruguay','Uruguay');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('VANU', 'VU', 'Vanuatu','Vanuatu');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('VENE', 'VE', 'Venezuela','Venezuela');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('VIET', 'VN', 'Viêt Nam','Viet Nam');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('WALI', 'WF', 'Wallis-et-Futuna','Wallis and Futuna');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('YEME', 'YE', 'Yémen','Yemen');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('YOUG', 'YU', 'Yougoslavie','Saint Pierre and Miquelon');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ZAMB', 'ZM', 'Zambie','Zambia');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('ZIMB', 'ZW', 'Zimbabwe','Zimbabwe');
INSERT INTO PAYS (numPays, cdPays, frPays, enPays)
	VALUES ('MACE', 'MK', 'ex-République yougoslave de Macédoine','Macedonia, TFYR');

-- ---------------------------------------------------------------------- --
-- ---------------------------------------------------------------------- --


