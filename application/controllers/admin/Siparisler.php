<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siparisler extends CI_Controller {

	public function __construct(){
			parent::__construct();//artık burada tanımlamaları çağırabiliyorum
			//Your own constructor code
			$this->load->helper('url');//bu helper kütüphanesini çağırdığımı gösterir
			
			if(!$this->session->userdata("admin_session"))//Login olup olmadığı kontrolü
				redirect(base_url().'admin/Login'); 
			
	}
	public function index()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$query=$this->db->query("select * from siparis where siparisdurumu='yeni'");
		$data["veriler"]=$query->result();
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/siparisler_listesi',$data);
		$this->load->view('admin/_footer',$data);
	}
	public function liste($durum)//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$query=$this->db->query("select * from siparis where siparisdurumu='$durum'");
		$data["veriler"]=$query->result();
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/siparisler_listesi',$data);
		$this->load->view('admin/_footer',$data);
	}
	public function guncelle($id)//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$data=array(
		'kargo'=>$this->input->post('kargo'),
		'siparisdurumu'=>$this->input->post('siparisdurumu'),
		'aciklama'=>$this->input->post('aciklama')
		);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("siparis",$data,$id);
		redirect(base_url().'admin/siparisler');
	}
	public function siparis_iptal($siparis_id){
		$this->db->query("Delete from siparis_urunler where Id=$siparis_id");
		$this->session->set_flashdata("mesaj","<p align='center'>Sipariş İptal Edildi</p>");
		redirect(base_url().'admin/Siparisler/siparisdetay/'.$siparis_id);
	}
	public function siparisdetay($siparis_id){
		
		$query=$this->db->query("select * from siparis_urunler where siparis_id=$siparis_id");
		$data["veriler"]=$query->result();
		$query=$this->db->query("select * from siparis where Id=$siparis_id");
		$data["veri"]=$query->result();
		$data["siparisid"]=$siparis_id;
		//print_r($data);
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/siparisler_detay',$data);
		$this->load->view('admin/_footer',$data);
	}
}
