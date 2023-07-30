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
      <li style="background-color: #580664"><b><a style="color:white;" href="user.php">User Details</a></b></li>
      <li><b><a href="help.php">Help</a></b></li>

  </ul>
</div>

<div id="container2">
	<br><br>
  <center>
       <h1>User Details</h1>
  </center>
       <table id="table">
           <tr>
               <th width="200" height="50">User Name</th>
               <th width="200" height="50">Email</th>
               <th width="200" height="50">Mobile no.</th>
               <th width="200" height="50">Gender</th>
               <th width="200" height="50">College</th>
               <th width="200" height="50">Password</th>
               <th width="200" height="50">Delete</th>

           </tr>
           <?php
           $q="select * from reg";
           $run=mysqli_query($link,$q);
           while($row=mysqli_fetch_array($run))
            {
             $uname=$row["uname"];
             $email=$row["email"];
             $mobno=$row["mobno"];
             $gender=$row["gender"];
             $clg=$row["clg"];
             $psw=$row["psw"];
              $id=$row["id"];
             ?>
          <tr>
             <td width="200" height="50"><center><?php echo $uname ?></center></td> 
              <td width="200" height="50"><center><?php echo $email ?></center></td> 
               <td width="200" height="50"><center><?php echo $mobno ?></center></td> 
               <td width="200" height="50"><center><?php echo $gender ?></center></td> 
              <td width="200" height="50"><center><?php echo $clg ?></center></td> 
               <td width="200" height="50"><center><?php echo $psw ?></center></td> 
               
               <td width="200" height="50"><center><?php echo"<a id='logout' href='udelete.php?id=$id'>"?><button>Delete</button></a></center></td>   
          </tr>
          <?php
           }
          ?>
       </table>
     
</div>



    
<br>
<div id="footer"><br>
  <h1 >THANKING YOU</h1>

  <br>
  <center>
    <a id="logout" href="../../logout.php"><button type="button">Log out</button></a>
  </center>
</div>
</div>
</body>
</html>