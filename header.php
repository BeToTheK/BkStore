<!DOCTYPE html>
<html>
<head>

	<meta charset="utf=8">
	<meta name="description" content="This is a test">
	<meta name=viewport content="device-width,initial-scale=1">
	<title></title>

</head>
<body>
	<header>
		<nav>
			<a href="#">
			<img src="logo_img/ungoro.jpg" alt="durt" width="100" height="100">
		</a>
		<ul>
			

			<li><a href="index.php">Home</li>
			<li><a href="#">Contact</li>
		</ul>
		<div>
			<form action="/includes/MainLogin.php" method="post">
				<input type="text" name="mailuid" placeholder="Username/E-mail..">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="login-submit">Login</button>
			</form>
			<a href="signup.php">Signup</a>


		</div>

		</nav>
	</header>

</body>
</html>