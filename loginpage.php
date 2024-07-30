<?php

/** HEADER FILE IS HERE */
require_once "include/connection.inc.php";
include "include/header.inc.php";
include "include/menubar.inc.php";


?>

<div class="wrapper" style="margin-top:200px;">
    <form class="form-signin" action="include/login.inc.php" method="POST">       
      <h2 class="form-signin-heading"></h2>
      <input type="text" class="form-control" name="username" placeholder="Username" required>
      <input type="password" class="form-control" name="password" placeholder="Password" required>      
      
      <button class="btn btn-lg btn-danger" type="submit" name="submit">Login</button>   
    </form>
  </div>