</div>
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
			
	<div class="container" id="myModal">
	<div class="well well-small">
		<ul class="breadcrumb">
			<li><a href="<?=base_url()?>">Home</a><span class="divider"></span></li>
			<li class="active">Detaylar</li>
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
				<th>Ürün</th>
				<th>Birim</th>
				<th>Stok</th>
				<th>Tutar</th>
			</tr>
		<?php 
		$rn=0;
		$toplam=0;
		foreach($yeni as $rs)
		{
			$rn++;
			$toplam+=$rs->tutar;
		?>
			<tr>
				<td style="width: 10px"><?=$rn?></td>
				<td><?=$rs->adi?></td>
				<td><?=$rs->sfiyat?></td>
				<td><?=$veriler->adet?></td>
				<td><?=$rs->stok?></td>
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