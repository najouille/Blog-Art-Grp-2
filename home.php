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
  </section>
  <section class="galerie">
    <h2>Notre galerie</h2>
    <div class="grille">
          <img
            src="./front/assets/image/pellegrin.jpg"
            alt="pellegrin"
            id="pellegrin"
          />
          <img src="./front/assets/image/comedie.jpg" alt="comedie" id="comedie" />
          <img src="./front/assets/image/lafayette.jpg" alt="lafayette" id="lafayette" />
          <a href="" id="portfolio" target="blank"
            >Découvrir notre galerie</a
          >
          <img
            src="./front/assets/image/meca.png"
            alt="statue"
            id="statue"
          />
          <img src="./front/assets/image/cathedrale.jpg" alt="cathedrale" id="cathedrale" />
          <img
            src="./front/assets/image/lune.jpg"
            alt="port de la lune"
            id="lune"
          />
          <img src="./front/assets/image/Jaguar.png" alt="jaguar" id="jaguar" />
        </div>
  </section>
  <section class="nous">
    <h2>Qui sommes-nous ?</h2>
  </section>
</body>

</html>

</html>