<!-- sidebar -->
<div class="css-treeview">
	<h4>Kategoriler</h4>
	<ul class="tree-list-pad">
		<?php foreach ($kategoriler as $rs) {?>
		<ul>
		<input type="checkbox" id="item-1" checked="checked" /><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
		<font face="Verdana" size="3" color="black"><b><a href="<?=base_url()?>kategori/<?=$rs->adi?>"><?=$rs->adi?></a></label></b></font>
			<li>
				<?php foreach ($urunler as $ds) {?>
				<input type="checkbox" id="item-1" checked="checked" /><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
				<font face="Verdana" size="3" color="black"><b><a href="<?=base_url()?>kategori/<?=$ds->adi?>"><?=$ds->adi?></a></label></b></font>
				<?php }?>
			</li>
		</ul>
		<?php }?>
	</ul>
</div>
<div class="clearfix"></div>
<!-- //sidebar -->