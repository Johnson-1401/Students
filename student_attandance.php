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
.register{
	width:70%;
}
</style>
<center>
<div class="register">
	<form method="post">
	<input type="text" name="name" placeholder="Name" id="wid"><br><br>
	<input type="text" name="class" placeholder="Class" id="wid"><br><br>
	<select name='att' id="vid">
	    <option values='select'>Select</option>
	    <option values='Present'>Present</option>
        <option values='Absent'>Absent</option>
    </select><br><br> 
    <input type="Submit" name="go" id="sid"></form>
</div>
</center>
</body>
</html>
<?php
$connect=mysqli_connect('localhost','root','','attend');
if(isset($_POST['go']))
{
$a=date('Y-m-d H:i:s');
$c=$_POST['class'];
$d=$_POST['name'];
$e=$_POST['att'];
$k="INSERT INTO attndance (`DATE`,`NAME`,`ATTEND`,`SEM`) values ('$a','$d','$e','$c')";
$l=mysqli_query($connect,$k);
}
?>
