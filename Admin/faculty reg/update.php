<?php
include("../../conn.php");
error_reporting(0);
  $_GET['fn'];
  $_GET['ln'];
  $_GET['dp'];
  $_GET['sb'];
  $_GET['ql'];
  $_GET['pr'];
  $_GET['ct'];
  $_GET['em'];

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
    margin-left: 28px;
    }
   
    .sc {
    margin-left: 29px;
    }
   
    .contact {
    margin-left: 51px;
    }

    .depart {
    margin-left: 23px;
    }

     .add {
    margin-left: 18px;
    height: 55px;

    }

     .nation {
    margin-left: 32px;
    }

     .sub {
    margin-left: 54px;
    }

     .email {
    margin-left: 67px;
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
  <h3>Faculty Update</h3>
  <form action="" method="GET">
    First Name <input class="fn" type="text" name="firstname" value="<?php echo $_GET['fn']; ?>"/><br><br>
    Last Name <input class="sc" type="text" name="lastname" value="<?php echo $_GET['ln']; ?>"/><br><br>
    Qualification <input class="add" type="text" name="qualification" value="<?php echo $_GET['ql']; ?>"/><br><br>
    Profession <input class="nation" type="text" name="profession" value="<?php echo $_GET['pr']; ?>"/><br><br>
    Subject <input class="sub" type="text" name="subject" value="<?php echo $_GET['sb']; ?>"/><br><br>
    Department <input class="depart" type="text" name="department" value="<?php echo $_GET['dp']; ?>"/><br><br>
    Contact <input class="contact" type="text" name="contact" value="<?php echo $_GET['ct']; ?>"/><br><br>
    Email <input class="email" type="text" name="emailid" value="<?php echo $_GET['em']; ?>"/><br><br>
		<input class="update" type="submit" name="submit" value="update"/>

	</form>

<?php
if ($_GET['submit'])
 { 
 	$firstname = $_GET['firstname'];
 	$lastname = $_GET['lastname'];
 	$qualification = $_GET['qualification'];
  $profession = $_GET['profession'];
  $department = $_GET['department'];
  $contact = $_GET['contact'];
  $emailid = $_GET['emailid'];
  $subject = $_GET['subject'];
   $query = "UPDATE FACULTY_REG SET FIRSTNAME='$firstname' , LASTNAME='$lastname' , DEPARTMENT='$department' , SUBJECT='$subject' , QUALIFICATION='$qualification' , PROFESSION='$profession' , EMAILID=' $emailid' WHERE CONTACT='$contact' ";
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