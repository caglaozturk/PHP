<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('Database_Model');
			$this->load->helper('url');
			//*******login olma kontrolü
			if(!$this->session->userdata("uye_session"))
				redirect(base_url().'home/login_ol');
	}
	public function index()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();	
		$query=$this->db->query("SELECT * FROM uyeler where Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();	
		$data["sayfa"]="Üye Paneli |";			
		$data["menu"]="uye";			
		$this->load->view('hesabim',$data);
	}
	public function cikis()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$this->session->unset_userdata("uye_session");
		redirect(base_url());
	}
	public function hesabim()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();	
		$data["sayfa"]="Üye Hesabı |";	
		$data["menu"]="uye";	
		$query=$this->db->query("SELECT * FROM uyeler where Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();	
		$this->load->view('hesabim',$data);
	}
	public function sepete_ekle(){
		//Form verilerini alacaz
		$data=array(
			'urun_id'=>$this->input->post('urunid'),
			'adet'=>$this->input->post('miktar'),
			'musteri_id'=>$this->session->uye_session["id"]
		);
		//print_r($data);
		//exit();
		//aynı ürün eklendi ise kontrol edilip o ürünün miktar kısmı artırılması yeterli
		$this->db->insert("sepet",$data);
		
		$this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepete Eklendi </p>");
		redirect(base_url().'home/urundetay/'.$this->input->post('urunid'));
	}
	public function sepetim(){
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
		$query=$this->db->query("select * from ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sepetim || ";
		$data["menu"]="sepetim";
		
		$id=$this->session->uye_session["id"];
		$data['veriler']=$this->Database_Model->sepet_urunler($id);
		//print_r($data);
		$this->load->view('_header',$data);
		$this->load->view('_uyesidebar');
		$this->load->view('sepet',$data);
		$this->load->view('_footer',$data);
	}
	public function sepetsil($id){
		$this->db->query("Delete from sepet where Id=$id");
		$this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepetten Silindi </p>");
		redirect(base_url().'uye/sepetim');
	}
	public function satinal(){
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
		
		$query=$this->db->query("Select * from ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Satın Alma";
		$data["menu"]="uye";
		
		$data["toplam"]=$this->input->post('toplam');
		$id=$this->session->uye_session["id"];
		
		$query=$this->db->query("Select * from uyeler where Id=$id");
		$data["uye"]=$query->result();
		
		$this->load->view('_header',$data);
		$this->load->view('_uyesidebar');
		$this->load->view('satinalma',$data);
		$this->load->view('_footer',$data);
	}
	public function siparis_tamamla(){
		//**Kredi kartı Bilgilerini al 
		//Bankaya gönder olumlu dönüş gelirse aşağıdaki işleme devam et
		//değilse kredi kartı hata sayfasına gönder
		
		//Onay geldikten sonra Form verilerini alacaz
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			'musteri_id'=>$this->session->uye_session["id"],
			'adres'=>$this->input->post('adres'),
			'sehir'=>$this->input->post('sehir'),
			'tel'=>$this->input->post('tel'),
			'tutar'=>$this->input->post('toplam'),
			'IP'=>$_SERVER['REMOTE_ADDR']
		);
		//verileri sipariş tablosuna ekle
		$this->db->insert("siparis",$data);
		$siparis_id=$this->db->insert_id();
		
		//sepetteki ürünleri sipariş ürünlerine ekle
		$id=$this->session->uye_session["id"];
		
		//sepetteki ürünleri asipariş ürünler tablosuna aktarma
		$veriler =$this->Database_Model->sepet_urunler($id);
		foreach($veriler as $rs){
			$data=array(
				'fiyat'=>$rs->satfiyat,
				'adi'=>$rs->urunadi,
				'musteri_id'=>$id,
				'urun_id'=>$rs->urun_id,
				'siparis_id'=>$siparis_id,
				'adet'=>$rs->adet,
				'tutar'=>$rs->adet*$rs->satfiyat
			);
			$this->db->insert("siparis_urunler",$data);
			//eklenen ürün adedi Urunler tablosundaki stoktan düşürülmeli
			$this->db->query('UPDATE urunler SET stok=stok'.-$rs->adet.' WHERE Id='.$rs->urun_id);
		}
		//Müşteri sepetini boşalt
		$this->db->query("delete from sepet where musteri_id=$id");
		
		//sipariş alındığına dair üye ye email bilgisi gönder
		redirect(base_url().'uye/islemson');
	}	
	public function islemson(){
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
		$query=$this->db->query("select * from ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İşlem Tamamlandı |";
		$data["menu"]="satinalma";
		//siparişinizin tamamlandığına dair email
		$this->load->view('_header',$data);
		$this->load->view('_uyesidebar');
		$this->load->view('islemson',$data);
		$this->load->view('_footer',$data);
	}
	public function siparislerim(){
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
		$query=$this->db->query("select * from ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Siparişlerim |";
		$data["menu"]="uye";
		

		$query=$this->db->query("select * from siparis where musteri_id=".$this->session->uye_session["id"]);
		$data["veriler"]=$query->result();
		$this->load->view('_header',$data);
		$this->load->view('_uyesidebar');
		$this->load->view('siparislerim',$data);
		$this->load->view('_footer',$data);
	}
	public function siparisdetay($siparis_id){
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
		$query=$this->db->query("select * from ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sipariş Detayı |";
		$data["menu"]="uye";
		
		$id=$this->session->uye_session("id");
		
		$query=$this->db->query("select * from siparis_urunler where siparis_id=$siparis_id");
		$data["veriler"]=$query->result();
		//print_r($data);
		$this->load->view('_header',$data);
		$this->load->view('_uyesidebar');
		$this->load->view('siparis_detay',$data);
		$this->load->view('_footer',$data);
	}
	public function uye_guncelle()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'email'=>$this->input->post('eposta'),
		'sehir'=>$this->input->post('sehir'),
		'tel'=>$this->input->post('tel'),
		'adres'=>$this->input->post('adres'),
		'sifre'=>$this->input->post('sifre')
		);
		$id=$this->session->uye_session["id"];
		
		$this->Database_Model->update_data("uyeler",$data,$id);
		$this->session->set_flashdata("mesaj","Üye Bilgileriniz Güncellendi");
		redirect(base_url().'uye/hesabim');
	}
}
