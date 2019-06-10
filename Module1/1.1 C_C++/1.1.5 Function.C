//addition of two numbers using fucntion
#include<stdio.h>
#include<conio.h>
//function prototyping
//golbal section
int x;//global variable default value=zero
int addition_number(int,int);
int main()
{
 int n1,n2,res; //default value=garbage
 clrscr();
 printf("\n Enter two numbers:");
 scanf("%d%d",&n1,&n2);
 res=addition_number(n1,n2);//n1 and n2 actual parameters call
 printf("\n Additon of two numbers is:%d",res);
 getch();
 return 0;
}

//after main
//function defination
int addition_number(int a,int b)  //formal or dummy parameters
{
      int result;
      result=a+b;
      return result;

}