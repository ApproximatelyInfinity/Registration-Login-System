<?php
	//Initalize the variables to be sent
	$firstname = "";
	$lastname = "";
	$username = "";
	$email = "";
	$errors = array();
	
	//Connect to the database
	include "/../includes/database_conn.php";
	
	//User Registration
	if (isset($_POST['reg_user'])) {
		//Input values recieved from the form
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

		//Form validation to ensure that the form is correctly filled and adding the array_push() function onto the $errors variable
		if (empty($firstname)) { array_push($errors, "Enter your first name."); }
		if (empty($lastname)) { array_push($errors, "Enter your last name."); }
		if (empty($username)) { array_push($errors, "Enter your username."); }
		if (empty($email)) { array_push($errors, "Enter your email address."); }
		if (empty($password_1)) { array_push($errors, "Enter your password."); }
		if (empty($password_2)) { array_push($errors, "Please confirm your password."); }
		if ($password_1 != $password_2) {
			array_push($errors, "Your passwords do not match.");
		}

		//Checks if a user/email exists
		$query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		
		//If a user/email exist in the $user array then throw and error
		if ($user) {
			if ($user['username'] === $username) {
				array_push($errors, "Username is already taken.");
			}

			if ($user['email'] === $email) {
				array_push($errors, "Email address already exists.");
			}
		}

		//Register a user if there are no errors
		if (count($errors) == 0) {
			$hash = password_hash($password_1, PASSWORD_DEFAULT);
			$query = "INSERT INTO users (firstname, lastname, username, email, password) VALUES('$firstname', '$lastname', '$username', '$email', '$hash')";
			mysqli_query($conn, $query);
			header('Location:index.php');
		}
	}
?>