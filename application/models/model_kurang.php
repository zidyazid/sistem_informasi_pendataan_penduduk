<?php

/**
 * 
 */
class Model_kurang extends CI_Model
{
	public function input_data($data)
	{
		$this->db->insert('pengurangan_penduduk', $data);
	}

	public function ambilSatuData($id)
	{
		return $this->db->get_where('pengurangan_penduduk', ['id' => $id])->row_array();
	}

	public function kurang_data()
	{
		return $this->db->get('pengurangan_penduduk')->result_array();
	}
	public function update_data_kurang($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->set($data);
		$this->db->update('pengurangan_penduduk');
	}
	public function delete_data_kurang($id)
	{
		$this->db->delete('pengurangan_penduduk', ['id' => $id]);
	}
	public function totalPengurangan()
	{
		return $this->db->query("SELECT SUM(mati_l) AS mati_l, SUM(mati_p) AS mati_p, SUM(pindah_l) AS pindah_l, SUM(pindah_p) AS pindah_p FROM pengurangan_penduduk")->row_array();
	}

	public function totalPerpindahan()
	{
		$query = $this->db->get_where('pengurangan_penduduk', ['kategori_perpindahan' => 'Pindah']);
		return $query->num_rows();
	}
	public function totalKematian()
	{
		$query = $this->db->get_where('pengurangan_penduduk', ['kategori_perpindahan' => 'Mati']);
		return $query->num_rows();
	}
}
