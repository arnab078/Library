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
	    <li style="background-color: #580664;"><b><a  style=" color:white;" href="searchbook.php">Search</a></b></li>
	    <li><b><a href="contact.php">Contact Us</a></b></li>
	    <li><b><a href="about.php">About Us</a></b></li>
	    <li><b><a href="help.php">Help</a></b></li>

	</ul>
</div>



<div id="container">
<form action="searchbook.php" method="post">
            <p>Bookname:</p>
            <input  name="searchbook" placeholder="Enter Bookname" required>
            <input type="submit" name="submit" value="Enter">

</form>
		<br><br>
		 <table id="table">
		 	<tr>
             	<th width="200" height="50">Name</th>
            	<th width="200" height="50">Author Name</th>
                <th width="200" height="50">Price</th>
                <th width="200" height="50">Cotegary</th>
                <th width="200" height="50">Go</th>
            </tr>
			<?php
			if (isset($_POST['submit'])) {
				$name=$_POST['searchbook'];
			    $q="select * from book where name like '%$name%'";
	          	$run=mysqli_query($link,$q);
	           	while($data=mysqli_fetch_assoc($run))
	            {
	           
			?>
			<tr>
            	<td width="200" height="50"><center><?php echo $data['name']; ?></center></td> 
             	<td width="200" height="50"><center><?php echo $data['author']; ?></center></td> 
              	<td width="200" height="50"><center><?php echo $data['price']; ?></center></td> 
             	<td width="200" height="50"><center><?php echo $data['cotegary']; ?></center></td> 
               
                <td width="200" height="50">
                	<center>
                	<?php echo "<a id='logout' href='p.php?id=$data[id]'><button type= button>GO</button></a>";?> 
                	</center></td>
            </tr>
			<?php
				}}
			?>
		</table>
</div>

<br>
<center>
	<a id="logout" href="logout.php"><button type="button">Log out</button></a> 
</center>

</body>
</html>