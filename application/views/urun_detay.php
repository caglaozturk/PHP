</div>
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>ÜRÜN <span>DETAYLARI </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Anasayfa</a><i>|</i></li>
								<li>Ürün Detayları Sayfası</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<div class="clearfix"></div>
					<div class="flex-viewport" style="overflow: hidden; position: relative;">
					<ul class="slides" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-819px, 0px, 0px);">
						<li data-thumb="<?=base_url()?>uploads/<?=$veri[0]->resim?>" class="" style="width: 273px; float: left; display: block;">
							<div class="thumb-image"> <img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
						</li>	
						<?php foreach ($resimler as $rs){?>
												
						<li  data-thumb="<?=base_url()?>uploads/<?=$rs->resim?>" class="flex-active-slide" style="width: 273px; float: left; display: block;">
							<div class="thumb-image"> <img src="<?=base_url()?>uploads/<?=$rs->resim?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
						</li>
						<?php }?>
					</ul>
					</div>
					<ol class="flex-control-nav flex-control-thumbs"></ol>
					<ul class="flex-direction-nav">
						<li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
					</ul>
				</div>	
			</div>
		</div>
		<form class="form-horizontal qtyFrm" method="post" action="<?=base_url()?>uye/sepete_ekle">
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
			<h3><?=$veri[0]->adi?></h3>
			<p><span class="item_price"><?=$veri[0]->sfiyat?>TL</span> <del>- <?=$veri[0]->sfiyat+29?>TL</del></p>
			<div class="rating1">
				<span class="starRating">
					<input id="rating5" type="radio" name="rating" value="5">
					<label for="rating5">5</label>
					<input id="rating4" type="radio" name="rating" value="4">
					<label for="rating4">4</label>
					<input id="rating3" type="radio" name="rating" value="3" checked="">
					<label for="rating3">3</label>
					<input id="rating2" type="radio" name="rating" value="2">
					<label for="rating2">2</label>
					<input id="rating1" type="radio" name="rating" value="1">
					<label for="rating1">1</label>
				</span>
			</div>
			<input type="hidden" name="urunid" value="<?=$veri[0]->Id?>">
			<div class="occasional">
				<h4>Stok Miktari : <?=$veri[0]->stok?> Adet</h4><br/>
				<input type="number" step="1" min="1" max="<?=$veri[0]->stok?>" name="miktar" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
				<br/>
				<h5><?=$veri[0]->grubu?>li Üründür</h5>
			</div>
			<button type="submit" class="shopBtn" value="Sepete Ekle"><span class="icon-shopping-cart">SEPETE EKLE</span></button>
		</div>
	 		<div class="clearfix"> </div>
				<!-- /new_arrivals --> 
		</form>
	<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Ürün Açıklaması</li>
							<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Bize Bildirin</li>
							<li class="resp-tab-item" aria-controls="tab_item-2" role="tab">Giysileri Nasıl Yıkamalısınız?</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Ürün Açıklaması</h2><div class="tab1 resp-tab-content resp-tab-content-active" style="display:block" aria-labelledby="tab_item-0">

							<div class="single_page_agile_its_w3ls">
							  <h6><?=$veri[0]->adi?></h6>
							   <p><?=$veri[0]->aciklama?></p>
							</div>
						</div>
						<!--//tab_one-->
						<h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Bize Bildirin</h2><div class="tab2 resp-tab-content" aria-labelledby="tab_item-1">
							
							<div class="single_page_agile_its_w3ls">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="<?=base_url()?>assets/images/cagla.jpg" alt=" " class="img-responsive">
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Çağla Öztürk</a></li>
												<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Hakkımda</a></li>
											</ul>
											<p>Severek ve isteyerek programlamayla ilgilenmekten çok mutluyum. Burada, yani
													bilgisayar mühendisliğinde, yazılımda! Yazılım ile 2010 Eylül ayında(Avcılar
													Teknik Lisesi ’nde)Özlem Akgün Bağçeci(Öğretmenim)ile tanıştığım ilk SQL
													Server ve Microsoft Visual Studio’dan bu yana daha da severek devam ettiğim
													bu yolda yeni şeyler öğrenmekten hep zevk aldım. Yazılım geliştiricilerinin
													bugünün sihirbazları olduğuna inananlardanım.
													</p>
										</div>
										<div class="clearfix"> </div>
						             </div>
									 <div class="add-review">
										<form action="#" method="post">
												<input type="text" name="Name" required="Name">
												<input type="email" name="Email" required="Email"> 
												<textarea name="Message" required=""></textarea>
											<input type="submit" value="SEND">
										</form>
									</div>
								 </div>
								 
							 </div>
						 </div>
						   <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Giysileri Nasıl Yıkamalısınız?</h2><div class="tab3 resp-tab-content" aria-labelledby="tab_item-2">

							<div class="single_page_agile_its_w3ls">
							  <h4>Giysi/Ürün Bakımı</h4>
<p>Günümüz dünyasında su ve enerji gibi doğal kaynaklarımızı mümkün olan en az seviyede kullanarak giysilerimize bakmak artık zorunluluk halini almıştır. Giysi ve ürün bakımında kullanılan Deterjanlar, Yumuşatıcılar ve Kimyasallar sadece giysilerimize zarar vermekle kalmayıp doğal kaynaklarımızı da kirletip azaltmaktadırlar!!!</p>
<h4><i><strong>Giysi / Ürün Bakımında ilk Adım Yıkamadır:</strong></i></h4>

<ul id="bakim1">
	<li>Giysilerimizin / Ürünlerimizin mümkün olduğunca doğru yıkandığına dikkat edilmelidir.</li>
	<li>Zira fazla ya da yanlış yıkamaların hem ürünlerimize ve hem de çevremize zarar verdiğini unutmayalım.</li>
	<li>Giysiler / ürünler yıkanmadan önce renkleri ve ürün özelliklerine göre tasnif edilmelidirler. Bu tasnif;
	<ul id="bakim2">
		<li>Giysi / Ürünlerin hassasiyetine göre:
		<ul id="bakim3">
			<li>Elde yıkanacaklar,</li>
			<li>Makinede Hassas programda yıkanacak olanlar ve</li>
			<li>Normal yıkamaya tabi olacak olanlar şeklinde yapılmalıdır.</li>
		</ul>
		</li>
	</ul>
	</li>
</ul>

<p>Zira Yünlü, İpekli ya da üzerinde ağır el işçiliği, nakış ya da hassas baskı olan ürünler ile normal pamuklu ürünler bir arada yıkanmamalıdır.</p>

<ul id="bakim4">
	<li>
	<ul id="bakim5">
		<li>Giysi / Ürünleri renklerine göre:
		<ul id="bakim6">
			<li>Beyazlar,</li>
			<li>Açık Renkliler ve</li>
			<li>Koyu Renkliler</li>
		</ul>
		</li>
	</ul>
	</li>
</ul>
olarak uygulanmalıdır… Farklı özellik ve renkteki ürünlerin birbirlerini lekeleyebileceği ya da deforme edebileceği unutulmamalıdır!

							</div>
						</div>
					</div>
				</div>	
			</div>
	<!-- //new_arrivals --> 
	</div>
 </div>
<!--//single_page-->