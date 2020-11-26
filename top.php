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

<form name=return action=make_question.php method=POST >
	<input type="submit" name"Back" value="На главную" class="cool"/>
</form>

<h1 align=center><font face="sans-serif" color=#FAEBD7 size=7>РЕЙТИНГ УЧИТЕЛЕЙ</font></h1> </br>

<table>
<tr>
<td width=15%>
</td>
<td style="border-radius: 5px;  background:#FAEBD7;padding-bottom:80px; padding-left:25px; padding-right:25px;padding-top:25px" width=900px height=100%>
<?php
$subjects = array_unique(get_all_subjects());
$all_info = get_all();
foreach($subjects as $sub_now){
	echo "Предмет: $sub_now";
	foreach ($all_info as $key => $value){
		$nh = str_replace(' ', '_', $key);
		$sub = get_subject($key);
		if($sub == $sub_now){
			echo "<div style=margin-left:20px;>Учитель: <a href = comments.php?name=$nh>$key</a><br/> Рейтинг: $value[0]</div><br/>";
		}
	}
}
?>
</td>
<td width=15%>
</td>
</tr>
</table>

</body>
</html>