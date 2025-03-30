<?php
include("header.php");
?>

<main><div class="desc-container">
    <div class="assets-container">
<div class="carousel-container">
  <div class="carousel">
    <div class="item active">
      <img src="assets/projet/maquette1.png" alt="Image 1" />
 
    </div>
    <div class="item">
      <img src="assets/projet/maquette2.png" alt="Image 2" />

    </div>
    <div class="item">
      <img src="assets/projet/maquette3.png" alt="Image 3" />

    </div>
  </div>
  <button class="btn prev">Retour</button>
  <button class="btn next">Suivant</button>
  <script src="/script/caroussel-project.js"></script>
  </div>
  <div class="tech-container">
    <h2>Technologies utilisées :</h2>
    <div class="tech-div">
      <img class="logo-tech" src="assets/logo/HTML.png" alt="Logo HTML">
      <img class="logo-tech" id="logo-css" src="assets/logo/CSS.png" alt="Logo CSS">
    </div>
  </div>
  </div>
  <div class="desc-project">
    <p>Dans le cadre d'un projet scolaire d'une semaine, nous avons dû recréer le front d'un site web d'un centre de vacances à partir d'une maquette fournie. L'objectif était d'apprendre à respecter une charte graphique tout en maîtrisant la mise en page et le responsive design. Ce projet nous a permis de mieux comprendre l'intégration web, l'organisation du code et l'importance du respect des délais.</p>
  </div>
  </div>
</main>
<?php
include("footer.php");
?>