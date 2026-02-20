const grille = document.getElementById("grille-container");
const bouton = document.getElementById("button");

function creerGrille(nbreCaseParCote) {
  // vide la grille avant d'en générer une 
  grille.innerHTML = "";

  // Définir le nombre total de cases ( coté x coté )
  const totalCases = nbreCaseParCote * nbreCaseParCote;

  // Créer dynamiquement les cases
  for (let i = 0; i < totalCases; i++) {
    const carre = document.createElement("div"); // Crée la div dynamiquement
    carre.classList.add("case"); // Applique la classe CSS

    carre.addEventListener("click", () => {
  carre.classList.toggle("noire"); // ajoute ou retire la classe "noire"
});

    grille.appendChild(carre); // L'ajoute à la fin du container actuelle (soit "grille-container")
  }

  // Mettre à jour le CSS de la grille pour avoir nbreCaseParCote colonnes
  grille.style.gridTemplateColumns = `repeat(${nbreCaseParCote}, 1fr )`; // repeat : propriété css pour répéter une propriété esthétique plusieurs fois sur plusieur elements
}

bouton.addEventListener("click" , function(){
    let nbreCase = parseInt(window.prompt("combien voulez vous de case pas ligne ?"));

     if (!isNaN(nbreCase) && nbreCase > 0) {
    // vérifie qu'il s'agit bien d'un nombre et supérieur a 0 pour créer la grille 
    creerGrille(nbreCase); // créer la grille 
  } else {
    // Sinon, afficher un message d'erreur
    alert("Veuillez entrer un nombre valide.");
  }
})



