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
    <li style="background-color: #580664"><b><a  style="color:white;"  href="ib.php">Insert Book</a></b></li>
      <li><b><a href="bl.php">Book List</a></b></li>
      <li><b><a href="sb.php">Issued Book</a></b></li>
      <li><b><a href="user.php">User Details</a></b></li>
      <li><b><a href="help.php">Help</a></b></li>

  </ul>
</div>

<div id="container">
  <br><br>
 
  <form action="" method="post" enctype="multipart/form-data">
    <table>
          <tr>
              <td style="color:white;" width="200px" height="50px">Enter Book Name</td>
                <td width="200px" height="50px"><input type="text" name="bname" placeholder="Enter Book Name" required="required" ></td>
          </tr> 
          <tr>
              <td style="color:white;"  width="200px" height="50px">Enter Author name</td>
                <td width="200px" height="50px"><input type="text" name="Author" placeholder="Enter Author Name" required="required" ></td>
          </tr> 
           <tr>
              <td style="color:white;"  width="200px" height="50px">Enter Book Price</td>
                <td width="200px" height="50px"><input type="text" name="Price" placeholder="Enter Book Price" required="required"></td>
          </tr> 
           <tr>
              <td  style="color:white;" width="200px" height="50px">Enter Book Cotegary</td>
                <td width="200px" height="50px">
                    <select name="Cotegary" required>
                        <option >---Select---</option>
                         <option>Science</option>
                          <option>Art</option>
                           <option>Novel</option>
                            <option>Biography</option>
                        
                    </select>
                  </td>
          </tr> 
           <tr>
              <td style="color:white;"  width="200px" height="50px">Enter Book Image</td>
                <td  style="color:white;" width="200px" height="50px"><input type="file" name="image"></td>
          </tr>
          <tr>
              <td style="color:white;"  width="200px" height="50px">Enter Book Pdf</td>
                <td style="color:white;"  width="200px" height="50px"><input type="file" name="pdf"></td>
          </tr>
              
        </table>
        <input id="submitbtn" type="submit" name="submit" value="Save">
    </form>
  
    <?php
   if(isset($_POST["submit"]))
     {
         $name=$_POST["bname"];
         $aname=$_POST["Author"];
         $price=$_POST["Price"];
         $Cotegary=$_POST["Cotegary"];

         $image=$_FILES["image"]["name"];
         $image_tmp=$_FILES["image"]["tmp_name"];
         move_uploaded_file($image_tmp,"../bimg/$image");

         $pdf=$_FILES["pdf"]["name"];
         $pdf_tmp=$_FILES["pdf"]["tmp_name"];
         move_uploaded_file($pdf_tmp,"../bpdf/$pdf");

         if(mysqli_query($link,"insert into book (name,author,cotegary,price,image,pdf) value('$name','$aname','$Cotegary','$price','$image','$pdf')"))
          {
            echo "<script>alert('Book Added')</script>";
         }
         else
         {
            echo "<script>alert('Book Not Added')</script>";
          }
        }
    ?>
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