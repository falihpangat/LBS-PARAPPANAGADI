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
 $_GET['ph'];
 $_GET['em'];
 $_GET['as'];

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

   .reg {
    margin-left: 23px;
    }

    .fn {
    margin-left: 28px;
    }
   
    .sc {
    margin-left: 5px;
    }
   
    .dob {
    margin-left: 12px;
    }

    .gen {
    margin-left: 48px;
    }

     .add {
    margin-left: 48px;
    height: 55px;

    }

     .nation {
    margin-left: 32px;
    }


     .rel {
    margin-left: 46px;
    }

     .cap {
    margin-left: 58px;
    }

     .adhaar {
    margin-left: 54px;
    }

     .batch {
    margin-left: 63px;
    }
    .phone{
      margin-left: 60px;
    }

     .email {
    margin-left: 64px;
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
  <h3>Student Update</h3>
  <form action="" method="GET">
    Register No <input class="reg" type="text" name="register" value="<?php echo $_GET['rn']; ?> "/><br><br>
    First Name <input class="fn" type="text" name="firstname" value="<?php echo $_GET['sn']; ?>"/><br><br>
    Second Name <input class="sc" type="text" name="secondname" value="<?php echo $_GET['sc']; ?>"/><br><br>
    Date Of Birth <input class="dob" type="date" name="dob" value="<?php echo $_GET['db']; ?>"/><br><br>
    Gender: <select class="gen" name="sex">
       <option><?php echo $_GET['gd']; ?></option>
       <option value="MALE">MALE</option>
       <option value="FEMALE">FEMALE</option>
     </select><br><br>
    Address <input class="add" type="text" name="address" value="<?php echo $_GET['as']; ?>"/><br><br>
    Nationality <input class="nation" type="text" name="nationality" value="<?php echo $_GET['nt']; ?>"/><br><br>
    Religion <input class="rel" type="text" name="religion" value="<?php echo $_GET['rl']; ?>"/><br><br>
    Adhaar <input class="adhaar" type="text" name="adhar" value="<?php echo $_GET['ad']; ?>"/><br><br>
    Cap Id <input class="cap" type="text" name="capid" value="<?php echo $_GET['cp']; ?>"/><br><br>
		Class: <select class="batch" name="batch">
       <option><?php echo $_GET['cl']; ?></option>
       <option value="BSC">BSC</option>
       <option value="BCA">BCA</option>
       <option value="BCOM">BCOM</option>
           </select><br><br>
    Phone <input class="phone" type="text" name="phone" value="<?php echo $_GET['ph']; ?>"/><br><br>       
    Email <input class="email" type="text" name="emailid" value="<?php echo $_GET['em']; ?>"/><br><br>
		<input class="update" type="submit" name="submit" value="update"/>

	</form>

<?php
if ($_GET['submit'])
 { 
 	$rollno = $_GET['register'];
 	$fname = $_GET['firstname'];
 	$sname = $_GET['secondname'];
  $dob = $_GET['dob'];
  $gender = $_GET['sex'];
  $address = $_GET['address'];
  $nation = $_GET['nationality'];
  $religion = $_GET['religion'];
  $adhar = $_GET['adhar'];
  $capid = $_GET['capid'];
  $batch = $_GET['batch'];
  $phone = $_GET['phone'];
  $email = $_GET['emailid'];
   $query = "UPDATE STUDENT_REG SET FIRSTNAME='$fname' , SECONDNAME='$sname' , DOB='$dob' , SEX='$gender' , ADDRESS='$address' , NATIONALITY='$nation' , RELIGION='$religion' , ADHAR='$adhar' , CAPID='$capid' , BATCH='$batch' , PHONE='$phone', EMAILID='$email' WHERE REGISTER='$rollno' ";
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