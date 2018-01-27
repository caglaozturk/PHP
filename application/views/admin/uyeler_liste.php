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
                                <div class="panel-heading">
									<h3 class="box-title"><a href="<?=base_url()?>admin/uyeler/ekle" class="btn btn-info"><i class="fa fa-plus-square"></i>Üye Ekle</a></h3>
									<h3 class="panel-title">Üyeler Listesi</h3>
                                </div>

                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="50">S.No</th>
                                                    <th>Adı Soyadı</th>
                                                    <th width="250">Email</th>
                                                    <th width="100">Telefon</th>
													<th width="100">Şehir</th>
                                                    <th width="100">Yetki</th>
                                                    <th width="200">Durum</th>
                                                    <th width="150">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
											$sno=0;
											foreach($veriler as $rs){
												$sno++;
											?>
                                                <tr id="trow_1">
                                                    <td class="text-center"><?=$sno?></td>
                                                    <td><strong><?=$rs->adsoy?></strong></td>
                                                    <td><?=$rs->email?></span></td>
                                                    <td><?=$rs->tel?></td>
                                                    <td><?=$rs->sehir?></td>
													<td><span class="label label-success"><?=$rs->yetki?></td>
													<td><?=$rs->durum?></td>
                                                    <td>
                                                        <a href="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->Id?>"><button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button></a>
                                                        <a href="<?=base_url()?>admin/uyeler/sil/<?=$rs->Id?>"><button class="btn btn-danger btn-rounded btn-sm" onClick="return confirm('Silinecek Emin Misiniz?');"><span class="fa fa-times"></span></button></a>
                                                    </td>
                                                </tr>
                                                
											<?php }?>	
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