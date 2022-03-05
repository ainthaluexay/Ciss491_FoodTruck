<?php
$page_title = "Customer Files";
?>
	<div id = "main">
	<!-- Page unique content -->
	<form action = "" method = "post" enctype = "multipart/form-data">
	<p>Your name:
		<br>
		<input type = "text" name = "name" size = "30" maxlength = "30">
		</p>
	<p>Your comments:
		<br>
		<textarea name = "comment" rows = "7" cols = "35">
		</textarea>
		</p>
	<input type = "submit" name = "submit" value = "Submit">
	<input type = "submit" name = "view" value = "View">
	<br>
	</form>
<?php
	if(isset($_POST['submit']))
	{
		
		//save to the file
		$myFile = "customerFiles.txt";
		//write
		if(is_writable($myFile)){
		file_put_contents($myFile, $_POST['name'].PHP_EOL, FILE_APPEND);
		file_put_contents($myFile, $_POST['comment'].PHP_EOL, FILE_APPEND);
		file_put_contents($myFile, date('m/d/Y').PHP_EOL, FILE_APPEND);
		echo "<p>Thank you!</p>";
		}else{
			echo "<p>Sorry, something went wrong.</p>";
			}
	}
	//read
	if (isset($_POST['view']))
	{
		$allComments = file("customerFiles.txt");
		for($i = 0; $i < count($allComments); $i+=4){
			echo $allComments[$i];
			echo "<br>";
			echo $allComments[$i+1];
			echo "<br>";
			echo $allComments[$i+2];
			echo "<br>";
		}
	}
	?>
	</div>
	