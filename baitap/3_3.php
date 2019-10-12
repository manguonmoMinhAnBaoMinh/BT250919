<html>
   
   <head>
      <title>Tính giai thừa của 1 số trong PHP</title>
   </head>
   <body>
		
   <form action="<?php $_PHP_SELF ?>" method="GET">

 <input type="text" name="name" >

    <button type="submit">OK</button>

</form>

    <?php
	if (array_key_exists('name',$_GET))
         { 
		$n=$_GET["name"];  
        	$x = 1;
	    	for($i=1; $i <= $n-1; $i++)  
		{  
		 $x*=($i+1);   
		}  
		echo "Giai thừa của $n = $x"."<br>";
		
         } 
	    
    ?>
</body>
</html>