<!DOCTYPE html>
<html>
<head>
	<title>LBSMDC-FACULTY </title>
	 <link rel="icon" type="image/png" href="../../image/Lbs logo.png">
	<style type="text/css">
	body{
		padding-top: 40px;
        padding-bottom: 40px;
        padding-left: 450px;
        background-color: #ADABAB;
	}
	.link{
		padding-left: 700px;
	}
	h1{
		padding-right: 570px;
	}
	body input{
		margin-left: 10px;
	}
	.add{
		margin-top: 40px;
		margin-left: 40px;
	}
	.quali{
		height: 50px;
	}	
	</style>
</head>
<body>
	<div class="link">
	<a href="../../index.php">HOME</a>
	<a href="../index.html">ADMIN</a>
    </div>
	<h1 align="center">Faculty Details</h1>
	<form action="insert.php" method="POST">
	<table>
		<tr>
			<td>Sl/No:</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>FIRST NAME:</td>
			<td><input type="text" name="firstname"></td>
		</tr>
		<tr>
			<td>LAST NAME:</td>
			<td><input type="text" name="lastname"></td>
		</tr>
		<tr>
			<td>DEPARTMENT:</td>
			<td><input type="text" name="department"></td>
		</tr>
		<tr>
			<td>SUBJECT:</td>
			<td><input type="text" name="subject"></td>
		</tr>
		<tr>
			<td>QUALIFICATION:</td>
			<td><input class="quali" type="text" name="qualification"></td>
		</tr>
		<tr>
			<td>PROFESSION:</td>
			<td><input class="quali" type="text" name="profession"></td>
		</tr>  
		<tr>
			<td>CONTACT:</td>
			<td><input type="text" name="contact"></td>
		</tr>
		<tr>
			<td>EMAIL:</td>
			<td><input type="text" name="emailid"></td>
		</tr>
		<tr>
			<td><input class="add" type="submit" name="submit" value="Add"></td>
	</table>
</form>
</body>
</html>