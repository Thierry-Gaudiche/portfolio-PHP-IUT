// Exécute un appel AJAX GET
// Prend en paramètres l'URL cible et la fonction callback appelée en cas de succès
function ajaxGet(url, callback) {
    var req = new XMLHttpRequest();
    req.open("GET", url);
    req.addEventListener("load", function () {
        if (req.status >= 200 && req.status < 400) {
            // Appelle la fonction callback en lui passant la réponse de la requête
            callback(req.responseText);
        } else {
            console.error(req.status + " " + req.statusText + " " + url);
        }
    });
    req.addEventListener("error", function () {
        console.error("Erreur réseau avec l'URL " + url);
    });
    req.send(null);
}

var chuck = document.getElementById("chuck");
// On éxécute la méthode AJAX sur l'URL de notre API
ajaxGet("https://api.chucknorris.io/jokes/random", function (reponse) {
    var chucks_sentences = JSON.parse(reponse);
    // Ajout de la phrase (.value) dans notre balise <p>
    var sentence = document.createElement("p");
    sentence.textContent = chucks_sentences.value;
    chuck.appendChild(sentence);
});
