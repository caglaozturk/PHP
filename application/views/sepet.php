</div>
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>S<span>EPETİM </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Anasayfa</a><i>|</i></li>
								<li>SEPETİM</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
		
			<?php
				$this->load->view('_uyesidebar');
			?>
		<div class="col-md-8 products-right">
		<ul class="breadcrumb">
			<li><a href="<?=base_url()?>">Home</a><span class="divider"></span></li>
			<li class="active">Sepetim</li>
		</ul>
		<div class="well well-small">
			<?php if($this->session->flashdata("mesaj")){?>
			<div class="callout callout-info">
				<p><?=$this->session->flashdata("mesaj")?></p>
			</div>
			<?php }?>
			<table class="table table-bordered">
			<tbody>
				<tr>
					<th style="width: 10px">Nr</th>
					<th>Resmi</th>
					<th>Adı</th>
					<th>Fiyat</th>
					<th>Miktar</th>
					<th>Tutar</th>
					<th>Sil</th>
				</tr>
			<?php 
			$rn=0;
			$toplam=0;
			foreach($veriler as $rs)
			{
				$rn++;
				$tutar=$rs->satfiyat*$rs->adet;
				$toplam+=$tutar;
			?>
				<tr>
					<td style="width: 10px"><?=$rn?></td>
					<td>
					<a href="<?=base_url()?>home/urundetay/<?=$rs->urun_id?>">
					<img width="100" height="50" src="<?=base_url()?>uploads/<?=$rs->urunresim?>"/>
					</a></td>
					<td><?=$rs->urunadi?></td>
					<td><?=$rs->satfiyat?> TL</td>
					<td><?=$rs->adet?></td>
					<td><?=($rs->satfiyat*$rs->adet)?></td>
					<td><a href="<?=base_url()?>uye/sepetsil/<?=$rs->Id?>" onclick="return confirm('Silinecek Emin Misin?')" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>Sil</a>
					</td>
				</tr>
			<?php 
			}?>
			</tbody>
			</table>
			Toplam :<?=$toplam?>
			<form method="post" action="<?=base_url()?>uye/satinal">
				<input type="hidden" name="toplam" value="<?=$toplam?>">
				<br/><button type="submit" class="shopBtn" value="Sepete Ekle">Satın Al</button>
			</form>
		</div>
		</div>
	</div>
 </div>
<!--//single_page-->