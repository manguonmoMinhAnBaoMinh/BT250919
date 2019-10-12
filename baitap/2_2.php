<html>
   
   <head>
      <title>Bài tập mảng trong PHP : Tìm giá trị trung bình</title>
   </head>
   <body>
   
       <?php
        $mang_so_nguyen = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,  
		68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";  
		$mang_tam = explode(',', $mang_so_nguyen);  
		$tong_gia_tri = 0;  
		$do_dai_mang = count($mang_tam);  
		foreach($mang_tam as $gia_tri)  
		{  
		  $tong_gia_tri += $gia_tri;  
		}  
		$gia_tri_trung_binh = $tong_gia_tri/$do_dai_mang;  
		echo "Giá trị trung bình: ".$gia_tri_trung_binh."";   
		sort($mang_tam);  
		echo "<br>Liệt kê 5 số nguyên nhỏ nhất: ";  
		for ($i=0; $i < 5; $i++)  
		{   
		  echo $mang_tam[$i].", ";  
		}  
		echo "<br>Liệt kê 5 số nguyên lớn nhất: ";  
		for ($i=($do_dai_mang-5); $i < ($do_dai_mang); $i++)  
		{  
		  echo $mang_tam[$i].", ";  
		}
       ?>
       
   </body>
</html>