<?php

/**
 * 
 */
class Model_awal extends CI_Model
{
	public function input_data($tabel, $data)
	{
		$this->db->insert($tabel, $data);
	}

	public function ambilSatuData($id)
	{
		return $this->db->get_where('penduduk_awal_pencatatan', ['id_rw' => $id])->row_array();
	}

	public function ambil_data()
	{
		return $this->db->get('penduduk_awal_pencatatan')->result_array();
	}
	public function update_data_awal($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->set($data);
		$this->db->update('penduduk_awal_pencatatan');
	}
	public function delete_data_awal($id)
	{
		$this->db->delete('penduduk_awal_pencatatan', ['id' => $id]);
	}

	public function jumlah_wni_l()
	{
		return $this->db->query("SELECT sum(wni_l) AS jumlah_wni FROM penduduk_awal_pencatatan")->result_array();
	}

	public function totalPendudukAwalPendataan()
	{
		return $this->db->get('penduduk_awal_pencatatan')->result_array();
	}
}
