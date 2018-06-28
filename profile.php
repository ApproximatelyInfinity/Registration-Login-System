<?php 
	ob_start();
	include '/home/donbrogdon91/melodicodyssey.com/includes/authentication.php';
?>
<!DOCTYPE html>
<head>
	<head>
		<?php include '/home/donbrogdon91/melodicodyssey.com/includes/header.php'; ?>
	</head>
	<body>
		<?php var_dump($_SESSION); ?>
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p>First Name: <?php echo $_SESSION['firstname'] ?></p>
			<p>Last Name: <?php echo $_SESSION['lastname'] ?></p>
			<p>Email: <?php echo $_SESSION['email'] ?></p>
			<a href="/includes/logout.php">Logout</a>
			<a href="https://www.melodicodyssey.com/profile_edit.php">Update Your Information</a>
		<?php endif ?>
		
		<?php 
			include '/home/donbrogdon91/melodicodyssey.com/includes/footer.php';
			ob_end_flush();
		?>
	</body>
</html>
