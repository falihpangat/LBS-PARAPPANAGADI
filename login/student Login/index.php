<?php
$connect = mysqli_connect("localhost","root","","lbscollege") or die("connection failed");
if (!empty($_POST['save'])) {
	$emailid=$_POST['un'];
	$id=$_POST['pw'];
	$query="select * from student_reg where emailid='$emailid' and register='$id'";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		 header( "Location: studentpage.html");;
	}
	else {
		"login not successful";
	}
}


?>



<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
	<title>LBS login form</title>
	<style>
  @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" ;
   body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-color:black;
  background-size: cover;
  
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;


}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #008080;
  margin-bottom: 50px;
  padding: 13px 0

}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #008080;

}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;

}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;

}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #008080;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12 0;
} 

.submit{
 width: 100%;
  background: none;
  border: 2px solid #008080;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12 0;	
}


 </style>
</head>
<body>
  <div class="login-box">
  	<h1> Student Login</h1>
 <form method="POST"> 	
  	<div class="textbox">
      <i class="fa fa-user" aria-hidden="true"></i>
    <input type="text" placeholder="Email Id" name="un" values="">
  	</div>

  	<div class="textbox">
      <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="password" placeholder="reg no" name="pw" values="">
  	</div>
  	<div class=btn>
   <input class="submit" type="submit" name="save" value="login">
</div>
  </div>
  </form>
</body>
</html>