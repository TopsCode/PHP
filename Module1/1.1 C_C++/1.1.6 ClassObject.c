//Class and object-Student

#include <iostream>
using namespace std;

//1:Class declaration
class Student{
    //data members
public:
    int sid;
    char name[10];
    double per;
    void AcceptData();
    void DisplayData();
    
};
 //member functions
   void Student::AcceptData()
    {
    cout<<"\n Enter sid,name and percentage of student:";
    cin>>sid>>name>>per;
    }
  void Student::DisplayData()
    {
        cout<<"\n Sid:"<<sid;
        cout<<"\n Name:"<<name;
        cout<<"\n Percentage:"<<per;
    }

int main()
{
   //2:Create object of class in main()
   Student s1;
   
   //3:Access class members using object name and dot operator
   s1.AcceptData();
   s1.DisplayData();

    return 0;
}

