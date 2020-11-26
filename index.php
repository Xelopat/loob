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
    background: url(or.png) repeat-x 0 100% fixed,
  linear-gradient(to top, #5080b1, #004e8c) fixed;
}
</style>
</head>
<body class="bg">
<table background=black >

<tr height=5%>
<td width=15% bgcolor=#000000>
<td/>
<td width=70% align=center>
<font face="sans-serif" color=#FAEBD7 size=7 >LLOOB</font></br>
<font face="sans-serif" color=#FAEBD7 size=3 >Веб-сайт для повышения качества образования школьников</font>
</td>
<td width=15%>
<td/>
</tr>
</table>
<table border=0 height=600px width=100%>
<tr height=90% >
<td width=15% >
<td/>
<td width=70%>
<table  border="1">
<tr>
<td width=50%>
<form name=choice align="center" action=make_comment.php method=POST></br>
	<input type="submit" name"FirstSubmit" value="          Просто оставить комментарий          " class="cool"/>
	</form>
</td>
<td width=50%>
	<form name=choice align="center" action=top.php method=POST></br>
	<input type="submit" name"ThirdSubmit" value="Рейтинг учителей" class="cool"/>
	</form>
</tr>
<tr>
<td width=50%>
	<form name=choice align="center" action=make_question.php method=POST></br>
	<input type="submit" name"SecondSubmit" value="Опросник для изучения мнения о педагоге" class="cool"/>
	</form> 
</td>
<td width=50%>	
	<form name=choice align="center" action=add_teacher.php method=POST></br>
	<input type="submit" name"FourthSubmit" value="Добавить учителя" class="cool"/>
	</form>
	</td>
</tr>
</table>
</td>
<td width=15%>
</tr>
</table>
</body>
</html