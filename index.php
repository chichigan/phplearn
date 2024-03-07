<?php
	include('config/db_connect.php');
	include('header.php');

	$result=mysqli_query($conn,'SELECT * FROM pizzas');
	
	$pizzas=mysqli_fetch_all($result,MYSQLI_ASSOC);
	
	//Close connection
	mysqli_close($conn);
	
?>

<html>
	<?php foreach ($pizzas as $pizza){ ?>
		<div style="border:1px solid black;width:20%;">
			<b>Title</b>: <?php echo htmlspecialchars($pizza['title']); ?>
			<br>
			<b>Ingredients</b>: 
				<ul>
				<?php 
					foreach (explode(',',$pizza['ingredients']) as $ing){
						echo '<li>'.htmlspecialchars($ing).'</li>';
					}
				?>
				</ul>
			<a href="details.php?id=<?php echo $pizza['id'] ?>"><b>More info</b></a>
		</div>
		<br>
	<?php }?>
</html>





