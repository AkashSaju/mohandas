import java.applet.*;
import java.awt.*;
public class applet extends Applet
	{
	public void init()
		{
		}
	public void paint(Graphics g)
		{
		g.setColor(Color.red);
		g.drawLine(200,20,30,30);
		
		g.setColor(Color.blue);
		g.drawOval(100,100,200,200);
		
                  g.setColor(Color.black);
		g.drawRect(200,200,300,200);
		
		}
	}
	
	

