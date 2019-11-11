<?php
Class Article_model extends CI_Model
{
    public function __construct() {
		parent::__construct();
		$this->load->database();
    }
public function get_article($id_submenu){
        $this->db->select('*')->from('artikel')->where_in('id_sub_menu',$id_submenu)->order_by('artikel_id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_article_byID($id_content)
    {
        $this->db->select('*')->from('artikel')->where('artikel_id',$id_content);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_article_last($id_submenu){
        $this->db->select('*')->from('artikel')->where('id_sub_menu',$id_submenu)->order_by('artikel_id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row();
    }
}