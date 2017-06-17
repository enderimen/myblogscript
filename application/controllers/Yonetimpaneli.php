<?php if ( ! defined('BASEPATH')) exit('Bu sayfaya erişiminiz engellendi.');

class Yonetimpaneli extends CI_Controller {
	
	public function index()
	{
		$this->load->model('vt');
		$cekilen=$this->vt->paylasimcek(); //Model'den gelen sonucu içeriyor.

		$data=new stdclass;
		$data->bilgi=$cekilen;

		$this->load->view("yonetim/anasayfa",$data);
	}

	public function __construct()
	{
		parent::__construct();
		{
			$this->guvenlik();//Bütün fonksiyonlarda güvenliği sağlamak için construct tanımladık
		}
	}

	function guvenlik()
	{
		$kontrol=$this->session->userdata('kontrol');//Daha önceden oluşturmuş olduğumuz session u okuduk.
		if (!isset($kontrol) || $kontrol !=true) {
			redirect('yonetim');
		}
	}
}