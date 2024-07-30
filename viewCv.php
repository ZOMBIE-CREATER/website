
<?php

include 'include/header.inc.php';

?>


<?php include "include/connection.inc.php"; ?>

<body>

<?php 

include 'include/menubar.inc.php';


session_start();
echo $_SESSION['username'];
if (!isset($_SESSION['username'])) {
  header("location:loginpage.php");
}

?>
  
</body>
</html>
<?php

