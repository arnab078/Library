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
      <li style="background-color: #580664"><b><a style="color:white;" href="sb.php">Issued Book</a></b></li>
      <li><b><a href="user.php">User Details</a></b></li>
      <li><b><a href="help.php">Help</a></b></li>

  </ul>
</div>

<div id="container2">
	<br><br>
  <center>
     <h1>Issued Book List</h1>
  </center>
       <table id="table">
           <tr>
               <th width="200" height="50">Book id</th>
               <th width="200" height="50">Book Name</th>
               <th width="200" height="50">User id</th>
               <th width="200" height="50">User Name</th>
               <th width="200" height="50">Mobile No.</th>
               <th width="200" height="50">E-Mail</th>
               <th width="200" height="50">Address</th>
               <th width="200" height="50">City</th>
               <th width="200" height="50">Pincode</th>
           </tr>
           <?php
           $q="select * from issued";
           $run=mysqli_query($link,$q);
           while($row=mysqli_fetch_array($run))
            {
              $b_id=$row["b_id"];
              $r_id=$row["r_id"];

              // Retrieved book details
              $q2="SELECT * FROM book WHERE id='$b_id'";
              $r2=mysqli_query($link,$q2);
              $row2=mysqli_fetch_assoc($r2);

              // Retrieved Registered student details
              $q3="SELECT * FROM reg WHERE id='$r_id'";
              $r3=mysqli_query($link,$q3);
              $row3=mysqli_fetch_assoc($r3);
             ?>
          <tr>
             <td width="200" height="50"><center><?php echo $row["b_id"] ?></center></td> 
             <td width="200" height="50"><center><?php echo $row2["name"] ?></center></td> 
               <td width="200" height="50"><center><?php echo $row["r_id"] ?></center></td> 
               <td width="200" height="50"><center><?php echo $row3["uname"] ?></center></td> 
               <td width="200" height="50"><center><?php echo $row3["mobno"] ?></center></td> 
              <td width="200" height="50"><center><?php echo $row3["email"] ?></center></td> 
               <td width="200" height="50"><center><?php echo $row["r_add"] ?></center></td> 
               <td width="200" height="50"><center><?php echo $row["r_city"] ?></center></td> 
              <td width="200" height="50"><center><?php echo $row["r_pin"] ?></center></td>  
          </tr>
          <?php
           }
          ?>
       </table>
         </center>
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