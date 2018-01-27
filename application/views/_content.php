<!-- /güncel --> 
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info"> <span></span></h3>		
				<div id="horizontalTab">
					
				</div>	
		</div>
		<div class="container">
		    <h3 class="wthree_text_info">YENİ <span>ÜRÜNLER</span></h3>		
				<div id="horizontalTab">
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
						<?php
						foreach($yeni as $ds)
						{ ?>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img height="200" src="<?=base_url()?>uploads/<?=$ds->resim?>" alt="" class="pro-image-front">
										<img height="250" src="<?=base_url()?>uploads/<?=$ds->resim?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?=base_url()?>home/urundetay/<?=$ds->Id?>" class="link-product-add-cart">Detay</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="<?=base_url()?>home/urundetay/<?=$ds->Id?>"><?=$ds->adi?></a></h4>
										<div class="info-product-price">
											<span class="item_price"><?=$ds->afiyat?></span>
											<del><?=$ds->sfiyat?></del>
										</div>					
									</div>
								</div>
							</div>
						<?php }?>
							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->
					</div>
				</div>	
		</div>
	</div>
	<!-- //güncel --> 
<!-- /new_arrivals --> 
<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">GÜNCEL <span>ÜRÜNLER</span></h3>		
				<div id="horizontalTab">
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
						<?php
						foreach($random as $ds)
						{ ?>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img height="200" src="<?=base_url()?>uploads/<?=$ds->resim?>" alt="" class="pro-image-front">
										<img height="250" src="<?=base_url()?>uploads/<?=$ds->resim?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?=base_url()?>home/urundetay/<?=$ds->Id?>" class="link-product-add-cart">Detay</a>
												</div>
											</div>
											<span class="product-new-top">Güncel</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="<?=base_url()?>home/urundetay/<?=$ds->Id?>"><?=$ds->adi?></a></h4>
										<div class="info-product-price">
											<span class="item_price"><?=$ds->afiyat?></span>
											<del><?=$ds->sfiyat?></del>
										</div>						
									</div>
								</div>
							</div>
						<?php }?>
							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->
					</div>
				</div>	
			</div>
</div>
	<!-- //new_arrivals --> 
	
		<!-- /hepsi --> 	
		<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">BÜTÜN <span>ÜRÜNLER</span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li> Men's</li>
							<li> Women's</li>
							<li> Bags</li>
							<li> Footwear</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
						<?php
						foreach($getir as $cs)
						{ ?>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img height="200" src="<?=base_url()?>uploads/<?=$cs->resim?>" alt="" class="pro-image-front">
										<img height="250" src="<?=base_url()?>uploads/<?=$cs->resim?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?=base_url()?>home/urundetay/<?=$cs->Id?>" class="link-product-add-cart">Detay</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="<?=base_url()?>home/urundetay/<?=$cs->Id?>"><?=$cs->adi?></a></h4>
										<div class="info-product-price">
											<span class="item_price"><?=$cs->afiyat?></span>
											<del><?=$cs->sfiyat?></del>
										</div>						
									</div>
								</div>
							</div>
						<?php }?>
							<div class="clearfix"></div>
							
						</div>
						<!--//tab_one-->
					</div>
				</div>	
			</div>
	</div>
	<!-- //hepsi --> 