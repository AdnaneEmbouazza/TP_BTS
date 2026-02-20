const texteArea = document.getElementById("texte"); // Récupère le <textarea>

texteArea.addEventListener("input", function() {
let texte = texteArea.value.trim();
let tabMot = texte.split(/[ ,'\-]+/);

// Si le texte est vide, alors nbreMot doit être 0
let nbreMot = (tabMot[0] === "") ? 0 : tabMot.length;

let Mot = document.getElementById("compteur");

Mot.textContent = "Nombre de mots :" + nbreMot
})

