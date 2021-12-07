<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usercontroller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_awal');
        $this->load->model('Model_tambah');
        $this->load->model('Model_kurang');
        $this->load->model('Model_sekarang');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['judul'] = "Admin Page";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // menyimpan data kevariable
        $jumlah = $this->Model_sekarang->totalPenduduk();
        // memanggil setiap nilai berdasarkan field
        $wni_l = $jumlah['wni_l'];
        $wni_p = $jumlah['wni_p'];
        $wna_p = $jumlah['wna_p'];
        $wna_l = $jumlah['wna_l'];
        // mentotalkan jumlah keseluruhan penduduk
        $total = $wni_l + $wni_p + $wna_l + $wna_p;
        $data['total'] = $total;
        // menyimmpan data seluruh data pertambahan penduduk
        $jumlahPertambahan = $this->Model_tambah->totalPertambahan();

        // memanggil nilai yang akan dijumlahkan
        $lahir_l = $jumlahPertambahan['lahir_l'];
        $lahir_p = $jumlahPertambahan['lahir_p'];

        // mentotalkan selutuh data pertambahan penduduk
        $totalPertambahan = $lahir_l + $lahir_p;
        $data['totalPertambahan'] = $totalPertambahan;
        // menyimmpan data seluruh data pertambahan penduduk
        $jumlahPendatang = $this->Model_tambah->totalPertambahan();
        $datang_l = $jumlahPendatang['datang_l'];
        $datang_p = $jumlahPendatang['datang_p'];
        // memanggil nilai yang akan dijumlahkan

        // mentotalkan selutuh data pertambahan penduduk

        $totalPendatang = $datang_l + $datang_p;
        $data['totalPendatang'] = $totalPendatang;


        // penotalan pengurangan
        $jumlahPengurangan = $this->Model_kurang->totalPengurangan();
        $mati_l = $jumlahPengurangan['mati_l'];
        $mati_p = $jumlahPengurangan['mati_p'];

        $totalKematian = $mati_l + $mati_p;
        $data['totalPengurangan'] = $totalKematian;
        // penotalan pengurangan
        $jumlahPerpindahan = $this->Model_kurang->totalPengurangan();
        $pindah_l = $jumlahPengurangan['pindah_l'];
        $pindah_p = $jumlahPengurangan['pindah_p'];

        $totalPerpindahan = $pindah_l + $pindah_p;
        $data['totalPerpindahan'] = $totalPerpindahan;

        $totalWna = $wna_l + $wna_p;
        $data['totalWna'] = $totalWna;

        $totalWni = $wni_l + $wni_p;
        $data['totalWni'] = $totalWni;



        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('user/index', $data);
    }

    public function data_awal()
    {
        $data['kode_rw'] = $this->db->get('kode_rw')->result_array();
        $data['data_awal'] = $this->Model_awal->ambil_data();
        $data['title'] = "Penduduk Awal Pencatatan";
        $data['judul'] = "Penduduk Awal Pencatatan";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['menu'] = $this->db->get_where('user_sub_menu', ['role_id' => $this->session->userdata('role_id')])->row_array();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('user/user_penduduk_awal', $data);
        // $this->load->view('komponen/footer', $data);
    }

    public function data_pertambahan_penduduk()
    {
        $data['kode_rw'] = $this->db->get('kode_rw')->result_array();
        $data['data_pertambahan_penduduk'] = $this->Model_tambah->tambah_data();
        $data['title'] = "Pertambahan Penduduk";
        $data['judul'] = "Pertambahan Penduduk";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['menu'] = $this->db->get_where('user_sub_menu', ['role_id' => $this->session->userdata('role_id')])->row_array();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('user/user_pertambahan_penduduk', $data);
        // $this->load->view('komponen/footer', $data);
    }

    public function data_pengurangan_penduduk()
    {
        $data['kode_rw'] = $this->db->get('kode_rw')->result_array();
        $data['data_pengurangan_penduduk'] = $this->Model_kurang->kurang_data();
        $data['title'] = "Pengurangan Penduduk";
        $data['judul'] = "Pengurangan Penduduk";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['menu'] = $this->db->get_where('user_sub_menu', ['role_id' => $this->session->userdata('role_id')])->row_array();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('user/user_pengurangan_penduduk', $data);
        // $this->load->view('komponen/footer', $data);
    }

    public function data_penduduk_sekarang()
    {
        $data['kode_rw'] = $this->db->get('kode_rw')->result_array();
        $data['data_penduduk_sekarang'] = $this->Model_sekarang->data_sekarang();
        $data['title'] = "Penduduk Sekarang";
        $data['judul'] = "penduduk Sekarang";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('user/user_penduduk_sekarang', $data);
        // $this->load->view('komponen/footer', $data);
    }

    public function info()
    {
        $data['title'] = "Info";
        $data['judul'] = "Information Page";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // menyimpan data kevariable
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        $this->load->view('admin/info', $data);
    }
}
