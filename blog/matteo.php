<?php
require_once('../front/assets/vendors/parsedown.php');
$Parsedown = new ParsedownExtraPlugin();
$Parsedown->linkAttributes = function($Text, $Attributes, &$Element, $Internal) {
    if (!$Internal) {
        return [
            'rel' => 'nofollow',
            'target' => '_blank'
        ];
    }
    return [];
};
$numArt = "";
$dtCreArt = "";

///
$libTitrArt = "Le street art, ses origines et son impact mondial";
$libChapoArt = "Découvre les origines du street-art, l’impact de celui-ci dans la ville de Bordeaux, ainsi que les évènements à ne pas manquer.";
$libAccrochArt = "Le street-art est la continuité des premières peintures préhistoriques, c’est le support d'une expression moderne prisée par des artistes de tout horizon.  Découvrez l’émergence de ce mouvement à travers la ville de Bordeaux.";
$parag1Art = "## Les origines du street-art
Le street-art est apparu au Mexique dans les années 1910 suite à la [Révolution Mexicaine](https://baripedia.org/wiki/La_R%C3%A9volution_mexicaine_:_1910_-_1940). Ce mouvement artistique contemporain s’est développé au début du siècle dernier dans l’objectif d'exprimer des revendications sociales, politiques et esthétiques. Ces œuvres qualifiées de [muralisme](https://www.universalis.fr/encyclopedie/muralisme/)d’artistes de rue sont les débuts du street art. Le Mexique est d’ailleurs connu pour ses nombreux artistes et peintures murales présentes dans chaque villes mexicaines. On retrouve aussi des fresques de propagande en Russie du [régime soviétique](https://www.monde-diplomatique.fr/1967/03/FERON/27705), souvent de grande envergure. Cependant, c’est à la fin du 20ème siècle que ce mouvement s’affirme. De par la forte influence américaine, de nombreux subways sont recouvert de “tags” signés par leur auteur souvent dans l’objectif de marquer son territoire. On retrouve notamment [Taki 183](https://www.taki183.net/), un artiste précurseur du tag new yorkais, écrivant son pseudo sur de nombreux murs de Manhattan. On peut également citer [Keith Haring](http://www.artnet.fr/artistes/keith-haring/), un avangardiste du domaine.

C’est à partir de Mai 1968 que le street-art a traversé l’océan Atlantique pour arriver en France. Il fut un moyen de revendiquer des idées politiques. Entre 1980 et 1990, la municipalité corse la législation et traque les street-artistes. Cette manière de s’exprimer à travers les époques, les cultures ainsi que les pays s’est développée, malgré son côté illégal. Ces dernières années, le street-art se démocratise et s'ancre de plus en plus dans nos rues.
";
$libSsTitr1Art = "## Le street-art bordelais";
$parag2Art = "Cette tendance mondiale n’échappe pas à Bordeaux, il existe de nombreux recoins cachés dans les multiples quartiers bordelais. Comme vous le savez, les fresques de street-art sont le plus souvent peintes dans l’illégalité, ce qui rend la discipline insolite. Depuis 2016, la ville de Bordeaux encourage le secteur de l’art urbain en organisant une saison culturelle annuelle dédiée à l’art urbain. Ainsi, une trentaine de fresques ont donc été réalisées, la municipalité a permis à plusieurs artistes d’embellir la métropole bordelaise d’éclats créatifs graffés en toute légalité. Les ruelles, les façades ou encore les murs sont un véritable terrain de jeu pour les artistes qui utilisent la ville comme support de création. Plusieurs associations et projets permettent aux curieux de découvrir des œuvres mises en avant à travers des visites ou des lieux dédiés à ces œuvres.
Le [M.U.R](https://www.bordeaux-tourisme.com/patrimoine-culturel/mur-bordeaux.html). est un tableau à ciel ouvert de 35m² recouvert de multiples couches de peinture au roulement des fresques peintes par des artistes du monde entier. Les œuvres sur ce mur changent tous les mois, l’occasion de découvrir de nouveaux artistes et leurs techniques.
La [base sous-marine](https://www.bassins-lumieres.com/) est  aujourd’hui réaffectée en centre culturel anciennement utilisée pendant la Seconde Guerre mondiale. Ce lieu abrite le plus grand centre d’art numérique au monde, présentant des œuvres d’art contemporain. Certaines façades de l'intérieur de la base sous-marine sont recouvertes de graffitis.";
$libSsTitr2Art = "## Les évènements à Bordeaux";
$parag3Art = "Si vous souhaitez vous imprégner d’une bonne dose de culture street-art, on peut vous conseiller 3 initiatives bordelaises qui sauront vous séduire. Vous avez le choix entre une balade pour découvrir le street-art à vélo, un festival dédié au street-art et une exposition d’art urbain.
Si vous habitez à Bordeaux, vous avez sûrement remarqué que la bicyclette est un moyen de transport très prisé, c'est pourquoi [Emmanuel Moulinier](https://canelesetchocolatines.com/) à décider de créer des visites street-art à vélo dans les ruelles, places, passages secrets et coins insolites de Bordeaux. Le vélo permet ainsi de parcourir plus de distance et donc de voir plus d'œuvres. Cette visite de 2h30, agrémentée de gourmandises sera vous convenir à vous et votre famille. 
Vous pouvez également vous rendre au festival [Shake Well](https://shakewellfest.com/), qui existe depuis 2016 et accueille plus de 5000 visiteurs chaque année. Le festival vous propose des démonstrations de graffeurs, des pièces de théâtre et des expositions diverses. Pendant 3 jours, une centaine de graffeurs tapisse 6.500 m² de murs en friche du quartier [Bassins à flot](https://www.bordeaux-metropole.fr/Grands-projets/Projets-d-amenagements/Projets-urbains/Bassins-a-flot).
Le dernier événement est [“TRANSFERT #6”](https://www.jeanrooble.fr/home/expositions-exhibitions-1/transfert-6/), un collectif street-art situé au Virgin Mégastore de la place Gambetta. Dans ce lieu désaffecté, vous découvrirez un melting pot d'œuvres artistiques de tous genres, aussi bien musicales qu’audiovisuelles. L’ambiance y est underground, l’entrée est comme dans une boite de nuit, mais vous y trouverez des œuvres grandeur nature.";
$libConclArt = "";
///
$urlPhotArt = "";
$urlPhotArt = "";
$numAngl = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../front/includes/commons/headRequired.php') ?>
    <link rel="stylesheet" href="../front/assets/master.css" />
    <link rel="stylesheet" href="../front/assets/matteo.css" />
    <link rel="stylesheet" href="../front/assets/navbar.css" />
    <link rel="stylesheet" href="../front/assets/footer.css" />
    <link rel="stylesheet" href="../front/assets/commentaire.css" />
</head>

<body class='style'>
    <?php include('../front/includes/commons/navbar.php') ?>
    <div class="conteneur-principal">
        <h1>Le street art, ses origines et<br>son impact mondial</h1>
        <p class="paragraph-start">
            <?php
            echo $Parsedown->line($libChapoArt);
            ?>
        </p>
        <div class="contenant-tag-blog">
            <div class='conteneurblog'>
                <span class='tag'>
                    urbain
                </span>
                <span class='tag'>
                    photographie
                </span>
                <span class='tag'>
                    évènement
                </span>
                <span class='tag'>
                    art
                </span>
            </div>
            <img class="imgstreet" src="../front/assets/image/DSCF3976 (1).jpg" alt="">
        </div>
        <div class="maxiconteneurintro">
            <div class="conteneurintro">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.9269 16.9666C16.7791 16.8708 16.5994 16.8373 16.427 16.8735C16.2546 16.9098 16.1036 17.0127 16.0069 17.16C15.0669 18.6 13.3402 20.3666 11.8002 20.96C10.2602 21.5533 9.05352 21.34 8.57352 20.96C8.36686 20.78 7.82686 20.2933 8.28686 18.6333C8.59352 17.5266 10.5002 12.3133 10.9535 11.0466L9.50019 11.2333C9.04019 12.4733 7.30686 17.1266 6.99352 18.2866C6.54019 19.9466 6.76686 21.1533 7.72019 21.9933C8.3863 22.4606 9.18706 22.6971 10.0002 22.6666C10.7892 22.6552 11.5692 22.497 12.3002 22.2C14.1602 21.4733 16.1135 19.4533 17.1402 17.8866C17.1867 17.8123 17.2181 17.7294 17.2326 17.6429C17.2471 17.5564 17.2443 17.4678 17.2245 17.3823C17.2047 17.2969 17.1682 17.2162 17.1171 17.1448C17.066 17.0735 17.0014 17.0129 16.9269 16.9666Z" fill="#FFEE32" />
                    <path d="M12.8672 7.33338C13.4605 7.33338 14.0406 7.15743 14.5339 6.82778C15.0272 6.49814 15.4118 6.0296 15.6388 5.48143C15.8659 4.93325 15.9253 4.33005 15.8095 3.7481C15.6938 3.16616 15.4081 2.63161 14.9885 2.21205C14.569 1.7925 14.0344 1.50678 13.4525 1.39102C12.8705 1.27526 12.2673 1.33467 11.7191 1.56174C11.171 1.7888 10.7024 2.17332 10.3728 2.66666C10.0431 3.16001 9.86719 3.74003 9.86719 4.33338C9.86719 5.12902 10.1833 5.89209 10.7459 6.4547C11.3085 7.0173 12.0715 7.33338 12.8672 7.33338ZM12.8672 2.66671C13.1968 2.66671 13.5191 2.76446 13.7931 2.94759C14.0672 3.13073 14.2808 3.39103 14.407 3.69557C14.5331 4.00011 14.5661 4.33522 14.5018 4.65853C14.4375 4.98183 14.2788 5.2788 14.0457 5.51189C13.8126 5.74497 13.5156 5.90371 13.1923 5.96802C12.869 6.03233 12.5339 5.99932 12.2294 5.87317C11.9248 5.74703 11.6645 5.53341 11.4814 5.25933C11.2983 4.98524 11.2005 4.66301 11.2005 4.33338C11.2005 3.89135 11.3761 3.46742 11.6887 3.15486C12.0012 2.8423 12.4252 2.66671 12.8672 2.66671Z" fill="#FFEE32" />
                    <path d="M7.87337 9.99996C7.91337 9.99996 12.0534 9.4533 13.0267 9.3333C13.46 9.26663 13.7867 9.3333 13.8934 9.4333C14 9.5333 14.0334 9.96663 13.8467 10.5533C13.44 11.7933 11.3867 17.8866 10.7867 19.6933C11.08 19.6331 11.3677 19.5484 11.6467 19.44C11.9136 19.3296 12.1702 19.1957 12.4134 19.04C13.2334 16.6666 14.7667 12.0666 15.1134 11.0133C15.46 9.95996 15.3734 9.15996 14.9134 8.6133C14.651 8.34723 14.3225 8.15576 13.9616 8.05853C13.6008 7.96129 13.2206 7.96179 12.86 8.05996C11.9067 8.15996 7.88004 8.68663 7.70671 8.72663C7.5299 8.74962 7.36946 8.8419 7.26069 8.98318C7.15191 9.12445 7.10372 9.30315 7.12671 9.47996C7.14969 9.65678 7.24197 9.81721 7.38325 9.92598C7.52453 10.0348 7.70323 10.0829 7.88004 10.06L7.87337 9.99996Z" fill="#FFEE32" />
                </svg>
                <h3>Introduction</h3>

            </div>
            <h4><?php echo $Parsedown->line($libAccrochArt);?></h4>
            <!-- <h4>Le street-art est la continuité des premières <span class="lien"> peinture préhistoriques </span>, c’est le support d'une expression moderne prisée par des artistes de tout horizon. Découvrez l’émergence de ce mouvement à travers la ville de Bordeaux.</h4> -->
        </div>
        <?php
        echo $Parsedown->text($parag1Art);
        echo $Parsedown->text($libSsTitr1Art);
        echo $Parsedown->text($parag2Art);
        echo $Parsedown->text($libSsTitr2Art);
        echo $Parsedown->text($parag3Art);
        ?>
        
       
        <p class="date">Le 11/02/2021</p>
    </div>


</body>
<?php 
include('../commentaire.php');
include('../front/includes/commons/footer.php');
?>

</html>