<?php

 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $department = $_POST['department'];
 $subject = $_POST['subject'];
 $qualification = $_POST['qualification'];

$dbconnect = mysqli_connect('localhost','root','','lbscollege');
$sql = mysqli_query($dbconnect, "insert into faculty_reg(id,firstname,lastname,department,subject,qualification)  values('','$firstname','$lastname','$department','$subject','$qualification')");

if ($sql) {
	echo "data inserted";
}
else {
	echo "failed to insert";
}
?>