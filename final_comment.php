<html
<head>
</head>
<body>
Спасибо за участие в опросе!<br/>
<?php
require_once "base.php";
$comment = $_POST['comment'];
$kind = $_POST['kind'];
$teacher = $_POST['teacher'];
add_comment($comment, $kind, $teacher);
?>
</body>
</html>