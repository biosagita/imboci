<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {
	function __construct() {
		parent::__construct();
		//$this->load->helper('resize_image');
        $this->load->model('admin_login_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	
    }

	public function index(){
        
        if($this->session->userdata('is_login')==TRUE)
          {
          redirect('admin','refresh');
          }
		$this->load->view('header_view');
		$data=array('warning' => '');
		$this->load->view('admin_login_view',$data);
		
	}

	public function gagal(){
		$this->load->view('header_view');
		$data=array('warning' => 'Nama atau Kata Kunci tidak sesuai');
		$this->load->view('admin_login_view',$data);
	}
	public function login_proses() {
	

	$this->form_validation->set_rules('user', 'Nama Pengguna', 'required');
	$this->form_validation->set_rules('password', 'Kata Kunci', 'required');

    if ($this->form_validation->run() == TRUE) {
    	
          if($this->admin_login_model->m_cek_user()->num_rows()==1) {
          
             $db=$this->admin_login_model->m_cek_user()->row();
             if(hash_verified($this->input->post('password'),$db->password)) {
					echo "ok";
                     $data_login=array('is_login'=>TRUE,
                             'email'  =>$db->email,
                             'nama'   =>$db->nama);
             
                     $this->session->set_userdata($data_login);
                     redirect('admin','refresh');

                        } else {
							$this->gagal();
							//echo "ok1";

                        }

          } else { // jika nama tidak terdaftar!
			
			$this->gagal();
         
          }

    } else { 
		
    }
	}


	public function logout() {

		$this->session->unset_userdata('is_login');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('email');

		session_destroy();
		//$this->session->set_flashdata('pesan', 'Sign Out Berhasil!');
		redirect('/','refresh');
	}

}