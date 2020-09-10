<?php
include("../../../conn.php");
error_reporting(0);


$id=$_GET['id'];
$sql ="DELETE FROM FACULTY_LOGIN WHERE ID= '$id'";
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