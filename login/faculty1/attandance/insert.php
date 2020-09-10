<?php
 $id = $_POST['id'];
 $name = $_POST['name'];
 $course = $_POST['course'];
 $sem = $_POST['sem'];
 $perc = $_POST['perc'];
 $attendance = $_POST['attendance'];

$dbconnect = mysqli_connect('localhost','root','','lbscollege');
$sql = mysqli_query($dbconnect, "insert into attandence( 	id,name,course,sem,perc,attendance)  values('$id','$name','$course','$sem','$perc','$attendance')");

if ($sql) {
	echo "data inserted";
	header('Refresh: 2; URL = isert.php');
}
else {
	echo "failed to insert";
}
?>