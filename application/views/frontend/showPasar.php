<div class="content-wrap">

	<div class="container clearfix">

<div class="single-product">

	<div class="product">

		<div class="col_two_fifth">

			<!-- Product Single - Gallery
			============================================= -->
			<div class="product-image">
				<div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
					<div class="flexslider">
						<div class="slider-wrap" data-lightbox="gallery">
							<?php
							foreach ($gambars as $gambar) {
								?>
								<div class="slide" data-thumb="<?=base_url($gambar->gambar)?>"><a href="<?=base_url($gambar->gambar)?>" title="<?=$produk->nama?>" data-lightbox="gallery-item"><img src="<?=base_url($gambar->gambar)?>" alt="<?=$produk->nama?>"></a></div>
								<?php
							}
							?>
						</div>
					</div>
				</div>
				<div class="sale-flash">Sale!</div>
			</div><!-- Product Single - Gallery End -->

		</div>

		<div class="col_three_fifth product-desc col_last">

			<!-- Product Single - Price
			============================================= -->
			<div class="product-price"><?=$produk->nama?> - <ins>Rp. <?=number_format($produk->harga)?></ins></div><!-- Product Single - Price End -->

			<!-- Product Single - Rating
			============================================= -->
			<div class="product-rating">
				<i class="icon-star3"></i>
				<i class="icon-star3"></i>
				<i class="icon-star3"></i>
				<i class="icon-star3"></i>
				<i class="icon-star-half-full"></i>
				<!-- <i class="icon-star-empty"></i> -->
			</div><!-- Product Single - Rating End -->

			<div class="clear"></div>
			<div class="line"></div>

			<!-- Product Single - Quantity & Cart Button
			============================================= -->
			<form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
				<!-- <div class="quantity clearfix">
					<input type="button" value="-" class="minus">
					<input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
					<input type="button" value="+" class="plus">
				</div> -->
				<a href="" class="add-to-cart button nomargin">Hubungi Penjual</a>
			</form><!-- Product Single - Quantity & Cart Button End -->

			<div class="clear"></div>
			<div class="line"></div>

			<!-- Product Single - Short Description
			============================================= -->
			<div class="product-price">Stok : <?=$produk->stok?></div>
			<div class="clear"></div><br>
			<?=$produk->deskripsi?>
			
			<!-- Product Single - Meta
			============================================= -->
			<div class="card product-meta">
				<div class="card-body">
					<span itemprop="productID" class="sku_wrapper">Tipe Produk: <span class="sku">Barang <?=$produk->tipe_produk?></span></span>
					<!-- <span class="posted_in">Category: <a href="#" rel="tag">Dress</a>.</span>
					<span class="tagged_as">Tags: <a href="#" rel="tag">Pink</a>, <a href="#" rel="tag">Short</a>, <a href="#" rel="tag">Dress</a>, <a href="#" rel="tag">Printed</a>.</span> -->
				</div>
			</div><!-- Product Single - Meta End -->

			<!-- Product Single - Share
			============================================= -->
			<div class="si-share noborder clearfix">
				<span>Share:</span>
				<div>
					<a href="#" class="social-icon si-borderless si-facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>
					<a href="#" class="social-icon si-borderless si-twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>
					<a href="#" class="social-icon si-borderless si-pinterest">
						<i class="icon-pinterest"></i>
						<i class="icon-pinterest"></i>
					</a>
					<a href="#" class="social-icon si-borderless si-gplus">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
					</a>
					<a href="#" class="social-icon si-borderless si-rss">
						<i class="icon-rss"></i>
						<i class="icon-rss"></i>
					</a>
					<a href="#" class="social-icon si-borderless si-email3">
						<i class="icon-email3"></i>
						<i class="icon-email3"></i>
					</a>
				</div>
			</div><!-- Product Single - Share End -->

		</div>

		<div class="col_full nobottommargin">

			<div class="tabs clearfix nobottommargin" id="tab-1">

				<ul class="tab-nav clearfix">
					<li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="d-none d-md-block"> </span></a></li>
					<li><a href="#tabs-3"><i class="icon-star3"></i><span class="d-none d-md-block"> </span></a></li>
				</ul>

				<div class="tab-container">

					<div class="tab-content clearfix" id="tabs-1">
						<?=$produk->deskripsi?>
					</div>
					<div class="tab-content clearfix" id="tabs-3">

						<div id="reviews" class="clearfix">

							<ol class="commentlist clearfix">

								<li class="comment even thread-even depth-1" id="li-comment-1">
									<div id="comment-1" class="comment-wrap clearfix">

										<div class="comment-meta">
											<div class="comment-author vcard">
												<span class="comment-avatar clearfix">
												<img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
											</div>
										</div>

										<div class="comment-content clearfix">
											<div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2014 at 10:46AM</a></span></div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo perferendis aliquid tenetur. Aliquid, tempora, sit aliquam officiis nihil autem eum at repellendus facilis quaerat consequatur commodi laborum saepe non nemo nam maxime quis error tempore possimus est quasi reprehenderit fuga!</p>
											<div class="review-comment-ratings">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-half-full"></i>
											</div>
										</div>

										<div class="clear"></div>

									</div>
								</li>

								<li class="comment even thread-even depth-1" id="li-comment-1">
									<div id="comment-1" class="comment-wrap clearfix">

										<div class="comment-meta">
											<div class="comment-author vcard">
												<span class="comment-avatar clearfix">
												<img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
											</div>
										</div>

										<div class="comment-content clearfix">
											<div class="comment-author">Mary Jane<span><a href="#" title="Permalink to this comment">June 16, 2014 at 6:00PM</a></span></div>
											<p>Quasi, blanditiis, neque ipsum numquam odit asperiores hic dolor necessitatibus libero sequi amet voluptatibus ipsam velit qui harum temporibus cum nemo iste aperiam explicabo fuga odio ratione sint fugiat consequuntur vitae adipisci delectus eum incidunt possimus tenetur excepturi at accusantium quod doloremque reprehenderit aut expedita labore error atque?</p>
											<div class="review-comment-ratings">
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star3"></i>
												<i class="icon-star-empty"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>

										<div class="clear"></div>

									</div>
								</li>

							</ol>

							<!-- Modal Reviews
							============================================= -->
							<a href="#" data-toggle="modal" data-target="#reviewFormModal" class="button button-3d nomargin fright">Add a Review</a>

							<div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="reviewFormModalLabel">Submit a Review</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										</div>
										<div class="modal-body">
											<form class="nobottommargin" id="template-reviewform" name="template-reviewform" action="#" method="post">

												<div class="col_half">
													<label for="template-reviewform-name">Name <small>*</small></label>
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text"><i class="icon-user"></i></div>
														</div>
														<input type="text" id="template-reviewform-name" name="template-reviewform-name" value="" class="form-control required" />
													</div>
												</div>

												<div class="col_half col_last">
													<label for="template-reviewform-email">Email <small>*</small></label>
													<div class="input-group">
														<div class="input-group-prepend"><div class="input-group-text">@</div></div>
														<input type="email" id="template-reviewform-email" name="template-reviewform-email" value="" class="required email form-control" />
													</div>
												</div>

												<div class="clear"></div>

												<div class="col_full col_last">
													<label for="template-reviewform-rating">Rating</label>
													<select id="template-reviewform-rating" name="template-reviewform-rating" class="form-control">
														<option value="">-- Select One --</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
													</select>
												</div>

												<div class="clear"></div>

												<div class="col_full">
													<label for="template-reviewform-comment">Comment <small>*</small></label>
													<textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>
												</div>

												<div class="col_full nobottommargin">
													<button class="button button-3d nomargin" type="submit" id="template-reviewform-submit" name="template-reviewform-submit" value="submit">Submit Review</button>
												</div>

											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
							<!-- Modal Reviews End -->

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="clear"></div><div class="line"></div>

<div class="col_full nobottommargin">

	<h4>Related Products</h4>

	<div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">
		<?php
		foreach ($relateds as $related) {
			?>
			<div class="oc-item">
			<div class="product iproduct clearfix">
				<div class="product-image">
					<a href="#"><img src="<?=base_url($related->gambar)?>" alt="Checked Short Dress"></a>
					<div class="sale-flash">Sale!</div>
					<!-- <div class="product-overlay">
						<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
						<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
					</div> -->
				</div>
				<div class="product-desc center">
					<div class="product-title"><h3><a href="<?=base_url('pasar/'.$related->slug)?>"><?=$related->nama?></a></h3></div>
					<div class="product-price">Rp. <?=number_format($related->harga)?></div>
					<div class="product-rating">
						<i class="icon-star3"></i>
						<i class="icon-star3"></i>
						<i class="icon-star3"></i>
						<i class="icon-star3"></i>
						<i class="icon-star-half-full"></i>
					</div>
				</div>
			</div>
		</div>
			<?php
		}

		?>
	</div>

</div>

</div>

</div>