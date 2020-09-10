<!DOCTYPE html>
<html>
<head>
	<title>Inserting data </title>
</head>
<body>
	<form action="insert.php" method="POST">
	<table>
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
			<td><input type="text" name="qualification"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
	</table>
</form>
</body>
</html>