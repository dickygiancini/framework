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
    // public function add_data()
    // {
    //     $kode_pesan = $this->input->post('kode_warung');
    //     $nama_warung = $this->input->post('nama_warung');
    //     $nama_menu = $this->input->post('nama_menu');
    //     $harga = $this->input->post('harga');

    //     $data = array(
    //         'kode_warung' => $kode_pesan,
    //         'nama_warung' => $nama_warung,
    //         'nama_menu' => $nama_menu,
    //         'harga' => $harga,
    //     );

    //     $this->menukantin_model->add_data($data, 'order');
    //     redirect('codeigniter/index');
    // }
    function input_data($data){
        $this->db->insert('order',$data);
        //awale `order`
    }
    
    public function get_order()
    {
        return $this->db->get('order')->result_array();
    }
}