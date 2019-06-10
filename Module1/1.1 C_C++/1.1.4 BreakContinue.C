//jumping control statement
//break,continue

#include<stdio.h>
#include<conio.h>
int main()
{
 int i;
 clrscr();
 printf("\n Using break:\n");
 for(i=1;i<=5;i++)
 {
   if(i==3)
   {
      break;
   }
   printf("\n %d",i);
 }

  printf("\n\n Using continue:\n");
 for(i=1;i<=5;i++)
 {
   if(i==3)
   {
      continue;
   }
   printf("\n %d",i);
 }

 getch();
 return 0;
}