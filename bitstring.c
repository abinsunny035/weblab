//set operations using bitstrings
#include <stdio.h>
#include <stdlib.h>
int main(){
    int i, j, n, m, x, y, z;
    printf("Enter the size of the universal set: ");
    scanf("%d", &n);
    int *a = (int *)calloc(n, sizeof(int));
    printf("Enter the size of the first set: ");
    scanf("%d", &m);
    printf("Enter the elements of the first set: ");
    for (i = 0; i < m; i++){
        scanf("%d", &x);
        a[x - 1] = 1;
    }
    printf("Enter the size of the second set: ");
    scanf("%d", &m);
    printf("Enter the elements of the second set: ");
    for (i = 0; i < m; i++){
        scanf("%d", &x);
        a[x - 1] = 2;
    }
    printf("The union of the two sets is: ");
    for (i = 0; i < n; i++){
        if (a[i] == 1 || a[i] == 2)
            printf("%d ", i + 1);
    }
    printf("\nThe intersection of the two sets is: ");
    for (i = 0; i < n; i++){
        if (a[i] == 1 && a[i] == 2)
            printf("%d ", i + 1);
    }
    printf("\nThe difference of the two sets is: ");
    for (i = 0; i < n; i++){
        if (a[i] == 1 && a[i] != 2)
            printf("%d ", i + 1);
    }
    printf("\nThe symmetric difference of the two sets is: ");
    for (i = 0; i < n; i++){
        if (a[i] == 1 && a[i] != 2)
            printf("%d ", i + 1);
        else if (a[i] == 2 && a[i] != 1)
            printf("%d ", i + 1);
    }
    printf("\nThe complement of the first set is: ");
    for (i = 0; i < n; i++){
        if (a[i] != 1)
            printf("%d ", i + 1);
    }
    printf("\nThe complement of the second set is: ");
    for (i = 0; i < n; i++){
        if (a[i] != 2)
            printf("%d ", i + 1);
    }
    printf("\nThe complement of the universal set is: ");
    for (i = 0; i < n; i++){
        if (a[i] != 1 && a[i] != 2)
            printf("%d ", i + 1);
    }
    printf("\n");
    return 0;
}