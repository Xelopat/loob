<html >
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
</style>
</head>
<body class="bg">

<form name=return action=index.php method=POST>
	<input type="submit" name"Back" value="На главную" class="cool"/>
</form>
<table>
<tr>
<td width=15%>
</td>
<td align="center" style="padding-top:80px;border-radius: 5px;  background:#FAEBD7;padding-bottom:80px" width=900px height=100%>
<font  align="center" size=6 class="question">Вы ученик или родитель? </font><br/>
<form name=studentBig action=make_question_students.php method=POST> 
<input type="submit" name="studOrPar" value="Ученик" class="cool"/> <br />
</form>
<form name=parentsBig action=make_question_parents.php method=POST> 
<input type="submit" name="studOrPar1" value="Родитель"class="cool"/> <br /> 
</form>
</td>
<td width=15%>
</td>
</tr>
</table>
</body>
</html>
