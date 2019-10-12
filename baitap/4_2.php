<html>
   
   <head>
      <title>Đảo ngược chuỗi trong PHP</title>
   </head>
   <body>
		
   <form action="<?php $_PHP_SELF ?>" method="GET">

Nhập: <input type="text" name="name" >
    <button type="submit">OK</button>

</form>

    <?php
	function ham_dao_nguoc_chuoi($str1)  
		{  
		 $n = strlen($str1);  
		 if($n == 1)  
		 {  
			return $str1;  
		 }  
		 else  
		 {  
		   $n--;  
		   return ham_dao_nguoc_chuoi(substr($str1,1, $n)) . substr($str1, 0, 1);  
		 }  
		}  
	if (array_key_exists('name',$_GET))
         { 
		$n=$_GET["name"];  
		$x=ham_dao_nguoc_chuoi($n);
		echo "Chuỗi đảo ngược là: $x"."<br>";
		
         } 
	    
    ?>
</body>
</html>