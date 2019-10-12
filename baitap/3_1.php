<html>
   
   <head>
      <title>Bài tập vòng lặp for trong PHP</title>
   </head>
   <body>
		
   <form action="<?php $_PHP_SELF ?>" method="GET">

 <input type="text" name="name" >

    <button type="submit">OK</button>

</form>

    <?php
	if (array_key_exists('name',$_GET))
         { 
		for($x=1;$x <= $_GET["name"]; $x++)  
		{  
		  if($x < $_GET["name"])  
		  {  
		    echo "$x-";  
		  }  
		  else  
		  {  
		    echo "$x"."<br>";  
		  }  
		}
         } 
	    
    ?>
</body>
</html>