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
<?php
require_once "base.php";
?>

<form name=return action=make_questions.php method=POST>
	<input type="submit" name"Back" value="Назад" class="cool"/>
</form>

<table>
<tr>
<td width=15%>
</td>
<td style="border-radius: 5px;  background:#FAEBD7;padding-bottom:80px; padding-left:25px; padding-right:25px;padding-top:25px" width=900px height=100%>
<form name=askStud action=final_questions.php method=POST>

<font  align="center" size=6 class="question" style="font-weight:bold">Введите имя учителя <br/>
<?php
$names = get_teachers();
echo "<select name=teacher>";
for($i = 0; $i < count($names); $i++){ 
echo "<option name=$names[$i]>$names[$i]</option>"; 
}
echo "</select><br/>";
?>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Считаете ли Вы, что педагог обеспечивает Вашему ребенку подготовку, достаточную для успешной работы, учебы? </font></br>
<input type="radio" name="1" value="5" /> <font  align="center" size=4 class="question">5) считаю, что педагог обеспечивает достаточную подготовку моему ребенку; </font><br /> 
<input type="radio" name="1" value="4" /> <font  align="center" size=4 class="question">4) в целом работа педагога меня устраивает; </font><br /> 
<input type="radio" name="1" value="3" /> <font  align="center" size=4 class="question">3) затрудняюсь ответить; </font><br /> 
<input type="radio" name="1" value="2" /> <font  align="center" size=4 class="question">2) скорее всего подготовка моего ребенка недостаточна для дальнейшей работы (учебы); </font><br /> 
<input type="radio" name="1" value="1" /> <font  align="center" size=4 class="question">1) подготовкой, которую обеспечивает педагог моему ребенку, не удовлетворен.</font><br /> 
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Чувствуете ли Вы на себе влияние педагога в решении вопросов обучения и воспитания Вашего ребенка?</font></br>
<input type="radio" name="2" value="5" /><font  align="center" size=4 class="question">5) да, влияние положительное и систематическое;</font></br>
<input type="radio" name="2" value="4" /><font  align="center" size=4 class="question">4) да, влияние скорее положительное;</font></br>
<input type="radio" name="2" value="3" /><font  align="center" size=4 class="question">3) не ощущаю влияния;</font></br>
<input type="radio" name="2" value="2" /><font  align="center" size=4 class="question">2) если есть влияние, то оно скорее негативное;</font></br>
<input type="radio" name="2" value="1" /><font  align="center" size=4 class="question">1) ощущаю негативное влияние.</font></br>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Стремится ли педагог к установлению доброжелательных отношений с Вами?</font></br>
<input type="radio" name="3" value="5" /><font  align="center" size=4 class="question">5) постоянно стремится к установлению доброжелательных отношений с моим ребенком;</font></br>
<input type="radio" name="3" value="4" /><font  align="center" size=4 class="question">4) в основном отношения педагога и моего ребенка доброжелательны;</font></br>
<input type="radio" name="3" value="3" /><font  align="center" size=4 class="question">3) трудно сказать;</font></br>
<input type="radio" name="3" value="2" /><font  align="center" size=4 class="question">2) боюсь, что эти отношения назвать доброжелательными нельзя;</font></br>
<input type="radio" name="3" value="1" /><font  align="center" size=4 class="question">1) отношение педагога к ребенку меня не устраивает.</font></br>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Пользуется ли педагог авторитетом у Вас?</font></br>
<input type="radio" name="4" value="5" /><font  align="center" size=4 class="question">5) считаю, что моему ребенку повезло с педагогом;</font></br>
<input type="radio" name="4" value="4" /><font  align="center" size=4 class="question">4) в основном пользуется;</font></br>
<input type="radio" name="4" value="3" /><font  align="center" size=4 class="question">3) трудно ответить;</font></br>
<input type="radio" name="4" value="2" /><font  align="center" size=4 class="question">2) скорее не пользуется;</font></br>
<input type="radio" name="4" value="1" /><font  align="center" size=4 class="question">1) не пользуется.</font></br>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Считаете ли Вы, что педагог видит и учитывает индивидуальные особенности Вашего ребенка? </font></br>
<input type="radio" name="5" value="5" /><font  align="center" size=4 class="question">5) всегда учитывает индивидуальные особенности моего ребенка;</font></br>
<input type="radio" name="5" value="4" /><font  align="center" size=4 class="question">4) в основном учитывает склонности и предпочтения моего ребенка;</font></br>
<input type="radio" name="5" value="3" /><font  align="center" size=4 class="question">3) по возможности стремится учитывать индивидуальные особенности моего ребенка;</font></br>
<input type="radio" name="5" value="2" /><font  align="center" size=4 class="question">2) скорее всего, ко всем детям относится одинаково;</font></br>
<input type="radio" name="5" value="1" /><font  align="center" size=4 class="question">1) не замечал такого.</font></br>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Всегда ли педагог тактичен, корректен по отношению к Вашему ребенку?</font></br>
<input type="radio" name="6" value="5" /><font  align="center" size=4 class="question">5) всегда тактичен и корректен;</font></br>
<input type="radio" name="6" value="4" /><font  align="center" size=4 class="question">4) в большинстве случаев тактичен и корректен;</font></br>
<input type="radio" name="6" value="3" /><font  align="center" size=4 class="question">3) иногда тактичен и корректен;</font></br>
<input type="radio" name="6" value="2" /><font  align="center" size=4 class="question">2) редко, когда бывает тактичен и корректен;</font></br>
<input type="radio" name="6" value="1" /><font  align="center" size=4 class="question">1) к сожалению, никогда.</font></br>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Удовлетворяет ли Вас то, что Ваш ребенок занимается у данного педагога?</font></br>
<input type="radio" name="7" value="5" /><font  align="center" size=4 class="question">5) удовлетворен тем, что мой ребенок занимается у данного педагога;</font></br>
<input type="radio" name="7" value="4" /><font  align="center" size=4 class="question">4) в целом удовлетворен;</font></br>
<input type="radio" name="7" value="3" /><font  align="center" size=4 class="question">3) скорее всего удовлетворен тем, что мой ребенок занимается у данного педагога;</font></br>
<input type="radio" name="7" value="2" /><font  align="center" size=4 class="question">2) считаю, что влияние педагога на моего ребенка незначительно, так что мне это безразлично;</font></br>
<input type="radio" name="7" value="1" /><font  align="center" size=4 class="question">1) меня не устраивает педагог.</font></br>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Какое влияние, по Вашему мнению, оказывает посещение уроков у данного педагога на Вашео ребенка?</font></br>
<input type="radio" name="8" value="5" /><font  align="center" size=4 class="question">5) вызывает интерес, развивает любознательность;</font></br>
<input type="radio" name="8" value="4" /><font  align="center" size=4 class="question">4) переносит знания, приобретенные в школе в самостоятельную деятельность;</font></br>
<input type="radio" name="8" value="3" /><font  align="center" size=4 class="question">3) затрудняюсь ответить;</font></br>
<input type="radio" name="8" value="2" /><font  align="center" size=4 class="question">2) в самостоятельной деятельности не использует знания, приобретенные в школе;</font></br>
<input type="radio" name="8" value="1" /><font  align="center" size=4 class="question">1) усиливается отрицательное отношение к урокам.</font></br>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Стремится ли педагог к достижению взаимопонимания, взаимодействия с Вами?</font></br>
<input type="radio" name="9" value="5" /><font  align="center" size=4 class="question">5) да, всегда;</font></br>
<input type="radio" name="9" value="4" /><font  align="center" size=4 class="question">4) в основном да;</font></br>
<input type="radio" name="9" value="3" /><font  align="center" size=4 class="question">3) скорее да, чем нет;</font></br>
<input type="radio" name="9" value="2" /><font  align="center" size=4 class="question">2) скорее нет, чем да;</font></br>
<input type="radio" name="9" value="1" /><font  align="center" size=4 class="question">1) нет.</font></br>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Как Вы считаете, заслуживает ли данный педагог общественного признания?</font></br>
<input type="radio" name="10" value="5" /><font  align="center" size=4 class="question">5) да, вполне;</font></br>
<input type="radio" name="10" value="4" /><font  align="center" size=4 class="question">4) скорее всего, да;</font></br>
<input type="radio" name="10" value="3" /><font  align="center" size=4 class="question">3) затрудняюсь ответить;</font></br>
<input type="radio" name="10" value="2" /><font  align="center" size=4 class="question">2) скорее не заслуживает;</font></br>
<input type="radio" name="10" value="1" /><font  align="center" size=4 class="question">1) не заслуживает.</font></br>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Какова, по вашему мнению, роль педагога в преодолении трудностей, возникающих у Вашего ребенка в процессе его обучения?</font></br>
<input type="radio" name="11" value="5" /><font  align="center" size=4 class="question">5) педагог постоянно следит за динамикой обучения ребенка и оказывает своевременную коррекцию;</font></br>
<input type="radio" name="11" value="4" /><font  align="center" size=4 class="question">4) если ребенок обращается к педагогу, он всегда помогает;</font></br>
<input type="radio" name="11" value="3" /><font  align="center" size=4 class="question">3) затрудняюсь ответить;</font></br>
<input type="radio" name="11" value="2" /><font  align="center" size=4 class="question">2) помогает в преодолении трудностей, но нерегулярно.</font></br>
<input type="radio" name="11" value="1" /><font  align="center" size=4 class="question">1) не помогает, ссылается на занятость.</font></br>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Привлекает ли педагог Вашего ребенка к различным видам внеурочной деятельности?</font></br>
<input type="radio" name="12" value="5" /><font  align="center" size=4 class="question">5) достаточно часто привлекает к различным видам внеурочной деятельности;</font></br>
<input type="radio" name="12" value="4" /><font  align="center" size=4 class="question">4) в основном привлекает моего ребенка к учебной деятельности;</font></br>
<input type="radio" name="12" value="3" /><font  align="center" size=4 class="question">3) хотелось бы, чтобы это было почаще;</font></br>
<input type="radio" name="12" value="2" /><font  align="center" size=4 class="question">2) привлекает, но это не вызывает у ребенка интерес;</font></br>
<input type="radio" name="12" value="1" /><font  align="center" size=4 class="question">1) не привлекает вообще.</font></br>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Устраивает ли Вас характер взаимоотношений с педагогом, его культура поведения в общении с Вами?</font></br>
<input type="radio" name="13" value="5" /><font  align="center" size=4 class="question">5) характер взаимоотношений с педагогом меня вполне устраивает;</font></br>
<input type="radio" name="13" value="4" /><font  align="center" size=4 class="question">4) характер взаимоотношения с педагогом скорее всего меня устраивает;</font></br>
<input type="radio" name="13" value="3" /><font  align="center" size=4 class="question">3) не совсем устраивает;</font></br>
<input type="radio" name="13" value="2" /><font  align="center" size=4 class="question">2) скорее не устраивает;</font></br>
<input type="radio" name="13" value="1" /><font  align="center" size=4 class="question">1) характер взаимоотношений с педагогом меня совсем не устраивает.</font></br>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Проявляет ли педагог инициативу в отстаивании интересов учащихся?</font><br/>
<input type="radio" name="14" value="5" /><font  align="center" size=4 class="question">5) да, всегда проявляет инициативу;</font><br/>
<input type="radio" name="14" value="4" /><font  align="center" size=4 class="question">4) в основном проявляет инициативу;</font><br/>
<input type="radio" name="14" value="3" /><font  align="center" size=4 class="question">3) затрудняюсь ответить;</font><br/>
<input type="radio" name="14" value="2" /><font  align="center" size=4 class="question">2) проявляет инициативу, но очень редко;</font><br/>
<input type="radio" name="14" value="1" /><font  align="center" size=4 class="question">1) никогда не проявляет инициативу.</font><br/>
</br>
<font  align="center" size=6 class="question" style="font-weight:bold">Помогает ли Вам педагог в решении проблем обучения и воспитания Вашего ребенка?</font><br/>
<input type="radio" name="15" value="5" /><font  align="center" size=4 class="question">5) да, всегда помогает;</font><br/>
<input type="radio" name="15" value="4" /><font  align="center" size=4 class="question">4) в большинстве случаев помогает;</font><br/>
<input type="radio" name="15" value="3" /><font  align="center" size=4 class="question">3) иногда помогает;</font><br/>
<input type="radio" name="15" value="2" /><font  align="center" size=4 class="question">2) редко помогает;</font><br/>
<input type="radio" name="15" value="1" /><font  align="center" size=4 class="question">1) никогда не помогает.</font><br/>
</br>
<input type="submit" name"Send" value="Отправить" class="cool"/>
</form>
</td>
<td width=15%>
</td>
</tr>
</table>

</body> 
</html>