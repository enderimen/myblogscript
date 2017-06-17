<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	public function index()
	{
		$this->load->model('vt');
		$sonuc=$this->vt->paylasimcek();
		
		$data=new stdclass;
		$data->bilgi=$sonuc;

		$this->load->view("anasayfa",$data);
		//Git view de adresi verilen sayfayı görüntüle
		/*Burası view yüklemek için kullanılan bölümdür.*/
		/*Burada çağıracağımız sayfa ilk olarak başlatılan sayfa olacaktır.[views içerindeki dosyayının yolunu veriyoruz.]*/
	}
	public function hakkimda()
	{
		$this->load->model('vt');
		$sonuc=$this->vt->hakkindabilgi();
		
		$data=new stdclass;
		$data->bilgi=$sonuc;

		$this->load->view('/hakkimda',$data);		
	}
	public function iletisim()
	{
		$this->load->view('/iletisim');
	}
}