<html>
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
}
.smth{
	background: #000000;
	display: block;
}
</style>

</head>
<body class="bg
<form name=return action=index.php method=POST>
	<input type="submit" name"Back" value="На главную" class="cool"/>
<form name=return action=index.php method=POST >
	<input type="submit" name"Back" value="На главную" class="cool"/>
</form>
</form>
<table style="padding:40px" >
<tr>
<td width=15%>
</td>
<td style="border-radius: 5px;  background:#FAEBD7;padding-bottom:80px; padding-left:25px; padding-right:25px;padding-top:25px" width=900px height=100%>
<font  align="center" class="question" size=6>Введите имя учителя и предмет, который он ведет</font><br/><br/>
<form name=addTeacher action=final_teacher.php method=POST >
<input type=text name=nameTeacher class="answer"> <br/>
<select name=subject class="answer">
<option name=math>Математика</option>
<option name=history>История</option>
<option name=english>Английский язык</option>
<option name=russian>Русский язык</option>
<option name=literature>Литература</option>
<option name=physics>Физика</option>
<option name=chemistry>Химия</option>
<option name=prog>Программирование</option>
<option name=fizra>Физ-ра</option>
<option name=another>Другое</option>
</select><br/>
<input type="submit" name=addTeacher value="Добавить учителя" class="cool"/>
</form>
</td>
</tr>
</table>
</body>
</html>