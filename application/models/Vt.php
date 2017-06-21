<?php 
/**
* 
*/
	class Vt extends CI_Model
	{
		##Sisteme login olurken session kontrolü yapıyoruz.##

		function loginkontrol($kadi,$sifre)
		{
			$result=$this->db->select('*')
			->FROM('admin')
			->WHERE('admin_adi_soyadi',$kadi)
			->WHERE('admin_sifre',$sifre)
			->get()
			->row();//İstenen satırı çekmek için

			if (count($result)!=1) {
				return false;
			}else{
				return $result;
			}
		}
		##Paylaşım ekleme kodu##

		public function paylasimekle($data=array())//$parametreyi dizi olarak tanımladık
		{
			$result=$this->db->insert('paylasimlar',$data);//Paylaşımlar tablosunu seçtik ve $data parametresini(eklenecek bilgileri) gönderdik
			return $result;
		}	
		
		##Paylaşım bilgilerini çekiyoruz##
		public function paylasimcek()
		{
			$result=$this->db->select('*')
			->from('paylasimlar')
			->order_by('paylasimID','DESC')
			->get()
			->result();//Tüm tabloyu çekmek için
			
			return $result;
		}

		public function paylasimbilgi($kadi)
		{
			$result=$this->db->select('*')
			->FROM('paylasimlar')
			->WHERE('paylasimID',$kadi)
			->get()
			->row();//İstenen satırı çekmek için

			if (count($result)!=1) {
				return false;
			}else{
				return $result;
			}
		}

		##Paylaşım Sil##
		public function paylasimsil($id)
		{
			$result=$this->db->delete('paylasimlar',array('paylasimID'=>$id));// paylasimlar tablosundan id si $id olan paylaşımı siliyoruz
			return $result;
		}

		public function paylasimguncelle($data,$id)
		{
			$result=$this->db->update('paylasimlar',$data,array('paylasimID'=>$id));//Data dizisi güncellenece kiçeriği paylasimID ise pyalaşımın ID sini belirtiyor.
			return $result;
		}

		public function hakkindabilgi()
		{
			$result=$this->db->select('*')
			->FROM('hakkinda')
			->get()
			->row();//İstenen satırı çekmek için

			if (count($result)!=1) {
				return false;
			}else{
				return $result;
			}
		}

		public function footerbilgi()
		{
			$result=$this->db->select('*')
			->FROM('footer')
			->get()
			->row();//İstenen satırı çekmek için

			if (count($result)!=1) {
				return false;
			}else{
				return $result;
			}
		}

		public function hakkindaguncelle($data)
		{
			$result=$this->db->update('hakkinda',$data,array('hakkindaID'=>1));//Data dizisi güncellenece kiçeriği hakkindaID ise hakkında ID sini belirtiyor.
			return $result;
		}

		//Paylaşımın devamını oku 
		public function paylasim($gelen_link)
		{
			$result=$this->db->select('*')
			->FROM('paylasimlar')
			->WHERE('paylasim_link',$gelen_link)
			->get()
			->row();//İstenen satırı çekmek için

			if (count($result)!=1) {
				return false;
				redirect('anasayfa/yonetimpaneli');
			}else{
				return $result;
			}
		}


		public function paylasimsayisi()
		{
			$result=$this->db->select('paylasimID')
			->from('paylasimlar')
			->count_all_results();

			return $result;
		}
		
	}