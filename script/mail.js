function sendMail(){
    let param = {
        name : document.getElementById("name").value,
        email : document.getElementById("mail").value,
        title : document.getElementById("object").value,
        message : document.getElementById("content").value,
    }

    emailjs.send("service_j4sk1t5","template_hyteq2e", param).then(alert("E-mail envoyer avec succés !"))
}