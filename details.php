<?php 
	include('header.php');
	include('config/db_connect.php');
	
	if(isset($_POST['delete'])){
		$id_to_delete=mysqli_escape_string($conn,$_POST['id_to_delete']);
		
		$sql="DELETE FROM pizzas WHERE id=$id_to_delete";

		if(mysqli_query($conn,$sql)){
			header("Location: index.php");
		}
		else{
			echo "Query error".mysqli_error($conn);
		}
	}

	//Check get request
	if(isset($_GET['id'])){
		$id=mysqli_escape_string($conn,$_GET['id']);
		
		$sql= "SELECT * FROM pizzas WHERE id = $id";
		
		$result=mysqli_query($conn,$sql);
		
		$pizza=mysqli_fetch_assoc($result);
		
		mysqli_free_result($result);
		
		mysqli_close($conn);
		
	}
?>

<html>
	<?php if($pizza){ ?>
	<h1 style="text-align:center;"><?php echo htmlspecialchars($pizza['title']); ?></h1>
	
	<h4 style="text-align:center;">Created by: <?php echo htmlspecialchars($pizza['email']); ?></h4>
	
	<h4 style="text-align:center;"><?php echo htmlspecialchars($pizza['created_at']); ?></h4>
	
	<h1 style="text-align:center";>Ingredients:</h1>
	
	<h4 style="text-align:center;"><?php echo htmlspecialchars($pizza['ingredients']); ?></h4>
	<?php }else {echo "<h1 style='text-align:center'>No such pizza exists!</h1>"; } ?>
	
	<!-- Delete FORM -->

	<form action="details.php" method="POST" style="text-align: center;">
		<input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']; ?>">
		<input type="submit" name="delete" value="Delete">
	</form>
</html>