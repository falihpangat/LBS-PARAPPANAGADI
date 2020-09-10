<?php
$connect = mysqli_connect("localhost","root","","lbscollege") or die("connection failed");
if (!empty($_POST['save'])) {
	$username=$_POST['un'];
	$password=$_POST['pw'];
	$query="select * from faculty_login where username='$username' and password='$password'";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		 header( "Location: facultypage.html");;
	}
	else {
		"login not successful";
	}
}


?>



<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			 padding-top: 40px;
			 padding-left: 450px;
            padding-bottom: 40px;
            background-color: #ADABAB;
		}
	</style>
</head>
<body>
	<h1 >Login Here</h1>
<form method="POST">
	<strong>Enter Username:</strong> <input type="text" name="un"/>
   </br>
   <strong>Enter Password:</strong>&nbsp<input type="Password" name="pw"/>
</br>
<input type="submit" name="save" value="login">

</form>
</body>
</html>

