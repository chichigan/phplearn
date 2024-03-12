<?php 
	if(isset($_POST['submit'])){
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PHP OOP Tutorial</title>
</head>
<body>
	
	<div class="new-user">
		<h2>Create new user</h2>
		<form action="sandbox.php" method="POST">
			<label>Username:</label>
			<input type="text" name="username">

			<label>Email:</label>
			<input type="text" name="email">

			<input type="submit" value="submit" name="submit">
		</form>
	</div>

</body>
</html>