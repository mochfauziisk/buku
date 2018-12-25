<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_toko','toko');
	}
	public function index()
	{		
		if ($this->session->userdata('login')==TRUE) {
			if ($this->session->userdata('level')==1) {
			$data['dataBuku']=$this->toko->getdataBuku()->num_rows();
			$data['dataKategori']=$this->toko->getdataBuku()->num_rows();
			$data['dataTransaksiTotal']=$this->toko->getdataTransaksiTotal()->num_rows();
			$data['dataTransaksi']=$this->toko->getdataTransaksi()->num_rows();
			$data['dataBuku10']=$this->toko->getdataBuku10()->num_rows();
			$data['judul']='Dashboard | Web - Toga Media';
			$data['konten']='toko';
			$this->load->view('template',$data);
			} 
			elseif($this->session->userdata('level')==2){
				redirect('transaksi','refresh');
			}		
		}else{
			redirect('Login','refresh');		
		// }
		}
	}

}

/* End of file Toko.php */
/* Location: ./application/controllers/Toko.php */