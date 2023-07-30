<?php
session_start();
if ($_SESSION['id']==TRUE) {
}
else{
		     header("Location:index.php?wrong user");

}
include("connection.php");
?>
<?php
		$c=$_GET["id"];
          $q="select * from book where id like '%$c%'";
           $run=mysqli_query($link,$q);
           $row=mysqli_fetch_array($run);
             $id=$row["id"];
            
		?>
		 <div id="a"><center>
           <?php echo "<a href='arryan/library/bpdf/?id=$id'>see</a>"; ?><br>
         
          	<a href="arryan/library/bpdf/?id=<?php echo $id; ?>" style="width: 300px;height: 100px;padding: 5px;background-color: blue;border-radius: 10px;">see Now</a>
<td width="200" height="50"><center><?php echo"<a href='p2.php'>"?><button>Back to Previous Page</button></a></center>
