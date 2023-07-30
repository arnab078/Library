<?php
session_start();
if ($_SESSION['id1']==TRUE) {
}
else{
         header("Location:../index.php?wrong user");

}
include("../../connection.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin dasboard</title>
  <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>

<div id="header">
  <h1>ONLINE LIBRARY MANAGEMENT SYSTEM</h1> 
</div>

<div id="nav"> 
  <ul>
    <li><b><a href="ahome.php">Home</a></b></li>
    <li><b><a href="ib.php">Insert Book</a></b></li>
      <li><b><a href="bl.php">Book List</a></b></li>
      <li><b><a href="sb.php">Issued Book</a></b></li>
      <li><b><a href="user.php">User Details</a></b></li>
      <li style="background-color: #580664"><b><a style="color:white;" href="help.php">Help</a></b></li>

  </ul>
</div>

<div id="container">
	<br><br>
	<center>
		<h2>for any help contact at adminonlinelibrary@gmail.com</h2>
	</center>
	<br>
	<br>
</div>


<div id="footer"><br>
  <h1 >THANKING YOU</h1>

  <br>
  <center>
    <a id="logout" href="../../logout.php"><button type="button">Log out</button></a>
  </center>
</div>

</body>
</html>