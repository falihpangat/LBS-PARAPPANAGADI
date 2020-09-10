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
		background-color: #443B40;
		color: white;
	}
	tr:nth-child(even) {background-color: #f2f2f2;}
	.navbar a{
    text-decoration:none;
    float:right;
    margin-right:90px;
    margin-top:15px;
    position:right;
}
.pic{
    float:right;
    margin-right:3px;
    margin-top:4px;
    position:auto;   
}
	
	</style>
</head>
<body>
	<div class="navbar">
           <div class="adminame">
               <a href="../../index.html">Admin</a>
           </div>
           <div class="pic">
               <img src="../../image/adminlogo.png" width="40" height="40">
           </div>
       </div>

	<table>
		<tr>
			
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost","root","","lbscollege");
		if ($conn-> connect_error) {
			die("connection failed:". $conn-> connect_error);
		}

		$sql = "SELECT * from faculty_login";
		$result = $conn-> query($sql);

		if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
        echo "<tr>
        
        <td>". $row["id"] ."</td>
        <td>". $row["username"] ."</td>
        <td>".$row["password"] ."</td>
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