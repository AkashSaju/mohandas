import java.util.*;
interface areap
{
  final double pi=3.14;
  void area();
  void perimeter();
}

class circle implements areap{
     //Scanner sc =new Scanner(System.in);
     int radius;
     void get(){
     Scanner sc =new Scanner(System.in);
     System.out.println("enter the radius of the circle");
     radius=sc.nextInt();
     }
     
     public void area(){
         //get();
         double circlearea= pi*radius*radius;
         System.out.println("area of circle= "+circlearea);
     
     }
    public void perimeter(){
           //get();
           double circleperi=2*pi*radius*2;
           System.out.println("perimeter of circle= "+circleperi);
     }
  }   
 class rectangle implements areap{
       double length;
       double breadth;
        void get(){
      Scanner sc =new Scanner(System.in);
     System.out.println("enter the length of the rectangle");
     length=sc.nextDouble();
     System.out.println("enter the breadth of the rectangle");
     breadth=sc.nextDouble();
     }
     
     public void area(){
           //get();
           double recarea=length*breadth;
           System.out.println("area of rectangle= "+recarea);
           
     }
     
     public void perimeter(){
           double recperi=2*length+breadth;
           System.out.println("perimeter of circle= "+recperi);
     }
         
}

class progm9 {

    public static void main(String args[]){
           Scanner sc =new Scanner(System.in);
           while(true){
              System.out.println("find the area and perimeter");
              System.out.println("1.circle");
              System.out.println("2.rectangle");
              System.out.println("3.exit");
              System.out.println("enter your choice");
              int choice=sc.nextInt();
              
              switch(choice){
                    case 1:
                          circle a=new circle();
                          a.get();
                          a.area();
                          a.perimeter();
                          break;
                    case 2:
                          rectangle b=new rectangle();
                          b.get();
                          b.area();
                          b.perimeter();
                          break; 
                    case 3:
                          System.out.println("exiting......");
                          System.exit(0);
                          break;
                    default:
                         System.out.println("invalid choice"); 
                         break;     
                          
              }
              
           
           }    
    
    }
}
