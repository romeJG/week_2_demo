<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="backend/process_register.php" method="POST">
		<div>
			<label for="name">name</label>
			<input type="text" id="nameInput">
		</div>
		<div>
			<label for="email">email</label>
			<input type="email" id="emailInput">
		</div>
		<div>
			<label for="password">password</label>
			<input type="password" id="passwordInput">
		</div>
		<div>
			<label for="confirm_password">confirm password</label>
			<input type="password" id="confirm_passwordInput">
		</div>
		<button type="submit">register</button>
		<a href="index.php">Login</a>
	</form>

</body>

</html>