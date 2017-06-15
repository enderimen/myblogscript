<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Yonetim extends CI_Controller {

	public function index()
	{
		$this->load->view("yonetim/anasayfa");
	}
	public function anasayfa()
	{
		$this->load->view("yonetim/index");
	}
	public function paylasim()
	{
		$this->load->view("yonetim/paylasim_yap");
	}
	public function footer()
	{
		$this->load->view("yonetim/footer-duzenle");
	}
	public function hakkinda()
	{
		$this->load->view("yonetim/hakkinda-duzenle");
	}
	public function slider()
	{
		$this->load->view("yonetim/slider-duzenle");
	}
	public function profilim()
	{
		$this->load->view("yonetim/profilim");
	}
}