<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./front/includes/commons/headRequired.php'); ?>
    <link rel="stylesheet" href="./front/assets/commentaire.css">
</head>

<body class='style'>
    <div class="conteneur-commentaire">
        <div class="conteneur-profil">
            <img src="./front/assets/image/Ellipse 3.png" alt="">
            <span class="nom">Lisa</span>
        </div>
        <div>
            <div class="comment">

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accumsan risus facilisi tellus ultricies volutpat tempus ridiculus laoreet. Velit sed lobortis dignissim elit, at urna cursus tellus. Leo faucibus morbi tempor, lacus id. Diam commodo ut euismod tempus facilisis mi leo.</p>
            </div>
            <div class="description">
                <div class="time">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="12" cy="12" r="9" />
                        <polyline points="12 7 12 12 15 15" />
                    </svg>
                    <span class="sous-titre-comment">Il y a 30min</span>
                </div>
                <div class="interaction">
                    <span class="sous-titre-comment">Masquer les réponses</span>
                    <div class="interaction-button">

                        <span class="number">3</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="30" height="30" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <div class="interaction-button">

                        <span class="number ">5</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
                            <!-- <line x1="12" y1="12" x2="12" y2="12.01" />
                        <line x1="8" y1="12" x2="8" y2="12.01" />
                        <line x1="16" y1="12" x2="16" y2="12.01" /> -->
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>