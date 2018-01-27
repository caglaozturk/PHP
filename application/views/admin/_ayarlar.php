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
                    <li class="active">Ayarlar</li>
                </ul>
                <!-- END BREADCRUMB -->                                                
                
					<!-- START CONTENT FRAME -->
                 <div class="page-content-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<!-- START CONTENT FRAME TOP -->
								<div class="panel-body panel-body-table">
									<div class="nav-tabs-custom">
										<div class="fc-toolbar">
											<div class="fc-center">
												<h2><span class="glyphicon glyphicon-cog"></span> Ayarlar</h2>
												
											</div>
											<ul class="nav nav-tabs">
												<li class="active"><a href="#genel" data-toggle="tab" aria-expanded="true">Genel</a></li>
												<li class=""><a href="#email" data-toggle="tab" aria-expanded="false">Email</a></li>
												<li class=""><a href="#sosyal" data-toggle="tab" aria-expanded="false">Sosyal</a></li>
												<li class=""><a href="#hakkimizda" data-toggle="tab" aria-expanded="false">Hakkımızda</a></li>
												<li class=""><a href="#iletisim" data-toggle="tab" aria-expanded="false">İletişim</a></li>
											</ul>
										</div>
										
										<form method="post" class="form-horizontal" action="<?=base_url()?>admin/ayarlar/ayarlar_guncelle/<?=$veri[0]->Id?>">       
										<div class="tab-content">
											<div class="tab-pane active" id="genel">
												<div class="panel-body">                   
												<div class="form-group">
													<label class="col-md-3 control-label">Adı:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->adi?>" name="adi"/>
													</div>
												</div> 
												<div class="form-group">
													<label class="col-md-3 control-label">Description:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->description?>" name="description"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Keywords:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->keywords?>" name="keywords"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 col-xs-12 control-label" >Adres:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->adres?>" name="adres"/>
													</div>
												</div>    
												<div class="form-group">
													<label class="col-md-3 control-label">Telefon:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->tel?>" name="tel"/>
													</div>
												</div> 
												<div class="form-group">
													<label class="col-md-3 control-label">Şehir:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->sehir?>" name="sehir"/>
													</div>
												</div>	
												</div>
										    </div>
											<div class="tab-pane" id="email">
												<div class="panel-body">                       
												<div class="form-group">
													<label class="col-md-3 control-label">Smtp Server:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->smtpserver?>" name="smtpserver"/>
													</div>
												</div> 
												<div class="form-group">
													<label class="col-md-3 control-label">Smtp Email:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->smtpemail?>" name="smtpemail"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Port:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->smtpport?>" name="smtpport"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Şifre:</label>
													<div class="col-md-6 col-xs-12">
														<input type="password" class="form-control" value="<?=$veri[0]->password?>" name="password"/>
													</div>
												</div> 	
												</div>
											</div>
											<div class="tab-pane" id="sosyal">
												<div class="panel-body">                        
												<div class="form-group">
													<label class="col-md-3 control-label">Facebook:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->facebook?>" name="facebook"/>
													</div>
												</div> 
												<div class="form-group">
													<label class="col-md-3 control-label">Instagram:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->instegram?>" name="instegram"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Twitter:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->twitter?>" name="twitter"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Pinterest:</label>
													<div class="col-md-6 col-xs-12">
														<input type="text" class="form-control" value="<?=$veri[0]->pinterest?>" name="pinterest"/>
													</div>
												</div> 		
												</div>
											</div>
											<div class="tab-pane" id="hakkimizda">
												<div class="panel-body">
													<script src="<?=base_url()?>/tinymce/tinymce.min.js"></script>
													<script>tinymce.init({ selector:'textarea' });</script>									
													<textarea name="hakkimizda"><?=$veri[0]->hakkimizda?></textarea>
													<span class="help-block">Hakkımızda Bilgilerinizi Düzeltiniz...</span>
												</div>
											</div>
											<div class="tab-pane" id="iletisim">
												<div class="panel-body">
													<script src="<?=base_url()?>/tinymce/tinymce.min.js"></script>
													<script>tinymce.init({ selector:'textarea' });</script>									
													<textarea name="iletisim"><?=$veri[0]->iletisim?></textarea>
													<span class="help-block">İletişim Bilgilerinizi Düzeltiniz...</span>
												</div>
											</div>
										</div>
										<div class="panel-footer">
											<button class="btn btn-primary pull-right">GÜNCELLE</button>
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>               
                <!-- END CONTENT FRAME -->                                
                
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
       