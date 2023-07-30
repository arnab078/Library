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

<div id="container2">
	<h2 >Biography Books</h2>
	<table id="table">
		<tr>
			<th>NAME</th>
			<th>Author</th>
			<th>Book</th>
		</tr>

		<?php
		$c="Biography";
          $q="select * from book where cotegary like '%$c%'";
           $run=mysqli_query($link,$q);
           while($row=mysqli_fetch_array($run))
            {
             $id=$row["id"];
             $name=$row["name"];
             $author=$row['author'];
             $price=$row["price"];
             $image=$row["image"];
             ?>
             <tr>
             <td><h3><font color="blue">Name</font>:<?php echo $name ?></h3></td>
             	<td><h3><font color="blue">Author</font>:<?php echo $author?></h3></td>
             	<td><center><?php echo "<a href='p.php?id=$id'><img src='onlinelibrary/bimg/$image'></a>"; ?></center></td>


             </tr>
             <?php
		}?>

	</table>
</div>

<center>
	<a id="logout" href='bio.php'><button>Back to Previous Page</button></a>
</center>
</body>
</html>