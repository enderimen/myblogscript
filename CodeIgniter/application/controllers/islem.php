<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Islem extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');

		//Git view de adresi verilen sayfayı görüntüle
		/*Burası view yüklemek için kullanılan bölümdür.*/
		/*Burada çağıracağımız sayfa ilk olarak başlatılan sayfa olacaktır.[views içerindeki dosyayının yolunu veriyoruz.]*/
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */