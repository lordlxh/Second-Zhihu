#include<stdio.h>
#include<string.h>
int Duplicate(char * a,char * b,int n)
{int d=0;
char e;
d=strlen(a);
if(n>d-1)
        return 0;
*b=*(a+n-1);
printf("Output is:");
for(int i=0;i<d-n;i++)
    printf("%c",b[i]);
printf("%d characters.",d-n+1);
}
int main()
{   char c[40],d[40];
    char * a=c;
    char * b=d;
    int n;
    printf("Input a string:");
    scanf("%[^\n]",c);
    printf("Input a integer:");
    scanf("%d/n",&n);
    Duplicate(a,b,n);
}
