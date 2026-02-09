<?php

#ex2

//Tableau X(1, 2) enEntier
// Variables i, j, val enEntier
// Début
// Val ← 1 
// Pour i ← 0 à 1 
//     Pour j ← 0 à 2
//     X(i, j) ← Val     
//     Val ← Val + 1  
//     j Suivant
// i Suivant
// Pour i ← 0 à 1 
//     Pour j ← 0 à 2 
//     Ecrire X(i, j) 
//     j Suivant
// i Suivant
//Fin 

# L'algo ci dessus sert à assigner les valeurs 1,2,3,4,5,6 dans un tableau multidimensionnels à 2 lignes et 3 colonnes de tel sorte que :
# ligne1: 1,2,3
# ligne2: 4,5,6

#ex3

// Tableau X(1, 2) enEntier 
// Variables i, j, val enEntier
// Début
// Val ← 1 
// Pour i ← 0 à 1 
//     Pour j ← 0 à 2
//     X(i, j) ← Val 
//     Val ← Val + 1 
//     j Suivant
// i Suivant
// Pour j ← 0 à 2 
//     Pour i ← 0 à 1
//     Ecrire X(i, j)  
//     i Suivant
// j Suivant
// Fin

#L'algo ci dessus sert à assigner les valeurs 1,2,3,4,5,6 dans un tableau multidimensionnels à 2 lignes et 3 colonnes, cette fois ci en les affichant en colonnes , de tel sorte que:
#colonne1: 1,4
#colonne2: 2,5
#colonne3: 3,6

#ex4

// Tableau T(3, 1) enEntier
// Variables k, m, enEntier
// Début
// Pour k ← 0 à 3 
//     Pour m ← 0 à 1     
//     T(k, m) ← k + m   
//     m Suivant
// k Suivant
// Pour k ← 0 à 3 
//     Pour m ← 0 à 1 
//     Ecrire T(k, m)   
//     m Suivant
// k Suivant
// Fin

# l'algo affiche :
#ligne 1: 0,1
#ligne 2: 1,2
#ligne 3: 2,3
#ligne 4: 3,4

#ex5

#cette fois pour T(k, m) ← 2 * k + (m + 1), l'algo affiche : 
#ligne 1: 1,2
#ligne 2: 3,4
#ligne 3: 5,6
#ligne 4: 7,8

#cette fois pour T(k, m) ← (k + 1) + 4 * m, l'algo affiche :
#ligne 1: 1,5
#ligne 1: 2,6
#ligne 1: 3,7
#ligne 1: 4,8