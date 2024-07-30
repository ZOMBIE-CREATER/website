
<?php

include 'include/header.inc.php';

?>


<?php include "include/connection.inc.php"; ?>

<body>

<?php 


require_once 'include/connection.inc.php';

require_once 'include/header.inc.php';

session_start();
$username = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
  header("location:loginpage.php");
}

echo "<div class='container'>";

if( isset($_POST['delete'])){
	$sql = "DELETE FROM semister WHERE id=" . $_POST['id'];
	if($pdo->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
}

$sql 	= "SELECT * FROM semister WHERE username ='$username'";
$result =$pdo->query($sql); 

if( $result->rowCount() > 0)

{ 
	?>
	
	<h2>REGISTERED COURSE</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Course Id </td>
			<td>Course Name</td>
			<td>Course Description</td>
			<td>Department</td>
			<td>Year</td>
			<td>Course Instructor</td>
			<td>Semister</td>
			<td>Grade</td>
			<td width="70px">Delete</td>
	
		</tr>
	<?php
	while( $row = $result->fetch(PDO::FETCH_ASSOC)){

		echo "<form action='' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['id']."' name='id' />"; //added
		echo "<tr>";
		echo "<td>".$row['courseId'] . "</td>";
		echo "<td>".$row['coursename'] . "</td>";
		echo "<td>".$row['courseDe'] . "</td>";
		echo "<td>".$row['department'] . "</td>";
		echo "<td>".$row['year'] . "</td>";
		echo "<td>".$row['instructor'] . "</td>";
		echo "<td>".$row['semister'] . "</td>";
		echo "<td>".$row['grade'] . "</td>";
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
 

  
</body>
</html>

