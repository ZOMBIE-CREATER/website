
<?php

include 'include/header.inc.php';

include 'include/connection.inc.php';


session_start(); // Start the session (if not already started)

?>




<body>

<?php 

   include 'include/menubar.inc.php';

?>   
    <div class="container">
        <form id="form" name="myform" action="include/insert.inc.php" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
            <h1>create account</h1>
            <div class="input-control">
                <label for="firstname">Firstname</label>
                <input id="firstname" name="firstname" type="text" >
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="middlename">Middlename</label>
                <input id="middlename" name="middlename" type="text" >
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="lastnamae">Lastname</label>
                <input id="lastname" name="lastname" type="text" >
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" >
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password"name="password" type="password">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email"name="email" type="email" >
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="mobile">Mobile</label>
                <input id="mobile" name="mobile" type="text" >
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="social">Social Medias</label>
                <input id="social" name="social" type="text" >
                <div class="error"></div>
            </div>

            <div class="input-control">
                <label for="file">Upload CV</label>
                <input id="file" name="file" type="file">
                <div class="error"></div>
            </div>

            <button type="submit" name="submit">Create Account</button>
    
      </form>
</div>

<?php include_once 'include/footer.inc.php'; ?>

<script>
    function validateForm() {
        var password = document.getElementById('password').value;
        var hasDigit = false;
        var hasSpecialChar = false;
        var hasUpperCase = false;
        var hasLowerCase = false;
        var x=document.myform.email.value;  
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf(".");

        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
          alert("Please enter a valid e-mail address");  
          return false;  
        } 

    for (var i = 0; i < password.length; i++) {
        var char = password.charAt(i);

        if (char >= '0' && char <= '9') {
            hasDigit = true;
        }

        if ("!@#$%^&*(),.?\":{}|<>".indexOf(char) !== -1) {
            hasSpecialChar = true;
        }

        if (char >= 'A' && char <= 'Z') {
            hasUpperCase = true;
        }

        if (char >= 'a' && char <= 'z') {
            hasLowerCase = true;
        }
    }

    if (!hasDigit) {
        alert("Password must contain at least one number");
        return false;
    }
    if (!hasSpecialChar) {
        alert("Password must contain at least one special character");
        return false;
    }
    if (!hasUpperCase || !hasLowerCase) {
        alert("Password must contain both uppercase and lowercase letters");
        return false;
    }

    if (password.length < 10) {
        alert("Password must have at least 10 characters");
        return false;
    }
    return true;
}
</script> 
    
</body>
</html>

  
</body>
</html>


