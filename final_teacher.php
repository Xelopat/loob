<html>
<head>
</head>
<body>
<?php
require_once "base.php";
?>

<form name=return action=index.php method=POST>
	<input type="submit" name"Back" value="Вернуться" />
</form>

<?php
$name = $_POST['nameTeacher'];
$sub = $_POST['subject'];
$mas = get_teachers();
if($mas != null){
	if(!in_array($name, $mas)) add_teacher($name);
}
else{
	add_teacher($name);
}
add_subject($sub, $name);
?>
</body>
</html>