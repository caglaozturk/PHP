<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {

	public function __construct(){
			parent::__construct();//artık burada tanımlamaları çağırabiliyorum
			//Your own constructor code
			$this->load->helper('url');//bu helper kütüphanesini çağırdığımı gösterir
			
			if(!$this->session->userdata("admin_session"))//Login olup olmadığı kontrolü
				redirect(base_url().'admin/Login'); 
			
	}
	public function index()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$query=$this->db->query("Select * FROM uyeler ORDER BY adsoy");
		$data["veriler"]=$query->result();
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/uyeler_liste',$data);
		$this->load->view('admin/_footer');
	}
	public function ekle()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/uyeler_ekle');
		$this->load->view('admin/_footer');
	}
	public function ekle_kaydet()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'email'=>$this->input->post('email'),
		'sifre'=>$this->input->post('sifre'),
		'yetki'=>$this->input->post('yetki'),
		'durum'=>$this->input->post('durum'),
		'tarih'=>$this->input->post('tarih'),
		'sehir'=>$this->input->post('sehir'),
		'adres'=>$this->input->post('adres'),
		'tel'=>$this->input->post('tel')
		);
		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj_ekle","Üye Kaydı Gerçekleştirildi");
		redirect(base_url().'admin/uyeler');
	}
	public function duzenle($id){
		$query=$this->db->query("Select * FROM uyeler WHERE Id=$id");
		$data["veri"]=$query->result();
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/uyeler_duzenle_formu',$data);
		$this->load->view('admin/_footer');
	}
	public function guncelle($id)//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'email'=>$this->input->post('email'),
		'sifre'=>$this->input->post('sifre'),
		'yetki'=>$this->input->post('yetki'),
		'durum'=>$this->input->post('durum'),
		'tarih'=>$this->input->post('tarih'),
		'sehir'=>$this->input->post('sehir'),
		'adres'=>$this->input->post('adres'),
		'tel'=>$this->input->post('tel')
		);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("uyeler",$data,$id);
		$this->session->set_flashdata("mesaj_guncelle","Üye Güncellemesi Gerçekleştirildi");
		redirect(base_url().'admin/uyeler');
	}
	
	public function sil($id){
		$query=$this->db->query("Delete FROM uyeler WHERE Id=$id");
		redirect(base_url().'admin/uyeler');
	}
}
