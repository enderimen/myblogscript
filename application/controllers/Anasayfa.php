<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	public function index()
	{
		$this->load->view('/include/header'); 
		$this->load->view('/include/slider');
		$this->load->view("anasayfa");
		$this->load->view('/include/footer');
		//Git view de adresi verilen sayfayı görüntüle
		/*Burası view yüklemek için kullanılan bölümdür.*/
		/*Burada çağıracağımız sayfa ilk olarak başlatılan sayfa olacaktır.[views içerindeki dosyayının yolunu veriyoruz.]*/
	}
}