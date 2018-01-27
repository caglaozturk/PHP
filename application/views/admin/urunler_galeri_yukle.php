                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

				<!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Ürünler</li>
                </ul>
                <!-- END BREADCRUMB -->                                                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Ürün Galeri Ekleme </strong> Sayfası</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Eklenecek Resmi Seçiniz</p>
									<p>
										*Yüklenecek Resim Dosyası Türleri (gif|jpg|png) Max Boyutlar: 1024*1024, Boyut: 1000Kb
										<?php if($this->session->flashdata("mesaj")){?>
										<div class="alert alert-info" role="alert">
											<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
											<?=$this->session->flashdata("mesaj")?>
										</div>
										<?php }?>
									</p>
                                </div>
								
								<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/Urunler/galeri_kaydet/<?=$id?>">
                                <div class="panel-body"> 
                                    <div class="form-group">
                                        <div class="col-md-6 col-xs-12"> 
                                            <input name="resim" type="file" class="form-control" required class="form-control" placeholder="Yükleme için gözat" onchange="this.form.submit()"/>
                                        </div>
                                    </div>							
                                </div>
                                <div class="panel-footer">                                  
                                    <button class="btn btn-primary pull-right">RESMİ YÜKLE</button>
                                </div>
								</form>
								<?php foreach($veriler as $rs) {?>
								<img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="100">
								<a href="<?=base_url()?>admin/urunler/galeri_sil/<?=$id?>/<?=$rs->Id?>"><button class="btn btn-danger btn-rounded btn-sm" onClick="return confirm('Silinecek Emin Misiniz?');"><span class="fa fa-times"></span></button></a>
								<?php }?>
                            </div>
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTAINER -->
		<!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Çıkış <strong>Yap</strong> ?</div>
                    <div class="mb-content">
                        <p>Çıkış yapmak istediğinizden emin misiniz?</p>                    
                        <p>Devam etmek isterseniz Hayır'a,  geçerli kullanıcıyı kapatmak için Evet tuşuna basın.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?=base_url()?>admin/login/login_cik" class="btn btn-success btn-lg">Evet</a>
                            <button class="btn btn-default btn-lg mb-control-close">Hayır</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->