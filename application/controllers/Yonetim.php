<?php if ( ! defined('BASEPATH')) exit('Bu sayfaya erişiminiz engellendi.');

class Yonetim extends CI_Controller {

	public function index()
	{
		//login ekranını açıyoruz.
		$this->load->view("yonetim/login");
	}
		//Yönetim panelinden çıkış yapıyoruz.
	public function cikis()
	{
		$this->session->sess_destroy();
		redirect('yonetim');
	}
	//Yönetim paneline giriş yapıyruz.
	public function login()
	{
		$this->load->library('form_validation');// form doğrulamayı yükledik
		$this->form_validation->set_rules('kadi','Kullanıcı Adı','required|trim'); //kullanıcı adının özelliklerini belirledik
		$this->form_validation->set_rules('sifre','Kullanıcı Şifre','required|trim');//şifrenin  "         "           "
		
		$this->form_validation->set_message('required','<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                boş bırakılamaz.
                            </div>');//İstenen kurallar dahilinde girilmez ise hata mesajı gösterdik.

		if ($this->form_validation->run()) 
		{	
			$kadi=$this->input->post('kadi');//Form dan gelen kullanıcı adı bilgisini yakaladık
			$sifre=$this->input->post('sifre');//Formdan gelen kullanıcı şifresini yakaladık

			$this->load->model('vt');
			$sonuc=$this->vt->loginkontrol($kadi,md5($sifre));//Gelen post bilgilerini model vt ye gönderiyoruz.
			
			if ($sonuc) 
			{
				$this->session->set_userdata('kontrol',true);
				$this->session->set_userdata('info',$sonuc);

				redirect('yonetimpaneli');
			}
			else
			{
				//session oluşturduk eğer bilgiler yanlış ise mesaj verecek
				$this->session->set_flashdata('hata','<h5 style="color:red;"> Kullanıcı Adı veya Şifreniz Yanlış.</h5>');
				redirect('yonetimpaneli');//Güvenlik için filtreden geçirilmek üzere yonetimpaneli sayfasına yönlendiriyoruz.
			}
		}
		else{
			redirect('yonetim');
		}	
	}
}