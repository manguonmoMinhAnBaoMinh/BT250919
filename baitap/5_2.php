<html>
   
   <head>
      <title>Bài tập Class (Lớp) trong PHP</title>
   </head>
   <body>
   	
<form action="<?php $_PHP_SELF ?>" method="GET">

Nhập: <input type="text" name="name" >
    <button type="submit">OK</button>

</form>
       <?php
        class user_message {  
		 public $message = 'Xin chao, toi ten la ';  
		 public function introduce($name)  
		 {  
		  return $this->message.$name;  
		 }  
		}  
	$mymessage = New user_message();  
	if (array_key_exists('name',$_GET))
         { 
		$n=$_GET["name"];  
		echo $mymessage->introduce($n)."<br>";	
         } 
		
       ?>
       
   </body>
</html>