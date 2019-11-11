<?php
Class Menu_model extends CI_Model
{
    public function __construct() {
		parent::__construct();
		$this->load->database();
    }
    public function read_menu(){
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->order_by('position_menu','ASC');
		$query = $this->db->get();
		return $query->result();
    }
    public function read_submenu($id_menu){
        $this->db->select('*');
        $this->db->from('sub_menu');
        $this->db->where('id_menu',$id_menu);
        $this->db->order_by('position_sub_menu','ASC');
		$query = $this->db->get();
		return $query->result();
    }
    function menus() {
        $this->db->select("*");
        $this->db->from("menu");
        $this->db->order_by('position_menu','ASC');
        $q = $this->db->get();
    
        $final = array();
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
    
                $this->db->select("*");
                $this->db->from("sub_menu");
                $this->db->where("id_menu", $row->id_menu);
                $this->db->order_by('position_sub_menu','ASC');
                $q = $this->db->get();
                if ($q->num_rows() > 0) {
                    $row->children = $q->result();
                }
                array_push($final, $row);
            }
        }
        return $final;
    }
    public function get_list_submenu($id_submenu)
    {
        $this->db->select('id_menu')->from('sub_menu')->where('id_sub_menu',$id_submenu);
        $subQuery =  $this->db->get_compiled_select();
       
        $this->db->select('id_sub_menu,nama_sub_menu,grup_sub_menu');
        $this->db->from('sub_menu');
        $this->db->where("id_menu in ($subQuery)",NULL,FALSE);
        $query = $this->db->get();
        
		return $query->result();
    }
    public function get_detil_submenu($id_submenu)   
    {
        $this->db->select('*')->from('sub_menu a')->join('menu b','a.id_menu = b.id_menu','LEFT')->where('a.id_sub_menu',$id_submenu);
        $query = $this->db->get();
		return $query->row();
    }
  
}