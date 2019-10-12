<html>
   
   <head>
      <title>Bài tập Class (Lớp) trong PHP</title>
   </head>
   <body>
   
	<form action="<?php $_PHP_SELF ?>" method="GET">

	Nhập a: <input type="text" name="name1" ><br>
	Nhập b: <input type="text" name="name2" ><br>
    	<button type="submit">OK</button><br>
	</form>
       	<?php
        class MyCalculator {  
		  private $_fval, $_sval;  
		  
		  public function __construct( $fval, $sval ) {  
		    $this->_fval = $fval;  
		    $this->_sval = $sval;  
		  }  
		  
		  public function add() {  
		    return $this->_fval + $this->_sval;  
		  }  
		  
		  public function subtract() {  
		    return $this->_fval - $this->_sval;  
		  }  
		  
		  public function multiply() {  
		    return $this->_fval * $this->_sval;  
		  }  
		
		  public function divide() {  
		    return $this->_fval / $this->_sval;  
		  }  
		}  
		$a=$b=0;
		if (array_key_exists('name1',$_GET)&&array_key_exists('name2',$_GET))
         	{ 
			$a=$_GET["name1"];  
			$b=$_GET["name2"];
		}
		$x = (float)$a;
		$y = (float)$b;
		$mycalc = new MyCalculator($x, $y);   
		echo $mycalc-> add(); 
		echo "<br>";
		echo $mycalc-> multiply(); 
		echo "<br>";
		echo $mycalc-> subtract(); 
		echo "<br>";
		echo $mycalc-> divide();
       ?>
       
   </body>
</html>
