<?php
include("../../../conn.php");
error_reporting(0);
  $_GET['id'];
  $_GET['us'];
  $_GET['ps'];
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PAGE</title>
   <link rel="icon" type="image/png" href="../../image/Lbs logo.png">
  
   <style type="text/css">
     body{
    margin-top: 10px;
    padding-left:450px;
    font-family: sans-serif; 
   }
   body h3{
    margin-left: 69px;
    font-size: 30px;
   }
   form input{
    background-color:  white;
    color: black;
    box-shadow: 0px 0px 1px rgba(0,0,0,0.3);
    font-size: 14px;
    width: 350px;
    height: 23px;
    
   }

    .fn {
    margin-left: 103px;
    }
   
    .sc {
    margin-left: 29px;
    }
     .add {
    margin-left: 28px;

    }

    .update{
      width: 60px;
      margin-top: 20px;
      margin-left: 50px;
      box-shadow: 0px 0px 10px #008B8B;
    }
  
 
   </style>
</head>
<body>
  <h3>Login Update</h3>
  <form action="" method="GET">
     ID <input class="fn" type="text" name="id" value="<?php echo $_GET['id']; ?>"/><br><br>
    USERNAME <input class="sc" type="text" name="username" value="<?php echo $_GET['us']; ?>"/><br><br>
    PASSWORD <input class="add" type="text" name="password" value="<?php echo $_GET['ps']; ?>"/><br><br>
		<input class="update" type="submit" name="submit" value="update"/>

	</form>

<?php
if ($_GET['submit'])
 { 
 	$id = $_GET['id'];
 	$username = $_GET['username'];
 	$password = $_GET['password'];
   $query = "UPDATE FACULTY_LOGIN SET USERNAME=' $username' , PASSWORD='$password' WHERE ID='$id' ";
  $data = mysqli_query($db, $query);
  if ($data) 
  {
  	echo "record update succsesfulyy";
    header('Refresh: 1; URL = function.php');
  }
  else{
  	echo "record not updated";
  }
}
 else{
 	echo "<font color='red'>please click update to save changes";
 }

?>	
</body>
</html>