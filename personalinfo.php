<?php 

session_start();
$username = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
  header("location:loginpage.php");
}

require_once 'include/connection.inc.php';

require_once 'include/header.inc.php';

echo "<div class='container'>";

if( isset($_POST['delete'])){
	$sql = "DELETE FROM members WHERE id=" . $_POST['id'];
	if($pdo->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
}

$sql 	= "SELECT * FROM members WHERE username ='$username'";
$result =$pdo->query($sql); 

if( $result->rowCount() > 0)

{ 
	?>
	
	<h2>PERSONAL SYSTEM</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Firstname</td>
			<td>Middlename</td>
			<td>Lastname</td>
			<td>Username</td>
			<td>email</td>
			<td>mobile</td>
			<td>Social media</td>
			<td>CV</td>
			<td width="70px">Delete</td>
		
		</tr>
	<?php
	while( $row = $result->fetch(PDO::FETCH_ASSOC)){

		echo "<form action='' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['id']."' name='id' />"; //added
		echo "<tr>";
		echo "<td>".$row['firstname'] . "</td>";
		echo "<td>".$row['middlename'] . "</td>";
		echo "<td>".$row['lastname'] . "</td>";
		echo "<td>".$row['username'] . "</td>";
		echo "<td>".$row['email'] . "</td>";
		echo "<td>".$row['mobile'] . "</td>";
		echo "<td>".$row['social'] . "</td>";
		echo "<td>".$row['file'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";  
		echo "</tr>";
		echo "</form>"; //added 
	}
	?>
	</table>

	<a class="btn btn-danger" href="userpanel.php" role="button">Go back</a>
<?php 
}
else
{
	echo "<br><br>No Record Found";
}
?> 
</div>

<?php 

 