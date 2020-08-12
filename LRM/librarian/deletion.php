<?php
session_start();

if(!isset($_SESSION['urn1']))
	header('location:http://localhost/LRM/login.php');
?>

<?php

 $size=sizeof($_POST);
 
  $con = mysqli_connect('localhost','root');//authentication
  mysqli_select_db($con,'BRM_DB');//use database
  
  $j=1;
  for($i=1;$i<=$size;$j++)
  {
	  $index="b".$j;
	  if(isset($_POST[$index]))
	  {
		  $b_id[$i]=$_POST[$index];
		  $i++;
	  }
  }
  
  
  
  for($i=1;$i<=$size;$i++)
  {
   $q="delete from book where book_id=".$b_id[$i];
   $mesg= mysqli_query($con,$q);
  }	
   
mysqli_close($con);   
?>

<!DOCTYPE html>
<html>
  
 <head>
  <title>Deletion </title>
 </head>
 <body>
 <center>   <h1>Book Record Management</h1>
	
	<p><?php 
	         if($mesg)//if not any error $mesg=1
			    echo $size." Records deletion done";
		     else//if any error $mesg=0
				echo "error! can not delete that book as it is issued by any student"; 
		 
		 ?>
	</p>

Go to home?<a href="libForm.php">Click Here</a>

 </body>
</html>	
