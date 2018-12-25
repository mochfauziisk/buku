<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_toko extends CI_Model {

	public function getdatatransaksi()
	{
		return $this->db->where('id_user',$this->session->userdata('id_user'))
						->get('transaksi');								
	}
	public function getdataTransaksiTotal()
	{
		return $this->db->get('transaksi');								
	}
	public function getdatakategori()
	{
		return $this->db->get('kategori');
	}
	public function getdataBuku()
	{
		return $this->db->get('buku');
	}
	public function getdataBuku10()
	{
		return $this->db->where('stok < 10')
						->get('buku');
	}
	public function getDataProject()
	{
		return $this->db->get('project')
						->result();
	}
}

/* End of file m_toko.php */
/* Location: ./application/models/m_toko.php */