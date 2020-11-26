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
<body class="bg">

<form name=return action=top.php method=POST>
	<input type="submit" name"Back" value="Назад" class="cool" />
</form>

<table>
<tr>
<td width=15%>
</td>
<td style="border-radius: 5px;  background:#FAEBD7;padding-bottom:80px; padding-left:25px; padding-right:25px;padding-top:25px" width=900px height=100%>
<?php

require_once "base.php";
$name = str_replace("_", " ", $_GET["name"]);
echo "<h1 align='center'>Комментарии к $name</h1>";
?>

<font  align="center" class="question" size=6>Положительные комментарии:</font>

<?php
$array = get_comments($name);
for ($i=0; $i < count($array); $i++){
	$rest = substr($array[$i] , 0, 1);
	if($rest == "5" && substr($array[$i], 1) != '') echo substr($array[$i], 1) . "<br/><br/>";
}
echo "Отрицательные комментарии:";
for ($i=0; $i < count($array); $i++){
	$rest = substr($array[$i] , 0, 1);
	if($rest == "1") echo substr($array[$i], 1) . "<br/><br/>";
}
?>
</td>
<td width=15%>
</td>
</tr>
</table>
</body>
</html>