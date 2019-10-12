<html>
   
   <head>
      <title>Tính tổng dãy số trong PHP</title>
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
		$sum = 0;  
		for($x=1; $x <= $n; $x++)  
		{  
		  $sum +=$x;  
		}  
		echo "Tổng dãy số từ 1 đến $n là $sum"."<br>";
		
         } 
	    
    ?>
</body>
</html>