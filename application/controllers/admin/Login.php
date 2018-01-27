<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
			parent::__construct();//artık burada tanımlamaları çağırabiliyorum
			//Your own constructor code
			$this->load->helper('url');//bu helper kütüphanesini çağırdığımı gösterir
			$this->load->database();
			//$this->load->library('session');
	}
	public function index()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$this->load->view('admin/login_form');
		
	}
	public function login_ol()
	{
		$email=$this->input->post("email");
		$sifre=$this->input->post("sifre");
		//zararlı kodlardan temizleme
		//echo "<br>";
		$email=$this->security->xss_clean($email);
		$sifre=$this->security->xss_clean($sifre);
		
		$this->load->model('Database_Model');
		$result = $this->Database_Model->login("admin",$email,$sifre);
		
		if($result){
			//Kullanıcı var ise bilgileri diziye aktarılıyor
			$sess_array=array(
			'id'=>$result[0]->Id,
			'yetki'=>$result[0]->yetki,
			'email'=>$result[0]->email,
			'adsoy'=>$result[0]->adsoy,
			'resim'=>$result[0]->resim
			);
			//Session değişkenine atama
			$this->session->set_userdata("admin_session",$sess_array);
			redirect(base_url().'admin'); 
		}
		else{
			$this->session->set_flashdata("mesaj","Hatalı kullanıcı adı yada şifre hatalı !");
			redirect(base_url().'admin/Login'); 
		}
	}
	
	public function login_cik()
	{
		$this->session->unset_userdata("admin_session",$sess_array);
		redirect(base_url().'admin/Login');
	}
}