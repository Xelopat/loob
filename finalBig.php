<html
<head>
</head>
<body>
Спасибо за участие в опросе!
<?php
$teacher = $_POST['teacher'];
$sum=0;
for($i=1; $i < 16; $i++){
	$sum+=$_POST[$i];
}
?>
</body>
</html>