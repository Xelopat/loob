<html
<head>
</head>
<body>
<form name=return action=index.php method=POST>
	<input type="submit" name"Back" value="Вернуться" />
</form>
Спасибо за участие в опросе!
<?php
require_once "base.php";
$teacher = $_POST['teacher'];
$sum=0;
$amount = 15;
for($i=1; $i < 16; $i++){
	if ($_POST[$i] == null){
	$amount--;
	} else {
	$sum+=$_POST[$i];
	}
}
$now_point = get_all_point($teacher);
$now_point += $sum;
$now_count_point = get_point_count($teacher);
$now_count_point += $amount;

set_all_point($now_point, $teacher);
set_point_count($now_count_point, $teacher);
set_point($now_point / $now_count_point, $teacher);
?>
</body>
</html>