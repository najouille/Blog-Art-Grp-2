<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('./front/includes/commons/headRequired.php') ?>
    <title>Document</title>
    <link rel="stylesheet" href="./front/assets/master.css" /><link rel="stylesheet" href="./front/assets/navbar.css" />
    <link rel="stylesheet" href="./front/assets/connexion.css" />
</head>

<body>
<?php
    include('./front/includes/commons/navbar.php')
    ?>
    <div id="formimg">
        <div id="form">
            <div id="membre">
                <h2>Déjà membre ?</h2>

                <div id="formco">
                    <form>
                        <div class="e-mail">
                        </div>
                        <input type="text" name="e-mail" id="e-mail" placeholder="E-mail" />
                        <br>
                        <div class="e-mail">
                        </div>
                        <input type="text" name="mdp" id="mdp" placeholder="Mot de passe" />
                        <br>
                        <p>Mot de passe oublié ?</p>
                        <button name="button">Se connecter</button>
                </div>

                <h2>Pas encore de compte ?</h2>
                <h3>Rejoignez la communauté dès aujourd’hui !</h3>

                <div>
                    <h3>Accédez à un contenu exclusif</h3>
                    <img src="front/assets/image/icones/star.svg" alt="star icon" />
                </div>

                <div>
                    <h3>Donnez votre avis</h3>
                    <img src="front/assets/image/icones/speech-bubble.svg" alt="email icon" />
                </div>

                <div>
                    <h3>Sauvegardez vos articles favoris</h3>
                    <img src="front/assets/image/icones/like.svg" alt="like icon" />
                </div>

                <div id="formin">
                    <form>
                        <div class="Prénom">
                        </div>
                        <input type="text" name="Prénom" id="Prénom" placeholder="Prénom" />
                        <br>
                        <div class="Nom">
                        </div>
                        <input type="text" name="Nom" id="Nom" placeholder="Nom" />
                        <br>
                        <div class="E-mail">
                        </div>
                        <input type="email" name="E-mail" id="E-mail" placeholder="E-mail" />
                        <br>

                        <div class="Mot de passe">
                        </div>
                        <input type="text" name="Mot de passe" id="mdp" placeholder="Mot de passe" />
                        <br>
                        <div class="Mot de passe">
                        </div>
                        <input type="text" name="Mot de passe" id="confirmmdp" placeholder="Confirmez votre mot de passe" />
                        <br>
                        <div class="date">
                        </div>
                        <input type="text" name="date de naissance" id="date" placeholder="Date de naissance (DD/MM/YYYY)" />
                        <br>

                        <div>
                            <input type="checkbox" id="CGU" name="CGU" checked>
                            <label for="CGU">J’ai lu et accepte les C.G.U.</label>
                        </div>
                        <button name="button">S'inscire</button>
                </div>
            </div>
        </div>

        <div id="img">
            <img src="front/assets/image/appartement.png" alt="appartement" />
        </div>
</body>

</html>

</html>