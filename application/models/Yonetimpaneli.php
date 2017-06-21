<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Yonetimpaneli extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		{
			$this->guvenlik();//Bütün fonksiyonlar da çalıştırmak için constructer tanımladık
		}
	}

	function guvenlik()
	{
		$kontrol=$this->session->userdata('kontrol');//Daha önceden oluşturmuş olduğumuz session u okuduk.
		if (!isset($kontrol) || $kontrol !=true) {
			redirect('yonetim');
		}
	}

	public function index()
	{
		$this->load->view('yonetim/panel');
	}	
}