<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	public function index()
	{
		$this->load->view("anasayfa");
		//Git view de adresi verilen sayfayı görüntüle
		/*Burası view yüklemek için kullanılan bölümdür.*/
		/*Burada çağıracağımız sayfa ilk olarak başlatılan sayfa olacaktır.[views içerindeki dosyayının yolunu veriyoruz.]*/
	}
	public function hakkimda()
	{
		$this->load->view('/hakkimda');		
	}
	public function iletisim()
	{
		$this->load->view('/iletisim');
	}
}