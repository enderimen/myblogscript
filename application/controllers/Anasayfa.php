<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	public function index()
	{
		$this->session->set_userdata('title','Blog | Ender İMEN');//session başlattık sekme başlığı için
		$this->load->model('vt');
		$sonuc=$this->vt->paylasimsayisi();		

		$this->load->library('pagination');//pagination kütüphanesini dahil ediyoruz.
		
		$config=array(	//Özel ayar oluşturuyoruz.
						"base_url"=>base_url()."/anasayfa",//Nerede çalışacak
						"per_page"=>3,	//Her sayfada en fazla kaç tane yazı gösterilecek
						"total_rows"=>$sonuc, //Toplamda kaç tane yazı var.
						'full_tag_open' =>'<div class="pagination"><ul>',
				        'full_tag_close' => '</ul></div>',
				        'cur_tag_open' => '<li><a href="'.base_url("anasayfa/").'" style="color:#ffffff; background-color:#333333;">',
				        'cur_tag_close' => '</a></li>',
				        'num_tag_open' => '<li>',  'num_tag_close' => '</li>',
				        'prev_tag_open'=> '<li>', 'prev_tag_close'=> '<li>',
				        'next_tag_open'=> ' <li>',  'next_tag_close'=> '<li>',  
				        'first_tag_open'=> ' <li>', 'first_tag_close'=> '<li>',
				        'last_tag_open'=> ' <li>', 'last_tag_close'=> '<li>'
       				 );

		$this->pagination->initialize($config);//Ayarları başlattık.

		$dataset['linkler']=$this->pagination->create_links();//Sayfa numaralarına link ekledik.
		$dataset['bilgi']=$this->vt->sayfalama($config['per_page'],$this->uri->segment(2));//2.parametreyi alacak ve ona göre limit uygulayacağız.
		$dataset['staj_gunleri']=$this->vt->paylasimcek();
		$this->load->view("anasayfa",$dataset);


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

	//İletişim için mesaj gönder
	public function mesaj()
	{
		//Form verilerini çekiyoruz.
		$gonderen_ad=$this->input->post('ad');
		$mail=$this->input->post('mail');
		$konu=$this->input->post('konu');
		$mesaj=$this->input->post('mesaj');
		$mesaj_tarih=date('Y-m-d');
		//Formdan verileri alıyoruz.
		$data=array('gonderen_ad'=>$gonderen_ad,
					'mail'=>$mail,
					'konu'=>$konu,
					'mesaj'=>$mesaj,
					'mesaj_tarih'=>$mesaj_tarih);
		
		//Model dosyasını yüklüyoruz.
		$this->load->model('vt');

		//Verileri model deki mesaj ekleme fon. gönderiyoruz.
		$sonuc=$this->vt->mesajkaydet($data);
		
		//Gelen sonucu kontrol ediyoruz.
		if ($sonuc) { 	
			//İletim mesajı gösteriyoruz.
			$this->session->set_flashdata('bilgi','<div class="alert alert-info alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
										<i class="fa fa-info-circle"></i>Mesajınız İletildi.</div>');
			redirect('anasayfa/iletisim');
		}
	}
}