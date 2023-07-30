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
	    <li><b><a href="contact.php">Contact Us</a></b></li>
	    <li style="background-color: #580664;"><b><a  style=" color: white;" href="about.php">About Us</a></b></li>
	    <li ><b><a href="help.php">Help</a></b></li>

	</ul>

</div>
<div id="container">
	<center>
		<h1>About Us</h1>
 	</center>
	<br><br>
	<center>
             <h3>The system helps the all students to keep a constant track of all the books available in the library.The system is user-friendly and error free.Here student can search your book by name and you can find the book by cotegarywise.</h3>
    </center>
</div>

<br>
<center>
	<a id="logout" href="logout.php"><button type="button">Log out</button></a> 
</center>
</body>
</html>