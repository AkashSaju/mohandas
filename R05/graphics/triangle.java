package graphics;
import java.util.*;
interface shape1
{
  double display();
}
public class triangle implements shape1
{
  private double base,height;
  
 public triangle()
 {
   Scanner sc=new Scanner(System.in);
   System.out.println("enter the base and height of triangle");
   this.base=sc.nextDouble();
   this.height=sc.nextDouble();
 } 
 public double display()
 {
    double area=0.5*base*height;
    return area;
 }
 
}
