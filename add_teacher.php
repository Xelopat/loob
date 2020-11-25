  
<html>
<head>
</head>
<body>
<form name=return action=index.php method=POST>
	<input type="submit" name"Back" value="Вернуться" />
</form>
Введите имя учителяи предмет, который он ведет <br/>
<form name=addTeacher action=final_teacher.php method=POST>

<input type=text name=nameTeacher> <br/>
<select name=subject>
<option name=math>Математика</option>
<option name=history>История</option>
<option name=english>Английский язык</option>
<option name=russian>Русский язык</option>
<option name=literature>Литература</option>
<option name=physics>Физика</option>
<option name=chemistry>Химия</option>
<option name=chemistry>Другое</option>
</select><br/>
<input type="submit" name=addTeacher value="Добавить учителя" />
</form>
</body>
</html>