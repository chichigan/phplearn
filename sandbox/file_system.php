<?php 
	// $quotes=readfile('quotes.txt');
	// echo $quotes;

	$file = 'readme.txt';

	//File system part 1
	//if(file_exists($file)){

		// // read file
		// echo readfile($file).'<br>';

		// //copy file
		// copy($file,'quotes.txt');

		// //absolute path
		// echo realpath($file).'<br>';

		// //file size
		// echo filesize($file).'<br>';

		// //rename file
		// rename($file,'test.txt');
		
	//}else{
		//echo 'File does not exist';
	//}

	// //make directory
	//mkdir('quotes');
	
	//File system part 2
	//opening a file for reading
	$handle=fopen($file, 'a+');

	//read the file
	echo fread($handle, filesize($file));

	//read a single line
	// echo fgets($handle);
	// echo fgets($handle);

	//read a single character
	// echo fgetc($handle);
	// echo fgetc($handle);

	//write to a file
	//fwrite($handle,"\nEverything popular is wrong");
	
	fclose($handle);
	
	//Delete a file
	//unlink('test2.txt');
?>

<html>
	
</html>