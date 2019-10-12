<html>
   
   <head>
      <title>Lấy URL trong PHP</title>
   </head>
   <body>
   
       <?php
         $url = 'http://localhost/BaoMinhCN3B/B%e1%ba%a3o%20Minh%20CN3B';  
		 $url=parse_url($url);  
		 echo 'Scheme : '.$url['scheme']."<br>";  
		 echo 'Host : '.$url['host']."<br>";  
		 echo 'Path : '.$url['path']."<br>";
       ?>
       
   </body>
</html>