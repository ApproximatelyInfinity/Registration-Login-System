<?php 
	ob_start();
	include '/../server/registration_server.php';
?>
<!DOCTYPE html>
<html>
	<head>
	<?php include '/../includes/header.php'; ?>
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Register</h2>
					<?php include'/../includes/errors.php'; ?>
					<form method="post" action="registration.php">
						<div class="form-group"><label>First Name</label><input class="form-control" type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="First Name" ></div>
						<div class="form-group"><label>Last Name</label><input class="form-control" type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder="Last Name"></div>
						<div class="form-group"><label>Email</label><input class="form-control" type="email" name="email" value="<?php echo $email; ?>" placeholder="Email"></div>
						<div class="form-group"><label>Username</label><input class="form-control" type="text" name="username" value="<?php echo $username; ?>" placeholder="Username"></div>
						<div class="form-group"><label>Password</label><input class="form-control" type="password" name="password_1" placeholder="Password"></div>
						<div class="form-group"><label>Confirm Password</label><input class="form-control" type="password" name="password_2" placeholder="Confirm Password"></div>
						<div class="form-group"><button type="submit" class="btn btn-purple" name="reg_user">Register</button></div>
					</form>
				</div>
			</div>
		</div>
		<?php 
			include '/../includes/footer.php';
			ob_end_flush();
		?>
	</body>
</html>