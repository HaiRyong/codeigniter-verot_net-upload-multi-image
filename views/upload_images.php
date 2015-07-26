<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Upload_images extends CI_Controller {


		public function __construct()
		{
			parent::__construct();

			$this->load->library('my_upload');
			$this->load->helper(array('form', 'url'));
		}


		public function index()
		{

			//	view
			$data['page_title'] = "Images Upload" ;
			$this->load->view('upload_images_view', $data);

		}

		//	--------------------------------------------------------------------------------------------
		//	adaptada de: http://www.verot.net/php_class_upload_forum.htm?php_class_upload_forum_id=4197
		public function do_upload()
		{
			$data['errors_uploading'] = array(); 
			$data['errors_processing'] = array(); 
			$now = date("YmdHis");
			foreach ($_FILES["files_image"]['tmp_name'] as $file) 
			{
				$this->my_upload->upload($file);
				if ( $this->my_upload->uploaded == true  ) 
				{
					$this->my_upload->allowed         		= array('image/*');
					$this->my_upload->file_new_name_body    = 'image_resized' . $now;
					$this->my_upload->image_convert 		= 'jpg';  					    	 
			  		$this->my_upload->jpeg_quality 			= 100;	
					$this->my_upload->image_resize          = true;
					$this->my_upload->image_x               = 700;
					$this->my_upload->image_ratio_y         = true;

					//	DON'T FORGET TO CREATE A FOLDER IMAGES (same level of 'application')
					$this->my_upload->process('./images/');


					if ( $this->my_upload->processed == true ) 
					{
						$this->my_upload->clean();  
					} 
					else 
					{
						//	just grab the name 
						$data['errors_processing'][] = 'image_resized_thumb' . $now;
					}
				} 
				else  
				{
					//	just grab the name 
					$data['errors_uploading'][] = 'image_resized_thumb' . $now;
				}				
			}


		}

	}