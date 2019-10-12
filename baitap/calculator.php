<html>
<head>
<title>Máy tính đơn giản</title>
</head>
<body>
<form method='post' action="calculator.php">
<input type='text' name='value1'>
<select name='action'>
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type='text' name='value2'>
<input type="submit" name="submit" value='='></form>
<?php
if(isset($_POST['submit']))
{
$value1 = $_POST['value1'];
$value2 = $_POST['value2'];
$action = $_POST['action'];
if($action=="+"){
echo "Kết quả là:";
echo $value1+$value2;
}

if($action=="-"){
echo "Kết quả là:";
echo $value1-$value2;
}

if($action=="*"){
echo "Kết quả là:";
echo $value1*$value2;
}

if($action=="/"){
echo "Kết quả là:";
echo $value1/$value2;
}

}
?>
</body>
</html>