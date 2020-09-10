<!DOCTYPE html>
<html>
<head>
	<title>table with database</title>
	<style type="text/css">
	table {
		border-collapse: collapse;
		width: 100%;
		color: #DF2A09;
		font-family: monospace;
		font-size: 25px;
		text-align: left;
	}
	th{
		background-color: #3D3831;
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
               <a href="../index.html">Admin</a>
           </div>
           <div class="pic">
               <img src="../image/adminlogo.png" width="40" height="40">
           </div>
       </div>

	<table>
		<tr>
			
			<th>ID</th>
			<th>NOTIFICATION</th>
			<th>LINK</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost","root","","lbscollege");
		if ($conn-> connect_error) {
			die("connection failed:". $conn-> connect_error);
		}

		$sql = "SELECT * from notify";
		$result = $conn-> query($sql);

		if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
        echo "<tr>
        
        <td>". $row["id"] ."</td>
        <td>". $row["notification"] ."</td>
        <td>".$row["link"] ."</td>
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