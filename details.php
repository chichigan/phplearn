<?php 
	include('header.php');
	include('config/db_connect.php');
	

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
	<h1 style="text-align:center;"><?php echo htmlspecialchars($pizza['title']); ?></h1>
	
	<h4 style="text-align:center;">Created by: <?php echo htmlspecialchars($pizza['email']); ?></h4>
	
	<h4 style="text-align:center;"><?php echo htmlspecialchars($pizza['created_at']); ?></h4>
	
	<h1 style="text-align:center";>Ingredients:</h1>
	
	<h4 style="text-align:center;"><?php echo htmlspecialchars($pizza['ingredients']); ?></h4>
	<?php  ?>
</html>