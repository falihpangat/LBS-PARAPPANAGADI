<!DOCTYPE html>
<html>
<head>
	<title>table with database</title>
	<style type="text/css">
	table {
		margin-top:35px;
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
			<th>Register Id</th>
			<th>Student name</th>
			<th>Batch</th>
			<th>Emailid</th>
			<th>Details</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost","root","","lbscollege");
		if ($conn-> connect_error) {
			die("connection failed:". $conn-> connect_error);
		}

		$sql = "SELECT * from STUDENT_REG";
		$result = $conn-> query($sql);

		if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
         
         $row["secondname"];
         $row["dob"];
         $row["sex"];
         $row["address"];
         $row["nationality"];
         $row["religion"];
         $row["adhar"];
         $row["capid"];

        echo
         "<tr>
         <td>". $row["register"] ."</td>
         <td>". $row["firstname"] ."</td>
         <td>". $row["batch"] ."</td>
         <td>".$row["emailid"] ."</td>
         <td><a href='details.php?rn=$row[register]&sn=$row[firstname]&cl=$row[batch]&sc=$row[secondname]&db=$row[dob]&gd=$row[sex]&addr=$row[address]&rl=$row[religion]&nt=$row[nationality]&ad=$row[adhar]&cp=$row[capid]&em=$row[emailid]'>View full details</a></td>
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