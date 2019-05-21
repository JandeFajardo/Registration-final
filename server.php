<?php 
	session_start();
	// to inialize variables
		$stud_lastname = "";
		$stud_firstname = "";
		$stud_birth = "";
		$stud_gender = "";
		$stud_email = "";
		$stud_contact = "";
		$stud_address = "";
		$stud_course = "";
		$stud_level = "";
		$stud_id = 0;

		$edit_state = false;

	// Database connection
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	if($db) {
     	echo "";
 	}
 	else {
     	die('Connection failed' . mysqli_error());
 	}

	// Create new data for student
	if (isset($_POST['save'])) {	// name of button in registration form
		$stud_lastname = $_POST['stud_lastname'];
		$stud_firstname = $_POST['stud_firstname'];
		$stud_birth = $_POST['stud_birth'];
		$stud_gender = $_POST['stud_gender'];
		$stud_email = $_POST['stud_email'];
		$stud_contact = $_POST['stud_contact'];
		$stud_address = $_POST['stud_address'];
		$stud_course = $_POST['stud_course'];
		$stud_level = mysqli_real_escape_string($db, $_POST['stud_level']);

		$query = "INSERT INTO student (stud_lastname, stud_firstname, stud_birth, stud_gender, stud_email, stud_contact, stud_address, stud_course, stud_level) VALUES ('$stud_lastname', '$stud_firstname', '$stud_birth', '$stud_gender', '$stud_email', '$stud_contact', '$stud_address', '$stud_course', '$stud_level')";
      	$result = mysqli_query($db, $query);

      	//$_SESSION['msg'] = 'Record has been saved!'; // notification message 
      	if(!$result) {
            die('Query failed' . mysqli_error());
        }
		header('location: dashboard.php'); //after adding it will redirect to dashboard page
	}

	// Create new user account
	
    if (isset($_POST['new_u'])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
        $uFirst_name = $_POST["uFirst_name"];
        $uLast_name = $_POST["uLast_name"];
        $uEmail = $_POST["uEmail"];
        

        // Create new data
        if($password == $password2) {
        $query = "INSERT INTO login (username, password, password2, uFirst_name, uLast_name, uEmail) VALUES ('$username', '$password', '$password2', '$uFirst_name', '$uLast_name', '$uEmail')";

        $result = mysqli_query($db, $query);
        	echo "<script>alert('New account created!')</script>";
    		echo "<script>window.open('index.php','_self')</script>";
    	}else{
     		echo "<script>alert('Password did not match. Please try again')</script>";
     		echo "<script>window.open('new_account.php','_self')</script>";
    		}
    	}


	// update data
	if (isset($_POST['update'])) {
		$stud_lastname = mysqli_real_escape_string($db, $_POST['stud_lastname']);
		$stud_firstname = mysqli_real_escape_string($db, $_POST['stud_firstname']);
		$stud_birth = mysqli_real_escape_string($db, $_POST['stud_birth']);
		$stud_gender = mysqli_real_escape_string($db, $_POST['stud_gender']);
		$stud_email = mysqli_real_escape_string($db, $_POST['stud_email']);
		$stud_contact = mysqli_real_escape_string($db, $_POST['stud_contact']);
		$stud_address = mysqli_real_escape_string($db, $_POST['stud_address']);
		$stud_course = mysqli_real_escape_string($db, $_POST['stud_course']);
		$stud_level = mysqli_real_escape_string($db, $_POST['stud_level']);
		$stud_id = mysqli_real_escape_string($db, $_POST['stud_id']); // get the primary key to populate text field

		mysqli_query($db, "UPDATE student SET stud_lastname='$stud_lastname', stud_firstname='$stud_firstname', stud_birth='$stud_birth', stud_gender='$stud_gender', stud_email='$stud_email', stud_contact='$stud_contact', stud_address='$stud_address', stud_course='$stud_course', stud_level='$stud_level' WHERE stud_id='$stud_id'");
		//$_SESSION['msg'] = 'Record has been updated!'; // notification message 
		header('location: dashboard.php');
	}

	//Delete data
	if (isset($_GET['del'])) {
		$stud_id = $_GET['del'];
		mysqli_query($db, "DELETE FROM student WHERE stud_id=$stud_id");
		// $_SESSION['msg'] = "Address deleted!";
		header('location: dashboard.php');
	}

	// login verification
		function verify() {
			global $db;
			if (isset($_POST['submit'])) {
				$username = mysqli_escape_string($db,$_POST['username']);
				$password = mysqli_escape_string($db,$_POST['password']);
			if ($username !="" && $password !="") {
				$query = "SELECT userId FROM login WHERE username='$username' and password='$password'";
				$result = mysqli_query($db,$query);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				$count = mysqli_num_rows($result);
				
		  
		  	if ($count==1){
		    	echo "<script>alert('Login Successful')</script>";
		    	echo "<script>window.open('dashboard.php','_self')</script>";
		  			}
		  	else {
		  		echo "<script>alert('Login error')</script>";
		  	}
		  		}
				}
			}

	// Get record
		$data = mysqli_query($db, "SELECT * FROM student");
		
 ?>