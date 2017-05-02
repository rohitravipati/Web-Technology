<?php
if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
	$error_message = 'Passwords should be same<br>'; 
	}

	/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
		}
	}

	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
	if(!isset($_POST["gender"])) {
	$error_message = " All Fields are required";
	}
	}

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
		$error_message = "Accept Terms and Conditions to Register";
		}
	}

	if(!isset($error_message)) {
		require_once("dbcontroller.php");
		$d=strtotime("10:30pm April 15 2014");
		$dt=date("Y-m-d h:i:sa", $d);
		$db_handle = new DBController();
		$query = "INSERT INTO registered_users (user_name, first_name, last_name, password, email, gender,date_time) VALUES
		('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . md5($_POST["password"]) . "', '" . $_POST["userEmail"] . "', '" . $_POST["gender"] . "','" . $dt . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$error_message = "";
			 $to      = 'rohitravipati94@gmail.com';
        $subject = 'New user registration';
        $message_body = '
         Username '.$_POST["userName"].',
		 firstName '.$_POST["firstName"].',
		 lastName '. $_POST["lastName"] .',

	   	Email '.$_POST["userEmail"].',

		 Gender '. $_POST["gender"] .',
		 Date '. $dt.'

        ';  

        mail( $to, $subject, $message_body );	
			unset($_POST);
			header("location: index.php");
			$success_message = "You have registered successfully!";
		} else {
			$error_message = "Problem in registration. Try Again!";	
		}
	}
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phppot_examples";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM registered_users";
$result1 = $conn->query($sql);
?>
<html>
<head>
<title>PHP User Registration Form</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Registration')">Registration</button>
  <button class="tablinks" onclick="openCity(event, 'List of Users registered')">List of Users registered</button>
</div>

<div  id="Registration" class="tabcontent">
  <h3>Register Form</h3>
  <form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td>User Name</td>
<td><input type="text" class="demoInputBox" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
</tr>
<tr>
<td>First Name</td>
<td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="password" value=""></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
</td>
</tr>
<tr>
<td colspan=2>
<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>
</div>

<div id="List of Users registered" class="tabcontent">
  <h3>List of registered users</h3>
 <?php 
 if ($result1->num_rows > 0) {
     // output data of each row
     while($row = $result1->fetch_assoc()) {
         echo "<br>   Username: ". $row["user_name"]. " - Name: ". $row["first_name"]. " " . $row["last_name"]. " -Email ". $row["email"]. "-Time". $row["date_time"] ."<br>";
     }
} else {
     echo "0 results";
}  
?>
</div>

 <script src="js/script.js"></script>
</body></html>