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
		g.drawLine(10,10,30,30);
		g.setColor(Color.green);
		g.drawRect(100,100,200,200);
		g.setColor(Color.blue);
		g.drawOval(100,100,200,200);
		g.setColor(Color.black);
		g.drawArc(140,140,40,50,0,180);
		g.drawArc(220,140,40,50,0,180);
		g.drawOval(145,155,30,30);
		g.drawOval(225,155,30,30);
		g.drawLine(200,180,200,220);
		g.drawLine(200,220,215,220);
		g.drawArc(170,215,70,40,180,180);
		g.fillOval(155,160,10,10);
		g.fillOval(235,160,10,10);
		}
	}

