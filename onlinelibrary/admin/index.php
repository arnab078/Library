<?php
session_start();
include("../../connection.php");


         if(isset($_POST["submit"])) 
         {
             $Username=$_POST["Username"];
             $Password=$_POST["Password"];
             $q="select * from admin";
             $run=mysqli_query($link,$q);
             $row=mysqli_fetch_assoc($run);
            echo $u=$row["Username"];
            echo $p=$row["password"];
            if ($Username==$u && $Password==$p)
              {
                header("Location:ahome.php");
                 $id1=$row['id'];
                $_SESSION['id1']=$id1;
                echo $_SESSION['id1'];
            }
            else
            {
                header("Location:index.php?wrong_user");
            }
         }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin pannel</title>
	<link rel="stylesheet" type="text/css" href="../css/s1.css">
</head>
<body>

<div id="header">
    <h1 >ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
</div>

<div id="nav"> 
	<ul>
		<li><b><a href="###">Home</a></b></li>
		<li><b><a href="###">Issued book</a></b></li>
	    <li><b><a href="###">User Details</a></b></li>
	    <li><b><a href="###">Contact Us</a></b></li>
	    <li><b><a href="###">About Us</a></b></li>
	    <li><b><a href="###">Help</a></b></li>

	</ul>
</div>

<div id="container">
	<h2>Admin Login</h2>
	<br><br>
		<form action="" method="post">
            <p>Username-</p>
            <input  placeholder="Enter username" name="Username"><br>
            <p>Password-</p>
            <input  placeholder="Enter Password" name="Password" type="password"><br>
            <input  id="submitbtn" type="submit" name="submit" value="Login">
            
        </form>
        
        

    </br></br>


    <div align="center">
        <b>For User Log In?</b>
        <a href="../index.php"><button type="button">User Login</button></a>
    </div>
</div>

<br><br>
<div id="footer">
  <h1 >THANK YOU</h1>
</div>

</body>
</html>