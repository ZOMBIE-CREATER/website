<?php
include "connection.inc.php";
session_start();
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the PDO statement
    $stmt = $pdo->prepare("SELECT * FROM members WHERE username = :username AND password = :password");

    // Bind parameters to statement variables
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);

    // Execute the statement
    $stmt->execute();

    // Check if any rows are returned
    if ($stmt->rowCount() > 0) {
        $_SESSION['username'] = $username;
        header('location:../userpanel.php');
    } else {
        echo"<script>alert('incorrect username or password')</script>";

    }
}
?>
