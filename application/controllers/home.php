<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		//$this->load->helper('resize_image');
		$this->load->model('home_model');
		$this->load->model('menu_model');
		$this->load->model('article_model');
		$this->load->helper('form');
		$this->load->library("pagination");
	
	}
	public function index()
	{	
		$this->load->view('header_view');
		$idBerita = array('27','28');
		$content = $this->article_model->get_article($idBerita);
		$menus = $this->menu_model->menus();
		$data = array(
			'menus' => $menus,
			'berita'=> $content
		);
		$this->load->view('main_menu_view', $data);
		$this->load->view('slide_view');
		$this->load->view('content_view');
		$this->load->view('footer_view');
	//	echo json_encode($data);
	}
	public function navi($id_submenu)
	{
		$this->load->view('header_view');
	
		$menus = $this->menu_model->menus();
		$data = array('menus' => $menus);
		$this->load->view('main_menu_view', $data);
		$list_submenu = $this->menu_model->get_list_submenu($id_submenu);
		$detil_submenu = $this->menu_model->get_detil_submenu($id_submenu);
		if($detil_submenu->style_sub_menu==1){
			$content = $this->article_model->get_article_last($id_submenu);
			$data2 = array(
					'id_submenu'=>$id_submenu,
					'nama_menu' => $detil_submenu->nama_menu,
					'list_sub_menu' =>$list_submenu,
					'nama_sub_menu' =>$detil_submenu->nama_sub_menu,
					'content' => $content
				);
			$this->load->view('single_blog_view', $data2);
		}
		else{
			$content = $this->article_model->get_article($id_submenu);
			$data2 = array(
					'id_submenu'=>$id_submenu,
					'nama_menu' => $detil_submenu->nama_menu,
					'list_sub_menu' =>$list_submenu,
					'nama_sub_menu' =>$detil_submenu->nama_sub_menu,
					'content' => $content
				);
			$this->load->view('multi_blog_view', $data2);
		}
		
		$this->load->view('footer_view');
	}
	
	
}