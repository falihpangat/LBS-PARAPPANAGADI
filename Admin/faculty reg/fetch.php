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
			
			<th>Faculty name</th>
			<th>Department</th>
			<th>subject</th>
			<th>Details</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost","root","","lbscollege");
		if ($conn-> connect_error) {
			die("connection failed:". $conn-> connect_error);
		}

		$sql = "SELECT * from faculty_reg";
		$result = $conn-> query($sql);

		if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			$row["lastname"];
			$row["qualification"];
			$row["contact"];
			$row["emailid"];
			$row["profession"];
        echo "<tr>
        
        <td>". $row["firstname"] ."</td>
        <td>". $row["department"] ."</td>
        <td>".$row["subject"] ."</td>
        <td><a href='details.php?fn=$row[firstname]&ln=$row[lastname]&dp=$row[department]&sb=$row[subject]&ql=$row[qualification]&pr=$row[profession]&ct=$row[contact]&em=$row[emailid]'>View Full Details</a></td>
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