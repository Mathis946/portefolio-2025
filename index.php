<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jersey+10&family=Monoton&display=swap" rel="stylesheet">
<link rel="stylesheet" href="choice.css"> 
<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "38NoM98cM7Cbp-NJU",
      });
   })();
</script>   
    <title>Portfolio</title>
</head>
<body>
    <header>
        <div class="head-container">
            <div class="link-div"><h4><a href="home-page.php">Home</a></h4></div>
            <div id="title-div"><h1>Portfolio de Mathis</h1></div>
            <div class="link-div"><h4><a href="https://www.webacademie.org">Web Academie</a></h4></div>
        </div>
    </header>
    <main>
        <div class="home-container">
            <h1 id="start-game"><a href="project.php">START NEW GAME</a></h1>
            <p id="ps">*Cliquer pour découvrir mes projets !*</p>
            <div class="home-footer-container">
                <div class="cv-contact">
                    <ul id="main-ul">
                    <li>Mon CV</li>
                    <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
<?php
include("footer.php");
?>

