  
<html
<head>
</head>
<body>
<?php
require_once "base.php";
?>
<form name=return action=index.php method=POST>
	<input type="submit" name"Back" value="Вернуться" />
</form>

<form name=comment action=final_comment.php method=POST>
Вы ученик или родитель? <br/>
<input type="radio" name="voice" value="one" /> Ученик <br /> 
<input type="radio" name="voice" value="two" /> Родитель<br /> 

Введите имя учителя <br/>
<?php
$names = get_teachers();
echo "<select name='teacher'>";
for($i = 0; $i < count($names); $i++){ 
echo "<option name=$names[$i]>$names[$i]</option>"; 
}
echo "</select><br/>";
?>

Какой комментарий вы хотите оставить? <br/>
<input type="radio" name="kind" value="5" /> Положительный <br /> 
<input type="radio" name="kind" value="1" /> Отриательный <br /> 

Введите ваш комментарий <br/>
<input type=text name=comment> <br/>

<input type="submit" name"Send" value="Отправить" />
</form>


</body>
</html>