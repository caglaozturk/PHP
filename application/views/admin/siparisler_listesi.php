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
                    <li class="active">Siparişler</li>
                    <li class="active">Siparişler Listesi</li>
                </ul>
                <!-- END BREADCRUMB -->                                                
                                
                <!-- kayıt başarılı mesajı --> 
					<div class="text-info"><strong><?=$this->session->flashdata("mesaj_ekle")?></strong></div>
				<!-- END kayıt başarılı mesajı --> 
				
				<!-- güncelleme başarılı mesajı --> 
					<div class="text-info"><strong><?=$this->session->flashdata("mesaj_guncelle")?></strong></div>
				<!-- END güncelleme başarılı mesajı --> 
				
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
							<div class="panel-body panel-body-table">

                                    <div class="table-responsive">
									 <table class="table table-bordered">
											<tbody>
												<tr>
													<th style="width: 10px">Nr</th>
													<th>Date</th>
													<th>Adı</th>
													<th>Tutar</th>
													<th>Şehir</th>
													<th>Durumu</th>
													<th>Detay</th>
												</tr>
											<?php 
											$rn=0;
											$toplam=0;
											foreach($veriler as $rs)
											{
												$rn++;
												$toplam+=$rs->tutar;
											?>
												<tr>
													<td style="width: 10px"><?=$rn?></td>
													<td><?=$rs->tarih?></td>
													<td><?=$rs->adsoy?></td>
													<td><?=$rs->tutar?></td>
													<td><?=$rs->sehir?></td>
													<td><?=$rs->siparisdurumu?></td>
													<td><a href="<?=base_url()?>admin/Siparisler/siparisdetay/<?=$rs->Id?>" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>Detay</a>
													</td>
												</tr>
											<?php 
											}?>
											</tbody>
										</table>
                                    </div>                                
                                </div>
                            </div> 
							<!--/.1,2,3,4-->
							<div class="box-footer clearfix">
							<ul class="pagination pagination-sm no-margin pull-right">
							<li><a href="#">&laquo;</a><li>
							<li><a href="#">1</a><li>
							<li><a href="#">2</a><li>
							<li><a href="#">3</a><li>
							<li><a href="#">4</a><li>
							<li><a href="#">&raquo;</a><li>
							</ul>
							</div>
							<!--/.end 1,2,3,4-->							
                        </div>
						
                    </div>
                    <!-- END RESPONSIVE TABLES -->
                   
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