<?php
if (isset($_POST['signup-submit'])){

	require 'dbh.inc.php';

	$username = $_POST['uid'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	if (empty($username) || (empty($email) || (empty($password)|| (empty($passwordRepeat))
		header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();

	}

	else if (!filer_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=invalidmail&uid=".$username);
		exit();

	}
	else {

		$sql = "INSERT INTO users (Username,user_email,user_pwd) VALUES (?,?,?)";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}

	else {
		mysqli_stmt_bind_param($stmt, "sss",$username);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
	}



	mysqli_stmt_close($stmt);
	mysqli_close($conn);

	}
	exit();
}


