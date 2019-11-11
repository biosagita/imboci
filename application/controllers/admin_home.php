<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	    $this->load->model('admin_login_model');
		$this->load->helper('form');
		$this->load->library("pagination");
	
    }
    public function index(){
        
        if($this->session->userdata('is_login')==TRUE){
            $this->home();
        }
        else redirect('login','refresh');
		
    }
    public function home(){
        
        $data = array(
            'nama'=>$this->session->userdata('nama')
            
        );
        $this->load->view('admin_header_view');
        $this->load->view('admin_topbar_view', $data);
        $this->load->view('admin_sidebar_view');
        $this->load->view('admin_home_view', $data);
        $this->load->view('admin_footer_view');
    }
}