<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		//$this->load->helper('resize_image');
		$this->load->model('home_model');
		$this->load->helper('form');
		$this->load->library("pagination");
	}
	public function index()
	{	
		
		$this->load->view('header_view');
		$this->load->view('main_menu_view');
		$this->load->view('slide_view');
		$this->load->view('content_view');
		$this->load->view('footer_view');
	}
	
}