<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="generator" content="falih pgt">
	<title>Application form</title>
<style type="text/css">
 body{
 	margin:0;
 	padding:0;
 	font-family: sans-serif;
 	background-color: darkgrey;
 	background-size: contain; 
 }
 .address{
 	 padding-top: 10px;
    padding-left: 00px;
 }
 .about{
 	margin: 00px;
    padding-top: 00px;
    padding-left: 00px;	
 }	
 .registration{
 	 margin: 0;
    padding-top: 00px;
    padding-left: 10px;
    font-family: Rockwell Extra Bold; 
    font-size: 20px;
    color: #008080; 
 }
 .form{
 	 margin: 0;
    padding-top: 80px;
    padding-left: 450px;
 }
 .submit{
 	margin: 0;
    padding: 0;
    min-height: 4vh;
    background: #031321;
    font-family: consolas;
    position: relative;
    position: relative;
    display: inline-block;
    padding: 8px 3px;
    color: #2196f3;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-decoration: none;
    font-size: 24px;
    overflow: hidden;
    transition: 0.2s;
 }
	
</style>
</head>
<body>
	<div class="heading">
	<span class="address"></span><h1 align="center">LBS MODEL DEGREE COLLEGE(APPLIED SCIENCE)</h1>
	  <h5 align="center"><strong> UNIT OF LBS CENTER FOR SCIENCE & TECHNOLOGY, A GOVT OF KERALA UNDERTAKING </strong></h5>
	  <h3 align="center">PARAPPANAGADI, MALAPPURAM-676303</h3></span>


	<div class="registration">
	<h1 align="center"><strong>APPLICATION FOR REGISTRATION</strong></h1>	

 </div>
 <div class="form">
 	<form action="insert.php"  method="POST">
        <strong>REGISTER ID  :</strong>&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="register" required><br><br>
 		<strong>FIRST NAME  :</strong> &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="firstname" required><br><br>
 		<strong>SECOND NAME :</strong> <input type="text" name="secondname"><br><br>
 		<strong>Date of Birth  :</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="Date" name="dob" required><br><br>
 		<strong>SEX  :</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio"name="sex" value="male"/>MALE
                                            <input type="radio" name="sex" value="female"/>FEMALE
        <br><br>
 		<strong>NATIONALITY  :&nbsp&nbsp&nbsp&nbsp</strong><input type="text" name="nationality" required><br><br>
 		<strong>RELIGION  :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong><input type="text" name="religion" required><br><br>
 		<strong>ADHAR  :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong><input type="text" name="adhar" required><br><br>
 		<strong>CAP ID  :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong><input type="text" name="capid" required><br><br>
 		<strong>EMAIL ID  :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong><input type="text" name="emailid" required><br><br>
        <strong>BATCH  :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong><input type="text" name="batch" required><br><br>
 		<button class="submit" type="submit" name="submit">SUBMIT</button>
 	</form>

</body>
</html>