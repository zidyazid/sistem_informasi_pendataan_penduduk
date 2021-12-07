<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporancontroller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_sekarang', 'Model_sekarang');
        $this->load->model('model_awal', 'Model_awal');
        $this->load->model('model_tambah', 'Model_tambah');
        $this->load->model('model_kurang', 'Model_kurang');
    }
    public function laporanPendudukSekarang()
    {
        // $data['totalPenduduk'] = $this->Model_sekarang->totalPenduduk();
        $data['data_sekarang'] = $this->Model_sekarang->ambilSeluruhData();
        $data["title"] = "Laporan Data Penduduk Saat Ini";

        // var_dump($totalPenduduk);
        // die;

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_sekarang.pdf";
        $this->pdf->load_view('laporan/laporan_penduduk_sekarang', $data);
    }
    public function laporanPenguranganPenduduk()
    {
        $data['data_pengurangan'] = $this->Model_kurang->kurang_data();
        $data["title"] = "Laporan Data Pengurangan Penduduk";
        // $data['dataPengurangan'] = $this->Model_kurang->totalPengurangan();

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_pengurangan_penduduk.pdf";
        $this->pdf->load_view('laporan/laporan_pengurangan_penduduk', $data);
    }
    public function laporanPertambahanPenduduk()
    {
        $data['data_pertambahan'] = $this->Model_tambah->tambah_data();
        // $data['totalPertambahan'] = $this->Model_tambah->totalPertambahan();

        $data["title"] = "Laporan Data Pertambahan Penduduk";

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_pertambahan_penduduk.pdf";
        $this->pdf->load_view('laporan/laporan_pertambahan_penduduk', $data);
    }

    public function laporanAwalPendataanPenduduk()
    {
        $data['data_awal'] = $this->Model_awal->ambil_data();
        $data['totalPenduduk'] = $this->Model_awal->totalPendudukAwalPendataan();

        $data["title"] = "Laporan Data Awal Penduduk";

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_dataAwal_penduduk.pdf";
        $this->pdf->load_view('laporan/laporan_data_awal', $data);
    }
}
