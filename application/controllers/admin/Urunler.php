<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {

	public function __construct(){
			parent::__construct();//artık burada tanımlamaları çağırabiliyorum
			//Your own constructor code
			$this->load->model('Database_Model');
			$this->load->helper('url');//bu helper kütüphanesini çağırdığımı gösterir
			
			if(!$this->session->userdata("admin_session"))//Login olup olmadığı kontrolü
				redirect(base_url().'admin/Login'); 
			
	}
	public function index()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		//$query=$this->db->query("Select * FROM urunler ORDER BY adi");
		//$data["veriler"]=$query->result();
		$data["veriler"]=$this->Database_Model->get_urunler();
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/urunler_liste',$data);
		$this->load->view('admin/_footer');
	}
	public function ekle()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/urunler_ekle');
		$this->load->view('admin/_footer');
	}
	public function ekle_kaydet()//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$data=array(
		'adi'=>$this->input->post('adsoy'),
		'kodu'=>$this->input->post('kod'),
		'turu'=>$this->input->post('tur'),
		'kategori'=>$this->input->post('kat'),
		'afiyat'=>$this->input->post('afiyat'),
		'sfiyat'=>$this->input->post('sfiyat'),
		'stok'=>$this->input->post('stok'),
		'description'=>$this->input->post('description'),
		'keywords'=>$this->input->post('keywords'),
		'aciklama'=>$this->input->post('aciklama'),
		'durum'=>$this->input->post('durum'),
		'grubu'=>$this->input->post('grubu'),
		'tarih'=>$this->input->post('tarih'),
		'resim'=>$this->input->post('resim')
		);
		$this->db->insert("urunler",$data);
		$this->session->set_flashdata("mesaj_ekle","Ürün Kaydı Gerçekleştirildi");
		redirect(base_url().'admin/urunler');
	}
	public function duzenle($id){
		$query=$this->db->query("Select * FROM kategoriler");
		$data["veriler"]=$query->result();
		
		$data["veri"]=$this->Database_Model->get_urun($id);
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/urunler_duzenle_formu',$data);
		$this->load->view('admin/_footer');
	}
	public function guncelle($id)//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$data=array(
		'adi'=>$this->input->post('adi'),
		'aciklama'=>$this->input->post('aciklama'),
		'kodu'=>$this->input->post('kodu'),
		'turu'=>$this->input->post('turu'),
		'afiyat'=>$this->input->post('afiyat'),
		'sfiyat'=>$this->input->post('sfiyat'),
		'stok'=>$this->input->post('stok'),
		'tarih'=>$this->input->post('tarih'),
		'kategori'=>$this->input->post('kategori'),
		'durum'=>$this->input->post('durum')
		);

		$this->Database_Model->update_data("urunler",$data,$id);
		$this->session->set_flashdata("mesaj_guncelle","Ürün Güncellemesi Gerçekleştirildi");
		redirect(base_url().'admin/urunler');
	}
	
	public function sil($id){
		$query=$this->db->query("Delete FROM urunler WHERE Id=$id");
		redirect(base_url().'admin/urunler');
	}
	public function resim_yukle($id)//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$query=$this->db->query("Select * FROM urunler WHERE Id=$id");
		$data["veri"]=$query->result();
		$data["id"]=$id;
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/urunler_resim_yukle',$data);
		$this->load->view('admin/_footer');
	}
	public function resim_kaydet($id)//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$data["id"]=$id;
		//upload  edilecek ayarlar ve limitler
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 4096;
        $config['max_height']           = 4096;
		//ayarlar ile kütüphaneyi çağır
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('resim'))//yükle eğer hata varsa
        {
            $error = $this->upload->display_errors();
			$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
            $this->load->view('admin/_header');
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/urunler_resim_yukle',$data);
			$this->load->view('admin/_footer');
        }
        else//hata yoksa
        {
            $upload_data = $this->upload->data();
			$data=array(
				'resim'=>$upload_data["file_name"]
			);

			$this->Database_Model->update_data("urunler",$data,$id);
			redirect(base_url().'admin/urunler');
        }
	}
	public function galeri_yukle($id)//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$query=$this->db->query("Select * FROM urunler_resim WHERE urun_id=$id");
		$data["veriler"]=$query->result();
		
		$data["id"]=$id;
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/urunler_galeri_yukle',$data);
		$this->load->view('admin/_footer');
	}
	public function galeri_kaydet($id)//Bu index fonksiyonu otomatik olarak çağırılır .bunun dışındaki fonksiyonlar /dan sonra denilmesi gerekir
	{
		$data["id"]=$id;
		//upload  edilecek ayarlar ve limitler
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 4096;
        $config['max_height']           = 4096;
		//ayarlar ile kütüphaneyi çağır
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('resim'))//yükle eğer hata varsa
        {
            $error = $this->upload->display_errors();
			$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
			redirect(base_url().'admin/urunler/galeri_yukle/'.$id);
            /*$this->load->view('admin/_header');
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/urunler_resim_yukle',$data);
			$this->load->view('admin/_footer');*/
        }
        else//hata yoksa
        {
			//<<<<<Veritabanına kayıt>>>>>>>
            $upload_data = $this->upload->data();
			$data=array(
				'urun_id'=>$id,
				'resim'=>$upload_data["file_name"]
			);
			$this->db->insert("urunler_resim",$data);
			//<<<<<Veritabanına kayıt bitti>>>>>>>
			$this->session->set_flashdata("mesaj","Resim Galeriye Yüklendi");
			redirect(base_url().'admin/urunler/galeri_yukle/'.$id);
        }
	}
	public function galeri_sil($urunid,$resimid){
		$this->db->query("Delete FROM urunler_resim WHERE Id=$resimid");
		$this->session->set_flashdata("mesaj","Resim Galeriden Silindi");
		redirect(base_url().'admin/urunler/galeri_yukle/'.$urunid);
	}
}
