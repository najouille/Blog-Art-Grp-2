<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('./front/includes/commons/headRequired.php') ?>
    <title>Document</title>
    <link rel="stylesheet" href="./front/assets/connexion.css" />
</head>

<body>
    <?php
    include('./front/includes/commons/navbar.php')
    ?>
    <div class="parallele">
        <img src="front/assets/image/appartement.png" alt="appartement">
        <div class="forming">
            <h2>Déjà membre ?</h2>
            <div>
                <form>
                    <div class="e-mail connection">
                        <input type="text" name="e-mail" id="e-mail" placeholder="E-mail">

                        <input type="text" name="mdp" id="amdp" placeholder="Mot de passe">

                        <button name="button">Se connecter</button>
                    </div>
                    <p>Mot de passe oublié ?</p>
                </form>
            </div>

            <h2>Pas encore de compte ?</h2>
            <h3>Rejoignez la communauté dès aujourd’hui !</h3>
            <div class="inscription">
                <div class="champ">

                    <div class="Prénom">
                    </div>
                    <input type="text" name="Prénom" id="Prénom" placeholder="Prénom">

                    <div class="Nom">
                    </div>
                    <input type="text" name="Nom" id="Nom" placeholder="Nom">
                    <br>
                    <div class="E-mail">
                    </div>
                    <input type="email" name="E-mail" id="E-mail" placeholder="E-mail">
                    <br>

                    <div class="Mot de passe">
                    </div>
                    <input type="text" name="Mot de passe" id="mdp" placeholder="Mot de passe">
                    <br>
                    <div class="Mot de passe">
                    </div>
                    <input type="text" name="Mot de passe" id="confirmmdp" placeholder="Confirmez votre mot de passe">
                    <br>
                    <div class="date">
                    </div>
                    <input type="text" name="date de naissance" id="date" placeholder="Date de naissance (DD/MM/YYYY)">
                    <br>

                    <div class="check">
                        <input type="checkbox" id="CGU" name="CGU" checked="">
                        <label for="CGU">J’ai lu et accepte les C.G.U.</label>
                    </div>
                    <button name="button">S'inscrire</button>
                </div>
                <div>
                    <div class="allignement">
                        <img src="front/assets/image/icones/star.svg" alt="star icon">
                        <h4>Accédez à un contenu exclusif</h4>
                    </div>

                    <div class="allignement">
                        <img src="front/assets/image/icones/speech-bubble.svg" alt="email icon">
                        <h4>Donnez votre avis</h4>
                    </div>

                    <div class="allignement">
                        <img src="front/assets/image/icones/like.svg" alt="like icon">
                        <h4>Sauvegardez vos articles favoris</h4>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

</html>

</html>