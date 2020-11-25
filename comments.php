<html>
<head>
</head>
<body>
<form name=return action=top.php method=POST>
	<input type="submit" name"Back" value="Вернуться" />
</form>
<?php

require_once "base.php";
$name = str_replace("_", " ", $_GET["name"]);
echo "<h1 align='center'>Комментарии к $name</h1>";
?>

<p>Положительные комментарии:<p/>

<?php
$array = get_comments($name);
for ($i=0; $i < count($array); $i++){
	$rest = substr($array[$i] , 0, 1);
	if($rest == "5") echo substr($array[$i], 1) . "<br/><br/>";
}
echo "<p>Отрицательные комментарии:<p/>";
for ($i=0; $i < count($array); $i++){
	$rest = substr($array[$i] , 0, 1);
	if($rest == "1") echo substr($array[$i], 1) . "<br/><br/>";
}
?>
</body>
</html>