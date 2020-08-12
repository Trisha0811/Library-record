<?php
session_start();

if(!isset($_SESSION['urn1']))
	header('location:http://localhost/BRM/login.php');
?>

<!doctype>
<html>
   <head>
     <title>return Book page</title>
	 <link rel="stylesheet" href="./css/viewStyle.css" />
   </head>
   
   <body>
    <center>
	 <h2> Hello ,</h2> <h1> <?php echo $_SESSION['urn1']; ?> </h1>
	 <p> You have no book to return </p>
	 
	 Go to home?<a href="stuForm.php">Click Here</a>
	</center>
   </body>

</html>   