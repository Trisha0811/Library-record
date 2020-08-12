<?php
session_start();

if(!isset($_SESSION['urn1']))
	header('location:http://localhost/LRM/login.php');
?>

<?php
  
  $con = mysqli_connect('localhost','root');//authentication
  mysqli_select_db($con,'BRM_DB');//use database
  
  $q="select * from book;";
  
  $result = mysqli_query($con,$q);
  
  $n = mysqli_num_rows($result);
  
  mysqli_close($con);

?>

<!DOCTYPE html>

 <html>
   <head>
     <title>Delete Book Record</title>
	 <link rel="stylesheet" href="http://localhost/LRM/css/viewStyle.css" />
   </head>
   
   <body>
 <center>    <h1> Book Record Management </h1>
	 
	 <h3> BOOK : </h3>
	 
	 <form action="deletion.php" method="post" >
	   <table id="view_table">
	   
	    <tr id="row_tb">
		  <th> id</th>
		  <th> name</th>
		  <th> price</th>
		  <th>  Author</th>
		  <th> Select to delete</th>
		</tr>
		
		<?php
		 for($i=1;$i<=$n;$i++)
		 {
			 $row=mysqli_fetch_array($result);
		?>
		<tr >
		  <td id="row_tb2"> <?php echo $row['book_id'] ?></td>
		  <td id="row_tb3"> <?php echo $row['title'] ?></td>
		  <td id="row_tb2"> <?php echo $row['price'] ?></td>
		  <td id="row_tb3"> <?php echo $row['author'] ?></td>
		  <td id="row_tb4"><input type="checkbox" value="<?php echo $row['book_id'];?>" name="b<?php echo $i ;?>"  /></td>
		</tr>
		<?php
		 }
		?>
		
		<tr> 
		 <td id="row_tb4" colspan="5"> <input type="submit" value="Delete" /> </td>
		</tr>
	   </table>
	   
	  </form>
   </body>
 </html>
