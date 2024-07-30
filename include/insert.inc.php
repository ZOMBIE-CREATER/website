<?php 

require_once 'connection.inc.php';

if(isset($_POST['submit'])){
	
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname= $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$mobile= $_POST['mobile'];
	$social = $_POST['social'];
	$file = $_FILES['file'];

	$filename= $_FILES['file']['name'];
	$filetemp=$_FILES['file']['tmp_name'];

	$extension = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	$allowed = array('pdf','doc','docx');

	if (! in_array($extension,$allowed)) {
		die("YOU MUST SSELECT THE FILE TO UPLOAD");
	}

	$directory = "uploads/";
	$targetfile = $directory.basename($filename);

	if (!(move_uploaded_file($filetemp,$targetfile))) {
		die("error upploaded file");
	}



	 $sql = "INSERT INTO members(firstname, middlename, lastname, username, password, email, mobile, social, file)
             VALUES (?,?,?,?,?,?,?,?,?)";
    	$stmtinsert = $pdo->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $middlename, $lastname, $username, $password, $email, $mobile, $social, $targetfile]);
		if ($result) {
			// Set a session variable with the success message
			session_start();
			$_SESSION['msg'] = 'You have successfully created an account!';
	
			// Redirect back to page1.php
			header('location:../register.php');
			exit; // Important: stop further execution
		} else {
			echo "Error while creating account";
		}


}

?>

