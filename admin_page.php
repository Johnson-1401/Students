<?php
$connect=mysqli_connect('localhost','root','','attend');
if(isset($_POST['go']))
{
$date=date('y-m-d H:i:s');
$b=$_POST['name'];
$c=$_POST['subject'];
$d=$_POST['address'];
$e=$_POST['contact'];
$f=$_POST['email'];
$g=$_POST['gender'];
$h=$_POST['age'];
$i=$_POST['pass'];
$j="INSERT INTO teach (`DATE`,`NAME`,`SUBJECT`,`ADDRESS`,`CONTACT`,`EMAIL`,`GENDER`,`DOB`,`PASSWORD`) values ('$date','$b','$c','$d','$e','$f','$g','$h','$i')";
$k=mysqli_query($connect,$j);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Automated Attendance System</title>
</head>
<body>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin-top:30px; 
}

* {
  box-sizing: border-box;
}
label{
    margin-left:100px;
}
/* Style inputs */
input[type=text],[type=password],[type=Date], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=radio]{
  width: 10%;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;

  resize: vertical;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  width:100%;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
a:link, a:visited{
  background-color: blue;
  color: white;
  width:100%;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
}
</style>
<form method="post">
<table width="90%">
<tr>
<th>Name</th>
<th><input type="text" name="name" placeholder="Name" id="wid"></th>
</tr>
<tr>
<th>Subject</th>
<th><input type="text" name="subject" placeholder="Subject" id="wid"></th>
</tr>
<tr>
<th>Address</th>
<th><input type="text" name="address" placeholder="Address" id="wid"></th>
</tr>
<tr>
<th>Contect No</th>
<th><input type="text" name="contact" placeholder="Contect No" id="wid"></th>
</tr>
<tr>
<th>Email Id</th>
<th><input type="text" name="email" placeholder="Email Id" id="wid"></th>
</tr>
<tr>
<th>Gender :</th>
<th><input type="radio" name="gender" value="Male">male <input type="radio" name="gender" value="Female">Female</button></th>
</tr>
<tr>
<th>Date of birth</th>
<th><input type="Date" name="age" placeholder="Date of birth" id="wid"></th>
</tr>
<tr>
<th>Password</th>
<th><input type="password" name="pass" placeholder="Password" id="wid"></th>
</tr>
</table>
<input type="submit" name="go" id="sid"/>
</form>
</body>
</html>