<html>
   
   <head>
      <title>Xử lý JSON trong PHP</title>
   </head>
   <body>
   
       <?php
        $json =   
		'{  
		"user": "nam"  
		, "country": "vietnam"  
		, "sex": "male" 
		}';  
		var_dump(json_decode($json));  
		echo "<br>";  
		echo "<br>";  
		var_dump(json_decode($json, true));
       ?>
       
   </body>
</html>