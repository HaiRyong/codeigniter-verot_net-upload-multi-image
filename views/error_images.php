<div id="container">
	<h1><?php echo $page_title; ?></h1>

	ERRORS
	<?php
	echo '<br>Uploading Errors:<br>';
	if(isset($errors_uploading) && sizeof($errors_uploading) > 0)
	{
		foreach ($errors_uploading as $error) 
		{
			echo '<br>' . $error;
		}
	}
	echo '<br><br>Processing Errors:<br>';
	if(isset($errors_processing) && sizeof($errors_processing) > 0)
	{
		foreach ($errors_processing as $error) 
		{
			echo '<br>' . $error;
		}
	}
	

	?>
</div>