<div class="content-wrap">


	<div class="container clear-bottommargin clearfix">

		<div class="heading-block center">
			<img data-animate="fadeInLeftBig" src="<?=base_url()?>assets/frontend/images/kegiatan.gif" alt="kegiatan" class="center-block fadeInLeftBig animated">
			<h2>Agenda Kegiatan</h2>
			<span>Agenda Warga Lingkungan Kelurahan Sedulur</span>
		</div>



		<div class="row">

			<!-- <div class="col-lg-4 bottommargin">
				<img data-animate="fadeInLeftBig" src="<?=base_url()?>assets/frontend/images/kegiatan.gif" alt="kegiatan" class="center-block fadeInLeftBig animated">
			</div> -->

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

	</div>
</div>
