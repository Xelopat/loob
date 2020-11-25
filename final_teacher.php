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
add_teacher($name);
?>
</body>
</html>