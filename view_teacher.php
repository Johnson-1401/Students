<!DOCTYPE html>
<html>
<head>
	<title>Automated Attendance System</title>
	<style>
* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
.column {
  float: left;
  width: 100%;
  padding: 5px;
}
/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>	
<?php 
$con=mysqli_connect('localhost','root','','attend');
$result=mysqli_query($con,"SELECT * FROM teach");
echo"<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Subject</th>
<th>Address</th>
<th>Contect No</th>
<th>Email Id</th>
<th>Gender</th>
<th>Date of Birth</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['ID']."</td>";
	echo"<td>".$row['NAME']."</td>";
	echo"<td>".$row['SUBJECT']."</td>";
	echo"<td>".$row['ADDRESS']."</td>";
	echo"<td>".$row['CONTACT']."</td>";
	echo"<td>".$row['EMAIL']."</td>";
	echo"<td>".$row['GENDER']."</td>";
	echo"<td>".$row['DOB']."</td>";
	echo"<tr>";
}
echo"<table>";
mysqli_close($con);
 ?>
</center>
</body>
</html>