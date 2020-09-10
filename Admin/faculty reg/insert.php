<?php
 $id = $_POST['id'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $department = $_POST['department'];
 $subject = $_POST['subject'];
 $qualification = $_POST['qualification'];
 $contact = $_POST['contact'];
 $emailid = $_POST['emailid'];
 $profession = $_POST['profession'];

$dbconnect = mysqli_connect('localhost','root','','lbscollege');
$sql = mysqli_query($dbconnect, "insert into faculty_reg(id,firstname,lastname,department,subject,qualification,contact,emailid,profession)  values('','$firstname','$lastname','$department','$subject','$qualification','$contact','$emailid','$profession')");

if ($sql) {
	echo "data inserted";
	header('Refresh: 2; URL = isert.php');
}
else {
	echo "failed to insert";
}
?>