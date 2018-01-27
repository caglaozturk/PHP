
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html"><h5>Hatasız kod olmaz :-)</h5></a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?=base_url()?>uploads/<?=$this->session->admin_session["resim"]?>" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?=base_url()?>uploads/<?=$this->session->admin_session["resim"]?>" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?=$this->session->admin_session["adsoy"]?></div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Yetkili Kişi</li>
                    <li>
                        <a href="<?=base_url()?>admin"><span class="fa fa-desktop"></span> <span class="xn-text">Ana Sayfa</span></a>                        
                    </li>  
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Siparişler</span></a>
                        <ul>
                            <li><a href="<?=base_url()?>admin/Siparisler/liste/Yeni">Yeni</a></li>
                            <li><a href="<?=base_url()?>admin/Siparisler/liste/Onaylandi">Onaylananlar</a></li>
                            <li><a href="<?=base_url()?>admin/Siparisler/liste/Iptal">İptal Edilenler</a></li>
                            <li><a href="<?=base_url()?>admin/Siparisler/liste/Kargoda">Kargodakiler</a></li>
                            <li><a href="<?=base_url()?>admin/Siparisler/liste/Tamamlandi">Tamamlananlar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/Uyeler"><span class="fa fa-users"></span> <span class="xn-text">Üyeler</span></a>
                    </li> 
					<li>
                        <a href="<?=base_url()?>admin/Urunler"><span class="fa fa-pencil"></span> <span class="xn-text">Ürünler</span></a> 
                    </li>  					
                    <li class="xn-title">İletişim</li>
                    <li>
                        <a href="<?=base_url()?>admin/Ayarlar"><span class="fa fa-cogs"></span> <span class="xn-text">Ayarlar</span></a>
                    </li>
                    <li>
                        <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Web Mesajları</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">İletişim</span></a>
                    </li>                 
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
			<!-- PAGE CONTENT -->
            <div class="page-content">