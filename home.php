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
  <link rel="stylesheet" href="./front/assets/home.css" />

</head>

<body>
  <?php
  include('./front/includes/commons/navbar.php')
  ?>

  <main data-scroll-container>
    <section class="tiles tiles--rotated" id="grid2">
      <div class="tiles__wrap">
        <div class="tiles__line pouched" data-scroll data-scroll-speed="1" data-scroll-target="#grid2" data-scroll-offset="10" data-scroll-direction="horizontal">
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/1.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/2.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/3.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/4.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/5.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/6.jpg')"></div>
        </div>
        <div class="tiles__line" data-scroll data-scroll-speed="-1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/7.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/8.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/9.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/10.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/11.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/12.jpg')"></div>
        </div>
        <div class="tiles__line pouched" data-scroll data-scroll-speed="1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/13.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/14.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/15.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/16.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/17.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/18.jpg')"></div>
        </div>
        <div class="tiles__line" data-scroll data-scroll-speed="-1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/19.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/20.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/21.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/22.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/23.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/24.jpg')"></div>
        </div>
        <div class="tiles__line pouched" data-scroll data-scroll-speed="1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/25.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/26.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/27.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/28.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/29.jpg')"></div>
          <div class="tiles__line-img" style="background-image: url('./front/assets/tilescroll/30.jpg')"></div>
        </div>
        <div class="tiles__line" data-scroll data-scroll-speed="-1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
        </div>
        <div class="tiles__line pouched" data-scroll data-scroll-speed="1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
        </div>
        <div class="tiles__line" data-scroll data-scroll-speed="-1" data-scroll-target="#grid2" data-scroll-direction="horizontal">
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
          <div class="tiles__line-img"></div>
        </div>

      </div>
      <div class="hero-content">
        TownyArt les meilleurs
      </div>
    </section>


    <section class="text">
      <h2>Découvrez notre projet !</h2>
      <h3>La ville, terrain de jeu artistique</h3>
      <p class="presentation">Etudiants en DUT MMI (Métiers du Multimédia et de L’internet) à l’IUT Bordeaux Montaigne, nous vous présentons ce blog, né de 3 semaines de travail. En effet, à l’occasion de l’atelier “Blog’Art 2021”, nous avons conçu ce blog dans son intégralité. Vous y découvrirez de nombreux articles liés à l’art urbain et apprendrez les modes de réflexions de photographes, street-artistes, sculpteurs et bien plus encore. Grâce à une interface que nous souhaitons simple et agréable, nous espérons que vous prendrez du plaisir à acquérir de nombreuses connaissances liées à notre ville, Bordeaux.</p>
    </section>

    <section class="blogpreview">
      <h2>Notre blog</h2>
      <div class="blog-preview-container">
        <a class="streetart">
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
        <a class="streetart">
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
        <a class="streetart">
          <img src="./front/assets/image/meca.png" alt="meca" width="160" />
          <div class="tagtxt">
            <span class="tag">
              insolite
            </span>
            <h4>3 lieux insolites à découvrir absolument</h4>
            <p>
              Bordeaux regorge de trésors cachés. Nous vous livrons dans cet article trois de ces articles.
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
        </div>
    </section>
    <section class="galerie">
      <h2>Notre galerie</h2>
      <div class="grille">
        <img src="./front/assets/image/eiffel.jpg" alt="tour-eiffel" id="eiffel" />
        <img src="./front/assets/image/quais.jpg" alt="quais" id="quais" />
        <a href="https://www.fredericducos.com/" id="portfolio" target="blank">Découvrir son portfolio</a>
        <img src="./front/assets/image/bourse2.jpg" alt="bourse2" id="bourse2" />
        <img src="./front/assets/image/arene.jpg" alt="arene" id="arene" />
        <img src="./front/assets/image/bourse1.jpg" alt="bourse1" id="bourse1" />
      </div>
    </section>
  </main>
  <script src="./front/assets/tilescroll/tilescroll-home.js"></script>
</body>

</html>

</html>