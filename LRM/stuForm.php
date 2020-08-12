<?php
session_start();

if(!isset($_SESSION['urn1']))
	header('location:http://localhost/LRM/login.php');
?>

<!DOCTYPE html>

 <html>
   <head>
     <title>Home Page</title>
	 <link rel="stylesheet" href="./css/viewStyle.css" />
   </head>
   
   <body>
	 
	     <center>   <h1> Book Record Management </h1>
	  <h3> Hello <?php echo $_SESSION['urn1']; ?> </h3>
	 <table id="view_table">
	 
	 <form action="logout.php" method="post" >
	 <h3>
	  <ul>
	  <tr id="row_tb1">
	  <td> <li> <a href="search.php">Search Book</a> <br/> </td>
	   </tr>
	   <tr id="row_tb2">
	   <td> <li><a href="issue.php">Issue Book</a><br/> </td>
	   </tr>
	   <tr id="row_tb">
	   <td><li><a href="return.php">Return Book</a><br/> </td>
	   </tr>
	   <tr id="row_tb3">
	   <td><li><a href="profile.php">Student Profile</a><br/> </td>
	   </tr>
	 </ul>
	 </h3>
	 <tr>	
	 <td><input type="submit" value="LOGOUT" name="logout" /></td>
	</tr>
		 
		 
	 </table>
	</body>
</html>	
	 
	 
	 