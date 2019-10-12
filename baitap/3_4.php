<html>
   
   <head>
      <title>Đếm kí tự trong chuỗi PHP</title>
   </head>
   <body>
		
   <form action="<?php $_PHP_SELF ?>" method="GET">

Nhập: <input type="text" name="name1" >
Ký tự cần đếm: <input type="text" name="name2" >
    <button type="submit">OK</button>

</form>

    <?php
	if (array_key_exists('name1',$_GET)&&array_key_exists('name2',$_GET))
         { 
		$string_ban_dau=$_GET["name1"];  
		$ki_tu_can_tim=$_GET["name2"];  
		$count="0";  
		for($x="0"; $x < strlen($string_ban_dau); $x++)  
		  {   
			if(substr($string_ban_dau,$x,1) == $ki_tu_can_tim)  
			{  
			$count = $count+1;  
			 }  
		  }  
		echo "Có " .$count. " kí tự " .$ki_tu_can_tim. " trong chuỗi '" .$string_ban_dau. "'";
		
         } 
	    
    ?>
</body>
</html>