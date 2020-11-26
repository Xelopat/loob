<html
<head>
<style>
.cool{
	text-decoration: none;
  outline: none;
  display: inline-block;
  color: #E6E6FA;
  padding: 20px 30px;
  margin: 10px 20px;
  font-family: 'Montserrat', sans-serif;
  text-transform: uppercase;
  letter-spacing: 3px;
  background:#000000;
  background-size: 200% auto;
  transition: .5s;
}
.bg{
	background: #000000;
}
.bg2{
    background: url(orn.png) repeat-y 0 100% fixed;
}
.question{
	color: #000000;
    font-family: 'Montserrat', sans-serif;
	letter-spacing: 3px;
	transition: .7s;
	font-weight: 50;
	font-size:18px;
	
}
.answer{
	color:#2F4F4F;
    font-size: 23px;
    background-image:#FFA07A;
    display: block;
    text-align: center;
}
.smth{
	background: #000000;
	display: block;
}
</style
</head>
<body class="bg">
<?php
require_once "base.php";
?>
<form name=return action=index.php method=POST>
	<input type="submit" name"Back" value="На главную" class="cool"/>
</form>
<table>
<tr>

<td width=15% >
</td>

<td align="center" style="padding-top:80px;border-radius: 5px;  background:#FAEBD7;padding-bottom:80px" width=900px height=100%>
<form name=comment action=final_comment.php method=POST>
<font class="question">Вы ученик или родитель? </font><br/>
<input type="radio" name="voice" value="one" required /> <font class="question" >Ученик </font></br>
<input type="radio" name="voice" value="two" /> <font class="question" >Родитель</font><br />
</br>
<font class="question" required>Выберете имя учителя  </font>
<br/>
<?php
$names = get_teachers();
echo "<select name='teacher'>";
for($i = 0; $i < count($names); $i++){ 
echo "<option name=$names[$i]>$names[$i]</option>"; 
}
echo "</select><br/>";
?>
</br>
<font class="question" >Какой комментарий вы хотите оставить?  </font>
<br/>
<input type="radio" name="kind" value="5" required /> <font class="question" >Положительный</font> <br /> 
<input type="radio" name="kind" value="1" /> <font class="question">Отриательный </font> <br /> 
</br>
<font class="question" >Введите ваш комментарий</font>
<br/>
<input type=text name=comment class="answer" required> <br/>
</br>
<input type="submit" name"Send" value="Отправить" class="cool"/>
</form>
</td>

<td width=15% >
</td>

</tr>
</table>

</body>
</html>