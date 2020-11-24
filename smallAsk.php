<html
<head>
</head>
<body>
<?php
$a='0';
$fd = fopen("hello.txt",'w');
fwrite($fd, $a);
fclose($fd);
?>
<form name=return action=index.php method=POST>
	<input type="submit" name"Back" value="Вернуться" />
</form>

<form name=comment action=final.php method=POST>
Вы ученик или родитель? <br/>
<input type="radio" name="voice" value="one" /> Ученик <br /> 
<input type="radio" name="voice" value="two" /> Родитель<br /> 

Введите имя учителя <br/>
<input type=text name=teacher> <br>

Какой комментарий вы хотите оставить? <br/>
<input type="radio" name="kind" value="5" /> Положительный <br /> 
<input type="radio" name="kind" value="1" /> Отриательный <br /> 

Введите ваш комментарий <br/>
<input type=text name=comment> <br/>

<input type="submit" name"Send" value="Отправить" />
</form>


</body>
</html>