import graphics.*;
import java.util.*;

class Final
{
  public static void main(String args[])
  {
    Scanner sc=new Scanner (System.in);
    System.out.println("enter the choice to find the area of the shapes");
    System.out.println("1.rectangle"+"\n"+"2.triangle"+"\n"+"3.square"+"\n"+"4.circle"+"\n"+"5.exit");
    int choice=sc.nextInt();
    switch(choice){
   
         case 1:
             rectangle rec=new rectangle();
             System.out.println("area of the rectangle is:"+rec.display());
             break;
         case 2:
             triangle tri=new triangle();
             System.out.println("area of the triangle is:"+tri.display());
             break;    
             
         case 5:
               System.exit(0);   
         default:
               System.out.println("your choice is invalid");      
    }
  }
}
