<html>
   
   <head>
      <title>Tính giai thừa trong PHP </title>
   </head>
   <body>
		
   <form action="<?php $_PHP_SELF ?>" method="GET">

Nhập: <input type="text" name="name" >
    <button type="submit">OK</button>

</form>

    <?php
	function ham_tinh_giai_thua($n)  
		{  
		  if($n ==0)  
			{  
			   return 1;  
			}  
		  else   
			{     
			   return $n * ham_tinh_giai_thua($n-1);  
			}  
		 }
	if (array_key_exists('name',$_GET))
         { 
		$n=$_GET["name"];  
		$x=ham_tinh_giai_thua($n);
		echo "Giai thừa của $n = $x"."<br>";
		
         } 
	    
    ?>
</body>
</html>