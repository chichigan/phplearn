<?php 
	require('user_validator.php');

	if(isset($_POST['submit'])){
		$validation = new UserValidator($_POST);
		$errors= $validation->validateForm();

		//save data to database
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
			<input type="text" name="username" value="<?php echo $_POST['username'] ?? '' ?>">
			<div class="error">
				<?php echo $errors['username'] ?? '' ?>
			</div>

			<label>Email:</label>
			<input type="text" name="email" value="<?php echo $_POST['email'] ?? '' ?>">
			<div class="error">
				<?php echo $errors['email'] ?? '' ?>
			</div>

			<input type="submit" value="submit" name="submit">
		</form>
	</div>

</body>
</html>