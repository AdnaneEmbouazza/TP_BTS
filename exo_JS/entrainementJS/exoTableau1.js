let tab = [2 , 3 , 5 , 8 , 4 , 1 , 7]

// ma solution 
function sumTriple(tab){
    let TabPair = tab.filter(i => i % 2 == 0)
    let TabTriple = TabPair.map((n) => n * 3)
    let TabFinal = TabTriple.reduce((k , valeur) => k = k +valeur , 0)
    return TabFinal
}

// solution site (plus pratique )
function sumOfTripledEvens(tab) {
  return tab
    .filter((num) => num % 2 === 0)
    .map((num) => num * 3)
    .reduce((acc, curr) => acc + curr);
}
// console.log(sumOfTripledEvens(tab))


// exo 1 camelize fonction (enlevez les tirets et mettre en maj la premiere lettre de chaque mots)

function camelize(word){
    return word
    .split("-") // transforme le string en tableau avec les differents mots dedans (my-beloved-cursed-prince : ["my" , "beloved" , "cursed" , "prince"])
    .map((word)=> word[0].toUpperCase() + word.slice(1)) // .map : renvoie un nouveau tableau en appliquant un chagement au elements de l'autre tableau 
    // ici en l'occurence , il met la première lettre de chaque mot en majuscule 
    .join('') // rassemble tout les mots ensemble en un seul string 
  }

  let word = "my-beloved-cursed-prince"

  //console.log(camelize(word)) // resultats : MyBelovedCursedPrince 


// exo 2 : filtrer en tableau 

function filterRange(tableau, a, b) {
    /* .filter : filtre un tableau en fonction d'une condition et crée un nvx tableau avec les resultats obtenue 
     ici en l'occurence la fonction vérifie les nombres du tableau supérieur a "a" et inférieur a "b" 
     et les ajoute dans le nouveau tableau */
  return tableau.filter(item => (a <= item && item <= b));
}

let tableau = [1 , 3 , 9 , 32  , 5 , 14]

console.log(filterRange ( tableau , 5 , 21)) // devrait renvoyer un tableau avec [9 , 5, 14 ]


// exo 3 filtrer un tableau 2 

function filtrerTab(tab , a , b){
    for(let i = 0 ; i < tab.length ; i++){ 
        if (tab[i] < a || tab[i] > b ){// vérifie si l'element n'est pas compris entre a et b 
            tab.splice(i , 1) // supprime 1 element du tableau à partir de "i"
            i-- // pour revenir d'un cran pour la boucle etant donné qu'un élément viens d'etre supprimer dans le tableau 
        }       
    }
    return tab
}

console.log(filtrerTab(tableau , 3, 32))


// exo 4 trier en ordre décroissant 

let array = [5, 2, 1, -10, 8];

array.sort((a ,b)=> b - a)
console.log(array) // doit normalement afficher [8 , 5 , 2 , 1 , 10 ]

// exo 5 copier et trier un tableau

let arr = ["HTML", "JavaScript", "CSS"];

function arraySort() {
  return arr.slice().sort(); // fait une copie, puis trie
}

console.log(arr)
console.log(arraySort())