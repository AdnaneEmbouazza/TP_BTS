#include <stdio.h>
#include <string.h>

/* liste de contact => prénom num et age  
autant de contact que l'on veut 
et une fois toutes les infos rentrer on les affiches pour chaque contact 
besoin d'une structure et de tableau + de boucles pour l'affichage des valeur
*/

struct Contact
{
    char prenom[30];
    char numero[10];
    int age ; 
};

void afficher_contact(struct Contact *contacts , int size)
{
    printf("Liste des contacts :\n");
    for (int i= 0 ; i < size ; i++)
    {
        printf("Prenom : %s , numero : %s , age : %d\n" , contacts[i].prenom , contacts[i].numero , contacts[i].age);
    }
}

int main(void)
{
    int nbre_contact;

    printf("combien de contact desirez vous ? :\n");
    scanf("%d" , &nbre_contact);

    struct Contact contacts[nbre_contact];

    for(int i= 0 ; i < nbre_contact ; i++)
    {
        printf("prenom du contact %d :\n" , i+1 );
        scanf("%s" , contacts[i].prenom);

        do{
            printf("numero de telephone du contact %d :\n" , i+1 );
            scanf("%s" , contacts[i].numero);

            if (strlen(contacts[i].numero) != 10){
                printf("la taille du numero est incorrecte !\n");
            }
        }
        while(strlen(contacts[i].numero) != 10);

        printf("age du contact %d :\n" , i+1 );
        scanf("%d" , &contacts[i].age);
    }

    afficher_contact(contacts , nbre_contact);

    return 0;
}