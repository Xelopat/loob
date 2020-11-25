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
$array = get_teachers();
for ($i=0; $i < count($array); $i++){
	$nh = str_replace(' ', '_', $array[$i]);
	echo "<a href = comments.php?name=$nh>$array[$i]</a> <br/>Рейтинг:" .get_point($array[$i]) . "<br/><br/>";
}
?>
</body>
</html>