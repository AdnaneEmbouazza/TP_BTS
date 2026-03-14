#include <stdio.h>
 
int main(void)
{
    float celsus ;
    printf("Entrer la temperature en degrees celsus :" );
    scanf("%f" , &celsus);

    float farenheit = (celsus * 1.8) + 32;
    printf("Temperature en farenheit : %.2f\n" , farenheit);
    return 0;
} 