<?php
session_start();

if(!isset($_SESSION['urn1']))
	header('location:http://localhost/BRM/login.php');
?>

<?php
  
  $con = mysqli_connect('localhost','root');//authentication
  mysqli_select_db($con,'BRM_DB');//use database
  
  $user=$_SESSION['urn1'];
  
  $q="select issue.rollno,book.book_id,book.title,book.author,issue.issue_date
       from book natural join issue
	   where issue.return_date='';";
  
  $result = mysqli_query($con,$q);
  
  $n = mysqli_num_rows($result);
  
  mysqli_close($con);
  
  if($n==0)//valid username , password
{
	//$_SESSION['urn1']=$username;
	header('location:http://localhost/LRM/librarian/libForm.php');
}

?>

<!DOCTYPE html>

 <html>
   <head>
     <title>return Book page</title>
	 <link rel="stylesheet" href="http://localhost/LRM/css/viewStyle.css" />
   </head>
   
   <body>
 <center>  
 <h2> Hello ,  <?php echo $_SESSION['urn1']; ?> sir</h2>
 <h1>Issued Book Record  </h1>
	 
	
	 
	 
	   <table id="view_table">
	   
	    <tr id="row_tb">
		<th> student rollno</th>
		  <th>book id</th>
		  <th>book name</th>
		  <th>  Author</th>
		  <th>  Issue date</th>

		</tr>
		
		<?php
		 for($i=1;$i<=$n;$i++)
		 {
			 $row=mysqli_fetch_array($result);
		?>
		<tr >
		<td id="row_tb3"><a href="http://localhost/LRM/profile.php?user=<?php echo $row['rollno'];?>" ><?php echo $row['rollno'];?> </a></td>
		  <td id="row_tb2"> <?php echo $row['book_id'] ?></td>
		  <td id="row_tb3"> <?php echo $row['title'] ?></td>
		  <td id="row_tb2"> <?php echo $row['author'] ?></td>
		   <td id="row_tb3"> <?php echo $row['issue_date'] ?></td>
		  
		</tr>
		<?php
		 }
		?>
		
		
		
	   </table>
	   
	
   </body>
 </html>
