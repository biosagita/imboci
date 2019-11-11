<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {
	function __construct() {
		parent::__construct();
	
		$this->load->model('home_model');
		$this->load->model('menu_model');
		$this->load->model('article_model');
		$this->load->library("pagination");
	
	}
	public function index()
	{	
 
    }
    public function content_single($id_submenu, $id_content)
    {
        $this->load->view('header_view');
		$menus = $this->menu_model->menus();
		$data = array('menus' => $menus);
		$this->load->view('main_menu_view', $data);
		$list_submenu = $this->menu_model->get_list_submenu($id_submenu);
		$detil_submenu = $this->menu_model->get_detil_submenu($id_submenu);
		$content = $this->article_model->get_article_byID($id_content);
        $data2 = array(
                'id_submenu'=>$id_submenu,
                'nama_menu' => $detil_submenu->nama_menu,
                'list_sub_menu' =>$list_submenu,
                'nama_sub_menu' =>$detil_submenu->nama_sub_menu,
                'content' => $content
            );
        $this->load->view('single_blog_view', $data2);
		$this->load->view('footer_view');
    }
}