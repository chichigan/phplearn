<?php
	include('config/db_connect.php');
	include('header.php');

	$result=mysqli_query($conn,'SELECT * FROM pizzas');
	
	$pizzas=mysqli_fetch_all($result,MYSQLI_ASSOC);
	
	//Close connection
	mysqli_close($conn);
	
	
	
	foreach ($pizzas as $pizza){
		echo 'Title: '.$pizza['title'].'<br>';
		echo 'Ingredients: <br>';
		foreach (explode(',',$pizza['ingredients']) as $ing){
			echo htmlspecialchars($ing).'<br>';
		}
		
		echo '<br>';
		
	}
	

?>