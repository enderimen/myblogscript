<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	public function index()
	{
		$this->load->model('vt');
		$sonuc=$this->vt->paylasimcek();
		
		$sayi=$this->vt->paylasimsayisi();

		$data=new stdclass;
		$data->bilgi=$sonuc;

		$this->session->set_userdata('title','Blog | Ender İMEN');//session başlattık sekme başlığı için
		$this->load->view("anasayfa",$data);
		//Git view de adresi verilen sayfayı görüntüle
		/*Burası view yüklemek için kullanılan bölümdür.*/
		/*Burada çağıracağımız sayfa ilk olarak başlatılan sayfa olacaktır.[views içerindeki dosyayının yolunu veriyoruz.]*/
	}

	//Sayfa içi yönlendirme[Hakkımda sayfası]

	public function hakkimda()
	{
		//Database den veirtabanına bilgileri gönderiyoruz.
		$this->load->model('vt');
		$sonuc=$this->vt->hakkindabilgi();
		
		$data=new stdclass;
		$data->bilgi=$sonuc;

		$this->load->view('/hakkimda',$data);		
	}

	//Sayfa içi yönlendirme[İletişim sayfası]
	public function iletisim()
	{
		$this->load->view('/iletisim');
	}
}