<?php
include("header.php");
?>

<main><div class="desc-container">
    <div class="assets-container">
<div class="carousel-container">
  <div class="carousel">
    <div class="item active">
      <img src="assets/projet/twitter1.png" alt="Image 1" />
    </div>
    <div class="item active">
      <img src="assets/projet/twitter2.png" alt="Image 1" />
    </div>
    <div class="item">
      <img src="assets/projet/twitter3.png" alt="Image 2" />

    </div>
    <div class="item">
      <img src="assets/projet/twitter4.png" alt="Image 3" />

    </div>
  </div>
  <button class="btn prev">Retour</button>
  <button class="btn next">Suivant</button>
  <script src="/script/caroussel-project.js"></script>
  </div>
  <div class="tech-container">
    <h2>Technologies utilisées :</h2>
    <div class="tech-divm">
      <img class="logo-tech" id="logo-html" src="assets/logo/PHP.png" alt="Logo PHP">
      <img class="logo-tech" id="logo-sass" src="assets/logo/sass.png" alt="Logo SASS">
      <img class="logo-tech" id="logo-js" src="assets/logo/JS.png" alt="Logo JS">
      <img class="logo-tech" src="assets/logo/SQL.png" alt="Logo SQL">
    </div>
  </div>
  </div>
  <div class="desc-project">
    <p>Dans le cadre d’un projet de groupe de quatre personnes sur un mois, nous avons recréé une version simplifiée de Twitter. Mon rôle était de développer toute la partie back-end, incluant la gestion des utilisateurs, des profils utilisateurs, des tweets, des likes et des commentaires. L’objectif était de concevoir un système robuste et sécurisé permettant des interactions en temps réel avec le front-end. Ce projet m’a permis d’approfondir mes compétences en développement back-end, en gestion de bases de données et en collaboration avec une équipe sur un projet complet.</p>
  </div>
  </div>
</main>
<?php
include("footer.php");
?>