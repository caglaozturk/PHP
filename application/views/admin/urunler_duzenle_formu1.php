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
                    <li class="active">Uyeler</li>
                </ul>
                <!-- END BREADCRUMB -->                                                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->Id?>">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Ürün Düzenleme</strong> Sayfası</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <p>Lütfen Bilgileri Eksiksiz Doldurunuz!...</p>
                                </div>
                                <div class="panel-body">  
								
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Adı</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="adi" value="<?=$veri[0]->adi?>">
                                            </div>                                            
                                            <span class="help-block">Adınızı Giriniz...</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label" >Kodu</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="kodu" value="<?=$veri[0]->kodu?>">
                                            </div>                                            
                                            <span class="help-block">Kodunuzu Giriniz...</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label" >Türü</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="turu" value="<?=$veri[0]->turu?>">
                                            </div>                                            
                                            <span class="help-block">Türünüzü Giriniz...</span>
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label" >Açıklama</label>
                                        <div class="col-md-6 col-xs-12">               
										
											<script src="<?=base_url()?>/tinymce/js/tinymce/tinymce.min.js"></script>
											<script>tinymce.init({ selector:'textarea' });</script>									
                                            <textarea name="aciklama"><?=$veri[0]->aciklama?></textarea>
                                            <span class="help-block">Açıklamanızı Düzeltiniz...</span>
                                        </div>
                                    </div>
									
                                </div>
                                <div class="panel-footer">                             
                                    <button class="btn btn-primary pull-right">Güncelle</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->
			</div>            
            <!-- END PAGE CONTENT -->
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