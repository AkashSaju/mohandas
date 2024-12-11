<html>
<body>
 
    <?php
     $flowers=array("sunflower","rose","dahlia");
     sort($flowers);
     $clength=count($flowers);
     echo "<br><b> flower in ascending order</b></br>";
     for($x=0;$x<$clength;$x++)
       {
         echo "<br>";
          echo $flowers[$x];
           echo "<br>";
       }

     $flowers=array("sunflower","rose","dahlia");
     rsort($flowers);
     $clength=count($flowers);
     echo "<br><b> flower in descending order</b></br>";
     for($x=0;$x<$clength;$x++)
       {
         echo "<br>";
          echo $flowers[$x];
           echo "<br>";
       }
      
     $flowers=array("one"=>"sunflower","two"=>"rose","three=>"dahlia");
     asort($flowers);
  
     echo "<br><b>sort an assosiative array in ascending order, according to the value </b></br>";
     foreach($flowers as $x=>$x_value)
       {
         echo "<br>key=".$;
          echo $flowers[$x];
           echo "<br>";
       }
     
     $flowers=array("sunflower","rose","dahlia");
     ksort($flowers);
     $clength=count($flowers);
     echo "<br><b> flower in ascending order</b></br>";
     for($x=0;$x<$clength;$x++)
       {
         echo "<br>";
          echo $flowers[$x];
           echo "<br>";
       }
   ?>

</body>
</html>