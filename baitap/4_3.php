<html>
   
   <head>
      <title>Lấy username trong PHP</title>
   </head>
   <body>
		
   <form action="<?php $_PHP_SELF ?>" method="GET">

Nhập: <input type="text" name="name" >
    <button type="submit">OK</button>

</form>

    <?php
	function ham_lay_user($str1)
         {
		return $user = strstr($str1, '@', true);  	
	 }
	if (array_key_exists('name',$_GET))
         { 
		$n=$_GET["name"];  
		$x=ham_lay_user($n);
		echo "Username là: $x"."<br>";
		
         } 
	    
    ?>
</body>
</html>