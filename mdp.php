<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('./front/includes/commons/headRequired.php') ?>
    <title>Document</title>
    <link rel="stylesheet" href="./front/assets/master.css" />
    <link rel="stylesheet" href="./front/assets/navbar.css" />
    <link rel="stylesheet" href="./front/assets/mdp.css" />
    <link rel="stylesheet" href="./front/assets/footer.css" />

</head>

<body>
    <?php
    include('./front/includes/commons/navbar.php')
    ?>
    <h2>Mot de passe oublié ?</h2>
    <h3>Renseignez votre adresse mail ci-dessous</h3>

    <div id="formco">
        <form>
            <div class="e-mail">
                <input type="email" name="e-mail" id="e-mail" placeholder="E-mail" />
            </div>
            <button name="button">Valider</button>

            <p>Nous avons bien pris en compte votre demande de réinitialisation de mot de passe. <br>
                Rendez-vous sur votre boîte mail afin poursuivre la démarche. </p>
            <?php
            include('./front/includes/commons/footer.php');
            ?>
</body>