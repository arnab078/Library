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
		<li style="background-color: #580664;"><b><a  style=" color:white;" href="trb.php">Top rated book</a></b></li>
	    <li><b><a href="searchbook.php">Search</a></b></li>
	    <li><b><a href="contact.php">Contact Us</a></b></li>
	    <li><b><a href="about.php">About Us</a></b></li>
	    <li><b><a href="help.php">Help</a></b></li>

	</ul>

</div>


	<div id="right">
		<h1 >Category</h1>
		 <a href="science.php">Science</a><br><br>

		 <a   href="art.php">Art</a> <br><br>


		 <a href="novel.php">Novel</a><br><br>


		 <a href="bio.php"> Biography</a><br><br>

	</div>


	<div id="left"><br><br>
		<center><img src="onlinelibrary/image/openbook1.jpg" ></center>
		<br>
		<h1>Top rated Books</h1>
		<div id='b_container'>
		 <?php
		$c="Top Rated";
           $q="select * from book LIMIT 3";
           $run=mysqli_query($link,$q);
           while($row=mysqli_fetch_array($run))
            {
             $id=$row["id"];
             $name=$row["name"];
             $price=$row["price"];
             $image=$row["image"];
			echo "<a href='p.php?id=$id'><img src='onlinelibrary/bimg/$image'></a>"; 
			}
		?>
		</div>
	</div>


<center>
	<a id="logout" href="logout.php"><button type="button">Log out</button></a> 
</center>
</body>
</html>