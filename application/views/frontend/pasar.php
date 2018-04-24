<div class="content-wrap" style="padding-top:0px">


	<div class="container clear-bottommargin clearfix">

		<div class="heading-block center">
			<img data-animate="fadeInLeftBig" src="<?=base_url()?>assets/frontend/images/product.gif" alt="kegiatan" class="center-block fadeInLeftBig animated">
			<h2>Pasar Warga</h2>
			<span>Silahkan melakukan jual/beli untuk lingkungan Kelurahan sedulur.</span>
		</div>

<!-- Shop
					============================================= -->
					<div id="shop" class="shop product-3 grid-container clearfix" data-layout="fitRows">
						<?php
						foreach ($products as $product) {
							?>
							<div class="product clearfix">
							<div class="product-image">
								<a href="<?=base_url('pasar/'.$product->slug)?>"><img src="<?=base_url($product->gambar)?>" alt="Checked Short Dress"></a>
								<div class="sale-flash">Sale!</div>
							</div>
							<div class="product-desc center">
								<div class="product-title"><h3><a href="<?=base_url('pasar/'.$product->slug)?>"><?=$product->nama?></a></h3></div>
								<div class="product-price"><ins>Rp. <?=number_format($product->harga)?></ins></div>
								<div class="product-rating">
									<i class="icon-star3"></i>
									<i class="icon-star3"></i>
									<i class="icon-star3"></i>
									<i class="icon-star3"></i>
									<i class="icon-star-half-full"></i>
								</div>
							</div>
						</div>
							<?php
						}

						?>
						

					</div><!-- #shop end -->

	</div>
</div>
