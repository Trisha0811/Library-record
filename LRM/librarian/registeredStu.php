<?php
session_start();

if(!isset($_SESSION['urn1']))
	header('location:http://localhost/LRM/login.php');
?>
<?php
  
  $name=$_POST['name'];
  $rollno=$_POST['rollno'];
  $dept=$_POST['dept'];
  $sem=$_POST['sem'];
  $year=$_POST['year'];
  $ph_no=$_POST['ph_no'];
   $email=$_POST['email'];
  $password=$_POST['pws'];
  

	 
  
  $con = mysqli_connect('localhost','root');//authentication
  mysqli_select_db($con,'BRM_DB');//use database
  
  $q="insert into Stu
      values('$name','$rollno','$dept',$sem,
	  $year,$ph_no,'$email','$password');";
  
  mysqli_query($con,$q);
  
  $q="insert into user
      values('$rollno','$password','Student');";
	  
	mysqli_query($con,$q);  
  mysqli_close($con);
  
  
  $con = mysqli_connect('localhost','root');//authentication
  mysqli_select_db($con,'BRM_DB');//use database
  
  $q="select * from stu 
      where rollno='$rollno';";
	  
  $result=mysqli_query($con,$q);
  
  mysqli_close($con);
 
?>

<!DOCTYPE html>

 <html>
   <head>
     <title>student Record</title>
	 <link rel="stylesheet" href="http://localhost/LRM/css/viewStyle.css" />
   </head>
   
   <body>
   
 <center>    <h1> Book Record Management </h1>
	 
	 <h3> Student details: </h3>
	   <table id="view_table">
	   
	    <tr id="row_tb">
		  <th> name</th>
		  <th> rollno</th>
		  <th> dept</th>
		  <th>  sem</th>
		  <th>  year</th>
		  <th>  phone no</th>
		  <th>  email</th>
		</tr>
		
		
		<tr><?php $row=mysqli_fetch_array($result); ?>
		<td><?php echo $row['Sname']; ?> </td>
		<td><?php echo $row['rollno']; ?> </td>
		<td><?php echo $row['dept']; ?> </td>
		<td><?php echo $row['sem']; ?> </td>
		<td><?php echo $row['year']; ?> </td>
		<td><?php echo $row['ph_no']; ?> </td>
		<td><?php echo $row['email']; ?> </td>
		 
		</tr>
		
	   </table>
	   
	   <a href="regStu.php"> Do it again? </a>
   </body>
 </html>