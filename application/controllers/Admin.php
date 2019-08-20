<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_admin','admin');
		// $this->load->model('M_login');
		
    }
    //=========== beranda =============
	function index(){
        $data['page']="beranda";
		$this->load->view('admin/utama',$data);
    }
    public function coba(){
        $response     = $this->admin->datatable();
        $data         = array();
        $no           = 1;
        foreach($response as $row)
        {
            $tbody    = array();
            $tbody[]  = $no++;
            $tbody[]  = $row['nama'];
            $tbody[]  = $row['no_hp'];
            $tbody[]  = $row['email'];
            $data[]   = $tbody;
        }

        $output   = array(
            'draw'              => intval($_POST['draw']),
            'recordsTotal'      => $this->admin->all_data(),
            'recordsFiltered'   => $this->admin->filter_data(),
            'data'              => $data,
        );
        echo json_encode($output);
    }
    //=========== Barang ==============
    function barang(){
        $data['page']="barang";
        $this->load->view('admin/utama',$data);
    }
    //=========== Anggota =============
    function anggota(){
        $data['page']="anggota";
        $this->load->view('admin/utama',$data);
    }
    //=========== Pinjam ==============
    function pinjam(){
        $data['page']="pinjam";
        $this->load->view('admin/utama',$data);
    }
    //=========== Kembali ==============
    function kembali(){
        $data['page']="kembali";
        $this->load->view('admin/utama',$data);
    }
    //=========== Record ===============
    function record(){
        $data['page']="record";
        $this->load->view('admin/utama',$data);
    }
}
