<?php

	include_once 'MainLogin.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	yo
<?php
	$sql = "SELECT * FROM users;";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_uid']. "<br/>";

		}
	}
?>
</body>
</html>
