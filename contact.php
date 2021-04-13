
<?php
$connect=mysqli_connect('localhost','root','','attend');
if(isset($_POST['go']))
{
$date=date('y-m-d H:i:s');
$a=$_POST['name'];
$z=$_POST['email'];
$b=$_POST['subject'];
$i="INSERT INTO cont (`DATE`,`NAME`,`EMAIL`,`SUBJECT`) values ('$date','$a','$z','$b')";
$j=mysqli_query($connect,$i);
}
?>
<!DOCTYPE html>
<html>      
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
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
input[type=file] {
  background-color: gray;
  color: black;
  padding: 12px 20px;
  width:100%;
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
</style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="column">
      <img src="img/Capture1.PNG" width="300" height="415" style="width:100%" >
    </div>
    <div class="column">
      <form method="post">
        <label for="fname">Name</label>
        <input type="text"  name="name" placeholder="Your name..">
        <label for="lname">Email</label>
        <input type="text" name="email" placeholder="Your Email ID..">
        <label for="subject">Subject</label>
        <textarea name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" name="go"/>
      </form>
    </div>
  </div>
</div>
</body>
</html>