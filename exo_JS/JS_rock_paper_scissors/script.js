let scoreOrdi = 0;
let scoreJoueur = 0;

// Fonction pour choisir aléatoirement pour l'ordinateur
function getComputerChoice() {
    let choice = Math.floor(Math.random() * 3);
    if (choice == 0) return "rock";
    if (choice == 1) return "scissors";
    return "paper";
}

// Fonction pour jouer un tour
function Jouer(playerChoice) {
    let computerChoice = getComputerChoice();
    console.log("You chose " + playerChoice);
    console.log("The computer chose " + computerChoice);

    // Comparer les choix et mettre à jour les scores
    if (playerChoice === computerChoice) {
        console.log("It's a draw!");
    } else if (
        (playerChoice === "rock" && computerChoice === "scissors") ||
        (playerChoice === "scissors" && computerChoice === "paper") ||
        (playerChoice === "paper" && computerChoice === "rock")
    ) {
        console.log("You win this round!");
        scoreJoueur++;
    } else {
        console.log("You lose this round!");
        scoreOrdi++;
    }

    // Afficher les scores
    console.log("Your score is " + scoreJoueur);
    console.log("Computer's score is " + scoreOrdi);

    document.getElementById("ordinateur").textContent = "Ordinateur : " + scoreOrdi;
    document.getElementById("joueur").textContent = "Joueur : " + scoreJoueur;

    // vérifie si il y a un gagnant et réinitie la partie si c'est le cas 
    if (scoreJoueur === 5) {
    alert("Vous avez gagné !");
    scoreJoueur = 0;
    scoreOrdi = 0;
} else if (scoreOrdi === 5) {
    alert("L'ordinateur a gagné !");
    scoreJoueur = 0;
    scoreOrdi = 0;
}

}

// Ajout des événements aux boutons
document.getElementById("pierre").addEventListener('click', function() {
    Jouer("rock");
});

document.getElementById("papier").addEventListener('click', function() {
    Jouer("paper");
});

document.getElementById("ciseaux").addEventListener('click', function() {
    Jouer("scissors");
});