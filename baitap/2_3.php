<html>
   
   <head>
      <title>Chuyển đổi chữ hoa - chữ thường</title>
   </head>
   <body>
		
   <form action="<?php $_PHP_SELF ?>" method="GET">

 <input type="text" name="name1" >

    <button type="submit">Chữ hoa</button>

</form>

    <?php
	if (array_key_exists('name1',$_GET))
         { 
		$n=strtoupper($_GET["name1"]);	 
		echo "$n"."<br>";
         } 
	    
    ?>
 <form action="<?php $_PHP_SELF ?>" method="GET">

 <input type="text" name="name2" >

    <button type="submit">Chữ thường</button>

</form>

    <?php
	if (array_key_exists('name2',$_GET))
         { 
		$m=strtolower($_GET["name2"]);	 
		echo "$m"."<br>";
         } 
	    
    ?>
</body>
</html>