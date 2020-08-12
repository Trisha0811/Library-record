<?php
session_start();

if(!isset($_SESSION['urn1']))
	header('location:http://localhost/LRM/login.php');
?>

<?php
$size=sizeof($_POST);
$records=$size/4;

//echo "number of records $records";

for($i=1;$i<=$records;$i++)
{
	$ind1="book_id".$i;
	$book_id[$i]=$_POST[$ind1];
	
	$ind2="title".$i;
	$title[$i]=$_POST[$ind2];
	
	$ind3="price".$i;
	$price[$i]=$_POST[$ind3];
	
	$ind4="author".$i;
	$author[$i]=$_POST[$ind4];
	
}

  $con = mysqli_connect('localhost','root');//authentication
  mysqli_select_db($con,'BRM_DB');//use database
  
for($i=1;$i<=$records;$i++)
{	
 $q="update book SET title='$title[$i]',price=$price[$i],author='$author[$i]' where book_id=$book_id[$i] ;";
   
   
   mysqli_query($con,$q);
   
} 

 mysqli_close($con);
?>

<!DOCTYPE html>
<html>
  
 <head>
  <title>Updation </title>
 </head>
 <body>
<center>    <h1>Book Record Management</h1>
	
	<p><?php 
	     
			 echo $size." Records updation done";
		 
		 ?>
	</p>

Go to home?<a href="libForm.php">Click Here</a>

 </body>
</html>	
