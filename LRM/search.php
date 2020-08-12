<?php
session_start();

if(!isset($_SESSION['urn1']))
	header('location:http://localhost/LRM/login.php');
?>

<!doctype>
 <html>
  <head>
   <title> search book </title>
   <link rel="stylesheet" href="./css/viewStyle.css" />
  </head>

  <body>
 
	 
   <center> <h1>Hello 
     <?php echo $_SESSION['urn1'] ;?>,</h1>	
	<h2>search book by book name or author name or by both </h2>
	
	<table id="view_table">
	 <form action="searchResult.php" method="post">
	 <tr>
	  <h1><td>Book name </td></h1>
	  
	  <td><input type='text' name='title'  />
	 </tr>
	 
	 <tr>
	  <h1><td>Author name </td></h1>
	  
	  <td><input type='text' name='author'  />
	 </tr>
	 
	 <tr>
	  <td><input type='submit' value='search' name='search'  />
	 </tr>
	</form> 
	</table>
	</center>



<center>
<table>
	 <form action="logout.php" method="post">	
 	 <tr>
	  <td><input type='submit' value='LOGOUT' name='logout'  />
	 </tr>
	 
</table>	
</body>   
 </html>