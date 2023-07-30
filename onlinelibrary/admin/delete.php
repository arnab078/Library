<?php
include'../connection.php';
$id=$_GET['id'];

// Retrieve Book pdf name which will use for unlink file
$q="SELECT * FROM book WHERE id='$id'";
$r=mysqli_query($link,$q);
if(!$r){
  die("<script>alert('Book has not been deleted. Please try again later');window.location.href='bl.php'</script>");
}
if(mysqli_num_rows($r)<1){
  die("<script>alert('Book has not been deleted. Please try again later');window.location.href='bl.php'</script>");
}
$row=mysqli_fetch_assoc($r);

// Deleting pdf file and image file from server folder
unlink("../bimg/".$row['image']);
unlink("../bpdf/".$row['pdf']);

// Deleting details from issued table
$query="DELETE FROM `issued` WHERE `b_id`= '$id' ";
echo "hello1";
$run=mysqli_query($link,$query);
if(!$run);
{
  echo "hello 1a";
  die("<script>alert('1 Book was not deleted. Please try again later".$query.$run."');window.location.href='bl.php'</script>") ;
}

// Deleting book details
$query="DELETE FROM `book` WHERE `id`='$id'";
echo "hello2";
$run=mysqli_query($link,$query);
if(!$run);
{
  die("<script>alert('2 Book was not deleted. Please try again later');window.location.href='bl.php'</script>") ;

}
echo $query;
?>
