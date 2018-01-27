<!DOCTYPE html>
<html>
<head>
<title><?=$sayfa?> <?=$veri[0]->adi?></title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //tags -->
<link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="<?=base_url()?>assets/css/flexslider.css" type="text/css" media="screen">
<link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet"> 
<link href="<?=base_url()?>assets/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all">

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic" rel="stylesheet" type="text/css">
<style type="text/css">@keyframes pop-in {    0% { opacity: 0; transform: scale(0.1); }    60% { opacity: 1; transform: scale(1.2); }    100% { transform: scale(1); }}@-webkit-keyframes pop-in {    0% { opacity: 0; -webkit-transform: scale(0.1); }    60% { opacity: 1; -webkit-transform: scale(1.2); }    100% { -webkit-transform: scale(1); }}@-moz-keyframes pop-in {    0% { opacity: 0; -moz-transform: scale(0.1); }    60% { opacity: 1; -moz-transform: scale(1.2); }    100% { -moz-transform: scale(1); }}.minicart-showing #PPMiniCart {    display: block;    transform: translateZ(0);    -webkit-transform: translateZ(0);    -moz-transform: translateZ(0);    animation: pop-in 0.25s;    -webkit-animation: pop-in 0.25s;    -moz-animation: pop-in 0.25s;}#PPMiniCart {    display: none;    position: fixed;    left: 50%;    top: 75px;}#PPMiniCart form {    position: relative;    width: 400px;    max-height: 400px;    margin-left: -200px;    padding: 10px 10px 40px;    background: #fbfbfb;    border: 1px solid #d7d7d7;    border-radius: 4px;    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);    font: 15px/normal arial, helvetica;    color: #333;}#PPMiniCart form.minicart-empty {    padding-bottom: 10px;    font-size: 16px;    font-weight: bold;}#PPMiniCart ul {    clear: both;    float: left;    width: 380px;    margin: 5px 0 20px;    padding: 10px;    list-style-type: none;    background: #fff;    border: 1px solid #ccc;    border-radius: 4px;    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);}#PPMiniCart .minicart-empty ul {    display: none;}#PPMiniCart .minicart-closer {    float: right;    margin: -12px -10px 0;    padding: 10px;    background: 0;    border: 0;    font-size: 18px;    cursor: pointer;    font-weight: bold;}#PPMiniCart .minicart-item {    clear: left;    padding: 6px 0;    min-height: 25px;}#PPMiniCart .minicart-item + .minicart-item {    border-top: 1px solid #f2f2f2;}#PPMiniCart .minicart-item a {    color: #333;    text-decoration: none;}#PPMiniCart .minicart-details-name {    float: left;    width: 62%;}#PPMiniCart .minicart-details-quantity {    float: left;    width: 15%;}#PPMiniCart .minicart-details-remove {    float: left;    width: 7%;}#PPMiniCart .minicart-details-price {    float: left;    width: 16%;    text-align: right;}#PPMiniCart .minicart-attributes {    margin: 0;    padding: 0;    background: transparent;    border: 0;    border-radius: 0;    box-shadow: none;    color: #999;    font-size: 12px;    line-height: 22px;}#PPMiniCart .minicart-attributes li {    display: inline;}#PPMiniCart .minicart-attributes li:after {    content: ",";}#PPMiniCart .minicart-attributes li:last-child:after {    content: "";}#PPMiniCart .minicart-quantity {    width: 30px;    height: 18px;    padding: 2px 4px;    border: 1px solid #ccc;    border-radius: 4px;    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);    font-size: 13px;    text-align: right;    transition: border linear 0.2s, box-shadow linear 0.2s;    -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;    -moz-transition: border linear 0.2s, box-shadow linear 0.2s;}#PPMiniCart .minicart-quantity:hover {    border-color: #0078C1;}#PPMiniCart .minicart-quantity:focus {    border-color: #0078C1;    outline: 0;    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 3px rgba(0, 120, 193, 0.4);}#PPMiniCart .minicart-remove {    width: 18px;    height: 19px;    margin: 2px 0 0;    padding: 0;    background: #b7b7b7;    border: 1px solid #a3a3a3;    border-radius: 3px;    color: #fff;    font-size: 13px;    opacity: 0.70;    cursor: pointer;}#PPMiniCart .minicart-remove:hover {    opacity: 1;}#PPMiniCart .minicart-footer {    clear: left;}#PPMiniCart .minicart-subtotal {    position: absolute;    bottom: 17px;    padding-left: 6px;    left: 10px;    font-size: 16px;    font-weight: bold;}#PPMiniCart .minicart-submit {    position: absolute;    bottom: 10px;    right: 10px;    min-width: 153px;    height: 33px;    margin-right: 6px;    padding: 0 9px;    border: 1px solid #ffc727;    border-radius: 5px;    color: #000;    text-shadow: 1px 1px 1px #fff6e9;    cursor: pointer;    background: #ffaa00;    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZjZlOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmFhMDAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);    background: -moz-linear-gradient(top, #fff6e9 0%, #ffaa00 100%);    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fff6e9), color-stop(100%,#ffaa00));    background: -webkit-linear-gradient(top, #fff6e9 0%,#ffaa00 100%);    background: -o-linear-gradient(top, #fff6e9 0%,#ffaa00 100%);    background: -ms-linear-gradient(top, #fff6e9 0%,#ffaa00 100%);    background: linear-gradient(to bottom, #fff6e9 0%,#ffaa00 100%);}#PPMiniCart .minicart-submit img {    vertical-align: middle;    padding: 4px 0 0 2px;}</style>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container" id="deneme">
		<ul>
		<form class="form horizontal loginFrm" method="post" action="<?=base_url()?>home/login">
			<!-- Modal1 -->
			<?php
			if ($this->session->userdata("uye_session")){
			?>
			<li class="dropdown">
				<a href="#" data-toggle="dropdown"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
				<?=$this->session->uye_session["adsoy"]?><b class="caret"></b></a>
				<div class="dropdown-menu">
					<a href="<?=base_url()?>uye/hesabim"><span style="color:#2FDAB8">Hesap Bilgileri</span></a><br>
					<a href="<?=base_url()?>uye/sepetim"><span style="color:#2FDAB8">Sepetim</span></a><br>
					<a href="<?=base_url()?>uye/siparislerim"><span style="color:#2FDAB8">Siparişlerim</span></a><br>
					<a href="<?=base_url()?>uye/cikis"><span style="color:#2FDAB8">Çıkış</span></a><br>
				</div>
			</li>
			<?php }
			else {
			?>
				<li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a>
				<?php }
				?>
				<!-- //Modal1 -->
				</li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
		</form>	
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="#" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="<?=base_url()?>"><span>Ç</span>ağlanın Butiği<i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
			<ul class="social-nav model-3d-0 footer-social w3_agile_social">
			   <li class="share">Share On : </li>
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
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
				  <?php
				  $anasayfa=null;
				  $hakkimizda=null;
				  $kategoriler=null;
				  $kampanyalar=null;
				  $iletisim=null;
				  $Bize_Yazin=null;
				  if ($menu=="anasayfa")
					  $anasayfa=" menu__item menu__item--current";
				  else if ($menu=="hakkimizda")
					  $hakkimizda=" menu__item menu__item--current";
				  else if ($menu=="kategoriler")
					  $kategoriler=" menu__item menu__item--current";
				  else if ($menu=="kampanyalar")
					  $kampanyalar=" menu__item menu__item--current";
				  else if ($menu=="Bize_Yazin")
					  $Bize_Yazin=" menu__item menu__item--current";
				  else
					  $iletisim=" menu__item menu__item--current";
				  
				  ?>
					<li class="<?=$anasayfa?>"><a class="menu__link" href="<?=base_url()?>">Anasayfa <span class="sr-only">(current)</span></a></li>
					<li class=" <?=$hakkimizda?>"><a class="menu__link" href="<?=base_url()?>Home/hakkimizda">Hakkımızda</a></li>
					<li class="<?=$kategoriler?>">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategoriler<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="<?=base_url()?>/assets/images/top2.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?=base_url()?>home/Kategoriler">Clothing</a></li>
											<li><a href="<?=base_url()?>home/Kategoriler">Wallets</a></li>
											<li><a href="<?=base_url()?>home/Kategoriler">Footwear</a></li>
											<li><a href="<?=base_url()?>home/Kategoriler">Watches</a></li>
											<li><a href="<?=base_url()?>home/Kategoriler">Accessories</a></li>
											<li><a href="<?=base_url()?>home/Kategoriler">Bags</a></li>
											<li><a href="<?=base_url()?>home/Kategoriler">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?=base_url()?>home/Kategoriler">Jewellery</a></li>
											<li><a href="<?=base_url()?>home/Kategoriler">Sunglasses</a></li>
											<li><a href="<?=base_url()?>home/Kategoriler">Perfumes</a></li>
											<li><a href="<?=base_url()?>home/Kategoriler">Beauty</a></li>
											<li><a href="<?=base_url()?>home/Kategoriler">Shirts</a></li>
											<li><a href="<?=base_url()?>home/Kategoriler">Sunglasses</a></li>
											<li><a href="<?=base_url()?>home/Kategoriler">Swimwear</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="<?=$kampanyalar?>">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kampanyalar<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?=base_url()?>home/Kampanyalar">Clothing</a></li>
											<li><a href="<?=base_url()?>home/Kampanyalar">Wallets</a></li>
											<li><a href="<?=base_url()?>home/Kampanyalar">Footwear</a></li>
											<li><a href="<?=base_url()?>home/Kampanyalar">Watches</a></li>
											<li><a href="<?=base_url()?>home/Kampanyalar">Accessories</a></li>
											<li><a href="<?=base_url()?>home/Kampanyalar">Bags</a></li>
											<li><a href="<?=base_url()?>home/Kampanyalar">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="<?=base_url()?>home/Kampanyalar">Jewellery</a></li>
											<li><a href="<?=base_url()?>home/Kampanyalar">Sunglasses</a></li>
											<li><a href="<?=base_url()?>home/Kampanyalar">Perfumes</a></li>
											<li><a href="<?=base_url()?>home/Kampanyalar">Beauty</a></li>
											<li><a href="<?=base_url()?>home/Kampanyalar">Shirts</a></li>
											<li><a href="<?=base_url()?>home/Kampanyalar">Sunglasses</a></li>
											<li><a href="<?=base_url()?>home/Kampanyalar">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="<?=base_url()?>/assets/images/top1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class=" <?=$Bize_Yazin?>"><a class="menu__link" href="<?=base_url()?>home/Bize_Yazin">Bize Yazın</a></li>
					<li class=" <?=$iletisim?>"><a class="menu__link" href="<?=base_url()?>home/iletisim">İletişim</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
			<form action="<?=base_url()?>uye/sepetim" method="post" class="last"> 
				<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"><span class="badge badge-warning">
				<?php if ($this->session->userdata("uye_session")){?>
				<?=$sepet[0]->say?><?php }else{?>0<?php }?></span></i></button>
			</form>  
  
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->

						<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
										<div class="modal-body modal-body-sub_agile">
										<div class="col-md-8 modal_body_left modal_body_left1">
										<h3 class="agileinfo_sign">OTURUM AÇ <span>ŞİMDİ</span></h3>
										<form action="<?=base_url()?>home/login" method="post">
											<div class="styled-input">
												<input type="email" name="eposta" required=""> 
												<label>Email</label>
												<span></span>
											</div> 
											<div class="styled-input agile-styled-input-top">
												<input type="password" name="sifre" required="">
												<label>Şifreniz</label>
												<span></span>
											</div>
											<input type="submit" value="Sign In">
										</form>
											<div class="clearfix"></div>
											<p><a href="#" data-toggle="modal" data-target="#myModal2" > Hesabınız yok mu?</a></p>
										</div>
										<div class="col-md-4 modal_body_right modal_body_right1">
											<img src="<?=base_url()?>/assets/images/log_pic.jpg" alt=" "/>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<!-- //Modal content-->
							</div>
						</div>

<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">KAYDOL <span>ŞİMDİ</span></h3>
						 <form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Adınız</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="eposta" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Şifre</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Şifreyi Onayla</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
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
														<div class="clearfix"></div>
														<p><a href="#">Kayıt işlemini tıklatarak, şartlarınızı kabul ediyorum</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="<?=base_url()?>/assets/images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>