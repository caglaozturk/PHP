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
                            
                            <form class="form-horizontal" method="post" action="<?=base_url()?>admin/urunler/ekle_kaydet">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Ürün Ekleme</strong> Sayfası</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <p>Lütfen Bilgileri Eksiksiz Doldurunuz!...</p>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label" >Ad Soyad</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="adsoy"/>
                                            </div>                  
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Kodu</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"  name="kod"/>
                                            </div>                      
                                        </div>
                                    </div>
									
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Türü</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" name="tur"/>
                                            </div>            
                                        </div>
                                    </div>
									
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Kategori</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" name="kat"/>
                                            </div>          
                                        </div>
                                    </div>
                                    
                                     <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Alış Fiyatı</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text"  class="form-control" name="afiyat" >                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Satış Fiyatı</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text"  class="form-control" name="sfiyat">                                            
                                            </div>
                                        </div>
                                    </div>
									
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Stok</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" name="stok"/>
                                            </div>            
                                        </div>
                                    </div>
									
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Description</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" name="description"/>
                                            </div>          
                                        </div>
                                    </div>
                                    
                                     <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Keywords</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text"  class="form-control" name="keywords">                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Açıklama</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text"  class="form-control" name="aciklama">                                            
                                            </div>
                                        </div>
                                    </div>
									
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Durum</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" name="durum"/>
                                            </div>          
                                        </div>
										
                                    </div>
										<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Grubu</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" name="grubu"/>
                                            </div>          
                                        </div>
                                    </div>
                                    
                                     <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Tarih</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text"  name="tarih" class="form-control datepicker" value="2014-11-01">                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Resim</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text"  class="form-control" name="resim">                                            
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="panel-footer">                                
                                    <button class="btn btn-primary pull-right">KAYDET</button>
                                </div>
                            </div>
                            </form>
                            
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