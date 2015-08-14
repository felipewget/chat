<?php

	class HomeController {
		
		public $title_page = 'home';
		
		public function __construct(){
			
			$this->helper = new Helper();
			$this->absolute_path = $this->helper->absolute_path();
			
		}
		
		public function get(){
			
			require_once 'view/pages/logado/home.php';
			
		}
		
	}