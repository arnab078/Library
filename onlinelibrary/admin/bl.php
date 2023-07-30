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
      <li style="background-color: #580664"><b><a style="color:white;" href="bl.php">Book List</a></b></li>
      <li><b><a href="sb.php">Issued Book</a></b></li>
      <li><b><a href="user.php">User Details</a></b></li>
      <li><b><a href="help.php">Help</a></b></li>

  </ul>
</div>

<div id="container">
	<br><br>
  <center>
       <h1>BOOK LIST</h1><br><br>
  </center>
  <form action="" method="post">
      <center>
       <select name="c">
         <option>All Category</option>
         <option>Science</option>
         <option>Art</option>
         <option>Novel</option>
         <option>Biography</option>
       </select>
     </center>
      
       <input id="submitbtn" type="submit" name="submit" value="ENTER">
     </form>

     <br>
       <table id="table" border="1" align="center">
        
           <tr>
              <th width="200" height="50">Name</th>
              <th width="200" height="50">Author Name</th>
              <th width="200" height="50">Price</th>
              <th width="200" height="50">Cotegary</th>
              <th width="200" height="50">Delete</th>
           </tr>

            
           <?php
        if(isset($_POST['submit']))
         {
           $c=$_POST['c'];
           if($c=="Science")
            {
              $qq="select * from book where cotegary like '%$c%'";
              $run=mysqli_query($link,$qq);
              while($row=mysqli_fetch_array($run))
             {
                 $name=$row["name"];
                  $author=$row["author"];
              $price=$row["price"];
              $cotegary=$row["cotegary"];
              $id=$row["id"];
              ?>
              <tr>
             <td width="200" height="50"><center><?php echo $name ?></center></td> 
              <td width="200" height="50"><center><?php echo $author ?></center></td> 
              <td width="200" height="50"><center><?php echo $price ?></center></td> 
               <td width="200" height="50"><center><?php echo $cotegary ?></center></td> 
              <td width="200" height="50"><center><?php echo"<a id='logout' href='bdelete.php?id=$id'>"?><button>Delete</button></a></center></td> 

              </tr>
             <?php 
             }
            }
         # _____________________________________________
            else if($c=="Art")
            {
              $qq="select * from book where cotegary like '%$c%'";
              $run=mysqli_query($link,$qq);
              while($row=mysqli_fetch_array($run))
             {
                 $name=$row["name"];
                 $author=$row["author"];
              $price=$row["price"];
              $cotegary=$row["cotegary"];
              $id=$row["id"];
              ?>
              <tr>
             <td width="200" height="50"><center><?php echo $name ?></center></td> 
             <td width="200" height="50"><center><?php echo $author ?></center></td>
              <td width="200" height="50"><center><?php echo $price ?></center></td> 
               <td width="200" height="50"><center><?php echo $cotegary ?></center></td> 
              <td width="200" height="50"><center><?php echo"<a id='logout'  href='delete.php?id=$id'>"?><button>Delete</button></a></center></td> 

              </tr>
             <?php 
             }
            }
            #________________________________________________
            else if($c=="Novel")
            {
              $qq="select * from book where cotegary like '%$c%'";
              $run=mysqli_query($link,$qq);
              while($row=mysqli_fetch_array($run))
             {
                 $name=$row["name"];
                 $author=$row["author"];
              $price=$row["price"];
              $cotegary=$row["cotegary"];
              $id=$row["id"];
              ?>
              <tr>
             <td width="200" height="50"><center><?php echo $name ?></center></td> 
             <td width="200" height="50"><center><?php echo $author ?></center></td>
              <td width="200" height="50"><center><?php echo $price ?></center></td> 
               <td width="200" height="50"><center><?php echo $cotegary ?></center></td> 
              <td width="200" height="50"><center><?php echo"<a id='logout'  href='delete.php?id=$id'>"?><button>Delete</button></a></center></td> 

              </tr>
             <?php 
             }
            }
           # _____________________________________________
             else if($c=="Biography")
            {
              $qq="select * from book where cotegary like '%$c%'";
              $run=mysqli_query($link,$qq);
              while($row=mysqli_fetch_array($run))
             {
                 $name=$row["name"];
                 $author=$row["author"];
              $price=$row["price"];
              $cotegary=$row["cotegary"];
              $id=$row["id"];
              ?>
              <tr>
             <td width="200" height="50"><center><?php echo $name ?></center></td>
             <td width="200" height="50"><center><?php echo $author ?></center></td> 
              <td width="200" height="50"><center><?php echo $price ?></center></td> 
               <td width="200" height="50"><center><?php echo $cotegary ?></center></td>
              <td width="200" height="50"><center><?php echo"<a id='logout'  href='delete.php?id=$id'>"?><button>Delete</button></a></center></td> 
 
              </tr>
             <?php 
             }
            }
          #  ________________________________________________
           else
           {
             $q="select * from book";
           $run=mysqli_query($link,$q);
           while($row=mysqli_fetch_array($run))
             {
              $name=$row["name"];
              $author=$row["author"];
              $price=$row["price"];
              $cotegary=$row["cotegary"];
              $id=$row["id"];
             ?>
              <tr>
             <td width="200" height="50"><center><?php echo $name ?></center></td>
             <td width="200" height="50"><center><?php echo $author ?></center></td> 
              <td width="200" height="50"><center><?php echo $price ?></center></td> 
               <td width="200" height="50"><center><?php echo $cotegary ?></center></td> 
              <td width="200" height="50"><center><?php echo"<a id='logout'  href='delete.php?id=$id'>"?><button>Delete</button></a></center></td> 

          </tr>
          <?php
             }
            }
          
         }
 
      ?>   
       </table>
   
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












