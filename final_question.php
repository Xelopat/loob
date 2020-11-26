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
</style>
</head>
<body class="bg">
<table syle="padding-top:80px">
<tr>
<td width=15%>
</td>
<td align="center" style="padding-top:80px;border-radius: 5px;  background:#FAEBD7;padding-bottom:80px" width=900px height=100%>
<font  align="center" size=6 class="question">Спасибо за участие в опросе!</font><br/>

<form name=return action=index.php method=POST>
	<input type="submit" name"Back" value="Вернуться" class="cool"/>
</form>
</td>
<td width=15%>
</td>
</tr>
</table>
<?php
require_once "base.php";
$teacher = $_POST['teacher'];
$sum=0;
$amount = 15;
for($i=1; $i < 16; $i++){
	if ($_POST[$i] == null){
	$amount--;
	} else {
	$sum+=$_POST[$i];
	}
}
$now_point = get_all_point($teacher);
$now_point += $sum;
$now_count_point = get_point_count($teacher);
$now_count_point += $amount;

set_all_point($now_point, $teacher);
set_point_count($now_count_point, $teacher);
set_point($now_point / $now_count_point, $teacher);
?>
</body>
</html>