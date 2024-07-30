<?php 

include 'include/userheader.inc.php';
include 'include/connection.inc.php';
session_start();
$username = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
  header("location:loginpage.php");
}
?>
  <body>
    <!-- (A) SIDEBAR -->
    <div id="pgside">
      <!-- (A1) BRANDING OR USER -->
      <!-- LINK TO DASHBOARD OR LOGOUT -->
      <div id="pguser" class="#">
        <img src="images/file.jpg">
        <i class="txt">USER PANEL</i>
      </div>

      <!-- (A2) MENU ITEMS -->
      <a href="personalinfo.php">
        <i class="ico">&#9733;</i>
        <i class="txt">USER INFOMATION</i>
      </a>
      <a href="registercourse.php">
        <i class="fas fa-sign-out-alt">&#9728;</i>
        <i class="txt" >REGISTER COURSE</i>
      </a>
      <a href="registreredcourse.php">
        <i class="ico">&#9728;</i>
        <i class="txt"> VIEW REGISTERED COURSES</i>
      </a>

      <a href="include/uploads/CV.pdf" VIEW>
        <i class="ico">&#9737;</i>
        <i class="txt" >VIEW CV HERE</i>
      </a>
     
      <a href="include/logout.inc.php">
        <i class="fas fa-sign-out-alt">&#9728;</i>
        <i class="txt" >LOGOUT</i>
      </a>

   
    </div>

    <!-- (B) MAIN -->
    <main id="pgmain">
    <div class="alert alert-danger" role="alert">
  WELCOME TO USER PANEL
</div>
    </main>
  </body>
</html>


 