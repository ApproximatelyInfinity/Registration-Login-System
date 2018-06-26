<?php 
	ob_start();
	include '/../server/login_server.php';
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
					<h2>Login</h2>
					<form method="post" action="login.php">
						<?php include'/../includes/errors.php'; ?>
						<div class="form-group"><input class="form-control modal-username" type="text" name="username" placeholder="Username"></div>
						<div class="form-group"><input class="form-control modal-password" type="password" name="password" placeholder="Password"></div>
						<div class="form-group"><button type="submit" class="btn btn-purple" name="login_user">Login</button></div>
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