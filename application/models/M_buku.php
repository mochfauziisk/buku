<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends CI_Model {

	public function databuku()
	{
		return $this->db->join('kategori','kategori.id_kategori=buku.id_kategori')
						->get('buku')->result(); 
	}
	public function hapus($id)
	{
		return $this->db->where('id_buku', $id)->delete('buku');
	}
	public function tambah($nama_file)
	{
		if ($nama_file=="") {
			$object = array(
			'judul_buku' => $this->input->post('judul_buku'),
			'tahun' => $this->input->post('tahun'),	
			'id_kategori' => $this->input->post('id_kategori'),		
			'harga' => $this->input->post('harga'),
			'penerbit' => $this->input->post('penerbit'),
			'penulis' => $this->input->post('penulis'),
			'stok' => $this->input->post('stok'), 			
			);
		}
		else{
			$object = array(
			'judul_buku' => $this->input->post('judul_buku'),
			'tahun' => $this->input->post('tahun'),	
			'id_kategori' => $this->input->post('id_kategori'),		
			'harga' => $this->input->post('harga'),
			'foto_cover' => $nama_file,
			'penerbit' => $this->input->post('penerbit'),
			'penulis' => $this->input->post('penulis'),
			'stok' => $this->input->post('stok'), 			
			);
		}
		return $this->db->insert('buku', $object);
	}
	public function detail($a)
	{
		return $this->db->join('kategori','kategori.id_kategori=buku.id_kategori')
						->where('id_buku', $a)
						->get('buku')
						->row();
	}
	public function ubah($nama_file)
	{
		if ($nama_file=="") {
			$object = array(
			'judul_buku' => $this->input->post('judul_buku'),
			'tahun' => $this->input->post('tahun'),	
			'id_kategori' => $this->input->post('id_kategori'),		
			'harga' => $this->input->post('harga'),
			'penerbit' => $this->input->post('penerbit'),
			'penulis' => $this->input->post('penulis'),
			'stok' => $this->input->post('stok'), 			
			);
		}
		else{
			$object = array(
			'judul_buku' => $this->input->post('judul_buku'),
			'tahun' => $this->input->post('tahun'),	
			'id_kategori' => $this->input->post('id_kategori'),		
			'harga' => $this->input->post('harga'),
			'foto_cover' => $nama_file,
			'penerbit' => $this->input->post('penerbit'),
			'penulis' => $this->input->post('penulis'),
			'stok' => $this->input->post('stok'), 			
			);
		}
		return $this->db->where('id_buku', $this->input->post('id_buku'))->update('buku', $object);
	}
}

/* End of file m_buku.php */
/* Location: ./application/models/m_buku.php */