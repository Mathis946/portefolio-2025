<?php
include("header.php");
?>
<script src="script/mail.js"></script>
<main>
    <div class="contact-content">
        <form action="contact.php"></form>
        <div class="left-content">
            <h3>Me contacter ? :</h3>  
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
        </div>
        <div class="right-content">

        </div>
        </form>
    </div>
</main>
<?php
include("footer.php");
?>