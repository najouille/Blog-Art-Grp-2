<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("./front/includes/commons/headRequired.php"); ?>
  <title>Document</title>
  <link rel="stylesheet" href="./front/assets/master.css" /><link rel="stylesheet" href="./front/assets/navbar.css" />
  <link rel="stylesheet" href="./front/assets/home.css" />
</head>

<body>
  <?php 
  include('./front/includes/commons/navbar.php')
  ?>
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
          <img
            src="./front/assets/image/eiffel.jpg"
            alt="tour-eiffel"
            id="eiffel"
          />
          <img src="./front/assets/image/quais.jpg" alt="quais" id="quais" />
          <a href="https://www.fredericducos.com/" id="portfolio" target="blank"
            >Découvrir son portfolio</a
          >
          <img
            src="./front/assets/image/bourse2.jpg"
            alt="bourse2"
            id="bourse2"
          />
          <img src="./front/assets/image/arene.jpg" alt="arene" id="arene" />
          <img
            src="./front/assets/image/bourse1.jpg"
            alt="bourse1"
            id="bourse1"
          />
        </div>
  </section>
</body>

</html>

</html>