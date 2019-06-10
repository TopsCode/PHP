//switch case for calculator
#include<stdio.h>
#include<conio.h>
int main()
{
 int n1,n2;
 char choice,answer;
 clrscr();
 do
 {
 printf("\n Enter two numbers:");
 scanf("%d%d",&n1,&n2);
 printf("\n n1:%d   n2:%d",n1,n2);

 printf("\n + :ADD");
 printf("\n - :SUB");
 printf("\n / :DIV");
 printf("\n * :MULTI");

 //to clear buffer memory
 fflush(stdin);

 printf("\n Enter your choice:");
 scanf("%c",&choice);
 switch(choice)
 {
  case '+':
  case 'A':
  case 'a':
	  printf("\n Addition is:%d",(n1+n2));
	  break;
  case '-':
  case 'B':
  case 'b':
	  printf("\n Substraction is:%d",(n1-n2));
	  break;
  case '/':
	  printf("\n Division is:%d",(n1/n2));
	  break;
  case '*':
	  printf("\n Multiplication is:%d",(n1*n2));
	  break;

   default:
	  printf("\n Invalid choice of operation used");
	  break;


 }

  fflush(stdin);
  printf("\n Do you want to repate(y/Y):");
  scanf("%c",&answer);
 }while(answer=='y'||answer=='Y');

 getch();
 return 0;
}