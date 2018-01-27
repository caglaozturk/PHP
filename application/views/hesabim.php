<?php
	$this->load->view('_header');
?>
</div>
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>H<span>ESABIM </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">ANASAYFA</a><i>|</i></li>
								<li>HESABIM</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
   <!--/contact-->
   <div class="banner_bottom_agile_info">
	<div class="container">
	   <div class="agile-contact-grids">
				<div class="agile-contact-left">
					<?php
						$this->load->view('_uyesidebar');
					?>
					<div class="col-md-8 products-right">
					<div class="col-md-12 contact-form">
						<h4 class="white-w3ls">ÜYE <span>HESAP BİLGİLERİ</span></h4>
						<form action="<?=base_url()?>uye/uye_guncelle" method="post">
							<?php if($this->session->flashdata("mesaj")){?>
							<div class="callout callout-info">
								<p><span style="color:#8B008B" face="Verdana"><i><?=$this->session->flashdata("mesaj")?></i></span></p><br/>
							</div>
							<?php }?>
							<div class="styled-input agile-styled-input-top">
								<input type="text" value="<?=$uye[0]->adsoy?>" name="adsoy" required="">
								<label>Ad Soyad</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" value="<?=$uye[0]->tel?>" name="tel" required="">
								<label>Telefon</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" value="<?=$uye[0]->email?>" name="eposta" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" value="<?=$uye[0]->sifre?>" name="sifre" required="">
								<label>Şifre</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" value="<?=$uye[0]->adres?>" name="adres" required="">
								<label>Adres</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" value="<?=$uye[0]->sehir?>" name="sehir" required="">
								<label>Şehir</label>
								<span></span>
							</div>
							<input type="submit" value="Bilgileri Güncelle">
						</form>
					</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>
 <!--//contact-->
 <?php
	$this->load->view('_footer');
?>