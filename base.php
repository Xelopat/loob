<html>
  <head></head>
  <body>
    <?php
	$host = 'localhost';
		$user = 'root';
		$password = 'cyberbullying';
		$db_name = 'loob';
		
		$link = mysqli_connect($host, $user, $password) or die("Ошибка " . mysqli_error($link));
		
		if(mysqli_query($link, "CREATE DATABASE IF NOT EXISTS $db_name")){
			echo("   complete");
		}
		else{
			echo "Error: " . mysqli_error($link);
		}
	 	
		$link = mysqli_connect($host, $user, $password, $db_name) or die("Ошибка " . mysqli_error($link));;

		if(mysqli_query($link, "CREATE TABLE IF NOT EXISTS teachers (
		teacher text,
		point float DEFAULT 0,
		comments longtext DEFAULT '',
		point_count int(11) DEFAULT 0,
		all_point int(11) DEFAULT 0
		)")){
			echo("   complete");
		}
		else{
			echo "Error: " . mysqli_error($link);
		}
		
	function get_all_point($name){
		global $link;
		$sql = "SELECT * FROM teachers WHERE teacher = '$name'";
		$result = $link->query($sql);
		if($result){
			echo("   complete");
		}
		else{
			echo "Error: " . mysqli_error($link);
		}
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			return $row["all_point"];
		  }
		}
		
	}
	
	function get_point_count($name){
		global $link;
		$sql = "SELECT * FROM teachers WHERE teacher = '$name'";
		$result = $link->query($sql);
		if($result){
			echo("   complete");
		}
		else{
			echo "Error: " . mysqli_error($link);
		}
		if($result){
			echo("   complete");
		}
		else{
			echo "Error: " . mysqli_error($link);
		}
		
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			return $row["point_count"];
		  }
		}
	}
	
	function get_comments($name){
		global $link;
		$sql = "SELECT * FROM teachers WHERE teacher = '$name'";
		$result = $link->query($sql);
		
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			$all = $row["comments"];
		  }
		  $array = explode('^^^', $all);
		  return $array;
		}
	}
	
	function get_comments_text($name){
		global $link;
		$sql = "SELECT * FROM teachers WHERE teacher = '$name'";
		$result = $link->query($sql);
		if($result){
			echo("   complete");
		}
		else{
			echo "Error: " . mysqli_error($link);
		}
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			return $row["comments"];
		  }
		}
	}
	
	function get_all(){
		global $link;
		
		$sql = "SELECT * FROM teachers ORDER BY point ASC";
		$result = $link->query($sql);
		if($result){
			echo("   complete");
		}
		else{
			echo "Error: " . mysqli_error($link);
		}
		if ($result->num_rows > 0) {
		  $array = array();
		  while($row = $result->fetch_assoc()) {
			$array[$row["teacher"]] = array($row["point"], get_comments($row["teacher"]));
		  }
		  return $array;
		}
	}
	
	function get_teachers(){
		global $link;
		
		$sql = "SELECT * FROM teachers";
		$result = $link->query($sql);
		if($result){
			echo("   complete");
		}
		else{
			echo "Error: " . mysqli_error($link);
		}
		if ($result->num_rows > 0) {
		  $array = array();
		  while($row = $result->fetch_assoc()) {
			array_push($array, $row["teacher"]);
		  }
		  return $array;
		}
	}
	
	function get_point($name){
		global $link;
		$sql = "SELECT * FROM teachers WHERE teacher = '$name'";
		$result = $link->query($sql);
		if($result){
			echo("   complete");
		}
		else{
			echo "Error: " . mysqli_error($link);
		}
		if ($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {
			return $row["point"];
		  }
		}
	}
	
	function add_teacher($name){
		global $link;
		
		$result = "INSERT INTO teachers (teacher, point, comments) VALUES ('$name', '0', '')";
		if(mysqli_query($link, $result)){
			echo("   complete");
		}
		else{
			echo "Error: " . mysqli_error($link);
		}
		
	}
	function set_all_point($point, $name){
		global $link;
		
		$result = "UPDATE teachers SET all_point='$point' WHERE teacher='$name'";
		
		mysqli_query($link, $result);
		
	}
	function set_point($point, $name){
		global $link;
		
		$result = "UPDATE teachers SET point='$point' WHERE teacher='$name'";
		
		mysqli_query($link, $result);
		
	}
	
	function set_point_count($point_count, $name){
		global $link;
		
		$result = "UPDATE teachers SET point_count='$point_count' WHERE teacher='$name'";
		
		mysqli_query($link, $result);
		
	}
	
	function add_comment($comment, $positive, $name){
		global $link;
		$plus = 1;
		if ($positive == 5) $plus = 5;
		
		$now_point = get_all_point($name);
		
		$now_point += $plus;
		$now_count_point = get_point_count($name);
		$now_count_point += 1;

		set_all_point($now_point, $name);
		set_all_point($now_point, $name);
		set_point_count($now_count_point, $name);
		if($now_count_point != 0){
			set_point($now_point / $now_count_point, $name);
		}
		
		$comments = get_comments_text($name);
		if($comments != null){
			$sum_comment = $comments . "^^^" . $plus . $comment ;
		}
		else{
			$sum_comment = $plus . $comment ;
		}
		$result = "UPDATE teachers SET comments='$sum_comment' WHERE teacher='$name'";
		
		mysqli_query($link, $result);
		
	}
	function clear_all(){
		global $link;
		$result = "UPDATE teachers SET comments=null";
		mysqli_query($link, $result);
		$result = "UPDATE teachers SET point=0";
		mysqli_query($link, $result);
		$result = "UPDATE teachers SET point_count=0";
		mysqli_query($link, $result);
		$result = "UPDATE teachers SET all_point=0";
		mysqli_query($link, $result);
		
	}
	?>
  </body>
</html>