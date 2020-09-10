<?php
 if(isset($_POST['submit'])){
 $id = $_POST['register'];	
 $firstname = $_POST['firstname'];
 $secondname = $_POST['secondname'];
 $dob = $_POST['dob'];
 $sex = $_POST['sex'];
 $nationality = $_POST['nationality'];
 $religion = $_POST['religion'];
 $adhar = $_POST['adhar'];
 $capid = $_POST['capid'];
 $emailid  = $_POST['emailid'];
 $batch  = $_POST['batch'];


$dbconnect=mysqli_connect('localhost','root','','lbscollege');

$sql =mysqli_query($dbconnect, "insert into student_reg(register,firstname,secondname,dob,sex,nationality,religion,adhar,capid,emailid,batch)  values('$id','$firstname','$secondname','$dob','$sex','$nationality','$religion','$adhar','$capid','$emailid','$batch')");
if ($sql) {
	echo "data inserted successfully";
	header('Refresh: 2; URL = isert.php');
}
else {
	echo "failrd to insert";
}
}
?>