<?php
session_start();
if ($_SESSION['id']==TRUE) {
}
else{
		     header("Location:index.php?wrong user");

}
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>User dasboard</title>
	<link rel="stylesheet" type="text/css" href="onlinelibrary/css/s1.css">
</head>
<body>

<div id="header">
	<h1>ONLINE LIBRARY MANAGEMENT SYSTEM</h1>	
</div>

<div id="nav"> 
	<ul>
		<li><b><a href="ahome.php"> Home</a></b></li>
		<li><b><a href="trb.php">Top rated book</a></b></li>
	    <li><b><a href="searchbook.php">Search</a></b></li>
	    <li style="background-color: #580664;"><b><a  style=" color: white;" href="contact.php">Contact Us</a></b></li>
	    <li><b><a  href="about.php">About Us</a></b></li>
	    <li ><b><a href="help.php">Help</a></b></li>

	</ul>

</div>

<div id="container">
	<center>
		<h1>Contact us</h1>
 	</center>
	<br><br>
	<center>
             <h1>Online library</h1>
             <h3>contact with us </h3>
             <h3>E-mail : arnabbhadra379@gmail.com</h3>
             <h3>mobile no. : 6295308056</h3>
    </center>
</div>

<br>
<center>
	<a id="logout" href="logout.php"><button type="button">Log out</button></a> 
</center>
</body>
</html>