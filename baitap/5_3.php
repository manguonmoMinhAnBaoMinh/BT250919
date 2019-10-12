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
        class tinh_giai_thua  
		{  
		  protected $_n;  
		  public function __construct($n)  
		   {  
			 if (!is_int($n))  
			   {  
				  throw new InvalidArgumentException('Không phải tham số!');  
			   }  
			$this->_n = $n;  
		   }
 		  public function result()  
			{  
			 $giai_thua = 1;  
			 for ($i = 1; $i <= $this->_n; $i++)  
			  {  
				$giai_thua *= $i;  
			  }  
			   return $giai_thua;  
			 }  
		}   
	if (array_key_exists('name',$_GET))
         { 
		$n=$_GET["name"];  
		$m=(int)$n;
		$ket_qua = New tinh_giai_thua($m);  
		echo $ket_qua->result();	
         } 
		
       ?>
       
   </body>
</html>