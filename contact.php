<?php
include("header.php");
?>
<script src="script/mail.js"></script>
<main>
    <div class="contact-content">
        <div class="left-content">
            <div class="me-container">
                <div class="about-container">
                    <h1 id="about-me">A propos de moi :</h1>
                    <div class="para-about">
                    <p>Développeur passionné par le web, j’aime transformer des idées en solutions fonctionnelles et optimisées. Actuellement a la Web Academie by Epitech, je me spécialise dans le développement full-stack et la gestion de bases de données. J’ai eu l’occasion de travailler sur plusieurs projets allant de la création de sites vitrines à des applications web dynamiques. J’aime relever des défis techniques, optimiser le code et concevoir des systèmes performants. Mon objectif est de continuer à apprendre et à contribuer à des projets innovants.</p>
                    <img src="assets/2d-wave.png" alt="2D Wave">
                    </div>
                </div>
                </div>
                <div class="contact-contenair">
                    <h1 id="contact-me">Mes informations :</h1>
                    <ul id="list-contact">
                        <li><a href="https://www.linkedin.com/in/mathis-nnomo-1b34671b0/" target="_blank">LinkedIn</a></li>
                        <li><a href="https://github.com/Mathis946" target="_blank">GitHub</a></li>
                        <li>Email : mathis1.nnomo@epitech.eu</li>
                    </ul>
                </div>
            </div>
        <form action="contact.php">
        <div class="right-content">
            <h1>M'envoyer un mail :</h1> 
            <div class="form-groupe">
                <label for="name">Votre nom :</label>
                <input type="text" name="name" id="name" required> 
            </div> 
            <div class="form-groupe">
                <label for="mail">Votre E-mail :</label>
                <input type="text" name="mail" id="mail" required> 
            </div> 
            <div class="form-groupe">
                <label for="object">Objet du mail :</label>
                <input type="text" name="object" id="object" required> 
            </div> 
            <div class="form-groupe">
                <label for="content">Message du mail :</label>
                <input type="text" name="content" id="content" required> 
            </div> 
            <button type="submit" id="send" onclick="sendMail()">Envoyer !</button>
            </form>
            </div>
        </div>
</main>
<?php
include("footer.php");
?>