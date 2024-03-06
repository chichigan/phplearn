<?php
	include('config/db_connect.php');
	include('header.php');

	$errors = array('email'=>'','title'=>'','ingredients'=>'');
	$email='';
	$title='';
	$ingredients='';

    if(isset($_POST['submit'])){
        
		//Check email input is empty or not
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required<br>';
		}else{
			//Check email is vaild or not
			$email=$_POST['email'];
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid address';
			}
		}
		
		//Check title input is empty or not
		if(empty($_POST['title'])){
			$errors['title'] = 'A title is required<br>';
		}else{
			//Check title is vaild or not
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
				$errors['title'] = 'Title must be letters and spaces only';
			}
		}
		
		//Check ingredients input is empty or not
		if(empty($_POST['ingredients'])){
			$errors['ingredients'] = 'At least one ingredient is required<br>';
		}else{
			//Check ingredients is vaild or not
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
				$errors['ingredients'] = 'Ingredients must be comma seperated list';
			}
		}
		if(!array_filter($errors)){
			$email = mysqli_real_escape_string($con,$_POST['email']);
			$title = mysqli_real_escape_string($con,$_POST['title']);
			$ingredients = mysqli_real_escape_string($con,$_POST['ingredients']);
			
			$sql= "INSERT INTO pizzas(title,email,ingredients) VALUES ('$title','$email','$ingredients')";
			
			if(mysqli_query($con,$sql)){
				header('Location: index.php');
			}else{
				echo 'Query error: '.mysqli_error($conn);
			}
		}
    }	//END OF POST CHECK

 ?>


<h4>Add a pizza</h4>
<form action='' method='post'>
    <label>Your email:</label>
    <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>"><br>
	<div style="color:red"><?php echo $errors['email'] ?></div>
    
	<label>Pizza Title:</label>
    <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>"><br>
	<div style="color:red"><?php echo $errors['title'] ?></div>

    <label>Ingredients:</label>
    <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>"><br>
	<div style="color:red"><?php echo $errors['ingredients'] ?></div>

    <input type="submit" name="submit" value="submit">
</form>