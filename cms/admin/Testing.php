<?php

	include("include/config.php");

	if(isset($_POST['submit'])){

		$e = mysqli_real_escape_string($con,sha1($_POST['txtEmail']));
		$p = mysqli_real_escape_string($con,sha1($_POST['txtPass']));

		echo $SQL = "INSERT INTO admin(username,password,updationDate) VALUES('$e','$p',now())";

			if(mysqli_query($con,$SQL))
				echo "Good";
			else
				echo "Fail";


		}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

		<input type="text" name="txtEmail" placeholder="Email">
		<input type="password" name="txtPass" placeholder="Password">

		<input type="submit" name="submit">

		
	</form>
</body>
</html>