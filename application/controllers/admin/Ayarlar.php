<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayarlar extends CI_Controller {

	public function __construct(){
			parent::__construct();//artık burada tanımlamaları çağırabiliyorum
			//Your own constructor code
			$this->load->helper('url');//bu helper kütüphanesini çağırdığımı gösterir
			$this->load->model('Database_Model');
			if(!$this->session->userdata("admin_session"))//Login olup olmadığı kontrolü
				redirect(base_url().'admin/Login'); 
			
	}
	public function index()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();	
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_ayarlar',$data);
		$this->load->view('admin/_footer');
	}
	public function ayarlar()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_ayarlar');
		$this->load->view('admin/_footer');
	}
	public function ayarlar_guncelle($id)//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$data=array(
			'adi'=>$this->input->post('adi'),
			'smtpserver'=>$this->input->post('smtpserver'),
			'smtpemail'=>$this->input->post('smtpemail'),
			'smtpport'=>$this->input->post('smtpport'),
			'description'=>$this->input->post('description'),
			'keywords'=>$this->input->post('keywords'),
			'adres'=>$this->input->post('adres'),
			'tel'=>$this->input->post('tel'),
			'sehir'=>$this->input->post('sehir'),
			'password'=>$this->input->post('password'),
			'facebook'=>$this->input->post('facebook'),
			'instegram'=>$this->input->post('instegram'),
			'twitter'=>$this->input->post('twitter'),
			'pinterest'=>$this->input->post('pinterest'),
			'hakkimizda'=>$this->input->post('hakkimizda'),
			'iletisim'=>$this->input->post('iletisim')
		);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("ayarlar",$data,$id);
		$this->session->set_flashdata("mesaj_guncelle","Ayarlar Güncellemesi Gerçekleştirildi");
		redirect(base_url().'admin/ayarlar');
	}
}
