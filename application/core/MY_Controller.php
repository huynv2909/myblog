<?php 
	if (!defined('BASEPATH')) die('Bad request!');

	class MY_Controller extends CI_Controller
	{
		var $data = array();

		function __construct()
		{
			parent::__construct();

			$controller = $this->uri->segment(1);
			$controller = strtolower($controller);

			switch ($controller) {
				// Admin
				case 'admin':
					// Load file libraries, helper,...

					break;
				// Blog
				default:
					// Load file libraries, helper,...
					# code...
					break;
			}
		}
	}
 ?>