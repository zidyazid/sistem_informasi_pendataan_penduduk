<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['jumlahRw'] = $this->db->query("SELECT COUNT(*) AS jumlahRw FROM kode_rw")->row_array();
		$data['laki'] = $this->db->query("SELECT COUNT('jenis_kelamin') AS jenkel FROM penduduk_sekarang WHERE jenis_kelamin='laki-laki'")->row_array();
		$data['perempuan'] = $this->db->query("SELECT COUNT('jenis_kelamin') AS jenkel FROM penduduk_sekarang WHERE jenis_kelamin='perempuan'")->row_array();
		$data['jumlahSeluruhPenduduk'] =  $this->db->query("SELECT COUNT(*) AS jumlahKeseluruhan FROM penduduk_sekarang")->row_array();
		$data['jumlahWni'] =  $this->db->query("SELECT COUNT(*) AS wni FROM penduduk_sekarang WHERE kewarganegaraan = 'wni'")->row_array();
		$data['jumlahWna'] =  $this->db->query("SELECT COUNT(*) AS wna FROM penduduk_sekarang WHERE kewarganegaraan = 'wna'")->row_array();

		// var_dump($data['jumlahWna']);
		// die;
		$this->load->view('welcome_message', $data);
	}
}
