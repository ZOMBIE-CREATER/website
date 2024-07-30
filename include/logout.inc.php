<?php 

include 'connection.inc.php';

session_start();
unset($_SESSION['username']);
session_destroy();
header("location:../loginpage.php");


?>