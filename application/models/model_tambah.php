<?php

/**
 * 
 */
class Model_tambah extends CI_Model
{
	public function input_data($data)
	{
		$this->db->insert('pertambahan_penduduk', $data);
	}

	public function tambah_data()
	{
		return $this->db->get('pertambahan_penduduk')->result_array();
	}
	public function update_data_tambah($nik, $data)
	{

		$this->db->where('nik', $nik);
		$this->db->set($data);
		$this->db->update('pertambahan_penduduk');
	}

	public function ambilSatuData($id)
	{
		return $this->db->get_where('pertambahan_penduduk', ['id' => $id])->row_array();
	}

	public function delete_data_tambah($nik)
	{
		$where = [
			'nik' => $nik,

		];
		$this->db->delete('pertambahan_penduduk', $where);
	}

	public function jumlah_penduduk_datang()
	{
		return $this->db->query("SELECT sum(datang_l) AS datang_l, sum(datang_p) AS datang_p FROM pertambahan_penduduk")->result_array();
	}

	public function totalPertambahan()
	{
		return $this->db->query("SELECT sum(lahir_l) AS lahir_l, sum(lahir_p) AS lahir_p, sum(datang_l) AS datang_l,sum(datang_p) AS datang_p FROM pertambahan_penduduk")->row_array();
	}

	public function totalKelahiran()
	{
		$query = $this->db->get_where('pertambahan_penduduk', ['kategori_pertambahan' => 'Lahir']);
		return $query->num_rows();
	}
	public function totalPendatang()
	{
		$query = $this->db->get_where('pertambahan_penduduk', ['kategori_pertambahan' => 'Datang']);
		return $query->num_rows();
	}

	public function jumlah_penduduk_lahir()
	{

		return $this->db->query("SELECT sum(lahir_l) AS lahir_l, sum(lahir_p) AS lahir_p FROM pertambahan_penduduk")->result_array();
	}

	public function lahir_idrw1($id)
	{
		return $this->db->query("SELECT sum(lahir_l) AS lahir_l, sum(lahir_p) AS lahir_p, sum(datang_l) AS datang_l, sum(datang_p) AS datang_p FROM pertambahan_penduduk WHERE id_rw = $id")->result_array();
	}
	// public function lahir_idrw2()
	// {
	// 	return $this->db->query("SELECT sum(lahir_l) AS lahir_l, sum(lahir_p) AS lahir_p, sum(datang_l) AS datang_l, sum(datang_p) AS datang_p FROM pertambahan_penduduk WHERE id_rw = 2")->result_array();
	// }
	// public function lahir_idrw3()
	// {
	// 	return $this->db->query("SELECT sum(lahir_l) AS lahir_l, sum(lahir_p) AS lahir_p, sum(datang_l) AS datang_l, sum(datang_p) AS datang_p FROM pertambahan_penduduk WHERE id_rw = 3")->result_array();
	// }
	// public function lahir_idrw4()
	// {
	// 	return $this->db->query("SELECT sum(lahir_l) AS lahir_l, sum(lahir_p) AS lahir_p, sum(datang_l) AS datang_l, sum(datang_p) AS datang_p FROM pertambahan_penduduk WHERE id_rw = 4")->result_array();
	// }
	// public function lahir_idrw5()
	// {
	// 	return $this->db->query("SELECT sum(lahir_l) AS lahir_l, sum(lahir_p) AS lahir_p, sum(datang_l) AS datang_l, sum(datang_p) AS datang_p FROM pertambahan_penduduk WHERE id_rw = 5")->result_array();
	// }
	// public function lahir_idrw6()
	// {
	// 	return $this->db->query("SELECT sum(lahir_l) AS lahir_l, sum(lahir_p) AS lahir_p, sum(datang_l) AS datang_l, sum(datang_p) AS datang_p FROM pertambahan_penduduk WHERE id_rw = 6")->result_array();
	// }
	// public function lahir_idrw7()
	// {
	// 	return $this->db->query("SELECT sum(lahir_l) AS lahir_l, sum(lahir_p) AS lahir_p, sum(datang_l) AS datang_l, sum(datang_p) AS datang_p FROM pertambahan_penduduk WHERE id_rw = 7")->result_array();
	// }
	// public function lahir_idrw8()
	// {
	// 	return $this->db->query("SELECT sum(lahir_l) AS lahir_l, sum(lahir_p) AS lahir_p, sum(datang_l) AS datang_l, sum(datang_p) AS datang_p FROM pertambahan_penduduk WHERE id_rw = 8")->result_array();
	// }
	// public function lahir_idrw9()
	// {
	// 	return $this->db->query("SELECT sum(lahir_l) AS lahir_l, sum(lahir_p) AS lahir_p, sum(datang_l) AS datang_l, sum(datang_p) AS datang_p FROM pertambahan_penduduk WHERE id_rw = 9")->result_array();
	// }
}
