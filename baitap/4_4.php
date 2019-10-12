<html>
   
   <head>
      <title>Lấy từ đầu tiên trong câu PHP</title>
   </head>
   <body>
		
   <form action="<?php $_PHP_SELF ?>" method="GET">

Nhập: <input type="text" name="name" >
    <button type="submit">OK</button>

</form>

    <?php
	function ham_lay_tu($str1)
         {
		$str="";
		$arr1 = explode(' ',trim($str1));  
		return $str = $arr1[0];
	 }
	if (array_key_exists('name',$_GET))
         { 
		$n=$_GET["name"];  
		$x=ham_lay_tu($n);
		echo "Từ đầu tiên là: $x"."<br>";
		
         } 
	    
    ?>
</body>
</html>