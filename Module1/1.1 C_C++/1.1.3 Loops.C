//looping demo for printing  hello msg 10 times
#include<conio.h>
#include<stdio.h>
int main()
{
 int i;
 clrscr();

 printf("\n Using do-while");
 i=1;
 do
 {
  printf("\n Hello..");
  i++;
 }while(i<=10);


 printf("\n\n Using while");
 i=1;
 while(i<=10)
 {
  printf("\n Hello..");
  i++;
 }

 printf("\n\n Using for");
 for(i=1;i<=10;i++)
 {
  printf("\n Hello..");
 }

 getch();
 return 0;
}