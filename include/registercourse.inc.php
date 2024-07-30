<?php 

require_once 'connection.inc.php';

session_start();
$username = $_SESSION['username'];
if (!isset($_SESSION['username'])) 
  header("location:loginpage.php");


if(isset($_POST['register'])){
	
	$courseId =$_POST['courseId'];
    $coursename =$_POST['coursename'];
    $courseDe =$_POST['courseDe'];
    $department =$_POST['department'];
	$year =$_POST['year'];
    $instructor =$_POST['instructor'];
	$semister=$_POST['semister'];
	$grade=$_POST['grade'];
	

	$sql = "INSERT INTO semister(courseId, coursename, courseDe, department, year, instructor, semister, grade,username)
        VALUES (?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $pdo->prepare($sql);
		$result = $stmtinsert->execute([$courseId, $coursename, $courseDe, $department, $year, $instructor, $semister, $grade, $username]);
		if ($result) {
		
			header('location:../registercourse.php');
			exit; // Important: stop further execution
		} else {
			echo "Error while creating account";
		}

	
	

}

?>

