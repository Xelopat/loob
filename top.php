<html>
<head>
</head>
<body>
<form name=return action=index.php method=POST>
	<input type="submit" name"Back" value="Вернуться" />
</form>
<?php

require_once "base.php";
?>
<h1 align="center">Рейтинг учителей</h1>

<?php
$all_info = get_all();
foreach ($all_info as $key => $value){
	$nh = str_replace(' ', '_', $key);
	$sub = get_subject($key);
	echo "Учитель: <a href = comments.php?name=$nh>$key</a> Предмет: $sub <br/> Рейтинг: $value[0] <br/><br/>";
}
?>
</body>
</html>