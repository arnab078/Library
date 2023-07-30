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
      </center>
        <form action="" method="post">
          	<p>Name</p>
            <input type="text" name="name" placeholder="Enter Name" title="Enter Name" value="<?php echo $_SESSION['uname'];?>" style="cursor:not-allowed;" disabled><br>
            
            <p>Mobile no.</p>
            <input type="text" name="mobno" placeholder="Enter Mobile No." title="Enter Mobile No." value="<?php echo $_SESSION['mobno'];?>" style="cursor:not-allowed;" disabled>

            <p>Email</p>
            <input type="text" name="email" placeholder="Enter E-Mail" title="Enter E-Mail" value="<?php echo $_SESSION['email'];?>" style="cursor:not-allowed;" disabled>
            
            <p>Address</p>
            <input type="text" name="add" placeholder="Enter Address" title="Enter Address" required="required">

            <p>City</p>
            <input type="text" name="city" placeholder="Enter City" title="Enter City" required="required">

            <p>Pin code</p>
            <input type="text" name="pcode" placeholder="Enter Pincode" title="Enter Pincode" required="required">

            <input id="submitbtn" type="submit" name="submit1" value="Download Now" >
          </form>  

            <?php
          if (isset($_POST['submit1']))
           {
             $r_id=$_SESSION['id'];
             $r_add=$_POST['add'];
             $r_city=$_POST['city'];
             $r_pin=$_POST['pcode'];
             
             if (mysqli_query($link,"insert into issued (r_id,b_id,r_city, r_add, r_pin) values('$r_id','$id','$r_city','$r_add','$r_pin')"))
            {
              header('Expires:0');
              // header("Cache-Control: no-store, no-cache, must-revalidate");
              // header("Cache-Control: post-check=0, pre-check=0", false);
              // header("Pragma: no-cache");
              header('content-type: application/pdf');
              header('content-Disposition: attachment; filename='.$row['name'].'.pdf');
              readfile("bpdf/".$row['pdf']);
              // exit;
             }
             else 
             {
             echo "<script>alert('Data Not Inserted. Please try again later')</script>";
             }
           }
          ?>		 
     </div>	
</div>
<br><br>
<center>
  <a id="logout" href="logout.php"><button type="button">Log out</button></a> 
</center>
</body>
</html>