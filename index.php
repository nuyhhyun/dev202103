<!DOCTYPE html>
	<head></head>
	<body>
		<a href="register.php">sign in</a>
		<a href="login.php">log in</a>
		<a href="logout.php">log out</a>
		<a href="write.php">write</a>
		<?php
		session_start();
		if($_SESSION['isLogged']) {
			echo "<br><br>Hello, ".$_SESSION['userID'];
		} else {
			echo "<br><br>you can use service after log in";
		}
		?>
	</body>
</html>
