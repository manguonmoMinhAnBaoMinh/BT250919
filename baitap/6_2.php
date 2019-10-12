<html>
   
   <head>
      <title>Xử lý JSON trong PHP</title>
   </head>
   <body>
   
       <?php
        $arra = array("user"=> "nam", "country"=> "vietnam", "sex"=> "male");   
		$myarray = array('red', 'green', 'white');  
		var_dump(json_encode($arra));  
		echo "<br>";  
		echo "<br>"; 
		var_dump(json_encode($myarray));
       ?>
       
   </body>
</html>