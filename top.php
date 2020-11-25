<html>
<head>
</head>
<body>
<?php
require_once "base.php";
?>
<h1 align="center">Рейтинг учителей</h1>

<?php
$array = get_teachers()
for ($i=0; $i < count( mixed $array [, int $mode = COUNT_NORMAL ]; $i++){
	echo get_point($array[$i]);
}
?>
</body>
</html>