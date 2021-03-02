REPLACE INTO `angle` (`numAngl`, `libAngl`, `numLang`)
VALUES
    ('ANGL0001', 'Street-Art', 'FRAN01');

REPLACE INTO `motcle` (`numMotCle`, `libMotCle`, `numLang`)
VALUES
    (100, 'architecture', 'FRAN01'),
    (101, 'urbain', 'FRAN01'),
    (102, 'art', 'FRAN01'),
    (103, 'évènement', 'FRAN01'),
    (104, 'insolite', 'FRAN01'),
    (105, 'street-art  ', 'FRAN01'),
    (106, 'photographie', 'FRAN01');

REPLACE INTO `article` (
    `numArt`,
    `dtCreArt`,
    `libTitrArt`,
    `libChapoArt`,
    `libAccrochArt`,
    `parag1Art`,
    `libSsTitr1Art`,
    `parag2Art`,
    `libSsTitr2Art`,
    `parag3Art`,
    `libConclArt`,
    `urlPhotArt`,
    `numAngl`,
    `numThem`
)
VALUES
    (
        '15',
        '2021-03-02 10:53:41',
        'Le street art, ses origines et son impact mondial',
        'Découvre les origines du street-art, l’impact de celui-ci dans la ville de Bordeaux, ainsi que les évènements à ne pas manquer.',
        'Le street-art est la continuité des premières peintures préhistoriques, c’est le support d\'une expression moderne prisée par des artistes de tout horizon. Découvrez l’émergence de ce mouvement à travers la ville de Bordeaux.',
        '## Les origines du street-art\r\nLe street-art est apparu au Mexique dans les années 1910 suite à la [Révolution Mexicaine](https://baripedia.org/wiki/La_R%C3%A9volution_mexicaine_:_1910_-_1940). Ce mouvement artistique contemporain s’est développé au début du siècle dernier dans l’objectif d\'exprimer des revendications sociales, politiques et esthétiques. Ces œuvres qualifiées de [muralisme](https://www.universalis.fr/encyclopedie/muralisme/)d’artistes de rue sont les débuts du street art. Le Mexique est d’ailleurs connu pour ses nombreux artistes et peintures murales présentes dans chaque villes mexicaines. On retrouve aussi des fresques de propagande en Russie du [régime soviétique](https://www.monde-diplomatique.fr/1967/03/FERON/27705), souvent de grande envergure. Cependant, c’est à la fin du 20ème siècle que ce mouvement s’affirme. De par la forte influence américaine, de nombreux subways sont recouvert de “tags” signés par leur auteur souvent dans l’objectif de marquer son territoire. On retrouve notamment [Taki 183](https://www.taki183.net/), un artiste précurseur du tag new yorkais, écrivant son pseudo sur de nombreux murs de Manhattan. On peut également citer [Keith Haring](http://www.artnet.fr/artistes/keith-haring/), un avangardiste du domaine.\r\n\r\nC’est à partir de Mai 1968 que le street-art a traversé l’océan Atlantique pour arriver en France. Il fut un moyen de revendiquer des idées politiques. Entre 1980 et 1990, la municipalité corse la législation et traque les street-artistes. Cette manière de s’exprimer à travers les époques, les cultures ainsi que les pays s’est développée, malgré son côté illégal. Ces dernières années, le street-art se démocratise et s\'ancre de plus en plus dans nos rues.',
        '## Le street-art bordelais',
        'Cette tendance mondiale n’échappe pas à Bordeaux, il existe de nombreux recoins cachés dans les multiples quartiers bordelais. Comme vous le savez, les fresques de street-art sont le plus souvent peintes dans l’illégalité, ce qui rend la discipline insolite. Depuis 2016, la ville de Bordeaux encourage le secteur de l’art urbain en organisant une saison culturelle annuelle dédiée à l’art urbain. Ainsi, une trentaine de fresques ont donc été réalisées, la municipalité a permis à plusieurs artistes d’embellir la métropole bordelaise d’éclats créatifs graffés en toute légalité. Les ruelles, les façades ou encore les murs sont un véritable terrain de jeu pour les artistes qui utilisent la ville comme support de création. Plusieurs associations et projets permettent aux curieux de découvrir des œuvres mises en avant à travers des visites ou des lieux dédiés à ces œuvres.\r\nLe [M.U.R](https://www.bordeaux-tourisme.com/patrimoine-culturel/mur-bordeaux.html). est un tableau à ciel ouvert de 35m² recouvert de multiples couches de peinture au roulement des fresques peintes par des artistes du monde entier. Les œuvres sur ce mur changent tous les mois, l’occasion de découvrir de nouveaux artistes et leurs techniques.\r\nLa [base sous-marine](https://www.bassins-lumieres.com/) est aujourd’hui réaffectée en centre culturel anciennement utilisée pendant la Seconde Guerre mondiale. Ce lieu abrite le plus grand centre d’art numérique au monde, présentant des œuvres d’art contemporain. Certaines façades de l\'intérieur de la base sous-marine sont recouvertes de graffitis.',
        '## Les évènements à Bordeaux',
        'Si vous souhaitez vous imprégner d’une bonne dose de culture street-art, on peut vous conseiller 3 initiatives bordelaises qui sauront vous séduire. Vous avez le choix entre une balade pour découvrir le street-art à vélo, un festival dédié au street-art et une exposition d’art urbain.\r\nSi vous habitez à Bordeaux, vous avez sûrement remarqué que la bicyclette est un moyen de transport très prisé, c\'est pourquoi [Emmanuel Moulinier](https://canelesetchocolatines.com/) à décider de créer des visites street-art à vélo dans les ruelles, places, passages secrets et coins insolites de Bordeaux. Le vélo permet ainsi de parcourir plus de distance et donc de voir plus d\'œuvres. Cette visite de 2h30, agrémentée de gourmandises sera vous convenir à vous et votre famille. \r\nVous pouvez également vous rendre au festival [Shake Well](https://shakewellfest.com/), qui existe depuis 2016 et accueille plus de 5000 visiteurs chaque année. Le festival vous propose des démonstrations de graffeurs, des pièces de théâtre et des expositions diverses. Pendant 3 jours, une centaine de graffeurs tapisse 6.500 m² de murs en friche du quartier [Bassins à flot](https://www.bordeaux-metropole.fr/Grands-projets/Projets-d-amenagements/Projets-urbains/Bassins-a-flot).\r\nLe dernier événement est [“TRANSFERT #6”](https://www.jeanrooble.fr/home/expositions-exhibitions-1/transfert-6/), un collectif street-art situé au Virgin Mégastore de la place Gambetta. Dans ce lieu désaffecté, vous découvrirez un melting pot d\'œuvres artistiques de tous genres, aussi bien musicales qu’audiovisuelles. L’ambiance y est underground, l’entrée est comme dans une boite de nuit, mais vous y trouverez des œuvres grandeur nature.',
        NULL,
        NULL,
        'ANGL0001',
        'THE0101'
    );

REPLACE INTO `article` (
    `numArt`,
    `dtCreArt`,
    `libTitrArt`,
    `libChapoArt`,
    `libAccrochArt`,
    `parag1Art`,
    `libSsTitr1Art`,
    `parag2Art`,
    `libSsTitr2Art`,
    `parag3Art`,
    `libConclArt`,
    `urlPhotArt`,
    `numAngl`,
    `numThem`
)
VALUES
    (
        '16',
        '2021-03-02 10:53:41',
        'Portrait de Frédéric Ducos, photographe bordelais',
        'En 2014, [Frédéric Ducos](https://fredericducos.com) a choisi de quitter le milieu du vin pour rejoindre celui de la\r\nphotographie. Une reconversion, on peut le dire, réussie ! En effet,\r\nquelques années plus tard, il remporte le [Umbra International Photography Awards](https://www.umbrawards.com/), un concours de renommée mondiale. Pourtant, à première vue, le pari\r\nétait risqué. N’ayant jamais touché à un appareil, Frédéric a pris ses\r\npremiers cours de photographie sur la place de la Bourse à Bordeaux.\r\nCe fut un réel déclic qui lui a donné envie de se lancer pleinement\r\ndans le domaine. Un an et demi après, il s’installe en tant\r\nqu’artiste-photographe. Aujourd’hui, âgé de 44 ans, il vit de sa\r\npassion.',
        '\"## “La photographie est l’expression d’émotions par la recherche d’un certain minimalisme”',
        '### Le désir de créer et de partager\r\n\r\n  Les périodes creuses de la vie ont parfois leurs avantages. Celle de\r\n  Frédéric Ducos lui aura permis de se rendre compte d’une chose :\r\n  l’importance de créer. C’est un véritable tremplin de motivation qui\r\n  va le pousser à se lancer dans la photographie à plein temps. Un\r\n  milieu qu’il nous décrit comme emprunt de diversité et de possibilités\r\n  artistiques. En effet, on peut divaguer entre la photo d’art, la\r\n  publicité et bien d’autres domaines. Ce moyen d’expression offre\r\n  également la possibilité de rencontrer du monde et ainsi de partager\r\n  sa passion, de la pluraliser.\r\n\r\n  Très vite, la photographie urbaine a pris une grande place dans sa vie\r\n  artistique. C’est à la suite de plusieurs voyages (en Espagne\r\n  notamment) qu’il se rend compte de la beauté de l’architecture. Ces\r\n  éléments géométriques, omniprésents dans nos villes, sont ainsi\r\n  devenus une obsession pour le photographe. Il nous confie d’ailleurs\r\n  passer beaucoup de temps à étudier les angles, les lignes ou encore\r\n  les perspectives. Capturer l’aspect géométrique pour en retirer une\r\n  émotion lui parle beaucoup.\r\n\r\n  Bordeaux devient le terrain d’entraînement du photographe même si,\r\n  dit-il, cette ville est assez difficile à photographier. La fusion\r\n  entre l’ancien et le moderne mêle beaucoup de formes différentes et\r\n  complexes. Il finira tout de même par choisir son quartier de\r\n  prédilection : la place de la Bourse et les anciens bâtiments classés\r\n  à l’[UNESCO](https://whc.unesco.org/fr/list/1256/) qui l’entourent. Le tramway offre également l’occasion de mêler\r\n  l’architecture à la vie quotidienne bordelaise.',
        '### La démarche artistique : capturer l’instant présent',
        'Marcher. Découvrir. Ne rien prévoir. Telle est la philosophie qui\r\nguide Frédéric Ducos. Ce photographe spécialisé dans la photographie\r\nurbaine ne se pose pas de questions. Il part à la découverte de villes\r\ntoujours plus intéressantes d’un point de vue artistique et “parfois\r\nles villes qui intéressent ne sont pas celles que l’on croit’’.\r\nExplorer la vie telle qu’elle l’est, observer le monde changer et\r\ncapturer les instants d’exception… C’est le processus de réflexion\r\nadopté par le photographe. En effet, Frédéric cherche à se rapprocher\r\nde l\'œil du visiteur lambda et soutient que l’inspiration vient\r\nsouvent lors d’une première rencontre avec l’endroit dans lequel il se\r\ntrouve. Peu importe la météo, ce photographe trouve toujours de\r\nnouvelles inspirations notamment en jouant avec les motifs qui forment\r\nle ciel en constante évolution.\r\n\r\n‘’Dans la photo, mon état d’esprit est de ne rien forcer, je suis\r\nobservateur, je me balade et je vois ce qui sort.’’\r\n\r\nL’utilisation d’un seul objectif (28-300 mm) lui permet une grande\r\npolyvalence, ce n’est pas l’idéal en termes de qualité nous a-t-il\r\nconfié, mais cela augmente grandement les possibilités de prises de\r\nvue. De plus, l’utilisation d’un tel objectif diminue son encombrement\r\net augmente sa mobilité à travers les villes.',
        '### Un minimalisme au service de l’émotion',
        'Frédéric Ducos est continuellement à la recherche d’une identité\r\nforte. Selon lui, l’un des buts de la photographie est d\'arriver à se\r\ndémarquer pour ne pas tomber dans le traditionnel. Sa ligne de\r\nconduite est ainsi d’exprimer une vision conceptuelle et poétique du\r\nmonde à travers un style unique et reconnaissable. Pour cela,\r\nl’artiste nous confie ses secrets dans une interview qu’il nous a\r\naccordé.\r\n\r\n“Selon moi, la photographie est l’expression d’émotions par la\r\nrecherche d’un certain minimalisme. Moins il y a d’informations et\r\nplus la photo est forte.”\r\n\r\nIl suffit de contempler les clichés du photographe pour s’apercevoir\r\nde l’importance du noir et blanc dans son identité visuelle. Alors\r\npourquoi utiliser ce procédé ? Cela lui permet de rajouter du grain,\r\ndu flou ou encore de travailler la texture sans pour autant surcharger\r\nla photo. L’allègement de l’image est donc à privilégier. Dans la\r\nphoto d’art, laisser place à l’imagination est primordial. Le noir et\r\nblanc pousse à réfléchir à cette problématique et améliore la\r\nlisibilité tout en apportant un apportant une touche artistique. On se\r\npositionne sur un élément simple pour exprimer un maximum\r\nd’informations. La couleur n’a de l’importance que si elle apporte\r\nquelque chose. Cet état d’esprit conforte ce qui est mentionné plus\r\nhaut. Par ce minimalisme au service de l’émotion, Frédéric Ducos\r\nretranscrit à merveille l’instant présent. Il pousse à l’imagination\r\net à la réflexion.',
        'En constante recherche d’équilibre artistique, Frédéric Ducos manipule\r\nà la perfection nos sens. Entre beauté visuelle, conceptualisme et\r\nimagination, ses photographies expriment les émotions de l’instant\r\nprésent. Parti de rien, l’artiste est aujourd’hui reconnu mondialement\r\npour son talent et sa personnalité. Cependant, il ne compte pas en\r\nrester là : son objectif est de collaborer plus grandement avec les\r\nmarques et ainsi d’adapter ses connaissances de la photographie au\r\nmonde du commerce.',
        NULL,
        'ANGL0001',
        'THE0102'
    );

REPLACE INTO `motclearticle` (`numArt`, `numMotCle`)
VALUES
    ('16', '101'),
    ('16', '100'),
    ('16', '102'),
    ('16', '106'),
    ('15', '101'),
    ('15', '105'),
    ('15', '103'),
    ('15', '102');