<html>
<head>
<title></title>
<style type="text/css">
	h1
{
	font-size:30px;	
	margin-top:30px;
}
.registertable
{
	margin-top:40px;
}
.registertable input
{
	height:40px;
	weight:150px;
	font-weight:bold;
	font-size:20px;
	background-color: #f8f8f8;
    color: #555555;
    border: 1px solid #cccccc;
    border-radius: 3px;
    font-size: 18px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.075);
    padding: 10px 16px;
    font-style:italic;
    margin-top:10px;
    margin-left:15px;

}
.registertable #add
{
	background-color: #3498db;
    color: white;
    cursor: pointer;
    font-weight: bold;
    padding: 15px 16px;
    outline: none;
    margin-top: 20px;
    font-size: 14px;
    letter-spacing: 1px;
    border: none;
    white-space: nowrap;
    border-radius: 3px;
}
.fulldetail
{
	border:1px solid black;
	float:left;
	margin-left:20px;
	margin-top:20px;
	width:250px;
	text-align:center;
	background-color:#000080;
	color:white;
}
.details
{
	width:900;
	margin-left:100px;
}
li
{
	display:inline;
}
li button
{
	background-color:#efefef;
	padding:15px 21px;
	margin-left:20px;
	
}
button a
{
	text-decoration:none;
	color:blue;
	font-size:20px;
}
#student h3
{
	background-color:blue;
	color:white;
	height:70px;
	text-align:center;
	font-size:30px;
	padding:10px;
	border-bottom:2px solid black;
}

.fulldetail #na
{
	background-color:white;
	color:blue;
	width:150px;
	margin-left:35px;
	padding:5px 10px;
	
	
}
.present
{
	margin-top:40px;
}
.present input
{
	height:40px;
	weight:150px;
	font-weight:bold;
	font-size:20px;
	background-color: #fff;
    color: #555555;
    border:none;
    border-bottom: 2px solid #cccccc;
    border-radius: 3px;
    font-size: 18px;
    margin-left:20px;
     padding: 10px 16px;
    font-style:italic;
    margin-top:10px;
}
.present h3
{
	font-size:30px;
}
.present #submit
{
	background-color:#3498db ;
    color: white;
    cursor: pointer;
    font-weight: bold;
    padding: 15px 16px;
    outline: none;
    margin-top: 20px;
    font-size: 14px;
    letter-spacing: 1px;
    border: none;
    white-space: nowrap;
    border-radius: 3px;
}
.attandance,.studentcourseall
{
	margin-top:20px;
}
.courseall
{
	margin-top:20px;
}
.attandance td
{
	padding:10px 10px;

}
.courseall th
{
padding:10px 10px;	
}
.courseall td
{
	padding:10px 10px;

}
.standard,.studentcourse
{
	margin-top:40px;
}
.standard th
{
padding:10px 10px;	
}
.standard input
{
	
	height:40px;
	weight:150px;
	font-weight:bold;
	font-size:20px;
	background-color: #f8f8f8;
    color: #555555;
    border: 1px solid #cccccc;
    border-radius: 3px;
    font-size: 18px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.075);
    padding: 10px 16px;
    font-style:italic;
    margin-top:10px;
    margin-left:15px;
</style>
</head>
<body>
 <div id="student">
    <h3 >Student Internal</h3>

       
<center>
	<form action="insert.php" method="POST">
<div class='present'>

<label><input type="text" name="id" placeholder="registerid..*"/></label><br><br>
<label><input type="text" name="name" placeholder="Name..*"> </label>
<label><input type="text" name="course" placeholder="Course..*"> </label>
<label><input type="text" name="sem" placeholder="Semester..*"> </label>
<label><input type="text" name="sub" placeholder="subject..*"> </label>
<label><input type="text" name="internal" placeholder="Internal..*"> </label><br><br>
<label><input type="submit" name="submit" value="Add"></label>
</div>
<div class="attandance"></div>
</form>
</center>
</body>
</html>