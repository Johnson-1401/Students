<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 20%;
  height: 800px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 80%;
  border-left: none;
  height: 800px;
}
#log{
  width: 100px; 
  height: 45px;
  border-radius: 10px;
  background-color: red;
  border-color: red;
  align:right;
}
img{
  border-radius:50px;
} 
</style>
</head>
<body>
<table width="100%">
<tr>
  <th><img id="i" src="img/logo.jpg" width="60" height="60"><br></th>
  <th id="th1"><h1 style="margin-left: 75px">TEACHER ATTENDANCE SYSTEM</h1></th> 
  <th><button id="log" onclick="window.location.href='logout.php';"><p>Logout</p></button></th>
  </tr>
</table>
<hr>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'home')" id="defaultOpen">Home</button>
  <button class="tablinks" onclick="openCity(event, 'student')">Class Students</button>
  <button class="tablinks" onclick="openCity(event, 'details')">Attendance Details</button>
  <button class="tablinks" onclick="openCity(event, 'search')">Searching</button>
  <button class="tablinks" onclick="openCity(event, 'Notifications')">Notifications</button>
</div>
<div id="home" class="tabcontent">
  <h3>Home</h3>
  <span>
  <iframe src="teacherhome.php" width="1040" height="700"></iframe> 
  </span>
</div> 

<div id="student" class="tabcontent">
  <h3>Class Students</h3>
  <iframe src="student_profile.php" width="1040" height="700"></iframe>
</div>

<div id="details" class="tabcontent">
  <h3>Attendence Details</h3>
  <iframe src="attendance.php" width="1040" height="700"></iframe>
</div>

<div id="search" class="tabcontent">
  <h3>Searching Attendence Details</h3>
  <iframe src="view_attendance.php" width="1040" height="700"></iframe>
</div>

<div id="Notifications" class="tabcontent">
  <h3>Notifications</h3>
  <iframe src="notification.php" width="1040" height="700"></iframe>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html> 