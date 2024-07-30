<?php 

require_once 'connect.inc.php';

require_once 'header.inc.php';
include ''

?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['firstname']) || empty($_POST['lastname']) || 
			empty($_POST['address']) || empty($_POST['contact']) )
		{
			echo "Please fillout all required fields"; 
		}else{		
			$firstname = $_POST['firstname'];
			$middlename = $_POST['middlename'];
			$lastname= $_POST['lastname'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$mobile= $_POST['mobile'];
			$social = $_POST['social'];

			$sql = "UPDATE members SET firstname='{$firstname}', lastname = '{$lastname}',
						middlename = '{$middlename}', username = '{$username}' ,email = '{$email}',
						mobile= '{$mobile}',social = '{$social}'
						WHERE id=" . $_POST['id'];

			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully updated  user</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
			}
		}
	}
	$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	$sql = "SELECT * FROM members WHERE id={$id}";
	$result = $con->query($sql);

	if($result->num_rows < 1){
		header('Location: index.php');
		exit;
	}
	$row = $result->fetch_assoc();
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY User</h3> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['user_id']; ?>" name="userid">
				<label for="firstname">Firstname</label>
				<input type="text" id="firstname"  name="firstname" value="<?php echo $row['firstname']; ?>" class="form-control"><br>
				<label for="lastname">Lastname</label>
				<input type="text"  name="lastname" id="lastname" value="<?php echo $row['lastname']; ?>" class="form-control"><br>
				<label for="address">Address</label>
				<textarea rows="4" name="address" class="form-control"><?php echo $row['address']; ?></textarea><br>
				<label for="contact">Contact</label> 
				<input type="text"  name="contact" id="contact"  value="<?php echo $row['contact']; ?>" class="form-control"><br>
				<br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>

<?php 

 require_once 'footer.php';