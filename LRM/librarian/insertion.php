<?php
session_start();

if(!isset($_SESSION['urn1']))
	header('location:http://localhost/BRM/login.php');
?>

<?php
 $title=$_POST['title'];
 $price=$_POST['price'];
 $author=$_POST['author'];
 
 

$con = mysqli_connect('localhost','root');
if(!$con)
	echo "connection failed";
else
	echo "connection done";

mysqli_select_db($con,'BRM_DB');




 $q="INSERT INTO book (title,price,author) values('$title',$price,'$author')";
 
 $status=mysqli_query($con,$q);
 mysqli_close($con);
 ?>
 
<!DOCTYPE html>
<html>
  
 <head>
  <title>Insertion </title>
 </head>
 <body>
 <center>   <h1>Book Record Management</h1>
	
	<p><?php 
	     if($status==1)
			 echo "Insertion done";
		 else
			 echo "insertion failed";
		 ?>
	</p>

Do you want to insert more?<a href="insertForm.php">Click Here</a>

   <h2>Go to home page<a href="libForm.php">Click Here</a> </h2>


 </body>
</html>	