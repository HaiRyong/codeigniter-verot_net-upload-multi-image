# CodeIgniter with Verot_net (upload and manipulate multi-image)
Integration of CodeIgniter and Verot Upload multi Images



I am developing a project with CodeIgniter and I needed to integrate this framework with Verot class of upload-and-handle-images - http://www.verot.net. STEPS:

1. Just upload all files to your CI application folder (except this one). Check if there is no replacement of any existing file(s).

2. in application/config/routes.php: 

 $route['upload_images'] = 'Upload_images/index'; 

 $route['do_upload'] = 'Upload_images/do_upload';



#Important:

If you need a SINGLE image upload do the modifications bellow:

in controllers/upload_images.php:


			remove these 3 lines: 

			30:  foreach ($_FILES["files_image"]['tmp_name'] as $file) 

			31:  {
	
			...
	
			62:  }
			
			
			change line 32: 			$this->my_upload->upload($_FILES["files_image"]['tmp_name']);
			
			
in views/upload_images_view.php		

			change line 7:  <input type="file" name="files_image" size="20" />
			
