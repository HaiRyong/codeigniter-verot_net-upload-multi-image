# CodeIgniter-Verot_net-upload-images
Integration of CodeIgniter and Verot Upload Images



I am developing a project with CodeIgniter and I needed to integrate this framework with Verot class of upload-and-handle-images - http://www.verot.net. STEPS:

1. Just upload all files to your CI application folder (except this one). Check if there is no replacement.

2. in application/config/routes.php: 

 $route['upload_images'] = 'Upload_images/index'; 

 $route['do_upload'] = 'Upload_images/do_upload';
