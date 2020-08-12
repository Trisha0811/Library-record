<?php
session_start();

if(!isset($_SESSION['urn1']))
	header('location:http://localhost/LRM/login.php');
?>

<!DOCTYPE html>

 <html>
   <head>
     <title>Home Page</title>
	 <link rel="stylesheet" href="http://localhost/LRM/css/viewStyle.css"/>
   </head>
   
   <body>
	 
	     <center>   <h1> Book Record Management for Librarian </h1>
	  <h3> Hello <?php echo $_SESSION['urn1']; ?> sir</h3>
	 <table id="view_table">
	 
	 <form action="http://localhost/LRM/logout.php" method="post" >
	 <h3>
	  <ul>
	  <tr id="row_tb1">
	  <td> <li> <a href="regStu.php">Register Student</a> <br/> </td>
	   </tr>
	   <tr id="row_tb2">
	   <td> <li><a href="lib_issue.php">Issued Books</a><br/> </td>
	   </tr>
	   <tr id="row_tb">
	   <td><li><a href="http://localhost/LRM/search.php">Search Book</a><br/> </td>
	   </tr>
	   <tr id="row_tb3">
	   <td><li><a href="insertForm.php">Insert Book</a><br/> </td>
	   </tr>
	   
	    <tr id="row_tb2">
	   <td><li><a href="deleteForm.php">Delete Book</a><br/> </td>
	   </tr>
	    <tr id="row_tb">
	   <td><li><a href="updateForm.php">Update Book</a><br/> </td>
	   </tr>
	 </ul>
	 </h3>
	 <tr>	
	 <td><input type="submit" value="LOGOUT" name="logout" /></td>
	</tr>
		 
		 
	 </table>
	</body>
</html>	
	 
	 
	 