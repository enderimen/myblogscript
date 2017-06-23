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

	/*public function panel()
	{
		$this->load->view("yonetim/anasayfa");
	}*/
	public function paylasim()
	{
		$this->load->view("yonetim/paylasim-yap");
	}
	public function mesajlar()
	{
		$this->load->model('vt');
		$cekilen=$this->vt->mesajcek(); //Model'den gelen sonucu içeriyor.

		$data=new stdclass;
		$data->bilgi=$cekilen;

		$this->load->view("yonetim/mesajlar",$data);
	}
	public function footer()
	{
		$this->load->model('vt');
		$footercek=$this->vt->footerbilgi();
		$data['footercek']=$footercek;

		$this->load->view("yonetim/footer-duzenle",$data);
	}
	
	public function slider()
	{
		$this->load->view("yonetim/slider-duzenle");
	}
	
	public function profilim()
	{
		$this->load->view("yonetim/profilim");
	}

	public function hakkinda()
	{
		$this->load->model('vt');
		$hakkindacek=$this->vt->hakkindabilgi();
		$data['hakkindacek']=$hakkindacek;

		$this->load->view("yonetim/hakkinda-duzenle",$data);
	}

	//Paylaşım Eklemek için 
	public function paylasimekle()
	{
		$paylasim_baslik = $this->input->post('paylasim_baslik');
		$paylasim_gunu = $this->input->post('paylasim_gunu');
		$paylasim_yazisi = $this->input->post('paylasim_yazisi');
		$paylasim_tarihi=date('Y-m-d');

		##Form dan gelen veirleri diziye aktarıyoruz.##

		$data=array('paylasim_baslik'=>$paylasim_baslik,
					'paylasim_yazisi'=>$paylasim_yazisi,
					'staj_gunu'=>$paylasim_gunu,
					'paylasim_tarih'=>$paylasim_tarihi,
					'paylasim_link'=>sef($paylasim_baslik),
					'tik_sayisi'=>0);

		$this->load->model('vt');//model dosyasını yükledik.
		$ekle=$this->vt->paylasimekle($data);//Model dosyasında tanımladığımız ekleme fonk. ekleme paratmetresini gönderdik.
		
		if ($ekle) {
			
			$this->session->set_flashdata('bilgi','<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
										<i class="fa fa-info-circle"></i>Paylaşım Başarıyla Eklendi. 
									</div>');

			redirect('yonetimpaneli');
		}
	}

	//Yapmış olduğumuz paylaşımı silmek için
	public function paylasimsil($id)
	{
		$this->load->model('vt');
		$sil=$this->vt->paylasimsil($id);

		if ($sil) {

			$this->session->set_flashdata('bilgi','<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
										<i class="fa fa-info-circle"></i>Paylaşım Başarıyla Silindi. 
									</div>');

			redirect('yonetimpaneli');
		}
	}

	//Paylaşımları güncelle
	public function paylasimguncelle($id)
	{
		$this->load->model('vt');
		$inf=$this->vt->paylasimbilgi($id);
		$data['inf']=$inf;

		$this->load->view('yonetim/paylasimguncelle',$data);
	}

	//Paylaşım Güncelleme 
	public function paylasimduzenle($id)
	{
		$paylasim_baslik = $this->input->post('paylasim_baslik');
		$paylasim_gunu = $this->input->post('paylasim_gunu');
		$paylasim_yazisi = $this->input->post('paylasim_yazisi');

		##Form dan gelen veirleri diziye aktarıyoruz.##

		$data=array('paylasim_baslik'=>$paylasim_baslik,
					'paylasim_yazisi'=>$paylasim_yazisi,
					'staj_gunu'=>$paylasim_gunu,
					'paylasim_link'=>sef($paylasim_baslik)
					);

		$this->load->model('vt');
		$sonuc=$this->vt->paylasimguncelle($data,$id);

		if ($sonuc) {
		
			$this->session->set_flashdata('bilgi','<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
										<i class="fa fa-info-circle"></i>Paylaşım Başarıyla Güncellendi. 
									</div>');

			redirect('yonetimpaneli');
		}
	}

	//Biyografi bilgilerini güncelleme
	public function hakkindaduzenle()
	{
		$hakkinda = $this->input->post('hakkinda');

		##Form dan gelen veirleri diziye aktarıyoruz.##

		$data=array('hakkinda'=>$hakkinda);

		$this->load->model('vt');
		$sonuc=$this->vt->hakkindaguncelle($data);

		if ($sonuc) {
		
			$this->session->set_flashdata('bilgi','<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
										<i class="fa fa-info-circle"></i>Biyografin Güncellendi. 
									</div>');

			redirect('yonetimpaneli');
		}
	}
}