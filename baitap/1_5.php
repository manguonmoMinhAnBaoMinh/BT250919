<html>
   
   <head>
      <title>Lấy thông tin Last Modified trong PHP</title>
   </head>
   <body>
   
       <?php
        $ten_file_hien_tai = basename($_SERVER['PHP_SELF']);  
		$file_last_modified = filemtime($ten_file_hien_tai);   
		echo "Last modified: " . date("l, dS F, Y, h:ia", $file_last_modified)."<br>";
       ?>
       
   </body>
</html>