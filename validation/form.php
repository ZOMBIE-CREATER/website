<?php
include "connection.inc.php";
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Create a database connection
    $conn = mysqli_connect("hostname", "username", "password", "database_name");

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL query
    $sql = "SELECT * FROM members WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header('location:../userpanel.php');
    } else {
        echo "<script>alert('Incorrect username or password');</script>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
