<!DOCTYPE html>
<html>
<head>
	<title>table with database</title>
	<style type="text/css">
	table {
		border-collapse: collapse;
		width: 100%;
		color: #d96459;
		font-family: monospace;
		font-size: 25px;
		text-align: left;
	}
	th{
		background-color: #d96459;
		color: white;
	}
	tr:nth-child(even) {background-color: #f2f2f2;}
	
	</style>
</head>
<body>
	<h1 align="center"><strong>INTERNAL TABLE</strong></h1>
	<table>
		<tr>
			<th>REGISTER</th>
			<th>Student name</th>
			<th>Course</th>
			<th>Semester</th>
			<th>Subject</th>
			<th>INTERNAL</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost","root","","lbscollege");
		if ($conn-> connect_error) {
			die("connection failed:". $conn-> connect_error);
		}

		$sql = "SELECT id, name,course,sem,sub,internal from internal";
		$result = $conn-> query($sql);

		if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
        echo "<tr>
        	<td>". $row["id"] ."</td>
        	<td>". $row["name"] ."</td>
        	<td>". $row["course"] ."</td>
        	<td>".$row["sem"] ."</td>
        	<td>".$row["sub"] ."</td>
        	<td>".$row["internal"] ."</td>
            </tr>.";
			}
			echo "</table>";
		}
		else {
			echo "0 result";
		}

		$conn-> close();
		?>
	</table>

</body>
</html>