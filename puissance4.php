<?php
include("header.php");
?>

<main><div class="desc-container">
    <div class="assets-container">
<div class="carousel-container">
  <div class="carousel">
    <div class="item active">
      <img src="assets/projet/puissance41.png" alt="Image 1" />
    </div>
    <div class="item">
      <img src="assets/projet/puissance42.png" alt="Image 2" />

    </div>

  </div>
  <button class="btn prev">Retour</button>
  <button class="btn next">Suivant</button>
  <script src="/script/caroussel-project.js"></script>
  </div>
  <div class="tech-container">
    <h2>Technologies utilisées :</h2>
    <div class="tech-divp">
    <img class="logo-tech" src="assets/logo/HTML.png" alt="Logo HTML">
      <img class="logo-tech" id="logo-css" src="assets/logo/CSS.png" alt="Logo CSS">
      <img class="logo-tech" id="logo-jsp" src="assets/logo/JS.png" alt="Logo JS">
    </div>
  </div>
  </div>
  <div class="desc-project">
    <p>Dans ce projet scolaire de deux semaines, nous avons développé une version jouable du Puissance 4 en JavaScript, sans maquette préétablie. L’objectif était d’implémenter la logique du jeu, la détection des conditions de victoire et une interface dynamique en manipulant le DOM. Ce projet nous a permis de renforcer notre compréhension de la programmation événementielle, des structures de données et d’améliorer notre capacité à concevoir une interface.</p>
  </div>
  </div>
</main>
<?php
include("footer.php");
?>