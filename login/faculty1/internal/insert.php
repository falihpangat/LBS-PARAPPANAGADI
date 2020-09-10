<?php
 $id = $_POST['id'];
 $name = $_POST['name'];
 $course = $_POST['course'];
 $sem = $_POST['sem'];
 $sub = $_POST['sub'];
 $internal = $_POST['internal'];

$dbconnect = mysqli_connect('localhost','root','','lbscollege');
$sql = mysqli_query($dbconnect, "insert into internal( 	id,name,course,sem,sub,internal)  values('$id','$name','$course','$sem','$sub','$internal')");

if ($sql) {
	echo "data inserted";
	header('Refresh: 2; URL = isert.php');
}
else {
	echo "failed to insert";
}
?>