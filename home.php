<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("./front/includes/commons/headRequired.php"); ?>
  <title>Document</title>
  <script>
    document.documentElement.className = "js";
    var supportsCssVars = function() {
      var e,
        t = document.createElement("style");
      return (
        (t.innerHTML = "root: { --tmp-var: bold; }"),
        document.head.appendChild(t),
        (e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)"))),
        t.parentNode.removeChild(t),
        e
      );
    };
    supportsCssVars() || alert("Please view this page in a modern browser that supports CSS Variables.");
  </script>
  <link rel="stylesheet" href="./front/assets/tilescroll/tilescroll-home.css" />
  <link rel="stylesheet" href="./front/assets/master.css" />
  <link rel="stylesheet" href="./front/assets/navbar.css" />
  <link rel="stylesheet" href="./front/assets/footer.css" />
  <link rel="stylesheet" href="./front/assets/home.css" />
  <link rel="stylesheet" href="./front/assets/footer.css" />

</head>

<body data-scroll-container>
  <?php
  include('./front/includes/commons/navbar.php')
  ?>

  <main>
  <div class="cookies">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.7328 12.225C29.6569 11.8219 29.3297 11.5163 28.9228 11.4675C28.515 11.4188 28.1259 11.6391 27.9572 12.0131C27.66 12.6694 27.0075 13.1259 26.2509 13.125C25.4119 13.1269 24.7031 12.5606 24.4669 11.7834C24.3244 11.3091 23.8369 11.0278 23.355 11.1403C23.0588 11.2097 22.7784 11.25 22.5 11.25C20.4347 11.2463 18.7537 9.56531 18.75 7.5C18.75 7.22156 18.7903 6.94125 18.8597 6.64594C18.9731 6.16406 18.6909 5.67562 18.2166 5.53312C17.4394 5.29781 16.8731 4.58906 16.875 3.75C16.8741 2.9925 17.3306 2.34094 17.9869 2.04375C18.3609 1.875 18.5812 1.485 18.5325 1.07812C18.4837 0.670312 18.1781 0.343125 17.775 0.267188C16.8806 0.099375 15.9544 0 15 0C6.72563 0.001875 0.001875 6.72563 0 15C0.001875 23.2744 6.72563 29.9981 15 30C23.2744 29.9981 29.9981 23.2744 30 15C30 14.0456 29.9006 13.1194 29.7328 12.225ZM24.2766 24.2766C21.8962 26.655 18.6206 28.125 15 28.125C11.3794 28.125 8.10375 26.655 5.72344 24.2766C3.345 21.8962 1.875 18.6206 1.875 15C1.875 11.3794 3.345 8.10375 5.72344 5.72344C8.10375 3.345 11.3794 1.875 15 1.875C15.1687 1.875 15.3337 1.89281 15.5016 1.90031C15.1884 2.44594 15.0009 3.07406 15 3.75C15.0019 5.14969 15.7781 6.34969 16.9097 6.99C16.8919 7.15687 16.875 7.32375 16.875 7.5C16.8769 10.6041 19.3959 13.1231 22.5 13.125C22.6763 13.125 22.8431 13.1081 23.01 13.0903C23.6503 14.2209 24.8494 14.9981 26.25 15C26.9259 14.9991 27.5541 14.8116 28.0997 14.4984C28.1072 14.6653 28.125 14.8313 28.125 15C28.125 18.6206 26.655 21.8962 24.2766 24.2766Z" fill="white"/>
                <path d="M11.25 9.375C12.2855 9.375 13.125 8.53553 13.125 7.5C13.125 6.46447 12.2855 5.625 11.25 5.625C10.2145 5.625 9.375 6.46447 9.375 7.5C9.375 8.53553 10.2145 9.375 11.25 9.375Z" fill="white"/>
                <path d="M7.5 16.875C8.53553 16.875 9.375 16.0355 9.375 15C9.375 13.9645 8.53553 13.125 7.5 13.125C6.46447 13.125 5.625 13.9645 5.625 15C5.625 16.0355 6.46447 16.875 7.5 16.875Z" fill="white"/>
                <path d="M16.875 24.375C17.9105 24.375 18.75 23.5355 18.75 22.5C18.75 21.4645 17.9105 20.625 16.875 20.625C15.8395 20.625 15 21.4645 15 22.5C15 23.5355 15.8395 24.375 16.875 24.375Z" fill="white"/>
                <path d="M15.9375 16.875C16.4553 16.875 16.875 16.4553 16.875 15.9375C16.875 15.4197 16.4553 15 15.9375 15C15.4197 15 15 15.4197 15 15.9375C15 16.4553 15.4197 16.875 15.9375 16.875Z" fill="white"/>
                <path d="M23.4375 20.625C23.9553 20.625 24.375 20.2053 24.375 19.6875C24.375 19.1697 23.9553 18.75 23.4375 18.75C22.9197 18.75 22.5 19.1697 22.5 19.6875C22.5 20.2053 22.9197 20.625 23.4375 20.625Z" fill="white"/>
                <path d="M10.3125 22.5C10.8303 22.5 11.25 22.0803 11.25 21.5625C11.25 21.0447 10.8303 20.625 10.3125 20.625C9.79473 20.625 9.375 21.0447 9.375 21.5625C9.375 22.0803 9.79473 22.5 10.3125 22.5Z" fill="white"/>
                </svg>
            <span class="texte">
                Notre site utilise des cookies afin de personnaliser ton expérience.
            </span>
            <div class="modalBtn">
                <a href="#" id="refuser">Refuser</a>
                <a href="#" id="accepter">Accepter</a>
            </div>
        </div>
    <section class="tiles tiles--rotated tilescroll-container" id="grid2">
      <div class="hero-container">
        <div class="hero-text">

          <h1>L'urbain et l'art</h1>
          <p>La ville offre un paysage en constante évolution, changeant sans cesse au grès des saisons et des modes. A travers la métropole bordelaise, partez à la rencontre de cet art et découvrez ses trésors cachés. </p>
          <div class="hero-nav">
            <a href="">Accueil</a>
            <a href="./blog/index.php">Blog</a>
            <a href="./galerie/index.php">galerie</a>
          </div>
          <div class="hero-back">

          </div>
        </div>
      </div>
      <div class="tiles__wrap">
        <div class="tiles__line pouched" data-scroll data-scroll-speed="1" data-scroll-target="#grid2" data-scroll-offset="10" data-scroll-direction="horizontal">

          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/15.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/17.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/13.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/14.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/16.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/18.webp')"></div>
        </div>
        <div class="tiles__line" data-scroll data-scroll-speed="-1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/7.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/8.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/9.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/10.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/11.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/12.webp')"></div>
        </div>
        <div class="tiles__line pouched" data-scroll data-scroll-speed="1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/1.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/2.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/3.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/4.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/5.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/6.webp')"></div>

        </div>
        <div class="tiles__line" data-scroll data-scroll-speed="-1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/19.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/20.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/21.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/22.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/23.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/24.webp')"></div>
        </div>
        <div class="tiles__line pouched" data-scroll data-scroll-speed="1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/25.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/26.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/27.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/28.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/29.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/30.webp')"></div>
        </div>
        <div class="tiles__line" data-scroll data-scroll-speed="-1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/1.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/2.webp')"></div>

          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/8.webp')"></div>

          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/19.webp')"></div>


          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/5.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/6.webp')"></div>
        </div>
        <div class="tiles__line pouched" data-scroll data-scroll-speed="1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/3.webp')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/4.webp')"></div>

          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
        </div>
        <div class="tiles__line" data-scroll data-scroll-speed="-1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>

          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/out/21.webp')"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
        </div>

      </div>
    </section>


  </main>

  <section class="discover-text">
    <h2>Découvrez notre projet !</h2>
    <h3>La ville, terrain de jeu artistique</h3>
    <p class="presentation">Etudiants en DUT MMI (Métiers du Multimédia et de L’internet) à l’IUT Bordeaux Montaigne, nous vous présentons ce blog, né de 3 semaines de travail. En effet, à l’occasion de l’atelier “Blog’Art 2021”, nous avons conçu ce blog dans son intégralité. Vous y découvrirez de nombreux articles liés à l’art urbain et apprendrez les modes de réflexions de photographes, street-artistes, sculpteurs et bien plus encore. Grâce à une interface que nous souhaitons simple et agréable, nous espérons que vous prendrez du plaisir à acquérir de nombreuses connaissances liées à notre ville, Bordeaux.</p>
  </section>

  <section class="blogpreview">
    <h2>Notre blog</h2>
    <div class="blog-preview-container">
      <a href="./blog/matteo.php" class="streetart">
        <img src="./front/assets/image/trumpetist.png" alt="trumpetist" width="160" />
        <div class="tagtxt">
          <span class="tag">
            street-art
          </span>
          <h4>Le street-art à Bordeaux, un milieu des plus tendances</h4>
          <p>
            Vous apprendrez ici beaucoup sur l'origine du street-art, son application à Bordeaux ainsi que les
            nombreux événements organisés autour de cet art.
          </p>
        </div>
      </a>
      <a href="portrait.html" class="streetart">
        <img src="./front/assets/image/portraitfredericducos.png" alt="frederic ducos" width="160" />
        <div class="tagtxt">
          <span class="tag">
            photographie
          </span>
          <h4>Portrait de Frédéric Ducos, photographe bordelais</h4>
          <p>
            Dans cet article, vous découvrirez le parcours d'un photographe parti de rien qui, aujourd'hui, cotoie les plus grands.
          </p>
        </div>
      </a>
      <a href="./insolites.php" class="streetart">
        <img src="./front/assets/image/meca.png" alt="meca" width="160" />
        <div class="tagtxt">
          <span class="tag">
            insolite
          </span>
          <h4>3 lieux insolites à découvrir absolument</h4>
          <p>
            Bordeaux regorge de trésors cachés. Nous vous livrons dans cet article trois de ces derniers.
          </p>
        </div>
      </a>
      <div class="streetart more">
        <div class="button">
          <a href="./blog/index.php" id="plus">Voir plus d'articles</a>
        </div>
        <img src="./front/assets/image/visage.png" alt="visage street-art" width="160" />
        <div class="tagtxt">
          <span class="tag">
            street-art
          </span>
          <h4>Le street-art à Bordeaux, un milieu des plus tendances</h4>
          <p>
            Vous apprendrez ici beaucoup sur l'origine du street-art, son application à Bordeaux ainsi que les
            nombreux événements organisés autour de cet art.
          </p>
        </div>
  </section>
  <section class="galerie">
    <h2>Notre galerie</h2>
    <div class="grille">
      <img src="./front/assets/image/pellegrin.jpg" alt="pellegrin" id="pellegrin" />
      <img src="./front/assets/image/comedie.jpg" alt="comedie" id="comedie" />
      <img src="./front/assets/image/lafayette.jpg" alt="lafayette" id="lafayette" />
      <a href="./galerie/index.php" id="portfolio" class="decouvrir">Découvrir notre galerie</a>
      <img src="./front/assets/image/meca.png" alt="statue" id="statue" />
      <img src="./front/assets/image/cathedrale.jpg" alt="cathedrale" id="cathedrale" />
      <img src="./front/assets/image/lune.jpg" alt="port de la lune" id="lune" />
      <img src="./front/assets/image/Jaguar.png" alt="jaguar" id="jaguar" />
    </div>
  </section>
  <section class="nous">
    <h2>Qui sommes-nous ?</h2>
    <img src="./front/assets/image/groupe.png" alt="L'équipe" id="groupe" />
  </section>
  <script src="./front/assets/tilescroll/tilescroll-home.js"></script>
  <?php
    include('./front/includes/commons/footer.php');
    ?>
         
</body>

</html>

</html>
