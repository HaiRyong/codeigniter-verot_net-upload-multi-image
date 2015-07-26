<div id="container">
	<h1><?php echo $page_title; ?></h1>


	<?php echo form_open_multipart('do_upload'); ?>

	<input type="file" multiple name="files_image[]" size="20" />
	
	<input type="submit" value="Upload Images" />

</form>

</div>
