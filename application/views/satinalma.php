</div>
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>S<span>ATIN ALMA </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="<?=base_url()?>">Anasayfa</a><i>|</i></li>
								<li>SATIN ALMA</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container" style=" background:#33CC33; border:1px solid black;">
		<div class="well well-small" style=" background:#CCFFCC; border:1px solid black; margin: auto;">
		<form class="form-horizontal" method="post" action="<?=base_url()?>uye/siparis_tamamla">
		<?php if($this->session->flashdata("mesaj")){?>
		<div class="callout callout-info">
			<p><?=$this->session->flashdata("mesaj")?></p>
		</div>
		<?php }?>
		<div class="control-group">Teslimat Bilgileri<br/>
			<label class="control-label" for="inputFname">Adınız Soyadınız<sup>*</sup></label>
			<div class="controls">
				<input type="text" name="adsoy" value="<?=$uye[0]->adsoy?>" placeholder="Adınız Soyadınız">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputLname">Telefon Numarası<sup>*</sup></label>
			<div class="controls">
				<input type="text" name="tel" value="<?=$uye[0]->tel?>" placeholder="Telefon Numarası">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Adres<sup>*</sup></label>
			<div class="controls">
				<input type="text" name="adres" value="<?=$uye[0]->adres?>" placeholder="Adres">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Şehir<sup>*</sup></label>
			<div class="controls">
				<input type="text" name="sehir" value="<?=$uye[0]->sehir?>" placeholder="Şehir">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Toplam Tutar<sup>*</sup></label>
			<div class="controls">
				<input type="text" name="toplam" readonly value="<?=$toplam?>">
			</div>
		</div>
		***********************************
		KREDİ KARTI BİLGİLERİ
		***********************************
		<div class="control-group">
			<div class="controls">
				<input type="submit" name="submitAccount" value="SİPARİŞİ TAMAMLA" class="exclusive shopBtn">
			</div>
		</div>
		
		</form>
		</div>
	</div>
 </div>
<!--//single_page-->