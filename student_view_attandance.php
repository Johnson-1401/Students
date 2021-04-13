 <!DOCTYPE html>
<html>
<head>
	<title>Automated Attendance System</title>
</head>
<body>
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
$result=mysqli_query($con,"SELECT * FROM attndance WHERE NAME='Johnson S' ;");
echo"<table border='1'>
<tr>
<th>DATE</th>
<th>Name</th> 
<th>Class</th>
<th>Attendance</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>"; 
	echo"<td>".$row['DATE']."</td>";
	echo"<td>".$row['NAME']."</td>";
    echo"<td>".$row['SEM']."</td>";
	echo"<td>".$row['ATTEND']."</td>";
	echo"<tr>";
}
echo"<table>";
mysqli_close($con);
 ?>
</center>
</body>
</html>