<?php
include("connection.php");
session_start();

if(isset($_POST["submit"])) 
{
    $Username=$_POST["Username"];
    $Password=$_POST["Password"];
    $q="select * from reg where email='$Username' && psw='$Password'";
    $run=mysqli_query($link,$q);
    if (mysqli_num_rows($run)>0)
      {
        $row=mysqli_fetch_assoc($run);
        $_SESSION['id']=$row['id'];
        $_SESSION['uname']=$row['uname'];
        $_SESSION['email']=$row['email'];
        $_SESSION['mobno']=$row['mobno'];
        header("Location:ahome.php");

      }
  else
    {
      echo "<script>alert('Login email or password is not matched');window.location.href=''</script>";
    }
}
        


?>

<!DOCTYPE html>
<html>
<head>
	<title>Library management system</title>
	<link rel="stylesheet" type="text/css" href="onlinelibrary/css/s1.css">
</head>

<body>

<div id="header">
<h1 style="padding: 10px">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
</div>

   <div id="nav"> 
    	<ul>
    		<li><b><a href="##">Home</a></b></li>
    		<li><b><a href="##">Top rated book</a></b></li>
    	    <li><b><a href="##">Contact Us</a></b></li>
    	    <li><b><a href="##">About Us</a></b></li>
    	    <li><b><a href="##">Help</a></b></li>
    	</ul>
    </div>

    <div id="container">
    	<h2>User Login</h2>
    	<br><br>
    	<form action="index.php" method="post">
            <p>Email-</p>
            <input  placeholder="Enter Email" name="Username"><br>
            <p>Password-</p>
            <input  placeholder="Enter Password" name="Password" type="Password"><br>
            <input  id="submitbtn" type="submit" name="submit" value="Login">
        </form></br><br>

        <div>
            <b>For New Registration</b>
            <a href="sign.php"><button type="button">Sigh Up</button></a>
            </br></br></br>
            <b>Only For Admin</b>
            <a href="onlinelibrary/admin/index.php"><button type="button" >Admin Login</button></a> 
        </div>
    </div>

<br><br>
<div id="footer">
	<h1 >THANK YOU</h1>
</div>

</body>
</html>