<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
			parent::__construct();//artık burada tanımlamaları çağırabiliyorum
			//Your own constructor code
			$this->load->helper('url');//bu helper kütüphanesini çağırdığımı gösterir
			
			if(!$this->session->userdata("admin_session"))//Login olup olmadığı kontrolü
				redirect(base_url().'admin/Login'); 
			
	}
	public function index()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_content');
		$this->load->view('admin/_footer');
	}
	public function ayarlar()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/ayarlar');
		$this->load->view('admin/_footer');
	}
	
}
