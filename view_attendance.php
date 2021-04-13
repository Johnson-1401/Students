<?php
session_start(); // Starting Session
?>
 <!DOCTYPE html>
<html>
<head>
	<title>Automated Attendance System</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text],[type=Date], select, textarea {
  width: 100%;
  padding: 12px;
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

/* Style the container/contact section */
.container {
  border-radius: 5px;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.pos{
	width:50%;
	padding-top:50px;
}
</style>
<form method="post">
<center>
<div class="pos">
<input type="text" name="dat" placeholder="Enter The Name" id="wid">
<br><br>
<input type="text" name="teacher" placeholder="Enter The Year"  id="wid"> 
<br><br>
<input type="submit" id="sid" name="submit" value="Search">
</center>
</div>
</form>
</div>
</div> 
</div>
</body>
</html>
<?php 

if(isset($_POST['submit'])){
$_SESSION["class"]=$_POST['teacher'];
$_SESSION["attend"]=$_POST['dat'];
}
 ?>

<?php 
if (isset($_POST['submit']))
 {
if (empty($_POST['teacher']) || empty($_POST['dat'])) {
$error = "Username or Password is invalid";
}
else{
header("location:att.php"); // Redirecting To Profile Page
}
mysqli_close($conn); // Closing Connection
}
?>