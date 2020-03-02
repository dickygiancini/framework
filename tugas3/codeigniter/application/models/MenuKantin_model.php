<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuKantin_model extends CI_Model
{
    public $k_warung;
    public $n_warung;
    public $n_menu;
    public $harga;
    public $jumlah = 1;

    function __construct(){
        parent::__construct();
    }

    public function get_menu()
    {
        return $this->db->get('menu')->result_array();
    }
    
    function input_data($data){
        $this->db->insert('order',$data);
        //awale `order`
    }
    
    public function get_order()
    {
        return $this->db->get('order')->result_array();
    }
}