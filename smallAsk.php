<html
<head>
</head>
<body>

<form name=return action=index.php method=POST>
	<input type="submit" name"Back" value="Вернуться" />
</form>

<form name=comment>

Вы ученик или родитель? <br/>
<input type="radio" name="voice" value="one" /> Ученик <br /> 
<input type="radio" name="voice" value="two" /> Родитель<br /> 

Введите имя учителя <br/>
<input type=text name=ticher> <br/>

Какой комментарий вы хотите оставить? <br/>
<input type="radio" name="whatQuestion" value="one" /> Положительный <br /> 
<input type="radio" name="whatQuestion" value="two" /> Отриательный <br /> 

Введите ваш комментарий <br/>
<input type=text name=comm> <br/>
<input type="submit" name"Send" value="Отправить" />

</form> 


</body>
</html>