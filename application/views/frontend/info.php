<div class="content-wrap" >


	<div class="container clear-bottommargin clearfix">

		<div class="heading-block center">
		<img data-animate="fadeInLeftBig" src="<?=base_url()?>assets/frontend/images/info.gif" alt="kegiatan" class="center-block fadeInLeftBig animated">
			<h2>informasi Penting</h2>
			<span>Dapatkan informasi penting di lingkungan kita.</span>
		</div>



		<div class="row">

			<!-- <div class="col-lg-4 bottommargin">
				<img data-animate="fadeInLeftBig" src="<?=base_url()?>assets/frontend/images/kegiatan.gif" alt="kegiatan" class="center-block fadeInLeftBig animated">
			</div> -->

			<div class="col-lg-12 col-md-12 topmargin bottommargin">
				<div id="posts" class="events small-thumbs">
				
				<?php
		foreach ($infos as $info) {
		?>
					<div class="col_full">
					<div class="entry ">
						<div class="entry-image">
							<a href="#">
								<img src="<?php echo !empty($info->gambar) ? base_url($info->gambar) : base_url('assets/frontend/demos/real-estate/images/hero/3.jpg')?>" alt="<?=$info->judul?>">
								<div class="entry-date"><?=substr($info->wk_rekam,8,2)?>
									<span><?=toNamaBulanPendek(substr($info->wk_rekam,5,2))?></span>
								</div>
							</a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h2>
									<a href="<?=base_url('info/'.$info->slug)?>"><?=$info->judul?></a>
								</h2>
							</div>
							<div class="entry-content">
								<?=getExcerpt($info->deskripsi)?>
								<div class="clear"></div><br>
								<a href="<?=base_url('info/'.$info->slug)?>" class="btn btn-danger">Selengkapnya</a>
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
