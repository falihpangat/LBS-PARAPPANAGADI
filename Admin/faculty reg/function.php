<style type="text/css">
	table {
		margin-top:35px;
		border-collapse: collapse;
		width: 100%;
		color: #d96459;
		font-family: monospace;
		font-size: 30px;
		text-align: left;
	}
	th{
		background-color: #008B8B;
		color: black;
	}
	tr:nth-child(even) {background-color: #f2f2f2;}

	.navbar{
    margin: 0;
    padding: 0;
    width:100%;
    background-color:whitesmoke;
    position: fixed;
    height: 45px;
    float:top;
    overflow: auto;
}
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
<body>
	<div class="navbar">
           <div class="adminame">
               <a href="../index.html">Admin</a>
           </div>
           <div class="pic">
               <img src="../image/adminlogo.png" width="40" height="40">
           </div>
       </div>

<?php
include("../../conn.php");
error_reporting(0);
$query = "SELECT * FROM FACULTY_REG";
$data = mysqli_query($db, $query);
$total = mysqli_num_rows($data);

if($total != 0)
{

   ?>

<table>
	<tr>
		<th>NAME</th>
		<th>DEPARTMENT</th>
		<th>SUBJECT</th>
		<th colspan="2">Operations</th>
	</tr>


<?php


while ($result = mysqli_fetch_assoc($data)) 
   {
   	$result['lastname'];
   	$result['qualification'];
   	$result['profession'];
   	$result['contact'];
   	$result['emailid'];

	echo "<tr>

           <td>".$result['firstname']."</td>
           <td>".$result['department']."</td>
           <td>".$result['subject']."</td>
           <td><a href='update.php?fn=$result[firstname]&ln=$result[lastname]&dp=$result[department]&sb=$result[subject]&ql=$result[qualification]&pr=$result[profession]&ct=$result[contact]&em=$result[emailid]'>update</a></td>
           <td><a href='delete.php?contact=$result[contact]'>delete</a></td>

	     </tr>";
   }
}

else{
	echo "no record found";
}
?>
</table>
</body>