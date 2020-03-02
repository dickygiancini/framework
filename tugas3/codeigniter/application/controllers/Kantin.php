<?php

class Kantin extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('menukantin_model');
        $data['menu'] = $this->menukantin_model->get_menu();
        $this->load->view('V_menu',$data);

        $pesanan['order'] = $this->menukantin_model->get_order();
        $this->load->view('V_orders',$pesanan);
    }
    public function add_data()
    {
        $jumlah = 1;
        $kode_pesan = $this->kode_pesan = uniqid();
        $kode_warung = $this->input->post('kode_warung');
        $nama_warung = $this->input->post('nama_warung');
        $nama_menu = $this->input->post('nama_menu');
        $harga = $this->input->post('harga');

        $data = array(
            // 'kode_warung' => $kode_pesan, ---->> iki 'nama_kolom' => nilai;
            'kode_pesan' => $kode_pesan,
            'nama_warung' => $nama_warung,
            'nama_menu' => $nama_menu,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'kode_warung' => $kode_warung,
        );

        $this->menukantin_model->input_data($data);
        redirect('kantin');
    }
}
?>