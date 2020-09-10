<?php
include("conn.php");
error_reporting(0);

 $_GET['rn'];
 $_GET['sn'];
 $_GET['cl'];
 $_GET['sc'];
 $_GET['db'];
 $_GET['gd'];
 $_GET['rl'];
 $_GET['nt'];
 $_GET['ad'];
 $_GET['cp'];
 $_GET['em'];
 $_GET['addr'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Full details</title>
</head>
<link rel="icon" type="image/png" href="../../image/Lbs logo.png">

<style type="text/css">
   body{
   	margin-top: 10px;
   	padding-left:450px;

   }
   form input{
   	background-color:  #B8860B;
   	color: white;
   	box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
   	font-size: 17px;
   	width: 350px;
   }

   .reg {
   	margin-left: 19px;
    }

    .fn {
   	margin-left: 28px;
    }
   
    .sc {
   	margin-left: 7px;
    }
   
    .dob {
   	margin-left: 7px;
    }

    .gen {
   	margin-left: 59px;
    }

     .add {
   	margin-left: 51px;
   	height: 50px;

    }

     .nation {
   	margin-left: 18px;
    }


     .rel {
   	margin-left: 36px;
    }

     .cap {
   	margin-left: 76px;
    }

     .adhaar {
   	margin-left: 55px;
    }

     .batch {
   	margin-left: 71px;
    }

     .email {
   	margin-left: 73px;
    }
	
  

   .link{
  
    margin-left: 720px;
    margin-bottom: 10px;
    padding-top: 0px;
  }
  .back{
    padding-bottom: 5px;

    font-size: 20px;
  }
  
	
</style>
<body>
   <header>
     <div class="link">
     <a href="../../index.php">Home</a>
     <a href="../index.html">Admin</a>
   </div>
  
   </header>
	<form class="form" method="POST">
		
		REGISTER NO:<input class="reg" type="text" value="<?php echo $_GET['rn']; ?>"><br><br>
		FIRST NAME:<input class="fn" type="text" value="<?php echo $_GET['sn']; ?>"><br><br>
		SECOND NAME:<input class="sc" type="text" value="<?php echo $_GET['sc']; ?>"><br><br>
		DATE OF BIRTH:<input class="dob" type="text" value="<?php echo $_GET['db']; ?>"><br><br>
		GENDER:<input class="gen" type="text" value="<?php echo $_GET['gd']; ?>"><br><br>
		ADDRESS:<input class="add" class="address" type="text" value="<?php echo $_GET['addr']; ?>"><br><br>
		NATIONALITY:<input class="nation" type="text" value="<?php echo $_GET['nt']; ?>"><br><br>
		RELIOGION:<input class="rel" type="text" value="<?php echo $_GET['rl']; ?>"><br><br>
		CAPID:<input class="cap" type="text" value="<?php echo $_GET['cp']; ?>"><br><br>
		ADHAAR:<input class="adhaar" type="text" value="<?php echo $_GET['ad']; ?>"><br><br>
		BATCH:<input class="batch" type="text" value="<?php echo $_GET['cl']; ?>"><br><br>
		EMAIL:<input class="email" type="text" value="<?php echo $_GET['em']; ?>"><br><br>
	
  <div class="back">
     <a href="fetch.php">Back</a>
   </div>  
	</form>

 
</body>
</html>