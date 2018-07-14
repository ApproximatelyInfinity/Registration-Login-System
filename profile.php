<?php 
	ob_start();
	include '/../includes/includes/authentication.php';
?>
<!DOCTYPE html>
<head>
	<head>
		<?php include '/home/donbrogdon91/melodicodyssey.com/includes/header.php'; ?>
	</head>
	<body>
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p>First Name: <?php echo $_SESSION['firstname'] ?></p>
			<p>Last Name: <?php echo $_SESSION['lastname'] ?></p>
			<p>Email: <?php echo $_SESSION['email'] ?></p>
			<a href="/includes/logout.php">Logout</a>
			<a href="profile_edit.php">Update Your Information</a>
		<?php endif ?>
		
		<?php 
			include '/../includes/footer.php';
			ob_end_flush();
		?>
	</body>
</html>
