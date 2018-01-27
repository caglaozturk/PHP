</div>
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>S<span>İPARİŞLERİM </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="<?=base_url()?>">Anasayfa</a><i>|</i></li>
								<li>Sipariş Sayfası</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	<div class="well well-small">
		<ul class="breadcrumb">
			<li><a href="<?=base_url()?>">Home</a><span class="divider"></span></li>
			<li class="active">Sepetim</li>
		</ul>
		<?php if($this->session->flashdata("mesaj")){?>
		<div class="callout callout-info">
			<p><?=$this->session->flashdata("mesaj")?></p>
		</div>
		<?php }?>
		<table class="table table-bordered">
		<tbody>
			<tr>
				<th style="width: 10px">Nr</th>
				<th>Date</th>
				<th>Adı</th>
				<th>Tutar</th>
				<th>Şehir</th>
				<th>Durumu</th>
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
				<td>
				<?php if($rs->siparisdurumu=="Kargoda" && $rs->kargo!=null)  {?>
					<a href="http://kargotakip.araskargo.com.tr/mainPage.aspx?code=<?=$rs->kargo?>" target="_blank" class="btn btn-block btn-danger btn-xs">Kargo Takip</a>
				<?php }else if($rs->siparisdurumu=="Kargoda"){?>
					<a href="<?=$rs->kargo?>" target="_blank" class="btn btn-block btn-danger btn-xs">Kargo Takip</a>
				<?php }?>
				<?=$rs->siparisdurumu?>
				</td>
			</tr>
		<?php 
		}?>
		</tbody>
		</table>
		Sipariş Toplamı :<?=$toplam?>TL
	</div>
	</div>
 </div>
<!--//single_page-->