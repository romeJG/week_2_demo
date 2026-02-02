<!DOCTYPE html>
<html lang="en">

<head>
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<form action="backend/process_login.php" method="POST">
		<div>
			<label for="email">email</label>
			<input type="email" id="emailInput">
		</div>
		<div>
			<label for="password">password</label>
			<input type="password" id="passwordInput">
			<button onclick="togglePassword()" type="button" id="pass_visibility">❌</button>
		</div>
		<button type="submit">login</button>
		<a href="register.php">Register</a>
	</form>
	<script src="script/login.js"></script>
</body>

</html>