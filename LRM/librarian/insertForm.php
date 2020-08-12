<?php
session_start();
if(!isset($_SESSION['urn1']))
	header('location:http://localhost/BRM/login.php');
?>

<!DOCTYPE html>
<html>
  
 <head>
  <title>Insertion Form </title>
 </head>
 <body>
 <center>   <h1>Book Record Management</h1>

    <form action="insertion.php" method="post">
      <table>
        <tr>
          <th>Title</th>
           <td><input type="text" name="title" required /></td>
		</tr>
		
		<tr>
          <th>Price</th>
           <td><input type="text" name="price" required /></td>
		</tr>
		
		<tr>
          <th>Author</th>
           <td><input type="text" name="author"  /></td>
		</tr>
		
		<tr>
          <th></th>
           <td><input type="submit" value="Insert"/></td>
		</tr>
	  </table>
 </body>
</html>