<?php
include("conn.php");
error_reporting(0);


$register=$_GET['register'];
$sql ="DELETE FROM STUDENT_REG WHERE register= '$register'";
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