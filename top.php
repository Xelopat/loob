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
$subjects = array_unique(get_all_subjects());
$all_info = get_all();
foreach($subjects as $sub_now){
	echo "Предмет: $sub_now";
	foreach ($all_info as $key => $value){
		$nh = str_replace(' ', '_', $key);
		$sub = get_subject($key);
		if($sub == $sub_now){
			echo "<div style=margin-left:20px;>Учитель: <a href = comments.php?name=$nh>$key</a><br/> Рейтинг: $value[0]</div><br/>";
		}
	}
}
?>
</body>
</html>