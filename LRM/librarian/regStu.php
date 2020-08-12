<?php
session_start();

if(!isset($_SESSION['urn1']))
	header('location:http://localhost/LRM/login.php');
?>

<!doctype>
 <html>
  <head>
   <title>student registration</title>
   <link rel="stylesheet" href="http://localhost/LRM/css/viewStyle.css"/>
  </head>
  
  <body>
  <center><h1> Fill Details </h1>
  
   <table id="view_table">
    <form action="registeredStu.php" method="post" >
	
	 <tr>
	  <td id="row_tb2"> Name :: </td>
	  <td> <input type="text" name="name" required /> </td>
	 </tr>
	 <tr>
	  <td id="row_tb2"> Roll No :: </td>
	  <td> <input type="text" name="rollno" required /> </td>
	 </tr>
	 <tr>
	  <td id="row_tb2"> Department :: </td>
	  <td> <select name="dept" required >
            <option>CSE</option>
			<option>ECE</option>
			<option>ME</option>
			<option>CE</option>
			<option>EE</option>
			</td>
	 </tr>
	 <tr>
	  <td id="row_tb2"> Semester :: </td>
	  <td> <select name="sem" required >
            <option value="1">1st</option>
			<option value="2">2nd</option>
			<option value="3">3rd</option>
			<option value="4">4th</option>
			<option value="5">5th</option>
			<option value="6">6th</option>
			<option value="7">7th</option>
			<option value="8">8th</option>
			</select>
			</td>
	 </tr>
	 <tr>
	  <td id="row_tb2"> Year :: </td>
	  <td> <select name="year" >
            <option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			</select>
			</td>
	 </tr>
	 <tr>
	  <td id="row_tb2"> Phone No :: </td>
	  <td> <input type="number" name="ph_no" required /> </td>
	 </tr>
	 <tr>
	  <td id="row_tb2"> Email id :: </td>
	  <td> <input type="text" name="email" required /> </td>
	 </tr>
	 <tr>
	  <td id="row_tb2"> Password :: </td>
	  <td> <input type="password" name="pws" required /> </td>
	 </tr>
	  <td id="row_tb4" colspan="5"> <input type="submit" value="register" /> </td>
	</center> 
  </body>
 </html>