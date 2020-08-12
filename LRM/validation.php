<?php

session_start();
$username=$_POST['urn'];
$password=$_POST['pwd'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'brm_db');

$q="select * from user where u_name='$username' and password='$password';";

$result=mysqli_query($con,$q);

$n=mysqli_num_rows($result);

if($n==1)//valid username , password
{
	$_SESSION['urn1']=$username;
	
	$row=mysqli_fetch_array($result);
	
	if($row['role']=='Student')
	{
		$_SESSION['urnS']=$username;
		header('location:http://localhost/LRM/stuForm.php');
	}
 
    if($row['role']=='Librarian')
	 header('location:http://localhost/LRM/librarian/libForm.php');
    
}
else
{
	header('location:http://localhost/LRM/login.php');
}


?>
 