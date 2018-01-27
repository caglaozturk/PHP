</div>
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>B<span>İZE YAZIN </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">ANASAYFA</a><i>|</i></li>
								<li>BİZE YAZIN</li>
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
					<div class="col-md-6 address-grid">
						<h4>DAHA FAZLA <span>BİLGİ İÇİN</span></h4>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Telefon </p><span><?=$veri[0]->tel?></span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Mail Adresi</p><a href="mailto:<?=$veri[0]->email?>"><?=$veri[0]->email?></a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Konum</p><span><?=$veri[0]->iletisim?></span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<ul class="social-nav model-3d-0 footer-social w3_agile_social two contact">
							                              <li class="share">SHARE ON : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
					</div>
					<div class="col-md-6 contact-form">
						<h4 class="white-w3ls">İLETİŞİM <span>FORMU</span></h4>
						<form action="<?=base_url()?>home/mesaj_kaydet" method="post">
							<?php if ($this->session->flashdata("mesaj")) {?>
							<div class="text-info">
								<p><?=$this->session->flashdata("mesaj")?></p>
							</div>
							<?php }?>
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="adsoy" required="">
								<label>Adınız Soyadınız*</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email*</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="konu" required="">
								<label>Konu*</label>
								<span></span>
							</div>
							<div class="styled-input">
								<textarea name="mesaj" required=""></textarea>
								<label>Mesajınız*</label>
								<span></span>
							</div>	 
							<input type="submit" value="SEND">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>
 <!--//contact-->