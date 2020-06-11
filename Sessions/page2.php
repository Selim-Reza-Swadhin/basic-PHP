<?php
	session_start();

	$_SESSION['name'] = 'John Doe';

	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
<h5>Thank you <?= $name; ?>, You have subscribed with the email <?= $email; ?></h5>
<a href="page3.php">Go to page 3</a>
</body>
</html>