<?php
session_start();

if(!isset($_SESSION['urn1']))
	header('location:http://localhost/LRM/login.php');
?>
<?php
if(isset($_GET['user']))
 {
	 $rollno=$_GET['user'];
    # echo "from stu lib ". $_GET['user'];
	#  echo "from stu lib ". $from_lib;
 }


#if(isset($_SESSION['urnS']))
else	
{
	 $rollno=$_SESSION['urnS'];
	 #echo "from stu , $from_stu";
}
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
     <title>student profile</title>
	 <link rel="stylesheet" href="http://localhost/LRM/css/viewStyle.css" />
   </head>
   
   <body>
   
 <center>    <h1> Book Record Management </h1>
	 
	 
	   <table id="view_table">
	   <tr id="row_tb4" > <td colspan=2>Student details: </td></tr>
	      <?php $row=mysqli_fetch_array($result); ?>
		  
	    <tr id="row_tb">
		  <th> name</th><td id="row_tb2"><?php echo $row['Sname']; ?> </td></tr>
		<tr id="row_tb">  <th> rollno</th><td id="row_tb3"><?php echo $row['rollno']; ?> </td></tr>
		 <tr id="row_tb"> <th> dept</th><td id="row_tb2"><?php echo $row['dept']; ?> </td></tr>
		<tr id="row_tb">  <th>  sem</th><td id="row_tb3"><?php echo $row['sem']; ?> </td></tr>
		<tr id="row_tb">  <th>  year</th><td id="row_tb2"><?php echo $row['year']; ?> </td></tr>
		 <tr id="row_tb"> <th>  phone no</th><td id="row_tb3"><?php echo $row['ph_no']; ?> </td></tr>
		 <tr id="row_tb"> <th>  email</th><td id="row_tb2"><?php echo $row['email']; ?> </td></tr>
		
		
		
	   </table>
	   
	 <table>
<?php 
    $con = mysqli_connect('localhost','root');//authentication
  mysqli_select_db($con,'BRM_DB');//use database
  
  $q="select * from book natural join issue
      where rollno='$rollno';";
	  
  $result=mysqli_query($con,$q);
  
  mysqli_close($con);
?>	 

    <tr id="row_tb4">
	<td>Book id</td>
	<td>Title of book</td>
	<td>Author of book</td>
	<td>Issue date</td>
	<td>Return date</td>
	</tr>
	
	<?php 
	 $n=mysqli_num_rows($result);
	 
	 #echo "value of n ".$n;
	      for($i=1;$i<=$n;$i++)
		  {
			  $row=mysqli_fetch_array($result);
		  ?>
		  <tr id="row_tb3">
		  <td><?php echo $row['book_id']; ?></td>
		   <td><?php echo $row['title']; ?></td>
		    <td><?php echo $row['author']; ?></td>
			 <td><?php echo $row['issue_date']; ?></td>
			  <td><?php echo $row['return_date']; ?></td>
		   </tr>    
		  <?php
		  }
           ?>		  
     </table>	 
  </body>
 </html>