#include <stdio.h>

int main(void)
{
    int total;
    int nombre1=0;
    int nombre2=1;
    int newnombre;

    printf("combien de terme voulez vous affichez ? ");
    scanf("%d" , &total);

    printf("%d %d " , nombre1 , nombre2);
    for(int i = 2 ; i < total ; i++)
    {
        newnombre = nombre1 + nombre2 ;
        printf("%d " , newnombre);
        nombre1 = nombre2;
        nombre2 = newnombre;
    }

    return 0;
}