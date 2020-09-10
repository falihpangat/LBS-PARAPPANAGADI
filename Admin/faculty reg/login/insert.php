<?php
 if(isset($_POST['submit'])){
 $id = $_POST['id'];
 $username = $_POST['username'];
 $password = $_POST['password'];


$dbconnect=mysqli_connect('localhost','root','','lbscollege');

$sql =mysqli_query($dbconnect, "insert into faculty_login(id,username,password)  values('$id','$username','$password')");
if ($sql) {
	echo "data inserted successfully";
	header('Refresh: 2; URL = create password.php');
}
else {
	echo "failrd to insert";
}
}
?>