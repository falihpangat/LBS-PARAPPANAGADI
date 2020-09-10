<?php
include("../../conn.php");
error_reporting(0);


$contact=$_GET['contact'];
$sql ="DELETE FROM FACULTY_REG WHERE contact= '$contact'";
$data=mysqli_query($db,$sql);
if($data)
{
	echo "  record deleted from database";
	header('Refresh: 2; URL = function.php');
}
else{
	echo"record not deleted from database";
}
?>