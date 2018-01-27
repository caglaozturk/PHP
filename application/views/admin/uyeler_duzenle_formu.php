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
                            
                            <form class="form-horizontal" method="post" action="<?=base_url()?>admin/uyeler/guncelle/<?=$veri[0]->Id?>">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Üye Düzenleme</strong> Sayfası</h3>
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
                                                <input type="text" class="form-control" name="adsoy" value="<?=$veri[0]->adsoy?>"/>
                                            </div>                                            
                                            <span class="help-block">Adınızı Giriniz...</span>
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="email" class="form-control"  name="email" value="<?=$veri[0]->email?>"/>
                                            </div>                                            
                                            <span class="help-block">Email Giriniz...</span>
                                        </div>
                                    </div>
									
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Şifre</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" class="form-control" name="sifre" value="<?=$veri[0]->sifre?>"/>
                                            </div>            
                                            <span class="help-block">Şifrenizi Giriniz...</span>
                                        </div>
                                    </div>
									
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">GSM</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" name="tel" value="<?=$veri[0]->tel?>"/>
                                            </div>            
                                            <span class="help-block">Telefon Giriniz...</span>
                                        </div>
                                    </div>
                                    
                                     <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Doğum Tarihi</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text"  name="tarih" class="form-control datepicker" value="<?=$veri[0]->tarih?>">                                            
                                            </div>
                                            <span class="help-block">Doğum Tarihinizi Giriniz...</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Şehir</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select"  name="sehir">
												<option><?=$veri[0]->sehir?></option>
                                                <option>Ankara</option>
                                                <option>Karabük</option>
                                                <option>İstanbul</option>
                                                <option>Kocaeli</option>
                                                <option>Sakarya</option>
                                            </select>
                                            <span class="help-block">Seçiniz...</span>
                                        </div>
                                    </div>
                                    
									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label" >Adres</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="adres" rows="5"><?=$veri[0]->adres?></textarea>
                                            <span class="help-block">Adresinizi Giriniz...</span>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Yetki</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select"  name="yetki">
												<option><?=$veri[0]->yetki?></option>
                                                <option>Üye</option>
                                                <option>Satıcı</option>
                                                <option>Yorumcu</option>
                                                <option>Yazar</option>
                                            </select>
                                            <span class="help-block">Seçiniz...</span>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Durum</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select"  name="durum">
												<option><?=$veri[0]->durum?></option>
                                                <option>Aktif</option>
                                                <option>Pasif</option>
                                            </select>
                                            <span class="help-block">Seçiniz...</span>
                                        </div>
                                    </div>   
									
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"></label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/>Üyelik Koşullarını Kabul Ediyorum!...</label>
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