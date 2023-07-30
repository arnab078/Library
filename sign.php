<?php
include("connection.php");


   if(isset($_POST["submit"]))
     {
         $uname=$_POST["uname"];
         $email=$_POST["email"];
         $mobno=$_POST["mobno"];
         $gender=$_POST["gender"];
         $clg=$_POST["clg"];
         $psw=$_POST["psw"];
         $rpsw=$_POST["rpsw"];

         if($psw!=$rpsw)
          die("<script>alert('Password and confirm password not matched');window.location.href=''</script>");

         if(mysqli_query($link,"insert into reg(uname, email, mobno, gender, clg, psw) value('$uname','$email','$mobno','$gender','$clg','$psw')")  )
         {
            echo "<script>alert('User registered sucessfully. Your login email is ".$email." and password is ".$psw."');window.location.href='index.php'</script>";
          }
          else
          {
           echo "<script>alert('User registration failed . Please try again later')</script>";
           }
     }
          

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
    <form action="" method="post" enctype="multipart/form-data">
        <table>
          <tr>
              <td width="200px" height="50px"><p>Name:</p></td>
                <td width="200px" height="50px"><input type="text" name="uname" placeholder="Enter Name" required="required"></td>
          </tr> 
          <tr>
              <td width="200px" height="50px"><p>Email:</p></td>
                <td width="200px" height="50px"><input type="email" name="email" placeholder="Enter Email" required="required"></td>
          </tr> 
          <tr>
              <td width="200px" height="50px"><p>Mobile No:</p></td>
              <td width="200px" height="50px"><input type="integar" name="mobno" placeholder="Mobile Number" required="required"></td>
          </tr>
          <tr>
             <td width="200px" height="50px"><p>Gender:</p></td>
             <td width="200px" height="50px">
                <select name="gender" >
                  <option >---Select---</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>
                </select>
             </td>
          </tr>

          <tr>
            <td width="200px" height="50px"><p>College/University:</p></td>
            <td width="200px" height="50px"><input type="text" name="clg" placeholder="College/University" required="required"></td>
          </tr>
          
          <tr>
              <td width="200px" height="50px"><p>Password:</p></td>
              <td width="200px" height="50px"><input type="password" name="psw" placeholder="Password" required="required"></td>
          </tr> 
          
          <tr>
              <td width="200px" height="50px"><p>Confirm Password:</p></td>
              <td width="200px" height="50px"><input type="password" name="rpsw" placeholder="Conform Password" required="required"></td>
          </tr>
        </table>
         
        <input id="submitbtn" type="submit" name="submit" value="SAVE"></td>
    </form>
  
    </br></br>
    <div>
      <center>
              <b>Already a user?</b>
              <a href="index.php"><button type="button">User Login</button></a> 
      </center>    
    </div>
</div>   

<br><br>
<div id="footer">
  <h1 >THANK YOU</h1>
</div>

</body>
</html>