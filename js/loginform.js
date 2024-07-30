function validateForm() {
    let x = document.forms["myForm"]["fname"].value;
    if (x === "") {
        alert("Name must be filled out");
        return false;
    }
}

<input type="text" id="email" placeholder="Enter your email">
<button onclick="validateEmail()">Validate Email</button>

<script>
    function validateEmail() {
        const emailInput = document.getElementById("email").value;
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (emailPattern.test(emailInput)) {
            alert("Valid email address!");
        } else {
            alert("Invalid email address!");
        }
    }

<input type="text" id="username" placeholder="Enter your username">
<button onclick="validateUsername()">Validate Username</button>

<script>
    function validateUsername() {
        const usernameInput = document.getElementById("username").value;

        if (usernameInput.trim() !== "") {
            alert("Valid username!");
        } else {
            alert("Please enter a username.");
        }


<input type="password" id="password" placeholder="Enter your password">
<button onclick="validatePassword()">Validate Password</button>

<script>
    function validatePassword() {
        const passwordInput = document.getElementById("password").value;
        const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

        if (passwordPattern.test(passwordInput)) {
            alert("Valid password!");
        } else {
            alert("Invalid password. Must contain at least one uppercase letter, one lowercase letter, one digit, and be 8 characters or longer.");
        }
    

</script>
