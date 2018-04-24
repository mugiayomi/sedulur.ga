<div class="content-wrap">
	<div class="single-event">

		<div class="entry-image parallax header-stick skrollable skrollable-between" style="background-image: url(<?php echo !empty($agenda->gambar) ? base_url($agenda->gambar) : base_url('assets/frontend/demos/real-estate/images/hero/3.jpg')?>); height: 600px; background-position: 0px 89.3417px;"
		data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
			<div class="entry-overlay-meta">
				<h2>
					<a href="#"><?=$agenda->judul?></a>
				</h2>
				<ul class="iconlist">
					<li>
						<i class="icon-calendar3"></i>
						<strong>Tanggal:</strong> <?=toIndoDate(substr($agenda->tanggal_mulai,0,10))?></li>
					<li>
						<i class="icon-time"></i>
						<strong>Waktu:</strong> <?=substr($agenda->tanggal_mulai,11,5)?> - <?=substr($agenda->tanggal_akhir,11,5)?></li>
					<li>
						<i class="icon-map-marker2"></i>
						<strong>Lokasi:</strong> <?=$agenda->lokasi?></li>
				</ul>
			</div>
			<div class="entry-overlay">
				<div id="event-countdown" class="countdown"></div>
			</div>
		</div>

		<div class="container topmargin clearfix">

			<div class="postcontent nobottommargin clearfix">

				<div class="col_full">

					<h3>Detil Agenda</h3>

					<?=$agenda->deskripsi?>

				</div>
				<a href="<?=base_url('agenda/')?>" class="btn btn-danger">Lihat Agenda Lainnya</a>

			</div>
			<h4>Lokasi</h4>

			<section id="event-location" class="gmap" style="height: 300px;"></section>

		</div>

	</div>
</div>
