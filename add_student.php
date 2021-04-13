<?php
$connect=mysqli_connect('localhost','root','','attend');
if(isset($_POST['go']))
{
$date=date('y-m-d H:i:s');
$b=$_POST['name'];
$d=$_POST['address'];
$e=$_POST['contact'];
$f=$_POST['email'];
$g=$_POST['gender']; 
$h=$_POST['DOB'];
$i=$_POST['sem'];
$j=$_POST['pass'];

$k="INSERT INTO students (`DATE`,`NAME`,`ADDRESS`,`CONTACT`,`EMAIL`,`GENDER`,`DOB`,`SEMEsTER`,`PASSWORD`)
values ('$date','$b','$d','$e','$f','$g','$h','$i','$j')";
$l=mysqli_query($connect,$k); }
 ?>
<!DOCTYPE html>
 <html>
  <head>
<title>Automated Attendance System</title> 
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
<th>Address</th>
<th><input type="text" name="address" placeholder="Address" id="wid"></th>
</tr>
<tr>
<th>Contact</th>
<th><input type="text" name="contact" placeholder="Contect No" id="wid"></th>
</tr>
<tr>
<th>Email Id</th>
<th><input type="text" name="email" placeholder="Email Id" id="wid"></th>
</tr>
<tr>
<th>Gender</th> 
<th><input type="radio" name="gender" value="Male">male <input type="radio" name="gender" value="Female">Female </th> 
</tr>
<tr>
<th>Date of Birth</th>
<th><input type="Date" name="DOB" placeholder="Date of Birth"></th>
</tr>
<tr>
<th>Semeter</th>
<th><input type="text" name="sem" placeholder="Year" id="wid"></th> 
</tr>
<tr>
<th>Password</th>
<th><input type="password"  name="pass" placeholder="Password" id="wid"> </th>	
</tr>
</table>
<input type="Submit" name="go" id="sid"/>
</form> 
</body> 
</html>