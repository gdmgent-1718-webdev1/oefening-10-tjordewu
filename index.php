<?php

	// kijk naar oefening 9 voor uitleg over : $isSubmitted = isset($_REQUEST['submit']);
	$isSubmitted = isset($_REQUEST['submit']);
	if ($isSubmitted)
	{
		echo $_POST['firstname'], PHP_EOL;
		echo $_POST['lastname'], PHP_EOL;
		echo $_POST['email'], PHP_EOL;
		echo $_POST['password'], PHP_EOL;
		echo $_POST['message'], PHP_EOL;
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Oefening 10 - Tjorven Dewulf</title>
</head>
<body>
	
	<form action="" method="POST">

		<label for="firstname">Firstname</label>
		<input id="firstname" type="text" name="firstname"><br>
		<label for="lastname">Lastname</label>
		<input id="lastname" type="text" name="lastname"><br>
		<label for="email">Email</label>
		<input id="email" type="email" name="email"><br>
		<label for="password">Password</label>
		<input id="password" type="password" name="password"><br>
		<label for="message">message</label>
		<textarea id="message" name="message"></textarea><br>
		<input type="submit" name="submit">

	</form>
</body>
</html>