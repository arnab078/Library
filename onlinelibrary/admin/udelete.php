<?php
include'../connection.php';
$id=$_GET['id'];

// Deleting details of issued table first
$query="DELETE FROM `issued` WHERE `r_id`=$id";
$run=mysqli_query($link,$query);
if($run!=true)
{
  die("<script>alert('1 User not deleted. Please try again later');window.location.href='user.php'</script>");
}

//Deleting details of registered user 
$query="DELETE FROM `reg` WHERE `id`=$id";
$run=mysqli_query($link,$query);
if($run!=true)
{
  die("<script>alert('2 User not deleted. Please try again later');window.location.href='user.php'</script>");
}

die("<script>alert('User deleted successfully');window.location.href='user.php'</script>");
?>