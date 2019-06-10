/* example of if,if else,if else if,nested if */
#include<stdio.h>
int main()
{
    int n1,n2,n3;
    printf("\n Enter three numbers:");
    scanf("%d%d%d",&n1,&n2,&n3);
    
    printf("\n n1:%d",n1);
    printf("\n n2:%d",n2);
    printf("\n n3:%d",n3);
    
    //a>b,a>c  b>a,b>c c>a,c>b 
    if(n1>n2)
    {
        if(n1>n3)
        {
            printf("\n n1 is larger than n2 and n3");
        }
        else
        {
             printf("\n n3 is larger than n1 and n2");
        }
        
    }
    else
    {
        if(n2>n3)
        {
             printf("\n n2 is larger than n1 and n3");
        }
        else
        {
             printf("\n n3 is larger than n1 and n2");
        }
        
    }
    return 0;
}
