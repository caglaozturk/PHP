		</div>
<!-- //Modal2 -->
<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
		</ol>
		<div id="slider-carousel"  class="carousel slide" data-ride="carousel">

		<div class="carousel-inner" role="listbox">
		<?php
			$say=0;
			$aktf=null;
			foreach($kampanya as $rs)
			{
				$say++;
				if($say==1)
					$aktf="active";
				else
					$aktf=null;
				?>
			<div class="item <?=$aktf?>">	
			<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>">
			<img height="1000" style="width:100%" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/>
			</div>
			<?php	}?>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
		</div>
    </div> 
	<!-- //banner -->
	
	