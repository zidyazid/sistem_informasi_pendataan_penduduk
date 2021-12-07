<?php

/**
 * 
 */
class Model_sekarang extends CI_Model
{
	public function input_data($tabel, $data)
	{
		$this->db->insert($tabel, $data);
	}

	public function sekarang_data()
	{
		$this->db->select('*');
		$this->db->from('penduduk_sekarang');
		$this->db->join('kode_rw', 'kode_rw.id = penduduk_sekarang.id');
		return $this->db->get()->result_array();
	}

	public function ambilSeluruhData()
	{
		return $this->db->get('penduduk_sekarang')->result_array();
	}

	public function data_sekarang()
	{
		$this->db->select("*");
		$this->db->from("penduduk_sekarang");
		$this->db->join("kode_rw", "kode_rw.id = penduduk_sekarang.id_rw");
		return $this->db->get()->result_array();
	}

	public function ambilSatuDataNik($nik)
	{
		return $this->db->get_where('penduduk_sekarang', ['nik' => $nik])->row_array();
	}
	public function ambilSatuData($id)
	{
		return $this->db->get_where('penduduk_sekarang', ['id_rw' => $id])->row_array();
	}
	public function ambilSatuDataDariRw($rw)
	{
		return $this->db->get_where('penduduk_sekarang', ['id_rw' => $rw])->row_array();
	}

	public function perbaruiDataSekarang($nik, $data)
	{
		$this->db->where('nik', $nik);
		$this->db->set($data);
		$this->db->update('penduduk_sekarang');
	}

	public function totalPenduduk()
	{
		return $this->db->query("SELECT sum(wni_l) AS wni_l, sum(wni_p) AS wni_p, sum(wna_l) AS wna_l,sum(wna_p) AS wna_p FROM penduduk_sekarang")->row_array();
	}

	public function delete_data_sekarang($nik)
	{
		$where = [
			'nik' => $nik,

		];
		$this->db->delete('penduduk_sekarang', $where);
	}

	public function totalWni()
	{
		$query = $this->db->get_where('penduduk_sekarang', ['kewarganegaraan' => 'Wni']);
		return $query->num_rows();
	}
	public function totalWna()
	{
		$query = $this->db->query("SELECT * FROM penduduk_sekarang WHERE kewarganegaraan = 'Wna'");
		return $query->num_rows();
	}


	// public function jumlah_idrw()
	// {
	// 	return $this->db->query("SELECT sum(id) AS id FROM penduduk_sekarang")->result_array();
	// }

	// public function wnil($id)
	// {
	// 	return $this->db->query("SELECT sum(wni_l) AS wni_l FROM penduduk_sekarang WHERE id_rw = $id")->result_array();
	// }
}
