 <!DOCTYPE html>
<html>
<head>
	<title>Automated Attendance System</title>
</head>
<body>
<style>
img{
	width:500px;
	height:550px;
	border-radius:25px;
}
h3{
	float:left;
}
table{
	background-color:lightgray;
}
</style>
<table width="100%">
<tr>
<th>
<img src="img/pro.jpg">
</th>
<th>
<?php 
$con=mysqli_connect('localhost','root','','attend');
$result=mysqli_query($con,"SELECT * FROM students WHERE id='1';");
echo"<table width=90%>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr><td><h3>Name :</h3></td><td><h3> ".$row['NAME']."</h3></td></tr>";
	echo"<tr><td><h3>ID No :</h3></td><td><h3>".$row['ID']."</h3></td></tr>";
    echo"<tr><td><h3>Address :</h3></td><td><h3>".$row['ADDRESS']."</h3></td><tr>";
	echo"<tr><td><h3>Contect No :</h3></td><td><h3>".$row['CONTACT']."</h3></td><tr>";
	echo"<tr><td><h3>Email Id :</h3></td><td><h3>".$row['EMAIL']."</h3></td><tr>";
	echo"<tr><td><h3>Gender :</h3></td><td><h3>".$row['GENDER']."</h3></td><tr>";
	echo"<tr><td><h3>Date of Birth :</h3></td><td><h3>".$row['DOB']."</h3></td><tr>";
	echo"<tr><td><h3>Class :</h3></td><td><h3>".$row['SEMESTER']."</h3></td><tr>";
}
echo"<table>";
mysqli_close($con);
 ?>
</th>
</tr>
<table>
</center>
</body>
</html>