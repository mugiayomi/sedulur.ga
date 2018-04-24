<div class="content-wrap" style="padding-bottom:0px">

	<div class="container clearfix">
		<div class="col_full clearfix">

			<div class="fancy-title title-border">
				<h3>Info Penting</h3>
			</div>

			<?php
			$i = 1;
			foreach ($infos as $info) {
				$col = '';
				if ($i % 3 == 0) {
					$col = 'col_last';
				}
				$i++;
			?>
				<div class="col_one_third nobottommargin <?=$col?>">
					<div class="ipost clearfix">
						<div class="entry-image">
							<a href="#">
								<img class="image_fade" src="<?=base_url($info->gambar)?>" alt="Image">
							</a>
						</div>
						<div class="entry-title">
							<h3>
								<a href="<?=base_url('info/'.$info->slug)?>">
									<?=$info->judul?>
								</a>
							</h3>
						</div>
						<ul class="entry-meta clearfix">
							<li>
								<i class="icon-calendar3"></i>
								<?=$info->wk_rekam?>
							</li>
							<!-- <li>
								<a href="blog-single.html#comments">
									<i class="icon-comments"></i> 23</a>
							</li> -->
						</ul>
						<div class="entry-content">
							<p>
								<?=getExcerpt($info->deskripsi, 30)?>
							</p>
						</div>
					</div>
				</div>

				<?php
				
			}
			?>

		</div>
	</div>

	<div class="container clearfix">

		<div class="clear"></div>
		<div class="line topmargin-sm bottommargin-lg"></div>

		<div style="position: relative;">
			<div class="heading-block nobottomborder">
				<h3>Pasar RT</h3>
			</div>

			<div class="real-estate owl-carousel image-carousel carousel-widget bottommargin-lg" data-margin="10" data-nav="true" data-loop="true"
			data-pagi="false" data-items-xs="1" data-items-sm="1" data-items-md="2" data-items-lg="3" data-items-xl="3">

				<?php
				foreach ($products as $product) {
				?>
					<div class="oc-item">
						<div class="real-estate-item">
							<div class="real-estate-item-image">
								<div class="badge badge-danger bgcolor-2">For Sale</div>
								<a href="<?=base_url('pasar/' . $product->slug)?>">
									<img src="<?=base_url($product->gambar)?>" alt="<?=$product->nama?>">
								</a>
								<div class="real-estate-item-price">
									Rp.
									<?=number_format($product->harga)?>
										<!-- <span>Leasehold</span> -->
								</div>
								<!-- <div class="real-estate-item-info clearfix">
								<a href="#">
									<i class="icon-line-stack-2"></i>
								</a>
								<a href="#">
									<i class="icon-line-heart"></i>
								</a>
							</div> -->
							</div>

							<div class="real-estate-item-desc">
								<h3>
								<a href="<?=base_url('pasar/' . $product->slug)?>">
										<?=$product->nama?>
									</a>
								</h3>
								<span>
									<?=getExcerpt($product->deskripsi, 10)?>
								</span>

								<!-- <a href="#" class="real-estate-item-link">
								<i class="icon-info"></i>
							</a> -->

								<div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>

								<!-- <div class="real-estate-item-features t500 font-primary clearfix">
								<div class="row no-gutters">
									<div class="col-lg-4 nopadding">Beds:
										<span class="color">3</span>
									</div>
									<div class="col-lg-4 nopadding">Baths:
										<span class="color">3</span>
									</div>
									<div class="col-lg-4 nopadding">Area:
										<span class="color">150 sqm</span>
									</div>
									<div class="col-lg-4 nopadding">Pool:
										<span class="text-success">
											<i class="icon-check-sign"></i>
										</span>
									</div>
									<div class="col-lg-4 nopadding">Internet:
										<span class="text-success">
											<i class="icon-check-sign"></i>
										</span>
									</div>
									<div class="col-lg-4 nopadding">Cleaning:
										<span class="text-danger">
											<i class="icon-minus-sign-alt"></i>
										</span>
									</div>
								</div>
							</div> -->
							</div>
						</div>
					</div>
					<?php
				}
				?>

			</div>
		</div>

		<div class="clear"></div>

		<!-- <div class="promo promo-dark promo-flat bottommargin-lg">
			<h3 class="t400 ls1">Special Offers on Villa Long Term Rentals &amp; Lease Agreements</h3>
			<a href="#" class="button button-dark button-large button-rounded">Contact Now</a>
		</div> -->

		<!-- <div class="row real-estate-properties clearfix">

			<div class="col-lg-7">
				<a href="#" style="background: url('demos/real-estate/images/cities/4.jpg') no-repeat bottom center; background-size: cover;">
					<div class="vertical-middle dark center">
						<div class="heading-block nomargin noborder">
							<h3 class="capitalize t500">RW 01</h3>
							<span style="margin-top: 5px; font-size: 17px;">230 Rumah</span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-5">
				<a href="#" style="background: url('demos/real-estate/images/cities/2.jpg') no-repeat center center; background-size: cover;">
					<div class="vertical-middle dark center">
						<div class="heading-block nomargin noborder">
							<h3 class="capitalize t500">RW 02</h3>
							<span style="margin-top: 5px; font-size: 17px;">120 Rumah</span>
						</div>
					</div>
				</a>
			</div>

			<div class="col-lg-4">
				<a href="#" style="background: url('demos/real-estate/images/cities/3.jpg') no-repeat center center; background-size: cover;">
					<div class="vertical-middle dark center">
						<div class="heading-block nomargin noborder">
							<h3 class="capitalize t500">RW 03</h3>
							<span style="margin-top: 5px; font-size: 17px;">80 Rumah</span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4">
				<a href="#" style="background: url('demos/real-estate/images/cities/1.jpg') no-repeat center center; background-size: cover;">
					<div class="vertical-middle dark center">
						<div class="heading-block nomargin noborder">
							<h3 class="capitalize t500">RW 04</h3>
							<span style="margin-top: 5px; font-size: 17px;">310 Rumah</span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4">
				<a href="#" style="background: url('demos/real-estate/images/cities/5.jpg') no-repeat center center; background-size: cover;">
					<div class="vertical-middle dark center">
						<div class="heading-block nomargin noborder">
							<h3 class="capitalize t500">RW 05</h3>
							<span style="margin-top: 5px; font-size: 17px;">190 Rumah</span>
						</div>
					</div>
				</a>
			</div>

		</div> -->
		<div class="col_full clearfix">

			<div class="fancy-title title-border">
				<h3>Agenda Kegiatan</h3>
			</div>

			<div class="col-lg-12 col-md-12 topmargin bottommargin">
				<div id="posts" class="events small-thumbs">

					<?php
					foreach ($agendas as $agenda) {
					?>
						<div class="col_full">
							<div class="entry ">
								<div class="entry-image">
									<a href="#">
										<img src="<?php echo !empty($agenda->gambar) ? base_url($agenda->gambar) : base_url('assets/frontend/demos/real-estate/images/hero/3.jpg')?>"
										alt="<?=$agenda->judul?>">
										<div class="entry-date">
											<?=substr($agenda->tanggal_mulai,8,2)?>
												<span>
													<?=toNamaBulanPendek(substr($agenda->tanggal_mulai,5,2))?>
												</span>
										</div>
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2>
											<a href="<?=base_url('agenda/'.$agenda->slug)?>">
												<?=$agenda->judul?>
											</a>
										</h2>
									</div>
									<ul class="entry-meta clearfix">
										<li>
											<a href="#">
												<i class="icon-time"></i>
												<?=$agenda->tanggal_mulai?> -
													<?=$agenda->tanggal_akhir?>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="icon-map-marker2"></i>
												<?=$agenda->lokasi?>
											</a>
										</li>
									</ul>
									<div class="entry-content">
										<?=getExcerpt($agenda->deskripsi)?>
											<div class="clear"></div>
											<br>
											<a href="<?=base_url('agenda/'.$agenda->slug)?>" class="btn btn-danger">Selengkapnya</a>
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

		<div class="clear"></div>
		<div class="line topmargin-sm bottommargin-lg"></div>
		<div class="col_one_third">
			<div class="feature-box fbox-plain">
				<div class="fbox-icon">
					<a href="#">
						<i class="icon-realestate-my-house"></i>
					</a>
				</div>
				<h3 class="t400">Info Lingkungan</h3>
				<p>Info bla bla bla.</p>
			</div>
		</div>

		<div class="col_one_third">
			<div class="feature-box fbox-plain">
				<div class="fbox-icon">
					<a href="#">
						<i class="icon-realestate-calculator"></i>
					</a>
				</div>
				<h3 class="t400">Pasar Online</h3>
				<p>Pasar Online bla bla bla.</p>
			</div>
		</div>

		<div class="col_one_third col_last">
			<div class="feature-box fbox-plain">
				<div class="fbox-icon">
					<a href="#">
						<i class="icon-realestate-high-voltage"></i>
					</a>
				</div>
				<h3 class="t400">Kentongan</h3>
				<p>Kentongan bla bla bla.</p>
			</div>
		</div>

		<div class="clear"></div>

		<div class="col_one_third">
			<div class="feature-box fbox-plain">
				<div class="fbox-icon">
					<a href="#">
						<i class="icon-realestate-lock"></i>
					</a>
				</div>
				<h3 class="t400">Keamanan terjamin</h3>
				<p>Amannnnn.</p>
			</div>
		</div>

		<div class="col_one_third">
			<div class="feature-box fbox-plain">
				<div class="fbox-icon">
					<a href="#">
						<i class="icon-realestate-credit"></i>
					</a>
				</div>
				<h3 class="t400">Arisan</h3>
				<p>Arisan warga juga digunakan sebagai sarana komunikasi dan silaturahim.</p>
			</div>
		</div>

		<div class="col_one_third col_last">
			<div class="feature-box fbox-plain">
				<div class="fbox-icon">
					<a href="#">
						<i class="icon-realestate-calendar"></i>
					</a>
				</div>
				<h3 class="t400">Agenda Kegiatan</h3>
				<p>Agenda Bla Bla bla.</p>
			</div>
		</div>

	</div>

	<div class="row norightmargin topmargin bottommargin-lg common-height">
		<div id="headquarters-map" class="col-lg-5 gmap d-none d-md-block"></div>
		<div class="col-lg-3" style="background-color: #E5E5E5;">
			<div style="padding: 40px;">
				<h4 class="font-body t600 ls1">Kantor Kelurahan</h4>

				<div style="font-size: 15px; line-height: 1.7;">
					<address style="line-height: 1.7;">
						<strong>Jakarta:</strong>
						<br> Jalan Salemba Raya
						<br> Kampus UI, Jakarta Pusat 10430
						<br>
						<br>
						<abbr title="Phone Number">
							<strong>Phone:</strong>
						</abbr> 021-1234567
						<br>
						<abbr title="Email Address">
							<strong>Email:</strong>
						</abbr> informasi@sedulur.ga
					</address>

					<div class="clear topmargin-sm"></div>

					<h4 class="font-body t500" style="font-size: 17px; margin-bottom: 10px;">Waktu Pelayanan:</h4>

					<abbr title="Mondays to Fridays">
						<strong>Senin-Jum'at:</strong>
					</abbr> 08:00 - 17.00
					<br>
					<abbr title="Saturday">
						<strong>Sabtu:</strong>
					</abbr> 08:00 - 12.00
					<br>
					<abbr title="Sunday">
						<strong>Minggu:</strong>
					</abbr> Tutup
				</div>
			</div>
		</div>
		<div class="col-lg-4 bgcolor">
			<div class="col-padding">
				<div class="quick-contact-widget dark clearfix">

					<h3 class="capitalize ls1 t400">Ada Keluhan?</h3>

					<div class="quick-contact-form-result"></div>

					<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">

						<div class="form-process"></div>

						<input type="text" class="required sm-form-control input-block-level not-dark" id="quick-contact-form-name" name="quick-contact-form-name"
						value="" placeholder="Nama Lengkap" />

						<input type="email" class="required sm-form-control email input-block-level not-dark" id="quick-contact-form-email" name="quick-contact-form-email"
						value="" placeholder="Alamat Email" />

						<input type="text" class="required sm-form-control input-block-level not-dark" id="quick-contact-form-phone" name="quick-contact-form-phone"
						value="" placeholder="Telp" />

						<textarea class="required sm-form-control input-block-level not-dark short-textarea" id="quick-contact-form-message" name="quick-contact-form-message"
						rows="5" cols="30" placeholder="Apa keluhan anda?"></textarea>

						<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />

						<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-rounded button-light button-white nomargin"
						value="submit">Kirim Email</button>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>
