<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('./front/includes/commons/headRequired.php') ?>
    <title>Document</title>
    <link rel="stylesheet" href="./front/assets/master.css" />
    <link rel="stylesheet" href="./front/assets/navbar.css" />
    <link rel="stylesheet" href="./front/assets/connexion.css" />
    <link rel="stylesheet" href="./front/assets/footer.css" />
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
                        <input class="input-profil1" type="email" name="e-mail" id="e-mail" placeholder="Votre E-mail ..." required>

                        <input class="input-profil1" type="password" name="mdp" id="amdp" minlength="8" placeholder="Votre mot de passe ..." required>

                        <a><button class="button-inscription" type="submit" name="button" href="profile.php">Se connecter</button></a>
                    </div>
                    
                    <a class="lien" href="./mdp.php">Mot de passe oublié ?</a>

                </form>
            </div>

            <h2>Pas encore de compte ?</h2>
            <h3>Rejoignez la communauté dès aujourd’hui !</h3>
            <div class="inscription">
            <form>
                <div class="champ">

                    <div class="Prénom">
                    </div>
                    <input class="input-profil" type="text" name="Prénom" id="Prénom" placeholder="Votre Prénom ..." required>

                    <div class="Nom">
                    </div>
                    <input class="input-profil" type="text" name="Nom" id="Nom" placeholder="Votre Nom ..." required>
                    <br>
                    <div class="E-mail">
                    </div>
                    <input class="input-profil" type="email" name="E-mail" id="E-mail" placeholder="Votre E-mail ..." required>
                    <br>
                    <div class="Mot de passe">
                    </div>
                    <input class="input-profil" type="password" name="Mot de passe" id="mdp" minlength="8" placeholder="Votre Mot de passe ..." required>
                    <br>
                    <div class="Mot de passe">
                    </div>
                    <input class="input-profil" type="password" name="Mot de passe" id="confirmmdp" minlength="8" placeholder="Confirmez votre mot de passe ..." required>
                    <br>
                    <div class="date">
                    </div>
                    <input class="input-profil" type="date" name="date de naissance" id="date" placeholder="" required>
                    <br>
                    </form>
                    <div class="check">
                        <input type="checkbox" id="CGU" name="CGU" required>
                        <label for="CGU">J’ai lu et accepte les <a class="cgulink" href="C.G.U.php" >C.G.U</a></label>
                    </div>
                    <button name="button" type="submit">S'inscrire</button>
                </div>
            
                <div class="right-text-inscription">
                    <div class="allignement">
                        <img src="front/assets/image/icones/star.svg" alt="star icon">
                        <h4 class="inscription">Accédez à un contenu exclusif</h4>
                    </div>

                    <div class="allignement">
                        <img src="front/assets/image/icones/speech-bubble.svg" alt="email icon">
                        <h4 class="inscription">Donnez votre avis</h4>
                    </div>

                    <div class="allignement">
                        <img src="front/assets/image/icones/like.svg" alt="like icon">
                        <h4 class="inscription">Sauvegardez vos articles favoris</h4>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php
    include('./front/includes/commons/footer.php');
    ?>
</body>

</html>

</html>