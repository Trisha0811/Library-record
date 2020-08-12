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
  
  $user=$_SESSION['urn1'];
  
  for($i=1;$i<=$size;$i++)
  {
   $q="insert into issue ( rollno,book_id,issue_date,return_date )
   values('$user',$b_id[$i],curdate(),'')";
    mysqli_query($con,$q);
  }	
   
mysqli_close($con);   
?>

<!DOCTYPE html>
<html>
  
 <head>
  <title>issue confirmation </title>
 </head>
 <body>
 <center>   <h1>Library Record Management</h1>
	
	<p><?php 
	     
			 echo $size." book issued by '$user'";
		 
		 ?>
	</p>

Go to home?<a href="stuForm.php">Click Here</a>

 </body>
</html>	
