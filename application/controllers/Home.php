<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('Database_Model');
			$this->load->helper('url');
	}
	public function index()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
		
		$query=$this->db->query("Select * from kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query("Select * from urunler where grubu='kampanya'");
		$data["kampanya"]=$query->result();
		
		$query=$this->db->query("Select * from urunler");
		$data["getir"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler ORDER BY Id DESC LIMIT 4");
		$data["yeni"]=$query->result(); 
		
		$query=$this->db->query("Select * from urunler ORDER BY RAND() LIMIT 4");
		$data["random"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();	
		
		$data["sayfa"]="";			
		$data["menu"]="anasayfa";			
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_content',$data);
		$this->load->view('_footer',$data);
	}
	public function hakkimizda()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();	
		$data["sayfa"]="Hakkımızda |";	
		$data["menu"]="hakkimizda";	
		$this->load->view('_header',$data);
		$this->load->view('hakkimizda',$data);
		$this->load->view('_footer');
	}
	public function iletisim()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();	
		$data["sayfa"]="İletişim |";	
		$data["menu"]="iletisim";	
		$this->load->view('_header',$data);
		$this->load->view('iletisim',$data);
		$this->load->view('_footer');
	}
	public function Bize_Yazin()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();	
		$data["sayfa"]="Bize Yazın |";	
		$data["menu"]="Bize_Yazin";	
		$this->load->view('_header',$data);
		$this->load->view('Bize_Yazin',$data);
		$this->load->view('_footer');
	}
	public function Kampanyalar()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query('Select urunler.adi as katadi from urunler INNER JOIN kategoriler ON urunler.kategori=kategoriler.Id WHERE urunler.Id=kategoriler.parent_id');
		$data["urunler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();	
		$data["sayfa"]="Kategoriler |";			
		$data["menu"]="kategoriler";			
		$this->load->view('_header',$data);
		$this->load->view('kategoriler');
		$this->load->view('_footer',$data);
	}
	public function Kategoriler()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query('Select urunler.adi as katadi from urunler INNER JOIN kategoriler ON urunler.kategori=kategoriler.Id WHERE urunler.Id=kategoriler.parent_id');
		$data["urunler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();	
		$data["sayfa"]="Kategoriler |";			
		$data["menu"]="kategoriler";			
		$this->load->view('_header',$data);
		$this->load->view('kategoriler');
		$this->load->view('_footer',$data);
	}
	public function mesaj_kaydet()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'email'=>$this->input->post('email'),
		'konu'=>$this->input->post('konu'),
		'mesaj'=>$this->input->post('mesaj'),
		'ip'=>$_SERVER['REMOTE_ADDR']
		);
		$this->db->insert("mesajlar",$data);
		$this->session->set_flashdata("mesaj","Mesaj Gönderildi En Kısa Sürede Geri Dönüş Yapılacaktır<br/>");
		redirect(base_url().'home/Bize_Yazin');
	}
	public function login_ol(){
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Uye Login ||";
		$data["menu"]="uye";
		
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_content');
		$this->load->view('_footer',$data);
	}
	public function login(){
		$email=$this->input->post("eposta");
		$sifre=$this->input->post("sifre");
		
		echo $email=$this->security->xss_clean($email);
		echo $sifre=$this->security->xss_clean($sifre);
		//exit();
		
		$this->load->model('Database_Model');
		$result=$this->Database_Model->login('uyeler',$email,$sifre);
		
		if($result){
			$sess_array=array(
			'id'=>$result[0]->Id,
			'yetki'=>$result[0]->yetki,
			'email'=>$result[0]->email,
			'adsoy'=>$result[0]->adsoy,
			'resim'=>$result[0]->resim
			);
			//print_r($sess_array);
			//echo "Login oldu";
			//exit();
			$this->session->set_userdata("uye_session",$sess_array);
			redirect(base_url());
		}
		else{
			$this->session->set_flashdata("Hatalı kullanıcı adı yada şifre");
			redirect(base_url()."home/login_ol");
		}
	}
	public function urundetay($id){
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		$data["veri"]=$this->Database_Model->get_urun($id);
		$data["sayfa"]=null;
		$data["menu"]="urun";
		
		$query=$this->db->query("select * from urunler_resim where urun_id=$id");
		$data["resimler"]=$query->result();
		$this->load->view('_header',$data);
		$this->load->view('urun_detay',$data);
		$this->load->view('_footer',$data);
	}
	public function siparislerim(){
		if ($this->session->userdata("uye_session"))
		{	$benim_id=$this->session->uye_session["id"];
			$query=$this->db->query('Select COUNT(Id) as say from sepet WHERE sepet.musteri_id='.$benim_id);
			$data["sepet"]=$query->result();
		}
			$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Siparişlerim";
		$data["menu"]="urun";
		
		$this->load->view('_header',$data);
		$this->load->view('siparislerim',$data);
		$this->load->view('_footer',$data);
	}
}
