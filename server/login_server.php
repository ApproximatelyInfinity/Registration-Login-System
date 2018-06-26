<?php 
	session_start();
	
	//Initalize the variables to be sent
	$firstname = "";
	$lastname = "";
	$username = "";
	$email = "";
	$errors = array();
	
	//Connect to the database
	include '/../includes/database_conn.php';
	
	//User Login
	if (isset($_POST['login_user'])) {
		//Input values recieved from the form
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		
		//Form validation
		if (empty($username)) {
			array_push($errors, "Username or email is required.");
		}
		if (empty($password)) {
			array_push($errors, "Password is required.");
		}
		
		//If there are no errors then it selects the information to the database and redirects the user
		if (count($errors) == 0) {
			$query = "SELECT * FROM users WHERE (username = '$username' OR email = '$username')";
			$result = mysqli_query($conn, $query);
			if (mysqli_num_rows($result) > 0) {
				$user = mysqli_fetch_assoc($result);
				if (password_verify($password, $user['password'])) {
					session_regenerate_id();
					$_SESSION['id'] = $user['id'];
					$_SESSION['username'] = $user['username'];
					$_SESSION['email'] = $user['email'];
					$_SESSION['firstname'] = $user['firstname'];
					$_SESSION['lastname'] = $user['lastname'];
					session_write_close();
					header('location: index.php');
				}else{
					array_push($errors, "Wrong username/password combination");
				}
			}else{
				array_push($errors, "This account does not exist");
			}
		}else{
			array_push($errors, "Wrong username/password combination");
		}
	}
?>