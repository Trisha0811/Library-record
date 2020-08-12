<?php
session_start();

if(!isset($_SESSION['urn1']))
	header('location:http://localhost/BRM/login.php');
?>

<?php
  
  $con = mysqli_connect('localhost','root');//authentication
  mysqli_select_db($con,'BRM_DB');//use database
  
  $user=$_SESSION['urn1'];
  
  $q="select book.book_id,book.title,book.author,issue.issue_date
       from book natural join issue
	   where issue.rollno='$user' and issue.return_date='';";
  
  $result = mysqli_query($con,$q);
  
  $n = mysqli_num_rows($result);
  
  mysqli_close($con);
  
  if($n==0)//valid username , password
{
	//$_SESSION['urn1']=$username;
	header('location:http://localhost/LRM/returnResult_empty.php');
}

?>

<!DOCTYPE html>

 <html>
   <head>
     <title>return Book page</title>
	 <link rel="stylesheet" href="./css/viewStyle.css" />
   </head>
   
   <body>
 <center>  
 <h2> Hello ,  <?php echo $_SESSION['urn1']; ?> </h2>
 <h1> Book Record  </h1>
	 
	 <h3> BOOK to return: </h3>
	 
	 <form action="returnResult.php" method="post" >
	   <table id="view_table">
	   
	    <tr id="row_tb">
		  <th> id</th>
		  <th> name</th>
		  <th>  Author</th>
		  <th>  Issue date</th>
		  <th> Select to return</th>
		</tr>
		
		<?php
		 for($i=1;$i<=$n;$i++)
		 {
			 $row=mysqli_fetch_array($result);
		?>
		<tr >
		  <td id="row_tb2"> <?php echo $row['book_id'] ?></td>
		  <td id="row_tb3"> <?php echo $row['title'] ?></td>
		  <td id="row_tb2"> <?php echo $row['author'] ?></td>
		   <td id="row_tb3"> <?php echo $row['issue_date'] ?></td>
		  <td id="row_tb4"><input type="checkbox" value="<?php echo $row['book_id'];?>" name="b<?php echo $i ;?>"  /></td>
		</tr>
		<?php
		 }
		?>
		
		<tr> 
		 <td id="row_tb4" colspan="5"> <input type="submit" value="Return" /> </td>
		</tr>
	   </table>
	   
	  </form>
   </body>
 </html>
