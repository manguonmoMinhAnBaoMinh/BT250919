<html>
   
   <head>
      <title>Lấy thư mục gốc trong PHP</title>
   </head>
   <body>
   
       <?php
         // Hàm getenv() được dùng để lấy giá trị của các biến môi trường 
		 $rd = getenv('DOCUMENT_ROOT');  
		 echo $rd."<br>";
       ?>
       
   </body>
</html>