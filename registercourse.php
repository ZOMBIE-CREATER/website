
<?php

 include "include/connection.inc.php";
 include 'include/header.inc.php';

 session_start();
$username = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
  header("location:loginpage.php");
}


?>





<body>

   
<a class="btn btn-danger" href="userpanel.php" role="button">Go back</a>
 
    <div class="container">
        <form id="form" action="include/registercourse.inc.php" method="POST" onsubmit="return validate()">
            <h1>Register Course</h1>

            <select name="courseId" class="form-select">
              <option selected>Course ID</option>
              <option value="MT100">MT100</option>
              <option value="IS171">IS171</option>
              <option value="IS171">IS181</option>
              <option value="IS171">CS175</option>
              <option value="C158">C158</option>
            </select>

            <select name="coursename" class="form-select">
              <option selected>Course Name</option>
              <option value="Java Programming">Java Programming</option>
              <option value="Introduction to Networking">Introduction to Networking</option>
              <option value="Descrete mathematics">Descrete mathematics</option>
              <option value="Web programming">Web programming</option>
              <option value="Computer maintenance">Computer maintenance</option>
              <option value="Business computer">Business computer</option>
              <option value="General Perspective">General Perspective</option>
            </select>

            <div class="input-control">
              <label for="courseDe">Course Description</label>
                <textarea id="courseDe" name="courseDe" required></textarea>
              <div class="error"></div>
            </div>


            <select name="department" class="form-select">
              <option selected>Department</option>
              <option value="Mathematics Department">Mathematics Department</option>
              <option value="Network Department">Network Department</option>
              <option value="Software development">Software development</option>
              <option value="Hardware and maintenance">Hardware and maintenance</option>
              <option value="General Studies">General Studies</option>
            </select>
            
            <select  name="year" class="form-select">
              <option selected>Academic Year</option>
              <option value="1">First Year</option>
              <option value="2">Second Year</option>
              <option value="3">Third Year</option>
              <option value="4">Fourth Year</option>
            </select>

            <select  name="instructor" class="form-select">
              <option selected>Course Instructor</option>
              <option value="Miss Nauscar">Miss Nauscar</option>
              <option value="Mr.Mundhir">Mr.Mundhir</option>
              <option value="Mr.Michael">Mr.Michael</option>
              <option value="Mr.Mbwana">Mr.Mbwana</option>
            </select>
            <select name="semister" class="form-select">
              <option selected>Select Semister</option>
              <option value="1">semister One</option>
              <option value="2">Semister Two</option>
            </select>
            
            <select name="grade" class="form-select">
              <option selected>Grades</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
            </select>
            
        <button  type="submit" name="register">register Couser</button>
    
    </form>

 
</div>
<script>
	function validate() {
		var description = document.getElementById('courseDe').value;
  
    if (description.length>50) {
      alert('course description cannot exceeed 50 character');
      return false;
    }
    return true;
	}
</script>
    
</body>

<?php include 'include/footer.inc.php' ?>
</html>
  

