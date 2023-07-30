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
	    <li><b><a href="about.php">About Us</a></b></li>
	    <li><b><a href="help.php">Help</a></b></li>

	</ul>
</div>

<div id="container">
	
		<?php
			$c=$_GET["id"];
         	$q="select * from book where id like '%$c%'";
          	$run=mysqli_query($link,$q);
            $row=mysqli_fetch_array($run);
             $id=$row["id"];
             $name=$row["name"];
             $author=$row["author"];
             $price=$row["price"];
             $image=$row["image"];
		?>
		 <div id="abc">
		 	<center>
          	<?php echo "<img src='onlinelibrary/bimg/$image'>";?>
          	<br><br>
         	<h3>
           	 <font color="red">Name</font> : <?php echo $name ?><br>
         	 <font color="red">Author</font> : <?php echo $author ?><br>
          	 <font color="red">Price</font> : <?php echo "$price.00 Rs."?>
         	</h3> 
         	<br>
          	<a href="p2.php?id=<?php echo $id; ?>">Read Now</a>

		 	</center>
		 </div>


	
</div>

<br><br>
<center>
	<a id="logout" href="logout.php"><button type="button">Log out</button></a> 
</center>
</body>
</html>