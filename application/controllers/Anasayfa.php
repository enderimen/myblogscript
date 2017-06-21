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
	//Paylaşımı detaylı olarak görüntülüyoruz. 
	public function paylasimlar($link)
	{
		$this->load->model('vt');//Model e bağlandık
		$sonuc=$this->vt->paylasim($link);//Model in içerisindeki payalsim fonk. gelen paylaşım başlığını gönderdik. 

		$this->session->set_userdata('title',$sonuc->paylasim_baslik);//session başlattık sekme başlığı için
		$data['bilgi']=$sonuc;//Gelen bilgileri diziye atadık.
		$this->load->view('paylasim-detay',$data);//diziyi de ilgili sayfaya yolladık.
	}
}